<?php

 session_start();
 ob_start(); //khởi taoh đối tượng header
 //có session_start(); là phải có ob
 if(!isset($_SESSION["giohang"])){
    $_SESSION["giohang"]=[];
 }
// // nhúng kết nối csdl
 include "model/connect.php";
include "model/user.php";
 include "model/catalog.php";
 include "model/product.php";
include "model/giohang.php";
include "model/donhang.php";
////////
$dssp_new= get_dssp_new(9);
include "view/header.php";
if(!isset($_GET["pg"])){
    
    include "view/home.php";
   

}else{
    $pg=$_GET["pg"];
 switch ($pg) {
    case 'about':
        include "view/about.php";
        break;
   
        
///
case 'blogs':
    $dsdm= catalog_all();
    if(!isset($_GET["iddm"])){
        $iddm=0;
    }
    else{
        $iddm=$_GET["iddm"];
    }
    $dssp= get_dssp($iddm,"");
    $tendm=load_ten_dm($iddm);
    include "view/blogs.php";
    break;

    
    case 'blog':
        $dsdm = catalog_all(); // Lấy tất cả các danh mục và lưu vào biến $dsdm
        
        // Kiểm tra xem có tham số "iddm" được truyền không
        if (!isset($_GET["iddm"])) {
            $iddm = 0; // Nếu không, gán giá trị mặc định là 0 cho $iddm
        } else {
            $iddm = $_GET["iddm"]; // Nếu có, lấy giá trị từ tham số "iddm"
        }
    
        $dssp = get_dssp($iddm, ""); // Gọi hàm get_dssp để lấy danh sách sản phẩm theo danh mục và lưu vào biến $dssp
        
    
            
            include "view/blog.php";
            break;
       

            case 'sp_chi_tiet':
                if(isset($_GET['idsp'])){
                    $id=$_GET['idsp'];
                    $spchitiet=get_sp_by_id($id);
                    $dsdm= catalog_all();
                     $iddm=$spchitiet['iddm'];
                     $splienquan=get_product_lienquan($iddm,$id);
                    include "view/sp_chi_tiet.php";
                }else{
                    include "view/home.php";
                }   
            break;
           
             case 'addcart':
                    if(isset($_POST["addcart"])){
                        $id_sp=$_POST["id_sp"];
                        $name=$_POST["name"];
                        $img=$_POST["img"];
                        $price=$_POST["price"];
                        $soluong=$_POST["soluong"];
                        $thanhtien= (int)$soluong * (int)$price;
                        $sp=array("id_sp"=>$id_sp,"name"=>$name,"img"=>$img,"thanhtien"=>$thanhtien,"soluong"=>$soluong,"price"=>$price);
                        array_push($_SESSION["giohang"],$sp);
                        // echo var_dump($_SESSION["giohang"]);
                        header('location: index.php?pg=viewcart');
                    }
    
                    // include "view/gioithieu.php";
                    break;
                    /////
                    case 'viewcart':
                        if(isset($_GET['del'])&&($_GET['del']==1)){
                            unset($_SESSION["giohang"]);
                            // $_SESSION["giohang"]=[];
                            header('location: index.php?pg=viewcart');
                        }else{
                            if(isset($_SESSION["giohang"])){
                                $tongdonhang=get_tongdonhang();
                            }
                                $giatrivoucher=0;
                            if(isset($_GET['voucher'])&&($_GET['voucher']==1)){
                                $tongdonhang=$_POST['tongdonhang'];
                                $mavoucher=$_POST['mavoucher'];
                                // so sanh với db để lấy giá trị về
                                $giatrivoucher=10;
                                
                            }
                            $thanhtoan=$tongdonhang - $giatrivoucher;
                            include "view/viewcart.php";
                        }
                    //////
                    break;
                    ////////
                    case 'delcart':
                    if(isset($_GET['ind'])&&($_GET['ind'])>=0){
                        array_splice($_SESSION['giohang'],$_GET['ind'],1 );
                        header('location: index.php?pg=viewcart');
                    }
                        include "view/viewcart.php";
                
                    break;
                    ///////


             case 'dangky':

                    include "view/dangky.php";
            
                break;
                case 'dangnhap':
                    include "view/dangnhap.php";
            
                break;

                case 'adduser':
                    // xác định giá trị input
                    if(isset($_POST["dangky"])&&($_POST["dangky"])){
                        $user=$_POST["user"];
                        $pass=$_POST["pass"];
                        $email=$_POST["email"];
                        $tell=$_POST["tell"];
                        // xử lý
                        user_insert($user, $pass, $email,$tell);
                    }
    
                    // 
                    include "view/dangnhap.php";
                    break;

                /////////
                case 'login':
                    // input
                    if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                        $user=$_POST["user"];
                        $pass=$_POST["pass"];
                   
                        //xl: kiem tra
                        $kq=checkuser($user,$pass);
                        if(is_array($kq)&&(count($kq))){ 
                            $_SESSION['s_user']=$kq;
                         if( $_SESSION['trang']=="sp_chi_tiet"){// click từ binhluan
                                header('location: index.php?pg=sp_chi_tiet&idsp='.$_SESSION['idsp'].'#binhluan');
                            }else{ // mac dinh
                                header('location: index.php');
                            }
                        }else{
                            $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai! ";
                            $_SESSION['tb_dangnhap']=$tb;
                            header('location: index.php?pg=dangnhap');
                        }
    
    
                        //out
                        
                    }
                    break;
                    case 'myaccount':
                        if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                            
                            include "view/myaccount.php";
                        }
                        
                        break;
                    case 'logout':
                        if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                            unset($_SESSION['s_user']);
                        }
                        header('location: index.php');
                        break;

                    ////////
                    case 'donhang':
                     
                
                        include "view/donhang.php";
                        break;
                   
                    case 'donhangsubmit':
                        if(isset($_POST['donhangsubmit'])){
                            $hoten=$_POST['hoten'];
                            $diachi=$_POST['diachi'];
                            $email=$_POST['email'];
                            $dienthoai=$_POST['dienthoai'];
                            $nguoinhan_ten=$_POST['hoten_nguoinhan'];
                            $nguoinhan_diachi=$_POST['diachi_nguoinhan'];
                            $nguoinhan_tel=$_POST['dienthoai_nguoinhan'];
                            $pttt=$_POST['pttt'];
                            //insert user mới
                            $user="gues".rand(1,999);
                            $pass="123456";
                    $iduser=user_insert2($user, $pass, $hoten, $email,$diachi,$dienthoai);
                         //taoj ddown hangf
                         $madh="zhope".$iduser."-".date("His-dmY");
                         $total=get_tongdonhang();
                         $ship=0;
                         if(isset($_SESSION['giatrivoucher'])){
                         $voucher=$_SESSION['giatrivoucher'];
                         }else{
                            $voucher=0;
                         }
                         $tongthanhtoan = ($total - $voucher) + $ship;
                         $id_bill=bill_insert_id($madh, $iduser,$hoten, $email,$dienthoai,$diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher, $tongthanhtoan,$pttt);
                          // insert giỏ hàng từ session từ tanle cart
                          foreach($_SESSION['giohang'] as $sp) {
                            extract($sp);
                            cart_insert($madh,$id_bill,$id_sp,$name,$img, $thanhtien, $soluong,$price);
                        
                    }
                    $_SESSION['giohang'] = null;
    
                         
                        }
                        include "view/donhang_configm.php";
                        
                        break;
                    /////////////////////
                    case 'donhang_configm':
                
                        include "view/donhang_configm.php";
                        break;
                default:
                include "view/home.php";
                    break;
        
 }
}




include "view/footer.php";

?>
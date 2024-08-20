<?php 
    ob_start();
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }else{
        $user_admin=$_SESSION['user'];
        $email_admin=$_SESSION['email'];
    }

    
    require_once('../model/connect.php');
    require_once('../model/catalog.php');
    require_once('../model/product.php');
    require_once('../model/global.php');
    require_once('../model/giohang.php');
    require_once('../model/user.php');
    require_once('public/head.php');
    require_once('public/nav.php');
    
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'home':
                require_once('public/home.php');
                break;
            case 'categories':
                $tb="";
               $cataloglist= get_catalog();
                require_once('public/categories.php');
                break;

                case 'search':
                    // lấy id và name từ form về
                  if(isset($_POST['btnsearch'])){
                    
                    $kyw=$_POST['kyw'];
                
                  }
                    //thực hiện update

                    //load lại catalog
                    $tb="";
                    $cataloglist= get_catalog($kyw);
                    require_once('public/categories.php');
                    break;
                  ////////////////

                case 'update_catalog':
                    // lấy id và name từ form về
                  if(isset($_POST['btnupdate'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    update_catalog($id,$name);
                  }
                    //thực hiện update

                    //load lại catalog
                    $tb="";
                    $cataloglist= get_catalog();
                    require_once('public/categories.php');
                    break;
                  ////////////////


                   case 'deletedm':
                    // lấy id về
                  
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id= $_GET['id'];
                       $tb=delete_dm($id);
                    }else{
                        $tb="";
                    }
                    //delete

                    //load lại categories
                    $cataloglist= get_catalog();
                    require_once('public/categories.php');
                    break;
                  
            
                    case 'addcatalog':
                        //thêm mới catalog
                    if(isset($_POST['btnadd'])){
                        $name=$_POST['name'];
                        insert_catalog($name);
                    }
                        // load lại catalog
                        $tb="";
                       $cataloglist= get_catalog();
                        require_once('public/categories.php');
                    
                        break;


                 case 'updatedmform':
                //lấy danh mục 
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id= $_GET['id'];
                   $detail=get_catalog_detail($id);
                }
                require_once('public/updatedmform.php');
                break;
            case 'updateproduct':

                //input
                if(isset($_POST['btnupdate'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $mo_ta=$_POST['mo_ta'];
                    
                    // laays hinh` ve
                    $ten_file_hinh=$_FILES['img']['name'];
                    if( $ten_file_hinh!=""){
                        
                        //upload hinh moi len host
                        $target_file ="../".PATH_IMG_PRODUCT.basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                         // xoa hinh xu~
                         $hinh_cu="../".PATH_IMG_PRODUCT.$_POST['hinhcu'];
                         if(file_exists($hinh_cu)) unlink($hinh_cu);
                        
                    }
                    // update vo db
                    update_product($id,$iddm,$name,$ten_file_hinh,$price,$mo_ta);
                }
                // if có cập nhật hình 
                // lấy hình upload lên host
                // xóa hình cũ

                // cập nhật vào db


                 // load ds product
                 $cataloglist=get_catalog();
                 $prolist= getnewproduct();
                 header('location: index.php?page=products');
                //  require_once('public/products.php');
               
                break;
            case 'updatespform':
                // kiểm tra và lấy id có trên URL không?
                // nếu có thì load thông tin cua id đó
                // load data
                $cataloglist=get_catalog();
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id= $_GET['id'];
                   $detail= get_product_detail($id);
                }

                    require_once('public/updatespform.php');
                
                    // lấy thêm id danh mục           
                break;
                case 'deletesp':
                    // lấy id về
                    // lấy tên file theo id
                    // xóa hình ảnh trên host nếu cong
                  
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id= $_GET['id'];
                      // xóa hình trước khi xóa record của bảng product
                       $ten_file_hinh=get_img_product($id);
                       $hinh="../".PATH_IMG_PRODUCT.$ten_file_hinh;
                       if (file_exists($hinh)) {
                        unlink($hinh);
                       }
                        //delete xóa record của bảng product
                        delete_product($id);
                    } 
                   

                    //load lại categories
                    $cataloglist=get_catalog();
                    $prolist= getnewproduct();
                
                    require_once('public/products.php');
                    break;
                  
            case 'products':
                // load ds product
                $cataloglist=get_catalog();
                $prolist= getnewproduct();
                
                require_once('public/products.php');
                break;
                ///
            case 'addsp':
                // lấy du liệu tu forrm
                if(isset($_POST['btnaddsp'])){
                    $iddm=$_POST['iddm'];
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $price2=$_POST['price2'];
                    $mo_ta=$_POST['mo_ta'];
                    // lấy hình
                    // if có hinh thì định vị thư mục upload
                    //upload lên
                    $img=$_FILES['img']['name'];
                    if($img!=""){
                        $hinh="../".PATH_IMG_PRODUCT.$img;
                        move_uploaded_file($_FILES["img"]["tmp_name"], $hinh);
                    }
                    
                }
               
                // add du liệu vao db
                add_product($iddm,$name,$price,$price2,$img,$mo_ta);
                    // load du liệu
                    $cataloglist=get_catalog();
                    $prolist= getnewproduct();
                    
                    require_once('public/products.php');
                    break;
            case 'users':

                $taikhoan_users= loadall_taikhoan();
                require_once('public/users.php');
                break;

                    ////////////////
                    case 'deleteusers':
                        // lấy id về
                      
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $id= $_GET['id'];
                           $tb=delete_users($id);
                        }else{
                            $tb="";
                        }
                        //delete
    
                        //load lại categories
                        $taikhoan_users= loadall_taikhoan();
                        require_once('public/users.php');
                        break;
                  //////////////////////////////////////////  
                  case 'addusers':
                    //thêm mới catalog
                if(isset($_POST['btnadd'])){
                    $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $role=$_POST['role'];
                        insert_users($user,$pass,$email,$role);
                }
                    // load lại catalog
                    $tb="";
                    $taikhoan_users= loadall_taikhoan();
                    require_once('public/users.php');
                
                    break;
            /////////////////////  

                    case 'update_users':
                        // lấy id và name từ form về
                    if(isset($_POST['btnupdate'])){
                        $id=$_POST['id'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $role=$_POST['role'];
                        update_users($id,$user,$pass,$email,$role);
                    }
                        //thực hiện update

                        //load lại catalog
                        $tb="";
                        $taikhoan_users= loadall_taikhoan();
                        require_once('public/users.php');
                        break;
                    ////////////////
                    case 'updateusersform':
               
              
                        //lấy danh mục 
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $id= $_GET['id'];
                           $detail=get_users_detail($id);
                        }
                        require_once('public/updateusersform.php');
                        break;
                /////////////////////////
                case 'bills':

                    $bills_donhang= loadall_donhang();
                    require_once('public/bills.php');
                    break;
          /////////////////////////////////////////////
          case 'deletebills':
            // lấy id về
          
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id= $_GET['id'];
               $tb=delete_bills($id);
            }else{
                $tb="";
            }
            //delete

            //load lại categories
            $bills_donhang= loadall_donhang();
            require_once('public/bills.php');
            break;
      //////////////////////////////////////////  
    //   case 'addbills':
    //     //thêm mới catalog
    // if(isset($_POST['btnadd'])){
    //        $madh=$_POST['madh'];
    //         $name=$_POST['name'];
    //         $soluong=$_POST['soluong'];
    //         $thanhtien=$_POST['thanhtien'];
    //         insert_bills($madh,$name,$thanhtien,$soluong);
    // }
    //     // load lại catalog
    //     $tb="";
    //     $bills_donhang= loadall_donhang();
    //     require_once('public/bills.php');
    
    //     break;
/////////////////////  

        case 'update_bills':
            // lấy id và name từ form về
        if(isset($_POST['btnupdate'])){
            $id=$_POST['id'];
            $madh=$_POST['madh'];
            $name=$_POST['name'];
            $soluong=$_POST['soluong'];
            $thanhtien=$_POST['thanhtien'];
            update_bills($id,$madh,$name,$soluong,$thanhtien);
        }
            //thực hiện update

            //load lại catalog
            $tb="";
            $bills_donhang= loadall_donhang();
            require_once('public/bills.php');
            break;
        ////////////////
        case 'updatebillsform':
   
  
            //lấy danh mục 
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id= $_GET['id'];
               $detail=get_bills_detail($id);
            }
            require_once('public/updatebillsform.php');
            break;
    /////////////////////////
            default:
                require_once('public/404.php');
        }
    }else{
        require_once('public/home.php');
    }
 
    require_once('public/footer.php');
?>
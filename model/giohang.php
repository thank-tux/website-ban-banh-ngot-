<?php
//admin
function loadall_donhang(){
   $sql="SELECT * FROM cart ORDER BY id DESC";
   $bills_donhang=get_all($sql);
   return $bills_donhang;
 }
 function delete_bills($id){
  
   $sql = "DELETE FROM cart WHERE id=".$id;
   delete($sql);

}
function insert_bills($madh,$name,$thanhtien,$soluong){
   $sql = "INSERT INTO cart(madh,name,thanhtien,soluong) VALUES ('$madh','$name','$thanhtien','$soluong')";
   insert($sql);
 }
 function update_bills($id,$madh,$name,$soluong,$thanhtien){
   $sql = "UPDATE cart SET madh='$madh' , name='$name', soluong='$soluong', thanhtien='$thanhtien' WHERE id=".$id;
   update($sql);
 }
 function get_bills_detail($id){
   $sql="SELECT * FROM cart WHERE id=".$id;
   return get_one($sql);
 }
//issert và giỏ hàng
function cart_insert($madh,$id_bill,$id_sp,$name,$img, $thanhtien, $soluong,$price){
   $sql = "INSERT INTO cart(madh,id_bill,id_sp,name,img, thanhtien, soluong,price) VALUES ('$madh','$id_bill','$id_sp','$name','$img', '$thanhtien','$soluong','$price')";
   return get_all($sql,$madh,$id_bill,$id_sp,$name,$img, $thanhtien,$soluong, $price);
}  


   function viewcart(){
    $html_cart='';
    $i=1;
    foreach ($_SESSION['giohang'] as $sp) {
       extract($sp);
       $linkdel="index.php?pg=delcart&ind=".$i;
       $tt=(Int)$price*(Int)$soluong;
       $html_cart.='
                      <tr>
                      <td>'.$i.'</td>
                      <td><img src="uploads/product/'.$img.'" alt="" style="width:100px"></td>
                      <td>'.$name.'</td>
                      <td>'.$price.'</td>
                      <td>'.$soluong.'</td>
                      <td>'.$tt.'</td>
                      <td><a href="'.$linkdel.'">Xóa</a></td>
                </tr>
                      ';
       $i++;
    }
    return $html_cart;
 }
 function get_tongdonhang(){
    $tong=0;
    foreach ($_SESSION['giohang'] as $sp) {
       extract($sp);
       $tt=(Int)$price*(Int)$soluong;
       $tong+=$tt;
    }
    return $tong;
 }


?>
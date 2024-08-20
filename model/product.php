<?php
// get all
 require_once 'connect.php';

function getnewproduct($idcatalog=0,$kyw=""){
   $sql="SELECT * FROM sanpham WHERE 1";
   if($idcatalog>0){
      $sql.=" AND iddm=".$idcatalog;
   }
   if($kyw!=""){
      $sql.=" AND name like '%".$kyw."%'";
   }
   $sql.=" ORDER BY id DESC";
   return get_all($sql);
}
function getsaleproduct(){
   $sql="SELECT * FROM product WHERE promotion>0 ORDER BY promotion DESC";
   return get_all($sql);
}
function getviewproduct(){
   $sql="SELECT * FROM product WHERE view>0 ORDER BY view DESC";
   return get_all($sql);
}
function getfeatureproduct(){
   $sql="SELECT * FROM product WHERE new=1 ORDER BY id DESC";
   return get_all($sql);
}
function get_related_product($idcatalog,$idproduct){
   $sql="SELECT * FROM product WHERE idcatalog=".$idcatalog." AND id<>".$idproduct." ORDER BY id DESC";
   return get_all($sql);
}
// get one record
function get_product_detail($idproduct){
   $sql="SELECT * FROM sanpham WHERE id=".$idproduct;
   return get_one($sql);
}

function update_product($id,$iddm,$name,$ten_file_hinh,$price,$mo_ta){
   if($ten_file_hinh!=""){
      $sql = "UPDATE sanpham SET name='$name' , img='$ten_file_hinh' , price='$price',mo_ta='$mo_ta', iddm='$iddm' WHERE id=".$id;
   }else{
      $sql = "UPDATE sanpham SET name='$name' , price='$price',mo_ta='$mo_ta', iddm='$iddm' WHERE id=".$id;
   }
  
   update($sql);
}
// get value
function get_idcatalog($idproduct){
   $sql="SELECT iddm FROM sanpham WHERE id=".$idproduct;
   $getone=get_one($sql);
   extract($getone);
   return $idcatalog;
}

function get_img_product($idproduct){
   $sql="SELECT img FROM sanpham WHERE id=".$idproduct;
   $getone=get_one($sql);
   extract($getone);
   return $img;
}
// check khoa ngoai
function check_catalog($idcatalog){
   $sql="SELECT * FROM sanpham WHERE iddm=".$idcatalog;
  $prolist=get_all($sql);
   return count($prolist);
}
function delete_product($id){
   $sql = "DELETE FROM sanpham WHERE id=".$id;
    delete($sql);
}
function add_product($iddm,$name,$price,$price2,$img,$mo_ta){
   $sql = "INSERT INTO sanpham (iddm, name, img, price, price2, mo_ta)
   VALUES ('$iddm', '$name', '$img', '$price', '$price2','$mo_ta')";
     insert($sql);
}


/// trang chu

function load_ten_dm($iddm){
   $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
   $danhmuc=get_one($sql);
   extract($danhmuc);
   return $name;
}
function get_dssp_new($limi){
   $sql = "SELECT * FROM sanpham ORDER BY id DESC limit ".$limi;
  return get_all($sql);
}
///
function get_dssp($iddm,$kyw=""){
   $sql = "SELECT * FROM sanpham WHERE 1";  
   if($kyw!=""){
      $sql.=" AND name like '%".$kyw."%'";
   }
   if($iddm>0){
             $sql .=" AND iddm='".$iddm."'";
          }
   $sql.=" ORDER BY id DESC limit 6";
  return get_all($sql);
}
//
function get_sp_by_id($id){
   $sql = "SELECT * FROM sanpham WHERE id=".$id;
   return get_one($sql, $id);
}
//
function get_product_lienquan($iddm,$id){
   $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id<>".$id." ORDER BY id DESC limit 4";
   return get_all($sql,$iddm,$id);
}
?>
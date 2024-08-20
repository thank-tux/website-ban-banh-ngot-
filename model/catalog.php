<?php
//// trang chu

   function catalog_all(){
      $sql="SELECT * FROM danhmuc ORDER BY id DESC";
      return get_all($sql);
   }
   //show danh mục lên
   function show_catalog($dsdm){
      $html_catalog='';
      foreach ($dsdm as $dm) {
         extract($dm);
         $link='index.php?pg=blogs&iddm='.$id;
         $html_catalog.='  <div class="col-sm-2 col-3" >
         <a href="'. $link.'"  style=" color: black;   font-weight: 700; text-transform: uppercase;   ">
         '.$name.'</a> </div>';
      }
      return $html_catalog;
   }
   
   // admin//////
   function get_catalog($kyw=""){
      $sql="SELECT * FROM danhmuc WHERE 1";
     
      if($kyw!=""){
         $sql.=" AND name like '%".$kyw."%'";
      }
      $sql.=" ORDER BY name";
      return get_all($sql);
   }
   function get_catalog_detail($id){
      $sql="SELECT * FROM danhmuc WHERE id=".$id;
      return get_one($sql);
   }
   function  update_catalog($id,$name){
      $sql = "UPDATE danhmuc SET name='$name' WHERE id=".$id;
      update($sql);

   }
   // 

   function delete_dm($id){
     // kiem tra id này có là khioas ngoại không
  $checkcatalog=check_catalog($id);

   if( $checkcatalog>0){
      $tb="Đây là khóa ngoại không đc phép xóa!";
   }else{
      $sql = "DELETE FROM danhmuc WHERE id=".$id;
      delete($sql);
      $tb="xóa thành công!";
   }
return $tb;

   }

   function insert_catalog($name){
      $sql = "INSERT INTO danhmuc (name) VALUES ('$name')";
      insert($sql);
   }
 
?>
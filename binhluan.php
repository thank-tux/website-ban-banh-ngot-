

<?php
 session_start();

 include "model/connect.php";
 include "model/binh_luan.php";
 
  if(isset($_GET['idsp'])){
    // echo $_GET['idsp'];
    $idsp=$_GET['idsp'];
     }
    if(isset($_POST['guibinhluan'])){
      $id_sp=$_POST['idsp'];
      $nd=$_POST['nd'];
      $ngay_bl=date('H:i:s - d/m/Y');
      $iduser=$_SESSION['s_user']['id'];
      // $hoten=$_POST['hoten'];
      binhluan_insert($iduser, $id_sp, $nd, $ngay_bl);
    }
    $dsbl=binhluan_select_all();
    $html_bl='';
    foreach ($dsbl as $bl) {
      extract($bl);
      if($nd>0){
      $html_bl.='<p>'.$nd.'
      <br>'.$iduser.' - ('.$ngay_bl.')
        </p>';
      }
     
     
    }
?>
   

  <h1>BÌNH LUẬN</h1>
  <?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){

?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <!-- <input type="text" name="name"> -->
        <input type="hidden" name="idsp" value="idsp">
        <textarea name="nd" id="" cols="100%" rows="3"></textarea>
        <br>
        <div >
        <button style="  color: #f4efef;
    font-weight: bold;
    width: 100px;
    border: 1px #1f0874 dotted;
    border-radius: 5px;
    padding: 10px 0px;
    background-color: #04AA6D;" type="submit" name="guibinhluan">Gửi bình luận</button>
        </div>
        </form>
      

<?php
 }else{
  $_SESSION['trang']="sp_chi_tiet";
  $_SESSION['idsp']= $_GET['idsp'];
   

 
?>
<div
class="bl">
 <h3> <a style="   text-decoration: none; color:red; " href='index.php?pg=dangnhap' target='_parent'>Bạn vui lòng đăng nhập</a> </h3>
  </div>
  <?php
}
?>
<div class="dsbl">
 <?=$html_bl?>
</div>

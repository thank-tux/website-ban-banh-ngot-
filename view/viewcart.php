<?php
 $html_cart=viewcart();

?>

<div class="main-banner2" id="home">
       </div>
     <ol class="breadcrumb">
           <li class="breadcrumb-item">
               <a href="index.php?ph=home">Home</a>
           </li>
           <li class="breadcrumb-item active">Blogs</li>
       </ol>
       
<section class="ab-info-main py-5">
<div class="container py-lg-3">
    <div class="ab-info-grids">
        <div id="products" class="row view-group">         


     <section class="containerfull">
   <div class="container">
        <div class="col9 viewcart">
                <h2>Đơn hàng</h2>
                <br>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart?>
            </table>
            <a href="index.php?pg=viewcart&del=1">Xóa rỗng đơn hàng</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <br>
            <div class="total">
                <h4>Tổng: <?=$tongdonhang?></h4>
            </div>
            <div class="coupon">
               <form action="index.php?pg=viewcart&voucher=1" method="post">
                  <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                  <br>
                  <input type="text" name="mavoucher" placeholder="Nhập voucher">
                  <br>
                  <button type="submit">Áp mã</button>
                  <br>
                </form>
            </div>
            <div class="total">
                <h4>Tổng thanh toán: <?=$thanhtoan?></h4>
            </div>
            <a href="index.php?pg=donhang">
            <button>Tiếp tục đặt hàng</button>
            </a>
           
        </div>
  </div>
            </section>
        
</div> 
 </div> 
    </div>
    </section>

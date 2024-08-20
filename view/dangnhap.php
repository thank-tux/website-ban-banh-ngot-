
<div class="main-banner2" id="home">
       </div>
<section class="ab-info-main py-5">
        <div class="container py-lg-3">
            <div class="ab-info-grids">
                <div id="products" class="row view-group">
                 
<div class="containerfull">
    <section class="containerfull">
        <div class="container">
            <!-- <div class="boxleft mr2pt menutrai">
                <h2>DÀNH CHO BẠN</h2><br><br>
                <a href="#">Cập nhật thông tin</a>
                <a href="#">Lịch sử mua hàng</a>
                <a href="#">Thoát hệ thống</a>
            </div> -->
            <div class="boxright">
                <h2>ĐĂNG NHẬP</h2><br>
                <div class="containerfull mr30">
                  <h2 style="color:red">
                  <?php
                           if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                              echo $_SESSION['tb_dangnhap'];
                              unset($_SESSION['tb_dangnhap']);
                           } 
                           
                  ?>
                  </h2>
                <form action="index.php?pg=login" method="post">
                     <div class="row">
                        <div class="col-25">
                           <label for="username">Tên đăng nhập</label>
                        </div>
                        <div class="col-75">
                           <input type="text" id="username" name="user" placeholder="Nhập tên đi">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-25">
                           <label for="password">Mật khẩu</label>
                        </div>
                        <div class="col-75">
                           <input type="password" id="password" name="pass" placeholder="Nhập mật khẩu..">
                        </div>
                     </div>
                     
                     
                     
                     <br>
                     <div class="row">
                        
                        <input type="submit" name="dangnhap" value="Đăng nhập">
                     </div>
                     </form>
                    
                </div>
            </div>


        </div>
    </section>
    </div> 
            </div> 
        </div>
    </section>
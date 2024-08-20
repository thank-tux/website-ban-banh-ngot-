<?php
 $html_dssp_new='';
foreach ($dssp_new as $sp) {
    extract($sp);
    $link='index.php?pg=sp_chi_tiet&idsp='.$id;
    $html_dssp_new.='
    <div class="col-md-4 product-men">
        <div class="product-shoe-info shoe text-center">
            <div class="men-thumb-item">
            <a href="'.$link.'" >  <img src="uploads/product/'.$img.'" class="img-fluid" alt=""></a>
               
                <form action="index.php?pg=addcart" method="post" >
                            <input type="hidden" name="id_sp" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="soluong" value="1">
                                <span class="product-new-top"><button type="submit" name="addcart"><strong>Đặt hàng</strong></button></span>
                            </form>
            </div>
            <div class="item-info-product">
                <h4>
                    <a href="shop-single.html">'.$name.' </a>
                </h4>

                <div class="product_price">
                    <div class="grid-price">
                        <span class="money">'.$price.'đ</span>
                    </div>
                </div>
                <ul class="stars">
                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
    </div>';
}


?>
<div class="main-banner3" id="home">
       
        <!--/banner-->
        <div class="banner-info">
            <!-- <p>Xu hướng </p> -->
            <h3 class="mb-4">Pastry shop</h3>
            <div class="ban-buttons">
                <a href="index.php?pg=blog" class="btn">Đặt ngay</a>
                <!-- <a href="index.php?pg=about" class="btn active"></a> -->
            </div>
        </div>
        <!--// banner-inner -->

    </div>
   
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Sản phẩm mới</h3>
             <div class="row">
             <?=$html_dssp_new?>
               <!-- ///////////////////////////////////////home/////////////////////// -->
            </div> 

        </div> 
    </section>
    <!-- //ab -->
    <!--/testimonials-->
    <section class="testimonials py-5">
        <div class="container">
            <div class="test-info text-center">
                <h3 class="my-md-2 my-3">Đánh giá</h3>

                <ul class="list-unstyled w3layouts-icons clients">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
                <p><span class="fa fa-quote-left"></span> Trang web được thiết kế rất chuyên nghiệp và thân thiện với người dùng. Giao diện sạch sẽ, dễ sử dụng và tìm kiếm sản phẩm thuận tiện. Hình ảnh sản phẩm rõ ràng, mô tả chi tiết, và quy trình thanh toán nhanh chóng giúp tôi tiết kiệm thời gian và nỗ lực.

<span class="fa fa-quote-right"></span></p>

            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Sản phẩm phổ biến</h3>
            <div class="row">
                <div class="col-md-6 latest-left">
                    <div class="product-shoe-info shoe text-center">

                        <a href="index.php?pg=blog" class="btn"><img src="public/images/11.jpeg" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 latest-right">
                    <div class="row latest-grids">
                        <div class="latest-grid1 product-men col-12">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <a href="index.php?pg=blog" class="btn"><img src="public/images/12.jpeg" class="img-fluid" alt=""></a>

                                </div>
                            </div>
                        </div>
                        <div class="latest-grid2 product-men col-12 mt-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <a href="index.php?pg=blog" class="btn"><img src="public/images/13.jpeg" class="img-fluid" alt=""></a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    
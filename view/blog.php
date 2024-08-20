
<?php
  $html_catalog=show_catalog($dsdm); 

 $html_dssp='';
 foreach ($dssp as $sp) {
    extract($sp);
    $link='index.php?pg=sp_chi_tiet&idsp='.$id;
    $html_dssp.=' <div class="item col-lg-4">
    <div class="thumbnail card">
        <div class="img-event">
           <a href="'.$link.'" > <img class="group list-group-image img-fluid" src="uploads/product/'.$img.'" alt="" style=" width:" /></a>
        </div>
        <div class="caption card-body">
            <h4 class="group card-title inner list-group-item-heading">
                '.$name.'</h4>
            <p class="group inner list-group-item-text">'.$mo_ta.'</p>
            <div class="row">
                <div class="col-6">
                    <p class="lead">
                        '.$price.'đ</p>
                </div>
                <form action="index.php?pg=addcart" method="post" class="col-6 ban-buttons">
                            <input type="hidden" name="id_sp" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="soluong" value="1">
                                <button class="btn btn-course" type="submit" name="addcart">Đặt hàng</button>
                            </form>
            </div>
        </div>
    </div>
</div>';
 }

 ?>
     <!-- <div class="col-6 ban-buttons">
                    <a class="btn btn-course" href="#">View More</a>
                </div> -->
 
 <!---->
  <div class="main-banner2" id="home">
       
    </div>
  <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?pg=home">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Sản phẩm</li>
    </ol>
    <!---->
    <!--// mian-content -->

    <section class="brands py-52"  style="  background: rgba(136, 119, 119, 0.133);  padding:1em; height:4em;">
        <div class="container py-lg-0">
            <div class="row text-center brand-items" style=" float:center;" >
            <?=$html_catalog?>
           
        </div>
    </section>
    <!-- brands -->
    <!-- banner -->
    <section class="ab-info-main py-5">
        <div class="container py-lg-3">
            <div class="ab-info-grids">
                <h3 class="tittle text-center mb-lg-5 mb-3">SẢN PHẨM</h3>
                <div id="products" class="row view-group">
               <?=$html_dssp?>
                
                </div> 
            </div> 
        </div>
    </section>
    <!-- //banner -->
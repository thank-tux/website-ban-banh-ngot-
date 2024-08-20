<?php
 $html_catalog=show_catalog($dsdm);
 
 $html_splq='';
 foreach ($splienquan as $sp) {
    extract($sp);
    $link='index.php?pg=sp_chi_tiet&idsp='.$id;
    $html_splq.=' <div class="box25 mr15 mb">
    <a href="'.$link.'"> <img src="uploads/product/'.$img.'" alt=""></a>
    <span class="price">'.$price.'đ</span>
    <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="id_sp" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="soluong" value="1">
                                <button type="submit" name="addcart">Đặt hàng</button>
                            </form>
</div>';
 }
   extract($spchitiet);

 
?>
<div class="main-banner2" id="home">
       
    </div>
    <section class="brands py-52"  style="  background: rgba(136, 119, 119, 0.133); padding:1em; height:4em; ">
        <div class="container py-lg-0">
            <div class="row text-center brand-items" style=" float:center;" >
            <?=$html_catalog?>
          
        </div>
        </div>
    </section>
<!-- /----------------------/// -->
    <section class="ab-info-main py-5">
        <div class="container py-lg-3">
            <div class="ab-info-grids">
            <h3 class="tittle text-center mb-lg-5 mb-3">SẢM PHẨM CHI TIẾT</h3>
                <div id="products" class="row view-group">
    <section class="containerfull">
        <div class="container">
            <div class="boxright">
                <div class="containerfull mr30">
                    <div class="col6 imgchitiet">
                        <img src="uploads/product/<?=$img?>" alt="">
                    </div>
                    <div class="col6 textchitiet">
                        <h3><?=$name?></h3>
                        <h5><?=$price?>đ</h5>
                        <hr>
                     
                        <div width="50%"> 
                            <h6 ><?=$mo_ta?></h6>
                     </div>
                       
                        <br>
                        
                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="id_sp" value="<?=$id?>">
                                <input type="hidden" name="name" value="<?=$name?>">
                                <input type="hidden" name="img" value="<?=$img?>">
                                <input type="hidden" name="price" value="<?=$price?>">
                                <input type="number" name="soluong" id="" min="1" value="1" max="10"><br>
                                <button type="submit" name="addcart">Đặt hàng</button>
                                
                            </form>
                            
                    </div>
                </div>
                <hr><div id="binhluan">
                <iframe src="binhluan.php?idsp=<?=$id?>" width="100%" height="500px" frameborder="0"></iframe>
                </div>
                <hr> 
                <h3>SẢN PHẨM LIÊN QUAN</h3>
                <div class="containerfull mr30">
                <?=$html_splq?>
                  
                </div>
                
            </div>


        </div>
    </section>
                
    </div> 
       </div> 
        </div>
    </section>
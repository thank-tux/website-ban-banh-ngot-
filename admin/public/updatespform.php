<?php

extract($detail);
$idsp=$id;
$tensp=$name;

$hinhanh="";
if($img!=""){
    $file_img="../".PATH_IMG_PRODUCT.$img;
    if(file_exists($file_img)){
        $hinhanh='<img src="'.$file_img.'" width="120">';
    }else{
        $hinhanh='Sản phẩm chưa có hình';
    }

}
//


///
$catalog_html='';
foreach ($cataloglist as $item) {
    extract($item);
    if($id==$iddm){
        $slc="selected";
    }else{
        $slc="";
    }
    $catalog_html.='  <option value="'.$id.'" '.$slc.'>'.$name.'</option>';
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <?php
                            // extract($detail);
                            // if($img!=""){
                            //     $hinh="<img src='../view/layout/assets/images/product/".$img."' width='150'>";
                            // }else{
                            //     $hinh="";
                            // }
                            // if($new==0){
                            //     $chknew='<input type="checkbox" name="chknew" id="" >';
                            // }else{
                            //     $chknew='<input type="checkbox" name="chknew" id="" checked>';
                            // }
                        ?>
                        <div class="card-body">
                        <form action="index.php?page=updateproduct" method="POST" enctype="multipart/form-data">
                         
                            <div class="modal-body">
                            <div class="mb-3">
                                    <div class="form-group">
                                        <label for="level" class="col-form-label">Chọn danh mục:</label>
                                        <select class="form-control select2" name="iddm">
                                            <option selected value="member">Danh mục</option>
                                          <?=$catalog_html?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" value="<?=$tensp?>" name="name" placeholder="Tên sản phẩm">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" value="<?=$price?>"  name="price" placeholder="Giá sản phẩm">
                                </div>
                               
                              
                                <div class="mb-3">
                                    <label for="topic-name" class="col-form-label">Hình ảnh</label>
                                    <input type="file" name="img" class="col-form-label">
                                    <br><?=$hinhanh?>
                                    
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="topic-name" class="col-form-label">Sản phẩm New</label>
                                 
                                </div> -->
                                
                                <div class="mb-3">
                                    <label for="topic-name" class="col-form-label">Mô tả</label>
                                    <textarea type="text" value="<?=$mo_ta?>" name="mo_ta" id="" cols="30" rows="5" style="width:100%; border:1px #CCC solid" class="col-form-label" ></textarea>                        
                                </div>
                                
                                
                            </div>
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="id" value="<?=$idsp?>">
                                <input type="hidden" name="hinhcu" value="<?=$img?>">
                                <button type="submit" name="btnupdate" class="btn btn-primary">Cập nhật</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
    extract($detail);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
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
                        <div class="card-body">
                            <form action="index.php?page=update_bills" method="POST">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">mã đơn hàng</label>
                                        <input type="text" class="form-control" name="madh" value="<?=$madh?>" placeholder="mã đh">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">tên đơn hàng</label>
                                        <input type="test" class="form-control" name="name" value="<?=$name?>" placeholder="tên">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Số lượng</label>
                                        <input type="text" class="form-control" name="soluong" value="<?=$soluong?>" placeholder="soluong">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">giá trị</label>
                                        <input type="text" class="form-control" name="thanhtien" value="<?=$thanhtien?>" placeholder="giá trị">
                                    </div>
                                
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" name="btnupdate" class="btn btn-primary">Cập nhật</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
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


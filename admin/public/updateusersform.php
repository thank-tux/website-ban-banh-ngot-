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
                    <h1>Thành viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thành viên</li>
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
                            <form action="index.php?page=update_users" method="POST">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Tài khoản</label>
                                        <input type="text" class="form-control" name="user" value="<?=$user?>" placeholder="Tài khoản">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">mật khẩu</label>
                                        <input type="password" class="form-control" name="pass" value="<?=$pass?>" placeholder="Mật khẩu">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">email</label>
                                        <input type="email" class="form-control" name="email" value="<?=$email?>" placeholder="Email">
                                    </div>
                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">role</label>
                                        <input type="text" class="form-control" name="role" value="<?=$role?>" placeholder="Vai trò">
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


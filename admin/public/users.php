<?php
    // cataloglist
    $users_html='';
    $i=1;
    foreach ($taikhoan_users as $user) {
        extract($user);
        $linkedit='<a href="index.php?page=updateusersform&id='.$id.'">Sửa</a>';
        $linkdel='<a href="index.php?page=deleteusers&id='.$id.'">Xóa</a>';
        $users_html.='<tr>
                            <td>'.$i.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$role.'</td>   
                            <td>'.$linkedit.' / '.$linkdel.' </td>
                        </tr>';
        $i++;
    }
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
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                    Thêm tài khoản
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên Đăng nhập</th>
                                        <th scope="col">Mật khẩu</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">vai trò</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                              <?=$users_html?>

                              </tbody>  
                    
                            
                            </table>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm thành viên mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addusers" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" name="user" placeholder="Tài khoản">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Role:</label>
                        <input type="text" class="form-control" name="role" placeholder="Vai trò">
                    </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnadd" class="btn btn-primary">Thêm</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
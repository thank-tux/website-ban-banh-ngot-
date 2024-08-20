<?php
    // cataloglist
    $bills_html='';
    $i=1;
    foreach ($bills_donhang as $bill) {
        extract($bill);
        $linkedit='<a href="index.php?page=updatebillsform&id='.$id.'">Sửa</a>';
        $linkdel='<a href="index.php?page=deletebills&id='.$id.'">Xóa</a>';
        $bills_html.='<tr>
                            <td>'.$i.'</td>
                            <td>'.$madh.'</td>
                            <td>'.$name.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$thanhtien.'</td>  
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
                    Thêm đơn hàng
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
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Tên đơn hàng</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Giá trị đơn hàng</th>
                                        <!-- <th scope="col">Tình trạng</th> -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                              <?=$bills_html?>

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

<!-- <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm đơn hàng </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mã đơn hàng:</label>
                        <input type="text" class="form-control" name="madh" placeholder="mã đh">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên đơn hàng:</label>
                        <input type="text" class="form-control" name="name" placeholder="tên">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Số lượng:</label>
                        <input type="text" class="form-control" name="soluong" placeholder="số lượng">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá trị đơn hàng:</label>
                        <input type="text" class="form-control" name="thanhtien" placeholder="giá trị">
                    </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnadd" class="btn btn-primary">Thêm</button>
                </div>
            </form>

        </div>
        /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> 
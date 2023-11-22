<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh mục</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh mục</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 4%">
                                    id
                                </th>
                                <th style="width: 30%">
                                    Tên sản phẩm
                                </th>
                                <th style="width: 10%">
                                    Số lượng
                                </th>
                                <th style="width: 10%">
                                    Đơn giá
                                </th>
                                <th style="width: 10%">
                                    Thành tiền
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hoadon as $hd) {
                                extract($hd);
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $ten ?>
                                    </td>
                                    <td>
                                        <?= $so_luong ?>
                                    </td>
                                    <td>
                                        <?= $gia?>
                                    </td>
                                    <td>
                                        <?= $thanh_tien ?>
                                    </td>
                                    <!-- <td class="project-actions text-right"> -->
                                        <!-- <a class="btn btn-primary btn-sm" href="index.php?act=dangchuanbi&&id=<?= $id ?>">
                                            <i class="fas fa-folder">
                                            </i>
                                            Chuẩn bị
                                        </a> -->
                                        <!-- <a class="btn btn-info btn-sm" href="index.php?act=suadanhmuc&&id=">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa mềm danh mục')" class="btn btn-danger btn-sm" href="index.php?act=xoadanhmuc&&id=">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a> -->
                                    <!-- </td> -->
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
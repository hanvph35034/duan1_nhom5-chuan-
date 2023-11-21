<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Người dùng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                            <li class="breadcrumb-item active">Người dùng</li>
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
                    <h3 class="card-title">Người dùng</h3>

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
                                <th style="width: 20%">
                                    Tên
                                </th>
                                <th style="width: 10%">
                                    Ảnh
                                </th>
                                <th style="width: 20%">
                                    email
                                </th>
                                <th style="width: 10%">
                                    Vai trò
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($nguoidung as $nd) {
                                extract($nd);
                                $linkimg = '../../view/img/' . $img_nguoi_dung;
                            ?>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $ten_nguoi_dung ?>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?= $linkimg ?>">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <?= $email_nguoi_dung ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($vai_tro == 1) {
                                        ?>
                                            <p>admin</p>
                                        <?php
                                        } else {
                                        ?>
                                            <p>người bán hàng</p>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td class="project-actions text-right">
                                        <!-- <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a> -->
                                        <a class="btn btn-info btn-sm" href="index.php?act=suanguoidung&&id=<?= $id ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a onclick="return confirm('xóa mềm người dùng')" class="btn btn-danger btn-sm" href="index.php?act=xoamemnguoidung&&id=<?= $id ?>">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>

                    </table>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=themnguoidung">Thêm người</a></button>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
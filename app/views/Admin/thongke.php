<?php
$daban = 0;
$tien = 0;
foreach($load_thongke as $tk){
    extract($tk);
    $daban += $so_luong_da_ban;
    $tien += $tong_tien;
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $daban ?></h3>

                                    <p>SẢN PHẨM ĐÃ BÁN</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">SẢN PHẨM ĐÃ BÁN</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= number_format($tien) ?><sup style="font-size: 20px"> đ</sup></h3>

                                    <p>TỔNG TIỀN</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">TỔNG TIỀN</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.d-flex -->
                    
                    <!-- /.d-flex -->
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                top
                            </th>
                            <th style="width: 4%">
                                id
                            </th>
                            <th style="width: 20%">
                                Tên
                            </th>
                            <th style="width: 10%">
                                Giá
                            </th>
                            <th style="width: 10%">
                                Đã bán
                            </th>
                            <th style="width: 10%">
                                Tổng tiền
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        foreach ($load_thongke as $tk) {
                            extract($tk);
                        ?>
                            <tr>
                                <td>
                                    <?= $i++?>
                                </td>
                                <td>
                                    <?= $id_sp ?>
                                </td>
                                <td>
                                    <?= $ten_san_pham ?>
                                </td>
                                <td>
                                    <?= number_format($gia) ?> đ
                                </td>
                                <td>
                                    <?= $so_luong_da_ban ?>
                                </td>
                                <td>
                                    <?= number_format($tong_tien) ?> đ
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Chi tiết đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="checkout_form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-4">
                                                    <form action="index.php?act=suatk" method="post">
                                                        <h3>Chi tiết đơn hàng </h3>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>

                                                                    <tr>
                                                                        <th>STT</th>
                                                                        <th>Tên </th>
                                                                        <th>Hình ảnh </th>
                                                                        <th>số lượng </th>
                                                                        <th>Giá </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $i = 1;
                                                                    foreach ($loadd1 as $row) {
                                                                        extract($row);
                                                                    ?>
                                                                        <tr>
                                                                            <td><?= $i++ ?></td>
                                                                            <td><?= $tensp ?></td>
                                                                            <td><img width="70px" height="70px" src="public/img/product/<?=$img_dai_dien ?>" alt=""></td>
                                                                                                                                                    
                                                                            <td><?= $so_luong ?></td>
                                                                            <td><?= number_format(($gia_sale)) ?></td>  
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                        
                                                        <h3>Thông tin người nhận</h3>
                                                            <div class="col-lg-6 mb-20">
                                                                <label style="font-size: 25px;" >Họ và tên <span>*</span> : <?= $ten ?></label>
                                                            </div>
                                                            <div class="col-12 mb-20">
                                                                <label style="font-size: 20px;">Địa chỉ <span>*</span>: <?= $diachi ?></label>
                                                            </div>



                                                            <div class="col-lg-6 mb-20">
                                                                <label style="font-size: 20px;">Số điện thoại<span>*</span>: <?= $sdt ?></label>
                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <label style="font-size: 20px;"> Địa chỉ Email <span>*</span>: <?= $email ?></label>
                                                            </div>

                                                        
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h3>Lịch sử đơn hàng </h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>STT</th>
                                            <th>Mã đơn hàng </th>
                                            <th>Ngày đặt </th>
                                            <th>Tổng tiền </th>
                                            <th>Trạng thái </th>
                                            <th>Xem</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($load_ct_dh as $row) {
                                            extract($row);
                                        ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $ma_dh ?></td>
                                                <td><?= $ngay_dat ?></td>
                                                <td><?= number_format(($tong_gia)) ?></td>
                                                <td>
                                                    <?php
                                                    if ($trangthai == 0) {
                                                        echo 'Chờ xác nhận';
                                                    } elseif ($trangthai == 1) {
                                                        echo 'Xác nhận';
                                                    } elseif ($trangthai == 2) {
                                                        echo 'Đang vận chuyển';
                                                    } elseif ($trangthai == 3) {
                                                        echo 'Đã giao thành công';
                                                    } else {
                                                        echo 'Trạng thái không xác định';
                                                    }
                                                    ?>
                                                </td>

                                                <td><a href="" class="view">view</a></td>
                                                <td><a href="?act=huysp&id=<?= $id ?>" class="view"><?php
                                                                                                    if ($trangthai == 0) {
                                                                                                        echo 'Hủy';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                    ?></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h4 class="billing-address">Billing address</h4>
                            <a href="#" class="view">Edit</a>
                            <p><strong>Bobby Jackson</strong></p>
                            <address>
                                House #15<br>
                                Road #1<br>
                                Block #C <br>
                                Banasree <br>
                                Dhaka <br>
                                1212
                            </address>
                            <p>Bangladesh</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->


<!--call to action start-->

<!--footer area end-->
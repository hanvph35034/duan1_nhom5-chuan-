<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
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
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Trang Tài Khoản</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn đặt hàng</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link">Quên mật khẩu</a></li>

                        </ul>
                    </div>
                </div>
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
                                                        <h3>Tài khoản của tôi </h3>
                                                        <div class="row">

                                                            <div class="col-lg-6 mb-20">
                                                                <label>Họ và tên <span>*</span></label>
                                                                <input name="user" type="text" value="<?= $tk['ten_dn'] ?>">
                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <label>Mat khau<span>*</span></label>
                                                                <input type="password" name="pass" value="<?= $tk['pass'] ?>">
                                                            </div>
                                                            <!-- <div class="col-12 mb-20">
                                                                <label>Company Name</label>
                                                                <input type="text">
                                                            </div> -->


                                                            <div class="col-12 mb-20">
                                                                <label>Địa chỉ <span>*</span></label>
                                                                <input name="diachi" value="<?= $tk['dia_chi'] ?>" placeholder="House number and street name" type="text">
                                                            </div>



                                                            <div class="col-lg-6 mb-20">
                                                                <label>Số điện thoại<span>*</span></label>
                                                                <input name="sdt" value=" <?= $tk['sdt'] ?>" type="text">

                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <label> Địa chỉ Email <span>*</span></label>
                                                                <input name="email" value="<?= $tk['Email'] ?>" type="text">

                                                            </div>


                                                            <div class="col-lg-3 mb-6">
                                                                <div class="order">
                                                                    <button name="btn" value="btn" type="submit">Cật nhật tài khoản</button>
                                                                </div>
                                                            </div>

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
                                            <th>CTDH</th>
                                            <th></th>
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
                                                  }
                                                  elseif ($trangthai == 4) {
                                                    echo 'Đơn hàng đã hủy';
                                                  }
                                                   else {
                                                    echo 'Trạng thái không xác định';
                                                  }
                                                ?>
                                                </td>
                                                
                                                <td><a href="?act=ctdh&id=<?=$id?>" class="view">Xem</a></td>
                                                <td><a href="?act=huysp&id=<?=$id?>" class="view"><?php
                                                if ($trangthai == 0) {
                                                    ?><a href="?act=huysp&id=<?=$id?>">Hủy</a>
                                                    <?php
                                                  } 
                                                  elseif ($trangthai == 2) {
                                                    ?><a href="?act=huysp&id=<?=$id?>">đã nhận đc hàng </a>
                                                    <?php
                                                  }
                                                   else {
                                                    echo '';
                                                  }
                                                ?></a></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
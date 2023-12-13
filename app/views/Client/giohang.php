<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-32">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <thead>

                                <tr>
                                    <th class="product_remove"> STT </th>
                                    <th class="product_remove">Xóa sản phẩm </th>
                                    <th class="product_thumb">Ảnh</th>
                                    <th class="product_name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product_quantity">Số lượng</th>
                                    <th class="product_total">Size</th>
                                    <th class="product_total">Tổng giá</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <?php if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                                        echo '<pre>';
                                        $id = 0;

                                        $tong = 0;
                                        // print_r($_SESSION['giohang']);
                                        foreach ($_SESSION['giohang'] as $row) {
                                            $sum = $row['3'] * $row['4'];
                                            $tong += $sum;

                                    ?><td><?= ($id + 1) ?></td>
                                            <td class="product_remove"><a href="?act=datelegiohang&id=<?= $id ?>"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="public/img/product/<?= $row['2'] ?>" alt="act"></a></td>
                                            <td class="product_name"><a href="#"><?= $row['1'] ?> </a></td>
                                            <td class="product-price">£<?= number_format($row['3']) ?></td>
                                            <td class="product_quantity"><label><?= $row[4] ?></label> </td>
                                            <td>S</td>

                                            <td class="product_total"><?= number_format($sum) ?>VND</td>
                                </tr>
                        <?php $id++;
                                        }
                                    } ?>
                            </tbody>


                        </table>
                    </div>
                    <div class="cart_submit">
                        <button type="submit"><a href="?act=sanpham">Tiếp tục mua hàng</a></button>
                    </div>
                    <div class="cart_submit">
                        <button type="submit"><a href="?act=datelegiohang">Xóa toàn bộ giỏ hàng </a> </button>
                    </div>
                </div>
            </div>
        </div>

        <!--coupon code area start-->
        <div class="coupon_area">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <style>
                        .hidden {
                            display: none;
                        }
                    </style>

                    <div class="coupon_code left">
                        <h3>PHIẾU MUA HÀNG</h3>
                        <div class="coupon_inner">
                            <p>Nhập mã phiếu giảm giá của bạn (nếu có).</p>
                            <?php
                            $updatingMessage = "Chức năng đang cập nhật xin lỗi vì trải nghiệm không vui";
                            $isUpdating = true; // Set this to true if the functionality is being updated

                            if ($isUpdating) {
                                echo '<input class="hidden" placeholder="Mã giảm giá" type="text" disabled>';
                                echo '<button type="button" onclick="alert(\'' . $updatingMessage . '\')">Đang cập nhật</button>';
                            } else {
                                echo '<input placeholder="Mã giảm giá" type="text">';
                                echo '<button type="submit">Áp dụng phiếu giảm giá</button>';
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-6">
                    <?php if (isset($_SESSION['user']['ten_dn'])) { ?>
                        <div class="coupon_code right">
                            <h3>Thông tin khách hàng</h3>

                            <form action="?act=thanh_toan" method="POST">

                                <div class="coupon_inner">
                                    <p>Họ và tên</p>
                                    <input style="width: 400px;" placeholder="Họ và tên" value="<?= $_SESSION['user']['ten_dn'] ?>" type="text" name="ten">
                                    <br>
                                    <span style="color: red;"> <?= is_error('ten') ?></span>
                                </div>
                                <div class="coupon_inner">
                                    <p>Địa chỉ </p>
                                    <input style="width: 400px;" placeholder="Nhập Địa chỉ " value="<?= $_SESSION['user']['dia_chi'] ?>" type="text" name="diachi">
                                    <br>
                                    <span style="color: red;"> <?= is_error('diachi') ?></span>
                                </div>
                                <div class="coupon_inner">
                                    <p>Email</p>
                                    <input style="width: 400px;" placeholder="Nhập email" value="<?= $_SESSION['user']['Email'] ?>" type="text" name="email">
                                    <br>
                                    <span style="color: red;"> <?= is_error('email') ?></span>
                                    <br>
                                </div>
                                <div class="coupon_inner">
                                    <p>Nhập Số điện thoại</p>
                                    <input style="width: 400px;" placeholder="Nhập số điện thoại" type="text" value="<?= $_SESSION['user']['sdt'] ?>" name="sdt">
                                    <br>
                                    <span style="color: red;"> <?= is_error('sdt') ?></span>
                                </div>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Tổng phụ</p>
                                        <p class="cart_amount">0</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Đang chuyển hàng</p>
                                        <p>Tộng cộng</p>
                                        <?php if (!empty($_SESSION['giohang'])) { ?>
                                            <p class="cart_amount"><?= number_format($tong) ?> VND</p>
                                        <?php } else { ?>
                                            <p class="cart_amount">0 VND</p>
                                        <?php } ?>
                                    </div>
                                    <a href="#">Tính toán vận chuyển</a>

                                    <div class="cart_subtotal">
                                        <p>Tộng cộng</p>
                                        <?php if (!empty($_SESSION['giohang'])) { ?>
                                            <p class="cart_amount"><?= number_format($tong) ?> VND</p>
                                        <?php } else { ?>
                                            <p class="cart_amount">0 VND</p>
                                        <?php } ?>
                                    </div>

                                    <div class="payment_method">
                                        <div class="panel-default">
                                            <input id="payment" name="pttt" type="radio" value="1" data-target="createp_account" checked />
                                            <label for="payment" data-bs-toggle="collapse" href="#method" aria-controls="method">Thanh toán khi nhận hàng</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Vui lòng gửi séc đến Tên cửa hàng, Phố cửa hàng, Thị trấn cửa hàng, Tiểu bang / Quận cửa hàng, Mã bưu điện cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>

                                        </form>

                                        <div class="panel-default">
                                        <input id="payment" name="pttt" type="radio" value="1" data-target="createp_account" checked />
                                        
                                            <label for="payment_defult" data-bs-toggle="collapse" href="#collapsedefult" aria-controls="collapsedefult" class="faded">
                                                Thanh toán bằng momo <img src="public/img/icon/papyel.png" alt="">
                                            </label>
                                            
                                            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="app/views/Client/xuly_momo.php">


                                          </form>
                                            <br>
                                          
                                        </div>

                                        <span style="color: red;"> <?= is_error('pttt') ?></span>
                                    </div>




                                    <div class="checkout_btn">
                                        <input type="hidden" value="<?= $tong ?>" name="tong">

                                        <button name="btn" value="btn">Thanh toán</button>
                                    </div>
                                </div>
                            

                        </div>
                </div>
            <?php } else { ?>
                <h3 style="color:red;">bạn phải đăng nhập để mua hàng</h3>
            <?php } ?>
            </div>
        </div>

    </div>
</div>
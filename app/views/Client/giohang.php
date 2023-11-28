<??>
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
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>

                                    <tr>
                                        <th class="product_remove">Xóa sản phẩm </th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                        <th>Màu </th>
                                        <th class="product_total">Size</th>
                                        <th class="product_total">Tổng giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    $tong = 0;
                                    foreach ($load_cart as $row) {

                                        extract($row);
                                        $sum = ($soluong * $gia_sale);
                                        $tong += $sum;
                                    ?>

                                        <tr>

                                            <td class="product_remove"><a href="?act=datelegiohang&idgh=<?= $idcart ?>"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="public/img/product/<?= $img_dai_dien ?>" alt="act"></a></td>
                                            <td class="product_name"><a href="#"><?= $ten ?> </a></td>
                                            <td class="product-price">£<?= number_format($gia_sale) ?></td>
                                            <td class="product_quantity"><label>Số lượng</label> <input min="1" max="100" value="<?= $soluong ?>" type="number"></td>
                                            <td>Màu</td>
                                            <td>S</td>

                                            <td class="product_total">£<?= number_format($sum) ?></td>

                                        </tr>

                                    <?php  }
                                    ?>




                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">Cập nhật giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>PHIẾU MUA HÀNG</h3>
                            <div class="coupon_inner">
                                <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                <input placeholder="Mã giảm giá" type="text">
                                <button type="submit">Áp dụng phiếu giảm giá</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>TỔNG SỐ GIỎ HÀNG</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Tổng phụ</p>
                                    <p class="cart_amount">£</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Đang chuyển hàng</p>
                                    <p class="cart_amount"><span>Tổng cộng:</span> £<?= number_format($tong) ?></p>
                                </div>
                                <a href="#">Tính toán vận chuyển</a>

                                <div class="cart_subtotal">
                                    <p>Tộng cộng</p>
                                    <p class="cart_amount">£<?= number_format($tong) ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="?act=thanh_toan">Tiến hành kiểm tra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
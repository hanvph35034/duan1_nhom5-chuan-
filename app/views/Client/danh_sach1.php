<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Ảnh và video </li>
                        <li>Danh mục của Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_reverse">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->

                <div class="shop_title">
                    <h1>Shop</h1>
                </div>
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>

                        <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                        <button data-role="grid_list" type="button" class="active btn-list" data-toggle="tooltip" title="List"></button>
                    </div>
                    <div class="">
                        <?php
                        if (isset($_GET['id']) && ($_GET['id'])) {
                            $iddm = $_GET['id'];
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="id" id="" value="<?= $iddm ?>">
                                <select name="tk" id="" style="width: 200px;">
                                    <option value="">--Lọc sản phẩm--</option>
                                    <option value="3">Hàng mới về</option>
                                    <option value="1">Giá tăng dần</option>
                                    <option value="2">Giá giảm dần</option>
                                </select>
                                <input type="submit" name="loc" placeholder="" value="Lọc" id="" style="width: 50px;">
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="page_amount">
                        <p>Hiện thị kết quả</p>
                    </div>
                </div>
                <!--shop toolbar end-->

                <div class="row shop_wrapper grid_list">
                    <?php
                    foreach ($sanpham as $sanpham) {
                        $linkimg_dai_dien = 'public/img/product/' .  $sanpham['img_dai_dien'];
                        $linkimg_1 = 'public/img/product/' .  $sanpham['img_1'];
                        $linkimg_2 = 'public/img/product/' .  $sanpham['img_2'];
                        $linkimg_3 = 'public/img/product/' .  $sanpham['img_3'];
                    ?>
                        <div class=" col-12 ">
                            <form action="index.php?act=giohang" method="POST">

                                <div class="single_product">
                                    <div class="product_name grid_name">

                                        <h3><a href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><?= $sanpham['ten'] ?></a></h3>
                                        <p class="manufacture_product"><a href="#">Accessories</a></p>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><img src="<?= $linkimg_dai_dien ?>" alt=""></a>
                                        <a class="secondary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><img src="<?= $linkimg_1 ?>" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">50 %</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="content_inner">
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_footer d-flex align-items-center">
                                                <div class="price_box">
                                                    <span class="current_price"> <?= number_format($sanpham['gia_sale']) ?>VND</span>
                                                    <span class="old_price"><?= number_format($sanpham['Gia']) ?>VND</span>
                                                </div>



                                                <input type="hidden" value="<?= $sanpham['Idsp'] ?>" name="id">
                                                <input type="hidden" value="<?= $sanpham['ten']  ?>" name="ten">
                                                <input type="hidden" value="<?= $sanpham['img_dai_dien'] ?>" name="img">
                                                <input type="hidden" value="<?= $sanpham['gia_sale'] ?>" name="gia">




                                                <div class="add_to_cart">
                                                <button type="submit" value="btn" name="btn"><span class="lnr lnr-cart"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="product_name">
                                                <h3><a href="product-details.html"><?= $sanpham['ten'] ?></a></h3>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="product_desc">
                                                <p><?= $sanpham['MoTa'] ?></p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="text_available">
                                                <p>Số lượng <span><?= $sanpham['so_luong'] ?></span></p>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price"> <?= number_format($sanpham['gia_sale']) ?>VND</span>
                                                <span class="old_price"><?= number_format($sanpham['Gia']) ?>VND</span>
                                            </div>
                                            <div class="product_variant quantity">
                                            <button class="button" name="btn" value="btn" type="submit">Thêm vào giỏ hàng </button>
                                            </div>
                                            <div class="action_links_btn">
                                                <ul>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="public/img/product/product1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="public/img/product/product2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="public/img/product/product3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="public/img/product/product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="public/img/product/product1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="public/img/product/product2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="public/img/product/product3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="public/img/product/product5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Handbag feugiat</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lpora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="1" max="100" step="2" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
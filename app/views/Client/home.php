<section class="slider_section slider_two mb-50">
    <div class="slider_area owl-carousel">
        <?php
        foreach ($loadbanner as $banner) {
            $linkimg = 'public/img/bg/' .  $banner['img'];
        ?>
            <div class="single_slider d-flex align-items-center" data-bgimg="<?= $linkimg ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2><?= $banner['tieu_de'] ?></h2>
                                <h1><?= $banner['tieu_de1'] ?></h1>
                                <a class="button" href="<?= $banner['limk'] ?>">mua sắm ngay bây giờ</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php

        }

        ?>

    </div>
</section>

<section class="banner_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_container">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="?act=chitietsp&idsp=11&iddm=1"><img src="public/img/bg/z4936326208611_a43ea2a1637737a33d7bb7aa9f756b7d.jpg" alt=""></a>
                            <div class="banner_text">
                                <h3>Dành cho 100 khách hàng đầu tiên</h3>
                                <h2>Ưu đại lớn khi mua 1 tặng 2</h2>
                                <a href="?act=chitietsp&idsp=11&iddm=1">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="?act=chitietsp&idsp=11&iddm=1"><img src="public/img/bg/44.png" alt=""></a>
                            <div class="banner_text">
                                <h3>Cuối năm Giảm 20% toàn bộ sản phẩm</h3>
                                <h2>Mua sản phẩm có ưa đại lớn </h2>
                                <a href="?act=chitietsp&idsp=11&iddm=1">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner area end-->

<!--product area start-->
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Sản phẩm </strong>bán chạy</span></h2>
                </div>
                <div class="product_carousel product_column4 owl-carousel">
                
                    <?php
                    
                   foreach ($loadsanpham as $sanpham) {

                        // $linkimg_dai_dien = 'public/img/product/' .  $sanpham['img_dai_dien'];
                        // $linkimg_1 = 'public/img/product/' .  $sanpham['img_1'];
                        // $linkimg_2 = 'public/img/product/' .  $sanpham['img_2'];
                        // $linkimg_3 = 'public/img/product/' .  $sanpham['img_3'];
                        extract($sanpham);
                    ?>

                        <div class="single_product">
                            <form action="index.php?act=giohang" method="POST">
                                <div class="product_name">
                                    <h3><a href="?act=chitietsp&idsp=<?= $Idsp ?>&iddm=<?= $id_dm ?>"><?= $ten ?> </a></h3>
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="?act=chitietsp&idsp=<?= $Idsp ?>&iddm=<?= $id_dm ?>"><img style="height: 250px; width: 250px" src="public/img/product/<?= $img_dai_dien ?>" alt=""></a>
                                    <a class="secondary_img" href="?act=chitietsp&idsp=<?= $Idsp ?>&iddm=<?= $id_dm ?>"><img style="height: 250px; width: 250px" src="public/img/product/<?= $img_1 ?>" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-47%</span>
                                    </div>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
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
                                            <span class="current_price"><?= number_format($gia_sale) ?>VND</span>
                                            <span class="old_price"><?= number_format($Gia) ?></span>
                                        </div>
                                        <div class="add_to_cart">
                                            <button type="submit" value="btn" name="btn"><span class="lnr lnr-cart"></span></button>
                                        </div>
                                    </div>
                                    <div class="quantity_progress">
                                        <p class="product_sold">Đã bán: <span>199</span></p>
                                        <p class="product_available">Số lượng: <span><?= $sanpham['so_luong'] ?></span></p>
                                    </div>
                                    <input type="hidden" value="<?= $Idsp ?>" name="id">
                                    <input type="hidden" value="<?= $ten ?>" name="ten">
                                    <input type="hidden" value="<?= $img_dai_dien ?>" name="img">
                                    <input type="hidden" value="<?= $gia_sale ?>" name="gia">
                                    <div class="bar_percent">
                                    </div>
                            </form>
                        </div>                      
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

   
</section>

<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Flale</strong>Sale</span></h2>
                </div>
                <div class="product_carousel product_column5 owl-carousel">

                    <?php
                    foreach ($loadsp_sale as $sanpham) {
                        $linkimg_dai_dien = 'public/img/product/' .  $sanpham['HinhDaiDien'];
                        $linkimg_1 = 'public/img/product/' .  $sanpham['Hinh1'];
                    ?>

                        <div class="single_product">
                        <form action="index.php?act=giohang" method="POST">
                            <div class="product_name">
                                <h3><a href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><?= $sanpham['TenSanPham'] ?> </a></h3>
                                <p class="manufacture_product"><a href="#"><?= $sanpham['TenDanhMuc'] ?></a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_dai_dien ?>" alt=""></a>
                                <a class="secondary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_1 ?>" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale"><a href="#"><?= $sanpham['PhanTramGiamGia'] ?>%</span>

                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="product_content">
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
                                        <span class="current_price"><?= number_format($sanpham['GiaSale']) ?>VND</span>
                                        <span class="old_price"><?= number_format($sanpham['GiaSale']) ?></span>
                                    </div>
                                    <div class="add_to_cart">
                                            <button type="submit" value="btn" name="btn"><span class="lnr lnr-cart"></span></button>
                                        </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Đã bán: <span>199</span></p>
                                    <p class="product_available">Số lượng: <span><?= $sanpham['SoLuong'] ?></span></p>
                                </div>
                                <input type="hidden" value="<?= $Idsp ?>" name="id">
                                    <input type="hidden" value="<?= $ten ?>" name="ten">
                                    <input type="hidden" value="<?= $img_dai_dien ?>" name="img">
                                    <input type="hidden" value="<?= $gia_sale ?>" name="gia">
                                <div class="bar_percent">
                                </div>
                                </form>
                            </div>
                         
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
</section>


<!--banner area start baner dưới-->
<section class="banner_area banner_static mb-50 d-flex align-items-center" data-bgimg="public/img/bg/banner-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_text">
                    <h2>Automotive Led</h2>
                    <h1>Headlight Kits</h1>
                    <p>HVC brings you only the best quality headlight kits</p>
                    <a href="shop.html">Khám phá ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner area end-->

<!--product area start-->
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2> <strong>Sản phẩm</strong> <span>giá rẻ</span></h2>
                </div>
                <div class="product_carousel product_column5 owl-carousel">
                    <?php
                    foreach ($loadspre as $sanpham) {
                        $linkimg_dai_dien = 'public/img/product/' .  $sanpham['img_dai_dien'];
                        $linkimg_1 = 'public/img/product/' .  $sanpham['img_1'];
                        $linkimg_2 = 'public/img/product/' .  $sanpham['img_2'];
                        $linkimg_3 = 'public/img/product/' .  $sanpham['img_3'];
                    ?>
                        <div class="single_product">
                        <form action="index.php?act=giohang" method="POST">
                            <div class="product_name">
                                <h3><a href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><?= $sanpham['ten'] ?> </a></h3>

                                <div class="product_thumb">
                                    <a class="primary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_dai_dien ?>" alt=""></a>
                                    <a class="secondary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>&iddm=<?= $sanpham['id_dm'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_1 ?>" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-47%</span>


                                    </div>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-bs-toggle="" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
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
                                            <span class="current_price"><?= number_format($sanpham['gia_sale']) ?>VND</span>
                                            <span class="old_price"><?= number_format($sanpham['Gia']) ?></span>
                                        </div>
                                        <div class="add_to_cart">
                                            <button type="submit" value="btn" name="btn"><span class="lnr lnr-cart"></span></button>
                                        </div>
                                    </div>
                                    <div class="quantity_progress">
                                        <p class="product_sold">Đã bán: <span>199</span></p>
                                        <p class="product_available">Số lượng: <span><?= $sanpham['so_luong'] ?></span></p>
                                    </div>
                                    <input type="hidden" value="<?= $Idsp ?>" name="id">
                                    <input type="hidden" value="<?= $ten ?>" name="ten">
                                    <input type="hidden" value="<?= $img_dai_dien ?>" name="img">
                                    <input type="hidden" value="<?= $gia_sale ?>" name="gia">
                                    <div class="bar_percent">

                                    
                                </div>
                                </form>
                            </div>
                           
                </div>
               
            </div>
            <?php }?>
        </div>

    </div>

</section>
<!--product area end-->

<!--brand area start thương hiệu-->
<div class="brand_area mb-42">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="public/img/brand/brand2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->

<!--blog area start-->
<section class="blog_section mb-50">
    <div class="container">
        <div class="row">
            <!-- Bài viết -->
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Bài </strong>Viết</span></h2>
                </div>
                <div class="blog_carousel blog_column4 owl-carousel">
                    <?php
                    foreach ($loadbaiviet as $baiviet) {
                        $linkimg1 = 'public/img/bai_viet/' . $baiviet['anh'];
                        $linkbv = 'index.php?act=baiviet1&&id=' . $baiviet['id'];
                    ?>
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="<?= $linkbv ?>"> <img style="height: 150px;" src="<?= $linkimg1 ?>" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="date_post">
                                    <span><?= $baiviet['ngay_dang'] ?></span>
                                </div>
                                <h3><a href="<?= $linkbv ?>"><?= $baiviet['tieu_de'] ?></a></h3>
                                <div class="blog_desc">
                                    <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
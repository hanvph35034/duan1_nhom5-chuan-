<section class="slider_section slider_two mb-50">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="public/img/slider/1.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h2>Chất lượng cao</h2>
                            <h1>Các bộ phận của bộ phận giảm xóc</h1>
                            <a class="button" href="shop.html">mua sắm ngay bây giờ</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="public/img/slider/2.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h2>Special Offer</h2>
                            <h1>Get &250 In Total Discount On A New Set Of Tries</h1>
                            <a class="button" href="shop.html">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="public/img/slider/3.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h2>HP Racer Skutex</h2>
                            <h1>Feel The Greatest Oil Power With Best One Oil</h1>
                            <a class="button" href="shop.html">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--slider area end-->

<!--banner area start-->
<!-- banner dưới -->
<section class="banner_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_container">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="public/img/bg/44.png" alt=""></a>
                            <div class="banner_text">
                                <h3>Mô tả 1</h3>
                                <h2>Mô tả 2</h2>
                                <a href="shop.html">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="public/img/bg/44.png" alt=""></a>
                            <div class="banner_text">
                                <h3>Mô tả 1</h3>
                                <h2>Mô tả 2</h2>
                                <a href="shop.html">Mua ngay</a>
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
            <!-- Sản phẩm bán chạy-->
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Sản phẩm </strong>bán chạy</span></h2>
                </div>
                <div class="product_carousel product_column4 owl-carousel">
                
<?php
foreach ($loadsanpham as $sanpham) {
    $linkimg_dai_dien = 'public/img/product/' .  $sanpham['img_dai_dien'];
    $linkimg_1 = 'public/img/product/' .  $sanpham['img_1'];
    $linkimg_2 = 'public/img/product/' .  $sanpham['img_2'];
    $linkimg_3 = 'public/img/product/' .  $sanpham['img_3'];
?>
                
                <div class="single_product">
                        <div class="product_name">
                            
                            <h3><a href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><?= $sanpham['ten'] ?> </a></h3>
                            <p class="manufacture_product"><a href="#">Danh mục sản phẩm</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_dai_dien?>" alt=""></a>
                            <a class="secondary_img" href="?act=chitietsp&idsp=<?= $sanpham['Idsp'] ?>"><img style="height: 250px; width: 250px" src="<?= $linkimg_1?>" alt=""></a>
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
                                    <span class="current_price"><?= number_format($sanpham['gia_sale']) ?>VND</span>
                                    <span class="old_price"><?= number_format($sanpham['Gia']) ?></span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Đã bán: <span>199</span></p>
                                <p class="product_available">Số lượng: <span><?= $sanpham['so_luong'] ?></span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div>
                    <?php

}

?>



<!-- 
                     <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Sản phẩm 2 </a></h3>
                            <p class="manufacture_product"><a href="#">Danh mục sản phẩm</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/bai_vietz4448826685784_dc04277bdd697bf0b3df7476e0b0dfea.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/4.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
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
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Đã bán: <span>199</span></p>
                                <p class="product_available">Số lượng: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">sản phẩm 3</a></h3>
                            <p class="manufacture_product"><a href="#">Danh muc sản phẩm</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/5.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/6.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$150.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">đã bán: <span>199</span></p>
                                <p class="product_available">Số lượng: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Sản phẩm 4</a></h3>
                            <p class="manufacture_product"><a href="#">Danh mục sản phẩm</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/8.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/9.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$175.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Đã bán: <span>199</span></p>
                                <p class="product_available">Số lượng: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/10.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/11.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-07%</span>
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
                                    <span class="current_price">$180.00</span>
                                    <span class="old_price">$420.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Sold: <span>199</span></p>
                                <p class="product_available">Availabe: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Accusantium dolorem the Security Camera</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/1.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/2.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Sold: <span>199</span></p>
                                <p class="product_available">Availabe: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Koss Porta Pro On Ear Bluetooth Speaker Headphones </a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/3.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/4.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$160.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                            <div class="quantity_progress">
                                <p class="product_sold">Sold: <span>199</span></p>
                                <p class="product_available">Availabe: <span>9800</span></p>
                            </div>
                            <div class="bar_percent">

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</section>
<!--product area end-->
<!-- bắt đầu khu vực danh mục nổi bật -->
<!--featured categories area start-->

<!--featured categories area end-->

<!--product area start-->
<!-- flase sale -->
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Flale</strong>Sale</span></h2>
                </div>
                <div class="product_carousel product_column5 owl-carousel">
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/5.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/6.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$180.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/7.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/8.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
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
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/9.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/10.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$150.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/11.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/12.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$175.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/1.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/3.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-07%</span>
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
                                    <span class="current_price">$180.00</span>
                                    <span class="old_price">$420.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/1.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/1.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/1.png1.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/1.png1.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
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
                                    <span class="regular_price">$160.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--product area end-->

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
                    <h2><span> <strong>Sản phẩm</strong>bán chạy</span></h2>
                </div>
                <div class="product_carousel product_column5 owl-carousel">



                <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img src="public/img/product/1.png" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img src="public/img/product/6.png" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
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
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                 
                </div>
            </div>
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
                    ?>
                    <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img style="height: 150px;" src="<?= $linkimg1 ?>" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="date_post">
                                    <span><?= $baiviet['ngay_dang'] ?></span>
                                </div>
                                <h3><a href="blog-details.html"><?= $baiviet['tieu_de'] ?></a></h3>
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

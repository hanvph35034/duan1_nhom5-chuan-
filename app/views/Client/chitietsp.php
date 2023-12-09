<style>
    .rating {
    width: 200px;
    max-width: 100%;
    display: flex;
    flex-direction: row-reverse;
}

.rating input {
    display: none;
}

.rating label {
    cursor: pointer;
    width: 25px;
    height: 25px;
    background-size: cover;
}

.rating input:checked~label {
    color: rgb(255, 0, 0);
}
</style>

<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="?act">Trang chủ</a></li>
                        <li><a href="">Cửa hàng</a></li>
                        <li><a href="">Quần áo</a></li>
                        <li>Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="public/img/product/<?= $loadone_sp['img_dai_dien'] ?>" data-zoom-image="public/img/product/<?= $loadone_sp['img_dai_dien'] ?>" alt="big-1">
                        </a>
                    </div>

                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="public/img/product/<?= $loadone_sp['img_1'] ?>" data-zoom-image="public/img/product/<?= $loadone_sp['img_1'] ?>">
                                    <img src="public/img/product/<?= $loadone_sp['img_1'] ?>" alt="zo-th-1" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="public/img/product/<?= $loadone_sp['img_2'] ?>" data-zoom-image="public/img/product/<?= $loadone_sp['img_2'] ?>">
                                    <img src="public/img/product/<?= $loadone_sp['img_2'] ?>" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="public/img/product/<?= $loadone_sp['img_3'] ?>" data-zoom-image="public/img/product/<?= $loadone_sp['img_3'] ?>">
                                    <img src="public/img/product/<?= $loadone_sp['img_3'] ?>" alt="zo-th-1" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="index.php?act=giohang" method="post">
                        <h1> <?= $loadone_sp['ten'] ?> </h1>
                        <div class="product_nav">
                            <ul>
                                <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class=" product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="review"><a href="#"> (customer review ) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            <span class="current_price"><?= '' . '$' . number_format($loadone_sp['gia_sale'])  ?></span>
                            <span class="old_price"><?= '' . '$' . number_format($loadone_sp['Gia'])  ?></span>

                        </div>
                        <div class="product_desc">
                            <p><?= $loadone_sp['MoTa'] ?> </p>
                        </div>
                        <div class="product_variant quantity">
                            <label>Số lượng</label>
                            <input min="1" max="<?= $loadone_sp['so_luong'] ?>" value="1" name="soluong" type="number">
                            <input type="hidden" value="<?= $loadone_sp['Idsp'] ?>" name="id">

                            <input type="hidden" value="<?= $loadone_sp['ten']  ?>" name="ten">
                            <input type="hidden" value="<?= $loadone_sp['img_dai_dien'] ?>" name="img">
                            <input type="hidden" value="<?= $loadone_sp['gia_sale'] ?>" name="gia">
                            <button class="button" name="btn" value="btn" type="submit">Thêm vào giỏ hàng </button>

                        </div>
                        <div class=" product_d_action">
                            <ul>
                                <li><a href="#" title="Add to wishlist">+ Thêm vào danh sách yêu thích</a></li>
                                <li><a href="#" title="Add to wishlist">+ So sách sản phẩm</a></li>
                            </ul>
                        </div>
                        <div class="product_meta">
                            <span>Danh mục: <a href="#">Quần áo</a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist" id="nav-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Bình Luận</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="reviews_wrapper">
                                <?php foreach ($loadd_bl as $row) {
                                    extract($row);

                                    echo '
                                <h2>1 bình luận cho sản phẩm</h2>
                                <div class="reviews_comment_box">
                                    <div class="comment_thmb">
                                        <img src="public/img/blog/comment2.jpg" alt="">
                                    </div>
                                    <div class="comment_text">
                                        <div class="reviews_meta">
                                            <div class="star_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <p><strong>' . $ten_nguoi_dung . '</strong>  ' . $ngay_binh_luan . '</p>
                                            <span>' . $noi_dung_binh_luan . '</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="comment_title">
                                    <h2>Thêm 1 bài đánh giá </h2>
                                   
                                </div>
                              
                                    ';
                                } ?>
                                <div class="product_ratting mb-10">
                                    <h3>Your rating</h3>
                                    <ul>
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating" value="5"><label for="star5">&#9733;</label>
                                            <input type="radio" id="star4" name="rating" value="4"><label for="star4">&#9733;</label>
                                            <input type="radio" id="star3" name="rating" value="3"><label for="star3">&#9733;</label>
                                            <input type="radio" id="star2" name="rating" value="2"><label for="star2">&#9733;</label>
                                            <input type="radio" id="star1" name="rating" value="1"><label for="star1">&#9733;</label>
                                        </div>
                                        <!-- <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li> -->
                                    </ul>
                                </div>
                                <div class="product_review_form">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" value="<?= $loadone_sp['Idsp'] ?>">
                                                <?php if (isset($_SESSION['user']['ten_dn'])) { ?>
                                                    <label for="review_comment">Đánh giá của bạn </label>
                                                    <textarea name="noidung" name="binhluan" id="review_comment"></textarea>
                                            </div>
                                        </div>

                                        <button value="btn" name="btn" type="submit">Gửi bình luận</button>
                                    <?php } else { ?>
                                        <h5 style="color:red;">bạn phải đăng nhập để comment</h5>
                                    <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start-->

<section class="product_area mb-50">
    <div class="container">
        <div class="section_title">
            <h2><span> <strong>Sản phẩm</strong>cùng loại</span></h2>
        </div>
        <div class="row">
        <?php foreach ($load_sp_dm as $row) {


        ?>
            <div class="col-md-3">
                <div class="single_product">
                    <div class="product_name">
                        <h3><a href="product-details.html"><?= $row['ten'] ?></a></h3>
                        <p class="manufacture_product"><a href="#">Quần áo</a></p>
                    </div>
                    <div class="product_thumb">
                        <a class="primary_img" href="product-details.html"><img style="height: 250px; width: 230px" src="public/img/product/<?= $row['img_dai_dien'] ?>" alt=""></a>
                        <a class="secondary_img" href="product-details.html"><img style="height: 250px; width: 230px" src="public/img/product/<?= $row['img_1'] ?>" alt=""></a>
                        <div class="label_product">
                            <span class="label_sale"><a href="#">50%</span>
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
                                <span class="current_price"><?= number_format($row['gia_sale']) ?></span>
                                <span class="old_price"><?= number_format($row['Gia']) ?></span>
                            </div>
                            <div class="add_to_cart">
                                <a href="" title="add to cart"><span class="lnr lnr-cart"></span></a>
                            </div>
                        </div>
                        <div class="quantity_progress">
                            <p class="product_sold">Đã bán: <span>199</span></p>
                            <p class="product_available">Số lượng: <span><?= $row['so_luong'] ?></span></p>
                        </div>
                        <div class="bar_percent">
                        </div>
                    </div>
                </div>
                </div>
        <?php } ?>
        </div>
    </div>

    </div>
</section>




<!-- modal area end-->

<!-- JS
============================================ -->
<!--jquery min js-->
<script src="public/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
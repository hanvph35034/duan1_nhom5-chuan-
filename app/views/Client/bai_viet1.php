
sản
 
    <!--Offcanvas menu area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="#">Bài Viết</a></li>
                            <li>Chi tiết bài viết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_details blog_padding mt-23">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                    <?php
if (isset($loadctbv) && is_array($loadctbv)) {
    // Lấy thông tin từ mảng $loadctbv
    $tieu_de = $loadctbv['tieu_de'];
    $anh = $loadctbv['anh'];
    $noi_dung = $loadctbv['noi_dung'];
    $ngay_dang = $loadctbv['ngay_dang'];
    // Tạo đường dẫn ảnh
    $linkimg1 = 'public/img/bai_viet/' . $anh;
    extract($loadctbv);
}
?>
                    
                        <div class="blog_thumb">
                            <a href="#"><img src="<?=$linkimg1?>" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3 class="post_title"><?=$tieu_de?></h3>
                            <div class="post_meta">
                                <span>|</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i>  <?=$ngay_dang?></span>

                            </div>
                            <div class="post_content">
                            <?=$noi_dung?>
                            </div>
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">, fashion</a></span>
                                    <span><a href="#">, t-shirt</a></span>
                                    <span><a href="#">, white</a></span>
                                </div>

                                <div class="social_sharing">
                                    <h3>share this post:</h3>
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>









                        <div class="related_posts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog3.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Gallery</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog4.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Audio</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related column_3">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog5.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Video</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="comments_box">
                            <h3>3 Comments </h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author" type="text">

                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email" type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website" type="text">
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </div> -->

                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <h3>Search</h3>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list widget_tag">
                            <h3>Tag products</h3>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">euro</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">hat</a></li>
                                    <li><a href="#">t-shirt</a></li>
                                    <li><a href="#">teen</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">white</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <h3>Recent Posts</h3>
                            <?php
                            foreach ($load4bv as $bv) {
                                $linkimg1 = 'public/img/bai_viet/' . $bv['anh'];
                        $linkbv = 'index.php?act=baiviet1&&id=' . $bv['id'];
                               ?>
                               <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="<?= $linkbv?>"><img style=" width: 80px; height: 50px; " src="<?= $linkimg1?>" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html"><?= $bv['tieu_de'] ?></a></h3>
                                    <span><?= $bv['ngay_dang'] ?></span>
                                </div>
                            </div>
                               <?php
                            }
                            ?>
                            <!-- <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog12.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog13.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog14.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Audio</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog15.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Video</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div> -->
                        </div>

                        <!-- <div class="widget_list comments_post">
                            <h3>Comments</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="widget_list widget_categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">WordPress</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->

    <!--call to action start-->
   
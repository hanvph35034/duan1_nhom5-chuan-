<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li> Bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="blog_page_section blog_sidebar blog_reverse mt-23">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <h3>Tìm kiếm</h3>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="widget_list widget_tag">
                        <h3>Sản phẩm được gắn thẻ</h3>
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
                        <h3>Bài viết gần đây</h3>




                        <?php
                        foreach ($load4bv as $bv) {
                            extract($bv);
                            $linkimg1 = 'public/img/bai_viet/' . $anh;
                            $linkbv = 'index.php?act=baiviet1&&id=' . $id;

                        ?>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="<?= $linkbv ?>"><img src="<?= $linkimg1 ?>" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="<?= $linkbv ?>"><?= $tieu_de ?></a></h3>
                                    <span><?= $ngay_dang ?></span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <!-- <div class="widget_list comments_post">
                            <h3>Comments</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="public/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="public/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="public/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>demo says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="public/img/blog/comment.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span>admin says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div> -->
                    <div class="widget_list widget_categories">
                        <h3>Danh mục</h3>
                        <ul>
                            <?php
                            foreach ($loaddm as $dm) {
                            ?>
                                <li><a href="#"><?= $dm['Danhmuc'] ?></a></li>
                            <?php
                            }
                            ?>
                            
                            <!-- <li><a href="#">Travel</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">WordPress</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="blog_wrapper">
<?php 
foreach ($loadbaiviet as $bv) {
    extract($bv);
    $linkimg1 = 'public/img/bai_viet/' . $anh;
    $linkbv = 'index.php?act=baiviet1&&id=' . $id;

?>


                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="<?= $linkbv ?>"><img src="<?= $linkimg1 ?>" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3><a href="<?= $linkbv ?>"><?= $tieu_de ?></a></h3>
                            <div class="blog_meta">
                                <span class="post_date"><i class="fa-calendar fa"></i> <?= $ngay_dang ?></span>
                                <span class="category">
                                </span>
                            </div>
                            <div class="blog_desc">
                                <p>Bí mật được tiết lộ! Click để khám phá ngay</p>
                            </div>
                            <div class="readmore_button">
                                <a href="<?= $linkbv ?>">Đọc thêm</a>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                    <!-- <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="public/img/blog/blog7.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="public/img/blog/blog8.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Audio</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="public/img/blog/blog9.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Video</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="public/img/blog/blog7.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="public/img/blog/blog8.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Etiam magna</a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> Februaey 02, 2019</span>
                                    <span class="author"><i class="fa fa-user-circle"></i> Posts by : admin</span>
                                    <span class="category">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">Fashion</a>
                                    </span>
                                </div>
                                <div class="blog_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue </p>
                                </div>
                                <div class="readmore_button">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>

        </div>
    </div>
</div>
<!--blog area end-->

<!--blog pagination area start-->
<div class="blog_pagination">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="pagination">
                    <ul>
                        <li class="current">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">next</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
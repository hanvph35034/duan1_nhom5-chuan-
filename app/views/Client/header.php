<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Autima Dự án 1 nhóm 5</title>


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="public/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="public/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="public/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="public/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="public/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="public/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!--modernizr min js here-->
    <script src="public/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="#"><i class="ion-android-person"></i>Tài khoản của tôi<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_links">
                                            <?php if (!isset($_SESSION['user'])) { ?>
                                                <li><a href="?act=dangki">Đăng kí </a></li>
                                                <li><a href="?act=login">Đăng nhập</a></li>


                                            <?php } else { ?>
                                                <li><a href="?act=suatk">Tài khoản của tôi</a></li>
                                                <li><a href="?act=dangxuat">Đăng xuất</a></li>
                                                <li><a href="?act=giohang">Giỏ hàng</a></li>
                                            <?php } ?>

                                            <?php
                                            if (isset($_SESSION['user']) && ($_SESSION['user']['id_quyen'] == "1" || $_SESSION['user']['id_quyen'] == "3")) {
                                            ?>
                                                <li><a href="app/views/Admin/index.php">Quản trị viên</a></li>
                                            <?php }  ?>


                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="public/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="index.php?act=timkiem" method="post">
                                    <div class="search_box">
                                        <input name="keyw" placeholder="Tìm kiếm ..." type="text">
                                        <button name="timkiem" value="btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">

                                <div class="header_wishlist">
                                    <a href="wishlist.html"> <?php echo  'Xin chào';
                                                                echo  '<br>';
                                                                echo (isset($_SESSION['user']['ten_dn'])) ? $_SESSION['user']['ten_dn'] : ''; ?> </a>

                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="?act=giohang"><span class="lnr lnr-cart"></span>Giỏ hàng </a>
                                    <span class="cart_quantity"><?= count($_SESSION['giohang']) ?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--mini cart-->
        <!-- menu con -->

        <!--mini cart end-->

        <!--header bottom satrt-->
        <div class="header_bottom bottom_four sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="?act">Trang chủ</i></a>

                                    </li>
                                    <li><a href="?act=sanpham">Sản phẩm</a>
                                    <li><a href="?act=sanpham">Danh mục<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <ul class="mega_menu_inner">
                                                <li>
                                                    <ul>
                                                        <?php
                                                        foreach ($loaddm as $dm) {
                                                            extract($dm);
                                                            $linkdm = 'index.php?act=danhmuc1&&id=' . $id;
                                                        ?>
                                                            <li><a href="<?= $linkdm ?>"><?= $Danhmuc ?></a></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li><a href="?act=baiviet2">Bài Viết</a>
                                        <!-- <ul class="sub_menu pages">
                                            <li><a href="bai_viet1.html">bài viết 1</a></li>
                                            <li><a href="bai_viet2.html">bài viết 2</a></li>
                                        </ul> -->
                                    </li>


                                    <li><a href="?act=lienhe"> Liên hệ với chúng tôi</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
        <div class="discount_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="discount_text">
                            <p>Tiết kiệm tới 30% cho các sản phẩm thương hiệu AUTIMA <a href="#">Mua ngay!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->
    <!--Bắt đầu khu vực menu Offcanvas-->
    <!-- menu con be -->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                        <div class="top_right text-end">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> Tài khoản của tôi<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Thủ tục thanh toán </a></li>
                                        <li><a href="my-account.html">Tài khoản của tôi </a></li>
                                        <li><a href="cart.html">Giỏ hàng</a></li>
                                        <li><a href="wishlist.html">Danh sách yêu thích</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_follow">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="index-4.html">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="shop-fullwidth-list.html">danh sach 2</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
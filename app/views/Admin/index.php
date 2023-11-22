<?php

session_start();
ob_start();



include '../../models/pdo.php';

include '../../models/danhmuc.php';
include '../../models/sanpham.php';
include '../../models/banner.php';
include '../../models/donhang.php';
include '../../models/baiviet.php';
include '../../models/binhluan.php';
include '../../models/quyen.php';
include '../../models/khachhang.php';
include '../../models/nguoidung.php';
include '../../models/taikhoan.php';

include '../../controller/nguoidung.php';
include '../../controller/taikhoan.php';
include '../../controller/danhmuc.php';
include '../../controller/khachhang.php';
include '../../controller/donhang.php';
include '../../controller/sanpham.php';

include '../../controller/banner.php';
include '../../controller/baiviet.php';
include '../../controller/quyen.php';

include 'header.php';

// $danhmuc = loadall_danhmuc();


if (isset($_SESSION['user']) && ($_SESSION['user'])) {
    extract($_SESSION['user']);
    $idnd = $id;
    if ($vai_tro == 1) {
        if (isset($_GET['act']) && ($_GET['act']) != '') {
            $act = $_GET['act'];
            switch ($act) {
                case 'home':
                    include 'home.php';
                    break;

                    //bình luận
                case 'listbl':
                    $load_binhluan =  load_binhluan();
                    include 'listbl.php';
                    break;
                case 'deletebl':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        delete_binhluan($id);
                    }
                    $load_binhluan = load_binhluan();
                    include 'listbl.php';
                    break;
//  danh mục
                    //load
                case 'qtdm':
                    danhmuc();
                    break;
                    //thêm
                case 'adddm':
                    themdanhmuc();
                    break;
                    //sửa
                case 'suadm':
                    suadanhmuc();
                    break;
                case 'updatedm':
                    updatedm();
                    break;
                    //xóa
                case 'deletedm':
                    xoadanhmuc();
                    break;

// khách hàng
                    //load
                case 'qtkh':
                    khachhang();
                    break;
                    //xóa

                case 'deletekh':
                    xoakhachhang();
                    break;
                case 'updatekh':
                    include 'QTKH/list.php';
                    break;
                    //thêm
                case 'addkh':
                    themkhachhang();
                    break;

// đơn hàng
                case 'qtdh':
                    donhang();
                    break;

                    //thêm
                case 'adddh':
                    themdonhang();
                    break;

                    //sửa
                case 'suadh':
                    suadonhang();
                    break;
                case 'updatedh':
                    updatedonhang();
                    break;


                    //xóa
                case 'deletedh':
                    xoadonhang();
                    break;
                    //chi tiết đơn hàng
                case 'chitiethoadon':
                    chitiethoadon();
                    break;

// sản phẩm
                    //load
                case 'qtsp':
                    sanpham();
                    break;
                    //thêm sản phẩm
                case 'addsp':
                    themsanpham();
                    break;

                    //sửa
                case 'suasp':
                    suasanpham();
                    break;
                case 'updatesp':
                    updatesanpham();
                    break;
                    //xóa
                case 'deletesp':
                    xoasanpham();
                    break;

// banner
                    //load
                case 'qtbanner':
                    banner1();
                    break;
                    //thêm
                case 'addbanner':
                    themsanpham();
                    break;
                    //sửa
                case 'suabn':
                    suabanner();
                    break;

                case 'updatebn':
                    updatebanner();
                    break;
                    //xóa
                case 'deletebn':
                    xoabanner();
                    break;
// bài viết
                    //load
                case 'qtbv':
                    baiviet();
                    break;
                    //thêm
                case 'addbaiviet':
                    thembaiviet();
                    break;
                    //sửa
                case 'suabv':
                    suabaiviet();
                    break;

                case 'updatebv':
                    updatebaiviet();
                    break;
                    //xóa
                case 'deletebv':
                    xoabaiviet();
// Chức vụ
                case 'quyen':
                    quyen();
                    break;

                    //thêm
                case 'addq':
                    themquyen();
                    break;

                    //sửa
                case 'suaq':
                    suaquyen();
                    break;
                case 'updateq':
                    updatequyen();
                    break;


                    //xóa
                case 'deleteq':
                    xoaquyen();
                    break;
//người dùng
                    //load
                case 'nguoidung':
                    nguoidung();
                    break;
                    //thêm

                case 'themnguoidung':
                    themnguoidung();
                    break;
                    //sửa

                case 'suanguoidung':
                    suanguoidung();
                    break;

                case 'updatenguoidung':
                    updatenguoidung();
                    break;

                case 'xoamemnguoidung':
                    xoamemnguoidung();
                    break;

                case 'nguoidungxoamem':
                    nguoidungxoamem();
                    break;

                case 'restorenguoidung':
                    restorenguoidung();
                    break;

                case 'xoacungnguoidung':
                    xoacungnguoidung();
                    break;

                    //đăng nhập
                case 'dangxuat':
                    dang_xuat();
                    break;
                default:
                    include 'home.php';
            }
        } else {
            include 'home.php';
        }
    } else if ($vai_tro != 1) {
        if (isset($_GET['act']) && ($_GET['act']) != '') {
            $act = $_GET['act'];
            switch ($act) {
                case 'home':
                    include 'home.php';
                    break;

                    //bình luận
                case 'listbl':
                    $load_binhluan =  load_binhluan();
                    include 'listbl.php';
                    break;
                case 'deletebl':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        delete_binhluan($id);
                    }
                    $load_binhluan = load_binhluan();
                    include 'listbl.php';
                    break;
                    //  danh mục
                    //load
                case 'qtdm':
                    danhmuc();
                    break;
                    //thêm
                case 'adddm':
                    themdanhmuc();
                    break;
                    //sửa
                case 'suadm':
                    suadanhmuc();
                    break;
                case 'updatedm':
                    updatedm();
                    break;
                    //xóa
                case 'deletedm':
                    xoadanhmuc();
                    break;

                    // khách hàng
                    //load
                case 'qtkh':
                    khachhang();
                    break;
                    //xóa

                case 'deletekh':
                    xoakhachhang();
                    break;
                case 'updatekh':
                    include 'QTKH/list.php';
                    break;
                    //thêm
                case 'addkh':
                    themkhachhang();
                    break;

                    // đơn hàng
                case 'qtdh':
                    donhang();
                    break;

                    //thêm
                case 'adddh':
                    themdonhang();
                    break;

                    //sửa
                case 'suadh':
                    suadonhang();
                    break;
                case 'updatedh':
                    updatedonhang();
                    break;


                    //xóa
                case 'deletedh':
                    xoadonhang();
                    break;

                    // sản phẩm
                    //load
                case 'qtsp':
                    sanpham();
                    break;
                    //thêm sản phẩm
                case 'addsp':
                    themsanpham();
                    break;

                    //sửa
                case 'suasp':
                    suasanpham();
                    break;
                case 'updatesp':
                    updatesanpham();
                    break;
                    //xóa
                case 'deletesp':
                    xoasanpham();
                    break;

                    // banner
                    //load
                case 'qtbanner':
                    banner1();
                    break;
                    //thêm
                case 'addbanner':
                    themsanpham();
                    break;
                    //sửa
                case 'suabn':
                    suabanner();
                    break;

                case 'updatebn':
                    updatebanner();
                    break;
                    //xóa
                case 'deletebn':
                    xoabanner();
                    break;
                    // bài viết
                    //load
                case 'qtbv':
                    baiviet();
                    break;
                    //thêm
                case 'addbaiviet':
                    thembaiviet();
                    break;
                    //sửa
                case 'suabv':
                    suabaiviet();
                    break;

                case 'updatebv':
                    updatebaiviet();
                    break;
                    //xóa
                case 'deletebv':
                    xoabaiviet();
                    // Chức vụ
                case 'quyen':
                    quyen();
                    break;

                    //thêm
                case 'addq':
                    themquyen();
                    break;

                    //sửa
                case 'suaq':
                    suaquyen();
                    break;
                case 'updateq':
                    updatequyen();
                    break;


                    //xóa
                case 'deleteq':
                    xoaquyen();
                    break;
                    //người dùng
                    //load
                case 'nguoidung':
                    nguoidung();
                    break;
                    //thêm

                case 'themnguoidung':
                    themnguoidung();
                    break;
                    //sửa

                case 'suanguoidung':
                    suanguoidung();
                    break;

                case 'updatenguoidung':
                    updatenguoidung();
                    break;

                case 'xoamemnguoidung':
                    xoamemnguoidung();
                    break;

                case 'nguoidungxoamem':
                    nguoidungxoamem();
                    break;

                case 'restorenguoidung':
                    restorenguoidung();
                    break;

                case 'xoacungnguoidung':
                    xoacungnguoidung();
                    break;
                    //đăng nhập
                case 'dangxuat':
                    dang_xuat();
                    break;
                default:
                    include 'home.php';
            }
        } else {
            include 'home.php';
        }
    } else {
        $thongbao = 'dang nhap that bai! tai khoan khong ton tai';
        include 'taikhoan/dangnhap.php';
    }
} else {
    include 'taikhoan/dangnhap.php';
}





include 'footer.php';
ob_end_flush();

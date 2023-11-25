<?php
session_start();
ob_start();
include '../../models/pdo.php';
include '../../models/taikhoan.php';
include '../../models/banner.php';
include '../../models/sanpham.php';
include '../../models/baiviet.php';
include '../../models/danhmuc.php';
include '../../models/binhluan.php';
include '../../models/khachhang.php';
include '../../models/quyen.php';
include '../../models/donhang.php';

include '../../controllers/AdminController.php';
include '../../controllers/danhmuc.php';
include '../../controllers/taikhoan.php';
include '../../controllers/sanpham.php';
include '../../controllers/banner.php';
include '../../controllers/binhluan.php';
include '../../controllers/baiviet.php';
 include 'header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangxuat':
            session_unset();
            header("Location: ../../../index.php");
            break;
            // quản trị bình luận
        case 'listbl':
            danhsachbl();
            break;
        case 'deletebl':
            xoabl();
            break;
            //  danh mục
        case 'qtdm':
            danhsachdm();
            break;
        case 'adddm':
            themdanhmuc();
            break;
        case 'suadm':
            suadm();
            break;
        case 'updatedm':
            updatedm();
            break;
        case 'deletedm':
            deletedm();
            break;
        case 'qtkh':
            dstaikhoan();
            break;
        case 'deletekh':
            soataikhoan();
            break;
        case 'addkh':
            themtaikhoan();
            break;
            // đơn hàng
        case 'qtdh':
            $loaddh = loadall_donhang();
            include 'QTDH/list.php';
            break;
        case 'adddh':
            if (isset($_POST['adddh'])) {
                $ngay_dat = $_POST['ngay_dat'];
                $tong_gia = $_POST['tong_gia'];
                $trang_thai = $_POST['trang_thai'];
                $id_kh = $_POST['id_kh'];

                add_donhang($ngay_dat, $tong_gia, $trang_thai, $id_kh);
            }
            $loaddh = loadall_donhang();
            include 'QTDH/add.php';
            break;

        case 'suadh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadd1 = loadone_donhang($id);
            }
            include 'QTDH/update.php';
            break;
        case 'updatedh':
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $ngay_dat = $_POST['ngay_dat'];
                $tong_gia = $_POST['tong_gia'];
                $trang_thai = $_POST['trang_thai'];
                $id_kh = $_POST['id_kh'];
                fix_donhang($id, $ngay_dat, $tong_gia, $trang_thai, $id_kh);
            }
            $loaddh = loadall_donhang();
            include 'QTDH/list.php';
            break;
        case 'deletedh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_don_hang($id);
            }
            $loaddh = loadall_donhang();
            include 'QTDH/list.php';
            break;

        case 'qtsp':
            dssnanpham();
            break;
            //thêm sản phẩm
        case 'addsp':
        themsp();
            break;

            //sửa
        case 'suasp':
          suasp();
            break;
        case 'updatesp':
            updatesp();
            break;
            //xóa
        case 'deletesp':
          xoasp();
            break;
            // banner
        case 'qtbanner':
            dsbanner();
            break;
        case 'addbanner':
            thembanner();
            break;
        case 'suabn':
            suabanner();
            break;

        case 'updatebn':
            updatebanner();
            break;
        case 'deletebn':
            xoabanner();
            include 'QTBANER/list.php';
            // bài viết
            case 'qtbv':
                qtbv();
                break;
                //thêm
            case 'addbaiviet':
                addbaiviet();
                break;
                //sửa
            case 'suabv':
                suabv();
                break;
    
            case 'updatebv':
                updatebv();
                break;
                //xóa
            case 'deletebv':
                deletebv();
                break;

        case 'quyen':
            quyen();
            break;

            //thêm

            //sửa
        case 'suaq':
           suaquyen();
            break;
        case 'bienthe':
            $loadd = chitietdh();
            include 'QTBT/list.php';
            break;
        case 'addbt':
            include 'QTBT/add.php';
            break;
        case 'updatebt':
            include 'QTBT/update.php';
            break;


        default:
            include '404.php';
    }
} else {
    include 'home.php';
}

include 'footer.php';
ob_end_flush();

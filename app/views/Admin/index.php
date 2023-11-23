<?php
ob_start();
include '../../controllers/AdminController.php';
 //include 'header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangxuat':
            session_unset();
            header("Location: ../../../index.php");
            break;
            // quản trị bình luận
        case 'listbl':
            listbl();
            break;
        case 'deletebl':
            deletebl();
            break;
            //  danh mục
        case 'qtdm':
            qtdm();
            break;
        case 'adddm':
            adddm();
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
            qtkh();
            break;
        case 'deletekh':
            deletekh();
            break;
        case 'updatekh':
            include 'QTKH/list.php';
            break;
        case 'addkh':
            addkh();
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
            $loadsanpham = loadall_sanpham();
            include 'QTSP/list.php';
            break;
            //thêm sản phẩm
        case 'addsp':
            if (isset($_POST['addsp'])) {
                $ten = $_POST['ten'];
                $mo_ta = $_POST['mo_ta'];
                $gia = $_POST['gia'];
                $ngay_nhap = $_POST['ngay_nhap'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $so_luong = $_POST['soluong'];
                $gia_sale = $_POST['giasale'];

                $target_dir = '../../../public/img/product/';

                $img_dai_dien = $_FILES['img_dai_dien']['name'];
                $target_file = $target_dir . basename($img_dai_dien);
                move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

                $img_1 = $_FILES['img_1']['name'];
                $target_file1 = $target_dir . basename($img_1);
                move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

                $img_2 = $_FILES['img_2']['name'];
                $target_file2 = $target_dir . basename($img_2);
                move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

                $img_3 = $_FILES['img_3']['name'];
                $target_file3 = $target_dir . basename($img_3);
                move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

                if ($ten != '' && $mo_ta != '' && $gia > 0 && $img_dai_dien != '' && $ngay_nhap != '' && $img_1 != '' && $img_2 != '' && $img_3 != '') {
                    add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3);

                    header("Location: ?act=qtsp");
                } else {
                    $thongbao = 'Thất bại';
                }
            }
            $loaddm = loadall_danhmuc();
            include 'QTSP/add.php';
            break;

            //sửa
        case 'suasp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadsp = loadone_sanpham($id);
                $loaddm = loadall_danhmuc();
            }
            include 'QTSP/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $mo_ta = $_POST['mo_ta'];
                $gia = $_POST['gia'];
                $ngay_nhap = $_POST['ngay_nhap'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $so_luong = $_POST['soluong'];
                $gia_sale = $_POST['giasale'];

                $target_dir = '../../../public/img/product/';
                $img_dai_dien = $_FILES['img_dai_dien']['name'];
                $target_file = $target_dir . basename($img_dai_dien);
                move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

                $img_1 = $_FILES['img_1']['name'];
                $target_file1 = $target_dir . basename($img_1);
                move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

                $img_2 = $_FILES['img_2']['name'];
                $target_file2 = $target_dir . basename($img_2);
                move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

                $img_3 = $_FILES['img_3']['name'];
                $target_file3 = $target_dir . basename($img_3);
                move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

                update_sanpham($id, $ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3);

                $loaddm = loadall_danhmuc();
            }
            $loadsp = loadone_sanpham($_GET['id']);
            // $loadsanpham = loadall_sanpham();
            include 'QTSP/update.php';
            break;
            //xóa
        case 'deletesp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_sanpham($id);
            }
            $loadsanpham = loadall_sanpham();
            include 'QTSP/list.php';
            break;
            // banner
        case 'qtbanner':
            $loadbanner = loadall_banner();
            include 'QTBANER/list.php';
            break;
        case 'addbanner':
            if (isset($_POST['addbanner'])) {
                $ten = $_POST['ten'];
                $limk = $_POST['link'];
                $tieu_de1 = $_POST['tieu_de'];
                $target_dir = '../../../public/img/bg/';

                $img = $_FILES['img']['name'];
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($ten != '' && $limk != '' && $img != '') {
                    add_banner($img, $ten, $tieu_de1, $limk);
                    $thongbao = 'Thêm banner thành công';
                } else {
                    $thongbao = 'Thất bại';
                }
            }
            include 'QTBANER/add.php';
            break;
        case 'suabn':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $banner = loadone_banner($id);
            }
            include 'QTBANER/update.php';
            break;

        case 'updatebn':
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $limk = $_POST['link'];
                $tieu_de1 = $_POST['tieu_de1'];
                $img = $_FILES['img']['name'];
                $target_dir = '../../../public/img/bg/';
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($ten != "") {
                    update_banner($id, $img, $ten, $tieu_de1,$limk);
                    $loadbn = loadone_banner($id);
                    $thongbao = 'update banner thành công';
                } else {
                    $banner = loadone_banner($id);
                    $thongbao = 'update thất bại';
                }
            }
            $loadbanner = loadall_banner();
            include 'QTBANER/list.php';
            break;
            //xóa
        case 'deletebn':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_banner($id);
            }
            $loadbanner = loadall_banner();
            include 'QTBANER/list.php';
            // bài viết
        case 'qtbv':
            $loadbaiviet = loadall_baiviet();
            include 'QTBV/list.php';
            break;
            //thêm
        case 'addbaiviet':
            if (isset($_POST['addbaiviet'])) {
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $ngay_dang = $_POST['ngay_dang'];
                $target_dir1 = '../../views/Admin/img/';

                $img = $_FILES['img']['name'];
                $target_file1 = $target_dir1 . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file1);
                if ($tieu_de != '' && $noi_dung != '' && $ngay_dang != '' && $ngay_dang != '') {
                    add_baiviet($tieu_de, $img, $noi_dung, $ngay_dang);
                    $thongbao = 'Thêm banner thành công';
                } else {
                    $thongbao = 'Thất bại';
                }
            }

            include 'QTBV/add.php';
            break;
            //sửa
        case 'suabv':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $baiviet = loadone_baiviet($id);
            }
            include 'QTBV/update.php';
            break;

        case 'updatebv':
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $ngay_dang = $_POST['ngay_dang'];
                $img = $_FILES['img']['name'];
                $target_dir = '../../img/';
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($tieu_de != "") {
                    update_baiviet($id, $tieu_de, $img, $noi_dung, $ngay_dang);
                    $loadbn = loadone_baiviet($id);
                    $thongbao = 'update bV thành công';
                } else {
                    $baiviet = loadone_baiviet($id);
                    $thongbao = 'update thất bại';
                }
            }
            $loadbaiviet = loadall_baiviet();
            include 'QTBV/list.php';
            break;
            //xóa
        case 'deletebv':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_baiviet($id);
            }
            $loadbaiviet = loadall_baiviet();
            echo '<script>alert("vui long quay ve trang chu");</script>';
            include 'QTBV/list.php';


        case 'quyen':
            $loadquyen = loadall_quyen();
            include 'quyen/list.php';
            break;

            //thêm

            //sửa
        case 'suaq':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (isset($_POST['btn'])) {
                    $quyen = $_POST['quyen'];
                    fix_quyen($_GET['id'], $quyen);
                    header("Location: ?act=quyen");
                }
            }
            $loada = loada_quyen();
            $loadquyen = loadall_quyen();
            include 'quyen/update.php';
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

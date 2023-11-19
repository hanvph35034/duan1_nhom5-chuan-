<?php
 include 'header.php';
include '../../models/pdo.php';
include '../../models/danhmuc.php';
include '../../models/sanpham.php';
include '../../models/banner.php';
include '../../models/donhang.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
            // quản trị bình luận
        case 'listbl':
            include 'listbl.php';
            break;
            //  danh mục
        case 'qtdm':
            $loaddm = loadall_danhmuc();
            include 'QTDM/list.php';
            break;
        case 'adddm':
            if (isset($_POST['submit'])) {
                $them = $_POST['addm'];
                insert_danhmuc($them);
            }
            include 'QTDM/add.php';
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadd = loadone_danhmuc($id);
            }
            include 'QTDM/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['submit'])) {
                $update = $_POST['tendm'];
                $id = $_POST['iddm'];
                fix_danhmuc($id, $update);
            }
            $loaddm = loadall_danhmuc();
            include 'QTDM/list.php';
            break;
        case 'deletedm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $loaddm = loadall_danhmuc();
            echo '<script>alert("vui long quay ve trang chu");</script>';
            include 'QTDM/list.php';

            // khách hàng
        case 'qtkh':
            include 'QTKH/list.php';
            break;
        case 'addkh':
            include 'QTKH/add.php';
            break;


            // đơn hàng
        case 'qtdh':
            $loaddh = loadall_donhang();
            include 'QTDH/list.php';
            break;

            //thêm
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

            //sửa
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


            //xóa
        case 'deletedh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_don_hang($id);
            }
            $loaddh = loadall_donhang();
            include 'QTDH/list.php';
            break;



            // sản phẩm

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

                $target_dir = '../../views/Admin/img/';

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
                    add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
                    $thongbao = 'Thêm sản phẩm thành công';
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

                $target_dir = 'img/';
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

                update_sanpham($id, $ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
                // header("location: index.php?act=suasp&&id=$id");
                // $loadsp = loadone_sanpham($id);
                $loaddm = loadall_danhmuc();
                // $loadsanpham = loadall_sanpham();
                // header("location: " . $_SERVER['HTTP_REFERER']);
                // } else {
                //     $thongbao = 'sua san pham that bai';
                // }
            }
            $loadsp = loadone_sanpham($_GET['id']);
            var_dump($loadsp);
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
            echo '<script>alert("vui long quay ve trang chu");</script>';
            include 'QTSP/list.php';










            // banner
            //load
        case 'qtbanner':
            $loadbanner = loadall_banner();
            include 'QTBANER/list.php';
            break;
            //thêm
        case 'addbanner':
            if (isset($_POST['addbanner'])) {
                $ten = $_POST['ten'];
                $link = $_POST['link'];

                $target_dir = '../../views/Admin/img/';

                $img = $_FILES['img']['name'];
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($ten != '' && $link != '' && $img != '') {
                    add_banner($img, $ten, $link);
                    $thongbao = 'Thêm banner thành công';
                } else {
                    $thongbao = 'Thất bại';
                }
            }

            include 'QTBANER/add.php';
            break;
            //sửa
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
                $link = $_POST['link'];
                $img = $_FILES['img']['name'];
                $target_dir = '../../view/Admin/img/';
                $target_file = $target_dir . basename($img);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($ten != "") {
                    update_banner($id, $img, $ten, $link);
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
            echo '<script>alert("vui long quay ve trang chu");</script>';
            include 'QTBANER/list.php';
            // bài viết
        case 'qtbv':
            include 'QTBV/list.php';
            break;
        case 'addbv':
            include 'QTBV/add.php';
            break;
        case 'updatebv':
            include 'QTBV/update.php';
            break;

        case 'qtquyen':
            include 'quyen/list.php';
            break;
        case 'addquyen':
            include 'quyen/add.php';
            break;
        case 'updatequyen':
            include 'quyen/update.php';
            break;

        case 'bienthe':
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

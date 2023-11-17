<?php
include 'header.php';
include '../../models/pdo.php';
include '../../models/danhmuc.php';
include '../../models/sanpham.php';
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
            include 'QTDH/list.php';
            break;
            // case 'updatekm':
            //     include 'QTKM/update.php';
            //     break;
            // case 'addkm':
            //     include 'QTKM/add.php';
            //     break;



            // sản phẩm

        case 'qtsp':
            $loadsanpham = loadall_sanpham();
            include 'QTSP/list.php';
            break;

        case 'addsp':
            if (isset($_POST['addsp'])) {
                $ten = $_POST['ten'];
                $mo_ta = $_POST['mo_ta'];
                $gia = $_POST['gia'];
                $ngay_nhap = $_POST['ngay_nhap'];
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
                if ($ten != '' && $mo_ta != '' && $gia > 0 && $img_dai_dien != ''  && $ngay_nhap != '' && $img_1 != '' && $img_2 != '' && $img_3 != '') {
                    add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
                    $thongbao = 'thêm sản phẩm thành công';
                } else {
                    $thongbao = 'thất bại';
                }
            }
            $loaddm = loadall_danhmuc();

            // if (isset($_POST['addsp']) && ($_POST['addsp'])) {
            //     $ten = $_POST['ten'];
            //     $mo_ta = $_POST['mo_ta'];
            //     $gia = $_POST['gia'];
            //     $ngay_nhap = $_POST['ngay_nhap'];
            //     $id_danh_muc = $_POST['id_danh_muc'];

            //     $target_dir = '../../views/img/';
            //     $img_dai_dien = $_FILES['img_dai_dien']['name'];
            //     $target_file = $target_dir . basename($img_dai_dien);
            //     move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

            //     $img_1 = $_FILES['img_1']['name'];
            //     $target_file1 = $target_dir . basename($img_1);
            //     move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

            //     $img_2 = $_FILES['img_2']['name'];
            //     $target_file2 = $target_dir . basename($img_2);
            //     move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

            //     $img_3 = $_FILES['img_3']['name'];
            //     $target_file3 = $target_dir . basename($img_3);
            //     move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

            //     if ($ten != '' && $mo_ta != '' && $gia > 0 && $img_dai_dien != ''  && $ngay_nhap != '' && $img_1 != '' && $img_2 != '' && $img_3 != '') {
            //         add_sanpham($ten,$mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $img_1, $img_2, $img_3);
            //         $thongbao = 'thêm sản phẩm thành công';
            //     } else {
            //         $thongbao = 'thất bại';
            //     }
            // }
            include 'QTSP/add.php';
            break;
        case 'updatesp':
            include 'QTSP/update.php';
            break;
            // banner
        case 'qtbanner':
            include 'QTBANER/list.php';
            break;
        case 'addbanner':
            include 'QTBANER/add.php';
            break;
        case 'updatebanner':
            include 'QTBANER/update.php';
            break;
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

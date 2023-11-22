<?php

function sanpham()
{
    $loadsanpham = loadall_sanpham();
    include 'QTSP/list.php';
}

function themsanpham()
{
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
}


function suasanpham()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadsp = loadone_sanpham($id);
        $loaddm = loadall_danhmuc();
    }
    include 'QTSP/update.php';
}

function updatesanpham()
{
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
    include 'QTSP/list.php';
}

function xoasanpham()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_sanpham($id);
    }
    $loadsanpham = loadall_sanpham();
    echo '<script>alert("vui long quay ve trang chu");</script>';
    include 'QTSP/list.php';
}

// function nguoidungxoamem()
// {
//     $nguoidung = loadall_nguoidung_xoamem();
//     include 'nguoidung/xoamem.php';
// }

// function restorenguoidung()
// {
//     if (isset($_GET['id']) && ($_GET['id']) > 0) {
//         $id = $_GET['id'];
//         restore_nguoidung($id);
//     }
//     $nguoidung = loadall_nguoidung_xoamem();
//     include 'nguoidung/xoamem.php';
// }

// function xoacungnguoidung()
// {
//     if (isset($_GET['id']) && ($_GET['id']) > 0) {
//         $id = $_GET['id'];
//         delete_nguoidung($id);
//     }
//     $nguoidung = loadall_nguoidung_xoamem();
//     include 'nguoidung/xoamem.php';
// }

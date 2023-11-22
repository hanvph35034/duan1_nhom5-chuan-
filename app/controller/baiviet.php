<?php

function baiviet()
{
    $loadbaiviet = loadall_baiviet();
                    include 'QTBV/list.php';
}

function thembaiviet()
{
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
}


function suabaiviet()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $baiviet = loadone_baiviet($id);
    }
    include 'QTBV/update.php';
}

function updatebaiviet()
{
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
}

function xoabaiviet()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_baiviet($id);
    }
    $loadbaiviet = loadall_baiviet();
    echo '<script>alert("vui long quay ve trang chu");</script>';
    include 'QTBV/list.php';
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

<?php

function banner1()
{
    $loadbanner = loadall_banner();
    include 'QTBANER/list.php';
}

function thembanner()
{
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
}


function suabanner()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $banner = loadone_banner($id);
    }
    include 'QTBANER/update.php';
}

function updatebanner()
{
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
}

function xoabanner()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_banner($id);
    }
    $loadbanner = loadall_banner();
    echo '<script>alert("vui long quay ve trang chu");</script>';
    include 'QTBANER/list.php';
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

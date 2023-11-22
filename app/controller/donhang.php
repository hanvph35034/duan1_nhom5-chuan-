<?php

function donhang()
{
    $loaddh = loadall_donhang();
            include 'QTDH/list.php';
}

function themdonhang()
{
    if (isset($_POST['adddh'])) {
        $ngay_dat = $_POST['ngay_dat'];
        $tong_gia = $_POST['tong_gia'];
        $trang_thai = $_POST['trang_thai'];
        $id_kh = $_POST['id_kh'];

        add_donhang($ngay_dat, $tong_gia, $trang_thai, $id_kh);
    }
    $loaddh = loadall_donhang();
    include 'QTDH/add.php';
}


function suadonhang()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd1 = loadone_donhang($id);
    }
    include 'QTDH/update.php';
}

function updatedonhang()
{
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
}

function xoadonhang()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_don_hang($id);
    }
    $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function chitiethoadon()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hoadon = chi_tiet_hoa_don($id);
    }
    include 'QTDH/chitietdonhang.php';
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

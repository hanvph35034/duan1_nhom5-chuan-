<?php

function quyen()
{
    $loadquyen = loadall_quyen();
                    include 'quyen/list.php';
}

function themquyen()
{
    if (isset($_POST['addq'])) {
        $ten = $_POST['ten'];
        $trang_thai = $_POST['trang_thai'];

        add_quyen($ten, $trang_thai);
    }
    $loadquyen = loadall_quyen();
    include 'quyen/add.php';
}


function suaquyen()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadq = loadone_quyen($id);
    }
    include 'quyen/update.php';
}

function updatequyen()
{
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $trang_thai = $_POST['trang_thai'];
        fix_quyen($id, $ten, $trang_thai);
    }
    $loadquyen = loadall_quyen();
    include 'quyen/list.php';
}

function xoaquyen()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_quyen($id);
    }
    $loadquyen = loadall_quyen();
    include 'quyen/list.php';
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

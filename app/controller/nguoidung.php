<?php

function nguoidung()
{
    $nguoidung = loadall_nguoidung();
    include 'nguoidung/list.php';
}

function themnguoidung()
{
    if (isset($_POST['add']) && ($_POST['add'])) {
        $tennguoidung = $_POST['tennguoidung'];
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $vaitro = $_POST['vaitro'];
        $img = $_FILES['img']['name'];
        $target_dir = '../../view/img/';
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($tennguoidung != "" && $tendangnhap != "" && $matkhau != "" && $email != "" && $sdt != "" && $vaitro != "") {
            add_nguoi_dung($tennguoidung, $tendangnhap, $matkhau, $email, $sdt, $vaitro, $img);
            $thongbao = 'thêm người dùng thành công';
        } else {
            $thongbao = 'điền đầy đủ thông tin';
        }
    }
    include 'nguoidung/add.php';
}


function suanguoidung()
{
    if (isset($_GET['id']) && ($_GET['id'])) {
        $id = $_GET['id'];
        $nguoidung = loadone_nguoidung($id);
    }
    include 'nguoidung/update.php';
}

function updatenguoidung()
{
    if (isset($_POST['add']) && ($_POST['add'])) {
        $id = $_POST['id'];
        $tennguoidung = $_POST['tennguoidung'];
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $vaitro = $_POST['vaitro'];
        $img = $_FILES['img']['name'];
        $target_dir = '../../views/Admin/img/';
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($tennguoidung != "" && $tendangnhap != "" && $email != "" && $sdt != "" && $vaitro != "") {
            update_nguoidung($id, $tennguoidung, $tendangnhap, $matkhau, $email, $sdt, $vaitro, $img);
            if($idnd = $id){
                // $_SESSION['user'] = dangnhap($tendangnhap, $matkhau);
                $thongbao = 'update người dùng thành công';
            }else{
                $thongbao = 'update người dùng thành công';
            }
        } else {
            $thongbao = 'điền đầy đủ thông tin';
        }
    }
    $nguoidung = loadone_nguoidung($id);
    include 'nguoidung/update.php';
}

function xoamemnguoidung()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        xoa_mem_nguoi_dung($id);
        $nguoidung = loadall_nguoidung();
    }
    include 'nguoidung/list.php';
}

function nguoidungxoamem()
{
    $nguoidung = loadall_nguoidung_xoamem();
    include 'nguoidung/xoamem.php';
}

function restorenguoidung()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        restore_nguoidung($id);
    }
    $nguoidung = loadall_nguoidung_xoamem();
    include 'nguoidung/xoamem.php';
}

function xoacungnguoidung()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        delete_nguoidung($id);
    }
    $nguoidung = loadall_nguoidung_xoamem();
    include 'nguoidung/xoamem.php';
}

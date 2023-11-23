<?php
function dsbanner(){
    $loadbanner = loadall_banner();
    include 'QTBANER/list.php';
}
function thembanner(){
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
}

function suabanner(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $banner = loadone_banner($id);
    }
    include 'QTBANER/update.php';
    
}
function updatebanner(){
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
   
}
function xoabanner(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_banner($id);
    }
    $loadbanner = loadall_banner();
}
?>
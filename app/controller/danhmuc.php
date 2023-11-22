<?php

function danhmuc()
{
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}

function themdanhmuc()
{
    if (isset($_POST['submit'])) {
        $error = [];
        if(empty($_POST['addm'])){
            $error['addm'] = "Vui lòng nhập";
        }else{
            $them = $_POST['addm'];   
        }
        if(empty($error)){
            insert_danhmuc($them);
        }
    }
    include 'QTDM/add.php';
}

function suadanhmuc()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd = loadone_danhmuc($id);
    }
    include 'QTDM/update.php';
}

function updatedm()
{
    if (isset($_POST['submit'])) {
        $update = $_POST['tendm'];
        $id = $_POST['iddm'];
        fix_danhmuc($id, $update);
    }
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}

function xoadanhmuc()
{
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        delete_mem($id);
        header("location: index.php?act=danhmuc");
    }
}

function danhmucxoa()
{
    $danhmuc = loadall_danhmuc_xoamem();
    include 'danhmuc/delete.php';
}

function khoiphucdanhmuc()
{
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        restore_danhmuc($id);
        $danhmuc = loadall_danhmuc_xoamem();
        header("location: index.php?act=danhmucxoa");
    }
    include 'danhmuc/delete.php';
}

function xoacungdanhmuc()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        delete_danhmuc($id);
        header("location: index.php?act=danhmucxoa");
    }
    include 'danhmuc/delete.php';
}

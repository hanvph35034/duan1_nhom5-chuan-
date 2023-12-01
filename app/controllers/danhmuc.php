<?php 

function themdanhmuc(){
    if (isset($_POST['submit'])) {
        $error = [];
        if (empty($_POST['addm'])) {
            $error['addm'] = "Vui lòng nhập";
        } else {
            $them = $_POST['addm'];
        }
        if (empty($error)) {
            insert_danhmuc($them);
        }
    }
    include 'QTDM/add.php';
}

function danhsachdm(){
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
function suadm()  {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd = loadone_danhmuc($id);
    }
    include 'QTDM/update.php';
}
function updatedm(){
   
    if (isset($_POST['submit'])) {
        $update = $_POST['tendm'];
        $id = $_POST['iddm'];
        fix_danhmuc($id, $update);
    }
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
function deletedm(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_danhmuc($id);
    }
    $loaddm = loadall_danhmuc();
    include 'QTDM/list.php';
}
?>
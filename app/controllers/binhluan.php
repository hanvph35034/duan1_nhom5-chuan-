<?php
function danhsachbl(){
    $load_binhluan =  load_binhluan();
    include 'listbl.php';
}
function xoabl(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_binhluan($id);
    }
    $load_binhluan = load_binhluan();
    include 'listbl.php';
}
?>
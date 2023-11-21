<?php 
include '../../models/taikhoan.php';
include '../../models/banner.php';
include '../../models/sanpham.php';
include '../../models/baiviet.php';
include '../../models/danhmuc.php';
include '../../models/binhluan.php';
include '../../models/khachhang.php';
include '../../models/quyen.php';
include '../../models/donhang.php';
function listbl(){
    $load_binhluan =  load_binhluan();
    include 'listbl.php';
}
function deletebl(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_binhluan($id);
    }
    $load_binhluan = load_binhluan();
    include 'listbl.php';
}
function adddm(){
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
function qtdm(){
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
function qtkh(){
    $loadkh = loadall_khachhang();
    include 'QTKH/list.php';
}
function deletekh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_khachhang($id);
    }
    $loadkh = loadall_khachhang();
    include 'QTKH/list.php';
}
function updatekh(){

}
function addkh(){
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ten_dn = $_POST['ten_dn'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        insert_khachhang($user, $pass, $ten_dn, $diachi, $sdt, $email, $date);
    }
    include 'QTKH/add.php';
}
function qtdh(){

}
function adddh(){

}
function suadh(){

}
function deletedh(){

}
function qtsp(){

}
function addsp(){

}
function updatesp(){

}
function deletesp(){

}
function qtbanner(){

}
function addbanner(){

}
function suabn(){

}
function updatebn(){

}
function deletebn(){

}
function qtbv(){

}
function addbaiviet(){

}
function updatebv(){

}
function deletebv(){

}
function quyen(){

}
function updateq(){

}
function deleteq(){

}
?>
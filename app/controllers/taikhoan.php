<?php 
function dstaikhoan(){
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function soataikhoan(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_taikhoan($id);
    }
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function themtaikhoan(){
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ten_dn = $_POST['ten_dn'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        insert_taikhoan($user, $pass, $ten_dn, $email, $sdt , $diachi);
    }
    include 'QTKH/add.php';
}
function quyen(){
    $loadquyen = loadall_quyen();
    include 'quyen/list.php';
}
function suaquyen() {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (isset($_POST['btn'])) {
            $quyen = $_POST['quyen'];
            fix_quyen($_GET['id'], $quyen);
            header("Location: ?act=quyen");
        }
    }
    $loada = loada_quyen();
    $loadquyen = loadall_quyen();
    include 'quyen/update.php';
}
?>
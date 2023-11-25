<?php
function dstaikhoan()
{
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function soataikhoan()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_taikhoan($id);
    }
    $loadkh = loadall_taikhoan();
    include 'QTKH/list.php';
}
function themtaikhoan()
{
    if (isset($_POST['submit'])) {
        $error = [];
        if (empty($_POST['user'])) {
            $error['user'] = "Vui lòng nhập tên tài khoản";
        } else {
            if (strlen($_POST['user']) < 5) {
                $error['user'] = "Tên tài khoản ít nhất 5 kí tự ";
            } else {
                $user = $_POST['user'];
            }
        }
        if (strlen($_POST['ten_dn']) < 5) {
            $error['ten_dn'] = "Tên người dùng ít nhất 5 kí tự ";
        } else {
            $ten_dn = $_POST['ten_dn'];
        }
        if (empty($_POST['pass'])) {
            $error['pass'] = "Vui lòng nhập mật khẩu";
        } else {
            if (strlen($_POST['pass']) < 5) {
                $error['pass'] = "Mật khẩu ít nhất 5 kí tự ";
            } else {
                $pass = $_POST['pass'];
            }
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email";
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Email email không đúng định dạng ";
            } else {
                $email = $_POST['email'];
            }
        }
        if (empty($_POST['sdt'])) {
            $error['sdt'] = "Vui lòng nhập số điện thoại";
        } else {
            if (!is_numeric($_POST['sdt'])) {
                $error['sdt'] = "Số điện thoại phải là số ";
            } else {
                $sdt = $_POST['sdt'];
            }
        }
        if (empty($_POST['diachi'])) {
            $error['diachi'] = "Vui lòng nhập địa chỉ";
        } else {
            $dia_chi = $_POST['diachi'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email";
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Email email không đúng định dạng ";
            } else {
                $email = $_POST['email'];
            }
        }

        if (empty($error)) {
            insert_taikhoan($user, $pass, $ten_dn, $email, $sdt, $diachi);
        }
    }
    include 'QTKH/add.php';
}
function quyen()
{
    $loadquyen = loadall_quyen();
    include 'quyen/list.php';
}
function suaquyen()
{
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

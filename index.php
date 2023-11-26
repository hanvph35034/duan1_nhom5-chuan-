<?php
session_start();
ob_start();
include "app/models/pdo.php";
include "app/models/taikhoan.php";
include "app/models/sanpham.php";
include "app/models/binhluan.php";

include "app/models/baiviet.php";
include "app/models/danhmuc.php";

include "app/models/validate.php";

$loaddm = loadall_danhmuc();
include "app/views/Client/header.php";
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        case 'login':
            if (isset($_POST['btn']) && $_POST['btn']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $tk = dangnhap($user, $pass);
                if ($tk != false) {
                    $_SESSION['user'] = $tk;
                    var_dump($_SESSION['user']);
                    header("Location: ?act");
                } else {
                    echo '<script>alert("Sai tai khoan hoac password")</script>';
                }
            }
            include "app/views/Client/login.php";
            break;
        case 'dangki':
            if (isset($_POST['btn']) && $_POST['btn']) {
                $error  = [];
                if (empty($_POST['user'])) {
                    $error['user'] = "Vui lòng nhập tên tài khoản";
                } else {
                    if (strlen($_POST['user']) < 5) {
                        $error['user'] = "Tên tài khoản ít nhất 5 kí tự ";
                    } else {
                        $user = $_POST['user'];
                    }
                }
                if (strlen($_POST['ten']) < 5) {
                    $error['ten'] = "Tên người dùng ít nhất 5 kí tự ";
                } else {
                    $ten_dn = $_POST['ten'];
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
                $quyen = 1;
                if (empty($error)) {
                    insert_taikhoan($user, $ten_dn, $email, $pass, $sdt, $dia_chi, $quyen);
                    // echo '<script>alert("Đăng ký thành công")</script>';
                }
            }
            include "app/views/Client/dangki.php";
            break;
        case 'home':
            $loadsanpham = loadall_sanpham();
            $loadbaiviet = loadall_baiviet();
            include "app/views/Client/home.php";
            break;
        case 'baiviet1':
            include "app/views/Client/bai_viet1.php";
            break;
        case 'baiviet2':
            include "app/views/Client/bai_viet2.php";
            break;

        case 'chitietsp':
            $loadd_bl = load_binhluan();
            $loadone_sp =  loadone_sanpham($_GET['idsp']);
            if (isset($_POST['btn']) && $_POST['btn'] != '') {
                $noidung = $_POST['noidung'];
                $id_tk = $_SESSION['user']['id'];
                $id_sp = $_GET['idsp'];
                insert_binhluan($noidung,$id_tk,$id_sp);
                header("Location: ".$_SERVER['HTTP_REFERER']);
     
            }
            include "app/views/Client/chitietsp.php";
            break;
        case 'danhmuc1':
            if (isset($_POST['btn']) && $_POST['btn']) {
                if(isset($_POST['danhmuc']) ){
                    $danhmuc = $_POST['danhmuc'];
                }else{
                    $danhmuc = '';
                }
                if(isset($_POST['gia']) ){
                    $gia = $_POST['gia'];
                }else{
                    $gia = '';
                }
                if(isset($_POST['key']) ){
                    $key = $_POST['key'];
                    echo $key;
                }else{
                    $key = '';
                }
            
            }else{
                $key = $gia = $danhmuc ='';
            }
            $loadsp = loadsp($key, $danhmuc, $gia);
            $loadall_sp =  loadall_sanpham();

            include "app/views/Client/danh_sach1.php";
            break;
        case 'lienhe':
            include "app/views/Client/lienhe.php";
            break;
        case 'sosach':
            include "app/views/Client/sosach.php";
            break;
        case 'thanh_toan':
            include "app/views/Client/thanh_toan.php";
            break;
        case 'trang_tk':

            include "app/views/Client/trang_tk.php";
            break;
        case 'suatk':

            if (isset($_SESSION['user'])) {
                $id = $_SESSION['user']['id'];
                if (isset($_POST['btn']) && $_POST['btn'] != '') {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $dia_chi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $tk =  loadone_tk($id);
                    update_taikhoan($id, $user, $email, $sdt, $pass, $dia_chi);
                }
            }
            $tk = loadone_tk($id);
            include "app/views/Client/trang_tk.php";
            break;
        case 'dangxuat':
            session_unset();
            header("location: index.php");
            break;
        default:
            include "app/views/Client/404.php";
    }
} else {
    $loadbaiviet = loadall_baiviet();
    $loadsanpham = loadall_sanpham();
    include "app/views/Client/home.php";
}

include "app/views/Client/footer.php";
ob_end_flush();

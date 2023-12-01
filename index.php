<?php
session_start();
ob_start();
include "app/models/pdo.php";
include "app/models/taikhoan.php";
include "app/models/sanpham.php";
include "app/models/binhluan.php";
include "app/models/danhmuc.php";

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
                $user = $_POST['user'];
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user, $ten, $email, $pass, $sdt, $dia_chi);
            }
            include "app/views/Client/dangki.php";
            break;
            case 'home':
                $loadbaiviet = loadall_baiviet();
                include "app/views/Client/home.php";
                break;
        case 'baiviet2':
            include "app/views/Client/bai_viet2.php";
            break;
           
        case 'chitietsp':
            //chitietsp&idsp=1
            $loadd_bl = load_binhluan();
            $loadone_sp =  loadone_sanpham($_GET['idsp']);
            include "app/views/Client/chitietsp.php";
            break;
        case 'thembl':
            if (isset($_POST['btn']) && $_POST['btn'] != '') {
                // $id_kh = $_POST['id_kh'];
                $ngay  = $_POST['noidung'];
                // $id_sp = $_POST['id_sp'];
                $noidung = $_POST['noidung'];
                insert_binhluan(1, $ngay,  $noidung, 1);
            }
            break;
        case 'danh_muc2':
            include "app/views/Client/danh_muc2.php";
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
    include "app/views/Client/home.php";
}

include "app/views/Client/footer.php";
ob_end_flush();

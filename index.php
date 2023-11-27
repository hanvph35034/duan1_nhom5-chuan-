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
include "app/models/banner.php";

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
                    $ten = $_POST['ten'];
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
                }else{
                    $sdt = $_POST['sdt'];
                }
            }
                if (empty($_POST['diachi'])) {
                    $error['diachi'] = "Vui lòng nhập địa chỉ";
                } else {
                    $dia_chi = $_POST['diachi'];
                }
                    if (empty($error)) {
                        insert_taikhoan($user,  $pass, $ten_dn, $Email, $sdt, $dia_chi, $quyen);
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
            if (isset($_GET['id']) && ($_GET['id']) != 0) {
                $id = $_GET['id'];
            }
            $load4bv=load4_baiviet();
            $loadctbv=loadctbv($id);
            include "app/views/Client/bai_viet1.php";
            break;
        case 'baiviet2':
            $loaddm = loadall_danhmuc();
            $load4bv=load4_baiviet();
            $loadbaiviet = loadall_baiviet();
            include "app/views/Client/bai_viet2.php";
            break;

        case 'chitietsp':
            //chitietsp&idsp=1
            $loadd_bl = load_binhluan();
            $loadone_sp =  loadone_sanpham($_GET['idsp']);
            if (isset($_POST['btn']) && $_POST['btn'] != '') {
                $noidung = $_POST['noidung'];
                insert_binhluan($_GET['idsp'], $noidung, $_SESSION['user']['id']);
            }
            include "app/views/Client/chitietsp.php";
            break;

        case 'thembl':
            break;
        case 'danh_muc2':
            
            include "app/views/Client/danh_muc2.php";
            break;

//sản phẩm
            case 'sanpham':
                $sanpham = loadall_sanpham();
                include "app/views/Client/danh_sach1.php";
                break;
            case 'danhmuc1':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $iddm = $_GET['id'];
                    $sanpham = loadallsp_cungdanhmuc($iddm);
                }
                if (isset($_POST['loc'])) {
                    $tk = $_POST['tk'];
                    $iddm = $_POST['id'];
                    $sanpham = loc_san_pham($tk, $iddm);
                }
                include "app/views/Client/danh_sach1.php";
                break;


                case 'addcart':
                    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                        $Idsp = $_POST['Idsp'];
                        $ten = $_POST['ten'];
                        $Gia = $_POST['Gia'];
                        $img_dai_dien = $_POST['img_dai_dien'];
                        $id_dm = $_POST['id_dm'];
        
                        if (isset($_POST['soluong']) && ($_POST['soluong']) > 0) {
                            $soluong = $_POST['soluong'];
                        } else {
                            $soluong = 1;
                        }
        
                        if (checktrungsp($Idsp) >= 0) {
                            $vitrisptrung = checktrungsp($Idsp);
                            updateslsp($vitrisptrung, $soluong);
                        } else {
                            $item = array($Idsp, $ten, $img_dai_dien, $Gia, $soluong, $id_dm,$gia_sale);
                            array_push($_SESSION['giohang'], $item);
                        }
                        // header("location: " . $_SERVER['HTTP_REFERER']);
                        // $thongbao = 'them vao gio hang';
                        // header('location: index.php?act=cart');
                    }
                    header("location: " . $_SERVER['HTTP_REFERER']);
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
    $loadbanner = loadall_banner();
    $loadspre =load7spre();
    $loadsp_sale=loadsp_sale();
    $loadbaiviet = loadall_baiviet();
    $loadsanpham = loadall_sanpham();
    include "app/views/Client/home.php";
}

include "app/views/Client/footer.php";
ob_end_flush();

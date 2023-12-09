<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include "app/models/pdo.php";
include "app/models/taikhoan.php";
include "app/models/sanpham.php";
include "app/models/binhluan.php";
include "app/models/baiviet.php";
include "app/models/danhmuc.php";
include "app/models/validate.php";
include "app/models/banner.php";
include "app/models/donhang.php";

include "app/controllers/taikhoan.php";

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
                    } else {
                        $sdt = $_POST['sdt'];
                    }
                }
                if (empty($_POST['diachi'])) {
                    $error['diachi'] = "Vui lòng nhập địa chỉ";
                } else {
                    $dia_chi = $_POST['diachi'];
                    $quyen = 2;
                }
                if (empty($error)) {
                    insert_taikhoan($user, $pass, $ten, $email, $sdt, $dia_chi, $quyen);
                }
            }
            include "app/views/Client/dangki.php";
            break;
        case 'home':
            $loadspban = loadall_sanpham_thongke();
            $loadsanpham = loadall_sanpham();
            $loadbaiviet = loadall_baiviet();
            include "app/views/Client/home.php";
            break;
        case 'baiviet1':
            if (isset($_GET['id']) && ($_GET['id']) != 0) {
                $id = $_GET['id'];
            }
            $load4bv = load4_baiviet();
            $loadctbv = loadctbv($id);
            include "app/views/Client/bai_viet1.php";
            break;
        case 'baiviet2':
            $loaddm = loadall_danhmuc();
            $load4bv = load4_baiviet();
            $loadbaiviet = loadall_baiviet();
            include "app/views/Client/bai_viet2.php";
            break;

        case 'chitietsp':
            $id = $_GET['idsp'];
            $loadd_bl = load_binhluan_sp($id);
            $loadone_sp =  loadone_sanpham($_GET['idsp']);
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $danhmuc = $_GET['iddm'];
                $load_sp_dm = loadallsp_cungdanhmuc($danhmuc);
            }

            if (isset($_POST['btn']) && $_POST['btn'] != '') {
                $noidung = $_POST['noidung'];
                $id_tk = $_SESSION['user']['id'];
                $id_sp = $_GET['idsp'];
                insert_binhluan($noidung, $id_tk, $id_sp);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            include "app/views/Client/chitietsp.php";
            break;

        case 'sanpham':
            if (isset($_POST['btn']) && $_POST['btn']) {
                if (isset($_POST['gia'])) {
                    $gia = $_POST['gia'];
                } else {
                    $gia = '';
                }
                if (isset($_POST['key'])) {
                    $key = $_POST['key'];
                    echo $key;
                } else {
                    $key = '';
                }
            } else {
                $key = $gia = '';
            }
            $loadsp = loadsp($key, $gia);
            $loadall_sp =  loadall_sanpham();
            include "app/views/Client/danh_muc2.php";
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


        case 'timkiem':
            if (isset($_POST['timkiem'])) {
                $key = $_POST['keyw'];
                $iddm = 0;
            }
            $sanpham = loadsp_timkiem($key, $iddm);
            $danhmuc = loadall_danhmuc();
            include "app/views/Client/danh_sach1.php";
            break;

        case 'giohang':

            if (isset($_POST['btn']) && $_POST['btn']) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];

                if (isset($_POST['soluong']) && ($_POST['soluong'] > 0)) {
                    $soluong = $_POST['soluong'];
                } else {
                    $soluong = 1;
                }
                $fg = false;
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item['0'] === $id) {
                        $slnew = $soluong + $item[4];
                        $_SESSION['giohang'][$i][4] = $slnew;
                        $fg = true;
                        break;
                    }
                    $i++;
                }
                //khởi tạo mag con 
                if ($fg == false) {
                    $item = array($id, $ten, $img, $gia, $soluong);
                    $_SESSION['giohang'][] = ($item);
                }
                // header('Location : index.php?act=giohang');
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            $tk = loadone_tk($id);
            include "app/views/Client/giohang.php";
            break;

        case 'datelegiohang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                    array_splice($_SESSION['giohang'], $_GET['id'], 1);
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }

            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('Location: ?act=giohang');
            } else {
                header('Location: ?act');
            }
            include "app/views/Client/giohang.php";
            break;
        case 'thanh_toan':
            if ((isset($_POST['btn'])) && ($_POST['btn'])) {
                // \\ lay du lieu
                $tong = $_POST['tong'];
                $error = [];
                if (strlen($_POST['ten']) < 5) {
                    $error['ten'] = "Tên người dùng ít nhất 5 kí tự ";
                } else {
                    $ten = $_POST['ten'];
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

                if (empty($_POST['pttt'])) {
                    $error['pttt'] = "Vui lòng chọn phương thức thanh toán";
                } else {
                    $pttt = $_POST['pttt'];
                }
                if (empty($_POST['diachi'])) {
                    $error['diachi'] = "Vui lòng nhập địa chỉ";
                } else {
                    $diachi = $_POST['diachi'];
                    $ma_dh =  "AMTIMA" . rand(0, 999999);
                    $id_tk = $_SESSION['user']['id'];
                }
                if (empty($error)) {
                    $iddh =  taodonhang($ma_dh, $tong, $pttt, $ten, $diachi, $email, $sdt, $id_tk);
                    foreach ($_SESSION['giohang'] as $key) {
                        insert_ctdh($iddh, $key[0], $key[4]);
                        unset($_SESSION['giohang']);
                        // header('Location : index.php?act=hoadon');
                        echo "<script>alert('Bạn đã thanh toán thành công');</script>";
                    }
                }
            }


            include "app/views/Client/giohang.php";
            break;
        case 'hoadon':
            include "app/views/Client/thanh_toan.php";
            break;



        case 'ctdh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadd1 = loadone_ctdonhang($id);
                $loadsp = loadone_dh($id);
            }
            include "app/views/Client/ctdh.php";


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
            // $loaddh = loadall_donhang(); 
            $load_ct_dh = load_dh_ng1($_SESSION['user']['id']);
            //    var_dump($load_ct_dh);
            include "app/views/Client/trang_tk.php";
            break;

        case 'huysp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                update_trangthai($id, $trangthai, $ten, $sdt, $diachi, $ghi_chu);
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);

            include "app/views/Client/trang_tk.php";
            break;

        case 'lienhe':
            if (isset($_POST['btn']) && $_POST['btn']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $chude = $_POST['chude'];
                $noidung = $_POST['noidung'];
 
                echo $user;
                themlh($user,  $email, $chude, $noidung);
            }
            include "app/views/Client/lienhe.php";
            break;
        case 'themlh':

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
    $loadspre = load7spre();
    $loadsp_sale = loadsp_sale();
    $loadbaiviet = loadall_baiviet();
    $loadsanpham = loadall_sanpham();
    include "app/views/Client/home.php";
}

include "app/views/Client/footer.php";
ob_end_flush();

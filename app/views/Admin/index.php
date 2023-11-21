<?php
include 'header.php';
include '../../models/pdo.php';
include '../../models/danhmuc.php';
include '../../models/binhluan.php';
include '../../models/khachhang.php';
include '../../models/donhang.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
            // quản trị bình luận
        case 'listbl':
            $load_binhluan =  load_binhluan();
            include 'listbl.php';
            break;
        case 'deletebl':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_binhluan($id);
            }
            $load_binhluan = load_binhluan();
            include 'listbl.php';
            break;
            //  danh mục
        case 'qtdm':
            $loaddm = loadall_danhmuc();
            include 'QTDM/list.php';
            break;
        case 'adddm':
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
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $loadd = loadone_danhmuc($id);
            }
            include 'QTDM/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['submit'])) {
                $update = $_POST['tendm'];
                $id = $_POST['iddm'];
                fix_danhmuc($id, $update);
            }
            $loaddm = loadall_danhmuc();
            include 'QTDM/list.php';
            break;
        case 'deletedm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $loaddm = loadall_danhmuc();
            echo '<script>alert("vui long quay ve trang chu");</script>';
            include 'QTDM/list.php';
            break;
            // khách hàng
        case 'qtkh':
            $loadkh = loadall_khachhang();
            include 'QTKH/list.php';
            break;
            case 'deletekh':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_khachhang($id);
                }
                $loadkh = loadall_khachhang();
                include 'QTKH/list.php';
                break;
        case 'updatekh':  
            include 'QTKH/list.php';
            break;
        case 'addkh':
            if (isset($_POST['submit'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $ten_dn = $_POST['ten_dn'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                insert_khachhang($user,$pass,$ten_dn,$diachi,$sdt,$email,$date);
            }
            include 'QTKH/add.php';
            break;
            


            // đơn hàng
        case 'qtdh':
            include 'QTDH/list.php';
            break;
            // case 'updatekm':
            //     include 'QTKM/update.php';
            //     break;
            // case 'addkm':
            //     include 'QTKM/add.php';
            //     break;
            // sản phẩm
        case 'qtsp':
            include 'QTSP/list.php';
            break;
        case 'addsp':
            include 'QTSP/add.php';
            break;
        case 'updatesp':
            include 'QTSP/update.php';
            break;
            // banner
        case 'qtbanner':
            include 'QTBANER/list.php';
            break;
        case 'addbanner':
            include 'QTBANER/add.php';
            break;
        case 'updatebanner':
            include 'QTBANER/update.php';
            break;
            // bài viết
        case 'qtbv':
            include 'QTBV/list.php';
            break;
        case 'addbv':
            include 'QTBV/add.php';
            break;
        case 'updatebv':
            include 'QTBV/update.php';
            break;

        case 'qtquyen':
            include 'quyen/list.php';
            break;
        case 'addquyen':
            include 'quyen/add.php';
            break;
        case 'updatequyen':
            include 'quyen/update.php';
            break;

        case 'bienthe':
         
                $loadd = chitietdh();
            
            include 'QTBT/list.php';
            break;
        case 'addbt':
            include 'QTBT/add.php';
            break;
        case 'updatebt':
            include 'QTBT/update.php';
            break;


        default:
            include '404.php';
    }
} else {
    include 'home.php';
}

include 'footer.php';

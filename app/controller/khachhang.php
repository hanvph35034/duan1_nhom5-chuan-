<?php
function khachhang()
{
    $loadkh = loadall_khachhang();
    include 'QTKH/list.php';
}

function themkhachhang()
{
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
}

function suakhachhang()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        $khachhang = loadone_khachhang($id);
    }
    include 'khachhang/update.php';
}

function updatekhachhang()
{
    if (isset($_POST['suakh'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $img = $_FILES['img']['name'];
        $target_dir = '../../view/img/';
        $target_file = $target_dir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($ten != "" && $tendangnhap != "" && $matkhau != "" && $email != "" && $sdt != "" && $diachi != "") {
            update_khachhang($id, $ten, $tendangnhap, $matkhau, $email, $sdt, $diachi, $img);

            $thongbao = 'sửa khách hàng thành công';
        } else {
            $thongbao = ' sửa thất bại';
        }
    }
    $khachhang = loadone_khachhang($id);
    include 'khachhang/update.php';
}
function xoakhachhang()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_khachhang($id);
    }
    $loadkh = loadall_khachhang();
    include 'QTKH/list.php';
}


// function xoamemkhachhang()
// {
//     if (isset($_GET['id']) && ($_GET['id']) > 0) {
//         $id = $_GET['id'];
//         xoamem_khachhang($id);
//     }
//     $khachhang = loadall_khachhang();
//     include 'khachhang/list.php';
// }

// function khachhangxoamem()
// {
//     $khachhang = loadall_khachhang_xoamem();
//     include 'khachhang/xoamem.php';
// }

// function restorekhachhang()
// {
//     if (isset($_GET['id']) && ($_GET['id']) > 0) {
//         $id = $_GET['id'];
//         restore_khachhang($id);
//     }
//     $khachhang = loadall_khachhang_xoamem();
//     include 'khachhang/xoamem.php';
// }


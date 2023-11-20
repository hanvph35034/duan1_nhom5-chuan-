<?php
include "app/views/Client/header.php";

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        case 'login':
            include "app/views/Client/login.php";
            break;
        case 'baiviet1':
            include "app/views/Client/bai_viet1.php";
            break;
        case 'baiviet2':
            include "app/views/Client/bai_viet2.php";
            break;
        case 'blog':
            include "app/views/Client/blog.php";
            break;
        case 'chitietsp':
            include "app/views/Client/chitietsp.php";
            break;
        case 'danh_muc1':
            include "app/views/Client/danh_sach1.php";
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
        default:
            include "app/views/Client/404.php";
    }
} else {
    include "app/views/Client/home.php";
}

include "app/views/Client/footer.php";

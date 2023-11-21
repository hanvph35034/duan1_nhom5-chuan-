<?php
function dang_xuat()
{
    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
        dangxuat();
    }
    include 'taikhoan/dangnhap.php';
}

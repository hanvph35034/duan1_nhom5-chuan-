<?php
session_start();

if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $sanphamid = $_POST['id'];
    $sanphamten = $_POST['ten'];
    $sanphamgia = $_POST['gia'];
    // kiểm tra sản phẩm có trong giỏ hàng
    $index = array_search($sanphamid, array_column($_SESSION['cart'], 'id'));


    if ($index !== false) {
        $_SESSION['cart'][$index]['soluong'] += 1;
    } else {
        $sampham = [
            'id' => $sanphamid,
            'ten' => $sanphamten,
            'gia' => $sanphamgia,
            'soluong' => 1
        ];
        $_SESSION['cart'][] = $sanpham;
    }
    echo count($_SESSION['cart']);
} else {
    echo "yeu công không hợp lệ";
}
}

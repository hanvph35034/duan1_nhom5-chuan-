<?php
//load đơn hàng
// function load_donhang($id){
//     $sql = "SELECT donhang.id AS id_donhang, donhang.ngay_dat, donhang.tong_gia, donhang.trang_thai,
//     khachang.ten AS ten_khachhang, khachang.dia_chi, khachang.so_dien_thoai, khachang.id AS id_khachhang
//     FROM `donhang` 
//     JOIN khachang ON donhang.id_kh = khachang.id ";
//     $donhang = pdo_query($sql);
//     return $donhang;
// }


//load tổng số đơn hàng
function load_so_don_hang()
{
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '1';";
    $donhang = pdo_query($sql);
    return $donhang;
}
// // load so đơn hàng chưa hoàn thành
// function load_sdh_chua_ht()
// {
//     $sql = "SELECT COUNT(*) AS tong_so_don_hang
//     FROM donhang
//     WHERE trang_thai = '1';";
//     $donhang = pdo_query($sql);
//     return $donhang;
// }
//load so don hang hoan thanh

// function load_sdh_ht()
// {
//     $sql = "SELECT COUNT(*) AS tong_so_don_hang
//     FROM donhang
//     WHERE trang_thai = '2';";
//     $donhang = pdo_query($sql);
//     return $donhang;
// }
//load 
function loadall_quyen(){
    $sql = "select * from quyen order by id asc";
    $listquyen = pdo_query($sql);
    return $listquyen;
}

//thêm

function add_quyen($ten,$trangthai)
{
    $sql = "INSERT INTO `quyen`(`ten`, `trang_thai`) VALUES ('$ten','$trangthai')";
    pdo_execute($sql);
}
//sửa
// load đơn hàng de sua
function loadone_quyen($id){
    $sql = "select * from quyen where id = '$id'";
    $quyen = pdo_query_one($sql);
    return $quyen;
}
function fix_quyen($id, $ten,$trang_thai){
    $sql = "UPDATE `quyen` SET `ten`='$ten',`trang_thai`='$trang_thai' WHERE  id = '$id'";
    pdo_execute($sql);
}

// xoa don hang
function delete_quyen($id)
{
    $sql = "DELETE from quyen where id = '$id';";
    pdo_execute($sql);
}
?>
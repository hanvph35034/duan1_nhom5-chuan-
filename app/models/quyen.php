<?php



//load tổng số đơn hàng
function load_so_don_hang()
{
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '1';";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadall_quyen(){
    $sql = "SELECT * FROM `quyen` WHERE 1";
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
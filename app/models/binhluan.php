<?php
// load binh luan cua san pham
function load_binhluan(){
    $sql = "SELECT binhluan.id, binhluan.noidung as ndbl, binhluan.ngay as ngaybl, sanpham.ten as tensp, sanpham.img_dai_dien, khachhang.ten
    FROM binhluan JOIN khachhang ON binhluan.id_kh = khachhang.id
    JOIN sanpham ON binhluan.id_sp = sanpham.id";
    $binhluan = pdo_query($sql);
    return $binhluan;
}
// load so binh luan cua san pham
function load_so_binh_luan(){
    $sql = "SELECT *,count(binhluan.id) as sobinhluan, sanpham.id, sanpham.ten, sanpham.iddm from sanpham join binhluan on sanpham.id=binhluan.idsp group by sanpham.id;";
    // $sql = "SELECT COUNT(binhluan.idpro) as sobl, sanpham.id FROM `binhluan` JOIN sanpham on binhluan.idpro=sanpham.id JOIN taikhoan on taikhoan.id = binhluan.iduser WHERE sanpham.id = 1;";
    $binhluan = pdo_query($sql);
    return $binhluan;
}
//  ADD COMMENTS
function insert_binhluan($id_sp, $noidung,$id_kh){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `id_kh`, `id_sp`, `ngaybinhluan`) 
        VALUES ('$noidung','$id_kh','$id_sp','$date');
    ";
    pdo_execute($sql);
}

//hiển thị tất cả bình luận của 1 sp theo id
function loadbinhluan_sanpham($id) {
    $sql = "SELECT COUNT(*) AS soluong FROM binhluan WHERE id_sp = $id";
    $result = pdo_query_one($sql);
    return $result;
}

// chi tiet binh luan
function chitiet_binhluan($id) {
    $sql = "SELECT binhluan.id, binhluan.noidung,binhluan.ngay,khachhang.ten FROM binhluan INNER JOIN khachhang 
    ON binhluan.id_kh = khachhang.id WHERE binhluan.id_sp = $id ORDER BY binhluan.ngay DESC";
    $result = pdo_query($sql);
    return $result;
}
// xoa binh luan
function delete_binhluan($id){
    $sql = "DELETE from binhluan where id = '$id';";
    pdo_execute($sql);
}

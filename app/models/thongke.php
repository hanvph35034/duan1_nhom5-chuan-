<?php
// thong ke
function loadall_sanpham_thongke(){
    $sql = "SELECT
    dh.id_sp AS id_sp,
    sp.ten AS ten_san_pham,
    dh.ngay_dat AS ngay_ban,
    sp.gia_sale AS gia,
    SUM(ct.so_luong) AS so_luong_da_ban,
    SUM(ct.so_luong * sp.gia_sale)  AS tong_tien
  FROM donhang dh
  JOIN ct_don_hang ct ON dh.id = ct.id_dh
  JOIN sanpham sp ON dh.id_sp = sp.Idsp
  WHERE dh.trangthai = 'Đã giao hàng'
  GROUP BY dh.id_sp, dh.ngay_dat
  ORDER BY so_luong_da_ban DESC;
  
  ";
    return pdo_query($sql);
}

?>
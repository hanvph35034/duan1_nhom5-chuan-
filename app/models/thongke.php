<?php
// thong ke
function loadall_sanpham_thongke(){
    $sql = "SELECT
    sp.Idsp AS id_sp,
    sp.ten AS ten_san_pham,
    sp.gia_sale AS gia,
    SUM(ct.so_luong) AS so_luong_da_ban,
    SUM(ct.so_luong * sp.gia_sale) AS tong_tien
FROM
    ct_don_hang ct
JOIN
    donhang dh ON ct.id_dh = dh.id
JOIN
    sanpham sp ON ct.id_sp = sp.Idsp
    where dh.trangthai='3'
GROUP BY
    sp.Idsp, sp.ten, sp.Gia
ORDER BY
    so_luong_da_ban DESC;
";
    return pdo_query($sql);
}

?>
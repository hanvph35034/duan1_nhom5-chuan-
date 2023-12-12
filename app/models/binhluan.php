<?php
// load binh luan cua san pham
function load_binhluan()
{
    $sql = "SELECT binhluan.id, binhluan.noidung as ndbl, binhluan.date as ngaybl, sanpham.ten as tensp, sanpham.img_dai_dien, tai_khoan.ten_dn
    FROM binhluan JOIN tai_khoan ON binhluan.id_tk = tai_khoan.id
    JOIN sanpham ON binhluan.id_sp = sanpham.Idsp";
    $binhluan = pdo_query($sql);
    return $binhluan;
}
function load_binhluan_sp($id)
{
    $sql = "SELECT
    tk.User AS ten_nguoi_dung,
    bl.date AS ngay_binh_luan,
    bl.NoiDung AS noi_dung_binh_luan
FROM binhluan bl
JOIN tai_khoan tk ON bl.id_tk = tk.id
WHERE bl.Id_sp = $id
";
    $binhluan = pdo_query($sql);
    return $binhluan;
}


function insert_binhluan($noidung, $id_tk, $id_sp)
{
    $date = date('Y-m-d');
    $sql = "
    INSERT INTO `binhluan` ( `date`, `NoiDung`, `id_tk`, `Id_sp`) VALUES ('$date','$noidung','$id_tk','$id_sp')";
    pdo_execute($sql);
}

//hiển thị tất cả bình luận của 1 sp theo id

// xoa binh luan
function delete_binhluan($id)
{
    $sql = "DELETE from binhluan where id = '$id';";
    pdo_execute($sql);
}

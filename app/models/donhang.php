<?php
//load đơn hàng
function load_donhang($id)
{
    $sql = "SELECT donhang.id AS id_donhang, donhang.ngay_dat, donhang.tong_gia, donhang.trang_thai,
    khachang.ten AS ten_khachhang, khachang.dia_chi, khachang.so_dien_thoai, khachang.id AS id_khachhang
    FROM `donhang` 
    JOIN khachang ON donhang.id_kh = khachang.id ";
    $donhang = pdo_query($sql);
    return $donhang;
}
//load tổng số đơn hàng

function fix_donhang($id, $ngay_dat, $tong_gia, $trang_thai, $id_kh)
{
    // Assuming you have a PDO object named $pdo
    $sql = "UPDATE `donhang` SET 
                `ngay_dat` = '$ngay_dat', 
                `tong_gia` = '$tong_gia', 
                `trang_thai` = '$trang_thai', 
                `id_kh` = '$id_kh' 
            WHERE `id` = $id";
    pdo_execute($sql);
}
// 
function add_donhang($ngay_dat, $tong_gia, $trang_thai, $id_kh)
{
    $sql = "INSERT INTO `donhang` (`ngay_dat`, `tong_gia`, `trang_thai`, `id_kh`)
                VALUES ('$ngay_dat', '$tong_gia', '$trang_thai', '$id_kh')";
    pdo_execute($sql);
}
function loadone_ctdonhang($id)
{
    $sql = "SELECT sanpham.ten as tensp,sanpham.img_dai_dien,
    ct_don_hang.so_luong,sanpham.gia_sale,donhang.ten,
    donhang.diachi ,donhang.sdt,donhang.email
    ,donhang.trangthai ,
    donhang.ghi_chu ,donhang.tong_gia
     FROM sanpham,ct_don_hang,donhang 
     WHERE ct_don_hang.id_dh = donhang.id 
     AND ct_don_hang.id_sp = sanpham.Idsp
      AND donhang.id = '$id' ;
;
";
    $dh = pdo_query($sql);
    return $dh;
}
function loadall_donhang()
{
    $sql = "SELECT * FROM `donhang` WHERE 1";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
// load so đơn hàng chưa hoàn thành
function load_sdh_chua_ht()
{
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '1';";
    $donhang = pdo_query($sql);
    return $donhang;
}
//load so don hang hoan thanh

function load_sdh_ht()
{
    $sql = "SELECT COUNT(*) AS tong_so_don_hang
    FROM donhang
    WHERE trang_thai = '2';";
    $donhang = pdo_query($sql);
    return $donhang;
}
// xoa don hang
function delete_don_hang($id)
{
    $sql = "DELETE FROM `donhang` WHERE id = '$id'";
    pdo_execute($sql);
}
function chitietdh()
{
    $sql = "SELECT donhang.id as iddh, sanpham.id as idsp,sanpham.ten,ctdh.so_luong,ctdh.thanh_tien, ctdh.ghi_chu, donhang.trang_thai  FROM 
    donhang JOIN ctdh on donhang.id = ctdh.id_dh JOIN sanpham on ctdh.id_sp = sanpham.id";
    $donhang = pdo_query($sql);
    return $donhang;
}
function taodonhang($ma_dh, $tong, $pttt, $ten, $diachi, $email, $sdt,$id_tk)

{
   $date = date('Y-m-d');
  $conn = pdo_get_connection();
  $sql = $conn -> prepare("INSERT INTO `donhang`(`ma_dh`,`ngay_dat`, `tong_gia`, `phuongthucthanhtoan`, `ten`, `sdt`, `email`, `diachi` ,`id_tk`) VALUES ('$ma_dh','$date', '$tong' ,'$pttt' , '$ten', '$diachi', '$email', '$sdt','$id_tk')");
   $sql -> execute();
   $id = $conn -> lastInsertId();
   return $id;
}
function insert_ctdh($iddh,$id_sp,$soluong){
$sql = "INSERT INTO `ct_don_hang`(`id_dh`,`id_sp`, `so_luong`) VALUES ('$iddh','$id_sp','$soluong')" ;
pdo_execute($sql);
}function loadone_dh($id)
{
    $sql = "select * from donhang where id = '$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function update_dh($id, $trangthai, $ten, $sdt, $diachi, $ghi_chu)
{
    // Assuming you have a PDO object named $pdo
    $sql = "UPDATE donhang
    SET trangthai = '$trangthai',
        ten = '$ten',
        sdt = '$sdt',
        diachi = '$diachi',
        ghi_chu = '$ghi_chu'
    WHERE id = $id;
    ;"
            
            ;
    pdo_execute($sql);
}


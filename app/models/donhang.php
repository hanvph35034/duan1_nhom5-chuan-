<?php

function loadone_ctdonhang($id)
{
    $sql = "SELECT sanpham.ten as tensp,
    sanpham.img_dai_dien,
    ct_don_hang.so_luong,
    sanpham.gia_sale,
    donhang.ten,
    donhang.diachi as diachi ,
    donhang.sdt,
    donhang.email,
    donhang.trangthai ,
    donhang.ghi_chu ,
    donhang.tong_gia
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

//load so don hang hoan thanh


// xoa don hang
function delete_don_hang($id)
{
    $sql = "DELETE FROM `donhang` WHERE id = '$id'";
    pdo_execute($sql);
}

function taodonhang($ma_dh, $tong, $pttt, $ten, $diachi, $email, $sdt,$id_tk)

{
   $date = date('Y-m-d');
  $conn = pdo_get_connection();
  $sql = $conn -> prepare("INSERT INTO `donhang`(`ma_dh`,`ngay_dat`, `tong_gia`, `phuongthucthanhtoan`, `ten`, `sdt`, `email`, `diachi` ,`id_tk`)
                                         VALUES ('$ma_dh','$date', '$tong' ,'$pttt' , '$ten', '$sdt', '$email', '$diachi','$id_tk')");
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

    function load_dh_ng1($id){
        $sql = "select * from donhang
    WHERE 
        donhang.id_tk = '$id';
    ";
          return   pdo_query($sql);
        
        }
        function update_trangthai($id, $trangthai, $ten, $sdt, $diachi, $ghi_chu)
        {
            // Assuming you have a PDO object named $pdo
            $sql = "UPDATE donhang
            SET trangthai = 
                CASE 
                    WHEN trangthai = 0 THEN 4 
                    WHEN trangthai = 2 THEN 3
                    ELSE '$trangthai' 
                END,
                ten = '$ten',
                sdt = '$sdt',
                diachi = '$diachi',
                ghi_chu = '$ghi_chu'
            WHERE id = $id;;
            ;"
                    
                    ;
            pdo_execute($sql);
        }
        function loaddh($key = "", $trangthai = "")
{
    $sql = "SELECT * FROM `donhang`";
    // if ($danhmuc > 0 && $gia != "") {
    //     $sql .= " and gia_sale >= $gia and id_dm = '$danhmuc'";
    // }
    // if ($danhmuc > 0) {
    //     $sql .= " AND id_dm = '$danhmuc'";
    // }
    // if ($key != "") {
    //     $sql .= " and ten like '%$key%'";
    // }
    // if ($gia != "") {
    //     $sql .= " AND gia_sale BETWEEN $gia";
    // }
    if ($trangthai == "") {
        $sql .= " WHERE 1 ";
    }
    if ($trangthai == "0") {
        $sql .= " WHERE trangthai = 0 ";
    }
    if ($trangthai == "1") {
        $sql .= " WHERE trangthai = 1";
    }
    if ($trangthai == "2" ) {
        $sql .= " WHERE trangthai = 2";
    }
    if ($trangthai == "3" ) {
        $sql .= " WHERE trangthai = 3";
    }
    if ($trangthai == "4" ) {
        $sql .= " WHERE trangthai = 4";
    }
    return pdo_query($sql);
}
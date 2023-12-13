<?php

// hiển thị 9 sản phẩm home


//load top 10 sản phẩm có lượt xem cao nhất

//lọc sp
function loc_san_pham($tk, $id){
    $sql = "SELECT * FROM sanpham 
              JOIN danhmuc ON sanpham.id_dm = danhmuc.id 
              WHERE sanpham.trangthai = '1' AND danhmuc.trangthai = '1' AND sanpham.id_dm = '$id' ";
if ($tk == 3) {
    $sql .= " ORDER BY sanpham.Idsp DESC limit 0,4;";
}

if ($tk == 2) {
    $sql .= " ORDER BY sanpham.gia_sale DESC;";
}

// tăng
if ($tk == 1) {
    $sql .= " ORDER BY sanpham.gia_sale ASC;";
}

return pdo_query($sql);

}
// load 1 sản phẩm cùng loại
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where Idsp = '$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

// load các sản phẩm cùng loại trừ sản phẩm đang xem


// load all san pham cung danh muc
function loadallsp_cungdanhmuc($danhmuc)
{
    $sql = "select * from `sanpham` where id_dm = '$danhmuc'";
    $sanpham = pdo_query($sql);
    return $sanpham;
}


// load tất cả các sản phẩm
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham where trangthai='1' ";
    if ($keyw != "") {
        $sql.= "and ten like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql.= "and id_dm = '" . $iddm . "'";
    }
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// sản phẩm giá rẻ
function load7spre()
{
    $sql = "SELECT * FROM `sanpham`
        ORDER BY Gia ASC
        LIMIT 7;";
    $listspre = pdo_query($sql);
    return $listspre;
}
function loadsp_sale()
{
    $sql = "SELECT 
    s.Idsp AS Idsp,
        s.id_dm AS id_dm,
        s.ten AS TenSanPham,
        s.Gia AS Gia,
        s.img_dai_dien AS HinhDaiDien,
        d.Danhmuc AS TenDanhMuc,
        s.so_luong AS SoLuong,
        s.gia_sale AS GiaSale,
        s.img_1 AS Hinh1,
        ROUND(((CAST(s.Gia AS DECIMAL) - CAST(s.gia_sale AS DECIMAL)) / CAST(s.Gia AS DECIMAL)) * 100) AS PhanTramGiamGia
    FROM 
        sanpham s
    JOIN 
        danhmuc d ON s.id_dm = d.id
    ORDER BY PhanTramGiamGia DESC LIMIT 10; -- Sắp xếp giảm dần theo PhanTramGiamGia
    ;
    ";
    $listspre = pdo_query($sql);
    return $listspre;
}
// sửa sản phẩm
function update_sanpham($id, $ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3)
{
    $sql = "UPDATE `sanpham` SET `ten`='$ten',`Mota`='$mo_ta',`gia`='$gia',`img_dai_dien`='$img_dai_dien',
            `ngay_nhap`='$ngay_nhap',`id_dm`='$id_danh_muc', `so_luong` = '$so_luong' ,`gia_sale` = '$gia_sale' ,`img_1`='$img_1',`img_2`='$img_2',`img_3`='$img_3' WHERE `Idsp`='$id'";
    pdo_execute($sql);
}

// thêm sản phẩm
function add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3)
{
    $sql = "INSERT INTO `sanpham` (`ten`, `MoTa`, `gia`, `img_dai_dien`, `ngay_nhap`, `id_dm`, `so_luong`, `gia_sale`,`img_1`, `img_2`, `img_3`)
        VALUES ('$ten', '$mo_ta', $gia, '$img_dai_dien', '$ngay_nhap', '$id_danh_muc', '$so_luong' ,'$gia_sale', '$img_1', '$img_2', '$img_3')";
    pdo_execute($sql);
}




// luot xem ++


// xóa mềm

// khôi phục sản phẩm xóa mềm

// loadall các sản phẩm xóa mềm



// check trùng sản phẩm


// update số lượng sản phẩm giỏ hàng

function delete_sanpham($id)
{
    $sql = "delete from sanpham where Idsp = '$id'";
    pdo_execute($sql);
}
function loadsp($key = "", $gia = "")
{
    $sql = "SELECT * FROM `sanpham` WHERE 1 ";
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
    if ($gia == "newsp") {
        $sql .= " ORDER BY Idsp DESC ";
    }
    if ($gia == "max") {
        $sql .= " ORDER BY gia_sale DESC";
    }
    if ($gia == "min" ) {
        $sql .= " ORDER BY gia_sale ASC";
    }
    return pdo_query($sql);
}
function loadsp_timkiem($keyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham where trangthai='1' ";
    if ($keyw != "") {
        $sql.= "and ten like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql.= "and id_dm = '" . $iddm . "'";
    }
    $sql.= "order by Idsp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}



<?php

// hiển thị 9 sản phẩm home
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 and trangthai='0' order by view desc limit 0,12 ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//load top 10 sản phẩm có lượt xem cao nhất
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
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
function loadallsp_cungloai($Idsp, $id_dm)
{
    $sql = "select * from sanpham where Idsp!=$Idsp and id_dm = $id_dm limit 0,4";
    $sanpham = pdo_query($sql);
    return $sanpham;
}

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

function add_sanpham1($tensanpham, $giasanpham, $anhdaidien, $mota, $soluongsanpham, $iddm)
{
    $sql = "insert into 
        sanpham(ten_san_pham, gia_san_pham, img_dai_dien, mo_ta_san_pham, so_luong, iddm) 
        VALUES($tensanpham, $giasanpham, $anhdaidien, $mota, $soluongsanpham, $iddm);";
    pdo_execute($sql);
}


// luot xem ++
function update_view($idsp)
{
    $sql = "update sanpham set luot_xem = luot_xem+1 where id='$idsp'";
    pdo_execute($sql);
}

// xóa mềm
function soft_delete_sanpham($id)
{
    $sql = "update sanpham set trangthai='1' where id = '$id'";
    pdo_execute($sql);
}
// khôi phục sản phẩm xóa mềm
function restore_sanpham($id)
{
    $sql = "update sanpham set trangthai='0' where id = '$id'";
    pdo_execute($sql);
}
// loadall các sản phẩm xóa mềm
function loadall_sanpham_soft($keyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where trangthai!='0' ";
    if ($keyw != "") {
        $sql .= "and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= "and iddm = '" . $iddm . "'";
    }
    $sql .= "order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// luot xem ++
// function update_view($idsp)
// {
//     $sql = "update sanpham set luot_xem = luot_xem+1 where id='$idsp'";
//     pdo_execute($sql);
// }

// check trùng sản phẩm
function checktrungsp($id)
{
    $vitri = -1;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][0] == $id) {
            $vitri = $i;
        }
    }
    return $vitri;
}

// update số lượng sản phẩm giỏ hàng
function updateslsp($vitrisptrung, $soluong)
{
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($i == $vitrisptrung) {
            $_SESSION['giohang'][$i][4] += $soluong;
            break;
        }
    }
}
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
function listcart($idtk)
{
    $sql = "SELECT giohang.id as idcart , sanpham.ten ,sanpham.img_dai_dien , sanpham.gia_sale , sanpham.Idsp , giohang.soluong FROM sanpham JOIN giohang ON sanpham.Idsp = giohang.id_sp Where id_tk = $idtk ";
    return pdo_query($sql);
}
function themcart($idsp, $idtk, $soluong)
{
    $sql = "INSERT INTO `giohang`(`id_tk`, `id_sp`, `soluong`) VALUES ('$idtk','$idsp','$soluong')";
    pdo_execute($sql);
}
function xoagiohang($id)
{
    $sql = "delete from `giohang` where id = '$id'";
    pdo_execute($sql);
}

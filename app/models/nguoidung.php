<?php

function add_nguoi_dung($tennguoidung, $tendangnhap, $matkhau, $email, $sdt, $vaitro, $img)
{
    if ($img != "") {
        $sql = "INSERT INTO nguoidung(ten_nguoi_dung, ten_dang_nhap, mat_khau, email_nguoi_dung, sdt_nguoi_dung, vai_tro, img_nguoi_dung) 
    VALUES('$tennguoidung', '$tendangnhap', '$matkhau', '$email', '$sdt', '$vaitro', '$img');";
    } else {
        $sql = "INSERT INTO nguoidung(ten_nguoi_dung, ten_dang_nhap, mat_khau, email_nguoi_dung, sdt_nguoi_dung, vai_tro) 
    VALUES('$tennguoidung', '$tendangnhap', '$matkhau', '$email', '$sdt', '$vaitro');";
    }
    pdo_execute($sql);
}

function loadall_nguoidung()
{
    $sql = "SELECT * FROM nguoidung WHERE trang_thai = 0";
    $nguoidung = pdo_query($sql);
    return $nguoidung;
}
function loadall_nguoidung_xoamem()
{
    $sql = "SELECT * FROM nguoidung WHERE trang_thai = 1";
    $nguoidung = pdo_query($sql);
    return $nguoidung;
}
function restore_nguoidung($id)
{
    $sql = "UPDATE nguoidung SET trang_thai = '0' WHERE id = '$id';";
    pdo_execute($sql);
}
function xoa_mem_nguoi_dung($id)
{
    $sql = "UPDATE nguoidung SET trang_thai = '1' WHERE id = '$id';";
    pdo_execute($sql);
}

function delete_nguoidung($id)
{
    $sql = "DELETE FROM nguoidung where id = '$id';";
    pdo_execute($sql);
}

function loadone_nguoidung($id)
{
    $sql = "SELECT * FROM nguoidung WHERE id = '$id'";
    $nguoidung = pdo_query_one($sql);
    return $nguoidung;
}

function update_nguoidung($id, $tennguoidung, $tendangnhap, $matkhau, $email, $sdt, $vaitro, $img)
{
    $sql = "UPDATE nguoidung SET ten_nguoi_dung = '$tennguoidung', ten_dang_nhap = '$tendangnhap', email_nguoi_dung = '$email', sdt_nguoi_dung = '$sdt', vai_tro = '$vaitro'";
    if ($matkhau != "") {
        $sql .= ", mat_khau = '$matkhau'";
    }
    if ($img != "") {
        $sql .= ", img_nguoi_dung = '$img'";
    }
    $sql .= " WHERE id = '$id';";
    pdo_execute($sql);
}

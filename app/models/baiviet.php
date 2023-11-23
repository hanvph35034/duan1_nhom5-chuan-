<?php
//load tất cả bài viêt
function loadall_baiviet(){
    $sql = 'SELECT * FROM `baiviet` WHERE 1';
    $list = pdo_query($sql);
    return $list;
}
//load 1 tin tuc để sửa
function loadone_baiviet($id)
{
    $sql = "SELECT * FROM baiviet WHERE id = '$id';";
    $baiviet = pdo_query_one($sql);
    return $baiviet;
}
//sửa bài viết
function update_baiviet($id, $tieu_de, $img, $noi_dung, $ngay_dang)
{
    $sql = "UPDATE `baiviet`
     SET 
    `tieu_de` = '$tieu_de',
    `noi_dung` = '$noi_dung',
    `ngay_dang` = '$ngay_dang'
    WHERE
      `id`='$id' AND (`img`='$img' OR '$img' = '');";
    pdo_execute($sql);
}
function add_baiviet( $tieu_de, $img, $noi_dung, $ngay_dang)
{
    $sql = "INSERT INTO `baiviet`(`tieu_de`, `img`, `noi_dung`, `ngay_dang`) VALUES ('$tieu_de','$img','$noi_dung','$ngay_dang');";
    pdo_execute($sql);
}
//xóa
function delete_baiviet($id)
{
    $sql = "DELETE FROM `baiviet` WHERE id='$id';";
    pdo_execute($sql);
}
?>
<?php
//tat ca banner
function loadall_banner()
{
    $sql = "SELECT * FROM `banner` WHERE 1";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
// them banner

function add_banner($img, $ten, $tieu_de1, $limk)
{
    $sql = "INSERT INTO `banner`(`img`,`tieu_de`,`tieu_de1`,`limk`) VALUES ('$img','$ten','$tieu_de1','$limk')";
    pdo_execute($sql);
}
//load 1 banner de sua
function loadone_banner($id)
{
    $sql = "select * from banner where id_bner = '$id'";
    $banner = pdo_query_one($sql);
    return $banner;
}
// xoa banner
function delete_banner($id)
{
    $sql = "delete from banner where id_bner = '$id'";
    pdo_execute($sql);
}
// sua banner
function update_banner($id, $img, $ten, $tieu_de1,$limk)
{
    $sql = "UPDATE `banner` SET `img`='$img',`tieu_de`='$ten',`tieu_de1`='$tieu_de1',`limk`='$limk' WHERE id_bner= '$id'";
    pdo_execute($sql);
}

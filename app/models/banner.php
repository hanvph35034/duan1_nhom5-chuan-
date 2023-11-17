<?php
//tat ca banner
function loadall_banner(){
    $sql = "SELECT * FROM banner
    ORDER BY id DESC;";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
// them banner
function insert_danhmuc($img,$ten,$link){
    $sql = "INSERT INTO `danhmuc`(`img,ten,link`) VALUES ('$img,$ten,$link')";
    pdo_execute($sql);
}
//load 1 banner de sua
function loadone_banner($id){
    $sql = "select * from banner where id = '$id'";
    $banner = pdo_query_one($sql);
    return $banner;
}
// xoa banner
function delete_banner($id){
    $sql = "delete from banner where id = '$id'";
    pdo_execute($sql);
}
// sua banner
function fix_dbanner($id, $img,$ten,$link){
    if ($img != '') {
        $sql = "update danhmuc set img ='$img',ten = '$ten',link = '$link'  where id = '$id'";
    } else {
        $sql = "update danhmuc set ten = '$ten',link = '$link'  where id = '$id'";
    }
    
    pdo_execute($sql);
}

?>
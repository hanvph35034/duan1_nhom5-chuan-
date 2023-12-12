<?php
// load danh muc
function loadall_danhmuc(){
    $sql = "SELECT * FROM `Danhmuc`  WHERE 1";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}


// load danh muc xoa mem


// them danh muc 
function insert_danhmuc($Danhmuc){
    $sql = "INSERT INTO `danhmuc`(`Danhmuc`) VALUES ('$Danhmuc')";
    pdo_execute($sql);
}

// load one danh muc de sua
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id = '$id'";
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}

// xoa danh muc
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id = '$id'";
    pdo_execute($sql);
}

// xoa mem
// khoi phuc danh muc


// sua danh muc
function fix_danhmuc($id, $ten){
    $sql = "update danhmuc set `Danhmuc`='$ten'  where id = '$id'";
    pdo_execute($sql);
}

?>
<?php



//load tổng số đơn hàng


function loadall_quyen(){
    $sql = "SELECT tai_khoan.User ,tai_khoan.id,  quyen.id_quyen , quyen.quyen FROM tai_khoan, quyen WHERE tai_khoan.id_quyen = quyen.id_quyen";
    $listquyen = pdo_query($sql);
    return $listquyen;
}
function loada_quyen(){
    $sql = "SELECT * FROM `quyen` WHERE 1";
    $listquyen = pdo_query($sql);
    return $listquyen;
}

//thêm


//sửa
// load đơn hàng de sua

function fix_quyen($id, $quyen){
    $sql = "UPDATE tai_khoan SET `id_quyen` = $quyen WHERE id = '$id'";
    pdo_execute($sql);
}

// xoa don hang

?>
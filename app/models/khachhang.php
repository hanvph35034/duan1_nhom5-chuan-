<?php
// load khach hang
    function loadall_khachhang(){
        $sql = "select * from khachhang where 1";
        $listkh = pdo_query($sql);
        return $listkh;
    }
// load khach hang de sua
    function loadone_khachhang($id){
        $sql = "select * from khachhang where id = '$id'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
// sua khach hang
    function update_khachhang($id ,$user, $pass, $email, $address, $tel, $role){
        $sql = "update khachhang set user='$user', pass='$pass', email='$email', address='$address', tel='$tel', role='$role' where id='$id'";
        pdo_execute($sql);
    } 
?>
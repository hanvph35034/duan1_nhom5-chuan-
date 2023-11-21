<?php
// load khach hang
    function loadall_khachhang(){
        $sql = "select * from khachhang where 1";
        $listkh = pdo_query($sql);
        return $listkh;
    }
    // function delete_khachhang($id){
    //     $sql = "delete from khachhang where id = '$id'";
    //     pdo_execute($sql);
    // }
    function insert_khachhang($user,$pass,$ten_dn,$diachi,$sdt,$email,$date){
        $sql = "INSERT INTO `khachhang`( `ten_dn`, `mat_khau`, `ten`, `dia_chi`, `so_dien_thoai`, `email`, `ngay_sinh`) 
        VALUES ('$user','$pass','$ten_dn','$diachi','$sdt','$email','$date')";
        pdo_execute($sql);
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
    function is_error($form_err){
        global $error;
        if(!empty($error[$form_err])){
            return $error[$form_err];
        }
    }
?>
<?php 

function qtdh(){
    if (isset($_POST['btn']) && $_POST['btn']) {
        if (isset($_POST['trangthai'])) {
            $trangthai = $_POST['trangthai'];
        } else {
            $trangthai = '';
        }
        if (isset($_POST['key'])) {
            $key = $_POST['key'];
            echo $key;
        } else {
            $key = '';
        }
    } else {
        $key = $trangthai = '';
    }
    $loaddh1 = loaddh($key, $trangthai);
    $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function adddh(){
    if (isset($_POST['adddh'])) {
        $ngay_dat = $_POST['ngay_dat'];
        $tong_gia = $_POST['tong_gia'];
        $trang_thai = $_POST['trang_thai'];
        $id_kh = $_POST['id_kh'];
        // add_donhang($ngay_dat, $tong_gia, $trang_thai, $id_kh);
    }
    // $loaddh = loadall_donhang();
    include 'QTDH/add.php';
}
function suadh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadd1 = loadone_ctdonhang($id);
        $loadsp = loadone_dh($id);
    }
    include 'QTDH/update.php';

}
function updatedh(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $trangthai = $_POST['trangthai'];
        $ten = $_POST['ten'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $ghi_chu = $_POST['ghi_chu'];
        update_dh($id, $trangthai, $ten, $sdt, $diachi, $ghi_chu);
    }
    $loaddh = loadall_donhang();
    $loadd1 = loadone_ctdonhang($id);
    include 'QTDH/update.php';
}
function deletedh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_don_hang($id);
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
    // include 'QTDH/list.php';
}
// function chitietdh(){

// }
?>
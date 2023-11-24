<?php 

function qtdh(){
    // $loaddh = loadall_donhang();
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
        // $loadd1 = loadone_donhang($id);
    }
    include 'QTDH/update.php';
}
function updatedh(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $ngay_dat = $_POST['ngay_dat'];
        $tong_gia = $_POST['tong_gia'];
        $trang_thai = $_POST['trang_thai'];
        // $id_kh = $_POST['id_kh'];
        // fix_donhang($id, $ngay_dat, $tong_gia, $trang_thai, $id_kh);
    }
    // $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
function deletedh(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // delete_don_hang($id);
    }
    // $loaddh = loadall_donhang();
    include 'QTDH/list.php';
}
// function chitietdh(){

// }
?>
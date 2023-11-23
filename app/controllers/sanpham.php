<?php 
function dssnanpham(){
    $loadsanpham = loadall_sanpham();
    include 'QTSP/list.php';
}
function themsp(){
    if (isset($_POST['addsp'])) {
        $ten = $_POST['ten'];
        $mo_ta = $_POST['mo_ta'];
        $gia = $_POST['gia'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $id_danh_muc = $_POST['id_danh_muc'];
        $so_luong = $_POST['soluong'];
        $gia_sale = $_POST['giasale'];

        $target_dir = '../../../public/img/product/';

        $img_dai_dien = $_FILES['img_dai_dien']['name'];
        $target_file = $target_dir . basename($img_dai_dien);
        move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

        $img_1 = $_FILES['img_1']['name'];
        $target_file1 = $target_dir . basename($img_1);
        move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

        $img_2 = $_FILES['img_2']['name'];
        $target_file2 = $target_dir . basename($img_2);
        move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

        $img_3 = $_FILES['img_3']['name'];
        $target_file3 = $target_dir . basename($img_3);
        move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

        if ($ten != '' && $mo_ta != '' && $gia > 0 && $img_dai_dien != '' && $ngay_nhap != '' && $img_1 != '' && $img_2 != '' && $img_3 != '') {
            add_sanpham($ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3);

            header("Location: ?act=qtsp");
        } else {
            $thongbao = 'Thất bại';
        }
    }
    $loaddm = loadall_danhmuc();
    include 'QTSP/add.php';
}
function suasp(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $loadsp = loadone_sanpham($id);
        $loaddm = loadall_danhmuc();
    }
    include 'QTSP/update.php';
}
function updatesp(){
    if (isset($_POST['submit']) && ($_POST['submit'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $mo_ta = $_POST['mo_ta'];
        $gia = $_POST['gia'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $id_danh_muc = $_POST['id_danh_muc'];
        $so_luong = $_POST['soluong'];
        $gia_sale = $_POST['giasale'];

        $target_dir = '../../../public/img/product/';
        $img_dai_dien = $_FILES['img_dai_dien']['name'];
        $target_file = $target_dir . basename($img_dai_dien);
        move_uploaded_file($_FILES['img_dai_dien']['tmp_name'], $target_file);

        $img_1 = $_FILES['img_1']['name'];
        $target_file1 = $target_dir . basename($img_1);
        move_uploaded_file($_FILES['img_1']['tmp_name'], $target_file1);

        $img_2 = $_FILES['img_2']['name'];
        $target_file2 = $target_dir . basename($img_2);
        move_uploaded_file($_FILES['img_2']['tmp_name'], $target_file2);

        $img_3 = $_FILES['img_3']['name'];
        $target_file3 = $target_dir . basename($img_3);
        move_uploaded_file($_FILES['img_3']['tmp_name'], $target_file3);

        update_sanpham($id, $ten, $mo_ta, $gia, $img_dai_dien, $ngay_nhap, $id_danh_muc, $so_luong, $gia_sale, $img_1, $img_2, $img_3);

        $loaddm = loadall_danhmuc();
    }
    $loadsp = loadone_sanpham($_GET['id']);
    // $loadsanpham = loadall_sanpham();
    include 'QTSP/update.php';
}
function xoasp(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_sanpham($id);
    }
    $loadsanpham = loadall_sanpham();
    include 'QTSP/list.php';
}
?>
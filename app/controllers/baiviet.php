<?php 
function qtbv(){
    $loadbaiviet = loadall_baiviet();
    include 'QTBV/list.php';
}
function addbaiviet(){
    if (isset($_POST['addbaiviet'])) {
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $ngay_dang = $_POST['ngay_dang'];

        $target_dir1 = '../../../public/img/bai_viet/';

        $anh = $_FILES['anh']['name'];
        $target_file1 = $target_dir1 . basename($anh);
        move_uploaded_file($_FILES['anh']['tmp_name'], $target_file1);
        if ($tieu_de != '' && $noi_dung != '' && $ngay_dang != '') {
            add_baiviet($tieu_de, $anh, $noi_dung, $ngay_dang);
            $thongbao = 'Thêm banner thành công';
        } else {
            $thongbao = 'Thất bại';
        }
    }

    include 'QTBV/add.php';
}
function suabv(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $baiviet = loadone_baiviet($id);
    }
    include 'QTBV/update.php';
}
function updatebv(){
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $ngay_dang = $_POST['ngay_dang'];
        
        $target_dir1 = '../../../public/img/bai_viet/';

        $anh = $_FILES['anh']['name'];
        $target_file1 = $target_dir1 . basename($anh);
        move_uploaded_file($_FILES['anh']['tmp_name'], $target_file1);
        if ($tieu_de != "") {
            update_baiviet($id, $tieu_de, $anh, $noi_dung, $ngay_dang);
            $baiviet = loadone_baiviet($id);
            $thongbao = 'update bv thành công'; 
        } else {
            $baiviet = loadone_baiviet($id);
            $thongbao = 'update thất bại';
        }     
    }
    $loadbaiviet = loadall_baiviet();            
    include 'QTBV/list.php';
}
function deletebv(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_baiviet($id);
    }
    $loadbaiviet = loadall_baiviet();
    echo '<script>alert("vui long quay ve trang chu");</script>';
    include 'QTBV/list.php';
}
?>
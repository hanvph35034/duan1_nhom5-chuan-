<?php
include 'Admin/header.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'listbl':
            include 'Admin/listbl.php';
            break;

        case 'qtdm':
            include 'Admin/QTDM/list.php';
            break;
        case 'adddm':
            include 'Admin/QTDM/add.php';
            break;
        case 'updatedm':
            include 'Admin/QTDM/update.php';
            break;

        case 'qtkh':
            include 'Admin/QTKH/list.php';
            break;
        case 'addkh':
            include 'Admin/QTKH/add.php';
            break;

        case 'qtkm':
            include 'Admin/QTKM/list.php';
            break;
        case 'updatekm':
            include 'Admin/QTKM/update.php';
            break;
        case 'addkm':
            include 'Admin/QTKM/add.php';
            break;
            
    }
} else {
    include 'Admin/home.php';
}

include 'Admin/footer.php';

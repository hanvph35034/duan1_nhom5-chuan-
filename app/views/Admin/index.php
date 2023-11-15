<?php
include 'header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'listbl':
            include 'listbl.php';
            break;

        case 'qtdm':
            include 'QTDM/list.php';
            break;
        case 'adddm':
            include 'QTDM/add.php';
            break;
        case 'updatedm':
            include 'QTDM/update.php';
            break;

        case 'qtkh':
            include 'QTKH/list.php';
            break;
        case 'addkh':
            include 'QTKH/add.php';
            break;

        case 'qtkm':
            include 'QTKM/list.php';
            break;
        case 'updatekm':
            include 'QTKM/update.php';
            break;
        case 'addkm':
            include 'QTKM/add.php';
            break;
            
            default:
          include '404.php';
    }
} else {
    include 'home.php';
} 

include 'footer.php';

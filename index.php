<?php


session_start();

if(isset($_GET['nux-mac']) && !empty($_GET['nux-mac'])){
    $_SESSION['nux-mac'] = $_GET['nux-mac'];
}

if(isset($_GET['nux-ip']) && !empty($_GET['nux-ip'])){
    $_SESSION['nux-ip'] = $_GET['nux-ip'];
}

if(isset($_GET['nux-router']) && !empty($_GET['nux-router'])){
    $_SESSION['nux-router'] = $_GET['nux-router'];
}

if(isset($_GET['hostname']) && !empty($_GET['hostname'])){
    $_SESSION['hostname'] = $_GET['hostname'];
}

if(isset($_GET['voucher']) && !empty($_GET['voucher'])){
    $_SESSION['voucher'] = $_GET['voucher'];
}

require_once 'system/vendor/autoload.php';
require_once 'system/boot.php';
App::_run();

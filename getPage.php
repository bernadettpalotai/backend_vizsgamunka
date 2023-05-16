<?php

$pages = "";

if (isset($_GET['page'])) {
    $pages = $_GET['page'];
}

switch ($pages) {
    case 'kezdolap':
        require_once 'kezdolap.php';
        break;
    case 'hirek':
        require_once 'hirek.php';
        break;
    case 'versenynaptar':
        require_once 'versenynaptar.php';
        break;
    case 'admin-bejelentkezes':
        require_once 'admin-bejelentkezes.php';
        break;
    case 'admin':
        require_once 'admin.php';
        break;
    default:
        require_once 'kezdolap.php';
        break;
}

?>
<hr>
<a href="index.php?sayfa=Create">KURS EKLE</a>
<hr>
<?php

require_once "settings.php";

if(!isset($_GET['sayfa'])){
    $_GET['sayfa']='index';
}


switch ($_GET['sayfa']){
    case 'index':
        require_once 'Homepage.php';
    break;
    case 'Create':
        require_once 'Create.php';
    break;
    case 'read':
        require_once 'Read.php';
    break;
    case 'update':
        require_once 'Update.php';
    break;
    case 'delete':
        require_once 'Delete.php';
    break;
}


?>
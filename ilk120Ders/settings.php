<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=ilkOlusum', 'root', '');
}catch (PDOException $ERROR){
    echo  "VERİ TABANINA BAĞLANAMADI.";
}




?>

<?php

echo "BURASI VERİ SİLME SAYFA<br><hr>";


if(!isset($_GET['id']) || empty ($_GET['id'])){
    header('Location:index.php');
    exit;
}
$query=$db->prepare('SELECT * FROM kurslar WHERE id=?');
$query->execute([
        $_GET['id']
]);

$silinecekKurs=$query->fetch(PDO::FETCH_ASSOC);
if($silinecekKurs) {

    $sorgu = $db->prepare('DELETE FROM kurslar WHERE id=?');
    $sorgu->execute([
        $_GET['id']
    ]);
    echo "BAŞARI İLE SİLİNDİ.";
}
else
    echo "silinecek kurs yok !";

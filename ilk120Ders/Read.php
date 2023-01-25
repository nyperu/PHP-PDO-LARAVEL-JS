<?php
echo "BURASI VERİ OKUMA SAYFA";

if(isset($_GET['id'])) {

    $sorgu = $db->prepare('SELECT * FROM kurslar WHERE id=?');
    $sorgu->execute([
        $_GET['id']
    ]);
$kurs= $sorgu->fetch(PDO::FETCH_ASSOC);
}
else
    header('Location:index.php')
?>
<h1><?php echo $kurs['isim']; ?></h1>
<div>
    <b>Oluşturulma tarihi: <?php echo $kurs['tarih']; ?></b><br>
    <b>Açıklama          : <?php echo $kurs['aciklama']; ?></b>
</div>




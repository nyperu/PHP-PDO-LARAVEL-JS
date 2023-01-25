<?php

echo "BURASI HOME PAGE ANA SAYFA";
?>

<br>
<hr>
<a href="index.php?sayfa=Create">KURS EKLE</a>
<hr>
<a href="index.php?sayfa=Read">KURSLARI GOSTER</a>

<?php
//$kurslar= $db->query('SELECT * FROM kurslar')->fetchAll(PDO::FETCH_ASSOC);
//print_r($kurslar);
//$kurs=$db->query('SELECT * FROM kurslar WHERE id=2')->fetchAll(PDO::FETCH_ASSOC);
//print_r($kurs);
//$sorgu=$db->prepare('SELECT * FROM kurslar');
//$sorgu->execute();
//$kurslar=$sorgu->fetchAll(PDO::FETCH_ASSOC);
//print_r($kurslar);
//$sorgu=$db->prepare('SELECT * FROM kurslar WHERE id=?');
//$sorgu->execute([
//        5
//]);
//$kurs=$sorgu->fetch((PDO::FETCH_ASSOC));
//print_r($kurs);
$kurslar=$db->query('SELECT * FROM kurslar')->fetchAll(PDO::FETCH_ASSOC);
?>
<ol>
    <?php foreach ($kurslar as $kurs){ ?>
        <li>
            <?php echo $kurs['isim'] ?>
            <a href="index.php?sayfa=read&id=<?php echo $kurs['id'] ?>">GÖRÜNTÜLE</a>
            <a href="index.php?sayfa=update&id=<?php echo $kurs['id'] ?>">DÜZENLE</a>
            <a href="index.php?sayfa=delete&id=<?php echo $kurs['id'] ?>">SİL</a>
            </li>
    <?php } ?>

</ol>
<hr>
<a href="index.php?sayfa=Update">KURS GÜNCELLE</a>
<hr>
<a href="index.php?sayfa=Delete">KURS SİL</a>
<hr>

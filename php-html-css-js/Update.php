<?php
echo "BURASI VERİ GÜNCELLEME SAYFA<br>";


if(isset($_GET['id'])) {

    $sorgu = $db->prepare('SELECT * FROM kurslar WHERE id=?');
    $sorgu->execute([
        $_GET['id']
    ]);

    $kurs= $sorgu->fetch(PDO::FETCH_ASSOC);
    //print_r($kurs);
    if($kurs==null){
        header('Location:index.php');
    }
}
else
    header('Location:index.php');
if(isset($_POST['submit'])){
    $kursIsmi=isset($_POST['isim'])? $_POST['isim']:'';
    $kursDurumu=isset($_POST['durum'])? $_POST['durum']:'';
    $aciklama=isset($_POST['aciklama'])? $_POST['aciklama']:'';
    if(!$kursIsmi){
        echo "<br>Kurs ismi giriniz.";
    }
    else{
        /** @var TYPE_NAME $db */
        $query=$db->prepare('
        UPDATE kurslar
        SET
            isim=?,
            durum=?,
        aciklama=?
        WHERE
            id=?
        ');

        $update=$query->execute([
            $kursIsmi,
            $kursDurumu,
            $aciklama,
            $kurs['id']
        ]);

        if($update){
            header('Location:index.php?sayfa=read&'.$kurs['id']);
        }
        else{
            echo "Bir hata oluştu.";
        }
    }
}
?>


<form action="" method="post">
    Kurs ismi:<br>
    <input type="text" name="isim" value="<?php echo $kurs['isim']?>">
    <br>
Kursun Açıklaması: <br>
    <textarea name="aciklama" cols="30" rows="10">
        <?php echo $kurs['aciklama']?>
    </textarea>
    <br>
Kursun Durumu:<br>
    <select name="durum">
        <option <?php echo $kurs['durum']==0? 'selected':""?> value="1">Kursa kayıt olunabilir.</option>
        <option <?php echo $kurs['durum']==1? 'selected':""?>value="0">Kursa kayıt olunamaz!</option>
    </select>
    <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Kaydet</button>
</form>

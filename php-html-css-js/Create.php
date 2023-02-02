<?php



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
        INSERT INTO kurslar
        SET
            isim=?,
            durum=?,
        aciklama=?
        ');

        $insert=$query->execute([
           $kursIsmi,
           $kursDurumu,
            $aciklama
        ]);

        if($insert){
            header('Location:index.php');
        }
        else{
            echo "Bir hata oluştu.";
        }
    }
}
?>
<form action="" method="post">
    Kurs ismi:<br>
    <input type="text" name="isim">
    <br>
    Kursun Açıklaması: <br>
    <textarea name="aciklama" cols="30" rows="10" placeholder="Lütfen bir açıklama giriniz."></textarea>
    <br>
    Kursun Durumu:<br>
    <select name="durum">
        <option value="1">Kursa kayıt olunabilir.</option>
        <option value="0">Kursa kayıt olunamaz!</option>
    </select>
    <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Kaydet</button>
</form>

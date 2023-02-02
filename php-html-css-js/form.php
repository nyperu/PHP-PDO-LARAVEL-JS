<?php 
    session_start();
    setcookie('user',"Fatih",time()+60*60*24*365,'/');//20gun oturum acik kalsin.
    //  '/' bu isaret, cookie'yi tum sayfalarda gezdirir.
  
?>
<form action="bilgi.php" method="post">
        <p> İsim: <input type="text" name="isim"> </p>
        <p> Yaş: <input type="text" name="yas"> </p>
        <p> SEVDİĞİ YEMEKLER</p>
        <input type="checkbox" name="sevdigiYemekler[]" value="musakka">MUSAKKA </p>
        <input type="checkbox" name="sevdigiYemekler[]" value="pilav">PİLAV </p>
        <input type="file" name="foto">
        <p> <input type="submit"> </p>
        
    </form>
    <?php
        $_SESSION['a']="<br>KAYIT ISLEMI GERCEKLESTI";    
    
    
        yeniKonu("Cookie");
    ?>
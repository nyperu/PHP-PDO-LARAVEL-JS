<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "menu.php"; ?> 

<?php 
class Ogrenci{
    public $isim;
    public $soyisim;
    public function __construct(){
        echo "ÖĞRENCİ OLUŞTU";
    }

    public function __destruct(){
        echo "OBJE YOK OLDU";
    }
    


}


interface IHayvan{
    public function sesCikar();
}
class Hayvan{
    public $isim;
    public $ayakSayisi= "ayak sayisi belirlenmedi";
    public $ses="hangi hayvanin sesi olacak ?";
  
    public function setIsim($isim){
        $this->isim=$isim;
    }
}
class Kopek extends Hayvan implements IHayvan{
    public function sesCikar(){
        echo $this->ses;
    }
    public function __construct(){
        $this->ses="Hav hav";
    }
}
$kopek= new Kopek();
$kopek->sesCikar();

abstract class Meyve{
    abstract public function yemek();
    public $kilo;

}

class Karpuz extends Meyve{
    public function yemek(){
        echo "karpuz yeniyor.";
    }
    public function __construct(){
        $this->kilo="50kg";
    }

    
}
$karpuz = new Karpuz();
echo $karpuz->kilo;

?>
</body>
</html>
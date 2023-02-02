<?php 
    session_start();
    setcookie('user',"Fatih",time()+60*60*24*365,'/');//20gun oturum acik kalsin.
    //  '/' bu isaret, cookie'yi tum sayfalarda gezdirir.
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "php" ?></title>
</head>
<body style="margin-left:25%">
    <?php echo "P<b>hp syntax dersi22222<b>";
        function yeniKonu($konuAdi){
            echo "<h3 style=\"color:red\"><br>______________".$konuAdi."_____________ <br></h3>";
        }
        function baglantiAdresi(){
            return "aynen <br>";
        }
        echo baglantiAdresi();

         yeniKonu("Fonksiyonlar ve Fonksiyon ile deger atamasi");
        function isimSoyle(string $isim,int $yas):string{ 
            return $isim." ".$yas;
           }
        echo isimSoyle("osman",20);

        echo "___________<br>";
        $ismim = function($isim) {
            return $isim;
        };
        $yasim = function($yas){
            return $yas;
        };
        yeniKonu("Deger atamali fonksiyonlar ile matematik islemleri");
        $karekok=function($sayi){
            return sqrt($sayi);
        };
        $mutlakDeger= function($sayi){
            return abs($sayi);
        };
        $usAlma=function($taban,$kuvvet){
            return pow($taban,$kuvvet);
        };
        echo $karekok(7);
        echo "<br>";
        echo $mutlakDeger(-50);
        echo "<br>";
        echo $usAlma(2,4);
        yeniKonu("PHP Array ile, fonksiyonlu matematik islemleri");
        $matematikIslemleri=[
            'kok' =>function($sayi){
                return sqrt($sayi);
            },
            'mutlak_deger'=>function($sayi){
                return abs($sayi);
            },
            'us'=>function($taban,$kuvvet){
                return pow($taban,$kuvvet);
            }
        ];
        echo "Matematik oyunu başlıyor...";
        $islem=array_keys($matematikIslemleri)[rand(0,2)];
        if($islem=="kok")
            echo $matematikIslemleri[$islem](25)." ";
        elseif($islem=="mutlak_deger")
            echo $matematikIslemleri[$islem](-155)." ";
        else
            echo $matematikIslemleri[$islem](4,4)." "; 
        yeniKonu("FUNC_NUM_ARGS()  fonksiyon kaç tane paremetre alıyor?");
        function topla(){
            $toplam =0;
            $arguman_sayisi = func_num_args(); //parametre sayısını alıyor.
            for($i=0;$i<$arguman_sayisi;$i++){
             $toplam +=func_get_arg($i);
            }
            return $toplam;
        }
        echo topla(2,23,2,23,12,2);
        yeniKonu("ÖZYİNELEMELİ FONKSİYONLARA GİRİŞ YAPILIYOR.");
        //faktoriyelden baslayalim...
        function faktoriyel($sayi){
            if($sayi<0){
                return "Negatif sayilarin faktoriyeli yapılamaz.";
            }
            if($sayi==0){
                return 1;
            }
            $sonuc = $sayi*faktoriyel($sayi-1);    
            return $sonuc;
        }
        echo faktoriyel(5);
        echo "________________";
        yeniKonu("Array ile, key value islemleri (OZYINELEMELI DEVAM EDIYORR)!!");
        echo "<br> KATEGORILERLE OZYINELEMELI DENEMELERI <br>";
        function urun_bul($kategori_isimleri,$kategori){
            foreach ($kategori_isimleri as $key=>$value){
                if($key===$kategori){
                    return 'Kategori var.';
                }
                
                if(is_int($key)){
                    if($value==$kategori){
                        return 'Urun Var.';
                    }
                }

                if(is_array($value)){
                    return urun_bul($value,$kategori);
                }

                return 'Kategori yada urun bulunamadı.';
            }
        }
        $kategoriler=[ 
            'Elektronik'=>[
                'Telefonlar'=>[
                    'Android'=>['Samsung','Huawei'],
                    'Ios'=>['Iphone 5','Iphone 14']
                ],
                'Bilgisayar'=>[
                    'Dell','Macbook'
                ],
                'Diğer',
                ],
            'Beyaz Eşya'=>[
                'Çamaşır Makinesi',
                'Bulaşık Makinesi',
                'Buzdolabı'=>[
                    'Bocsh',
                    'Vestel'=>['NoFrost','Dandik Model']
                ]
                
            ]
        ];

    echo urun_bul($kategoriler,'Iphone 14');
    yeniKonu("ÖRNEK BİR KATEGORİ LİSTESİ, ÖZ YİNELEMELİ DEVAM EDİYOR.");
    function menu_olustur($kategori_listesi){
 
        echo "<ul>";
        foreach($kategori_listesi as $key=>$value){
            if(!is_int($key))
                echo "<li>".$key."</li>";
            else{
                echo "<li>".$value."</li>";
            }
            if(is_array($value))
                menu_olustur($value);
        }
        echo "</ul>";
    }   
    menu_olustur($kategoriler);

    yeniKonu("NAVBAR -- OZ YINELEME ILE ORNEK BIR SITE MENUSU");
    function nav_olustur($kategori_listesi,$parent_id){
        echo "<ul>";
        foreach($kategori_listesi as $kategori){
            if($kategori['parent_id']==$parent_id){
                echo "<li>".$kategori['ad']."</li>";
                echo nav_olustur($kategori_listesi,$kategori['id']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    $kategorilerr=[
        [   'id'=>1,
            'parent_id'=>0,
            'ad'=>'GSU Hakkinda'
        ],
            [
                'id'=>4,
                'parent_id'=>1,
                'ad'=>'Genel Bilgiler'
            ],
            [
                'id'=>5,
                'parent_id'=>1,
                'ad'=>'Yonetim'
            ],
            [
                'id'=>10,
                'parent_id'=>4,
                'ad'=>'Tarihcee'
            ],
            [
                'id'=>11,
                'parent_id'=>4,
                'ad'=>'Misyon'
            ],
        [
            'id'=>2,
            'parent_id'=>0,
            'ad'=>'Akademik'
        ],
            [
                'id'=>6,
                'parent_id'=>2,
                'ad'=>'Fakulteler'
            ],   
            [
                'id'=>7,
                'parent_id'=>2,
                'ad'=>'Enstituler'
            ],
        [
            'id'=>3,
            'parent_id'=>0,
            'ad'=>'Arastirma'
        ],
            [
                'id'=>8,
                'parent_id'=>3,
                'ad'=>'Oncelikli Arastirma Alanlari'
            ],
            [
                'id'=>9,
                'parent_id'=>3,
                'ad'=>'Arastirma Alanlari'
            ],
             
    
        
     ];
     nav_olustur($kategorilerr,0);
     
     yeniKonu("YIELD OBJECT OLUSTURMA KOMUTU? MEMORY USAGE MENAGEMANT IN PHP??");
     
     function sayilar_verimli_uret($ilk,$son){
        for($i=$ilk;$i<=$son;$i++)
        yield $i;
     }
     foreach(sayilar_verimli_uret(1,15)as $sayi){
        echo $sayi."<br>";
     }
     echo "yield ile olusturulan sayilarin tuttugu alan:".memory_get_usage();
     function sayilar_uret($ilk,$son){
        $sayilar=[];
        for($i=$ilk;$i<=$son;$i++){
            $sayilar[]=$i;
        }
        return $sayilar;
     }
     $sayilar=sayilar_uret(1,15);
     echo "yield'i bundan cikarip normal for ile olusturulan sayilarin tuttugu alanı bulun:".memory_get_usage();
    
    ///////////////////////////////////
    yeniKonu("yield ile yeni ornek");
    function cesitli(){
            yield 'malzemeler'=>['spor'=>['futbol topu','basketbol topu']];
            yield 'SEZER BERBER';
            yield true;
            yield 5.4;
        }
    $elemanlar=cesitli();
    foreach($elemanlar as $eleman){
        print_r($eleman);
        echo "<br>";
    }
    
    
    yeniKonu("Predefined Values-Onceden belirlenmis degerler");

    echo "Su anda calisan scriptin dosya adini soyler " .$_SERVER['PHP_SELF'];
    echo "<br>Sunucunun ip adresini soyler ".$_SERVER['SERVER_ADDR'];
    echo "<br>sunucunun adini soyler: ".$_SERVER['SERVER_NAME'];
    echo "<br>Domaini soyler: ".$_SERVER['HTTP_HOST'];
    echo "<br>IP adresi soyler ".$_SERVER['REMOTE_ADDR'];    


    yeniKonu("SESSION Cookie'de tutulur.");
    ?>
    
    <form action="bilgi.php" method="post" enctype="multipart/form-data">
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

</body>
</html>
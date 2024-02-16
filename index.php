<?php 

    $title = "Merhaba Dünya" ;
    $ad = "Kadir";
    $soyad = "Güven";
    $yas = 32;

    echo " ".$ad." ".$title." ".$ad." ".$yas;


    $urunAdi = "IPhone 14";
    $urunFiyat = 30000;
    $kdvOrani = 0.18;

    $sonuc = $urunAdi." ".$urunFiyat - ($urunFiyat * $kdvOrani);

    echo $sonuc;
    
?>
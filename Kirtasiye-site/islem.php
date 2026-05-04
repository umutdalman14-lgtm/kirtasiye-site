<?php
require_once('baglanti.php');

    $liste2=$vt->prepare("INSERT INTO urunler SET
      urunler_foto=:urunler_foto,
      urunler_ad=:urunler_ad,
      urunler_fiyat=:urunler_fiyat,
      urunler_adet=:urunler_adet,
      urunler_aciklama=:urunler_aciklama,
      urunler_satilikmi=:urunler_satilikmi
      ");
        $ekleme=$liste2->execute(array(
          "urunler_foto"=>$_GET['urunler_foto'],
          "urunler_ad"=>$_GET['urunler_ad'], 
          "urunler_fiyat"=>$_GET['urunler_fiyat'], 
          "urunler_adet"=>$_GET['urunler_adet'],
          "urunler_aciklama"=>$_GET['urunler_aciklama'],
          "urunler_satilikmi"=>$_GET['urunler_satilikmi']
        ));

    if($ekleme){
        header('Location:kayit.php?durum=ok');
        exit;
    } else {
        header('Location:kayit.php?durum=no');
        exit;
    }


?>
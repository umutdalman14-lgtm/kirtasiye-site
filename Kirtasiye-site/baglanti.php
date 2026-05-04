<?php
    try {
        $vt= new PDO('mysql:host=localhost;dbname=urunler;charset=utf8','root','');
    } catch (PDOException $e) {
        echo "hata var".$e;
    }
?>
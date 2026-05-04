<?php
require_once("baglanti.php");

$liste=$vt->prepare('DELETE from urunler WHERE urunler_id=:urunler_id');
$delete=$liste->execute(array(
    'urunler_id'=>$_GET['id']
));

if($delete){
    header('Location:indexx.php');
    exit;
} else {
    header('Location:indexx.php');
    exit;
}
?>

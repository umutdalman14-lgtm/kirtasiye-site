<?php
    require_once('baglanti.php');
?>  
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">
    <title>MVCde MODEL Katmanı</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>


    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">PDO ile Database İşlemleri Uygulaması</h1>
                <p class="lead text-muted">Uygulama yeni özellikler eklenerek genişletilecektir. Gördüğünüzün aynısı olacak şekilde kodlayınız.</p>
                <p>
                    <a href="kayit.php" class="btn btn-primary my-2">Ürün Ekle</a>
                    <a href="listele.php" class="btn btn-secondary my-2">Ürünleri Listele</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    
                    <?php   
                        $liste=$vt->prepare("SELECT * FROM urunler");
                        $liste->execute();
                        while ($veriler=$liste->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <?php 
                        if ($veriler['urunler_adet']>=20 && $veriler['urunler_satilikmi']==1) { ?>
                    <div class="col-md-4">    
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="assets/img/<?php echo $veriler['urunler_foto']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h1><?php echo $veriler['urunler_ad']; ?></h1>
                                <h1><?php echo $veriler['urunler_fiyat']; ?>TL</h1>
                                <p class="card-text"><?php if (strlen($veriler['urunler_aciklama'])>70) {echo substr($veriler['urunler_aciklama'],0,70)."...";}else{ }?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">İncele</button>
                                        <?php if ($veriler['urunler_adet']<60) {
                                        ?>
                                        <button type="button" style="color:red;" class="btn btn-sm btn-outline-secondary">Sepete Ekle</button>
                                        <?php } ?>
                                        <?php if ($veriler['urunler_adet']>=60) {
                                        ?>
                                        <button type="button" style="color:green;" class="btn btn-sm btn-outline-secondary">Sepete Ekle</button>
                                        <?php } ?>
                                        
                                        <a type="button" href="sil.php?id=<?php echo $veriler['urunler_id']; ?>" class="btn btn-sm btn-outline-secondary">Sil</a>

                                    </div>
                                    <small class="text-muted">Kalan <?php echo $veriler['urunler_adet']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php } else {}?>

                    <?php } ?>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Başa dön.</a>
            </p>
            <p>Bu tema &copy; Bootstrap examplestan indirilmiştir.!</p>
            <p>Farklı seçenekleri mutlaka inceleyiniz.</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
</body>

</html>
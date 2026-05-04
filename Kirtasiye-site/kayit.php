<?php
    require_once('baglanti.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">

    <title>PDO ile KAYIT</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">
  <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Listeleme Uygulaması</h1>
                <p class="lead text-muted">Uygulama yeni özellikler eklenerek genişletilecektir. Gördüğünüzün aynısı olacak şekilde kodlayınız.</p>
                    <a href="index.php" class="btn btn-primary my-2">Anasayfa</a>
                    <a href="listele.php" class="btn btn-secondary my-2">Ürünleri Listele</a>
                </p>
            </div>
        </section>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/database.png" alt=""  height="100">
        <h2>Ürün Kayıt Formu</h2>
        <p class="lead"></p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <img class="d-block mx-auto mb-4" src="assets/img/kirtasiye.png" alt=""  height="300">
        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate action="islem.php" method="get">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="ad">Ürün Adı</label>
                <input type="text" class="form-control" name="urunler_ad" id="ad" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Ürün adı yazmak zorundasınız.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="foto">Ürün Fotoğrafı</label>
                <input type="text" class="form-control" name="urunler_foto" id="foto" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Ürün fotoğrafı seçiniz..
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <label for="adet">Ürün Adedi </label>
              <input type="number" class="form-control" name="urunler_adet" id="adet" required>
              <div class="invalid-feedback">
                Ürün adedini yazınız.
              </div>
            </div>
              <div class="col-md-6 mb-3">
              <label for="fiyat">Ürün fiyatı</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">TL</span>
                </div>
                <input type="text" class="form-control" name="urunler_fiyat" id="fiyat"  required>
                <div class="invalid-feedback" style="width: 100%;">
                  Ürün fiyatını yazınız.
                </div>
              </div>
            </div>
            </div>
            <div class="mb-3">
              <label for="aciklama">Açıklama</label>
              <textarea type="text" class="form-control" id="aciklama" name="urunler_aciklama" required></textarea>
              <div class="invalid-feedback">
                Ürün ile ilgili açıklama yazınız.
              </div>
            </div>
            <div class="d-block my-3">
            
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="satis" name="urunler_satilikmi" checked >
              <label class="form-check-label" for="satis">Ürün Satışta</label>
              <div class="invalid-feedback">
                Ürünün satış durumunu işaretleyiniz.
              </div>
            </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="urunler_kaydet">KAYDET</button>
            <h5 style="color: crimson;">
       
    </h5>
    <br><br>
          </form>
        </div>
      </div>
      <hr>
            <h1>ÜRÜNLER</h1>
    <hr>
    <table class="table table-bordered border-primary">
        <tr>
            <th>ÜRÜN ID</th>
            <th>ÜRÜN ADI</th>
            <th>ÜRÜN FOTOĞRAFI</th>
            <th>ÜRÜN FİYATI</th>
            <th>ÜRÜN ADEDİ</th>
            <th>ÜRÜN AÇIKLAMA</th>
            <th>ÜRÜN SATIŞTA MI</th>
            <th>KAYIT TARİHİ</th>
        </tr>

        <?php   
          $liste=$vt->prepare("SELECT * FROM urunler");
          $liste->execute();
          while ($veriler=$liste->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
          <td><?php echo $veriler['urunler_id']; ?></td>
          <td><?php echo $veriler['urunler_ad']; ?></td>
          <td><img src="assets/img/<?php echo $veriler['urunler_foto']; ?>" width=140px alt=""></td>
          <td><?php echo $veriler['urunler_fiyat']; ?></td>
          <td><?php echo $veriler['urunler_adet']; ?></td>
          <td><?php echo $veriler['urunler_aciklama']; ?></td>
          <td><?php echo $veriler['urunler_satilikmi']; ?></td>
          <td><?php echo $veriler['urunler_tarih']; ?></td>
        </tr>
        <?php } ?>
   
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Kartal MTAL-2024 - 12B Web Programcılığı dersi uygulaması.</p>
        
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

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

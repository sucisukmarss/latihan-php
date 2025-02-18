<?php
  $pageTitle = "Teruskan Langkah Baikmu: A Journey of Goodness and Collaboration";
  $pageDescription = "Beauties, tidak terasa Bulan Ramadan semakin dekat. Wardah dengan bangga menghadirkan semangat Ramadhan yang spesial. Ramadan, sebagai bulan yang penuh berkah dan keberkahan, menjadi waktu yang ideal untuk merenung dan meningkatkan kebaikan dalam diri. Dalam semangat Ramadan yang penuh berkah, Wardah kembali hadir dengan kampanye yang menginspirasi, berjudul "Teruskan Langkah Baikmu".";
  $pageImage = "wardah.png";
?>


<!doctype html>
<html lang="en">
  <head>
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 align-self-center">
          <div>
            <h1><?= $pageTitle ?></h1>
            <p><?= $pageDescription ?></p>
          </div>
          </div>
        <div class="col-12 col-md-6">
          <img src="<?= $pageImage ?>" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </body>
</html>

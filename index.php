<?php
require 'database.php';
require 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Banner Project</title>
</head>
<body>
<section class="hero-banner bg-light py-5">
    <div class="container">
        <div class="row row align-items-center">
            <div class="text-center h-50">
                <img src="BannerReklam/<?php echo $ReklamKaydi["banner_dosyasi"];?>" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
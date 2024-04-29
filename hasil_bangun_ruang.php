<?php

function luas_segitiga($t, $a){
    $luas_segitiga = 0.5 * $t *$a;
    echo "<h3>Luas segitiga dengan tinggi $t dan panjang alas $a adalah $luas_segitiga</h3>";
    echo "<br>";

}
function keliling_segitiga($a){
    $keliling_segitiga = 3 * $a;
    echo "<h3>Keliling segitiga dengan panjang sisi $a adalah $keliling_segitiga</h3>";
    echo "<br>";

}
function luas_persegi($s){
    $luas_persegi = $s *$s;
    echo "<h3>Luas persegi dengan panjang sisi $s adalah $luas_persegi</h3>";
    echo "<br>";

}
function keliling_persegi($s){
    $keliling_persegi = 4 * $s;
    echo "<h3>Keliling persegi dengan panjang sisi $s adalah $keliling_persegi</h3>";
    echo "<br>";

}
function luas_persegipanjang($p, $l){
    $luas_persegipanjang = $p *$l;
    echo "<h3>Luas segitiga dengan lebar $l dan panjang $p adalah $luas_persegipanjang</h3>";
    echo "<br>";

}
function keliling_persegipanjang($p, $l){
    $keliling_persegipanjang = (2 * $p) + (2 * $l);
    echo "<h3>Keliling segitiga dengan panjang  $p dan lebar $l adalah $keliling_persegipanajng</h3>";
    echo "<br>";

}
function luas_lingkaran($r){
    $luas_lingkaran = 3.14 * $r *$r;
    echo "<h3>Luas segitiga dengan panjang jari-jari $r adalah $luas_lingkaran</h3>";
    echo "<br>";

}
function keliling_lingkaran($r){
    $keliling_lingkaran = 2 * 3.14 * $r;
    echo "<h3>Keliling segitiga dengan panjang sisi $r adalah $keliling_lingkaran</h3>";
    echo "<br>";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <style>
    body{
        background-image: url(image/il.jpg);
        background-size: 1400px ;

    }
    </style>
</head>
<body>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-end">
        <div class="side-title">
          <h3>Telp (0312)</h3>
          <p>Madiun City | Alvian@gmail.com</p>
          <div class="sosial-media">
            <img src="image/twitter.png" alt="Logo Twitter">
            <img src="image/linkedin.png" alt="Logo Linkedin">
            <img src="image/facebook.png" alt="Logo Facebook">
            <img src="image/youtube.png" alt="Logo YouTube">
            <img src="image/rss.png" alt="Logo RSS">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid px-0 navbar-custom mt-4 judul">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg py-0">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link text-light" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bmi.php">BMI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_segitiga.php">Bangun Segitiga</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_persegi">Bangun Persegi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_persegipanjang">Bangun Persegi Panjang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_lingkaran">Bangun Lingkaran</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
    <?php
    if($_POST["type"]=="segitiga"){
        $tinggi = $_POST["tinggi"];
        $alas = $_POST["alas"];
    
        luas_segitiga($tinggi, $alas);
        keliling_segitiga($alas);
    }
    else if($_POST["type"]=="persegi"){
        $sisi = $_POST["sisi"];
    
        luas_persegi($sisi);
        keliling_persegi($sisi);
    }
    else if($_POST["type"]=="persegipanjang"){
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
    
        luas_persegipanjang($panjang, $lebar);
        keliling_persegipanjang($panjang, $lebar);
    }
    else{
        $jari = $_POST["jari"];
        
        luas_lingkaran($jari);
        keliling_lingkaran($jari);
    }

    
    
    ?>
  <div class="container-fluid">
    <div class="row footer">
      <div class="col-12">
        <p class="text-light my-2 mx-4">&copy; 2023 ALVIAN | All Right Reserved </p>
      </div>
    </div>
  </div>





  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>
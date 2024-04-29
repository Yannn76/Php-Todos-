<?php
$contoh_data_array = array("alvian", "wahyu", "dewanta");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1 PHP</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style.css">
  <style>
    .bek {
     color: black;
     text-align:center;
    }
    body {
      background-image: url(image/il.jpg);
      background-size: 1400px ;

    }





  </style>











</head>

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
                    <a class="nav-link text-light" href="bangun_persegi.php">Bangun Persegi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_persegipanjang.php">Bangun Persegi Panjang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bangun_lingkaran.php">Bangun Lingkaran</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- <a href="index.php">Home</a>
  <a href="bmi.php">BMI</a>
  <a href="bangun_segitiga.php">Hitung Segitiga</a>
  <a href="bangun_persegi.php">Hitung Persegi</a>
  <a href="bangun_persegipanjang.php">Hitung Persegi Panjang</a>
  <a href="bangun_lingkaran.php">Hitung Lingkaran</a> -->


<?php
echo "<br>";





$nama = "Alvian Wahyu Dewanta";
$Alamat = "Jln. Desa Mojorayung Rt.03 Rw.01, Kec. Wungu, Kab. Madiun";
$Cita = "Mengahargai Proses";
$status = "Mahasiswa";
$agama = "Islam";
$jkel = "Pria";

echo "<h2 class='bek'>NAMA       : $nama </h2>";
echo "<h2 class='bek'>ALAMAT     : $Alamat </h2>";
echo "<h2 class='bek'>CITA CITA  : $Cita </h2>";
echo "<h2 class='bek'>STATUS     : $status </h2>";
echo "<h2 class='bek'>AGAMA      : $agama </h2>";
echo "<h2 class='bek'>J.KEL      : $jkel </h2>";

echo "<hr>";

?>


<ul>
  <?php 
  for ($i =0; $i < count($contoh_data_array); $i++ ){
    echo "<li>$contoh_data_array[$i]</li>";
  }
  
  ?>

</ul>

<ul>
  <?php 
  foreach($contoh_data_array as $loss)
  echo "<li>$loss</li>"
  ?>
</ul>

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
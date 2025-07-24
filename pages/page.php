<?php
include("../connection.php");

$no = $_GET["No"] ?? 0;
$id = $_GET["Id"] ?? null;

if (!$id) {
  die("Id not found");
}

// Query data
$Pranala = mysqli_query($conn, "SELECT Pranala_Youtube FROM materi WHERE Id_Materi = '$id'");
$Rangkuman = mysqli_query($conn, "SELECT Rangkuman FROM materi WHERE Id_Materi = '$id'");
$Point = mysqli_query($conn, "SELECT Point_Rangkuman FROM materi WHERE Id_Materi = '$id'");

// Fetch data
$pranalaData = mysqli_fetch_assoc($Pranala);
$rangkumanData = mysqli_fetch_assoc($Rangkuman);
$pointData = mysqli_fetch_assoc($Point);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML Article Summary</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <div id="preloader">
        <div class="spinner"></div>
    </div>

  <header>
    <div class="header-container">
      <div class="logo">
        <img src="../asset/8665571_laptop_code_icon 1.svg" alt="Logo" height="35px" />
        <p>DIGITAL PRODUCT <br /> ENGINEERING</p>
      </div>
      <nav>
        <a href="../index.html">HOME</a>
        <a href="page.html">ARTICLE</a>
        <a href="">SEARCH</a>
      </nav>
    </div>
  </header>
  <center>
    <div class="container">
      <div class="main-content">
        <div class="card video-card">
          <iframe src="<?= $pranalaData['Pranala_Youtube'] ?>" title="YouTube video" frameborder="0"
            allowfullscreen></iframe>
        </div>
        <div class="small-cards">
          <div class="card white-card box-1">
            <h2>HTML</h2>
            <p><?= $rangkumanData['Rangkuman'] ?></p>
          </div>
          <div class="card dark-card box-2  ">
            <ul>
              <?= $pointData['Point_Rangkuman'] ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <h2>Article’s</h2>
        <ol type="I">
          <li><a href="page.php?Id=1">Pengenalan HTML</a></li>
          <li><a href="page.php?Id=2">Struktur Dokumen HTML</a></li>
          <li><a href="page.php?Id=3">Teks & Formating</a></li>
          <li><a href="page.php?Id=4">List</a></li>
          <li><a href="page.php?Id=5">Link (Hyperlink)</a></li>
          <li><a href="page.php?Id=6">Gambar</a></li>
          <li><a href="page.php?Id=7">Tabel</a></li>
          <li><a href="page.php?Id=8">Formulir</a></li>
          <li><a href="page.php?Id=9">Elemen Semantik HTML5</a></li>
          <li><a href="page.php?Id=10">Multimedia</a></li>
          <li><a href="page.php?Id=11">Komentar</a></li>
        </ol>
      </div>
    </div>
  </center>

  <div class="copyright">
    Copyright © 2025 Telkom DPE. All Rights Reserved.
  </div>

  <script>
        window.addEventListener("load", function () {
            document.getElementById("preloader").classList.add("hidden");
        });
    </script>
</body>

</html>
<?php
session_start();
include("../../connection.php");
$id_login = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kegiatan = $_POST["kegiatan"];
    $hari = $_POST["hari"];
    $tanggal = $_POST["tanggal"];
    $perencanaan = $_POST["perencanaan"];
    $foto = "";

    $sql = "INSERT INTO jurnal (id_login, Nama_Pekerjaan, Perencanaan_Pekerjaan, Dokumentasi, Tanggal, Hari) 
                VALUES ('$id_login', '$kegiatan', '$perencanaan', '$foto', '$tanggal', '$hari')";
    $conn->query($sql);

        header("Location: jurnaldata.php");
        exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Form Input</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Kanit', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            background-color: #2c2f36;
            border-radius: 12px;
            padding: 30px;
            margin-top: 40px;
            width: 90%;
            max-width: 600px;
            color: white;
        }

        .back-arrow {
            cursor: pointer;
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            background-color: #e0e0e0;
            font-family: 'Kanit', sans-serif;
        }


        textarea {
            resize: vertical;
            height: 80px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #00c8d6;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: gray;
            text-align: center;
        }


        /* Header & Nav */
        header {
            display: flex;
            justify-content: left;
            align-items: center;
            padding: 1rem 2rem;
            width: 100%;
            max-width: 1080px;
            margin: 0 auto;
            gap: 2rem;
            min-width: 600px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 2rem;
            flex-wrap: wrap;
            font-family: Jura, sans-serif;
            max-width: 640px;
            width: 100%;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        nav a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #00ADB5;
        }

        nav a.active {
            color: #00ADB5;
            font-weight: bold;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: small;
        }

        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00c8d6;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
        }

        .copyright {
            text-align: center;
            font-size: 12px;
            margin: 1rem 0;
            color: #444;
        }

        select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            background-color: #e0e0e0;
            font-family: 'Kanit', sans-serif;
        }

    </style>
</head>

<body>

    <header>
        <div class="header-container">
            <div class="logo">
                <img src="../../asset/8665571_laptop_code_icon 1.svg" alt="Logo" height="35px" />
                <p>DIGITAL PRODUCT <br /> ENGINEERING</p>
            </div>
            <nav>
                <a href="../../index.html">HOME</a>
                <a href="../page.php?Id=1&No=1">ARTICLE</a>
                <a href="../../index.html">LOGOUT</a>
            </nav>
        </div>
    </header>

    <!-- Main Form -->
    <div class="container">
        <div class="back-arrow" onclick="history.back()">←</div>
        <h2>Input</h2>

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="hari">Hari</label>
            <select id="hari" name="hari" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>

            <label for="kegiatan">Nama Kegiatan</label>
            <textarea id="kegiatan" name="kegiatan"></textarea>

            <label for="perencanaan">Perencanaan Kegiatan</label>
            <textarea id="perencanaan" name="perencanaan"></textarea>

            <label for="foto">Upload Foto</label>
            <input type="file" id="foto" name="foto"><br>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="copyright">
        Copyright © 2025 Telkom DPE. All Rights Reserved.
    </div>

</body>

</html>
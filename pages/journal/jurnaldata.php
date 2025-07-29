<?php
session_start();
include("../../connection.php");
$username = $_SESSION['username'];
$id_login = $_SESSION['id'];

$article = mysqli_query($conn, "SELECT * FROM jurnal WHERE id_login = '$id_login'");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Journal</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Kanit', sans-serif;
        background-color: #fff;
        color: #000;
    }

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

    .title {
        font-size: 48px;
        margin-left: 270px;
        text-align: left;
        text-shadow: 5px 3px #000000;
        letter-spacing: 2px;
        color: #00c3d6;
    }

    .table-container {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        max-width: 1000px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
    }

    thead {
        background-color: #00c3d6;
        color: white;
        font-weight: bold;
    }

    thead th {
        padding: 12px 10px;
        text-align: left;
    }

    tbody td {
        padding: 12px 10px;
        color: white;
        font-size: 14px;
    }

    tbody tr:nth-child(odd) {
        background-color: #1a1a1a;
    }

    tbody tr:nth-child(even) {
        background-color: #2e2e2e;
    }

    tbody a {
        color: #00c3d6;
        text-decoration: none;
    }

    .copyright {
        text-align: center;
        font-size: 12px;
        margin: 1rem 0;
        color: #444;
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
        <p style="margin-left: auto; font-size: 14px;"><?= $username ?></p>
    </header>

    <main>
        <h1 class="title">JOURNAL</h1>

        <?php if($article->num_rows > 0) { ?>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php while ($jurnal = $article->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $jurnal["Nama_Pekerjaan"]; ?></td>
                            <td><?php echo $jurnal["Tanggal"]; ?></td>
                            <td><?php echo $jurnal["Hari"]; ?></td>
                            <td><a href="jurnalactivity.php">View</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        
        <?php }else{

            echo "<br><center>Tidak ada Data</center><br>";

        } ?>

        <div style="margin: 20px 13.5% 0;">
            <button onclick="location.href='jurnalinput.php'" style="
                background-color: #00c3d6;
                color: white;
                border: none;
                border-radius: 12px;
                padding: 10px 25px;
                font-family: 'Kanit', sans-serif;
                cursor: pointer;
                font-size: 14px;
            ">Tambah Kegiatan</button>
        </div>
    </main>

    <div class="copyright">
        Copyright © 2025 Telkom DPE. All Rights Reserved.
    </div>
</body>

</html>

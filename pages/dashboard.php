<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../../index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Anda berhasil login.</p>
    <a href="../index.html">Kembali</a>
</body>
</html>
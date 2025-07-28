<?php
session_start();

include_once '../../connection.php';

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cegah SQL Injection
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Cek kecocokan username dan password di database
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login sukses
    $_SESSION['username'] = $username;
    $result = mysqli_query($conn, "SELECT id_login FROM login WHERE username = '$username'");
    $data = mysqli_fetch_assoc($result);
    $id_login = $data['id_login'];
    $_SESSION['id'] = $id_login;

    header("Location: ../journal/jurnaldata.php");
    exit;
} else {
    // Gagal login
    echo "<script>alert('Username atau Password salah!'); window.location.href='index.html';</script>";
}

$conn->close();
?>

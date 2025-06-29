<?php 
// Mengaktifkan session
session_start();

// Menghubungkan ke database
include 'koneksi.php';

// Mengamankan input dari SQL Injection
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Query login dengan prepared statement (lebih aman)
$query = "SELECT * FROM petugas WHERE username=? AND password=?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$cek = mysqli_num_rows($result);

if($cek > 0) {
    $data = mysqli_fetch_assoc($result);

    // Set session data
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['id_user'] = $data['id_petugas'];
    $_SESSION['nama'] = $data['nama_petugas'];
    $_SESSION['login'] = true;

    // Redirect berdasarkan level user
    if($data['level'] == 'admin') {
        header("location: history.php");
    } else {
        // Baik petugas maupun siswa diarahkan ke dashboard
        header("location: transaksi.php"); 
    }
    exit();
} else {
    header("location: index.php?pesan=gagal");
    exit();
}
?>
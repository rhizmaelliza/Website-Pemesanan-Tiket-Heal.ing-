<?php
//Mengaktifkan session php
session_start();

//Perintah memuat isi koneksi.php ke dalam file
include 'koneksi.php';

//Menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//Menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM tb_admin where username='$username' and password='$password'");

//Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

//Mengalihkan halaman login ke halaman Beranda Admin jika data yang diinputkan benar
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:berandaadmin.php");
} 

//Mengalihkan halaman login ke halaman Beranda Admin jika data yang diinputkan benar
else {
    header("location:logingagal.php");
}

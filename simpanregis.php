<?php
//Perintah memuat isi koneksi.php ke dalam file
include "koneksi.php";

//Mengecek apakah semua kolom telah terisi
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    
    //Mengambil data dari inputan form formregister.php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Query insert data formulir ke dalam database
        $sql = "INSERT tb_admin set nama='$nama', email='$email', username='$username', password='$password'";
        $query = mysqli_query($conn, $sql);

        //Mengecek apakah query berhasil di insert
        if ($query) {
            //jika berhasil maka akan dialihkan ke halaman beranda.php
            header('location: beranda.php?');
        } else {
            //jika gagal tampilkan pesan
            die("Gagal menyimpan perubahan..." . mysqli_error($conn));
        }
    } else {
        die("Akses dilarang...");
    }
}
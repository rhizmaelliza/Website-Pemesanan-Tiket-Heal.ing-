<?php
//Perintah memuat isi koneksi.php ke dalam file
include("koneksi.php");

//Mendapatkan id dari data yang dipilih oleh admin
if (isset($_GET['id'])) {

    //Ambil id dari query string
    $id = $_GET['id'];

    //Buat query hapus dari tb_pengunjung
    $sql = "DELETE FROM tb_pengunjung WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    //Mengecek apakah query berhasil dijalankan
    if ($query) {
        header('Location: laporanpengunjung.php');
    } 
    //Jika gagal maka akan muncul tulisan gagal menghapus seperti berikut
    else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}

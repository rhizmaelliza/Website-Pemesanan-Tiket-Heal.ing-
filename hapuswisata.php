<?php

include "koneksi.php" ;

if (isset($_GET['id'])) {
    // buat query hapus
    $sql = "DELETE FROM tb_wisata WHERE id='$_GET[id]'
";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: daftarwisata.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>

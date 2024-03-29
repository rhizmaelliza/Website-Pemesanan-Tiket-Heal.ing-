//Perintah memuat isi koneksi.php ke dalam file
<?php include "koneksi.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Tambah Data Pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Header-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" >
        <div class="container">
            <!-- Logo-->
            <a class="navbar-brand" href="#">
                <h1>Heal.ing</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu-->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="berandaadmin.php"><button type="button" class="btn btn-primary">Home</button></a>
                    <a href="grafikkunjungan.php"><button type="button" class="btn btn-primary">Grafik Kunjungan</button></a>
                    <a href="laporanpengunjung.php"><button type="button" class="btn btn-primary">Laporan Pengunjung</button></a>
                    <a href="daftarwisata.php"><button type="button" class="btn btn-primary">Daftar Wisata</button></a>
                </div>
            </div>
        </div>
    </nav><br><br><br>

    <!-- Konten-->
    <div class="row" style="margin-top: 70px;">
        <!-- Teks Utama/Judul-->
        <div class="col-md-7 text-primary" style="padding: 250px;">
            <h1>Silahkan isi form berikut untuk</h1>
            <h1><strong>Tambah Data Pengunjung</strong></h1>
        </div>

        <!-- Bagian Isi-->
        <div class="col-md-5">
            <div class="d-grid">
                <div class="col-md-10 mx-4 text-right">
                    <!-- Membuat Form-->
                    <form method="POST" action="" class="" style="float: right;">
                        <div class="card border-info mb-3" style="width: 27rem;">
                            <!-- Membuat Card-->
                            <div class="card-body bg-light">
                                <!-- Judul Form-->
                                <div class="form-group">
                                    <div class="col-md-25">
                                        <h1>Form Pemesanan</h1>
                                    </div>
                                </div><br>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div><br>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Pengunjung">
                                    </div><br>
                                </div>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Pengunjung">
                                    </div><br>
                                </div>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Asal Kota</label>
                                        <input type="text" name="askot" class="form-control" placeholder="Masukkan Asal Kota Pengunjung">
                                    </div><br>
                                </div>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Tujuan Wisata</label>
                                        <select class="form-control" name="tujuan" placeholder="Silahkan Pilih Tujuan Anda">
                                            <option></option>
                                            <option>Pantai Balekambang</option>
                                            <option>Pantai Tiga Warna</option>
                                            <option>Pantai Teluk Asmara</option>
                                            <option>Pantai Goa Cina</option>
                                            <option>Pantai Clungup</option>
                                            <option>Pantai Sendiki</option>
                                            <option>Gunung Welirang</option>
                                            <option>Gunung Panderman</option>
                                            <option>Gunung Kelud</option>
                                            <option>Gunung Butak</option>
                                            <option>Air Terjun Coban Rondo</option>
                                            <option>Air Terjun Coban Pelangi</option>
                                            <option>Air Terjun Cinde</option>
                                            <option>Air Terjun Coban Talun</option>
                                            <option>Jatim Park 1</option>
                                            <option>Jatim Park 2</option>
                                            <option>Jatim Park 3</option>
                                            <option>Selecta</option>
                                        </select>
                                    </div><br>
                                </div>

                                <!-- Kolom Pertanyaan Form-->
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>No HP</label>
                                        <input type="number" name="nohp" class="form-control" placeholder="Masukkan No HP Pengunjung"></input>
                                    </div>
                                </div><br>

                                <!-- Membuat Button Submit untuk Tambah Data-->
                                <div class="d-grid">
                                    <center><div class="col-md-10 text-left">
                                        <button type="submit" name="submit" class="btn btn-primary btn-create">Tambah Data</button>
                                    </div></center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright -->
        <div class="text-center p-4 text-light bg-primary" style="background-color: rgba(0, 0, 0, 0.05);">
            <p>© 2022 Copyright: <strong>yantee & rhizma</strong></p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

<?php
//Mengecek nilai inputan apakah telah terisi
if (isset($_POST['tanggal']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['askot']) && isset($_POST['tujuan']) && isset($_POST['nohp'])) {
    //Mengambil inputan dari yang telah diisi
    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $askot = $_POST['askot'];
        $tujuan = $_POST['tujuan'];
        $nohp = $_POST['nohp'];

        //Query insert data formulir ke dalam database pengunjung
        $sql = "INSERT tb_pengunjung SET tanggal='$tanggal', nama='$nama', email='$email', askot='$askot', tujuan='$tujuan', nohp='$nohp', jumlah='1'"; 
        $query = mysqli_query($conn, $sql);

        //Query update jumlah data ke dalam database pesanan
        $sql = "UPDATE tb_pesanan SET jumlah=jumlah+1 WHERE nama='$tujuan'";
        $query = mysqli_query($conn, $sql);        

        //Mengecek apakah query berhasil di insert
        if ($query) {
            //jika berhasil maka akan dialihkan ke halaman beranda.php
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/UAS_PEMWEB/simpandataberhasil.php'>";
        } else {
            //jika gagal tampilkan pesan
            die("Gagal menyimpan perubahan..." . mysqli_error($conn));
        }
    } else {
        die("Akses dilarang...");
    }
}
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2022 pada 17.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhealing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'rhizma', 'sagittarisss@gmail.com', 'akunrhizma', 'passwordrhizma'),
(2, 'Yanti', 'yanti@gmail.com', 'akunyanti', 'passwordyanti'),
(3, 'Rhiz', 'rh@gmail.com', 'akunrhiz', 'passwordriz'),
(4, 'Rhizma Apriyanti', 'rhizmaapriyanti@gmail.com', 'ininamanyausername', 'ininamanyapassword');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_feedback`
--

INSERT INTO `tb_feedback` (`id`, `nama`, `email`, `kritik`, `saran`) VALUES
(1, '', 'apriyantiiinarti@gmail.com', 'qq', 'qq'),
(2, 'Narti Apriyanti', 'nartiapriyanti@gmail.com', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `askot` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `nohp` int(15) NOT NULL,
  `jumlah` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id`, `tanggal`, `nama`, `email`, `askot`, `tujuan`, `nohp`, `jumlah`) VALUES
(1, '2022-06-25', 'rhizma', 'sagittarisss@gmail.com', 'Sidoarjo', 'Jatim Park 3', 857325515, 1),
(3, '2022-06-25', 'rhizma', 'rhi@gmail.com', 'Surabaya', 'Jatim Park 3', 877321874, 1),
(4, '2022-06-25', 'Suhartanti', 'sagittarisss@gmail.com', 'Sidoarjo', 'Jatim Park 3', 821488442, 1),
(5, '2022-06-26', 'Mirza', 'mmirzaf24@gmail.com', 'Lamongan', 'Jatim Park 3', 877099023, 1),
(6, '2022-07-08', 'Yanti', 'yanti@gmail.com', 'Lamongan', 'Jatim Park 3', 214748364, 1),
(7, '2022-06-24', 'Risa', 'risa@gmail.com', 'Jakarta', 'Jatim Park 3', 852993301, 1),
(8, '2022-06-28', 'Putri', 'putri@gmai.com', 'Sidoarjo', 'Jatim Park 1', 877456635, 1),
(9, '2022-06-29', 'Elliza', 'elliza@gmail.com', 'Pasuruan', 'Jatim Park 1', 857002856, 1),
(10, '2022-06-27', 'Liza', 'liza@gmail.com', 'Surabaya', 'Jatim Park 1', 877033218, 1),
(11, '2022-06-25', 'Ini Riz', 'riz@gmail.com', 'Bandung', 'Jatim Park 1', 857774013, 1),
(12, '2022-07-14', 'Liz', 'liz@gmail.com', 'Bali', 'Jatim Park 1', 852771346, 1),
(15, '2022-06-30', 'rhizma', 'mmirzaf24@gmail.com', 'Sidoarjo', 'Jatim Park 1', 852221089, 1),
(16, '2022-06-30', 'Ntii', 'nti@gmail.com', 'Malang', 'Jatim Park 2', 857886900, 1),
(17, '2022-06-23', 'Yanti', 'rh@gmail.com', 'Sidoarjo', 'Pantai Balekambang', 852764430, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama`, `jumlah`) VALUES
(1, 'Pantai Balekambang', 0),
(2, 'Pantai Tiga Warna', 2),
(3, 'Pantai Teluk Asmara', 0),
(4, 'Pantai Goa Cina', 0),
(5, 'Pantai Clungup', 0),
(6, 'Pantai Sendiki', 0),
(7, 'Gunung Welirang', 0),
(8, 'Gunung Panderman', 0),
(9, 'Gunung Kelud', 0),
(10, 'Gunung Butak', 0),
(11, 'Air Terjun Coban Rondo', 0),
(12, 'Air Terjun Coban Pelangi', 0),
(13, 'Air Terjun Cinde', 0),
(14, 'Air Terjun Coban Talun', 0),
(15, 'Jatim Park 1', 6),
(16, 'Jatim Park 2', 1),
(17, 'Jatim Park 3', 6),
(18, 'Selecta', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id`, `nama`, `kategori`, `alamat`, `foto`) VALUES
(16, 'Pantai Balekambang', 'Pantai', 'Desa Sumber Jambe', 'balekambang.jpg'),
(17, 'Pantai Tiga Warna', 'Pantai', 'Desa Sitiarjo', 'tigawarna.jpg'),
(18, 'Pantai Teluk Asmara', 'Pantai', 'Desa Tambakrejo', 'telukasmara.jpg'),
(19, 'Pantai Goa Cina', 'Pantai', 'Desa Sitiarjo', 'goacina.jpg'),
(20, 'Pantai Clungup', 'Pantai', 'Desa Sitiarjo', 'clungup.jpg'),
(21, 'Pantai Sendiki', 'Pantai', 'Desa Sitiarjo', 'sendiki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

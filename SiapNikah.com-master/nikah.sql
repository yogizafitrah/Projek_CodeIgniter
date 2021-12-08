-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Agu 2019 pada 19.18
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nikah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) DEFAULT NULL,
  `email_admin` varchar(200) NOT NULL,
  `password_admin` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'tes', 'tes@admin', '28b662d883b6d76fd96e4ddc5e9ba780'),
(2, 'aldealde', 'alde@admin', 'b586edd6d2ce2c0981e95980eaf66a1b'),
(3, 'erdo', 'erdo@admin', '614fd448f134e0c2861e3245dbda27c3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komentar` int(100) NOT NULL,
  `nama_komentar` varchar(200) NOT NULL,
  `isi_komentar` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`) VALUES
(5, 'Erdo', 'Mantap'),
(6, 'Rade', 'Mantappu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap1`
--

CREATE TABLE IF NOT EXISTS `tahap1` (
`id_tahap1` int(100) NOT NULL,
  `jangka_tahap1` varchar(1000) NOT NULL,
  `isi_tahap1` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap1`
--

INSERT INTO `tahap1` (`id_tahap1`, `jangka_tahap1`, `isi_tahap1`) VALUES
(1, '6-12 Bulan Sebelum Hari-H', 'Tetapkan hari dan tanggal pernikahan. Dalam hal penentuan hari dan tanggal ini biasanya ditentukan sesuai kebudayaan keluarga pengantin, seperti perhitungan jawa dan semacamnya.'),
(2, '6-12 Bulan Sebelum Hari-H', 'Tentukan anggaran pernikahan dan gaya atau model pernikahan yang diinginkan.\r\n'),
(3, '6-12 Bulan Sebelum Hari-H', 'Buat daftar wedding organizer (WO) apabila memang bermaksud menggunakan jasa mereka.'),
(4, '6-12 Bulan Sebelum Hari-H', 'Buat daftar fotografer beserta videografer pernikahan bila diperlukan atau bermaksud menyewa jasa mereka. Karena tak jarang pernikahan yang memang menggunakan orang sendiri dalam hal foto-foto dan video-video pernikahan.'),
(5, '6-12 Bulan Sebelum Hari-H', 'Tentukan jumlah tamu yang akan diundang dalam acara pernikahan.'),
(6, '6-12 Bulan Sebelum Hari-H', 'Pesan tempat, lokasi maupun gedung apabila prosesi atau resepsi pernikahan bermaksud dilakukan di luar rumah.'),
(7, '6-12 Bulan Sebelum Hari-H', 'Mencari mobil pengantin khusus apabila memang diperlukan. Namun kebanyakan memang lebih memilih menggunakan mobil sendiri atau menyewa dari teman.\r\n'),
(8, '6-12 Bulan Sebelum Hari-H', 'Buat daftar tamu-tamu apabila memang terdapat tamu-tamu khusus yang memiliki jam khusus kedatangan.'),
(9, '6-12 Bulan Sebelum Hari-H', 'Tentukan pengiring pengantin pria dan wanitanya beserta pengiring lainnya apabila memang diperlukan.'),
(10, '6-12 Bulan Sebelum Hari-H', 'Temui desainer atau tempat-tempat khusus baju pengantin untuk memilih dan memesan baju yang akan dikenakan pada acara pernikahan.'),
(11, '6-12 Bulan Sebelum Hari-H', 'Pilih dan pesan jasa catering untuk jasa penyediakan konsumsi para undangan, kecuali memang berniat untuk memasak sendiri dengan bantuan para kerabat.'),
(12, '6-12 Bulan Sebelum Hari-H', 'Putuskan tujuan honeymoon, lakukan pemesanan tiket, dan akomodasi lainnya. Tentu apabila memang pengantin bermaksud melakukan honeymoon ke tempat yang khusus.'),
(13, '6-12 Bulan Sebelum Hari-H', 'Cari dan pesan souvenir khusus bagi para tamu undangan bila diinginkan.'),
(14, '6-12 Bulan Sebelum Hari-H', 'Cari dan pesan hiburan tambahan yang ada ditampilkan ketika acara pernikahan bila diinginkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap2`
--

CREATE TABLE IF NOT EXISTS `tahap2` (
`id_tahap2` int(100) NOT NULL,
  `jangka_tahap2` varchar(1000) NOT NULL,
  `isi_tahap2` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap2`
--

INSERT INTO `tahap2` (`id_tahap2`, `jangka_tahap2`, `isi_tahap2`) VALUES
(1, '4-5 Bulan Sebelum Hari-H', 'Selaikan daftar tamu-tamu apabila memang masih ada daftar undangan yang tertinggal atau terlupakan.'),
(2, '4-5 Bulan Sebelum Hari-H', 'Hubungi penghulu/petugas KUA (bagi yang Islam), pendeta/pastur (bagi yang Kristen dan Katholik), dan perangkat berwenang lain bagi agama-agama lainnya.'),
(3, '4-5 Bulan Sebelum Hari-H', 'Pilih dan pesan desain undangan segara. Kalau memang bermaksud membuat desain sendiri, segera mulailah mengerjakan desainnya.'),
(4, '4-5 Bulan Sebelum Hari-H', 'Tentukan tema dekorasi yang diinginkan. Bahkan apabila memungkinkan sesuaikan warna dekorasi dengan warna baju pengantin supaya makin menarik.'),
(5, '4-5 Bulan Sebelum Hari-H', 'Segera tentukan pilihan baju pengantin yang cocok.'),
(6, '4-5 Bulan Sebelum Hari-H', 'Mulai membuat kerangka dekorasi pernikahan (tempat acara).'),
(7, '4-5 Bulan Sebelum Hari-H', 'Pastikan deal atau transaksi fiksasi dengan wedding organizer (WO) apabila memang sudah memutuskan untuk menggunakan jasa mereka.'),
(8, '4-5 Bulan Sebelum Hari-H', 'Membuat foto pre-wedding apabila diperlukan.'),
(9, '4-5 Bulan Sebelum Hari-H', 'Pesan kue atau makanan pengantin. Dalam beberapa budaya atau adat pernikahan biasanya ada kue khusus yang disediakan untuk ritual sang pengantin. Dalam adat jawa biasanya adalah nasi tumpeng dan semacamnya.\r\n'),
(10, '4-5 Bulan Sebelum Hari-H', 'Pesan cincin kawin untuk pengantin.'),
(11, '4-5 Bulan Sebelum Hari-H', 'Selesaikan fiksasi souvenir khusus bagi para tamu undangan bila diinginkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap3`
--

CREATE TABLE IF NOT EXISTS `tahap3` (
`id_tahap3` int(100) NOT NULL,
  `jangka_tahap3` varchar(1000) NOT NULL,
  `isi_tahap3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap3`
--

INSERT INTO `tahap3` (`id_tahap3`, `jangka_tahap3`, `isi_tahap3`) VALUES
(1, '2-3 Bulan Sebelum Hari-H', 'Ambil formulir penikahan di badan khusus Negara yang mengurusi masalah pernikahan. Dan siapkan pula dokumen-dokumen yang diperlukan.'),
(2, '2-3 Bulan Sebelum Hari-H', 'Lakukan cek kesehatan sebelum pernikahan untuk menjamin dan menjaga kesehatan.'),
(3, '2-3 Bulan Sebelum Hari-H', 'Konfirmasi masalah honeymoon apabila memang akan melakukan honeymoon ke tempat-tempat khusus. Bahkan apabila bermaksud ke luar negeri dan belum mempunyai paspor, segeralah membuatnya.'),
(4, '2-3 Bulan Sebelum Hari-H', 'Hubungi desainer untuk melakukan pengecekan sekaligus pengepasan ukuran baju pengantin, baik pengantin pria maupun wanita.\r\n'),
(5, '2-3 Bulan Sebelum Hari-H', 'Selesaikan desain undangan apabila memang mendesain undangan sendiri dan segeralah cetak.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap4`
--

CREATE TABLE IF NOT EXISTS `tahap4` (
`id_tahap4` int(100) NOT NULL,
  `jangka_tahap4` varchar(1000) NOT NULL,
  `isi_tahap4` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap4`
--

INSERT INTO `tahap4` (`id_tahap4`, `jangka_tahap4`, `isi_tahap4`) VALUES
(1, '6-8 Minggu Sebelum Hari-H', 'Tulis dan atur pengiriman undangan.'),
(2, '6-8 Minggu Sebelum Hari-H', 'Selesaikan menu-menu makanan dan minuman apabila memang memakai jasa catering.\r\n'),
(3, '6-8 Minggu Sebelum Hari-H', 'Tambahkan menu tambahan seperti menu penutup khusus bagi para undangan.'),
(4, '6-8 Minggu Sebelum Hari-H', 'Pesan perias pengantin untuk hari-H pernikahan.'),
(5, '6-8 Minggu Sebelum Hari-H', 'Lakukan tes make-up dengan perias, terutama untuk riasan pengantin wanita.'),
(6, '6-8 Minggu Sebelum Hari-H', 'Fiksasi hiburan tambahan yang ada ditampilkan ketika acara pernikahan apabila memang diinginkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap5`
--

CREATE TABLE IF NOT EXISTS `tahap5` (
`id_tahap5` int(100) NOT NULL,
  `jangka_tahap5` varchar(1000) NOT NULL,
  `isi_tahap5` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap5`
--

INSERT INTO `tahap5` (`id_tahap5`, `jangka_tahap5`, `isi_tahap5`) VALUES
(1, '3-5 Minggu Sebelum Hari-H', 'Kirim atau sebar undangan.'),
(2, '3-5 Minggu Sebelum Hari-H', 'Ambil pesanan cincin kawin. Pastikan desainnya benar, seperti misalnya bertuliskan inisial nama.'),
(3, '3-5 Minggu Sebelum Hari-H', 'Ambil pesanan cincin kawin. Pastikan desainnya benar, seperti misalnya bertuliskan inisial nama.'),
(4, '3-5 Minggu Sebelum Hari-H', 'Pesan traveller cheque/mata uang asing apabila memang bermaksud melakukan honeymoon ke luar negeri.'),
(5, '3-5 Minggu Sebelum Hari-H', 'Susun randon acara pernikahan, gandakan, dan berikan pada keluarga serta orang-orang yang memang sudah dibeban tugaskan.'),
(6, '3-5 Minggu Sebelum Hari-H', 'Konfirmasi dan cek kembali jumlah undangan yang telah disebar.'),
(7, '3-5 Minggu Sebelum Hari-H', 'Konfirmasi semua pesanan sekali lagi secara detail, seperti catering, WO, dan lainnya.\r\n'),
(8, '3-5 Minggu Sebelum Hari-H', 'Mencoba baju pengantin secara lengkap dengan berbagai hiasannya.'),
(9, '3-5 Minggu Sebelum Hari-H', 'Periksa kenyamanan ukuran secara pasti. Sehingga apabila masih ada kekurangan bisa segera disempurnakan.'),
(10, '3-5 Minggu Sebelum Hari-H', 'Lakukan perawatan wajah apabila perlu agar tampak lebih bersinar saat hari-H pernikahan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap6`
--

CREATE TABLE IF NOT EXISTS `tahap6` (
`id_tahap6` int(100) NOT NULL,
  `jangka_tahap6` varchar(1000) NOT NULL,
  `isi_tahap6` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahap6`
--

INSERT INTO `tahap6` (`id_tahap6`, `jangka_tahap6`, `isi_tahap6`) VALUES
(1, '1 Minggu Sebelum Hari-H', 'Mulailah bersantai dan rilekskan pikiran, khusus untuk pengantin. Yakinkan diri bahwa semuanya akan beres dan dapat berjalan dengan lancer.'),
(2, '1 Minggu Sebelum Hari-H', 'Berkemas untuk honeymoon apabila memang bermaksud melakukan honeymoon ke luar kota, bahkan ke luar negeri.'),
(3, '1 Minggu Sebelum Hari-H', 'Konfirmasi sekali lagi secara detail semua pesanan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `password_user` varchar(200) NOT NULL,
  `ket_user` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `ket_user`) VALUES
(1, 'yogi', 'yogi@gmail', '938e14c074c45c62eb15cc05a6f36d79', NULL),
(2, 'erdo', 'erdo@gmail', 'erdo', NULL),
(5, 'Alde', 'Alde@gmail', 'alde', 1),
(6, 'Hari', 'Hari@gmail.com', 'hari', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tahap1`
--
ALTER TABLE `tahap1`
 ADD PRIMARY KEY (`id_tahap1`);

--
-- Indexes for table `tahap2`
--
ALTER TABLE `tahap2`
 ADD PRIMARY KEY (`id_tahap2`);

--
-- Indexes for table `tahap3`
--
ALTER TABLE `tahap3`
 ADD PRIMARY KEY (`id_tahap3`);

--
-- Indexes for table `tahap4`
--
ALTER TABLE `tahap4`
 ADD PRIMARY KEY (`id_tahap4`);

--
-- Indexes for table `tahap5`
--
ALTER TABLE `tahap5`
 ADD PRIMARY KEY (`id_tahap5`);

--
-- Indexes for table `tahap6`
--
ALTER TABLE `tahap6`
 ADD PRIMARY KEY (`id_tahap6`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komentar` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tahap1`
--
ALTER TABLE `tahap1`
MODIFY `id_tahap1` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tahap2`
--
ALTER TABLE `tahap2`
MODIFY `id_tahap2` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tahap3`
--
ALTER TABLE `tahap3`
MODIFY `id_tahap3` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tahap4`
--
ALTER TABLE `tahap4`
MODIFY `id_tahap4` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tahap5`
--
ALTER TABLE `tahap5`
MODIFY `id_tahap5` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tahap6`
--
ALTER TABLE `tahap6`
MODIFY `id_tahap6` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

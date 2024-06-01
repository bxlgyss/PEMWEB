-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 07:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `public_web_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `intansi_negara`
--

CREATE TABLE `intansi_negara` (
  `id_intansi` varchar(255) NOT NULL,
  `nama_intansi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `intansi_negara`
--

INSERT INTO `intansi_negara` (`id_intansi`, `nama_intansi`) VALUES
('1', 'Kementerian Dalam Negeri'),
('2', 'Kementerian Luar Negeri'),
('3', 'Kementerian Pertahanan'),
('4', 'Kementerian Hukum dan HAM'),
('5', 'Kementerian Keuangan'),
('6', 'Kementerian Energi dan Sumber Daya Mineral'),
('7', 'Kementerian Perindustrian'),
('8', 'Kementerian Perdagangan'),
('9', 'Kementerian Pertanian'),
('10', 'Kementerian Lingkungan Hidup dan Kehutanan'),
('11', 'Kementerian Perhubungan'),
('12', 'Kementerian Kelautan dan Perikanan'),
('13', 'Kementerian Tenaga Kerja'),
('14', 'Kementerian Kesehatan'),
('15', 'Kementerian Pendidikan dan Kebudayaan'),
('16', 'Kementerian Riset, Teknologi, dan Pendidikan Tinggi'),
('17', 'Kementerian Sosial'),
('18', 'Kementerian Agama'),
('19', 'Kementerian Komunikasi dan Informatika'),
('20', 'Kementerian Pariwisata'),
('21', 'Kementerian Pekerjaan Umum dan Perumahan Rakyat'),
('22', 'Kementerian Perencanaan Pembangunan Nasional/Bappenas'),
('23', 'Kementerian Koperasi dan Usaha Kecil dan Menengah'),
('24', 'Kementerian BUMN'),
('25', 'Kementerian Pemberdayaan Perempuan dan Perlindungan Anak'),
('26', 'Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi'),
('27', 'Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi'),
('28', 'Badan Nasional Penanggulangan Bencana'),
('29', 'Badan Pusat Statistik'),
('30', 'Badan Intelijen Negara'),
('31', 'Badan Pengawasan Keuangan dan Pembangunan'),
('32', 'Badan Meteorologi, Klimatologi, dan Geofisika'),
('33', 'Lembaga Ilmu Pengetahuan Indonesia'),
('34', 'Badan Tenaga Nuklir Nasional'),
('35', 'Badan Narkotika Nasional'),
('36', 'Badan Kepegawaian Negara'),
('37', 'Badan Pengawas Obat dan Makanan'),
('38', 'Badan Ekonomi Kreatif'),
('39', 'Badan Koordinasi Penanaman Modal'),
('40', 'Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia'),
('41', 'Komisi Pemberantasan Korupsi'),
('42', 'Dewan Perwakilan Rakyat'),
('43', 'Majelis Permusyawaratan Rakyat'),
('44', 'Dewan Perwakilan Daerah'),
('45', 'Mahkamah Agung'),
('46', 'Mahkamah Konstitusi'),
('47', 'Badan Pemeriksa Keuangan'),
('48', 'Komisi Yudisial'),
('49', 'Ombudsman Republik Indonesia'),
('50', 'Bank Indonesia'),
('51', 'Otoritas Jasa Keuangan'),
('52', 'Lembaga Penjamin Simpanan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengaduan`
--

CREATE TABLE `kategori_pengaduan` (
  `id_kategori` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategori_pengaduan`
--

INSERT INTO `kategori_pengaduan` (`id_kategori`, `kategori`) VALUES
('1', 'Infrastruktur'),
('10', 'Billing'),
('11', 'Pelayanan Pelanggan'),
('12', 'Administrasi'),
('13', 'Pelayanan Publik'),
('14', 'Transparansi dan Akuntabilitas'),
('15', 'Pencemaran'),
('16', 'Perusakan Lingkungan'),
('17', 'Pengelolaan Limbah'),
('18', 'Kondisi Kerja'),
('19', 'Hubungan Kerja'),
('2', 'Kebersihan dan Sanitasi'),
('20', 'Kebijakan Perusahaan'),
('21', 'Pelanggaran Hukum'),
('22', 'Pelanggaran HAM'),
('23', 'Layanan Internet'),
('24', 'Layanan Telepon'),
('25', 'Keamanan Data'),
('26', 'Pelayanan Bank'),
('27', 'Produk Keuangan'),
('28', 'Transaksi'),
('29', 'Pelanggaran Etika dan Moral'),
('3', 'Transportasi'),
('30', 'Kebijakan dan Regulasi Pemerintah'),
('31', 'Sosial dan Budaya'),
('4', 'Keamanan dan Ketertiban'),
('5', 'Kesehatan'),
('6', 'Pendidikan'),
('7', 'Produk'),
('8', 'Pengiriman'),
('9', 'Layanan Purna Jual');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(255) NOT NULL,
  `id_pengaduan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `tanggal` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id_berita` int(11) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_not` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `isi_not` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `kategori_pengaduan` varchar(256) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` mediumblob DEFAULT NULL,
  `vidio` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `kategori_pengaduan`, `wilayah`, `nama`, `email`, `pesan`, `tanggal`, `gambar`, `vidio`) VALUES
(32, 'Infrastruktur', '', 'valentino', 'tinxsen31@gmail.com', 'omaha', '2024-05-19 12:59:47', 0x75706c6f6164732f, 0x75706c6f6164732f);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `NIK` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `status_pengaduan`
--

CREATE TABLE `status_pengaduan` (
  `id_status` varchar(255) NOT NULL,
  `id_pengaduan` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `status_pengaduan`
--

INSERT INTO `status_pengaduan` (`id_status`, `id_pengaduan`, `status`) VALUES
('1', 32, 'diproses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('valentino Rossi', 'tinxsen31@gmail.com', '$2y$10$YbbHF6EirXBepMupYZLs2Oo7fn9dpTUkIW/7RHpAO2UowwdIlPy.a'),
('firda', 'tinxsen31@gmail.com', '$2y$10$vNH1XhZTgHA1HkmMOw2H2uvltlfFxv./U45ND79/OYrOGjGChwl/m');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `kecamatan`) VALUES
('1', 'Bangilan'),
('2', 'Bancar'),
('3', 'Jatirogo'),
('4', 'Jenu'),
('5', 'Kenduruan'),
('6', 'Kerek'),
('7', 'Merakurak'),
('8', 'Montong'),
('9', 'Palang'),
('10', 'Parengan'),
('11', 'Plumpang'),
('12', 'Rengel'),
('13', 'Semanding'),
('14', 'Senori'),
('15', 'Singgahan'),
('16', 'Soko'),
('17', 'Tambakboyo'),
('18', 'Tuban'),
('19', 'Widang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_pengaduan`
--
ALTER TABLE `kategori_pengaduan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `status_pengaduan`
--
ALTER TABLE `status_pengaduan`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `status_pengaduan_ibfk_1` (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

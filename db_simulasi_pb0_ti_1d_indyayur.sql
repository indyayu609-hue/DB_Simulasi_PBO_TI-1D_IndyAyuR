-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 06:45 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pb0_ti_1d_indyayur`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', 85.50, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', 'SMKN 2 Bandung', 78.00, 250000.00, 'Reguler', 'Sistem Informasi', 'Kampus B', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'SMA Kristen 1 Surabaya', 92.25, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(4, 'Dedi Wijaya', 'SMAN 3 Yogyakarta', 80.00, 250000.00, 'Reguler', 'Sains Data', 'Kampus C', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMAN 5 Semarang', 88.75, 250000.00, 'Reguler', 'Teknik Komputer', 'Kampus Utama', NULL, NULL, NULL, NULL),
(6, 'Fajar Ramadhan', 'MAN 1 Medan', 76.50, 250000.00, 'Reguler', 'Sistem Informasi', 'Kampus B', NULL, NULL, NULL, NULL),
(7, 'Gita Permata', 'SMAN 2 Makassar', 83.40, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(8, 'Hadi Sulistyo', 'SMAN 1 Surakarta', 95.00, 150000.00, 'Prestasi', 'Teknik Informatika', 'Kampus Utama', 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Cahyani', 'SMAN 3 Malang', 91.00, 150000.00, 'Prestasi', 'Sains Data', 'Kampus C', 'Lomba Karya Ilmiah', 'Provinsi', NULL, NULL),
(10, 'Joko Tingkir', 'SMKN 1 Purwokerto', 89.50, 150000.00, 'Prestasi', 'Teknik Komputer', 'Kampus Utama', 'LKS Web Technologies', 'Nasional', NULL, NULL),
(11, 'Kartika Sari', 'SMAN 7 Denpasar', 93.00, 150000.00, 'Prestasi', 'Sistem Informasi', 'Kampus B', 'FLS2N Musik Tradisional', 'Nasional', NULL, NULL),
(12, 'Laksana Tri', 'SMAN 1 Palembang', 87.80, 150000.00, 'Prestasi', 'Teknik Informatika', 'Kampus Utama', 'Kejuaraan Pencak Silat', 'Wilayah/Regional', NULL, NULL),
(13, 'Mega Utami', 'SMA Labschool Jakarta', 96.00, 150000.00, 'Prestasi', 'Sains Data', 'Kampus C', 'Olimpiade Astronomi', 'Internasional', NULL, NULL),
(14, 'Naufal Abdi', 'SMAN 1 Balikpapan', 84.00, 300000.00, 'Kedinasan', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, 'SK-990/KD/2026', 'Kementerian Komunikasi dan Digital'),
(15, 'Olivia Zalianty', 'SMAN 8 Perbatasan', 82.50, 300000.00, 'Kedinasan', 'Sistem Informasi', 'Kampus B', NULL, NULL, 'SK-112/BPN/2025', 'Badan Pertanahan Nasional'),
(16, 'Putra Pratama', 'SMAN 1 Tarakan', 86.00, 300000.00, 'Kedinasan', 'Teknik Komputer', 'Kampus Utama', NULL, NULL, 'SK-445/Dishub/2026', 'Dinas Perhubungan'),
(17, 'Qori Sandria', 'MAN 2 Pontianak', 81.20, 300000.00, 'Kedinasan', 'Sistem Informasi', 'Kampus B', NULL, NULL, 'SK-887/Setda/2026', 'Pemerintah Provinsi Kalimantan Barat'),
(18, 'Rian Hidayat', 'SMKN 1 Jayapura', 85.00, 300000.00, 'Kedinasan', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, 'SK-009/Otsus/2026', 'Badan Pengembangan SDM Papua'),
(19, 'Siti Aminah', 'SMAN 1 Banda Aceh', 89.10, 300000.00, 'Kedinasan', 'Sains Data', 'Kampus C', NULL, NULL, 'SK-761/Disdik/2026', 'Dinas Pendidikan Aceh'),
(20, 'Taufik Hidayat', 'SMAN 4 Ambon', 80.30, 300000.00, 'Kedinasan', 'Teknik Komputer', 'Kampus Utama', NULL, NULL, 'SK-332/Bupati/2026', 'Pemerintah Kabupaten Maluku Tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

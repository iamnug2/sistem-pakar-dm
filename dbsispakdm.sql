-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 05:19 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsispakdm`
--
CREATE DATABASE IF NOT EXISTS `dbsispakdm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbsispakdm`;

-- --------------------------------------------------------

--
-- Table structure for table `data_pakar`
--

CREATE TABLE IF NOT EXISTS `data_pakar` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pakar`
--

INSERT INTO `data_pakar` (`username`, `password`, `pertanyaan`, `jawaban`) VALUES
('pakar', '53e40ae266ebf8fc898a0b0bf34b789c', 'Apa Makanan Favorit Anda?', '53e40ae266ebf8fc898a0b0bf34b789c');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `usia` int(2) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`),
  KEY `nama_user` (`nama_user`),
  KEY `usia` (`usia`),
  KEY `alamat` (`alamat`),
  KEY `jenis_kelamin` (`jenis_kelamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`username`, `password`, `nama_user`, `usia`, `jenis_kelamin`, `alamat`, `pertanyaan`, `jawaban`) VALUES
('rahman', 'cb048a08d2e857f37fe9cd373cf15bac', 'Aulia Rahman', 46, 'L', 'Jl. Kapt. Muslim Medan', 'Siapa Nama Guru Favorit Anda?', 'cb048a08d2e857f37fe9cd373cf15bac');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `kode_induk_ya` varchar(4) NOT NULL,
  `kode_induk_tidak` varchar(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_gejala`),
  KEY `kode_induk_ya` (`kode_induk_ya`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `kode_induk_ya`, `kode_induk_tidak`) VALUES
('G001', 'PUSING DAN MUAL', '', ''),
('G002', 'SERING BERKEMIH (POLIURIA)', 'G001', 'G001'),
('G003', 'PENGLIHATAN MENJADI KABUR', 'G002', 'G002'),
('G004', 'BERAT BADAN TURUN CEPAT', 'G003', 'G003'),
('G005', 'AIR SENI DIKERUBUTI SEMUT', 'G004', 'G004'),
('G006', 'MERASA HAUS, BANYAK MINUM (POLIDIPSIA)', 'G002', 'G005'),
('G007', 'MERASA LAPAR, BANYAK MAKAN (POLIFAGIA)', 'G006', ''),
('G008', 'MERASA LEMAH DAN GAMPANG LELAH', 'G007', 'G007'),
('G009', 'SERING BATUK PILEK YANG BERULANG', 'G008', 'G008'),
('G010', 'SERING KESEMUTAN PADA MALAM HARI', 'G009', 'G009'),
('G011', 'LUKA LUAR YANG LAMA SEMBUH', 'G005', 'G006'),
('G012', 'INFEKSI KULIT YANG BERULANG', 'G011', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_diagnosa`
--

CREATE TABLE IF NOT EXISTS `hasil_diagnosa` (
  `id_diagnosa` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `kode_penyakit` varchar(4) NOT NULL,
  `tanggal_diagnosa` datetime NOT NULL,
  `persentase` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_diagnosa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id_diagnosa`, `username`, `kode_penyakit`, `tanggal_diagnosa`, `persentase`) VALUES
(3, 'rahman', 'P002', '2013-09-13 19:26:53', 80),
(4, 'rahman', 'P002', '2013-09-13 19:28:23', 60),
(5, 'rahman', 'P001', '2013-09-13 19:30:04', 90),
(6, 'rahman', 'P002', '2015-02-25 14:17:48', 120),
(7, 'rahman', '', '2015-02-25 14:21:43', 0),
(8, 'rahman', 'P002', '2015-02-26 11:45:15', 120),
(9, 'rahman', 'P001', '2015-02-26 11:50:25', 105),
(10, 'rahman', 'P002', '2015-02-26 11:52:42', 100),
(11, 'rahman', 'P002', '2015-02-26 17:47:52', 120),
(12, 'rahman', 'P002', '2015-03-03 10:30:46', 80),
(13, 'rahman', 'P002', '2015-03-03 10:31:55', 120),
(14, 'rahman', 'P002', '2015-03-03 10:40:24', 120),
(15, 'rahman', 'P002', '2015-03-03 11:08:16', 60);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `kode_penyakit` varchar(4) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `definisi` varchar(1000) NOT NULL,
  `pengobatan` varchar(1000) NOT NULL,
  `pencegahan` varchar(500) NOT NULL,
  PRIMARY KEY (`kode_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `definisi`, `pengobatan`, `pencegahan`) VALUES
('P001', 'DIABETES MELITUS  TIPE 1 (IDDM)', 'Penyakit Diabetes yang bergantung pada insulin, dimana tubuh kekurangan hormon insulin. Dikenal dengan istilah Insulin Dependent Deiabetes Melitus(IDDM).\r\nDiabetes tipe ini muncul ketika Pankreas sebagai pabrik insulin tidak lagi dapat atau mampu memproduksi insulin. Akibatnya insulin tubuh kurang atau tidak ada sama sekali. Glukosa menumpuk dalam darah karena tidak lagi dapat diangkut ke dalam sel. ', 'Tindakan pengelolaan yang dilakukan : Menormalkan kadar glukosa, lemak, dan insulin di dalam darah serta memberikan pengobatan penyakit kronis lainnya. Langkah yang dilakukan terutama : Diet; Mengurangi kalori dan meningkatkan konsumsi vitamin. aktivitas fisik; olahraga teratur, pengelolaan glukosa dan meningkatkan kepekaan terhadap insulin, Obat-obat hipoglikemia oral : Sulfonylurea untuk merangsang pancreas menghasilkan insulin dan mengurangi resistensi terhadap insulin, Terapi insulin', 'Membiasakan diri sejak dini dengan pola hidup sehat.'),
('P002', 'DIABETES MELITUS TIPE 2 (NIDDM)', 'Diabetes Melitus yang sering disebut dengan Non-Insulin Dependent Diabetes Melitus atau diabetes mellitus tanpa bergantung pada insulin. Penyebab penyakit diabetes tipe 2 ini adalah kurangnya insulin pada tubuh bukan karena pankreas yang tidak berfungsi dengan baik.', 'Tindakan pengelolaan yang dilakukan : Menormalkan kadar glukosa, lemak, dan insulin di dalam darah serta memberikan pengobatan penyakit kronis lainnya. Langkah yang dilakukan terutama : Diet; Mengurangi kalori dan meningkatkan konsumsi vitamin. aktivitas fisik; olahraga teratur, pengelolaan glukosa dan meningkatkan kepekaan terhadap insulin, Obat-obat hipoglikemia oral : Sulfonylurea untuk merangsang pancreas menghasilkan insulin dan mengurangi resistensi terhadap insulin, Terapi insulin', 'Membiasakan diri sejak dini dengan pola hidup sehat');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_penyakit_gejala`
--

CREATE TABLE IF NOT EXISTS `relasi_penyakit_gejala` (
  `kode_penyakit` varchar(4) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `bobot` int(3) NOT NULL,
  KEY `kode_penyakit` (`kode_penyakit`),
  KEY `kode_gejala` (`kode_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_penyakit_gejala`
--

INSERT INTO `relasi_penyakit_gejala` (`kode_penyakit`, `kode_gejala`, `bobot`) VALUES
('P001', 'G001', 15),
('P001', 'G002', 15),
('P001', 'G006', 15),
('P001', 'G007', 15),
('P001', 'G008', 15),
('P001', 'G009', 15),
('P001', 'G010', 10),
('P002', 'G001', 20),
('P002', 'G003', 20),
('P002', 'G004', 20),
('P002', 'G005', 20),
('P002', 'G011', 10),
('P002', 'G012', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE IF NOT EXISTS `tmp_analisa` (
  `username` varchar(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE IF NOT EXISTS `tmp_gejala` (
  `username` varchar(10) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_penyakit`
--

CREATE TABLE IF NOT EXISTS `tmp_penyakit` (
  `username` varchar(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

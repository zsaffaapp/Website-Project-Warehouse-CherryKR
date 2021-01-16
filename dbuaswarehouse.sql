-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 02:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuaswarehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(30) NOT NULL,
  `nama_artis` varchar(30) NOT NULL,
  `nama_genre` varchar(30) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_album` int(11) NOT NULL,
  `tahun_albun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_album`, `nama_album`, `nama_artis`, `nama_genre`, `harga_satuan`, `jumlah_album`, `tahun_albun`) VALUES
(1, 'One-reeler', 'IZ*ONE', 'K-Pop', 350000, 209, 2020),
(12, 'Vivid', 'AB6IX', 'Hip Hop', 350000, 200, 2020),
(19, 'Sustainable', 'AKB48', 'J-Pop', 170000, 29, 2020),
(23, 'Petualangan Sherina', 'Sherina', 'Anak-Anak', 50000, 10, 1999),
(30, 'Fearless', 'Taylor Swift', 'Country', 200000, 120, 2007),
(100, 'Diam Diam Suka', 'Cherrybelle', 'Pop', 200000, 930, 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

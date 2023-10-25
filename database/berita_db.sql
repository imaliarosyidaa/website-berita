-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 09:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_minuman`
--

CREATE TABLE `jenis_minuman` (
  `id_jenis_minuman` int(11) NOT NULL,
  `jenis_minuman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_minuman`
--

INSERT INTO `jenis_minuman` (`id_jenis_minuman`, `jenis_minuman`) VALUES
(1, 'Ciu'),
(2, 'Anggur Orang Tua'),
(3, 'Guinness'),
(4, 'Anggur Merah'),
(5, 'Rajawali'),
(6, 'Vodka'),
(7, 'Intisari'),
(8, 'Brandy'),
(9, 'Mansion'),
(10, 'Anggur Ginseng'),
(11, 'Kolesom Kecil'),
(12, 'Kolesom Besar'),
(13, 'Aseng'),
(14, 'Bintang'),
(15, 'Bir'),
(16, 'Bir Hitam');

-- --------------------------------------------------------

--
-- Table structure for table `penertiban`
--

CREATE TABLE `penertiban` (
  `id` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_jenis_minuman` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penertiban`
--

INSERT INTO `penertiban` (`id`, `id_wilayah`, `id_jenis_minuman`, `jumlah`, `volume`) VALUES
(1, 1, 1, 19, 'Botol'),
(2, 1, 2, 134, 'Botol'),
(3, 1, 3, 12, 'Botol'),
(4, 1, 4, 84, 'Botol'),
(5, 1, 5, 84, 'Botol'),
(6, 1, 6, 4, 'Botol'),
(7, 1, 7, 9, 'Botol'),
(8, 2, 2, 13, 'Botol'),
(9, 2, 4, 2, 'Botol'),
(10, 2, 5, 55, 'Botol'),
(11, 2, 6, 20, 'Botol'),
(12, 2, 8, 60, 'Botol'),
(13, 2, 9, 23, 'Botol'),
(14, 2, 10, 132, 'Botol'),
(15, 3, 4, 9, 'Botol'),
(16, 3, 5, 26, 'Botol'),
(17, 3, 8, 181, 'Botol'),
(18, 3, 11, 9, 'Botol'),
(19, 3, 12, 10, 'Botol'),
(20, 3, 13, 41, 'Botol'),
(21, 4, 5, 45, 'Botol'),
(22, 4, 7, 3, 'Botol'),
(23, 4, 8, 60, 'Botol'),
(24, 5, 3, 5, 'Botol'),
(25, 5, 4, 120, 'Botol'),
(26, 5, 6, 4, '0.00'),
(27, 5, 8, 60, '0.00'),
(28, 5, 14, 42, '0.00'),
(29, 5, 15, 66, '0.00'),
(30, 5, 16, 119, '0.00'),
(31, 1, 1, 40, 'Botol'),
(32, 5, 13, 120, 'Botol');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `wilayah`) VALUES
(1, 'Kecamatan Pademangan'),
(2, 'Kecamatan Koja'),
(3, 'Kecamatan Cilincing'),
(4, 'Kecamatan Tanjung Priok'),
(5, 'Kecamatan Kelapa Gading');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_minuman`
--
ALTER TABLE `jenis_minuman`
  ADD PRIMARY KEY (`id_jenis_minuman`);

--
-- Indexes for table `penertiban`
--
ALTER TABLE `penertiban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wilayah` (`id_wilayah`),
  ADD KEY `id_jenis_minuman` (`id_jenis_minuman`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penertiban`
--
ALTER TABLE `penertiban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penertiban`
--
ALTER TABLE `penertiban`
  ADD CONSTRAINT `penertiban_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`),
  ADD CONSTRAINT `penertiban_ibfk_2` FOREIGN KEY (`id_jenis_minuman`) REFERENCES `jenis_minuman` (`id_jenis_minuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

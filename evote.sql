-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 07:04 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$12$BmycVLjBGPMok4YE11kPLuY79ofePztN6GgdW/SG2I/6f3KM4kRzi');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `foto`) VALUES
(1, 'Joko Widodo', 'Surakarta', '1998-08-12', 'L', 'http://localhost/evote/assets/img/kandidat/jokowi.jpg1537914764'),
(2, 'Prabowo Subianto', 'Jakarta', '1978-07-12', 'L', 'http://localhost/evote/assets/img/kandidat/prabowo.png1537914788');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `address_eth` varchar(42) NOT NULL,
  `private_key` varchar(100) NOT NULL,
  `id_kandidat` int(11) DEFAULT NULL,
  `waktu` datetime NOT NULL,
  `txHash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `address_eth`, `private_key`, `id_kandidat`, `waktu`, `txHash`) VALUES
(3, 'Krisbiantoro Prabowo', 'Sangatta', '1998-07-12', 'L', '0xC80952529A1c2f0f2e648518d48213b1645f571E', '', 1, '2018-11-01 10:50:35', ''),
(24, 'Danang Sulis', 'Sendang', '2018-05-10', 'L', '0xC80952529A1c2f0f2e648518d48213b1645f571E', '6f62211129e3d826b38ed8226331f7d0', NULL, '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 03:31 AM
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
-- Database: `profile_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama_media` text NOT NULL,
  `media_link` text NOT NULL,
  `waktu_unggah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `nama_media`, `media_link`, `waktu_unggah`) VALUES
(1, 'cover', '2018-06/cover.png', '2018-06-03 21:04:00'),
(2, 'cover-misi', '2018-06/cover-misi.jpeg', '2018-06-04 20:00:00'),
(3, 'bangunan', '2018-06/bangunan.png', '2018-06-04 00:00:00'),
(4, 'keagamaan', '2018-06/keagamaan.jpg', '2018-06-04 00:00:00'),
(5, 'jalan-jalan', '2018-06/kegiatan-olahraga.jpg', '2018-06-04 00:00:00'),
(6, 'kegiatan-harian', '2018-06/kegiatan-harian.jpeg', '2018-06-05 00:00:00'),
(7, 'avatar-guru-1.png', 'avatar-guru-1.png.png', '2018-06-11 08:31:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

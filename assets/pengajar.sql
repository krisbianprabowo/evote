-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 10:03 AM
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
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('aktif','tidak aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama`, `jabatan`, `deskripsi`, `foto`, `status`) VALUES
(1, 'Ani Rubia Bekti,S.sos.I,S.Pd', 'Kepala Sekolah', 'Menjabat sebagai Kepala Sekolah TK ABA WIROBRAJAN 2							', 'http://localhost/profiletk/assets/img/avatar/avatar-guru-1.png', 'aktif'),
(2, 'Surti Datri', 'Guru TK', 'Menjabat sebagai guru dengan mendidik anak-anak dalam kelompok Kelas A', 'http://localhost/profiletk/assets/img/avatar/avatar-guru-0.png', 'aktif'),
(3, 'Ngatirah,S.Pd', 'Guru TK', 'Menjabat sebagai guru dengan mendidik anak-anak dalam kelompok Kelas B', 'http://localhost/profiletk/assets/img/avatar/avatar-guru-1.png', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

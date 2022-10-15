-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text DEFAULT NULL,
  `jenis_file` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tingkat` varchar(255) DEFAULT NULL,
  `kategori` int(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `dilihat` int(100) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `jenis_file`, `gambar`, `tingkat`, `kategori`, `tanggal`, `status`, `tag`, `dilihat`, `timestamp`, `admin`) VALUES
(17, 'Berita Pertama', 'berita-pertama', '<p>ini isian berita pertama KEDUA KETIGA s</p>\r\n', 'Gambar', '1665824157_82f4947869a42522b4c3.jpg', '   ', 1, '2022-12-01', 'Belum Publish', 'pertama', NULL, '2022-10-15 09:33:15', 'ajisudjay'),
(18, 'Berita Kedua', 'berita-kedua', 'ini isian berita kedua', NULL, '1665823869_9cb80d8f92acffa02c30.jpg', NULL, 5, '2022-12-31', 'Belum Publish', 'kedua', NULL, '2022-10-15 03:51:09', 'ajisudjay'),
(19, 'asdad', 'asdad', 'fgdgd', NULL, '1665827668_6cc7e371cb213ea6dca4.jpg', NULL, 2, '2022-12-31', 'Belum Publish', 'dfgd', NULL, '2022-10-15 04:54:28', 'ajisudjay'),
(20, 'asdadas', 'asdadas', '<p>sfdfsfsdf</p>\r\n', NULL, '1665832279_166c12e6d577b86aeb36.jpg', NULL, 5, '2022-12-31', 'Belum Publish', 'sdfs', NULL, '2022-10-15 06:11:19', 'ajisudjay'),
(21, 'asdadas', 'asdadas', '<p>sfdfsfsdf</p>\r\n', NULL, '1665832280_9b3f7e1a82dd848f78f1.jpg', NULL, 5, '2022-12-31', 'Belum Publish', 'sdfs', NULL, '2022-10-15 06:11:20', 'ajisudjay'),
(22, '123', '123', '<ul>\r\n	<li><strong>sadadsad</strong></li>\r\n	<li><strong>asd</strong></li>\r\n	<li><em>ada</em></li>\r\n	<li>&nbsp;</li>\r\n	<li><s>d</s></li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>sadas</li>\r\n	<li>das</li>\r\n	<li>d</li>\r\n	<li>asd</li>\r\n	<li>as</li>\r\n</ol>\r\n', NULL, '1665832478_269461b7996e1c6771ab.jpg', 'Internasional', 5, '2022-12-30', 'Belum Publish', 'sadad', NULL, '2022-10-15 09:15:19', 'ajisudjay'),
(23, 'Berita Betul', 'berita-betul', '<p>ini <strong>terbaik</strong></p>\r\n', NULL, '1665843064_def8542683ae13834c72.jpg', NULL, 1, '2022-12-31', 'Belum Publish', 'terbaik', NULL, '2022-10-15 09:13:38', 'ajisudjay'),
(24, 'ini baru lagi', 'ini-baru-lagi', '<p>sadadasd</p>\r\n', NULL, '1665843250_b041d9855452d1ecf12f.jpeg', NULL, 1, '2022-12-30', 'Belum Publish', 'asdasdafdsf', NULL, '2022-10-15 09:14:10', 'ajisudjay'),
(25, 'asdadads', 'asdadads', '<p>sadadas</p>\r\n', NULL, '1665843338_b6b2e7038fdb238309b3.png', 'Samarinda', 5, '2022-12-31', 'Belum Publish', 'wqeqwweq', NULL, '2022-10-15 09:15:38', 'ajisudjay'),
(26, 'saadasd', 'saadasd', '<p>sadasdas</p>\r\n', 'Gambar', '1665844374_95988c3d153eb4e88bdb.jpg', 'Nasional', 1, '2022-10-31', 'Belum Publish', 'asdas', NULL, '2022-10-15 09:32:54', 'ajisudjay');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Bisnis'),
(2, 'Olahraga'),
(3, 'Politik'),
(4, 'Otomotif'),
(5, 'Kriminal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('ajisudjay', '$2y$10$lhEsAPSxzKR.KUFfP1Bel.Tcm2AoUWDOjkaKrx.YuHiIXITccAxU6', 'Aji Sudjai Aswar', 'Superadmin'),
('fatin', '$2y$10$2I/eArPKQpDE3ZNUJA0SGubAJ2g0v8AcummxCMauSLWOVr04ejaYi', 'Fatin Fikriyah Aziz', 'Admin'),
('shafiyyah', '$2y$10$K2oOiAFkoF6V2vMrsxhCEeWzpE5r1XNuaf8IxNVgVMl0MzeOL1tye', 'Shafiyyah Azizah', 'Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

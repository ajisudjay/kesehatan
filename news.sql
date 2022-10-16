-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 04:58 PM
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
(20, 'asdadas', 'asdadas', '<p>sfdfsfsdf</p>\r\n', NULL, '1665832279_166c12e6d577b86aeb36.jpg', NULL, 5, '2022-12-31', 'Publish', 'sdfs', NULL, '2022-10-16 07:41:20', 'ajisudjay'),
(21, 'asdadas', 'asdadas', '<p>sfdfsfsdf</p>\r\n', NULL, '1665832280_9b3f7e1a82dd848f78f1.jpg', NULL, 5, '2022-12-31', 'Belum Publish', 'sdfs', NULL, '2022-10-16 07:41:24', 'ajisudjay'),
(22, '123', '123', '<ul>\r\n	<li><strong>sadadsad</strong></li>\r\n	<li><strong>asd</strong></li>\r\n	<li><em>ada</em></li>\r\n	<li>&nbsp;</li>\r\n	<li><s>d</s></li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>sadas</li>\r\n	<li>das</li>\r\n	<li>d</li>\r\n	<li>asd</li>\r\n	<li>as</li>\r\n</ol>\r\n', NULL, '1665832478_269461b7996e1c6771ab.jpg', 'Internasional', 5, '2022-12-30', 'Belum Publish', 'sadad', NULL, '2022-10-15 09:15:19', 'ajisudjay'),
(23, 'Berita Betul', 'berita-betul', '<p>ini <strong>terbaik</strong></p>\r\n', NULL, '1665843064_def8542683ae13834c72.jpg', NULL, 1, '2022-12-31', 'Belum Publish', 'terbaik', NULL, '2022-10-16 07:46:09', 'ajisudjay'),
(24, 'ini baru lagi', 'ini-baru-lagi', '<p>sadadasd</p>\r\n', NULL, '1665843250_b041d9855452d1ecf12f.jpeg', NULL, 1, '2022-12-30', 'Belum Publish', 'asdasdafdsf', NULL, '2022-10-15 09:14:10', 'ajisudjay'),
(25, 'asdadads', 'asdadads', '<p>sadadas</p>\r\n', NULL, '1665843338_b6b2e7038fdb238309b3.png', 'Samarinda', 5, '2022-12-31', 'Publish', 'wqeqwweq', NULL, '2022-10-16 07:41:04', 'ajisudjay'),
(26, 'saadasd', 'saadasd', '<p>sadasdas</p>\r\n', 'Gambar', '1665844374_95988c3d153eb4e88bdb.jpg', 'Nasional', 1, '2022-10-31', 'Belum Publish', 'asdas', NULL, '2022-10-15 09:32:54', 'ajisudjay');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `jenis_file` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `nama`, `file`, `jenis_file`, `status`) VALUES
(1, 'ABC Kopi Susu', '1665926076_657be5e5c70070aee7cf.jpg', 'Gambar', 'Belum Publish'),
(2, 'Kopi ABC Kopi Susu dan Choco Malt Coffe satu dua tiga empat lima enam tujuh delapan', '1665926528_338d7f17c1c90eeedddb.png', 'Gambar', 'Publish');

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
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul`, `isi`) VALUES
(1, 'Kontak', 'Kontak Kami\r\n'),
(2, 'Pedoman Media Siber', 'Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKeberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.\r\n\r\nMedia siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik.\r\n\r\nUntuk itu Dewan Persbersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman'),
(3, 'Kode Etik', 'Kemerdekaan berpendapat, berekspresi, dan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKemerdekaan pers adalah sarana masyarakat untuk memperoleh informasi dan berkomunikasi, guna memenuhi kebutuhan hakiki dan meningkatkan kualitas kehidupan manusia.\r\n\r\nDalam mewujudkan kemerdekaan pers itu, wartawan Indonesia juga menyadari adanya kepentingan bangsa, tanggung jawab sosial, keberagaman masyarakat, dan norma-norma agama.\r\n\r\nDalam melaksanakan fungsi, hak, kewajiban dan peranannya, pers menghormati hak asasi setiap orang, karena itu pers dituntut profesional dan terbuka untuk dikontrol oleh masyarakat.\r\n\r\nUntuk menjamin kemerdekaan pers dan memenuhi hak publik untuk memperoleh informasi yang benar, wartawan Indonesia memerlukan landasan moral dan etika profesi sebagai pedoman operasional dalam menjaga kepercayaan publik dan menegakkan integritas serta profesionalisme.'),
(4, 'Disclaimer', 'Informasi yang terdapat dalam website ini adalah untuk tujuan umum saja. Informasi ini disediakan oleh Liputan6.com dan kami senantiasa berusaha untuk menjaga informasi yang aktual dan benar.\r\n\r\nKami tidak membuat pernyataan atau jaminan apapun, tersurat maupun tersirat, tentang akurasi kelengkapan, kesesuaian, atau ketersediaan ke situs web atau informasi, produk, jasa, atau gambar terkait yang terdapat pada website ini untuk tujuan apapun.\r\n\r\nSetiap ketergantungan yang anda tempatkan pada informasi tersebut adalah risiko anda sendiri.\r\n\r\nDalam hal apapun kami tidak bertanggung jawab atas kerugian atau kerusakan termasuk tanpa batasan, kerugian tidak langsung atau kerusakan apapun yang timbul dari hilangnya data atau keuntungan yang timbul dari penggunaan website ini.'),
(5, 'Privacy Policy', 'Who we are\r\nOur website address is: http://demo.idtheme.com/bloggingpro.\r\n\r\nWhat personal data we collect and why we collect it\r\nComments\r\nWhen visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.\r\n\r\nAn anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.\r\n\r\nMedia\r\nIf you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.\r\n\r\nContact forms\r\nCookies\r\nIf you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.\r\n\r\nIf you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.\r\n\r\nWhen you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.\r\n\r\nIf you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.\r\n\r\nEmbedded content from other websites\r\nArticles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.\r\n\r\nThese websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.\r\n\r\nAnalytics\r\nWho we share your data with\r\nHow long we retain your data\r\nIf you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.\r\n\r\nFor users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.\r\n\r\nWhat rights you have over your data\r\nIf you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.\r\n\r\nWhere we send your data\r\nVisitor comments may be checked through an automated spam detection service.');

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
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
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
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

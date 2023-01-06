-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2023 pada 09.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesehatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text DEFAULT NULL,
  `jenis_file` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `tingkat` int(100) DEFAULT NULL,
  `kategori` int(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `dilihat` int(100) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `jenis_file`, `gambar`, `caption`, `tingkat`, `kategori`, `tanggal`, `status`, `tag`, `dilihat`, `timestamp`, `admin`) VALUES
(36, 'Launching Website Berita Divisi.id', 'launching-website-berita-divisi-id', 'Launching Website Berita Divisi.id (Detail Inovatif dan Berintegritas)\r\n\r\nDapatkan wawasan terbaru dan bermanfaat di website kami', 'Gambar', '1667094504_fade1578803343adcf9d.jpg', 'ini caption gambar yang baru saja di update', 1, 1, '2022-12-30', 'Publish', 'sfdfs', 5, '2022-10-30 17:16:15', 'ajisudjay'),
(37, 'Ketua DPRD Kaltim Hasanuddin: DPRD Harus Mampu Ciptakan Iklim Kondusif Pemilu', 'ketua-dprd-kaltim-hasanuddin-dprd-harus-mampu-ciptakan-iklim-kondusif-pemilu', NULL, 'Gambar', '1667108337_a59d5e536e083c8bac64.jpg', 'dfsfsdf', 2, 5, '2022-12-31', 'Publish', 'sdfs', 5, '2022-11-02 21:50:57', 'ajisudjay'),
(38, 'Pemprov Kaltim Latih Warga Tanam Komoditas Pangan', 'pemprov-kaltim-latih-warga-tanam-komoditas-pangan', '<p>ini isi <strong>kedua</strong></p>\r\n', 'Gambar', '1667108361_4475e8ac76c44036e43d.jpg', 'Pelaku usaha tanaman vertikal Muhammad Taufik menjelaskan teknik pembuatan Rotok Etam dalam pelatihan yang diselenggarakan Pemprov Kaltim di Samarinda, Kalimantan Timur, Minggu (30/10/2022)', 1, 31, '2022-12-31', 'Publish', 'sadasdsa', 97, '2022-11-02 21:53:41', 'ajisudjay'),
(39, 'Perda Kepemudaan Kaltim: Diharapkan Dapat Meningkatkan Indeks Pembangunan Pemuda (IPP) di Kaltim Yang Kini Masih di Peringkat Lima Nasional', 'perda-kepemudaan-kaltim-diharapkan-dapat-meningkatkan-indeks-pembangunan-pemuda-ipp-di-kaltim-yang-kini-masih-di-peringkat-lima-nasional', NULL, 'Gambar', '1667108392_3cb8d117c673c63a4e0f.jpg', 'Ketua Pansus Raperda Kepemudaan Provinsi Kaltim Ismail', 4, 5, '2022-12-31', 'Publish', 'sdfsfs', 54, '2022-11-02 21:46:57', 'ajisudjay'),
(41, 'berita sudah diperbaiki', 'berita-sudah-diperbaiki', '<p>sdfsfsdfs</p>\r\n', 'Gambar', '1667171220_083c49829ccc2a54f8e0.jpg', 'sdfsdfsd', 2, 3, '2021-12-30', 'Belum Publish', 'sdfds', NULL, '2022-10-31 19:59:54', 'ajisudjay'),
(49, 'ini ckeditor', 'ini-ckeditor', '<p>d<strong>fgdfg percobaan&nbsp;<img alt=\"\" src=\"data:image/png;base64,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\" style=\"height:129px; width:129px\" /></strong></p>\r\n', 'Gambar', '1667803792_83fffbbddf5e2ea49033.png', 'fdggd', 1, 1, '2022-12-31', 'Publish', 'dfsfs', 6, '2022-11-07 00:50:38', 'ajisudjay'),
(50, 'tambah baru', 'tambah-baru', '<p>xcdsfs</p>\r\n', 'Gambar', '1667804583_db0d69a1702ab2d6bdcd.png', 'sdfsfdsf', 3, 4, '2022-12-31', 'Publish', 'sdfsdf', NULL, '2022-11-07 01:03:13', 'ajisudjay');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `jenis_file` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id`, `nama`, `file`, `jenis_file`, `status`) VALUES
(14, 'space disewakan', '1667803754_ff882df0e9b2d6062a10.jpg', 'Gambar', 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `urutan`) VALUES
(1, 'Bisnis', 1),
(2, 'Olahraga', 2),
(3, 'Politik', 3),
(4, 'Otomotif', 4),
(5, 'Kriminal', 5),
(31, 'Lifestyle', 6),
(32, 'Pendidikan', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `komentar` text DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `id_berita` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `komentar`, `timestamp`, `id_berita`) VALUES
(5, 'aji', 'komen saya\r\n', '2022-11-01 01:26:21', 38),
(6, 'umma', 'ngapainbi ?', '2022-11-01 20:33:25', 38),
(22, 'Saya', 'memberikan komentar', '2022-11-01 22:06:02', 39),
(23, 'yaya', 'ciii ciii\r\n', '2022-12-31 06:16:22', 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul`, `isi`, `urutan`) VALUES
(1, 'Kontak', 'Kontak Kami\r\nEmail : @gmail.com\r\nTelepon : 08252525\r\n', 6),
(2, 'Pedoman Media Siber', 'Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKeberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.\r\n\r\nMedia siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik.\r\n\r\nUntuk itu Dewan Persbersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman', 5),
(3, 'Kode Etik', 'Kemerdekaan berpendapat, berekspresi, dan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKemerdekaan pers adalah sarana masyarakat untuk memperoleh informasi dan berkomunikasi, guna memenuhi kebutuhan hakiki dan meningkatkan kualitas kehidupan manusia.\r\n\r\nDalam mewujudkan kemerdekaan pers itu, wartawan Indonesia juga menyadari adanya kepentingan bangsa, tanggung jawab sosial, keberagaman masyarakat, dan norma-norma agama.\r\n\r\nDalam melaksanakan fungsi, hak, kewajiban dan peranannya, pers menghormati hak asasi setiap orang, karena itu pers dituntut profesional dan terbuka untuk dikontrol oleh masyarakat.\r\n\r\nUntuk menjamin kemerdekaan pers dan memenuhi hak publik untuk memperoleh informasi yang benar, wartawan Indonesia memerlukan landasan moral dan etika profesi sebagai pedoman operasional dalam menjaga kepercayaan publik dan menegakkan integritas serta profesionalisme.', 3),
(4, 'Disclaimer', 'Informasi yang terdapat dalam website ini adalah untuk tujuan umum saja. Informasi ini disediakan oleh Liputan6.com dan kami senantiasa berusaha untuk menjaga informasi yang aktual dan benar.\r\n\r\nKami tidak membuat pernyataan atau jaminan apapun, tersurat maupun tersirat, tentang akurasi kelengkapan, kesesuaian, atau ketersediaan ke situs web atau informasi, produk, jasa, atau gambar terkait yang terdapat pada website ini untuk tujuan apapun.\r\n\r\nSetiap ketergantungan yang anda tempatkan pada informasi tersebut adalah risiko anda sendiri.\r\n\r\nDalam hal apapun kami tidak bertanggung jawab atas kerugian atau kerusakan termasuk tanpa batasan, kerugian tidak langsung atau kerusakan apapun yang timbul dari hilangnya data atau keuntungan yang timbul dari penggunaan website ini.', 2),
(5, 'Privacy Policy', 'Who we are\r\nOur website address is: http://demo.idtheme.com/bloggingpro.\r\n\r\nWhat personal data we collect and why we collect it\r\nComments\r\nWhen visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.\r\n\r\nAn anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.\r\n\r\nMedia\r\nIf you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.\r\n\r\nContact forms\r\nCookies\r\nIf you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.\r\n\r\nIf you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.\r\n\r\nWhen you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.\r\n\r\nIf you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.\r\n\r\nEmbedded content from other websites\r\nArticles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.\r\n\r\nThese websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.\r\n\r\nAnalytics\r\nWho we share your data with\r\nHow long we retain your data\r\nIf you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.\r\n\r\nFor users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.\r\n\r\nWhat rights you have over your data\r\nIf you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.\r\n\r\nWhere we send your data\r\nVisitor comments may be checked through an automated spam detection service.', 4),
(9, 'Tentang Kami', 'Divisi.id (Detail Inovatif dan Berintegritas)\r\nLaman Berita terupdate dan teraktual', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `koresponden`
--

CREATE TABLE `koresponden` (
  `id` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `umur` int(100) NOT NULL,
  `datetime` date DEFAULT NULL,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL,
  `p5` varchar(100) NOT NULL,
  `p6` varchar(100) NOT NULL,
  `p7` varchar(100) NOT NULL,
  `p8` varchar(100) NOT NULL,
  `p9` varchar(100) NOT NULL,
  `p10` varchar(100) NOT NULL,
  `p11` varchar(100) NOT NULL,
  `p12` varchar(100) NOT NULL,
  `p13` varchar(100) NOT NULL,
  `p14` varchar(100) NOT NULL,
  `p15` varchar(100) NOT NULL,
  `p16` varchar(100) NOT NULL,
  `p17` varchar(100) NOT NULL,
  `p18` varchar(100) NOT NULL,
  `p19` varchar(100) NOT NULL,
  `p20` varchar(100) NOT NULL,
  `p21` varchar(100) NOT NULL,
  `p22` varchar(100) NOT NULL,
  `p23` varchar(100) NOT NULL,
  `p24` varchar(100) NOT NULL,
  `p25` varchar(100) NOT NULL,
  `p26` varchar(100) NOT NULL,
  `p27` varchar(100) NOT NULL,
  `p28` varchar(100) NOT NULL,
  `p29` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `koresponden`
--

INSERT INTO `koresponden` (`id`, `slug`, `nama`, `telepon`, `jk`, `umur`, `datetime`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`) VALUES
(1, '', 'asddsa', '32423', 'asdasd', 21, NULL, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(2, '', 'sdfsdfs', 'sdfsdf', 'sdf', 21, NULL, 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(797945397, '', 'aji sudjai', '0852', 'Laki-laki', 23, NULL, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(1197770804, '', 'sdfsd', '', 'Laki-laki', 21, NULL, 'ya', 'ya', 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(1575742452, '', 'sdfsd', '', 'Laki-laki', 21, NULL, 'ya', 'ya', 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(1575742454, 'shafiyyah-azizah-12345-3', 'Shafiyyah Azizah', '12345', 'Perempuan', 3, NULL, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(1575742455, 'nama-123-3', 'nama', '123', 'Laki-laki', 3, NULL, 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(1575742457, 'aji-sudjai-089656680408-27', 'Aji Sudjai', '089656680408', 'Laki-laki', 27, NULL, 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya'),
(1575742459, 'aji-sudjai-089656680408-20', 'aji sudjai', '089656680408', 'Laki-laki', 27, NULL, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak'),
(1575742460, 'shafiyyah-azizah-089656681234-54', 'Shafiyyah Azizah', '089656681234', 'Perempuan', 3, NULL, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya'),
(1575742461, 'orang-baru-08523-32', 'orang baru', '08523', 'Laki-laki', 30, NULL, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya'),
(1575742465, 'sadsad-32432-2023-01-06', 'sadsad', '32432', 'Laki-laki', 23, '2023-01-06', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya'),
(1575742466, 'sadsad345345-32432werw-2023-01-06', 'sadsad345345', '32432werw', 'Laki-laki', 27, '2023-01-06', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya'),
(1575742469, 'nama-123-2023-01-06', 'nama', '123', 'Perempuan', 3, '2023-01-06', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak'),
(1575742470, 'yaya-493509304-2023-01-06', 'yaya', '493509304', 'Perempuan', 15, '2023-01-06', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat`
--

CREATE TABLE `tingkat` (
  `id` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tingkat`
--

INSERT INTO `tingkat` (`id`, `tingkat`, `urutan`) VALUES
(1, 'Internasional', 1),
(2, 'Nasional', 2),
(3, 'Kalimantan-Timur', 3),
(4, 'Samarinda', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('admin_divisi', 'YWRtaW5fZGl2aXNp', 'Admin Utama', 'Admin'),
('ajisudjay', 'MTIzNDU2', 'Aji Sudjay', 'Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `tingkat` (`tingkat`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koresponden`
--
ALTER TABLE `koresponden`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `koresponden`
--
ALTER TABLE `koresponden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1575742471;

--
-- AUTO_INCREMENT untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `user` (`username`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`tingkat`) REFERENCES `tingkat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_3` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

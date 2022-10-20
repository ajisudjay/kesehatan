-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 08.14
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
-- Database: `news`
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
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `jenis_file`, `gambar`, `tingkat`, `kategori`, `tanggal`, `status`, `tag`, `dilihat`, `timestamp`, `admin`) VALUES
(27, 'Berita Pertama', 'berita-pertama', '<p>ini isi dari berita pertama yang sangat singkat</p>\r\n', 'Gambar', '1665992109_1b8d5bf63877608595ac.jpg', 'Internasional', 1, '2022-12-01', 'Publish', 'pertama', 50, '2022-10-17 02:38:03', 'ajisudjay'),
(28, 'Berita Kedua', 'berita-kedua', '<p>ini isi dari berita Kedua yang sangat singkat</p>\r\n', 'Gambar', '1665992152_bbd1bec13532238da69f.jpg', 'Nasional', 5, '2022-12-02', 'Publish', 'kedua', 30, '2022-10-17 02:38:01', 'ajisudjay'),
(29, 'Berita Ketiga', 'berita-ketiga', '<p>ini isi dari berita ketiga yang sangat singkat</p>\r\nxz', 'Gambar', '1665992182_c279de671468ca00cc5f.jpg', 'Kalimantan Timur', 2, '2022-12-03', 'Publish', 'ketiga', 22, '2022-10-17 21:40:43', 'ajisudjay'),
(30, 'Berita Keempat', 'berita-keempat', '<p>ini isi dari berita keempat yang sangat singkat</p>\r\n', 'Gambar', '1665992206_539f14e803d236216dd0.jpg', 'Samarinda', 4, '2022-10-04', 'Publish', 'keempat', 21, '2022-10-17 02:38:10', 'ajisudjay'),
(31, 'Berita Kelima', 'berita-kelima', '<p>ini isi dari berita kelima yang sangat singkat</p>\r\n', 'Gambar', '1665992240_1738e3ebade61b56ea84.jpeg', 'Internasional', 3, '2022-10-05', 'Publish', 'kelima', 11, '2022-10-17 02:38:08', 'ajisudjay'),
(32, 'Berita Keenam', 'berita-keenam', 'pertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluh pertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluhpertama kedua ketiga keempat kelima keenam ketujuh kedelapan kesembilan kesepuluh', 'Gambar', '1665992265_c86d3ced1dbe7fc10e82.jpg', 'Nasional', 31, '2023-06-01', 'Publish', 'keenam', 22, '2022-10-19 02:10:42', 'ajisudjay');

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
(1, 'ABC Kopi Susu', '1665926076_657be5e5c70070aee7cf.jpg', 'Gambar', 'Publish'),
(2, 'Kopi ABC Kopi Susu dan Choco Malt Coffe satu dua tiga empat lima enam tujuh delapan', '1665926528_338d7f17c1c90eeedddb.png', 'Gambar', 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Bisnis'),
(2, 'Olahraga'),
(3, 'Politik'),
(4, 'Otomotif'),
(5, 'Kriminal'),
(31, 'Lifestyle');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul`, `isi`) VALUES
(1, 'Kontak', 'Kontak Kami\r\nEmail : @gmail.com\r\nTelepon : 08252525\r\n'),
(2, 'Pedoman Media Siber', 'Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKeberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.\r\n\r\nMedia siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik.\r\n\r\nUntuk itu Dewan Persbersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman'),
(3, 'Kode Etik', 'Kemerdekaan berpendapat, berekspresi, dan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKemerdekaan pers adalah sarana masyarakat untuk memperoleh informasi dan berkomunikasi, guna memenuhi kebutuhan hakiki dan meningkatkan kualitas kehidupan manusia.\r\n\r\nDalam mewujudkan kemerdekaan pers itu, wartawan Indonesia juga menyadari adanya kepentingan bangsa, tanggung jawab sosial, keberagaman masyarakat, dan norma-norma agama.\r\n\r\nDalam melaksanakan fungsi, hak, kewajiban dan peranannya, pers menghormati hak asasi setiap orang, karena itu pers dituntut profesional dan terbuka untuk dikontrol oleh masyarakat.\r\n\r\nUntuk menjamin kemerdekaan pers dan memenuhi hak publik untuk memperoleh informasi yang benar, wartawan Indonesia memerlukan landasan moral dan etika profesi sebagai pedoman operasional dalam menjaga kepercayaan publik dan menegakkan integritas serta profesionalisme.'),
(4, 'Disclaimer', 'Informasi yang terdapat dalam website ini adalah untuk tujuan umum saja. Informasi ini disediakan oleh Liputan6.com dan kami senantiasa berusaha untuk menjaga informasi yang aktual dan benar.\r\n\r\nKami tidak membuat pernyataan atau jaminan apapun, tersurat maupun tersirat, tentang akurasi kelengkapan, kesesuaian, atau ketersediaan ke situs web atau informasi, produk, jasa, atau gambar terkait yang terdapat pada website ini untuk tujuan apapun.\r\n\r\nSetiap ketergantungan yang anda tempatkan pada informasi tersebut adalah risiko anda sendiri.\r\n\r\nDalam hal apapun kami tidak bertanggung jawab atas kerugian atau kerusakan termasuk tanpa batasan, kerugian tidak langsung atau kerusakan apapun yang timbul dari hilangnya data atau keuntungan yang timbul dari penggunaan website ini.'),
(5, 'Privacy Policy', 'Who we are\r\nOur website address is: http://demo.idtheme.com/bloggingpro.\r\n\r\nWhat personal data we collect and why we collect it\r\nComments\r\nWhen visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.\r\n\r\nAn anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.\r\n\r\nMedia\r\nIf you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.\r\n\r\nContact forms\r\nCookies\r\nIf you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.\r\n\r\nIf you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.\r\n\r\nWhen you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.\r\n\r\nIf you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.\r\n\r\nEmbedded content from other websites\r\nArticles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.\r\n\r\nThese websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.\r\n\r\nAnalytics\r\nWho we share your data with\r\nHow long we retain your data\r\nIf you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.\r\n\r\nFor users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.\r\n\r\nWhat rights you have over your data\r\nIf you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.\r\n\r\nWhere we send your data\r\nVisitor comments may be checked through an automated spam detection service.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat`
--

CREATE TABLE `tingkat` (
  `id` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tingkat`
--

INSERT INTO `tingkat` (`id`, `tingkat`) VALUES
(1, 'Internasional'),
(2, 'Nasional'),
(3, 'Kalimantan Timur'),
(4, 'Samarinda');

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
('ajisudjay', 'MTIzNDU2', 'Aji Sudjai Aswar', 'Superadmin'),
('shafiyyah', 'MTIzNDU2', 'Shafiyyah Azizah', 'Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 12:33 AM
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
  `caption` varchar(255) DEFAULT NULL,
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

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `jenis_file`, `gambar`, `caption`, `tingkat`, `kategori`, `tanggal`, `status`, `tag`, `dilihat`, `timestamp`, `admin`) VALUES
(36, 'Launching Website Berita Divisi.id', 'launching-website-berita-divisi-id', 'Launching Website Berita Divisi.id (Detail Inovatif dan Berintegritas)\r\n\r\nDapatkan wawasan terbaru dan bermanfaat di website kami', 'Gambar', '1667094504_fade1578803343adcf9d.jpg', 'ini caption gambar yang baru saja di update', '1', 1, '2022-12-30', 'Publish', 'sfdfs', 4, '2022-10-30 17:16:15', 'ajisudjay'),
(37, 'Ketua DPRD Kaltim Hasanuddin: DPRD Harus Mampu Ciptakan Iklim Kondusif Pemilu', 'ketua-dprd-kaltim-hasanuddin-dprd-harus-mampu-ciptakan-iklim-kondusif-pemilu', 'Ketua DPRD Kaltim Hasanuddin Mas\'ud (kanan) bersama Muhammad Samsun saat mengikuti Rakor Persiapan Pemilu Serentak 2024\r\nDivisi.id - Ketua DPRD Kaltim Hasanuddin Mas\'ud menyampaikan DPRD yang anggotanya merupakan bagian dari partai politik dan akan ikut dalam Pemilu pada 2024 mendatang, harus mampu mengajak semua pihak menciptakan iklim kondusif dalam Pemilu. \r\n\r\n\"Tentu saja semua anggota DPRD harus mampu mendorong kondusivitas pemilu, salah satunya adalah dengan melakukan pengarahan agar mengikuti proses pemilu sesuai aturan,\" ujar Hasanuddin setelah menghadiri rapat koordinasi (Rakor) Asosiasi DPRD Provinsi Seluruh Indonesia (ADPSI) dan Asosiasi Sekretaris DPRD Provinsi Seluruh Indonesia (ASDEPSI) di Jakarta, Selasa (25/10).\r\n\r\nMenurutnya, sesuai arahan Sekjen Kemendagri Suhajar Diantoro, anggota DPRD sebagai bagian dari Pemilu, menang benar harus dapat mengarahkan agar para pelaku maupun peserta pemilu bisa ikuti proses pemilu sesuai aturan agar tidak melanggar hukum. \r\n\r\nIa juga berharap pemerintah dapat mengambil langkah terbaik untuk menyelesaikan masalah yang timbul, sehingga akan tercipta situasi kondusif menjelang pesta demokrasi yang digelar pada 24 Februari 2024 mendatang. \r\n\r\n\"Rakor ini bukan hanya sebagai sarana untuk menyamakan persepsi tiap masalah yang terjadi baik di tingkat pusat maupun daerah, tetapi juga sebagai langkah aspiratif yang dilakukan oleh asosiasi saat menyikapi problematika di tengah masyarakat,\" kata Hasanuddin. \r\n\r\nSelain Hasanuddin Mas\'ud, Rakor tersebut juga dihadiri oleh Wakil Ketua Muhammad Samsun. Dua unsur pimpinan DPRD Kaltim tersebut, selanjutnya akan menyampaikan kepada semuanya anggota DPRD Kaltim mengenai hasil  rakor secara nasional tersebut, sehingga semuanya memiliki pemahaman yang sama persiapan menjelang Pemilu serentak pada 14 Februari 2024 mendatang. \r\n\r\nSecara nasional, hadir dalam Rakor tersebut adalah Ketua ADPSI Prasetio Edi Marsudi, Sekretaris Daerah (Sekda) DKI Jakarta Marulah Mattali, dan Sekretaris Jenderal (Sekjen) Kementerian Dalam Negeri (Kemendagri) Suhajar Diantoro.\r\n\r\nKetua ADPSI yang juga Ketua DPRD DKI Jakarta Prasetio Edi mengatakan, rakor dilakukan agar jajaran pemerintah dapat mengambil langkah terbaik untuk menyelesaikan masalah yang timbul, dengan harapan terciptanya situasi kondusif menjelang pesta demokrasi. ', 'Gambar', '1667108337_a59d5e536e083c8bac64.jpg', 'dfsfsdf', ' 4', 5, '2022-12-31', 'Publish', 'sdfs', 1, '2022-10-30 18:10:43', 'ajisudjay'),
(38, 'Pemprov Kaltim Latih Warga Tanam Komoditas Pangan', 'pemprov-kaltim-latih-warga-tanam-komoditas-pangan', '<p>Divisi.id - Dinas Pemberdayaan Masyarakat dan Pemerintahan Desa (DPMPD) Provinsi Kalimantan Timur mengadakan pelatihan membuat Rotok Etam, alat pembuat kompos sekaligus media tanaman hortikultura yang menjadi kebutuhan pokok pangan penyumbang inflasi.</p>\r\n\r\n<p>\"Cabai, bawang merah, dan bawang putih merupakan bahan pangan yang kerap menyumbang inflasi di Kaltim, sehingga melalui pelatihan ini, masyarakat bisa memproduksi berbagai jenis hortikultura,\" ujar Penggerak Swadaya Masyarakat DPMPD Kaltim Helvin Syahruddin di Samarinda, Kaltim, Minggu.</p>\r\n\r\n<p>Keberadaan Rotok Etam yang merupakan perpaduan antara komposter dan media tanam, memudahkan masyarakat menanam jenis hortikultura apa pun yang disukai, terutama komoditas yang kerap menjadi penyumbang inflasi, seperti cabai, bawang merah, bawang putih, tomat, maupun sayur-mayur.</p>\r\n\r\n<p>Rotok Etam adalah alat sederhana yang fungsinya sebagai pembuat kompos padat, kompos cair atau lindi, sekaligus berfungsi sebagai media tanam.</p>\r\n\r\n<p>Dalam satu unit Rotok Etam bisa digunakan untuk menanam 3-8 tanaman, tergantung pada bibit yang ditanam, yakni untuk cabai idealnya hanya tiga bibit, namun kalau untuk sayur seperti sawi, bayam dan wortel bisa sampai delapan pohon karena akarnya lebih sedikit ketimbang cabai.</p>\r\n\r\n<p>Menurut Helvin, harga cabai akan naik ketika produksi dari daerah penghasil sedikit, sementara permintaan masyarakat tinggi, hal ini juga berlaku untuk komoditas lain.</p>\r\n\r\n<p>Namun, lanjutnya, ketika banyak warga yang membudidayakan cabai sendiri di teras rumah maupun di halaman dengan menggunakan Rotok Etam, maka dapat mengurangi permintaan cabai sehingga hal ini dapat mencegah inflasi.</p>\r\n\r\n<p>\"Pelatihan ini digelar selama lima hari, mulai 29 Oktober hingga 3 November. Kegiatan ini memang memakan waktu lama agar 20 peserta pelatihan bisa langsung praktik mulai dari cara pembuatan Rotok Etam, mengatur komposisi media tanam, hingga budi daya tanamannya,\" ucap Helvin.</p>\r\n\r\n<p>Pelatihan yang dikemas dalam Workshop Teknologi Tepat Guna (TTG) Vertical Garden ini dipusatkan di Sekretariat PKK Kelurahan Bengkuring Raya, Kecamatan Samarinda Utara, Kota Samarinda.</p>\r\n\r\n<p>Sedangkan pelatihnya dari sejumlah narasumber yang juga pelaku tanaman vertikal di Samarinda, seperti Muhammad Taufik dari Kecamatan Samarinda Utara, kemudian Suminto dari Posyantek Kecamatan Sungai Pinang.</p>\r\n', 'Gambar', '1667108361_4475e8ac76c44036e43d.jpg', 'Pelaku usaha tanaman vertikal Muhammad Taufik menjelaskan teknik pembuatan Rotok Etam dalam pelatihan yang diselenggarakan Pemprov Kaltim di Samarinda, Kalimantan Timur, Minggu (30/10/2022)', '3', 31, '2022-12-31', 'Publish', 'sadasdsa', 43, '2022-10-30 17:15:04', 'ajisudjay'),
(39, 'Perda Kepemudaan Kaltim: Diharapkan Dapat Meningkatkan Indeks Pembangunan Pemuda (IPP) di Kaltim Yang Kini Masih di Peringkat Lima Nasional', 'perda-kepemudaan-kaltim-diharapkan-dapat-meningkatkan-indeks-pembangunan-pemuda-ipp-di-kaltim-yang-kini-masih-di-peringkat-lima-nasional', '<p>Divisi.id - Peraturan Daerah (Perda) Kepemudaan Provinsi Kalimantan Timur (Kaltim) yang saat ini masih berupa Raperda Kepemudaan, keberadaannya ke depan diharapkan dapat meningkatkan Indeks Pembangunan Pemuda (IPP) di Kaltim yang kini masih di peringkat lima nasional. </p>\r\n\r\n<p>\"Tujuan dari dibentuknya Perda ini adalah untuk mengakomodir kepentingan para pemuda, sehingga ke depan kualitas hidup pemuda Kaltim meningkat, sehingga secara otomatis tingkat IPP-nya juga akan ikut naik,\" ujar Ketua Pansus Raperda Kepemudaan DPRD Kaltim Ismail di Samarinda, Jumat. </p>\r\n\r\n<p>Ia mengatakan, perjalanan Raperda Kepemudaan tersebut sudah mendekati masa akhir karena sudah dilakukan uji publik oleh pansus beberapa hari lalu. </p>\r\n\r\n<p>Melalui Raperda yang akan disahkan menjadi Perda ini, terdapat rumusan norma untuk mendukung peningkatan IPP, sehingga dapat tergambar upaya Pemda dalam peningkatan IPP, yakni upaya pencapaian 15 indikator IPP oleh pemerintah pusat yang diurai melalui Rencana Aksi Nasional pada lampiran Perpres Nomor 43 Tahun 2012.</p>\r\n\r\n<p>Saat uji publik lalu, lanjut Ismail, terdapat sejumlah masukan dari berbagai pihak, di antaranya adalah dari Direktoran Jenderal Otonomi Daerah Direktur Produk Hukum Daerah Kemendagri Makmur Marbun.</p>\r\n\r\n<p>Dalam kesempatan itu, sejumlah masukan yang disampaikan Marbun secara virtual adalah dari sisi yuridis subjek hukum, yakni pembangunan pemuda adalah pemuda atau organisasi kepemudaan. </p>\r\n\r\n<p>Jadi, ketika mencantumkan komunitas pemuda  sebagai subjek hukum pembangunan, maka pembangunan kepemudaan perlu diatur secara konkret mengenai apa yang dimaksud dengan kelompok pemuda.</p>\r\n\r\n<p>Untuk itu, perlu dicantumkan frasa organisasi kepemudaan yang berjenjang, termasuk organisasi kepemudaan yang tidak berjenjang seperti kelompok atau komunitas pemuda.</p>\r\n\r\n<p>Ismail juga mengatakan bahwa pemuda berkualitas menjadi target pembangunan, sedangkan untuk peningkatan partisipasi pemuda dalam pembangunan harus didukung oleh anggaran, sarana dan prasarana yang memadai.</p>\r\n', 'Gambar', '1667108392_3cb8d117c673c63a4e0f.jpg', 'Ketua Pansus Raperda Kepemudaan Provinsi Kaltim Ismail', '4', 5, '2022-12-31', 'Publish', 'sdfsfs', 1, '2022-10-30 17:15:25', 'ajisudjay'),
(41, 'jdskfjsklfjls', 'jdskfjsklfjls', '<p>sdfsfsdfs</p>\r\n', 'Gambar', '1667171220_083c49829ccc2a54f8e0.jpg', 'sdfsdfsd', ' 2', 2, '2021-12-30', 'Belum Publish', 'sdfds', NULL, '2022-10-30 18:07:00', 'ajisudjay');

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
(2, 'Kopi ABC Kopi Susu dan Choco Malt Coffe satu dua tiga empat lima enam tujuh delapan', '1665926528_338d7f17c1c90eeedddb.png', 'Gambar', 'Belum Publish'),
(3, 'Pasang Berita', '1666331511_dda9aa9601477ce87515.jpg', 'Gambar', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
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
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
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
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `id` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`id`, `tingkat`, `urutan`) VALUES
(1, 'Internasional', 1),
(2, 'Nasional', 2),
(3, 'Kalimantan Timur', 3),
(4, 'Samarinda', 4);

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
('admin_divisi', 'YWRtaW5fZGl2aXNp', 'Admin Utama', 'Admin'),
('ajisudjay', 'MTIzNDU2', 'Aji Sudjay', 'Superadmin');

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
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

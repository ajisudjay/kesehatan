-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2023 pada 04.09
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
  `nilai_a` int(100) DEFAULT NULL,
  `nilai_b` int(100) DEFAULT NULL,
  `nilai_c` int(100) DEFAULT NULL,
  `nilai_d` int(100) DEFAULT NULL,
  `nilai_e` int(100) DEFAULT NULL,
  `nilai_f` int(100) DEFAULT NULL,
  `nilai_g` int(100) DEFAULT NULL,
  `nilai_h` int(100) DEFAULT NULL,
  `nilai_i` int(100) DEFAULT NULL,
  `nilai_j` int(100) DEFAULT NULL,
  `nilai_k` int(100) DEFAULT NULL,
  `nilai_l` int(100) DEFAULT NULL,
  `nilai_m` int(100) DEFAULT NULL,
  `nilai_n` int(100) DEFAULT NULL,
  `nilai_o` int(100) DEFAULT NULL,
  `nilai_p` int(100) DEFAULT NULL,
  `nilai_q` int(100) DEFAULT NULL,
  `nilai_r` int(100) DEFAULT NULL,
  `nilai_s` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `koresponden`
--

INSERT INTO `koresponden` (`id`, `slug`, `nama`, `telepon`, `jk`, `umur`, `datetime`, `nilai_a`, `nilai_b`, `nilai_c`, `nilai_d`, `nilai_e`, `nilai_f`, `nilai_g`, `nilai_h`, `nilai_i`, `nilai_j`, `nilai_k`, `nilai_l`, `nilai_m`, `nilai_n`, `nilai_o`, `nilai_p`, `nilai_q`, `nilai_r`, `nilai_s`) VALUES
(1575742465, 'sadsad-32432-2023-01-06', 'Umma', '08521313', 'Perempuan', 30, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742469, 'nama-123-2023-01-06', 'aji', '123', 'Laki-laki', 3, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742470, 'yaya-493509304-2023-01-06', 'yaya', '493509304', 'Perempuan', 15, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742471, 'asdas', 'aji', '8888', 'laki-laki', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742472, 'sadadas', 'aji', '123', 'Laki-laki', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742473, 'aji-sudjai-089656680408-2023-01-11', 'Aji Sudjai', '089656680408', 'Laki-laki', 27, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742474, 'qweqew-34242-2023-01-11', 'qweqew', '34242', 'Laki-laki', 44, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742475, 'fgfgfgfg-9999-2023-01-11', 'fgfgfgfg', '9999', 'Laki-laki', 3, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742476, 'ini-sudah-fix-99993-2023-01-11', 'ini sudah fix', '99993', 'Laki-laki', 3, '2023-01-11', 5, 8, 6, 6, 3, 3, 9, 8, 8, 7, 6, 7, 6, 4, 2, 4, 7, 7, 7),
(1575742477, 'fdrettret-45646-2023-01-11', 'fdrettret', '45646', 'Laki-laki', 3, '2023-01-11', 5, 8, 4, 6, 1, 5, 7, 7, 7, 6, 4, 4, 4, 2, 3, 5, 5, 5, 5),
(1575742478, 'orang-percobaan-0123456789-2023-01-13', 'orang percobaan', '0123456789', 'Laki-laki', 27, '2023-01-13', 6, 6, 6, 6, 3, 2, 6, 5, 7, 6, 7, 5, 3, 5, 3, 4, 4, 4, 4),
(1575742479, 'sadad-34535-2023-01-23', 'sadad', '34535', 'Perempuan', 34, '2023-01-23', 4, 6, 3, 5, 2, 2, 8, 7, 6, 6, 5, 6, 5, 3, 2, 2, 3, 3, 3),
(1575742480, 'nama-sadadsadsa-2023-02-17', 'nama', 'sadadsadsa', 'Laki-laki', 3, '2023-02-17', 5, 6, 6, 7, 4, 4, 8, 6, 6, 7, 8, 7, 3, 6, 5, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `nomor` int(100) NOT NULL,
  `pertanyaan` text NOT NULL,
  `eng` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`nomor`, `pertanyaan`, `eng`) VALUES
(1, 'Merasa mudah menderita Flu (Pilek, Batuk) / gangguan pernafasan lainnya ?', 'eng 1'),
(2, 'Merasa mudah lelah / kecapekan ?', 'eng 2'),
(3, 'Merasakan kram-kram di tangan / di kaki dan di belakang leher ?', 'eng 3'),
(4, 'Merasakan nyeri di salah satu / lebih bagian tubuh anda (bagian dada,perut,persendian) ?', 'eng 4'),
(5, 'Merasakan ada benjolan (abnormal) di bagian tubuh anda ?', 'eng 5'),
(6, 'Pernah terjatuh / terkilir / keseleo ?', 'eng 6'),
(7, 'Makan (Breakfast, Lunch, Dinner) kurang dari 3 kali sehari atau sedang melakukan diet ?', 'eng 7'),
(8, 'Mengkonsumsi buah dan sayur organik kurang dari 9 porsi setiap hari ? (standar WHO)', 'eng 8'),
(9, 'Mengkonsumsi ikan laut (Salmon/Tuna/Tongkol/Layang) kurang dari 3 kali setiap minggu ?', 'eng 9'),
(10, 'Mengkonsumsi Daging/Telur/Ayam/Tahu/Tempe kurang dari 3 kali setiap minggu ?', 'eng 10'),
(11, 'Makan di restoran/warung makan/makanan instan diawetkan 3 kali/lebih setiap minggu ?', 'eng 11'),
(12, 'Minum air kurang dari 2 liter (8 gelas) per hari?', 'eng 12'),
(13, 'Minum teh / kopi lebih dari 2 cangkir (200 ml) setiap hari ?', 'eng 13'),
(14, 'Mengkonsumsi minuman berperisa (perasa berbahan kimia) 3 kali atau lebih setiap minggu ?', 'eng 14'),
(15, 'Sering mengkonsumsi makanan / cemilan gorengan ?', 'eng 15'),
(16, 'Vegetarian (tidak makan daging) ?', 'eng 16'),
(17, 'Memiliki jadwal aktifitas yang pada dan tinggi untuk bekerja / lainnya ?', 'eng 17'),
(18, 'Rutin diluar rumah lebih dari 8 jam untuk bekerja / aktifitas lainnya?', 'eng 18'),
(19, 'Merokok / serumah / sekantor dengan perokok atau tinggal di kota terpolusi ?', 'eng 19'),
(20, 'Berolahraga minimal 30 menit /hari atau 5 kali setiap minggu selama 45 menit ?', 'eng 20'),
(21, 'Tidur nyenyak setiap hari rata-rata kurang dari 6 jam ?', 'eng 21'),
(22, 'Merasa kurang percaya diri / rendah diri / takut berbicara di depan orang banyak ?', 'eng 22'),
(23, 'Merasa mudah stress, lupa, cemas / khawatir / sulit untuk mengatur waktu ?', 'eng23'),
(24, 'Sedang hamil atau menyusui ?', 'eng 24'),
(25, 'Remaja kurang dari 18 tahun ?', 'eng 25'),
(26, 'Berusia 55 tahun atau lebih ?', 'eng 26'),
(27, 'Mengenakan ukuran celana : wanita lebih dari 32 (80 cm), pria lebih dari 36 (90 cm) ?', 'eng 27'),
(28, 'Mengkonsumsi obat 3 kali atau lebih setiap minggu (obat bebas atau resep dokter) ?', 'eng 28'),
(29, 'Memiliki keluarga yang sakit Hipertensi/Asma/Diabetes/Stroke/Jantung/Kanker ?', 'eng 29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `kode` varchar(100) NOT NULL,
  `dampak` text NOT NULL,
  `risiko` varchar(255) NOT NULL,
  `anjuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`kode`, `dampak`, `risiko`, `anjuran`) VALUES
('a', 'Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia', 'Masalah Mata Minus / Plus', 'SEHAT mencegah PENYAKIT'),
('b', 'Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh', 'Masalah Vertigo, Migrain', 'SEHAT mencegah PENYAKIT'),
('c', 'Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia', 'Masalah Flu, Pilek', 'SEHAT mencegah PENYAKIT'),
('d', 'Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung', 'Masalah Rematik, Tulang', 'SEHAT mencegah PENYAKIT'),
('e', 'Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker', 'Masalah Infertil, Kulit Kusam', 'SEHAT mencegah PENYAKIT'),
('f', 'Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin', 'Anemia, Sembelit', 'SEHAT mencegah PENYAKIT'),
('g', 'Gangguan fungsi pencernaan, stamina, kesuburan', 'Masalah Stamina, Sembelit', 'SAKIT mencegah KEPARAHAN'),
('h', 'Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker', 'Masalah Degeneratif', 'SAKIT mencegah KEPARAHAN'),
('i', 'Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol', 'Masalah Jantung, Stroke', 'SAKIT mencegah KEPARAHAN'),
('j', 'Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh', 'Masalah Liver, Obesitas', 'SAKIT mencegah KEPARAHAN'),
('k', 'Gangguan fungsi perdaran darah, hipertensi dan kholesterol', 'Masalah Hipertensi, Kholesterol', 'SAKIT mencegah KEPARAHAN'),
('l', 'Gangguan fungsi pencernaan, berat badan', 'Konstipasi', 'SAKIT mencegah KEPARAHAN'),
('m', 'Gangguan fungsi hormon, kholesterol', 'Kholesterol', 'SAKIT mencegah KEKAMBUHAN'),
('n', 'Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas', 'Masalah regenerasi sel', 'SAKIT mencegah KEKAMBUHAN'),
('o', 'Gangguan fungsi hormon, kholesterol', 'Masalah Liver', 'SAKIT mencegah KEKAMBUHAN'),
('p', 'Gangguan fungsi memori (daya ingat)', 'Masalah Daya Ingat', 'SAKIT mencegah KEKAMBUHAN'),
('q', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) ', 'Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu', 'SAKIT mencegah KEKAMBUHAN'),
('r', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)', 'Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu', 'SAKIT mencegah KEKAMBUHAN'),
('s', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)', 'Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu', 'SAKIT mencegah KEKAMBUHAN');

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
('ajisudjay', 'MTIzNDU2', 'Aji Sudjay', 'Superadmin'),
('Siswanto', 'U2lzd2FudG8=', 'Siswanto', 'Superadmin');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `koresponden`
--
ALTER TABLE `koresponden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1575742481;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

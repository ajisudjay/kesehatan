-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2024 pada 09.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `koresponden`
--

INSERT INTO `koresponden` (`id`, `slug`, `nama`, `telepon`, `jk`, `umur`, `datetime`, `nilai_a`, `nilai_b`, `nilai_c`, `nilai_d`, `nilai_e`, `nilai_f`, `nilai_g`, `nilai_h`, `nilai_i`, `nilai_j`, `nilai_k`, `nilai_l`, `nilai_m`, `nilai_n`, `nilai_o`, `nilai_p`, `nilai_q`, `nilai_r`, `nilai_s`) VALUES
(1575742465, 'sadsad-32432-2023-01-06', 'Umma', '08521313', 'Perempuan', 30, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742469, 'nama-123-2023-01-06', 'aji', '123', 'Laki-laki', 3, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742470, 'yaya-493509304-2023-01-06', 'yaya', '493509304', 'Perempuan', 15, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742472, 'sadadas', 'aji', '123', 'Laki-laki', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742473, 'aji-sudjai-089656680408-2023-01-11', 'Aji Sudjai', '089656680408', 'Laki-laki', 27, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742474, 'qweqew-34242-2023-01-11', 'qweqew', '34242', 'Laki-laki', 44, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742475, 'fgfgfgfg-9999-2023-01-11', 'fgfgfgfg', '9999', 'Laki-laki', 3, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1575742476, 'ini-sudah-fix-99993-2023-01-11', 'ini sudah fix', '99993', 'Laki-laki', 3, '2023-01-11', 5, 8, 6, 6, 3, 3, 9, 8, 8, 7, 6, 7, 6, 4, 2, 4, 7, 7, 7),
(1575742477, 'fdrettret-45646-2023-01-11', 'fdrettret', '45646', 'Laki-laki', 3, '2023-01-11', 5, 8, 4, 6, 1, 5, 7, 7, 7, 6, 4, 4, 4, 2, 3, 5, 5, 5, 5),
(1575742478, 'orang-percobaan-0123456789-2023-01-13', 'orang percobaan', '0123456789', 'Laki-laki', 27, '2023-01-13', 6, 6, 6, 6, 3, 2, 6, 5, 7, 6, 7, 5, 3, 5, 3, 4, 4, 4, 4),
(1575742479, 'sadad-34535-2023-01-23', 'sadad', '34535', 'Perempuan', 34, '2023-01-23', 4, 6, 3, 5, 2, 2, 8, 7, 6, 6, 5, 6, 5, 3, 2, 2, 3, 3, 3),
(1575742480, 'tes-78-2024-07-07', 'tes', '78', 'Laki-laki', 40, '2024-07-07', 7, 8, 8, 8, 3, 5, 8, 5, 8, 7, 10, 7, 6, 7, 5, 3, 5, 5, 5),
(1575742481, 'tes-123-2024-07-18', 'tes', '123', 'Laki-laki', 12, '2024-07-18', 1, 3, 1, 3, 0, 1, 1, 0, 2, 1, 2, 2, 2, 3, 1, 0, 2, 2, 2),
(1575742482, 'sakkit-321-2024-07-18', 'sakkit', '321', 'Perempuan', 50, '2024-07-18', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742483, 'tes-123-2024-07-18', 'tes', '123', 'Laki-laki', 23, '2024-07-18', 5, 4, 7, 7, 5, 4, 6, 4, 6, 2, 4, 3, 2, 5, 3, 2, 7, 7, 7),
(1575742484, 'tes-123-2024-07-21', 'tes', '123', 'Laki-laki', 40, '2024-07-21', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742485, 'tes-123-2024-07-21', 'tes', '123', 'Perempuan', 33, '2024-07-21', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742486, 'tes-123-2024-07-22', 'tes', '123', 'Laki-laki', 90, '2024-07-22', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742487, 'aji-321-2024-07-24', 'aji', '321', 'Laki-laki', 44, '2024-07-24', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742488, 'aji-321-2024-07-24', 'aji', '321', 'Laki-laki', 33, '2024-07-24', 10, 11, 11, 11, 7, 7, 11, 8, 12, 9, 12, 10, 8, 11, 6, 7, 9, 9, 9),
(1575742489, 'sadad-2112-2024-07-24', 'sadad', '2112', 'Perempuan', 22, '2024-07-24', 10, 10, 12, 9, 7, 7, 11, 8, 12, 9, 11, 11, 8, 11, 5, 6, 9, 9, 9),
(1575742490, 'qwe-123-2024-07-25', 'qwe', '123', 'Laki-laki', 133, '2024-07-25', 10, 11, 12, 11, 7, 7, 12, 9, 13, 10, 12, 11, 8, 11, 6, 7, 9, 9, 9),
(1575742491, 'rew-432-2024-07-25', 'rew', '432', 'Laki-laki', 133, '2024-07-25', 7, 6, 9, 8, 6, 6, 8, 5, 11, 7, 10, 10, 6, 10, 5, 4, 6, 6, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `nomor` int(100) NOT NULL,
  `pertanyaan` text NOT NULL,
  `eng` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`nomor`, `pertanyaan`, `eng`) VALUES
(1, 'Apakah Anda merasa mudah menderita Flu (Batuk, Pilek) / gangguan pernafasan lainnya ?', 'Do you feel that you could easily suffer from flu (coughs, colds) or other respiratory problems?'),
(2, 'Apakah Anda merasa mudah lelah / kecapekan ?', 'Do you feel exhausted easily?'),
(3, 'Apakah Anda merasakan kram-kram di tangan / di kaki dan di belakang leher ?', 'Do you feel cramps in your hands/feet and nape?'),
(4, 'Apakah Anda merasakan nyeri di salah satu / lebih bagian tubuh anda (seperti bagian, dada, perut, persendian) ?', 'Do you feel pain in one/more parts of your body (such as your chest, stomach, joints)?'),
(5, 'Apakah Anda merasakan ada benjolan (yang abnormal) di bagian tubuh anda ?', 'Do you feel any abnormal lumps on any parts of your body?'),
(6, 'Apakah Anda pernah terjatuh / terkilir / keseleo ?', 'Have you ever fallen / sprained / twisted?'),
(7, 'Apakah Anda makan (Breakfast, Lunch, Dinner) kurang dari 3 kali sehari atau sedang melakukan diet ?', 'Do you eat (Breakfast, Lunch, Dinner) less than 3 times a day or are you on a diet?'),
(8, 'Apakah Anda mengkonsumsi buah dan sayur organik kurang dari 9 porsi setiap hari ? (sesuai standar WHO)', 'Do you consume less than 9 servings of organic fruit and vegetables every day? (according to WHO standards)'),
(9, 'Apakah Anda mengkonsumsi ikan laut (Salmon / Tuna / Tongkol / Layang / Bandeng) kurang dari 3 kali setiap minggu ?', 'Do you consume sea fish (Salmon / Tuna / Mackerel Tuna / Mackerel / Milkfish) less than 3 times every week?'),
(10, 'Apakah Anda mengkonsumsi Daging/Telur/Ayam/Tahu/Tempe kurang dari 3 kali setiap minggu ?', 'Do you consume meat/eggs/chicken/tofu/tempeh less than 3 times per week?'),
(11, 'Apakah Anda makan di restoran / warung makan / makanan instan yang diawetkan lebih dari 3 kali setiap minggu ?', 'Do you eat at restaurants/food stalls/preserved instant food more than 3 times per week?'),
(12, 'Apakah Anda minum air kurang dari 2 liter (8 gelas) per hari?', 'Do you drink less than 2 litres (8 glasses) of water per day?'),
(13, 'Apakah Anda minum Teh / Kopi lebih dari 2 cangkir (ukuran 200 ml) setiap hari ?Apakah Anda minum Teh / Kopi lebih dari 2 cangkir (ukuran 200 ml) setiap hari ?', 'Do you drink more than 2 cups of tea/coffee (200 ml) every day?'),
(14, 'Apakah Anda mengkonsumsi minuman berperisa (perasa berbahan kimia) lebih dari 3 kali setiap minggu ?', 'Do you consume flavoured drinks (chemical flavours) more than 3 times per week?'),
(15, 'Apakah Anda sering mengkonsumsi makanan ringan / cemilan / gorengan ?', 'Do you often eat snacks/fritters?'),
(16, 'Apakah Anda Vegetarian (tidak makan daging)?', 'Are you vegetarian (don\'t eat meat)?'),
(17, 'Apakah Anda memiliki jadwal aktifitas yang padat dan tinggi untuk bekerja / kegiatan lainnya ?', 'Do you have a bus and hectic activity schedule for work/other activities?'),
(18, 'Apakah Anda rutin berada di luar rumah lebih dari 8 jam untuk bekerja / aktifitas lainnya?', 'Are you regularly out of the house for more than 8 hours for work/other activities?'),
(19, 'Apakah Anda merokok / serumah / sekantor dengan perokok atau tinggal di kota terpolusi ?', 'Do you smoke, share a house / office with smokers, or live in a polluted city?'),
(20, 'Apakah Anda berolahraga minimal 30 menit /hari atau 5 kali setiap minggu selama 45 menit ?', 'Do you exercise at least 30 minutes per day or 5 times a week for 45 minutes?'),
(21, 'Apakah Anda tidur nyenyak setiap hari rata-rata kurang dari 6 jam ?', 'Do you sleep well every day on average less than 6 hours?'),
(22, 'Apakah Anda merasa kurang percaya diri / rendah diri / takut berbicara di depan orang banyak ?', 'Do you feel less confident / low self-esteem / afraid of speaking in front of many people?'),
(23, 'Apakah Anda merasa mudah stress, lupa, cemas / khawatir / sulit untuk mengatur waktu ?', 'Do you feel easily stressed, forgetful, anxious/worried/difficult to manage your time?'),
(24, 'Apakah Anda sedang hamil atau menyusui ?', 'Are you currently pregnant or breastfeeding?'),
(25, 'Apakah Anda Remaja berusia kurang dari 18 tahun ?', 'Are you a teenager under 18 years old?'),
(26, 'Apakah Anda berusia 55 tahun atau lebih ?', 'Are you 55 years old or older?'),
(27, 'Apakah Anda mengenakan ukuran celana : wanita lebih dari 32 (80 cm), pria lebih dari 36 (90 cm) ?', 'Do you wear pants size: women over 32 (80 cm), men over 36 (90 cm)?'),
(28, 'Apakah Anda mengkonsumsi obat 3 kali atau lebih setiap minggu (obat bebas atau sesuai resep dokter) ?', 'Do you take medication 3 times or more every week (over-the-counter medication or according to a doctor\'s prescription)?'),
(29, 'Apakah Anda memiliki keluarga yang memiliki riwayat penyakit  Hipertensi / Asma / Diabetes / Stroke / Jantung / Kanker ?', 'Do you have a family member who suffers from hypertension / asthma / diabetes / stroke / heart disease / cancer?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `kode` varchar(100) NOT NULL,
  `dampak` text NOT NULL,
  `dampak_eng` text NOT NULL,
  `risiko` text NOT NULL,
  `risiko_eng` text NOT NULL,
  `anjuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`kode`, `dampak`, `dampak_eng`, `risiko`, `risiko_eng`, `anjuran`) VALUES
('a', 'Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia', 'Reduced ability to see, Anemia risk, Cancer risk, risk of the condition of the Muscles, Bones, and Skin', 'Risiko masalah kesehatan mata', 'Risk of issues with the health of the eyes', 'SEHAT mencegah PENYAKIT'),
('b', 'Gangguan fungsi metabolisme, pencernaan, kulit, daya konsentrasi dan persyarafan', 'Disorders of metabolism, Digestion, Skin, concentration and Neurological system function', 'Risiko masalah kesehatan persarafan', 'Risk of issues with the health of the neurological', 'SEHAT mencegah PENYAKIT'),
('c', 'Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker', 'Weakening of the Immune system, Blood Arteries, Bones, and risk of Cancer', 'Risiko masalah daya tahan tubuh', 'Risk of immunological issues', 'SEHAT mencegah PENYAKIT'),
('d', 'Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantungGangguan fungsi kulit, kesuburan, persyarafan, otot, tumbuh kembang', 'Problems with the growth and development, Nerves, Muscles, Skin, Fertility, and Muscles', 'Risiko masalah kesehatan tulang dan otot serta lambung ', 'Risk of stomach, muscular, and bone health issues', 'SEHAT mencegah PENYAKIT'),
('e', 'Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker', 'Problems with the growth and development, Nerves, Muscles, Skin, Fertility, and Muscles', 'Risiko masalah kesehatan kulit dan kesuburan ', 'Risk of reproductive issues and skin health issues', 'SEHAT mencegah PENYAKIT'),
('f', 'Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin', 'Problems with the Digestive system, Anemia, focus, growth, and development', 'Risiko masalah kesehatan darah ', 'Risk of issues with blood health', 'SEHAT mencegah PENYAKIT'),
('g', 'Gangguan fungsi pencernaan, stamina, kesuburan', 'Disorders relating to Endurance, Digestion function and Fertility', 'Risiko masalah stamina tubuh ', 'Possibility of fatigue issues', 'SAKIT mencegah KEPARAHAN'),
('h', 'Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker', 'Problems of the dDigestive system, endurance and stamina, and Cancer risk', 'Risiko masalah stamina tubuh dan effort ', 'Risk of issues with physical endurance and exertion', 'SAKIT mencegah KEPARAHAN'),
('i', 'Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol', 'Impaired Circulatory function, Nerves, Body metabolism and high risk of Cholesterol', 'Risiko masalah metabolisme tubuh dan cholesterol tinggi ', 'Risk of elevated cholesterol and metabolic issues', 'SAKIT mencegah KEPARAHAN'),
('j', 'Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh', 'Impaired Body metabolism, danger of excessive Cholesterol, Body Fat disorders, and Blood circulation impairment', 'Risiko masalah lemak tubuh ', 'Risk of issues with body fat', 'SAKIT mencegah KEPARAHAN'),
('k', 'Gangguan fungsi perdaran darah, hipertensi dan kholesterol', 'Disorders of Metabolic function, Liver function, Cholesterol and Body Fat problems', 'Risiko masalah peredaran darah and Hipertensi ', 'Risk of issues with the circulatory system and Hypertension', 'SAKIT mencegah KEPARAHAN'),
('l', 'Gangguan fungsi pencernaan, berat badan', 'Disorders of Digestive function, metabolism, Blood circulation, Hypertension and Cholesterol problems', 'Risiko masalah fungsi pencernaan ', 'Risk of digestive function problems', 'SAKIT mencegah KEPARAHAN'),
('m', 'Gangguan fungsi hormon, kholesterol', 'Issues with Digestion, weight, and Hormones', 'Risiko masalah hormonal ', 'Risk of hormone issues', 'SAKIT mencegah KEKAMBUHAN'),
('n', 'Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas', 'Risk of issues with Brain function and growth and development', 'Risiko masalah tumbuh kembang dan fungsi otak ', 'Risk of issues with brain function and growth and development', 'SAKIT mencegah KEKAMBUHAN'),
('o', 'Gangguan fungsi hormon, kholesterol', 'Issues with the metabolism and function of the Liver', 'Risiko masalah fungsi hati ', 'Risk of of issues with liver function', 'SAKIT mencegah KEKAMBUHAN'),
('p', 'Gangguan fungsi memori (daya ingat)', 'Impaired memory function', 'Risiko masalah fungsi daya ingat ', 'Risk of memory function issues', 'SAKIT mencegah KEKAMBUHAN'),
('q', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) ', 'Memory impairment, as well as psychological, emotional, social, and spiritual illnesses such as stress, worry, forgetfulness, and ineffective time management', 'Risiko masalah psikologis, mental, sosial dan spiritual ', 'Possibility of mental, emotional, social, and spiritual issues', 'SAKIT mencegah KEKAMBUHAN'),
('r', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)', 'Memory impairment, as well as psychological, emotional, social, and spiritual illnesses such as stress, worry, forgetfulness, and ineffective time management', 'Risiko masalah psikologis, mental, sosial dan spiritual ', 'Possibility of mental, emotional, social, and spiritual issues', 'SAKIT mencegah KEKAMBUHAN'),
('s', 'Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)', 'Memory impairment, as well as psychological, emotional, social, and spiritual illnesses such as stress, worry, forgetfulness, and ineffective time management', 'Risiko masalah psikologis, mental, sosial dan spiritual ', 'Possibility of mental, emotional, social, and spiritual issues', 'SAKIT mencegah KEKAMBUHAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1575742492;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

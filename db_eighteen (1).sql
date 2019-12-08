-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 05:18 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_eighteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`),
  KEY `sent_to` (`send_to`),
  KEY `send_by` (`send_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`) VALUES
(33, 50, 51, 'hallo admin', '2017-07-06 01:36:08'),
(34, 50, 51, '13', '2017-07-06 14:40:07'),
(35, 50, 51, '13', '2017-07-06 14:40:15'),
(36, 50, 51, 'lol', '2017-07-06 15:23:40'),
(37, 51, 50, 'iya selamat malam', '2017-07-06 15:24:45'),
(38, 51, 50, 'ada yang bisa saya bantu?', '2017-07-06 15:32:35'),
(39, 50, 51, 'gapapa nyapa aja min', '2017-07-06 15:32:54'),
(40, 50, 51, 'tes', '2017-08-01 14:18:29'),
(41, 50, 51, 'mlm', '2017-08-01 15:12:01'),
(42, 50, 49, 'tes', '2017-08-02 02:46:09'),
(43, 49, 50, 'kenapa', '2017-08-02 02:46:53'),
(44, 50, 49, 'gapapa', '2017-08-02 02:47:10'),
(45, 50, 49, 'Tes aja', '2017-08-02 02:48:53'),
(46, 50, 49, 'Lagi apa?', '2017-08-02 02:49:14'),
(47, 50, 49, 'klnoihiuhiuh', '2017-08-13 12:33:35'),
(49, 54, 50, 'tes', '2017-09-24 06:12:34'),
(50, 50, 49, 'hallo admin', '2017-09-24 06:22:24'),
(51, 49, 50, 'ada apa manggil manggil?', '2017-09-24 06:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(30) NOT NULL,
  `kota_id` int(2) NOT NULL,
  `ongkir` int(20) NOT NULL,
  PRIMARY KEY (`kecamatan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `nama_kecamatan`, `kota_id`, `ongkir`) VALUES
(1, 'Bantar Gebang', 1, 15000),
(2, 'Bekasi Barat', 1, 15000),
(3, 'Tambun Selatan', 2, 0),
(4, 'Cibitung', 2, 0),
(5, 'Tambun Utara', 2, 10000),
(6, 'Cikarang Barat', 2, 0),
(7, 'Babelan', 2, 20000),
(8, 'Cikarang Pusat', 2, 15000),
(9, 'Bekasi Selatan', 1, 15000),
(10, 'Bekasi Timur', 1, 10000),
(11, 'Bekasi Utara', 1, 15000),
(12, 'Jatiasih', 1, 15000),
(13, 'Jatisampurna', 1, 15000),
(14, 'Medan Satria', 1, 20000),
(15, 'Mustika Jaya', 1, 15000),
(16, 'Pondok Gede', 1, 20000),
(17, 'Pondok Melati', 1, 15000),
(18, 'Rawa Lumbu', 1, 15000),
(19, 'Cikarang Selatan', 2, 15000),
(20, 'Cikarang Timur', 2, 20000),
(21, 'Cikarang Utara', 2, 15000),
(22, 'Cibarusah', 2, 25000),
(23, 'Setu', 2, 15000),
(24, 'Serang Baru', 2, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `kota_kabupaten`
--

CREATE TABLE IF NOT EXISTS `kota_kabupaten` (
  `kota_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(30) NOT NULL,
  PRIMARY KEY (`kota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kota_kabupaten`
--

INSERT INTO `kota_kabupaten` (`kota_id`, `nama_kota`) VALUES
(1, 'Kota Bekasi'),
(2, 'Kab Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE IF NOT EXISTS `login_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `level` int(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `level`, `password`) VALUES
(3, 'eighteenplus', 1, 'e172dd95f4feb21412a692e73929961e'),
(4, 'harby', 2, '4efb1bb5db5146b43b8f8d32e583d593');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `time`) VALUES
(1, 2, 1, 'hay', '1', '2017-06-23 07:34:57'),
(2, 1, 2, 'kenapa', '1', '2017-06-24 03:02:24'),
(3, 2, 1, 'gapapa bos', '1', '2017-06-24 03:02:31'),
(4, 1, 2, 'yaelah bos', '1', '2017-06-24 03:02:40'),
(5, 2, 1, 'lagi apa?', '1', '2017-06-24 03:02:47'),
(6, 0, 2, 'halo', '0', '2017-06-26 06:18:00'),
(7, 0, 2, 'halo', '0', '2017-06-26 06:18:33'),
(8, 2, 1, 'halo', '1', '2017-06-26 06:18:59'),
(9, 2, 2, 'halo', '1', '2017-06-26 06:19:06'),
(10, 2, 2, 'hei', '1', '2017-06-26 06:19:17'),
(11, 2, 2, 'bales', '1', '2017-06-26 06:19:19'),
(12, 2, 1, 'haa', '1', '2017-06-26 06:19:30'),
(13, 2, 1, 'helmi', '1', '2017-06-26 06:19:43'),
(14, 2, 2, 'harby', '0', '2017-06-26 06:19:51'),
(15, 2, 1, 'ualah', '1', '2017-06-26 06:20:25'),
(16, 2, 1, 'helmi', '1', '2017-06-26 06:20:43'),
(17, 2, 2, 'harby', '0', '2017-06-26 06:20:50'),
(18, 2, 1, 'bay', '1', '2017-06-26 06:21:22'),
(19, 2, 2, 'mi', '0', '2017-06-26 06:21:32'),
(20, 2, 2, 'mi', '0', '2017-06-26 06:21:49'),
(21, 1, 2, 'mi', '1', '2017-06-26 06:22:35'),
(22, 2, 1, 'apa', '1', '2017-06-26 06:22:42'),
(23, 1, 2, 'lagi apa lu?', '1', '2017-06-26 06:22:48'),
(24, 2, 1, 'lll', '1', '2017-06-26 06:23:03'),
(25, 1, 2, 'lagi apa lu?', '1', '2017-06-26 06:23:10'),
(26, 2, 1, 'lagi nonton', '1', '2017-06-26 06:23:23'),
(27, 1, 2, 'nonton apa?', '1', '2017-06-26 06:23:27'),
(28, 2, 1, 'nonton siva', '1', '2017-06-26 06:23:42'),
(29, 1, 2, 'widih seru dong', '1', '2017-06-26 06:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE IF NOT EXISTS `tb_about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `deskripsi`) VALUES
(1, 'Eighteen  Shoes Care adalah salah satu jasa laundry dan perawatan sepatu yang hadir di Bekasi . Toko kami berdiri sejak Oktober 2016 . Sebuah penyedia jasa yang awalnya berdiri tanpa toko , yang hanya bermodalkan media sosial sebagai media periklanan dan pelayananya . \r\nEighteen shoes care kini hadir dengan membawa solusi baru bagi pengguna jasa shoes care . Kami menyediakan pelayanan antar jemput via website untuk pengguna di daerah Bekasi . Pelanggan tidak harus membawa sepatu kotornya ke toko kami , pelanggan cukup login di website kami , lalu mengisi form order , dan tim kami akan menjemput sepatu kotor anda . \r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE IF NOT EXISTS `tb_account` (
  `nama_account` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email_pengguna` varchar(60) NOT NULL,
  `foto_profil` varchar(75) NOT NULL,
  `alamat_pengguna` varchar(100) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`nama_account`, `username`, `password`, `level`, `no_telp`, `email_pengguna`, `foto_profil`, `alamat_pengguna`, `id`) VALUES
('andre armaji', 'andrear', '4efb1bb5db5146b43b8f8d32e583d593', 2, '0218832502', 'sunny@gmail.com', '12918404_768982826536473_176875806_n.jpg', '', 49),
('Admin Eighteen', 'eighteenplus', 'e172dd95f4feb21412a692e73929961e', 1, '', '', '', '', 50),
('andik firmansyah', 'andikfir', '4efb1bb5db5146b43b8f8d32e583d593', 2, '0852133608', 'andikfirmansyah@gmail.com', '_MG_0808.jpg', '', 51),
('Rayni Mirant', 'rynmrnt', '56d81e1fbf7e929b3fd4a6890efb2b35', 2, '089652972195', 'rayni.miranti@gmail.com', 'PicsArt_06-27-10_58_31.jpg', '', 54),
('mardiyani', 'mardiyani', '4efb1bb5db5146b43b8f8d32e583d593', 2, '02188225028', 'mardiyani@gmail.com', '1501988388624.jpeg', '', 55),
('Maghfira Zahra Sani', 'Zahra', '9f4b5dfde486b4159950728ce7ae14c5', 2, '+62 878 77747', 'Zahrasani29@gmail.com', 'IMG_0781.JPG', '', 56),
('Ella tuzzakhro', 'Ellatzz', '7a727ae7f3210975d7682cf6ce5367c4', 2, '082298391858', 'Tuzzakhrolaila@gmail.com', 'IMG_20170901_125450_003.jpg', '', 57),
('Dini Putri A', 'Diniputrrr', 'e8d4183b53512ebb3f53ba2cdb384fc1', 2, '085921520682', 'Dpa.diniputriariesta@gmail.com', 'IMG_20170619_000149_996.jpg', '', 58),
('Riska Andhini', 'Andhini', '20876baa8373f6149da4e3554c54cf80', 2, '081314278741', 'Riskandhini13@gmail.com', 'IMG_20170802_020854_050.jpg', '', 59);

-- --------------------------------------------------------

--
-- Table structure for table `tb_features`
--

CREATE TABLE IF NOT EXISTS `tb_features` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `icon` varchar(20) NOT NULL,
  `nama_features` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_features`
--

INSERT INTO `tb_features` (`id`, `icon`, `nama_features`, `deskripsi`) VALUES
(6, 'fa fa-magic', 'BERSIH', 'sepatu tampak lebih bersih dan segar kembali bahkan seperti keadaan baru'),
(7, 'fa fa-gift', 'RAPIH', 'proses pengerjaan yang kami lakukan dengan serapih - rapihnya dari mulai treatment sampai dengan packing'),
(8, 'fa fa-road', 'CEPAT', 'proses pengerjaan dilakukan dengan waktu yang cepat sesuai treatment apa yang anda pilih'),
(9, 'fa fa-clock-o', 'EFISIEN', 'pelanggan dapat menggunakan jasa kami tanpa harus datang ke toko');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE IF NOT EXISTS `tb_history` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `merk_sepatu` varchar(20) NOT NULL,
  `size_sepatu` int(2) NOT NULL,
  `ket_sepatu` varchar(300) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `kode_promo` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id_order`, `nomor`, `tanggal`, `username`, `merk_sepatu`, `size_sepatu`, `ket_sepatu`, `jenis_layanan`, `warna`, `harga`, `kode_promo`, `alamat`, `status`, `id`) VALUES
(59, 0, '2017-08-24', 'Zahra', 'Nike Air Zoom Pegasu', 43, 'Running , warna ice blue', 'Fast Cleaning', '', 20000, 'MEICERIA', 'Perum.Griya Asri 2 Blok G10/15 , Jl. Melati IV , RT04/025  Kecamatan  Kab Bekasi', 'MENUNGGU', 56),
(63, 0, '2017-09-05', 'Ellatzz', 'Rubi', 39, 'Warna pink nude', 'Deep Cleaning', '', 35000, '', 'Metland cibitung cluster taman marunda blok s3 no. 12 kec. Cikarang barat bekasi  Kecamatan Cikarang Barat Kab Bekasi', 'MENUNGGU PROSES', 57),
(64, 0, '2017-09-06', 'Diniputrrr', 'Vans authentic', 36, 'Biru pudar', 'Recolour', 'Hitam', 80000, 'MEiCERIA', 'Perumahan Villa Bekasi Indah 1 blok c5 No. 5, Jl. Gunung Merapi 2 RT 10 RW 12  Kecamatan Tambun Selatan Kab Bekasi', 'MENUNGGU PROSES', 58),
(65, 0, '2017-09-14', 'Andhini', 'Marie claire', 38, 'Sendal slop warna pink', 'Deep Cleaning', '', 35000, '', 'Perum Papanmas Jl Bunga Bangsa 1 Blok B2 no 18 RT08/RW018, Kec Tambun Selatan, Kel Mekar Sari, Kab Bekasi - Jabar 17510   Kecamatan Tambun Selatan Kab Bekasi', 'MENUNGGU PROSES', 59),
(69, 0, '2017-09-24', 'Ageng Pribadi', 'New Balance', 43, '43', 'Fast Cleaning', '', 20000, '', 'kebon kopi cikarang utara', '', 0),
(70, 0, '2017-09-24', 'AndiFirdaus', 'Converse', 36, '36', 'Fast Cleaning', '', 20000, '', 'perumahan kompas indah tambun', '', 0),
(71, 0, '2017-09-24', 'andrear', 'kelme', 41, 'futsal indoor', 'Deep Cleaning', '', 40000, 'SEPTEMBERKAH', 'graha prima  Kecamatan Tambun Utara Kab Bekasi', 'MENUNGGU PROSES', 49),
(72, 0, '2017-09-24', 'andrear', 'Skecher', 41, 'Slop biru', 'Deep Cleaning', '', 50000, 'SEPTemberkah', 'Warung bongkok  Kecamatan Cikarang Selatan Kab Bekasi', 'MENUNGGU PROSES', 49),
(73, 0, '2017-09-24', 'andrear', 'warior', 39, 'hitam', 'Deep Cleaning', '', 60000, '', 'lubangbuaya  Kecamatan Serang Baru Kab Bekasi', 'MENUNGGU PROSES', 49),
(74, 0, '2017-09-24', 'andrear', 'kodachi', 41, 'outih', 'Deep Cleaning', '', 35000, '', 'lubangbuaya  Kecamatan Serang Baru Kab Bekasi', 'MENUNGGU PROSES', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `merk_sepatu` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_layanan` varchar(30) NOT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `harga` varchar(20) NOT NULL,
  `size_sepatu` varchar(5) NOT NULL,
  `ket_sepatu` varchar(50) NOT NULL,
  `kode_promo` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `nomor`, `tanggal`, `username`, `merk_sepatu`, `alamat`, `jenis_layanan`, `warna`, `harga`, `size_sepatu`, `ket_sepatu`, `kode_promo`, `status`, `id`) VALUES
(145, 0, '2017-09-06', 'Diniputrrr', 'Vans authentic', 'Perumahan Villa Bekasi Indah 1 blok c5 No. 5, Jl. Gunung Merapi 2 RT 10 RW 12  Kecamatan Tambun Selatan Kab Bekasi', 'Recolour', 'Hitam', '80000', '36', 'Biru pudar', 'MEiCERIA', 'SELESAI', 58),
(146, 0, '2017-09-14', 'Andhini', 'Marie claire', 'Perum Papanmas Jl Bunga Bangsa 1 Blok B2 no 18 RT08/RW018, Kec Tambun Selatan, Kel Mekar Sari, Kab Bekasi - Jabar 17510   Kecamatan Tambun Selatan Kab Bekasi', 'Deep Cleaning', '', '35000', '38', 'Sendal slop warna pink', '', 'SELESAI', 59),
(150, 0, '2017-09-24', 'andrear', 'kelme', 'graha prima  Kecamatan Tambun Utara Kab Bekasi', 'Deep Cleaning', '', '40000', '41', 'futsal indoor', 'SEPTEMBERKAH', 'SELESAI', 49),
(152, 0, '2017-09-24', 'andrear', 'warior', 'lubangbuaya  Kecamatan Serang Baru Kab Bekasi', 'Deep Cleaning', '', '60000', '39', 'hitam', '', 'SELESAI', 49),
(153, 0, '2017-09-24', 'andrear', 'kodachi', 'lubangbuaya  Kecamatan Serang Baru Kab Bekasi', 'Deep Cleaning', '', '35000', '41', 'outih', '', 'MENUNGGU PROSES', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE IF NOT EXISTS `tb_portofolio` (
  `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id_portofolio`, `nama_kegiatan`, `deskripsi`, `gambar`) VALUES
(4, 'deep clean', 'deep clean sepatu converse white', 'web4.PNG'),
(9, 'Deep Clean', 'deep clean bagian midsole', 'converse1.PNG'),
(11, 'repaint', 'repaint warna navy', 'web6.PNG'),
(15, 'Deep Clean', 'outsole', 'web2.PNG'),
(16, 'fast clean', 'vans', 'web3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promo`
--

CREATE TABLE IF NOT EXISTS `tb_promo` (
  `kode_promo` varchar(20) NOT NULL,
  `potongan` int(6) NOT NULL,
  PRIMARY KEY (`kode_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_promo`
--

INSERT INTO `tb_promo` (`kode_promo`, `potongan`) VALUES
('MEICERIA', 5000),
('SEPTEMBERKAH', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE IF NOT EXISTS `tb_services` (
  `id_services` int(10) NOT NULL AUTO_INCREMENT,
  `icon` varchar(20) NOT NULL,
  `jenis_layanan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(75) NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`id_services`, `icon`, `jenis_layanan`, `deskripsi`, `harga`, `gambar`) VALUES
(14, 'fa fa-flash', 'Fast Cleaning', 'fast cleaning adalah metode pembersihan dengan metode yang cepat . Bagian sepatu yang dibersihkan hanya pada bagian midsole dan upper saja . Waktu pembersihan kisaran 20-50 menit', 25000, 'asics1.PNG'),
(15, 'fa fa-eraser', 'Deep Cleaning', 'Deep cleaning adalah salah satu metode pencucian yanh dilakukan pada seluruh bagian sepatu dengan proses pembersihan 3-7 hari agar hasil yang didapat maksimal. ', 35000, 'converse.PNG'),
(16, 'fa fa-paint-brush', 'Repaint', 'repaint adalah metode pewarnaan sepatu agar kondisi sepatu seperti kondisi baru', 65000, 'vans.PNG'),
(17, 'fa fa-pencil-square', 'Recolour', 'recolour adalah metode pewarnaan sepatu dengan warna yang berbeda dari warna sepatu sebelumnya', 80000, 'vans1.PNG'),
(19, 'fa fa-magic', 'Unyellowing', 'unyellowing adalah proses pemulihan warna midsole sepatu yang mulai menguning', 35000, 'PhotoGrid_1498102633739.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE IF NOT EXISTS `tb_testimoni` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_ac` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `deskripsi_testimoni` text NOT NULL,
  `foto_profil` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id`, `id_ac`, `username`, `deskripsi_testimoni`, `foto_profil`) VALUES
(42, 0, 'Zahra', 'Puas pelayanannya . Tq yaa ????', 'IMG_0781.JPG'),
(43, 0, 'Ellatzz', 'Pelayanan cepat,  sepatu bersih dan wangi lagi dan gak buat warnanya luntur.  Thanks! ', 'IMG_20170901_125450_003.jpg'),
(46, 0, 'andrear', 'terimakasih sudah buat jadi seperti baru lagi', '12918404_768982826536473_176875806_n.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `tb_account` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

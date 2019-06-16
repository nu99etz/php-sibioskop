-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2019 at 11:58 AM
-- Server version: 10.1.38-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bypass`
--

CREATE TABLE `bypass` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bypass`
--

INSERT INTO `bypass` (`username`, `password`) VALUES
('user', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `jk` char(3) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email`, `tgl_lahir`, `no_telp`, `foto`, `tanggal_daftar`, `jk`, `alamat`, `password`) VALUES
('10-20190608-081127', 'Erlangga Sucipto', 'sucipto12@ymail.com', '2000-01-01', '086532123467', '10-20190608-081127.jpg', '2019-06-08', 'L', 'JL Jagiran Wetan NO 4A', 'bypass'),
('11-20190608-080952', 'Nadia Yassir', 'yassir@ymail.com', '1987-01-02', '08956674321', '11-20190608-080952.jpg', '0000-00-00', 'P', 'JL Patemon gg34', NULL),
('13-20190615-111531', 'Haji Arif', 'suprit@gmail.com', '1997-09-10', '086543211', '.jpg', '2019-06-16', 'L', 'JL Padjajaran gg 3 Indah', '12345'),
('19-20190608-081417', 'Marco Kosta', 'kostas123@gmail.com', '1998-10-23', '089765432167', '19-20190608-081417.png', '2019-06-08', 'L', 'JL Yasin no 567B', 'bypass'),
('43-20190611-091029', 'Yohan Cappele', 'chapelle@gmail.com', '1992-01-02', '0987654321', '43-20190611-091029.jpg', '2019-06-11', 'L', 'Russia gg Anyar', '123456'),
('47-20190616-054356', 'Andriansyah', 'ardi@ymail.com', '1996-05-21', '07846322', '47-20190616-054356.jpg', '2019-06-16', 'L', 'Bawean Utara gg 3', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` char(20) DEFAULT NULL,
  `nama_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `nama_detail`) VALUES
('1', 'Tersedia'),
('2', 'Tidak Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `detail_film`
--

CREATE TABLE `detail_film` (
  `id_film` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `durasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` varchar(20) NOT NULL,
  `nama_film` varchar(255) DEFAULT NULL,
  `tahun_film` date DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  `sipnosis` text,
  `foto` varchar(255) DEFAULT NULL,
  `quality` char(5) DEFAULT NULL,
  `umur` char(5) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `durasi` char(20) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `tahun_film`, `id_kategori`, `sipnosis`, `foto`, `quality`, `umur`, `detail`, `durasi`, `tanggal_input`) VALUES
('A1-001', 'The Raid', '2012-03-23', 'Action', 'Special tactics officer Rama prays, practices Silat, and bids goodbye to his father and wife who is pregnant with his child. He cryptically promises his father he\'ll \"bring him home.\" Rama joins a heavily armed 20-man elite police squad, including officers Bowo, Dagu, Sergeant Jaka and Lieutenant Wahyu, for a raid on an apartment block in Jakarta\'s slums. The team intends to eliminate crime lord Tama Riyadi – who, with his two lieutenants Andi and Mad Dog, owns the block letting criminals and junkies around the city rent rooms under his protection. Arriving undetected, the team sweeps the first floors and subdues various criminal tenants; they also temporarily detain an innocent, law-abiding tenant delivering medicine to his sick wife in apartment #726. Continuing to the sixth floor, the team is spotted by a young lookout, who passes on the message to another lookout just before he\'s shot dead by Lt. Wahyu; the latter youth raises the alarm.', 'A1-001.jpg', 'FHD', '17+', 'Tersedia', '101', '2019-06-12'),
('A1-004', 'Saving Private Ryan', '1998-07-26', 'Action', 'An elderly veteran visits the Normandy American Cemetery and Memorial with his family. At a tombstone, he falls to his knees with emotion. The scene then shifts to the morning of June 6, 1944, as American soldiers land on Omaha Beach as part of the Normandy Invasion. They suffer heavy losses in assaulting fortified German defensive positions. Captain John H. Miller of the 2nd Ranger Battalion leads a breakout from the beach. Elsewhere on the beach, a dead soldier lies face-down in the bloody surf; his pack is stenciled Ryan, S.\r\n\r\nIn Washington, D.C., at the U.S. War Department, General George Marshall learns that three of the four sons of the Ryan family were killed in action and that the fourth son, James, is with the 101st Airborne Division somewhere in Normandy. After reading Abraham Lincoln\'s Bixby letter aloud, Marshall orders Ryan brought home.', 'A1-004.jpg', 'IMAX', '17+', 'Tersedia', '169', '2019-06-16'),
('H2-001', 'The Social Network', '2010-10-01', 'Drama', 'In October 2003, 19-year-old Harvard University student Mark Zuckerberg is dumped by his girlfriend Erica Albright. Returning to his dorm, Zuckerberg writes an insulting entry about Albright on his LiveJournal blog and then creates a campus website called Facemash by hacking into college databases to steal photos of female students, then allowing site visitors to rate their attractiveness. After traffic to the site crashes parts of Harvard\'s computer network, Zuckerberg is given six months of academic probation. However, Facemash\'s popularity attracts the attention of Harvard upperclassmen and twins Cameron and Tyler Winklevoss and their business partner Divya Narendra. The trio invites Zuckerberg to work on Harvard Connection, a social network featuring the exclusive nature of Harvard students and aimed at dating.\r\n\r\nAfter agreeing to work on the Winklevoss twins\' concept, Zuckerberg approaches his friend Eduardo Saverin with an idea for what he calls Thefacebook, an online social networking website that would be exclusive to Ivy League students. Saverin provides $1,000 in seed funding, allowing Mark to build the website, which quickly becomes popular. When they learn of Thefacebook, the Winklevoss twins and Narendra are incensed, believing that Zuckerberg stole their idea while keeping them deliberately in the dark by stalling on developing the Harvard Connection website. They raise their complaint with Harvard President Larry Summers, who is dismissive and sees no value in either disciplinary action or Thefacebook website itself.', 'H2-001.png', 'IMAX', '17+', 'Tidak Tersedia', '120', '2019-06-16'),
('S2-001', 'Paddington 2', '2017-12-06', 'Comedy', 'Paddington, having settled with the Brown family in Windsor Gardens, has become popular in his community, offering people emotional support in various ways. To purchase a unique pop-up book of London in Samuel Gruber\'s antique shop for his aunt Lucy\'s 100th birthday, Paddington performs several odd jobs and saves his wages, but the book is stolen. Paddington gives chase, but the culprit escapes, and Paddington is framed and arrested. Although Mr. Gruber and the Browns do not believe that Paddington stole the book, with no evidence that the thief even existed, Paddington is wrongfully convicted and jailed. The thief soon returns home and is revealed to be Phoenix Buchanan, an egotistical ex-actor who lives opposite the Browns.', 'S2-001.jpg', 'IMAX', '9', 'Tersedia', '104', '2019-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `kualitas` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`kualitas`, `harga`) VALUES
('FHD', 25000),
('IMAX', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(20) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('1', 'Action'),
('2', 'Thriller'),
('3', 'Horror'),
('4', 'Comedy'),
('5', 'Cartoon'),
('7', 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` varchar(20) NOT NULL,
  `nama_manager` varchar(255) DEFAULT NULL,
  `no_telp_manager` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `nama_manager`, `no_telp_manager`, `jenis_kelamin`, `foto`, `alamat`) VALUES
('1234', 'Dwi Cipta Nugraha', '082234073315', 'L', '1234.jpg', 'JL Jojoran 3E Dlm 20A'),
('1567', 'Devi Sri', '12345678765', 'P', '1567.jpg', 'Pegagasan Timur'),
('3456', 'Yuzhi Chahal', '34908080854', 'L', '3456.jpg', 'Jsprit Badhipur');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_customer` varchar(25) DEFAULT NULL,
  `id_film` varchar(25) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_lihat` date DEFAULT NULL,
  `tanggal_booking` date DEFAULT NULL,
  `waktu_lihat` time DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `theater` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_customer`, `id_film`, `harga`, `jumlah`, `tanggal_lihat`, `tanggal_booking`, `waktu_lihat`, `id_transaksi`, `theater`) VALUES
('19-20190608-081417', 'H2-001', 225000, 5, '2019-06-18', '2019-06-15', '15:45:00', 'T-19-20190608-081417-45-20190615', '3'),
('19-20190608-081417', 'A1-001', 25000, 1, '2019-06-18', '2019-06-15', '20:00:00', 'T-19-20190608-081417-55-20190615', '3'),
('19-20190608-081417', 'A1-001', 25000, 1, '2019-06-17', '2019-06-15', '15:45:00', 'T-19-20190608-081417-15-20190615', '3'),
('19-20190608-081417', 'A1-001', 25000, 1, '2019-06-19', '2019-06-15', '15:45:00', 'T-19-20190608-081417-82-20190615', '3'),
('19-20190608-081417', 'H2-001', 45000, 1, '2019-06-22', '2019-06-15', '13:00:00', 'T-19-20190608-081417-8-20190615', '1'),
('19-20190608-081417', 'A1-001', 50000, 2, '2019-06-20', '2019-06-15', '15:45:00', 'T-19-20190608-081417-64-20190615', '5'),
('43-20190611-091029', 'A1-001', 75000, 3, '2019-06-19', '2019-06-15', '16:00:00', 'T-43-20190611-091029-39-20190615', '4'),
('654', 'A1-004', 135000, 3, '0000-00-00', '2019-06-16', '12:00:00', 'T-654-67-20190616', '1'),
('43-20190611-091029', 'S2-001', 135000, 3, '0000-00-00', '2019-06-16', '16:00:00', 'T-43-20190611-091029-88-20190616', '2'),
('19-20190608-081417', 'A1-004', 90000, 2, '0000-00-00', '2019-06-16', '12:00:00', 'T-19-20190608-081417-84-20190616', '3'),
('19-20190608-081417', 'S2-001', 45000, 1, '2019-06-10', '2019-06-16', '12:00:00', 'T-19-20190608-081417-39-20190616', '2'),
('47-20190616-054356', 'S2-001', 90000, 2, '2019-06-24', '2019-06-16', '15:45:00', 'T-47-20190616-054356-12-20190616', '4');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nip` varchar(20) NOT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat_petugas` varchar(255) DEFAULT NULL,
  `no_telp_petugas` varchar(255) DEFAULT NULL,
  `jk` char(2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nip`, `nama_petugas`, `password`, `alamat_petugas`, `no_telp_petugas`, `jk`, `foto`) VALUES
('654', 'Yughendra Restu', 'ASDFG', 'Sapiran gg 3 E', '8765431139', 'L', '654.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(20) NOT NULL,
  `id_customer` varchar(255) DEFAULT NULL,
  `tempat_duduk` varchar(255) DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_customer`, `tempat_duduk`, `id_transaksi`) VALUES
('A1-001-3-A-3', '19-20190608-081417', 'A-3', 'T-19-20190608-081417-82-20190615'),
('A1-001-4-A-13', '43-20190611-091029', 'A-13', 'T-43-20190611-091029-39-20190615'),
('A1-001-4-A-5', '43-20190611-091029', 'A-5', 'T-43-20190611-091029-39-20190615'),
('A1-001-4-A-7', '43-20190611-091029', 'A-7', 'T-43-20190611-091029-39-20190615'),
('A1-001-5-A-1', '19-20190608-081417', 'A-1', 'T-19-20190608-081417-64-20190615'),
('A1-001-5-A-5', '19-20190608-081417', 'A-5', 'T-19-20190608-081417-64-20190615'),
('A1-004-3-A-14', '19-20190608-081417', 'A-14', 'T-19-20190608-081417-84-20190616'),
('A1-004-3-A-19', '19-20190608-081417', 'A-19', 'T-19-20190608-081417-84-20190616'),
('H2-001-1-A-3', '19-20190608-081417', 'A-3', 'T-19-20190608-081417-8-20190615'),
('H2-001-3-A-18', '19-20190608-081417', 'A-18', 'T-19-20190608-081417-45-20190615'),
('H2-001-3-A-2', '19-20190608-081417', 'A-2', 'T-19-20190608-081417-45-20190615'),
('H2-001-3-A-3', '19-20190608-081417', 'A-3', 'T-19-20190608-081417-45-20190615'),
('H2-001-3-A-4', '19-20190608-081417', 'A-4', 'T-19-20190608-081417-45-20190615'),
('H2-001-3-A-6', '19-20190608-081417', 'A-6', 'T-19-20190608-081417-45-20190615'),
('H2-001-3-A-8', '19-20190608-081417', 'A-8', 'T-19-20190608-081417-45-20190615'),
('S2-001-2-A-13', '43-20190611-091029', 'A-13', 'T-43-20190611-091029-88-20190616'),
('S2-001-2-A-21', '43-20190611-091029', 'A-21', 'T-43-20190611-091029-88-20190616'),
('S2-001-2-A-9', '43-20190611-091029', 'A-9', 'T-43-20190611-091029-88-20190616'),
('S2-001-2-D-19', '19-20190608-081417', 'D-19', 'T-19-20190608-081417-39-20190616'),
('S2-001-4-C-12', '47-20190616-054356', 'C-12', 'T-47-20190616-054356-12-20190616'),
('S2-001-4-C-25', '47-20190616-054356', 'C-25', 'T-47-20190616-054356-12-20190616');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pesanan`
--

CREATE TABLE `tmp_pesanan` (
  `id_customer` varchar(25) DEFAULT NULL,
  `id_film` varchar(25) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_lihat` date DEFAULT NULL,
  `tanggal_booking` date DEFAULT NULL,
  `waktu_lihat` time DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `theater` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_pesanan`
--

INSERT INTO `tmp_pesanan` (`id_customer`, `id_film`, `harga`, `jumlah`, `tanggal_lihat`, `tanggal_booking`, `waktu_lihat`, `id_transaksi`, `theater`) VALUES
('654', 'A1-004', 135000, 3, '0000-00-00', '2019-06-16', '12:00:00', 'T-654-67-20190616', '1');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) DEFAULT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `waktu`) VALUES
(1, '12:00:00'),
(2, '13:00:00'),
(3, '15:45:00'),
(4, '16:00:00'),
(5, '20:00:00'),
(6, '22:00:00'),
(7, '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bypass`
--
ALTER TABLE `bypass`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_film`
--
ALTER TABLE `detail_film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

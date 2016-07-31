-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 06:43 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokami_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `jenis_barang` enum('-','Fashion Pria','Fashion Wanita','Fashion Anak','Perkakas rumah tangga','Boneka','Jam Tangan','Jilbab','Gamis','Sepatu Wanita','Sepatu Pria','Jersey','Lukisan','Alat olah raga','Peralatan Komputer') NOT NULL,
  `size` enum('0','S','M','L','XL','XXL','All size') NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `foto_barang`, `jenis_barang`, `size`, `harga_barang`, `deskripsi_barang`) VALUES
(13, 'Gamis 1', 'b.jpg', 'Gamis', 'L', '200000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(15, 'Gamis 3', 'c.jpg', 'Gamis', 'All size', '200000', ''),
(18, 'Gamis 6', 'f.jpg', 'Gamis', 'All size', '200000', ''),
(19, 'Gamis 7', 'g.jpg', 'Gamis', 'All size', '200000', ''),
(20, 'Gamis 8', 'h.jpg', 'Gamis', 'All size', '200000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum. '),
(21, 'Pria 1', '100.jpg', 'Fashion Pria', 'All size', '100000', ''),
(22, 'Pria 2', '150.jpg', 'Fashion Pria', 'All size', '50000', ''),
(25, 'Jersey 1', 'kosong.jpg', 'Jersey', 'All size', '150000', ''),
(26, 'Jersey 2', 'kosong.jpg', 'Jersey', 'All size', '0', ''),
(27, 'Jersey 3', 'kosong.jpg', 'Jersey', 'All size', '0', ''),
(28, 'Jersey 4', 'kosong.jpg', 'Jersey', 'All size', '0', ''),
(29, 'Boneka 1', 'a.jpg', 'Boneka', '', '70000', ''),
(30, 'Boneka 2', 'd.jpg', 'Boneka', '', '50000', ''),
(31, 'Boneka 3', 'e.jpg', 'Boneka', '', '70000', ''),
(32, 'Boneka 4', 'IMG-20151022-WA0022.jpg', 'Boneka', '', '70000', ''),
(33, 'Jilbab 1', 'kosong.jpg', 'Jilbab', 'All size', '150000', ''),
(34, 'Jilbab 2', 'kosong.jpg', 'Jilbab', 'All size', '30000', ''),
(35, 'Jilbab 3', 'kosong.jpg', 'Jilbab', '', '35000', ''),
(36, 'Jilbab 4', 'kosong.jpg', 'Jilbab', 'All size', '20000', ''),
(37, 'Jam 1', 'kosong.jpg', 'Jam Tangan', 'All size', '100000', ''),
(38, 'Jam 2', 'kosong.jpg', 'Jam Tangan', 'All size', '20000', ''),
(39, 'Jam 3', 'kosong.jpg', 'Jam Tangan', 'All size', '100000', ''),
(40, 'Jam 4', 'kosong.jpg', 'Jam Tangan', 'All size', '40000', ''),
(41, 'Sepatu Pria 1', 'kosong.jpg', 'Sepatu Pria', 'All size', '100000', ''),
(42, 'Sepatu Pria 2', 'kosong.jpg', 'Sepatu Pria', 'All size', '200000', ''),
(43, 'Sepatu Pria 3', 'kosong.jpg', 'Sepatu Pria', 'All size', '300000', ''),
(44, 'Sepatu Pria 4', 'kosong.jpg', 'Sepatu Pria', 'All size', '100000', ''),
(45, 'Sepatu wanita 1', 'kosong.jpg', 'Sepatu Wanita', 'All size', '200000', ''),
(46, 'Sepatu wanita 2', 'kosong.jpg', 'Sepatu Wanita', 'All size', '100000', ''),
(47, 'Sepatu wanita 3', 'kosong.jpg', 'Sepatu Wanita', 'All size', '100000', ''),
(48, 'Sepatu wanita 4', 'kosong.jpg', 'Sepatu Wanita', 'All size', '100000', ''),
(49, 'Pria 3', '60-75.jpg', 'Fashion Pria', 'All size', '100000', ''),
(50, 'Pria 4', '10354687_702384873154750_2077243908959972564_n.jpg', 'Fashion Pria', 'All size', '100000', ''),
(51, 'abc', 'bsi (FILEminimizer).jpg', 'Fashion Pria', 'S', '600000', 'ini deskripsi barang abc'),
(52, 'flashdisk', 'kosong.jpg', 'Peralatan Komputer', '', '200000', 'flashdisk yang sangat keren');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id_post` int(11) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `isi_post` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_post`, `foto_profil`, `judul_post`, `isi_post`) VALUES
(5, '2x3.jpg', 'post pertama update', 'ini post pertama\r\n'),
(7, '80.jpg', 'Artikel ke 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `data_pembeli`
--

CREATE TABLE IF NOT EXISTS `data_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `size` enum('-','S','M','L','XL','XXL') NOT NULL,
  `ukuran_kaki` varchar(10) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `email_pembeli` varchar(100) NOT NULL,
  `tlp_pembeli` varchar(20) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `pos` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembeli`
--

INSERT INTO `data_pembeli` (`id_pembeli`, `nama_barang`, `size`, `ukuran_kaki`, `harga`, `nama_pembeli`, `email_pembeli`, `tlp_pembeli`, `alamat_pembeli`, `pos`) VALUES
(1, 'Gamis 6', '-', '', 'Rp 200000', 'Frans Chaniago', 'franschaniago5@gmail.com', '08982002243', 'pasarkemis kabupaten tangerang', '15560');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komen` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `nama_pengomentar` varchar(100) NOT NULL,
  `isi_komen` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `id_post`, `nama_pengomentar`, `isi_komen`, `waktu`) VALUES
(18, 5, 'rian', 'artikel yang bagus', '2016-01-10 16:51:53'),
(19, 5, 'andi', 'ini juga bagus', '2016-01-10 16:55:17'),
(20, 7, 'Nurul', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-01-10 16:55:32'),
(21, 7, 'deni', 'artikelnya bermanfaat', '2016-01-10 16:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_email` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id_email`, `email`) VALUES
(1, 'franschaniago5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `password`) VALUES
(1, 'frans', '2a5cfaea8bd17e8fa12ec2f21480cdb4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `data_pembeli`
--
ALTER TABLE `data_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_induk` (`id_post`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_pembeli`
--
ALTER TABLE `data_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

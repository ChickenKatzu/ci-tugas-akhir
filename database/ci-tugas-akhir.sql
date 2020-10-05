-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 04:26 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-tugas-akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_kamar` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_user`, `id_kamar`, `status`, `tanggal_masuk`, `tanggal_keluar`) VALUES
(1, 7, 5, '', '0000-00-00', '0000-00-00'),
(2, 8, 5, '', '0000-00-00', '0000-00-00'),
(3, 9, 5, '', '0000-00-00', '0000-00-00'),
(4, 10, 6, '', '0000-00-00', '0000-00-00'),
(5, 11, 7, '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(30) NOT NULL,
  `kode_fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(20) NOT NULL,
  `nama_kamar` varchar(255) NOT NULL,
  `ukuran_kamar` varchar(20) NOT NULL,
  `harga_bulanan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `ukuran_kamar`, `harga_bulanan`, `status`, `gambar`) VALUES
(1, 'Kamar 4', '5m x 5m', '350000', 'Full', ''),
(5, 'kamar 5', '5m x 5m', '350000', 'Full', ''),
(6, 'kamar 6', '3m x 3m', '350000', 'Full', ''),
(7, 'kamar 7', '3m x 3m', '350000', 'Full', ''),
(8, 'kamar 8', 'Kamar 1008', '59999900', 'Full', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nama`, `alamat`, `tanggal_lahir`, `no_hp`, `umur`, `pekerjaan`) VALUES
(1, '', '', 'kasdkjas', 'oksaijdasd', 'kasjd', '0000-00-00 00:00:00', 'sakdj', '', ''),
(2, '', '', 'kasdkjas', 'oksaijdasd', 'kasjd', '0000-00-00 00:00:00', 'sakdj', '', ''),
(3, '', '', 'aloi.gmzone@gmail.com', 'Aloy', 'Woni', '0000-00-00 00:00:00', '', '', ''),
(4, '', '', 'akhmadmiftah96@gmail.com', 'Akhmad', 'Danurojo', '0000-00-00 00:00:00', '01238', '17', 'Tukang coding'),
(5, '', '', '', 'qweqwe', '', '0000-00-00 00:00:00', '', '', ''),
(6, '', '', '', 'qweqwe', '', '0000-00-00 00:00:00', '', '', ''),
(7, '', '', '', 'qweqwe', '', '0000-00-00 00:00:00', '', '', ''),
(8, '', '', '', 'qweqwe', '', '0000-00-00 00:00:00', '', '', ''),
(9, '', '', '', 'qweqwe', '', '0000-00-00 00:00:00', '', '', ''),
(10, '', '', '', 'asdw', '', '0000-00-00 00:00:00', '', '', ''),
(11, '', '', '', 'asdw', '', '0000-00-00 00:00:00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

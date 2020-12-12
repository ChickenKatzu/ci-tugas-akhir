-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 08:32 PM
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
  `id` int(20) NOT NULL,
  `id_kamar` int(20) NOT NULL,
  `status` enum('paid','unpaid') NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id`, `id_kamar`, `status`, `tanggal_masuk`, `tanggal_keluar`, `gambar`) VALUES
(14, 43, 16, 'paid', '2020-11-18', '2021-11-19', ''),
(15, 45, 17, 'paid', '2020-12-02', '2021-06-02', ''),
(16, 46, 18, 'paid', '2020-12-09', '2024-12-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(20) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `ukuran_kamar` varchar(20) NOT NULL,
  `harga_bulanan` enum('350000') NOT NULL,
  `status` enum('available','booked') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `ukuran_kamar`, `harga_bulanan`, `status`, `gambar`) VALUES
(16, 'kamar 1', '3m x 3m', '350000', 'booked', ''),
(17, 'kamar 2', '3m x 3m', '350000', 'booked', ''),
(18, 'kamar 3', '3m x 3m', '350000', 'booked', ''),
(19, 'kamar 4', '3m x 3m', '350000', 'available', ''),
(20, 'kamar 5', '3m x 3m', '350000', 'available', ''),
(21, 'kamar 6', '3m x 3m', '350000', 'available', ''),
(22, 'kamar 7', '3m x 3m', '350000', 'available', ''),
(23, 'kamar 8', '3m x 3m', '350000', 'available', ''),
(24, 'kamar 9', '3m x 3m', '350000', 'available', ''),
(26, 'kamar 10', '3m x 3m', '350000', 'available', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifikasi_id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `user_level` enum('admin','owner','user') NOT NULL,
  `gambar` varchar(50) NOT NULL DEFAULT 'gambar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `email`, `nama`, `alamat`, `tanggal_lahir`, `nohp`, `pekerjaan`, `user_level`, `gambar`) VALUES
(42, 'admin1', 'admin@admin.id', 'admin sawung', 'admin wonogiri', '2020-06-09', '32132121', 'mahasiswa', 'admin', ''),
(43, 'user1', 'user@user.id', 'user sawung', 'wonogiri', '1995-12-05', '321321231', 'mahasiswa', 'user', 'gambar2.jpeg'),
(44, 'owner1', 'owner@owner.id', 'owner sawung', 'Wonogiri, Giripurwa, Gerdu Rt01/06', '2020-11-01', '082292424105', 'swasta', 'owner', ''),
(45, 'user2', 'user2@user.id', 'user2', 'user2', '2020-06-02', '082292424105', 'user2', 'user', 'gambar1.jpg'),
(46, 'user3', 'user3@user.id', 'user3', 'user3', '2020-11-23', '082292424105', 'user3', 'user', 'gambar2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id` (`id`,`id_kamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`),
  ADD UNIQUE KEY `id_booking` (`id_booking`,`id_kamar`,`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kamar` (`id_kamar`);

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
  MODIFY `id_booking` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `notifikasi_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `notifikasi_ibfk_3` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

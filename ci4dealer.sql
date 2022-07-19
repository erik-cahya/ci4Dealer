-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 09:20 PM
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
-- Database: `ci4dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id_account`, `username`, `password`, `id_user`, `level`, `created_at`, `updated_at`) VALUES
(8, 'usernameBaru', 'asdasdasd', 24, 1, '2022-07-19 03:03:20', '2022-07-19 13:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga_product` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `detail_kendaraan` text NOT NULL,
  `gambar_product` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `harga_product`, `tahun`, `id_user`, `detail_kendaraan`, `gambar_product`, `updated_at`, `created_at`) VALUES
(1, 'Yamaha Mio', '12000000', '2012', 1, '', 'p1.png', '2022-07-17 19:48:49', '2022-07-17 19:48:49'),
(2, 'Yamaha Fortuna', '2011', '2022', 1, '', 'p1.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Yamaha Shogun', '20112', '20118', 1, '', 'p1.png', '2022-07-18 11:34:59', '2022-07-18 11:34:59'),
(6, 'Coba flash data', '14213', 'sdfsd', 1, '', 'p1.png', '2022-07-18 11:47:38', '2022-07-18 11:47:38'),
(7, 'Satria FU', '12450000', '2003', 1, 'Ini adalah kendaraan pada tahun 201904 yang digunakan untuk ngarit', 'p1.png', '2022-07-18 11:50:01', '2022-07-18 11:50:01'),
(8, 'sfgjeiorfj', '12245', '129489023', 1, 'fwegferg', 'p2.png', '2022-07-18 12:29:34', '2022-07-18 12:29:34'),
(9, 'Tambah Produk Motor Baru', '38759', '128947', 1, 'Ini adalah produk baru pada tahun 2022', 'p3.png', '2022-07-18 13:24:20', '2022-07-18 13:24:20'),
(10, 'Test Data Baru', '12345', '2114', 1, 'Ini adalah data yang dikirimkan baru', '1.png', '2022-07-19 02:00:54', '2022-07-19 02:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `no_telepon`, `email`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(24, 'Erik Cahya Pradana', '089522648527', 'erik.cahya841@gmail.com', 'Data Alamat sudah diubah', '1.png', '2022-07-19 03:03:20', '2022-07-19 12:46:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD CONSTRAINT `tb_account_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

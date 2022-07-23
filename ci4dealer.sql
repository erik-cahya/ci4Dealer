-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 07:38 PM
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
(21, 'admin', 'admin', 36, 0, '2022-07-23 08:33:12', '2022-07-23 08:33:12'),
(22, 'user', 'user', 37, 1, '2022-07-23 08:46:02', '2022-07-23 08:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_order` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_product`, `id_user`, `status_order`, `updated_at`, `created_at`) VALUES
(1, 3, 37, 'pending', '2022-07-23 12:21:17', '2022-07-23 12:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga_product` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `detail_product` text NOT NULL,
  `gambar_product` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `harga_product`, `tahun`, `detail_product`, `gambar_product`, `updated_at`, `created_at`) VALUES
(1, 'Yamaha Mio', '12000000', '2012', '', 'p1.png', '2022-07-17 19:48:49', '2022-07-17 19:48:49'),
(3, 'Yamaha Shogun', '250000000', '20118', 'Ini adalah kendaraan pada tahun 2022 yang dimaan motornya dapat terbang menuju tak terbatas dan melampauinya', 'p1.png', '2022-07-20 13:19:12', '2022-07-18 11:34:59'),
(6, 'Coba flash data', '14213', 'sdfsd', '', 'p1.png', '2022-07-18 11:47:38', '2022-07-18 11:47:38'),
(7, 'Satria FU', '12450000', '2003', 'Ini adalah kendaraan pada tahun 201904 yang digunakan untuk ngarit', 'p1.png', '2022-07-18 11:50:01', '2022-07-18 11:50:01'),
(9, 'Tambah Produk Motor Baru', '38759', '128947', 'Ini adalah produk baru pada tahun 2022', 'p3.png', '2022-07-18 13:24:20', '2022-07-18 13:24:20'),
(10, 'Test Data Baru', '12345', '2114', 'Ini adalah data yang dikirimkan baru', '1.png', '2022-07-19 02:00:54', '2022-07-19 02:00:54'),
(11, 'Lorem Ipsum Dolor sir amet', '12300000', '2004', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, fuga? Placeat quibusdam, voluptate commodi debitis, doloremque nulla esse quis consectetur accusamus aliquid alias nesciunt sit nisi officiis modi voluptates iure distinctio cupiditate accusantium! Sit quasi dolorem, quisquam adipisci ipsam reiciendis necessitatibus nulla rerum laudantium voluptatibus impedit natus, delectus itaque? Ex, iure rem quis aspernatur, neque obcaecati consequuntur sapiente aliquid aperiam nemo quibusdam asperiores blanditiis vel id perferendis ipsum sint, esse error pariatur laborum dolore. Quas vel recusandae cumque repellat praesentium non vitae libero ab suscipit voluptates. Quo nam labore inventore, ea, perspiciatis iusto aperiam tempora voluptates voluptas cumque nemo nihil!', 'p1.png', '2022-07-20 08:15:54', '2022-07-20 08:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `no_telepon`, `email`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(36, 'Erik Cahya Pradana', '089522648527', 'erik.cahya841@gmail.com', NULL, 'avatar-default.png', '2022-07-23 08:33:11', '2022-07-23 08:33:11'),
(37, 'Kadek Indah Melanie Dewi', '089664532445', 'kadekindahmelanie77@gmail.com', NULL, 'avatar-default.png', '2022-07-23 08:46:02', '2022-07-23 08:46:02');

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
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_product` (`id_product`),
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
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD CONSTRAINT `tb_account_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

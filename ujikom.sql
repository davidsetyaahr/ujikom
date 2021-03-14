-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 01:19 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `stok` int(4) NOT NULL,
  `harga_beli` int(6) NOT NULL,
  `harga_jual` int(6) NOT NULL,
  `last_update` datetime NOT NULL,
  `last_update_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`, `last_update`, `last_update_by`) VALUES
(1, 'beras 10kg', 220, 40000, 55000, '2021-03-14 01:38:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(2) NOT NULL,
  `nama_supplier` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`) VALUES
(1, 'Supplier');

-- --------------------------------------------------------

--
-- Table structure for table `trans_barang_datang`
--

CREATE TABLE `trans_barang_datang` (
  `id_trans` int(5) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `id_supplier` int(2) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tanggal_datang` datetime NOT NULL,
  `jumlah_datang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_barang_datang`
--

INSERT INTO `trans_barang_datang` (`id_trans`, `id_barang`, `id_supplier`, `id_user`, `tanggal_datang`, `jumlah_datang`) VALUES
(1, 1, 1, 1, '2021-03-17 00:00:00', 200);

-- --------------------------------------------------------

--
-- Table structure for table `trans_jual`
--

CREATE TABLE `trans_jual` (
  `id_trans_jual` int(5) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `id_penjual` int(5) NOT NULL,
  `jumlah_jual` int(5) NOT NULL,
  `tanggal_jual` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `level` enum('admin','kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `tanggal_lahir`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2001-03-01', 'admin'),
(3, 'david', 'kasir', 'c7911af3adbd12a035b289556d96470a', '2021-03-14', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `last_update_by` (`last_update_by`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `trans_barang_datang`
--
ALTER TABLE `trans_barang_datang`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `trans_jual`
--
ALTER TABLE `trans_jual`
  ADD PRIMARY KEY (`id_trans_jual`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_penjual` (`id_penjual`);

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
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trans_barang_datang`
--
ALTER TABLE `trans_barang_datang`
  MODIFY `id_trans` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trans_jual`
--
ALTER TABLE `trans_jual`
  MODIFY `id_trans_jual` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trans_barang_datang`
--
ALTER TABLE `trans_barang_datang`
  ADD CONSTRAINT `trans_barang_datang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `trans_barang_datang_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `trans_barang_datang_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `trans_jual`
--
ALTER TABLE `trans_jual`
  ADD CONSTRAINT `trans_jual_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `trans_jual_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

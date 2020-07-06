-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 11:33 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_nurfaizin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblanggota`
--

CREATE TABLE `tblanggota` (
  `no_anggota` int(5) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `wajib` varchar(20) DEFAULT NULL,
  `pokok` varchar(20) DEFAULT NULL,
  `saldo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblanggota`
--

INSERT INTO `tblanggota` (`no_anggota`, `nama`, `wajib`, `pokok`, `saldo`) VALUES
(1, 'nur', 'pajak', 'bangunan', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `tblkasir`
--

CREATE TABLE `tblkasir` (
  `kode_kasir` int(5) NOT NULL,
  `nama_kasir` varchar(20) DEFAULT NULL,
  `password_kasir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpinjam`
--

CREATE TABLE `tblpinjam` (
  `no_pinjam` int(5) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  `no_anggota` int(5) DEFAULT NULL,
  `jml_pinjam` int(10) DEFAULT NULL,
  `kode_kasir` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsimpan`
--

CREATE TABLE `tblsimpan` (
  `no_simpan` int(5) NOT NULL,
  `tanggal` varchar(12) DEFAULT NULL,
  `no_anggota` int(5) DEFAULT NULL,
  `jml_simpan` int(10) DEFAULT NULL,
  `kode_kasir` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblanggota`
--
ALTER TABLE `tblanggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `tblkasir`
--
ALTER TABLE `tblkasir`
  ADD PRIMARY KEY (`kode_kasir`);

--
-- Indexes for table `tblpinjam`
--
ALTER TABLE `tblpinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `kode_kasir` (`kode_kasir`);

--
-- Indexes for table `tblsimpan`
--
ALTER TABLE `tblsimpan`
  ADD PRIMARY KEY (`no_simpan`),
  ADD KEY `no_anggota` (`no_anggota`),
  ADD KEY `kode_kasir` (`kode_kasir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblpinjam`
--
ALTER TABLE `tblpinjam`
  ADD CONSTRAINT `tblpinjam_ibfk_1` FOREIGN KEY (`kode_kasir`) REFERENCES `tblkasir` (`kode_kasir`);

--
-- Constraints for table `tblsimpan`
--
ALTER TABLE `tblsimpan`
  ADD CONSTRAINT `tblsimpan_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `tblanggota` (`no_anggota`),
  ADD CONSTRAINT `tblsimpan_ibfk_2` FOREIGN KEY (`kode_kasir`) REFERENCES `tblkasir` (`kode_kasir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

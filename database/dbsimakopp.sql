-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 07:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsimakopp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `kode_aset` varchar(10) NOT NULL,
  `nama_aset` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `kapasitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aset`
--

INSERT INTO `tbl_aset` (`kode_aset`, `nama_aset`, `merk`, `lokasi`, `kelurahan`, `kecamatan`, `tanggal`, `kapasitas`) VALUES
('ast_001', 'pompa', 'denso', 'Jl. Beno 7', 'Tambun', 'Tambun', '2019-06-09', 'draft'),
('ast_002', 'drain', 'daison', 'Jl. Apel', 'Tambun', 'tambun', '2019-06-03', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('Operator','Staff','Kepala Sekretariat','Kepala Bisang') NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `nama`, `level`, `foto`) VALUES
('PGN-001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin saja', 'Staff', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

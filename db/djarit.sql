-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 02:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djarit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_diklat`
--

CREATE TABLE `tb_diklat` (
  `id_diklat` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_peserta` int(3) NOT NULL,
  `angkatan` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_instruktur`
--

CREATE TABLE `tb_instruktur` (
  `id_instruktur` varchar(64) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` int(20) NOT NULL,
  `jabatan` int(2) NOT NULL,
  `materi 1` int(64) NOT NULL,
  `materi 2` varchar(64) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `file_ktp` varchar(255) NOT NULL,
  `no_npwp` int(50) NOT NULL,
  `file_npwp` varchar(255) NOT NULL,
  `cv` text NOT NULL,
  `alamat` text NOT NULL,
  `portofolio 1` text NOT NULL,
  `portofolio 2` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` varchar(64) NOT NULL,
  `diklat` varchar(64) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` varchar(64) NOT NULL,
  `diklat` varchar(64) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tlp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(64) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `kecamatan` varchar(64) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(225) NOT NULL,
  `peran` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_diklat`
--
ALTER TABLE `tb_diklat`
  ADD PRIMARY KEY (`id_diklat`);

--
-- Indexes for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 11:21 AM
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
  `id_diklat` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_peserta` int(5) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diklat`
--

INSERT INTO `tb_diklat` (`id_diklat`, `nama`, `jumlah_peserta`, `angkatan`, `status`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 'Diklat 3', 0, 2, '0', '2022-04-01', '2022-04-02'),
(2, 'Diklat 41', 0, 4, '1', '2022-04-01', '2022-04-02'),
(3, 'Diklat 5', 0, 1, '0', '2022-04-01', '2022-04-30'),
(4, 'Diklat 6', 0, 2, '0', '2022-04-01', '2022-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instruktur`
--

CREATE TABLE `tb_instruktur` (
  `id_instruktur` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telepon` int(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `diklat` varchar(10) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `file_ktp` varchar(50) NOT NULL DEFAULT 'ktp.jpg',
  `no_npwp` int(50) NOT NULL,
  `file_npwp` varchar(50) NOT NULL DEFAULT 'npwp,jpg',
  `cv` text NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'foto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instruktur`
--

INSERT INTO `tb_instruktur` (`id_instruktur`, `nama`, `email`, `telepon`, `jabatan`, `diklat`, `no_ktp`, `file_ktp`, `no_npwp`, `file_npwp`, `cv`, `alamat`, `foto`) VALUES
(2, 'yes', 'tes', 12, '1', '2', 0, 'ktp.jpg', 0, 'npwp,jpg', '', 'alamat', 'foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(12) NOT NULL,
  `diklat` varchar(64) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_instruktur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `diklat`, `kegiatan`, `tanggal`, `id_instruktur`) VALUES
(1, 'diklat', 'kegiatan edit edy', '2022-04-01', ''),
(3, 'Diklat 41', 'kegiatan 3\r\n', '2022-04-20', ''),
(5, 'Diklat 41', 'with instruktur', '2022-04-20', '2'),
(6, 'Diklat 41', 'itur mo saja edit\r\n', '2022-04-20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `peran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `peran`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'instruktur', 'instruktur', 'instruktur', 'instruktur');

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
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_diklat`
--
ALTER TABLE `tb_diklat`
  MODIFY `id_diklat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  MODIFY `id_instruktur` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

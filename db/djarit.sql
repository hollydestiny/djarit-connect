-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2022 at 11:16 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

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
  `id` int(12) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jumlah_peserta` int(5) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diklat`
--

INSERT INTO `tb_diklat` (`id`, `nama`, `jumlah_peserta`, `angkatan`, `status`, `tgl_mulai`, `tgl_selesai`) VALUES
(2, 'diklat 1', 20, 2, '1', '2022-04-01', '2022-04-01'),
(7, 'diklat2', 0, 1, '0', '2022-04-01', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instruktur`
--

CREATE TABLE `tb_instruktur` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telepon` int(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `id_diklat` int(12) NOT NULL,
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

INSERT INTO `tb_instruktur` (`id`, `nama`, `email`, `telepon`, `jabatan`, `id_diklat`, `no_ktp`, `file_ktp`, `no_npwp`, `file_npwp`, `cv`, `alamat`, `foto`) VALUES
(2, 'yolooo', 'yoolo@', 123456, 'payabo', 2, 0, 'ktp.jpg', 0, 'npwp,jpg', '-', '-', 'foto.jpg'),
(3, 'hoooloo', 'holo@holoo', 854545431, 'assistent', 7, 0, 'ktp.jpg', 0, 'npwp,jpg', '-', '-', 'foto.jpg'),
(4, 'flash', 'flash@g', 1234578, '-', 2, 0, 'ktp.jpg', 0, 'npwp,jpg', '-', '-', 'foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(12) NOT NULL,
  `diklat` varchar(64) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_instruktur` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `diklat`, `kegiatan`, `tanggal`, `id_instruktur`) VALUES
(15, 'diklat 1', 'kegiatan 1', '2022-04-20', 2),
(16, 'diklat 1', 'kegiatann 2\r\n', '2022-04-20', 2),
(17, 'diklat 1', 'kegiatan 3', '2022-04-20', 2),
(18, 'diklat 1', 'ketiatan41\r\n', '2022-04-20', 2),
(19, 'diklat2', 'kegiatan 1 dari handokko', '2022-04-20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'instruktur', 'instruktur', 'instruktur', 'instruktur'),
(3, 'hoooloo', 'handoko', '123456', 'assistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_diklat`
--
ALTER TABLE `tb_diklat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diklat` (`id_diklat`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_instruktur` (`id_instruktur`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_diklat`
--
ALTER TABLE `tb_diklat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  ADD CONSTRAINT `tb_instruktur_ibfk_1` FOREIGN KEY (`id_diklat`) REFERENCES `tb_diklat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_ibfk_1` FOREIGN KEY (`id_instruktur`) REFERENCES `tb_instruktur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2022 at 04:45 PM
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
  `id_diklat` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_peserta` int(3) NOT NULL,
  `angkatan` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diklat`
--

INSERT INTO `tb_diklat` (`id_diklat`, `nama`, `jumlah_peserta`, `angkatan`, `status`, `mulai`, `selesai`) VALUES
('625ece3f905a9', 'diklat1', 0, 1, 1, '2022-04-01', '2022-04-01'),
('625ece56940a5', 'diklat2', 0, 1, 1, '2022-04-01', '2022-04-01'),
('625ece6a57b44', 'diklat3', 0, 1, 1, '2022-04-01', '2022-04-01');

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
  `materi_1` varchar(64) NOT NULL,
  `materi_2` varchar(64) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `file_ktp` varchar(64) NOT NULL,
  `no_npwp` int(50) NOT NULL,
  `file_npwp` varchar(64) NOT NULL,
  `cv` text NOT NULL,
  `alamat` text NOT NULL,
  `portofolio 1` text NOT NULL,
  `portofolio 2` text NOT NULL,
  `foto` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instruktur`
--

INSERT INTO `tb_instruktur` (`id_instruktur`, `nama`, `email`, `telepon`, `jabatan`, `materi_1`, `materi_2`, `no_ktp`, `file_ktp`, `no_npwp`, `file_npwp`, `cv`, `alamat`, `portofolio 1`, `portofolio 2`, `foto`) VALUES
('instruktur', 'sansuding', 'contoh@email.com', 0, 1, '625ece6a57b44', '625ece56940a5', 0, 'default.jpg', 0, 'default.jpg', 'cv', 'alamat', 'p1', 'p2', 'default.jpg');

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

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `diklat`, `kegiatan`, `tanggal`) VALUES
('1', 'diklat', 'kegiatan sudah di edit', '2022-04-01'),
('625ee444d4db6', 'diklat2', 'kegiatan  diklat 2 edit', '2022-04-19');

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
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `peran`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin'),
('instruktur', 'instruktur', 'instruktur', 'instruktur', 'instruktur');

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

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2022 pada 02.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

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
-- Struktur dari tabel `tb_instruktur`
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
  ADD PRIMARY KEY (`id_instruktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2025 pada 14.26
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk4butur`
--
CREATE DATABASE IF NOT EXISTS `smk4butur` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smk4butur`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_siswa`
--

DROP TABLE IF EXISTS `absen_siswa`;
CREATE TABLE `absen_siswa` (
  `id_absen` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `date_absen` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen_siswa`
--

INSERT INTO `absen_siswa` (`id_absen`, `id_mapel`, `id_siswa`, `date_absen`, `status`, `ket`) VALUES
(1, 1, 1, '2025-08-27', 'Hadir', '11'),
(2, 1, 2, '2025-08-27', 'Hadir', '11'),
(3, 1, 3, '2025-08-27', 'Hadir', '11'),
(4, 1, 4, '2025-08-27', 'Hadir', '11'),
(5, 1, 5, '2025-08-27', 'Hadir', '11'),
(6, 1, 6, '2025-08-27', 'Hadir', '11'),
(7, 1, 7, '2025-08-27', 'Hadir', '11'),
(8, 1, 8, '2025-08-27', 'Hadir', '11'),
(9, 1, 9, '2025-08-27', 'Hadir', '11'),
(10, 1, 10, '2025-08-27', 'Hadir', '11'),
(11, 1, 11, '2025-08-27', 'Hadir', '11'),
(12, 1, 12, '2025-08-27', 'Hadir', '11'),
(13, 1, 13, '2025-08-27', 'Hadir', '11'),
(14, 1, 14, '2025-08-27', 'Hadir', '11'),
(15, 1, 15, '2025-08-27', 'Hadir', '11'),
(16, 1, 16, '2025-08-27', 'Hadir', '11'),
(17, 1, 18, '2025-08-27', 'Hadir', '11'),
(18, 1, 20, '2025-08-27', 'Alfa', '11'),
(19, 2, 1, '2025-08-30', 'Hadir', '11'),
(20, 2, 2, '2025-08-30', 'Hadir', '11'),
(21, 2, 3, '2025-08-30', 'Hadir', '11'),
(22, 2, 4, '2025-08-30', 'Hadir', '11'),
(23, 2, 5, '2025-08-30', 'Hadir', '11'),
(24, 2, 6, '2025-08-30', 'Hadir', '11'),
(25, 2, 7, '2025-08-30', 'Hadir', '11'),
(26, 2, 8, '2025-08-30', 'Hadir', '11'),
(27, 2, 9, '2025-08-30', 'Hadir', '11'),
(28, 2, 10, '2025-08-30', 'Hadir', '11'),
(29, 2, 11, '2025-08-30', 'Hadir', '11'),
(30, 2, 12, '2025-08-30', 'Hadir', '11'),
(31, 2, 13, '2025-08-30', 'Hadir', '11'),
(32, 2, 14, '2025-08-30', 'Hadir', '11'),
(33, 2, 15, '2025-08-30', 'Hadir', '11'),
(34, 2, 16, '2025-08-30', 'Hadir', '11'),
(35, 2, 18, '2025-08-30', 'Hadir', '11'),
(36, 2, 20, '2025-08-30', 'Hadir', '11'),
(37, 1, 1, '2025-08-25', 'Hadir', '11'),
(38, 1, 2, '2025-08-25', 'Hadir', '11'),
(39, 1, 3, '2025-08-25', 'Hadir', '11'),
(40, 1, 4, '2025-08-25', 'Alfa', '11'),
(41, 1, 5, '2025-08-25', 'Alfa', '11'),
(42, 1, 6, '2025-08-25', 'Hadir', '11'),
(43, 1, 7, '2025-08-25', 'Hadir', '11'),
(44, 1, 8, '2025-08-25', 'Hadir', '11'),
(45, 1, 9, '2025-08-25', 'Hadir', '11'),
(46, 1, 10, '2025-08-25', 'Hadir', '11'),
(47, 1, 11, '2025-08-25', 'Hadir', '11'),
(48, 1, 12, '2025-08-25', 'Hadir', '11'),
(49, 1, 13, '2025-08-25', 'Hadir', '11'),
(50, 1, 14, '2025-08-25', 'Hadir', '11'),
(51, 1, 15, '2025-08-25', 'Hadir', '11'),
(52, 1, 16, '2025-08-25', 'Hadir', '11'),
(53, 1, 18, '2025-08-25', 'Hadir', '11'),
(54, 1, 20, '2025-08-25', 'Hadir', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master`
--

DROP TABLE IF EXISTS `master`;
CREATE TABLE `master` (
  `id_admin` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master`
--

INSERT INTO `master` (`id_admin`, `nama_lengkap`, `username`, `password`, `mail`) VALUES
(1, 'ADMINISTRATOR', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'abudushoy@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

DROP TABLE IF EXISTS `matapelajaran`;
CREATE TABLE `matapelajaran` (
  `id_mapel` int(11) NOT NULL,
  `nama_pelajaran` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`id_mapel`, `nama_pelajaran`, `kelas`, `ket`) VALUES
(1, 'Administrasi Sistem Jaringan', '11', 'ASJ'),
(2, 'Pilihan : Pemrograman Web', '11', 'CODE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(5) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `room_class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `fullname`, `username`, `password`, `room_class`) VALUES
(1, 'Afhiek Ifandra Swasmita', '', '', '11_TKJ'),
(2, 'Agra Adi Febrian', '', '', '11_TKJ'),
(3, 'Alfin', 'alfin', 'e10adc3949ba59abbe56e057f20f883e', '11_TKJ'),
(4, 'Andra Saputra', 'andrasaputra', '', '11_TKJ'),
(5, 'Arda', '', '', '11_TKJ'),
(6, 'Eichea Sastryamei', '', '', '11_TKJ'),
(7, 'Firda Amelia', '', '', '11_TKJ'),
(8, 'Hasbia', '', '', '11_TKJ'),
(9, 'Heni Andriani', '', '', '11_TKJ'),
(10, 'Irfan Pole', '', '', '11_TKJ'),
(11, 'Melati', '', '', '11_TKJ'),
(12, 'Melati Abdul Rahman', '', '', '11_TKJ'),
(13, 'Muhammad Ali Bahari', '', '', '11_TKJ'),
(14, 'Nursila Putri', '', '', '11_TKJ'),
(15, 'Selvia', '', '', '11_TKJ'),
(16, 'Suci Asrianti', '', '', '11_TKJ'),
(18, 'Zefannya Khaila Putri', '', '', '11_TKJ'),
(20, 'Rama', '', '', '11_TKJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_siswa`
--
ALTER TABLE `absen_siswa`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_siswa`
--
ALTER TABLE `absen_siswa`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

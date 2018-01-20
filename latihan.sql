-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2018 pada 15.16
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalku`
--

CREATE TABLE `jadwalku` (
  `jadwal_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jadwalku`
--

INSERT INTO `jadwalku` (`jadwal_id`, `date`, `jam_mulai`, `jam_selesai`, `title`, `description`, `id_ruangan`) VALUES
(3, '2018-01-10 08:28:36', '00:00:00', '00:00:00', 'Ultah MAMA', 'hari ulang tahun mama', 0),
(6, '2015-01-12 12:11:22', '00:00:00', '00:00:00', 'Tes', 'Tess', 0),
(7, '2018-01-09 08:28:36', '00:00:00', '00:00:00', 'Sertijab angkatan 2015', 'Serah terima jabatan Koor Laboratorium periode 2016/2018', 0),
(8, '2018-01-15 00:00:00', '00:00:00', '00:00:00', 'TEST', 'testt', 0),
(9, '2018-01-16 00:00:00', '00:00:00', '00:00:00', 'TEST2', 'lanjutan test2', 0),
(10, '2018-01-17 00:00:00', '00:00:00', '00:00:00', 'TEST2', 'cek', 0),
(11, '2018-01-15 10:55:43', '00:00:00', '00:00:00', 'METLIT', 'Ujian Metlit', 0),
(12, '2018-01-25 08:04:24', '00:00:00', '00:00:00', 'Test jam', 'jam', 0),
(13, '2018-01-26 10:55:43', '00:00:00', '00:00:00', 'Rapat Koordinasi', 'Internal Bagian', 0),
(14, '2018-01-24 00:00:00', '00:00:00', '00:00:00', 'Coba', 'cek', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`, `status`) VALUES
(1, 'fizaegyma', 'fizaegyma', 'fizaegyma@gmail.com', 'admin'),
(2, 'umarkotak', 'umarkotak', 'umarkotak@yahoo.co.id', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalku`
--
ALTER TABLE `jadwalku`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalku`
--
ALTER TABLE `jadwalku`
  MODIFY `jadwal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

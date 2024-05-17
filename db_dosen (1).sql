-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2024 pada 13.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmhsw`
--

CREATE TABLE `tblmhsw` (
  `nim` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addrees` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblmhsw`
--

INSERT INTO `tblmhsw` (`nim`, `name`, `addrees`, `prodi`, `age`) VALUES
(22220391, 'NAzwatul Husna', 'Pulau Simardan', 'Sistem Informasi', 24),
(22220403, 'Wika Ananda', 'Pulau Simardan', 'Sistem Informasi', 22),
(22220890, 'Syahrul Farhan', 'Sipori-pori', 'Sistem Komputer', 23),
(22220897, 'Windi Sitorus', 'Pulau Simardan', 'Sistem Kom', 20),
(22220899, 'Tania Fazira', 'Tanjungbalai', 'Sistem Komputer', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nidn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nidn`, `name`, `tgllahir`, `address`, `jabatan`, `email`) VALUES
(4160357, 'SUNARDI SEMBIRING,S.E.,M.T', '1967-08-12', 'Pulau simardan', 'Lektor Kepala', 'Sunardi@gmail.com'),
(403076101, 'DR.NINA NURANI,S.H.,M.S.I', '1880-07-25', 'TANJUNGBALAI', 'Lektor Kepala', 'ninanuraini@gmail.com'),
(457652413, 'DR.H.DADANG,M.SI', '1880-03-04', 'Batu Bara', 'Tenaga Pengajar', 'dadang@gmail.com'),
(467876241, 'DR.ERWIN FIRDAUS,S.E.,M.M', '1988-05-31', 'TANJUNGBALAI', 'Tenaga Pengajar', 'erwin@gmail.com'),
(2147483647, 'SRI ASTUSI,S.Kom', '1890-12-05', 'Gg Semangka', 'Lektor', 'Astuti@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblmhsw`
--
ALTER TABLE `tblmhsw`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblmhsw`
--
ALTER TABLE `tblmhsw`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22220900;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2024 pada 15.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik007`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen007`
--

CREATE TABLE `tbl_dosen007` (
  `id_dosen007` int(11) NOT NULL,
  `nidn007` varchar(15) DEFAULT NULL,
  `nama_dosen007` varchar(30) DEFAULT NULL,
  `alamat_dsn007` text DEFAULT NULL,
  `tempat_lahir007` varchar(30) DEFAULT NULL,
  `tgl_lahir007` date DEFAULT NULL,
  `pendidikan007` varchar(4) DEFAULT NULL,
  `tgl_entry007` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jurusan007` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dosen007`
--

INSERT INTO `tbl_dosen007` (`id_dosen007`, `nidn007`, `nama_dosen007`, `alamat_dsn007`, `tempat_lahir007`, `tgl_lahir007`, `pendidikan007`, `tgl_entry007`, `jurusan007`) VALUES
(1, '121111', 'dsd', 'sdds', 'dsd', '2024-11-19', 'dsd', '2024-11-14 06:18:03', 'sdsdsd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan007`
--

CREATE TABLE `tbl_laporan007` (
  `id_laporan007` int(11) NOT NULL,
  `judul_laporan007` varchar(222) DEFAULT NULL,
  `deskripsi_laporan007` varchar(22) DEFAULT NULL,
  `tgl_laporan007` date DEFAULT NULL,
  `status_laporan007` varchar(232) DEFAULT NULL,
  `tgl_entry007` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_laporan007`
--

INSERT INTO `tbl_laporan007` (`id_laporan007`, `judul_laporan007`, `deskripsi_laporan007`, `tgl_laporan007`, `status_laporan007`, `tgl_entry007`) VALUES
(1, 'rgrfd', 'fgfg', '2024-11-18', 'fgfd', '2024-11-14 14:25:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa007`
--

CREATE TABLE `tbl_mahasiswa007` (
  `id_mahasiswa007` int(11) NOT NULL,
  `nim007` int(11) DEFAULT NULL,
  `nama_mhs007` varchar(30) DEFAULT NULL,
  `tempat_lahir007` varchar(30) DEFAULT NULL,
  `tgl_lahir007` date DEFAULT NULL,
  `alamat007` text DEFAULT NULL,
  `nohp007` varchar(20) DEFAULT NULL,
  `jurusan007` varchar(30) DEFAULT NULL,
  `tgl_entry007` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mahasiswa007`
--

INSERT INTO `tbl_mahasiswa007` (`id_mahasiswa007`, `nim007`, `nama_mhs007`, `tempat_lahir007`, `tgl_lahir007`, `alamat007`, `nohp007`, `jurusan007`, `tgl_entry007`) VALUES
(1, 23110007, 'Sulaiman', 'Pekanbaru', '2020-07-23', 'JL. Balam', '083435454566', 'Manajemen Informatika', '2024-11-14 13:37:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dosen007`
--
ALTER TABLE `tbl_dosen007`
  ADD PRIMARY KEY (`id_dosen007`);

--
-- Indeks untuk tabel `tbl_laporan007`
--
ALTER TABLE `tbl_laporan007`
  ADD PRIMARY KEY (`id_laporan007`);

--
-- Indeks untuk tabel `tbl_mahasiswa007`
--
ALTER TABLE `tbl_mahasiswa007`
  ADD PRIMARY KEY (`id_mahasiswa007`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dosen007`
--
ALTER TABLE `tbl_dosen007`
  MODIFY `id_dosen007` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_laporan007`
--
ALTER TABLE `tbl_laporan007`
  MODIFY `id_laporan007` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa007`
--
ALTER TABLE `tbl_mahasiswa007`
  MODIFY `id_mahasiswa007` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 08.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibsrsys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ibs`
--

CREATE TABLE `table_ibs` (
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rm` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `ruangan` varchar(25) NOT NULL,
  `vicite` varchar(25) NOT NULL,
  `asa` varchar(25) NOT NULL,
  `tanda` varchar(25) NOT NULL,
  `libat` varchar(25) NOT NULL,
  `operasi` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `wlaksana` int(10) NOT NULL,
  `wselesai` int(10) NOT NULL,
  `jadwalop` int(10) NOT NULL,
  `telat` varchar(25) NOT NULL,
  `asalpasien` varchar(25) NOT NULL,
  `dokterop` varchar(50) NOT NULL,
  `anestesi` varchar(50) NOT NULL,
  `janestesi` varchar(11) NOT NULL,
  `obat` varchar(25) NOT NULL,
  `scor` varchar(25) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_ibs`
--

INSERT INTO `table_ibs` (`id_pasien`, `tanggal`, `rm`, `nama`, `tgl_lahir`, `umur`, `jk`, `ruangan`, `vicite`, `asa`, `tanda`, `libat`, `operasi`, `diagnosa`, `klasifikasi`, `jaminan`, `wlaksana`, `wselesai`, `jadwalop`, `telat`, `asalpasien`, `dokterop`, `anestesi`, `janestesi`, `obat`, `scor`, `ket`, `catatan`) VALUES
(52, '2022-06-15', '778866', 'Abraham Randa', '2022-06-15', 0, 'Laki-laki', 'S1-SI', 'IBS', '1', 'Tidak', 'Tidak', 'stt', 'ganglion', 'Medium', '2', 12, 12, 12, 'Dokter anestesi Telat', 'Rumah Sakir Rs Yos Sudars', 'dr.I piet Iskandar,MD,MS,FINANCS', 'dr.Edi Widodo,Sp.An', 'Umum', 'Cefotaxime', '10', 'Negative', ''),
(63, '2022-06-15', '5555555', ' Simon Dule', '2022-06-01', 25, 'Laki-laki', 'ADE-IRMA', 'IBS', '1', 'Tidak', 'Tidak', 'stt', 'ganglion', 'Medium', '2', 12, 12, 12, 'Dokter anestesi Telat', 'Pasus', 'dr.I piet Iskandar,MD,MS,FINANCS', 'dr.Edi Widodo,Sp.An', 'Lokal', 'ceftriaxone', '1', 'Negative', ''),
(64, '2022-06-16', '5555', '  Dalmantius Ano Pati', '2022-07-10', 10, 'Perempuan', 'S1-Ti', 'Ruangan', '1', 'Tidak', 'Tidak', 'stt', 'ganglion', 'Minor', '1', 0, 3, 0, 'Dokter anestesi Telat', 'Pasus', 'dr.I piet Iskandar,MD,MS,FINANCS', 'dr.Rinal efendi,Sp.An', 'Lokal', 'mmmmmm', '10', 'Negative', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`password`);

--
-- Indeks untuk tabel `table_ibs`
--
ALTER TABLE `table_ibs`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_ibs`
--
ALTER TABLE `table_ibs`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

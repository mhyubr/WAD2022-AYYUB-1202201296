-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 09.03
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_ayyub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ayyub`
--

CREATE TABLE `user_ayyub` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_ayyub`
--

INSERT INTO `user_ayyub` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(8, 'sdsadasd', 'mhyubr@student.telkomuniversity.ac.id', '$2y$10$YFBvAFv9zXEhAS3yRlTMAefsrB/xGorle/BRTxU68fKCa24/thlre', '432432'),
(9, 'adasda', 'muhammadayyub969@gmail.com', '$2y$10$9Z7E0OCGnvucO4Pz.WYcaOa9hjbH98hJIAdalaPV0JG6RmtPXmp7q', '23121');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_ayyub`
--
ALTER TABLE `user_ayyub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_ayyub`
--
ALTER TABLE `user_ayyub`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

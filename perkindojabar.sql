-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Sep 2018 pada 15.58
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkindojabar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kta`
--

CREATE TABLE `kta` (
  `id` int(11) NOT NULL,
  `npwp` varchar(256) NOT NULL,
  `nama_bu` varchar(256) NOT NULL,
  `nama_pemohon` varchar(256) NOT NULL,
  `domisili` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nohp` varchar(256) NOT NULL,
  `a1` varchar(256) DEFAULT NULL,
  `a2` varchar(256) DEFAULT NULL,
  `a3` varchar(256) DEFAULT NULL,
  `a4` varchar(256) DEFAULT NULL,
  `a5` varchar(256) DEFAULT NULL,
  `a6` varchar(256) DEFAULT NULL,
  `catatan` varchar(256) DEFAULT NULL,
  `jenis` enum('a','b','c','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kta`
--

INSERT INTO `kta` (`id`, `npwp`, `nama_bu`, `nama_pemohon`, `domisili`, `email`, `nohp`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `catatan`, `jenis`) VALUES
(1, '112-2349210-332', 'PT. Atomic Dollars', 'Dhafa Kurniawan', 'Bandung', 'dhafaggtq@gmail.com', '083843673663', '2018-09-05', '2018-09-14', '2018-09-20', '2018-09-29', '2018-10-04', '2018-09-27', 'NANDATO', 'a'),
(2, 'asfwf', 'asfasf', 'asfas', 'fasafa', 'sfasfas', 'fasfsa', '2018-09-12', NULL, NULL, NULL, NULL, NULL, '', 'a'),
(3, '12411214', 'asdawfa', 'asfwa', 'wafasf', 'awfasf', '12124124', '2018-09-10', NULL, NULL, NULL, NULL, NULL, NULL, 'a'),
(4, '12411214', 'asdawfa', 'asfwa', 'wafasf', 'awfasf', '12124124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a'),
(5, '12411214', 'asdawfa', 'asfwa', 'wafasf', 'awfasf', '12124124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a'),
(6, 'wad2 asdd2 22', 'asdd22', 'asfas2', 'asd2fa', 'sd2d3a', 'f2f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbujk`
--

CREATE TABLE `sbujk` (
  `id` int(11) NOT NULL,
  `npwp` varchar(256) NOT NULL,
  `nama_bu` varchar(256) NOT NULL,
  `nama_pemohon` varchar(256) NOT NULL,
  `domisili` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nohp` varchar(256) NOT NULL,
  `b1` varchar(256) DEFAULT NULL,
  `b2` varchar(256) DEFAULT NULL,
  `b3` varchar(256) DEFAULT NULL,
  `b4` varchar(256) DEFAULT NULL,
  `b5` varchar(256) DEFAULT NULL,
  `b6` varchar(256) DEFAULT NULL,
  `b7` varchar(256) DEFAULT NULL,
  `b8` varchar(256) DEFAULT NULL,
  `b9` varchar(256) DEFAULT NULL,
  `b10` varchar(256) DEFAULT NULL,
  `b11` varchar(256) DEFAULT NULL,
  `catatan` varchar(256) DEFAULT NULL,
  `jenis` enum('a','b','c','d') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sbujk`
--

INSERT INTO `sbujk` (`id`, `npwp`, `nama_bu`, `nama_pemohon`, `domisili`, `email`, `nohp`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `catatan`, `jenis`) VALUES
(1, '12094012', 'PT. Saniputra Group', 'Alfian Saniputra', 'Bandung', 'alfiansaniputra77@gmail.com', '1248024021', '2018-08-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$DE2tFvASVdxggGrPCRZT9OubemA3bwcNDcJOfiDIwHRkihq5LHbmy', NULL, '2018-08-30 23:42:52', '2018-08-30 23:42:52', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kta`
--
ALTER TABLE `kta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbujk`
--
ALTER TABLE `sbujk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kta`
--
ALTER TABLE `kta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbujk`
--
ALTER TABLE `sbujk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

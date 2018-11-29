-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2018 at 01:13 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fizkantinz`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama_jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Paket_keahlian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kaprog_jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `Nama_jurusan`, `Paket_keahlian`, `Kaprog_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'Bisnis dan Manajemen', 'Muhammad Nurrohman, S.pd.'),
(2, 'Akuntansi dan Lembaga Keuangan', 'Bisnis dan Manajemen', 'Dra. Hj. Syifa'),
(3, 'Otomatisasi Tata Kelola Perkantoran', 'Bisnis dan Manajemen', 'Dra. Reny Ratnawati Basyariah Amin , MM'),
(4, 'Bisnis Daring Pemasaran', 'Bisnis dan Manajemen', 'Ahmad Fathurrohman, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan_id` int(10) UNSIGNED NOT NULL,
  `Jumlah_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `Nama_kelas`, `Jurusan_id`, `Jumlah_siswa`) VALUES
(1, 'XI - RPL', 1, 36),
(2, 'X - AKL', 2, 35);

-- --------------------------------------------------------

--
-- Table structure for table `label_laporans`
--

CREATE TABLE `label_laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `label_laporans`
--

INSERT INTO `label_laporans` (`id`, `Label`) VALUES
(1, 'Pemaksaan'),
(2, 'Tidak Melayani Dengan Baik'),
(3, 'Makanan/Minuman Tidak Layak');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` enum('Pending','Terkirim','Diterima') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Siswa_id` int(10) UNSIGNED NOT NULL,
  `Toko_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `Label`, `Deskripsi_laporan`, `Status`, `Siswa_id`, `Toko_id`, `created_at`, `updated_at`) VALUES
(6, 'Pemaksaan', 'Toko ini memaksa saya untuk membeli makanan. Saya dipaksa padahal saya tidak mau.', 'Diterima', 4, 1, '2018-11-27 07:28:16', '2018-11-27 07:33:18'),
(7, 'Pemaksaan', 'Toko ini memaksa saya untuk membeli makanan', 'Terkirim', 4, 1, '2018-11-27 22:20:57', '2018-11-27 22:21:26'),
(8, 'Tidak Melayani Dengan Baik', 'Toko ini tidak melayani dengan baik', 'Terkirim', 4, 1, '2018-11-27 22:21:13', '2018-11-27 22:21:28'),
(9, 'Pemaksaan', 'Lorem ipsum dolor sit amet', 'Diterima', 6, 1, '2018-11-28 03:55:18', '2018-11-28 03:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_26_060425_create_jurusans_table', 1),
(4, '2018_11_26_060443_create_kelas_table', 1),
(5, '2018_11_26_060454_create_siswas_table', 1),
(6, '2018_11_26_060544_create_label_laporans_table', 1),
(7, '2018_11_26_060951_create_tokos_table', 1),
(8, '2018_11_26_080008_create_laporans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIS` int(11) NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kelas_id` int(10) UNSIGNED NOT NULL,
  `Jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `NIS`, `Nama`, `Kelas_id`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Alamat`, `Status`) VALUES
(4, 11337, 'Romadhan Edy Prasetyo', 1, 'Laki-laki', 'Jakarta', '2002-11-17', 'Islam', 'Jalan AMD XII RT 004 RW 02 NO.35F, Makasar, Jakarta Timur', 'Aktif'),
(5, 11307, 'Agung Mubarok', 1, 'Laki-laki', 'Jakarta', '2001-05-08', 'Islam', 'Jalan SMEA 6', 'Aktif'),
(6, 12345, 'Pak Aroh', 2, 'Laki-laki', 'Jakarta', '2222-02-22', 'Islam', 'Jalan-jalan', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan_id` int(10) UNSIGNED NOT NULL,
  `Penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `Nama_toko`, `Jurusan_id`, `Penanggung_jawab`) VALUES
(1, 'Cyberfood', 1, 'Muhammad Nurrohman, S.pd.'),
(2, 'AKL Food', 2, 'Dra. Hj. Syifa'),
(3, 'OTP Food', 3, 'Dra. Reny Ratnawati Basyariah Amin , MM'),
(4, 'BDP Food', 4, 'Ahmad Fathurrohman, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswas_id` int(10) UNSIGNED NOT NULL,
  `level` enum('Siswa','Admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `siswas_id`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan', 'romadhanedy@outlook.com', NULL, '$2y$10$lpNJRe/PT05OrYtiOZgotOWTyYhcPIXkV0skomraMLGHWPeaVkPbW', 0, 'Admin', 'g0yuyJzZd5Gzcj18JlvcoqD6uYIhZLuEAMwG3Rr0rfFRPm92qkbuJvcLKqGD', '2018-11-26 04:07:39', '2018-11-26 04:07:39'),
(5, 'Romadhan Edy Prasetyo', '11337@fizkantinz.ga', NULL, '$2y$10$XFWC3PPMendrYpRp893CpuTBlFpuCoNsZszDp.O48x5ch1005nCQm', 4, 'Siswa', 'FIrHQK2RGDpkm4LAwU7gdUs89jWe4FtzKTCWDTUqRxqIxRMzESRzbctBjlfB', '2018-11-27 06:52:54', '2018-11-27 06:52:54'),
(10, 'Agung Mubarok', '11307@fizkantinz.ga', NULL, '$2y$10$kXoiFseeqHrVPKywzVedtOXkk0WrvQoE88VzZizpk0GCS2mBmFfQe', 5, 'Siswa', NULL, '2018-11-27 16:47:50', '2018-11-27 16:47:50'),
(11, 'Pak Aroh', '12345@fizkantinz.ga', NULL, '$2y$10$1iTSqd9nSyeNdUnndLKndu6KMLgcATBY04B5I7N7K9/Ywh/pEJkIC', 6, 'Siswa', NULL, '2018-11-28 03:54:13', '2018-11-28 03:54:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_jurusan_id_foreign` (`Jurusan_id`);

--
-- Indexes for table `label_laporans`
--
ALTER TABLE `label_laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_siswa_id_foreign` (`Siswa_id`),
  ADD KEY `laporans_toko_id_foreign` (`Toko_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswas_kelas_id_foreign` (`Kelas_id`),
  ADD KEY `siswas_nis_index` (`NIS`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tokos_jurusan_id_foreign` (`Jurusan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `label_laporans`
--
ALTER TABLE `label_laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_jurusan_id_foreign` FOREIGN KEY (`Jurusan_id`) REFERENCES `jurusans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_siswa_id_foreign` FOREIGN KEY (`Siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporans_toko_id_foreign` FOREIGN KEY (`Toko_id`) REFERENCES `tokos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_kelas_id_foreign` FOREIGN KEY (`Kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tokos`
--
ALTER TABLE `tokos`
  ADD CONSTRAINT `tokos_jurusan_id_foreign` FOREIGN KEY (`Jurusan_id`) REFERENCES `jurusans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

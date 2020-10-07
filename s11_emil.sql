-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 04:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s11_emil`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotik`
--

CREATE TABLE `apotik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_apotik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apotik`
--

INSERT INTO `apotik` (`id`, `code`, `nama_apotik`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '0001', 'PT. Kimia Farma Cabang Takoma - Ternate', 'Kel. Takoma', '0921873848', '2020-08-29 03:40:46', '2020-08-29 00:54:31'),
(2, '0002', 'Apotik Kimia Farma - Bastiong Talangame', 'Kel. Bastiong Talangame', '092183748', '2020-08-29 00:50:49', '2020-08-29 00:54:12'),
(3, '0003', 'Apotik Kimia Farma - Mangga Dua', 'Kel. Mangga Dua Ternate', '0921783482', '2020-08-29 00:55:36', '2020-08-29 00:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_07_19_171010_delete_users_table', 2),
(8, '2020_07_19_171221_create_apotik_table', 3),
(9, '2020_07_19_171307_create_pengguna_table', 4),
(10, '2020_07_19_171500_create_obat_table', 5),
(11, '2020_07_19_171631_create_supply_table', 6),
(12, '2020_07_19_171646_create_penjualan_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `code`, `nama_obat`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(3, '0001', 'Amoxcilin 10 mg', 'Organik', 30000, '2020-08-29 14:42:04', '2020-08-30 20:54:29'),
(4, '0002', 'Paramex 10 mg', 'Organik', 15000, '2020-08-30 20:54:03', '2020-08-30 20:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apotik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `apotik_id`, `email`, `password`, `nama_lengkap`, `no_telp`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin@localhost', '$2y$10$zu351grQxTk0AjrDDC740.Gc3GSpfzvZVLvql5jlIR2H5Q4B9OqlG', 'Administrator', '085298249823', 1, '2020-08-29 03:04:12', '2020-08-29 00:27:12'),
(7, 1, 'mfs.sangadji@gmail.com', '$2y$10$MtRdQG4Fbu5uBJgT8jZepur6h3YY9.LK6xd3WuhunkLysXwpIzyGW', 'MF Sangadji', '085298249823', 3, '2020-08-29 00:28:43', '2020-08-29 00:28:43'),
(8, 1, 'emil@gmail.com', '$2y$10$eJtYFQsaVNj.HsBXH3fSgui6hILyhnaO4InvMO.9yPaIHdZmG79m.', 'Emil Fatratila', '085298249821', 2, '2020-08-29 00:29:27', '2020-08-29 00:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `apotik_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `obat_id`, `apotik_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(4, 4, 3, 3, '2020-08-30 21:05:05', '2020-08-30 21:05:05'),
(5, 3, 3, 23, '2020-08-30 21:05:11', '2020-08-30 21:05:11'),
(6, 4, 3, 23, '2020-08-31 04:10:42', '2020-08-31 04:10:42'),
(7, 4, 3, 23, '2020-08-31 04:10:43', '2020-08-31 04:10:43'),
(8, 4, 3, 11, '2020-08-31 04:10:49', '2020-08-31 04:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `apotik_id` bigint(20) UNSIGNED NOT NULL,
  `stok` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `obat_id`, `apotik_id`, `stok`, `created_at`, `updated_at`) VALUES
(6, 3, 3, 10, '2020-08-30 20:57:42', '2020-08-30 20:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotik`
--
ALTER TABLE `apotik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_apotik_id_foreign` (`apotik_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_obat_id_foreign` (`obat_id`),
  ADD KEY `penjualan_apotik_id_foreign` (`apotik_id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supply_obat_id_foreign` (`obat_id`),
  ADD KEY `supply_apotik_id_foreign` (`apotik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apotik`
--
ALTER TABLE `apotik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_apotik_id_foreign` FOREIGN KEY (`apotik_id`) REFERENCES `apotik` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_apotik_id_foreign` FOREIGN KEY (`apotik_id`) REFERENCES `apotik` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penjualan_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_apotik_id_foreign` FOREIGN KEY (`apotik_id`) REFERENCES `apotik` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supply_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

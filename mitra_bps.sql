-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 05:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra_bps`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `beban_anggaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `bulan`, `tanggal_mulai`, `tanggal_akhir`, `beban_anggaran`, `volume_total`, `satuan`, `harga_satuan`, `created_at`, `updated_at`) VALUES
(1, 'Pendataan', 'September', '2022-09-17', '2022-09-19', '2905.QMA.006', '1 tahun', 'RM', '28000', NULL, NULL),
(2, 'Pendataan wilayah', 'September', '2022-02-12', '2022-02-24', '2705.QMA.006', '1 tahun', 'RM', '20000', NULL, NULL),
(3, 'Belanja Barang', 'September', '2022-03-23', '2022-03-30', '0405.QMA.006', '1.0 paket', 'RM', '140000', NULL, NULL),
(4, 'Belanja Langganan Listrik', 'September', '2022-01-12', '2022-01-19', '0205.QMA.006', '6.0 O-B', 'RM', '24000', NULL, NULL),
(5, 'Belanja Langganan Telepon', 'September', '2022-09-19', '2022-09-28', '2905.QMA.006', '1 tahun', 'RM', '40000', NULL, NULL),
(6, 'Pendataan', 'Februari', '2022-08-04', '2022-08-26', '45', '40', 'Brimob', '7000', '2022-08-03 18:30:47', '2022-08-03 18:30:47'),
(7, 'adad', 'April', '2022-08-30', '2022-09-01', 'da', 'da', 'ad', 'ad', '2022-08-03 23:38:34', '2022-08-03 23:38:34'),
(8, 'fas', 'November', '2022-10-13', '2022-10-19', 'dfnb', 'jb', 'b', 'jb', '2022-08-03 23:42:20', '2022-08-03 23:42:20'),
(10, 'dd', 'Oktober', '2022-08-11', '2022-09-01', 'da', 'ad', 'ad', 'ad', '2022-08-07 18:59:31', '2022-08-07 18:59:31'),
(11, 'dd', 'Oktober', '2022-08-11', '2022-09-01', 'da', 'ad', 'ad', 'ad', '2022-08-07 19:01:35', '2022-08-07 19:01:35'),
(12, 'nyobak', 'Oktober', '2022-08-11', '2022-08-26', 'b', 'k', 'k', '7000', '2022-08-09 18:52:51', '2022-08-09 18:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_mitra`
--

CREATE TABLE `kegiatan_mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan_id` bigint(20) UNSIGNED NOT NULL,
  `mitra_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_perjanjian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan_mitra`
--

INSERT INTO `kegiatan_mitra` (`id`, `kegiatan_id`, `mitra_id`, `nilai_perjanjian`, `target`, `created_at`, `updated_at`) VALUES
(1, 8, 3, 'qma.daad21.313', '', '2022-08-02 03:44:29', '2022-08-02 03:44:29'),
(2, 8, 4, 'qma.daad21.313', '', '2022-08-02 03:44:29', '2022-08-02 03:44:29'),
(5, 2, 1, 'Rp.10.000', '90', '2022-08-06 14:23:00', '2022-08-06 14:23:00'),
(6, 2, 1, 'Rp.10.000', '90', '2022-08-06 14:23:05', '2022-08-06 14:23:05');

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
(79, '2022_07_28_031807_add_role_to_users', 1),
(93, '2022_07_28_060447_rename_isadmin_column_to_role', 2),
(150, '2014_10_12_100000_create_password_resets_table', 3),
(151, '2019_08_19_000000_create_failed_jobs_table', 3),
(152, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(153, '2022_07_18_062528_create_mitra_table', 3),
(154, '2022_07_18_062542_create_kegiatan_table', 3),
(155, '2022_07_25_021945_create_users_table', 3),
(156, '2022_07_28_063819_rename_isadmin_column_to_role', 3),
(157, '2022_07_28_070536_add_role_to_users', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekening_bri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `pekerjaan`, `alamat`, `desa`, `kecamatan`, `no_hp`, `rekening_bri`, `created_at`, `updated_at`) VALUES
(1, 'Agus wahyudi', 'wiraswasta', 'Dusun yyy', 'Karangpakis', 'Kabuh', '082381239191', '341485185815818', NULL, NULL),
(2, 'Agus sumarso', 'petani', 'Dusun yyy', 'Ploso', 'ploso', '084221239191', '342385185815818', NULL, NULL),
(3, 'Karso', 'wiraswasta', 'Dusun yyy', 'xyz', 'peterongan', '082381239744', '542485185815818', NULL, NULL),
(4, 'Sumarni', 'wirausaha', 'Dusun yyy', 'xyz', 'ploso', '087781239191', '341485185815818', NULL, NULL),
(5, 'Burhan', 'dukun', 'Dusun yyy', 'xyz', 'Kabuh', '082381111191', '341477785815818', NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@a.com', '2022-08-03 18:26:53', '$2y$10$hbZyyqlV5co8RvZUC2NzMO4XstOLQO2kc11jW3p3ovZxttRapQqq6', NULL, 1, '2022-08-03 18:26:53', '2022-08-03 18:26:53'),
(2, 'user', 'user@a.com', '2022-08-03 18:26:54', '$2y$10$KhewE51t5cQRUFSkVeyEU.7v/Yrtj2hgMiu6L9Yl7nzDFVyuEiDU2', NULL, 0, '2022-08-03 18:26:54', '2022-08-03 18:26:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idKegiatan_kegiatan_mitra` (`kegiatan_id`),
  ADD KEY `fk_idMitra_Kegiatan_mitra` (`mitra_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  ADD CONSTRAINT `fk_idKegiatan_kegiatan_mitra` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_idMitra_Kegiatan_mitra` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

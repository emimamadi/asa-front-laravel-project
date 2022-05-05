-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asa_reg`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_30_100107_user', 1),
(6, '2022_04_30_101348_drop_user_table', 1),
(7, '2022_05_03_150327_add_mobile_address_to_users_table', 1),
(8, '2022_05_05_062504_add_vault_to_users_table', 2),
(9, '2022_05_05_083706_create_products_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
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
  `mobile` bigint(15) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vault` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `vault`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lk', 'lk@gmail.com', NULL, '$2y$10$UZbR11K/rq9tkr.GCr10BuzF0prOwQbBrFPmlvvLHMBVK9t4AI0Tq', NULL, NULL, NULL, NULL, '2022-05-03 11:34:55', '2022-05-03 11:34:55'),
(2, 'sd', 'sd@gmail.com', NULL, '$2y$10$YjJYwz1vcoXYEXZDg4vvauZtzaC4MQDqx6i6lRfi1AXbuPbtf6vp6', NULL, NULL, NULL, NULL, '2022-05-03 11:36:01', '2022-05-03 11:36:01'),
(3, 'oo', 'oo@gmail.com', NULL, '$2y$10$xkQwI/TDwiw7h9PEXKc4UO54NSt9W78dKHzM5e3U/ZlLrQQTp4Ina', NULL, NULL, NULL, NULL, '2022-05-03 11:40:09', '2022-05-03 11:40:09'),
(4, 'iii', 'ii@gmail.com', NULL, '$2y$10$94kQWxXFQuwyPgbotAjSq.CxrmlfQOIgib3z/3.S4rwGoVFO6XdVW', NULL, NULL, NULL, NULL, '2022-05-03 11:43:28', '2022-05-03 11:43:28'),
(5, 'aa', 'aa@gmail.com', NULL, '15151', 48484, 'sadds', NULL, NULL, '2022-05-03 11:47:55', '2022-05-03 11:47:55'),
(6, 'xx', 'xx@gmail.com', NULL, '$2y$10$iGpSwt7UGuD5ST11T8Z2TOJZYJsg8EIycH98AtGTTvmniQp6qE1F.', 51515, 'dfsdsd', NULL, NULL, '2022-05-03 11:48:56', '2022-05-03 11:48:56'),
(7, 'admin', 'admin', NULL, '$2y$10$wMvgZ4CXPm/ZhtDr3YnYEuH7QQ0RHlFO5QBki6462QWAyrFrZMbB2', 51515, 'dsaasd', NULL, NULL, '2022-05-03 11:49:34', '2022-05-03 11:49:34'),
(8, 'pp', 'pp@gmail.com', NULL, '$2y$10$QhQmPeQtS6QhZfOQpZ7ROejDyuSYJvzrDTjSPlOCPnV7Bhulfooxq', 1515, 'lplplp', NULL, NULL, '2022-05-03 12:13:29', '2022-05-03 12:13:29'),
(9, 'cc', 'cc@gmail.com', NULL, '$2y$10$LBwfKLiPTxNeYbnE6nR.me8IM55.rae/m5CqnShMueEAS.5n01eUG', 1515, 'sdss', NULL, NULL, '2022-05-03 12:54:17', '2022-05-03 12:54:17'),
(10, 'mm', 'mm@gmail.com', NULL, '$2y$10$khX82nZ7awXgpvI9W04bi.c6Oe1PhSH29ahZttNN.BdEAzgR1jCCO', 1515, 'sddfs', NULL, NULL, '2022-05-03 12:57:55', '2022-05-03 12:57:55'),
(11, 'bb', 'bb@gmail.com', NULL, '$2y$10$N81dfAguQVsqFH4FjJn35.77lNNct.M6MVNZNqXrQLURA/Azbg6vq', 61515, 'ddssd', NULL, NULL, '2022-05-03 13:03:40', '2022-05-03 13:03:40'),
(12, 'mamad888', 'mamad85@gmail.com', NULL, '$2y$10$2xV1/rEaIbCH5f4DT4SeeevwQQIIlhNkrL7nxEGWoa21emHWSHCsG', 55515151, 'dsdadads', NULL, NULL, '2022-05-03 13:10:13', '2022-05-03 13:10:13'),
(13, 'vv', 'vv@gmail.com', NULL, '$2y$10$omspFBovRcXpj39BKeVOvuPsmn4cy0zQll9jK4oIlIFWIyOaVw3W2', 1515, 'mkmkm', NULL, NULL, '2022-05-03 13:34:10', '2022-05-03 13:34:10'),
(14, 'ali', 'ali@gmail.com', NULL, '$2y$10$m/MZBSm3mIYm7aKihQe2COpiQzA2u7A0yKOc90hjV9OVpZJd0yzFm', 91511515, 'jndajsndjasj', NULL, NULL, '2022-05-04 03:53:01', '2022-05-04 03:53:01'),
(15, 'john', 'taghi@gmail.com', NULL, '$2y$10$FMCkxGjMSKEGidRh42Y1yOrCfuyqCEVx9uUaTWGTO69RVTjIBadrm', 2591551458848, 'نئنئنئنئنن', NULL, NULL, '2022-05-04 14:24:32', '2022-05-04 14:24:32'),
(16, 'kk', 'kk@gmail.com', NULL, '$2y$10$64Kpfe16iqEY4VEfbDVHLORByzEmnistpwNm330SzyQ8CXm5akyrm', 2, 'dfsdds', NULL, NULL, '2022-05-05 00:36:21', '2022-05-05 00:36:21'),
(17, 'dd', 'dd@gmail.com', NULL, '$2y$10$O6O1a8mL7IXhYKHoE6fjouSK6nYy9GODgfRKbiQ.S426cBaEiFnAa', 2, 'dfsd', NULL, NULL, '2022-05-05 00:38:00', '2022-05-05 00:38:00'),
(18, 'sm', 'sm@gmail.com', NULL, '$2y$10$7x.FWtbGVTdZRCuHlhnT4uFmJhrnAjRSRU4DMsfzk3U9KOV7qF3aC', 51515115, 'dsdfsdf', 1016, NULL, '2022-05-05 01:52:38', '2022-05-05 03:48:41');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 11:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `status`, `main_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Article 1', '<h3><strong>Test Article 1</strong></h3>', 'published', 'public/article_images/Z4UakCZ0kZIZOZIjG5xnzDBrgIkEV0cGi6ocQ8XK.jpeg', NULL, '2019-09-08 18:00:42', '2019-09-08 18:00:42'),
(2, 'Article 2', '<p><strong>Test Article 2</strong></p>', 'published', 'public/article_images/4KLCEJy51cy1x7lS4TlNVlLyXLe4t203hoKtJKG3.jpeg', NULL, '2019-09-08 18:01:04', '2019-09-08 18:01:04'),
(3, 'Article 3', '<p><strong>Test Article 3</strong></p>', 'draft', 'public/article_images/AC4PjgN2hGb3BvaZFFwwRkpSBt27oMwfS7lbSjrN.jpeg', NULL, '2019-09-08 18:01:18', '2019-09-08 18:01:18'),
(4, 'Article 4', '<p><strong>Test Article 4</strong></p>', 'published', 'public/article_images/vpngeAeIgFFJxPzkCn6S9EAQE7I6vGhSsALGyyGo.jpeg', NULL, '2019-09-08 18:01:35', '2019-09-08 18:01:35'),
(5, 'Article 5', '<p><strong>Test Article 5</strong></p>', 'published', 'public/article_images/z59JeZ2uASNGx9WAots0sLRZv6F3cX3ZBJzA1hrD.jpeg', NULL, '2019-09-08 18:01:51', '2019-09-08 18:01:51'),
(6, 'Article 6', '<p><strong>Test Article 6</strong></p>', 'published', 'public/article_images/oDORinrba3a3RMxeQ5Cn4IvjN03JVPqbdSZsv6jO.jpeg', NULL, '2019-09-08 18:02:11', '2019-09-08 18:02:11'),
(7, 'Test Article 7', '<p><strong>Test Article 7</strong></p>', 'published', 'public/article_images/zETuum4f3GZWI2ELz0Glan9EvVPUKO98zRv2kLnC.jpeg', NULL, '2019-09-08 18:02:50', '2019-09-08 18:02:50'),
(8, 'Test Article 8', '<p><strong>Test Article 8</strong></p>', 'published', 'public/article_images/jQqvLToAcgEBY7tv2KrdrcLeIF5ck2qhc9q3YDOk.jpeg', NULL, '2019-09-08 18:03:04', '2019-09-08 18:03:04'),
(9, 'Article 9', '<p><strong>Test Article 9</strong></p>', 'draft', 'public/article_images/SbauyFxwOwGpSWqquOxVNmkTtSwwZoTw64CdPIz7.jpeg', NULL, '2019-09-08 18:03:19', '2019-09-08 18:03:19'),
(10, 'Article 10', '<p><strong>Test Article 10</strong></p>', 'published', 'public/article_images/bEHiGnpCvig1DhEiLuCGBFA0g9r1NReQJu1MYY4D.jpeg', NULL, '2019-09-08 18:03:32', '2019-09-08 18:03:32'),
(11, 'Article 11', '<p><strong>Test Article 11</strong></p>', 'published', 'public/article_images/gbZo8DBJ0CGMwmrdqYV9FSdU5uGMB69y4nGPCeKX.jpeg', NULL, '2019-09-08 18:03:46', '2019-09-08 18:03:46'),
(12, 'Test Article 12', '<p>New Article 12</p>', 'published', 'public/article_images/sEoh2SxRCGZ8L48bpW8ZmQEyF14ox5ZTPwY4dYAO.jpeg', NULL, '2019-09-08 18:13:31', '2019-09-08 18:13:48');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_08_171819_create_articles_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

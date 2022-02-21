-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 06:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 'hoi', 'Black Belt Holder', '0000-00-00 00:00:00', '2022-02-19 12:51:27'),
(2, 'Koalde Agbewole', 'Black Belt Holder', '2022-02-19 12:51:27', '2022-02-19 12:51:27'),
(3, 'Bolatioto Bola', 'big brin', '2022-02-20 10:48:38', '2022-02-20 10:48:38'),
(4, 'cimelo', 'kemio', '2022-02-20 10:50:43', '2022-02-20 10:50:43'),
(5, 'name', 'bi', '2022-02-20 10:54:52', '2022-02-20 10:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_book_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_book_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `description`, `main_book_cat_id`, `sub_book_cat_id`, `author_id`, `created_at`, `updated_at`) VALUES
(4, 'nj', 'C:\\xampp\\tmp\\php50E3.tmp', 'nh', 1, 1, 1, '2022-02-20 01:55:52', '2022-02-20 01:55:52'),
(5, 'nh', '1.JPG', '12', 1, 1, 1, '2022-02-20 03:22:48', '2022-02-20 03:22:48'),
(7, 'nh', '1.JPG', '12', 1, 1, 1, '2022-02-20 03:36:45', '2022-02-20 03:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `dept`, `created_at`, `updated_at`) VALUES
(8, 'biolology', '2022-02-06 21:06:53', '2022-02-18 09:27:26'),
(9, 'Physics', '2022-02-06 21:08:21', '2022-02-06 21:08:21'),
(10, 'Che', '2022-02-06 22:16:50', '2022-02-06 22:16:50'),
(11, 'Jean', '2022-02-06 22:17:48', '2022-02-06 22:17:48'),
(12, 'not', '2022-02-06 22:32:00', '2022-02-06 22:32:00'),
(13, 'mhy', '2022-02-06 22:33:10', '2022-02-06 22:33:10'),
(14, 'bolo', '2022-02-18 10:40:48', '2022-02-18 10:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculty`, `created_at`, `updated_at`) VALUES
(5, 'Socal', '2022-02-06 22:18:03', '2022-02-06 22:18:03'),
(6, 'jio', '2022-02-06 22:33:25', '2022-02-06 22:33:25');

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
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(5, '500', '2022-01-26 14:04:50', '2022-01-26 14:04:50'),
(6, '200', '2022-02-06 21:43:38', '2022-02-06 21:43:38'),
(7, '100', '2022-02-06 21:49:41', '2022-02-06 21:49:41'),
(8, '100', '2022-02-06 21:49:55', '2022-02-06 21:49:55'),
(9, '100', '2022-02-06 22:01:19', '2022-02-06 22:01:19'),
(10, '2000', '2022-02-06 22:04:52', '2022-02-18 10:48:07'),
(11, '100', '2022-02-06 22:06:22', '2022-02-06 22:06:22'),
(12, '100', '2022-02-06 22:06:23', '2022-02-06 22:06:23'),
(13, '100', '2022-02-06 22:08:17', '2022-02-06 22:08:17'),
(14, '300', '2022-02-06 22:13:34', '2022-02-06 22:13:34'),
(15, '400', '2022-02-06 22:14:56', '2022-02-06 22:14:56'),
(16, '400', '2022-02-06 22:14:57', '2022-02-06 22:14:57'),
(17, '8099', '2022-02-06 22:21:24', '2022-02-06 22:21:24'),
(18, '900', '2022-02-06 22:22:04', '2022-02-06 22:22:04'),
(19, '900', '2022-02-06 22:22:31', '2022-02-06 22:22:31'),
(20, '10', '2022-02-06 22:22:43', '2022-02-06 22:22:43'),
(21, '10', '2022-02-06 22:23:10', '2022-02-06 22:23:10'),
(22, '10', '2022-02-06 22:23:29', '2022-02-06 22:23:29'),
(23, '100', '2022-02-06 22:25:00', '2022-02-06 22:25:00'),
(25, 'noi', '2022-02-18 10:40:59', '2022-02-18 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `main_book_cats`
--

CREATE TABLE `main_book_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_book_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_book_cats`
--

INSERT INTO `main_book_cats` (`id`, `main_book_cat`, `created_at`, `updated_at`) VALUES
(1, 'No cat', '2022-02-19 12:50:13', '2022-02-19 12:50:13');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_18_102026_create_pays_table', 1),
(6, '2021_11_27_185126_create_main_book_cats_table', 1),
(7, '2021_11_27_185712_create_authors_table', 1),
(8, '2021_11_27_190440_create_sub_book_cats_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2022_01_26_133302_create_depts_table', 4),
(13, '2022_01_26_133900_create_levels_table', 5),
(14, '2022_02_02_074143_create_faculties_table', 6);

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
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `sub_book_cats`
--

CREATE TABLE `sub_book_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_book_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_book_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_book_cats`
--

INSERT INTO `sub_book_cats` (`id`, `sub_book_cat`, `main_book_cat_id`, `created_at`, `updated_at`) VALUES
(1, 'No cat', 1, '2022-02-19 12:51:00', '2022-02-19 12:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_name`, `dept`, `role`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'name', 'emaIL@gmail.com', 'boliu', 'bio', '100', '100', '$2y$10$tALGE/Cjh.O2qdMvI8o2Q.P8KRmsNOzuQTgRQKQHJVqKcJ4bglrsa', NULL, '2022-01-26 12:24:55', '2022-01-26 12:24:55'),
(2, 'name', 'emartIL@gmail.com', 'boliuio', 'bio', '100', '100', '$2y$10$p4bKa7AHWwH1vJtzR8zwWeunzOAVJvvSetdz7koP/pfES/Ev5OFie', NULL, '2022-01-26 12:25:25', '2022-01-26 12:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_main_book_cat_id_foreign` (`main_book_cat_id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_book_cats`
--
ALTER TABLE `main_book_cats`
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
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_book_cats`
--
ALTER TABLE `sub_book_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_book_cats_main_book_cat_id_foreign` (`main_book_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `main_book_cats`
--
ALTER TABLE `main_book_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_book_cats`
--
ALTER TABLE `sub_book_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_main_book_cat_id_foreign` FOREIGN KEY (`main_book_cat_id`) REFERENCES `main_book_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_book_cats`
--
ALTER TABLE `sub_book_cats`
  ADD CONSTRAINT `sub_book_cats_main_book_cat_id_foreign` FOREIGN KEY (`main_book_cat_id`) REFERENCES `main_book_cats` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

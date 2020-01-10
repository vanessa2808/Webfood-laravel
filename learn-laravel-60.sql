-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 08:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn-laravel-60`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_models`
--

CREATE TABLE `backend_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `detail`, `author`, `created_at`, `updated_at`) VALUES
(6, 'rr', '52297904_395037364389175_8166579450884915200_n.jpg', '<p>rr</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 'Vanessa', '2019-10-08 01:47:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Json', '2019-10-09 20:38:27', NULL),
(2, 'Iphone', '2019-10-09 20:43:16', NULL),
(3, 'Oppo', '2019-10-09 20:44:21', NULL);

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
-- Table structure for table `frontend_models`
--

CREATE TABLE `frontend_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(150, '2014_10_12_000000_create_users_table', 1),
(151, '2014_10_12_100000_create_password_resets_table', 1),
(152, '2019_09_16_033917_create_frontend_models_table', 1),
(153, '2019_09_16_034915_create_backend_models_table', 1),
(154, '2019_09_19_033430_create_news_table', 1),
(155, '2019_09_19_033757_add_description_to_news_table', 1),
(156, '2019_09_19_033821_add_image_to_news_table', 1),
(157, '2019_09_19_071519_create_products_table', 1),
(158, '2019_09_19_071714_add_title_to_products_table', 1),
(159, '2019_09_19_071806_add_description_to_products_table', 1),
(160, '2019_09_19_071836_add_image_to_products_table', 1),
(161, '2019_09_19_071919_rename_title_to_products_table', 1),
(162, '2019_09_19_072107_remove_image_to_products_table', 1),
(163, '2019_09_19_072757_add_title_to_news_table', 1),
(164, '2019_09_23_012855_add_price_to_products_table', 2),
(165, '2019_09_23_013042_add_image_to_products_table', 2),
(166, '2019_09_23_013537_create_products_table', 3),
(167, '2019_09_30_075044_add_avatar_to_users_table', 4),
(171, '2019_10_01_023257_create_blog_table', 5),
(172, '2019_10_08_080059_create_categories_table', 6),
(173, '2019_08_19_000000_create_failed_jobs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yenrion9941@gmail.com', '$2y$10$7ZffasuaHM5jROR2TcK9S.C9QnDDc7hRk69G2Wh3F7Wz6UtFtxQy.', '2019-09-21 05:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `created_at`, `updated_at`) VALUES
(30, 'Iphone', 'tainan-02011483364653395-1549012825032.jpg', 'jj', '20000000', '2019-09-27 05:00:23', '2019-09-27 05:53:49'),
(31, 'OppoA71', '60663857_436001600292751_5506733421679869952_o.jpg', '<p><strong>xinh</strong></p>', '20000000', '2019-09-27 05:00:43', '2019-09-30 18:54:28'),
(32, 'Iphone11', 'a-15494560155292126468942-crop-1549456023777907255249.jpg', 'ss', '20000000', '2019-09-30 00:02:54', NULL),
(33, 'Apple11', '52297904_395037364389175_8166579450884915200_n.jpg', '<p>xinh</p>', '2000', '2019-09-30 20:10:49', NULL),
(36, 'Iphone33', '64678050_465151570711087_2199961023006375936_n.jpg', '<p>xinh</p>', '200000', '2019-10-07 02:27:53', '2019-10-18 02:20:50'),
(37, 'chad', '52297904_395037364389175_8166579450884915200_n.jpg', '<p>ff</p>', '20000000', '2019-10-08 02:15:15', NULL),
(38, '44', '52297904_395037364389175_8166579450884915200_n.jpg', '<p>444</p>', '2.000', '2019-10-11 05:32:44', NULL),
(39, 'Iphone', '52297904_395037364389175_8166579450884915200_n.jpg', '<p>xinh</p>', '20000000', '2019-10-26 05:37:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(138, 'User', 'Vanessa Nguyen', '321@gmail.com', NULL, '$2y$10$eqxns17eV2i/dg/bRYpduOv1UxU6RTc3SqiMFqtS2UQ42xyPNPMRi', NULL, '2019-10-14 00:50:01', '2019-10-14 01:47:41', '52297904_395037364389175_8166579450884915200_n.jpg'),
(139, 'admin', 'Buu', 'ntnam1993@gmail.com', NULL, '$2y$10$IoiB9rkx0ul2lQlVVZZvJOqdyJqmASdAvQgAijd8yHY8CaTvkL/Qq', NULL, '2019-10-15 01:51:43', '2019-10-15 01:53:10', '60663857_436001600292751_5506733421679869952_o.jpg'),
(140, 'user', 'Vanessa', 'Vanessa2808@gmail.com', NULL, '$2y$10$k2koOOYg9cmfqidT47E0G.1bYjiWcc.VLqpPzLzc7odfzKi6CKfwq', NULL, '2019-10-18 00:30:42', NULL, '60663857_436001600292751_5506733421679869952_o.jpg'),
(141, NULL, 'Nguyễn Thị Hồng Yến', '33@gmai.com', NULL, '$2y$10$sZJsMu8MUzE9ptgYcuxkZu7BmELAirxllzfCvYByqi/9elY0DAm/e', NULL, '2019-10-23 18:39:12', '2019-10-23 18:39:12', NULL),
(142, NULL, 'Nguyễn Thị Hồng Yến', '12@gmail.com', NULL, '$2y$10$RvVMwY1kYanpRM4YZSlqEeGvJl5YFtvtj5hpvd/oq5mG48nBSLUOW', NULL, '2019-10-23 18:39:21', '2019-10-23 18:39:21', NULL),
(143, NULL, 'rr', '334@gmail.com', NULL, '$2y$10$XaPnhqtY/LLCJ1LbucEkIejc/rGLLG5y0x2E2wj9ZQeCP9bzADEH.', NULL, '2019-10-23 21:47:07', '2019-10-23 21:47:07', NULL),
(144, NULL, 'Nguyễn Thị Hồng Yến', '222@gmail.com', NULL, '$2y$10$u7hrT1QAsjhMhoWYl1Y4ie9eB11PGg/nz3ePWdUauQZmkluuPSXpe', NULL, '2019-10-25 00:17:05', '2019-10-25 00:17:05', NULL),
(145, NULL, 'Nguyễn Thị Hồng Yến', '33333@gmail.com', NULL, '$2y$10$i3XKt60yS3MGLAsa75UUJutUffsUR5tippsxCdIEEYml87E3RmReq', NULL, '2019-10-25 02:03:11', '2019-10-25 02:03:11', NULL),
(146, NULL, 'Quatao', '11@gmail.com', NULL, '$2y$10$lJ2vQNJ1pHUMpa5ysaMJQOGGY4K3Ozdh1X3xtF9xaIghuNDsGZLwG', NULL, '2019-10-25 02:12:29', '2019-10-25 02:12:29', NULL),
(147, NULL, 'Nguyễn Thị Hồng Yến', '0329104015@gmail.com', NULL, '$2y$10$S.s76ABkSZ9W1tBEcE5gou/RzeHTQjTBXgSdWuNZVyEcqrPWfmFMW', NULL, '2019-10-25 17:36:49', '2019-10-25 17:36:49', NULL),
(148, NULL, 'ttt', 'vancuong196@gmail.com', NULL, '$2y$10$Gnd0vmZtnAGAgc6qna4/nuOttzLdgRsFeNkdJGgcvPBYXHL8XLFVa', NULL, '2019-10-28 21:43:46', '2019-10-28 21:43:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_models`
--
ALTER TABLE `backend_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_models`
--
ALTER TABLE `frontend_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `backend_models`
--
ALTER TABLE `backend_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_models`
--
ALTER TABLE `frontend_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

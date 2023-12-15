-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 03:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_22_024232_create_products_table', 1),
(6, '2023_09_22_024447_create_blogs_table', 1),
(7, '2023_09_22_033000_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(7, 'miXqGJWPsLycJvnOMUyPsY6Hjv45Sxtdc9ATKRI4.png', 'saya saya', '<p>lorem ipsum</p>', '2023-10-27 00:07:50', '2023-10-27 00:07:50'),
(8, 'https://via.placeholder.com/400x300.png/00ff88?text=porro', 'Dr.', 'Voluptates impedit quidem commodi. Quisquam possimus dignissimos dignissimos. Tenetur quo ipsa cumque nihil quia nisi exercitationem.', '2023-10-27 00:53:46', '2023-10-27 00:53:46'),
(9, 'https://via.placeholder.com/400x300.png/00aaff?text=soluta', 'Dr.', 'Consequuntur facere minus animi. Quos quod repudiandae ullam voluptatem odio aut non. Iste libero sequi ut odio.', '2023-10-27 00:53:46', '2023-10-27 00:53:46'),
(10, 'https://via.placeholder.com/400x300.png/003366?text=assumenda', 'Dr.', 'Voluptates voluptatibus dicta et quae. Alias veritatis perferendis qui ducimus. Et sapiente nemo sit tenetur maiores ut ad et.', '2023-10-27 00:53:46', '2023-10-27 00:53:46'),
(11, 'https://via.placeholder.com/400x300.png/00aaee?text=quos', 'Prof.', 'Suscipit architecto voluptas tempore eveniet rem accusantium. Sit aut maxime enim inventore. Et sed ut sunt sit non autem cumque.', '2023-10-27 00:53:46', '2023-10-27 00:53:46'),
(12, 'https://via.placeholder.com/400x300.png/0011aa?text=aut', 'Dr.', 'Alias suscipit quia adipisci et quaerat ut. Quas impedit ea nulla laboriosam. Impedit omnis distinctio veniam sed.', '2023-10-27 00:53:46', '2023-10-27 00:53:46'),
(15, 'iEsk9TqjXQ06BxNoI6i78hCgc3mNkja97MEapJBf.jpg', 'Sepatu Wisata Masa Kini', 'Bahan Lembut Impor Dari Luar Negri', '2023-11-09 20:14:13', '2023-11-09 20:14:13'),
(19, 'ItDsaJTksTpQ4aEHxe6gBt3zT3vw5K8hYZWTOOZS.jpg', 'sepatu saya', '<p>sepatu ini</p>', '2023-12-14 22:03:04', '2023-12-14 22:03:04'),
(22, '63YGM5KHkTN6FoLQHuIIPpwykuESLJF3QXDhWPoE.jpg', 'Adidas Samba Vegan', '<p>Rp.2.100.000</p>', '2023-12-15 03:08:58', '2023-12-15 03:22:08'),
(23, 'Wjbld3GbvgifNUi373LLX2x5qhkGdsUSgAX7FlLY.jpg', 'Adidas Ozweego Black', '<p>Rp.800.000</p>', '2023-12-15 03:11:09', '2023-12-15 03:22:47'),
(24, 'ySc67pkSDmBvAG9KbW2SHV47hZpsjVDjKk77pelr.jpg', 'Nike Adversary Premium Sb \'black\'', '<p>Sepatu Nike ADV&nbsp;</p>', '2023-12-15 03:13:00', '2023-12-15 03:13:00'),
(25, 'pbwAlBEHy9SRnVvm83jhz5fgXijxmSAruYVfaLpZ.jpg', 'Nike Airforce 1', '<p>Rp.2.200.000</p>', '2023-12-15 03:15:28', '2023-12-15 03:21:09'),
(26, '3EE70rLi6O4u4miMCF4xjqKkkJpaIDKLzjMhCWuC.jpg', 'Nike Giannis Immortality', '<p>Rp.1.300.000</p>', '2023-12-15 03:16:49', '2023-12-15 03:21:32'),
(27, 'Qz0YLObG5zr4WYlTOtvkpCRQEbTP4JngsdzVKt4r.jpg', 'Nike Air Max Plus Triple Black', 'Rp.1.300.000', '2023-12-15 03:17:39', '2023-12-15 03:20:31'),
(28, 'zueLRXYm3mJyBnDVyMtWpBEbJ0UCeG123vBcr6L5.jpg', 'Nike Just Do It', '<p>Rp.700.000</p>', '2023-12-15 03:19:37', '2023-12-15 03:19:37'),
(29, 'NS0x9XY0G34oYMb3TYpIZyLpkvahMIa26UBHyE5E.jpg', 'Nike Dunk Low GS Black White', '<p>Rp.1.500.000</p>', '2023-12-15 03:20:11', '2023-12-15 03:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dhanu Tirta', 'dhanu12@gmail.com', NULL, '$2y$10$AaKvWdQFXgv1OvBWTVfkXOnqcovvyapgtt8OmMYjcAaMDNo9RAE8W', NULL, '2023-10-26 23:56:06', '2023-10-26 23:58:06'),
(2, 'Desta', 'destacatrwjaya@gmail.com', NULL, '$2y$10$otzewe.jOJlFyaXP1Zu8J.L7jsRQMD2xmQnsrIR6MZsYsILxNbVQu', NULL, '2023-11-24 00:04:44', '2023-11-24 00:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smiley`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_blogs`
--

CREATE TABLE `data_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rent_motorbikes`
--

CREATE TABLE `data_rent_motorbikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_motorbike` varchar(255) NOT NULL,
  `type_motorbike` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rent_motorbikes`
--

INSERT INTO `data_rent_motorbikes` (`id`, `category_motorbike`, `type_motorbike`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Small', 'Vario 125 CC', 100000, '2025-03-01 17:31:17', '2025-03-01 17:31:17'),
(2, 'Small', 'Scoopy 110 CC', 100000, '2025-03-01 17:31:37', '2025-03-01 17:31:37'),
(3, 'Big', 'PCX 160 CC', 200000, '2025-03-01 17:31:58', '2025-03-01 17:31:58'),
(4, 'Big', 'ADV 160 CC', 200000, '2025-03-01 17:32:19', '2025-03-01 17:32:19'),
(5, 'Big', 'N Max', 200000, '2025-03-01 17:32:36', '2025-03-01 17:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_snorklings`
--

CREATE TABLE `data_snorklings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_package` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_snorklings`
--

INSERT INTO `data_snorklings` (`id`, `type_package`, `destination`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Sharing', 'Manta Bay || Gamat Bay || Wall Point', 200000, '2025-03-01 17:27:28', '2025-03-01 17:27:28'),
(2, 'Sharing', 'Manta Point || Gamat Bay || Wall Point', 350000, '2025-03-01 17:28:00', '2025-03-01 17:28:00'),
(3, 'Private', 'Manta Bay || Gamat Bay || Wall Point', 1500000, '2025-03-01 17:29:27', '2025-03-01 17:30:27'),
(4, 'Private', 'Manta Point || Gamat Bay || Wall Point', 2500000, '2025-03-01 17:29:51', '2025-03-01 17:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_tickets`
--

CREATE TABLE `data_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_fast_boot` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_tickets`
--

INSERT INTO `data_tickets` (`id`, `type_fast_boot`, `destination`, `time`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Semabu', 'Nusa Penida To Sanur', '08.00 AM', 150000, '2025-03-01 17:35:01', '2025-03-01 17:35:01'),
(2, 'Semabu', 'Nusa Penida To Sanur', '12.00 PM', 150000, '2025-03-01 17:35:25', '2025-03-01 17:35:25'),
(3, 'Semabu', 'Nusa Penida To Sanur', '01.30 PM', 150000, '2025-03-01 17:36:12', '2025-03-01 17:38:11'),
(4, 'Semabu', 'Nusa Penida To Sanur', '03.00 PM', 150000, '2025-03-01 17:36:46', '2025-03-01 17:38:23'),
(5, 'Semabu', 'Nusa Penida To Sanur', '03.30 PM', 150000, '2025-03-01 17:39:15', '2025-03-01 17:39:15'),
(6, 'Semabu', 'Nusa Penida To Sanur', '04.00 PM', 150000, '2025-03-01 17:39:45', '2025-03-01 17:39:45'),
(7, 'Semabu', 'Nusa Penida To Sanur', '04.30 PM', 150000, '2025-03-01 17:40:14', '2025-03-01 17:40:14'),
(8, 'Semabu', 'Nusa Penida To Sanur', '05.00 PM', 150000, '2025-03-01 17:40:37', '2025-03-01 17:40:37'),
(9, 'StarFish', 'Nusa Penida To Gili Trawangan', '10.00 AM', 300000, '2025-03-01 17:41:09', '2025-03-01 17:41:09'),
(10, 'StarFish', 'Nusa Penida To Gili Air', '10.00 AM', 300000, '2025-03-01 17:41:37', '2025-03-01 17:41:37'),
(11, 'StarFish', 'Nusa Penida To Lombok Bangsal', '10.00 AM', 300000, '2025-03-01 17:42:06', '2025-03-01 17:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `data_trips`
--

CREATE TABLE `data_trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_vehicle` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `place_to_go` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_trips`
--

INSERT INTO `data_trips` (`id`, `type_vehicle`, `destination`, `place_to_go`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Car', 'West', 'Kelingking Beach || Broken Beach || Angel Billabong || Paluang Cliff', 650000, '2025-03-01 17:43:41', '2025-03-01 17:43:41'),
(2, 'Car', 'East', 'Diamond Beach || Atuh Beach || Tree House || Molenteng Cliiff', 800000, '2025-03-01 17:44:19', '2025-03-01 17:44:19'),
(3, 'Car', 'Mix', 'Klingking Beach || broken Beach || Angel Billabong Beach || Diamong Beach || Atuh Beach || Tree House || Molenteng Cliiff', 1100000, '2025-03-01 17:44:48', '2025-03-01 17:44:48'),
(4, 'Motorbike', 'West', 'Kelingking Beach || Broken Beach || Angel Billabong || Paluang Cliff', 300000, '2025-03-01 17:45:28', '2025-03-01 17:45:28'),
(5, 'Motorbike', 'East', 'Diamond Beach || Atuh Beach || Tree House || Molenteng Cliiff', 400000, '2025-03-01 17:46:01', '2025-03-01 17:46:01'),
(6, 'Motorbike', 'Mix', 'Klingking Beach || broken Beach || Angel Billabong Beach || Diamong Beach || Atuh Beach || Tree House || Molenteng Cliiff', 550000, '2025-03-01 17:46:29', '2025-03-01 17:46:29');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_15_025456_create_data_snorklings_table', 1),
(5, '2025_02_15_034439_create_data_tickets_table', 1),
(6, '2025_02_15_041331_create_data_trips_table', 1),
(7, '2025_02_16_001230_create_data_rent_motorbikes_table', 1),
(8, '2025_02_16_003856_create_data_blogs_table', 1),
(9, '2025_02_16_014455_create_snorklings_table', 1),
(10, '2025_02_16_022016_create_tickets_table', 1),
(11, '2025_02_16_035115_create_trips_table', 1),
(12, '2025_02_16_065439_create_rents_table', 1);

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
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `type_motorbike` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `rent_day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qk52UMRH5wLWUJIoRGokNjhttHWsWeIt32dF0CBO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicVFLMHJBZG1OS3E5aDIwNWdxTldNWTYyV2J4UXlscGRIN3F6YTRjbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhX2Jsb2dzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1740928970);

-- --------------------------------------------------------

--
-- Table structure for table `snorklings`
--

CREATE TABLE `snorklings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `select_package` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `person` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snorklings`
--

INSERT INTO `snorklings` (`id`, `name`, `no_phone`, `select_package`, `destination`, `person`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Fajar Robyansyah', '082247477770', 'Sharing', 'Manta Bay || Gamat Bay || Wall Point', 11, '2025-03-01 22:59:47', '2025-03-01 22:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `select_boat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `person` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `type_vehicle` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `place_to_go` varchar(255) NOT NULL,
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
(1, 'Smiley', 'smileysnorkling@gmail.com', NULL, '$2y$12$3hAvq.iM5jvG3bNEQ70gxeBLCPffcUnBh1gciKWblCljJ/g.LdzCm', NULL, '2025-03-01 17:26:24', '2025-03-01 17:26:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `data_blogs`
--
ALTER TABLE `data_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rent_motorbikes`
--
ALTER TABLE `data_rent_motorbikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_snorklings`
--
ALTER TABLE `data_snorklings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tickets`
--
ALTER TABLE `data_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_trips`
--
ALTER TABLE `data_trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `snorklings`
--
ALTER TABLE `snorklings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
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
-- AUTO_INCREMENT for table `data_blogs`
--
ALTER TABLE `data_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_rent_motorbikes`
--
ALTER TABLE `data_rent_motorbikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_snorklings`
--
ALTER TABLE `data_snorklings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_tickets`
--
ALTER TABLE `data_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_trips`
--
ALTER TABLE `data_trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snorklings`
--
ALTER TABLE `snorklings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

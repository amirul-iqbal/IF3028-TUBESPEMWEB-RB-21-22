-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 05:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
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
(5, '2021_11_30_081233_create_reports_table', 1);

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submited_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `excerpt`, `body`, `aspek`, `submited_at`, `lampiran`, `extensi`, `created_at`, `updated_at`) VALUES
(1, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Layanan Siakad', '2021-12-20 14:27:53', '1640010473_IMAGE.png', 'png', '2021-12-20 07:27:53', '2021-12-20 07:27:53'),
(2, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Sarana/Prasarana ITERA', '2021-12-20 14:29:57', '1640010597_INI LAPORAN.docx', 'docx', '2021-12-20 07:29:57', '2021-12-20 07:29:57'),
(3, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Kegiatan Mahasiswa', '2021-12-20 14:30:37', '1640010637_INI LAPORAN.pdf', 'pdf', '2021-12-20 07:30:37', '2021-12-20 07:30:37'),
(4, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Aktivitas Perkuliahan', '2021-12-20 14:32:09', '1640010729_INI LAPORAN.xlsx', 'xlsx', '2021-12-20 07:32:09', '2021-12-20 07:32:09'),
(5, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Request Pengembangan Sistem Informasi ITERA', '2021-12-20 14:32:35', '1640010755_INI LAPORAN.pptx', 'pptx', '2021-12-20 07:32:35', '2021-12-20 07:32:35'),
(6, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Request Pengembangan Sistem Informasi ITERA', '2021-12-20 14:33:03', '1640010783_IMAGE.png', 'png', '2021-12-20 07:33:03', '2021-12-20 07:33:03'),
(7, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Layanan Siakad', '2021-12-20 14:33:27', '1640010807_INI LAPORAN.docx', 'docx', '2021-12-20 07:33:27', '2021-12-20 07:33:27'),
(8, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Kegiatan Mahasiswa', '2021-12-20 14:33:41', '1640010821_INI LAPORAN.pptx', 'pptx', '2021-12-20 07:33:41', '2021-12-20 07:33:41'),
(9, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Request Pengembangan Sistem Informasi ITERA', '2021-12-20 14:33:57', '1640010837_INI LAPORAN.pdf', 'pdf', '2021-12-20 07:33:57', '2021-12-20 07:33:57'),
(10, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Kritik dan Saran Terkait Sistem Informasi ITERA', '2021-12-20 16:27:38', '1640017658_IMAGE.png', 'png', '2021-12-20 09:27:38', '2021-12-20 09:27:38'),
(11, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Sarana/Prasarana ITERA', '2021-12-20 16:28:04', '1640017683_IMAGE.png', 'png', '2021-12-20 09:28:04', '2021-12-20 09:28:04'),
(12, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Aktivitas Perkuliahan', '2021-12-20 16:28:33', '1640017713_INI LAPORAN.docx', 'docx', '2021-12-20 09:28:33', '2021-12-20 09:28:33'),
(13, 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia .....', 'Id excepteur nisi fugiat aute nostrud consequat culpa nostrud ex adipisicing ipsum non. Non incididunt excepteur nulla exercitation veniam consequat anim. Laborum ad adipisicing irure eiusmod officia nisi quis nulla. Eiusmod consectetur anim sunt ut dolore deserunt enim ut duis consectetur anim. Tempor veniam minim ut elit proident enim culpa quis minim minim cillum elit.\r\n\r\nEnim non aliqua eu do exercitation Lorem sit anim duis aute pariatur duis amet consectetur. Minim id pariatur irure ea aliqua ut laborum eu. Non esse id commodo sint aliqua labore. Et eu nulla dolore non consequat eu consectetur mollit. Dolore ullamco minim anim sit esse aliqua irure eu magna.\r\n\r\nQuis occaecat Lorem commodo irure culpa. Ullamco deserunt nisi qui voluptate. Nostrud qui incididunt sint fugiat aliqua reprehenderit culpa quis non non est officia exercitation ullamco. Ea nostrud ut pariatur commodo nulla ipsum adipisicing cupidatat labore duis pariatur. Consequat fugiat veniam ad enim veniam anim aliqua.', 'Pengaduan Aktivitas Perkuliahan', '2021-12-20 16:28:51', '1640017731_INI LAPORAN.pptx', 'pptx', '2021-12-20 09:28:51', '2021-12-20 09:28:51');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

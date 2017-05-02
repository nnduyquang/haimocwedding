-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 01:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haimocweddingv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongthoigianchup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluonganhchup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanaocodau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanaochure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diadiems`
--

CREATE TABLE `diadiems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `mota` text COLLATE utf8mb4_unicode_ci,
  `anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhdiadiem1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhdiadiem2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhdiadiem3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhnenphobien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhnendiadiem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diadiems`
--

INSERT INTO `diadiems` (`id`, `name`, `path`, `user_id`, `created_at`, `updated_at`, `order`, `mota`, `anhdaidien`, `hinhdiadiem1`, `tieude1`, `mota1`, `hinhdiadiem2`, `tieude2`, `mota2`, `hinhdiadiem3`, `tieude3`, `mota3`, `hinhnenphobien`, `hinhnendiadiem`) VALUES
(1, 'Bãi Đa', 'bai-da', 1, '2017-05-01 08:01:11', '2017-05-02 02:02:51', '1', 'Located in the center of Japan, Nagoya is filled not only with great shopping and urban sightseeing but also with important sites in history and samurai culture such as Nagoya Castle, the Tokugawa Garden, and Atsuta Shrine. Various photo locations incorporating mountains, the sea, flowers, historical architecture, and more are concentrated near the city center. For bridal photos, Nagoya Castle is a popular choice.', 'aaf9e56cac9dfcd_1493653994975.jpg', 'nagoyanagoyacas_1493715606847.jpg', 'Nagoya Castle', 'The famous golden Shachihoko (a mythical sea creatures) adorning the topmost part of the castle is the symbol of Nagoya Castle.', 'nagoyatokugawag_1493715606849.jpg', 'Tokugawa Japanese Garden', 'See the ruins of the Tokugawa Owari clan residences and the beautiful traditional Japanese garden with its pond and surrounding walking path.', 'nagoyacentralpa_1493715606850.jpg', 'Central Park', 'The centre of the business and entertainment surrounded by many shops and buildings. There is a famous Ferris Wheel in front of the studio.', 'nagoya3_1493715606851.jpg', 'nagoya_1493715606852.png'),
(2, 'Đồi Chè', 'doi-che', 1, '2017-05-01 08:04:53', '2017-05-01 08:05:15', '2', NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Đồi Thông', 'doi-thong', 1, '2017-05-01 08:08:35', '2017-05-01 08:11:25', '3', NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Hội An', 'hoi-an', 1, '2017-05-01 08:13:00', '2017-05-01 08:13:00', '1', NULL, '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Biển Đà Nẵng', 'bien-da-nang', 1, '2017-05-01 08:13:16', '2017-05-01 08:13:16', '1', NULL, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dichvus`
--

CREATE TABLE `dichvus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2017_05_01_103736_create_entrust_setup_tables', 2),
(4, '2017_05_01_141306_create_diadiems_table', 3),
(5, '2017_05_01_141809_add_column_order_to_diadiems_table', 4),
(6, '2017_05_01_151650_add_column_mota_to_diadiems_table', 5),
(8, '2017_05_01_152601_add_column_anhdaidien_to_diadiems_table', 6),
(11, '2017_05_02_004410_add_info_phobien_to_diadiems_table', 7),
(12, '2017_05_02_085531_change_type_mota_diadiems_table', 8),
(13, '2017_05_02_091030_create_albums_table', 9),
(14, '2017_05_02_093935_create_dichvus_table', 10);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(2, 'role-create', 'Create Role', 'Create New Role', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(5, 'user-list', 'Display User Listing', 'See only Listing Of User', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(6, 'user-create', 'Create User', 'Create New User', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(7, 'user-edit', 'Edit User', 'Edit User', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(8, 'user-delete', 'Delete User', 'Delete User', '2017-05-01 03:59:20', '2017-05-01 03:59:20'),
(9, 'diadiem-list', 'Display Địa Điểm Listing', 'See only Listing Of User', '2017-05-01 07:47:46', '2017-05-01 07:47:46'),
(10, 'diadiem-create', 'Create Địa Điểm ', 'Create New Địa Điểm ', '2017-05-01 07:47:46', '2017-05-01 07:47:46'),
(11, 'diadiem-edit', 'Edit Địa Điểm ', 'Edit Địa Điểm ', '2017-05-01 07:47:46', '2017-05-01 07:47:46'),
(12, 'diadiem-delete', 'Delete Địa Điểm ', 'Delete Địa Điểm ', '2017-05-01 07:47:46', '2017-05-01 07:47:46'),
(13, 'dichvu-list', 'Display Dịch Vụ Listing', 'See only Listing Of Dịch Vụ', '2017-05-02 02:38:45', '2017-05-02 02:38:45'),
(14, 'dichvu-create', 'Create Dịch Vụ ', 'Create New Dịch Vụ ', '2017-05-02 02:38:45', '2017-05-02 02:38:45'),
(15, 'dichvu-edit', 'Edit Dịch Vụ ', 'Edit Dịch Vụ ', '2017-05-02 02:38:45', '2017-05-02 02:38:45'),
(16, 'dichvu-delete', 'Delete Dịch Vụ ', 'Delete Dịch Vụ ', '2017-05-02 02:38:45', '2017-05-02 02:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Trùm', '2017-05-01 04:01:55', '2017-05-01 07:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$HnO2xQyzK9l/CfEMRaueEOWPbyEJSS47TaHug2QNEoIM0AhCYURpG', NULL, '2017-05-01 02:48:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `albums_path_unique` (`path`),
  ADD KEY `albums_user_id_foreign` (`user_id`);

--
-- Indexes for table `diadiems`
--
ALTER TABLE `diadiems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `diadiems_name_unique` (`name`),
  ADD UNIQUE KEY `diadiems_path_unique` (`path`),
  ADD KEY `diadiems_user_id_foreign` (`user_id`);

--
-- Indexes for table `dichvus`
--
ALTER TABLE `dichvus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dichvus_user_id_foreign` (`user_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diadiems`
--
ALTER TABLE `diadiems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dichvus`
--
ALTER TABLE `dichvus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diadiems`
--
ALTER TABLE `diadiems`
  ADD CONSTRAINT `diadiems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dichvus`
--
ALTER TABLE `dichvus`
  ADD CONSTRAINT `dichvus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

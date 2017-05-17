-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 01:54 AM
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
-- Table structure for table `albumofdiadiem`
--

CREATE TABLE `albumofdiadiem` (
  `id_diadiem` int(10) UNSIGNED NOT NULL,
  `id_album` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albumofdiadiem`
--

INSERT INTO `albumofdiadiem` (`id_diadiem`, `id_album`, `created_at`, `updated_at`) VALUES
(1, 7, '2017-05-12 02:31:06', '2017-05-12 02:31:06'),
(1, 8, '2017-05-12 17:40:07', '2017-05-12 17:40:07'),
(2, 8, '2017-05-13 07:05:25', '2017-05-13 07:05:25'),
(6, 7, '2017-05-14 08:31:15', '2017-05-14 08:31:15'),
(6, 8, '2017-05-13 07:05:25', '2017-05-13 07:05:25');

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
  `note` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `arrayidphukien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayiddichvu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsCampaign` tinyint(1) NOT NULL DEFAULT '0',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `path`, `mota`, `anhdaidien`, `order`, `tongthoigianchup`, `soluonganhchup`, `quanaocodau`, `quanaochure`, `note`, `user_id`, `created_at`, `updated_at`, `arrayidphukien`, `arrayiddichvu`, `IsCampaign`, `price`) VALUES
(7, 'ĐÀ NẴNG NỮA NGÀY', 'da-nang-nua-ngay', 'Nothing', 'baogia1_1494775875400.jpg', '1', 'Theo ca sáng từ 7h- 12h hoặc 12h – 17h', '300~', '2 Váy Cưới', '2 Vest', NULL, 1, '2017-05-12 02:31:06', '2017-05-14 21:10:09', '1-3', '7-4-3-8-11-2-1-5-10-9', 1, '4.900.000'),
(8, 'ĐÀ NẴNG CẢ NGÀY', 'da-nang-ca-ngay', 'nothing', 'up_1494776025658.jpg', '1', 'Từ 7h -> 17h', '300~', '2 Váy Cưới', '2 Vest', NULL, 1, '2017-05-12 17:40:07', '2017-05-14 21:10:02', '1-3', '7-4-3-8-11-2-1-5-10-9', 1, '5.900.000');

-- --------------------------------------------------------

--
-- Table structure for table `aocuois`
--

CREATE TABLE `aocuois` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `oreder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `danhmucaocuoi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmucaocuois`
--

CREATE TABLE `danhmucaocuois` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucaocuois`
--

INSERT INTO `danhmucaocuois` (`id`, `name`, `path`, `anhdaidien`, `mota`, `user_id`, `created_at`, `updated_at`, `order`) VALUES
(1, 'Áo Cưới', 'ao-cuoi', 'itemimglarge01_1494842085828.jpg', 'From the latest brand-name dresses to original outfits just for you. With both simple and gorgeous wedding dresses, we carry a lineup made possible exclusively by the dress boutiques in our group.', 1, '2017-05-15 02:54:45', '2017-05-15 02:54:45', '1'),
(2, 'Áo Dài', 'ao-dai', 'itemimglarge02_1494842134976.jpg', 'Japanese kimono are infused with a variety of meanings. This special wedding attire celebrates and blesses your happiness from this point forward. Why not try an experience of a lifetime?', 1, '2017-05-15 02:55:34', '2017-05-15 02:55:34', '2');

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
  `hinhnendiadiem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bando` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diadiems`
--

INSERT INTO `diadiems` (`id`, `name`, `path`, `user_id`, `created_at`, `updated_at`, `order`, `mota`, `anhdaidien`, `hinhdiadiem1`, `tieude1`, `mota1`, `hinhdiadiem2`, `tieude2`, `mota2`, `hinhdiadiem3`, `tieude3`, `mota3`, `hinhnenphobien`, `hinhnendiadiem`, `bando`) VALUES
(1, 'Bãi Đa', 'bai-da', 1, '2017-05-01 08:01:11', '2017-05-17 07:36:59', '1', 'Located in the center of Japan, Nagoya is filled not only with great shopping and urban sightseeing but also with important sites in history and samurai culture such as Nagoya Castle, the Tokugawa Garden, and Atsuta Shrine. Various photo locations incorporating mountains, the sea, flowers, historical architecture, and more are concentrated near the city center. For bridal photos, Nagoya Castle is a popular choice.', 'aaf9e56cac9dfcd_1493653994975.jpg', 'nagoyanagoyacas_1493715606847.jpg', 'Nagoya Castle', 'The famous golden Shachihoko (a mythical sea creatures) adorning the topmost part of the castle is the symbol of Nagoya Castle.', 'nagoyatokugawag_1493715606849.jpg', 'Tokugawa Japanese Garden', 'See the ruins of the Tokugawa Owari clan residences and the beautiful traditional Japanese garden with its pond and surrounding walking path.', 'nagoyacentralpa_1493715606850.jpg', 'Central Park', 'The centre of the business and entertainment surrounded by many shops and buildings. There is a famous Ferris Wheel in front of the studio.', 'nagoya3_1493715606851.jpg', 'nagoya_1493715606852.png', 'baida_1495031819834.jpg'),
(2, 'Đồi Chè', 'doi-che', 1, '2017-05-01 08:04:53', '2017-05-17 07:57:53', '2', NULL, 'thump1_1495033073291.jpg', 'thump1_1495033073293.jpg', '1', '1', 'thump1_1495033073293.jpg', '1', '1', 'thump1_1495033073294.jpg', '1', '1', 'thump1_1495033073294.jpg', 'thump1_1495033073294.jpg', 'doiche_1495033073292.jpg'),
(3, 'Đồi Thông', 'doi-thong', 1, '2017-05-01 08:08:35', '2017-05-17 08:01:04', '3', NULL, 'thump1_1495033264214.jpg', 'thump1_1495033264216.jpg', '1', '1', 'thump1_1495033264216.jpg', '1', '1', 'thump1_1495033264217.jpg', '1', '1', 'thump1_1495033264217.jpg', 'thump1_1495033264218.jpg', 'doithong_1495033264215.jpg'),
(5, 'Hội An', 'hoi-an', 1, '2017-05-01 08:13:00', '2017-05-17 07:54:23', '1', NULL, 'thump1_1495032863855.jpg', 'thump1_1495032863857.jpg', '1', '1', 'thump1_1495032863857.jpg', '1', '1', 'thump1_1495032863858.jpg', '1', '1', 'thump1_1495032863858.jpg', 'thump1_1495032863859.jpg', 'hoian_1495032863856.jpg'),
(6, 'Biển Đà Nẵng', 'bien-da-nang', 1, '2017-05-01 08:13:16', '2017-05-17 07:48:21', '1', NULL, 'NAMZ1233_1495032377091.jpg', 'NAMZ1233_1495032377092.jpg', '1', '1', 'NAMZ1233_1495032377093.jpg', '1', '1', 'NAMZ1233_1495032377094.jpg', '1', '1', 'NAMZ1233_1495032377094.jpg', 'NAMZ1233_1495032377095.jpg', 'bien_1495032501127.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dichvus`
--

CREATE TABLE `dichvus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvus`
--

INSERT INTO `dichvus` (`id`, `name`, `icon`, `order`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Trang Điểm Cho Cô Dâu Chú Rể', 'hairmakeup_1493860644501.png', '4', NULL, 1, '2017-05-03 18:17:24', '2017-05-14 21:00:44'),
(2, 'Hoa Cầm Tay', 'photoprops_1493860858609.png', '5', NULL, 1, '2017-05-03 18:20:58', '2017-05-14 21:01:05'),
(3, 'Phụ Kiện Đi Kèm', 'setofaccessorie_1493860887793.png', '9', NULL, 1, '2017-05-03 18:21:27', '2017-05-14 21:05:57'),
(4, 'Toàn Bộ File Gốc', 'allphotodata_1493860919345.png', '9', NULL, 1, '2017-05-03 18:21:59', '2017-05-14 21:08:37'),
(5, '25 x 30  Album', '10album_1493860949081.png', '3', '(15 tờ - 30 Trang )', 1, '2017-05-03 18:22:29', '2017-05-14 21:00:30'),
(6, 'Chỉnh Sửa Hình Ảnh', 'simpleeditedpho_1493860977077.png', '9', NULL, 1, '2017-05-03 18:22:57', '2017-05-14 21:08:08'),
(7, '05 Ảnh Để Bàn (13x18cm)', 'simpleeditedpho_1494821385014.png', '9', NULL, 1, '2017-05-03 18:23:22', '2017-05-14 21:09:45'),
(8, 'Phương Tiện Đi Lại', 'transportatione_1493861028688.png', '9', '(Studio ⇆ Location)', 1, '2017-05-03 18:23:48', '2017-05-14 21:06:12'),
(9, 'Tặng 1 Áo Sơ Mi Nam Cao Cấp', 'shippingbyair_1493861051494.png', '1', NULL, 1, '2017-05-03 18:24:11', '2017-05-14 09:25:16'),
(10, 'Hình Lớn Ngày Cưới (60x90)', 'a3photoboard_1493861081696.png', '2', NULL, 1, '2017-05-03 18:24:41', '2017-05-14 21:00:19'),
(11, '01 DVD SlideShow', 'allphotodata149_1494779408092.png', '9', NULL, 1, '2017-05-14 09:29:46', '2017-05-14 21:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `imagemanagers`
--

CREATE TABLE `imagemanagers` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_album` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imagemanagers`
--

INSERT INTO `imagemanagers` (`id`, `imagename`, `id_album`, `created_at`, `updated_at`) VALUES
(75, '7+NAMZ1233_1494856063211.jpg', 7, NULL, NULL),
(76, '7+IMG4177_1494860071566.jpg', 7, NULL, NULL),
(77, '7+NAMZ1178_1494860071567.jpg', 7, NULL, NULL),
(78, '7+NAMZ1190_1494860071568.jpg', 7, NULL, NULL),
(79, '7+NAMZ1209_1494860071568.jpg', 7, NULL, NULL),
(80, '7+NAMZ1211_1494860071569.jpg', 7, NULL, NULL),
(81, '7+NAMZ1336_1494860071569.jpg', 7, NULL, NULL),
(82, '7+NAMZ1363_1494860071570.jpg', 7, NULL, NULL),
(83, '7+NAMZ1624_1494860071570.jpg', 7, NULL, NULL),
(84, '7+NAMZ1652_1494860071571.jpg', 7, NULL, NULL),
(85, '7+NAMZ1798_1494860071572.jpg', 7, NULL, NULL),
(86, '7+NAMZ1888_1494860071572.jpg', 7, NULL, NULL),
(87, '7+NAMZ1894_1494860071573.jpg', 7, NULL, NULL),
(88, '8+IMG4177_1494860097453.jpg', 8, NULL, NULL),
(89, '8+NAMZ1178_1494860097454.jpg', 8, NULL, NULL),
(90, '8+NAMZ1190_1494860097455.jpg', 8, NULL, NULL),
(91, '8+NAMZ1209_1494860097455.jpg', 8, NULL, NULL),
(92, '8+NAMZ1211_1494860097456.jpg', 8, NULL, NULL),
(93, '8+NAMZ1336_1494860097457.jpg', 8, NULL, NULL),
(94, '8+NAMZ1363_1494860097457.jpg', 8, NULL, NULL),
(95, '8+NAMZ1624_1494860097457.jpg', 8, NULL, NULL),
(96, '8+NAMZ1652_1494860097458.jpg', 8, NULL, NULL),
(97, '8+NAMZ1798_1494860097458.jpg', 8, NULL, NULL),
(98, '8+NAMZ1888_1494860097459.jpg', 8, NULL, NULL),
(99, '8+NAMZ1894_1494860097459.jpg', 8, NULL, NULL),
(100, '8+NAMZ1233_1494860175181.jpg', 8, NULL, NULL);

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
(14, '2017_05_02_093935_create_dichvus_table', 10),
(15, '2017_05_04_011612_change_note_to_nullable_dichvus_table', 11),
(16, '2017_05_10_134635_create_phukiens_table', 12),
(17, '2017_05_10_140720_add_column_to_albums_table', 12),
(18, '2017_05_10_141035_create_album_diadiem_table', 12),
(19, '2017_05_11_141252_create_imagemanagers_table', 13),
(21, '2017_05_11_141628_add_id_albummanager_to_albums_table', 14),
(22, '2017_05_12_021930_change_type_column_id_albummanager_table', 15),
(23, '2017_05_12_024044_change_allownull_column_note_albums_table', 16),
(26, '2017_05_12_024356_drop_column_tenalbum_albums_table', 17),
(27, '2017_05_12_030459_change_type_column_id_albummanager_albums_table', 18),
(28, '2017_05_12_030621_change_type_column_id_albummanager_imagemanagers_table', 19),
(29, '2017_05_12_030848_drop_column_id_albummanager_albums_table', 20),
(30, '2017_05_12_031000_drop_change_id_albummanager_imagemanagers_table', 21),
(31, '2017_05_12_031401_change_type_column_id_album_imagemanagers_table', 22),
(32, '2017_05_14_011952_create_sliders_table', 23),
(33, '2017_05_14_095015_add_isCampaign_to_albums_table', 24),
(34, '2017_05_14_100038_add_price_to_albums_table', 25),
(35, '2017_05_15_072033_create_danhmucaocuois_table', 26),
(36, '2017_05_15_091938_add_column_order_danhmucaocuois_table', 27),
(37, '2017_05_15_095403_change_type_column_mota_danhmucaocuois_table', 28),
(38, '2017_05_15_101057_create_aocuois_table', 29),
(39, '2017_05_17_142338_add_bando_to_diadiems_table', 30);

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
(16, 'dichvu-delete', 'Delete Dịch Vụ ', 'Delete Dịch Vụ ', '2017-05-02 02:38:45', '2017-05-02 02:38:45'),
(17, 'album-list', 'Display Album Listing', 'See only Listing Of Album', '2017-05-04 21:23:36', '2017-05-04 21:23:36'),
(18, 'album-create', 'Create Album ', 'Create New Album ', '2017-05-04 21:23:37', '2017-05-04 21:23:37'),
(19, 'album-edit', 'Edit Album ', 'Edit Album ', '2017-05-04 21:23:37', '2017-05-04 21:23:37'),
(20, 'album-delete', 'Delete Album ', 'Delete Album ', '2017-05-04 21:23:37', '2017-05-04 21:23:37'),
(21, 'phukien-list', 'Display Phụ Kiện Listing', 'See only Listing Of Phụ Kiện', '2017-05-11 06:39:30', '2017-05-11 06:39:30'),
(22, 'phukien-create', 'Create Phụ Kiện ', 'Create New Phụ Kiện ', '2017-05-11 06:39:30', '2017-05-11 06:39:30'),
(23, 'phukien-edit', 'Edit Phụ Kiện ', 'Edit Phụ Kiện ', '2017-05-11 06:39:30', '2017-05-11 06:39:30'),
(24, 'phukien-delete', 'Delete Phụ Kiện ', 'Delete Phụ Kiện ', '2017-05-11 06:39:30', '2017-05-11 06:39:30'),
(25, 'slider-list', 'Display Slider Listing', 'See only Slider Of Role', '2017-05-13 18:24:10', '2017-05-13 18:24:10'),
(26, 'slider-create', 'Create Slider', 'Create New Slider', '2017-05-13 18:24:10', '2017-05-13 18:24:10'),
(27, 'slider-edit', 'Edit Slider', 'Edit Slider', '2017-05-13 18:24:11', '2017-05-13 18:24:11'),
(28, 'slider-delete', 'Delete Slider', 'Delete Slider', '2017-05-13 18:24:11', '2017-05-13 18:24:11'),
(29, 'danhmucaocuoi-list', 'Display Danh Mục Áo Cưới Listing', 'See only Danh Mục Áo Cưới Of Role', '2017-05-15 02:45:05', '2017-05-15 02:45:05'),
(30, 'danhmucaocuoi-create', 'Create Danh Mục Áo Cưới', 'Create New Danh Mục Áo Cưới', '2017-05-15 02:45:05', '2017-05-15 02:45:05'),
(31, 'danhmucaocuoi-edit', 'Edit Danh Mục Áo Cưới', 'Edit Danh Mục Áo Cưới', '2017-05-15 02:45:05', '2017-05-15 02:45:05'),
(32, 'danhmucaocuoi-delete', 'Delete Danh Mục Áo Cưới', 'Delete Danh Mục Áo Cưới', '2017-05-15 02:45:05', '2017-05-15 02:45:05'),
(33, 'aocuoi-list', 'Display Áo Cưới Listing', 'See only Áo Cưới Of Role', '2017-05-15 03:21:07', '2017-05-15 03:21:07'),
(34, 'aocuoi-create', 'Create Áo Cưới', 'Create New Áo Cưới', '2017-05-15 03:21:07', '2017-05-15 03:21:07'),
(35, 'aocuoi-edit', 'Edit Áo Cưới', 'Edit Áo Cưới', '2017-05-15 03:21:07', '2017-05-15 03:21:07'),
(36, 'aocuoi-delete', 'Delete Áo Cưới', 'Delete Áo Cưới', '2017-05-15 03:21:07', '2017-05-15 03:21:07');

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
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phukiens`
--

CREATE TABLE `phukiens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phukiens`
--

INSERT INTO `phukiens` (`id`, `name`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1 Bộ Áo Dài Nam Nữ', '1', 1, '2017-05-11 06:51:42', '2017-05-14 20:58:23'),
(2, 'White Shirt for Tuxedo/Suite', '1', 1, '2017-05-11 06:51:54', '2017-05-11 06:51:54'),
(3, 'Cà Vạt Chú Rể', '1', 1, '2017-05-11 06:52:02', '2017-05-14 20:58:48'),
(4, 'Groom & Bride’s Undergarments for kimono', '1', 1, '2017-05-11 06:52:17', '2017-05-11 06:52:17');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhslider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuthich` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `display_name`, `anhslider`, `chuthich`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'up_1494754226187.jpg', 'up_1494754226187.jpg', NULL, '1', 1, '2017-05-14 01:55:51', '2017-05-14 02:30:26'),
(2, 'up2_1494754384350.jpg', 'up2_1494754384350.jpg', NULL, '1', 1, '2017-05-14 02:33:04', '2017-05-14 02:33:04'),
(3, 'up3_1494754496897.jpg', 'up3_1494754496897.jpg', NULL, '1', 1, '2017-05-14 02:34:56', '2017-05-14 02:34:56'),
(4, 'up4_1494754725811.jpg', 'up4_1494754725811.jpg', NULL, '1', 1, '2017-05-14 02:38:45', '2017-05-14 02:38:45'),
(5, 'up5_1494754877003.jpg', 'up5_1494754877003.jpg', NULL, '1', 1, '2017-05-14 02:41:17', '2017-05-14 02:41:17');

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
-- Indexes for table `albumofdiadiem`
--
ALTER TABLE `albumofdiadiem`
  ADD PRIMARY KEY (`id_diadiem`,`id_album`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `albums_path_unique` (`path`),
  ADD KEY `albums_user_id_foreign` (`user_id`);

--
-- Indexes for table `aocuois`
--
ALTER TABLE `aocuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aocuois_user_id_foreign` (`user_id`),
  ADD KEY `aocuois_danhmucaocuoi_id_foreign` (`danhmucaocuoi_id`);

--
-- Indexes for table `danhmucaocuois`
--
ALTER TABLE `danhmucaocuois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmucaocuois_user_id_foreign` (`user_id`);

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
-- Indexes for table `imagemanagers`
--
ALTER TABLE `imagemanagers`
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
-- Indexes for table `phukiens`
--
ALTER TABLE `phukiens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phukiens_user_id_foreign` (`user_id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `aocuois`
--
ALTER TABLE `aocuois`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danhmucaocuois`
--
ALTER TABLE `danhmucaocuois`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `diadiems`
--
ALTER TABLE `diadiems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dichvus`
--
ALTER TABLE `dichvus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `imagemanagers`
--
ALTER TABLE `imagemanagers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `phukiens`
--
ALTER TABLE `phukiens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- Constraints for table `aocuois`
--
ALTER TABLE `aocuois`
  ADD CONSTRAINT `aocuois_danhmucaocuoi_id_foreign` FOREIGN KEY (`danhmucaocuoi_id`) REFERENCES `danhmucaocuois` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aocuois_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `danhmucaocuois`
--
ALTER TABLE `danhmucaocuois`
  ADD CONSTRAINT `danhmucaocuois_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `phukiens`
--
ALTER TABLE `phukiens`
  ADD CONSTRAINT `phukiens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

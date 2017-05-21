-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 01:38 AM
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
(1, 9, '2017-05-17 20:30:47', '2017-05-17 20:30:47'),
(2, 8, '2017-05-13 07:05:25', '2017-05-13 07:05:25'),
(2, 9, '2017-05-17 20:30:47', '2017-05-17 20:30:47'),
(2, 10, '2017-05-20 21:59:14', '2017-05-20 21:59:14'),
(2, 12, '2017-05-20 22:29:21', '2017-05-20 22:29:21'),
(2, 13, '2017-05-21 01:11:25', '2017-05-21 01:11:25'),
(2, 14, '2017-05-21 01:17:20', '2017-05-21 01:17:20'),
(2, 16, '2017-05-21 01:48:08', '2017-05-21 01:48:08'),
(5, 8, '2017-05-20 21:20:31', '2017-05-20 21:20:31'),
(5, 9, '2017-05-17 20:30:47', '2017-05-17 20:30:47'),
(5, 11, '2017-05-20 22:05:04', '2017-05-20 22:05:04'),
(5, 12, '2017-05-20 22:29:21', '2017-05-20 22:29:21'),
(5, 13, '2017-05-21 01:11:25', '2017-05-21 01:11:25'),
(6, 7, '2017-05-14 08:31:15', '2017-05-14 08:31:15'),
(6, 8, '2017-05-13 07:05:25', '2017-05-13 07:05:25'),
(6, 9, '2017-05-17 20:30:47', '2017-05-17 20:30:47'),
(6, 14, '2017-05-21 01:17:20', '2017-05-21 01:17:20'),
(6, 16, '2017-05-21 01:48:08', '2017-05-21 01:48:08'),
(7, 10, '2017-05-20 21:59:14', '2017-05-20 21:59:14'),
(7, 12, '2017-05-20 22:29:21', '2017-05-20 22:29:21'),
(7, 13, '2017-05-21 01:11:25', '2017-05-21 01:11:25'),
(7, 14, '2017-05-21 01:17:20', '2017-05-21 01:17:20'),
(8, 8, '2017-05-20 21:20:31', '2017-05-20 21:20:31'),
(9, 8, '2017-05-20 21:20:31', '2017-05-20 21:20:31'),
(9, 14, '2017-05-21 01:17:20', '2017-05-21 01:17:20'),
(10, 8, '2017-05-20 21:20:30', '2017-05-20 21:20:30'),
(11, 8, '2017-05-20 21:20:30', '2017-05-20 21:20:30'),
(11, 11, '2017-05-20 22:05:04', '2017-05-20 22:05:04'),
(11, 12, '2017-05-20 22:29:21', '2017-05-20 22:29:21'),
(11, 13, '2017-05-21 01:11:25', '2017-05-21 01:11:25'),
(11, 14, '2017-05-21 01:17:20', '2017-05-21 01:17:20'),
(12, 8, '2017-05-20 21:20:30', '2017-05-20 21:20:30'),
(12, 11, '2017-05-20 22:05:04', '2017-05-20 22:05:04'),
(12, 12, '2017-05-20 22:29:21', '2017-05-20 22:29:21'),
(12, 13, '2017-05-21 01:11:25', '2017-05-21 01:11:25'),
(13, 8, '2017-05-20 21:20:30', '2017-05-20 21:20:30'),
(13, 11, '2017-05-20 22:05:04', '2017-05-20 22:05:04'),
(13, 17, '2017-05-21 01:51:08', '2017-05-21 01:51:08'),
(14, 12, '2017-05-21 01:43:04', '2017-05-21 01:43:04'),
(14, 13, '2017-05-21 01:43:20', '2017-05-21 01:43:20'),
(14, 15, '2017-05-21 01:41:53', '2017-05-21 01:41:53'),
(14, 17, '2017-05-21 01:51:08', '2017-05-21 01:51:08');

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
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `arrayidphukien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayiddichvu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsCampaign` tinyint(1) NOT NULL DEFAULT '0',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anhmini` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `path`, `mota`, `anhdaidien`, `order`, `tongthoigianchup`, `soluonganhchup`, `quanaocodau`, `quanaochure`, `note`, `user_id`, `created_at`, `updated_at`, `arrayidphukien`, `arrayiddichvu`, `IsCampaign`, `price`, `anhmini`) VALUES
(7, 'ĐÀ NẴNG NỮA NGÀY', 'da-nang-nua-ngay', 'Tặng áo sơ mi nam cao cấp trị giá 500.000', 'NAMZ1808bg_1495332418443.jpg', '1', 'Theo ca sáng từ 7h- 12h hoặc 12h – 17h', '300~', '2 Váy Cưới', '2 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-12 02:31:06', '2017-05-20 22:24:21', '1-3', '7-4-3-8-11-2-1-5-10-9', 1, '4.900.000', ''),
(8, 'NỘI THÀNH ĐÀ NẴNG 1', 'noi-thanh-da-nang-1', '<p>Chọn 5 địa điểm<br></p>', 'NAMZ1624bg_1495332686550.jpg', '1', 'Từ 7h -> 17h', '300~', '2 Váy Cưới', '2 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-12 17:40:07', '2017-05-20 22:24:07', '1-3-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '5.800.000', ''),
(9, 'LƯU GIỮ KỈ NIỆM ĐẸP', 'luu-giu-ki-niem-dep', 'NOTHING', 'NAMZ1888_1495329608601.jpg', '1', '8h', '300~', '2 Váy', '2 Vest', NULL, 1, '2017-05-17 20:30:47', '2017-05-20 18:20:08', '1-3', '7-4-3-6-8-11-2-1-5-10-9', 0, '', 'NAMZ1894mini_1495281885303.jpg'),
(10, 'NỘI THÀNH ĐÀ NẴNG 2', 'noi-thanh-da-nang-2', 'Cộng 1 địa điểm nội thành', 'NAMZ1776bg_1495342753964.jpg', '1', '8h', '~300', '2 Váy Cưới', '2 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-20 21:59:13', '2017-05-20 22:23:40', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '7.800.000', 'NAMZ1776mini_1495342753964.jpg'),
(11, 'NỘI THÀNH ĐÀ NẴNG 3', 'noi-thanh-da-nang-3', '<h5><font face="Times New Roman">Cộng 1 địa điểm ngoại thành</font></h5>', 'NAMZ1888_1495343104000.jpg', '1', '7h - 17h', '~300', '2 Váy Cưới', '2 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-20 22:05:04', '2017-05-20 22:23:33', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '7.300.000', 'NAMZ1894mini_1495343104000.jpg'),
(12, 'NỘI THÀNH ĐÀ NẴNG 4', 'noi-thanh-da-nang-4', '<p>Cộng 2 địa điểm ngoại thành</p>', 'NAMZ1624bg_1495344561728.jpg', '1', '7h - 17h', '~300', '3 Váy Cưới', '2 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-20 22:29:21', '2017-05-20 22:29:42', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '9.900.000', 'NAMZ1602mini_1495344561728.jpg'),
(13, 'NỘI THÀNH ĐÀ NẴNG 5', 'noi-thanh-da-nang-5', '<p>Cộng 3 địa điểm ngoại thành</p>', 'NAMZ1273bg_1495354285187.jpg', '1', '2 Ngày', '~300', '3 Váy Cưới', '3 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-21 01:11:25', '2017-05-21 01:12:35', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '17.500.000', 'NAMZ1273mini_1495354285187.jpg'),
(14, 'NỘI THÀNH ĐÀ NẴNG + ĐẢO LÝ SƠN', 'noi-thanh-da-nang-dao-ly-son', '<p>Ưu đãi đặc biệt</p>', 'NAMZ1233bg_1495354640196.jpg', '1', '2 Ngày', '~300', '3 Váy Cưới', '3 Vest', '** Mọi chi phí điểm chụp là do khách trả ví dụ:  chụp ở bãi đa 70k, hồ xanh 50k, vé cáp treo bà nà.....**', 1, '2017-05-21 01:17:20', '2017-05-21 01:17:20', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 1, '23.300.000', 'NAMZ1233mini_1495354640196.jpg'),
(15, 'PHIM TRƯỜNG', 'phim-truong', '<p>Ưu đãi đặc biệt</p>', '1N3A7974bg_1495356113532.jpg', '1', '7h- 12h hoặc 12h – 17h', '~150', '2 Váy Cưới', '2 Vest', NULL, 1, '2017-05-21 01:41:53', '2017-05-21 01:42:30', '1-4', '7-4-3-6-8-11-2-1-5-10', 1, '4.500.000', '1N3A7974mini_1495356113532.jpg'),
(16, 'ĐỒI CHÈ - BIỂN ĐÀ NẴNG', 'doi-che-bien-da-nang', '<p>Lưu lại kỹ niệm đẹp</p>', 'NAMZ1776bg_1495356488766.jpg', '1', '7h - 17h', '~300', '2 Váy Cưới', '2 Vest', NULL, 1, '2017-05-21 01:48:08', '2017-05-21 01:48:08', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 0, '', 'NAMZ1776mini_1495356488766.jpg'),
(17, 'PHIM TRƯỜNG - ĐỒI THÔNG', 'phim-truong-doi-thong', '<p>Lưu lại kỷ niệm đẹp</p>', 'NAMZ1624bg_1495356668269.jpg', '1', '7h - 17h', '~300', '2 Váy Cưới', '2 Vest', NULL, 1, '2017-05-21 01:51:08', '2017-05-21 01:51:08', '1-4', '7-4-3-6-8-11-2-1-5-10-9', 0, '', 'NAMZ1602mini_1495356668269.jpg');

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
(1, 'Bãi Đa', 'bai-da', 1, '2017-05-01 08:01:11', '2017-05-20 09:12:51', '1', 'Located in the center of Japan, Nagoya is filled not only with great shopping and urban sightseeing but also with important sites in history and samurai culture such as Nagoya Castle, the Tokugawa Garden, and Atsuta Shrine. Various photo locations incorporating mountains, the sea, flowers, historical architecture, and more are concentrated near the city center. For bridal photos, Nagoya Castle is a popular choice.', 'baidabg_1495296771504.jpg', 'baida1_1495296771505.jpg', 'Nagoya Castle', 'The famous golden Shachihoko (a mythical sea creatures) adorning the topmost part of the castle is the symbol of Nagoya Castle.', 'baida2_1495296771506.jpg', 'Tokugawa Japanese Garden', 'See the ruins of the Tokugawa Owari clan residences and the beautiful traditional Japanese garden with its pond and surrounding walking path.', 'baida3_1495296771507.JPG', 'Central Park', 'The centre of the business and entertainment surrounded by many shops and buildings. There is a famous Ferris Wheel in front of the studio.', 'baidabg1_1495296771508.jpg', 'empty_1495296771509.png', 'baida_1495251915150.jpg'),
(2, 'Đồi Chè', 'doi-che', 1, '2017-05-01 08:04:53', '2017-05-20 09:38:50', '2', NULL, 'doichebg_1495298330402.jpg', 'doiche1_1495298330403.jpg', '1', '1', 'doiche2_1495298330404.jpg', '1', '1', 'doiche3_1495298330404.jpg', '1', '1', 'doichebg1_1495298330405.jpg', 'empty_1495298330406.png', 'doiche_1495251708756.jpg'),
(5, 'Hội An', 'hoi-an', 1, '2017-05-01 08:13:00', '2017-05-20 09:04:43', '1', NULL, 'hoianbg_1495296283232.jpg', 'hoian1_1495296283233.jpg', '1', '1', 'hoian2_1495296283234.jpg', '1', '1', 'hoian3_1495296283235.jpg', '1', '1', 'hoianbg1_1495296283236.jpg', 'empty_1495296283237.png', 'hoian_1495251765976.jpg'),
(6, 'Biển Đà Nẵng', 'bien-da-nang', 1, '2017-05-01 08:13:16', '2017-05-20 09:41:01', '1', NULL, 'biendanangbg_1495297153940.jpg', 'biendanang1_1495297153942.jpg', '1', '1', 'biendanang2_1495298461103.jpg', '1', '1', 'biendanang3_1495297153943.jpg', '1', '1', 'biendanangbg1_1495297153944.jpg', 'empty_1495297153945.png', 'bien_1495251849931.jpg'),
(7, 'Bà Nà', 'ba-na', 1, '2017-05-18 02:53:03', '2017-05-20 09:31:06', '1', 'nothing', 'banabg_1495297866107.jpg', 'bana1_1495297783803.jpg', '1', '1', 'bana2_1495297783804.jpg', '1', '1', 'bana3_1495297783805.jpg', '1', '1', 'banabg1_1495297783806.jpg', 'empty_1495297783807.png', 'bana_1495279191169.jpg'),
(8, 'Bồ Câu', 'bo-cau', 1, '2017-05-18 02:54:53', '2017-05-20 08:54:53', '1', '1', 'bocaubg_1495295693426.jpg', 'bocau1_1495295541587.jpg', '1', '1', 'bocau2_1495295541589.jpg', '1', '1', 'bocau3_1495295541590.jpg', '1', '1', 'bocaubg1_1495295541591.jpg', 'empty_1495295541592.png', 'bocau_1495279572688.jpg'),
(9, 'Hồ Xanh', 'ho-xanh', 1, '2017-05-18 02:55:38', '2017-05-20 08:40:46', '1', '1', 'hoxanhbg_1495294846446.jpg', 'hoxanh1_1495294846447.jpg', '1', '1', 'hoxanh2_1495294846447.jpg', '1', '1', 'hoxanh3_1495294846448.jpg', '1', '1', 'hoxanhbg1_1495294846449.jpg', 'empty_1495294846450.png', 'hoxanh_1495278777516.jpg'),
(10, 'Cầu Tình Yêu', 'cau-tinh-yeu', 1, '2017-05-18 02:56:14', '2017-05-20 07:57:10', '1', '1', 'cautinhyeubg_1495291214285.jpg', 'cautinhyeu1_1495291908403.jpg', '1', '1', 'cautinhyeu3_1495291908404.jpg', '1', '1', 'cautinhyeu4_1495292230157.jpg', '1', '1', 'cautinhyeubg1_1495291493532.jpg', 'empty_1495291659411.png', 'cautinhyeu_1495280326453.jpg'),
(11, 'Đèo Hải Vân', 'deo-hai-van', 1, '2017-05-18 02:56:52', '2017-05-20 08:05:11', '1', '1', 'deohaivanbg_1495292435568.jpg', 'deohaivan1_1495292711569.jpg', '1', '1', 'deohaivan2_1495292711570.jpg', '1', '1', 'deohaivan3_1495292711571.jpg', '1', '1', 'deohaivanbg1_1495292568009.jpg', 'empty_1495292435570.png', 'deohaivan_1495279947481.jpg'),
(12, 'Resort', 'resort', 1, '2017-05-18 02:57:40', '2017-05-20 08:13:31', '1', '1', 'resortbg_1495293211103.jpg', 'resort1_1495293051961.jpg', '1', '1', 'resort2_1495293051962.jpg', '1', '1', 'resort3_1495293051963.jpg', '1', '1', 'resortbg1_1495293051964.jpg', 'empty_1495293051965.png', 'resort_1495280926882.jpg'),
(13, 'Đồi Thông', 'doi-thong', 1, '2017-05-20 04:12:18', '2017-05-20 08:28:53', '1', '1', 'doithongbg_1495293818537.jpg', 'doithong1_1495294133552.jpg', '1', '1', 'doithong2_1495294133553.jpg', '1', '1', 'doithong3_1495294133554.jpg', '1', '1', 'doithongbg1_1495294133555.jpg', 'empty_1495294133556.png', 'doithong_1495278738028.jpg'),
(14, 'Phim Trường', 'phim-truong', 1, '2017-05-21 01:29:21', '2017-05-21 01:29:21', '1', '1', 'phimtruongbg_1495355361761.jpg', 'phimtruong1_1495355361762.jpg', '1', '1', 'phimtruong2_1495355361763.jpg', '1', '1', 'phimtruong3_1495355361763.jpg', '1', '1', 'phimtruongbg1_1495355361764.jpg', 'empty_1495355361764.png', 'phimtruong_1495355361761.jpg');

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
(5, 'Album Chất Lượng Cao 25 x 30', '10album_1493860949081.png', '3', '(15 tờ - 30 Trang )', 1, '2017-05-03 18:22:29', '2017-05-20 21:21:54'),
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
(115, '9+IMG4177_1495330576080.jpg', 9, NULL, NULL),
(116, '9+NAMZ1178_1495331297945.jpg', 9, NULL, NULL),
(117, '9+NAMZ1190_1495331297945.jpg', 9, NULL, NULL),
(118, '9+NAMZ1209_1495331297946.jpg', 9, NULL, NULL),
(119, '9+NAMZ1211_1495331297947.jpg', 9, NULL, NULL),
(120, '9+NAMZ1336_1495331297947.jpg', 9, NULL, NULL),
(121, '9+NAMZ1363_1495331297948.jpg', 9, NULL, NULL),
(122, '9+NAMZ1624_1495331297949.jpg', 9, NULL, NULL),
(123, '9+NAMZ1652_1495331297949.jpg', 9, NULL, NULL),
(124, '9+NAMZ1798_1495331297950.jpg', 9, NULL, NULL),
(125, '9+NAMZ1894_1495331297950.jpg', 9, NULL, NULL),
(126, '9+NAMZ1287_1495331575085.jpg', 9, NULL, NULL),
(127, '9+NAMZ1725_1495331575086.jpg', 9, NULL, NULL),
(128, '9+NAMZ1807_1495331575086.jpg', 9, NULL, NULL),
(129, '9+NAMZ1853_1495331575087.jpg', 9, NULL, NULL),
(130, '7+IMG4177_1495332418443.jpg', 7, NULL, NULL),
(131, '7+NAMZ1178_1495332418444.jpg', 7, NULL, NULL),
(132, '7+NAMZ1190_1495332418444.jpg', 7, NULL, NULL),
(133, '7+NAMZ1209_1495332418445.jpg', 7, NULL, NULL),
(134, '7+NAMZ1211_1495332430503.jpg', 7, NULL, NULL),
(135, '7+NAMZ1287_1495332430504.jpg', 7, NULL, NULL),
(136, '7+NAMZ1336_1495332430505.jpg', 7, NULL, NULL),
(137, '7+NAMZ1363_1495332430506.jpg', 7, NULL, NULL),
(138, '7+NAMZ1624_1495332453310.jpg', 7, NULL, NULL),
(139, '7+NAMZ1652_1495332453311.jpg', 7, NULL, NULL),
(140, '7+NAMZ1725_1495332453311.jpg', 7, NULL, NULL),
(141, '7+NAMZ1798_1495332453312.jpg', 7, NULL, NULL),
(142, '7+NAMZ1807_1495332479391.jpg', 7, NULL, NULL),
(143, '7+NAMZ1853_1495332479392.jpg', 7, NULL, NULL),
(144, '7+NAMZ1894_1495332479392.jpg', 7, NULL, NULL),
(145, '8+NAMZ1211_1495332536105.jpg', 8, NULL, NULL),
(146, '8+NAMZ1287_1495332536105.jpg', 8, NULL, NULL),
(147, '8+NAMZ1336_1495332536106.jpg', 8, NULL, NULL),
(148, '8+NAMZ1363_1495332536107.jpg', 8, NULL, NULL),
(149, '8+IMG4177_1495332555568.jpg', 8, NULL, NULL),
(150, '8+NAMZ1178_1495332555569.jpg', 8, NULL, NULL),
(151, '8+NAMZ1190_1495332555570.jpg', 8, NULL, NULL),
(152, '8+NAMZ1209_1495332555570.jpg', 8, NULL, NULL),
(153, '8+NAMZ1624_1495332569048.jpg', 8, NULL, NULL),
(154, '8+NAMZ1652_1495332569049.jpg', 8, NULL, NULL),
(155, '8+NAMZ1725_1495332569050.jpg', 8, NULL, NULL),
(156, '8+NAMZ1798_1495332569051.jpg', 8, NULL, NULL),
(157, '8+NAMZ1807_1495332592689.jpg', 8, NULL, NULL),
(158, '8+NAMZ1853_1495332592690.jpg', 8, NULL, NULL),
(159, '8+NAMZ1894_1495332592691.jpg', 8, NULL, NULL),
(160, '10+IMG4177_1495342754075.jpg', 10, NULL, NULL),
(161, '10+NAMZ1178_1495342754097.jpg', 10, NULL, NULL),
(162, '10+NAMZ1190_1495342754100.jpg', 10, NULL, NULL),
(163, '10+NAMZ1209_1495342754103.jpg', 10, NULL, NULL),
(164, '10+NAMZ1211_1495342769352.jpg', 10, NULL, NULL),
(165, '10+NAMZ1287_1495342769353.jpg', 10, NULL, NULL),
(166, '10+NAMZ1336_1495342769354.jpg', 10, NULL, NULL),
(167, '10+NAMZ1363_1495342769354.jpg', 10, NULL, NULL),
(168, '10+NAMZ1853_1495342809698.jpg', 10, NULL, NULL),
(169, '10+NAMZ1894_1495342809699.jpg', 10, NULL, NULL),
(170, '11+NAMZ1287_1495343104165.jpg', 11, NULL, NULL),
(171, '11+NAMZ1336_1495343104168.jpg', 11, NULL, NULL),
(172, '11+NAMZ1363_1495343104170.jpg', 11, NULL, NULL),
(173, '11+NAMZ1624_1495343104208.jpg', 11, NULL, NULL),
(174, '11+NAMZ1211_1495343135015.jpg', 11, NULL, NULL),
(175, '11+NAMZ1807_1495343135015.jpg', 11, NULL, NULL),
(176, '11+NAMZ1894_1495343135016.jpg', 11, NULL, NULL),
(177, '11+NAMZ1178_1495343803653.jpg', 11, NULL, NULL),
(178, '11+NAMZ1190_1495343803654.jpg', 11, NULL, NULL),
(179, '11+NAMZ1209_1495343803654.jpg', 11, NULL, NULL),
(180, '12+NAMZ1211_1495344561894.jpg', 12, NULL, NULL),
(181, '12+NAMZ1287_1495344561897.jpg', 12, NULL, NULL),
(182, '12+NAMZ1336_1495344561899.jpg', 12, NULL, NULL),
(183, '12+NAMZ1363_1495344561936.jpg', 12, NULL, NULL),
(184, '12+NAMZ1624_1495344561938.jpg', 12, NULL, NULL),
(185, '12+NAMZ1652_1495344635374.jpg', 12, NULL, NULL),
(186, '12+NAMZ1725_1495344635375.jpg', 12, NULL, NULL),
(187, '12+NAMZ1798_1495344635375.jpg', 12, NULL, NULL),
(188, '12+NAMZ1807_1495344635376.jpg', 12, NULL, NULL),
(189, '12+NAMZ1853_1495344635376.jpg', 12, NULL, NULL),
(190, '13+IMG4177_1495354285372.jpg', 13, NULL, NULL),
(191, '13+NAMZ1178_1495354285374.jpg', 13, NULL, NULL),
(192, '13+NAMZ1190_1495354285376.jpg', 13, NULL, NULL),
(193, '13+NAMZ1209_1495354285379.jpg', 13, NULL, NULL),
(194, '13+NAMZ1725_1495354319150.jpg', 13, NULL, NULL),
(195, '14+NAMZ1211_1495354640337.jpg', 14, NULL, NULL),
(196, '14+NAMZ1233bg_1495354640339.jpg', 14, NULL, NULL),
(197, '14+NAMZ1233mini_1495354640341.jpg', 14, NULL, NULL),
(198, '14+NAMZ1273bg_1495354640380.jpg', 14, NULL, NULL),
(199, '14+NAMZ1624_1495354668450.jpg', 14, NULL, NULL),
(200, '15+1N3A7947_1495356113648.JPG', 15, NULL, NULL),
(201, '15+1N3A7982_1495356113651.JPG', 15, NULL, NULL),
(202, '15+1N3A8093_1495356113654.JPG', 15, NULL, NULL),
(203, '15+1N3A8118_1495356113657.JPG', 15, NULL, NULL),
(204, '15+1N3A8136_1495356113659.JPG', 15, NULL, NULL),
(205, '16+NAMZ1652_1495356488905.jpg', 16, NULL, NULL),
(206, '16+NAMZ1725_1495356488907.jpg', 16, NULL, NULL),
(207, '16+NAMZ1798_1495356488910.jpg', 16, NULL, NULL),
(208, '16+NAMZ1807_1495356488948.jpg', 16, NULL, NULL),
(209, '16+NAMZ1853_1495356488950.jpg', 16, NULL, NULL),
(210, '17+1N3A7982_1495356668375.JPG', 17, NULL, NULL),
(211, '17+1N3A8093_1495356668377.JPG', 17, NULL, NULL),
(212, '17+1N3A8118_1495356668380.JPG', 17, NULL, NULL),
(213, '17+NAMZ1363_1495356668418.jpg', 17, NULL, NULL),
(214, '17+NAMZ1624_1495356668420.jpg', 17, NULL, NULL);

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
(39, '2017_05_17_142338_add_bando_to_diadiems_table', 30),
(40, '2017_05_20_115632_add_anhmini_to_albums_table', 31),
(41, '2017_05_21_052042_change_type_note_albums_table', 32);

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
(4, 'Trang Phục Tự Chọn Theo Tư Vấn', '1', 1, '2017-05-11 06:52:17', '2017-05-20 21:20:59');

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
(1, 'NAMZ1778bg_1495333317878.jpg', 'NAMZ1778bg_1495333317878.jpg', NULL, '1', 1, '2017-05-14 01:55:51', '2017-05-20 19:21:57'),
(2, 'NAMZ1798bg_1495333301676.jpg', 'NAMZ1798bg_1495333301676.jpg', NULL, '1', 1, '2017-05-14 02:33:04', '2017-05-20 19:21:41'),
(3, 'NAMZ1808bg_1495333143128.jpg', 'NAMZ1808bg_1495333143128.jpg', NULL, '1', 1, '2017-05-14 02:34:56', '2017-05-20 19:19:03'),
(4, 'NAMZ1888_1495333162043.jpg', 'NAMZ1888_1495333162043.jpg', NULL, '1', 1, '2017-05-14 02:38:45', '2017-05-20 19:19:22'),
(5, 'NAMZ1624bg_1495333128630.jpg', 'NAMZ1624bg_1495333128630.jpg', NULL, '1', 1, '2017-05-14 02:41:17', '2017-05-20 19:18:48');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dichvus`
--
ALTER TABLE `dichvus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `imagemanagers`
--
ALTER TABLE `imagemanagers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
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

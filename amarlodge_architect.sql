-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2024 at 02:41 PM
-- Server version: 10.11.2-MariaDB-1
-- PHP Version: 8.1.12-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarlodge_architect`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `feature_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Distinctio Nam porr', 'Dolor enim qui cupid', 'images/category/59114f96273ba0ba7919.jpg', 1, 1, NULL, '2024-01-19 23:33:25', '2024-01-20 06:53:35', '2024-01-20 06:53:35'),
(2, 'Archhitectural Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime', 'images/category/0212b66d8363e8820d51.png', 1, 1, NULL, '2024-01-20 06:55:51', '2024-01-20 06:55:51', NULL),
(3, 'Interior Desing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime', 'images/category/ff32578f71d57d891875.png', 1, 1, NULL, '2024-01-20 06:56:47', '2024-01-20 06:56:47', NULL),
(4, 'Urban Desing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime', 'images/category/a7ba4e17606c2a743990.png', 1, 1, NULL, '2024-01-20 06:57:22', '2024-01-20 06:57:22', NULL),
(5, 'Decor Plan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime', 'images/category/a45243ab6a60a1b04f6e.png', 1, 1, NULL, '2024-01-20 06:57:48', '2024-01-20 06:57:48', NULL);

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_01_18_070945_create_settings_table', 2),
(14, '2024_01_18_101907_create_sliders_table', 2),
(15, '2024_01_20_051256_create_categories_table', 3),
(21, '2024_01_20_055922_create_posts_table', 4),
(22, '2024_01_20_093552_create_post_metas_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL DEFAULT curdate(),
  `post_type` tinytext DEFAULT NULL,
  `feature_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `date`, `post_type`, `feature_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'Qui libero dicta qua', 'qui-libero-dicta-qua', 'Id exercitation reru', '1975-09-11', 'blog', 'images/post/2625b89944bc8c0326d2.jpg', 1, 1, NULL, '2024-01-20 04:25:02', '2024-01-20 05:10:52', '2024-01-20 05:10:52'),
(15, 'Sunt eius voluptas a', 'sunt-eius-voluptas-a', 'Veniam nobis dicta', '2024-01-20', 'blog', 'images/post/7d576a5a439f216618bc.jpg', 1, 1, NULL, '2024-01-20 05:03:01', '2024-01-20 05:10:50', '2024-01-20 05:10:50'),
(16, 'Veniam ipsa magnam', 'veniam-ipsa-magnam', 'Tempora laboriosam', '1975-08-02', 'blog', 'images/post/2cbeb6454d86a3b8bfb0.jpg', 1, 1, NULL, '2024-01-20 05:10:28', '2024-01-20 05:10:47', '2024-01-20 05:10:47'),
(17, 'Duis cum autem ut ir', 'duis-cum-autem-ut-ir', 'Sed nemo voluptatem', '2018-08-26', 'blog', 'images/post/e3d5d3390e789996243f.jpg', 1, 1, NULL, '2024-01-20 05:11:55', '2024-01-20 05:28:26', '2024-01-20 05:28:26'),
(18, 'Pariatur Culpa aut', 'pariatur-culpa-aut', 'Mollit obcaecati arc', '2023-02-05', 'blog', 'images/post/d909c627470fbc5a236a.jpg', 1, 1, NULL, '2024-01-20 05:29:59', '2024-01-20 05:29:59', NULL),
(19, 'Eiusmod incididunt q', 'eiusmod-incididunt-q', 'Cupiditate obcaecati', '2006-06-14', 'blog', 'images/post/0ad84b6e9a0303eaeeaa.png', 1, 1, NULL, '2024-01-21 03:16:59', '2024-01-21 03:16:59', NULL),
(20, 'Aut aut ut fugiat l', 'sit-amet-eos-proid', 'Ipsam dignissimos qu', '2014-07-01', 'project', 'images/post/baaaf43931bef7945738.png', 1, 1, 1, '2024-01-21 03:19:21', '2024-01-21 04:58:49', '2024-01-21 04:58:49'),
(21, 'Vitae rerum ipsa vo', 'vitae-rerum-ipsa-vo', 'Officia sunt nostrum', '2009-10-03', 'project', 'images/post/a267428517b5d1f2cb7c.jpg', 1, 1, NULL, '2024-01-21 04:18:01', '2024-01-21 04:18:01', NULL),
(22, 'Ducimus molestias e', 'ducimus-molestias-e', 'Dolor aut eius vitae', '1998-05-29', 'project', 'images/post/e0266fb11347833a58ff.png', 1, 1, NULL, '2024-01-21 04:53:16', '2024-01-21 04:53:16', NULL),
(23, 'Ipsa a quam tempori', 'ipsa-a-quam-tempori', 'Rerum ipsa sit sint dgdafga', '1989-05-02', 'service', 'images/post/b149d02bf35bd7a5d88c.jpg', 1, 1, 1, '2024-01-21 05:16:21', '2024-01-21 05:43:43', '2024-01-21 05:43:43'),
(24, 'Dolores consequuntur', 'dolores-consequuntur', 'Nihil consequatur f', '2024-01-23', 'project', 'images/post/48820d6ad26b89054834.jpg', 1, 1, NULL, '2024-01-22 22:39:08', '2024-01-22 22:39:08', NULL),
(25, 'Architecto quo qui c', 'architecto-quo-qui-c', 'Repellendus Nulla e', '2024-01-23', 'portfolio', 'images/post/9fc25aa966ec418af66b.jpg', 1, 1, NULL, '2024-01-22 22:40:59', '2024-01-22 22:40:59', NULL),
(26, 'At praesentium autem', 'at-praesentium-autem', 'Consequatur volupta', '2024-01-23', 'team', 'images/post/b4063e758e9d1f5e9dac.jpg', 1, 1, NULL, '2024-01-22 23:09:29', '2024-01-22 23:09:29', NULL),
(27, 'Hic aperiam nostrum', 'hic-aperiam-nostrum', 'Ullam in iste neque', '2024-01-23', 'team', 'images/post/d43a345cd9cf0f981148.jpg', 1, 1, NULL, '2024-01-22 23:10:32', '2024-01-22 23:10:32', NULL),
(28, 'Elit doloremque eni', 'elit-doloremque-eni', 'Ipsum sint voluptati', '2024-01-23', 'review', 'images/post/c3d948c9253e8ca497e2.jpg', 1, 1, NULL, '2024-01-22 23:56:49', '2024-01-23 00:19:53', '2024-01-23 00:19:53'),
(29, 'Excepteur deleniti t', 'excepteur-deleniti-t', 'Aperiam non ipsam cu', '2024-01-23', 'review', 'images/post/864f0eb1041d74a25be8.jpg', 1, 1, NULL, '2024-01-22 23:57:57', '2024-01-22 23:57:57', NULL),
(30, 'Anim enim vero volup', 'anim-enim-vero-volup', 'In ea eiusmod quos e', '2024-01-23', 'review', 'images/post/3be19917dfad200bd667.jpg', 1, 1, NULL, '2024-01-23 00:16:12', '2024-01-23 00:16:12', NULL),
(31, 'Anim enim vero volup', 'anim-enim-vero-volup-2', 'In ea eiusmod quos e', '2024-01-23', 'review', 'images/post/aa7ebd95e6d4da9f4d5a.jpg', 1, 1, NULL, '2024-01-23 00:16:25', '2024-01-23 00:16:25', NULL),
(32, 'Anim enim vero volup', 'anim-enim-vero-volup-3', 'In ea eiusmod quos e', '2024-01-23', 'review', 'images/post/ec8ec3dcbde54215bfeb.jpg', 1, 1, NULL, '2024-01-23 00:17:05', '2024-01-23 00:17:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_metas`
--

CREATE TABLE `post_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_metas`
--

INSERT INTO `post_metas` (`id`, `post_id`, `meta_key`, `meta_value`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 17, '_method', 'post', 1, NULL, '2024-01-20 05:11:55', '2024-01-20 05:11:55', NULL),
(30, 17, 'category_id', '1', 1, NULL, '2024-01-20 05:11:55', '2024-01-20 05:11:55', NULL),
(31, 17, 'gallery', '[\"images\\/gellary\\/63bce3e39979dc906fe51.jpg\"]', 1, NULL, '2024-01-20 05:11:55', '2024-01-20 05:11:55', NULL),
(32, 18, 'category_id', '4', 1, 1, '2024-01-20 05:29:59', '2024-01-21 00:16:30', NULL),
(33, 18, 'gallery', '[\"images\\/gallery\\/c26820aa8f8e841d2eeb1.jpg\",\"images\\/gallery\\/79329c70420b0ba27e462.jpg\",\"images\\/gallery\\/062b01e6cbd30a0603683.jpg\",\"images\\/gallery\\/a558748072a5cd960d354.jpg\",\"images\\/gallery\\/f9edf9b3a7ac8c0ad0e75.jpg\",\"images\\/gallery\\/07e46f840fc3c9d066896.jpg\",\"images\\/gallery\\/afc94205a9a5eee593a97.jpg\"]', 1, 1, '2024-01-20 05:30:00', '2024-01-21 00:20:15', NULL),
(34, 19, 'category_id', '3', 1, NULL, '2024-01-21 03:16:59', '2024-01-21 03:16:59', NULL),
(35, 19, 'gallery', '[\"images\\/gallery\\/0ad84b6e9a0303eaeeaa1.png\"]', 1, NULL, '2024-01-21 03:16:59', '2024-01-21 03:16:59', NULL),
(36, 20, 'category_id', '4', 1, NULL, '2024-01-21 03:19:21', '2024-01-21 03:19:21', NULL),
(37, 20, 'gallery', '[\"images\\/gallery\\/baaaf43931bef79457381.jpg\",\"images\\/gallery\\/0c8d998d63cdd535c6ca2.jpg\",\"images\\/gallery\\/8b90aa8bd74d88a631a43.jpg\"]', 1, NULL, '2024-01-21 03:19:24', '2024-01-21 03:19:24', NULL),
(38, 21, 'client_name', 'Jasmine Hatfield', 1, NULL, '2024-01-21 04:18:01', '2024-01-21 04:18:01', NULL),
(39, 21, 'category_id', '2', 1, NULL, '2024-01-21 04:18:01', '2024-01-21 04:18:01', NULL),
(40, 22, 'client_name', 'Griffin Buckner', 1, NULL, '2024-01-21 04:53:16', '2024-01-21 04:53:16', NULL),
(41, 22, 'total_home', '5', 1, NULL, '2024-01-21 04:53:16', '2024-01-21 04:53:16', NULL),
(42, 22, 'category_id', '4', 1, NULL, '2024-01-21 04:53:16', '2024-01-21 04:53:16', NULL),
(43, 22, 'gallery', '[\"images\\/gallery\\/e0266fb11347833a58ff1.jpg\",\"images\\/gallery\\/393f56624d70260ccef12.jpg\",\"images\\/gallery\\/a6c06c38085e60221c143.jpg\"]', 1, NULL, '2024-01-21 04:53:20', '2024-01-21 04:53:20', NULL),
(44, 20, 'client_name', 'Genevieve Berg', 1, NULL, '2024-01-21 04:55:37', '2024-01-21 04:55:37', NULL),
(45, 20, 'total_home', '92', 1, NULL, '2024-01-21 04:55:37', '2024-01-21 04:55:37', NULL),
(46, 20, 'tenure_mix', 'Aut nesciunt aliqui', 1, NULL, '2024-01-21 04:55:37', '2024-01-21 04:55:37', NULL),
(47, 20, 'site_size', '81', 1, NULL, '2024-01-21 04:55:37', '2024-01-21 04:55:37', NULL),
(48, 21, 'total_home', '520', 1, 1, '2024-01-21 05:02:35', '2024-01-21 05:03:31', NULL),
(49, 21, 'tenure_mix', 'sdfsf sdfas', 1, 1, '2024-01-21 05:02:35', '2024-01-21 05:03:31', NULL),
(50, 21, 'site_size', '600', 1, 1, '2024-01-21 05:02:35', '2024-01-21 05:03:31', NULL),
(51, 21, 'gallery', '[\"images\\/gallery\\/a618e5958dfdd33610221.png\",\"images\\/gallery\\/a618e5958dfdd33610222.png\",\"images\\/gallery\\/a618e5958dfdd33610223.png\"]', 1, NULL, '2024-01-21 05:02:36', '2024-01-21 05:02:36', NULL),
(52, 23, 'category_id', '5', 1, NULL, '2024-01-21 05:16:21', '2024-01-21 05:16:21', NULL),
(53, 23, 'gallery', '[\"images\\/gallery\\/0a827e023a90aba073251.jpg\",\"images\\/gallery\\/7f984cab1822eb57c6f82.jpg\",\"images\\/gallery\\/d92756effa6c64eb8aac3.jpg\"]', 1, NULL, '2024-01-21 05:16:24', '2024-01-21 05:16:24', NULL),
(54, 24, 'category_id', '5', 1, NULL, '2024-01-22 22:39:08', '2024-01-22 22:39:08', NULL),
(55, 25, 'category_id', '2', 1, NULL, '2024-01-22 22:40:59', '2024-01-22 22:40:59', NULL),
(56, 26, 'details', 'Dolorem ipsa aut si', 1, NULL, '2024-01-22 23:09:29', '2024-01-22 23:09:29', NULL),
(57, 26, 'category_id', '4', 1, NULL, '2024-01-22 23:09:29', '2024-01-22 23:09:29', NULL),
(58, 27, 'details', 'Illo odit perspiciat', 1, NULL, '2024-01-22 23:10:32', '2024-01-22 23:10:32', NULL),
(59, 27, 'category_id', '4', 1, NULL, '2024-01-22 23:10:32', '2024-01-22 23:10:32', NULL),
(60, 28, 'details', 'Voluptatem ut fugiat', 1, NULL, '2024-01-22 23:56:49', '2024-01-22 23:56:49', NULL),
(61, 28, 'category_id', '2', 1, NULL, '2024-01-22 23:56:49', '2024-01-22 23:56:49', NULL),
(62, 29, 'details', 'Fugit repudiandae d', 1, NULL, '2024-01-22 23:57:57', '2024-01-22 23:57:57', NULL),
(63, 29, 'category_id', '5', 1, NULL, '2024-01-22 23:57:57', '2024-01-22 23:57:57', NULL),
(64, 30, 'details', 'Incididunt eum eius', 1, NULL, '2024-01-23 00:16:12', '2024-01-23 00:16:12', NULL),
(65, 30, 'category_id', '4', 1, NULL, '2024-01-23 00:16:12', '2024-01-23 00:16:12', NULL),
(66, 31, 'details', 'Incididunt eum eius', 1, NULL, '2024-01-23 00:16:25', '2024-01-23 00:16:25', NULL),
(67, 31, 'category_id', '4', 1, NULL, '2024-01-23 00:16:25', '2024-01-23 00:16:25', NULL),
(68, 32, 'details', 'Incididunt eum eius', 1, NULL, '2024-01-23 00:17:05', '2024-01-23 00:17:05', NULL),
(69, 32, 'category_id', '4', 1, NULL, '2024-01-23 00:17:05', '2024-01-23 00:17:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_key`, `meta_value`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'template_location', 'frontend.themes.maintheme', NULL, NULL, NULL, NULL, NULL),
(2, 'about_title', 'Learn About Us', NULL, NULL, NULL, NULL, NULL),
(3, 'about_description', 'Architecture innovation tristiue usto duision vitae diam nemue nivamus aesta atene artin arinian finibus ate viverra nec lacus. Nedana edino suscipe.', NULL, NULL, NULL, '2024-01-23 04:01:38', NULL),
(4, 'about_image', 'images/98e6b134b9d23cc413c0.jpg', NULL, NULL, NULL, '2024-01-23 04:01:54', NULL),
(5, 'site_default_logo', 'images/f695c36c9490387ec7d1.png', NULL, NULL, NULL, '2024-01-23 04:13:29', NULL),
(6, 'site_light_logo', 'frontend/img/logo-light.png', NULL, NULL, NULL, NULL, NULL),
(7, 'site_dark_logo', 'frontend/img/logo-light.png', NULL, NULL, NULL, NULL, NULL),
(8, 'site_title', 'Learn About Us', NULL, NULL, NULL, '2024-01-23 04:01:31', NULL),
(9, 'site_meta_title', 'Main Side Csdfjh', NULL, NULL, NULL, '2024-01-23 03:10:10', NULL),
(10, 'contact_title', 'Contact With Us', NULL, NULL, NULL, NULL, NULL),
(11, 'contact_phone', '01786740170', NULL, NULL, NULL, NULL, NULL),
(12, 'contact_email', 'sazzadurrahman580@gmail.com', NULL, NULL, NULL, NULL, NULL),
(13, 'office_address', '255/E , Lalmatia', NULL, NULL, NULL, NULL, NULL),
(14, 'g_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.894061310364!2d90.3651130383802!3d23.754933849632963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfd69a937cc7%3A0x9269538f8bb05e25!2sAmarlodge%20Ltd.!5e0!3m2!1sen!2sbd!4v1705992394074!5m2!1sen!2sbd', NULL, NULL, NULL, NULL, NULL),
(15, 'lets_talk', 'Let\'s Talk About Your Project', NULL, NULL, NULL, NULL, NULL),
(16, 'lets_talk_description', 'sdgsggag sd gasdgasd', NULL, NULL, NULL, NULL, NULL),
(17, 'lets_talk_phone', '017867410147', NULL, NULL, NULL, NULL, NULL),
(18, 'site_fav_icon', 'images/3313733f24953617f691.png', NULL, NULL, NULL, '2024-01-23 03:13:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL DEFAULT 'left-middle',
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `position`, `button_text`, `button_url`, `feature_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Quam sapiente ea inc', NULL, 'left-middle', 'Aperiam exercitation', 'Deserunt ullam bland', 'images/slider/79f042a2b52c16c07a33.png', 1, 1, NULL, '2024-01-19 07:16:05', '2024-01-19 23:03:01', '2024-01-19 23:03:01'),
(2, 'Tempora non consecte', NULL, 'left-middle', 'Enim sed omnis adipi', 'Cumque est autem it', 'images/slider/345f2a6333ffbeac5b14.jpg', 1, 1, NULL, '2024-01-19 07:22:05', '2024-01-19 08:52:09', '2024-01-19 08:52:09'),
(3, 'Odit cupidatat sit e', NULL, 'left-middle', 'In natus ipsum fugi', 'Possimus minim duis', 'images/slider/3a113945b72fd962d747.jpeg', 1, 1, NULL, '2024-01-19 07:22:27', '2024-01-19 23:03:05', '2024-01-19 23:03:05'),
(4, 'In labore excepturi', 'Ipsum perspiciatis', 'left-middle', 'Itaque nostrum optio', 'Eiusmod pariatur Id', 'images/slider/e128505e5bff0da707f0.webp', 1, 1, NULL, '2024-01-19 07:23:47', '2024-01-19 23:03:08', '2024-01-19 23:03:08'),
(5, 'Id ipsum praesentiu', 'Explicabo Tempore', 'left-middle', 'Incididunt quae dist', 'Sit non facere moles', 'images/slider/c75384126482e64915cb.webp', 1, 1, NULL, '2024-01-19 07:54:50', '2024-01-19 23:03:11', '2024-01-19 23:03:11'),
(6, 'Aut ipsum qui necess', 'Ea fuga Commodo ill', 'left-middle', 'Ut beatae consectetu', 'Nisi eos nisi deser', 'images/slider/25614bee58ab4fb56ea5.jpg', 1, 1, NULL, '2024-01-19 07:56:26', '2024-01-19 23:03:16', '2024-01-19 23:03:16'),
(7, 'Ullamco dolore place', 'Commodo voluptatem u', 'left-middle', 'Accusamus esse quos', 'Dolor eligendi rem q', 'images/slider/f83b59d18bbfab53f213.jpg', 1, 1, NULL, '2024-01-19 07:56:55', '2024-01-19 07:56:55', NULL),
(8, 'Autem et in aut dolo', 'Incidunt deserunt a', 'left-middle', 'Sint dolorem conseq', 'Deserunt quo volupta', 'images/slider/6d86e59aa7c638a93482.jpg', 2, 1, NULL, '2024-01-19 08:01:22', '2024-01-19 23:03:31', '2024-01-19 23:03:31'),
(9, 'Sunt dolore aut culp', 'Sunt voluptatibus no', 'left-middle', 'Eos in fugiat volup', 'Cumque mollitia nequ', 'images/slider/40b96b384226d5690da3.jpg', 1, 1, 1, '2024-01-19 08:02:01', '2024-01-19 23:03:23', NULL),
(10, 'Consequat Est perf', 'Vel aperiam sit in', 'left-middle', 'Delectus et et reic', 'Placeat velit amet', 'images/slider/dc89fa483cdbdb4a3a1e.jpg', 1, 1, NULL, '2024-01-19 08:16:20', '2024-01-19 08:16:20', NULL),
(11, 'Nemo dolor eum dolor', 'Nihil magnam autem n sdsgsdgsdg', 'left-middle', 'Quas et nobis offici', 'Mollit et sequi laud', 'images/slider/4819d13c46c4137ff4b6.jpg', 1, 1, 1, '2024-01-19 08:16:35', '2024-01-19 08:47:19', NULL),
(12, 'Perspiciatis rem of', 'Nulla ipsum saepe i', 'left-middle', NULL, NULL, 'images/slider/d13ad80d313d0c72f744.jpg', 1, 1, NULL, '2024-01-19 23:26:30', '2024-01-19 23:26:30', NULL);

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
(1, 'Baker Hyde', 'sazzad@gmail.com', NULL, '$2y$12$YbT7NqiyHmH3XRQiWwJXFOoLpH4P7uRAMyTM51/oKGoPFOQrJa6P6', 'uFUuMK8I1vLAEDnxUNBa6Jkfq3s4KPU0viYFneO1I76Ld5J1hmtHEvQNDNNH', '2024-01-17 06:15:41', '2024-01-17 06:15:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_created_by_foreign` (`created_by`),
  ADD KEY `posts_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `post_metas`
--
ALTER TABLE `post_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_metas_created_by_foreign` (`created_by`),
  ADD KEY `post_metas_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_foreign` (`created_by`),
  ADD KEY `settings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_created_by_foreign` (`created_by`),
  ADD KEY `sliders_updated_by_foreign` (`updated_by`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `post_metas`
--
ALTER TABLE `post_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_metas`
--
ALTER TABLE `post_metas`
  ADD CONSTRAINT `post_metas_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_metas_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `sliders_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 07:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fala4`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `article`, `slug`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'Integer pulvinar leo', '<p style=\"text-align: left;\"><strong>We will help to find health, to everyone. Integer pulvinar leo id viverra feugiat.Sed porttitor orci vel fermentum elit maximus. Curabitur ut turpis massa in condimentum libero.Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis. Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</strong></p>\r\n<blockquote>\r\n<p style=\"text-align: center;\"><code><em>We will help to find health, to everyone. Integer pulvinar leo id viverra feugiat.Sed porttitor orci vel fermentum elit maximus. Curabitur ut turmassa standard since the 1500s. Praesent ullamcorper dui turpis.</em></code></p>\r\n</blockquote>\r\n<p>&nbsp;</p>', 'Integer-pulvinar-leo', 'ab_1553971581.jpg', '2019-03-16 19:06:33', '2019-03-30 13:16:21'),
(2, 'حیدری وجودی', '<p>asdfasdfasdf asdf asdf asdf asdf&nbsp;</p>', 'حیدری وجودی', 'ayubi logo 2_1554196850.JPG', '2019-04-02 03:50:50', '2019-04-02 03:50:50'),
(3, 'حیدری وجودی', '<p>asdf asd&nbsp; asdf&nbsp; asdf&nbsp;&nbsp;</p>', 'حیدری وجودی', 's5_1554214449.jpg', '2019-04-02 08:44:09', '2019-04-02 08:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'ourClasses', '2019-04-01 05:10:17', '2019-04-01 05:10:17'),
(7, 'events', '2019-04-01 05:10:26', '2019-04-01 05:10:26'),
(8, 'services', '2019-04-01 05:20:03', '2019-04-01 05:20:03'),
(9, 'aboutus', '2019-04-02 00:17:08', '2019-04-02 00:17:08'),
(10, 'trainers', '2019-04-02 00:23:52', '2019-04-02 00:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `approved`, `post_id`, `created_at`, `updated_at`, `posts_id`) VALUES
(25, 'Superadministrator', 'superadministrator@app.com', 'this is great Experience', 1, 80, '2019-04-03 03:09:02', '2019-04-03 03:09:02', 80),
(26, 'Superadministrator', 'superadministrator@app.com', 'this is cool...', 1, 78, '2019-04-03 03:09:36', '2019-04-03 03:09:36', 78),
(27, 'Superadministrator', 'superadministrator@app.com', 'this is great to be here', 1, 84, '2019-04-03 04:32:28', '2019-04-03 04:32:28', 84),
(28, 'Superadministrator', 'superadministrator@app.com', 'asdf aqdsf', 1, 82, '2019-04-03 04:42:29', '2019-04-03 04:42:29', 82);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `user_message`, `created_at`, `updated_at`) VALUES
(1, 'fayaz nasrati', 'example@gmail.com', 'asdf', '2019-03-25 23:43:02', '2019-03-25 23:43:02'),
(2, 'srm green pearl/pothire', 'example@gmail.com', 'qserqwerqwer', '2019-03-26 11:47:28', '2019-03-26 11:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `articale`, `cover_image`, `created_at`, `updated_at`) VALUES
(2, 'حیدری وجودی', 'new post with tag', '<p>this is new <strong>event</strong></p>\r\n<p><strong>number 2</strong></p>', 's3_1553935701.jpg', '2019-03-30 02:38:45', '2019-03-30 03:18:21');

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
(11, '2019_03_22_185931_create_post_tag_table', 6),
(12, '2019_03_23_181228_create_posts_tag_table', 7),
(13, '2019_03_23_182531_create_posts_tag_table', 8),
(15, '2014_10_12_000000_create_users_table', 9),
(16, '2014_10_12_100000_create_password_resets_table', 9),
(17, '2019_03_18_085359_create_posts_table', 9),
(18, '2019_03_18_112345_create_contacts_table', 9),
(19, '2019_03_19_172147_roolback', 9),
(20, '2019_03_21_213906_create_categories_table', 9),
(21, '2019_03_22_183611_create_tags_table', 9),
(26, '0000_00_00_000000_create_taggable_table', 10),
(27, '2019_03_24_070801_create_posts_tag_table', 10),
(28, '2019_03_26_194849_create_comments_table', 11),
(29, '2019_03_29_061129_add_cover_image_to_posts_table', 12),
(30, '2019_03_29_200137_create_abouts_table', 13),
(31, '2019_03_29_202639_create_events_table', 14),
(32, '2019_03_29_204809_create_traners_table', 15),
(33, '2019_03_29_210212_create_our_classes_table', 16),
(34, '2019_03_29_211805_create_services_table', 17),
(35, '2019_03_30_101344_laratrust_setup_tables', 18),
(36, '2019_04_02_085033_create_contact_pages_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `our_classes`
--

CREATE TABLE `our_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'create-users', 'Create Users', 'Create Users', '2019-03-30 05:12:47', '2019-03-30 05:12:47'),
(2, 'read-users', 'Read Users', 'Read Users', '2019-03-30 05:12:47', '2019-03-30 05:12:47'),
(3, 'update-users', 'Update Users', 'Update Users', '2019-03-30 05:12:47', '2019-03-30 05:12:47'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(11, 'create-profile', 'Create Profile', 'Create Profile', '2019-03-30 05:12:50', '2019-03-30 05:12:50');

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
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 5, 'App\\User'),
(10, 5, 'App\\User'),
(11, 5, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `article`, `category_id`, `user_id`, `user_name`, `created_at`, `updated_at`, `cover_image`) VALUES
(77, 'About of Yoga Lite Lite', 'About-of- Yoga-Lite-Lite', '<h4 style=\"box-sizing: border-box; margin: 0px 0px 1em; font-family: \'Work Sans\', sans-serif; font-weight: 400; line-height: 1.2; color: #3e3f40; font-size: 1.2em; letter-spacing: 1px; background-color: #ffffff;\">We will help to find health, to everyone.</h4>\r\n<p class=\"mt-2 text-left\" style=\"box-sizing: border-box; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #ffffff; margin-top: 0.5rem !important;\">Integer pulvinar leo id viverra feugiat.Sed porttitor orci vel fermentum elit maximus. Curabitur ut turpis massa in condimentum libero.Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</p>\r\n<p class=\"mt-2 text-left\" style=\"box-sizing: border-box; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #ffffff; margin-top: 0.5rem !important;\">Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</p>', 9, '1', 'Superadministrator', '2019-04-03 01:47:59', '2019-04-03 01:47:59', 'ab_1554275878.jpg'),
(78, 'Flexibility', 'Flexibility', '<p>Nulla uter sollicitudin velit</p>\r\n<p>Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut.</p>', 8, '1', 'Superadministrator', '2019-04-03 01:50:57', '2019-04-03 01:50:57', 's1_1554276057.jpg'),
(79, 'Health', 'Health', '<h5 style=\"box-sizing: border-box; margin: 0px; font-family: \'Work Sans\', sans-serif; font-weight: 500; line-height: 1.2; color: #3e3f40; font-size: 1.2em; letter-spacing: 1px; background-color: #f7f7f7;\">Nulla uter sollicitudin velit</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #f7f7f7;\"><span class=\"text-capitalize\" style=\"box-sizing: border-box; font-weight: bolder; text-transform: capitalize !important;\">Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.</span>Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut.</p>', 8, '1', 'Superadministrator', '2019-04-03 01:51:54', '2019-04-03 01:51:54', 's2_1554276114.jpg'),
(80, 'Relaxation', 'Relaxation', '<h5 style=\"box-sizing: border-box; margin: 0px; font-family: \'Work Sans\', sans-serif; font-weight: 500; line-height: 1.2; color: #3e3f40; font-size: 1.2em; letter-spacing: 1px; background-color: #f7f7f7;\">Nulla uter sollicitudin velit</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #f7f7f7;\"><span class=\"text-capitalize\" style=\"box-sizing: border-box; font-weight: bolder; text-transform: capitalize !important;\">Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.</span>Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut.</p>', 8, '1', 'Superadministrator', '2019-04-03 01:52:53', '2019-04-03 01:52:53', 's3_1554276173.jpg'),
(81, 'Support', 'Support', '<h5 style=\"box-sizing: border-box; margin: 0px; font-family: \'Work Sans\', sans-serif; font-weight: 500; line-height: 1.2; color: #3e3f40; font-size: 1.2em; letter-spacing: 1px; background-color: #f7f7f7;\">Nulla uter sollicitudin velit</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #f7f7f7;\"><span class=\"text-capitalize\" style=\"box-sizing: border-box; font-weight: bolder; text-transform: capitalize !important;\">Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.</span>Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut.</p>', 8, '1', 'Superadministrator', '2019-04-03 01:53:51', '2019-04-03 01:53:51', 's4_1554276231.jpg'),
(82, 'Spirituality', 'Spirituality', '<h5 style=\"box-sizing: border-box; margin: 0px; font-family: \'Work Sans\', sans-serif; font-weight: 500; line-height: 1.2; color: #3e3f40; font-size: 1.2em; letter-spacing: 1px; background-color: #f7f7f7;\">Nulla uter sollicitudin velit</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif; background-color: #f7f7f7;\"><span class=\"text-capitalize\" style=\"box-sizing: border-box; font-weight: bolder; text-transform: capitalize !important;\">Pellentesque Libero Justo, Semper At Tempus Vel, Ultrices In Sed Ligula. Nulla Uter Sollicitudin Velit.</span>Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut.</p>', 8, '1', 'Superadministrator', '2019-04-03 01:54:35', '2019-04-03 01:57:29', 's5_1554276275.jpg'),
(84, 'Elderly Yoga Lite for Every one﻿', 'Elderly-Yoga-Lite-for-Every-one﻿', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Feb 06.2019</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 7, '1', 'Superadministrator', '2019-04-03 01:59:21', '2019-04-03 02:03:45', 'n1_1554276561.jpg'),
(85, 'Yoga Lite for Pregent Women only﻿', 'Yoga-Lite-for-Pregent-Women-only﻿', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Feb 03.2019</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 7, '1', 'Superadministrator', '2019-04-03 02:00:44', '2019-04-03 02:03:26', 'n2_1554276644.jpg'),
(86, 'Doing Pilates for Busy People', 'Doing-Pilates-for-Busy-People', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Feb 07.2019</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 7, '1', 'Superadministrator', '2019-04-03 02:01:58', '2019-04-03 02:01:58', 'n3_1554276718.jpg'),
(87, 'Meditation', 'Meditation', '<p><span style=\"color: #777777; font-family: \'Work Sans\', sans-serif; font-size: 15.2px; text-align: center; background-color: #ffffff;\">Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</span></p>', 6, '1', 'Superadministrator', '2019-04-03 03:01:00', '2019-04-03 03:01:00', 'n3_1554280260.jpg'),
(88, 'Yoga Lite', 'Yoga-Lite', '<p><span style=\"color: #777777; font-family: \'Work Sans\', sans-serif; font-size: 15.2px; text-align: center; background-color: #ffffff;\">Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</span></p>', 6, '1', 'Superadministrator', '2019-04-03 03:03:56', '2019-04-03 03:03:56', 's1_1554280436.jpg'),
(89, 'Pilates', 'Pilates', '<p><span style=\"color: #777777; font-family: \'Work Sans\', sans-serif; font-size: 15.2px; text-align: center; background-color: #ffffff;\">Lorem Ipsum has been the industry\'s standard since the 1500s. Praesent ullamcorper dui turpis.</span></p>', 6, '1', 'Superadministrator', '2019-04-03 03:04:30', '2019-04-03 03:04:30', 's2_1554280470.jpg'),
(90, 'Ben Smith', 'Ben-Smith', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Feb 06.2019</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 10, '1', 'Superadministrator', '2019-04-03 06:57:18', '2019-04-03 06:57:18', 't2_1554294438.jpg'),
(91, 'Anna Strong', 'Anna-Strong', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Feb 03.2019</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 10, '1', 'Superadministrator', '2019-04-03 06:58:12', '2019-04-03 06:58:12', 't1_1554294492.jpg'),
(92, 'Alen Winter', 'Alen-Winter', '<p><small style=\"box-sizing: border-box; font-size: 1em; color: #ff3838; margin-bottom: 0.7em; letter-spacing: 1px; font-family: \'Work Sans\', sans-serif;\">Trainer</small></p>\r\n<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1rem; font-size: 0.95em; color: #777777; line-height: 1.9em; font-family: \'Work Sans\', sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>', 10, '1', 'Superadministrator', '2019-04-03 06:59:04', '2019-04-03 06:59:04', 't3_1554294544.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tag`
--

CREATE TABLE `posts_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2019-03-30 05:12:47', '2019-03-30 05:12:47'),
(2, 'administrator', 'Administrator', 'Administrator', '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(3, 'user', 'User', 'User', '2019-03-30 05:12:49', '2019-03-30 05:12:49'),
(4, 'subscriber', 'Subscriber', 'Subscriber', '2019-03-30 05:12:49', '2019-03-30 05:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taggable_taggables`
--

CREATE TABLE `taggable_taggables` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taggable_tags`
--

CREATE TABLE `taggable_tags` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normalized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2019-03-23 13:26:43', '2019-03-23 13:26:43'),
(2, 'B', '2019-03-23 13:26:49', '2019-03-23 13:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `traners`
--

CREATE TABLE `traners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$f/lKnZw94boItoUsOxZqxODUpPOVksCByqjq5/cpkD1H.stt6g.X2', NULL, '2019-03-30 05:12:48', '2019-03-30 05:12:48'),
(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$WkovhsO6EbZvsYI3zwS11eUSvxBtrFbST5cIDkHH7SRe/jfvZ9Psy', NULL, '2019-03-30 05:12:49', '2019-03-30 05:12:49'),
(3, 'User', 'user@app.com', NULL, '$2y$10$4wajrLh4VS31YhyBKf6Nnu2EXUWRYCDdwna.Wqxnbdxys.KO1Z36.', NULL, '2019-03-30 05:12:49', '2019-03-30 05:12:49'),
(4, 'Subscriber', 'subscriber@app.com', NULL, '$2y$10$EtiobEvPD1UPEjM2wm.D9.h2e99.IhUeGFK4xqICIAC5591y5OBTO', NULL, '2019-03-30 05:12:50', '2019-03-30 05:12:50'),
(5, 'Cru User', 'cru_user@app.com', NULL, '$2y$10$aMgT9vlrijfeAICjjLeiEeC.TogimLN8bX0JBESO..PkKpwIZqk4u', 'UJnuJlNrTF', '2019-03-30 05:12:50', '2019-03-30 05:12:50'),
(6, 'fayaz nasrati', 'example@gmail.com', NULL, '$2y$10$bnpMggKR7AfJhOQzCZQ1mufpQc4yejc2p9Pzt/Cb48.HytzvwsqoS', NULL, '2019-03-30 06:22:55', '2019-03-30 06:22:55'),
(7, 'Naqib', 'naqib@gmail.com', NULL, '$2y$10$A7LEoQt3wgbGoM1.Vyai0udW5FKLcFDC4U7FS/Vl2hLB9rkO1qwJi', NULL, '2019-04-02 01:13:31', '2019-04-02 01:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_classes`
--
ALTER TABLE `our_classes`
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
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tag`
--
ALTER TABLE `posts_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_tag_posts_id_foreign` (`posts_id`),
  ADD KEY `posts_tag_tags_id_foreign` (`tags_id`);

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
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggable_taggables`
--
ALTER TABLE `taggable_taggables`
  ADD KEY `i_taggable_fwd` (`tag_id`,`taggable_id`),
  ADD KEY `i_taggable_rev` (`taggable_id`,`tag_id`),
  ADD KEY `i_taggable_type` (`taggable_type`);

--
-- Indexes for table `taggable_tags`
--
ALTER TABLE `taggable_tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `taggable_tags_normalized_index` (`normalized`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traners`
--
ALTER TABLE `traners`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `our_classes`
--
ALTER TABLE `our_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `posts_tag`
--
ALTER TABLE `posts_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taggable_tags`
--
ALTER TABLE `taggable_tags`
  MODIFY `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `traners`
--
ALTER TABLE `traners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts_tag`
--
ALTER TABLE `posts_tag`
  ADD CONSTRAINT `posts_tag_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `posts_tag_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

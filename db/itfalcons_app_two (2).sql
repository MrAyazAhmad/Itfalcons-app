-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 12:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itfalcons_app_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_icons`
--

CREATE TABLE `about_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_videos`
--

CREATE TABLE `about_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sudes1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sudes2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sudes3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sudes4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-05-20 02:29:23', '2021-05-20 02:29:23'),
(2, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'lll', '2021-05-20 02:30:37', '2021-05-20 02:30:37'),
(3, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'hello', '2021-05-20 02:56:10', '2021-05-20 02:56:10'),
(4, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'jjj', '2021-05-20 02:57:37', '2021-05-20 02:57:37'),
(5, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'ddd', 'jjj', '2021-05-20 02:59:20', '2021-05-20 02:59:20'),
(6, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'hello janab kha ho', 'hi', '2021-05-20 03:01:55', '2021-05-20 03:01:55'),
(7, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'testing laravel', 'testing', '2021-05-20 03:05:15', '2021-05-20 03:05:15'),
(8, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'testing continue', 'testhere', '2021-05-20 03:09:25', '2021-05-20 03:09:25'),
(9, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'hello', 'jjjj', '2021-05-20 03:19:02', '2021-05-20 03:19:02'),
(10, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-05-20 03:19:52', '2021-05-20 03:19:52'),
(11, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'testing', '2021-05-20 04:20:39', '2021-05-20 04:20:39'),
(12, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-06-01 07:24:02', '2021-06-01 07:24:02'),
(13, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-06-01 07:24:31', '2021-06-01 07:24:31'),
(14, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-06-01 07:25:17', '2021-06-01 07:25:17'),
(15, 'Abdul Rehman', 'abdullrehman1998@gmail.com', 'laravel project', 'ddd', '2021-06-01 07:26:07', '2021-06-01 07:26:07'),
(16, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'dwqfenjqda', '2021-06-09 07:26:35', '2021-06-09 07:26:35'),
(17, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'dwqfenjqda', '2021-06-09 07:26:44', '2021-06-09 07:26:44'),
(18, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'dwqfenjqda', '2021-06-09 07:26:50', '2021-06-09 07:26:50'),
(19, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'scafvd', 'nx zvda', '2021-06-09 07:29:44', '2021-06-09 07:29:44'),
(20, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'scafvd', 'nx zvda', '2021-06-09 07:29:57', '2021-06-09 07:29:57'),
(21, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'scafvd', 'nx zvda', '2021-06-09 07:30:01', '2021-06-09 07:30:01'),
(22, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'this is test eail', 'te4st email', '2021-06-09 07:38:30', '2021-06-09 07:38:30'),
(23, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'nj kkj', '2021-06-09 07:51:35', '2021-06-09 07:51:35'),
(24, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'nj kkj', '2021-06-09 07:52:56', '2021-06-09 07:52:56'),
(25, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'nj kkj', '2021-06-09 07:53:09', '2021-06-09 07:53:09'),
(26, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:12:33', '2021-06-09 08:12:33'),
(27, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:13:35', '2021-06-09 08:13:35'),
(28, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:16:39', '2021-06-09 08:16:39'),
(29, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:16:44', '2021-06-09 08:16:44'),
(30, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:27:34', '2021-06-09 08:27:34'),
(31, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:28:59', '2021-06-09 08:28:59'),
(32, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'hbbbbbb', '2021-06-09 08:30:18', '2021-06-09 08:30:18'),
(33, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv bjjnnn', 'hbbbbbb', '2021-06-09 08:33:53', '2021-06-09 08:33:53'),
(34, 'ayaznew ahmad', 'mrayazsiyal@gmail.com', 'dfv b', 'aSdfghjkl;', '2021-06-09 09:10:32', '2021-06-09 09:10:32'),
(35, 'ayaz ahmad', 'samiayaz53@gmail.com', 'dfv b', 'ertfyuio', '2021-06-09 09:16:52', '2021-06-09 09:16:52'),
(36, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:36:35', '2021-06-10 04:36:35'),
(37, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:36:40', '2021-06-10 04:36:40'),
(38, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:40:32', '2021-06-10 04:40:32'),
(39, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:44:31', '2021-06-10 04:44:31'),
(40, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:49:28', '2021-06-10 04:49:28'),
(41, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:50:38', '2021-06-10 04:50:38'),
(42, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'sdfxghjkl;\'', '2021-06-10 04:51:18', '2021-06-10 04:51:18'),
(43, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'hccf', 'chv', '2021-06-10 05:25:06', '2021-06-10 05:25:06'),
(44, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'sfdghjkl;\'', 'dszfxgchjbklm;', '2021-06-10 05:33:34', '2021-06-10 05:33:34'),
(45, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'afrgth', '2021-06-10 05:37:29', '2021-06-10 05:37:29'),
(46, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'New Comment', 'dxgfhjb', '2021-06-10 05:39:02', '2021-06-10 05:39:02'),
(47, 'ayaznew ahmad', 'mrayazsiyal@gmail.com', 'dcbvsxz', 'dwqnbjxzhh', '2021-06-10 05:42:16', '2021-06-10 05:42:16'),
(48, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'jffhfh', '2021-06-18 06:43:20', '2021-06-18 06:43:20'),
(49, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'dfv b', 'fsdzfgxchvjbkn', '2021-06-18 06:43:59', '2021-06-18 06:43:59'),
(50, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'test', 'gfhj  cjhcfhb gc', '2021-06-18 06:45:36', '2021-06-18 06:45:36'),
(51, 'ayaz ahmad', 'mrayazsiyal@gmail.com', 'dfv b', 'tfygjukj', '2021-06-25 02:16:27', '2021-06-25 02:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `mapp`, `location`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13611.359890055903!2d74.4017563!3d31.473588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3072221704cae70b!2sITFalcons!5e0!3m2!1sen!2s!4v1621490880369!5m2!1sen!2s', '              Service Road, New Super Town Lahore, Punjab, Pakistan\r\n', 'info@itfalcons.com', '(+92) 313 4841115', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2021_05_19_103243_create_portfolios_table', 1),
(5, '2021_05_19_115811_add_type_to_portfolios', 1),
(6, '2021_05_20_060337_create_contacts_table', 2),
(7, '2021_05_20_065711_create_contactform_table', 3),
(8, '2021_05_20_074648_create_teams_table', 4),
(9, '2021_05_20_104401_create_testimonials_table', 4),
(10, '2021_05_20_113646_create_services_table', 4),
(11, '2021_05_21_070937_create_about_icons_table', 5),
(12, '2021_05_21_094135_create_about_videos_table', 5),
(13, '2021_05_27_052003_create_portfolio_images_table', 6),
(14, '2021_05_27_114254_add_multiple_column_to_portfolios', 6),
(15, '2021_05_28_064400_add_description_to_services', 7),
(16, '2021_05_28_065845_create_service_teches_table', 7),
(17, '2021_05_28_113652_create_project_reqs_table', 7),
(18, '2021_05_28_122152_add_multiple_column_to_project_reqs', 7),
(19, '2021_06_01_134920_create_subscriberusers_table', 8),
(20, '2021_06_02_111211_create_our_partners_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `our_partners`
--

CREATE TABLE `our_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_partners`
--

INSERT INTO `our_partners` (`id`, `company_logo`, `partner_name`, `created_at`, `updated_at`) VALUES
(1, '20210610073330.svg', 'client-1', '2021-06-03 01:30:04', '2021-06-10 02:33:30'),
(2, '20210610073419.svg', 'client-2', '2021-06-03 01:30:20', '2021-06-10 02:34:19'),
(3, '20210610073432.svg', 'client-3', '2021-06-03 01:31:19', '2021-06-10 02:34:32'),
(4, '20210610073443.svg', 'client-4', '2021-06-03 01:31:34', '2021-06-10 02:34:43'),
(5, '20210610073456.svg', 'client-5', '2021-06-03 01:31:44', '2021-06-10 02:34:56'),
(6, '20210610073505.svg', 'client-6', '2021-06-03 01:32:00', '2021-06-10 02:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abdullrehman1998@gmail.com', '$2y$10$eeSuwQo7t3FhH8k/dKKnr.oNP/wDhdHRHcBVwfvjBNWAreQ3G52dG', '2021-06-01 07:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `info`, `image`, `created_at`, `updated_at`, `type`, `category`, `client`, `project_date`, `project_url`, `description`) VALUES
(3, 'LEMAHARAJA', 'LEMAHARAJA', 'le-maharaja.jpg', '2021-06-01 08:28:08', '2021-06-18 02:18:11', 'web', 'FRONT END', 'ITFALCONS', '2021-06-03', 'http://localhost/Itfalcons-app/portfolio', 'France Based Resturant'),
(4, 'STAR MARKETING', 'Real Estate', 'star.jpg', '2021-06-01 08:28:59', '2021-06-16 02:56:28', 'web', 'FRONT END', 'ITFALCONS', '2021-06-18', 'http://localhost/Itfalcons-app/portfolio', 'Real Estate'),
(5, 'Easca Property Solutions', 'Provides best Property solutions', 'easca.jpg', '2021-06-10 02:19:45', '2021-06-18 02:19:25', 'web', 'web', 'Easca Property Solutions', '2021-06-10', 'https://easca.pk/', 'Provides best Property solutions'),
(6, 'Falettis Hotel', 'Falettis Hotel', 'falettis.jpg', '2021-06-10 02:22:33', '2021-06-16 01:45:29', 'web', 'web', 'Falettis Hotel', '2021-06-10', 'https://falettishotel.com/', 'Falettis Hotel'),
(9, 'AM GROUP', 'AM GROUP', '20210615090235.jpg', '2021-06-15 04:02:35', '2021-06-15 04:02:35', 'web', 'AM GROUP', 'AM GROUP', '2021-05-30', '#', 'Electric Poles'),
(10, 'LEMAHARAJA  APP', 'LEMAHARAJA APP', '20210615090500.jpg', '2021-06-15 04:05:00', '2021-06-15 04:05:00', 'app', 'app', 'LEMAHARAJA', '2021-05-31', '#', 'LEMAHARAJA APP'),
(11, 'IMPERIAL HOTEL', 'IMPERIAL HOTEL', 'imperial.jpg', '2021-06-16 01:50:29', '2021-06-18 02:20:39', 'web', 'web', 'IMPERIAL HOTEL', '2021-06-01', 'https://ihms.com.pk/', 'Hotel Management Service'),
(12, 'KABABJEES', 'Resturant', 'kabab.jpg', '2021-06-16 02:58:37', '2021-06-18 02:21:30', 'web', 'Front End', 'KABABJEES', '2021-05-30', 'https://kababjees.com/', 'KABABJEES'),
(13, 'BAZ CONSULTING', 'BAZ CONSULTING', 'baz.jpg', '2021-06-16 03:11:05', '2021-06-18 02:27:43', 'web', 'web', 'BAZ CONSULTING', '2021-06-02', 'https://bazconsulting.com/', 'Business Consultancy'),
(14, 'AM GROUP', 'AM GROUP LOGO', '20210618072702.jpg', '2021-06-18 02:27:02', '2021-06-18 02:27:02', 'car', 'Logo', 'AM GROUP', '2021-06-01', '#', 'AM GROUP LOGO'),
(15, 'CITADEL BILLING', 'CITADEL BILLING LOGO', '20210618072924.jpg', '2021-06-18 02:29:24', '2021-06-18 02:29:24', 'car', 'Logo', 'CITADEL BILLING', '2021-06-01', '#', 'CITADEL BILLING LOGO'),
(16, 'DESI MANDEE', 'DESI MANDEE LOGO', 'desi-mockup.jpg', '2021-06-18 02:30:17', '2021-06-22 00:21:59', 'car', 'Logo', 'DESI MANDEE', '2021-06-02', '#', 'DESI MANDEE LOGO'),
(17, 'Easca Property Solutions', 'Easca Property Solutions LOGO', '20210618073110.jpg', '2021-06-18 02:31:10', '2021-06-18 02:31:10', 'car', 'Logo', 'Easca Property Solutions', '2021-05-31', '#', 'Easca Property Solutions'),
(18, 'IMPERIAL HOTEL', 'IMPERIAL HOTEL LOGO', 'imperial-new.jpg', '2021-06-18 02:33:04', '2021-06-22 00:24:05', 'car', 'Logo', 'IMPERIAL HOTEL', '2021-06-08', 'https://ihms.com.pk/', 'IMPERIAL HOTEL LOGO'),
(19, 'KABABJEES', 'KABABJEES LOGO', '20210618073352.jpg', '2021-06-18 02:33:52', '2021-06-18 02:33:52', 'car', 'Logo', 'KABABJEES', '2021-06-01', '#', 'KABABJEES'),
(20, 'STAR MARKETING', 'STAR MARKETING LOGO', '20210622052735.jpg', '2021-06-22 00:27:35', '2021-06-22 00:27:35', 'car', 'Logo', 'STAR MARKETING', '2021-06-01', 'https://starmarketingonline.com/', 'STAR MARKETING'),
(21, 'Falettis Hotel', 'Falettis Hotel LOGO', '20210622052911.jpg', '2021-06-22 00:29:11', '2021-06-22 00:29:11', 'car', 'Falettis Hotel', 'Falettis Hotel', '2021-06-08', 'https://falettishotel.com/', 'Falettis Hotel'),
(22, 'CITADEL BILLING', 'CITADEL BILLING LOGO', '20210622053225.jpg', '2021-06-22 00:32:25', '2021-06-22 00:32:25', 'car', 'Logo', 'CITADEL BILLING', '2021-06-01', '#', 'CITADEL BILLING');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_img`, `portfolio_id`, `created_at`, `updated_at`) VALUES
(17, 'slide6.jpg', 9, '2021-06-15 04:02:35', '2021-06-15 04:02:35'),
(18, 'slide11.jpg', 10, '2021-06-15 04:05:00', '2021-06-15 04:05:00'),
(23, 'falettis.jpg', 6, '2021-06-18 02:16:34', '2021-06-18 02:16:34'),
(24, 'le-maharaja.jpg', 3, '2021-06-18 02:18:11', '2021-06-18 02:18:11'),
(25, 'easca.jpg', 5, '2021-06-18 02:19:25', '2021-06-18 02:19:25'),
(27, 'imperial.jpg', 11, '2021-06-18 02:21:01', '2021-06-18 02:21:01'),
(28, 'kabab.jpg', 12, '2021-06-18 02:21:30', '2021-06-18 02:21:30'),
(30, 'ammockup.jpg', 14, '2021-06-18 02:27:02', '2021-06-18 02:27:02'),
(31, 'baz.jpg', 13, '2021-06-18 02:27:43', '2021-06-18 02:27:43'),
(32, 'citadel-mockup.jpg', 15, '2021-06-18 02:29:24', '2021-06-18 02:29:24'),
(33, 'desimandee-mockup.jpg', 16, '2021-06-18 02:30:17', '2021-06-18 02:30:17'),
(34, 'easca-mockup.jpg', 17, '2021-06-18 02:31:10', '2021-06-18 02:31:10'),
(36, 'kabab-mockup.jpg', 19, '2021-06-18 02:33:52', '2021-06-18 02:33:52'),
(37, 'imperial-new.jpg', 18, '2021-06-22 00:24:05', '2021-06-22 00:24:05'),
(38, 'star-markrting.jpg', 20, '2021-06-22 00:27:35', '2021-06-22 00:27:35'),
(39, 'falettis.jpg', 21, '2021-06-22 00:29:11', '2021-06-22 00:29:11'),
(40, 'citadel.jpg', 22, '2021-06-22 00:32:25', '2021-06-22 00:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_reqs`
--

CREATE TABLE `project_reqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `info`, `long_description`, `s_image`, `created_at`, `updated_at`, `description`) VALUES
(2, 'fa fa-magic', 'IT Services', 'IT Services', 'Every organization wants to maintain such systems within an organization that are user friendly, easy-to-use and understandable. But with rapidly increasing advancements in technology make difficult for maintaining and implementing the changes within the organization.  To cope with such problems, every organization needs assistance and advice for using services that trace them in the right direction of success. Our combined package of IT consulting and services fulfill the client’s requirements and produce solutions for problems. IT Falcons providing infrastructure services which are correlated to hardware, software and services shared within the organization. Our major infrastructure components comprised on the following platforms:', 'SEO.png', '2021-06-01 08:41:57', '2021-06-25 01:36:07', '<li style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: large; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">We are providing different and unique services to our clients like:</span></li><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgb(109, 109, 109); text-align: center;\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Outsourcing services:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We do outsourcing of computers and internet related work such as programming to other companies.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Developing and managing your products from scratch till the final upshot:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Like database systems, computer software, networks.</p><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br></p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: none;\"><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Accounting software:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">This service records and processes accounting transactions within functional modules such as accounts payable, accounts receivable, general ledger, payroll, and trial balance.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Web development project:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We creates web sites including programming, software development, network administration, development of databases, search engine optimization, graphic design and much more.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Data Analysis (SPSS and NVIVO):</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">NVIVO is a qualitative data analysis which is done through different sources like social media, websites, observation, documents etc. We use NVIVO to draw conclusions, to develop theories and to test hypotheses. We also use SPSS to perform data entry and analysis and to create tables and graphs etc.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Support IT projects:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">It means we oversees the planning, organizing and implementation of a project.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Logo Design:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We also design graphical images to recognize any organization easily through that logo.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Print Media:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We provide wire services, magazines, and other publications, newspapers, community newsletters, reporting and editing.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Corporate Branding:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We promote brand names as well. It also includes logo design ,brochures and visiting cards and much more.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Advertising:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We do audio and visual form of marketing communication to promote or sell a product or services</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: none;\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Social Media Optimization:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We uses SMOS (social media optimization services) to build solid brand, loyalty and customer base on social network.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Bulk Email Marketing:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We send all the content relevant to our business or interest, to our listed customers or prospects from a single application.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Domain Registration:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Domain registration requires utilizing the services of a domain name registrar. It identifies one or more IP addresses with a name that is easier to remember and use in URLs to identify particular Web pages</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Web Hosting:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Our web hosting service is providing storage space and access for websites and technologies needed for the website or web page to be viewed in internet.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Dedicated IP:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We use this dedicated IP to a single hosting account, to view our website and also uses SSL Certificates.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• SSL Certification:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">It includes dedicated IP for classic hosting accounts so we don’t have to purchase a dedicated IP separately.</p></ul></ul></ul>'),
(3, 'fa fa-desktop', 'Web Development', 'Web Development', 'In order to accomplish our client’s highly focused business objectives and needs, our team of professionals develop dynamic and secure websites that reach their target market, meet company goals and lend a strong support to sales strategies. We offer database driven websites allowing the administrator to manage the content of the various areas of the website from a control panel and have friendly Content Management System. On completion of the development process we also offer services that help our clients to reach the intended audience', 'web.png', '2021-06-01 08:42:53', '2021-06-18 05:40:36', '<span style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify;\">For development purposes we use HTML, PHP, CSS, DHTML, AJAX, JavaScript, XML, Perl etc. For Server and Database Applications – Apache, MYSQL, MS SQL. We also provide custom template design services of modern Open Source CMS solutions like Joomla/Mamboo, WordPress, Drupal, etc.</span>'),
(4, 'fa fa-id-card', 'Branding', 'Branding', 'Our company also deals with branding. We have expertise in designing tools that are useful to promote the product and service. IT Falcons gives a unique identification logo to your business. Our branding imprints an image of your business i.e., what you aim to do and what offers differentiate you from your competitor. Branding is the most significant aspect of a business. Our creative and unique logos give you a distinct identification and a high edge in the competitor’s market. In creating unique logos, our major focus is to establish your consistent and distinguished presence in the market that attracts the customers and retain them loyal with you', 'B.png', '2021-06-01 08:43:41', '2021-06-18 05:42:00', 'Branding'),
(5, 'fa fa-cogs', 'Training and Development', 'Training and Development', 'IT Falcons offers training and development programs for their employees to make stronger knowledge base. Some employees have weaknesses in their workplace. The training program assist them to improve their skills. The development program takes all employees to the higher level of skills. So, all the members of the company work at the same level. This improvement of the worker’s skill influence our company’s economy growth.', 'training.png', '2021-06-01 08:44:38', '2021-06-24 02:33:19', '<span style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify;\">For training and development, we are providing new skills to our people, different sessions and workshops are conducted to them for their better development, we are giving different pieces of training like Technological training to our people, Leadership training, Diversity training. Whenever we start our new project we involve our new employees to let them know about new product or service we are going to launch. We are also providing: Quality training, Skills training, Managerial training as well. Our company also provide some financial training like To enable participants to deal effectively with different kind of credit customers based on real life examples, To provide adequate knowledge about the loan recovery process.</span>'),
(6, 'fa fa-film', 'Social Media Promotion', 'Social Media Promotion', 'In 21st century, the word “social” turned to complete different meaning. Now people make friends “online” rather in their surroundings. They chat online, make conversation calls on net, share their feelings on just one click. Means of communication are changed at 360 angle. These changes not only influence the daily routine life of the people but also make a great impact on business communication.  IT Falcons also facilitates in promoting the business on just one click. Our media managing team offers such strategies and social tools that builds collaboration between customer and company. Social tools such as Facebook, Twitter, LinkedIn, Instagram and Google+ are used for promoting the products, promotions, announcements and amendments in the business. People’s direct response help the company to understand their needs and wants. We create a communication bridge between customer and company.', 'SM1 (2).png', '2021-06-01 08:45:32', '2021-07-08 13:08:19', '<p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109);\">On <span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">INSTAGRAM</span> and <span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">TWITTER,</span> we simply use hashtags with relevant images and uses the simple words to promote our services which could easily be understood by everyone.</p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109);\">On <span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">GOOGLE PLUS</span> we will include keywords and relevant links on our page, connect with our whole audience using google+ events and then often post and optimize for best search results. We also create circles to segment connections to send updates or to share content. We create a collection of our blog posts and give subscribers another way to get updates from our blog.</p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109);\">To promote products and services through digital marketing we use different channels like SEO, SMO, PPC, SEM, etc are more cost-effective channels of digital marketing. We do real-time marketing leads to increase in customer’s satisfaction and experience thus it boosts our business.</p><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109);\"></p>'),
(8, 'fa fa-mobile', 'APPLICATIONDEVELOP MENT', 'APPLICATION DEVELOPMENT', 'We the “IT FALCONS” develop a mobile application, web applications, desktop applications, and database applications.', 'App1.png', '2021-07-29 01:34:31', '2021-07-29 01:41:36', '<p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">We design applications for the client’s convenience and gave recognition to your business in the market. IT Falcons have skillful and experienced developers who know well the programming strategies and the latest changes in the IT world. Distinctly from others, we are not only confined to the most demanding “mobile applications” in the market but also develop “desktop applications” on the organization’s demand.</p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">Desktop applications are the beginning applications in the software industry. These are used within the organization sector on stand-alone computers which are interconnected. These applications are beneficial and operative in terms of security, connectivity, and cost factor. Users have total control over the desktop application; no other person can interrupt or make changes to the application. For connectivity to operate these applications, end-users have no need for the internet. Without any speed and connectivity hindrance, they are cost-effective as well. Desktop applications do not require continuous changes, only maintenance requires in certain cases.</p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">Our activity includes programming and after this, we develop applications according to customer interest and language.</p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">Languages include:</p>'),
(9, 'fa fa-search', 'RESEARCH', 'RESEARCH', 'Before working on any project, we conduct a research to know about the needs, demand and wants of the company. It helps our consultants to infer conclusions. Also, guides them on how and where this project will lead to the final result.', '20210729070140.png', '2021-07-29 02:01:40', '2021-07-29 02:01:40', '<p><span style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify;\">Before working on any project, we conduct research to know about the needs, demands and wants of the company. It helps our consultants to infer conclusions. Also, guides them on how and where this project will lead to the final result.</span></p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">We also do some other researches like:</p><div><br></div><p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify;\"></p>'),
(10, 'fa fa-puzzle-piece', 'STRATEGY', 'STRATEGY', 'We the “IT FALCONS” also develop strategies for our customers to align with the project. We provide guidance to customers so that they can gain more revenue. We have a specific team for planning who plans how to capture the market, how much amount to be put in which area, ways of getting profit.', NULL, '2021-07-29 02:18:12', '2021-07-29 03:22:53', '<p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">In this rapidly changing tech world, a definite strategy support the business where you should lead. Without any plans or goals, your efforts become meaningless and inattentive. IT Falcons gave the right direction to your business and provide a vivid strategy to achieve long-term success.<br><br>We also have a grip on business plans, business proposals,s, and tag lines. We also help people in minimizing the risk by providing risk consultation.</p><p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"></p><li style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: large; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Risk consultation includes:</span></li><p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"></p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgb(109, 109, 109); text-align: center;\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Financial Risk Management:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Our Financial Risk Management experts help by guiding firms on how to turn risk into opportunity. We provide financial risk management services to help companies, corporate and private SME clients to manage, identify and minimize the risks they face.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Business Process Re-engineering:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We deal with the latest BPR practices in IT along with up-to-date management tools. Our team helps customers in continuously improving and manage changes, result-oriented work performance through innovative techniques based on the operational requirements. During the process, we make sure that all employees are informed about the redesigned work frame and execute them in the most profitable and efficient manner, organize work based on results and understand the various capabilities in an organization, and redesigning them in the order of their importance.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Investment Analysis:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We deal with investment analysis. We develop cost and benefit estimates that are important to make effective decisions. We have consultants who specialize in cost-benefit analysis, economic analysis, life cycle cost and benefits estimation and analysis, operations research, cost research, business case development, analysis, and evaluation, risk/uncertainty analysis, and alternatives analysis.</p></ul>'),
(11, 'fas fa-chalkboard-teacher', 'IT CONSULTING', 'IT CONSULTING', 'We the “IT FALCONS” also develop strategies for our customers to align with the project. We provide guidance to customers so that they can gain more revenue. We have a specific team for planning who plans how to capture the market, how much amount to be put in which area, ways of getting profit.', NULL, '2021-07-29 02:25:51', '2021-07-29 02:26:01', '<p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); text-align: justify;\">In this rapidly changing tech world, a definite strategy supports the business where you should lead. Without any plans or goals, your efforts become meaningless and inattentive. IT Falcons gave the right direction to your business and provide a vivid strategy to achieve long-term success.<br><br>We also have a grip on business plans, business proposals,s, and tag lines. We also help people in minimizing the risk by providing risk consultation.</p><p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"></p><li style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: large; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(109, 109, 109); float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Risk consultation includes:</span></li><p><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"><br style=\"color: rgb(109, 109, 109); font-family: Poppins, sans-serif; font-size: 15px; text-align: center;\"></p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgb(109, 109, 109); text-align: center;\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Financial Risk Management:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Our Financial Risk Management experts help by guiding firms on how to turn risk into opportunity. We provide financial risk management services to help companies, corporate and private SME clients to manage, identify and minimize the risks they face.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Business Process Re-engineering:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We deal with the latest BPR practices in IT along with up-to-date management tools. Our team helps customers in continuously improving and manage changes, result-oriented work performance through innovative techniques based on the operational requirements. During the process, we make sure that all employees are informed about the redesigned work frame and execute them in the most profitable and efficient manner, organize work based on results, and understand the various capabilities in an organization, and redesigning them in the order of their importance.</p><br><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: left;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">• Investment Analysis:</span></li><br><p class=\"text-justify\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">We deal with investment analysis. We develop cost and benefit estimates that are important to make effective decisions. We have consultants who specialize in cost-benefit analysis, economic analysis, life cycle cost and benefits estimation and analysis, operations research, cost research, business case development, analysis, and evaluation, risk/uncertainty analysis, and alternatives analysis.</p></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `service_teches`
--

CREATE TABLE `service_teches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `technology` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_teches`
--

INSERT INTO `service_teches` (`id`, `technology`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'Angular js', 3, '2021-06-01 08:46:14', '2021-06-01 08:46:14'),
(2, 'Wordpress and Laravel', 5, '2021-06-01 08:46:47', '2021-06-01 08:46:47'),
(3, 'Facebook Linkedin Instagram', 6, '2021-06-01 08:47:45', '2021-06-01 08:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `subscriberusers`
--

CREATE TABLE `subscriberusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriberusers`
--

INSERT INTO `subscriberusers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mrayazsiyal@gmail.com', '2021-06-02 01:36:50', '2021-06-02 01:36:50'),
(2, 'mrayazsiyal@gmail.com', '2021-06-09 08:36:36', '2021-06-09 08:36:36'),
(3, 'mrayazsiyal@gmail.com', '2021-06-10 05:02:07', '2021-06-10 05:02:07'),
(4, 'mrayazsiyal@gmail.com', '2021-06-21 08:04:21', '2021-06-21 08:04:21'),
(5, 'admin@filetickets.ca', '2021-07-28 07:08:03', '2021-07-28 07:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inst` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnkd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `designation`, `fb`, `twt`, `inst`, `lnkd`, `created_at`, `updated_at`) VALUES
(1, '20210610062726.jpg', 'Umer Liaqat', 'UI/UX and Graphic Designer', '#', '#', '#', '#', '2021-06-01 07:41:08', '2021-06-10 01:27:26'),
(2, '20210610062913.jpg', 'S.M.Hassan Zaidi', 'Executive Software Engineer', '#', '#', '#', '#', '2021-06-01 08:55:30', '2021-06-10 01:29:13'),
(3, '20210610063021.jpg', 'Ayaz Ahmad', 'Associate Software Engineer', '#', '#', '#', '#', '2021-06-01 08:56:10', '2021-06-10 01:30:21'),
(4, '20210610065258.png', 'Talha Wajid', 'SEO / Content Writer', '#', '#', '#', '#', '2021-06-10 01:52:58', '2021-06-10 01:52:58'),
(5, '20210610065537.png', 'Amir Mukhtar', 'Junior Graphic Designer', '#', '#', '#', '#', '2021-06-10 01:55:37', '2021-06-10 01:55:37'),
(6, '20210610065616.png', 'Faisal Mehmood', 'Junior Graphic Designer', '#', '#', '#', '#', '2021-06-10 01:56:16', '2021-06-10 01:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `designation`, `description`, `created_at`, `updated_at`) VALUES
(3, '20210609111028.png', 'Imran Mukhtar', 'CEO GNC Pakistan', 'We were most impressed by the collaboration and timely delivery of a complete project, we worked well together', '2021-06-01 08:53:13', '2021-06-09 06:10:28'),
(4, '20210609111258.png', 'Ali Habib', 'IT manager Star Marketing Pvt Ltd', 'We worked several times with ITFALCONS and I found them to offer a lot of value based on their skills, talent, professionalism, and rate', '2021-06-01 08:54:24', '2021-06-09 06:12:58'),
(5, '20210609111702.png', 'Ramsha Imtiaz', 'Social Media Manager Imperial Hotel Management System', 'Team ITFALCONS developed a highly accurate product in a short period of time. Their enthusiasm for the project and their ability to bring input to the table set them apart', '2021-06-09 06:17:02', '2021-06-09 06:17:02'),
(6, '20210609111844.png', 'Ahmer Ayub', 'IT-Manager Faletti\'s Hotel Lahore', 'We worked several times with ITFALCONS and I found them to offer a lot of value based on their skills, talent, professionalism, and rate', '2021-06-09 06:18:44', '2021-06-09 06:18:44'),
(7, '20210609112038.png', 'Murtaza Mehmood', 'MD  Le-Maharaja', 'Wonderful.Thank you, !!! The team ITFALCONS did a great job and accomplished on a short time span that people said was impossible', '2021-06-09 06:20:38', '2021-06-09 06:20:38'),
(8, '20210609112238.png', 'Bilal Ahmed', 'CEO  Baz Consulting', 'We have been very happy with our decision to make ITFALCONS as a project partner', '2021-06-09 06:22:38', '2021-06-09 06:22:38'),
(9, '20210609112446.png', 'Waqar Elahi', 'GM DHA Club Lahore', 'ITFALCONS has a solid technology team and on-time delivery. Very happy to be associated with them', '2021-06-09 06:24:46', '2021-06-09 06:24:46'),
(10, '20210609112756.png', 'Ali Asad', 'CEO  Mywebset', 'Great work!!! The team ITFALCONSwas solid, efficient and knowledgeable. They did an amazing job on my very challenging Web app. I will be using them again. Thank you for doing such a great job!', '2021-06-09 06:27:56', '2021-06-09 06:27:56'),
(11, '20210609112924.png', 'Rameez Mustafa', 'IT Consultant Honeywell', 'We got our APP delivered on time.ITFALCONS is our technology partner and we are quite happy with the work. I see a great future for this company. Keep making happy clients', '2021-06-09 06:29:24', '2021-06-09 06:29:24');

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
(1, 'Abdul Rehman', 'abdullrehman1998@gmail.com', NULL, '$2y$10$nasdMP7p3sqI6MoxeJOnQ.GnJqAmH4Vk4cE0SaU5kEYf/MqC8683O', NULL, '2021-05-27 00:31:13', '2021-05-27 00:31:13'),
(2, 'Abdul Rehman', 'abdullrehman1997@gmail.com', NULL, '$2y$10$MmCj.sKawjRx.YTJ03.o1uZYih56P6vl5prboZc.ONOEYpfQIYmvS', NULL, '2021-05-27 00:43:09', '2021-05-27 00:43:09'),
(3, 'Abdul Rehman', 'admin@admin.com', NULL, '$2y$10$93tZGBFewF78jbRcD1PvXus1w9WlS55wPz7RogB6/YX.IhioGD.Fe', NULL, '2021-06-01 07:19:53', '2021-06-01 07:19:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_icons`
--
ALTER TABLE `about_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_videos`
--
ALTER TABLE `about_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `our_partners`
--
ALTER TABLE `our_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_images_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `project_reqs`
--
ALTER TABLE `project_reqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_teches`
--
ALTER TABLE `service_teches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_teches_service_id_foreign` (`service_id`);

--
-- Indexes for table `subscriberusers`
--
ALTER TABLE `subscriberusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_icons`
--
ALTER TABLE `about_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_videos`
--
ALTER TABLE `about_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `our_partners`
--
ALTER TABLE `our_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `project_reqs`
--
ALTER TABLE `project_reqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_teches`
--
ALTER TABLE `service_teches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriberusers`
--
ALTER TABLE `subscriberusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD CONSTRAINT `portfolio_images_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`);

--
-- Constraints for table `service_teches`
--
ALTER TABLE `service_teches`
  ADD CONSTRAINT `service_teches_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

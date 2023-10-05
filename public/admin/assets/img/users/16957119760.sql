-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindustrify_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 'uploads/custom-images/about-us-2022-02-11-03-38-59-6582.jpg', NULL, '2022-01-30 12:30:23', '2023-05-10 12:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_type` int(10) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `forget_password_token` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_type`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `status`, `forget_password_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe', 'admin@gmail.com', 'uploads/website-images/ibrahim-khalil-2022-01-30-02-48-50-5743.jpg', NULL, '$2y$10$vDLsSUcLA0nZZayiIO/bKONVCnqzfVwvxSMnMJ1nIH5cLFm9jBEk6', 'OmteOxKEifpVFKBF1QSihiARP5FatioJDVM6mbZ7yhBeYXnFpi9vrsypw5w0', 1, 'KghrcqUVX6aKKUrP45Y02bDDZ2zcssaHHTgxssBkxPiduKetXTFjqyxmrMie8Vp5cDSq8KZjVw7U9LkcWuQdiMsbN5F1V7U8ZSJ9', NULL, '2022-02-07 04:50:11'),
(5, 0, 'David Simmons', 'admin1@gmail.com', NULL, NULL, '$2y$10$xLgODD6BDFlE1.pkkqCbrewtDS28BlzJZdV6DRj4ZlMmg139Xaxdi', NULL, 1, NULL, '2022-02-07 05:36:28', '2022-02-07 05:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_modals`
--

CREATE TABLE `announcement_modals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `footer_text` varchar(191) DEFAULT NULL,
  `expired_date` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_modals`
--

INSERT INTO `announcement_modals` (`id`, `status`, `title`, `description`, `image`, `footer_text`, `expired_date`, `created_at`, `updated_at`) VALUES
(1, 0, 'GET UP TO 75% OFF', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, facere nesciunt doloremque nobis debitis sint?', 'uploads/website-images/announcement-2022-02-07-10-02-01-9027.jpg', 'Don\'t Show This Popup Again', 4, NULL, '2022-02-10 09:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `bank_payments`
--

CREATE TABLE `bank_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `account_info` text DEFAULT NULL,
  `cash_on_delivery_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_payments`
--

INSERT INTO `bank_payments` (`id`, `status`, `account_info`, `cash_on_delivery_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bank Name: Your bank name\r\nAccount Number:  Your bank account number\r\nRouting Number: Your bank routing number\r\nBranch: Your bank branch name', 1, NULL, '2022-01-27 05:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `banner_location` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `header` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `title`, `description`, `link`, `image`, `button_text`, `banner_location`, `status`, `header`, `created_at`, `updated_at`) VALUES
(1, 'Permanent Magnet Motor', 'Hot Deals', 'product', 'uploads/website-images/Mega-menu-2022-02-13-07-53-14-1062.png', 'Shop Now', 'home', 1, NULL, NULL, '2022-02-13 13:53:14'),
(2, 'Up To -20% Off', 'Hot Deals', 'product', 'uploads/website-images/banner--2022-02-10-10-24-47-2663.jpg', 'Shop Now', 'home', 1, NULL, NULL, '2022-02-13 13:45:52'),
(3, 'Up To -35% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-06-03-42-16-1335.png', 'Shop Now', 'home', 1, NULL, NULL, '2022-02-13 13:46:01'),
(4, 'Up To -40% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-06-03-42-16-1434.png', 'Shop Now', 'Home Page First Two Column Banner Two', 1, NULL, NULL, '2022-02-13 13:46:01'),
(5, 'Up To -28% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-06-04-18-01-2862.jpg', 'Shop Now', 'Home Page Second Two Column Banner one', 1, NULL, NULL, '2022-02-13 13:46:15'),
(6, 'Up To -22% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-06-04-18-01-6995.jpg', 'Shop Now', 'Home Page Second Two Column Banner two', 1, NULL, NULL, '2022-02-13 13:46:15'),
(7, 'Up To -35% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-13-04-57-46-4114.jpg', 'Shop Now', 'Home Page Third Two Column Banner one', 1, NULL, NULL, '2022-02-13 13:46:27'),
(8, 'Up To -15% Off', 'Hot Deals', 'product', 'uploads/website-images/banner-2022-02-13-04-58-43-7437.jpg', 'Shop Now', 'Home Page Third Two Column Banner Two', 1, NULL, NULL, '2022-02-13 13:46:27'),
(9, 'This is Tittle', 'This is Description', 'product', 'uploads/website-images/banner-2022-02-06-04-24-44-6895.jpg', 'dd', 'Shopping cart bottom', 1, '', NULL, '2022-02-13 13:47:23'),
(10, 'This is Title', 'This is Description', 'product', 'uploads/website-images/banner-2022-02-06-04-25-59-9719.jpg', NULL, 'Shopping cart bottom', 0, NULL, NULL, '2022-02-13 13:47:23'),
(11, 'This is Tittle', 'This is Description', 'product', 'uploads/website-images/banner-2022-02-06-04-26-46-8505.jpg', 'dd', 'Campaign page', 1, '', NULL, '2022-02-13 13:47:31'),
(12, 'This is Tittle', 'This is Description', 'product', 'uploads/website-images/banner-2022-01-30-06-21-06-4562.png', 'dd', 'Campaign page', 0, '', NULL, '2022-02-13 13:47:31'),
(13, 'This is Tittle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Shop Now', 'uploads/website-images/banner-2022-02-07-10-48-37-9226.jpg', 'dd', 'Login page', 0, 'Our Achievement', NULL, '2022-02-07 04:48:39'),
(14, 'Black Friday Sale', 'Up To -70% Off', 'product', 'uploads/website-images/banner-2022-02-06-04-24-02-9777.jpg', NULL, 'Product Detail', 1, NULL, NULL, '2022-02-13 13:46:54'),
(15, 'Default Profile Image', NULL, NULL, 'uploads/website-images/default-avatar-2022-02-07-10-10-46-1477.jpg', NULL, 'Default Profile Image', 0, NULL, NULL, '2022-02-07 04:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `user_id`, `street_address`, `department`, `name`, `email`, `phone`, `address`, `country_id`, `state_id`, `city_name`, `zip_code`, `created_at`, `updated_at`) VALUES
(177, 233, 'Quia dolor qui sit', 'Harum aut et quia Na', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '74955', '2023-06-14 09:31:32', '2023-06-14 09:31:32'),
(178, 234, 'Aut laudantium corr', 'Sed ad in impedit d', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '16389', '2023-06-14 09:37:05', '2023-06-14 09:37:05'),
(179, 235, 'Voluptates qui earum', 'Tenetur saepe ut eni', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '17106', '2023-06-14 09:39:28', '2023-06-14 09:39:28'),
(181, 237, 'Ullamco voluptatem', 'Sed quasi a culpa n', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '44506', '2023-06-14 09:48:46', '2023-06-14 09:48:46'),
(182, 238, 'Est hic minim sapien', 'Fuga Proident mini', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '98463', '2023-06-14 11:42:37', '2023-06-14 11:42:37'),
(183, 239, 'Laudantium doloribu', 'Mollitia laborum inv', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '10339', '2023-06-14 12:20:56', '2023-06-14 12:20:56'),
(190, 246, 'Nam et do adipisicin', 'Non consectetur volu', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '90526', '2023-06-14 12:57:28', '2023-06-14 12:57:28'),
(191, 247, 'Commodo quo quo faci', 'Eum quo laborum dele', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '16628', '2023-06-14 13:00:23', '2023-06-14 13:00:23'),
(192, 248, 'Dolor labore quia op', 'Id sed tenetur repre', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '48701', '2023-06-14 13:10:17', '2023-06-14 13:10:17'),
(195, 251, 'Voluptatibus aliqua', 'Cum repudiandae ipsu', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '23188', '2023-06-14 13:18:54', '2023-06-14 13:18:54'),
(196, 252, 'Deserunt fuga Nihil', 'Quidem est officiis', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '49771', '2023-06-14 13:22:32', '2023-06-14 13:22:32'),
(200, 256, 'Deserunt sit quia ne', 'Tenetur voluptatibus', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '36670', '2023-06-14 13:36:04', '2023-06-14 13:36:04'),
(201, 257, 'Aut cum cum irure co', 'Dolor odio quasi vol', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '75510', '2023-06-14 13:37:37', '2023-06-14 13:37:37'),
(206, 262, 'Inventore dolores iu', 'Sunt cupidatat non a', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '93402', '2023-06-14 13:51:56', '2023-06-14 13:51:56'),
(207, 263, 'Culpa velit qui reru', 'Quo reiciendis at no', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '47289', '2023-06-14 13:55:03', '2023-06-14 13:55:03'),
(211, 267, 'Nihil et aut omnis d', 'Exercitation officia', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '47498', '2023-06-14 14:09:28', '2023-06-14 14:09:28'),
(212, 268, 'Accusantium numquam', 'Aut sed sit dolor ea', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '61677', '2023-06-14 14:11:24', '2023-06-14 14:11:24'),
(213, 269, 'Cillum hic expedita', 'Ipsa nihil maxime o', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '28345', '2023-06-14 14:16:08', '2023-06-14 14:16:08'),
(214, 270, 'Aperiam commodo temp', 'Voluptatem in quidem', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '90872', '2023-06-14 14:19:44', '2023-06-14 14:19:44'),
(223, 279, 'Ea autem distinctio', 'Natus quae quae est', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '53778', '2023-06-14 15:02:32', '2023-06-14 15:02:32'),
(225, 281, 'Ab autem quisquam fu', 'Sit nihil amet maio', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '92518', '2023-06-14 15:10:09', '2023-06-14 15:10:09'),
(229, 285, 'In sit iure amet a', 'Maiores dolore exerc', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '12190', '2023-06-14 15:26:18', '2023-06-14 15:26:18'),
(232, 288, 'Sint ab esse nulla', 'Explicabo Labore la', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '50364', '2023-06-14 15:34:25', '2023-06-14 15:34:25'),
(233, 289, 'Vitae alias vel aute', 'Sed aut mollit sint', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '96046', '2023-06-14 15:38:29', '2023-06-14 15:38:29'),
(234, 290, 'Veniam sed nulla pe', 'Nulla voluptatem Oc', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '28177', '2023-06-14 15:42:12', '2023-06-14 15:42:12'),
(235, 291, 'Nulla ad et fugit i', 'Et aspernatur modi p', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '75000', '2023-06-15 07:19:27', '2023-06-15 07:19:27'),
(236, 292, 'Hic aliquam excepteu', 'Placeat qui do sunt', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '33863', '2023-06-15 08:05:32', '2023-06-15 08:05:32'),
(237, 293, 'Dolore reprehenderit', 'Ipsa eaque nobis ob', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '52976', '2023-06-15 08:14:13', '2023-06-15 08:14:13'),
(242, 298, 'Distinctio Vero eli', 'Harum vel quas numqu', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '58243', '2023-06-15 08:50:10', '2023-06-15 08:50:10'),
(246, 302, 'Totam ad adipisci ut', 'Rerum neque nisi ven', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '27983', '2023-06-15 09:08:11', '2023-06-15 09:08:11'),
(247, 303, 'Ratione nostrud sequ', 'Excepturi incididunt', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '71118', '2023-06-15 09:17:10', '2023-06-15 09:17:10'),
(248, 304, 'Sint sunt ullam tota', 'Sint anim in explica', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '27848', '2023-06-15 09:23:07', '2023-06-15 09:23:07'),
(249, 305, 'Sit dolore ut bland', 'Impedit pariatur E', NULL, NULL, NULL, NULL, 2, 5, 'Lahore', '45027', '2023-06-15 09:39:30', '2023-06-15 09:39:30'),
(250, 306, 'Incidunt maxime non', 'Autem velit non est', NULL, NULL, NULL, NULL, 233, 2955, 'Lahore', '18556', '2023-06-20 07:30:33', '2023-07-03 12:49:55'),
(251, 307, 'Qui officiis veniam', 'Tempora fugiat assu', NULL, NULL, NULL, NULL, 167, 3037, 'Lahore', '17064', '2023-07-03 08:21:46', '2023-07-05 13:49:27'),
(252, 308, 'Laboris dolore sunt', 'Tempor voluptas nesc', NULL, NULL, NULL, NULL, 167, 3032, 'Lahore', '24269', '2023-07-06 12:01:10', '2023-07-06 12:01:10'),
(254, 310, 'Sunt occaecat ut ad', 'Occaecat quisquam mo', NULL, NULL, NULL, NULL, 167, 3035, 'Islamabad', '77193', '2023-08-08 06:50:08', '2023-08-08 06:50:08'),
(255, 311, 'Non porro a autem hi', 'Enim sint error sunt', NULL, NULL, NULL, NULL, 167, 3037, 'Chadwick Mcleod', '52967', '2023-08-08 09:29:21', '2023-08-08 09:29:21'),
(256, 312, 'Natus delectus quas', 'At distinctio Ab qu', NULL, NULL, NULL, NULL, 115, 2994, 'Imelda Ross', '81347', '2023-08-18 09:29:42', '2023-08-18 09:29:42'),
(257, 316, 'Iste enim cupiditate', 'Eos laboriosam vol', NULL, NULL, NULL, NULL, 7, 147, 'Jana Dunn', '86277', '2023-08-18 11:13:29', '2023-08-18 11:13:29'),
(258, 317, 'Voluptatem doloremq', 'Aliquam iste molesti', NULL, NULL, NULL, NULL, 167, 3034, 'lahore', '72520', '2023-08-18 11:22:14', '2023-08-18 11:22:14'),
(259, 319, 'Repudiandae minima v', 'Quae quia laboris vo', NULL, NULL, NULL, NULL, 158, 2916, 'Brianna Alford', '46684', '2023-08-18 11:25:45', '2023-08-18 11:25:45'),
(260, 320, 'Totam quia veniam e', 'Qui laborum Perspic', NULL, NULL, NULL, NULL, 167, 3032, 'Chancellor Yates', '76122', '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(261, 328, 'Ipsum quaerat amet', 'Aut pariatur Facili', 'Skyler', 'fane@mailinator.com', '+1 (473) 178-8373', NULL, 167, 3037, 'lahore', 'Logan', '2023-08-22 08:38:33', '2023-08-22 08:38:33'),
(273, 341, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 07:02:49', '2023-08-24 07:02:49'),
(274, 342, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahoretayyabt', 'lahore', '2023-08-24 07:18:42', '2023-08-24 07:18:42'),
(275, 343, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahoretayyabt', 'lahoretayyabt', '2023-08-24 14:47:13', '2023-08-24 14:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `description` longtext NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `show_homepage` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `admin_id`, `title`, `slug`, `blog_category_id`, `image`, `banner_image`, `description`, `views`, `seo_title`, `seo_description`, `status`, `show_homepage`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Best Delicious Coffee Shop In Bangkok China.', 'the-best-delicious-coffee-shop-in-bangkok-china', 4, 'uploads/custom-images/blog--2022-02-07-02-17-42-4747.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-22-01-3776.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 15, 'The Best Delicious Coffee Shop In Bangkok China.', 'The Best Delicious Coffee Shop In Bangkok China.', 1, 1, '2022-01-30 11:01:55', '2023-05-10 11:03:34'),
(2, 1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has rdd', 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-it-has-rdd', 4, 'uploads/custom-images/blog--2022-02-07-02-19-14-7102.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-22-18-4550.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has r', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has r', 1, 1, '2022-01-30 12:40:15', '2023-08-25 14:37:01'),
(4, 1, 'A Skin Cream That’s Proven To Work', 'a-skin-cream-thats-proven-to-work', 5, 'uploads/custom-images/blog--2022-02-07-02-21-28-8131.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-22-34-6221.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 0, 'A Skin Cream That’s Proven To Work', 'A Skin Cream That’s Proven To Work', 1, 1, '2022-02-07 08:21:34', '2023-05-10 11:03:36'),
(5, 1, 'America National Parks With Denver', 'america-national-parks-with-denver', 4, 'uploads/custom-images/blog--2022-02-07-02-23-41-8356.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-22-57-9861.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 24, 'America National Parks With Denver', 'America National Parks With Denver', 1, 1, '2022-02-07 08:23:47', '2023-05-10 11:03:45'),
(6, 1, 'A Seaside Reset In Laguna Beach', 'a-seaside-reset-in-laguna-beach', 2, 'uploads/custom-images/blog--2022-02-07-02-27-28-7281.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-23-12-1954.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p><p><br></p>', 0, 'A Seaside Reset In Laguna Beach', 'A Seaside Reset In Laguna Beach', 1, 0, '2022-02-07 08:27:35', '2023-05-10 11:03:46'),
(7, 1, 'Lorem Ipsum Is Simply Dummy Text Of The Printing', 'lorem-ipsum-is-simply-dummy-text-of-the-printing', 2, 'uploads/custom-images/blog--2022-02-07-02-31-07-4991.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-23-30-1549.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 1, 'Lorem Ipsum Is Simply Dummy Text Of The Printing', 'Lorem Ipsum Is Simply Dummy Text Of The Printing', 1, 0, '2022-02-07 08:31:13', '2023-05-10 11:03:53'),
(8, 1, 'List Of Benifits And Impressive Listeo Services', 'list-of-benifits-and-impressive-listeo-services', 2, 'uploads/custom-images/blog--2022-02-07-02-33-58-9203.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-23-46-7169.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 22, 'List Of Benifits And Impressive Listeo Services', 'List Of Benifits And Impressive Listeo Services', 1, 0, '2022-02-07 08:34:04', '2023-05-10 11:03:54'),
(9, 1, 'What People Says About Real Estate Properties', 'what-people-says-about-real-estate-properties', 3, 'uploads/custom-images/blog--2022-02-07-02-36-10-4099.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-24-02-7407.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 31, 'What People Says About Real Estate Properties', 'What People Says About Real Estate Properties', 1, 0, '2022-02-07 08:36:18', '2023-05-10 11:04:05'),
(10, 1, '9 Things I Love About Shaving My Head During Quarantine', '9-things-i-love-about-shaving-my-head-during-quarantine', 4, 'uploads/custom-images/blog--2022-02-07-02-39-06-7986.jpg', 'uploads/custom-images/blog-banner-2022-02-11-03-24-18-5178.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 4, '9 Things I Love About Shaving My Head During Quarantine', '9 Things I Love About Shaving My Head During Quarantine', 1, 0, '2022-02-07 08:39:11', '2022-02-11 09:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics', 1, '2022-01-30 11:00:57', '2022-01-30 11:00:57'),
(2, 'Lifestyle', 'lifestyle', 1, '2022-02-07 08:15:32', '2022-02-07 08:15:32'),
(3, 'Food & Drink', 'food-drink', 1, '2022-02-07 08:15:46', '2022-02-07 08:15:46'),
(4, 'Children', 'children', 1, '2022-02-07 08:16:07', '2022-02-07 08:16:07'),
(5, 'Women', 'women', 1, '2022-02-07 08:20:05', '2022-02-07 08:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, 'John Doe', 'user@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-02-08 08:28:23', '2022-02-08 08:29:25'),
(4, 1, 'David Simmons', 'david@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-02-08 08:28:51', '2022-02-08 08:29:25'),
(5, 10, 'David Richard', 'rechard@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-02-08 08:29:09', '2022-02-08 08:29:26'),
(6, 9, 'test', 'test@gmail.com', 'test test test test test test test test test test', 1, '2023-05-05 12:05:41', '2023-05-05 12:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `is_top` int(11) NOT NULL DEFAULT 0,
  `is_popular` int(11) NOT NULL DEFAULT 0,
  `is_trending` int(11) NOT NULL DEFAULT 0,
  `rating` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `status`, `is_featured`, `is_top`, `is_popular`, `is_trending`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Canon', 'canon', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 1, 0, 0, 0, 5, '2022-01-30 09:40:56', '2023-05-18 13:29:13'),
(3, 'Adidas', 'adidas', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 1, 0, 0, 0, 4, '2022-01-30 10:02:44', '2022-02-07 01:59:12'),
(6, 'Piaggio', 'piaggio-', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 1, 0, 0, 0, 5, '2022-01-30 10:10:59', '2022-02-07 01:59:43'),
(7, 'HP', 'hp', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 5, '2022-02-06 01:34:50', '2022-02-07 01:59:57'),
(8, 'Asus', 'asus', 'uploads/custom-images/asus-2022-02-08-09-32-28-5900.jpguploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 4, '2022-02-06 01:35:49', '2022-02-08 03:32:35'),
(9, 'Lenovo', 'lenovo-laptop', 'uploads/custom-images/lenovo-2022-02-08-09-33-54-2980.jpguploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 1, 0, 0, 0, 4, '2022-02-06 01:36:12', '2023-05-19 14:14:13'),
(11, 'Intel', 'intel', 'uploads/custom-images/intel-2022-02-08-09-29-45-6413.jpg', 1, 0, 0, 0, 0, 5, '2022-02-06 02:28:46', '2022-02-08 03:29:52'),
(12, 'A4Tech', 'a4tech', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 5, '2022-02-06 02:41:18', '2022-02-07 02:09:32'),
(13, 'Sony', 'sony', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 5, '2022-02-06 03:00:51', '2022-02-08 03:26:23'),
(14, 'Suzuki', 'suzuki', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 4, '2022-02-06 03:51:24', '2022-02-08 03:28:35'),
(15, 'Samsung', 'samsung', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 5, '2022-02-06 06:07:50', '2022-02-08 03:27:08'),
(16, 'Hope Riggs', 'Dolore totam cupidat', 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 1, 0, 0, 0, 0, 0, '2023-05-05 11:39:52', '2023-05-05 11:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `breadcrumb_images`
--

CREATE TABLE `breadcrumb_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image_type` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breadcrumb_images`
--

INSERT INTO `breadcrumb_images` (`id`, `location`, `image_type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Brand Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-19-00-6529.jpg', NULL, '2022-02-11 09:19:03'),
(2, 'Cart Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-19-13-2295.jpg', NULL, '2022-02-11 09:19:16'),
(3, 'Campaign Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-19-26-4555.jpg', NULL, '2022-02-11 09:19:28'),
(4, 'FAQ page', 1, 'uploads/website-images/banner-us-2022-02-11-03-19-38-5297.jpg', NULL, '2022-02-11 09:19:40'),
(5, 'User Authentication', 1, 'uploads/website-images/banner-us-2022-02-11-03-19-51-4946.jpg', NULL, '2022-02-11 09:19:53'),
(6, 'Compare Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-20-02-1928.jpg', NULL, '2022-02-11 09:20:04'),
(7, 'Order Tracking Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-20-16-5029.jpg', NULL, '2022-02-11 09:20:18'),
(8, 'Vendor Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-20-28-1461.jpg', NULL, '2022-02-11 09:20:30'),
(9, 'Shop Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-20-39-4557.jpg', NULL, '2022-02-11 09:20:41'),
(10, 'Blog page', 1, 'uploads/website-images/banner-us-2022-02-11-03-20-51-3046.jpg', NULL, '2022-02-11 09:20:54'),
(11, 'Flash Deal Page', 1, 'uploads/website-images/banner-us-2022-02-11-03-21-04-8636.jpg', NULL, '2022-02-11 09:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `business_information`
--

CREATE TABLE `business_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `tax_id` varchar(255) DEFAULT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `total_employee` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `industry_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_information`
--

INSERT INTO `business_information` (`id`, `user_id`, `name`, `phone`, `tax_id`, `industry_type`, `banner_image`, `vat`, `total_employee`, `created_at`, `updated_at`, `industry_id`) VALUES
(174, 233, 'Abbot Pratt', '+1 (849) 822-7658', 'Pariatur Nemo repud', NULL, NULL, 'At amet rerum assum', 0, '2023-06-14 09:31:32', '2023-06-14 09:31:32', NULL),
(175, 234, 'Maggie Brady', '+1 (581) 409-1189', 'Ad veniam iusto min', NULL, NULL, 'Tenetur ab sed imped', 0, '2023-06-14 09:37:05', '2023-06-14 09:37:05', NULL),
(176, 235, 'Amaya Klein', '+1 (675) 477-2651', 'Sed quidem ex ex ut', NULL, NULL, 'Quia amet duis dele', 0, '2023-06-14 09:39:28', '2023-06-14 09:39:28', NULL),
(178, 237, 'Ora Duncan', '+1 (902) 265-1653', 'Aut laudantium ut u', NULL, NULL, 'Ut illo deserunt qui', 0, '2023-06-14 09:48:46', '2023-06-14 09:48:46', NULL),
(179, 238, 'Amity Mcintosh', '+1 (923) 869-2629', 'Excepturi aut enim v', NULL, NULL, 'Sit do ut dolor est', 0, '2023-06-14 11:42:37', '2023-06-14 11:42:37', NULL),
(180, 239, 'Diana Bryan', '+1 (932) 376-1685', 'Rerum qui ad rerum o', NULL, NULL, 'Est assumenda sit al', 0, '2023-06-14 12:20:56', '2023-06-14 12:20:56', NULL),
(187, 246, 'David Anthony', '+1 (871) 721-9635', 'Minim ut ut sapiente', NULL, NULL, 'Mollit fugiat anim', 0, '2023-06-14 12:57:28', '2023-06-14 12:57:28', NULL),
(188, 247, 'Brittany Delgado', '+1 (848) 544-4974', 'Aliquip provident m', NULL, NULL, 'Voluptatibus praesen', 0, '2023-06-14 13:00:23', '2023-06-14 13:00:23', NULL),
(189, 248, 'Rhonda Lynn', '+1 (129) 764-2324', 'Deserunt corrupti n', NULL, NULL, 'Mollit quod unde qua', 0, '2023-06-14 13:10:17', '2023-06-14 13:10:17', NULL),
(192, 251, 'Herman Montoya', '+1 (714) 546-7049', 'Velit explicabo Ut', NULL, NULL, 'Quos tempor molestia', 0, '2023-06-14 13:18:54', '2023-06-14 13:18:54', NULL),
(193, 252, 'Zahir Hess', '+1 (368) 805-3909', 'Qui et qui et repreh', NULL, NULL, 'Nostrud dolor deseru', 0, '2023-06-14 13:22:32', '2023-06-14 13:22:32', NULL),
(197, 256, 'Taylor Ewing', '+1 (172) 605-3487', 'Omnis ut esse volup', NULL, NULL, 'Praesentium obcaecat', 0, '2023-06-14 13:36:04', '2023-06-14 13:36:04', NULL),
(198, 257, 'Pascale Delaney', '+1 (586) 462-9896', 'Labore ipsum alias', NULL, NULL, 'Necessitatibus illum', 0, '2023-06-14 13:37:37', '2023-06-14 13:37:37', NULL),
(203, 262, 'Erich Ortiz', '+1 (577) 745-4514', 'Reprehenderit volup', NULL, NULL, 'Officia eos illo ut', 0, '2023-06-14 13:51:56', '2023-06-14 13:51:56', NULL),
(204, 263, 'Sean Park', '+1 (783) 675-7909', 'Et deleniti qui occa', NULL, NULL, 'Nostrum amet et hic', 0, '2023-06-14 13:55:03', '2023-06-14 13:55:03', NULL),
(208, 267, 'Selma Butler', '+1 (529) 323-8456', 'Officiis nihil dolor', NULL, NULL, 'At fugit sed ut odi', 0, '2023-06-14 14:09:28', '2023-06-14 14:09:28', NULL),
(209, 268, 'Andrew Ortiz', '+1 (349) 576-6146', 'Est ex sed ad place', NULL, NULL, 'At eum accusamus deb', 0, '2023-06-14 14:11:24', '2023-06-14 14:11:24', NULL),
(210, 269, 'Wyatt Chapman', '+1 (629) 325-9033', 'Numquam modi dolorem', NULL, NULL, 'Neque error molestia', 0, '2023-06-14 14:16:08', '2023-06-14 14:16:08', NULL),
(211, 270, 'Galvin Alexander', '+1 (715) 663-4878', 'Aut et ratione in se', NULL, NULL, 'Aut molestiae quidem', 0, '2023-06-14 14:19:44', '2023-06-14 14:19:44', NULL),
(220, 279, 'Odette Higgins', '+1 (762) 399-1859', 'Odit tempore quis e', NULL, NULL, 'Molestias qui itaque', 0, '2023-06-14 15:02:32', '2023-06-14 15:02:32', NULL),
(222, 281, 'Kenneth Castaneda', '+1 (963) 863-5002', 'Ut cillum ut perspic', NULL, NULL, 'Et cupiditate ut et', 0, '2023-06-14 15:10:09', '2023-06-14 15:10:09', NULL),
(226, 285, 'Jessica Keller', '+1 (905) 554-8359', 'Ullamco neque dolori', NULL, NULL, 'Laboriosam dolorem', 0, '2023-06-14 15:26:18', '2023-06-14 15:26:18', NULL),
(229, 288, 'Kibo Marshall', '585-597-1723', 'Nihil facere repudia', NULL, 'public/images/16904592341.jpg', 'Alias molestiae quis', 11, '2023-06-14 15:34:25', '2023-07-27 13:00:34', 1),
(230, 289, 'Zeus Hampton', '+1 (166) 471-3545', 'In amet dolorem rep', NULL, NULL, 'Itaque ipsa quis al', 0, '2023-06-14 15:38:29', '2023-06-14 15:38:29', NULL),
(231, 290, 'Elijah Sears', '+1 (789) 356-5887', 'Officia quia expedit', NULL, NULL, 'Eius dolores accusan', 0, '2023-06-14 15:42:12', '2023-06-14 15:42:12', NULL),
(232, 291, 'Anika Hardy', '+1 (289) 324-1536', 'Numquam molestias no', NULL, NULL, 'Ut voluptatem velit', 0, '2023-06-15 07:19:27', '2023-06-15 07:19:27', NULL),
(233, 292, 'Ezekiel Warren', '+1 (743) 709-3564', 'Esse placeat modi u', NULL, NULL, 'Ea blanditiis nihil', 0, '2023-06-15 08:05:32', '2023-06-15 08:05:32', NULL),
(234, 293, 'Kirsten Haynes', '+1 (697) 201-5727', 'Eum voluptatem Magn', NULL, NULL, 'Officia non dolores', 0, '2023-06-15 08:14:13', '2023-06-15 08:14:13', NULL),
(239, 298, 'Cassandra Morrow', '+1 (571) 289-9456', 'Est repellendus Vol', NULL, NULL, 'Assumenda molestiae', 0, '2023-06-15 08:50:10', '2023-06-15 08:50:10', NULL),
(243, 302, 'Thane Benson', '+1 (728) 695-8962', 'Fugiat et est nece', NULL, NULL, 'Ea velit earum accus', 0, '2023-06-15 09:08:11', '2023-06-15 09:08:11', NULL),
(244, 303, 'Rosalyn Wyatt', '+1 (278) 787-8922', 'Laudantium quia ull', NULL, NULL, 'Reprehenderit iusto', 0, '2023-06-15 09:17:10', '2023-06-15 09:17:10', NULL),
(245, 304, 'Lunea Hampton', '+1 (754) 883-5349', 'Voluptatibus ipsum e', NULL, NULL, 'Dolores sunt atque', 0, '2023-06-15 09:23:07', '2023-06-15 09:23:07', NULL),
(246, 305, 'Ruby Spence', '+1 (352) 473-4088', 'Quae autem quisquam', NULL, NULL, 'Nihil ex odit ut min', 0, '2023-06-15 09:39:30', '2023-06-15 09:39:30', NULL),
(247, 306, 'Ruby Spence', '+1 (302) 394-2257', 'Molestiae aute quia', '1', NULL, NULL, 0, '2023-06-20 07:30:33', '2023-07-03 13:14:03', 1),
(248, 307, 'Perry Houston', '325115621626', 'Qui dolore aliquip e', '1', 'public/images/1688561317.jpg', 'Nihil incididunt cup', 11, '2023-07-03 08:21:46', '2023-07-06 11:24:44', 1),
(249, 308, 'Grady Ratliff', '+1 (795) 267-7225', 'Quos voluptatem Lab', NULL, NULL, 'Voluptas accusantium', 21, '2023-07-06 12:01:10', '2023-08-25 14:39:06', 1),
(251, 310, '2951912644', '2951912644', 'Numquam suscipit nih', NULL, NULL, NULL, 0, '2023-08-08 06:50:08', '2023-08-08 06:50:08', NULL),
(252, 311, 'Montana Bates', '+1 (962) 575-1568', 'Ullam repudiandae ci', NULL, NULL, 'Qui minus sit quaera', 11, '2023-08-08 09:29:21', '2023-08-08 09:29:21', NULL),
(253, 312, '15151511212121', '15151511212121', 'Possimus irure assu', NULL, NULL, NULL, 0, '2023-08-18 09:29:42', '2023-08-18 09:29:42', NULL),
(254, 316, '3315142116', '3315142116', 'Qui quia ipsa et du', NULL, NULL, NULL, 0, '2023-08-18 11:13:29', '2023-08-18 11:13:29', NULL),
(255, 317, '03325142115', '03325142115', 'Quibusdam laborum ir', NULL, NULL, NULL, 0, '2023-08-18 11:22:14', '2023-08-18 11:22:14', NULL),
(256, 319, '03325142115', '03325142115', 'Omnis omnis cumque p', NULL, NULL, NULL, 0, '2023-08-18 11:25:45', '2023-08-18 11:25:45', NULL),
(257, 320, 'Wade Morris', '0332510423', 'Sed eaque recusandae', NULL, NULL, 'Natus dolore consequ', 11, '2023-08-18 11:32:31', '2023-08-18 11:32:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `title` varchar(255) NOT NULL,
  `offer` double NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `show_homepage` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `image`, `name`, `slug`, `title`, `offer`, `start_date`, `end_date`, `show_homepage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/custom-images/campaign--2022-02-07-08-17-57-4847.jpg', 'Happy New Year', 'happy-new-year', 'Up To -35% Off', 35, '2022-01-29 17:07:00', '2022-04-16 17:17:00', 1, 1, '2022-01-30 11:07:55', '2022-04-14 11:17:52'),
(2, 'uploads/custom-images/campaign--2022-02-07-08-19-03-8003.jpg', 'Black Friday', 'black-friday', 'Up To -31% Off', 41, '2022-01-30 08:28:00', '2022-04-02 08:52:00', 0, 1, '2022-01-30 20:28:49', '2022-04-14 11:17:52'),
(3, 'uploads/custom-images/campaign--2022-02-07-08-19-56-3751.jpg', 'Happy New Year 2024', 'happy-new-year-2024', 'Up To -30% Off', 30, '2022-01-31 08:41:00', '2022-03-19 08:52:00', 0, 1, '2022-01-30 20:41:43', '2022-04-14 11:17:52'),
(4, 'uploads/custom-images/campaign--2022-02-07-08-23-24-8664.jpg', 'Happy New Year 2022', 'happy-new-year-2022', 'Up To - 20% Off', 20, '2022-01-31 08:45:00', '2022-03-16 08:52:00', 0, 1, '2022-01-31 02:46:12', '2022-04-14 11:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_products`
--

CREATE TABLE `campaign_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `show_homepage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_products`
--

INSERT INTO `campaign_products` (`id`, `campaign_id`, `product_id`, `show_homepage`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2022-01-30 11:08:17', '2022-01-30 11:08:17'),
(2, 2, 3, 1, 1, '2022-01-31 07:03:31', '2022-01-31 07:03:31'),
(3, 2, 4, 1, 1, '2022-01-31 07:03:39', '2022-01-31 07:03:39'),
(4, 4, 8, 1, 1, '2022-01-31 07:31:42', '2022-01-31 07:31:42'),
(5, 4, 9, 1, 1, '2022-01-31 07:31:56', '2022-01-31 07:32:05'),
(6, 4, 7, 1, 1, '2022-01-31 07:32:02', '2022-01-31 07:32:05'),
(8, 1, 22, 1, 1, '2022-02-08 10:05:36', '2022-02-08 10:06:26'),
(9, 1, 16, 1, 1, '2022-02-08 10:05:43', '2022-02-08 10:06:27'),
(10, 1, 32, 1, 1, '2022-02-08 10:05:51', '2022-02-08 10:06:28'),
(11, 1, 17, 1, 1, '2022-02-08 10:06:06', '2022-02-08 10:06:29'),
(12, 1, 29, 1, 1, '2022-02-08 10:17:31', '2022-02-08 10:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_code` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `is_top` int(11) NOT NULL DEFAULT 0,
  `is_popular` int(11) NOT NULL DEFAULT 0,
  `is_trending` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `category_code`, `icon`, `image`, `status`, `is_featured`, `is_top`, `is_popular`, `is_trending`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics', '1', 'fas fa-anchor', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 09:39:07', '2023-05-26 10:28:24'),
(2, 'Mobile', 'mobile', '2', 'fas fa-address-card', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 09:39:21', '2023-05-26 10:28:30'),
(3, 'Television', 'television', '3', 'fab fa-android', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 09:39:39', '2023-05-26 10:28:42'),
(4, 'Bike', 'bike', '4', 'fab fa-accessible-icon', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 10:06:39', '2023-05-26 10:28:51'),
(5, 'Men\'s Fashion', 'mens-fashion', '1234', 'far fa-address-card', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 10:06:54', '2023-05-26 10:30:20'),
(6, 'Women\'s Fashion', 'womens-fashion', NULL, 'fas fa-adjust', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-01-30 10:07:11', '2022-02-06 08:06:04'),
(7, 'Home and Lifestyle', 'home-and-lifestyle', NULL, 'fas fa-warehouse', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-02-06 07:12:24', '2022-02-06 07:12:24'),
(8, 'Babies and Toys', 'babies-and-toys', NULL, 'fas fa-volleyball-ball', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-02-06 08:21:36', '2022-02-06 08:21:36'),
(9, 'Electronics Accessories', 'electronics-accessories', NULL, 'fab fa-avianex', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-02-06 08:36:39', '2022-02-06 08:36:39'),
(10, 'Vehicles & Accessories', 'vehicles-accessories', '11', 'fas fa-ambulance', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-02-06 08:53:55', '2023-05-26 10:29:05'),
(12, 'test category', 'test-category', NULL, 'fa fa-edit', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-04-14 03:16:31', '2022-04-14 03:16:31'),
(13, 'test category 2', 'test-category-2', NULL, 'fa fa-edit', 'public/images/1684313303.jpg', 1, 0, 0, 0, 0, '2022-04-14 03:16:56', '2022-04-14 03:16:56'),
(15, 'usman', 'usman', NULL, 'far fa-address-book', 'public/images/1685092985.png', 1, 0, 0, 0, 0, '2023-05-26 10:23:05', '2023-05-26 10:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `child_category_code` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `category_id`, `sub_category_id`, `name`, `slug`, `child_category_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 10, 'Canon', 'canon', NULL, 1, '2022-01-30 09:40:24', '2023-05-26 12:59:05'),
(2, 5, 5, 'Blue Tshirt', 'blue-tshirt', NULL, 1, '2022-01-30 10:09:53', '2022-01-30 10:09:53'),
(3, 6, 6, 'Fair and Lovely', 'fair-and-lovely', NULL, 1, '2022-01-30 10:10:11', '2022-02-07 02:16:43'),
(8, 4, 3, 'Sydney Freeman', 'Incidunt ad culpa d', '1548', 1, '2023-05-26 11:11:29', '2023-05-26 11:11:29'),
(11, 1, 1, 'MacKenzie Woodward', 'mackenzie-woodward', '1-1-1', 1, '2023-05-26 13:05:56', '2023-05-26 13:05:56'),
(12, 1, 1, 'sdasd', 'sdasd', '1-1-2', 1, '2023-05-26 13:06:30', '2023-05-26 13:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_state_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Florida City', 'florida-city', 1, '2022-01-30 09:29:19', '2022-02-06 04:18:33'),
(2, 1, 'Los Angeles', 'los-angeles', 1, '2022-01-30 09:29:29', '2022-02-06 04:20:30'),
(4, 2, 'Tallahassee', 'tallahassee', 1, '2022-02-06 04:18:49', '2022-02-06 04:18:49'),
(5, 2, 'Weston', 'weston', 1, '2022-02-06 04:19:56', '2022-02-06 04:19:56'),
(6, 1, 'San Jose', 'san-jose', 1, '2022-02-06 04:21:08', '2022-02-06 04:21:08'),
(7, 1, 'San Diego', 'san-diego', 1, '2022-02-06 04:21:26', '2022-02-06 04:21:26'),
(8, 4, 'Gandhinagar', 'gandhinagar', 1, '2022-02-06 04:22:21', '2022-02-06 04:22:21'),
(9, 5, 'Chandigarh', 'chandigarh', 1, '2022-02-06 04:22:44', '2022-02-06 04:22:44'),
(10, 7, 'London', 'london', 1, '2022-02-06 04:23:12', '2022-02-06 04:23:12'),
(11, 7, 'Liverpool', 'liverpool', 1, '2022-02-06 04:23:29', '2022-02-06 04:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `banner`, `title`, `description`, `email`, `address`, `phone`, `map`, `created_at`, `updated_at`) VALUES
(1, 'uploads/custom-images/contact-us-2022-02-11-03-39-19-2626.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'contact.us@gmail.com', 'San Francisco City Hall, San Francisco, CA', '123-343-4444', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12613.837129775044!2d-122.4192417!3d37.779275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb2706dff83574f4a!2sSan%20Francisco%20City%20Hall!5e0!3m2!1sen!2sbd!4v1644208435607!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2022-01-30 12:31:58', '2022-02-11 09:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `cookie_consents`
--

CREATE TABLE `cookie_consents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `border` varchar(255) DEFAULT NULL,
  `corners` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `border_color` varchar(255) DEFAULT NULL,
  `btn_bg_color` varchar(255) DEFAULT NULL,
  `btn_text_color` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `link_text` varchar(255) DEFAULT NULL,
  `btn_text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cookie_consents`
--

INSERT INTO `cookie_consents` (`id`, `status`, `border`, `corners`, `background_color`, `text_color`, `border_color`, `btn_bg_color`, `btn_text_color`, `message`, `link_text`, `btn_text`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'thin', 'normal', '#184dec', '#fafafa', '#0a58d6', '#fffceb', '#222758', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an unknown printer took.', 'More Info', 'Yes', NULL, NULL, '2022-02-13 08:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(36) DEFAULT NULL,
  `slug` varchar(4) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AFG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(2, 'Aland Islands', 'ALA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(3, 'Albania', 'ALB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(4, 'Algeria', 'DZA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(5, 'American Samoa', 'ASM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(6, 'Andorra', 'AND', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(7, 'Angola', 'AGO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(8, 'Anguilla', 'AIA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(9, 'Antarctica', 'ATA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(10, 'Antigua And Barbuda', 'ATG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(11, 'Argentina', 'ARG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(12, 'Armenia', 'ARM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(13, 'Aruba', 'ABW', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(14, 'Australia', 'AUS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(15, 'Austria', 'AUT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(16, 'Azerbaijan', 'AZE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(17, 'The Bahamas', 'BHS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(18, 'Bahrain', 'BHR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(19, 'Bangladesh', 'BGD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(20, 'Barbados', 'BRB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(21, 'Belarus', 'BLR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(22, 'Belgium', 'BEL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(23, 'Belize', 'BLZ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(24, 'Benin', 'BEN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(25, 'Bermuda', 'BMU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(26, 'Bhutan', 'BTN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(27, 'Bolivia', 'BOL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(28, 'Bosnia and Herzegovina', 'BIH', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(29, 'Botswana', 'BWA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(30, 'Bouvet Island', 'BVT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(31, 'Brazil', 'BRA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(32, 'British Indian Ocean Territory', 'IOT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(33, 'Brunei', 'BRN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(34, 'Bulgaria', 'BGR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(35, 'Burkina Faso', 'BFA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(36, 'Burundi', 'BDI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(37, 'Cambodia', 'KHM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(38, 'Cameroon', 'CMR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(39, 'Canada', 'CAN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(40, 'Cape Verde', 'CPV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(41, 'Cayman Islands', 'CYM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(42, 'Central African Republic', 'CAF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(43, 'Chad', 'TCD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(44, 'Chile', 'CHL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(45, 'China', 'CHN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(46, 'Christmas Island', 'CXR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(47, 'Cocos (Keeling) Islands', 'CCK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(48, 'Colombia', 'COL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(49, 'Comoros', 'COM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(50, 'Congo', 'COG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(51, 'Democratic Republic of the Congo', 'COD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(52, 'Cook Islands', 'COK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(53, 'Costa Rica', 'CRI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(54, 'Cote D\'Ivoire (Ivory Coast)', 'CIV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(55, 'Croatia', 'HRV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(56, 'Cuba', 'CUB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(57, 'Cyprus', 'CYP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(58, 'Czech Republic', 'CZE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(59, 'Denmark', 'DNK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(60, 'Djibouti', 'DJI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(61, 'Dominica', 'DMA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(62, 'Dominican Republic', 'DOM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(63, 'East Timor', 'TLS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(64, 'Ecuador', 'ECU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(65, 'Egypt', 'EGY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(66, 'El Salvador', 'SLV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(67, 'Equatorial Guinea', 'GNQ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(68, 'Eritrea', 'ERI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(69, 'Estonia', 'EST', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(70, 'Ethiopia', 'ETH', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(71, 'Falkland Islands', 'FLK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(72, 'Faroe Islands', 'FRO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(73, 'Fiji Islands', 'FJI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(74, 'Finland', 'FIN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(75, 'France', 'FRA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(76, 'French Guiana', 'GUF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(77, 'French Polynesia', 'PYF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(78, 'French Southern Territories', 'ATF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(79, 'Gabon', 'GAB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(80, 'Gambia The', 'GMB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(81, 'Georgia', 'GEO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(82, 'Germany', 'DEU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(83, 'Ghana', 'GHA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(84, 'Gibraltar', 'GIB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(85, 'Greece', 'GRC', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(86, 'Greenland', 'GRL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(87, 'Grenada', 'GRD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(88, 'Guadeloupe', 'GLP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(89, 'Guam', 'GUM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(90, 'Guatemala', 'GTM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(91, 'Guernsey and Alderney', 'GGY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(92, 'Guinea', 'GIN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(93, 'Guinea-Bissau', 'GNB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(94, 'Guyana', 'GUY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(95, 'Haiti', 'HTI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(96, 'Heard Island and McDonald Islands', 'HMD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(97, 'Honduras', 'HND', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(98, 'Hong Kong S.A.R.', 'HKG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(99, 'Hungary', 'HUN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(100, 'Iceland', 'ISL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(101, 'India', 'IND', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(102, 'Indonesia', 'IDN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(103, 'Iran', 'IRN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(104, 'Iraq', 'IRQ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(105, 'Ireland', 'IRL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(106, 'Israel', 'ISR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(107, 'Italy', 'ITA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(108, 'Jamaica', 'JAM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(109, 'Japan', 'JPN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(110, 'Jersey', 'JEY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(111, 'Jordan', 'JOR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(112, 'Kazakhstan', 'KAZ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(113, 'Kenya', 'KEN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(114, 'Kiribati', 'KIR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(115, 'North Korea', 'PRK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(116, 'South Korea', 'KOR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(117, 'Kuwait', 'KWT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(118, 'Kyrgyzstan', 'KGZ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(119, 'Laos', 'LAO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(120, 'Latvia', 'LVA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(121, 'Lebanon', 'LBN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(122, 'Lesotho', 'LSO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(123, 'Liberia', 'LBR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(124, 'Libya', 'LBY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(125, 'Liechtenstein', 'LIE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(126, 'Lithuania', 'LTU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(127, 'Luxembourg', 'LUX', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(128, 'Macau S.A.R.', 'MAC', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(129, 'Macedonia', 'MKD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(130, 'Madagascar', 'MDG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(131, 'Malawi', 'MWI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(132, 'Malaysia', 'MYS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(133, 'Maldives', 'MDV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(134, 'Mali', 'MLI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(135, 'Malta', 'MLT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(136, 'Man (Isle of)', 'IMN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(137, 'Marshall Islands', 'MHL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(138, 'Martinique', 'MTQ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(139, 'Mauritania', 'MRT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(140, 'Mauritius', 'MUS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(141, 'Mayotte', 'MYT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(142, 'Mexico', 'MEX', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(143, 'Micronesia', 'FSM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(144, 'Moldova', 'MDA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(145, 'Monaco', 'MCO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(146, 'Mongolia', 'MNG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(147, 'Montenegro', 'MNE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(148, 'Montserrat', 'MSR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(149, 'Morocco', 'MAR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(150, 'Mozambique', 'MOZ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(151, 'Myanmar', 'MMR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(152, 'Namibia', 'NAM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(153, 'Nauru', 'NRU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(154, 'Nepal', 'NPL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(155, 'Bonaire, Sint Eustatius and Saba', 'BES', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(156, 'Netherlands', 'NLD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(157, 'New Caledonia', 'NCL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(158, 'New Zealand', 'NZL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(159, 'Nicaragua', 'NIC', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(160, 'Niger', 'NER', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(161, 'Nigeria', 'NGA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(162, 'Niue', 'NIU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(163, 'Norfolk Island', 'NFK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(164, 'Northern Mariana Islands', 'MNP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(165, 'Norway', 'NOR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(166, 'Oman', 'OMN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(167, 'Pakistan', 'PAK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(168, 'Palau', 'PLW', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(169, 'Palestinian Territory Occupied', 'PSE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(170, 'Panama', 'PAN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(171, 'Papua new Guinea', 'PNG', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(172, 'Paraguay', 'PRY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(173, 'Peru', 'PER', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(174, 'Philippines', 'PHL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(175, 'Pitcairn Island', 'PCN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(176, 'Poland', 'POL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(177, 'Portugal', 'PRT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(178, 'Puerto Rico', 'PRI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(179, 'Qatar', 'QAT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(180, 'Reunion', 'REU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(181, 'Romania', 'ROU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(182, 'Russia', 'RUS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(183, 'Rwanda', 'RWA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(184, 'Saint Helena', 'SHN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(185, 'Saint Kitts And Nevis', 'KNA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(186, 'Saint Lucia', 'LCA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(187, 'Saint Pierre and Miquelon', 'SPM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(188, 'Saint Vincent And The Grenadines', 'VCT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(189, 'Saint-Barthelemy', 'BLM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(190, 'Saint-Martin (French part)', 'MAF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(191, 'Samoa', 'WSM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(192, 'San Marino', 'SMR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(193, 'Sao Tome and Principe', 'STP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(194, 'Saudi Arabia', 'SAU', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(195, 'Senegal', 'SEN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(196, 'Serbia', 'SRB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(197, 'Seychelles', 'SYC', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(198, 'Sierra Leone', 'SLE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(199, 'Singapore', 'SGP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(200, 'Slovakia', 'SVK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(201, 'Slovenia', 'SVN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(202, 'Solomon Islands', 'SLB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(203, 'Somalia', 'SOM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(204, 'South Africa', 'ZAF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(205, 'South Georgia', 'SGS', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(206, 'South Sudan', 'SSD', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(207, 'Spain', 'ESP', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(208, 'Sri Lanka', 'LKA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(209, 'Sudan', 'SDN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(210, 'Suriname', 'SUR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(211, 'Svalbard And Jan Mayen Islands', 'SJM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(212, 'Swaziland', 'SWZ', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(213, 'Sweden', 'SWE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(214, 'Switzerland', 'CHE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(215, 'Syria', 'SYR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(216, 'Taiwan', 'TWN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(217, 'Tajikistan', 'TJK', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(218, 'Tanzania', 'TZA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(219, 'Thailand', 'THA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(220, 'Togo', 'TGO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(221, 'Tokelau', 'TKL', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(222, 'Tonga', 'TON', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(223, 'Trinidad And Tobago', 'TTO', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(224, 'Tunisia', 'TUN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(225, 'Turkey', 'TUR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(226, 'Turkmenistan', 'TKM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(227, 'Turks And Caicos Islands', 'TCA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(228, 'Tuvalu', 'TUV', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(229, 'Uganda', 'UGA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(230, 'Ukraine', 'UKR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(231, 'United Arab Emirates', 'ARE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(232, 'United Kingdom', 'GBR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(233, 'United States', 'USA', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(234, 'United States Minor Outlying Islands', 'UMI', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(235, 'Uruguay', 'URY', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(236, 'Uzbekistan', 'UZB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(237, 'Vanuatu', 'VUT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(238, 'Vatican City State (Holy See)', 'VAT', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(239, 'Venezuela', 'VEN', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(240, 'Vietnam', 'VNM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(241, 'Virgin Islands (British)', 'VGB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(242, 'Virgin Islands (US)', 'VIR', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(243, 'Wallis And Futuna Islands', 'WLF', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(244, 'Western Sahara', 'ESH', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(245, 'Yemen', 'YEM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(246, 'Zambia', 'ZMB', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(247, 'Zimbabwe', 'ZWE', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(248, 'Kosovo', 'XKX', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(249, 'Curaçao', 'CUW', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(250, 'Sint Maarten (Dutch part)', 'SXM', 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(251, NULL, NULL, 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12'),
(252, NULL, NULL, 1, '2023-07-10 12:02:12', '2023-07-10 12:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `country_states`
--

CREATE TABLE `country_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country_states`
--

INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Badakhshan', 1, '1', 'BDS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3, 'Badghis', 1, '1', 'BDG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4, 'Baghlan', 1, '1', 'BGL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(5, 'Balkh', 1, '1', 'BAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(6, 'Bamyan', 1, '1', 'BAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(7, 'Daykundi', 1, '1', 'DAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(8, 'Farah', 1, '1', 'FRA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(9, 'Faryab', 1, '1', 'FYB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(10, 'Ghazni', 1, '1', 'GHA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(11, 'Ghōr', 1, '1', 'GHO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(12, 'Helmand', 1, '1', 'HEL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(13, 'Herat', 1, '1', 'HER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(14, 'Jowzjan', 1, '1', 'JOW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(15, 'Kabul', 1, '1', 'KAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(16, 'Kandahar', 1, '1', 'KAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(17, 'Kapisa', 1, '1', 'KAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(18, 'Khost', 1, '1', 'KHO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(19, 'Kunar', 1, '1', 'KNR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(20, 'Kunduz Province', 1, '1', 'KDZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(21, 'Laghman', 1, '1', 'LAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(22, 'Logar', 1, '1', 'LOG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(23, 'Nangarhar', 1, '1', 'NAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(24, 'Nimruz', 1, '1', 'NIM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(25, 'Nuristan', 1, '1', 'NUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(26, 'Paktia', 1, '1', 'PIA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(27, 'Paktika', 1, '1', 'PKA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(28, 'Panjshir', 1, '1', 'PAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(29, 'Parwan', 1, '1', 'PAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(30, 'Samangan', 1, '1', 'SAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(31, 'Sar-e Pol', 1, '1', 'SAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(32, 'Takhar', 1, '1', 'TAK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(33, 'Urozgan', 1, '1', 'URU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(34, 'Zabul', 1, '1', 'ZAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(35, 'Berat County', 3, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(36, 'Berat District', 3, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(37, 'Bulqizë District', 3, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(38, 'Delvinë District', 3, '1', 'DL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(39, 'Devoll District', 3, '1', 'DV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(40, 'Dibër County', 3, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(41, 'Dibër District', 3, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(42, 'Durrës County', 3, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(43, 'Durrës District', 3, '1', 'DR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(44, 'Elbasan County', 3, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(45, 'Fier County', 3, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(46, 'Fier District', 3, '1', 'FR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(47, 'Gjirokastër County', 3, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(48, 'Gjirokastër District', 3, '1', 'GJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(49, 'Gramsh District', 3, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(50, 'Has District', 3, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(51, 'Kavajë District', 3, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(52, 'Kolonjë District', 3, '1', 'ER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(53, 'Korçë County', 3, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(54, 'Korçë District', 3, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(55, 'Krujë District', 3, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(56, 'Kuçovë District', 3, '1', 'KC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(57, 'Kukës County', 3, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(58, 'Kukës District', 3, '1', 'KU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(59, 'Kurbin District', 3, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(60, 'Lezhë County', 3, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(61, 'Lezhë District', 3, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(62, 'Librazhd District', 3, '1', 'LB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(63, 'Lushnjë District', 3, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(64, 'Malësi e Madhe District', 3, '1', 'MM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(65, 'Mallakastër District', 3, '1', 'MK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(66, 'Mat District', 3, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(67, 'Mirditë District', 3, '1', 'MR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(68, 'Peqin District', 3, '1', 'PQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(69, 'Përmet District', 3, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(70, 'Pogradec District', 3, '1', 'PG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(71, 'Pukë District', 3, '1', 'PU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(72, 'Sarandë District', 3, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(73, 'Shkodër County', 3, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(74, 'Shkodër District', 3, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(75, 'Skrapar District', 3, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(76, 'Tepelenë District', 3, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(77, 'Tirana County', 3, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(78, 'Tirana District', 3, '1', 'TR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(79, 'Tropojë District', 3, '1', 'TP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(80, 'Vlorë County', 3, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(81, 'Vlorë District', 3, '1', 'VL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(82, 'Adrar', 4, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(83, 'Aïn Defla', 4, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(84, 'Aïn Témouchent', 4, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(85, 'Algiers', 4, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(86, 'Annaba', 4, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(87, 'Batna', 4, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(88, 'Béchar', 4, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(89, 'Béjaïa', 4, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(90, 'Béni Abbès', 4, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(91, 'Biskra', 4, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(92, 'Blida', 4, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(93, 'Bordj Baji Mokhtar', 4, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(94, 'Bordj Bou Arréridj', 4, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(95, 'Bouïra', 4, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(96, 'Boumerdès', 4, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(97, 'Chlef', 4, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(98, 'Constantine', 4, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(99, 'Djanet', 4, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(100, 'Djelfa', 4, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(101, 'El Bayadh', 4, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(102, 'El M\'ghair', 4, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(103, 'El Menia', 4, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(104, 'El Oued', 4, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(105, 'El Tarf', 4, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(106, 'Ghardaïa', 4, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(107, 'Guelma', 4, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(108, 'Illizi', 4, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(109, 'In Guezzam', 4, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(110, 'In Salah', 4, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(111, 'Jijel', 4, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(112, 'Khenchela', 4, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(113, 'Laghouat', 4, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(114, 'M\'Sila', 4, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(115, 'Mascara', 4, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(116, 'Médéa', 4, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(117, 'Mila', 4, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(118, 'Mostaganem', 4, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(119, 'Naama', 4, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(120, 'Oran', 4, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(121, 'Ouargla', 4, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(122, 'Ouled Djellal', 4, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(123, 'Oum El Bouaghi', 4, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(124, 'Relizane', 4, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(125, 'Saïda', 4, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(126, 'Sétif', 4, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(127, 'Sidi Bel Abbès', 4, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(128, 'Skikda', 4, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(129, 'Souk Ahras', 4, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(130, 'Tamanghasset', 4, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(131, 'Tébessa', 4, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(132, 'Tiaret', 4, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(133, 'Timimoun', 4, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(134, 'Tindouf', 4, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(135, 'Tipasa', 4, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(136, 'Tissemsilt', 4, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(137, 'Tizi Ouzou', 4, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(138, 'Tlemcen', 4, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(139, 'Touggourt', 4, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(140, 'Andorra la Vella', 6, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(141, 'Canillo', 6, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(142, 'Encamp', 6, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(143, 'Escaldes-Engordany', 6, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(144, 'La Massana', 6, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(145, 'Ordino', 6, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(146, 'Sant Julià de Lòria', 6, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(147, 'Bengo Province', 7, '1', 'BGO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(148, 'Benguela Province', 7, '1', 'BGU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(149, 'Bié Province', 7, '1', 'BIE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(150, 'Cabinda Province', 7, '1', 'CAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(151, 'Cuando Cubango Province', 7, '1', 'CCU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(152, 'Cuanza Norte Province', 7, '1', 'CNO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(153, 'Cuanza Sul', 7, '1', 'CUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(154, 'Cunene Province', 7, '1', 'CNN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(155, 'Huambo Province', 7, '1', 'HUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(156, 'Huíla Province', 7, '1', 'HUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(157, 'Luanda Province', 7, '1', 'LUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(158, 'Lunda Norte Province', 7, '1', 'LNO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(159, 'Lunda Sul Province', 7, '1', 'LSU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(160, 'Malanje Province', 7, '1', 'MAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(161, 'Moxico Province', 7, '1', 'MOX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(162, 'Uíge Province', 7, '1', 'UIG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(163, 'Zaire Province', 7, '1', 'ZAI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(164, 'Barbuda', 10, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(165, 'Redonda', 10, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(166, 'Saint George Parish', 10, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(167, 'Saint John Parish', 10, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(168, 'Saint Mary Parish', 10, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(169, 'Saint Paul Parish', 10, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(170, 'Saint Peter Parish', 10, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(171, 'Saint Philip Parish', 10, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(172, 'Buenos Aires', 11, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(173, 'Catamarca', 11, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(174, 'Chaco', 11, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(175, 'Chubut', 11, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(176, 'Ciudad Autónoma de Buenos Aires', 11, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(177, 'Córdoba', 11, '1', 'X', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(178, 'Corrientes', 11, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(179, 'Entre Ríos', 11, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(180, 'Formosa', 11, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(181, 'Jujuy', 11, '1', 'Y', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(182, 'La Pampa', 11, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(183, 'La Rioja', 11, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(184, 'Mendoza', 11, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(185, 'Misiones', 11, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(186, 'Neuquén', 11, '1', 'Q', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(187, 'Río Negro', 11, '1', 'R', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(188, 'Salta', 11, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(189, 'San Juan', 11, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(190, 'San Luis', 11, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(191, 'Santa Cruz', 11, '1', 'Z', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(192, 'Santa Fe', 11, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(193, 'Santiago del Estero', 11, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(194, 'Tierra del Fuego', 11, '1', 'V', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(195, 'Tucumán', 11, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(196, 'Aragatsotn Region', 12, '1', 'AG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(197, 'Ararat Province', 12, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(198, 'Armavir Region', 12, '1', 'AV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(199, 'Gegharkunik Province', 12, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(200, 'Kotayk Region', 12, '1', 'KT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(201, 'Lori Region', 12, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(202, 'Shirak Region', 12, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(203, 'Syunik Province', 12, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(204, 'Tavush Region', 12, '1', 'TV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(205, 'Vayots Dzor Region', 12, '1', 'VD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(206, 'Yerevan', 12, '1', 'ER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(207, 'Australian Capital Territory', 14, '1', 'ACT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(208, 'New South Wales', 14, '1', 'NSW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(209, 'Northern Territory', 14, '1', 'NT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(210, 'Queensland', 14, '1', 'QLD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(211, 'South Australia', 14, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(212, 'Tasmania', 14, '1', 'TAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(213, 'Victoria', 14, '1', 'VIC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(214, 'Western Australia', 14, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(215, 'Burgenland', 15, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(216, 'Carinthia', 15, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(217, 'Lower Austria', 15, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(218, 'Salzburg', 15, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(219, 'Styria', 15, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(220, 'Tyrol', 15, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(221, 'Upper Austria', 15, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(222, 'Vienna', 15, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(223, 'Vorarlberg', 15, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(224, 'Absheron District', 16, '1', 'ABS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(225, 'Agdam District', 16, '1', 'AGM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(226, 'Agdash District', 16, '1', 'AGS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(227, 'Aghjabadi District', 16, '1', 'AGC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(228, 'Agstafa District', 16, '1', 'AGA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(229, 'Agsu District', 16, '1', 'AGU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(230, 'Astara District', 16, '1', 'AST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(231, 'Babek District', 16, '1', 'BAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(232, 'Baku', 16, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(233, 'Balakan District', 16, '1', 'BAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(234, 'Barda District', 16, '1', 'BAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(235, 'Beylagan District', 16, '1', 'BEY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(236, 'Bilasuvar District', 16, '1', 'BIL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(237, 'Dashkasan District', 16, '1', 'DAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(238, 'Fizuli District', 16, '1', 'FUZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(239, 'Ganja', 16, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(240, 'Gədəbəy', 16, '1', 'GAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(241, 'Gobustan District', 16, '1', 'QOB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(242, 'Goranboy District', 16, '1', 'GOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(243, 'Goychay', 16, '1', 'GOY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(244, 'Goygol District', 16, '1', 'GYG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(245, 'Hajigabul District', 16, '1', 'HAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(246, 'Imishli District', 16, '1', 'IMI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(247, 'Ismailli District', 16, '1', 'ISM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(248, 'Jabrayil District', 16, '1', 'CAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(249, 'Jalilabad District', 16, '1', 'CAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(250, 'Julfa District', 16, '1', 'CUL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(251, 'Kalbajar District', 16, '1', 'KAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(252, 'Kangarli District', 16, '1', 'KAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(253, 'Khachmaz District', 16, '1', 'XAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(254, 'Khizi District', 16, '1', 'XIZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(255, 'Khojali District', 16, '1', 'XCI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(256, 'Kurdamir District', 16, '1', 'KUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(257, 'Lachin District', 16, '1', 'LAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(258, 'Lankaran', 16, '1', 'LAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(259, 'Lankaran District', 16, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(260, 'Lerik District', 16, '1', 'LER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(261, 'Martuni', 16, '1', 'XVD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(262, 'Masally District', 16, '1', 'MAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(263, 'Mingachevir', 16, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(264, 'Nakhchivan Autonomous Republic', 16, '1', 'NX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(265, 'Neftchala District', 16, '1', 'NEF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(266, 'Oghuz District', 16, '1', 'OGU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(267, 'Ordubad District', 16, '1', 'ORD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(268, 'Qabala District', 16, '1', 'QAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(269, 'Qakh District', 16, '1', 'QAX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(270, 'Qazakh District', 16, '1', 'QAZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(271, 'Quba District', 16, '1', 'QBA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(272, 'Qubadli District', 16, '1', 'QBI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(273, 'Qusar District', 16, '1', 'QUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(274, 'Saatly District', 16, '1', 'SAT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(275, 'Sabirabad District', 16, '1', 'SAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(276, 'Sadarak District', 16, '1', 'SAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(277, 'Salyan District', 16, '1', 'SAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(278, 'Samukh District', 16, '1', 'SMX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(279, 'Shabran District', 16, '1', 'SBN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(280, 'Shahbuz District', 16, '1', 'SAH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(281, 'Shaki', 16, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(282, 'Shaki District', 16, '1', 'SAK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(283, 'Shamakhi District', 16, '1', 'SMI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(284, 'Shamkir District', 16, '1', 'SKR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(285, 'Sharur District', 16, '1', 'SAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(286, 'Shirvan', 16, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(287, 'Shusha District', 16, '1', 'SUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(288, 'Siazan District', 16, '1', 'SIY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(289, 'Sumqayit', 16, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(290, 'Tartar District', 16, '1', 'TAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(291, 'Tovuz District', 16, '1', 'TOV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(292, 'Ujar District', 16, '1', 'UCA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(293, 'Yardymli District', 16, '1', 'YAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(294, 'Yevlakh', 16, '1', 'YE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(295, 'Yevlakh District', 16, '1', 'YEV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(296, 'Zangilan District', 16, '1', 'ZAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(297, 'Zaqatala District', 16, '1', 'ZAQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(298, 'Zardab District', 16, '1', 'ZAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(299, 'Capital', 18, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(300, 'Central', 18, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(301, 'Muharraq', 18, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(302, 'Northern', 18, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(303, 'Southern', 18, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(304, 'Bagerhat District', 19, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(305, 'Bahadia', 19, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(306, 'Bandarban District', 19, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(307, 'Barguna District', 19, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(308, 'Barisal District', 19, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(309, 'Barisal Division', 19, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(310, 'Bhola District', 19, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(311, 'Bogra District', 19, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(312, 'Brahmanbaria District', 19, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(313, 'Chandpur District', 19, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(314, 'Chapai Nawabganj District', 19, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(315, 'Chittagong District', 19, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(316, 'Chittagong Division', 19, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(317, 'Chuadanga District', 19, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(318, 'Comilla District', 19, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(319, 'Cox\'s Bazar District', 19, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(320, 'Dhaka District', 19, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(321, 'Dhaka Division', 19, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(322, 'Dinajpur District', 19, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(323, 'Faridpur District', 19, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(324, 'Feni District', 19, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(325, 'Gaibandha District', 19, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(326, 'Gazipur District', 19, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(327, 'Gopalganj District', 19, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(328, 'Habiganj District', 19, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(329, 'Jamalpur District', 19, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(330, 'Jessore District', 19, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(331, 'Jhalokati District', 19, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(332, 'Jhenaidah District', 19, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(333, 'Joypurhat District', 19, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(334, 'Khagrachari District', 19, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(335, 'Khulna District', 19, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(336, 'Khulna Division', 19, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(337, 'Kishoreganj District', 19, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(338, 'Kurigram District', 19, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(339, 'Kushtia District', 19, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(340, 'Lakshmipur District', 19, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(341, 'Lalmonirhat District', 19, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(342, 'Madaripur District', 19, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(343, 'Meherpur District', 19, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(344, 'Moulvibazar District', 19, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(345, 'Munshiganj District', 19, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(346, 'Mymensingh District', 19, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(347, 'Mymensingh Division', 19, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(348, 'Naogaon District', 19, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(349, 'Narail District', 19, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(350, 'Narayanganj District', 19, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(351, 'Natore District', 19, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(352, 'Netrokona District', 19, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(353, 'Nilphamari District', 19, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(354, 'Noakhali District', 19, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(355, 'Pabna District', 19, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(356, 'Panchagarh District', 19, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(357, 'Patuakhali District', 19, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(358, 'Pirojpur District', 19, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(359, 'Rajbari District', 19, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(360, 'Rajshahi District', 19, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(361, 'Rajshahi Division', 19, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(362, 'Rangamati Hill District', 19, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(363, 'Rangpur District', 19, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(364, 'Rangpur Division', 19, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(365, 'Satkhira District', 19, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(366, 'Shariatpur District', 19, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(367, 'Sherpur District', 19, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(368, 'Sirajganj District', 19, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(369, 'Sunamganj District', 19, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(370, 'Sylhet District', 19, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(371, 'Sylhet Division', 19, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(372, 'Tangail District', 19, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(373, 'Thakurgaon District', 19, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(374, 'Christ Church', 20, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(375, 'Saint Andrew', 20, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(376, 'Saint George', 20, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(377, 'Saint James', 20, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(378, 'Saint John', 20, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(379, 'Saint Joseph', 20, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(380, 'Saint Lucy', 20, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(381, 'Saint Michael', 20, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(382, 'Saint Peter', 20, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(383, 'Saint Philip', 20, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(384, 'Saint Thomas', 20, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(385, 'Brest Region', 21, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(386, 'Gomel Region', 21, '1', 'HO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(387, 'Grodno Region', 21, '1', 'HR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(388, 'Minsk', 21, '1', 'HM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(389, 'Minsk Region', 21, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(390, 'Mogilev Region', 21, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(391, 'Vitebsk Region', 21, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(392, 'Antwerp', 22, '1', 'VAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(393, 'Brussels-Capital Region', 22, '1', 'BRU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(394, 'East Flanders', 22, '1', 'VOV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(395, 'Flanders', 22, '1', 'VLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(396, 'Flemish Brabant', 22, '1', 'VBR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(397, 'Hainaut', 22, '1', 'WHT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(398, 'Liège', 22, '1', 'WLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(399, 'Limburg', 22, '1', 'VLI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(400, 'Luxembourg', 22, '1', 'WLX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(401, 'Namur', 22, '1', 'WNA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(402, 'Wallonia', 22, '1', 'WAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(403, 'Walloon Brabant', 22, '1', 'WBR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(404, 'West Flanders', 22, '1', 'VWV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(405, 'Belize District', 23, '1', 'BZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(406, 'Cayo District', 23, '1', 'CY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(407, 'Corozal District', 23, '1', 'CZL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(408, 'Orange Walk District', 23, '1', 'OW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(409, 'Stann Creek District', 23, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(410, 'Toledo District', 23, '1', 'TOL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(411, 'Alibori Department', 24, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(412, 'Atakora Department', 24, '1', 'AK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(413, 'Atlantique Department', 24, '1', 'AQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(414, 'Borgou Department', 24, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(415, 'Collines Department', 24, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(416, 'Donga Department', 24, '1', 'DO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(417, 'Kouffo Department', 24, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(418, 'Littoral Department', 24, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(419, 'Mono Department', 24, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(420, 'Ouémé Department', 24, '1', 'OU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(421, 'Plateau Department', 24, '1', 'PL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(422, 'Zou Department', 24, '1', 'ZO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(423, 'Devonshire Parish', 25, '1', 'DEV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(424, 'Hamilton Parish', 25, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(425, 'Paget Parish', 25, '1', 'PAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(426, 'Pembroke Parish', 25, '1', 'PEM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(427, 'Saint George\'s Parish', 25, '1', 'SGE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(428, 'Sandys Parish', 25, '1', 'SAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(429, 'Smith\'s Parish,', 25, '1', 'SMI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(430, 'Southampton Parish', 25, '1', 'SOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(431, 'Warwick Parish', 25, '1', 'WAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(432, 'Bumthang District', 26, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(433, 'Chukha District', 26, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(434, 'Dagana District', 26, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(435, 'Gasa District', 26, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(436, 'Haa District', 26, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(437, 'Lhuntse District', 26, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(438, 'Mongar District', 26, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(439, 'Paro District', 26, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(440, 'Pemagatshel District', 26, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(441, 'Punakha District', 26, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(442, 'Samdrup Jongkhar District', 26, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(443, 'Samtse District', 26, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(444, 'Sarpang District', 26, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(445, 'Thimphu District', 26, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(446, 'Trashigang District', 26, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(447, 'Trongsa District', 26, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(448, 'Tsirang District', 26, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(449, 'Wangdue Phodrang District', 26, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(450, 'Zhemgang District', 26, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(451, 'Beni Department', 27, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(452, 'Chuquisaca Department', 27, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(453, 'Cochabamba Department', 27, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(454, 'La Paz Department', 27, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(455, 'Oruro Department', 27, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(456, 'Pando Department', 27, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(457, 'Potosí Department', 27, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(458, 'Santa Cruz Department', 27, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(459, 'Tarija Department', 27, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(460, 'Bonaire', 155, '1', 'BQ1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(461, 'Saba', 155, '1', 'BQ2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(462, 'Sint Eustatius', 155, '1', 'BQ3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(463, 'Bosnian Podrinje Canton', 28, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(464, 'Brčko District', 28, '1', 'BRC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(465, 'Canton 10', 28, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(466, 'Central Bosnia Canton', 28, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(467, 'Federation of Bosnia and Herzegovina', 28, '1', 'BIH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(468, 'Herzegovina-Neretva Canton', 28, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(469, 'Posavina Canton', 28, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(470, 'Republika Srpska', 28, '1', 'SRP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(471, 'Sarajevo Canton', 28, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(472, 'Tuzla Canton', 28, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(473, 'Una-Sana Canton', 28, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(474, 'West Herzegovina Canton', 28, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(475, 'Zenica-Doboj Canton', 28, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(476, 'Central District', 29, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(477, 'Ghanzi District', 29, '1', 'GH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(478, 'Kgalagadi District', 29, '1', 'KG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(479, 'Kgatleng District', 29, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(480, 'Kweneng District', 29, '1', 'KW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(481, 'Ngamiland', 29, '1', 'NG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(482, 'North-East District', 29, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(483, 'North-West District', 29, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(484, 'South-East District', 29, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(485, 'Southern District', 29, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(486, 'Acre', 31, '1', 'AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(487, 'Alagoas', 31, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(488, 'Amapá', 31, '1', 'AP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(489, 'Amazonas', 31, '1', 'AM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(490, 'Bahia', 31, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(491, 'Ceará', 31, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(492, 'Distrito Federal', 31, '1', 'DF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(493, 'Espírito Santo', 31, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(494, 'Goiás', 31, '1', 'GO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(495, 'Maranhão', 31, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(496, 'Mato Grosso', 31, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(497, 'Mato Grosso do Sul', 31, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(498, 'Minas Gerais', 31, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(499, 'Pará', 31, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(500, 'Paraíba', 31, '1', 'PB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(501, 'Paraná', 31, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(502, 'Pernambuco', 31, '1', 'PE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(503, 'Piauí', 31, '1', 'PI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(504, 'Rio de Janeiro', 31, '1', 'RJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(505, 'Rio Grande do Norte', 31, '1', 'RN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(506, 'Rio Grande do Sul', 31, '1', 'RS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(507, 'Rondônia', 31, '1', 'RO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(508, 'Roraima', 31, '1', 'RR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(509, 'Santa Catarina', 31, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(510, 'São Paulo', 31, '1', 'SP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(511, 'Sergipe', 31, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(512, 'Tocantins', 31, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(513, 'Belait District', 33, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(514, 'Brunei-Muara District', 33, '1', 'BM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(515, 'Temburong District', 33, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(516, 'Tutong District', 33, '1', 'TU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(517, 'Blagoevgrad Province', 34, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(518, 'Burgas Province', 34, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(519, 'Dobrich Province', 34, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(520, 'Gabrovo Province', 34, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(521, 'Haskovo Province', 34, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(522, 'Kardzhali Province', 34, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(523, 'Kyustendil Province', 34, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(524, 'Lovech Province', 34, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(525, 'Montana Province', 34, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(526, 'Pazardzhik Province', 34, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(527, 'Pernik Province', 34, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(528, 'Pleven Province', 34, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(529, 'Plovdiv Province', 34, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(530, 'Razgrad Province', 34, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(531, 'Ruse Province', 34, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(532, 'Shumen', 34, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(533, 'Silistra Province', 34, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(534, 'Sliven Province', 34, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(535, 'Smolyan Province', 34, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(536, 'Sofia City Province', 34, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(537, 'Sofia Province', 34, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(538, 'Stara Zagora Province', 34, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(539, 'Targovishte Province', 34, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(540, 'Varna Province', 34, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(541, 'Veliko Tarnovo Province', 34, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(542, 'Vidin Province', 34, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(543, 'Vratsa Province', 34, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(544, 'Yambol Province', 34, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(545, 'Balé Province', 35, '1', 'BAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(546, 'Bam Province', 35, '1', 'BAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(547, 'Banwa Province', 35, '1', 'BAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(548, 'Bazèga Province', 35, '1', 'BAZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(549, 'Boucle du Mouhoun Region', 35, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(550, 'Bougouriba Province', 35, '1', 'BGR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(551, 'Boulgou', 35, '1', 'BLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(552, 'Cascades Region', 35, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(553, 'Centre', 35, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(554, 'Centre-Est Region', 35, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(555, 'Centre-Nord Region', 35, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(556, 'Centre-Ouest Region', 35, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(557, 'Centre-Sud Region', 35, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(558, 'Comoé Province', 35, '1', 'COM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(559, 'Est Region', 35, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(560, 'Ganzourgou Province', 35, '1', 'GAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(561, 'Gnagna Province', 35, '1', 'GNA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(562, 'Gourma Province', 35, '1', 'GOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(563, 'Hauts-Bassins Region', 35, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(564, 'Houet Province', 35, '1', 'HOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(565, 'Ioba Province', 35, '1', 'IOB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(566, 'Kadiogo Province', 35, '1', 'KAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(567, 'Kénédougou Province', 35, '1', 'KEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(568, 'Komondjari Province', 35, '1', 'KMD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(569, 'Kompienga Province', 35, '1', 'KMP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(570, 'Kossi Province', 35, '1', 'KOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(571, 'Koulpélogo Province', 35, '1', 'KOP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(572, 'Kouritenga Province', 35, '1', 'KOT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(573, 'Kourwéogo Province', 35, '1', 'KOW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(574, 'Léraba Province', 35, '1', 'LER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(575, 'Loroum Province', 35, '1', 'LOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(576, 'Mouhoun', 35, '1', 'MOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(577, 'Nahouri Province', 35, '1', 'NAO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(578, 'Namentenga Province', 35, '1', 'NAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(579, 'Nayala Province', 35, '1', 'NAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(580, 'Nord Region, Burkina Faso', 35, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(581, 'Noumbiel Province', 35, '1', 'NOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(582, 'Oubritenga Province', 35, '1', 'OUB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(583, 'Oudalan Province', 35, '1', 'OUD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(584, 'Passoré Province', 35, '1', 'PAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(585, 'Plateau-Central Region', 35, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(586, 'Poni Province', 35, '1', 'PON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(587, 'Sahel Region', 35, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(588, 'Sanguié Province', 35, '1', 'SNG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(589, 'Sanmatenga Province', 35, '1', 'SMT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(590, 'Séno Province', 35, '1', 'SEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(591, 'Sissili Province', 35, '1', 'SIS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(592, 'Soum Province', 35, '1', 'SOM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(593, 'Sourou Province', 35, '1', 'SOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(594, 'Sud-Ouest Region', 35, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(595, 'Tapoa Province', 35, '1', 'TAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(596, 'Tuy Province', 35, '1', 'TUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(597, 'Yagha Province', 35, '1', 'YAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(598, 'Yatenga Province', 35, '1', 'YAT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(599, 'Ziro Province', 35, '1', 'ZIR', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(600, 'Zondoma Province', 35, '1', 'ZON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(601, 'Zoundwéogo Province', 35, '1', 'ZOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(602, 'Bubanza Province', 36, '1', 'BB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(603, 'Bujumbura Mairie Province', 36, '1', 'BM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(604, 'Bujumbura Rural Province', 36, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(605, 'Bururi Province', 36, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(606, 'Cankuzo Province', 36, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(607, 'Cibitoke Province', 36, '1', 'CI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(608, 'Gitega Province', 36, '1', 'GI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(609, 'Karuzi Province', 36, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(610, 'Kayanza Province', 36, '1', 'KY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(611, 'Kirundo Province', 36, '1', 'KI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(612, 'Makamba Province', 36, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(613, 'Muramvya Province', 36, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(614, 'Muyinga Province', 36, '1', 'MY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(615, 'Mwaro Province', 36, '1', 'MW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(616, 'Ngozi Province', 36, '1', 'NG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(617, 'Rumonge Province', 36, '1', 'RM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(618, 'Rutana Province', 36, '1', 'RT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(619, 'Ruyigi Province', 36, '1', 'RY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(620, 'Banteay Meanchey', 37, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(621, 'Battambang', 37, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(622, 'Kampong Cham', 37, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(623, 'Kampong Chhnang', 37, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(624, 'Kampong Speu', 37, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(625, 'Kampong Thom', 37, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(626, 'Kampot', 37, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(627, 'Kandal', 37, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(628, 'Kep', 37, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(629, 'Koh Kong', 37, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(630, 'Kratie', 37, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(631, 'Mondulkiri', 37, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(632, 'Oddar Meanchey', 37, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(633, 'Pailin', 37, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(634, 'Phnom Penh', 37, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(635, 'Preah Vihear', 37, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(636, 'Prey Veng', 37, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(637, 'Pursat', 37, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(638, 'Ratanakiri', 37, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(639, 'Siem Reap', 37, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(640, 'Sihanoukville', 37, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(641, 'Stung Treng', 37, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(642, 'Svay Rieng', 37, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(643, 'Takeo', 37, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(644, 'Adamawa', 38, '1', 'AD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(645, 'Centre', 38, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(646, 'East', 38, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(647, 'Far North', 38, '1', 'EN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(648, 'Littoral', 38, '1', 'LT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(649, 'North', 38, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(650, 'Northwest', 38, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(651, 'South', 38, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(652, 'Southwest', 38, '1', 'SW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(653, 'West', 38, '1', 'OU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(654, 'Alberta', 39, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(655, 'British Columbia', 39, '1', 'BC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(656, 'Manitoba', 39, '1', 'MB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(657, 'New Brunswick', 39, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(658, 'Newfoundland and Labrador', 39, '1', 'NL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(659, 'Northwest Territories', 39, '1', 'NT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(660, 'Nova Scotia', 39, '1', 'NS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(661, 'Nunavut', 39, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(662, 'Ontario', 39, '1', 'ON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(663, 'Prince Edward Island', 39, '1', 'PE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(664, 'Quebec', 39, '1', 'QC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(665, 'Saskatchewan', 39, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(666, 'Yukon', 39, '1', 'YT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(667, 'Barlavento Islands', 40, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(668, 'Boa Vista', 40, '1', 'BV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(669, 'Brava', 40, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(670, 'Maio Municipality', 40, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(671, 'Mosteiros', 40, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(672, 'Paul', 40, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(673, 'Porto Novo', 40, '1', 'PN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(674, 'Praia', 40, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(675, 'Ribeira Brava Municipality', 40, '1', 'RB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(676, 'Ribeira Grande', 40, '1', 'RG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(677, 'Ribeira Grande de Santiago', 40, '1', 'RS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(678, 'Sal', 40, '1', 'SL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(679, 'Santa Catarina', 40, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(680, 'Santa Catarina do Fogo', 40, '1', 'CF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(681, 'Santa Cruz', 40, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(682, 'São Domingos', 40, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(683, 'São Filipe', 40, '1', 'SF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(684, 'São Lourenço dos Órgãos', 40, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(685, 'São Miguel', 40, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(686, 'São Vicente', 40, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(687, 'Sotavento Islands', 40, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(688, 'Tarrafal', 40, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(689, 'Tarrafal de São Nicolau', 40, '1', 'TS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(690, 'Bamingui-Bangoran Prefecture', 42, '1', 'BB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(691, 'Bangui', 42, '1', 'BGF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(692, 'Basse-Kotto Prefecture', 42, '1', 'BK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(693, 'Haut-Mbomou Prefecture', 42, '1', 'HM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(694, 'Haute-Kotto Prefecture', 42, '1', 'HK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(695, 'Kémo Prefecture', 42, '1', 'KG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(696, 'Lobaye Prefecture', 42, '1', 'LB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(697, 'Mambéré-Kadéï', 42, '1', 'HS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(698, 'Mbomou Prefecture', 42, '1', 'MB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(699, 'Nana-Grébizi Economic Prefecture', 42, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(700, 'Nana-Mambéré Prefecture', 42, '1', 'NM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(701, 'Ombella-M\'Poko Prefecture', 42, '1', 'MP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(702, 'Ouaka Prefecture', 42, '1', 'UK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(703, 'Ouham Prefecture', 42, '1', 'AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(704, 'Ouham-Pendé Prefecture', 42, '1', 'OP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(705, 'Sangha-Mbaéré', 42, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(706, 'Vakaga Prefecture', 42, '1', 'VK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(707, 'Bahr el Gazel', 43, '1', 'BG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(708, 'Batha', 43, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(709, 'Borkou', 43, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(710, 'Chari-Baguirmi', 43, '1', 'CB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(711, 'Ennedi-Est', 43, '1', 'EE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(712, 'Ennedi-Ouest', 43, '1', 'EO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(713, 'Guéra', 43, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(714, 'Hadjer-Lamis', 43, '1', 'HL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(715, 'Kanem', 43, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(716, 'Lac', 43, '1', 'LC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(717, 'Logone Occidental', 43, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(718, 'Logone Oriental', 43, '1', 'LR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(719, 'Mandoul', 43, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(720, 'Mayo-Kebbi Est', 43, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(721, 'Mayo-Kebbi Ouest', 43, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(722, 'Moyen-Chari', 43, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(723, 'N\'Djamena', 43, '1', 'ND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(724, 'Ouaddaï', 43, '1', 'OD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(725, 'Salamat', 43, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(726, 'Sila', 43, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(727, 'Tandjilé', 43, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(728, 'Tibesti', 43, '1', 'TI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(729, 'Wadi Fira', 43, '1', 'WF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(730, 'Aisén del General Carlos Ibañez del Campo', 44, '1', 'AI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(731, 'Antofagasta', 44, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(732, 'Arica y Parinacota', 44, '1', 'AP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(733, 'Atacama', 44, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(734, 'Biobío', 44, '1', 'BI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(735, 'Coquimbo', 44, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(736, 'La Araucanía', 44, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(737, 'Libertador General Bernardo O\'Higgins', 44, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(738, 'Los Lagos', 44, '1', 'LL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(739, 'Los Ríos', 44, '1', 'LR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(740, 'Magallanes y de la Antártica Chilena', 44, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(741, 'Maule', 44, '1', 'ML', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(742, 'Ñuble', 44, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(743, 'Región Metropolitana de Santiago', 44, '1', 'RM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(744, 'Tarapacá', 44, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(745, 'Valparaíso', 44, '1', 'VS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(746, 'Anhui', 45, '1', 'AH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(747, 'Beijing', 45, '1', 'BJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(748, 'Chongqing', 45, '1', 'CQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(749, 'Fujian', 45, '1', 'FJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(750, 'Gansu', 45, '1', 'GS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(751, 'Guangdong', 45, '1', 'GD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(752, 'Guangxi Zhuang', 45, '1', 'GX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(753, 'Guizhou', 45, '1', 'GZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(754, 'Hainan', 45, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(755, 'Hebei', 45, '1', 'HE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(756, 'Heilongjiang', 45, '1', 'HL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(757, 'Henan', 45, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(758, 'Hong Kong SAR', 45, '1', 'HK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(759, 'Hubei', 45, '1', 'HB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(760, 'Hunan', 45, '1', 'HN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(761, 'Inner Mongolia', 45, '1', 'NM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(762, 'Jiangsu', 45, '1', 'JS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(763, 'Jiangxi', 45, '1', 'JX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(764, 'Jilin', 45, '1', 'JL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(765, 'Liaoning', 45, '1', 'LN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(766, 'Macau SAR', 45, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(767, 'Ningxia Huizu', 45, '1', 'NX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(768, 'Qinghai', 45, '1', 'QH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(769, 'Shaanxi', 45, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(770, 'Shandong', 45, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(771, 'Shanghai', 45, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(772, 'Shanxi', 45, '1', 'SX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(773, 'Sichuan', 45, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(774, 'Taiwan', 45, '1', 'TW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(775, 'Tianjin', 45, '1', 'TJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(776, 'Xinjiang', 45, '1', 'XJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(777, 'Xizang', 45, '1', 'XZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(778, 'Yunnan', 45, '1', 'YN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(779, 'Zhejiang', 45, '1', 'ZJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(780, 'Amazonas', 48, '1', 'AMA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(781, 'Antioquia', 48, '1', 'ANT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(782, 'Arauca', 48, '1', 'ARA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(783, 'Archipiélago de San Andrés, Providencia y Santa Catalina', 48, '1', 'SAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(784, 'Atlántico', 48, '1', 'ATL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(785, 'Bogotá D.C.', 48, '1', 'DC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(786, 'Bolívar', 48, '1', 'BOL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(787, 'Boyacá', 48, '1', 'BOY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(788, 'Caldas', 48, '1', 'CAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(789, 'Caquetá', 48, '1', 'CAQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(790, 'Casanare', 48, '1', 'CAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(791, 'Cauca', 48, '1', 'CAU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(792, 'Cesar', 48, '1', 'CES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(793, 'Chocó', 48, '1', 'CHO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(794, 'Córdoba', 48, '1', 'COR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(795, 'Cundinamarca', 48, '1', 'CUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(796, 'Guainía', 48, '1', 'GUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(797, 'Guaviare', 48, '1', 'GUV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(798, 'Huila', 48, '1', 'HUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(799, 'La Guajira', 48, '1', 'LAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(800, 'Magdalena', 48, '1', 'MAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(801, 'Meta', 48, '1', 'MET', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(802, 'Nariño', 48, '1', 'NAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(803, 'Norte de Santander', 48, '1', 'NSA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(804, 'Putumayo', 48, '1', 'PUT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(805, 'Quindío', 48, '1', 'QUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(806, 'Risaralda', 48, '1', 'RIS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(807, 'Santander', 48, '1', 'SAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(808, 'Sucre', 48, '1', 'SUC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(809, 'Tolima', 48, '1', 'TOL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(810, 'Valle del Cauca', 48, '1', 'VAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(811, 'Vaupés', 48, '1', 'VAU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(812, 'Vichada', 48, '1', 'VID', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(813, 'Anjouan', 49, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(814, 'Grande Comore', 49, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(815, 'Mohéli', 49, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(816, 'Bouenza Department', 50, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(817, 'Brazzaville', 50, '1', 'BZV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(818, 'Cuvette Department', 50, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(819, 'Cuvette-Ouest Department', 50, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(820, 'Kouilou Department', 50, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(821, 'Lékoumou Department', 50, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(822, 'Likouala Department', 50, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(823, 'Niari Department', 50, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(824, 'Plateaux Department', 50, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(825, 'Pointe-Noire', 50, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(826, 'Pool Department', 50, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(827, 'Sangha Department', 50, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(828, 'Alajuela Province', 53, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(829, 'Guanacaste Province', 53, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(830, 'Heredia Province', 53, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(831, 'Limón Province', 53, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(832, 'Provincia de Cartago', 53, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(833, 'Puntarenas Province', 53, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(834, 'San José Province', 53, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(835, 'Abidjan', 54, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(836, 'Agnéby', 54, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(837, 'Bafing Region', 54, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(838, 'Bas-Sassandra District', 54, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(839, 'Bas-Sassandra Region', 54, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(840, 'Comoé District', 54, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(841, 'Denguélé District', 54, '1', 'DN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(842, 'Denguélé Region', 54, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(843, 'Dix-Huit Montagnes', 54, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(844, 'Fromager', 54, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(845, 'Gôh-Djiboua District', 54, '1', 'GD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(846, 'Haut-Sassandra', 54, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(847, 'Lacs District', 54, '1', 'LC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(848, 'Lacs Region', 54, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(849, 'Lagunes District', 54, '1', 'LG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(850, 'Lagunes region', 54, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(851, 'Marahoué Region', 54, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(852, 'Montagnes District', 54, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(853, 'Moyen-Cavally', 54, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(854, 'Moyen-Comoé', 54, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(855, 'N\'zi-Comoé', 54, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(856, 'Sassandra-Marahoué District', 54, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(857, 'Savanes Region', 54, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(858, 'Sud-Bandama', 54, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(859, 'Sud-Comoé', 54, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(860, 'Vallée du Bandama District', 54, '1', 'VB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(861, 'Vallée du Bandama Region', 54, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(862, 'Woroba District', 54, '1', 'WR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(863, 'Worodougou', 54, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(864, 'Yamoussoukro', 54, '1', 'YM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(865, 'Zanzan Region', 54, '1', 'ZZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(866, 'Bjelovar-Bilogora', 55, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(867, 'Brod-Posavina', 55, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(868, 'Dubrovnik-Neretva', 55, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(869, 'Istria', 55, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(870, 'Karlovac', 55, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(871, 'Koprivnica-Križevci', 55, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(872, 'Krapina-Zagorje', 55, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(873, 'Lika-Senj', 55, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(874, 'Međimurje', 55, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(875, 'Osijek-Baranja', 55, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(876, 'Požega-Slavonia', 55, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(877, 'Primorje-Gorski Kotar', 55, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(878, 'Šibenik-Knin', 55, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(879, 'Sisak-Moslavina', 55, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(880, 'Split-Dalmatia', 55, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(881, 'Varaždin', 55, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(882, 'Virovitica-Podravina', 55, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(883, 'Vukovar-Syrmia', 55, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(884, 'Zadar', 55, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(885, 'Zagreb', 55, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(886, 'Zagreb', 55, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(887, 'Artemisa Province', 56, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(888, 'Camagüey Province', 56, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(889, 'Ciego de Ávila Province', 56, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(890, 'Cienfuegos Province', 56, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(891, 'Granma Province', 56, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(892, 'Guantánamo Province', 56, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(893, 'Havana Province', 56, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(894, 'Holguín Province', 56, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(895, 'Isla de la Juventud', 56, '1', '99', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(896, 'Las Tunas Province', 56, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(897, 'Matanzas Province', 56, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(898, 'Mayabeque Province', 56, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(899, 'Pinar del Río Province', 56, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(900, 'Sancti Spíritus Province', 56, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(901, 'Santiago de Cuba Province', 56, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(902, 'Villa Clara Province', 56, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(903, 'Famagusta District (Mağusa)', 57, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(904, 'Kyrenia District (Keryneia)', 57, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(905, 'Larnaca District (Larnaka)', 57, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(906, 'Limassol District (Leymasun)', 57, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(907, 'Nicosia District (Lefkoşa)', 57, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(908, 'Paphos District (Pafos)', 57, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(909, 'Benešov', 58, '1', '201', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(910, 'Beroun', 58, '1', '202', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(911, 'Blansko', 58, '1', '641', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(912, 'Břeclav', 58, '1', '644', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(913, 'Brno-město', 58, '1', '642', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(914, 'Brno-venkov', 58, '1', '643', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(915, 'Bruntál', 58, '1', '801', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(916, 'Česká Lípa', 58, '1', '511', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(917, 'České Budějovice', 58, '1', '311', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(918, 'Český Krumlov', 58, '1', '312', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(919, 'Cheb', 58, '1', '411', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(920, 'Chomutov', 58, '1', '422', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(921, 'Chrudim', 58, '1', '531', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(922, 'Děčín', 58, '1', '421', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(923, 'Domažlice', 58, '1', '321', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(924, 'Frýdek-Místek', 58, '1', '802', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(925, 'Havlíčkův Brod', 58, '1', '631', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(926, 'Hodonín', 58, '1', '645', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(927, 'Hradec Králové', 58, '1', '521', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(928, 'Jablonec nad Nisou', 58, '1', '512', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(929, 'Jeseník', 58, '1', '711', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(930, 'Jičín', 58, '1', '522', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(931, 'Jihlava', 58, '1', '632', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(932, 'Jihočeský kraj', 58, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(933, 'Jihomoravský kraj', 58, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(934, 'Jindřichův Hradec', 58, '1', '313', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(935, 'Karlovarský kraj', 58, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(936, 'Karlovy Vary', 58, '1', '412', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(937, 'Karviná', 58, '1', '803', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(938, 'Kladno', 58, '1', '203', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(939, 'Klatovy', 58, '1', '322', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(940, 'Kolín', 58, '1', '204', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(941, 'Kraj Vysočina', 58, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(942, 'Královéhradecký kraj', 58, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(943, 'Kroměříž', 58, '1', '721', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(944, 'Kutná Hora', 58, '1', '205', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(945, 'Liberec', 58, '1', '513', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(946, 'Liberecký kraj', 58, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(947, 'Litoměřice', 58, '1', '423', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(948, 'Louny', 58, '1', '424', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(949, 'Mělník', 58, '1', '206', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(950, 'Mladá Boleslav', 58, '1', '207', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(951, 'Moravskoslezský kraj', 58, '1', '80', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(952, 'Most', 58, '1', '425', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(953, 'Náchod', 58, '1', '523', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(954, 'Nový Jičín', 58, '1', '804', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(955, 'Nymburk', 58, '1', '208', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(956, 'Olomouc', 58, '1', '712', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(957, 'Olomoucký kraj', 58, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(958, 'Opava', 58, '1', '805', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(959, 'Ostrava-město', 58, '1', '806', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(960, 'Pardubice', 58, '1', '532', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(961, 'Pardubický kraj', 58, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(962, 'Pelhřimov', 58, '1', '633', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(963, 'Písek', 58, '1', '314', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(964, 'Plzeň-jih', 58, '1', '324', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(965, 'Plzeň-město', 58, '1', '323', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(966, 'Plzeň-sever', 58, '1', '325', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(967, 'Plzeňský kraj', 58, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(968, 'Prachatice', 58, '1', '315', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(969, 'Praha-východ', 58, '1', '209', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(970, 'Praha-západ', 58, '1', '20A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(971, 'Praha, Hlavní město', 58, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(972, 'Přerov', 58, '1', '714', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(973, 'Příbram', 58, '1', '20B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(974, 'Prostějov', 58, '1', '713', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(975, 'Rakovník', 58, '1', '20C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(976, 'Rokycany', 58, '1', '326', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(977, 'Rychnov nad Kněžnou', 58, '1', '524', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(978, 'Semily', 58, '1', '514', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(979, 'Sokolov', 58, '1', '413', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(980, 'Strakonice', 58, '1', '316', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(981, 'Středočeský kraj', 58, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(982, 'Šumperk', 58, '1', '715', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(983, 'Svitavy', 58, '1', '533', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(984, 'Tábor', 58, '1', '317', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(985, 'Tachov', 58, '1', '327', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(986, 'Teplice', 58, '1', '426', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(987, 'Třebíč', 58, '1', '634', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(988, 'Trutnov', 58, '1', '525', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(989, 'Uherské Hradiště', 58, '1', '722', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(990, 'Ústecký kraj', 58, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(991, 'Ústí nad Labem', 58, '1', '427', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(992, 'Ústí nad Orlicí', 58, '1', '534', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(993, 'Vsetín', 58, '1', '723', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(994, 'Vyškov', 58, '1', '646', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(995, 'Žďár nad Sázavou', 58, '1', '635', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(996, 'Zlín', 58, '1', '724', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(997, 'Zlínský kraj', 58, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(998, 'Znojmo', 58, '1', '647', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(999, 'Bas-Uélé', 51, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1000, 'Équateur', 51, '1', 'EQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1001, 'Haut-Katanga', 51, '1', 'HK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1002, 'Haut-Lomami', 51, '1', 'HL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1003, 'Haut-Uélé', 51, '1', 'HU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1004, 'Ituri', 51, '1', 'IT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1005, 'Kasaï', 51, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1006, 'Kasaï Central', 51, '1', 'KC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1007, 'Kasaï Oriental', 51, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1008, 'Kinshasa', 51, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1009, 'Kongo Central', 51, '1', 'BC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1010, 'Kwango', 51, '1', 'KG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1011, 'Kwilu', 51, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1012, 'Lomami', 51, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1013, 'Lualaba', 51, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1014, 'Mai-Ndombe', 51, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1015, 'Maniema', 51, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1016, 'Mongala', 51, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1017, 'Nord-Kivu', 51, '1', 'NK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1018, 'Nord-Ubangi', 51, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1019, 'Sankuru', 51, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1020, 'Sud-Kivu', 51, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1021, 'Sud-Ubangi', 51, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1022, 'Tanganyika', 51, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1023, 'Tshopo', 51, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1024, 'Tshuapa', 51, '1', 'TU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1025, 'Capital Region of Denmark', 59, '1', '84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1026, 'Central Denmark Region', 59, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1027, 'North Denmark Region', 59, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1028, 'Region of Southern Denmark', 59, '1', '83', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1029, 'Region Zealand', 59, '1', '85', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1030, 'Ali Sabieh Region', 60, '1', 'AS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1031, 'Arta Region', 60, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1032, 'Dikhil Region', 60, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1033, 'Djibouti', 60, '1', 'DJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1034, 'Obock Region', 60, '1', 'OB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1035, 'Tadjourah Region', 60, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1036, 'Saint Andrew Parish', 61, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1037, 'Saint David Parish', 61, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1038, 'Saint George Parish', 61, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1039, 'Saint John Parish', 61, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1040, 'Saint Joseph Parish', 61, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1041, 'Saint Luke Parish', 61, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1042, 'Saint Mark Parish', 61, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1043, 'Saint Patrick Parish', 61, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1044, 'Saint Paul Parish', 61, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1045, 'Saint Peter Parish', 61, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1046, 'Azua Province', 62, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1047, 'Baoruco Province', 62, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1048, 'Barahona Province', 62, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1049, 'Dajabón Province', 62, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1050, 'Distrito Nacional', 62, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1051, 'Duarte Province', 62, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1052, 'El Seibo Province', 62, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1053, 'Espaillat Province', 62, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1054, 'Hato Mayor Province', 62, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1055, 'Hermanas Mirabal Province', 62, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1056, 'Independencia', 62, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1057, 'La Altagracia Province', 62, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1058, 'La Romana Province', 62, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1059, 'La Vega Province', 62, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1060, 'María Trinidad Sánchez Province', 62, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1061, 'Monseñor Nouel Province', 62, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1062, 'Monte Cristi Province', 62, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1063, 'Monte Plata Province', 62, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1064, 'Pedernales Province', 62, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1065, 'Peravia Province', 62, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1066, 'Puerto Plata Province', 62, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1067, 'Samaná Province', 62, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1068, 'San Cristóbal Province', 62, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1069, 'San José de Ocoa Province', 62, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1070, 'San Juan Province', 62, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1071, 'San Pedro de Macorís', 62, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1072, 'Sánchez Ramírez Province', 62, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1073, 'Santiago Province', 62, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1074, 'Santiago Rodríguez Province', 62, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1075, 'Santo Domingo Province', 62, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1076, 'Valverde Province', 62, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1077, 'Aileu municipality', 63, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1078, 'Ainaro Municipality', 63, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1079, 'Baucau Municipality', 63, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1080, 'Bobonaro Municipality', 63, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1081, 'Cova Lima Municipality', 63, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1082, 'Dili municipality', 63, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1083, 'Ermera District', 63, '1', 'ER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1084, 'Lautém Municipality', 63, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1085, 'Liquiçá Municipality', 63, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1086, 'Manatuto District', 63, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1087, 'Manufahi Municipality', 63, '1', 'MF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1088, 'Viqueque Municipality', 63, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1089, 'Azuay', 64, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1090, 'Bolívar', 64, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1091, 'Cañar', 64, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1092, 'Carchi', 64, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1093, 'Chimborazo', 64, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1094, 'Cotopaxi', 64, '1', 'X', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1095, 'El Oro', 64, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1096, 'Esmeraldas', 64, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1097, 'Galápagos', 64, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1098, 'Guayas', 64, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1099, 'Imbabura', 64, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1100, 'Loja', 64, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1101, 'Los Ríos', 64, '1', 'R', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1102, 'Manabí', 64, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1103, 'Morona-Santiago', 64, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1104, 'Napo', 64, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1105, 'Orellana', 64, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1106, 'Pastaza', 64, '1', 'Y', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1107, 'Pichincha', 64, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1108, 'Santa Elena', 64, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1109, 'Santo Domingo de los Tsáchilas', 64, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1110, 'Sucumbíos', 64, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1111, 'Tungurahua', 64, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1112, 'Zamora Chinchipe', 64, '1', 'Z', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1113, 'Alexandria', 65, '1', 'ALX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1114, 'Aswan', 65, '1', 'ASN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1115, 'Asyut', 65, '1', 'AST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1116, 'Beheira', 65, '1', 'BH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1117, 'Beni Suef', 65, '1', 'BNS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1118, 'Cairo', 65, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1119, 'Dakahlia', 65, '1', 'DK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1120, 'Damietta', 65, '1', 'DT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1121, 'Faiyum', 65, '1', 'FYM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1122, 'Gharbia', 65, '1', 'GH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1123, 'Giza', 65, '1', 'GZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1124, 'Ismailia', 65, '1', 'IS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1125, 'Kafr el-Sheikh', 65, '1', 'KFS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1126, 'Luxor', 65, '1', 'LX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1127, 'Matrouh', 65, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1128, 'Minya', 65, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1129, 'Monufia', 65, '1', 'MNF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1130, 'New Valley', 65, '1', 'WAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1131, 'North Sinai', 65, '1', 'SIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1132, 'Port Said', 65, '1', 'PTS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1133, 'Qalyubia', 65, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1134, 'Qena', 65, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1135, 'Red Sea', 65, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1136, 'Sharqia', 65, '1', 'SHR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1137, 'Sohag', 65, '1', 'SHG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1138, 'South Sinai', 65, '1', 'JS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1139, 'Suez', 65, '1', 'SUZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1140, 'Ahuachapán Department', 66, '1', 'AH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1141, 'Cabañas Department', 66, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1142, 'Chalatenango Department', 66, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1143, 'Cuscatlán Department', 66, '1', 'CU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1144, 'La Libertad Department', 66, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1145, 'La Paz Department', 66, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1146, 'La Unión Department', 66, '1', 'UN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1147, 'Morazán Department', 66, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1148, 'San Miguel Department', 66, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1149, 'San Salvador Department', 66, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1150, 'San Vicente Department', 66, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1151, 'Santa Ana Department', 66, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1152, 'Sonsonate Department', 66, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1153, 'Usulután Department', 66, '1', 'US', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1154, 'Annobón Province', 67, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1155, 'Bioko Norte Province', 67, '1', 'BN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1156, 'Bioko Sur Province', 67, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1157, 'Centro Sur Province', 67, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1158, 'Insular Region', 67, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1159, 'Kié-Ntem Province', 67, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1160, 'Litoral Province', 67, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1161, 'Río Muni', 67, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1162, 'Wele-Nzas Province', 67, '1', 'WN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1163, 'Anseba Region', 68, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1164, 'Debub Region', 68, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1165, 'Gash-Barka Region', 68, '1', 'GB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1166, 'Maekel Region', 68, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1167, 'Northern Red Sea Region', 68, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1168, 'Southern Red Sea Region', 68, '1', 'DK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1169, 'Harju County', 69, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1170, 'Hiiu County', 69, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1171, 'Ida-Viru County', 69, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1172, 'Järva County', 69, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1173, 'Jõgeva County', 69, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1174, 'Lääne County', 69, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1175, 'Lääne-Viru County', 69, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1176, 'Pärnu County', 69, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1177, 'Põlva County', 69, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1178, 'Rapla County', 69, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1179, 'Saare County', 69, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1180, 'Tartu County', 69, '1', '78', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1181, 'Valga County', 69, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1182, 'Viljandi County', 69, '1', '84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1183, 'Võru County', 69, '1', '86', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1184, 'Addis Ababa', 70, '1', 'AA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1185, 'Afar Region', 70, '1', 'AF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1186, 'Amhara Region', 70, '1', 'AM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1187, 'Benishangul-Gumuz Region', 70, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1188, 'Dire Dawa', 70, '1', 'DD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1189, 'Gambela Region', 70, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1190, 'Harari Region', 70, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1191, 'Oromia Region', 70, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1192, 'Somali Region', 70, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1193, 'Southern Nations, Nationalities, and Peoples\' Region', 70, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1194, 'Tigray Region', 70, '1', 'TI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1195, 'Ba', 73, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1196, 'Bua', 73, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1197, 'Cakaudrove', 73, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1198, 'Central Division', 73, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1199, 'Eastern Division', 73, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1200, 'Kadavu', 73, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1201, 'Lau', 73, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1202, 'Lomaiviti', 73, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1203, 'Macuata', 73, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1204, 'Nadroga-Navosa', 73, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1205, 'Naitasiri', 73, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1206, 'Namosi', 73, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1207, 'Northern Division', 73, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1208, 'Ra', 73, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1209, 'Rewa', 73, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1210, 'Rotuma', 73, '1', 'R', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1211, 'Serua', 73, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1212, 'Tailevu', 73, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1213, 'Western Division', 73, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1214, 'Åland Islands', 74, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1215, 'Central Finland', 74, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1216, 'Central Ostrobothnia', 74, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1217, 'Finland Proper', 74, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1218, 'Kainuu', 74, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1219, 'Kymenlaakso', 74, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1220, 'Lapland', 74, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1221, 'North Karelia', 74, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1222, 'Northern Ostrobothnia', 74, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1223, 'Northern Savonia', 74, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1224, 'Ostrobothnia', 74, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1225, 'Päijänne Tavastia', 74, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1226, 'Pirkanmaa', 74, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1227, 'Satakunta', 74, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1228, 'South Karelia', 74, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1229, 'Southern Ostrobothnia', 74, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1230, 'Southern Savonia', 74, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1231, 'Tavastia Proper', 74, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1232, 'Uusimaa', 74, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1233, 'Ain', 75, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1234, 'Aisne', 75, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1235, 'Allier', 75, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1236, 'Alpes-de-Haute-Provence', 75, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1237, 'Alpes-Maritimes', 75, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1238, 'Alsace', 75, '1', '6AE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1239, 'Ardèche', 75, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1240, 'Ardennes', 75, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1241, 'Ariège', 75, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1242, 'Aube', 75, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1243, 'Aude', 75, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1244, 'Auvergne-Rhône-Alpes', 75, '1', 'ARA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1245, 'Aveyron', 75, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1246, 'Bas-Rhin', 75, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1247, 'Bouches-du-Rhône', 75, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1248, 'Bourgogne-Franche-Comté', 75, '1', 'BFC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1249, 'Bretagne', 75, '1', 'BRE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1250, 'Calvados', 75, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1251, 'Cantal', 75, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1252, 'Centre-Val de Loire', 75, '1', 'CVL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1253, 'Charente', 75, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1254, 'Charente-Maritime', 75, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1255, 'Cher', 75, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1256, 'Clipperton', 75, '1', 'CP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1257, 'Corrèze', 75, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1258, 'Corse', 75, '1', '20R', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1259, 'Corse-du-Sud', 75, '1', '2A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1260, 'Côte-d\'Or', 75, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1261, 'Côtes-d\'Armor', 75, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1262, 'Creuse', 75, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1263, 'Deux-Sèvres', 75, '1', '79', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1264, 'Dordogne', 75, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1265, 'Doubs', 75, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1266, 'Drôme', 75, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1267, 'Essonne', 75, '1', '91', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1268, 'Eure', 75, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1269, 'Eure-et-Loir', 75, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1270, 'Finistère', 75, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1271, 'French Guiana', 75, '1', '973', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1272, 'French Polynesia', 75, '1', 'PF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1273, 'French Southern and Antarctic Lands', 75, '1', 'TF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1274, 'Gard', 75, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1275, 'Gers', 75, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1276, 'Gironde', 75, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1277, 'Grand-Est', 75, '1', 'GES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1278, 'Guadeloupe', 75, '1', '971', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1279, 'Haut-Rhin', 75, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1280, 'Haute-Corse', 75, '1', '2B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1281, 'Haute-Garonne', 75, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1282, 'Haute-Loire', 75, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1283, 'Haute-Marne', 75, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1284, 'Haute-Saône', 75, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1285, 'Haute-Savoie', 75, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1286, 'Haute-Vienne', 75, '1', '87', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1287, 'Hautes-Alpes', 75, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1288, 'Hautes-Pyrénées', 75, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1289, 'Hauts-de-France', 75, '1', 'HDF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1290, 'Hauts-de-Seine', 75, '1', '92', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1291, 'Hérault', 75, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1292, 'Île-de-France', 75, '1', 'IDF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1293, 'Ille-et-Vilaine', 75, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1294, 'Indre', 75, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1295, 'Indre-et-Loire', 75, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1296, 'Isère', 75, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1297, 'Jura', 75, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1298, 'La Réunion', 75, '1', '974', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1299, 'Landes', 75, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1300, 'Loir-et-Cher', 75, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1301, 'Loire', 75, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1302, 'Loire-Atlantique', 75, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1303, 'Loiret', 75, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1304, 'Lot', 75, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1305, 'Lot-et-Garonne', 75, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1306, 'Lozère', 75, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1307, 'Maine-et-Loire', 75, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1308, 'Manche', 75, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1309, 'Marne', 75, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1310, 'Martinique', 75, '1', '972', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1311, 'Mayenne', 75, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1312, 'Mayotte', 75, '1', '976', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1313, 'Métropole de Lyon', 75, '1', '69M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1314, 'Meurthe-et-Moselle', 75, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1315, 'Meuse', 75, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1316, 'Morbihan', 75, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1317, 'Moselle', 75, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1318, 'Nièvre', 75, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1319, 'Nord', 75, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1320, 'Normandie', 75, '1', 'NOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1321, 'Nouvelle-Aquitaine', 75, '1', 'NAQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1322, 'Occitanie', 75, '1', 'OCC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1323, 'Oise', 75, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1324, 'Orne', 75, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1325, 'Paris', 75, '1', '75C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1326, 'Pas-de-Calais', 75, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1327, 'Pays-de-la-Loire', 75, '1', 'PDL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1328, 'Provence-Alpes-Côte-d’Azur', 75, '1', 'PAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1329, 'Puy-de-Dôme', 75, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1330, 'Pyrénées-Atlantiques', 75, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1331, 'Pyrénées-Orientales', 75, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1332, 'Rhône', 75, '1', '69', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1333, 'Saint Pierre and Miquelon', 75, '1', 'PM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1334, 'Saint-Barthélemy', 75, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1335, 'Saint-Martin', 75, '1', 'MF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1336, 'Saône-et-Loire', 75, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1337, 'Sarthe', 75, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1338, 'Savoie', 75, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1339, 'Seine-et-Marne', 75, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1340, 'Seine-Maritime', 75, '1', '76', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1341, 'Seine-Saint-Denis', 75, '1', '93', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1342, 'Somme', 75, '1', '80', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1343, 'Tarn', 75, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1344, 'Tarn-et-Garonne', 75, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1345, 'Territoire de Belfort', 75, '1', '90', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1346, 'Val-d\'Oise', 75, '1', '95', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1347, 'Val-de-Marne', 75, '1', '94', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1348, 'Var', 75, '1', '83', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1349, 'Vaucluse', 75, '1', '84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1350, 'Vendée', 75, '1', '85', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1351, 'Vienne', 75, '1', '86', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1352, 'Vosges', 75, '1', '88', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1353, 'Wallis and Futuna', 75, '1', 'WF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1354, 'Yonne', 75, '1', '89', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1355, 'Yvelines', 75, '1', '78', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1356, 'Estuaire Province', 79, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1357, 'Haut-Ogooué Province', 79, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1358, 'Moyen-Ogooué Province', 79, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1359, 'Ngounié Province', 79, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1360, 'Nyanga Province', 79, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1361, 'Ogooué-Ivindo Province', 79, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1362, 'Ogooué-Lolo Province', 79, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1363, 'Ogooué-Maritime Province', 79, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1364, 'Woleu-Ntem Province', 79, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1365, 'Banjul', 80, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1366, 'Central River Division', 80, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1367, 'Lower River Division', 80, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1368, 'North Bank Division', 80, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1369, 'Upper River Division', 80, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1370, 'West Coast Division', 80, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1371, 'Adjara', 81, '1', 'AJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1372, 'Autonomous Republic of Abkhazia', 81, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1373, 'Guria', 81, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1374, 'Imereti', 81, '1', 'IM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1375, 'Kakheti', 81, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1376, 'Khelvachauri Municipality', 81, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1377, 'Kvemo Kartli', 81, '1', 'KK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1378, 'Mtskheta-Mtianeti', 81, '1', 'MM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1379, 'Racha-Lechkhumi and Kvemo Svaneti', 81, '1', 'RL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1380, 'Samegrelo-Zemo Svaneti', 81, '1', 'SZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1381, 'Samtskhe-Javakheti', 81, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1382, 'Senaki Municipality', 81, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1383, 'Shida Kartli', 81, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1384, 'Tbilisi', 81, '1', 'TB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1385, 'Baden-Württemberg', 82, '1', 'BW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1386, 'Bavaria', 82, '1', 'BY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1387, 'Berlin', 82, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1388, 'Brandenburg', 82, '1', 'BB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1389, 'Bremen', 82, '1', 'HB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1390, 'Hamburg', 82, '1', 'HH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1391, 'Hesse', 82, '1', 'HE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1392, 'Lower Saxony', 82, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1393, 'Mecklenburg-Vorpommern', 82, '1', 'MV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1394, 'North Rhine-Westphalia', 82, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1395, 'Rhineland-Palatinate', 82, '1', 'RP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1396, 'Saarland', 82, '1', 'SL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1397, 'Saxony', 82, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1398, 'Saxony-Anhalt', 82, '1', 'ST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1399, 'Schleswig-Holstein', 82, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1400, 'Thuringia', 82, '1', 'TH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1401, 'Ahafo', 83, '1', 'AF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1402, 'Ashanti', 83, '1', 'AH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1403, 'Bono', 83, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1404, 'Bono East', 83, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1405, 'Central', 83, '1', 'CP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1406, 'Eastern', 83, '1', 'EP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1407, 'Greater Accra', 83, '1', 'AA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1408, 'North East', 83, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1409, 'Northern', 83, '1', 'NP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1410, 'Oti', 83, '1', 'OT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1411, 'Savannah', 83, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1412, 'Upper East', 83, '1', 'UE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1413, 'Upper West', 83, '1', 'UW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1414, 'Volta', 83, '1', 'TV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1415, 'Western', 83, '1', 'WP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1416, 'Western North', 83, '1', 'WN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1417, 'Achaea Regional Unit', 85, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1418, 'Aetolia-Acarnania Regional Unit', 85, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1419, 'Arcadia Prefecture', 85, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1420, 'Argolis Regional Unit', 85, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1421, 'Attica Region', 85, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1422, 'Boeotia Regional Unit', 85, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1423, 'Central Greece Region', 85, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1424, 'Central Macedonia', 85, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1425, 'Chania Regional Unit', 85, '1', '94', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1426, 'Corfu Prefecture', 85, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1427, 'Corinthia Regional Unit', 85, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1428, 'Crete Region', 85, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1429, 'Drama Regional Unit', 85, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1430, 'East Attica Regional Unit', 85, '1', 'A2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1431, 'East Macedonia and Thrace', 85, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1432, 'Epirus Region', 85, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1433, 'Euboea', 85, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1434, 'Grevena Prefecture', 85, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1435, 'Imathia Regional Unit', 85, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1436, 'Ioannina Regional Unit', 85, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1437, 'Ionian Islands Region', 85, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1438, 'Karditsa Regional Unit', 85, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1439, 'Kastoria Regional Unit', 85, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1440, 'Kefalonia Prefecture', 85, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1441, 'Kilkis Regional Unit', 85, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1442, 'Kozani Prefecture', 85, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1443, 'Laconia', 85, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1444, 'Larissa Prefecture', 85, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1445, 'Lefkada Regional Unit', 85, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1446, 'Pella Regional Unit', 85, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1447, 'Peloponnese Region', 85, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1448, 'Phthiotis Prefecture', 85, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1449, 'Preveza Prefecture', 85, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1450, 'Serres Prefecture', 85, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1451, 'South Aegean', 85, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1452, 'Thessaloniki Regional Unit', 85, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1453, 'West Greece Region', 85, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1454, 'West Macedonia Region', 85, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1455, 'Carriacou and Petite Martinique', 87, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1456, 'Saint Andrew Parish', 87, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1457, 'Saint David Parish', 87, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1458, 'Saint George Parish', 87, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1459, 'Saint John Parish', 87, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1460, 'Saint Mark Parish', 87, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1461, 'Saint Patrick Parish', 87, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1462, 'Alta Verapaz Department', 90, '1', 'AV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1463, 'Baja Verapaz Department', 90, '1', 'BV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1464, 'Chimaltenango Department', 90, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1465, 'Chiquimula Department', 90, '1', 'CQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1466, 'El Progreso Department', 90, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1467, 'Escuintla Department', 90, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1468, 'Guatemala Department', 90, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1469, 'Huehuetenango Department', 90, '1', 'HU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1470, 'Izabal Department', 90, '1', 'IZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1471, 'Jalapa Department', 90, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1472, 'Jutiapa Department', 90, '1', 'JU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1473, 'Petén Department', 90, '1', 'PE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1474, 'Quetzaltenango Department', 90, '1', 'QZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1475, 'Quiché Department', 90, '1', 'QC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1476, 'Retalhuleu Department', 90, '1', 'RE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1477, 'Sacatepéquez Department', 90, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1478, 'San Marcos Department', 90, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1479, 'Santa Rosa Department', 90, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1480, 'Sololá Department', 90, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1481, 'Suchitepéquez Department', 90, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1482, 'Totonicapán Department', 90, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1483, 'Beyla Prefecture', 92, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1484, 'Boffa Prefecture', 92, '1', 'BF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1485, 'Boké Prefecture', 92, '1', 'BK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1486, 'Boké Region', 92, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1487, 'Conakry', 92, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1488, 'Coyah Prefecture', 92, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1489, 'Dabola Prefecture', 92, '1', 'DB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1490, 'Dalaba Prefecture', 92, '1', 'DL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1491, 'Dinguiraye Prefecture', 92, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1492, 'Dubréka Prefecture', 92, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1493, 'Faranah Prefecture', 92, '1', 'FA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1494, 'Forécariah Prefecture', 92, '1', 'FO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1495, 'Fria Prefecture', 92, '1', 'FR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1496, 'Gaoual Prefecture', 92, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1497, 'Guéckédou Prefecture', 92, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1498, 'Kankan Prefecture', 92, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1499, 'Kankan Region', 92, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1500, 'Kérouané Prefecture', 92, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1501, 'Kindia Prefecture', 92, '1', 'KD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1502, 'Kindia Region', 92, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1503, 'Kissidougou Prefecture', 92, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1504, 'Koubia Prefecture', 92, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1505, 'Koundara Prefecture', 92, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1506, 'Kouroussa Prefecture', 92, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1507, 'Labé Prefecture', 92, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1508, 'Labé Region', 92, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1509, 'Lélouma Prefecture', 92, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1510, 'Lola Prefecture', 92, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1511, 'Macenta Prefecture', 92, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1512, 'Mali Prefecture', 92, '1', 'ML', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1513, 'Mamou Prefecture', 92, '1', 'MM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1514, 'Mamou Region', 92, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1515, 'Mandiana Prefecture', 92, '1', 'MD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1516, 'Nzérékoré Prefecture', 92, '1', 'NZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1517, 'Nzérékoré Region', 92, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1518, 'Pita Prefecture', 92, '1', 'PI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1519, 'Siguiri Prefecture', 92, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1520, 'Télimélé Prefecture', 92, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1521, 'Tougué Prefecture', 92, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1522, 'Yomou Prefecture', 92, '1', 'YO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1523, 'Bafatá', 93, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1524, 'Biombo Region', 93, '1', 'BM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1525, 'Bolama Region', 93, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1526, 'Cacheu Region', 93, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1527, 'Gabú Region', 93, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1528, 'Leste Province', 93, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1529, 'Norte Province', 93, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1530, 'Oio Region', 93, '1', 'OI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1531, 'Quinara Region', 93, '1', 'QU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1532, 'Sul Province', 93, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1533, 'Tombali Region', 93, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1534, 'Barima-Waini', 94, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1535, 'Cuyuni-Mazaruni', 94, '1', 'CU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1536, 'Demerara-Mahaica', 94, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1537, 'East Berbice-Corentyne', 94, '1', 'EB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1538, 'Essequibo Islands-West Demerara', 94, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1539, 'Mahaica-Berbice', 94, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1540, 'Pomeroon-Supenaam', 94, '1', 'PM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1541, 'Potaro-Siparuni', 94, '1', 'PT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1542, 'Upper Demerara-Berbice', 94, '1', 'UD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1543, 'Upper Takutu-Upper Essequibo', 94, '1', 'UT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1544, 'Artibonite', 95, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1545, 'Centre', 95, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1546, 'Grand\'Anse', 95, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1547, 'Nippes', 95, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1548, 'Nord', 95, '1', 'ND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1549, 'Nord-Est', 95, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1550, 'Nord-Ouest', 95, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1551, 'Ouest', 95, '1', 'OU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1552, 'Sud', 95, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1553, 'Sud-Est', 95, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1554, 'Atlántida Department', 97, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1555, 'Bay Islands Department', 97, '1', 'IB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1556, 'Choluteca Department', 97, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1557, 'Colón Department', 97, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1558, 'Comayagua Department', 97, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1559, 'Copán Department', 97, '1', 'CP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1560, 'Cortés Department', 97, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1561, 'El Paraíso Department', 97, '1', 'EP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1562, 'Francisco Morazán Department', 97, '1', 'FM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1563, 'Gracias a Dios Department', 97, '1', 'GD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1564, 'Intibucá Department', 97, '1', 'IN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1565, 'La Paz Department', 97, '1', 'LP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1566, 'Lempira Department', 97, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1567, 'Ocotepeque Department', 97, '1', 'OC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1568, 'Olancho Department', 97, '1', 'OL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1569, 'Santa Bárbara Department', 97, '1', 'SB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1570, 'Valle Department', 97, '1', 'VA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1571, 'Yoro Department', 97, '1', 'YO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1572, 'Central and Western District', 98, '1', 'HCW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1573, 'Eastern', 98, '1', 'HEA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1574, 'Islands District', 98, '1', 'NIS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1575, 'Kowloon City', 98, '1', 'KKC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1576, 'Kwai Tsing', 98, '1', 'NKT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1577, 'Kwun Tong', 98, '1', 'KKT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1578, 'North', 98, '1', 'NNO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1579, 'Sai Kung District', 98, '1', 'NSK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1580, 'Sha Tin', 98, '1', 'NST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1581, 'Sham Shui Po', 98, '1', 'KSS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1582, 'Southern', 98, '1', 'HSO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1583, 'Tai Po District', 98, '1', 'NTP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1584, 'Tsuen Wan District', 98, '1', 'NTW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1585, 'Tuen Mun', 98, '1', 'NTM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1586, 'Wan Chai', 98, '1', 'HWC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1587, 'Wong Tai Sin', 98, '1', 'KWT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1588, 'Yau Tsim Mong', 98, '1', 'KYT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1589, 'Yuen Long District', 98, '1', 'NYL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1590, 'Bács-Kiskun', 99, '1', 'BK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1591, 'Baranya', 99, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1592, 'Békés', 99, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1593, 'Békéscsaba', 99, '1', 'BC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1594, 'Borsod-Abaúj-Zemplén', 99, '1', 'BZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1595, 'Budapest', 99, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1596, 'Csongrád County', 99, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1597, 'Debrecen', 99, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1598, 'Dunaújváros', 99, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1599, 'Eger', 99, '1', 'EG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1600, 'Érd', 99, '1', 'ER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1601, 'Fejér County', 99, '1', 'FE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1602, 'Győr', 99, '1', 'GY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1603, 'Győr-Moson-Sopron County', 99, '1', 'GS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1604, 'Hajdú-Bihar County', 99, '1', 'HB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1605, 'Heves County', 99, '1', 'HE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1606, 'Hódmezővásárhely', 99, '1', 'HV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1607, 'Jász-Nagykun-Szolnok County', 99, '1', 'JN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1608, 'Kaposvár', 99, '1', 'KV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1609, 'Kecskemét', 99, '1', 'KM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1610, 'Komárom-Esztergom', 99, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1611, 'Miskolc', 99, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1612, 'Nagykanizsa', 99, '1', 'NK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1613, 'Nógrád County', 99, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1614, 'Nyíregyháza', 99, '1', 'NY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1615, 'Pécs', 99, '1', 'PS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1616, 'Pest County', 99, '1', 'PE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1617, 'Salgótarján', 99, '1', 'ST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1618, 'Somogy County', 99, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1619, 'Sopron', 99, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1620, 'Szabolcs-Szatmár-Bereg County', 99, '1', 'SZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1621, 'Szeged', 99, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1622, 'Székesfehérvár', 99, '1', 'SF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1623, 'Szekszárd', 99, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1624, 'Szolnok', 99, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1625, 'Szombathely', 99, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1626, 'Tatabánya', 99, '1', 'TB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1627, 'Tolna County', 99, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1628, 'Vas County', 99, '1', 'VA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1629, 'Veszprém', 99, '1', 'VM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1630, 'Veszprém County', 99, '1', 'VE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1631, 'Zala County', 99, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1632, 'Zalaegerszeg', 99, '1', 'ZE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1633, 'Capital Region', 100, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1634, 'Eastern Region', 100, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1635, 'Northeastern Region', 100, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1636, 'Northwestern Region', 100, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1637, 'Southern Peninsula Region', 100, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1638, 'Southern Region', 100, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1639, 'Western Region', 100, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1640, 'Westfjords', 100, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1641, 'Andaman and Nicobar Islands', 101, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1642, 'Andhra Pradesh', 101, '1', 'AP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1643, 'Arunachal Pradesh', 101, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1644, 'Assam', 101, '1', 'AS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1645, 'Bihar', 101, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1646, 'Chandigarh', 101, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1647, 'Chhattisgarh', 101, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1648, 'Dadra and Nagar Haveli and Daman and Diu', 101, '1', 'DH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1649, 'Delhi', 101, '1', 'DL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1650, 'Goa', 101, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1651, 'Gujarat', 101, '1', 'GJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1652, 'Haryana', 101, '1', 'HR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1653, 'Himachal Pradesh', 101, '1', 'HP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1654, 'Jammu and Kashmir', 101, '1', 'JK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1655, 'Jharkhand', 101, '1', 'JH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1656, 'Karnataka', 101, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1657, 'Kerala', 101, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1658, 'Ladakh', 101, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1659, 'Lakshadweep', 101, '1', 'LD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1660, 'Madhya Pradesh', 101, '1', 'MP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1661, 'Maharashtra', 101, '1', 'MH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1662, 'Manipur', 101, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1663, 'Meghalaya', 101, '1', 'ML', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1664, 'Mizoram', 101, '1', 'MZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1665, 'Nagaland', 101, '1', 'NL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1666, 'Odisha', 101, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1667, 'Puducherry', 101, '1', 'PY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1668, 'Punjab', 101, '1', 'PB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1669, 'Rajasthan', 101, '1', 'RJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1670, 'Sikkim', 101, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1671, 'Tamil Nadu', 101, '1', 'TN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1672, 'Telangana', 101, '1', 'TG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1673, 'Tripura', 101, '1', 'TR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1674, 'Uttar Pradesh', 101, '1', 'UP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1675, 'Uttarakhand', 101, '1', 'UT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1676, 'West Bengal', 101, '1', 'WB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1677, 'Aceh', 102, '1', 'AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1678, 'Bali', 102, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1679, 'Banten', 102, '1', 'BT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1680, 'Bengkulu', 102, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1681, 'DI Yogyakarta', 102, '1', 'YO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1682, 'DKI Jakarta', 102, '1', 'JK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1683, 'Gorontalo', 102, '1', 'GO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1684, 'Jambi', 102, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1685, 'Jawa Barat', 102, '1', 'JB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1686, 'Jawa Tengah', 102, '1', 'JT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1687, 'Jawa Timur', 102, '1', 'JI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1688, 'Kalimantan Barat', 102, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1689, 'Kalimantan Selatan', 102, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1690, 'Kalimantan Tengah', 102, '1', 'KT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1691, 'Kalimantan Timur', 102, '1', 'KI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1692, 'Kalimantan Utara', 102, '1', 'KU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1693, 'Kepulauan Bangka Belitung', 102, '1', 'BB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1694, 'Kepulauan Riau', 102, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1695, 'Lampung', 102, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1696, 'Maluku', 102, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1697, 'Maluku Utara', 102, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1698, 'Nusa Tenggara Barat', 102, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1699, 'Nusa Tenggara Timur', 102, '1', 'NT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1700, 'Papua', 102, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1701, 'Papua Barat', 102, '1', 'PB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1702, 'Riau', 102, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1703, 'Sulawesi Barat', 102, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1704, 'Sulawesi Selatan', 102, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1705, 'Sulawesi Tengah', 102, '1', 'ST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1706, 'Sulawesi Tenggara', 102, '1', 'SG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1707, 'Sulawesi Utara', 102, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1708, 'Sumatera Barat', 102, '1', 'SB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1709, 'Sumatera Selatan', 102, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1710, 'Sumatera Utara', 102, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1711, 'Alborz', 103, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1712, 'Ardabil', 103, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1713, 'Bushehr', 103, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1714, 'Chaharmahal and Bakhtiari', 103, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1715, 'East Azerbaijan', 103, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1716, 'Fars', 103, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1717, 'Gilan', 103, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1718, 'Golestan', 103, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1719, 'Hamadan', 103, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1720, 'Hormozgan', 103, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1721, 'Ilam', 103, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1722, 'Isfahan', 103, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1723, 'Kerman', 103, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1724, 'Kermanshah', 103, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1725, 'Khuzestan', 103, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1726, 'Kohgiluyeh and Boyer-Ahmad', 103, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1727, 'Kurdistan', 103, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1728, 'Lorestan', 103, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1729, 'Markazi', 103, '1', '00', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1730, 'Mazandaran', 103, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1731, 'North Khorasan', 103, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1732, 'Qazvin', 103, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1733, 'Qom', 103, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1734, 'Razavi Khorasan', 103, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1735, 'Semnan', 103, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1736, 'Sistan and Baluchestan', 103, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1737, 'South Khorasan', 103, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1738, 'Tehran', 103, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1739, 'West Azarbaijan', 103, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1740, 'Yazd', 103, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1741, 'Zanjan', 103, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1742, 'Al Anbar', 104, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1743, 'Al Muthanna', 104, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1744, 'Al-Qādisiyyah', 104, '1', 'QA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1745, 'Babylon', 104, '1', 'BB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1746, 'Baghdad', 104, '1', 'BG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1747, 'Basra', 104, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1748, 'Dhi Qar', 104, '1', 'DQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1749, 'Diyala', 104, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1750, 'Dohuk', 104, '1', 'DA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1751, 'Erbil', 104, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1752, 'Karbala', 104, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1753, 'Kirkuk', 104, '1', 'KI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1754, 'Maysan', 104, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1755, 'Najaf', 104, '1', 'NA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1756, 'Nineveh', 104, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1757, 'Saladin', 104, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1758, 'Sulaymaniyah', 104, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1759, 'Wasit', 104, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1760, 'Carlow', 105, '1', 'CW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1761, 'Cavan', 105, '1', 'CN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1762, 'Clare', 105, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1763, 'Connacht', 105, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1764, 'Cork', 105, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1765, 'Donegal', 105, '1', 'DL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1766, 'Dublin', 105, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1767, 'Galway', 105, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1768, 'Kerry', 105, '1', 'KY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1769, 'Kildare', 105, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1770, 'Kilkenny', 105, '1', 'KK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1771, 'Laois', 105, '1', 'LS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1772, 'Leinster', 105, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1773, 'Limerick', 105, '1', 'LK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1774, 'Longford', 105, '1', 'LD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1775, 'Louth', 105, '1', 'LH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1776, 'Mayo', 105, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1777, 'Meath', 105, '1', 'MH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1778, 'Monaghan', 105, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1779, 'Munster', 105, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1780, 'Offaly', 105, '1', 'OY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1781, 'Roscommon', 105, '1', 'RN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1782, 'Sligo', 105, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1783, 'Tipperary', 105, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1784, 'Ulster', 105, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1785, 'Waterford', 105, '1', 'WD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1786, 'Westmeath', 105, '1', 'WH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1787, 'Wexford', 105, '1', 'WX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1788, 'Wicklow', 105, '1', 'WW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1789, 'Central District', 106, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1790, 'Haifa District', 106, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1791, 'Jerusalem District', 106, '1', 'JM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1792, 'Northern District', 106, '1', 'Z', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1793, 'Southern District', 106, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1794, 'Tel Aviv District', 106, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1795, 'Abruzzo', 107, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1796, 'Agrigento', 107, '1', 'AG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1797, 'Alessandria', 107, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1798, 'Ancona', 107, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1799, 'Aosta Valley', 107, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1800, 'Apulia', 107, '1', '75', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1801, 'Ascoli Piceno', 107, '1', 'AP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1802, 'Asti', 107, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1803, 'Avellino', 107, '1', 'AV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1804, 'Barletta-Andria-Trani', 107, '1', 'BT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1805, 'Basilicata', 107, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1806, 'Belluno', 107, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1807, 'Benevento', 107, '1', 'BN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1808, 'Bergamo', 107, '1', 'BG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1809, 'Biella', 107, '1', 'BI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1810, 'Brescia', 107, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1811, 'Brindisi', 107, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1812, 'Calabria', 107, '1', '78', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1813, 'Caltanissetta', 107, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1814, 'Campania', 107, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1815, 'Campobasso', 107, '1', 'CB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1816, 'Caserta', 107, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1817, 'Catanzaro', 107, '1', 'CZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1818, 'Chieti', 107, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1819, 'Como', 107, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1820, 'Cosenza', 107, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1821, 'Cremona', 107, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1822, 'Crotone', 107, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1823, 'Cuneo', 107, '1', 'CN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1824, 'Emilia-Romagna', 107, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1825, 'Enna', 107, '1', 'EN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1826, 'Fermo', 107, '1', 'FM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1827, 'Ferrara', 107, '1', 'FE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1828, 'Foggia', 107, '1', 'FG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1829, 'Forlì-Cesena', 107, '1', 'FC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1830, 'Friuli–Venezia Giulia', 107, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1831, 'Frosinone', 107, '1', 'FR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1832, 'Gorizia', 107, '1', 'GO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1833, 'Grosseto', 107, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1834, 'Imperia', 107, '1', 'IM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1835, 'Isernia', 107, '1', 'IS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1836, 'L\'Aquila', 107, '1', 'AQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1837, 'La Spezia', 107, '1', 'SP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1838, 'Latina', 107, '1', 'LT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1839, 'Lazio', 107, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1840, 'Lecce', 107, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1841, 'Lecco', 107, '1', 'LC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1842, 'Liguria', 107, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1843, 'Livorno', 107, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1844, 'Lodi', 107, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1845, 'Lombardy', 107, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1846, 'Lucca', 107, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1847, 'Macerata', 107, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1848, 'Mantua', 107, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1849, 'Marche', 107, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1850, 'Massa and Carrara', 107, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1851, 'Matera', 107, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1852, 'Medio Campidano', 107, '1', 'VS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1853, 'Modena', 107, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1854, 'Molise', 107, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1855, 'Monza and Brianza', 107, '1', 'MB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1856, 'Novara', 107, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1857, 'Nuoro', 107, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1858, 'Oristano', 107, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1859, 'Padua', 107, '1', 'PD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1860, 'Palermo', 107, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1861, 'Parma', 107, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1862, 'Pavia', 107, '1', 'PV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1863, 'Perugia', 107, '1', 'PG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1864, 'Pesaro and Urbino', 107, '1', 'PU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1865, 'Pescara', 107, '1', 'PE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1866, 'Piacenza', 107, '1', 'PC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1867, 'Piedmont', 107, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1868, 'Pisa', 107, '1', 'PI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1869, 'Pistoia', 107, '1', 'PT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1870, 'Pordenone', 107, '1', 'PN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1871, 'Potenza', 107, '1', 'PZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1872, 'Prato', 107, '1', 'PO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1873, 'Ragusa', 107, '1', 'RG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1874, 'Ravenna', 107, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1875, 'Reggio Emilia', 107, '1', 'RE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1876, 'Rieti', 107, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1877, 'Rimini', 107, '1', 'RN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1878, 'Rovigo', 107, '1', 'RO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1879, 'Salerno', 107, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1880, 'Sardinia', 107, '1', '88', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1881, 'Sassari', 107, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1882, 'Savona', 107, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1883, 'Sicily', 107, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1884, 'Siena', 107, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1885, 'Siracusa', 107, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1886, 'Sondrio', 107, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1887, 'South Sardinia', 107, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1888, 'Taranto', 107, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1889, 'Teramo', 107, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1890, 'Terni', 107, '1', 'TR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1891, 'Trapani', 107, '1', 'TP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1892, 'Trentino-South Tyrol', 107, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1893, 'Treviso', 107, '1', 'TV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1894, 'Trieste', 107, '1', 'TS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1895, 'Tuscany', 107, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1896, 'Udine', 107, '1', 'UD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1897, 'Umbria', 107, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1898, 'Varese', 107, '1', 'VA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1899, 'Veneto', 107, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1900, 'Verbano-Cusio-Ossola', 107, '1', 'VB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1901, 'Vercelli', 107, '1', 'VC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1902, 'Verona', 107, '1', 'VR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1903, 'Vibo Valentia', 107, '1', 'VV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1904, 'Vicenza', 107, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1905, 'Viterbo', 107, '1', 'VT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1906, 'Clarendon Parish', 108, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1907, 'Hanover Parish', 108, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1908, 'Kingston Parish', 108, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1909, 'Manchester Parish', 108, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1910, 'Portland Parish', 108, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1911, 'Saint Andrew', 108, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1912, 'Saint Ann Parish', 108, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1913, 'Saint Catherine Parish', 108, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1914, 'Saint Elizabeth Parish', 108, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1915, 'Saint James Parish', 108, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1916, 'Saint Mary Parish', 108, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1917, 'Saint Thomas Parish', 108, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1918, 'Trelawny Parish', 108, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1919, 'Westmoreland Parish', 108, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1920, 'Aichi Prefecture', 109, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1921, 'Akita Prefecture', 109, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1922, 'Aomori Prefecture', 109, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1923, 'Chiba Prefecture', 109, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1924, 'Ehime Prefecture', 109, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1925, 'Fukui Prefecture', 109, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1926, 'Fukuoka Prefecture', 109, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1927, 'Fukushima Prefecture', 109, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1928, 'Gifu Prefecture', 109, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1929, 'Gunma Prefecture', 109, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1930, 'Hiroshima Prefecture', 109, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1931, 'Hokkaidō Prefecture', 109, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1932, 'Hyōgo Prefecture', 109, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1933, 'Ibaraki Prefecture', 109, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1934, 'Ishikawa Prefecture', 109, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1935, 'Iwate Prefecture', 109, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1936, 'Kagawa Prefecture', 109, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1937, 'Kagoshima Prefecture', 109, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1938, 'Kanagawa Prefecture', 109, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1939, 'Kōchi Prefecture', 109, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1940, 'Kumamoto Prefecture', 109, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1941, 'Kyōto Prefecture', 109, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1942, 'Mie Prefecture', 109, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1943, 'Miyagi Prefecture', 109, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1944, 'Miyazaki Prefecture', 109, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1945, 'Nagano Prefecture', 109, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1946, 'Nagasaki Prefecture', 109, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1947, 'Nara Prefecture', 109, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1948, 'Niigata Prefecture', 109, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1949, 'Ōita Prefecture', 109, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1950, 'Okayama Prefecture', 109, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1951, 'Okinawa Prefecture', 109, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1952, 'Ōsaka Prefecture', 109, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1953, 'Saga Prefecture', 109, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1954, 'Saitama Prefecture', 109, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1955, 'Shiga Prefecture', 109, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1956, 'Shimane Prefecture', 109, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1957, 'Shizuoka Prefecture', 109, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1958, 'Tochigi Prefecture', 109, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1959, 'Tokushima Prefecture', 109, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1960, 'Tokyo', 109, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1961, 'Tottori Prefecture', 109, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1962, 'Toyama Prefecture', 109, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1963, 'Wakayama Prefecture', 109, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1964, 'Yamagata Prefecture', 109, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1965, 'Yamaguchi Prefecture', 109, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1966, 'Yamanashi Prefecture', 109, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1967, 'Ajloun', 111, '1', 'AJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1968, 'Amman', 111, '1', 'AM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1969, 'Aqaba', 111, '1', 'AQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1970, 'Balqa', 111, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1971, 'Irbid', 111, '1', 'IR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1972, 'Jerash', 111, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1973, 'Karak', 111, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1974, 'Ma\'an', 111, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1975, 'Madaba', 111, '1', 'MD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1976, 'Mafraq', 111, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1977, 'Tafilah', 111, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1978, 'Zarqa', 111, '1', 'AZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1979, 'Akmola Region', 112, '1', 'AKM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1980, 'Aktobe Region', 112, '1', 'AKT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1981, 'Almaty', 112, '1', 'ALA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1982, 'Almaty Region', 112, '1', 'ALM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1983, 'Atyrau Region', 112, '1', 'ATY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1984, 'Baikonur', 112, '1', 'BAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1985, 'East Kazakhstan Region', 112, '1', 'VOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1986, 'Jambyl Region', 112, '1', 'ZHA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1987, 'Karaganda Region', 112, '1', 'KAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1988, 'Kostanay Region', 112, '1', 'KUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1989, 'Kyzylorda Region', 112, '1', 'KZY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1990, 'Mangystau Region', 112, '1', 'MAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1991, 'North Kazakhstan Region', 112, '1', 'SEV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1992, 'Nur-Sultan', 112, '1', 'AST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1993, 'Pavlodar Region', 112, '1', 'PAV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1994, 'Turkestan Region', 112, '1', 'YUZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1995, 'West Kazakhstan Province', 112, '1', 'ZAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1996, 'Baringo', 113, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1997, 'Bomet', 113, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1998, 'Bungoma', 113, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(1999, 'Busia', 113, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2000, 'Elgeyo-Marakwet', 113, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2001, 'Embu', 113, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2002, 'Garissa', 113, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2003, 'Homa Bay', 113, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2004, 'Isiolo', 113, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2005, 'Kajiado', 113, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2006, 'Kakamega', 113, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2007, 'Kericho', 113, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2008, 'Kiambu', 113, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2009, 'Kilifi', 113, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2010, 'Kirinyaga', 113, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2011, 'Kisii', 113, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2012, 'Kisumu', 113, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2013, 'Kitui', 113, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2014, 'Kwale', 113, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2015, 'Laikipia', 113, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2016, 'Lamu', 113, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2017, 'Machakos', 113, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2018, 'Makueni', 113, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2019, 'Mandera', 113, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2020, 'Marsabit', 113, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2021, 'Meru', 113, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2022, 'Migori', 113, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2023, 'Mombasa', 113, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2024, 'Murang\'a', 113, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2025, 'Nairobi City', 113, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2026, 'Nakuru', 113, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2027, 'Nandi', 113, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2028, 'Narok', 113, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2029, 'Nyamira', 113, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2030, 'Nyandarua', 113, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2031, 'Nyeri', 113, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2032, 'Samburu', 113, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2033, 'Siaya', 113, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2034, 'Taita–Taveta', 113, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2035, 'Tana River', 113, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2036, 'Tharaka-Nithi', 113, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2037, 'Trans Nzoia', 113, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2038, 'Turkana', 113, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2039, 'Uasin Gishu', 113, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2040, 'Vihiga', 113, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2041, 'Wajir', 113, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2042, 'West Pokot', 113, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2043, 'Gilbert Islands', 114, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2044, 'Line Islands', 114, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2045, 'Phoenix Islands', 114, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2046, 'Đakovica District (Gjakove)', 248, '1', 'XDG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2047, 'Gjilan District', 248, '1', 'XGJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2048, 'Kosovska Mitrovica District', 248, '1', 'XKM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2049, 'Peć District', 248, '1', 'XPE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2050, 'Pristina (Priştine)', 248, '1', 'XPI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2051, 'Prizren District', 248, '1', 'XPR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2052, 'Uroševac District (Ferizaj)', 248, '1', 'XUF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2053, 'Al Ahmadi', 117, '1', 'AH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2054, 'Al Farwaniyah', 117, '1', 'FA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2055, 'Al Jahra', 117, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2056, 'Capital', 117, '1', 'KU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2057, 'Hawalli', 117, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2058, 'Mubarak Al-Kabeer', 117, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2059, 'Batken Region', 118, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2060, 'Bishkek', 118, '1', 'GB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2061, 'Chuy Region', 118, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2062, 'Issyk-Kul Region', 118, '1', 'Y', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2063, 'Jalal-Abad Region', 118, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2064, 'Naryn Region', 118, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2065, 'Osh', 118, '1', 'GO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2066, 'Osh Region', 118, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2067, 'Talas Region', 118, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2068, 'Attapeu Province', 119, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2069, 'Bokeo Province', 119, '1', 'BK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2070, 'Bolikhamsai Province', 119, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2071, 'Champasak Province', 119, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2072, 'Houaphanh Province', 119, '1', 'HO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2073, 'Khammouane Province', 119, '1', 'KH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2074, 'Luang Namtha Province', 119, '1', 'LM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2075, 'Luang Prabang Province', 119, '1', 'LP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2076, 'Oudomxay Province', 119, '1', 'OU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2077, 'Phongsaly Province', 119, '1', 'PH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2078, 'Sainyabuli Province', 119, '1', 'XA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2079, 'Salavan Province', 119, '1', 'SL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2080, 'Savannakhet Province', 119, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2081, 'Sekong Province', 119, '1', 'XE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2082, 'Vientiane Prefecture', 119, '1', 'VT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2083, 'Vientiane Province', 119, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2084, 'Xaisomboun', 119, '1', 'XN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2085, 'Xaisomboun Province', 119, '1', 'XS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2086, 'Xiangkhouang Province', 119, '1', 'XI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2087, 'Aglona Municipality', 120, '1', '001', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2088, 'Aizkraukle Municipality', 120, '1', '002', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2089, 'Aizpute Municipality', 120, '1', '003', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2090, 'Aknīste Municipality', 120, '1', '004', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2091, 'Aloja Municipality', 120, '1', '005', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2092, 'Alsunga Municipality', 120, '1', '006', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2093, 'Alūksne Municipality', 120, '1', '007', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2094, 'Amata Municipality', 120, '1', '008', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2095, 'Ape Municipality', 120, '1', '009', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2096, 'Auce Municipality', 120, '1', '010', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2097, 'Babīte Municipality', 120, '1', '012', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2098, 'Baldone Municipality', 120, '1', '013', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2099, 'Baltinava Municipality', 120, '1', '014', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2100, 'Balvi Municipality', 120, '1', '015', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2101, 'Bauska Municipality', 120, '1', '016', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2102, 'Beverīna Municipality', 120, '1', '017', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2103, 'Brocēni Municipality', 120, '1', '018', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2104, 'Burtnieki Municipality', 120, '1', '019', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2105, 'Carnikava Municipality', 120, '1', '020', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2106, 'Cēsis Municipality', 120, '1', '022', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2107, 'Cesvaine Municipality', 120, '1', '021', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2108, 'Cibla Municipality', 120, '1', '023', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2109, 'Dagda Municipality', 120, '1', '024', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2110, 'Daugavpils', 120, '1', 'DGV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2111, 'Daugavpils Municipality', 120, '1', '025', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2112, 'Dobele Municipality', 120, '1', '026', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2113, 'Dundaga Municipality', 120, '1', '027', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2114, 'Durbe Municipality', 120, '1', '028', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2115, 'Engure Municipality', 120, '1', '029', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2116, 'Ērgļi Municipality', 120, '1', '030', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2117, 'Garkalne Municipality', 120, '1', '031', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2118, 'Grobiņa Municipality', 120, '1', '032', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2119, 'Gulbene Municipality', 120, '1', '033', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2120, 'Iecava Municipality', 120, '1', '034', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2121, 'Ikšķile Municipality', 120, '1', '035', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2122, 'Ilūkste Municipality', 120, '1', '036', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2123, 'Inčukalns Municipality', 120, '1', '037', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2124, 'Jaunjelgava Municipality', 120, '1', '038', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2125, 'Jaunpiebalga Municipality', 120, '1', '039', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2126, 'Jaunpils Municipality', 120, '1', '040', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2127, 'Jēkabpils', 120, '1', 'JKB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2128, 'Jēkabpils Municipality', 120, '1', '042', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2129, 'Jelgava', 120, '1', 'JEL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2130, 'Jelgava Municipality', 120, '1', '041', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2131, 'Jūrmala', 120, '1', 'JUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2132, 'Kandava Municipality', 120, '1', '043', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2133, 'Kārsava Municipality', 120, '1', '044', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2134, 'Ķegums Municipality', 120, '1', '051', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2135, 'Ķekava Municipality', 120, '1', '052', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2136, 'Kocēni Municipality', 120, '1', '045', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2137, 'Koknese Municipality', 120, '1', '046', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2138, 'Krāslava Municipality', 120, '1', '047', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2139, 'Krimulda Municipality', 120, '1', '048', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2140, 'Krustpils Municipality', 120, '1', '049', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2141, 'Kuldīga Municipality', 120, '1', '050', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2142, 'Lielvārde Municipality', 120, '1', '053', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2143, 'Liepāja', 120, '1', 'LPX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2144, 'Līgatne Municipality', 120, '1', '055', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2145, 'Limbaži Municipality', 120, '1', '054', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2146, 'Līvāni Municipality', 120, '1', '056', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2147, 'Lubāna Municipality', 120, '1', '057', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2148, 'Ludza Municipality', 120, '1', '058', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2149, 'Madona Municipality', 120, '1', '059', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2150, 'Mālpils Municipality', 120, '1', '061', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2151, 'Mārupe Municipality', 120, '1', '062', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2152, 'Mazsalaca Municipality', 120, '1', '060', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2153, 'Mērsrags Municipality', 120, '1', '063', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2154, 'Naukšēni Municipality', 120, '1', '064', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2155, 'Nereta Municipality', 120, '1', '065', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2156, 'Nīca Municipality', 120, '1', '066', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2157, 'Ogre Municipality', 120, '1', '067', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2158, 'Olaine Municipality', 120, '1', '068', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2159, 'Ozolnieki Municipality', 120, '1', '069', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2160, 'Pārgauja Municipality', 120, '1', '070', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2161, 'Pāvilosta Municipality', 120, '1', '071', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2162, 'Pļaviņas Municipality', 120, '1', '072', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2163, 'Preiļi Municipality', 120, '1', '073', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2164, 'Priekule Municipality', 120, '1', '074', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2165, 'Priekuļi Municipality', 120, '1', '075', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2166, 'Rauna Municipality', 120, '1', '076', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2167, 'Rēzekne', 120, '1', 'REZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2168, 'Rēzekne Municipality', 120, '1', '077', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2169, 'Riebiņi Municipality', 120, '1', '078', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2170, 'Riga', 120, '1', 'RIX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2171, 'Roja Municipality', 120, '1', '079', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2172, 'Ropaži Municipality', 120, '1', '080', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2173, 'Rucava Municipality', 120, '1', '081', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2174, 'Rugāji Municipality', 120, '1', '082', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2175, 'Rūjiena Municipality', 120, '1', '084', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2176, 'Rundāle Municipality', 120, '1', '083', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2177, 'Sala Municipality', 120, '1', '085', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2178, 'Salacgrīva Municipality', 120, '1', '086', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2179, 'Salaspils Municipality', 120, '1', '087', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2180, 'Saldus Municipality', 120, '1', '088', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2181, 'Saulkrasti Municipality', 120, '1', '089', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2182, 'Sēja Municipality', 120, '1', '090', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2183, 'Sigulda Municipality', 120, '1', '091', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2184, 'Skrīveri Municipality', 120, '1', '092', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2185, 'Skrunda Municipality', 120, '1', '093', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2186, 'Smiltene Municipality', 120, '1', '094', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2187, 'Stopiņi Municipality', 120, '1', '095', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2188, 'Strenči Municipality', 120, '1', '096', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2189, 'Talsi Municipality', 120, '1', '097', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2190, 'Tērvete Municipality', 120, '1', '098', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2191, 'Tukums Municipality', 120, '1', '099', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2192, 'Vaiņode Municipality', 120, '1', '100', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2193, 'Valka Municipality', 120, '1', '101', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2194, 'Valmiera', 120, '1', 'VMR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2195, 'Varakļāni Municipality', 120, '1', '102', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2196, 'Vārkava Municipality', 120, '1', '103', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2197, 'Vecpiebalga Municipality', 120, '1', '104', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2198, 'Vecumnieki Municipality', 120, '1', '105', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2199, 'Ventspils', 120, '1', 'VEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2200, 'Ventspils Municipality', 120, '1', '106', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2201, 'Viesīte Municipality', 120, '1', '107', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2202, 'Viļaka Municipality', 120, '1', '108', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2203, 'Viļāni Municipality', 120, '1', '109', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2204, 'Zilupe Municipality', 120, '1', '110', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2205, 'Akkar', 121, '1', 'AK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2206, 'Baalbek-Hermel', 121, '1', 'BH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2207, 'Beirut', 121, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2208, 'Beqaa', 121, '1', 'BI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2209, 'Mount Lebanon', 121, '1', 'JL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2210, 'Nabatieh', 121, '1', 'NA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2211, 'North', 121, '1', 'AS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2212, 'South', 121, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2213, 'Berea District', 122, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2214, 'Butha-Buthe District', 122, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2215, 'Leribe District', 122, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2216, 'Mafeteng District', 122, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2217, 'Maseru District', 122, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2218, 'Mohale\'s Hoek District', 122, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2219, 'Mokhotlong District', 122, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2220, 'Qacha\'s Nek District', 122, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2221, 'Quthing District', 122, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2222, 'Thaba-Tseka District', 122, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2223, 'Bomi County', 123, '1', 'BM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2224, 'Bong County', 123, '1', 'BG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2225, 'Gbarpolu County', 123, '1', 'GP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2226, 'Grand Bassa County', 123, '1', 'GB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2227, 'Grand Cape Mount County', 123, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2228, 'Grand Gedeh County', 123, '1', 'GG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2229, 'Grand Kru County', 123, '1', 'GK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2230, 'Lofa County', 123, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2231, 'Margibi County', 123, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2232, 'Maryland County', 123, '1', 'MY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2233, 'Montserrado County', 123, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2234, 'Nimba', 123, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2235, 'River Cess County', 123, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2236, 'River Gee County', 123, '1', 'RG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2237, 'Sinoe County', 123, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2238, 'Al Wahat District', 124, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2239, 'Benghazi', 124, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2240, 'Derna District', 124, '1', 'DR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2241, 'Ghat District', 124, '1', 'GT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2242, 'Jabal al Akhdar', 124, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2243, 'Jabal al Gharbi District', 124, '1', 'JG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2244, 'Jafara', 124, '1', 'JI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2245, 'Jufra', 124, '1', 'JU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2246, 'Kufra District', 124, '1', 'KF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2247, 'Marj District', 124, '1', 'MJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2248, 'Misrata District', 124, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2249, 'Murqub', 124, '1', 'MB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2250, 'Murzuq District', 124, '1', 'MQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2251, 'Nalut District', 124, '1', 'NL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2252, 'Nuqat al Khams', 124, '1', 'NQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2253, 'Sabha District', 124, '1', 'SB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2254, 'Sirte District', 124, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2255, 'Tripoli District', 124, '1', 'TB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2256, 'Wadi al Hayaa District', 124, '1', 'WD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2257, 'Wadi al Shatii District', 124, '1', 'WS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2258, 'Zawiya District', 124, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2259, 'Balzers', 125, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2260, 'Eschen', 125, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2261, 'Gamprin', 125, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2262, 'Mauren', 125, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2263, 'Planken', 125, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2264, 'Ruggell', 125, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2265, 'Schaan', 125, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2266, 'Schellenberg', 125, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2267, 'Triesen', 125, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2268, 'Triesenberg', 125, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2269, 'Vaduz', 125, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2270, 'Akmenė District Municipality', 126, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2271, 'Alytus City Municipality', 126, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2272, 'Alytus County', 126, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2273, 'Alytus District Municipality', 126, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2274, 'Birštonas Municipality', 126, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2275, 'Biržai District Municipality', 126, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2276, 'Druskininkai municipality', 126, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2277, 'Elektrėnai municipality', 126, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2278, 'Ignalina District Municipality', 126, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2279, 'Jonava District Municipality', 126, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2280, 'Joniškis District Municipality', 126, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2281, 'Jurbarkas District Municipality', 126, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2282, 'Kaišiadorys District Municipality', 126, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2283, 'Kalvarija municipality', 126, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2284, 'Kaunas City Municipality', 126, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2285, 'Kaunas County', 126, '1', 'KU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2286, 'Kaunas District Municipality', 126, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2287, 'Kazlų Rūda municipality', 126, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2288, 'Kėdainiai District Municipality', 126, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2289, 'Kelmė District Municipality', 126, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2290, 'Klaipeda City Municipality', 126, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2291, 'Klaipėda County', 126, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2292, 'Klaipėda District Municipality', 126, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2293, 'Kretinga District Municipality', 126, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2294, 'Kupiškis District Municipality', 126, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2295, 'Lazdijai District Municipality', 126, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2296, 'Marijampolė County', 126, '1', 'MR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2297, 'Marijampolė Municipality', 126, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2298, 'Mažeikiai District Municipality', 126, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2299, 'Molėtai District Municipality', 126, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2300, 'Neringa Municipality', 126, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2301, 'Pagėgiai municipality', 126, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2302, 'Pakruojis District Municipality', 126, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2303, 'Palanga City Municipality', 126, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2304, 'Panevėžys City Municipality', 126, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2305, 'Panevėžys County', 126, '1', 'PN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2306, 'Panevėžys District Municipality', 126, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2307, 'Pasvalys District Municipality', 126, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2308, 'Plungė District Municipality', 126, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2309, 'Prienai District Municipality', 126, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2310, 'Radviliškis District Municipality', 126, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2311, 'Raseiniai District Municipality', 126, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2312, 'Rietavas municipality', 126, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2313, 'Rokiškis District Municipality', 126, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2314, 'Šakiai District Municipality', 126, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2315, 'Šalčininkai District Municipality', 126, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2316, 'Šiauliai City Municipality', 126, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2317, 'Šiauliai County', 126, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2318, 'Šiauliai District Municipality', 126, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2319, 'Šilalė District Municipality', 126, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2320, 'Šilutė District Municipality', 126, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2321, 'Širvintos District Municipality', 126, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2322, 'Skuodas District Municipality', 126, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2323, 'Švenčionys District Municipality', 126, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2324, 'Tauragė County', 126, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2325, 'Tauragė District Municipality', 126, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2326, 'Telšiai County', 126, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2327, 'Telšiai District Municipality', 126, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2328, 'Trakai District Municipality', 126, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2329, 'Ukmergė District Municipality', 126, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2330, 'Utena County', 126, '1', 'UT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2331, 'Utena District Municipality', 126, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2332, 'Varėna District Municipality', 126, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2333, 'Vilkaviškis District Municipality', 126, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2334, 'Vilnius City Municipality', 126, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2335, 'Vilnius County', 126, '1', 'VL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2336, 'Vilnius District Municipality', 126, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2337, 'Visaginas Municipality', 126, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2338, 'Zarasai District Municipality', 126, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2339, 'Canton of Capellen', 127, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2340, 'Canton of Clervaux', 127, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2341, 'Canton of Diekirch', 127, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2342, 'Canton of Echternach', 127, '1', 'EC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2343, 'Canton of Esch-sur-Alzette', 127, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2344, 'Canton of Grevenmacher', 127, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2345, 'Canton of Luxembourg', 127, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2346, 'Canton of Mersch', 127, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2347, 'Canton of Redange', 127, '1', 'RD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2348, 'Canton of Remich', 127, '1', 'RM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2349, 'Canton of Vianden', 127, '1', 'VD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2350, 'Canton of Wiltz', 127, '1', 'WI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2351, 'Diekirch District', 127, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2352, 'Grevenmacher District', 127, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2353, 'Luxembourg District', 127, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2354, 'Aerodrom Municipality', 129, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2355, 'Aračinovo Municipality', 129, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2356, 'Berovo Municipality', 129, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2357, 'Bitola Municipality', 129, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2358, 'Bogdanci Municipality', 129, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2359, 'Bogovinje Municipality', 129, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2360, 'Bosilovo Municipality', 129, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2361, 'Brvenica Municipality', 129, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2362, 'Butel Municipality', 129, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2363, 'Čair Municipality', 129, '1', '79', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2364, 'Čaška Municipality', 129, '1', '80', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2365, 'Centar Municipality', 129, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2366, 'Centar Župa Municipality', 129, '1', '78', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2367, 'Češinovo-Obleševo Municipality', 129, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2368, 'Čučer-Sandevo Municipality', 129, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2369, 'Debarca Municipality', 129, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2370, 'Delčevo Municipality', 129, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2371, 'Demir Hisar Municipality', 129, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2372, 'Demir Kapija Municipality', 129, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2373, 'Dojran Municipality', 129, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2374, 'Dolneni Municipality', 129, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2375, 'Drugovo Municipality', 129, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2376, 'Gazi Baba Municipality', 129, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2377, 'Gevgelija Municipality', 129, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2378, 'Gjorče Petrov Municipality', 129, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2379, 'Gostivar Municipality', 129, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2380, 'Gradsko Municipality', 129, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2381, 'Greater Skopje', 129, '1', '85', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2382, 'Ilinden Municipality', 129, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2383, 'Jegunovce Municipality', 129, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2384, 'Karbinci', 129, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2385, 'Karpoš Municipality', 129, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2386, 'Kavadarci Municipality', 129, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2387, 'Kičevo Municipality', 129, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2388, 'Kisela Voda Municipality', 129, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2389, 'Kočani Municipality', 129, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2390, 'Konče Municipality', 129, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2391, 'Kratovo Municipality', 129, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2392, 'Kriva Palanka Municipality', 129, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2393, 'Krivogaštani Municipality', 129, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2394, 'Kruševo Municipality', 129, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2395, 'Kumanovo Municipality', 129, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2396, 'Lipkovo Municipality', 129, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2397, 'Lozovo Municipality', 129, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2398, 'Makedonska Kamenica Municipality', 129, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2399, 'Makedonski Brod Municipality', 129, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2400, 'Mavrovo and Rostuša Municipality', 129, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2401, 'Mogila Municipality', 129, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2402, 'Negotino Municipality', 129, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2403, 'Novaci Municipality', 129, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2404, 'Novo Selo Municipality', 129, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2405, 'Ohrid Municipality', 129, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2406, 'Oslomej Municipality', 129, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2407, 'Pehčevo Municipality', 129, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2408, 'Petrovec Municipality', 129, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2409, 'Plasnica Municipality', 129, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2410, 'Prilep Municipality', 129, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2411, 'Probištip Municipality', 129, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2412, 'Radoviš Municipality', 129, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2413, 'Rankovce Municipality', 129, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2414, 'Resen Municipality', 129, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2415, 'Rosoman Municipality', 129, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2416, 'Saraj Municipality', 129, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2417, 'Sopište Municipality', 129, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2418, 'Staro Nagoričane Municipality', 129, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2419, 'Štip Municipality', 129, '1', '83', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2420, 'Struga Municipality', 129, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2421, 'Strumica Municipality', 129, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2422, 'Studeničani Municipality', 129, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2423, 'Šuto Orizari Municipality', 129, '1', '84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2424, 'Sveti Nikole Municipality', 129, '1', '69', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2425, 'Tearce Municipality', 129, '1', '75', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2426, 'Tetovo Municipality', 129, '1', '76', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2427, 'Valandovo Municipality', 129, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2428, 'Vasilevo Municipality', 129, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2429, 'Veles Municipality', 129, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2430, 'Vevčani Municipality', 129, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2431, 'Vinica Municipality', 129, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2432, 'Vraneštica Municipality', 129, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2433, 'Vrapčište Municipality', 129, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2434, 'Zajas Municipality', 129, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2435, 'Zelenikovo Municipality', 129, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2436, 'Želino Municipality', 129, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2437, 'Zrnovci Municipality', 129, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2438, 'Antananarivo Province', 130, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2439, 'Antsiranana Province', 130, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2440, 'Fianarantsoa Province', 130, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2441, 'Mahajanga Province', 130, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2442, 'Toamasina Province', 130, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2443, 'Toliara Province', 130, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2444, 'Balaka District', 131, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2445, 'Blantyre District', 131, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2446, 'Central Region', 131, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2447, 'Chikwawa District', 131, '1', 'CK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2448, 'Chiradzulu District', 131, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2449, 'Chitipa district', 131, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2450, 'Dedza District', 131, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2451, 'Dowa District', 131, '1', 'DO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2452, 'Karonga District', 131, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2453, 'Kasungu District', 131, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2454, 'Likoma District', 131, '1', 'LK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2455, 'Lilongwe District', 131, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2456, 'Machinga District', 131, '1', 'MH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2457, 'Mangochi District', 131, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2458, 'Mchinji District', 131, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2459, 'Mulanje District', 131, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2460, 'Mwanza District', 131, '1', 'MW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2461, 'Mzimba District', 131, '1', 'MZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2462, 'Nkhata Bay District', 131, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2463, 'Nkhotakota District', 131, '1', 'NK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2464, 'Northern Region', 131, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2465, 'Nsanje District', 131, '1', 'NS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2466, 'Ntcheu District', 131, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2467, 'Ntchisi District', 131, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2468, 'Phalombe District', 131, '1', 'PH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2469, 'Rumphi District', 131, '1', 'RU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2470, 'Salima District', 131, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2471, 'Southern Region', 131, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2472, 'Thyolo District', 131, '1', 'TH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2473, 'Zomba District', 131, '1', 'ZO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2474, 'Johor', 132, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2475, 'Kedah', 132, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2476, 'Kelantan', 132, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2477, 'Kuala Lumpur', 132, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2478, 'Labuan', 132, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2479, 'Malacca', 132, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2480, 'Negeri Sembilan', 132, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2481, 'Pahang', 132, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2482, 'Penang', 132, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2483, 'Perak', 132, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2484, 'Perlis', 132, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2485, 'Putrajaya', 132, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2486, 'Sabah', 132, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2487, 'Sarawak', 132, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2488, 'Selangor', 132, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2489, 'Terengganu', 132, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2490, 'Addu Atoll', 133, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2491, 'Alif Alif Atoll', 133, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2492, 'Alif Dhaal Atoll', 133, '1', '00', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2493, 'Central Province', 133, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2494, 'Dhaalu Atoll', 133, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2495, 'Faafu Atoll', 133, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2496, 'Gaafu Alif Atoll', 133, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2497, 'Gaafu Dhaalu Atoll', 133, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2498, 'Gnaviyani Atoll', 133, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2499, 'Haa Alif Atoll', 133, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2500, 'Haa Dhaalu Atoll', 133, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2501, 'Kaafu Atoll', 133, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2502, 'Laamu Atoll', 133, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2503, 'Lhaviyani Atoll', 133, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2504, 'Malé', 133, '1', 'MLE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2505, 'Meemu Atoll', 133, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2506, 'Noonu Atoll', 133, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2507, 'North Central Province', 133, '1', 'NC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2508, 'North Province', 133, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2509, 'Raa Atoll', 133, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2510, 'Shaviyani Atoll', 133, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2511, 'South Central Province', 133, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2512, 'South Province', 133, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2513, 'Thaa Atoll', 133, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2514, 'Upper South Province', 133, '1', 'US', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2515, 'Vaavu Atoll', 133, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2516, 'Bamako', 134, '1', 'BKO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2517, 'Gao Region', 134, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2518, 'Kayes Region', 134, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2519, 'Kidal Region', 134, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2520, 'Koulikoro Region', 134, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2521, 'Ménaka Region', 134, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2522, 'Mopti Region', 134, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2523, 'Ségou Region', 134, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2524, 'Sikasso Region', 134, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2525, 'Taoudénit Region', 134, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2526, 'Tombouctou Region', 134, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2527, 'Attard', 135, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2528, 'Balzan', 135, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2529, 'Birgu', 135, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2530, 'Birkirkara', 135, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2531, 'Birżebbuġa', 135, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2532, 'Cospicua', 135, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2533, 'Dingli', 135, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2534, 'Fgura', 135, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2535, 'Floriana', 135, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2536, 'Fontana', 135, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2537, 'Għajnsielem', 135, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2538, 'Għarb', 135, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2539, 'Għargħur', 135, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2540, 'Għasri', 135, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2541, 'Għaxaq', 135, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2542, 'Gudja', 135, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2543, 'Gżira', 135, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2544, 'Ħamrun', 135, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2545, 'Iklin', 135, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2546, 'Kalkara', 135, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2547, 'Kerċem', 135, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2548, 'Kirkop', 135, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2549, 'Lija', 135, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2550, 'Luqa', 135, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2551, 'Marsa', 135, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2552, 'Marsaskala', 135, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2553, 'Marsaxlokk', 135, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2554, 'Mdina', 135, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2555, 'Mellieħa', 135, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2556, 'Mġarr', 135, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2557, 'Mosta', 135, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2558, 'Mqabba', 135, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2559, 'Msida', 135, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2560, 'Mtarfa', 135, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2561, 'Munxar', 135, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2562, 'Nadur', 135, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2563, 'Naxxar', 135, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2564, 'Paola', 135, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2565, 'Pembroke', 135, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2566, 'Pietà', 135, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2567, 'Qala', 135, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2568, 'Qormi', 135, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2569, 'Qrendi', 135, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2570, 'Rabat', 135, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2571, 'Saint Lawrence', 135, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2572, 'San Ġwann', 135, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2573, 'Sannat', 135, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2574, 'Santa Luċija', 135, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2575, 'Santa Venera', 135, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2576, 'Senglea', 135, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2577, 'Siġġiewi', 135, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2578, 'Sliema', 135, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2579, 'St. Julian\'s', 135, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2580, 'St. Paul\'s Bay', 135, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2581, 'Swieqi', 135, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2582, 'Ta\' Xbiex', 135, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2583, 'Tarxien', 135, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2584, 'Valletta', 135, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2585, 'Victoria', 135, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2586, 'Xagħra', 135, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2587, 'Xewkija', 135, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2588, 'Xgħajra', 135, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2589, 'Żabbar', 135, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2590, 'Żebbuġ Gozo', 135, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2591, 'Żebbuġ Malta', 135, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2592, 'Żejtun', 135, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2593, 'Żurrieq', 135, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2594, 'Ralik Chain', 137, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2595, 'Ratak Chain', 137, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2596, 'Adrar', 139, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2597, 'Assaba', 139, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2598, 'Brakna', 139, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2599, 'Dakhlet Nouadhibou', 139, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2600, 'Gorgol', 139, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2601, 'Guidimaka', 139, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2602, 'Hodh Ech Chargui', 139, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2603, 'Hodh El Gharbi', 139, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2604, 'Inchiri', 139, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2605, 'Nouakchott-Nord', 139, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2606, 'Nouakchott-Ouest', 139, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2607, 'Nouakchott-Sud', 139, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2608, 'Tagant', 139, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2609, 'Tiris Zemmour', 139, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2610, 'Trarza', 139, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2611, 'Agalega Islands', 140, '1', 'AG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2612, 'Black River', 140, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2613, 'Flacq', 140, '1', 'FL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2614, 'Grand Port', 140, '1', 'GP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2615, 'Moka', 140, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2616, 'Pamplemousses', 140, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2617, 'Plaines Wilhems', 140, '1', 'PW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2618, 'Port Louis', 140, '1', 'PL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2619, 'Rivière du Rempart', 140, '1', 'RR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2620, 'Rodrigues Island', 140, '1', 'RO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2621, 'Saint Brandon Islands', 140, '1', 'CC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2622, 'Savanne', 140, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2623, 'Aguascalientes', 142, '1', 'AGU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2624, 'Baja California', 142, '1', 'BCN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2625, 'Baja California Sur', 142, '1', 'BCS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2626, 'Campeche', 142, '1', 'CAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2627, 'Chiapas', 142, '1', 'CHP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2628, 'Chihuahua', 142, '1', 'CHH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2629, 'Ciudad de México', 142, '1', 'CDMX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2630, 'Coahuila de Zaragoza', 142, '1', 'COA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2631, 'Colima', 142, '1', 'COL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2632, 'Durango', 142, '1', 'DUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2633, 'Estado de México', 142, '1', 'MEX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2634, 'Guanajuato', 142, '1', 'GUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2635, 'Guerrero', 142, '1', 'GRO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2636, 'Hidalgo', 142, '1', 'HID', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2637, 'Jalisco', 142, '1', 'JAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2638, 'Michoacán de Ocampo', 142, '1', 'MIC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2639, 'Morelos', 142, '1', 'MOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2640, 'Nayarit', 142, '1', 'NAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2641, 'Nuevo León', 142, '1', 'NLE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2642, 'Oaxaca', 142, '1', 'OAX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2643, 'Puebla', 142, '1', 'PUE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2644, 'Querétaro', 142, '1', 'QUE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2645, 'Quintana Roo', 142, '1', 'ROO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2646, 'San Luis Potosí', 142, '1', 'SLP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2647, 'Sinaloa', 142, '1', 'SIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2648, 'Sonora', 142, '1', 'SON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2649, 'Tabasco', 142, '1', 'TAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2650, 'Tamaulipas', 142, '1', 'TAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2651, 'Tlaxcala', 142, '1', 'TLA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2652, 'Veracruz de Ignacio de la Llave', 142, '1', 'VER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2653, 'Yucatán', 142, '1', 'YUC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2654, 'Zacatecas', 142, '1', 'ZAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2655, 'Chuuk State', 143, '1', 'TRK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2656, 'Kosrae State', 143, '1', 'KSA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2657, 'Pohnpei State', 143, '1', 'PNI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2658, 'Yap State', 143, '1', 'YAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2659, 'Anenii Noi District', 144, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2660, 'Bălți Municipality', 144, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2661, 'Basarabeasca District', 144, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2662, 'Bender Municipality', 144, '1', 'BD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2663, 'Briceni District', 144, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2664, 'Cahul District', 144, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2665, 'Călărași District', 144, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2666, 'Cantemir District', 144, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2667, 'Căușeni District', 144, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2668, 'Chișinău Municipality', 144, '1', 'CU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2669, 'Cimișlia District', 144, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2670, 'Criuleni District', 144, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2671, 'Dondușeni District', 144, '1', 'DO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2672, 'Drochia District', 144, '1', 'DR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2673, 'Dubăsari District', 144, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2674, 'Edineț District', 144, '1', 'ED', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2675, 'Fălești District', 144, '1', 'FA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2676, 'Florești District', 144, '1', 'FL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2677, 'Gagauzia', 144, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2678, 'Glodeni District', 144, '1', 'GL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2679, 'Hîncești District', 144, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2680, 'Ialoveni District', 144, '1', 'IA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2681, 'Nisporeni District', 144, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2682, 'Ocnița District', 144, '1', 'OC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2683, 'Orhei District', 144, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2684, 'Rezina District', 144, '1', 'RE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2685, 'Rîșcani District', 144, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2686, 'Sîngerei District', 144, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2687, 'Șoldănești District', 144, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2688, 'Soroca District', 144, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2689, 'Ștefan Vodă District', 144, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2690, 'Strășeni District', 144, '1', 'ST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2691, 'Taraclia District', 144, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2692, 'Telenești District', 144, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2693, 'Transnistria autonomous territorial unit', 144, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2694, 'Ungheni District', 144, '1', 'UN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2695, 'La Colle', 145, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2696, 'La Condamine', 145, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2697, 'Moneghetti', 145, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2698, 'Arkhangai Province', 146, '1', '073', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2699, 'Bayan-Ölgii Province', 146, '1', '071', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2700, 'Bayankhongor Province', 146, '1', '069', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2701, 'Bulgan Province', 146, '1', '067', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2702, 'Darkhan-Uul Province', 146, '1', '037', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2703, 'Dornod Province', 146, '1', '061', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2704, 'Dornogovi Province', 146, '1', '063', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2705, 'Dundgovi Province', 146, '1', '059', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2706, 'Govi-Altai Province', 146, '1', '065', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2707, 'Govisümber Province', 146, '1', '064', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2708, 'Khentii Province', 146, '1', '039', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2709, 'Khovd Province', 146, '1', '043', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2710, 'Khövsgöl Province', 146, '1', '041', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2711, 'Ömnögovi Province', 146, '1', '053', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2712, 'Orkhon Province', 146, '1', '035', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2713, 'Övörkhangai Province', 146, '1', '055', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2714, 'Selenge Province', 146, '1', '049', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2715, 'Sükhbaatar Province', 146, '1', '051', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2716, 'Töv Province', 146, '1', '047', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2717, 'Uvs Province', 146, '1', '046', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2718, 'Zavkhan Province', 146, '1', '057', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2719, 'Andrijevica Municipality', 147, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2720, 'Bar Municipality', 147, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2721, 'Berane Municipality', 147, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2722, 'Bijelo Polje Municipality', 147, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2723, 'Budva Municipality', 147, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2724, 'Danilovgrad Municipality', 147, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2725, 'Gusinje Municipality', 147, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2726, 'Kolašin Municipality', 147, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2727, 'Kotor Municipality', 147, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2728, 'Mojkovac Municipality', 147, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2729, 'Nikšić Municipality', 147, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2730, 'Old Royal Capital Cetinje', 147, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2731, 'Petnjica Municipality', 147, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2732, 'Plav Municipality', 147, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2733, 'Pljevlja Municipality', 147, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2734, 'Plužine Municipality', 147, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2735, 'Podgorica Municipality', 147, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2736, 'Rožaje Municipality', 147, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2737, 'Šavnik Municipality', 147, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2738, 'Tivat Municipality', 147, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2739, 'Ulcinj Municipality', 147, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2740, 'Žabljak Municipality', 147, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2741, 'Agadir-Ida-Ou-Tanane', 149, '1', 'AGD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2742, 'Al Haouz', 149, '1', 'HAO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2743, 'Al Hoceïma', 149, '1', 'HOC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2744, 'Aousserd (EH)', 149, '1', 'AOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2745, 'Assa-Zag (EH-partial)', 149, '1', 'ASZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2746, 'Azilal', 149, '1', 'AZI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2747, 'Béni Mellal', 149, '1', 'BEM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2748, 'Béni Mellal-Khénifra', 149, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2749, 'Benslimane', 149, '1', 'BES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2750, 'Berkane', 149, '1', 'BER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2751, 'Berrechid', 149, '1', 'BRR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2752, 'Boujdour (EH)', 149, '1', 'BOD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2753, 'Boulemane', 149, '1', 'BOM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2754, 'Casablanca', 149, '1', 'CAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2755, 'Casablanca-Settat', 149, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2756, 'Chefchaouen', 149, '1', 'CHE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2757, 'Chichaoua', 149, '1', 'CHI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2758, 'Chtouka-Ait Baha', 149, '1', 'CHT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2759, 'Dakhla-Oued Ed-Dahab (EH)', 149, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2760, 'Drâa-Tafilalet', 149, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2761, 'Driouch', 149, '1', 'DRI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2762, 'El Hajeb', 149, '1', 'HAJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2763, 'El Jadida', 149, '1', 'JDI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2764, 'El Kelâa des Sraghna', 149, '1', 'KES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2765, 'Errachidia', 149, '1', 'ERR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2766, 'Es-Semara (EH-partial)', 149, '1', 'ESM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2767, 'Essaouira', 149, '1', 'ESI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2768, 'Fahs-Anjra', 149, '1', 'FAH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2769, 'Fès', 149, '1', 'FES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2770, 'Fès-Meknès', 149, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2771, 'Figuig', 149, '1', 'FIG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2772, 'Fquih Ben Salah', 149, '1', 'FQH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2773, 'Guelmim', 149, '1', 'GUE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2774, 'Guelmim-Oued Noun (EH-partial)', 149, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2775, 'Guercif', 149, '1', 'GUF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2776, 'Ifrane', 149, '1', 'IFR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2777, 'Inezgane-Ait Melloul', 149, '1', 'INE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2778, 'Jerada', 149, '1', 'JRA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2779, 'Kénitra', 149, '1', 'KEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2780, 'Khémisset', 149, '1', 'KHE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2781, 'Khénifra', 149, '1', 'KHN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2782, 'Khouribga', 149, '1', 'KHO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2783, 'L\'Oriental', 149, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2784, 'Laâyoune (EH)', 149, '1', 'LAA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2785, 'Laâyoune-Sakia El Hamra (EH-partial)', 149, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2786, 'Larache', 149, '1', 'LAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2787, 'M’diq-Fnideq', 149, '1', 'MDF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2788, 'Marrakech', 149, '1', 'MAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2789, 'Marrakesh-Safi', 149, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2790, 'Médiouna', 149, '1', 'MED', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2791, 'Meknès', 149, '1', 'MEK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2792, 'Midelt', 149, '1', 'MID', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2793, 'Mohammadia', 149, '1', 'MOH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2794, 'Moulay Yacoub', 149, '1', 'MOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2795, 'Nador', 149, '1', 'NAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2796, 'Nouaceur', 149, '1', 'NOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2797, 'Ouarzazate', 149, '1', 'OUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2798, 'Oued Ed-Dahab (EH)', 149, '1', 'OUD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2799, 'Ouezzane', 149, '1', 'OUZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2800, 'Oujda-Angad', 149, '1', 'OUJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2801, 'Rabat', 149, '1', 'RAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2802, 'Rabat-Salé-Kénitra', 149, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2803, 'Rehamna', 149, '1', 'REH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2804, 'Safi', 149, '1', 'SAF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2805, 'Salé', 149, '1', 'SAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2806, 'Sefrou', 149, '1', 'SEF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2807, 'Settat', 149, '1', 'SET', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2808, 'Sidi Bennour', 149, '1', 'SIB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2809, 'Sidi Ifni', 149, '1', 'SIF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2810, 'Sidi Kacem', 149, '1', 'SIK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2811, 'Sidi Slimane', 149, '1', 'SIL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2812, 'Skhirate-Témara', 149, '1', 'SKH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2813, 'Souss-Massa', 149, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2814, 'Tan-Tan (EH-partial)', 149, '1', 'TNT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2815, 'Tanger-Assilah', 149, '1', 'TNG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2816, 'Tanger-Tétouan-Al Hoceïma', 149, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2817, 'Taounate', 149, '1', 'TAO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2818, 'Taourirt', 149, '1', 'TAI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2819, 'Tarfaya (EH-partial)', 149, '1', 'TAF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2820, 'Taroudannt', 149, '1', 'TAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2821, 'Tata', 149, '1', 'TAT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2822, 'Taza', 149, '1', 'TAZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2823, 'Tétouan', 149, '1', 'TET', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2824, 'Tinghir', 149, '1', 'TIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2825, 'Tiznit', 149, '1', 'TIZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2826, 'Youssoufia', 149, '1', 'YUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2827, 'Zagora', 149, '1', 'ZAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2828, 'Cabo Delgado Province', 150, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2829, 'Gaza Province', 150, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2830, 'Inhambane Province', 150, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2831, 'Manica Province', 150, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2832, 'Maputo', 150, '1', 'MPM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2833, 'Maputo Province', 150, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2834, 'Nampula Province', 150, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2835, 'Niassa Province', 150, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2836, 'Sofala Province', 150, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2837, 'Tete Province', 150, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2838, 'Zambezia Province', 150, '1', 'Q', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2839, 'Ayeyarwady Region', 151, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2840, 'Bago', 151, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2841, 'Chin State', 151, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2842, 'Kachin State', 151, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2843, 'Kayah State', 151, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2844, 'Kayin State', 151, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2845, 'Magway Region', 151, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2846, 'Mandalay Region', 151, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2847, 'Mon State', 151, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2848, 'Naypyidaw Union Territory', 151, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2849, 'Rakhine State', 151, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2850, 'Sagaing Region', 151, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2851, 'Shan State', 151, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2852, 'Tanintharyi Region', 151, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2853, 'Yangon Region', 151, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2854, 'Erongo Region', 152, '1', 'ER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2855, 'Hardap Region', 152, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2856, 'Karas Region', 152, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2857, 'Kavango East Region', 152, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2858, 'Kavango West Region', 152, '1', 'KW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2859, 'Khomas Region', 152, '1', 'KH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2860, 'Kunene Region', 152, '1', 'KU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2861, 'Ohangwena Region', 152, '1', 'OW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2862, 'Omaheke Region', 152, '1', 'OH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2863, 'Omusati Region', 152, '1', 'OS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2864, 'Oshana Region', 152, '1', 'ON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2865, 'Oshikoto Region', 152, '1', 'OT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2866, 'Otjozondjupa Region', 152, '1', 'OD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2867, 'Zambezi Region', 152, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2868, 'Aiwo District', 153, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2869, 'Anabar District', 153, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2870, 'Anetan District', 153, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2871, 'Anibare District', 153, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2872, 'Baiti District', 153, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2873, 'Boe District', 153, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2874, 'Buada District', 153, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2875, 'Denigomodu District', 153, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2876, 'Ewa District', 153, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2877, 'Ijuw District', 153, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2878, 'Meneng District', 153, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2879, 'Nibok District', 153, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2880, 'Uaboe District', 153, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2881, 'Yaren District', 153, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2882, 'Bagmati Zone', 154, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2883, 'Bheri Zone', 154, '1', 'BH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2884, 'Central Region', 154, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2885, 'Dhaulagiri Zone', 154, '1', 'DH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2886, 'Eastern Development Region', 154, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2887, 'Far-Western Development Region', 154, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2888, 'Gandaki Zone', 154, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2889, 'Janakpur Zone', 154, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2890, 'Karnali Zone', 154, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2891, 'Kosi Zone', 154, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2892, 'Lumbini Zone', 154, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2893, 'Mahakali Zone', 154, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2894, 'Mechi Zone', 154, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2895, 'Mid-Western Region', 154, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2896, 'Narayani Zone', 154, '1', 'NA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2897, 'Rapti Zone', 154, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2898, 'Sagarmatha Zone', 154, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2899, 'Seti Zone', 154, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2900, 'Western Region', 154, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2901, 'Bonaire', 156, '1', 'BQ1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2902, 'Drenthe', 156, '1', 'DR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2903, 'Flevoland', 156, '1', 'FL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2904, 'Friesland', 156, '1', 'FR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2905, 'Gelderland', 156, '1', 'GE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2906, 'Groningen', 156, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2907, 'Limburg', 156, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2908, 'North Brabant', 156, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2909, 'North Holland', 156, '1', 'NH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2910, 'Overijssel', 156, '1', 'OV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2911, 'Saba', 156, '1', 'BQ2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2912, 'Sint Eustatius', 156, '1', 'BQ3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2913, 'South Holland', 156, '1', 'ZH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2914, 'Utrecht', 156, '1', 'UT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2915, 'Zeeland', 156, '1', 'ZE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2916, 'Auckland Region', 158, '1', 'AUK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2917, 'Bay of Plenty Region', 158, '1', 'BOP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2918, 'Canterbury Region', 158, '1', 'CAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2919, 'Chatham Islands', 158, '1', 'CIT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2920, 'Gisborne District', 158, '1', 'GIS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2921, 'Hawke\'s Bay Region', 158, '1', 'HKB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2922, 'Manawatu-Wanganui Region', 158, '1', 'MWT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2923, 'Marlborough Region', 158, '1', 'MBH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2924, 'Nelson Region', 158, '1', 'NSN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2925, 'Northland Region', 158, '1', 'NTL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2926, 'Otago Region', 158, '1', 'OTA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2927, 'Southland Region', 158, '1', 'STL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2928, 'Taranaki Region', 158, '1', 'TKI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2929, 'Tasman District', 158, '1', 'TAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2930, 'Waikato Region', 158, '1', 'WKO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2931, 'Wellington Region', 158, '1', 'WGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2932, 'West Coast Region', 158, '1', 'WTC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2933, 'Boaco', 159, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2934, 'Carazo', 159, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2935, 'Chinandega', 159, '1', 'CI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2936, 'Chontales', 159, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2937, 'Estelí', 159, '1', 'ES', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2938, 'Granada', 159, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2939, 'Jinotega', 159, '1', 'JI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2940, 'León', 159, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2941, 'Madriz', 159, '1', 'MD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2942, 'Managua', 159, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2943, 'Masaya', 159, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2944, 'Matagalpa', 159, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2945, 'North Caribbean Coast', 159, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2946, 'Nueva Segovia', 159, '1', 'NS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2947, 'Río San Juan', 159, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2948, 'Rivas', 159, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2949, 'South Caribbean Coast', 159, '1', 'AS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2950, 'Agadez Region', 160, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2951, 'Diffa Region', 160, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2952, 'Dosso Region', 160, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2953, 'Maradi Region', 160, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2954, 'Tahoua Region', 160, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2955, 'Tillabéri Region', 160, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2956, 'Zinder Region', 160, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2957, 'Abia', 161, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2958, 'Abuja Federal Capital Territory', 161, '1', 'FC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2959, 'Adamawa', 161, '1', 'AD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2960, 'Akwa Ibom', 161, '1', 'AK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2961, 'Anambra', 161, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2962, 'Bauchi', 161, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2963, 'Bayelsa', 161, '1', 'BY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2964, 'Benue', 161, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2965, 'Borno', 161, '1', 'BO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2966, 'Cross River', 161, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2967, 'Delta', 161, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2968, 'Ebonyi', 161, '1', 'EB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2969, 'Edo', 161, '1', 'ED', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2970, 'Ekiti', 161, '1', 'EK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2971, 'Enugu', 161, '1', 'EN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2972, 'Gombe', 161, '1', 'GO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2973, 'Imo', 161, '1', 'IM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2974, 'Jigawa', 161, '1', 'JI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2975, 'Kaduna', 161, '1', 'KD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2976, 'Kano', 161, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2977, 'Katsina', 161, '1', 'KT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2978, 'Kebbi', 161, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2979, 'Kogi', 161, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2980, 'Kwara', 161, '1', 'KW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2981, 'Lagos', 161, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2982, 'Nasarawa', 161, '1', 'NA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2983, 'Niger', 161, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2984, 'Ogun', 161, '1', 'OG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2985, 'Ondo', 161, '1', 'ON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2986, 'Osun', 161, '1', 'OS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2987, 'Oyo', 161, '1', 'OY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2988, 'Plateau', 161, '1', 'PL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2989, 'Rivers', 161, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2990, 'Sokoto', 161, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2991, 'Taraba', 161, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2992, 'Yobe', 161, '1', 'YO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2993, 'Zamfara', 161, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2994, 'Chagang Province', 115, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2995, 'Kangwon Province', 115, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2996, 'North Hamgyong Province', 115, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2997, 'North Hwanghae Province', 115, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2998, 'North Pyongan Province', 115, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(2999, 'Pyongyang', 115, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3000, 'Rason', 115, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3001, 'Ryanggang Province', 115, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3002, 'South Hamgyong Province', 115, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3003, 'South Hwanghae Province', 115, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3004, 'South Pyongan Province', 115, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3005, 'Agder', 165, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3006, 'Innlandet', 165, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3007, 'Jan Mayen', 165, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3008, 'Møre og Romsdal', 165, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3009, 'Nordland', 165, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3010, 'Oslo', 165, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3011, 'Rogaland', 165, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3012, 'Svalbard', 165, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3013, 'Troms og Finnmark', 165, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3014, 'Trøndelag', 165, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3015, 'Vestfold og Telemark', 165, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3016, 'Vestland', 165, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3017, 'Viken', 165, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3018, 'Ad Dakhiliyah', 166, '1', 'DA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3019, 'Ad Dhahirah', 166, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3020, 'Al Batinah North', 166, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3021, 'Al Batinah Region', 166, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3022, 'Al Batinah South', 166, '1', 'BJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3023, 'Al Buraimi', 166, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3024, 'Al Wusta', 166, '1', 'WU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3025, 'Ash Sharqiyah North', 166, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3026, 'Ash Sharqiyah Region', 166, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3027, 'Ash Sharqiyah South', 166, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3028, 'Dhofar', 166, '1', 'ZU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3029, 'Musandam', 166, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3030, 'Muscat', 166, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3031, 'Azad Kashmir', 167, '1', 'JK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3032, 'Balochistan', 167, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3033, 'Federally Administered Tribal Areas', 167, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3034, 'Gilgit-Baltistan', 167, '1', 'GB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3035, 'Islamabad Capital Territory', 167, '1', 'IS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3036, 'Khyber Pakhtunkhwa', 167, '1', 'KP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3037, 'Punjab', 167, '1', 'PB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3038, 'Sindh', 167, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3039, 'Aimeliik', 168, '1', '002', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3040, 'Airai', 168, '1', '004', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3041, 'Angaur', 168, '1', '010', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3042, 'Hatohobei', 168, '1', '050', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3043, 'Kayangel', 168, '1', '100', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3044, 'Koror', 168, '1', '150', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3045, 'Melekeok', 168, '1', '212', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3046, 'Ngaraard', 168, '1', '214', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3047, 'Ngarchelong', 168, '1', '218', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3048, 'Ngardmau', 168, '1', '222', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3049, 'Ngatpang', 168, '1', '224', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3050, 'Ngchesar', 168, '1', '226', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3051, 'Ngeremlengui', 168, '1', '227', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3052, 'Ngiwal', 168, '1', '228', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3053, 'Peleliu', 168, '1', '350', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3054, 'Sonsorol', 168, '1', '370', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3055, 'Bethlehem', 169, '1', 'BTH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3056, 'Deir El Balah', 169, '1', 'DEB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3057, 'Gaza', 169, '1', 'GZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3058, 'Hebron', 169, '1', 'HBN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3059, 'Jenin', 169, '1', 'JEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3060, 'Jericho and Al Aghwar', 169, '1', 'JRH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3061, 'Jerusalem', 169, '1', 'JEM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3062, 'Khan Yunis', 169, '1', 'KYS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3063, 'Nablus', 169, '1', 'NBS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3064, 'North Gaza', 169, '1', 'NGZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3065, 'Qalqilya', 169, '1', 'QQA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3066, 'Rafah', 169, '1', 'RFH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3067, 'Ramallah', 169, '1', 'RBH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3068, 'Salfit', 169, '1', 'SLT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3069, 'Tubas', 169, '1', 'TBS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3070, 'Tulkarm', 169, '1', 'TKM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3071, 'Bocas del Toro Province', 170, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3072, 'Chiriquí Province', 170, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3073, 'Coclé Province', 170, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3074, 'Colón Province', 170, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3075, 'Darién Province', 170, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3076, 'Emberá-Wounaan Comarca', 170, '1', 'EM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3077, 'Guna Yala', 170, '1', 'KY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3078, 'Herrera Province', 170, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3079, 'Los Santos Province', 170, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3080, 'Ngöbe-Buglé Comarca', 170, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3081, 'Panamá Oeste Province', 170, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3082, 'Panamá Province', 170, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3083, 'Veraguas Province', 170, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3084, 'Bougainville', 171, '1', 'NSB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3085, 'Central Province', 171, '1', 'CPM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3086, 'Chimbu Province', 171, '1', 'CPK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3087, 'East New Britain', 171, '1', 'EBR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3088, 'Eastern Highlands Province', 171, '1', 'EHG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3089, 'Enga Province', 171, '1', 'EPW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3090, 'Gulf', 171, '1', 'GPK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3091, 'Hela', 171, '1', 'HLA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3092, 'Jiwaka Province', 171, '1', 'JWK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3093, 'Madang Province', 171, '1', 'MPM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3094, 'Manus Province', 171, '1', 'MRL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3095, 'Milne Bay Province', 171, '1', 'MBA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3096, 'Morobe Province', 171, '1', 'MPL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3097, 'New Ireland Province', 171, '1', 'NIK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3098, 'Oro Province', 171, '1', 'NPP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3099, 'Port Moresby', 171, '1', 'NCD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3100, 'Sandaun Province', 171, '1', 'SAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3101, 'Southern Highlands Province', 171, '1', 'SHM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3102, 'West New Britain Province', 171, '1', 'WBK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3103, 'Western Highlands Province', 171, '1', 'WHM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3104, 'Western Province', 171, '1', 'WPD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3105, 'Alto Paraguay Department', 172, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3106, 'Alto Paraná Department', 172, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3107, 'Amambay Department', 172, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3108, 'Boquerón Department', 172, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3109, 'Caaguazú', 172, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3110, 'Caazapá', 172, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3111, 'Canindeyú', 172, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3112, 'Central Department', 172, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3113, 'Concepción Department', 172, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3114, 'Cordillera Department', 172, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3115, 'Guairá Department', 172, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3116, 'Itapúa', 172, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3117, 'Misiones Department', 172, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3118, 'Ñeembucú Department', 172, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3119, 'Paraguarí Department', 172, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3120, 'Presidente Hayes Department', 172, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3121, 'San Pedro Department', 172, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3122, 'Amazonas', 173, '1', 'AMA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3123, 'Áncash', 173, '1', 'ANC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3124, 'Apurímac', 173, '1', 'APU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3125, 'Arequipa', 173, '1', 'ARE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3126, 'Ayacucho', 173, '1', 'AYA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3127, 'Cajamarca', 173, '1', 'CAJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3128, 'Callao', 173, '1', 'CAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3129, 'Cusco', 173, '1', 'CUS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3130, 'Huancavelica', 173, '1', 'HUV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3131, 'Huanuco', 173, '1', 'HUC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3132, 'Ica', 173, '1', 'ICA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3133, 'Junín', 173, '1', 'JUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3134, 'La Libertad', 173, '1', 'LAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3135, 'Lambayeque', 173, '1', 'LAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3136, 'Lima', 173, '1', 'LIM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3137, 'Loreto', 173, '1', 'LOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3138, 'Madre de Dios', 173, '1', 'MDD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3139, 'Moquegua', 173, '1', 'MOQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3140, 'Pasco', 173, '1', 'PAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3141, 'Piura', 173, '1', 'PIU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3142, 'Puno', 173, '1', 'PUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3143, 'San Martín', 173, '1', 'SAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3144, 'Tacna', 173, '1', 'TAC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3145, 'Tumbes', 173, '1', 'TUM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3146, 'Ucayali', 173, '1', 'UCA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3147, 'Abra', 174, '1', 'ABR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3148, 'Agusan del Norte', 174, '1', 'AGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3149, 'Agusan del Sur', 174, '1', 'AGS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3150, 'Aklan', 174, '1', 'AKL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3151, 'Albay', 174, '1', 'ALB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3152, 'Antique', 174, '1', 'ANT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3153, 'Apayao', 174, '1', 'APA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3154, 'Aurora', 174, '1', 'AUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3155, 'Autonomous Region in Muslim Mindanao', 174, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3156, 'Basilan', 174, '1', 'BAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3157, 'Bataan', 174, '1', 'BAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3158, 'Batanes', 174, '1', 'BTN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3159, 'Batangas', 174, '1', 'BTG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3160, 'Benguet', 174, '1', 'BEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3161, 'Bicol', 174, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3162, 'Biliran', 174, '1', 'BIL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3163, 'Bohol', 174, '1', 'BOH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3164, 'Bukidnon', 174, '1', 'BUK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3165, 'Bulacan', 174, '1', 'BUL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3166, 'Cagayan', 174, '1', 'CAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3167, 'Cagayan Valley', 174, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3168, 'Calabarzon', 174, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3169, 'Camarines Norte', 174, '1', 'CAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3170, 'Camarines Sur', 174, '1', 'CAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3171, 'Camiguin', 174, '1', 'CAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3172, 'Capiz', 174, '1', 'CAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3173, 'Caraga', 174, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3174, 'Catanduanes', 174, '1', 'CAT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3175, 'Cavite', 174, '1', 'CAV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3176, 'Cebu', 174, '1', 'CEB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3177, 'Central Luzon', 174, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3178, 'Central Visayas', 174, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3179, 'Compostela Valley', 174, '1', 'COM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3180, 'Cordillera Administrative', 174, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3181, 'Cotabato', 174, '1', 'NCO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3182, 'Davao', 174, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3183, 'Davao del Norte', 174, '1', 'DAV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3184, 'Davao del Sur', 174, '1', 'DAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3185, 'Davao Occidental', 174, '1', 'DVO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3186, 'Davao Oriental', 174, '1', 'DAO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3187, 'Dinagat Islands', 174, '1', 'DIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3188, 'Eastern Samar', 174, '1', 'EAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3189, 'Eastern Visayas', 174, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3190, 'Guimaras', 174, '1', 'GUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3191, 'Ifugao', 174, '1', 'IFU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3192, 'Ilocos', 174, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3193, 'Ilocos Norte', 174, '1', 'ILN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3194, 'Ilocos Sur', 174, '1', 'ILS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3195, 'Iloilo', 174, '1', 'ILI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3196, 'Isabela', 174, '1', 'ISA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3197, 'Kalinga', 174, '1', 'KAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3198, 'La Union', 174, '1', 'LUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3199, 'Laguna', 174, '1', 'LAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3200, 'Lanao del Norte', 174, '1', 'LAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3201, 'Lanao del Sur', 174, '1', 'LAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3202, 'Leyte', 174, '1', 'LEY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3203, 'Maguindanao', 174, '1', 'MAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3204, 'Marinduque', 174, '1', 'MAD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3205, 'Masbate', 174, '1', 'MAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3206, 'Metro Manila', 174, '1', 'NCR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3207, 'Mimaropa', 174, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3208, 'Misamis Occidental', 174, '1', 'MSC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3209, 'Misamis Oriental', 174, '1', 'MSR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3210, 'Mountain Province', 174, '1', 'MOU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3211, 'Negros Occidental', 174, '1', 'NEC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3212, 'Negros Oriental', 174, '1', 'NER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3213, 'Northern Mindanao', 174, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3214, 'Northern Samar', 174, '1', 'NSA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3215, 'Nueva Ecija', 174, '1', 'NUE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3216, 'Nueva Vizcaya', 174, '1', 'NUV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3217, 'Occidental Mindoro', 174, '1', 'MDC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3218, 'Oriental Mindoro', 174, '1', 'MDR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3219, 'Palawan', 174, '1', 'PLW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3220, 'Pampanga', 174, '1', 'PAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3221, 'Pangasinan', 174, '1', 'PAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3222, 'Quezon', 174, '1', 'QUE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3223, 'Quirino', 174, '1', 'QUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3224, 'Rizal', 174, '1', 'RIZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3225, 'Romblon', 174, '1', 'ROM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3226, 'Sarangani', 174, '1', 'SAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3227, 'Siquijor', 174, '1', 'SIG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3228, 'Soccsksargen', 174, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3229, 'Sorsogon', 174, '1', 'SOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3230, 'South Cotabato', 174, '1', 'SCO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3231, 'Southern Leyte', 174, '1', 'SLE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3232, 'Sultan Kudarat', 174, '1', 'SUK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3233, 'Sulu', 174, '1', 'SLU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3234, 'Surigao del Norte', 174, '1', 'SUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3235, 'Surigao del Sur', 174, '1', 'SUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3236, 'Tarlac', 174, '1', 'TAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3237, 'Tawi-Tawi', 174, '1', 'TAW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3238, 'Western Samar', 174, '1', 'WSA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3239, 'Western Visayas', 174, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3240, 'Zambales', 174, '1', 'ZMB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3241, 'Zamboanga del Norte', 174, '1', 'ZAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3242, 'Zamboanga del Sur', 174, '1', 'ZAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3243, 'Zamboanga Peninsula', 174, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3244, 'Zamboanga Sibugay', 174, '1', 'ZSI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3245, 'Greater Poland Voivodeship', 176, '1', 'WP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3246, 'Kuyavian-Pomeranian Voivodeship', 176, '1', 'KP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3247, 'Lesser Poland Voivodeship', 176, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3248, 'Lower Silesian Voivodeship', 176, '1', 'DS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3249, 'Lublin Voivodeship', 176, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3250, 'Lubusz Voivodeship', 176, '1', 'LB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3251, 'Łódź Voivodeship', 176, '1', 'LD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3252, 'Masovian Voivodeship', 176, '1', 'MZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3253, 'Opole Voivodeship', 176, '1', 'OP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3254, 'Podkarpackie Voivodeship', 176, '1', 'PK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3255, 'Podlaskie Voivodeship', 176, '1', 'PD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3256, 'Pomeranian Voivodeship', 176, '1', 'PM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3257, 'Silesian Voivodeship', 176, '1', 'SL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3258, 'Świętokrzyskie Voivodeship', 176, '1', 'SK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3259, 'Warmian-Masurian Voivodeship', 176, '1', 'WN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3260, 'West Pomeranian Voivodeship', 176, '1', 'ZP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3261, 'Açores', 177, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3262, 'Aveiro', 177, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3263, 'Beja', 177, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3264, 'Braga', 177, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3265, 'Bragança', 177, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3266, 'Castelo Branco', 177, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3267, 'Coimbra', 177, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3268, 'Évora', 177, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3269, 'Faro', 177, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3270, 'Guarda', 177, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3271, 'Leiria', 177, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3272, 'Lisbon', 177, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3273, 'Madeira', 177, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3274, 'Portalegre', 177, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3275, 'Porto', 177, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3276, 'Santarém', 177, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3277, 'Setúbal', 177, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3278, 'Viana do Castelo', 177, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3279, 'Vila Real', 177, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3280, 'Viseu', 177, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3281, 'Arecibo', 178, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3282, 'Bayamon', 178, '1', 'BY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3283, 'Caguas', 178, '1', 'CG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3284, 'Carolina', 178, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3285, 'Guaynabo', 178, '1', 'GN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3286, 'Mayagüez', 178, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3287, 'Ponce', 178, '1', 'PO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3288, 'San Juan', 178, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3289, 'Toa Baja', 178, '1', 'TB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3290, 'Trujillo Alto', 178, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3291, 'Al Daayen', 179, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3292, 'Al Khor', 179, '1', 'KH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3293, 'Al Rayyan Municipality', 179, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3294, 'Al Wakrah', 179, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3295, 'Al-Shahaniya', 179, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3296, 'Doha', 179, '1', 'DA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3297, 'Madinat ash Shamal', 179, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3298, 'Umm Salal Municipality', 179, '1', 'US', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3299, 'Alba', 181, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3300, 'Arad County', 181, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3301, 'Arges', 181, '1', 'AG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3302, 'Bacău County', 181, '1', 'BC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3303, 'Bihor County', 181, '1', 'BH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3304, 'Bistrița-Năsăud County', 181, '1', 'BN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3305, 'Botoșani County', 181, '1', 'BT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3306, 'Braila', 181, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3307, 'Brașov County', 181, '1', 'BV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3308, 'Bucharest', 181, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3309, 'Buzău County', 181, '1', 'BZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3310, 'Călărași County', 181, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3311, 'Caraș-Severin County', 181, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3312, 'Cluj County', 181, '1', 'CJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3313, 'Constanța County', 181, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3314, 'Covasna County', 181, '1', 'CV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3315, 'Dâmbovița County', 181, '1', 'DB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3316, 'Dolj County', 181, '1', 'DJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3317, 'Galați County', 181, '1', 'GL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3318, 'Giurgiu County', 181, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3319, 'Gorj County', 181, '1', 'GJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3320, 'Harghita County', 181, '1', 'HR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3321, 'Hunedoara County', 181, '1', 'HD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3322, 'Ialomița County', 181, '1', 'IL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3323, 'Iași County', 181, '1', 'IS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3324, 'Ilfov County', 181, '1', 'IF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3325, 'Maramureș County', 181, '1', 'MM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3326, 'Mehedinți County', 181, '1', 'MH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3327, 'Mureș County', 181, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3328, 'Neamț County', 181, '1', 'NT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3329, 'Olt County', 181, '1', 'OT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3330, 'Prahova County', 181, '1', 'PH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3331, 'Sălaj County', 181, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3332, 'Satu Mare County', 181, '1', 'SM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3333, 'Sibiu County', 181, '1', 'SB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3334, 'Suceava County', 181, '1', 'SV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3335, 'Teleorman County', 181, '1', 'TR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3336, 'Timiș County', 181, '1', 'TM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3337, 'Tulcea County', 181, '1', 'TL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3338, 'Vâlcea County', 181, '1', 'VL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3339, 'Vaslui County', 181, '1', 'VS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3340, 'Vrancea County', 181, '1', 'VN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3341, 'Altai Krai', 182, '1', 'ALT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3342, 'Altai Republic', 182, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3343, 'Amur Oblast', 182, '1', 'AMU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3344, 'Arkhangelsk', 182, '1', 'ARK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3345, 'Astrakhan Oblast', 182, '1', 'AST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3346, 'Belgorod Oblast', 182, '1', 'BEL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3347, 'Bryansk Oblast', 182, '1', 'BRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3348, 'Chechen Republic', 182, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3349, 'Chelyabinsk Oblast', 182, '1', 'CHE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3350, 'Chukotka Autonomous Okrug', 182, '1', 'CHU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3351, 'Chuvash Republic', 182, '1', 'CU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3352, 'Irkutsk', 182, '1', 'IRK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3353, 'Ivanovo Oblast', 182, '1', 'IVA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3354, 'Jewish Autonomous Oblast', 182, '1', 'YEV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3355, 'Kabardino-Balkar Republic', 182, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3356, 'Kaliningrad', 182, '1', 'KGD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3357, 'Kaluga Oblast', 182, '1', 'KLU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3358, 'Kamchatka Krai', 182, '1', 'KAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3359, 'Karachay-Cherkess Republic', 182, '1', 'KC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3360, 'Kemerovo Oblast', 182, '1', 'KEM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3361, 'Khabarovsk Krai', 182, '1', 'KHA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3362, 'Khanty-Mansi Autonomous Okrug', 182, '1', 'KHM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3363, 'Kirov Oblast', 182, '1', 'KIR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3364, 'Komi Republic', 182, '1', 'KO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3365, 'Kostroma Oblast', 182, '1', 'KOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3366, 'Krasnodar Krai', 182, '1', 'KDA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3367, 'Krasnoyarsk Krai', 182, '1', 'KYA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3368, 'Kurgan Oblast', 182, '1', 'KGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3369, 'Kursk Oblast', 182, '1', 'KRS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3370, 'Leningrad Oblast', 182, '1', 'LEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3371, 'Lipetsk Oblast', 182, '1', 'LIP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3372, 'Magadan Oblast', 182, '1', 'MAG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3373, 'Mari El Republic', 182, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3374, 'Moscow', 182, '1', 'MOW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3375, 'Moscow Oblast', 182, '1', 'MOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3376, 'Murmansk Oblast', 182, '1', 'MUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3377, 'Nenets Autonomous Okrug', 182, '1', 'NEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3378, 'Nizhny Novgorod Oblast', 182, '1', 'NIZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3379, 'Novgorod Oblast', 182, '1', 'NGR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3380, 'Novosibirsk', 182, '1', 'NVS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3381, 'Omsk Oblast', 182, '1', 'OMS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3382, 'Orenburg Oblast', 182, '1', 'ORE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3383, 'Oryol Oblast', 182, '1', 'ORL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3384, 'Penza Oblast', 182, '1', 'PNZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3385, 'Perm Krai', 182, '1', 'PER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3386, 'Primorsky Krai', 182, '1', 'PRI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3387, 'Pskov Oblast', 182, '1', 'PSK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3388, 'Republic of Adygea', 182, '1', 'AD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3389, 'Republic of Bashkortostan', 182, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3390, 'Republic of Buryatia', 182, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3391, 'Republic of Dagestan', 182, '1', 'DA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3392, 'Republic of Ingushetia', 182, '1', 'IN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3393, 'Republic of Kalmykia', 182, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3394, 'Republic of Karelia', 182, '1', 'KR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3395, 'Republic of Khakassia', 182, '1', 'KK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3396, 'Republic of Mordovia', 182, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3397, 'Republic of North Ossetia-Alania', 182, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3398, 'Republic of Tatarstan', 182, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3399, 'Rostov Oblast', 182, '1', 'ROS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3400, 'Ryazan Oblast', 182, '1', 'RYA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3401, 'Saint Petersburg', 182, '1', 'SPE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3402, 'Sakha Republic', 182, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3403, 'Sakhalin', 182, '1', 'SAK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3404, 'Samara Oblast', 182, '1', 'SAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3405, 'Saratov Oblast', 182, '1', 'SAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3406, 'Sevastopol', 182, '1', 'UA-40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3407, 'Smolensk Oblast', 182, '1', 'SMO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3408, 'Stavropol Krai', 182, '1', 'STA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3409, 'Sverdlovsk', 182, '1', 'SVE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3410, 'Tambov Oblast', 182, '1', 'TAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3411, 'Tomsk Oblast', 182, '1', 'TOM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3412, 'Tula Oblast', 182, '1', 'TUL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3413, 'Tuva Republic', 182, '1', 'TY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3414, 'Tver Oblast', 182, '1', 'TVE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3415, 'Tyumen Oblast', 182, '1', 'TYU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3416, 'Udmurt Republic', 182, '1', 'UD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3417, 'Ulyanovsk Oblast', 182, '1', 'ULY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3418, 'Vladimir Oblast', 182, '1', 'VLA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3419, 'Volgograd Oblast', 182, '1', 'VGG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3420, 'Vologda Oblast', 182, '1', 'VLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3421, 'Voronezh Oblast', 182, '1', 'VOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3422, 'Yamalo-Nenets Autonomous Okrug', 182, '1', 'YAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3423, 'Yaroslavl Oblast', 182, '1', 'YAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3424, 'Zabaykalsky Krai', 182, '1', 'ZAB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3425, 'Eastern Province', 183, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3426, 'Kigali district', 183, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3427, 'Northern Province', 183, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3428, 'Southern Province', 183, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3429, 'Western Province', 183, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3430, 'Christ Church Nichola Town Parish', 185, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3431, 'Nevis', 185, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3432, 'Saint Anne Sandy Point Parish', 185, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3433, 'Saint George Gingerland Parish', 185, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3434, 'Saint James Windward Parish', 185, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3435, 'Saint John Capisterre Parish', 185, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3436, 'Saint John Figtree Parish', 185, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3437, 'Saint Kitts', 185, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3438, 'Saint Mary Cayon Parish', 185, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3439, 'Saint Paul Capisterre Parish', 185, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3440, 'Saint Paul Charlestown Parish', 185, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3441, 'Saint Peter Basseterre Parish', 185, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3442, 'Saint Thomas Lowland Parish', 185, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3443, 'Saint Thomas Middle Island Parish', 185, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3444, 'Trinity Palmetto Point Parish', 185, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3445, 'Anse la Raye Quarter', 186, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3446, 'Canaries', 186, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3447, 'Castries Quarter', 186, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3448, 'Choiseul Quarter', 186, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3449, 'Dauphin Quarter', 186, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3450, 'Dennery Quarter', 186, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3451, 'Gros Islet Quarter', 186, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3452, 'Laborie Quarter', 186, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3453, 'Micoud Quarter', 186, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3454, 'Praslin Quarter', 186, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3455, 'Soufrière Quarter', 186, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3456, 'Vieux Fort Quarter', 186, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3457, 'Charlotte Parish', 188, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3458, 'Grenadines Parish', 188, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3459, 'Saint Andrew Parish', 188, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3460, 'Saint David Parish', 188, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3461, 'Saint George Parish', 188, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3462, 'Saint Patrick Parish', 188, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3463, 'A\'ana', 191, '1', 'AA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3464, 'Aiga-i-le-Tai', 191, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3465, 'Atua', 191, '1', 'AT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3466, 'Fa\'asaleleaga', 191, '1', 'FA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3467, 'Gaga\'emauga', 191, '1', 'GE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3468, 'Gaga\'ifomauga', 191, '1', 'GI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3469, 'Palauli', 191, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3470, 'Satupa\'itea', 191, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3471, 'Tuamasaga', 191, '1', 'TU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3472, 'Va\'a-o-Fonoti', 191, '1', 'VF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3473, 'Vaisigano', 191, '1', 'VS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3474, 'Acquaviva', 192, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3475, 'Borgo Maggiore', 192, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3476, 'Chiesanuova', 192, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3477, 'Domagnano', 192, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3478, 'Faetano', 192, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3479, 'Fiorentino', 192, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3480, 'Montegiardino', 192, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3481, 'San Marino', 192, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3482, 'Serravalle', 192, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3483, 'Príncipe Province', 193, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3484, 'São Tomé Province', 193, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3485, 'Asir', 194, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3486, 'Al Bahah', 194, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3487, 'Al Jawf', 194, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3488, 'Al Madinah', 194, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3489, 'Al-Qassim', 194, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3490, 'Eastern Province', 194, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3491, 'Ha\'il', 194, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3492, 'Jizan', 194, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3493, 'Makkah', 194, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3494, 'Najran', 194, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3495, 'Northern Borders', 194, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3496, 'Riyadh', 194, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3497, 'Tabuk', 194, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3498, 'Dakar', 195, '1', 'DK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3499, 'Diourbel Region', 195, '1', 'DB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3500, 'Fatick', 195, '1', 'FK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3501, 'Kaffrine', 195, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3502, 'Kaolack', 195, '1', 'KL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3503, 'Kédougou', 195, '1', 'KE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3504, 'Kolda', 195, '1', 'KD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3505, 'Louga', 195, '1', 'LG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3506, 'Matam', 195, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3507, 'Saint-Louis', 195, '1', 'SL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3508, 'Sédhiou', 195, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3509, 'Tambacounda Region', 195, '1', 'TC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3510, 'Thiès Region', 195, '1', 'TH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3511, 'Ziguinchor', 195, '1', 'ZG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3512, 'Belgrade', 196, '1', '00', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3513, 'Bor District', 196, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3514, 'Braničevo District', 196, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3515, 'Central Banat District', 196, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3516, 'Jablanica District', 196, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3517, 'Kolubara District', 196, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3518, 'Mačva District', 196, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3519, 'Moravica District', 196, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3520, 'Nišava District', 196, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3521, 'North Bačka District', 196, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3522, 'North Banat District', 196, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3523, 'Pčinja District', 196, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3524, 'Pirot District', 196, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3525, 'Podunavlje District', 196, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3526, 'Pomoravlje District', 196, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3527, 'Rasina District', 196, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3528, 'Raška District', 196, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3529, 'South Bačka District', 196, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(3530, 'South Banat District', 196, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3531, 'Srem District', 196, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3532, 'Šumadija District', 196, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3533, 'Toplica District', 196, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3534, 'Vojvodina', 196, '1', 'VO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3535, 'West Bačka District', 196, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3536, 'Zaječar District', 196, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3537, 'Zlatibor District', 196, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3538, 'Anse Boileau', 197, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3539, 'Anse Royale', 197, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3540, 'Anse-aux-Pins', 197, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3541, 'Au Cap', 197, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3542, 'Baie Lazare', 197, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3543, 'Baie Sainte Anne', 197, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3544, 'Beau Vallon', 197, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3545, 'Bel Air', 197, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3546, 'Bel Ombre', 197, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3547, 'Cascade', 197, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3548, 'Glacis', 197, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3549, 'Grand\'Anse Mahé', 197, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3550, 'Grand\'Anse Praslin', 197, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3551, 'La Digue', 197, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3552, 'La Rivière Anglaise', 197, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3553, 'Les Mamelles', 197, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3554, 'Mont Buxton', 197, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3555, 'Mont Fleuri', 197, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3556, 'Plaisance', 197, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3557, 'Pointe La Rue', 197, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3558, 'Port Glaud', 197, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3559, 'Roche Caiman', 197, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3560, 'Saint Louis', 197, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3561, 'Takamaka', 197, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3562, 'Eastern Province', 198, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3563, 'Northern Province', 198, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3564, 'Southern Province', 198, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3565, 'Western Area', 198, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3566, 'Central Singapore Community Development Council', 199, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3567, 'North East Community Development Council', 199, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3568, 'North West Community Development Council', 199, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3569, 'South East Community Development Council', 199, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3570, 'South West Community Development Council', 199, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3571, 'Banská Bystrica Region', 200, '1', 'BC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3572, 'Bratislava Region', 200, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3573, 'Košice Region', 200, '1', 'KI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3574, 'Nitra Region', 200, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3575, 'Prešov Region', 200, '1', 'PV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3576, 'Trenčín Region', 200, '1', 'TC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3577, 'Trnava Region', 200, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3578, 'Žilina Region', 200, '1', 'ZI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3579, 'Ajdovščina Municipality', 201, '1', '001', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3580, 'Ankaran Municipality', 201, '1', '213', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3581, 'Beltinci Municipality', 201, '1', '002', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3582, 'Benedikt Municipality', 201, '1', '148', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3583, 'Bistrica ob Sotli Municipality', 201, '1', '149', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3584, 'Bled Municipality', 201, '1', '003', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3585, 'Bloke Municipality', 201, '1', '150', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3586, 'Bohinj Municipality', 201, '1', '004', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3587, 'Borovnica Municipality', 201, '1', '005', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3588, 'Bovec Municipality', 201, '1', '006', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3589, 'Braslovče Municipality', 201, '1', '151', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3590, 'Brda Municipality', 201, '1', '007', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3591, 'Brežice Municipality', 201, '1', '009', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3592, 'Brezovica Municipality', 201, '1', '008', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3593, 'Cankova Municipality', 201, '1', '152', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3594, 'Cerklje na Gorenjskem Municipality', 201, '1', '012', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3595, 'Cerknica Municipality', 201, '1', '013', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3596, 'Cerkno Municipality', 201, '1', '014', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3597, 'Cerkvenjak Municipality', 201, '1', '153', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3598, 'City Municipality of Celje', 201, '1', '011', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3599, 'City Municipality of Novo Mesto', 201, '1', '085', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3600, 'Črenšovci Municipality', 201, '1', '015', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3601, 'Črna na Koroškem Municipality', 201, '1', '016', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3602, 'Črnomelj Municipality', 201, '1', '017', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3603, 'Destrnik Municipality', 201, '1', '018', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3604, 'Divača Municipality', 201, '1', '019', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3605, 'Dobje Municipality', 201, '1', '154', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3606, 'Dobrepolje Municipality', 201, '1', '020', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3607, 'Dobrna Municipality', 201, '1', '155', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3608, 'Dobrova–Polhov Gradec Municipality', 201, '1', '021', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3609, 'Dobrovnik Municipality', 201, '1', '156', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3610, 'Dol pri Ljubljani Municipality', 201, '1', '022', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3611, 'Dolenjske Toplice Municipality', 201, '1', '157', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3612, 'Domžale Municipality', 201, '1', '023', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3613, 'Dornava Municipality', 201, '1', '024', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3614, 'Dravograd Municipality', 201, '1', '025', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3615, 'Duplek Municipality', 201, '1', '026', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3616, 'Gorenja Vas–Poljane Municipality', 201, '1', '027', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3617, 'Gorišnica Municipality', 201, '1', '028', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3618, 'Gorje Municipality', 201, '1', '207', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3619, 'Gornja Radgona Municipality', 201, '1', '029', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3620, 'Gornji Grad Municipality', 201, '1', '030', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3621, 'Gornji Petrovci Municipality', 201, '1', '031', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3622, 'Grad Municipality', 201, '1', '158', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3623, 'Grosuplje Municipality', 201, '1', '032', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3624, 'Hajdina Municipality', 201, '1', '159', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3625, 'Hoče–Slivnica Municipality', 201, '1', '160', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3626, 'Hodoš Municipality', 201, '1', '161', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3627, 'Horjul Municipality', 201, '1', '162', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3628, 'Hrastnik Municipality', 201, '1', '034', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3629, 'Hrpelje–Kozina Municipality', 201, '1', '035', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3630, 'Idrija Municipality', 201, '1', '036', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3631, 'Ig Municipality', 201, '1', '037', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3632, 'Ivančna Gorica Municipality', 201, '1', '039', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3633, 'Izola Municipality', 201, '1', '040', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3634, 'Jesenice Municipality', 201, '1', '041', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3635, 'Jezersko Municipality', 201, '1', '163', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3636, 'Juršinci Municipality', 201, '1', '042', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3637, 'Kamnik Municipality', 201, '1', '043', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3638, 'Kanal ob Soči Municipality', 201, '1', '044', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3639, 'Kidričevo Municipality', 201, '1', '045', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3640, 'Kobarid Municipality', 201, '1', '046', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3641, 'Kobilje Municipality', 201, '1', '047', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3642, 'Kočevje Municipality', 201, '1', '048', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3643, 'Komen Municipality', 201, '1', '049', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3644, 'Komenda Municipality', 201, '1', '164', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3645, 'Koper City Municipality', 201, '1', '050', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3646, 'Kostanjevica na Krki Municipality', 201, '1', '197', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3647, 'Kostel Municipality', 201, '1', '165', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3648, 'Kozje Municipality', 201, '1', '051', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3649, 'Kranj City Municipality', 201, '1', '052', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3650, 'Kranjska Gora Municipality', 201, '1', '053', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3651, 'Križevci Municipality', 201, '1', '166', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3652, 'Kungota', 201, '1', '055', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3653, 'Kuzma Municipality', 201, '1', '056', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3654, 'Laško Municipality', 201, '1', '057', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3655, 'Lenart Municipality', 201, '1', '058', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3656, 'Lendava Municipality', 201, '1', '059', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3657, 'Litija Municipality', 201, '1', '060', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3658, 'Ljubljana City Municipality', 201, '1', '061', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3659, 'Ljubno Municipality', 201, '1', '062', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3660, 'Ljutomer Municipality', 201, '1', '063', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3661, 'Log–Dragomer Municipality', 201, '1', '208', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3662, 'Logatec Municipality', 201, '1', '064', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3663, 'Loška Dolina Municipality', 201, '1', '065', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3664, 'Loški Potok Municipality', 201, '1', '066', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3665, 'Lovrenc na Pohorju Municipality', 201, '1', '167', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3666, 'Luče Municipality', 201, '1', '067', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3667, 'Lukovica Municipality', 201, '1', '068', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3668, 'Majšperk Municipality', 201, '1', '069', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3669, 'Makole Municipality', 201, '1', '198', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3670, 'Maribor City Municipality', 201, '1', '070', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3671, 'Markovci Municipality', 201, '1', '168', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3672, 'Medvode Municipality', 201, '1', '071', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3673, 'Mengeš Municipality', 201, '1', '072', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3674, 'Metlika Municipality', 201, '1', '073', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3675, 'Mežica Municipality', 201, '1', '074', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3676, 'Miklavž na Dravskem Polju Municipality', 201, '1', '169', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3677, 'Miren–Kostanjevica Municipality', 201, '1', '075', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3678, 'Mirna Municipality', 201, '1', '212', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3679, 'Mirna Peč Municipality', 201, '1', '170', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3680, 'Mislinja Municipality', 201, '1', '076', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3681, 'Mokronog–Trebelno Municipality', 201, '1', '199', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3682, 'Moravče Municipality', 201, '1', '077', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3683, 'Moravske Toplice Municipality', 201, '1', '078', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3684, 'Mozirje Municipality', 201, '1', '079', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3685, 'Municipality of Apače', 201, '1', '195', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3686, 'Municipality of Cirkulane', 201, '1', '196', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3687, 'Municipality of Ilirska Bistrica', 201, '1', '038', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3688, 'Municipality of Krško', 201, '1', '054', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3689, 'Municipality of Škofljica', 201, '1', '123', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3690, 'Murska Sobota City Municipality', 201, '1', '080', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3691, 'Muta Municipality', 201, '1', '081', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3692, 'Naklo Municipality', 201, '1', '082', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3693, 'Nazarje Municipality', 201, '1', '083', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3694, 'Nova Gorica City Municipality', 201, '1', '084', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3695, 'Odranci Municipality', 201, '1', '086', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3696, 'Oplotnica', 201, '1', '171', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3697, 'Ormož Municipality', 201, '1', '087', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3698, 'Osilnica Municipality', 201, '1', '088', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3699, 'Pesnica Municipality', 201, '1', '089', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3700, 'Piran Municipality', 201, '1', '090', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3701, 'Pivka Municipality', 201, '1', '091', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3702, 'Podčetrtek Municipality', 201, '1', '092', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3703, 'Podlehnik Municipality', 201, '1', '172', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3704, 'Podvelka Municipality', 201, '1', '093', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3705, 'Poljčane Municipality', 201, '1', '200', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3706, 'Polzela Municipality', 201, '1', '173', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3707, 'Postojna Municipality', 201, '1', '094', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3708, 'Prebold Municipality', 201, '1', '174', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3709, 'Preddvor Municipality', 201, '1', '095', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3710, 'Prevalje Municipality', 201, '1', '175', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3711, 'Ptuj City Municipality', 201, '1', '096', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3712, 'Puconci Municipality', 201, '1', '097', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3713, 'Rače–Fram Municipality', 201, '1', '098', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3714, 'Radeče Municipality', 201, '1', '099', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3715, 'Radenci Municipality', 201, '1', '100', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3716, 'Radlje ob Dravi Municipality', 201, '1', '101', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3717, 'Radovljica Municipality', 201, '1', '102', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3718, 'Ravne na Koroškem Municipality', 201, '1', '103', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3719, 'Razkrižje Municipality', 201, '1', '176', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3720, 'Rečica ob Savinji Municipality', 201, '1', '209', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3721, 'Renče–Vogrsko Municipality', 201, '1', '201', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3722, 'Ribnica Municipality', 201, '1', '104', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3723, 'Ribnica na Pohorju Municipality', 201, '1', '177', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3724, 'Rogaška Slatina Municipality', 201, '1', '106', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3725, 'Rogašovci Municipality', 201, '1', '105', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3726, 'Rogatec Municipality', 201, '1', '107', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3727, 'Ruše Municipality', 201, '1', '108', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3728, 'Šalovci Municipality', 201, '1', '033', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3729, 'Selnica ob Dravi Municipality', 201, '1', '178', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3730, 'Semič Municipality', 201, '1', '109', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3731, 'Šempeter–Vrtojba Municipality', 201, '1', '183', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3732, 'Šenčur Municipality', 201, '1', '117', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3733, 'Šentilj Municipality', 201, '1', '118', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3734, 'Šentjernej Municipality', 201, '1', '119', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3735, 'Šentjur Municipality', 201, '1', '120', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3736, 'Šentrupert Municipality', 201, '1', '211', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3737, 'Sevnica Municipality', 201, '1', '110', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3738, 'Sežana Municipality', 201, '1', '111', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3739, 'Škocjan Municipality', 201, '1', '121', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3740, 'Škofja Loka Municipality', 201, '1', '122', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3741, 'Slovenj Gradec City Municipality', 201, '1', '112', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3742, 'Slovenska Bistrica Municipality', 201, '1', '113', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3743, 'Slovenske Konjice Municipality', 201, '1', '114', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3744, 'Šmarje pri Jelšah Municipality', 201, '1', '124', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3745, 'Šmarješke Toplice Municipality', 201, '1', '206', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3746, 'Šmartno ob Paki Municipality', 201, '1', '125', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3747, 'Šmartno pri Litiji Municipality', 201, '1', '194', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3748, 'Sodražica Municipality', 201, '1', '179', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3749, 'Solčava Municipality', 201, '1', '180', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3750, 'Šoštanj Municipality', 201, '1', '126', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3751, 'Središče ob Dravi', 201, '1', '202', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3752, 'Starše Municipality', 201, '1', '115', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3753, 'Štore Municipality', 201, '1', '127', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3754, 'Straža Municipality', 201, '1', '203', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3755, 'Sveta Ana Municipality', 201, '1', '181', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3756, 'Sveta Trojica v Slovenskih Goricah Municipality', 201, '1', '204', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3757, 'Sveti Andraž v Slovenskih Goricah Municipality', 201, '1', '182', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3758, 'Sveti Jurij ob Ščavnici Municipality', 201, '1', '116', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3759, 'Sveti Jurij v Slovenskih Goricah Municipality', 201, '1', '210', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3760, 'Sveti Tomaž Municipality', 201, '1', '205', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3761, 'Tabor Municipality', 201, '1', '184', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3762, 'Tišina Municipality', 201, '1', '010', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3763, 'Tolmin Municipality', 201, '1', '128', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3764, 'Trbovlje Municipality', 201, '1', '129', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3765, 'Trebnje Municipality', 201, '1', '130', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3766, 'Trnovska Vas Municipality', 201, '1', '185', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3767, 'Tržič Municipality', 201, '1', '131', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3768, 'Trzin Municipality', 201, '1', '186', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3769, 'Turnišče Municipality', 201, '1', '132', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3770, 'Velika Polana Municipality', 201, '1', '187', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3771, 'Velike Lašče Municipality', 201, '1', '134', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3772, 'Veržej Municipality', 201, '1', '188', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3773, 'Videm Municipality', 201, '1', '135', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3774, 'Vipava Municipality', 201, '1', '136', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3775, 'Vitanje Municipality', 201, '1', '137', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3776, 'Vodice Municipality', 201, '1', '138', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3777, 'Vojnik Municipality', 201, '1', '139', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3778, 'Vransko Municipality', 201, '1', '189', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3779, 'Vrhnika Municipality', 201, '1', '140', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3780, 'Vuzenica Municipality', 201, '1', '141', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3781, 'Zagorje ob Savi Municipality', 201, '1', '142', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3782, 'Žalec Municipality', 201, '1', '190', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3783, 'Zavrč Municipality', 201, '1', '143', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3784, 'Železniki Municipality', 201, '1', '146', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3785, 'Žetale Municipality', 201, '1', '191', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3786, 'Žiri Municipality', 201, '1', '147', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3787, 'Žirovnica Municipality', 201, '1', '192', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3788, 'Zreče Municipality', 201, '1', '144', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3789, 'Žužemberk Municipality', 201, '1', '193', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3790, 'Central Province', 202, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3791, 'Choiseul Province', 202, '1', 'CH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3792, 'Guadalcanal Province', 202, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3793, 'Honiara', 202, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3794, 'Isabel Province', 202, '1', 'IS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3795, 'Makira-Ulawa Province', 202, '1', 'MK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3796, 'Malaita Province', 202, '1', 'ML', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3797, 'Rennell and Bellona Province', 202, '1', 'RB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3798, 'Temotu Province', 202, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3799, 'Western Province', 202, '1', 'WE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3800, 'Awdal Region', 203, '1', 'AW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3801, 'Bakool', 203, '1', 'BK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3802, 'Banaadir', 203, '1', 'BN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3803, 'Bari', 203, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3804, 'Bay', 203, '1', 'BY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3805, 'Galguduud', 203, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3806, 'Gedo', 203, '1', 'GE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3807, 'Hiran', 203, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3808, 'Lower Juba', 203, '1', 'JH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3809, 'Lower Shebelle', 203, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3810, 'Middle Juba', 203, '1', 'JD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3811, 'Middle Shebelle', 203, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3812, 'Mudug', 203, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3813, 'Nugal', 203, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3814, 'Sanaag Region', 203, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3815, 'Togdheer Region', 203, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3816, 'Eastern Cape', 204, '1', 'EC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3817, 'Free State', 204, '1', 'FS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3818, 'Gauteng', 204, '1', 'GP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3819, 'KwaZulu-Natal', 204, '1', 'KZN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3820, 'Limpopo', 204, '1', 'LP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3821, 'Mpumalanga', 204, '1', 'MP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3822, 'North West', 204, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3823, 'Northern Cape', 204, '1', 'NC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3824, 'Western Cape', 204, '1', 'WC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3825, 'Busan', 116, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3826, 'Daegu', 116, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3827, 'Daejeon', 116, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3828, 'Gangwon Province', 116, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3829, 'Gwangju', 116, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3830, 'Gyeonggi Province', 116, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3831, 'Incheon', 116, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3832, 'Jeju', 116, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3833, 'North Chungcheong Province', 116, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3834, 'North Gyeongsang Province', 116, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3835, 'North Jeolla Province', 116, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3836, 'Sejong City', 116, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3837, 'Seoul', 116, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3838, 'South Chungcheong Province', 116, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3839, 'South Gyeongsang Province', 116, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3840, 'South Jeolla Province', 116, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3841, 'Ulsan', 116, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3842, 'Central Equatoria', 206, '1', 'EC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3843, 'Eastern Equatoria', 206, '1', 'EE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3844, 'Jonglei State', 206, '1', 'JG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3845, 'Lakes', 206, '1', 'LK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3846, 'Northern Bahr el Ghazal', 206, '1', 'BN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3847, 'Unity', 206, '1', 'UY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3848, 'Upper Nile', 206, '1', 'NU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3849, 'Warrap', 206, '1', 'WR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3850, 'Western Bahr el Ghazal', 206, '1', 'BW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3851, 'Western Equatoria', 206, '1', 'EW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3852, 'A Coruña', 207, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3853, 'Albacete', 207, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3854, 'Alicante', 207, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3855, 'Almeria', 207, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3856, 'Araba', 207, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3857, 'Asturias', 207, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3858, 'Ávila', 207, '1', 'AV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3859, 'Badajoz', 207, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3860, 'Barcelona', 207, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3861, 'Bizkaia', 207, '1', 'BI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3862, 'Burgos', 207, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3863, 'Caceres', 207, '1', 'CC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3864, 'Cádiz', 207, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3865, 'Cantabria', 207, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3866, 'Castellón', 207, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3867, 'Ciudad Real', 207, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3868, 'Córdoba', 207, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3869, 'Cuenca', 207, '1', 'CU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3870, 'Gipuzkoa', 207, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3871, 'Girona', 207, '1', 'GI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3872, 'Granada', 207, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3873, 'Guadalajara', 207, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3874, 'Huelva', 207, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3875, 'Huesca', 207, '1', 'HU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3876, 'Islas Baleares', 207, '1', 'PM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3877, 'Jaén', 207, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3878, 'La Rioja', 207, '1', 'LO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3879, 'Las Palmas', 207, '1', 'GC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3880, 'Léon', 207, '1', 'LE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3881, 'Lleida', 207, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3882, 'Lugo', 207, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3883, 'Madrid', 207, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3884, 'Málaga', 207, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3885, 'Murcia', 207, '1', 'MU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3886, 'Navarra', 207, '1', 'NA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3887, 'Ourense', 207, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3888, 'Palencia', 207, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3889, 'Pontevedra', 207, '1', 'PO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3890, 'Salamanca', 207, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3891, 'Santa Cruz de Tenerife', 207, '1', 'TF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3892, 'Segovia', 207, '1', 'SG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3893, 'Sevilla', 207, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3894, 'Soria', 207, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3895, 'Tarragona', 207, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3896, 'Teruel', 207, '1', 'TE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3897, 'Toledo', 207, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3898, 'Valencia', 207, '1', 'V', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3899, 'Valladolid', 207, '1', 'VA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3900, 'Zamora', 207, '1', 'ZA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3901, 'Zaragoza', 207, '1', 'Z', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3902, 'Ampara District', 208, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3903, 'Anuradhapura District', 208, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3904, 'Badulla District', 208, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3905, 'Batticaloa District', 208, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3906, 'Central Province', 208, '1', '2', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3907, 'Colombo District', 208, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3908, 'Eastern Province', 208, '1', '5', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3909, 'Galle District', 208, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3910, 'Gampaha District', 208, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3911, 'Hambantota District', 208, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3912, 'Jaffna District', 208, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3913, 'Kalutara District', 208, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3914, 'Kandy District', 208, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3915, 'Kegalle District', 208, '1', '92', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3916, 'Kilinochchi District', 208, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3917, 'Mannar District', 208, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3918, 'Matale District', 208, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3919, 'Matara District', 208, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3920, 'Monaragala District', 208, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3921, 'Mullaitivu District', 208, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3922, 'North Central Province', 208, '1', '7', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3923, 'North Western Province', 208, '1', '6', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3924, 'Northern Province', 208, '1', '4', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3925, 'Nuwara Eliya District', 208, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3926, 'Polonnaruwa District', 208, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3927, 'Puttalam District', 208, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3928, 'Ratnapura district', 208, '1', '91', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3929, 'Sabaragamuwa Province', 208, '1', '9', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3930, 'Southern Province', 208, '1', '3', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3931, 'Trincomalee District', 208, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3932, 'Uva Province', 208, '1', '8', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3933, 'Vavuniya District', 208, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3934, 'Western Province', 208, '1', '1', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3935, 'Al Jazirah', 209, '1', 'GZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3936, 'Al Qadarif', 209, '1', 'GD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3937, 'Blue Nile', 209, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3938, 'Central Darfur', 209, '1', 'DC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3939, 'East Darfur', 209, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3940, 'Kassala', 209, '1', 'KA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3941, 'Khartoum', 209, '1', 'KH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3942, 'North Darfur', 209, '1', 'DN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3943, 'North Kordofan', 209, '1', 'KN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3944, 'Northern', 209, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3945, 'Red Sea', 209, '1', 'RS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3946, 'River Nile', 209, '1', 'NR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3947, 'Sennar', 209, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3948, 'South Darfur', 209, '1', 'DS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3949, 'South Kordofan', 209, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3950, 'West Darfur', 209, '1', 'DW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3951, 'West Kordofan', 209, '1', 'GK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3952, 'White Nile', 209, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3953, 'Brokopondo District', 210, '1', 'BR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3954, 'Commewijne District', 210, '1', 'CM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3955, 'Coronie District', 210, '1', 'CR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3956, 'Marowijne District', 210, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3957, 'Nickerie District', 210, '1', 'NI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3958, 'Para District', 210, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3959, 'Paramaribo District', 210, '1', 'PM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3960, 'Saramacca District', 210, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3961, 'Sipaliwini District', 210, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3962, 'Wanica District', 210, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3963, 'Hhohho District', 212, '1', 'HH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3964, 'Lubombo District', 212, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3965, 'Manzini District', 212, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3966, 'Shiselweni District', 212, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3967, 'Blekinge', 213, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3968, 'Dalarna County', 213, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3969, 'Gävleborg County', 213, '1', 'X', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3970, 'Gotland County', 213, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3971, 'Halland County', 213, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3972, 'Jönköping County', 213, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3973, 'Kalmar County', 213, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3974, 'Kronoberg County', 213, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3975, 'Norrbotten County', 213, '1', 'BD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3976, 'Örebro County', 213, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3977, 'Östergötland County', 213, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3978, 'Skåne County', 213, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3979, 'Södermanland County', 213, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3980, 'Stockholm County', 213, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3981, 'Uppsala County', 213, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3982, 'Värmland County', 213, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3983, 'Västerbotten County', 213, '1', 'AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3984, 'Västernorrland County', 213, '1', 'Y', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3985, 'Västmanland County', 213, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3986, 'Västra Götaland County', 213, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3987, 'Aargau', 214, '1', 'AG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3988, 'Appenzell Ausserrhoden', 214, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3989, 'Appenzell Innerrhoden', 214, '1', 'AI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3990, 'Basel-Land', 214, '1', 'BL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3991, 'Basel-Stadt', 214, '1', 'BS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3992, 'Bern', 214, '1', 'BE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3993, 'Fribourg', 214, '1', 'FR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3994, 'Geneva', 214, '1', 'GE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3995, 'Glarus', 214, '1', 'GL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3996, 'Graubünden', 214, '1', 'GR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3997, 'Jura', 214, '1', 'JU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3998, 'Lucerne', 214, '1', 'LU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(3999, 'Neuchâtel', 214, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4000, 'Nidwalden', 214, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4001, 'Obwalden', 214, '1', 'OW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4002, 'Schaffhausen', 214, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4003, 'Schwyz', 214, '1', 'SZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4004, 'Solothurn', 214, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4005, 'St. Gallen', 214, '1', 'SG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4006, 'Thurgau', 214, '1', 'TG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4007, 'Ticino', 214, '1', 'TI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4008, 'Uri', 214, '1', 'UR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4009, 'Valais', 214, '1', 'VS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4010, 'Vaud', 214, '1', 'VD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4011, 'Zug', 214, '1', 'ZG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4012, 'Zürich', 214, '1', 'ZH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4013, 'Al-Hasakah', 215, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4014, 'Al-Raqqah', 215, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4015, 'Aleppo', 215, '1', 'HL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4016, 'As-Suwayda', 215, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4017, 'Damascus', 215, '1', 'DI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4018, 'Daraa', 215, '1', 'DR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4019, 'Deir ez-Zor', 215, '1', 'DY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4020, 'Hama', 215, '1', 'HM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4021, 'Homs', 215, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4022, 'Idlib', 215, '1', 'ID', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4023, 'Latakia', 215, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4024, 'Quneitra', 215, '1', 'QU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4025, 'Rif Dimashq', 215, '1', 'RD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4026, 'Tartus', 215, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4027, 'Changhua', 216, '1', 'CHA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4028, 'Chiayi', 216, '1', 'CYI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4029, 'Chiayi', 216, '1', 'CYQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4030, 'Hsinchu', 216, '1', 'HSQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4031, 'Hsinchu', 216, '1', 'HSZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4032, 'Hualien', 216, '1', 'HUA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4033, 'Kaohsiung', 216, '1', 'KHH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4034, 'Keelung', 216, '1', 'KEE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4035, 'Kinmen', 216, '1', 'KIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4036, 'Lienchiang', 216, '1', 'LIE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4037, 'Miaoli', 216, '1', 'MIA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4038, 'Nantou', 216, '1', 'NAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4039, 'New Taipei', 216, '1', 'NWT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4040, 'Penghu', 216, '1', 'PEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4041, 'Pingtung', 216, '1', 'PIF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4042, 'Taichung', 216, '1', 'TXG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4043, 'Tainan', 216, '1', 'TNN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4044, 'Taipei', 216, '1', 'TPE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4045, 'Taitung', 216, '1', 'TTT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4046, 'Taoyuan', 216, '1', 'TAO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4047, 'Yilan', 216, '1', 'ILA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4048, 'Yunlin', 216, '1', 'YUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4049, 'districts of Republican Subordination', 217, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4050, 'Gorno-Badakhshan Autonomous Province', 217, '1', 'GB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4051, 'Khatlon Province', 217, '1', 'KT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4052, 'Sughd Province', 217, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4053, 'Arusha', 218, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4054, 'Dar es Salaam', 218, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4055, 'Dodoma', 218, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4056, 'Geita', 218, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4057, 'Iringa', 218, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4058, 'Kagera', 218, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4059, 'Katavi', 218, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4060, 'Kigoma', 218, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4061, 'Kilimanjaro', 218, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4062, 'Lindi', 218, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4063, 'Manyara', 218, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4064, 'Mara', 218, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4065, 'Mbeya', 218, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4066, 'Morogoro', 218, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4067, 'Mtwara', 218, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4068, 'Mwanza', 218, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4069, 'Njombe', 218, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4070, 'Pemba North', 218, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4071, 'Pemba South', 218, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4072, 'Pwani', 218, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4073, 'Rukwa', 218, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4074, 'Ruvuma', 218, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4075, 'Shinyanga', 218, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4076, 'Simiyu', 218, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4077, 'Singida', 218, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4078, 'Songwe', 218, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4079, 'Tabora', 218, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4080, 'Tanga', 218, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4081, 'Zanzibar North', 218, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4082, 'Zanzibar South', 218, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4083, 'Zanzibar West', 218, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4084, 'Amnat Charoen', 219, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4085, 'Ang Thong', 219, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4086, 'Bangkok', 219, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4087, 'Bueng Kan', 219, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4088, 'Buri Ram', 219, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4089, 'Chachoengsao', 219, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4090, 'Chai Nat', 219, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4091, 'Chaiyaphum', 219, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4092, 'Chanthaburi', 219, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4093, 'Chiang Mai', 219, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4094, 'Chiang Rai', 219, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4095, 'Chon Buri', 219, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(4096, 'Chumphon', 219, '1', '86', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4097, 'Kalasin', 219, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4098, 'Kamphaeng Phet', 219, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4099, 'Kanchanaburi', 219, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4100, 'Khon Kaen', 219, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4101, 'Krabi', 219, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4102, 'Lampang', 219, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4103, 'Lamphun', 219, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4104, 'Loei', 219, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4105, 'Lop Buri', 219, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4106, 'Mae Hong Son', 219, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4107, 'Maha Sarakham', 219, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4108, 'Mukdahan', 219, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4109, 'Nakhon Nayok', 219, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4110, 'Nakhon Pathom', 219, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4111, 'Nakhon Phanom', 219, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4112, 'Nakhon Ratchasima', 219, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4113, 'Nakhon Sawan', 219, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4114, 'Nakhon Si Thammarat', 219, '1', '80', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4115, 'Nan', 219, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4116, 'Narathiwat', 219, '1', '96', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4117, 'Nong Bua Lam Phu', 219, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4118, 'Nong Khai', 219, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4119, 'Nonthaburi', 219, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4120, 'Pathum Thani', 219, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4121, 'Pattani', 219, '1', '94', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4122, 'Pattaya', 219, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4123, 'Phangnga', 219, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4124, 'Phatthalung', 219, '1', '93', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4125, 'Phayao', 219, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4126, 'Phetchabun', 219, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4127, 'Phetchaburi', 219, '1', '76', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4128, 'Phichit', 219, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4129, 'Phitsanulok', 219, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4130, 'Phra Nakhon Si Ayutthaya', 219, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4131, 'Phrae', 219, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4132, 'Phuket', 219, '1', '83', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4133, 'Prachin Buri', 219, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4134, 'Prachuap Khiri Khan', 219, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4135, 'Ranong', 219, '1', '85', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4136, 'Ratchaburi', 219, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4137, 'Rayong', 219, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4138, 'Roi Et', 219, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4139, 'Sa Kaeo', 219, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4140, 'Sakon Nakhon', 219, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4141, 'Samut Prakan', 219, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4142, 'Samut Sakhon', 219, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4143, 'Samut Songkhram', 219, '1', '75', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4144, 'Saraburi', 219, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4145, 'Satun', 219, '1', '91', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4146, 'Si Sa Ket', 219, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4147, 'Sing Buri', 219, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4148, 'Songkhla', 219, '1', '90', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4149, 'Sukhothai', 219, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4150, 'Suphan Buri', 219, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4151, 'Surat Thani', 219, '1', '84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4152, 'Surin', 219, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4153, 'Tak', 219, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4154, 'Trang', 219, '1', '92', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4155, 'Trat', 219, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4156, 'Ubon Ratchathani', 219, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4157, 'Udon Thani', 219, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4158, 'Uthai Thani', 219, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4159, 'Uttaradit', 219, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4160, 'Yala', 219, '1', '95', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4161, 'Yasothon', 219, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4162, 'Acklins', 17, '1', 'AK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4163, 'Acklins and Crooked Islands', 17, '1', 'AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4164, 'Berry Islands', 17, '1', 'BY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4165, 'Bimini', 17, '1', 'BI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4166, 'Black Point', 17, '1', 'BP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4167, 'Cat Island', 17, '1', 'CI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4168, 'Central Abaco', 17, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4169, 'Central Andros', 17, '1', 'CS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4170, 'Central Eleuthera', 17, '1', 'CE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4171, 'Crooked Island', 17, '1', 'CK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4172, 'East Grand Bahama', 17, '1', 'EG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4173, 'Exuma', 17, '1', 'EX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4174, 'Freeport', 17, '1', 'FP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4175, 'Fresh Creek', 17, '1', 'FC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4176, 'Governor\'s Harbour', 17, '1', 'GH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4177, 'Grand Cay', 17, '1', 'GC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4178, 'Green Turtle Cay', 17, '1', 'GT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4179, 'Harbour Island', 17, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4180, 'High Rock', 17, '1', 'HR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4181, 'Hope Town', 17, '1', 'HT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4182, 'Inagua', 17, '1', 'IN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4183, 'Kemps Bay', 17, '1', 'KB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4184, 'Long Island', 17, '1', 'LI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4185, 'Mangrove Cay', 17, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4186, 'Marsh Harbour', 17, '1', 'MH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4187, 'Mayaguana District', 17, '1', 'MG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4188, 'New Providence', 17, '1', 'NP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4189, 'Nichollstown and Berry Islands', 17, '1', 'NB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4190, 'North Abaco', 17, '1', 'NO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4191, 'North Andros', 17, '1', 'NS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4192, 'North Eleuthera', 17, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4193, 'Ragged Island', 17, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4194, 'Rock Sound', 17, '1', 'RS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4195, 'Rum Cay District', 17, '1', 'RC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4196, 'San Salvador and Rum Cay', 17, '1', 'SR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4197, 'San Salvador Island', 17, '1', 'SS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4198, 'Sandy Point', 17, '1', 'SP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4199, 'South Abaco', 17, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4200, 'South Andros', 17, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4201, 'South Eleuthera', 17, '1', 'SE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4202, 'Spanish Wells', 17, '1', 'SW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4203, 'West Grand Bahama', 17, '1', 'WG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4204, 'Centrale Region', 220, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4205, 'Kara Region', 220, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4206, 'Maritime', 220, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4207, 'Plateaux Region', 220, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4208, 'Savanes Region', 220, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4209, 'Haʻapai', 222, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4210, 'ʻEua', 222, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4211, 'Niuas', 222, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4212, 'Tongatapu', 222, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4213, 'Vavaʻu', 222, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4214, 'Arima', 223, '1', 'ARI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4215, 'Chaguanas', 223, '1', 'CHA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4216, 'Couva-Tabaquite-Talparo Regional Corporation', 223, '1', 'CTT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4217, 'Diego Martin Regional Corporation', 223, '1', 'DMN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4218, 'Eastern Tobago', 223, '1', 'ETO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4219, 'Penal-Debe Regional Corporation', 223, '1', 'PED', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4220, 'Point Fortin', 223, '1', 'PTF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4221, 'Port of Spain', 223, '1', 'POS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4222, 'Princes Town Regional Corporation', 223, '1', 'PRT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4223, 'Rio Claro-Mayaro Regional Corporation', 223, '1', 'MRC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4224, 'San Fernando', 223, '1', 'SFO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4225, 'San Juan-Laventille Regional Corporation', 223, '1', 'SJL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4226, 'Sangre Grande Regional Corporation', 223, '1', 'SGE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4227, 'Siparia Regional Corporation', 223, '1', 'SIP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4228, 'Tunapuna-Piarco Regional Corporation', 223, '1', 'TUP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4229, 'Western Tobago', 223, '1', 'WTO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4230, 'Ariana', 224, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4231, 'Ben Arous', 224, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4232, 'Bizerte', 224, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4233, 'Gabès', 224, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4234, 'Gafsa', 224, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4235, 'Jendouba', 224, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4236, 'Kairouan', 224, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4237, 'Kasserine', 224, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4238, 'Kassrine', 224, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4239, 'Kebili', 224, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4240, 'Kef', 224, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4241, 'Mahdia', 224, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4242, 'Manouba', 224, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4243, 'Medenine', 224, '1', '82', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4244, 'Monastir', 224, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4245, 'Nabeul', 224, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4246, 'Sfax', 224, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4247, 'Sidi Bouzid', 224, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4248, 'Siliana', 224, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4249, 'Sousse', 224, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4250, 'Tataouine', 224, '1', '83', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4251, 'Tozeur', 224, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4252, 'Tunis', 224, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4253, 'Zaghouan', 224, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4254, 'Adana', 225, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4255, 'Adıyaman', 225, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4256, 'Afyonkarahisar', 225, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4257, 'Ağrı', 225, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4258, 'Aksaray', 225, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4259, 'Amasya', 225, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4260, 'Ankara', 225, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4261, 'Antalya', 225, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4262, 'Ardahan', 225, '1', '75', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4263, 'Artvin', 225, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4264, 'Aydın', 225, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4265, 'Balıkesir', 225, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4266, 'Bartın', 225, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4267, 'Batman', 225, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4268, 'Bayburt', 225, '1', '69', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4269, 'Bilecik', 225, '1', '11', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4270, 'Bingöl', 225, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4271, 'Bitlis', 225, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4272, 'Bolu', 225, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4273, 'Burdur', 225, '1', '15', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4274, 'Bursa', 225, '1', '16', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4275, 'Çanakkale', 225, '1', '17', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4276, 'Çankırı', 225, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4277, 'Çorum', 225, '1', '19', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4278, 'Denizli', 225, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4279, 'Diyarbakır', 225, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4280, 'Düzce', 225, '1', '81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4281, 'Edirne', 225, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4282, 'Elazığ', 225, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4283, 'Erzincan', 225, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4284, 'Erzurum', 225, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4285, 'Eskişehir', 225, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4286, 'Gaziantep', 225, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4287, 'Giresun', 225, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4288, 'Gümüşhane', 225, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4289, 'Hakkâri', 225, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4290, 'Hatay', 225, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4291, 'Iğdır', 225, '1', '76', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4292, 'Isparta', 225, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4293, 'İstanbul', 225, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4294, 'İzmir', 225, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4295, 'Kahramanmaraş', 225, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4296, 'Karabük', 225, '1', '78', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4297, 'Karaman', 225, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4298, 'Kars', 225, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4299, 'Kastamonu', 225, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4300, 'Kayseri', 225, '1', '38', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4301, 'Kilis', 225, '1', '79', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4302, 'Kırıkkale', 225, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4303, 'Kırklareli', 225, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4304, 'Kırşehir', 225, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4305, 'Kocaeli', 225, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4306, 'Konya', 225, '1', '42', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4307, 'Kütahya', 225, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4308, 'Malatya', 225, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4309, 'Manisa', 225, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4310, 'Mardin', 225, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4311, 'Mersin', 225, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4312, 'Muğla', 225, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4313, 'Muş', 225, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4314, 'Nevşehir', 225, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4315, 'Niğde', 225, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4316, 'Ordu', 225, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4317, 'Osmaniye', 225, '1', '80', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4318, 'Rize', 225, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4319, 'Sakarya', 225, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4320, 'Samsun', 225, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4321, 'Şanlıurfa', 225, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4322, 'Siirt', 225, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4323, 'Sinop', 225, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4324, 'Sivas', 225, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4325, 'Şırnak', 225, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4326, 'Tekirdağ', 225, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4327, 'Tokat', 225, '1', '60', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4328, 'Trabzon', 225, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4329, 'Tunceli', 225, '1', '62', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4330, 'Uşak', 225, '1', '64', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4331, 'Van', 225, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4332, 'Yalova', 225, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4333, 'Yozgat', 225, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4334, 'Zonguldak', 225, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4335, 'Ahal Region', 226, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4336, 'Ashgabat', 226, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4337, 'Balkan Region', 226, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4338, 'Daşoguz Region', 226, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4339, 'Lebap Region', 226, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4340, 'Mary Region', 226, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4341, 'Funafuti', 228, '1', 'FUN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4342, 'Nanumanga', 228, '1', 'NMG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4343, 'Nanumea', 228, '1', 'NMA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4344, 'Niutao Island Council', 228, '1', 'NIT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4345, 'Nui', 228, '1', 'NUI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4346, 'Nukufetau', 228, '1', 'NKF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4347, 'Nukulaelae', 228, '1', 'NKL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4348, 'Vaitupu', 228, '1', 'VAI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4349, 'Abim District', 229, '1', '314', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4350, 'Adjumani District', 229, '1', '301', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4351, 'Agago District', 229, '1', '322', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4352, 'Alebtong District', 229, '1', '323', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4353, 'Amolatar District', 229, '1', '315', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4354, 'Amudat District', 229, '1', '324', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4355, 'Amuria District', 229, '1', '216', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4356, 'Amuru District', 229, '1', '316', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4357, 'Apac District', 229, '1', '302', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4358, 'Arua District', 229, '1', '303', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4359, 'Budaka District', 229, '1', '217', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4360, 'Bududa District', 229, '1', '218', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4361, 'Bugiri District', 229, '1', '201', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4362, 'Buhweju District', 229, '1', '420', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4363, 'Buikwe District', 229, '1', '117', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4364, 'Bukedea District', 229, '1', '219', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4365, 'Bukomansimbi District', 229, '1', '118', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4366, 'Bukwo District', 229, '1', '220', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4367, 'Bulambuli District', 229, '1', '225', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4368, 'Buliisa District', 229, '1', '416', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4369, 'Bundibugyo District', 229, '1', '401', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4370, 'Bunyangabu District', 229, '1', '430', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4371, 'Bushenyi District', 229, '1', '402', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4372, 'Busia District', 229, '1', '202', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4373, 'Butaleja District', 229, '1', '221', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4374, 'Butambala District', 229, '1', '119', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4375, 'Butebo District', 229, '1', '233', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4376, 'Buvuma District', 229, '1', '120', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4377, 'Buyende District', 229, '1', '226', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4378, 'Central Region', 229, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4379, 'Dokolo District', 229, '1', '317', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4380, 'Eastern Region', 229, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4381, 'Gomba District', 229, '1', '121', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4382, 'Gulu District', 229, '1', '304', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4383, 'Ibanda District', 229, '1', '417', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4384, 'Iganga District', 229, '1', '203', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4385, 'Isingiro District', 229, '1', '418', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4386, 'Jinja District', 229, '1', '204', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4387, 'Kaabong District', 229, '1', '318', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4388, 'Kabale District', 229, '1', '404', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4389, 'Kabarole District', 229, '1', '405', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4390, 'Kaberamaido District', 229, '1', '213', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4391, 'Kagadi District', 229, '1', '427', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4392, 'Kakumiro District', 229, '1', '428', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4393, 'Kalangala District', 229, '1', '101', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4394, 'Kaliro District', 229, '1', '222', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4395, 'Kalungu District', 229, '1', '122', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4396, 'Kampala District', 229, '1', '102', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4397, 'Kamuli District', 229, '1', '205', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4398, 'Kamwenge District', 229, '1', '413', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4399, 'Kanungu District', 229, '1', '414', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4400, 'Kapchorwa District', 229, '1', '206', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4401, 'Kasese District', 229, '1', '406', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4402, 'Katakwi District', 229, '1', '207', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4403, 'Kayunga District', 229, '1', '112', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4404, 'Kibaale District', 229, '1', '407', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4405, 'Kiboga District', 229, '1', '103', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4406, 'Kibuku District', 229, '1', '227', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4407, 'Kiruhura District', 229, '1', '419', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4408, 'Kiryandongo District', 229, '1', '421', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4409, 'Kisoro District', 229, '1', '408', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4410, 'Kitgum District', 229, '1', '305', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4411, 'Koboko District', 229, '1', '319', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4412, 'Kole District', 229, '1', '325', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4413, 'Kotido District', 229, '1', '306', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4414, 'Kumi District', 229, '1', '208', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4415, 'Kween District', 229, '1', '228', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4416, 'Kyankwanzi District', 229, '1', '123', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4417, 'Kyegegwa District', 229, '1', '422', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4418, 'Kyenjojo District', 229, '1', '415', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4419, 'Kyotera District', 229, '1', '125', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4420, 'Lamwo District', 229, '1', '326', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4421, 'Lira District', 229, '1', '307', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4422, 'Luuka District', 229, '1', '229', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4423, 'Luwero District', 229, '1', '104', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4424, 'Lwengo District', 229, '1', '124', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4425, 'Lyantonde District', 229, '1', '114', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4426, 'Manafwa District', 229, '1', '223', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4427, 'Maracha District', 229, '1', '320', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4428, 'Masaka District', 229, '1', '105', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4429, 'Masindi District', 229, '1', '409', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4430, 'Mayuge District', 229, '1', '214', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4431, 'Mbale District', 229, '1', '209', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4432, 'Mbarara District', 229, '1', '410', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4433, 'Mitooma District', 229, '1', '423', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4434, 'Mityana District', 229, '1', '115', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4435, 'Moroto District', 229, '1', '308', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4436, 'Moyo District', 229, '1', '309', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4437, 'Mpigi District', 229, '1', '106', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4438, 'Mubende District', 229, '1', '107', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4439, 'Mukono District', 229, '1', '108', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4440, 'Nakapiripirit District', 229, '1', '311', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4441, 'Nakaseke District', 229, '1', '116', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4442, 'Nakasongola District', 229, '1', '109', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4443, 'Namayingo District', 229, '1', '230', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4444, 'Namisindwa District', 229, '1', '234', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4445, 'Namutumba District', 229, '1', '224', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4446, 'Napak District', 229, '1', '327', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4447, 'Nebbi District', 229, '1', '310', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4448, 'Ngora District', 229, '1', '231', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4449, 'Northern Region', 229, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4450, 'Ntoroko District', 229, '1', '424', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4451, 'Ntungamo District', 229, '1', '411', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4452, 'Nwoya District', 229, '1', '328', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4453, 'Omoro District', 229, '1', '331', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4454, 'Otuke District', 229, '1', '329', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4455, 'Oyam District', 229, '1', '321', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4456, 'Pader District', 229, '1', '312', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4457, 'Pakwach District', 229, '1', '332', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4458, 'Pallisa District', 229, '1', '210', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4459, 'Rakai District', 229, '1', '110', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4460, 'Rubanda District', 229, '1', '429', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4461, 'Rubirizi District', 229, '1', '425', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4462, 'Rukiga District', 229, '1', '431', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4463, 'Rukungiri District', 229, '1', '412', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4464, 'Sembabule District', 229, '1', '111', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4465, 'Serere District', 229, '1', '232', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4466, 'Sheema District', 229, '1', '426', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4467, 'Sironko District', 229, '1', '215', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4468, 'Soroti District', 229, '1', '211', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4469, 'Tororo District', 229, '1', '212', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4470, 'Wakiso District', 229, '1', '113', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4471, 'Western Region', 229, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4472, 'Yumbe District', 229, '1', '313', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4473, 'Zombo District', 229, '1', '330', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4474, 'Autonomous Republic of Crimea', 230, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4475, 'Cherkaska oblast', 230, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4476, 'Chernihivska oblast', 230, '1', '74', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4477, 'Chernivetska oblast', 230, '1', '77', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4478, 'Dnipropetrovska oblast', 230, '1', '12', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4479, 'Donetska oblast', 230, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4480, 'Ivano-Frankivska oblast', 230, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4481, 'Kharkivska oblast', 230, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4482, 'Khersonska oblast', 230, '1', '65', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4483, 'Khmelnytska oblast', 230, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4484, 'Kirovohradska oblast', 230, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4485, 'Kyiv', 230, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4486, 'Kyivska oblast', 230, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4487, 'Luhanska oblast', 230, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4488, 'Lvivska oblast', 230, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4489, 'Mykolaivska oblast', 230, '1', '48', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4490, 'Odeska oblast', 230, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4491, 'Poltavska oblast', 230, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4492, 'Rivnenska oblast', 230, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4493, 'Sumska oblast', 230, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4494, 'Ternopilska oblast', 230, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4495, 'Vinnytska oblast', 230, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4496, 'Volynska oblast', 230, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4497, 'Zakarpatska Oblast', 230, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4498, 'Zaporizka oblast', 230, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4499, 'Zhytomyrska oblast', 230, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4500, 'Abu Dhabi Emirate', 231, '1', 'AZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4501, 'Ajman Emirate', 231, '1', 'AJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4502, 'Dubai', 231, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4503, 'Fujairah', 231, '1', 'FU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4504, 'Ras al-Khaimah', 231, '1', 'RK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4505, 'Sharjah Emirate', 231, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4506, 'Umm al-Quwain', 231, '1', 'UQ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4507, 'Aberdeen', 232, '1', 'ABE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4508, 'Aberdeenshire', 232, '1', 'ABD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4509, 'Angus', 232, '1', 'ANS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4510, 'Antrim', 232, '1', 'ANT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4511, 'Antrim and Newtownabbey', 232, '1', 'ANN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4512, 'Ards', 232, '1', 'ARD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4513, 'Ards and North Down', 232, '1', 'AND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4514, 'Argyll and Bute', 232, '1', 'AGB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4515, 'Armagh City and District Council', 232, '1', 'ARM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4516, 'Armagh, Banbridge and Craigavon', 232, '1', 'ABC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4517, 'Ascension Island', 232, '1', 'SH-AC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4518, 'Ballymena Borough', 232, '1', 'BLA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4519, 'Ballymoney', 232, '1', 'BLY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4520, 'Banbridge', 232, '1', 'BNB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4521, 'Barnsley', 232, '1', 'BNS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4522, 'Bath and North East Somerset', 232, '1', 'BAS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4523, 'Bedford', 232, '1', 'BDF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4524, 'Belfast district', 232, '1', 'BFS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4525, 'Birmingham', 232, '1', 'BIR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4526, 'Blackburn with Darwen', 232, '1', 'BBD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4527, 'Blackpool', 232, '1', 'BPL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4528, 'Blaenau Gwent County Borough', 232, '1', 'BGW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4529, 'Bolton', 232, '1', 'BOL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4530, 'Bournemouth', 232, '1', 'BMH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4531, 'Bracknell Forest', 232, '1', 'BRC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4532, 'Bradford', 232, '1', 'BRD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4533, 'Bridgend County Borough', 232, '1', 'BGE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4534, 'Brighton and Hove', 232, '1', 'BNH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4535, 'Buckinghamshire', 232, '1', 'BKM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4536, 'Bury', 232, '1', 'BUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4537, 'Caerphilly County Borough', 232, '1', 'CAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4538, 'Calderdale', 232, '1', 'CLD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4539, 'Cambridgeshire', 232, '1', 'CAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4540, 'Carmarthenshire', 232, '1', 'CMN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4541, 'Carrickfergus Borough Council', 232, '1', 'CKF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4542, 'Castlereagh', 232, '1', 'CSR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4543, 'Causeway Coast and Glens', 232, '1', 'CCG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4544, 'Central Bedfordshire', 232, '1', 'CBF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4545, 'Ceredigion', 232, '1', 'CGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4546, 'Cheshire East', 232, '1', 'CHE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4547, 'Cheshire West and Chester', 232, '1', 'CHW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4548, 'City and County of Cardiff', 232, '1', 'CRF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4549, 'City and County of Swansea', 232, '1', 'SWA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4550, 'City of Bristol', 232, '1', 'BST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4551, 'City of Derby', 232, '1', 'DER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4552, 'City of Kingston upon Hull', 232, '1', 'KHL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4553, 'City of Leicester', 232, '1', 'LCE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4554, 'City of London', 232, '1', 'LND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4555, 'City of Nottingham', 232, '1', 'NGM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4556, 'City of Peterborough', 232, '1', 'PTE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4557, 'City of Plymouth', 232, '1', 'PLY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4558, 'City of Portsmouth', 232, '1', 'POR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4559, 'City of Southampton', 232, '1', 'STH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4560, 'City of Stoke-on-Trent', 232, '1', 'STE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4561, 'City of Sunderland', 232, '1', 'SND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4562, 'City of Westminster', 232, '1', 'WSM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4563, 'City of Wolverhampton', 232, '1', 'WLV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4564, 'City of York', 232, '1', 'YOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4565, 'Clackmannanshire', 232, '1', 'CLK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4566, 'Coleraine Borough Council', 232, '1', 'CLR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4567, 'Conwy County Borough', 232, '1', 'CWY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4568, 'Cookstown District Council', 232, '1', 'CKT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4569, 'Cornwall', 232, '1', 'CON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4570, 'County Durham', 232, '1', 'DUR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4571, 'Coventry', 232, '1', 'COV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4572, 'Craigavon Borough Council', 232, '1', 'CGV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4573, 'Cumbria', 232, '1', 'CMA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4574, 'Darlington', 232, '1', 'DAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4575, 'Denbighshire', 232, '1', 'DEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4576, 'Derbyshire', 232, '1', 'DBY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4577, 'Derry City and Strabane', 232, '1', 'DRS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4578, 'Derry City Council', 232, '1', 'DRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4579, 'Devon', 232, '1', 'DEV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4580, 'Doncaster', 232, '1', 'DNC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4581, 'Dorset', 232, '1', 'DOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4582, 'Down District Council', 232, '1', 'DOW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4583, 'Dudley', 232, '1', 'DUD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4584, 'Dumfries and Galloway', 232, '1', 'DGY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4585, 'Dundee', 232, '1', 'DND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4586, 'Dungannon and South Tyrone Borough Council', 232, '1', 'DGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4587, 'East Ayrshire', 232, '1', 'EAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4588, 'East Dunbartonshire', 232, '1', 'EDU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4589, 'East Lothian', 232, '1', 'ELN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4590, 'East Renfrewshire', 232, '1', 'ERW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4591, 'East Riding of Yorkshire', 232, '1', 'ERY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4592, 'East Sussex', 232, '1', 'ESX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4593, 'Edinburgh', 232, '1', 'EDH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4594, 'England', 232, '1', 'ENG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4595, 'Essex', 232, '1', 'ESS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4596, 'Falkirk', 232, '1', 'FAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4597, 'Fermanagh and Omagh', 232, '1', 'FMO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4598, 'Fermanagh District Council', 232, '1', 'FER', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4599, 'Fife', 232, '1', 'FIF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4600, 'Flintshire', 232, '1', 'FLN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4601, 'Gateshead', 232, '1', 'GAT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4602, 'Glasgow', 232, '1', 'GLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4603, 'Gloucestershire', 232, '1', 'GLS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4604, 'Gwynedd', 232, '1', 'GWN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4605, 'Halton', 232, '1', 'HAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4606, 'Hampshire', 232, '1', 'HAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4607, 'Hartlepool', 232, '1', 'HPL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4608, 'Herefordshire', 232, '1', 'HEF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4609, 'Hertfordshire', 232, '1', 'HRT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4610, 'Highland', 232, '1', 'HLD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4611, 'Inverclyde', 232, '1', 'IVC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4612, 'Isle of Wight', 232, '1', 'IOW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4613, 'Isles of Scilly', 232, '1', 'IOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4614, 'Kent', 232, '1', 'KEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4615, 'Kirklees', 232, '1', 'KIR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4616, 'Knowsley', 232, '1', 'KWL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4617, 'Lancashire', 232, '1', 'LAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4618, 'Larne Borough Council', 232, '1', 'LRN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4619, 'Leeds', 232, '1', 'LDS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4620, 'Leicestershire', 232, '1', 'LEC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4621, 'Limavady Borough Council', 232, '1', 'LMV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4622, 'Lincolnshire', 232, '1', 'LIN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4623, 'Lisburn and Castlereagh', 232, '1', 'LBC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4624, 'Lisburn City Council', 232, '1', 'LSB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4625, 'Liverpool', 232, '1', 'LIV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4626, 'London Borough of Barking and Dagenham', 232, '1', 'BDG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4627, 'London Borough of Barnet', 232, '1', 'BNE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4628, 'London Borough of Bexley', 232, '1', 'BEX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4629, 'London Borough of Brent', 232, '1', 'BEN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4630, 'London Borough of Bromley', 232, '1', 'BRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4631, 'London Borough of Camden', 232, '1', 'CMD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4632, 'London Borough of Croydon', 232, '1', 'CRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4633, 'London Borough of Ealing', 232, '1', 'EAL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4634, 'London Borough of Enfield', 232, '1', 'ENF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4635, 'London Borough of Hackney', 232, '1', 'HCK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4636, 'London Borough of Hammersmith and Fulham', 232, '1', 'HMF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4637, 'London Borough of Haringey', 232, '1', 'HRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4638, 'London Borough of Harrow', 232, '1', 'HRW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4639, 'London Borough of Havering', 232, '1', 'HAV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4640, 'London Borough of Hillingdon', 232, '1', 'HIL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4641, 'London Borough of Hounslow', 232, '1', 'HNS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4642, 'London Borough of Islington', 232, '1', 'ISL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4643, 'London Borough of Lambeth', 232, '1', 'LBH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4644, 'London Borough of Lewisham', 232, '1', 'LEW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4645, 'London Borough of Merton', 232, '1', 'MRT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4646, 'London Borough of Newham', 232, '1', 'NWM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4647, 'London Borough of Redbridge', 232, '1', 'RDB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4648, 'London Borough of Richmond upon Thames', 232, '1', 'RIC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4649, 'London Borough of Southwark', 232, '1', 'SWK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4650, 'London Borough of Sutton', 232, '1', 'STN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4651, 'London Borough of Tower Hamlets', 232, '1', 'TWH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4652, 'London Borough of Waltham Forest', 232, '1', 'WFT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4653, 'London Borough of Wandsworth', 232, '1', 'WND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4654, 'Magherafelt District Council', 232, '1', 'MFT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4655, 'Manchester', 232, '1', 'MAN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4656, 'Medway', 232, '1', 'MDW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4657, 'Merthyr Tydfil County Borough', 232, '1', 'MTY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4658, 'Metropolitan Borough of Wigan', 232, '1', 'WGN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4659, 'Mid and East Antrim', 232, '1', 'MEA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4660, 'Mid Ulster', 232, '1', 'MUL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4661, 'Middlesbrough', 232, '1', 'MDB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4662, 'Midlothian', 232, '1', 'MLN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4663, 'Milton Keynes', 232, '1', 'MIK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4664, 'Monmouthshire', 232, '1', 'MON', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4665, 'Moray', 232, '1', 'MRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4666, 'Moyle District Council', 232, '1', 'MYL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4667, 'Neath Port Talbot County Borough', 232, '1', 'NTL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4668, 'Newcastle upon Tyne', 232, '1', 'NET', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4669, 'Newport', 232, '1', 'NWP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4670, 'Newry and Mourne District Council', 232, '1', 'NYM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4671, 'Newry, Mourne and Down', 232, '1', 'NMD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4672, 'Newtownabbey Borough Council', 232, '1', 'NTA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4673, 'Norfolk', 232, '1', 'NFK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4674, 'North Ayrshire', 232, '1', 'NAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41');
INSERT INTO `country_states` (`id`, `name`, `country_id`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(4675, 'North Down Borough Council', 232, '1', 'NDN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4676, 'North East Lincolnshire', 232, '1', 'NEL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4677, 'North Lanarkshire', 232, '1', 'NLK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4678, 'North Lincolnshire', 232, '1', 'NLN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4679, 'North Somerset', 232, '1', 'NSM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4680, 'North Tyneside', 232, '1', 'NTY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4681, 'North Yorkshire', 232, '1', 'NYK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4682, 'Northamptonshire', 232, '1', 'NTH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4683, 'Northern Ireland', 232, '1', 'NIR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4684, 'Northumberland', 232, '1', 'NBL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4685, 'Nottinghamshire', 232, '1', 'NTT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4686, 'Oldham', 232, '1', 'OLD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4687, 'Omagh District Council', 232, '1', 'OMH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4688, 'Orkney Islands', 232, '1', 'ORK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4689, 'Outer Hebrides', 232, '1', 'ELS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4690, 'Oxfordshire', 232, '1', 'OXF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4691, 'Pembrokeshire', 232, '1', 'PEM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4692, 'Perth and Kinross', 232, '1', 'PKN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4693, 'Poole', 232, '1', 'POL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4694, 'Powys', 232, '1', 'POW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4695, 'Reading', 232, '1', 'RDG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4696, 'Redcar and Cleveland', 232, '1', 'RCC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4697, 'Renfrewshire', 232, '1', 'RFW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4698, 'Rhondda Cynon Taf', 232, '1', 'RCT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4699, 'Rochdale', 232, '1', 'RCH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4700, 'Rotherham', 232, '1', 'ROT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4701, 'Royal Borough of Greenwich', 232, '1', 'GRE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4702, 'Royal Borough of Kensington and Chelsea', 232, '1', 'KEC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4703, 'Royal Borough of Kingston upon Thames', 232, '1', 'KTT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4704, 'Rutland', 232, '1', 'RUT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4705, 'Saint Helena', 232, '1', 'SH-HL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4706, 'Salford', 232, '1', 'SLF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4707, 'Sandwell', 232, '1', 'SAW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4708, 'Scotland', 232, '1', 'SCT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4709, 'Scottish Borders', 232, '1', 'SCB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4710, 'Sefton', 232, '1', 'SFT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4711, 'Sheffield', 232, '1', 'SHF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4712, 'Shetland Islands', 232, '1', 'ZET', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4713, 'Shropshire', 232, '1', 'SHR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4714, 'Slough', 232, '1', 'SLG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4715, 'Solihull', 232, '1', 'SOL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4716, 'Somerset', 232, '1', 'SOM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4717, 'South Ayrshire', 232, '1', 'SAY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4718, 'South Gloucestershire', 232, '1', 'SGC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4719, 'South Lanarkshire', 232, '1', 'SLK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4720, 'South Tyneside', 232, '1', 'STY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4721, 'Southend-on-Sea', 232, '1', 'SOS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4722, 'St Helens', 232, '1', 'SHN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4723, 'Staffordshire', 232, '1', 'STS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4724, 'Stirling', 232, '1', 'STG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4725, 'Stockport', 232, '1', 'SKP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4726, 'Stockton-on-Tees', 232, '1', 'STT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4727, 'Strabane District Council', 232, '1', 'STB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4728, 'Suffolk', 232, '1', 'SFK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4729, 'Surrey', 232, '1', 'SRY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4730, 'Swindon', 232, '1', 'SWD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4731, 'Tameside', 232, '1', 'TAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4732, 'Telford and Wrekin', 232, '1', 'TFW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4733, 'Thurrock', 232, '1', 'THR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4734, 'Torbay', 232, '1', 'TOB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4735, 'Torfaen', 232, '1', 'TOF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4736, 'Trafford', 232, '1', 'TRF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4737, 'United Kingdom', 232, '1', 'UKM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4738, 'Vale of Glamorgan', 232, '1', 'VGL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4739, 'Wakefield', 232, '1', 'WKF', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4740, 'Wales', 232, '1', 'WLS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4741, 'Walsall', 232, '1', 'WLL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4742, 'Warrington', 232, '1', 'WRT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4743, 'Warwickshire', 232, '1', 'WAR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4744, 'West Berkshire', 232, '1', 'WBK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4745, 'West Dunbartonshire', 232, '1', 'WDU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4746, 'West Lothian', 232, '1', 'WLN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4747, 'West Sussex', 232, '1', 'WSX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4748, 'Wiltshire', 232, '1', 'WIL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4749, 'Windsor and Maidenhead', 232, '1', 'WNM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4750, 'Wirral', 232, '1', 'WRL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4751, 'Wokingham', 232, '1', 'WOK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4752, 'Worcestershire', 232, '1', 'WOR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4753, 'Wrexham County Borough', 232, '1', 'WRX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4754, 'Alabama', 233, '1', 'AL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4755, 'Alaska', 233, '1', 'AK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4756, 'American Samoa', 233, '1', 'AS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4757, 'Arizona', 233, '1', 'AZ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4758, 'Arkansas', 233, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4759, 'Baker Island', 233, '1', 'UM-81', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4760, 'California', 233, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4761, 'Colorado', 233, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4762, 'Connecticut', 233, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4763, 'Delaware', 233, '1', 'DE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4764, 'District of Columbia', 233, '1', 'DC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4765, 'Florida', 233, '1', 'FL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4766, 'Georgia', 233, '1', 'GA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4767, 'Guam', 233, '1', 'GU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4768, 'Hawaii', 233, '1', 'HI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4769, 'Howland Island', 233, '1', 'UM-84', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4770, 'Idaho', 233, '1', 'ID', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4771, 'Illinois', 233, '1', 'IL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4772, 'Indiana', 233, '1', 'IN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4773, 'Iowa', 233, '1', 'IA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4774, 'Jarvis Island', 233, '1', 'UM-86', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4775, 'Johnston Atoll', 233, '1', 'UM-67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4776, 'Kansas', 233, '1', 'KS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4777, 'Kentucky', 233, '1', 'KY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4778, 'Kingman Reef', 233, '1', 'UM-89', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4779, 'Louisiana', 233, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4780, 'Maine', 233, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4781, 'Maryland', 233, '1', 'MD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4782, 'Massachusetts', 233, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4783, 'Michigan', 233, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4784, 'Midway Atoll', 233, '1', 'UM-71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4785, 'Minnesota', 233, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4786, 'Mississippi', 233, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4787, 'Missouri', 233, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4788, 'Montana', 233, '1', 'MT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4789, 'Navassa Island', 233, '1', 'UM-76', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4790, 'Nebraska', 233, '1', 'NE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4791, 'Nevada', 233, '1', 'NV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4792, 'New Hampshire', 233, '1', 'NH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4793, 'New Jersey', 233, '1', 'NJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4794, 'New Mexico', 233, '1', 'NM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4795, 'New York', 233, '1', 'NY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4796, 'North Carolina', 233, '1', 'NC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4797, 'North Dakota', 233, '1', 'ND', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4798, 'Northern Mariana Islands', 233, '1', 'MP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4799, 'Ohio', 233, '1', 'OH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4800, 'Oklahoma', 233, '1', 'OK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4801, 'Oregon', 233, '1', 'OR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4802, 'Palmyra Atoll', 233, '1', 'UM-95', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4803, 'Pennsylvania', 233, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4804, 'Puerto Rico', 233, '1', 'PR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4805, 'Rhode Island', 233, '1', 'RI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4806, 'South Carolina', 233, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4807, 'South Dakota', 233, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4808, 'Tennessee', 233, '1', 'TN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4809, 'Texas', 233, '1', 'TX', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4810, 'United States Minor Outlying Islands', 233, '1', 'UM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4811, 'United States Virgin Islands', 233, '1', 'VI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4812, 'Utah', 233, '1', 'UT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4813, 'Vermont', 233, '1', 'VT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4814, 'Virginia', 233, '1', 'VA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4815, 'Wake Island', 233, '1', 'UM-79', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4816, 'Washington', 233, '1', 'WA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4817, 'West Virginia', 233, '1', 'WV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4818, 'Wisconsin', 233, '1', 'WI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4819, 'Wyoming', 233, '1', 'WY', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4820, 'Artigas Department', 235, '1', 'AR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4821, 'Canelones Department', 235, '1', 'CA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4822, 'Cerro Largo Department', 235, '1', 'CL', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4823, 'Colonia Department', 235, '1', 'CO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4824, 'Durazno Department', 235, '1', 'DU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4825, 'Flores Department', 235, '1', 'FS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4826, 'Florida Department', 235, '1', 'FD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4827, 'Lavalleja Department', 235, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4828, 'Maldonado Department', 235, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4829, 'Montevideo Department', 235, '1', 'MO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4830, 'Paysandú Department', 235, '1', 'PA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4831, 'Río Negro Department', 235, '1', 'RN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4832, 'Rivera Department', 235, '1', 'RV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4833, 'Rocha Department', 235, '1', 'RO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4834, 'Salto Department', 235, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4835, 'San José Department', 235, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4836, 'Soriano Department', 235, '1', 'SO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4837, 'Tacuarembó Department', 235, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4838, 'Treinta y Tres Department', 235, '1', 'TT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4839, 'Andijan Region', 236, '1', 'AN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4840, 'Bukhara Region', 236, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4841, 'Fergana Region', 236, '1', 'FA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4842, 'Jizzakh Region', 236, '1', 'JI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4843, 'Karakalpakstan', 236, '1', 'QR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4844, 'Namangan Region', 236, '1', 'NG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4845, 'Navoiy Region', 236, '1', 'NW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4846, 'Qashqadaryo Region', 236, '1', 'QA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4847, 'Samarqand Region', 236, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4848, 'Sirdaryo Region', 236, '1', 'SI', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4849, 'Surxondaryo Region', 236, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4850, 'Tashkent', 236, '1', 'TK', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4851, 'Tashkent Region', 236, '1', 'TO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4852, 'Xorazm Region', 236, '1', 'XO', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4853, 'Malampa', 237, '1', 'MAP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4854, 'Penama', 237, '1', 'PAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4855, 'Sanma', 237, '1', 'SAM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4856, 'Shefa', 237, '1', 'SEE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4857, 'Tafea', 237, '1', 'TAE', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4858, 'Torba', 237, '1', 'TOB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4859, 'Amazonas', 239, '1', 'Z', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4860, 'Anzoátegui', 239, '1', 'B', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4861, 'Apure', 239, '1', 'C', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4862, 'Aragua', 239, '1', 'D', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4863, 'Barinas', 239, '1', 'E', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4864, 'Bolívar', 239, '1', 'F', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4865, 'Carabobo', 239, '1', 'G', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4866, 'Cojedes', 239, '1', 'H', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4867, 'Delta Amacuro', 239, '1', 'Y', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4868, 'Distrito Capital', 239, '1', 'A', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4869, 'Falcón', 239, '1', 'I', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4870, 'Federal Dependencies of Venezuela', 239, '1', 'W', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4871, 'Guárico', 239, '1', 'J', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4872, 'La Guaira', 239, '1', 'X', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4873, 'Lara', 239, '1', 'K', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4874, 'Mérida', 239, '1', 'L', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4875, 'Miranda', 239, '1', 'M', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4876, 'Monagas', 239, '1', 'N', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4877, 'Nueva Esparta', 239, '1', 'O', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4878, 'Portuguesa', 239, '1', 'P', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4879, 'Sucre', 239, '1', 'R', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4880, 'Táchira', 239, '1', 'S', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4881, 'Trujillo', 239, '1', 'T', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4882, 'Yaracuy', 239, '1', 'U', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4883, 'Zulia', 239, '1', 'V', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4884, 'An Giang', 240, '1', '44', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4885, 'Bà Rịa-Vũng Tàu', 240, '1', '43', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4886, 'Bắc Giang', 240, '1', '54', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4887, 'Bắc Kạn', 240, '1', '53', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4888, 'Bạc Liêu', 240, '1', '55', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4889, 'Bắc Ninh', 240, '1', '56', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4890, 'Bến Tre', 240, '1', '50', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4891, 'Bình Dương', 240, '1', '57', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4892, 'Bình Định', 240, '1', '31', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4893, 'Bình Phước', 240, '1', '58', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4894, 'Bình Thuận', 240, '1', '40', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4895, 'Cà Mau', 240, '1', '59', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4896, 'Cần Thơ', 240, '1', 'CT', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4897, 'Cao Bằng', 240, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4898, 'Đà Nẵng', 240, '1', 'DN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4899, 'Đắk Lắk', 240, '1', '33', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4900, 'Đắk Nông', 240, '1', '72', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4901, 'Điện Biên', 240, '1', '71', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4902, 'Đồng Nai', 240, '1', '39', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4903, 'Đồng Tháp', 240, '1', '45', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4904, 'Gia Lai', 240, '1', '30', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4905, 'Hà Giang', 240, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4906, 'Hà Nam', 240, '1', '63', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4907, 'Hà Nội', 240, '1', 'HN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4908, 'Hà Tĩnh', 240, '1', '23', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4909, 'Hải Dương', 240, '1', '61', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4910, 'Hải Phòng', 240, '1', 'HP', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4911, 'Hậu Giang', 240, '1', '73', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4912, 'Hồ Chí Minh', 240, '1', 'SG', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4913, 'Hòa Bình', 240, '1', '14', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4914, 'Hưng Yên', 240, '1', '66', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4915, 'Khánh Hòa', 240, '1', '34', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4916, 'Kiên Giang', 240, '1', '47', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4917, 'Kon Tum', 240, '1', '28', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4918, 'Lai Châu', 240, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4919, 'Lâm Đồng', 240, '1', '35', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4920, 'Lạng Sơn', 240, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4921, 'Lào Cai', 240, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4922, 'Long An', 240, '1', '41', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4923, 'Nam Định', 240, '1', '67', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4924, 'Nghệ An', 240, '1', '22', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4925, 'Ninh Bình', 240, '1', '18', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4926, 'Ninh Thuận', 240, '1', '36', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4927, 'Phú Thọ', 240, '1', '68', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4928, 'Phú Yên', 240, '1', '32', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4929, 'Quảng Bình', 240, '1', '24', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4930, 'Quảng Nam', 240, '1', '27', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4931, 'Quảng Ngãi', 240, '1', '29', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4932, 'Quảng Ninh', 240, '1', '13', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4933, 'Quảng Trị', 240, '1', '25', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4934, 'Sóc Trăng', 240, '1', '52', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4935, 'Sơn La', 240, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4936, 'Tây Ninh', 240, '1', '37', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4937, 'Thái Bình', 240, '1', '20', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4938, 'Thái Nguyên', 240, '1', '69', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4939, 'Thanh Hóa', 240, '1', '21', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4940, 'Thừa Thiên-Huế', 240, '1', '26', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4941, 'Tiền Giang', 240, '1', '46', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4942, 'Trà Vinh', 240, '1', '51', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4943, 'Tuyên Quang', 240, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4944, 'Vĩnh Long', 240, '1', '49', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4945, 'Vĩnh Phúc', 240, '1', '70', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4946, 'Yên Bái', 240, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4947, 'Saint Croix', 242, '1', 'SC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4948, 'Saint John', 242, '1', 'SJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4949, 'Saint Thomas', 242, '1', 'ST', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4950, 'Adan', 245, '1', 'AD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4951, 'Amran', 245, '1', 'AM', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4952, 'Abyan', 245, '1', 'AB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4953, 'Al Bayda\'', 245, '1', 'BA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4954, 'Al Hudaydah', 245, '1', 'HU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4955, 'Al Jawf', 245, '1', 'JA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4956, 'Al Mahrah', 245, '1', 'MR', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4957, 'Al Mahwit', 245, '1', 'MW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4958, 'Dhamar', 245, '1', 'DH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4959, 'Hadhramaut', 245, '1', 'HD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4960, 'Hajjah', 245, '1', 'HJ', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4961, 'Ibb', 245, '1', 'IB', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4962, 'Lahij', 245, '1', 'LA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4963, 'Ma\'rib', 245, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4964, 'Raymah', 245, '1', 'RA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4965, 'Saada', 245, '1', 'SD', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4966, 'Sana\'a', 245, '1', 'SN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4967, 'Sana\'a', 245, '1', 'SA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4968, 'Shabwah', 245, '1', 'SH', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4969, 'Socotra', 245, '1', 'SU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4970, 'Ta\'izz', 245, '1', 'TA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4971, 'Central Province', 246, '1', '02', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4972, 'Copperbelt Province', 246, '1', '08', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4973, 'Eastern Province', 246, '1', '03', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4974, 'Luapula Province', 246, '1', '04', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4975, 'Lusaka Province', 246, '1', '09', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4976, 'Muchinga Province', 246, '1', '10', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4977, 'Northern Province', 246, '1', '05', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4978, 'Northwestern Province', 246, '1', '06', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4979, 'Southern Province', 246, '1', '07', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4980, 'Western Province', 246, '1', '01', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4981, 'Bulawayo Province', 247, '1', 'BU', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4982, 'Harare Province', 247, '1', 'HA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4983, 'Manicaland', 247, '1', 'MA', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4984, 'Mashonaland Central Province', 247, '1', 'MC', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4985, 'Mashonaland East Province', 247, '1', 'ME', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4986, 'Mashonaland West Province', 247, '1', 'MW', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4987, 'Masvingo Province', 247, '1', 'MV', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4988, 'Matabeleland North Province', 247, '1', 'MN', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4989, 'Matabeleland South Province', 247, '1', 'MS', '2023-07-03 10:17:41', '2023-07-03 10:17:41'),
(4990, 'Midlands Province', 247, '1', 'MI', '2023-07-03 10:17:41', '2023-07-03 10:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `offer_type` int(11) NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `max_quantity` int(11) NOT NULL DEFAULT 0,
  `expired_date` varchar(191) NOT NULL,
  `apply_qty` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `used_status` varchar(255) DEFAULT '0',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `offer_type`, `discount`, `max_quantity`, `expired_date`, `apply_qty`, `status`, `used_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'New Year', 'newyear2022', 1, 20, 7, '2022-01-31', 7, 1, '0', NULL, '2022-01-30 09:55:06', '2023-08-30 07:32:49'),
(2, 'testss', 'testest', 1, 20, 10, '2023-09-25', 0, 1, '1', 306, '2023-08-25 14:26:33', '2023-08-30 13:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `code` varchar(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AFA', 'Afghan Afghani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ALL', 'Albanian Lek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'DZD', 'Algerian Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'AOA', 'Angolan Kwanza', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ARS', 'Argentine Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'AMD', 'Armenian Dram', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'AWG', 'Aruban Florin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'AUD', 'Australian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'AZN', 'Azerbaijani Manat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'BSD', 'Bahamian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'BHD', 'Bahraini Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'BDT', 'Bangladeshi Taka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'BBD', 'Barbadian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'BYR', 'Belarusian Ruble', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'BEF', 'Belgian Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'BZD', 'Belize Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'BMD', 'Bermudan Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'BTN', 'Bhutanese Ngultrum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'BTC', 'Bitcoin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'BOB', 'Bolivian Boliviano', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'BAM', 'Bosnia-Herzegovina Convertible Mark', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'BWP', 'Botswanan Pula', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'BRL', 'Brazilian Real', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'GBP', 'British Pound Sterling', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'BND', 'Brunei Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'BGN', 'Bulgarian Lev', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'BIF', 'Burundian Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'KHR', 'Cambodian Riel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'CAD', 'Canadian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'CVE', 'Cape Verdean Escudo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'KYD', 'Cayman Islands Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'XOF', 'CFA Franc BCEAO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'XAF', 'CFA Franc BEAC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'XPF', 'CFP Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'CLP', 'Chilean Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'CNY', 'Chinese Yuan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'COP', 'Colombian Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'KMF', 'Comorian Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'CDF', 'Congolese Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'CRC', 'Costa Rican ColÃ³n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'HRK', 'Croatian Kuna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'CUC', 'Cuban Convertible Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'CZK', 'Czech Republic Koruna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'DKK', 'Danish Krone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'DJF', 'Djiboutian Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'DOP', 'Dominican Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'XCD', 'East Caribbean Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'EGP', 'Egyptian Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'ERN', 'Eritrean Nakfa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'EEK', 'Estonian Kroon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'ETB', 'Ethiopian Birr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'EUR', 'Euro', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'FKP', 'Falkland Islands Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'FJD', 'Fijian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'GMD', 'Gambian Dalasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'GEL', 'Georgian Lari', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'DEM', 'German Mark', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'GHS', 'Ghanaian Cedi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'GIP', 'Gibraltar Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'GRD', 'Greek Drachma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'GTQ', 'Guatemalan Quetzal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'GNF', 'Guinean Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'GYD', 'Guyanaese Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'HTG', 'Haitian Gourde', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'HNL', 'Honduran Lempira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'HKD', 'Hong Kong Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'HUF', 'Hungarian Forint', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'ISK', 'Icelandic KrÃ³na', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'INR', 'Indian Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'IDR', 'Indonesian Rupiah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'IRR', 'Iranian Rial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'IQD', 'Iraqi Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'ILS', 'Israeli New Sheqel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'ITL', 'Italian Lira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'JMD', 'Jamaican Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'JPY', 'Japanese Yen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'JOD', 'Jordanian Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'KZT', 'Kazakhstani Tenge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'KES', 'Kenyan Shilling', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'KWD', 'Kuwaiti Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'KGS', 'Kyrgystani Som', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'LAK', 'Laotian Kip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'LVL', 'Latvian Lats', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'LBP', 'Lebanese Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'LSL', 'Lesotho Loti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'LRD', 'Liberian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'LYD', 'Libyan Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'LTL', 'Lithuanian Litas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'MOP', 'Macanese Pataca', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'MKD', 'Macedonian Denar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'MGA', 'Malagasy Ariary', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'MWK', 'Malawian Kwacha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'MYR', 'Malaysian Ringgit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'MVR', 'Maldivian Rufiyaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'MRO', 'Mauritanian Ouguiya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'MUR', 'Mauritian Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'MXN', 'Mexican Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'MDL', 'Moldovan Leu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'MNT', 'Mongolian Tugrik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'MAD', 'Moroccan Dirham', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'MZM', 'Mozambican Metical', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'MMK', 'Myanmar Kyat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'NAD', 'Namibian Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'NPR', 'Nepalese Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'ANG', 'Netherlands Antillean Guilder', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'TWD', 'New Taiwan Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'NZD', 'New Zealand Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'NIO', 'Nicaraguan CÃ³rdoba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'NGN', 'Nigerian Naira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'KPW', 'North Korean Won', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'NOK', 'Norwegian Krone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'OMR', 'Omani Rial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'PKR', 'Pakistani Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'PAB', 'Panamanian Balboa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'PGK', 'Papua New Guinean Kina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'PYG', 'Paraguayan Guarani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'PEN', 'Peruvian Nuevo Sol', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'PHP', 'Philippine Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'PLN', 'Polish Zloty', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'QAR', 'Qatari Rial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'RON', 'Romanian Leu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'RUB', 'Russian Ruble', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'RWF', 'Rwandan Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'SVC', 'Salvadoran ColÃ³n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'WST', 'Samoan Tala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'SAR', 'Saudi Riyal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'RSD', 'Serbian Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'SCR', 'Seychellois Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'SLL', 'Sierra Leonean Leone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'SGD', 'Singapore Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'SKK', 'Slovak Koruna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'SBD', 'Solomon Islands Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'SOS', 'Somali Shilling', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'ZAR', 'South African Rand', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'KRW', 'South Korean Won', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'XDR', 'Special Drawing Rights', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'LKR', 'Sri Lankan Rupee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'SHP', 'St. Helena Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'SDG', 'Sudanese Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'SRD', 'Surinamese Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'SZL', 'Swazi Lilangeni', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'SEK', 'Swedish Krona', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'CHF', 'Swiss Franc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'SYP', 'Syrian Pound', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'STD', 'São Tomé and Príncipe Dobra', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'TJS', 'Tajikistani Somoni', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'TZS', 'Tanzanian Shilling', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'THB', 'Thai Baht', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'TOP', 'Tongan pa\'anga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'TTD', 'Trinidad & Tobago Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'TND', 'Tunisian Dinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'TRY', 'Turkish Lira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'TMT', 'Turkmenistani Manat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'UGX', 'Ugandan Shilling', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'UAH', 'Ukrainian Hryvnia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'AED', 'United Arab Emirates Dirham', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'UYU', 'Uruguayan Peso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'USD', 'US Dollar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'UZS', 'Uzbekistan Som', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'VUV', 'Vanuatu Vatu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'VEF', 'Venezuelan BolÃ­var', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'VND', 'Vietnamese Dong', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'YER', 'Yemeni Rial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'ZMK', 'Zambian Kwacha', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `currency_countries`
--

CREATE TABLE `currency_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `currency_countries`
--

INSERT INTO `currency_countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Andorra', 'AD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Afghanistan', 'AF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Åland Islands', 'AX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Albania', 'AL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Algeria', 'DZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'American Samoa', 'AS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Angola', 'AO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Anguilla', 'AI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Antarctica', 'AQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Antigua and Barbuda', 'AG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Argentina', 'AR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Armenia', 'AM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Aruba', 'AW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Australia', 'AU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Austria', 'AT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Azerbaijan', 'AZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Bahamas', 'BS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Bahrain', 'BH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Bangladesh', 'BD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Barbados', 'BB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Belarus', 'BY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Belgium', 'BE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Belize', 'BZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Benin', 'BJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Bermuda', 'BM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Bhutan', 'BT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bolivia (Plurinational State of)', 'BO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Bosnia and Herzegovina', 'BA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Botswana', 'BW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Bouvet Island', 'BV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Brazil', 'BR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'British Indian Ocean Territory', 'IO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Brunei Darussalam', 'BN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Bulgaria', 'BG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Burkina Faso', 'BF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Burundi', 'BI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Cabo Verde', 'CV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Cambodia', 'KH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Cameroon', 'CM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Canada', 'CA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Cayman Islands', 'KY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Central African Republic', 'CF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Chad', 'TD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Chile', 'CL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'China', 'CN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Christmas Island', 'CX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Cocos (Keeling) Islands', 'CC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Colombia', 'CO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Comoros', 'KM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Congo', 'CG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Congo (Democratic Republic of the)', 'CD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Cook Islands', 'CK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Costa Rica', 'CR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Côte d\'Ivoire', 'CI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Croatia', 'HR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Cuba', 'CU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Curaçao', 'CW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Cyprus', 'CY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Czech Republic', 'CZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Denmark', 'DK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Djibouti', 'DJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Dominica', 'DM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Dominican Republic', 'DO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Ecuador', 'EC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Egypt', 'EG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'El Salvador', 'SV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Equatorial Guinea', 'GQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Eritrea', 'ER', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Estonia', 'EE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Ethiopia', 'ET', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Falkland Islands (Malvinas)', 'FK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Faroe Islands', 'FO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Fiji', 'FJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Finland', 'FI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'France', 'FR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'French Guiana', 'GF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'French Polynesia', 'PF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'French Southern Territories', 'TF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Gabon', 'GA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Gambia', 'GM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Georgia', 'GE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Germany', 'DE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Ghana', 'GH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Gibraltar', 'GI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Greece', 'GR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Greenland', 'GL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Grenada', 'GD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Guadeloupe', 'GP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Guam', 'GU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Guatemala', 'GT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Guernsey', 'GG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Guinea', 'GN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Guinea-Bissau', 'GW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Guyana', 'GY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Haiti', 'HT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Heard Island and McDonald Islands', 'HM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Holy See', 'VA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Honduras', 'HN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Hong Kong', 'HK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Hungary', 'HU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Iceland', 'IS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'India', 'IN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Indonesia', 'ID', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Iran (Islamic Republic of)', 'IR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Iraq', 'IQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Ireland', 'IE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Isle of Man', 'IM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Israel', 'IL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Italy', 'IT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Jamaica', 'JM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Japan', 'JP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Jersey', 'JE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Jordan', 'JO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Kazakhstan', 'KZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Kenya', 'KE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Kiribati', 'KI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Korea (Democratic People\'s Republic of)', 'KP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Korea (Republic of)', 'KR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Kuwait', 'KW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Kyrgyzstan', 'KG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Lao People\'s Democratic Republic', 'LA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Latvia', 'LV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Lebanon', 'LB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Lesotho', 'LS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Liberia', 'LR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Libya', 'LY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Liechtenstein', 'LI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Lithuania', 'LT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Luxembourg', 'LU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Macao', 'MO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Macedonia (the former Yugoslav Republic of)', 'MK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Madagascar', 'MG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Malawi', 'MW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Malaysia', 'MY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Maldives', 'MV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Mali', 'ML', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Malta', 'MT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Marshall Islands', 'MH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Martinique', 'MQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Mauritania', 'MR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Mauritius', 'MU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Mayotte', 'YT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Mexico', 'MX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Micronesia (Federated States of)', 'FM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Moldova (Republic of)', 'MD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Monaco', 'MC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Mongolia', 'MN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Montenegro', 'ME', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Montserrat', 'MS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Morocco', 'MA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Mozambique', 'MZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Myanmar', 'MM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Namibia', 'NA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Nauru', 'NR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Nepal', 'NP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Netherlands', 'NL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'New Caledonia', 'NC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'New Zealand', 'NZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Nicaragua', 'NI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Niger', 'NE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Nigeria', 'NG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Niue', 'NU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Norfolk Island', 'NF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Northern Mariana Islands', 'MP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Norway', 'NO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Oman', 'OM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Pakistan', 'PK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Palau', 'PW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Palestine, State of', 'PS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Panama', 'PA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Papua New Guinea', 'PG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Paraguay', 'PY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Peru', 'PE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Philippines', 'PH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Pitcairn', 'PN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Poland', 'PL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Portugal', 'PT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Puerto Rico', 'PR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Qatar', 'QA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Réunion', 'RE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Romania', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Russian Federation', 'RU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Rwanda', 'RW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Saint Barthélemy', 'BL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Saint Kitts and Nevis', 'KN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Saint Lucia', 'LC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Saint Martin (French part)', 'MF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Saint Pierre and Miquelon', 'PM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Saint Vincent and the Grenadines', 'VC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Samoa', 'WS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'San Marino', 'SM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Sao Tome and Principe', 'ST', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Saudi Arabia', 'SA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Senegal', 'SN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Serbia', 'RS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Seychelles', 'SC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Sierra Leone', 'SL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Singapore', 'SG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Sint Maarten (Dutch part)', 'SX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Slovakia', 'SK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Slovenia', 'SI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Solomon Islands', 'SB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Somalia', 'SO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'South Africa', 'ZA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'South Georgia and the South Sandwich Islands', 'GS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'South Sudan', 'SS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Spain', 'ES', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Sri Lanka', 'LK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Sudan', 'SD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'Suriname', 'SR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'Svalbard and Jan Mayen', 'SJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'Swaziland', 'SZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'Sweden', 'SE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'Switzerland', 'CH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'Syrian Arab Republic', 'SY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'Taiwan, Province of China', 'TW', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'Tajikistan', 'TJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'Tanzania, United Republic of', 'TZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'Thailand', 'TH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'Timor-Leste', 'TL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'Togo', 'TG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'Tokelau', 'TK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'Tonga', 'TO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'Trinidad and Tobago', 'TT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'Tunisia', 'TN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'Turkey', 'TR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'Turkmenistan', 'TM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'Turks and Caicos Islands', 'TC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'Tuvalu', 'TV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'Uganda', 'UG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'Ukraine', 'UA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'United Arab Emirates', 'AE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'United Kingdom of Great Britain and Northern Ireland', 'GB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 'United States Minor Outlying Islands', 'UM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 'United States of America', 'US', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 'Uruguay', 'UY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 'Uzbekistan', 'UZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 'Vanuatu', 'VU', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 'Venezuela (Bolivarian Republic of)', 'VE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 'Viet Nam', 'VN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 'Virgin Islands (British)', 'VG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 'Virgin Islands (U.S.)', 'VI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'Wallis and Futuna', 'WF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 'Western Sahara', 'EH', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 'Yemen', 'YE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 'Zambia', 'ZM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 'Zimbabwe', 'ZW', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `localted_usa` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `bussiness_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_supports`
--

INSERT INTO `customer_supports` (`id`, `localted_usa`, `subject`, `bussiness_name`, `email`, `first_name`, `last_name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Yes', 'Sales and Orders', 'Demetria Soto', 'jepuqeqeta@mailinator.com', 'Deborah', 'Petty', '+1 (507) 344-4035', 'Quis repudiandae qui', '2023-05-04 12:12:21', '2023-05-04 12:12:21'),
(5, 'No', 'Sales and Orders', 'Medge Best', 'qepy@mailinator.com', 'Drew', 'Bond', '+1 (883) 193-5166', 'Quibusdam officiis c', '2023-05-04 12:38:47', '2023-05-04 12:38:47'),
(6, 'Yes', 'Sales and Orders', 'Joelle Hood', 'cida@mailinator.com', 'Gregory', 'Solomon', '+1 (186) 395-9776', 'Eum doloremque tempo', '2023-05-10 14:26:58', '2023-05-10 14:26:58'),
(7, 'Yes', 'Sales and Orders', 'Dorian Newman', 'zybyqa@mailinator.com', 'Lesley', 'Cameron', '+1 (861) 956-8506', 'Iste in dolor volupt', '2023-05-10 14:33:51', '2023-05-10 14:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `custom_pages`
--

CREATE TABLE `custom_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` longtext NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_pages`
--

INSERT INTO `custom_pages` (`id`, `page_name`, `slug`, `description`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Custom Page One', 'custom-page-one', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 'uploads/custom-images/custom-page-2022-02-11-03-39-42-1795.jpg', 1, '2022-01-30 12:33:25', '2022-02-11 09:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `custom_paginations`
--

CREATE TABLE `custom_paginations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_paginations`
--

INSERT INTO `custom_paginations` (`id`, `page_name`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'Blog Page', 6, NULL, '2022-02-07 08:39:56'),
(2, 'Product Page', 12, NULL, '2022-01-30 10:23:33'),
(3, 'Brand Page', 8, NULL, '2022-02-07 02:14:01'),
(4, 'Blog Comment', 10, NULL, '2022-02-07 02:14:01'),
(5, 'Product Review', 10, NULL, '2022-01-11 19:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `email_configurations`
--

CREATE TABLE `email_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_type` tinyint(4) DEFAULT NULL,
  `mail_host` varchar(255) DEFAULT NULL,
  `mail_port` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_password` varchar(255) DEFAULT NULL,
  `smtp_username` varchar(255) DEFAULT NULL,
  `smtp_password` varchar(255) DEFAULT NULL,
  `mail_encryption` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_configurations`
--

INSERT INTO `email_configurations` (`id`, `mail_type`, `mail_host`, `mail_port`, `email`, `email_password`, `smtp_username`, `smtp_password`, `mail_encryption`, `created_at`, `updated_at`) VALUES
(1, 2, 'ranglerzclients.pw', '587', 'noreply@ranglerzclients.pw', 'mary+pass@', 'noreply@ranglerzclients.pw', '!qzMdY?}2YV$', 'tls', NULL, '2023-05-04 07:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Password Reset', 'Password Reset', '<h4>Dear <b>{{name}}</b>,</h4>\r\n    <p>Do you want to reset your password? Please Click the following link and Reset Your Password.</p>', NULL, '2021-12-09 10:06:57'),
(2, 'Contact Email', 'Contact Email', '<p>Name: <b>{{name}}</b></p><p>\r\n\r\nEmail: <b>{{email}}</b></p><p>\r\n\r\nPhone: <b>{{phone}}</b></p><p><span style=\"background-color: transparent;\">Subject: <b>{{subject}}</b></span></p><p>\r\n\r\nMessage: <b>{{message}}</b></p>', NULL, '2021-12-10 23:44:34'),
(3, 'Subscribe Notification', 'Subscribe Notification', '<h2><b>Hi there</b>,</h2><p>\r\nCongratulations! Your Subscription has been created successfully. Please Click the following link and Verified Your Subscription. If you won\'t approve this link, after 24hourse your subscription will be denay</p>', NULL, '2021-12-10 23:44:53'),
(4, 'User Verification', 'User Verification', '<p>Dear <b>{{user_name}}</b>,\r\n</p><p>Congratulations! Your Account has been created successfully. Please Click the following link and Active your Account.</p>', NULL, '2021-12-10 23:45:25'),
(5, 'Seller Withdraw', 'Seller Withdraw Approval', '<p>Hi <b>{{seller_name}}</b>,</p><p>Your withdraw Request Approval successfully. Please check your account.</p><p>Withdraw Details:</p><p>Withdraw method : <b>{{withdraw_method}}</b>,</p><p>Total Amount :<b> {{total_amount}}</b>,</p><p>Withdraw charge : <b>{{withdraw_charge}}</b>,</p><p>Withdraw&nbsp; Amount : <b>{{withdraw_amount}}</b>,</p><p>Approval Date :<b> {{approval_date}}</b></p>', NULL, '2021-12-26 03:24:45'),
(6, 'Order Successfully', 'Order Successfully', '<p>Hi {{user_name}},</p><p> \r\nThanks for your new order. Your order id has been submited .</p><p>Total Amount : {{total_amount}},</p><p>Payment Method : {{payment_method}},</p><p>Payment Status : {{payment_status}},</p><p>Order Status : {{order_status}},</p><p>Order Date: {{order_date}},</p><p>Order Detail: {{order_detail}}</p>', NULL, '2022-01-10 21:37:03'),
(7, 'Seller Request Approved', 'Seller Request Approved', '<p>Hi {{name}},\r\n</p><p><span style=\"background-color: transparent;\">Congratulations !!&nbsp;</span>Your Shop account has been approved successfully</p>', NULL, '2022-02-05 08:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `error_pages`
--

CREATE TABLE `error_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_number` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `error_pages`
--

INSERT INTO `error_pages` (`id`, `page_name`, `page_number`, `header`, `description`, `button_text`, `created_at`, `updated_at`) VALUES
(1, '404 Error', '404', 'That Page Doesn\'t Exist!', 'Sorry, the page you were looking for could not be found.', 'Go to Home', NULL, '2021-12-13 04:25:14'),
(2, '500 Error', '500', 'That Page Doesn\'t Exist!', 'Sorry, the page you were looking for could not be found.', 'Go to Home', NULL, '2021-12-06 09:46:52'),
(3, '505 Error', '505', 'That Page Doesn\'t Exist!', 'Sorry, the page you were looking for could not be found.', 'Go to Home', NULL, '2021-12-06 09:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_comments`
--

CREATE TABLE `facebook_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_id` varchar(255) DEFAULT NULL,
  `comment_type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facebook_comments`
--

INSERT INTO `facebook_comments` (`id`, `app_id`, `comment_type`, `created_at`, `updated_at`) VALUES
(1, '882238482112522', 1, NULL, '2022-02-07 05:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_pixels`
--

CREATE TABLE `facebook_pixels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `app_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facebook_pixels`
--

INSERT INTO `facebook_pixels` (`id`, `status`, `app_id`, `created_at`, `updated_at`) VALUES
(1, 1, '972911606915059', NULL, '2021-12-13 22:38:44');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, '2022-01-30 12:37:47', '2022-02-07 07:13:48'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;<br>', 1, '2022-01-30 12:38:04', '2022-02-07 07:11:26'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit??', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&nbsp;Lorem ipsum&nbsp;<br></p>', 1, '2023-05-03 11:38:49', '2023-05-03 11:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `flutterwaves`
--

CREATE TABLE `flutterwaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_key` text NOT NULL,
  `secret_key` text NOT NULL,
  `currency_rate` double NOT NULL DEFAULT 1,
  `country_code` varchar(191) NOT NULL,
  `currency_code` varchar(191) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flutterwaves`
--

INSERT INTO `flutterwaves` (`id`, `public_key`, `secret_key`, `currency_rate`, `country_code`, `currency_code`, `title`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FLWPUBK_TEST-5760e3ff9888aa1ab5e5cd1ec3f99cb1-X', 'FLWSECK_TEST-81cb5da016d0a51f7329d4a8057e766d-X', 417.35, 'NG', 'NGN', 'Ecommerce', 'uploads/website-images/flutterwave-2021-12-30-03-44-30-8813.jpg', 1, NULL, '2022-02-07 02:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `first_column` varchar(255) DEFAULT NULL,
  `second_column` varchar(255) DEFAULT NULL,
  `third_column` varchar(255) DEFAULT NULL,
  `copyright` varchar(191) DEFAULT NULL,
  `payment_image` varchar(191) DEFAULT NULL,
  `image_title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `phone`, `email`, `address`, `first_column`, `second_column`, `third_column`, `copyright`, `payment_image`, `image_title`, `created_at`, `updated_at`) VALUES
(1, '1 888 7747632', 'contact.us@gmail.com', '11111 Katy Freeway, Suite 910, Houston TX 77079', 'QUICK LINKS', 'HELP', 'POLICY', 'eIndustrify © Copyright 2023. All Rights Reserved.', 'uploads/website-images/payment-card-2021-12-30-05-51-53-3777.png', 'We\'re Using Safe Payment', NULL, '2023-03-31 06:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `column`, `link`, `title`, `created_at`, `updated_at`) VALUES
(1, '1', 'product', 'About Us', '2022-01-30 12:28:07', '2023-03-30 11:59:57'),
(2, '2', 'user/dashboard', 'My Account', '2022-01-30 12:28:21', '2022-02-13 08:47:34'),
(3, '3', 'copyright-policy', 'Copyright Policy', '2022-01-30 12:28:33', '2023-04-27 13:05:50'),
(4, '1', 'sellers', 'Blog', '2022-02-07 04:15:17', '2023-03-30 12:00:07'),
(5, '1', 'blog', 'Brands', '2022-02-07 04:15:43', '2023-03-30 12:00:20'),
(6, '1', 'campaign', 'Contact', '2022-02-07 04:16:15', '2023-03-30 12:00:30'),
(7, '2', 'user/wishlist', 'My Orders', '2022-02-07 04:17:47', '2023-03-30 12:01:36'),
(8, '2', 'user/order', 'FAQs', '2022-02-07 04:18:38', '2023-03-30 12:02:13'),
(9, '2', 'user/seller-registration', 'Support', '2022-02-07 04:19:07', '2023-03-30 12:02:01'),
(10, '3', 'privacy-policy', 'Privacy Policy', '2022-02-07 04:21:37', '2023-04-26 09:11:32'),
(11, '3', 'terms-and-conditions', 'Terms and Conditions', '2022-02-07 04:22:06', '2023-04-27 13:06:31'),
(12, '3', 'terms-registration', 'Terms of Registration', '2022-02-07 04:22:28', '2023-04-27 13:06:20'),
(13, '3', 'sales-site-agreement', 'Sales and Site Agreement', '2022-02-07 04:24:26', '2023-04-27 13:06:46'),
(14, '2', 'user/review', 'Track your Order', '2022-02-07 04:24:57', '2023-03-30 12:02:06'),
(15, '1', 'flash-deal', 'Careers', '2022-02-07 04:25:17', '2023-03-30 12:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `footer_social_links`
--

CREATE TABLE `footer_social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_social_links`
--

INSERT INTO `footer_social_links` (`id`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'fa fa-facebook', '2022-01-30 12:27:45', '2023-03-31 06:51:12'),
(2, 'https://www.twitter.com', 'fab fa-twitter', '2022-02-07 04:12:30', '2022-02-07 04:12:30'),
(3, 'https://www.google.com', 'fab fa-google', '2022-02-07 04:12:57', '2023-03-31 06:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `google_analytics`
--

CREATE TABLE `google_analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `analytic_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_analytics`
--

INSERT INTO `google_analytics` (`id`, `analytic_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UA-84213520-6', 1, NULL, '2021-12-10 22:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `google_recaptchas`
--

CREATE TABLE `google_recaptchas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_key` varchar(255) DEFAULT NULL,
  `secret_key` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_recaptchas`
--

INSERT INTO `google_recaptchas` (`id`, `site_key`, `secret_key`, `status`, `created_at`, `updated_at`) VALUES
(1, '6LcVO6cbAAAAAOzIEwPlU66nL1rxD4VAS38tjpBX', '6LcVO6cbAAAAALVNrpZfNRfd0Gy_9a_fJRLiMVUI', 0, NULL, '2022-01-17 00:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `help_centers`
--

CREATE TABLE `help_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `use_industrify` varchar(255) DEFAULT NULL,
  `love_feature` varchar(255) DEFAULT NULL,
  `improve_first` varchar(255) DEFAULT NULL,
  `recommend_endustrify` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_centers`
--

INSERT INTO `help_centers` (`id`, `email`, `use_industrify`, `love_feature`, `improve_first`, `recommend_endustrify`, `created_at`, `updated_at`) VALUES
(3, 'kowe@mailinator.com', 'Everyday', 'Expedita quia volupt', 'Consectetur molesti', 'Yes', '2023-05-04 11:33:21', '2023-05-04 11:33:21'),
(4, 'lywydycuj@mailinator.com', 'Everyday', 'Quaerat iste nostrud', 'Atque tenetur volupt', 'No', '2023-05-04 12:39:03', '2023-05-04 12:39:03'),
(5, 'josufavo@mailinator.com', 'Everyday', 'Velit nulla cumque', 'Maiores earum consec', 'No', '2023-05-10 14:24:30', '2023-05-10 14:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `help_center_pages`
--

CREATE TABLE `help_center_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_center_pages`
--

INSERT INTO `help_center_pages` (`id`, `title`, `type`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'E-industrify Help Center', 'help-center', 'public/uploads/1683878111.png', '  <h4 class=\"mb-4\">Access our Help Center for Timely and Accurate Solutions to your Problems!</h4>\r\n                    <p>Welcome to the Help Center of E-industrify!</p>\r\n                    <p>We are here to support you and answer your queries 24/7.</p>\r\n                    <p>How can we assist you today?</p>', '2023-05-11 06:44:55', '2023-05-12 08:55:11'),
(2, 'Quotes', 'help-center-quotes', 'public/uploads/1683879688.png', '<p>Create, review and order your quotes, view all actively quoted products, and your quote history on E-industrify. Print your quotes and easily share them with others in your organization to comply with internal processes.</p>\r\n\r\n                    <h6 class=\"mt-4\">View Quotes:</h6>\r\n                    <p>How to Access:</p>\r\n                    <p>· Sign in to E-industrify with a business account</p>\r\n                    <p>· You can access quotes from the My Account dropdown at the top of E-industrify.com</p>\r\n                    <h6 class=\"mt-4\">View and Print Quotes:</h6>\r\n                    <p>Quote documents are linked to your business account and can be viewed by both Standard and Admin users. When you view a quote, you can view the listed products, along with their corresponding prices and validity period. You can also add further information to the quote, such as quantity and job number.</p>\r\n                    <p>· You can use the Catalog Quotes page to access your active quotes by entering the quote number or browsing through the active and historical quotes based on product.</p>\r\n                    <p>· If you find a product that you are interested in, you can conveniently add it to your cart or save it to a new or existing List. Moreover, you can save the quote as a PDF document to print, save, or share with others within your organization.</p>\r\n                    <h6 class=\"mt-4\">Convert Quote into an order:</h6>\r\n                    <p>To convert a quote into an order, you can either add individual products to your cart or add the entire quote to your cart. If you add products from a quote to your cart, the quantity, price, and other relevant information will be carried over to the order. You can convert Catalog Quotes to orders multiple times as long as they are within the valid dates.</p>\r\n                    <p>· You can easily add all the products from your Quote to the order by hovering over the quote number and selecting the \"Add to Order\" option.</p>\r\n                    <p>· To view the full details of a quote and add any or all products within it to the order, you can select the quote number. Then, you can select the \"Add to Order\" option.</p>\r\n                    <p>· An alternative option is to use the \"View by Product\" feature to add specific products to the cart.</p>\r\n                    <p>· After the products are in the cart, you can add more items or modify the quantity as necessary.</p>\r\n                    <h6 class=\"mt-4\">Generating a No Price Quote:</h6>\r\n                    <p>On E-industrify.com, you have the option to create a No Price Quote by accessing the Quotes section of your My Account page or by adding products to the quote directly from the Product Detail Page. This type of quote is based on your current price and remains valid for 30 days. You can use No Price Quotes to capture the current pricing information and download or refer to them later for placing orders in accordance with your procurement process. Please note that these quotes can only be accessed by the creator of the quote and other users registered to the account.</p>\r\n                    <p>· To generate a No Price Quote, you can create the quote directly from the Quotes section of your My Account page.</p>\r\n                    <p>· To review a draft, choose the \"View Quote\" option.</p>\r\n                    <p>· To finalize the draft, choose the \"Generate Quote\" option.</p>\r\n                    <p>· To view the completed quotes, you can go to the \"No Price Quotes\" tab or use the \"View by Product\" option.</p>', '2023-05-11 07:15:12', '2023-05-12 09:21:28'),
(3, 'Lists', 'help-center-lists', 'public/uploads/1683879755.png', '<p>Utilize the Lists feature on E-industrify.com to save and arrange your frequently purchased products. By creating Lists, you can identify common purchases by user or location, create a list of essential products, or group items according to your business\'s needs. Once you have found a product, you can add it to a List and easily access it from any device when logged in to E-industrify.com.</p>\r\n                    <h6 class=\"mt-4\">View my Lists</h6>\r\n                    <p>How to Access</p>\r\n                    <p>· Access to E-industrify.com requires a sign-in.</p>\r\n                    <p>· You can access your Lists from the My Account section.</p>\r\n                    <h6 class=\"mt-4\">Creating and Using Lists:</h6>\r\n                    <p>You can easily create Lists either from the My Lists page or the Product Detail Page. These Lists are a great way to organize products that you frequently purchase, prefer, or need to access quickly and easily, such as PPE for your team members. You can create Lists for your personal use or share them with all users on the account to encourage standardization and streamline the purchasing process.</p>\r\n                    <p>· You can save significant details about each product, such as the preferred reorder quantity or internal customer part number, within your Lists.</p>\r\n                    <p>· The line-level information you save within your Lists will be transferred to the cart, ensuring a prompt and precise checkout process.</p>\r\n                    <p>· You can quickly check the price and availability of the products in each List at a glance.</p>\r\n                    <p>· Quickly order products by adding them to your cart directly from your list.</p>\r\n                    <h6 class=\"mt-4\">Inventory Fields:</h6>\r\n                    <p>You can access additional inventory fields at the product level to manage light inventory and improve organization. You can view this information within your List or print labels to streamline your space and simplify the ordering process.</p>\r\n                    <p>· You can capture product details such as part number and location to associate list products with physical locations or processes in your facility.</p>\r\n                    <p>· Set inventory quantity values to indicate minimum and maximum levels and the ideal time to reorder.</p>\r\n                    <p>· Labels can be used to display product information such as number, image, and inventory fields for selected items.</p>\r\n                    <p>They are useful for quick reference, ordering, or organizing stock locations.</p>', '2023-05-11 07:24:01', '2023-05-12 09:22:35'),
(4, 'Re-Order', 'help-center-reorder', 'public/uploads/1683879851.png', '<p>Auto Reorder enables you to subscribe to your frequently purchased products, with the option to adjust the frequency to best fit your business needs. You can create or modify your auto reorder anytime.</p>\r\n                    <h6 class=\"mt-4\">How to Access:</h6>\r\n                    <p>· Sign in to E-industrify.com and access the product detail page or cart</p>\r\n                    <p>· Existing Auto Reorders can be found under the \"Order\" section in the My Account dropdown menu.</p>', '2023-05-11 07:24:01', '2023-05-12 09:24:11'),
(5, 'Order History', 'help-center-order-history', 'public/uploads/1683885952.png', '<p>E-industrify’s Order History page simplifies your post-order requirements and streamlines the process for reordering products. You can view order details, track your shipments in real-time, and obtain packing lists and invoice copies for both online and offline orders.</p>\r\n                    <h6 class=\"mt-4\">View my Order History</h6>\r\n                    <p>How to Access:</p>\r\n                    <p>· Access to E-industrify\'s Order History page is limited to users with a business account who are signed in to E-industrify.com.</p>\r\n                    <p>· You can access the Order History from the top My Account dropdown menu on E-industrify.com.</p>', '2023-05-11 07:24:01', '2023-05-12 11:05:52'),
(6, 'Online Invoices', 'help-center-online-invoices', 'public/uploads/1683886002.png', '<p>E-industrify provides various options for accessing and paying your invoices, including the ability to view, save, print, and pay them directly on E-industrify.com. Additionally, you can choose to have your invoices sent to you via email for added convenience.</p>\r\n\r\n                    <h6 class=\"mt-4\">View and Pay your Invoices:</h6>\r\n                    <p>· Invoices for online and offline orders invoiced within the last 18 months are available on E-industrify.com the day after the products are shipped or picked up at the branch.</p>\r\n                    <p>· You can view, save, print, and pay invoices online, and also receive them via email.</p>\r\n                    <p>· Payment can be made online using credit card, bank account, or wire transfer. You can select from existing payment methods saved to your E-industrify.com account or add new ones directly from the Invoicing section in My Account.</p>\r\n                    <p>· For paying invoices without logging in, simply click here.</p>\r\n                    <p>· Credit and Debits can be viewed, but Debits cannot be paid online.</p>\r\n                    <h6 class=\"mt-4\">How to Access:</h6>\r\n                    <p>Once you have logged in, you will be able to retrieve your invoices by navigating to the Invoicing option in the My Account section. From there, you will have the ability to view, print, search for, download, and make payments towards your invoices.</p>\r\n                    <p>To pay an invoice, select Pay Invoice and choose an existing payment method or add a new one. Click Submit Payment. For multiple invoices, choose Pay Multiple Invoices, check each box, and select Pay Selected.</p>', '2023-05-11 07:24:01', '2023-05-12 11:06:42'),
(7, 'Returns & Cancellations', 'help-center-returns-cancellation', 'public/uploads/1683886063.png', '<p>In the event that you need to return an item, you may either send it back to E-industrify via shipping or drop it off at any of our E-industrify Branch Locations.</p>\r\n                    <h6 class=\"mt-4\">If you are shipping the product:</h6>\r\n                    <p>· Ensure that you pack the item(s) securely and include the packing slip. On the packing slip, state the reason for returning the product.</p>\r\n                    <p>· If the packing slip is missing, please provide the purchase date, original invoice number, and item number for the product.</p>\r\n                    <p>· Specify whether you require a replacement product or a credit. Please note that you need to prepay for shipping as E-industrify does not accept Cash on Delivery (C.O.D.s).</p>\r\n                    <p>· Ship the package to the nearest E-industrify location. If you require assistance with returns, you can contact E-industrify Customer Care at <b>1-888-Eindustrify(1-888-774-7632)</b></p>', '2023-05-11 07:24:01', '2023-05-12 11:07:43'),
(8, 'Checkout', 'help-center-checkout', 'public/uploads/1683886131.png', '<p>By using Checkout, you can save time when placing orders by relying on your stored preferences during the checkout process. You simply need to configure your preferred payment method, shipping address, and delivery settings one time. From then on, your selected preferences will automatically apply to your future shopping carts, ensuring a quick and seamless checkout experience.</p>', '2023-05-11 07:24:01', '2023-05-12 11:08:51'),
(9, 'User Management', 'help-center-user-manangenment', 'public/uploads/1683886221.png', '<p>The User Management feature, accessible exclusively to Admin users, presents an overview of all registered users on your account, along with their respective information and settings. This page enables you to perform a range of user-related tasks, such as adding, approving, updating, removing, or denying access to the account. Additionally, you can manage settings and preferences for users via this feature.</p>\r\n                    <h6 class=\"mt-4\">How to Access:</h6>\r\n                    <p>· In order to access User Management, you must be logged into E-industrify.com.</p>\r\n                    <p>· To find this feature, click on the My Account drop-down menu located at the top of the E-industrify.com webpage.</p>', '2023-05-11 07:24:01', '2023-05-12 11:10:21'),
(10, 'Account Settings', 'help-center-account-setting', 'public/uploads/1683886311.png', '<p>Optimize your E-industrify experience with Account Settings. Admin users can set preferred behaviors for new user registrations and order settings, including custom fields at the line and order level, to ensure accurate and efficient registration and compliance with internal procurement processes.</p>\r\n                    <h6 class=\"mt-4\">How to Access:</h6>\r\n                    <p>· Access to Account Settings is restricted to Admin users who have signed in to E-industrify.com with their account credentials.</p>\r\n                    <p>· To locate this feature, click on the My Account dropdown menu located at the top of the E-industrify.com webpage.</p>', '2023-05-11 07:24:01', '2023-05-12 11:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_banners`
--

CREATE TABLE `home_page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pre_title` varchar(255) DEFAULT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_banners`
--

INSERT INTO `home_page_banners` (`id`, `title`, `pre_title`, `post_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Permanent Magnet Motor', NULL, 'Supplier ABC', 'public/uploads/website-images/images/slide-2.png', '2023-05-19 10:25:41', '2023-05-19 11:52:33'),
(2, 'Gas Turbine Parts', NULL, 'Easy & quick guide', 'public/uploads/website-images/images/slide-3.png', '2023-05-19 10:25:41', '2023-05-19 10:25:41'),
(3, 'Future of B2B Sales', 'Growth, Marketing & Sales Practice', 'The Big Reframe', 'public/uploads/website-images/images/slide-4.png', '2023-05-19 10:27:01', '2023-05-19 10:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_one_visibilities`
--

CREATE TABLE `home_page_one_visibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `qty` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_one_visibilities`
--

INSERT INTO `home_page_one_visibilities` (`id`, `section_name`, `status`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'Slider', 1, 10, NULL, '2022-02-07 02:50:56'),
(2, 'Brand', 1, 10, NULL, '2022-01-30 11:04:40'),
(3, 'Campaign', 1, 9, NULL, '2022-01-30 11:08:50'),
(4, 'Popular Category', 1, 1, NULL, '2022-01-30 11:04:26'),
(5, 'First Two Column Banner', 1, 1, NULL, '2022-01-30 11:04:03'),
(6, 'Flash Deal', 1, 10, NULL, '2022-01-30 11:03:48'),
(7, 'Highlight Section', 1, 12, NULL, '2022-01-30 11:03:38'),
(8, 'Second two column banner', 1, 1, NULL, '2022-01-30 11:03:25'),
(9, 'Three Column Category', 1, 12, NULL, '2022-01-30 11:03:15'),
(10, 'Third Two Column Banner', 1, 1, NULL, '2022-01-30 11:03:02'),
(11, 'Service', 1, 4, NULL, '2022-01-30 11:02:53'),
(12, 'Blog', 1, 9, NULL, '2022-01-30 11:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, '2023-06-06 08:32:27', '2023-06-06 08:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `instamojo_payments`
--

CREATE TABLE `instamojo_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `api_key` text NOT NULL,
  `auth_token` text NOT NULL,
  `currency_rate` varchar(255) NOT NULL DEFAULT '1',
  `account_mode` varchar(255) NOT NULL DEFAULT 'Sandbox',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instamojo_payments`
--

INSERT INTO `instamojo_payments` (`id`, `api_key`, `auth_token`, `currency_rate`, `account_mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test_5f4a2c9a58ef216f8a1a688910f', 'test_994252ada69ce7b3d282b9941c2', '74.66', 'Sandbox', 1, NULL, '2022-02-07 02:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `maintainance_texts`
--

CREATE TABLE `maintainance_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintainance_texts`
--

INSERT INTO `maintainance_texts` (`id`, `status`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 'uploads/website-images/maintainance-mode-2022-02-12-11-06-02-3481.png', 'We are upgrading our site.  We will come back soon.  \r\nPlease stay with us. \r\nThank you.', NULL, '2022-02-12 05:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `mega_menu_categories`
--

CREATE TABLE `mega_menu_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `serial` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mega_menu_categories`
--

INSERT INTO `mega_menu_categories` (`id`, `category_id`, `status`, `serial`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-01-30 10:46:29', '2022-01-30 10:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `mega_menu_sub_categories`
--

CREATE TABLE `mega_menu_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mega_menu_category_id` int(11) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `serial` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mega_menu_sub_categories`
--

INSERT INTO `mega_menu_sub_categories` (`id`, `mega_menu_category_id`, `sub_category_id`, `status`, `serial`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2022-01-30 10:47:12', '2022-01-30 10:47:12'),
(2, 3, 2, 1, 1, '2022-01-30 10:47:46', '2022-01-30 10:47:46'),
(3, 3, 3, 1, 2, '2022-01-30 10:47:52', '2022-01-30 10:47:52'),
(4, 3, 4, 1, 3, '2022-01-30 10:47:57', '2022-01-30 10:47:57'),
(5, 4, 5, 1, 1, '2022-01-30 10:48:13', '2022-01-30 10:48:13'),
(6, 1, 7, 1, 2, '2022-02-07 04:03:08', '2022-02-07 04:03:08'),
(7, 1, 8, 1, 3, '2022-02-07 04:03:15', '2022-02-07 04:03:15'),
(8, 1, 9, 1, 4, '2022-02-07 04:03:22', '2022-02-07 04:03:22'),
(9, 4, 13, 1, 2, '2022-02-07 04:04:43', '2022-02-07 04:04:43'),
(10, 4, 15, 1, 3, '2022-02-07 04:04:49', '2022-02-07 04:04:49'),
(11, 4, 16, 1, 4, '2022-02-07 04:04:55', '2022-02-07 04:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `menu_visibilities`
--

CREATE TABLE `menu_visibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_visibilities`
--

INSERT INTO `menu_visibilities` (`id`, `menu_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 1, NULL, '2022-01-23 20:05:32'),
(2, 'Shop', 1, NULL, '2022-01-23 20:05:31'),
(3, 'Mega Menu', 1, NULL, '2022-01-16 20:51:23'),
(4, 'Sellers', 1, NULL, '2022-01-16 20:52:31'),
(5, 'Blog', 1, NULL, '2022-01-16 20:52:32'),
(6, 'Campaign', 1, NULL, '2022-01-16 20:52:33'),
(7, 'Pages', 1, NULL, '2022-01-16 20:52:34'),
(8, 'About us', 1, NULL, '2022-01-16 20:57:27'),
(9, 'Contact Us', 1, NULL, '2022-01-16 20:57:28'),
(10, 'Checkout', 1, NULL, '2022-01-16 20:57:29'),
(11, 'Brand', 1, NULL, '2022-01-16 20:57:25'),
(12, 'FAQ', 1, NULL, '2022-01-16 20:57:26'),
(13, 'Privacy Policy', 1, NULL, '2022-01-16 20:57:23'),
(14, 'Terms and Conditions', 1, NULL, '2022-01-16 20:57:22'),
(15, 'Track Order', 1, NULL, '2022-01-16 20:52:29'),
(16, 'Flash Deal', 1, NULL, '2022-01-16 20:52:28'),
(17, 'My Account', 1, NULL, '2022-01-16 20:04:54'),
(18, 'Login/Register', 1, NULL, '2022-01-16 20:04:47'),
(19, 'Shopping Cart', 1, NULL, '2022-01-16 20:09:28'),
(20, 'Compare', 1, NULL, '2022-01-16 20:37:54'),
(21, 'Wishlist', 1, NULL, '2022-01-16 20:37:55'),
(22, 'Topbar Phone', 1, NULL, '2022-01-16 20:02:07'),
(23, 'Menu Phone', 1, NULL, '2022-01-16 20:08:00'),
(24, 'Categories', 1, NULL, '2022-01-16 23:52:39'),
(25, 'Search', 1, NULL, '2022-01-16 20:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `customer_read_msg` int(11) NOT NULL DEFAULT 0,
  `seller_read_msg` int(11) NOT NULL,
  `send_customer` int(11) NOT NULL DEFAULT 0,
  `send_seller` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `customer_id`, `seller_id`, `message`, `customer_read_msg`, `seller_read_msg`, `send_customer`, `send_seller`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'Welcome to Shop name 2!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 1, 0, 5, '2022-02-07 06:04:04', '2022-02-07 07:00:41'),
(2, 3, 5, 'Hello Paul', 1, 1, 3, 0, '2022-02-07 06:04:29', '2022-02-07 07:00:41'),
(3, 3, 6, 'Welcome to Shop Name Five!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 0, 0, 6, '2022-02-07 06:11:19', '2022-02-07 06:24:08'),
(4, 3, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 0, 3, 0, '2022-02-07 06:11:35', '2022-02-07 06:24:08'),
(5, 1, 6, 'Welcome to Shop Name Five!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 0, 0, 6, '2022-02-07 06:37:02', '2022-05-02 06:15:41'),
(6, 1, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 0, 1, 0, '2022-02-07 06:37:21', '2022-05-02 06:15:41'),
(7, 1, 6, 'Lorem Ipsum is simply dummy text of the printing', 1, 0, 1, 0, '2022-02-07 06:37:31', '2022-05-02 06:15:41'),
(8, 1, 6, 'Welcome to Shop Name Five!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 0, 0, 6, '2022-02-07 06:44:29', '2022-05-02 06:15:41'),
(9, 1, 5, 'Welcome to Shop name 2!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 1, 0, 5, '2022-02-07 06:45:03', '2022-05-02 06:24:41'),
(10, 1, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 1, 1, 0, '2022-02-07 06:45:23', '2022-05-02 06:24:41'),
(11, 1, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 1, 0, 5, '2022-02-07 07:00:35', '2022-05-02 06:24:41'),
(12, 3, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 0, 0, 0, 5, '2022-02-07 07:00:45', '2022-02-07 07:00:45'),
(13, 1, 5, 'Lorem Ipsum is simply dummy text', 1, 1, 1, 0, '2022-02-13 09:59:19', '2022-05-02 06:24:41'),
(14, 1, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 1, 1, 0, '2022-02-13 10:00:07', '2022-05-02 06:24:41'),
(15, 1, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, 0, 1, 0, '2022-02-13 10:04:05', '2022-05-02 06:15:41'),
(16, 1, 6, 'Lorem Ipsum is simply dummy text', 0, 0, 1, 0, '2022-05-02 06:16:49', '2022-05-02 06:16:49'),
(17, 1, 6, 'of the printing and typesetting industry', 0, 0, 1, 0, '2022-05-02 06:18:40', '2022-05-02 06:18:40'),
(18, 1, 5, 'Lorem Ipsum is simply dummy text', 1, 1, 1, 0, '2022-05-02 06:22:06', '2022-05-02 06:24:41'),
(19, 1, 5, 'Lorem Ipsum is simply dummy text', 1, 1, 1, 0, '2022-05-02 06:23:27', '2022-05-02 06:24:41'),
(20, 1, 5, 'Lorem Ipsum is simply dummy text', 1, 0, 0, 5, '2022-05-02 06:24:18', '2022-05-02 06:24:41');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_30_035230_create_admins_table', 2),
(6, '2021_11_30_065435_create_email_configurations_table', 3),
(7, '2021_11_30_065508_create_email_templates_table', 3),
(8, '2021_12_01_035206_create_categories_table', 4),
(9, '2021_12_01_035220_create_sub_categories_table', 4),
(10, '2021_12_01_035231_create_child_categories_table', 4),
(11, '2021_12_01_035735_create_brands_table', 4),
(12, '2021_12_02_055907_create_product_taxes_table', 5),
(13, '2021_12_02_083742_create_return_policies_table', 6),
(14, '2021_12_02_084030_create_product_specification_keys_table', 6),
(15, '2021_12_03_093645_create_products_table', 7),
(16, '2021_12_03_101949_create_product_galleries_table', 7),
(17, '2021_12_04_053018_create_product_specifications_table', 8),
(18, '2021_12_06_045447_create_services_table', 9),
(19, '2021_12_06_054423_create_about_us_table', 10),
(20, '2021_12_06_055028_create_custom_pages_table', 10),
(21, '2021_12_07_030532_create_terms_and_conditions_table', 11),
(22, '2021_12_07_035810_create_blog_categories_table', 12),
(23, '2021_12_07_035822_create_blogs_table', 12),
(24, '2021_12_07_040749_create_popular_posts_table', 12),
(25, '2021_12_07_061613_create_blog_comments_table', 13),
(26, '2021_12_07_081832_create_product_variants_table', 14),
(27, '2021_12_07_081858_create_product_variant_items_table', 14),
(28, '2021_12_08_125540_create_campaigns_table', 15),
(29, '2021_12_08_130025_create_campaign_products_table', 15),
(30, '2021_12_09_095158_create_contact_messages_table', 16),
(31, '2021_12_09_095220_create_subscribers_table', 16),
(32, '2021_12_09_124226_create_settings_table', 17),
(33, '2021_12_11_022207_create_cookie_consents_table', 18),
(34, '2021_12_11_025358_create_google_recaptchas_table', 19),
(35, '2021_12_11_025449_create_facebook_comments_table', 19),
(36, '2021_12_11_025556_create_tawk_chats_table', 19),
(37, '2021_12_11_025618_create_google_analytics_table', 19),
(38, '2021_12_11_025712_create_custom_paginations_table', 19),
(39, '2021_12_11_083503_create_faqs_table', 20),
(40, '2021_12_11_094707_create_currencies_table', 21),
(41, '2021_12_13_085612_create_product_reviews_table', 22),
(42, '2021_12_13_090609_create_product_review_galleries_table', 22),
(43, '2021_12_13_101056_create_error_pages_table', 23),
(44, '2021_12_13_102725_create_maintainance_texts_table', 24),
(45, '2021_12_13_110144_create_subscribe_modals_table', 25),
(46, '2021_12_13_111140_create_announcement_modals_table', 26),
(47, '2021_12_13_132626_create_countries_table', 27),
(48, '2021_12_13_132909_create_country_states_table', 27),
(49, '2021_12_13_132935_create_cities_table', 27),
(50, '2021_12_14_032937_create_social_login_information_table', 28),
(51, '2021_12_14_042928_create_facebook_pixels_table', 29),
(52, '2021_12_14_054908_create_paypal_payments_table', 30),
(53, '2021_12_14_054922_create_stripe_payments_table', 30),
(54, '2021_12_14_054939_create_razorpay_payments_table', 30),
(55, '2021_12_14_055252_create_bank_payments_table', 30),
(56, '2021_12_14_084759_create_vendors_table', 31),
(57, '2021_12_14_090013_create_vendor_social_links_table', 31),
(58, '2021_12_15_095059_create_wholesells_table', 32),
(59, '2021_12_16_071213_create_seller_mail_logs_table', 33),
(60, '2021_12_21_093939_create_mega_menu_categories_table', 34),
(61, '2021_12_21_093958_create_mega_menu_sub_categories_table', 34),
(62, '2021_12_22_034106_create_banner_images_table', 35),
(63, '2021_12_22_044839_create_sliders_table', 36),
(64, '2021_12_22_081311_create_popular_categories_table', 37),
(65, '2021_12_23_021844_create_three_column_categories_table', 38),
(66, '2021_12_23_033230_create_shipping_methods_table', 39),
(67, '2021_12_23_065722_create_paystack_and_mollies_table', 40),
(68, '2021_12_23_085225_create_withdraw_methods_table', 41),
(71, '2021_12_25_172918_create_seller_withdraws_table', 42),
(74, '2021_12_25_200413_create_product_reports_table', 43),
(75, '2021_12_25_200707_create_product_report_images_table', 44),
(79, '2021_12_26_052326_create_billing_addresses_table', 45),
(80, '2021_12_26_053952_create_shipping_addresses_table', 45),
(81, '2021_12_26_054841_create_orders_table', 45),
(82, '2021_12_26_164912_create_order_addresses_table', 45),
(83, '2021_12_26_165705_create_order_products_table', 45),
(84, '2021_12_26_170803_create_order_product_variants_table', 45),
(87, '2021_12_28_163200_create_coupons_table', 46),
(88, '2021_12_28_192057_create_contact_pages_table', 47),
(89, '2021_12_28_200846_create_breadcrumb_images_table', 48),
(90, '2021_12_30_032959_create_flutterwaves_table', 49),
(91, '2021_12_30_034716_create_footers_table', 50),
(92, '2021_12_30_035201_create_footer_links_table', 50),
(93, '2021_12_30_035247_create_footer_social_links_table', 50),
(95, '2021_12_30_061157_create_home_page_one_visibilities_table', 51),
(96, '2022_01_11_103950_create_wishlists_table', 52),
(97, '2022_01_12_070110_create_shop_pages_table', 53),
(99, '2022_01_12_080218_create_seo_settings_table', 54),
(100, '2022_01_17_012111_create_menu_visibilities_table', 55),
(101, '2022_01_17_122016_create_instamojo_payments_table', 56),
(102, '2022_01_29_055523_create_messages_table', 57),
(103, '2022_01_29_122621_create_pusher_credentails_table', 58),
(107, '2023_04_26_063848_create_roles_table', 59),
(108, '2023_04_26_112918_create_business_information_table', 59),
(109, '2024_03_03_000006_create_role_user_pivot_table', 59),
(110, '2023_04_26_122251_add_last_name_to_users_table', 60),
(111, '2023_05_02_122126_add_role_to_users_table', 61),
(112, '2023_05_02_131450_create_policies_table', 62),
(113, '2023_05_03_082449_create_help_centers_table', 63),
(114, '2023_05_04_095048_create_customer_supports_table', 64),
(115, '2023_05_11_070441_create_help_center_pages_table', 65),
(116, '2023_05_15_112926_create_product_overviews_table', 66),
(117, '2023_05_16_111036_create_product_sizes_table', 67),
(118, '2023_05_17_094202_add_image_to_categories_table', 68),
(119, '2023_05_18_134544_add_image_to_sub_categories_table', 69),
(120, '2023_05_19_104732_create_home_page_banner_controllers_table', 70),
(121, '2023_05_19_105845_create_home_page_banners_table', 71),
(122, '2023_05_24_063028_create_vendor_categories_table', 72),
(123, '2023_05_24_064005_create_vendor_sub_categories_table', 73),
(124, '2023_05_24_064206_create_vendor_child_categories_table', 74),
(125, '2023_05_26_101820_add_category_code_to_categories_table', 75),
(126, '2023_05_26_102720_add_category_code_to_categories_table', 76),
(127, '2023_05_26_103152_add_sub_category_code_to_sub_categories_table', 77),
(128, '2023_05_26_103908_add_child_category_code_to_child_categories_table', 78),
(129, '2023_06_05_095644_add_pdf_file_to_users_table', 79),
(131, '2023_06_06_074526_create_industries_table', 80),
(133, '2023_06_06_115554_add_industry_id_to_business_information_table', 81),
(134, '2023_06_27_081224_create_technical_supports_table', 82),
(135, '2023_07_06_112813_add_user_id_to_technical_supports', 83),
(136, '2023_08_02_083018_add_soft_delete_to_order_products', 84),
(137, '2023_08_18_082859_create_taxes_table', 85),
(138, '2023_08_23_132152_create_payments_table', 86),
(140, '2023_08_23_134729_create_user_payments_table', 87),
(141, '2023_09_20_083756_add_dob_to_users', 88);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_usd` double NOT NULL DEFAULT 0,
  `sub_total` double NOT NULL,
  `amount_real_currency` double NOT NULL DEFAULT 0,
  `currency_rate` double NOT NULL DEFAULT 0,
  `currency_name` varchar(255) DEFAULT NULL,
  `currency_icon` varchar(255) DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `payment_approval_date` varchar(255) DEFAULT NULL,
  `refound_status` int(11) NOT NULL DEFAULT 0,
  `payment_refound_date` varchar(255) DEFAULT NULL,
  `transection_id` varchar(255) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `shipping_cost` double NOT NULL DEFAULT 0,
  `coupon_coast` double NOT NULL DEFAULT 0,
  `order_vat` double NOT NULL DEFAULT 0,
  `order_status` varchar(255) DEFAULT 'Pending',
  `order_approval_date` varchar(255) DEFAULT NULL,
  `order_delivered_date` varchar(255) DEFAULT NULL,
  `order_completed_date` varchar(255) DEFAULT NULL,
  `order_declined_date` varchar(255) DEFAULT NULL,
  `cash_on_delivery` int(10) NOT NULL DEFAULT 0,
  `additional_info` text DEFAULT NULL,
  `agree_terms_condition` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `amount_usd`, `sub_total`, `amount_real_currency`, `currency_rate`, `currency_name`, `currency_icon`, `product_qty`, `payment_method`, `payment_status`, `payment_approval_date`, `refound_status`, `payment_refound_date`, `transection_id`, `shipping_method`, `shipping_cost`, `coupon_coast`, `order_vat`, `order_status`, `order_approval_date`, `order_delivered_date`, `order_completed_date`, `order_declined_date`, `cash_on_delivery`, `additional_info`, `agree_terms_condition`, `created_at`, `updated_at`) VALUES
(154, '9121359', 306, 0, 2140, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-24 13:13:48', '2023-08-24 13:13:48'),
(155, '8290352', 0, 0, 3480, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-24 14:27:45', '2023-08-24 14:27:45'),
(156, '9808434', 0, 0, 3480, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-24 14:35:19', '2023-08-24 14:35:19'),
(157, '5040307', 0, 0, 3480, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-24 14:42:56', '2023-08-24 14:42:56'),
(158, '9307495', 343, 0, 3480, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-24 14:47:13', '2023-08-24 14:47:13'),
(159, '4272624', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-29 06:53:23', '2023-08-29 06:53:23'),
(160, '4813845', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-29 06:57:40', '2023-08-29 06:57:40'),
(161, '7316928', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-29 09:00:09', '2023-08-29 09:00:09'),
(162, '3918525', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 11:39:21', '2023-08-30 11:39:21'),
(163, '7113785', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 11:43:14', '2023-08-30 11:43:14'),
(164, '4909661', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 12:20:26', '2023-08-30 12:20:26'),
(165, '5960466', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 12:22:23', '2023-08-30 12:22:23'),
(166, '3621696', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 12:25:34', '2023-08-30 12:25:34'),
(167, '8040041', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 12:37:33', '2023-08-30 12:37:33'),
(168, '2666966', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 12:48:02', '2023-08-30 12:48:02'),
(169, '8057500', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:03:56', '2023-08-30 13:03:56'),
(170, '1661933', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:10:34', '2023-08-30 13:10:34'),
(171, '2685618', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:17:38', '2023-08-30 13:17:38'),
(172, '3097873', 306, 0, 2568, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:20:25', '2023-08-30 13:20:25'),
(173, '7418747', 306, 0, 2568, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:25:29', '2023-08-30 13:25:29'),
(174, '8119902', 306, 0, 2568, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:26:27', '2023-08-30 13:26:27'),
(175, '8697384', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:28:04', '2023-08-30 13:28:04'),
(176, '4830156', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:30:54', '2023-08-30 13:30:54'),
(177, '7608873', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:32:36', '2023-08-30 13:32:36'),
(178, '6269997', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-08-30 13:34:38', '2023-08-30 13:34:38'),
(185, '8466177', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:31:52', '2023-09-08 11:31:52'),
(186, '1998018', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:32:41', '2023-09-08 11:32:41'),
(187, '6950411', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:33:00', '2023-09-08 11:33:00'),
(188, '2966361', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:33:41', '2023-09-08 11:33:41'),
(189, '8889237', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:34:36', '2023-09-08 11:34:36'),
(190, '2438718', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:35:26', '2023-09-08 11:35:26'),
(191, '5409864', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:35:49', '2023-09-08 11:35:49'),
(192, '5287073', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:36:37', '2023-09-08 11:36:37'),
(193, '1579172', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:37:27', '2023-09-08 11:37:27'),
(194, '1155947', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:37:56', '2023-09-08 11:37:56'),
(195, '9395013', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:43:30', '2023-09-08 11:43:30'),
(196, '5262947', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:47:30', '2023-09-08 11:47:30'),
(197, '5394493', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 11:51:56', '2023-09-08 11:51:56'),
(198, '9335000', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 12:29:35', '2023-09-08 12:29:35'),
(199, '6554970', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 12:34:06', '2023-09-08 12:34:06'),
(200, '2362644', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 12:44:07', '2023-09-08 12:44:07'),
(201, '5225970', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:29:11', '2023-09-08 15:29:11'),
(202, '4400692', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:29:35', '2023-09-08 15:29:35'),
(203, '8393068', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:30:08', '2023-09-08 15:30:08'),
(204, '1053997', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:31:14', '2023-09-08 15:31:14'),
(205, '1725821', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:32:12', '2023-09-08 15:32:12'),
(206, '7771443', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:33:20', '2023-09-08 15:33:20'),
(207, '8889819', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:33:40', '2023-09-08 15:33:40'),
(208, '3327909', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:34:03', '2023-09-08 15:34:03'),
(209, '8521367', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:35:52', '2023-09-08 15:35:52'),
(210, '3732651', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:40:53', '2023-09-08 15:40:53'),
(211, '5089910', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:42:57', '2023-09-08 15:42:57'),
(212, '9276698', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:47:34', '2023-09-08 15:47:34'),
(213, '8235868', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:49:14', '2023-09-08 15:49:14'),
(214, '7151043', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:56:02', '2023-09-08 15:56:02'),
(215, '5270108', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 15:56:48', '2023-09-08 15:56:48'),
(216, '8437700', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 16:06:11', '2023-09-08 16:06:11'),
(217, '1030317', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-08 16:13:18', '2023-09-08 16:13:18'),
(218, '8177340', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 06:36:28', '2023-09-11 06:36:28'),
(219, '5748481', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 06:44:10', '2023-09-11 06:44:10'),
(220, '3738167', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 06:50:21', '2023-09-11 06:50:21'),
(221, '1931119', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 06:52:20', '2023-09-11 06:52:20'),
(222, '4477224', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 07:41:53', '2023-09-11 07:41:53'),
(223, '3924246', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 07:45:45', '2023-09-11 07:45:45'),
(224, '7106423', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 07:53:18', '2023-09-11 07:53:18'),
(225, '2138870', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 07:56:03', '2023-09-11 07:56:03'),
(226, '9725715', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 07:59:00', '2023-09-11 07:59:00'),
(227, '9300096', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:03:25', '2023-09-11 08:03:25'),
(228, '6852221', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:13:38', '2023-09-11 08:13:38'),
(229, '2805355', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:24:38', '2023-09-11 08:24:38'),
(230, '1915981', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:30:19', '2023-09-11 08:30:19'),
(231, '3809137', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:31:04', '2023-09-11 08:31:04'),
(232, '9528693', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 08:34:02', '2023-09-11 08:34:02'),
(233, '6772997', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 09:16:49', '2023-09-11 09:16:49'),
(234, '2588540', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 09:30:28', '2023-09-11 09:30:28'),
(235, '8835565', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 09:39:00', '2023-09-11 09:39:00'),
(236, '3520484', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 09:53:37', '2023-09-11 09:53:37'),
(237, '9139240', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 09:57:36', '2023-09-11 09:57:36'),
(238, '4221530', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 11:38:43', '2023-09-11 11:38:43'),
(239, '2320462', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 11:50:04', '2023-09-11 11:50:04'),
(240, '9541650', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 11:54:10', '2023-09-11 11:54:10'),
(241, '4785342', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 11:59:29', '2023-09-11 11:59:29'),
(242, '7236075', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:02:30', '2023-09-11 12:02:30'),
(243, '9495378', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:08:58', '2023-09-11 12:08:58'),
(244, '2845312', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:12:05', '2023-09-11 12:12:05'),
(245, '5503891', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:18:14', '2023-09-11 12:18:14'),
(246, '3776872', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:23:35', '2023-09-11 12:23:35'),
(247, '1006105', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:26:24', '2023-09-11 12:26:24'),
(248, '5112707', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:29:42', '2023-09-11 12:29:42'),
(249, '3520017', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:37:50', '2023-09-11 12:37:50'),
(250, '7863595', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:53:02', '2023-09-11 12:53:02'),
(251, '7812599', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 12:59:04', '2023-09-11 12:59:04'),
(252, '3127014', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:02:24', '2023-09-11 13:02:24'),
(253, '6732414', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:18:17', '2023-09-11 13:18:17'),
(254, '6096212', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:22:51', '2023-09-11 13:22:51'),
(255, '2824342', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:26:39', '2023-09-11 13:26:39'),
(256, '3864653', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:31:19', '2023-09-11 13:31:19'),
(257, '9718081', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:40:05', '2023-09-11 13:40:05'),
(258, '9214616', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:44:53', '2023-09-11 13:44:53'),
(259, '7078437', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:52:23', '2023-09-11 13:52:23'),
(260, '6068574', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:56:06', '2023-09-11 13:56:06'),
(261, '5035869', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:56:16', '2023-09-11 13:56:16'),
(262, '6516200', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:56:38', '2023-09-11 13:56:38'),
(263, '5281412', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 13:56:57', '2023-09-11 13:56:57'),
(264, '3175351', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:02:09', '2023-09-11 14:02:09'),
(265, '9236829', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:12:47', '2023-09-11 14:12:47'),
(266, '8490271', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:24:30', '2023-09-11 14:24:30'),
(267, '1261774', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:26:59', '2023-09-11 14:26:59'),
(268, '3009634', 306, 0, 3210, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:33:02', '2023-09-11 14:33:02'),
(269, '7941398', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:35:34', '2023-09-11 14:35:34'),
(270, '3592403', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:44:54', '2023-09-11 14:44:54'),
(271, '9377830', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:48:30', '2023-09-11 14:48:30'),
(272, '6150793', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:56:40', '2023-09-11 14:56:40'),
(273, '2102255', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 14:59:38', '2023-09-11 14:59:38'),
(274, '6892540', 306, 0, 1070, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 15:06:37', '2023-09-11 15:06:37'),
(275, '7629300', 306, 0, 1081.97, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-11 16:17:57', '2023-09-11 16:17:57'),
(276, '2001606', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 06:29:05', '2023-09-12 06:29:05'),
(277, '7803946', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 06:32:54', '2023-09-12 06:32:54'),
(278, '4873651', 0, 0, 3492.01, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 06:39:15', '2023-09-12 06:39:15'),
(279, '8450080', 0, 0, 2331.97, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 06:48:52', '2023-09-12 06:48:52'),
(280, '5405873', 0, 0, 3498.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 06:59:57', '2023-09-12 06:59:57'),
(281, '8155007', 0, 0, 3498.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 07:21:48', '2023-09-12 07:21:48'),
(282, '8638587', 0, 0, 3498.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 07:22:48', '2023-09-12 07:22:48'),
(283, '1831850', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 07:43:29', '2023-09-12 07:43:29'),
(284, '4226253', 0, 0, 3498.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 07:48:40', '2023-09-12 07:48:40'),
(285, '2850750', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 12:17:01', '2023-09-12 12:17:01'),
(286, '2230445', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 12:36:16', '2023-09-12 12:36:16'),
(287, '3109639', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 12:39:25', '2023-09-12 12:39:25'),
(288, '6330426', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-12 12:53:59', '2023-09-12 12:53:59'),
(289, '7553462', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 06:58:32', '2023-09-13 06:58:32'),
(290, '8066588', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 07:01:37', '2023-09-13 07:01:37'),
(291, '2714903', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 11:51:08', '2023-09-13 11:51:08'),
(292, '5135821', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 11:51:33', '2023-09-13 11:51:33'),
(293, '3262166', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 11:56:58', '2023-09-13 11:56:58'),
(294, '5117452', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:02:52', '2023-09-13 12:02:52'),
(295, '2045642', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:04:44', '2023-09-13 12:04:44'),
(296, '7935527', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:09:05', '2023-09-13 12:09:05'),
(297, '4336916', 306, 0, 3221.49, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:18:21', '2023-09-13 12:18:21'),
(298, '4983160', 306, 0, 3221.49, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:18:40', '2023-09-13 12:18:40'),
(299, '1478272', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:24:32', '2023-09-13 12:24:32'),
(300, '1872878', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:26:47', '2023-09-13 12:26:47'),
(301, '4934047', 306, 0, 3288.68, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:32:19', '2023-09-13 12:32:19'),
(302, '9316007', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 12:36:11', '2023-09-13 12:36:11'),
(303, '8678334', 306, 0, 3258.09, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:07:12', '2023-09-13 13:07:12'),
(304, '1814998', 306, 0, 3258.09, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:29:50', '2023-09-13 13:29:50'),
(305, '9169415', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:46:53', '2023-09-13 13:46:53'),
(306, '1750924', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:47:55', '2023-09-13 13:47:55'),
(307, '7347219', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:49:49', '2023-09-13 13:49:49'),
(308, '4085693', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:50:37', '2023-09-13 13:50:37'),
(309, '5293446', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:50:50', '2023-09-13 13:50:50'),
(310, '8882513', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:51:04', '2023-09-13 13:51:04'),
(311, '2386171', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:51:32', '2023-09-13 13:51:32'),
(312, '5837906', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:51:58', '2023-09-13 13:51:58'),
(313, '5587210', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:55:00', '2023-09-13 13:55:00'),
(314, '8839015', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 13:56:30', '2023-09-13 13:56:30'),
(315, '6820702', 306, 0, 3258.09, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 14:19:47', '2023-09-13 14:19:47'),
(316, '4733132', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 14:49:40', '2023-09-13 14:49:40'),
(317, '4124619', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 14:50:43', '2023-09-13 14:50:43'),
(318, '8558431', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 14:55:32', '2023-09-13 14:55:32'),
(319, '4517571', 306, 0, 3503.16, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 14:56:51', '2023-09-13 14:56:51'),
(320, '4708627', 306, 0, 3226.01, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:04:03', '2023-09-13 15:04:03'),
(321, '2135141', 306, 0, 3271.05, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:08:17', '2023-09-13 15:08:17'),
(322, '4636843', 306, 0, 3318, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:13:27', '2023-09-13 15:13:27'),
(323, '5589634', 306, 0, 3271.05, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:24:44', '2023-09-13 15:24:44'),
(324, '6641722', 306, 0, 3226.01, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:28:35', '2023-09-13 15:28:35'),
(325, '9445278', 306, 0, 3282.01, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:32:19', '2023-09-13 15:32:19'),
(326, '1746616', 306, 0, 3378.88, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:34:04', '2023-09-13 15:34:04'),
(327, '9329923', 306, 0, 3341.39, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:37:22', '2023-09-13 15:37:22'),
(328, '7670536', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-13 15:43:12', '2023-09-13 15:43:12'),
(329, '92055903332000000000000018', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-14 07:00:48', '2023-09-14 07:00:58'),
(330, '92055903332000000000000018', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-14 07:06:13', '2023-09-14 07:06:23'),
(331, '92701903332000000000000014', 306, 0, 3271.05, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-14 07:09:11', '2023-09-14 07:09:21'),
(332, '92055903332000000000000018', 306, 0, 3228.57, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 'Pending', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2023-09-14 07:48:39', '2023-09-14 07:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `billing_name` varchar(255) DEFAULT NULL,
  `billing_email` varchar(255) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_department` varchar(255) DEFAULT NULL,
  `billing_country` varchar(11) DEFAULT NULL,
  `billing_state` varchar(191) DEFAULT NULL,
  `billing_city` varchar(191) DEFAULT NULL,
  `billing_zip_code` varchar(255) DEFAULT NULL,
  `shipping_name` varchar(255) DEFAULT NULL,
  `shipping_email` varchar(255) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_country` varchar(191) DEFAULT NULL,
  `shipping_state` varchar(191) DEFAULT NULL,
  `shipping_city` varchar(191) DEFAULT NULL,
  `shipping_department` varchar(255) DEFAULT NULL,
  `shipping_zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `order_id`, `billing_name`, `billing_email`, `billing_phone`, `billing_address`, `billing_department`, `billing_country`, `billing_state`, `billing_city`, `billing_zip_code`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_address`, `shipping_country`, `shipping_state`, `shipping_city`, `shipping_department`, `shipping_zip_code`, `created_at`, `updated_at`) VALUES
(122, 134, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '160', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-08-15 12:24:53', '2023-08-15 12:24:53'),
(123, 135, 'Oleg', 'dovefobygo@mailinator.com', '+1 (172) 578-5252', 'Aliquam dolore elit', 'Officia ipsum expli', '167', '3037', 'lahore', 'Hadley', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:07:00', '2023-08-22 08:07:00'),
(124, 136, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:18:41', '2023-08-22 08:18:41'),
(125, 137, 'Skyler', 'fane@mailinator.com', '+1 (473) 178-8373', 'Ipsum quaerat amet', 'Aut pariatur Facili', '167', '3037', 'lahore', 'Logan', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:24:29', '2023-08-22 08:24:29'),
(126, 138, 'Skyler', 'fane@mailinator.com', '+1 (473) 178-8373', 'Ipsum quaerat amet', 'Aut pariatur Facili', '167', '3037', 'lahore', 'Logan', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:26:04', '2023-08-22 08:26:04'),
(127, 139, 'Skyler', 'fane@mailinator.com', '+1 (473) 178-8373', 'Ipsum quaerat amet', 'Aut pariatur Facili', '167', '3037', 'lahore', 'Logan', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:38:33', '2023-08-22 08:38:33'),
(128, 140, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 08:46:28', '2023-08-22 08:46:28'),
(129, 141, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 12:09:16', '2023-08-22 12:09:16'),
(130, 142, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-22 12:11:51', '2023-08-22 12:11:51'),
(131, 146, 'Samuel', 'gucopaw@mailinator.com', '+1 (688) 616-4697', '498 Rocky New Freeway', 'Accusamus illo paria', '111', '1967', 'Lana Burris', '35693', 'Samuel', 'gucopaw@mailinator.com', '+1 (688) 616-4697', '498 Rocky New Freeway', '111', '1967', 'Lana Burris', 'Accusamus illo paria', '35693', '2023-08-22 15:57:20', '2023-08-22 15:57:20'),
(132, 147, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-08-23 06:58:56', '2023-08-23 06:58:56'),
(133, 148, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-23 12:18:22', '2023-08-23 12:18:22'),
(134, 149, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-23 12:48:21', '2023-08-23 12:48:21'),
(135, 150, 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-23 14:07:29', '2023-08-23 14:07:29'),
(136, 151, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahore', '97297', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahore', 'Placeat nostrum ab', '97297', '2023-08-24 07:02:49', '2023-08-24 07:02:49'),
(137, 152, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahore', 'Placeat nostrum ab', 'lahore', '2023-08-24 07:14:58', '2023-08-24 07:14:58'),
(138, 153, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahoretayyabt', 'lahore', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahoretayyabt', 'Placeat nostrum ab', 'lahore', '2023-08-24 07:18:42', '2023-08-24 07:18:42'),
(139, 154, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953-809-1159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-08-24 13:13:48', '2023-08-24 13:13:48'),
(140, 155, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahoretayyabt', 'lahoretayyabt', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahoretayyabt', 'Placeat nostrum ab', 'lahoretayyabt', '2023-08-24 14:27:51', '2023-08-24 14:27:51'),
(141, 156, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahoretayyabt', 'lahoretayyabt', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahoretayyabt', 'Placeat nostrum ab', 'lahoretayyabt', '2023-08-24 14:35:25', '2023-08-24 14:35:25'),
(142, 157, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahoretayyabt', 'lahoretayyabt', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahoretayyabt', 'Placeat nostrum ab', 'lahoretayyabt', '2023-08-24 14:43:02', '2023-08-24 14:43:02'),
(143, 158, 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', 'Placeat nostrum ab', '167', '3037', 'lahoretayyabt', 'lahoretayyabt', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', '941 New Parkway', '167', '3037', 'lahoretayyabt', 'Placeat nostrum ab', 'lahoretayyabt', '2023-08-24 14:47:24', '2023-08-24 14:47:24'),
(144, 160, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03316145779', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-08-29 06:57:46', '2023-08-29 06:57:46'),
(145, 161, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03316145779', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-29 09:00:23', '2023-08-29 09:00:23'),
(146, 162, 'Price', 'usman@gmail.com', '953-809-11596', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 11:39:28', '2023-08-30 11:39:28'),
(147, 163, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 11:43:19', '2023-08-30 11:43:19'),
(148, 164, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 12:20:32', '2023-08-30 12:20:32'),
(149, 165, 'Price', 'usman@gmail.com', '953-809-11596', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 12:22:29', '2023-08-30 12:22:29'),
(150, 166, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 12:25:39', '2023-08-30 12:25:39'),
(151, 167, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 12:37:39', '2023-08-30 12:37:39'),
(152, 168, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 12:48:08', '2023-08-30 12:48:08'),
(153, 169, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:04:01', '2023-08-30 13:04:01'),
(154, 170, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:10:41', '2023-08-30 13:10:41'),
(155, 171, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:17:43', '2023-08-30 13:17:43'),
(156, 172, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:20:30', '2023-08-30 13:20:30'),
(157, 173, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:25:37', '2023-08-30 13:25:37'),
(158, 174, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:26:33', '2023-08-30 13:26:33'),
(159, 175, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:28:10', '2023-08-30 13:28:10'),
(160, 176, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:30:59', '2023-08-30 13:30:59'),
(161, 177, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:32:42', '2023-08-30 13:32:42'),
(162, 178, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '925142654123', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-08-30 13:34:43', '2023-08-30 13:34:43'),
(163, 179, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:19:02', '2023-09-08 11:19:02'),
(164, 180, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:22:29', '2023-09-08 11:22:29'),
(165, 181, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:24:37', '2023-09-08 11:24:37'),
(166, 182, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:25:52', '2023-09-08 11:25:52'),
(167, 183, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:27:47', '2023-09-08 11:27:47'),
(168, 184, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:29:49', '2023-09-08 11:29:49'),
(169, 185, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:32:01', '2023-09-08 11:32:01'),
(170, 186, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:32:47', '2023-09-08 11:32:47'),
(171, 187, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:33:06', '2023-09-08 11:33:06'),
(172, 188, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:33:55', '2023-09-08 11:33:55'),
(173, 189, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:34:41', '2023-09-08 11:34:41'),
(174, 190, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:35:32', '2023-09-08 11:35:32'),
(175, 191, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:35:54', '2023-09-08 11:35:54'),
(176, 192, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:36:43', '2023-09-08 11:36:43'),
(177, 193, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:37:33', '2023-09-08 11:37:33'),
(178, 194, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-08 11:38:01', '2023-09-08 11:38:01'),
(179, 195, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 11:43:35', '2023-09-08 11:43:35'),
(180, 196, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 11:47:36', '2023-09-08 11:47:36'),
(181, 197, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 11:52:04', '2023-09-08 11:52:04'),
(182, 198, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 12:29:42', '2023-09-08 12:29:42'),
(183, 199, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 12:34:11', '2023-09-08 12:34:11'),
(184, 200, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 12:44:12', '2023-09-08 12:44:12'),
(185, 201, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:29:17', '2023-09-08 15:29:17'),
(186, 202, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:29:41', '2023-09-08 15:29:41'),
(187, 203, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:30:13', '2023-09-08 15:30:13'),
(188, 204, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:31:19', '2023-09-08 15:31:19'),
(189, 205, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:32:17', '2023-09-08 15:32:17'),
(190, 206, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:33:25', '2023-09-08 15:33:25'),
(191, 207, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:33:46', '2023-09-08 15:33:46'),
(192, 208, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:34:09', '2023-09-08 15:34:09'),
(193, 209, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:35:57', '2023-09-08 15:35:57'),
(194, 210, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:40:59', '2023-09-08 15:40:59'),
(195, 211, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:43:07', '2023-09-08 15:43:07'),
(196, 212, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:47:40', '2023-09-08 15:47:40'),
(197, 213, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:49:25', '2023-09-08 15:49:25'),
(198, 214, 'Price', 'usman@gmail.com', '953-809-1159', '424', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:56:07', '2023-09-08 15:56:07'),
(199, 215, 'Price', 'usman@gmail.com', '953-809-1159', '424', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 15:56:53', '2023-09-08 15:56:53'),
(200, 216, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 16:06:21', '2023-09-08 16:06:21'),
(201, 217, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '95380923321159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-08 16:13:23', '2023-09-08 16:13:23'),
(202, 218, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-11 06:36:35', '2023-09-11 06:36:35'),
(203, 219, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-11 06:44:15', '2023-09-11 06:44:15'),
(204, 220, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-11 06:50:26', '2023-09-11 06:50:26'),
(205, 221, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-11 06:52:25', '2023-09-11 06:52:25'),
(206, 222, 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', 'lahore', 'Price', 'usman@gmail.com', '03325142115', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', 'lahore', '2023-09-11 07:41:58', '2023-09-11 07:41:58'),
(207, 223, 'tayyab sheikh', 'tayyab@gmail.com', '95348091159', 'Quidem molestiae par', 'Quam optio nisi lab', '233', '4794', 'mexico', '12752', 'tayyab sheikh', 'tayyab@gmail.com', '95348091159', 'Quidem molestiae par', '233', '4794', 'mexico', 'Quam optio nisi lab', '12752', '2023-09-11 07:45:50', '2023-09-11 07:45:50'),
(208, 224, 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '233', '4794', 'mexico', '12752', 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', '233', '4794', 'mexico', 'Quam optio nisi lab', '12752', '2023-09-11 07:53:24', '2023-09-11 07:53:24'),
(209, 225, 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '233', '4794', 'mexico', '12752', 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', '233', '4794', 'mexico', 'Quam optio nisi lab', '12752', '2023-09-11 07:56:08', '2023-09-11 07:56:08'),
(210, 226, 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '233', '4794', 'mexico', '12752', 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', '233', '4794', 'mexico', 'Quam optio nisi lab', '12752', '2023-09-11 07:59:05', '2023-09-11 07:59:05'),
(211, 227, 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '233', '4794', 'mexico', '12752', 'Prince', 'prince@gmail.com', '953480941159', 'Quidem molestiae par', '233', '4794', 'mexico', 'Quam optio nisi lab', '12752', '2023-09-11 08:03:30', '2023-09-11 08:03:30'),
(212, 228, 'Prince', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Prince', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 08:13:43', '2023-09-11 08:13:43'),
(213, 229, 'Prince', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94211', 'Prince', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94211', '2023-09-11 08:24:43', '2023-09-11 08:24:43'),
(214, 231, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 08:31:09', '2023-09-11 08:31:09'),
(215, 232, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 08:34:07', '2023-09-11 08:34:07'),
(216, 233, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 09:16:55', '2023-09-11 09:16:55'),
(217, 234, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 09:30:33', '2023-09-11 09:30:33'),
(218, 235, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 09:39:10', '2023-09-11 09:39:10'),
(219, 236, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 09:53:42', '2023-09-11 09:53:42'),
(220, 237, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 09:57:41', '2023-09-11 09:57:41'),
(221, 238, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 11:38:51', '2023-09-11 11:38:51'),
(222, 239, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 11:50:34', '2023-09-11 11:50:34'),
(223, 240, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 11:54:25', '2023-09-11 11:54:25'),
(224, 241, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 11:59:34', '2023-09-11 11:59:34'),
(225, 242, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:02:35', '2023-09-11 12:02:35'),
(226, 243, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:09:03', '2023-09-11 12:09:03'),
(227, 244, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:12:11', '2023-09-11 12:12:11'),
(228, 245, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:18:20', '2023-09-11 12:18:20'),
(229, 246, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:23:41', '2023-09-11 12:23:41'),
(230, 247, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:26:33', '2023-09-11 12:26:33'),
(231, 248, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:29:49', '2023-09-11 12:29:49'),
(232, 249, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:37:57', '2023-09-11 12:37:57'),
(233, 250, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:53:07', '2023-09-11 12:53:07'),
(234, 251, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 12:59:18', '2023-09-11 12:59:18'),
(235, 252, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:02:34', '2023-09-11 13:02:34'),
(236, 253, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:18:23', '2023-09-11 13:18:23'),
(237, 254, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:22:59', '2023-09-11 13:22:59'),
(238, 255, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:26:44', '2023-09-11 13:26:44'),
(239, 256, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:31:24', '2023-09-11 13:31:24'),
(240, 257, 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'Sultan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:40:12', '2023-09-11 13:40:12'),
(241, 258, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-11 13:44:58', '2023-09-11 13:44:58'),
(242, 259, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 13:52:29', '2023-09-11 13:52:29'),
(243, 260, 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-11 13:56:13', '2023-09-11 13:56:13'),
(244, 261, 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-11 13:56:25', '2023-09-11 13:56:25'),
(245, 262, 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-11 13:56:45', '2023-09-11 13:56:45'),
(246, 263, 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '953280921159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-11 13:57:04', '2023-09-11 13:57:04'),
(247, 264, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:02:15', '2023-09-11 14:02:15'),
(248, 265, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:12:53', '2023-09-11 14:12:53'),
(249, 266, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:24:35', '2023-09-11 14:24:35'),
(250, 267, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:27:05', '2023-09-11 14:27:05'),
(251, 268, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:33:07', '2023-09-11 14:33:07'),
(252, 269, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:35:40', '2023-09-11 14:35:40'),
(253, 270, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:45:01', '2023-09-11 14:45:01'),
(254, 271, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:48:38', '2023-09-11 14:48:38'),
(255, 272, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:56:45', '2023-09-11 14:56:45'),
(256, 273, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 14:59:45', '2023-09-11 14:59:45'),
(257, 274, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 15:06:46', '2023-09-11 15:06:46'),
(258, 275, 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new York', '94103', 'khan', 'prince@gmail.com', '953480941159', '965 Mission St #572', '233', '4795', 'new York', 'Quam optio nisi lab', '94103', '2023-09-11 16:18:02', '2023-09-11 16:18:02'),
(259, 276, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953380931159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-12 06:29:10', '2023-09-12 06:29:10'),
(260, 277, 'Price', 'usman@gmail.com', '953-809-1159', 'Incidunt maxime non', 'Autem velit non est', '233', '2955', 'Lahore', '18556', 'Price', 'usman@gmail.com', '953380931159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-12 06:33:00', '2023-09-12 06:33:00'),
(261, 278, 'Jenette', 'suxygot@mailinator.com', '92514212365', '23 White Nobel Street', 'Nulla perferendis qu', '233', '4795', 'new york', '28867', 'Jenette', 'suxygot@mailinator.com', '92514212365', '23 White Nobel Street', '233', '4795', 'new york', 'Nulla perferendis qu', '28867', '2023-09-12 06:39:21', '2023-09-12 06:39:21'),
(262, 279, 'Malik', 'dupatufak@mailinator.com', '92514251262', '933 Rocky Milton Avenue', 'Est molestias quia', '233', '4795', 'new york', '94103', 'Malik', 'dupatufak@mailinator.com', '92514251262', '933 Rocky Milton Avenue', '233', '4795', 'new york', 'Est molestias quia', '94103', '2023-09-12 06:48:58', '2023-09-12 06:48:58'),
(263, 280, 'Samantha', 'jebywuhew@mailinator.com', '925142152365', '965 Mission St #572', 'Tempora saepe incidu', '233', '4795', 'new york', '94103', 'Samantha', 'jebywuhew@mailinator.com', '925142152365', '965 Mission St #572', '233', '4795', 'new york', 'Tempora saepe incidu', '94103', '2023-09-12 07:00:03', '2023-09-12 07:00:03'),
(264, 282, 'usman', 'usman123456@gmail.com', '195235586174', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'usman', 'usman123456@gmail.com', '195235586174', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-12 07:22:55', '2023-09-12 07:22:55'),
(265, 283, 'Price', 'usman@gmail.com', '953880941159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953880941159', '965 Mission St #572', '233', '4795', 'new york', 'Quam optio nisi lab', '94103', '2023-09-12 07:43:35', '2023-09-12 07:43:35'),
(266, 284, 'usmanusman', 'usman321654@gmail.com', '925142155112', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'usmanusman', 'usman321654@gmail.com', '925142155112', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-12 07:48:46', '2023-09-12 07:48:46'),
(267, 285, 'Price', 'usman@gmail.com', '59538091159', '965 Mission St #572', 'Quam optio nisi lab', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '59538091159', '965 Mission St #572', '233', '4795', 'new york', 'Quam optio nisi lab', '94103', '2023-09-12 12:17:10', '2023-09-12 12:17:10'),
(268, 286, 'Price', 'usman@gmail.com', '95398091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '95398091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-12 12:36:29', '2023-09-12 12:36:29'),
(269, 287, 'Price', 'usman@gmail.com', '95398091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '95398091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-12 12:39:30', '2023-09-12 12:39:30'),
(270, 288, 'Price', 'usman@gmail.com', '953850911596', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953850911596', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-12 12:54:05', '2023-09-12 12:54:05'),
(271, 289, 'Price', 'usman@gmail.com', '449538091159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '449538091159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-13 06:58:38', '2023-09-13 06:58:38'),
(272, 290, 'Price', 'usman@gmail.com', '953380931159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '953380931159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-13 07:01:41', '2023-09-13 07:01:41'),
(273, 291, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 11:51:14', '2023-09-13 11:51:14'),
(274, 292, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 11:51:38', '2023-09-13 11:51:38'),
(275, 293, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 11:57:07', '2023-09-13 11:57:07'),
(276, 294, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 12:02:58', '2023-09-13 12:02:58'),
(277, 295, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 12:04:50', '2023-09-13 12:04:50'),
(278, 296, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '160', '2952', 'chatham islands', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '160', '2952', 'chatham islands', '965 Mission St #572', '94103', '2023-09-13 12:09:11', '2023-09-13 12:09:11'),
(279, 297, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 12:18:26', '2023-09-13 12:18:26'),
(280, 298, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 12:18:45', '2023-09-13 12:18:45');
INSERT INTO `order_addresses` (`id`, `order_id`, `billing_name`, `billing_email`, `billing_phone`, `billing_address`, `billing_department`, `billing_country`, `billing_state`, `billing_city`, `billing_zip_code`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_address`, `shipping_country`, `shipping_state`, `shipping_city`, `shipping_department`, `shipping_zip_code`, `created_at`, `updated_at`) VALUES
(281, 299, 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-13 12:24:38', '2023-09-13 12:24:38'),
(282, 300, 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-13 12:26:52', '2023-09-13 12:26:52'),
(283, 301, 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', 'Quam optio nisi lab', '160', '2952', 'lahore', '12752', 'Price', 'usman@gmail.com', '4953480941159', 'Quidem molestiae par', '160', '2952', 'lahore', 'Quam optio nisi lab', '12752', '2023-09-13 12:32:24', '2023-09-13 12:32:24'),
(284, 302, 'Price', 'usman@gmail.com', '95380933331159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '95380933331159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 12:36:16', '2023-09-13 12:36:16'),
(285, 303, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '232', '4510', 'antrim', '94103', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '232', '4510', 'antrim', '965 Mission St #572', '94103', '2023-09-13 13:07:18', '2023-09-13 13:07:18'),
(286, 304, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '232', '4510', 'antrim', '94103', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '232', '4510', 'antrim', '965 Mission St #572', '94103', '2023-09-13 13:29:55', '2023-09-13 13:29:55'),
(287, 305, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:47:00', '2023-09-13 13:47:00'),
(288, 306, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:48:00', '2023-09-13 13:48:00'),
(289, 307, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:49:54', '2023-09-13 13:49:54'),
(290, 308, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:50:43', '2023-09-13 13:50:43'),
(291, 309, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:50:55', '2023-09-13 13:50:55'),
(292, 310, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:51:09', '2023-09-13 13:51:09'),
(293, 311, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:51:37', '2023-09-13 13:51:37'),
(294, 312, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:52:03', '2023-09-13 13:52:03'),
(295, 313, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:55:05', '2023-09-13 13:55:05'),
(296, 314, 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953328091159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 13:56:36', '2023-09-13 13:56:36'),
(297, 315, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '232', '4510', 'antrim', '94103', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '232', '4510', 'antrim', '965 Mission St #572', '94103', '2023-09-13 14:19:53', '2023-09-13 14:19:53'),
(298, 316, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '247', '4983', 'manicaland', '98754', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '247', '4983', 'manicaland', '965 Mission St #572', '98754', '2023-09-13 14:49:48', '2023-09-13 14:49:48'),
(299, 317, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '247', '4983', 'manicaland', '98754', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '247', '4983', 'manicaland', '965 Mission St #572', '98754', '2023-09-13 14:50:51', '2023-09-13 14:50:51'),
(300, 318, 'Price', 'usman@gmail.com', '9532280921159', 'Pvt Ltd Shop 4 Prince Edward Kensington', 'Pvt Ltd Shop 4 Prince Edward Kensington', '247', '4982', 'harare', 'ZW102102', 'Price', 'usman@gmail.com', '9532280921159', 'Pvt Ltd Shop 4 Prince Edward Kensington', '247', '4982', 'harare', 'Pvt Ltd Shop 4 Prince Edward Kensington', 'ZW102102', '2023-09-13 14:55:38', '2023-09-13 14:55:38'),
(301, 319, 'Price', 'usman@gmail.com', '9532280921159', 'Pvt Ltd Shop 4 Prince Edward Kensington', 'Pvt Ltd Shop 4 Prince Edward Kensington', '247', '4982', 'harare', 'ZW102102', 'Price', 'usman@gmail.com', '9532280921159', 'Pvt Ltd Shop 4 Prince Edward Kensington', '247', '4982', 'harare', 'Pvt Ltd Shop 4 Prince Edward Kensington', 'ZW102102', '2023-09-13 14:56:56', '2023-09-13 14:56:56'),
(302, 320, 'Price', 'usman@gmail.com', '9532280921159', '1632 Prospect Street', '1632 Prospect Street', '233', '4793', 'Laurel Springs', '08021', 'Price', 'usman@gmail.com', '9532280921159', '1632 Prospect Street', '233', '4793', 'Laurel Springs', '1632 Prospect Street', '08021', '2023-09-13 15:04:08', '2023-09-13 15:04:08'),
(303, 321, 'Price', 'usman@gmail.com', '9532280921159', '629 Clover Drive', '629 Clover Drive', '233', '4792', 'Acworth', '03601', 'Price', 'usman@gmail.com', '9532280921159', '629 Clover Drive', '233', '4792', 'Acworth', '629 Clover Drive', '03601', '2023-09-13 15:08:22', '2023-09-13 15:08:22'),
(304, 322, 'Price', 'usman@gmail.com', '9532280921159', '63 Monks Way', '63 Monks Way', '232', '4663', 'Tomnacross', 'IV4 9PZ', 'Price', 'usman@gmail.com', '9532280921159', '63 Monks Way', '232', '4663', 'Tomnacross', '63 Monks Way', 'IV4 9PZ', '2023-09-13 15:13:33', '2023-09-13 15:13:33'),
(305, 323, 'Price', 'usman@gmail.com', '9532280921159', '857 Marigold Lane', '857 Marigold Lane', '233', '4754', 'New Bedford', '02744', 'Price', 'usman@gmail.com', '9532280921159', '857 Marigold Lane', '233', '4754', 'New Bedford', '857 Marigold Lane', '02744', '2023-09-13 15:24:49', '2023-09-13 15:24:49'),
(306, 324, 'Price', 'usman@gmail.com', '9532280921159', 'Monticello, FL 32344, USA', 'Monticello, FL 32344, USA', '233', '4783', 'Pontiac', '48342', 'Price', 'usman@gmail.com', '9532280921159', 'Monticello, FL 32344, USA', '233', '4783', 'Pontiac', 'Monticello, FL 32344, USA', '48342', '2023-09-13 15:28:40', '2023-09-13 15:28:40'),
(307, 325, 'Price', 'usman@gmail.com', '9532280921159', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '167', '3038', 'Sindh', '05444', 'Price', 'usman@gmail.com', '9532280921159', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '167', '3038', 'Sindh', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '05444', '2023-09-13 15:32:25', '2023-09-13 15:32:25'),
(308, 326, 'Price', 'usman@gmail.com', '9532280921159', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '167', '3038', 'Sindh', '05444', 'Price', 'usman@gmail.com', '9532280921159', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '167', '3038', 'Sindh', '3rd Floor, Al Yousuf ChamberShahra-e-Liaquat, Karachi', '05444', '2023-09-13 15:34:09', '2023-09-13 15:34:09'),
(309, 327, 'Price', 'usman@gmail.com', '9532280921159', '197 1 Jln Padungan Kuching', '197 1 Jln Padungan Kuching', '132', '2487', 'Kuching', '93100', 'Price', 'usman@gmail.com', '9532280921159', '197 1 Jln Padungan Kuching', '132', '2487', 'Kuching', '197 1 Jln Padungan Kuching', '93100', '2023-09-13 15:37:27', '2023-09-13 15:37:27'),
(310, 328, 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '9532280921159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-13 15:43:17', '2023-09-13 15:43:17'),
(311, 329, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-14 07:00:54', '2023-09-14 07:00:54'),
(312, 330, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-14 07:06:19', '2023-09-14 07:06:19'),
(313, 331, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-14 07:09:17', '2023-09-14 07:09:17'),
(314, 332, 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '965 Mission St #572', '233', '4795', 'new york', '94103', 'Price', 'usman@gmail.com', '953380931159', '965 Mission St #572', '233', '4795', 'new york', '965 Mission St #572', '94103', '2023-09-14 07:48:44', '2023-09-14 07:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `product_name` varchar(255) NOT NULL,
  `unit_price` double NOT NULL DEFAULT 0,
  `vat` double NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `seller_id`, `product_name`, `unit_price`, `vat`, `qty`, `created_at`, `updated_at`, `deleted_at`) VALUES
(274, 134, 1293, 307, 'Victor Carney', 408, 0, 1, '2023-08-15 12:24:53', '2023-08-24 11:13:05', '2023-08-24 11:13:05'),
(277, 135, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:07:00', '2023-08-24 11:32:33', '2023-08-24 11:32:33'),
(278, 135, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:07:00', '2023-08-24 11:32:33', '2023-08-24 11:32:33'),
(279, 136, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:18:41', '2023-08-24 11:31:05', '2023-08-24 11:31:05'),
(280, 136, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:18:41', '2023-08-24 11:31:05', '2023-08-24 11:31:05'),
(281, 137, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:24:29', '2023-08-22 08:24:29', NULL),
(282, 137, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:24:29', '2023-08-22 08:24:29', NULL),
(283, 138, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:26:04', '2023-08-22 08:26:04', NULL),
(284, 138, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:26:04', '2023-08-22 08:26:04', NULL),
(285, 139, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:38:33', '2023-08-22 08:38:33', NULL),
(286, 139, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:38:33', '2023-08-22 08:38:33', NULL),
(287, 140, 1301, 307, 'Chase Witt', 808, 0, 8, '2023-08-22 08:46:28', '2023-08-22 08:46:28', NULL),
(288, 140, 1294, 307, 'Garrett Beck', 452, 0, 5, '2023-08-22 08:46:28', '2023-08-22 08:46:28', NULL),
(289, 141, 1301, 307, 'Chase Witt', 808, 0, 2, '2023-08-22 12:09:16', '2023-08-22 12:09:16', NULL),
(290, 141, 1294, 307, 'Garrett Beck', 452, 0, 2, '2023-08-22 12:09:16', '2023-08-22 12:09:16', NULL),
(291, 142, 1301, 307, 'Chase Witt', 808, 0, 2, '2023-08-22 12:11:51', '2023-08-22 12:11:51', NULL),
(292, 142, 1294, 307, 'Garrett Beck', 452, 0, 2, '2023-08-22 12:11:51', '2023-08-22 12:11:51', NULL),
(293, 146, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-22 15:57:20', '2023-08-22 15:57:20', NULL),
(294, 146, 1301, 307, 'Chase Witt', 808, 0, 1, '2023-08-22 15:57:20', '2023-08-22 15:57:20', NULL),
(295, 147, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-23 06:58:56', '2023-08-23 06:58:56', NULL),
(296, 147, 1301, 307, 'Chase Witt', 808, 0, 2, '2023-08-23 06:58:56', '2023-08-23 06:58:56', NULL),
(297, 148, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-23 12:18:22', '2023-08-23 12:18:22', NULL),
(298, 148, 1301, 307, 'Chase Witt', 808, 0, 2, '2023-08-23 12:18:23', '2023-08-23 12:18:23', NULL),
(299, 149, 1294, 307, 'Garrett Beck', 452, 0, 3, '2023-08-23 12:48:21', '2023-08-23 12:48:21', NULL),
(300, 149, 1301, 307, 'Chase Witt', 808, 0, 3, '2023-08-23 12:48:21', '2023-08-23 12:48:21', NULL),
(301, 150, 1294, 307, 'Garrett Beck', 452, 0, 3, '2023-08-23 14:07:29', '2023-08-23 14:07:29', NULL),
(302, 150, 1301, 307, 'Chase Witt', 808, 0, 3, '2023-08-23 14:07:29', '2023-08-23 14:07:29', NULL),
(303, 151, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-24 07:02:49', '2023-08-24 07:02:49', NULL),
(304, 151, 1301, 307, 'Chase Witt', 808, 0, 1, '2023-08-24 07:02:49', '2023-08-24 07:02:49', NULL),
(305, 152, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-24 07:14:58', '2023-08-24 07:14:58', NULL),
(306, 152, 1301, 307, 'Chase Witt', 808, 0, 1, '2023-08-24 07:14:58', '2023-08-24 07:14:58', NULL),
(307, 153, 1294, 307, 'Garrett Beck', 452, 0, 1, '2023-08-24 07:18:42', '2023-08-24 07:18:42', NULL),
(308, 153, 1301, 307, 'Chase Witt', 808, 0, 1, '2023-08-24 07:18:42', '2023-08-24 07:18:42', NULL),
(309, 154, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-24 13:13:48', '2023-08-24 13:13:48', NULL),
(310, 155, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-24 14:27:51', '2023-08-24 14:27:51', NULL),
(311, 155, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-24 14:27:51', '2023-08-24 14:27:51', NULL),
(312, 156, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-24 14:35:25', '2023-08-24 14:35:25', NULL),
(313, 156, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-24 14:35:25', '2023-08-24 14:35:25', NULL),
(314, 157, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-24 14:43:02', '2023-08-24 14:43:02', NULL),
(315, 157, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-24 14:43:02', '2023-08-24 14:43:02', NULL),
(316, 158, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-24 14:47:24', '2023-08-24 14:47:24', NULL),
(317, 158, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-24 14:47:24', '2023-08-24 14:47:24', NULL),
(318, 160, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-29 06:57:46', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(319, 160, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-29 06:57:46', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(320, 161, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-29 09:00:23', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(321, 161, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-29 09:00:23', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(322, 162, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 11:39:28', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(323, 162, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 11:39:28', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(324, 163, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 11:43:19', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(325, 163, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 11:43:19', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(326, 164, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 12:20:32', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(327, 164, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 12:20:32', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(328, 165, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 12:22:29', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(329, 165, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 12:22:29', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(330, 166, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 12:25:39', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(331, 166, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 12:25:39', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(332, 167, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 12:37:39', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(333, 167, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 12:37:39', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(334, 168, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 12:48:08', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(335, 168, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 12:48:08', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(336, 169, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:04:01', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(337, 169, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:04:01', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(338, 170, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:10:41', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(339, 170, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:10:41', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(340, 171, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:17:43', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(341, 171, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:17:43', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(342, 172, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:20:30', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(343, 172, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:20:30', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(344, 173, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:25:37', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(345, 173, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:25:37', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(346, 174, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:26:33', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(347, 174, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:26:33', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(348, 175, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:28:10', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(349, 175, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:28:10', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(350, 176, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:30:59', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(351, 176, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:30:59', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(352, 177, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:32:42', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(353, 177, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:32:42', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(354, 178, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-08-30 13:34:44', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(355, 178, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-08-30 13:34:44', '2023-09-04 13:23:09', '2023-09-04 13:23:09'),
(356, 179, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:19:02', '2023-09-08 11:19:02', NULL),
(357, 179, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:19:02', '2023-09-08 11:19:02', NULL),
(358, 180, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:22:29', '2023-09-08 11:22:29', NULL),
(359, 180, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:22:29', '2023-09-08 11:22:29', NULL),
(360, 181, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:24:37', '2023-09-08 11:24:37', NULL),
(361, 181, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:24:37', '2023-09-08 11:24:37', NULL),
(362, 182, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:25:52', '2023-09-08 11:25:52', NULL),
(363, 182, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:25:52', '2023-09-08 11:25:52', NULL),
(364, 183, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:27:47', '2023-09-08 11:27:47', NULL),
(365, 183, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:27:47', '2023-09-08 11:27:47', NULL),
(366, 184, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:29:49', '2023-09-08 11:29:49', NULL),
(367, 184, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:29:49', '2023-09-08 11:29:49', NULL),
(368, 185, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:32:01', '2023-09-08 11:32:01', NULL),
(369, 185, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:32:01', '2023-09-08 11:32:01', NULL),
(370, 186, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:32:47', '2023-09-08 11:32:47', NULL),
(371, 186, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:32:47', '2023-09-08 11:32:47', NULL),
(372, 187, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:33:06', '2023-09-08 11:33:06', NULL),
(373, 187, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:33:06', '2023-09-08 11:33:06', NULL),
(374, 188, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:33:55', '2023-09-08 11:33:55', NULL),
(375, 188, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:33:55', '2023-09-08 11:33:55', NULL),
(376, 189, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:34:41', '2023-09-08 11:34:41', NULL),
(377, 189, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:34:41', '2023-09-08 11:34:41', NULL),
(378, 190, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:35:32', '2023-09-08 11:35:32', NULL),
(379, 190, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:35:32', '2023-09-08 11:35:32', NULL),
(380, 191, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:35:54', '2023-09-08 11:35:54', NULL),
(381, 191, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:35:55', '2023-09-08 11:35:55', NULL),
(382, 192, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:36:43', '2023-09-08 11:36:43', NULL),
(383, 192, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:36:43', '2023-09-08 11:36:43', NULL),
(384, 193, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:37:33', '2023-09-08 11:37:33', NULL),
(385, 193, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:37:33', '2023-09-08 11:37:33', NULL),
(386, 194, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:38:01', '2023-09-08 11:38:01', NULL),
(387, 194, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:38:01', '2023-09-08 11:38:01', NULL),
(388, 195, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:43:35', '2023-09-08 11:43:35', NULL),
(389, 195, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:43:35', '2023-09-08 11:43:35', NULL),
(390, 196, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:47:37', '2023-09-08 11:47:37', NULL),
(391, 196, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:47:37', '2023-09-08 11:47:37', NULL),
(392, 197, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 11:52:04', '2023-09-08 11:52:04', NULL),
(393, 197, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 11:52:04', '2023-09-08 11:52:04', NULL),
(394, 198, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 12:29:42', '2023-09-08 12:29:42', NULL),
(395, 198, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 12:29:42', '2023-09-08 12:29:42', NULL),
(396, 199, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 12:34:11', '2023-09-08 12:34:11', NULL),
(397, 199, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 12:34:11', '2023-09-08 12:34:11', NULL),
(398, 200, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 12:44:12', '2023-09-08 12:44:12', NULL),
(399, 200, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 12:44:12', '2023-09-08 12:44:12', NULL),
(400, 201, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:29:17', '2023-09-08 15:29:17', NULL),
(401, 201, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:29:17', '2023-09-08 15:29:17', NULL),
(402, 202, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:29:41', '2023-09-08 15:29:41', NULL),
(403, 202, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:29:41', '2023-09-08 15:29:41', NULL),
(404, 203, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:30:13', '2023-09-08 15:30:13', NULL),
(405, 203, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:30:13', '2023-09-08 15:30:13', NULL),
(406, 204, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:31:19', '2023-09-08 15:31:19', NULL),
(407, 204, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:31:19', '2023-09-08 15:31:19', NULL),
(408, 205, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:32:17', '2023-09-08 15:32:17', NULL),
(409, 205, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:32:17', '2023-09-08 15:32:17', NULL),
(410, 206, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:33:25', '2023-09-08 15:33:25', NULL),
(411, 206, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:33:25', '2023-09-08 15:33:25', NULL),
(412, 207, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:33:46', '2023-09-08 15:33:46', NULL),
(413, 207, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:33:46', '2023-09-08 15:33:46', NULL),
(414, 208, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:34:09', '2023-09-08 15:34:09', NULL),
(415, 208, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:34:09', '2023-09-08 15:34:09', NULL),
(416, 209, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:35:57', '2023-09-08 15:35:57', NULL),
(417, 209, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:35:57', '2023-09-08 15:35:57', NULL),
(418, 210, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:40:59', '2023-09-08 15:40:59', NULL),
(419, 210, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:40:59', '2023-09-08 15:40:59', NULL),
(420, 211, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:43:08', '2023-09-08 15:43:08', NULL),
(421, 211, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:43:08', '2023-09-08 15:43:08', NULL),
(422, 212, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:47:40', '2023-09-08 15:47:40', NULL),
(423, 212, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:47:40', '2023-09-08 15:47:40', NULL),
(424, 213, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:49:25', '2023-09-08 15:49:25', NULL),
(425, 213, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:49:25', '2023-09-08 15:49:25', NULL),
(426, 214, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:56:07', '2023-09-08 15:56:07', NULL),
(427, 214, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:56:07', '2023-09-08 15:56:07', NULL),
(428, 215, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 15:56:53', '2023-09-08 15:56:53', NULL),
(429, 215, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 15:56:53', '2023-09-08 15:56:53', NULL),
(430, 216, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 16:06:21', '2023-09-08 16:06:21', NULL),
(431, 216, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 16:06:21', '2023-09-08 16:06:21', NULL),
(432, 217, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-08 16:13:23', '2023-09-08 16:13:23', NULL),
(433, 217, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-08 16:13:23', '2023-09-08 16:13:23', NULL),
(434, 218, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 06:36:35', '2023-09-11 06:36:35', NULL),
(435, 218, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 06:36:35', '2023-09-11 06:36:35', NULL),
(436, 219, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 06:44:16', '2023-09-11 06:44:16', NULL),
(437, 219, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 06:44:16', '2023-09-11 06:44:16', NULL),
(438, 220, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 06:50:26', '2023-09-11 06:50:26', NULL),
(439, 220, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 06:50:26', '2023-09-11 06:50:26', NULL),
(440, 221, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 06:52:25', '2023-09-11 06:52:25', NULL),
(441, 221, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 06:52:25', '2023-09-11 06:52:25', NULL),
(442, 222, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 07:41:58', '2023-09-11 07:41:58', NULL),
(443, 222, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 07:41:58', '2023-09-11 07:41:58', NULL),
(444, 223, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 07:45:50', '2023-09-11 07:45:50', NULL),
(445, 223, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 07:45:50', '2023-09-11 07:45:50', NULL),
(446, 224, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 07:53:24', '2023-09-11 07:53:24', NULL),
(447, 224, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 07:53:24', '2023-09-11 07:53:24', NULL),
(448, 225, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 07:56:08', '2023-09-11 07:56:08', NULL),
(449, 225, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 07:56:08', '2023-09-11 07:56:08', NULL),
(450, 226, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 07:59:05', '2023-09-11 07:59:05', NULL),
(451, 226, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 07:59:05', '2023-09-11 07:59:05', NULL),
(452, 227, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 08:03:30', '2023-09-11 08:03:30', NULL),
(453, 227, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 08:03:30', '2023-09-11 08:03:30', NULL),
(454, 228, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 08:13:43', '2023-09-11 08:13:43', NULL),
(455, 228, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 08:13:43', '2023-09-11 08:13:43', NULL),
(456, 229, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 08:24:43', '2023-09-11 08:24:43', NULL),
(457, 229, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 08:24:43', '2023-09-11 08:24:43', NULL),
(458, 231, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 08:31:09', '2023-09-11 08:31:09', NULL),
(459, 231, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 08:31:09', '2023-09-11 08:31:09', NULL),
(460, 232, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 08:34:07', '2023-09-11 08:34:07', NULL),
(461, 232, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 08:34:07', '2023-09-11 08:34:07', NULL),
(462, 233, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 09:16:55', '2023-09-11 09:16:55', NULL),
(463, 233, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 09:16:55', '2023-09-11 09:16:55', NULL),
(464, 234, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 09:30:33', '2023-09-11 09:30:33', NULL),
(465, 234, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 09:30:33', '2023-09-11 09:30:33', NULL),
(466, 235, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 09:39:10', '2023-09-11 09:39:10', NULL),
(467, 235, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 09:39:10', '2023-09-11 09:39:10', NULL),
(468, 236, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 09:53:43', '2023-09-11 09:53:43', NULL),
(469, 236, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 09:53:43', '2023-09-11 09:53:43', NULL),
(470, 237, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 09:57:41', '2023-09-11 09:57:41', NULL),
(471, 237, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 09:57:41', '2023-09-11 09:57:41', NULL),
(472, 238, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 11:38:51', '2023-09-11 11:38:51', NULL),
(473, 238, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 11:38:51', '2023-09-11 11:38:51', NULL),
(474, 239, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 11:50:34', '2023-09-11 11:50:34', NULL),
(475, 239, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 11:50:34', '2023-09-11 11:50:34', NULL),
(476, 240, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 11:54:25', '2023-09-11 11:54:25', NULL),
(477, 240, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 11:54:25', '2023-09-11 11:54:25', NULL),
(478, 241, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 11:59:34', '2023-09-11 11:59:34', NULL),
(479, 241, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 11:59:34', '2023-09-11 11:59:34', NULL),
(480, 242, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:02:35', '2023-09-11 12:02:35', NULL),
(481, 242, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:02:35', '2023-09-11 12:02:35', NULL),
(482, 243, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:09:03', '2023-09-11 12:09:03', NULL),
(483, 243, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:09:04', '2023-09-11 12:09:04', NULL),
(484, 244, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:12:11', '2023-09-11 12:12:11', NULL),
(485, 244, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:12:11', '2023-09-11 12:12:11', NULL),
(486, 245, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:18:20', '2023-09-11 12:18:20', NULL),
(487, 245, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:18:20', '2023-09-11 12:18:20', NULL),
(488, 246, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:23:41', '2023-09-11 12:23:41', NULL),
(489, 246, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:23:41', '2023-09-11 12:23:41', NULL),
(490, 247, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:26:33', '2023-09-11 12:26:33', NULL),
(491, 247, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:26:33', '2023-09-11 12:26:33', NULL),
(492, 248, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:29:49', '2023-09-11 12:29:49', NULL),
(493, 248, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:29:49', '2023-09-11 12:29:49', NULL),
(494, 249, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:37:57', '2023-09-11 12:37:57', NULL),
(495, 249, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:37:57', '2023-09-11 12:37:57', NULL),
(496, 250, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:53:07', '2023-09-11 12:53:07', NULL),
(497, 250, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:53:07', '2023-09-11 12:53:07', NULL),
(498, 251, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 12:59:18', '2023-09-11 12:59:18', NULL),
(499, 251, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 12:59:18', '2023-09-11 12:59:18', NULL),
(500, 252, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:02:34', '2023-09-11 13:02:34', NULL),
(501, 252, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:02:34', '2023-09-11 13:02:34', NULL),
(502, 253, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:18:23', '2023-09-11 13:18:23', NULL),
(503, 253, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:18:23', '2023-09-11 13:18:23', NULL),
(504, 254, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:22:59', '2023-09-11 13:22:59', NULL),
(505, 254, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:22:59', '2023-09-11 13:22:59', NULL),
(506, 255, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:26:44', '2023-09-11 13:26:44', NULL),
(507, 255, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:26:44', '2023-09-11 13:26:44', NULL),
(508, 256, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:31:24', '2023-09-11 13:31:24', NULL),
(509, 256, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:31:24', '2023-09-11 13:31:24', NULL),
(510, 257, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:40:12', '2023-09-11 13:40:12', NULL),
(511, 257, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:40:12', '2023-09-11 13:40:12', NULL),
(512, 258, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:44:58', '2023-09-11 13:44:58', NULL),
(513, 258, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:44:58', '2023-09-11 13:44:58', NULL),
(514, 259, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:52:29', '2023-09-11 13:52:29', NULL),
(515, 259, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:52:29', '2023-09-11 13:52:29', NULL),
(516, 260, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:56:13', '2023-09-11 13:56:13', NULL),
(517, 260, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:56:13', '2023-09-11 13:56:13', NULL),
(518, 261, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:56:25', '2023-09-11 13:56:25', NULL),
(519, 261, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:56:25', '2023-09-11 13:56:25', NULL),
(520, 262, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:56:45', '2023-09-11 13:56:45', NULL),
(521, 262, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:56:45', '2023-09-11 13:56:45', NULL),
(522, 263, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 13:57:04', '2023-09-11 13:57:04', NULL),
(523, 263, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 13:57:04', '2023-09-11 13:57:04', NULL),
(524, 264, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 14:02:15', '2023-09-11 14:02:15', NULL),
(525, 264, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:02:15', '2023-09-11 14:02:15', NULL),
(526, 265, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 14:12:53', '2023-09-11 14:12:53', NULL),
(527, 265, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:12:53', '2023-09-11 14:12:53', NULL),
(528, 266, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 14:24:35', '2023-09-11 14:24:35', NULL),
(529, 266, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:24:35', '2023-09-11 14:24:35', NULL),
(530, 267, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 14:27:05', '2023-09-11 14:27:05', NULL),
(531, 267, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:27:05', '2023-09-11 14:27:05', NULL),
(532, 268, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-11 14:33:07', '2023-09-11 14:33:07', NULL),
(533, 268, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:33:07', '2023-09-11 14:33:07', NULL),
(534, 269, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:35:40', '2023-09-11 14:35:40', NULL),
(535, 270, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:45:01', '2023-09-11 14:45:01', NULL),
(536, 271, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:48:38', '2023-09-11 14:48:38', NULL),
(537, 272, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:56:45', '2023-09-11 14:56:45', NULL),
(538, 273, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 14:59:45', '2023-09-11 14:59:45', NULL),
(539, 274, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 15:06:46', '2023-09-11 15:06:46', NULL),
(540, 275, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-11 16:18:02', '2023-09-11 16:18:02', NULL),
(541, 276, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 06:29:10', '2023-09-12 06:29:10', NULL),
(542, 276, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 06:29:10', '2023-09-12 06:29:10', NULL),
(543, 277, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 06:33:00', '2023-09-12 06:33:00', NULL),
(544, 277, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 06:33:00', '2023-09-12 06:33:00', NULL),
(545, 278, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 06:39:21', '2023-09-12 06:39:21', NULL),
(546, 278, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 06:39:21', '2023-09-12 06:39:21', NULL),
(547, 279, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 06:48:58', '2023-09-12 06:48:58', NULL),
(548, 280, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 07:00:03', '2023-09-12 07:00:03', NULL),
(549, 280, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 07:00:03', '2023-09-12 07:00:03', NULL),
(550, 282, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 07:22:55', '2023-09-12 07:22:55', NULL),
(551, 282, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 07:22:55', '2023-09-12 07:22:55', NULL),
(552, 283, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 07:43:35', '2023-09-12 07:43:35', NULL),
(553, 283, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 07:43:35', '2023-09-12 07:43:35', NULL),
(554, 284, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 07:48:46', '2023-09-12 07:48:46', NULL),
(555, 284, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 07:48:46', '2023-09-12 07:48:46', NULL),
(556, 285, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 12:17:11', '2023-09-12 12:17:11', NULL),
(557, 285, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 12:17:11', '2023-09-12 12:17:11', NULL),
(558, 286, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 12:36:29', '2023-09-12 12:36:29', NULL),
(559, 286, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 12:36:29', '2023-09-12 12:36:29', NULL),
(560, 287, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 12:39:30', '2023-09-12 12:39:30', NULL),
(561, 287, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 12:39:30', '2023-09-12 12:39:30', NULL),
(562, 288, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-12 12:54:05', '2023-09-12 12:54:05', NULL),
(563, 288, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-12 12:54:05', '2023-09-12 12:54:05', NULL),
(564, 289, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 06:58:38', '2023-09-13 06:58:38', NULL),
(565, 289, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 06:58:38', '2023-09-13 06:58:38', NULL),
(566, 290, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 07:01:41', '2023-09-13 07:01:41', NULL),
(567, 290, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 07:01:41', '2023-09-13 07:01:41', NULL),
(568, 291, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 11:51:14', '2023-09-13 11:51:14', NULL),
(569, 291, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 11:51:14', '2023-09-13 11:51:14', NULL),
(570, 292, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 11:51:38', '2023-09-13 11:51:38', NULL),
(571, 292, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 11:51:38', '2023-09-13 11:51:38', NULL),
(572, 293, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 11:57:07', '2023-09-13 11:57:07', NULL),
(573, 293, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 11:57:07', '2023-09-13 11:57:07', NULL),
(574, 294, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:02:58', '2023-09-13 12:02:58', NULL),
(575, 294, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:02:58', '2023-09-13 12:02:58', NULL),
(576, 295, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:04:50', '2023-09-13 12:04:50', NULL),
(577, 295, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:04:50', '2023-09-13 12:04:50', NULL),
(578, 296, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:09:11', '2023-09-13 12:09:11', NULL),
(579, 296, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:09:11', '2023-09-13 12:09:11', NULL),
(580, 297, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:18:26', '2023-09-13 12:18:26', NULL),
(581, 297, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:18:26', '2023-09-13 12:18:26', NULL),
(582, 298, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:18:45', '2023-09-13 12:18:45', NULL),
(583, 298, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:18:45', '2023-09-13 12:18:45', NULL),
(584, 299, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:24:38', '2023-09-13 12:24:38', NULL),
(585, 299, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:24:38', '2023-09-13 12:24:38', NULL),
(586, 300, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:26:52', '2023-09-13 12:26:52', NULL),
(587, 300, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:26:52', '2023-09-13 12:26:52', NULL),
(588, 301, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:32:24', '2023-09-13 12:32:24', NULL),
(589, 301, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:32:24', '2023-09-13 12:32:24', NULL),
(590, 302, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 12:36:16', '2023-09-13 12:36:16', NULL),
(591, 302, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 12:36:16', '2023-09-13 12:36:16', NULL),
(592, 303, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:07:18', '2023-09-13 13:07:18', NULL),
(593, 303, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:07:18', '2023-09-13 13:07:18', NULL),
(594, 304, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:29:55', '2023-09-13 13:29:55', NULL),
(595, 304, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:29:55', '2023-09-13 13:29:55', NULL),
(596, 305, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:47:00', '2023-09-13 13:47:00', NULL),
(597, 305, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:47:00', '2023-09-13 13:47:00', NULL),
(598, 306, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:48:00', '2023-09-13 13:48:00', NULL),
(599, 306, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:48:00', '2023-09-13 13:48:00', NULL),
(600, 307, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:49:54', '2023-09-13 13:49:54', NULL),
(601, 307, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:49:54', '2023-09-13 13:49:54', NULL),
(602, 308, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:50:43', '2023-09-13 13:50:43', NULL),
(603, 308, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:50:43', '2023-09-13 13:50:43', NULL),
(604, 309, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:50:55', '2023-09-13 13:50:55', NULL),
(605, 309, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:50:55', '2023-09-13 13:50:55', NULL),
(606, 310, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:51:09', '2023-09-13 13:51:09', NULL),
(607, 310, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:51:09', '2023-09-13 13:51:09', NULL),
(608, 311, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:51:37', '2023-09-13 13:51:37', NULL),
(609, 311, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:51:37', '2023-09-13 13:51:37', NULL),
(610, 312, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:52:03', '2023-09-13 13:52:03', NULL),
(611, 312, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:52:03', '2023-09-13 13:52:03', NULL),
(612, 313, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:55:05', '2023-09-13 13:55:05', NULL),
(613, 313, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:55:05', '2023-09-13 13:55:05', NULL),
(614, 314, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 13:56:36', '2023-09-13 13:56:36', NULL),
(615, 314, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 13:56:36', '2023-09-13 13:56:36', NULL),
(616, 315, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 14:19:54', '2023-09-13 14:19:54', NULL),
(617, 315, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 14:19:54', '2023-09-13 14:19:54', NULL),
(618, 316, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 14:49:48', '2023-09-13 14:49:48', NULL),
(619, 316, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 14:49:48', '2023-09-13 14:49:48', NULL),
(620, 317, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 14:50:51', '2023-09-13 14:50:51', NULL),
(621, 317, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 14:50:51', '2023-09-13 14:50:51', NULL),
(622, 318, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 14:55:38', '2023-09-13 14:55:38', NULL),
(623, 318, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 14:55:38', '2023-09-13 14:55:38', NULL),
(624, 319, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 14:56:56', '2023-09-13 14:56:56', NULL),
(625, 319, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 14:56:56', '2023-09-13 14:56:56', NULL),
(626, 320, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:04:09', '2023-09-13 15:04:09', NULL),
(627, 320, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:04:09', '2023-09-13 15:04:09', NULL),
(628, 321, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:08:22', '2023-09-13 15:08:22', NULL),
(629, 321, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:08:22', '2023-09-13 15:08:22', NULL),
(630, 322, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:13:33', '2023-09-13 15:13:33', NULL),
(631, 322, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:13:33', '2023-09-13 15:13:33', NULL),
(632, 323, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:24:50', '2023-09-13 15:24:50', NULL),
(633, 323, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:24:50', '2023-09-13 15:24:50', NULL),
(634, 324, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:28:40', '2023-09-13 15:28:40', NULL),
(635, 324, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:28:41', '2023-09-13 15:28:41', NULL),
(636, 325, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:32:25', '2023-09-13 15:32:25', NULL),
(637, 325, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:32:25', '2023-09-13 15:32:25', NULL),
(638, 326, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:34:09', '2023-09-13 15:34:09', NULL),
(639, 326, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:34:09', '2023-09-13 15:34:09', NULL),
(640, 327, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:37:27', '2023-09-13 15:37:27', NULL),
(641, 327, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:37:27', '2023-09-13 15:37:27', NULL),
(642, 328, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-13 15:43:17', '2023-09-13 15:43:17', NULL),
(643, 328, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-13 15:43:17', '2023-09-13 15:43:17', NULL),
(644, 329, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-14 07:00:54', '2023-09-14 07:00:54', NULL),
(645, 329, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-14 07:00:54', '2023-09-14 07:00:54', NULL),
(646, 330, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-14 07:06:19', '2023-09-14 07:06:19', NULL),
(647, 330, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-14 07:06:19', '2023-09-14 07:06:19', NULL),
(648, 331, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-14 07:09:17', '2023-09-14 07:09:17', NULL),
(649, 331, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-14 07:09:17', '2023-09-14 07:09:17', NULL),
(650, 332, 1301, 307, 'Chase Witt', 1000, 0, 1, '2023-09-14 07:48:44', '2023-09-14 07:48:44', NULL),
(651, 332, 1294, 307, 'Garrett Beck', 2000, 0, 1, '2023-09-14 07:48:44', '2023-09-14 07:48:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_product_variants`
--

CREATE TABLE `order_product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_name` varchar(255) DEFAULT NULL,
  `variant_value` varchar(255) DEFAULT NULL,
  `variant_price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product_variants`
--

INSERT INTO `order_product_variants` (`id`, `order_product_id`, `product_id`, `variant_name`, `variant_value`, `variant_price`, `created_at`, `updated_at`) VALUES
(13, 43, 8, 'Color', 'Blue', 5, '2022-02-07 06:09:19', '2022-02-07 06:09:19'),
(14, 43, 8, 'RAM', '4GB', 0, '2022-02-07 06:09:20', '2022-02-07 06:09:20'),
(15, 46, 11, 'Size', 'Small', 0, '2022-02-07 06:09:21', '2022-02-07 06:09:21'),
(16, 54, 6, 'Color', 'Blue', 3, '2022-02-07 06:27:18', '2022-02-07 06:27:18'),
(17, 54, 6, 'RAM', '8GB', 20, '2022-02-07 06:27:18', '2022-02-07 06:27:18'),
(18, 64, 11, 'Size', 'Small', 0, '2022-02-07 06:47:09', '2022-02-07 06:47:09'),
(19, 65, 13, 'RAM', '2GB', 0, '2022-02-07 06:52:29', '2022-02-07 06:52:29'),
(20, 66, 2, 'Color', 'Red', 3, '2022-02-07 06:52:30', '2022-02-07 06:52:30'),
(21, 74, 33, 'Color', 'Black', 3, '2022-02-16 02:32:34', '2022-02-16 02:32:34'),
(22, 74, 33, 'Size', 'Small', 0, '2022-02-16 02:32:34', '2022-02-16 02:32:34'),
(23, 79, 33, 'Color', 'Navy Blue', 0, '2022-03-30 05:01:01', '2022-03-30 05:01:01'),
(24, 79, 33, 'Size', 'Medium', 5, '2022-03-30 05:01:01', '2022-03-30 05:01:01'),
(25, 84, 33, 'Color', 'Black', 3, '2022-07-03 14:27:48', '2022-07-03 14:27:48'),
(26, 84, 33, 'Size', 'Small', 0, '2022-07-03 14:27:48', '2022-07-03 14:27:48'),
(27, 86, 11, 'Size', 'Small', 0, '2022-07-03 14:27:48', '2022-07-03 14:27:48'),
(28, 96, 9, 'Camera', '68PX', 3, '2022-08-20 11:23:45', '2022-08-20 11:23:45'),
(29, 96, 9, 'RAM', '68GB', 1, '2022-08-20 11:23:45', '2022-08-20 11:23:45'),
(30, 96, 9, 'Memory', '64GB', 3, '2022-08-20 11:23:45', '2022-08-20 11:23:45'),
(31, 101, 9, 'Camera', '68PX', 3, '2022-08-21 02:25:11', '2022-08-21 02:25:11'),
(32, 101, 9, 'RAM', '68GB', 1, '2022-08-21 02:25:11', '2022-08-21 02:25:11'),
(33, 101, 9, 'Memory', '64GB', 3, '2022-08-21 02:25:11', '2022-08-21 02:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('usman.ranglerz449@gmail.com', 'a3zrb4hdeD0qwA2FUlcokIdLEUNnef', NULL),
('usman.ranglerz449@gmail.com', 'OTUSuHjrAGeZ4tK2yn44jrct0AUjOa', NULL),
('usman.ranglerz449@gmail.com', 'I5MlOBzFyMD6ksMsp24Ol1chhkFMX2', NULL),
('usman.ranglerz449@gmail.com', 'MocZBCq6vNPntCMhGQM2rXtKTQ9rdM', NULL),
('usman.ranglerz449@gmail.com', 'BIYn2ffGmAeY5mWU095mGpBNGwFt90', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymongo_payments`
--

CREATE TABLE `paymongo_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `secret_key` varchar(255) NOT NULL,
  `public_key` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `currency_rate` double NOT NULL DEFAULT 1,
  `country_code` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymongo_payments`
--

INSERT INTO `paymongo_payments` (`id`, `secret_key`, `public_key`, `status`, `currency_rate`, `country_code`, `currency_code`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sk_test_TUwj85sA6XTn7nHzmP23dg36', 'pk_test_z9xACSbhH2EuxVdFaxuY8Waf', 1, 55.07, 'PH', 'PHP', '62c01dbd46dc01656757693.jpg', NULL, '2022-07-03 10:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE `paypal_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `account_mode` varchar(255) DEFAULT NULL,
  `client_id` text DEFAULT NULL,
  `secret_id` text DEFAULT NULL,
  `country_code` varchar(191) NOT NULL,
  `currency_code` varchar(191) NOT NULL,
  `currency_rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_payments`
--

INSERT INTO `paypal_payments` (`id`, `status`, `account_mode`, `client_id`, `secret_id`, `country_code`, `currency_code`, `currency_rate`, `created_at`, `updated_at`) VALUES
(1, 1, 'sandbox', 'AWlV5x8Lhj9BRF8-TnawXtbNs-zt69mMVXME1BGJUIoDdrAYz8QIeeTBQp0sc2nIL9E529KJZys32Ipy', 'EEvn1J_oIC6alxb-FoF4t8buKwy4uEWHJ4_Jd_wolaSPRMzFHe6GrMrliZAtawDDuE-WKkCKpWGiz0Yn', 'US', 'USD', 1, NULL, '2022-02-07 02:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `paystack_and_mollies`
--

CREATE TABLE `paystack_and_mollies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mollie_key` varchar(255) DEFAULT NULL,
  `mollie_status` int(11) NOT NULL DEFAULT 0,
  `mollie_currency_rate` double NOT NULL DEFAULT 1,
  `paystack_public_key` varchar(255) DEFAULT NULL,
  `paystack_secret_key` varchar(255) DEFAULT NULL,
  `paystack_currency_rate` double NOT NULL DEFAULT 1,
  `paystack_status` int(11) NOT NULL DEFAULT 0,
  `mollie_country_code` varchar(191) NOT NULL,
  `mollie_currency_code` varchar(191) NOT NULL,
  `paystack_country_code` varchar(191) NOT NULL,
  `paystack_currency_code` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paystack_and_mollies`
--

INSERT INTO `paystack_and_mollies` (`id`, `mollie_key`, `mollie_status`, `mollie_currency_rate`, `paystack_public_key`, `paystack_secret_key`, `paystack_currency_rate`, `paystack_status`, `mollie_country_code`, `mollie_currency_code`, `paystack_country_code`, `paystack_currency_code`, `created_at`, `updated_at`) VALUES
(1, 'test_bgtkwz4pErUqqTzW8KyRQKR27WgMuE', 1, 1.27, 'pk_test_057dfe5dee14eaf9c3b4573df1e3760c02c06e38', 'sk_test_77cb93329abbdc18104466e694c9f720a7d69c97', 417.35, 1, 'CA', 'CAD', 'NG', 'NGN', NULL, '2022-02-07 02:32:09');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `image`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Copyright Policy', 'public/uploads/1683874373.png', 'copyright', '<h4>Copyright Policy</h4>\r\n                    <p class=\"my-4 font-500\">Privacy Statement</p>\r\n                    <h6>-----</h6>\r\n                    <p class=\"my-4\">SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</p>\r\n                    <p>When you purchase something from our store, as part of the buying and selling process, we collect the\r\n                        personal information you give us such as your name, address and email address.When you browse our\r\n                        store, we also automatically receive your computer’s internet protocol (IP) address in order to\r\n                        provide us with information that helps us learn about your browser and operating system.Email\r\n                        marketing (if applicable): With your permission, we may send you emails about our store, new\r\n                        products and other updates.</p>\r\n                    <p class=\"my-4\">SECTION 2 - CONSENT</p>\r\n                    <h6>How do you get my consent?</h6>\r\n                    <p>When you provide us with personal information to complete a transaction, verify your credit card,\r\n                        place an order, arrange for a delivery or return a purchase, we imply that you consent to our\r\n                        collecting it and using it for that specific reason only. If we ask for your personal information\r\n                        for a secondary reason, like marketing, we will either ask you directly for your expressed consent,\r\n                        or provide you with an opportunity to say no.</p>\r\n                    <h6>How do I withdraw my consent?</h6>\r\n                    <p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for\r\n                        the continued collection, use or disclosure of your information, at anytime, by contacting us at\r\n                        customercare@effyjewelry.com or mailing us at:Effy Jewelry 7 West 45th Street New York New York US\r\n                        10036</p>\r\n                    <p class=\"my-4\">SECTION 3 - DISCLOSURE</p>\r\n                    <p>We may disclose your personal information if we are required by law to do so or if you violate our\r\n                        Terms of Service.</p>\r\n                    <p class=\"my-4\">SECTION 4 - LARAVEL</p>\r\n                    <p class=\"my-4\">Our store is hosted on Laravel Framework. They provide us with the online e-commerce\r\n                        platform that allows us to sell our products and services to you.Your data is stored through\r\n                        Shopify’s data storage, databases and the general Laravel application. They store your data on a\r\n                        secure server behind a firewall.</p>\r\n                    <p>Payment:</p>\r\n                    <p>If you choose a direct payment gateway to complete your purchase, then Shopify stores your credit\r\n                        card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your\r\n                        purchase transaction data is stored only as long as is necessary to complete your purchase\r\n                        transaction. After that is complete, your purchase transaction information is deleted. All direct\r\n                        payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards\r\n                        Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover.\r\n                        PCI-DSS requirements help ensure the secure handling of credit card information by our store and its\r\n                        service providers.For more insight, you may also want to read Shopify’s Terms of Service\r\n                        (https://www.shopify.com/legal/terms) or Privacy Statement (https://www.shopify.com/legal/privacy).\r\n                    </p>\r\n                    <p class=\"my-4\">SECTION 5 - THIRD-PARTY SERVICES</p>\r\n                    <p>In general, the third-party providers used by us will only collect, use and disclose your information\r\n                        to the extent necessary to allow them to perform the services they provide to us.However, certain\r\n                        third-party service providers, such as payment gateways and other payment transaction processors,\r\n                        have their own privacy policies in respect to the information we are required to provide to them for\r\n                        your purchase-related transactions.</p>\r\n                    <p>For these providers, we recommend that you read their privacy policies so you can understand the\r\n                        manner in which your personal information will be handled by these providers.</p>\r\n                    <p>In particular, remember that certain providers may be located in or have facilities that are located\r\n                        a different jurisdiction than either you or us. So if you elect to proceed with a transaction that\r\n                        involves the services of a third-party service provider, then your information may become subject to\r\n                        the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>\r\n                    <p>As an example, if you are located in Canada and your transaction is processed by a payment gateway\r\n                        located in the United States, then your personal information used in completing that transaction may\r\n                        be subject to disclosure under United States legislation, including the Patriot Act.</p>\r\n                    <p class=\"mb-4\">Once you leave our store’s website or are redirected to a third-party website or\r\n                        application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.\r\n                    </p>\r\n\r\n                    <b>Links</b>\r\n                    <p>When you click on links on our store, they may direct you away from our site. We are not responsible\r\n                        for the privacy practices of other sites and encourage you to read their privacy statements.</p>\r\n                    <b>Google analytics:</b>\r\n                    <p>Our store uses Google Analytics to help us learn about store visits and the pages being viewed.</p>\r\n                    <p class=\"my-4\">SECTION 6 - SECURITY</p>\r\n                    <p>To protect your personal information, we take reasonable precautions and follow industry best\r\n                        practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or\r\n                        destroyed.\r\n                        If you provide us with your credit card information, the information is encrypted using secure\r\n                        socket layer technology (SSL) and stored with a AES-256 encryption. Although no method of\r\n                        transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS\r\n                        requirements and implement additional generally accepted industry standards.</p>\r\n                    <p class=\"my-4\">SECTION 7 - COOKIES</p>\r\n                    <p>Here is a list of cookies that we use. We’ve listed them here so you that you can choose if you want\r\n                        to opt-out of cookies or not.\r\n                        _session_id, unique token, sessional, Allows Laravel to store information about your session\r\n                        (referrer, landing page, etc).\r\n                        _laravel_visit, no data held, Persistent for 30 minutes from the last visit, Used by our website\r\n                        provider’s internal stats tracker to record the number of visits_laravel_uniq, no data held, expires\r\n                        midnight (relative to the visitor) of the next day, Counts the number of visits to a store by a\r\n                        single customer.cart, unique token, persistent for 2 weeks, Stores information about the contents of\r\n                        your cart._secure_session_id, unique token, sessionalstorefront_digest, unique token, indefinite If\r\n                        the shop has a password, this is used to determine if the current visitor has access.PREF,\r\n                        persistent for a very short period, Set by Google and tracks who visits the store and from where</p>\r\n                    <p class=\"my-4\">SECTION 8 - AGE OF CONSENT</p>\r\n                    <p>By using this site, you represent that you are at least the age of majority in your state or province\r\n                        of residence, or that you are the age of majority in your state or province of residence and you\r\n                        have given us your consent to allow any of your minor dependents to use this site.</p>\r\n                    <p class=\"my-4\">SECTION 9 - CHANGES TO THIS PRIVACY POLICY</p>\r\n                    <p>We reserve the right to modify this privacy policy at any time, so please review it frequently.\r\n                        Changes and clarifications will take effect immediately upon their posting on the website. If we\r\n                        make material changes to this policy, we will notify you here that it has been updated, so that you\r\n                        are aware of what information we collect, how we use it, and under what circumstances, if any, we\r\n                        use and/or disclose it.If our store is acquired or merged with another company, your information may\r\n                        be transferred to the new owners so that we may continue to sell products to you.</p>\r\n                    <p class=\"my-4\">QUESTIONS AND CONTACT INFORMATION</p>\r\n                    <p>If you would like to: access, correct, amend or delete any personal information we have about you,\r\n                        register a complaint, or simply want more information contact our Privacy Compliance Officer at\r\n                        customercare@eIndustrify.com or by mail at eIndustrify West 45th Street Texas USA 10036</p>', '2023-05-02 13:10:04', '2023-05-12 08:16:01'),
(2, 'Privacy Policy', 'public/uploads/1683874526.png', 'privacy-policy', '<h4>Privacy Policy</h4>\r\n                    <p class=\"my-4 font-500\">Privacy Statement</p>\r\n                    <h6>-----</h6>\r\n                    <p class=\"my-4\">SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</p>\r\n                    <p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.Email marketing (if applicable): With your permission, we may send you emails about our store, new products and other updates.</p>\r\n                    <p class=\"my-4\">SECTION 2 - CONSENT</p>\r\n                    <h6>How do you get my consent?</h6>\r\n                    <p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only. If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>\r\n                    <h6>How do I withdraw my consent?</h6>\r\n                    <p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us at customercare@effyjewelry.com or mailing us at:Effy Jewelry 7 West 45th Street New York New York US 10036</p>\r\n                    <p class=\"my-4\">SECTION 3 - DISCLOSURE</p>\r\n                    <p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>\r\n                    <p class=\"my-4\">SECTION 4 - LARAVEL</p>\r\n                    <p class=\"my-4\">Our store is hosted on Laravel Framework. They provide us with the online e-commerce platform that allows us to sell our products and services to you.Your data is stored through Shopify’s data storage, databases and the general Laravel application. They store your data on a secure server behind a firewall.</p>\r\n                    <p>Payment:</p>\r\n                    <p>If you choose a direct payment gateway to complete your purchase, then Shopify stores your credit card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your purchase transaction data is stored only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.For more insight, you may also want to read Shopify’s Terms of Service (https://www.shopify.com/legal/terms) or Privacy Statement (https://www.shopify.com/legal/privacy).</p>\r\n                    <p class=\"my-4\">SECTION 5 - THIRD-PARTY SERVICES</p>\r\n                    <p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>\r\n                    <p>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>\r\n                    <p>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>\r\n                    <p>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.</p>\r\n                    <p class=\"mb-4\">Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.</p>\r\n\r\n                    <b>Links</b>\r\n                    <p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.</p>\r\n                    <b>Google analytics:</b>\r\n                    <p>Our store uses Google Analytics to help us learn about store visits and the pages being viewed.</p>\r\n                        <p class=\"my-4\">SECTION 6 - SECURITY</p>\r\n                        <p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.\r\n                            If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with a AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards.</p>\r\n                        <p class=\"my-4\">SECTION 7 - COOKIES</p>\r\n                        <p>Here is a list of cookies that we use. We’ve listed them here so you that you can choose if you want to opt-out of cookies or not.\r\n                            _session_id, unique token, sessional, Allows Laravel to store information about your session (referrer, landing page, etc).\r\n                            _laravel_visit, no data held, Persistent for 30 minutes from the last visit, Used by our website provider’s internal stats tracker to record the number of visits_laravel_uniq, no data held, expires midnight (relative to the visitor) of the next day, Counts the number of visits to a store by a single customer.cart, unique token, persistent for 2 weeks, Stores information about the contents of your cart._secure_session_id, unique token, sessionalstorefront_digest, unique token, indefinite If the shop has a password, this is used to determine if the current visitor has access.PREF, persistent for a very short period, Set by Google and tracks who visits the store and from where</p>\r\n                        <p class=\"my-4\">SECTION 8 - AGE OF CONSENT</p>\r\n                        <p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n                        <p class=\"my-4\">SECTION 9 - CHANGES TO THIS PRIVACY POLICY</p>\r\n                        <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.</p>\r\n                        <p class=\"my-4\">QUESTIONS AND CONTACT INFORMATION</p>\r\n                        <p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at customercare@eIndustrify.com or by mail at eIndustrify West 45th Street Texas USA 10036</p>', '2023-05-02 13:10:04', '2023-05-12 07:55:26'),
(3, 'Terms and Conditions', 'public/uploads/1683874651.png', 'terms-condition', '<h4>Terms and Conditions</h4>\r\n                    <p class=\"mt-4\">Last updated: March 10, 2023</p>\r\n                    <p class=\"mb-4\">Please read these terms of registerations carefully before using Our Service.</p>\r\n                    <b class=\"d-block mb-4\">Welcome</b>\r\n                    <p>Welcome to the EIndustrify.com website and mobile application owned and operated by W.W. EIndustrify, Inc. (“EIndustrify,” “we” or “us”). The EIndustrify.com website and mobile application, together with the content, software, services, and functionality offered on or through the website and mobile application, are collectively referred to as the “EIndustrify Property” in these Terms of Access. The EIndustrify Property offers industrial supplies and safety products to help keep your business running. We make the EIndustrify Property available to you subject to your agreement to these Terms of Access. The purchase of products and services available through the EIndustrify Property is subject to additional terms and policies. You should review those terms and policies before making a purchase. These Terms of Access (including all documents, policies, conditions and notices) referenced in these Terms of Access) are collectively referred to as the “Agreement.” In this Agreement, the words “include” and “including” will not be construed as terms of limitation. The Agreement is a legally binding contract between you and EIndustrify. By accessing the EIndustrify Property in any way, including, without limitation, browsing the EIndustrify Property, using any information contained on or in the EIndustrify Property, creating a User Account (defined below), and/or submitting information to EIndustrify, you agree to and are bound by this Agreement, including, but not limited to, conducting transactions electronically, disclaimers of warranties, damage and remedy exclusions and limitations, and a choice of Illinois law. Our collection and use of personal information in connection with your access to and use of the EIndustrify Property, whether or not you are a registered user, is described in our Privacy Policy</p>\r\n                    <h6 class=\"my-4\">-----</h6>\r\n                    <b class=\"d-block\">1. Updates to the Agreement</b>\r\n                    <p class=\"mb-4\">From time to time, EIndustrify may update the Agreement. If we materially update any portion of the Agreement, we will notify you by posting a revised Agreement through the mobile app or a notice on our website before the date the update becomes effective. We will also post the updated Agreement in its original location marked with the new date. Changes will not be retroactive. If you object to any changes, you should not access or use the EIndustrify Property. Your continued access or use of the EIndustrify Property after we publish our changes to the Agreement means that you are consenting to the updated terms.</p>\r\n                    <p>By accessing or linking to the EIndustrify Property, you assume the risk that the information on the EIndustrify Property may be incomplete, inaccurate, or out of date, or may not meet your needs and requirements. EIndustrify may add, change, discontinue, remove or suspend any of the information, features and other content included in the EIndustrify Property at any time, without notice and without liability. Due to the open nature of the EIndustrify Property, and the potential for errors in the storage and transmission of digital information, EIndustrify does not warrant the accuracy of information contained on or obtained from the EIndustrify Property.</p>\r\n                    <b class=\"d-block mt-4\">2. EIndustrify Property</b>\r\n                    <p>A. Your Right to Use EIndustrify Property</p>\r\n                    <p>EIndustrify grants you a limited, non-exclusive, non-transferable, non-assignable, non-sublicensable, fully revocable license to access and make use of the EIndustrify Property solely for legitimate non-commercial, business purposes, and as permitted by the features and functionalities of the EIndustrify Property, subject to this Agreement. Any access or attempt to access other areas of EIndustrify Property or any EIndustrify systems or other information contained on EIndustrify Property or EIndustrify systems for any other purposes is strictly prohibited. You will not (i) remove or modify any copyright, trademark or other proprietary rights notice that appears on any portion of the EIndustrify Property, or on any materials printed or copied from the EIndustrify Property; or (ii) dilute, tarnish or otherwise harm our brand in any way, including through unauthorized use of EIndustrify Property, registering and/or using EIndustrify or derivative terms in domain names, trade names, trademarks or other source identifiers, or registering and/or using domains names, trade names, trademarks or other source identifiers that closely imitate or are confusingly similar to EIndustrify domains, trademarks, taglines, promotional campaigns or EIndustrify Content.</p>\r\n                    <b class=\"d-block\">B. Eligibility</b>\r\n                    <p>You may use the EIndustrify Property only if you can form a binding contract with EIndustrify, and only in compliance with this Agreement and all applicable local, state, national, and international laws, rules and regulations. Any use or access to the EIndustrify Property by anyone under eighteen (18) years of age is strictly prohibited and in violation of this Agreement.</p>\r\n                    <b class=\"d-block\">C. User Accounts</b>\r\n                    <p>In order to use certain features on the EIndustrify Property, such as viewing your past orders or saved searches, you may need to register and create an account on the EIndustrify Property (your “User Account”). You should not use another user’s User Account without permission. When creating your User Account, you must provide accurate and complete information, and you must keep this information up to date. You are solely responsible for the activity that occurs on your User Account, and you must keep your User Account password secure. We encourage you to use “strong” passwords (a password that is unique to the account, is 16 or more characters or a passphrase) with your User Account. If we determine that your password is unsafe, we may notify you and recommend you use a different strong password. If you use a weak password or one we identify as unsafe, you accept all liability and risk if someone uses that password to access your account without your authorization. You must notify EIndustrify immediately of any breach of security or unauthorized use of your User Account. EIndustrify will not be liable for any losses caused by any unauthorized use of your User Account. By providing EIndustrify your email address you consent to our using the email address to send you service-related notices relating to the EIndustrify Property, including any notices required by law or regarding updates to the Agreement, in lieu of communication by postal mail. We may also use your email address to send you other messages, such as changes to features of the EIndustrify Property and, depending on where you are resident, special offers. If you do not want to receive such email messages, you may opt out or change your preferences by Email Preference Link.</p>\r\n                    <b class=\"d-block\">D. Availability of EIndustrify Property</b>\r\n                    <p>Due to the nature of the Internet, we cannot guarantee the continuous and uninterrupted availability of any portion of the EIndustrify Property and are not responsible for outages or disruptions of the Internet and telecommunications infrastructure which are beyond our control. We may temporarily restrict the availability of the EIndustrify Property or certain areas or features thereof with or without notice. We may from time to time change, discontinue, enhance and modify the EIndustrify Property and introduce new features or functionality from time to time. You agree that you do not have any rights in the EIndustrify Property and that EIndustrify will have no liability to you if the EIndustrify Property is discontinued or your ability to access the EIndustrify Property or any content you may have posted on the EIndustrify Property is terminated.</p>\r\n                    <b class=\"d-block\">E. Hypertext Links</b>\r\n                    <p>The EIndustrify Property may be linked to other sites that are not maintained by EIndustrify. EIndustrify is not responsible for the content of or privacy or other policies governing those sites. The inclusion of any link to such sites does not imply endorsement, sponsorship, or recommendation by EIndustrify of the linked sites. EIndustrify disclaims any and all liability for links: (i) from another site to the EIndustrify Property, and (ii) to another site from the EIndustrify Property. In order to link to the EIndustrify Property all users must comply with the EIndustrify Linking Terms.</p>\r\n                    <b class=\"d-block\">F. Visual and Barcode Search</b>\r\n                    <p>EIndustrify may, from time to time, make available a functionality through the EIndustrify Property that allows you to upload images and barcodes to the EIndustrify Property and that analyzes such images in order to search for and return suggested products available through the EIndustrify Property that match those images and barcodes (\"Visual Search\"). In order to use Visual Search, you will need to download our mobile application onto your device and allow the application to access the camera on your device. You must ensure that all images you upload through Visual Search comply with the paragraph below headed \"Uploading Images, Reviews and other Content\". We reserve the right to suspend your access to Visual Search or the EIndustrify Property if you breach the Agreement.</p>\r\n                    <b class=\"d-block\">G. Chat functionality</b>\r\n                    <p>EIndustrify may make available certain messaging features through the EIndustrify Property that allow you to message and share content with a customer service representative in real time (the \"Messaging Service\"). In addition to any other requirements in the Agreement, when using the Messaging Service, you must ensure that any messages, images or other content that you upload to the Messaging Service comply with the paragraph below headed \"Uploading Images, Reviews and other Content\" and you must not: (i) threaten or abuse any customer service representative through the Messaging Service, or abuse or invade another person\'s privacy, or cause annoyance, inconvenience or needless anxiety, or do anything through the Messaging Service that is likely to harass, upset, embarrass, alarm or annoy any other person; (ii) advocate, promote or engage in any illegal or unlawful conduct, including any criminal activity, fraud or money laundering, or conduct that causes damage or injury to any person or property; (iii) promote or advertise any goods or services or send any unsolicited marketing communications through the Messaging Service. Failure to comply with the above paragraph may result in us immediately suspending or terminating your access to the Messaging Service and/or the EIndustrify Property; issuing a warning to you; taking legal action against you (including proceedings for reimbursements of all costs, including reasonable administrative and legal costs, that we incur as a result of your breach); disclosing such information to law enforcement authorities as we reasonably believe is necessary; and taking any other steps that we reasonably deem appropriate.</p>\r\n                    <b class=\"d-block\">H. Accessibility</b>\r\n                    <p>W.W. EIndustrify, Inc. is committed to accessibility, diversity and inclusion for all of its guests. We believe everyone should be able to easily shop online at www.eIndustrify.com, use our mobile app and access our services easily. We set high standards for web accessibility and constantly strive to ensure we’re in compliance with all laws and guidelines. Our team is filled with professionals who are dedicated to making your online experiences the best they can be. We welcome feedback from guest experiences. If you have any questions about our accessibility features, please contact us at 1-800-472-4643 or accessibility@eIndustrify.com.</p>\r\n                    <b class=\"d-block\">I. Promotions</b>\r\n                    <p>Any sweepstakes, contests, raffles, surveys, games or similar promotions (collectively, “Promotions”) made available through the EIndustrify Property may be governed by rules or terms that are separate from the Agreement. If you participate in any Promotions, please review the applicable rules or terms as well as our Privacy Policy. If the rules or terms for a Promotion conflict with the Agreement, the Promotion rules will govern.</p>\r\n                    <b class=\"d-block mt-4\">3. Use of and Responsibility for Content</b>\r\n                    <b class=\"d-block\">A. EIndustrify Content</b>\r\n                    <p>Content on the EIndustrify Property that is provided by EIndustrify or its licensors, including software, graphics, photographs, images, screen shots, text, digitally downloadable files, trademarks, logos, product, service and program names, slogans, and the compilation of the foregoing (\"EIndustrify Content\") is the property of EIndustrify or its licensors, and is protected in the U.S. and internationally under trademark, copyright, and other intellectual property laws. Except as explicitly provided herein, nothing in the Agreement shall be deemed to create a license in or under any such intellectual property rights, and you agree not to sell, license download, screenshot, rent, modify, distribute, copy, reproduce, transmit, display to third parties, publicly perform, publish, adapt, edit or create derivative works from any EIndustrify Content.</p>\r\n                    <b class=\"d-block\">B. Uploading Images, Reviews and other Content</b>\r\n                    <p>From time to time on certain areas of the EIndustrify Property you may be able to submit or transmit to, though, or in connection with the EIndustrify Property any information (including personal information), text, links, graphics, photos, images, audio, videos, and all other forms of data or communication (\"User Content\"). By submitting or otherwise transmitting any User Content on or through the EIndustrify Property, you hereby grant to EIndustrify a limited, non-exclusive, sub-licensable, worldwide, fully-paid, royalty free license to use, modify, publicly perform, publicly display, reproduce, and distribute such User Content in any and all media now known or hereinafter developed without the requirement to make payment to you or to any third party or the need to seek any third-party permission. This license includes the right to host, index, cache, distribute, and tag any User Content, as well as the right to sublicense User Content to third parties (including other users), for use with marketing or on other media or platforms known or hereinafter developed. With regard to the Visual Search (described above), this license additionally includes the right to use the images you upload to enhance and continually improve our visual search algorithm and functionality. Insofar as User Content includes personal information, including. but not limited to, images or photographs of individuals, you agree that such personal information will be used or disclosed for these purposes. EIndustrify does not guarantee any confidentiality with respect to any of your User Content. You continue to retain all ownership rights in your User Content, and you continue to have the right to use your User Content in any way you choose, subject to this Agreement and the license described herein. You represent and warrant that you own or have a valid license to use and provide to EIndustrify the User Content submitted, displayed, published or posted by you on the EIndustrify Property and otherwise have the right (including the necessary licenses and/or permissions from third parties) to grant the license set forth herein, and the displaying, publishing or posting of any content you submit, and EIndustrify’s use thereof does not and will not violate the privacy rights, publicity rights, copyrights, trademark rights, patents, contract rights or any other intellectual property rights or other rights of any person or entity.</p>\r\n                    <b class=\"d-block\">C. Third-Party Technology, Websites and Applications</b>\r\n                    <p>The EIndustrify Property may include third-party technology, services, software, applications, and links to third-party websites (“Technology”). EIndustrify is not responsible for the practices or policies of such third parties, nor the content of any third-party website or application, and does not make any representation regarding third-party product or Technology, or content or accuracy of any material on such websites or applications. If you decide to use any such third-party website or application, you do so at your own risk. To the extent applicable, your use of such third-party Technology is subject to this Agreement as well as the additional terms and conditions as EIndustrify may provide to you from time to time.</p>\r\n                    <b class=\"d-block mt-4\">4. Information and Complaints</b>\r\n                    <p>If you have a question or complaint regarding the EIndustrify Property, please send an e-mail to ipcomplaints@eIndustrify.com. You may also contact EIndustrify by phone or mail at the contact information provided on the EIndustrify Property. Please note that e-mail communications will not necessarily be secure; accordingly you should not include credit card information or other sensitive information, including sensitive personal information or health information, in your e-mail correspondence with EIndustrify. California residents may reach the Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs by mail at 1625 North Market Blvd., Sacramento, CA 95834, or by telephone at (916) 445-1254 or (800) 952-5210.</p>\r\n                    <b class=\"d-block mt-4\">5. Miscellaneous</b>\r\n                    <p>The Agreement will be governed by and construed in accordance with the laws of Illinois without regard to conflicts of laws principles. By using the EIndustrify Property, you hereby agree that any and all disputes regarding the Agreement will be subject to the courts located in Lake County, Illinois or the federal courts for the Northern District of Illinois. The Agreement operates to the fullest extent permissible by law. Accessing materials on the EIndustrify Property by certain persons in certain countries may not be lawful, and EIndustrify makes no representation that materials on the EIndustrify Property are appropriate or available for use in locations outside the United States. If you choose to access the EIndustrify Property from outside the United States, you do so at your own risk and initiative, and are responsible for compliance with any applicable local laws.</p>\r\n                    <p>If EIndustrify fails to act with respect to your breach or anyone else\'s breach on any occasion, EIndustrify is not waiving its right to act with respect to future or similar breaches.</p>\r\n                    <p>If any provision of the Agreement shall be unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from the Agreement and shall not affect the validity and enforceability of any remaining provisions of this Agreement.</p>', '2023-05-02 13:10:04', '2023-05-12 07:57:31'),
(4, 'Terms of Registeration', 'public/uploads/1683874762.png', 'terms-registration', '<h4>Terms of Registeration</h4>\r\n                    <p class=\"mt-4\">Last updated: March 10, 2023</p>\r\n                    <p class=\"mb-4\">Please read these terms of registerations carefully before using Our Service.</p>\r\n                    <b>Terms and Conditions of Registration:</b>\r\n                    <p>In connection with the registration pursuant to this Agreement, and subject to the other terms and conditions of this Agreement, the Company shall in its sole discretion determine the terms and conditions of such registration, including, without limitation, the timing thereof; the scope of the offering contemplated thereby (i.e., whether the offering shall be a combined primary offering and a secondary offering or limited only to a secondary offering); the manner of distribution of Registrable Shares consistent with the plan of distribution agreed upon by the Company and the Stockholders; the period of effectiveness of registration for permissible sales of Registrable Securities thereunder subject to the provisions of Section 4(a) hereof; and all other material aspects of the registration and the registration process to the extent consistent herewith. In connection therewith, the Company may require that any such registration be underwritten, in which event (i) the managing underwriter shall be selected by the Company and (ii) the inclusion of Registrable Shares in such registration shall be conditioned upon each holder thereof entering into an underwriting agreement in customary form with such underwriters participating in such registration.</p>\r\n                    <b class=\"d-block mt-4\">About these Terms</b>\r\n                    <ol class=\"list-style-auto ps-4 mb-4\">\r\n                        <li>To pursue its goals, EIndustrify operates a communication web site (hereinafter the “Website”) devised to offer free contents on climate science that are intended to be accessible to a broad audience, and to allow citizens and climate scientists to interact for the purpose of making climate science accessible to everyone. The Website is available at www.eIndustrify.org.</li>\r\n                        <li>The Website has a Public Area which is accessible to all visitors (hereinafter the “User”). The Public Area offers free climate science articles as well as other public communications and forums. It also offers an Online Shop. The Website has a Members Area which is available to Users who are registered as Members and are logged in. The Members Area offers access to the peer review of manuscripts, to various members forums, activities and member-to-member communication channels.</li>\r\n                        <li>The Website also allows Users to subscribe to news and updates without registering as a Member. Subscribing to news and updates does not grant access to the Members Area however.</li>\r\n                        <li>Registration and subscription take place via a dedicated online form on the Website.</li>\r\n                        <li>These Terms and Conditions of Registration and Membership (hereafter “Terms”) establish the conditions of registration and membership and the terms of use of the Members Area. A Member shall expressly accept these Terms on registration and is bound to comply with them.</li>\r\n                        <li>Any new services, offered online in the Members Area after initial registration, shall also be governed by these Terms unless otherwise specified.</li>\r\n                        <li>EIndustrify reserves the right to amend the present Terms at any time and without prior notice and shall inform Members of such amendments at their next log-in. Members shall accept such amendments by checking the appropriate checkbox. The accounts of Members who do not accept the amendments shall be blocked 14 days after notification of the amendments.</li>\r\n                    </ol>\r\n\r\n\r\n                    <b class=\"d-block\">Registration</b>\r\n                    <ol class=\"list-style-auto ps-4\">\r\n                        <li>Registration and membership is open to all natural persons over thirteen years of age who have an interest in the creation and sharing of accessible climate science. Users under sixteen years of age must first obtain the consent of a parent or guardian.</li>\r\n                        <li>Each User shall only register once.</li>\r\n                        <li>The User shall register online to become a Member of EIndustrify.</li>\r\n                        <li>During the registration process, the User can, in addition, opt to become a Member of the Association. Members of the Association are Members of EIndustrify with additional accesses allowing them to participate in the General Assemblies and can be elected as Members of the Board of Directors.</li>\r\n                        <li>Members of the Association shall expressly accept EIndustrify’s Statutes on registration and are bound to comply with them.</li>\r\n                        <li>By registering with EIndustrify, the User accepts that most communications with EIndustrify and its Members will take place electronically.</li>\r\n                        <li>It is the User’s responsibility to make sure that she/he has sufficient access to Internet to participate to the activities at the desired extent.</li>\r\n                        <li>EIndustrify screens registration applications and reserves itself the right to reject a registration without stating the reasons.</li>\r\n                        <li>Members of EIndustrify have access to a notification preferences page where they can define their preferences for the notifications sent to them by email. They have access to the Members Area and can participate in the various activities that are open to Members, depending on their role as a climate scientist or not and their functions.</li>\r\n                        <li>Upon registration, Members are required to supply their name, email address, mail address, areas of interest and a password.</li>\r\n                        <li>Members requesting to be registered as climate scientists are required in addition to supply an affiliation and a list of publications. EIndustrify’s team will verify that the member fulfills the necessary conditions for being registered as a climate scientist.</li>\r\n                        <li>The necessary conditions for being registered as a climate scientist with EIndustrify at any moment in time are:</li>\r\n                        <ul class=\"list-style-disc ps-4\">\r\n                            <li>Have published within the past 6 years, as one of the main authors, an article in a recognized peer reviewed scientific journal in the broad area of climate science; and</li>\r\n                            <li>Have completed or be currently enrolled in a master or doctoral level education in climate science or in a related area of natural sciences.</li>\r\n                        </ul>\r\n                        <li>Members vouch that data supplied on registration are true and complete, and that they are kept up-to-date after registration. In particular, members registered as climate scientists who do not fulfill the necessary conditions for being registered as climate scientists anymore must change their registration accordingly.</li>\r\n                        <li>It is expressly forbidden to place accounts at the disposal of third parties and to disclose access details to third parties.</li>\r\n                        <li>For technical reasons, EIndustrify cannot establish with certainty whether a registered Member really is the person he/she claims to be. EIndustrify shall therefore provide no guarantee as to Members’ true identities. Members shall therefore be responsible for verifying other Member’s identities and shall contact EIndustrify in cases of suspicion.</li>\r\n                        <li>Registration as a Member results in a contractual relationship (usage contract) between EIndustrify and the Member. By accepting the Terms, they become a contract component. The member receives a personal, non-transferable right, revocable at any time, to use the contents and services provided by the Website and undertakes to comply with these Terms and the restrictions set out in them during such use.</li>\r\n                        <li>EIndustrify reserves the right to modify, suspend or discontinue individual services and/or sections of the Members Area, or all of them, at any time and without prior notice, in whole or in part. EIndustrify reserves the further right to limit or deny access to individual or all services, without prior notice at any time.</li>\r\n                    </ol>\r\n\r\n                    <b class=\"d-block mt-4\">Data Protection and Use of Information by EIndustrify</b>\r\n                    <ol class=\"list-style-auto ps-4\">\r\n                        <li>Collection, protection, use and transmission of personal data submitted to the Website or other User data collected by EIndustrify are ruled by EIndustrify’s Privacy Policy. EIndustrify’s Privacy Policy form part of these Terms. By using this Website, Users indicate that they accept and comply with it.</li>\r\n                    </ol>', '2023-05-02 13:10:04', '2023-05-12 07:59:22');
INSERT INTO `policies` (`id`, `title`, `image`, `type`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Sales Site Agreement', 'public/uploads/1683874847.png', 'sales-site', '<h4>Sales and Site Agreement</h4>\r\n                    <p class=\"mt-4\">Last updated: March 10, 2023</p>\r\n                    <p class=\"mb-4\">Please read these terms of registerations carefully before using Our Service.</p>\r\n                    <p>In connection with the registration pursuant to this Agreement, and subject to the other terms and conditions of this Agreement, the Company shall in its sole discretion determine the terms and conditions of such registration, including, without limitation, the timing thereof; the scope of the offering contemplated thereby (i.e., whether the offering shall be a combined primary offering and a secondary offering or limited only to a secondary offering); the manner of distribution of Registrable Shares consistent with the plan of distribution agreed upon by the Company and the Stockholders; the period of effectiveness of registration for permissible sales of Registrable Securities thereunder subject to the provisions of Section 4(a) hereof; and all other material aspects of the registration and the registration process to the extent consistent herewith. In connection therewith, the Company may require that any such registration be underwritten, in which event (i) the managing underwriter shall be selected by the Company and (ii) the inclusion of Registrable Shares in such registration shall be conditioned upon each holder thereof entering into an underwriting agreement in customary form with such underwriters participating in such registration.</p>\r\n                    <b class=\"d-block mt-4\">About these Terms</b>\r\n                    <ol class=\"list-style-auto ps-4 mb-4\">\r\n                        <li>To pursue its goals, EIndustrify operates a communication web site (hereinafter the “Website”) devised to offer free contents on climate science that are intended to be accessible to a broad audience, and to allow citizens and climate scientists to interact for the purpose of making climate science accessible to everyone. The Website is available at www.eIndustrify.org.</li>\r\n                        <li>The Website has a Public Area which is accessible to all visitors (hereinafter the “User”). The Public Area offers free climate science articles as well as other public communications and forums. It also offers an Online Shop. The Website has a Members Area which is available to Users who are registered as Members and are logged in. The Members Area offers access to the peer review of manuscripts, to various members forums, activities and member-to-member communication channels.</li>\r\n                        <li>The Website also allows Users to subscribe to news and updates without registering as a Member. Subscribing to news and updates does not grant access to the Members Area however.</li>\r\n                        <li>Registration and subscription take place via a dedicated online form on the Website.</li>\r\n                        <li>These Terms and Conditions of Registration and Membership (hereafter “Terms”) establish the conditions of registration and membership and the terms of use of the Members Area. A Member shall expressly accept these Terms on registration and is bound to comply with them.</li>\r\n                        <li>Any new services, offered online in the Members Area after initial registration, shall also be governed by these Terms unless otherwise specified.</li>\r\n                        <li>EIndustrify reserves the right to amend the present Terms at any time and without prior notice and shall inform Members of such amendments at their next log-in. Members shall accept such amendments by checking the appropriate checkbox. The accounts of Members who do not accept the amendments shall be blocked 14 days after notification of the amendments.</li>\r\n                    </ol>\r\n\r\n\r\n                    <b class=\"d-block\">Registration</b>\r\n                    <ol class=\"list-style-auto ps-4\">\r\n                        <li>Registration and membership is open to all natural persons over thirteen years of age who have an interest in the creation and sharing of accessible climate science. Users under sixteen years of age must first obtain the consent of a parent or guardian.</li>\r\n                        <li>Each User shall only register once.</li>\r\n                        <li>The User shall register online to become a Member of EIndustrify.</li>\r\n                        <li>During the registration process, the User can, in addition, opt to become a Member of the Association. Members of the Association are Members of EIndustrify with additional accesses allowing them to participate in the General Assemblies and can be elected as Members of the Board of Directors.</li>\r\n                        <li>Members of the Association shall expressly accept EIndustrify’s Statutes on registration and are bound to comply with them.</li>\r\n                        <li>By registering with EIndustrify, the User accepts that most communications with EIndustrify and its Members will take place electronically.</li>\r\n                        <li>It is the User’s responsibility to make sure that she/he has sufficient access to Internet to participate to the activities at the desired extent.</li>\r\n                        <li>EIndustrify screens registration applications and reserves itself the right to reject a registration without stating the reasons.</li>\r\n                        <li>Members of EIndustrify have access to a notification preferences page where they can define their preferences for the notifications sent to them by email. They have access to the Members Area and can participate in the various activities that are open to Members, depending on their role as a climate scientist or not and their functions.</li>\r\n                        <li>Upon registration, Members are required to supply their name, email address, mail address, areas of interest and a password.</li>\r\n                        <li>Members requesting to be registered as climate scientists are required in addition to supply an affiliation and a list of publications. EIndustrify’s team will verify that the member fulfills the necessary conditions for being registered as a climate scientist.</li>\r\n                        <li>The necessary conditions for being registered as a climate scientist with EIndustrify at any moment in time are:</li>\r\n                        <ul class=\"list-style-disc ps-4\">\r\n                            <li>Have published within the past 6 years, as one of the main authors, an article in a recognized peer reviewed scientific journal in the broad area of climate science; and</li>\r\n                            <li>Have completed or be currently enrolled in a master or doctoral level education in climate science or in a related area of natural sciences.</li>\r\n                        </ul>\r\n                        <li>Members vouch that data supplied on registration are true and complete, and that they are kept up-to-date after registration. In particular, members registered as climate scientists who do not fulfill the necessary conditions for being registered as climate scientists anymore must change their registration accordingly.</li>\r\n                        <li>It is expressly forbidden to place accounts at the disposal of third parties and to disclose access details to third parties.</li>\r\n                        <li>For technical reasons, EIndustrify cannot establish with certainty whether a registered Member really is the person he/she claims to be. EIndustrify shall therefore provide no guarantee as to Members’ true identities. Members shall therefore be responsible for verifying other Member’s identities and shall contact EIndustrify in cases of suspicion.</li>\r\n                        <li>Registration as a Member results in a contractual relationship (usage contract) between EIndustrify and the Member. By accepting the Terms, they become a contract component. The member receives a personal, non-transferable right, revocable at any time, to use the contents and services provided by the Website and undertakes to comply with these Terms and the restrictions set out in them during such use.</li>\r\n                        <li>EIndustrify reserves the right to modify, suspend or discontinue individual services and/or sections of the Members Area, or all of them, at any time and without prior notice, in whole or in part. EIndustrify reserves the further right to limit or deny access to individual or all services, without prior notice at any time.</li>\r\n                    </ol>\r\n\r\n                    <b class=\"d-block mt-4\">Data Protection and Use of Information by EIndustrify</b>\r\n                    <ol class=\"list-style-auto ps-4\">\r\n                        <li>Collection, protection, use and transmission of personal data submitted to the Website or other User data collected by EIndustrify are ruled by EIndustrify’s Privacy Policy. EIndustrify’s Privacy Policy form part of these Terms. By using this Website, Users indicate that they accept and comply with it.</li>\r\n                    </ol>', '2023-05-02 13:10:04', '2023-05-12 08:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `popular_categories`
--

CREATE TABLE `popular_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 12,
  `category_id_one` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_one` int(11) NOT NULL DEFAULT 0,
  `child_category_id_one` int(11) NOT NULL DEFAULT 0,
  `category_id_two` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_two` int(11) NOT NULL DEFAULT 0,
  `child_category_id_two` int(11) NOT NULL DEFAULT 0,
  `category_id_three` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_three` int(11) NOT NULL DEFAULT 0,
  `child_category_id_three` int(11) NOT NULL DEFAULT 0,
  `category_id_four` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_four` int(11) NOT NULL DEFAULT 0,
  `child_category_id_four` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_categories`
--

INSERT INTO `popular_categories` (`id`, `title`, `product_qty`, `category_id_one`, `sub_category_id_one`, `child_category_id_one`, `category_id_two`, `sub_category_id_two`, `child_category_id_two`, `category_id_three`, `sub_category_id_three`, `child_category_id_three`, `category_id_four`, `sub_category_id_four`, `child_category_id_four`, `created_at`, `updated_at`) VALUES
(1, 'Popular Categories', 9, 1, 0, 0, 5, 0, 0, 6, 0, 0, 2, 0, 0, NULL, '2022-02-07 08:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `popular_posts`
--

CREATE TABLE `popular_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_posts`
--

INSERT INTO `popular_posts` (`id`, `blog_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-30 12:45:43', '2022-01-30 12:45:59'),
(2, 2, 1, '2022-02-08 08:29:47', '2022-02-08 08:29:47'),
(3, 4, 1, '2022-02-08 08:30:27', '2022-02-08 08:30:27'),
(4, 9, 1, '2022-02-08 08:30:33', '2022-02-08 08:30:33'),
(9, 8, 1, '2023-05-24 11:28:08', '2023-05-24 11:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumb_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `child_category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `shipping_weight` varchar(255) DEFAULT NULL,
  `offer_start_date` date DEFAULT NULL,
  `offer_end_date` date DEFAULT NULL,
  `is_cash_delivery` tinyint(4) NOT NULL DEFAULT 0,
  `show_homepage` tinyint(4) NOT NULL DEFAULT 0,
  `is_undefine` tinyint(4) NOT NULL DEFAULT 0,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `is_wholesale` int(10) NOT NULL DEFAULT 0,
  `new_product` tinyint(4) NOT NULL DEFAULT 0,
  `is_top` tinyint(4) NOT NULL DEFAULT 0,
  `is_best` tinyint(4) NOT NULL DEFAULT 0,
  `is_flash_deal` tinyint(4) NOT NULL DEFAULT 0,
  `flash_deal_date` date DEFAULT NULL,
  `buyone_getone` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_specification` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `short_name`, `slug`, `thumb_image`, `banner_image`, `price`, `discount`, `size`, `tags`, `vendor_id`, `category_id`, `sub_category_id`, `child_category_id`, `brand_id`, `qty`, `short_description`, `long_description`, `video_link`, `sku`, `shipping_weight`, `offer_start_date`, `offer_end_date`, `is_cash_delivery`, `show_homepage`, `is_undefine`, `is_featured`, `is_wholesale`, `new_product`, `is_top`, `is_best`, `is_flash_deal`, `flash_deal_date`, `buyone_getone`, `status`, `is_specification`, `created_at`, `updated_at`) VALUES
(1293, 'Victor Carney', NULL, 'Victor Carney', 'public/uploads/1692338309.jpg', NULL, '1000', '1', '4hp', 'Labore,ducimus,corr', 307, 1, 1, 11, NULL, 100, NULL, '<p>aaa aaa</p>', NULL, '33243532', '5', NULL, NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, '2023-08-15 07:49:10', '2023-08-21 07:11:39'),
(1294, 'Garrett Beck', NULL, 'Garrett Be-ck', 'public/uploads/1692169171.jpg', NULL, '2000', '20', '3hp', 'voluptatem,aaaa', 307, 1, 10, 11, NULL, 96, NULL, '<p>aaa aaa aaa</p>', NULL, '90', '2', NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 1, 0, '2023-08-15 07:49:50', '2023-09-14 07:48:44'),
(1301, 'Chase Witt', NULL, 'Chase Witt', 'public/uploads/1692249668.jpg', NULL, '1000', NULL, '5hp', 'in,molestia', 307, 2, 10, 0, NULL, 96, NULL, '<p>aaa aaa aaa aaa</p>', NULL, '69', '2', NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 1, 0, '2023-08-17 06:21:08', '2023-09-14 07:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(327, 1294, 'public/images/1774367980979151.jpg', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(328, 1294, 'public/images/1774367980984955.png', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(329, 1294, 'public/images/1774367980989400.jpg', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(330, 1294, 'public/images/1774367980994318.jpg', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(331, 1294, 'public/images/1774367980998692.png', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(332, 1294, 'public/images/1774367981004544.jpg', 1, '2023-08-16 07:59:31', '2023-08-16 07:59:31'),
(345, 1301, 'public/images/1774452388060760.webp', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(346, 1301, 'public/images/1774452388068789.jpg', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(347, 1301, 'public/images/1774452388074730.jpg', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(348, 1301, 'public/images/1774452388079438.jpg', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(349, 1301, 'public/images/1774452388084345.jpg', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(350, 1301, 'public/images/1774452388089043.jpg', 1, '2023-08-17 06:21:08', '2023-08-17 06:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_overviews`
--

CREATE TABLE `product_overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_overviews`
--

INSERT INTO `product_overviews` (`id`, `product_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(32, 1293, 'Et fuga Non aut non', 'public/images/cellulose-yarn-2.jpg', '2023-08-15 07:49:10', '2023-08-15 07:49:10'),
(37, 1294, 'Numquam rerum id et', 'public/images/bleach.jpg', '2023-08-16 07:50:46', '2023-08-16 07:50:46'),
(38, 1294, 'shirt', 'public/images/cotton-blended.jpg', '2023-08-16 07:50:46', '2023-08-16 07:50:46'),
(41, 1301, 'Accusamus commodi si', 'public/images/cellulose-yarn-2.jpg', '2023-08-17 06:21:08', '2023-08-17 06:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_reports`
--

CREATE TABLE `product_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reports`
--

INSERT INTO `product_reports` (`id`, `user_id`, `product_id`, `seller_id`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 0, 'It is a long established fact that a reader will be', 'It is a long established fact that a reader will beIt is a long established fact that a reader will beIt is a long established fact that a reader will be', '2022-01-31 01:59:34', '2022-01-31 01:59:34'),
(3, 3, 7, 1, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be', '2022-01-31 07:35:07', '2022-01-31 07:35:07'),
(4, 4, 11, 2, 'Publishing and graphic design, Lorem ipsum is a pl', 'Publishing and graphic design, Lorem ipsum is a pl', '2022-01-31 09:14:05', '2022-01-31 09:14:05'),
(5, 3, 7, 1, 'This is product report title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-02-07 06:30:20', '2022-02-07 06:30:20'),
(6, 1, 24, 3, 'Product Report Subject', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-02-07 06:41:01', '2022-02-07 06:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_report_images`
--

CREATE TABLE `product_report_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_report_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `product_vendor_id` int(11) NOT NULL DEFAULT 0,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `product_vendor_id`, `review`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 4, 1, '2022-01-31 01:59:46', '2022-01-31 02:01:58'),
(3, 1, 3, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 5, 1, '2022-01-31 02:02:25', '2022-01-31 02:02:37'),
(4, 1, 4, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 3, 1, '2022-01-31 02:15:26', '2022-01-31 09:18:40'),
(5, 7, 3, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 4, 1, '2022-01-31 07:35:16', '2022-01-31 10:07:32'),
(6, 11, 4, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 3, 1, '2022-01-31 09:14:13', '2022-01-31 09:18:39'),
(7, 24, 1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 4, 1, '2022-02-07 06:41:15', '2022-02-07 08:05:13'),
(8, 7, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 5, 1, '2022-02-07 06:41:44', '2022-02-07 08:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_review_galleries`
--

CREATE TABLE `product_review_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_review_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `shipping_weight` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `product_size`, `product_price`, `shipping_weight`, `discount_price`, `sku`, `qty`, `created_at`, `updated_at`) VALUES
(32, 1293, '3hp', '2323232', NULL, '32', '22', '19', '2023-08-16 14:10:03', '2023-08-17 06:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_specifications`
--

CREATE TABLE `product_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_specification_key_id` int(11) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_specifications`
--

INSERT INTO `product_specifications` (`id`, `product_id`, `product_specification_key_id`, `specification`, `created_at`, `updated_at`) VALUES
(4, 7, 2, 'Blue, Red, Green', '2022-01-31 07:20:56', '2022-01-31 07:20:56'),
(5, 7, 4, '64GB', '2022-01-31 07:20:56', '2022-01-31 07:20:56'),
(6, 12, 2, 'Black, Golden, Silver', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(7, 12, 6, '2GB, 4GB, 8GB', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(8, 12, 7, 'Intel', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(9, 12, 8, 'LED', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(10, 12, 11, '0-128GB', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(11, 12, 12, '1GB', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(12, 12, 13, '10th', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(13, 12, 14, '1000', '2022-02-06 01:57:49', '2022-02-06 01:57:49'),
(14, 13, 6, '2GB, 4GB, 8GB', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(15, 13, 7, 'Intel Core i3', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(16, 13, 8, 'IPS', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(17, 13, 9, 'Intel UHD Graphics', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(18, 13, 10, '15.6\"', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(19, 13, 11, '257-512GB', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(20, 13, 13, '10th', '2022-02-06 02:13:07', '2022-02-06 02:13:07'),
(21, 14, 2, 'Black, Golden', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(22, 14, 6, '2GB, 4GB, 8GB', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(23, 14, 7, 'Intel Core i3,Intel', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(24, 14, 8, '15.6\", 16.2\"', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(25, 14, 9, 'Intel', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(26, 14, 14, '1000', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(27, 14, 12, '1GB & Under', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(28, 14, 13, '8th', '2022-02-06 02:23:51', '2022-02-06 02:23:51'),
(29, 3, 15, '1462cc, 4-stroke, liquid-cooled, SOHC, 54˚, V-twin', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(30, 3, 16, '96.0 mm x 101.0 mm (3.78 in. x 3.98 in.)', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(31, 3, 17, '9.5:1', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(32, 3, 18, 'Suzuki fuel injection with SDTV', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(33, 3, 19, 'Electric', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(34, 3, 20, 'Wet sump', '2022-02-06 03:57:55', '2022-02-06 03:57:55'),
(35, 4, 20, 'Wet sump', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(36, 4, 19, 'Electric', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(37, 4, 18, 'Suzuki fuel injection with SDTV', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(38, 4, 17, '9.5:1', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(39, 4, 16, '96.0 mm x 101.0 mm (3.78 in. x 3.98 in.)', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(40, 4, 15, '1462cc, 4-stroke, liquid-cooled, SOHC, 54˚, V-twin', '2022-02-06 04:03:31', '2022-02-06 04:03:31'),
(41, 22, 28, '347mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(42, 22, 27, '705mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(43, 22, 26, '130mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(44, 22, 25, '1710mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(45, 22, 24, '1130mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(46, 22, 23, '845mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(47, 22, 22, '2480mm', '2022-02-06 04:44:51', '2022-02-06 04:44:51'),
(48, 8, 2, 'Blue, Black', '2022-02-06 06:12:25', '2022-02-06 06:12:25'),
(49, 8, 4, '128GB', '2022-02-06 06:12:25', '2022-02-06 06:12:25'),
(50, 8, 3, '48px', '2022-02-06 06:12:25', '2022-02-06 06:12:25'),
(51, 8, 6, '12GB', '2022-02-06 06:12:25', '2022-02-06 06:12:25'),
(52, 8, 21, '6 Month', '2022-02-06 06:12:25', '2022-02-06 06:12:25'),
(53, 11, 2, 'Blue, Red, Green, White, Navy blue', '2022-02-06 06:37:04', '2022-02-06 06:37:04'),
(54, 11, 1, 'Small, Large, Medium, Extra Large', '2022-02-06 06:37:04', '2022-02-06 06:37:04'),
(55, 34, 1, 'sadasd', '2023-05-05 07:02:51', '2023-05-05 07:02:51'),
(56, 35, 11, 'Quia deserunt id do', '2023-05-16 08:37:15', '2023-05-16 08:37:15'),
(57, 36, 1, 'Sunt amet est illu', '2023-05-16 08:45:19', '2023-05-16 08:45:19'),
(58, 37, 1, 'Sunt amet est illu', '2023-05-16 08:47:42', '2023-05-16 08:47:42'),
(59, 38, 16, 'Proident id laboru', '2023-05-16 08:51:34', '2023-05-16 08:51:34'),
(60, 39, 19, 'Commodo aut ipsam qu', '2023-05-16 08:57:02', '2023-05-16 08:57:02'),
(61, 40, 18, 'Iste ducimus sed qu', '2023-05-16 09:01:01', '2023-05-16 09:01:01'),
(62, 41, 18, 'Iste ducimus sed qu', '2023-05-16 09:01:50', '2023-05-16 09:01:50'),
(77, 52, 3, 'Eiusmod libero aut n', '2023-05-16 14:29:34', '2023-05-16 14:29:34'),
(78, 52, 15, 'sadsadsad', '2023-05-16 14:29:34', '2023-05-16 14:29:34'),
(79, 53, 3, 'asdasd', '2023-05-16 14:36:32', '2023-05-16 14:36:32'),
(80, 53, 4, 'sadasd', '2023-05-16 14:36:32', '2023-05-16 14:36:32'),
(81, 54, 3, 'asdasd', '2023-05-16 14:37:52', '2023-05-16 14:37:52'),
(82, 54, 4, 'sadasd', '2023-05-16 14:37:52', '2023-05-16 14:37:52'),
(83, 55, 4, 'Occaecat fuga Excep', '2023-05-16 14:40:18', '2023-05-16 14:40:18'),
(84, 55, 16, 'Nulla non omnis qui', '2023-05-16 14:40:18', '2023-05-16 14:40:18'),
(85, 56, 4, 'Occaecat fuga Excep', '2023-05-16 14:42:56', '2023-05-16 14:42:56'),
(86, 56, 16, 'Nulla non omnis qui', '2023-05-16 14:42:56', '2023-05-16 14:42:56'),
(87, 57, 16, 'Deleniti esse quaera', '2023-05-16 14:48:43', '2023-05-16 14:48:43'),
(88, 58, 7, 'Eaque enim dolor est', '2023-05-16 14:59:02', '2023-05-16 14:59:02'),
(89, 59, 4, 'Quidem modi sapiente', '2023-05-16 15:01:37', '2023-05-16 15:01:37'),
(90, 60, 1, 'Sunt incididunt sint', '2023-05-16 15:04:27', '2023-05-16 15:04:27'),
(91, 61, 1, 'Sunt incididunt sint', '2023-05-16 15:11:01', '2023-05-16 15:11:01'),
(92, 62, 3, 'Veniam a praesentiu', '2023-05-16 15:12:46', '2023-05-16 15:12:46'),
(93, 63, 3, 'Veniam a praesentiu', '2023-05-16 15:14:01', '2023-05-16 15:14:01'),
(95, 1229, 1, 'dasdas', '2023-06-16 13:03:46', '2023-06-16 13:03:46'),
(96, 1262, 12, 'Sunt asperiores veli', '2023-07-04 08:00:20', '2023-07-04 08:00:20'),
(97, 1267, 14, 'Illo pariatur Tempo', '2023-07-11 13:10:53', '2023-07-11 13:10:53'),
(98, 1267, 15, 'Kenyon Burke  ', '2023-07-11 13:10:53', '2023-07-11 13:10:53'),
(99, 1279, 1, 'test', '2023-08-03 14:03:25', '2023-08-03 14:03:25'),
(100, 1280, 1, '3hp', '2023-08-04 11:27:32', '2023-08-04 11:27:32'),
(101, 1291, 4, 'Sunt enim dolore dol', '2023-08-15 07:43:56', '2023-08-15 07:43:56'),
(102, 1292, 17, 'Tempora cillum archi', '2023-08-15 07:44:41', '2023-08-15 07:44:41'),
(103, 1293, 13, 'Debitis ea magni pro', '2023-08-15 07:49:10', '2023-08-15 07:49:10'),
(104, 1294, 7, 'Sit quos aut perspi', '2023-08-15 07:49:50', '2023-08-15 07:49:50'),
(105, 1295, 0, 'Dignissimos minima o', '2023-08-15 09:33:04', '2023-08-15 09:33:04'),
(106, 1296, 6, 'Sit cupiditate eius', '2023-08-15 11:47:31', '2023-08-15 11:47:31'),
(107, 1297, 9, 'Totam qui exercitati', '2023-08-15 11:49:21', '2023-08-15 11:49:21'),
(108, 1294, 17, 'aaaaa', '2023-08-16 07:46:46', '2023-08-16 07:46:46'),
(109, 1298, 28, 'Tempore quae blandi', '2023-08-16 15:09:53', '2023-08-16 15:09:53'),
(110, 1299, 18, 'Odio fugiat consequ', '2023-08-16 15:13:43', '2023-08-16 15:13:43'),
(111, 1300, 3, 'Est aut quaerat erro', '2023-08-16 15:17:07', '2023-08-16 15:17:07'),
(112, 1301, 9, 'Dolor culpa consequa', '2023-08-17 06:21:08', '2023-08-17 06:21:08'),
(113, 1302, 24, 'Rerum molestiae maio', '2023-08-17 06:38:43', '2023-08-17 06:38:43'),
(114, 1303, 7, 'Est alias corporis d', '2023-08-17 06:43:14', '2023-08-17 06:43:14'),
(115, 1304, 13, 'Vel tempor deleniti', '2023-08-17 06:46:04', '2023-08-17 06:46:04'),
(116, 1305, 27, 'Nostrum cum temporib', '2023-08-17 12:07:49', '2023-08-17 12:07:49'),
(117, 1308, 4, '4', '2023-08-17 12:11:38', '2023-08-17 12:11:38'),
(118, 1309, 7, '4', '2023-08-17 12:12:16', '2023-08-17 12:12:16'),
(119, 1310, 3, 'asdasd', '2023-08-17 12:15:59', '2023-08-17 12:15:59'),
(120, 1311, 1, 'Nesciunt magna non', '2023-08-17 12:16:57', '2023-08-17 12:16:57'),
(121, 1312, 6, 'erter', '2023-08-17 12:19:25', '2023-08-17 12:19:25'),
(122, 1313, 25, 'Et cum doloribus ess', '2023-08-17 12:20:38', '2023-08-17 12:20:38'),
(123, 1314, 20, 'Optio quia consecte', '2023-08-17 12:21:13', '2023-08-17 12:21:13'),
(124, 1315, 25, 'Laborum Nisi laudan', '2023-08-17 12:21:44', '2023-08-17 12:21:44'),
(125, 1316, 20, 'Aliquid quisquam ver', '2023-08-17 12:22:38', '2023-08-17 12:22:38'),
(126, 1317, 3, 'sdasd', '2023-08-17 12:23:55', '2023-08-17 12:23:55'),
(127, 1318, 3, 'Deserunt cupiditate', '2023-08-17 12:33:32', '2023-08-17 12:33:32'),
(128, 1323, 4, 'Eveniet qui ut volu', '2023-08-17 12:35:35', '2023-08-17 12:35:35'),
(129, 1327, 23, 'Nemo cumque non magn', '2023-08-17 12:40:42', '2023-08-17 12:40:42'),
(130, 1328, 21, 'Aliqua Doloribus re', '2023-08-17 12:49:24', '2023-08-17 12:49:24'),
(131, 1329, 27, 'Vero aut et ipsum d', '2023-08-17 12:53:58', '2023-08-17 12:53:58'),
(132, 1330, 4, 'Doloremque mollitia', '2023-08-17 13:01:16', '2023-08-17 13:01:16'),
(133, 1331, 8, 'Et incidunt velit l', '2023-08-17 13:04:18', '2023-08-17 13:04:18'),
(134, 1332, 26, 'Incididunt velit la', '2023-08-17 13:11:23', '2023-08-17 13:11:23'),
(135, 1334, 28, 'Laborum In et tempo', '2023-08-17 13:13:19', '2023-08-17 13:13:19'),
(136, 1335, 25, 'Dolore eaque similiq', '2023-08-17 13:15:19', '2023-08-17 13:15:19'),
(137, 1336, 22, 'Et dolorem aute aut', '2023-08-17 13:15:50', '2023-08-17 13:15:50'),
(138, 1337, 15, 'Ducimus quia conseq', '2023-08-17 13:16:14', '2023-08-17 13:16:14'),
(139, 1338, 25, 'Dolores voluptas dig', '2023-08-17 13:16:42', '2023-08-17 13:16:42'),
(140, 1339, 16, 'Libero voluptatibus', '2023-08-17 13:17:17', '2023-08-17 13:17:17'),
(141, 1340, 8, 'Dolore natus eaque c', '2023-08-17 13:19:17', '2023-08-17 13:19:17'),
(142, 1341, 23, 'Est rerum sit error', '2023-08-17 13:25:31', '2023-08-17 13:25:31'),
(143, 1342, 11, 'Consequatur ullam d', '2023-08-17 13:51:26', '2023-08-17 13:51:26'),
(144, 1343, 4, 'Quia duis est nisi', '2023-08-17 13:52:17', '2023-08-17 13:52:17'),
(145, 1344, 7, 'Id eaque omnis unde', '2023-08-17 13:53:00', '2023-08-17 13:53:00'),
(146, 1345, 16, 'Sint proident plac', '2023-08-17 13:53:57', '2023-08-17 13:53:57'),
(147, 1346, 27, 'Veritatis saepe nequ', '2023-08-17 13:54:32', '2023-08-17 13:54:32'),
(148, 1347, 21, 'In qui sunt ut labor', '2023-08-17 14:01:00', '2023-08-17 14:01:00'),
(149, 1348, 2, 'Corrupti quibusdam', '2023-08-17 14:01:19', '2023-08-17 14:01:19'),
(150, 1349, 26, 'Velit omnis adipisic', '2023-08-17 14:01:38', '2023-08-17 14:01:38'),
(151, 1350, 16, 'Aliquam fugiat inven', '2023-08-17 14:01:53', '2023-08-17 14:01:53'),
(152, 1351, 13, 'Anim voluptatem lab', '2023-08-17 14:04:38', '2023-08-17 14:04:38'),
(153, 1352, 1, 'Voluptatem qui qui i', '2023-08-17 14:07:12', '2023-08-17 14:07:12'),
(154, 1362, 16, 'Quas maiores omnis u', '2023-08-17 14:23:30', '2023-08-17 14:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification_keys`
--

CREATE TABLE `product_specification_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_specification_keys`
--

INSERT INTO `product_specification_keys` (`id`, `key`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Size', 1, '2022-01-30 09:42:48', '2022-02-06 04:39:19'),
(2, 'Color', 1, '2022-01-30 09:42:53', '2022-01-30 09:42:53'),
(3, 'Camera', 1, '2022-01-30 09:42:59', '2022-01-30 09:42:59'),
(4, 'Memory', 1, '2022-01-30 09:43:06', '2022-01-30 09:43:06'),
(6, 'Ram', 1, '2022-02-06 01:51:56', '2022-02-06 04:39:29'),
(7, 'Processor Type', 1, '2022-02-06 01:52:32', '2022-02-06 01:52:32'),
(8, 'Display Type', 1, '2022-02-06 01:52:58', '2022-02-06 01:52:58'),
(9, 'Graphic Card', 1, '2022-02-06 01:53:10', '2022-02-06 01:53:10'),
(10, 'Display Size', 1, '2022-02-06 01:53:21', '2022-02-06 01:53:21'),
(11, 'SSD', 1, '2022-02-06 01:53:34', '2022-02-06 01:53:34'),
(12, 'Graphics Memory', 1, '2022-02-06 01:53:52', '2022-02-06 01:53:52'),
(13, 'Generation', 1, '2022-02-06 01:54:06', '2022-02-06 01:54:06'),
(14, 'Hard Disk (GB)', 1, '2022-02-06 01:54:19', '2022-02-06 01:54:19'),
(15, 'Engine', 1, '2022-02-06 03:54:24', '2022-02-06 03:54:24'),
(16, 'Bore x Stroke', 1, '2022-02-06 03:54:35', '2022-02-06 03:54:35'),
(17, 'Compression Ratio', 1, '2022-02-06 03:54:43', '2022-02-06 03:54:43'),
(18, 'Fuel System', 1, '2022-02-06 03:54:51', '2022-02-06 03:54:51'),
(19, 'Starter', 1, '2022-02-06 03:55:00', '2022-02-06 03:55:00'),
(20, 'Lubrication', 1, '2022-02-06 03:55:09', '2022-02-06 03:55:09'),
(21, 'Warranty', 1, '2022-02-06 03:55:28', '2022-02-06 03:55:28'),
(22, 'Length', 1, '2022-02-06 04:40:17', '2022-02-06 04:40:17'),
(23, 'Width', 1, '2022-02-06 04:40:31', '2022-02-06 04:40:31'),
(24, 'Height', 1, '2022-02-06 04:40:39', '2022-02-06 04:41:01'),
(25, 'Wheelbase', 1, '2022-02-06 04:41:16', '2022-02-06 04:41:16'),
(26, 'Ground Clearence', 1, '2022-02-06 04:41:37', '2022-02-06 04:41:37'),
(27, 'Seat Hight', 1, '2022-02-06 04:41:50', '2022-02-06 04:41:50'),
(28, 'Kerb Weight', 1, '2022-02-06 04:42:09', '2022-02-06 04:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_taxes`
--

CREATE TABLE `product_taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_taxes`
--

INSERT INTO `product_taxes` (`id`, `title`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tax None', '0', 1, '2022-01-30 09:41:19', '2022-02-07 02:27:02'),
(2, 'Tax One', '3', 1, '2022-01-30 09:41:37', '2022-01-30 09:41:37'),
(3, 'Tax Two', '5', 1, '2022-01-30 09:41:46', '2022-02-07 02:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Color', 1, '2022-01-30 10:43:04', '2022-01-30 10:43:04'),
(2, 6, 'RAM', 1, '2022-01-30 10:43:11', '2022-01-30 10:43:11'),
(3, 8, 'Color', 1, '2022-01-31 07:26:01', '2022-01-31 07:26:01'),
(4, 8, 'RAM', 1, '2022-01-31 07:26:10', '2022-01-31 07:26:10'),
(5, 11, 'Size', 1, '2022-01-31 09:03:17', '2022-01-31 09:03:17'),
(6, 2, 'Color', 1, '2022-02-02 06:24:39', '2022-02-02 06:24:39'),
(7, 12, 'RAM', 1, '2022-02-06 01:58:25', '2022-02-06 01:58:25'),
(8, 12, 'COLOR', 1, '2022-02-06 01:58:45', '2022-02-06 01:58:45'),
(9, 12, 'DISPLAY', 1, '2022-02-06 01:59:09', '2022-02-06 01:59:09'),
(10, 13, 'RAM', 1, '2022-02-06 02:15:05', '2022-02-06 02:15:05'),
(11, 33, 'Color', 1, '2022-02-10 04:07:49', '2022-02-10 04:07:49'),
(12, 33, 'Size', 1, '2022-02-10 04:07:55', '2022-02-10 04:07:55'),
(13, 5, 'Color', 1, '2022-02-12 06:54:15', '2022-02-12 06:54:15'),
(14, 5, 'Size', 1, '2022-02-12 06:54:19', '2022-02-12 06:54:19'),
(15, 9, 'Camera', 1, '2022-02-12 06:56:46', '2022-02-12 06:56:46'),
(16, 9, 'RAM', 1, '2022-02-12 06:56:50', '2022-02-12 06:56:50'),
(17, 9, 'Memory', 1, '2022-02-12 07:00:08', '2022-02-12 07:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_variant_items`
--

CREATE TABLE `product_variant_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_variant_id` int(11) NOT NULL,
  `product_variant_name` varchar(191) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_default` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variant_items`
--

INSERT INTO `product_variant_items` (`id`, `product_variant_id`, `product_variant_name`, `product_id`, `name`, `price`, `status`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 'Color', 6, 'Blue', 3, 1, 1, '2022-01-30 10:43:27', '2022-01-30 10:43:27'),
(2, 1, 'Color', 6, 'Red', 0, 1, 0, '2022-01-30 10:43:39', '2022-01-30 10:43:39'),
(3, 2, 'RAM', 6, '8GB', 2, 1, 1, '2022-01-30 10:43:55', '2022-01-30 10:43:55'),
(4, 2, 'RAM', 6, '32GB', 5, 1, 0, '2022-01-30 10:44:16', '2022-01-30 10:44:16'),
(5, 3, 'Color', 8, 'Blue', 5, 1, 1, '2022-01-31 07:26:31', '2022-01-31 07:26:31'),
(6, 3, 'Color', 8, 'Red', 0, 1, 0, '2022-01-31 07:26:39', '2022-01-31 07:26:39'),
(7, 3, 'Color', 8, 'Green', 3, 1, 0, '2022-01-31 07:27:02', '2022-01-31 07:27:02'),
(8, 4, 'RAM', 8, '4GB', 0, 1, 1, '2022-01-31 07:27:15', '2022-01-31 07:27:15'),
(9, 4, 'RAM', 8, '8GB', 5, 1, 0, '2022-01-31 07:27:24', '2022-01-31 07:27:24'),
(10, 5, 'Size', 11, 'Small', 0, 1, 1, '2022-01-31 09:03:29', '2022-02-06 06:44:43'),
(11, 6, 'Color', 2, 'Red', 3, 1, 1, '2022-02-02 06:24:59', '2022-02-02 06:24:59'),
(12, 7, 'RAM', 12, '2GB', 0, 1, 1, '2022-02-06 01:59:27', '2022-02-06 01:59:27'),
(13, 7, 'RAM', 12, '4GB', 10, 1, 0, '2022-02-06 01:59:41', '2022-02-06 01:59:41'),
(14, 7, 'RAM', 12, '8GB', 5, 1, 0, '2022-02-06 01:59:53', '2022-02-06 01:59:53'),
(15, 8, 'COLOR', 12, 'Black', 0, 1, 1, '2022-02-06 02:00:22', '2022-02-06 02:00:22'),
(16, 8, 'COLOR', 12, 'Golden', 3, 1, 0, '2022-02-06 02:00:33', '2022-02-06 02:00:33'),
(17, 8, 'COLOR', 12, 'Silver', 7, 1, 0, '2022-02-06 02:00:49', '2022-02-06 02:00:49'),
(18, 9, 'DISPLAY', 12, '15\"', 0, 1, 1, '2022-02-06 02:01:21', '2022-02-06 02:01:21'),
(19, 9, 'DISPLAY', 12, '16\"', 12, 1, 0, '2022-02-06 02:01:35', '2022-02-06 02:01:35'),
(20, 9, 'DISPLAY', 12, '18\"', 2, 1, 0, '2022-02-06 02:01:46', '2022-02-06 02:01:46'),
(21, 10, 'RAM', 13, '2GB', 0, 1, 1, '2022-02-06 02:15:21', '2022-02-06 02:15:21'),
(22, 10, 'RAM', 13, '4GB', 5, 1, 0, '2022-02-06 02:15:33', '2022-02-06 02:15:33'),
(23, 10, 'RAM', 13, '8GB', 8, 1, 0, '2022-02-06 02:15:45', '2022-02-06 02:15:45'),
(25, 5, 'Size', 11, 'Medium', 10, 1, 0, '2022-02-06 06:45:06', '2022-02-06 06:45:06'),
(26, 5, 'Size', 11, 'Large', 2, 1, 0, '2022-02-06 06:45:18', '2022-02-06 06:45:18'),
(27, 5, 'Size', 11, 'Extra Large', 3, 1, 0, '2022-02-06 06:45:28', '2022-02-06 06:45:28'),
(28, 11, 'Color', 33, 'Black', 3, 1, 1, '2022-02-10 04:08:08', '2022-02-10 04:08:08'),
(29, 11, 'Color', 33, 'Yellow', 5, 1, 0, '2022-02-10 04:08:42', '2022-02-10 04:08:42'),
(30, 11, 'Color', 33, 'Navy Blue', 0, 1, 0, '2022-02-10 04:09:07', '2022-02-10 04:09:07'),
(31, 12, 'Size', 33, 'Small', 0, 1, 1, '2022-02-10 04:09:25', '2022-02-10 04:09:25'),
(32, 12, 'Size', 33, 'Medium', 5, 1, 0, '2022-02-10 04:09:36', '2022-02-10 04:09:36'),
(33, 12, 'Size', 33, 'Large', 7, 1, 0, '2022-02-10 04:09:45', '2022-02-10 04:09:45'),
(34, 13, 'Color', 5, 'Red', 0, 1, 1, '2022-02-12 06:54:28', '2022-02-12 06:54:28'),
(35, 13, 'Color', 5, 'Blue', 2, 1, 0, '2022-02-12 06:54:35', '2022-02-12 06:54:35'),
(36, 13, 'Color', 5, 'Navy Blue', 6, 1, 0, '2022-02-12 06:54:49', '2022-02-12 06:54:49'),
(37, 14, 'Size', 5, 'Medium', 0, 1, 1, '2022-02-12 06:55:03', '2022-02-12 06:55:03'),
(38, 14, 'Size', 5, 'Small', 0, 1, 0, '2022-02-12 06:55:09', '2022-02-12 06:55:09'),
(39, 14, 'Size', 5, 'Large', 7, 1, 0, '2022-02-12 06:55:18', '2022-02-12 06:55:18'),
(40, 15, 'Camera', 9, '44PX', 0, 1, 1, '2022-02-12 06:57:37', '2022-02-12 06:57:37'),
(41, 15, 'Camera', 9, '68PX', 3, 1, 0, '2022-02-12 06:57:47', '2022-02-12 06:57:47'),
(42, 15, 'Camera', 9, '128PX', 2, 1, 0, '2022-02-12 06:57:58', '2022-02-12 06:57:58'),
(43, 16, 'RAM', 9, '32GB', 3, 1, 1, '2022-02-12 06:58:14', '2022-02-12 06:58:14'),
(44, 16, 'RAM', 9, '68GB', 1, 1, 0, '2022-02-12 06:59:09', '2022-02-12 06:59:09'),
(45, 16, 'RAM', 9, '128GB', 2, 1, 0, '2022-02-12 06:59:20', '2022-02-12 06:59:20'),
(46, 17, 'Memory', 9, '32GB', 3, 1, 1, '2022-02-12 07:00:19', '2022-02-12 07:00:19'),
(47, 17, 'Memory', 9, '64GB', 3, 1, 0, '2022-02-12 07:00:30', '2022-02-12 07:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `pusher_credentails`
--

CREATE TABLE `pusher_credentails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_id` varchar(255) NOT NULL,
  `app_key` varchar(255) NOT NULL,
  `app_secret` varchar(255) NOT NULL,
  `app_cluster` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pusher_credentails`
--

INSERT INTO `pusher_credentails` (`id`, `app_id`, `app_key`, `app_secret`, `app_cluster`, `created_at`, `updated_at`) VALUES
(1, '1338069', 'e013174602072a186b1d', '46de951521010c14b205', 'mt1', NULL, '2022-01-29 12:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_payments`
--

CREATE TABLE `razorpay_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `currency_rate` double NOT NULL DEFAULT 1,
  `country_code` varchar(191) NOT NULL,
  `currency_code` varchar(191) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `key` text DEFAULT NULL,
  `secret_key` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `razorpay_payments`
--

INSERT INTO `razorpay_payments` (`id`, `status`, `name`, `currency_rate`, `country_code`, `currency_code`, `description`, `image`, `color`, `key`, `secret_key`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ecommerce', 74.66, 'IN', 'INR', 'This is description', 'uploads/website-images/razorpay-2021-12-14-06-35-49-6602.png', '#2d15e5', 'rzp_test_K7CipNQYyyMPiS', 'zSBmNMorJrirOrnDrbOd1ALO', NULL, '2022-02-07 02:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `return_policies`
--

CREATE TABLE `return_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_policies`
--

INSERT INTO `return_policies` (`id`, `title`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Policy one', 'Lorem Ipsum is simply dummy text of the printing', 1, '2022-01-30 09:42:25', '2022-02-07 02:28:06'),
(2, 'Policy two', 'Lorem Ipsum is simply dummy text of the printing', 1, '2022-01-30 09:42:35', '2022-02-07 02:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_mail_logs`
--

CREATE TABLE `seller_mail_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_mail_logs`
--

INSERT INTO `seller_mail_logs` (`id`, `seller_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 'Please Confirm your valid address', '<p>Please Confirm your valid address<br></p>', '2022-01-31 08:45:07', '2022-01-31 08:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `seller_withdraws`
--

CREATE TABLE `seller_withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `total_amount` double NOT NULL,
  `withdraw_amount` double NOT NULL,
  `withdraw_charge` double NOT NULL,
  `account_info` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `approved_date` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_withdraws`
--

INSERT INTO `seller_withdraws` (`id`, `seller_id`, `method`, `total_amount`, `withdraw_amount`, `withdraw_charge`, `account_info`, `status`, `approved_date`, `created_at`, `updated_at`) VALUES
(3, 2, 'Bank Payment', 600, 570, 5, 'Bank of America,\r\nAccount : 54312343135132231', 1, '2022-02-07', '2022-02-07 07:01:43', '2022-02-07 07:02:08'),
(4, 2, 'Bank Payment', 800, 760, 5, 'Bank of America,\r\nAccount : 54312343135132231', 0, NULL, '2022-02-07 07:07:04', '2022-02-07 07:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `page_name`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', 'Home page - Ecommerce', 'Home Page', NULL, '2022-01-30 10:50:34'),
(2, 'About Us', 'About Us - Ecommerce', 'About Us', NULL, '2022-02-07 02:39:59'),
(3, 'Contact Us', 'Contact Us - Ecommerce', 'Contact Us', NULL, '2022-01-12 02:21:46'),
(4, 'Brand Page', 'Brands - Ecommerce', 'Our Brand', NULL, '2022-02-07 02:40:09'),
(5, 'Seller Page', 'Our Seller - Ecommerce', 'Seller Page', NULL, '2022-02-07 02:40:16'),
(6, 'Blog', 'Blog - Ecommerce', 'Blog', NULL, '2022-02-07 02:40:23'),
(7, 'Campaign', 'Campaign - Ecommerce', 'Campaign', NULL, '2022-02-07 02:40:29'),
(8, 'Flash Deal', 'Flash Deal - Ecommerce', 'Flash Deal', NULL, '2022-02-07 02:40:43'),
(9, 'Shop Page', 'Shop Page - Ecommerce', 'Shop Page', NULL, '2022-02-07 02:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Free Delivery', 'fas fa-plane', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, '2022-01-30 10:39:33', '2022-02-07 07:19:57'),
(2, 'Money Back Guarantee', 'far fa-money-bill-alt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, '2022-02-07 07:20:30', '2022-02-07 07:20:30'),
(3, '24/7 Customer Suppor', 'fas fa-phone-volume', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, '2022-02-07 07:21:41', '2022-02-07 07:21:41'),
(4, 'Secure Online Payment', 'fab fa-speakap', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 1, '2022-02-07 07:22:21', '2022-02-07 07:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maintenance_mode` int(11) NOT NULL DEFAULT 0,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `contact_email` varchar(191) DEFAULT NULL,
  `enable_user_register` int(11) NOT NULL DEFAULT 1,
  `enable_multivendor` int(11) NOT NULL DEFAULT 1,
  `enable_subscription_notify` int(11) NOT NULL DEFAULT 1,
  `enable_save_contact_message` int(11) NOT NULL DEFAULT 1,
  `text_direction` varchar(255) NOT NULL DEFAULT 'LTR',
  `timezone` varchar(255) DEFAULT NULL,
  `sidebar_lg_header` varchar(255) DEFAULT NULL,
  `sidebar_sm_header` varchar(255) DEFAULT NULL,
  `topbar_phone` varchar(191) DEFAULT NULL,
  `topbar_email` varchar(191) NOT NULL,
  `menu_phone` varchar(191) DEFAULT NULL,
  `currency_name` varchar(191) DEFAULT NULL,
  `currency_icon` varchar(191) DEFAULT NULL,
  `currency_rate` double NOT NULL DEFAULT 1,
  `show_product_qty` int(1) NOT NULL DEFAULT 1,
  `theme_one` varchar(191) NOT NULL,
  `theme_two` varchar(191) NOT NULL,
  `seller_condition` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `maintenance_mode`, `logo`, `favicon`, `contact_email`, `enable_user_register`, `enable_multivendor`, `enable_subscription_notify`, `enable_save_contact_message`, `text_direction`, `timezone`, `sidebar_lg_header`, `sidebar_sm_header`, `topbar_phone`, `topbar_email`, `menu_phone`, `currency_name`, `currency_icon`, `currency_rate`, `show_product_qty`, `theme_one`, `theme_two`, `seller_condition`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/website-images/logo-2023-03-27-01-56-47-4294.png', 'uploads/website-images/favicon-2023-04-20-12-39-34-5262.png', 'contact@gmail.com', 1, 1, 1, 0, 'ltr', 'Asia/Dhaka', 'TopCommerce', 'TC', '125-874-9658', 'contact@gmail.com', '562-745-8659', 'USD', '$', 85.76, 1, '#b0191e', '#b0191e', '<h3>Our Terms and Conditions</h3><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', NULL, '2023-04-20 07:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `street_address`, `department`, `name`, `email`, `phone`, `address`, `country_id`, `state_id`, `city_name`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'John Doe', 'user@gmail.com', '123-874-6548', 'Los Angeles, CA, USA', 1, 0, '0', '6521', '2022-01-30 09:57:44', '2022-06-14 09:32:29'),
(3, 3, NULL, NULL, 'David Warner', 'user@gmail.com', '123-874-6548', 'San Francisco City Hall, San Francisco, CA', 1, 1, '2', '4521', '2022-01-31 01:53:32', '2022-02-07 05:55:14'),
(4, 4, NULL, NULL, 'Jose Larry', 'user@gmail.com', '458-854-8745', 'Florida City, FL, USA', 1, 2, '1', '45870', '2022-01-31 02:13:53', '2022-02-06 06:02:16'),
(5, 5, NULL, NULL, 'Daniel Paul', 'user@gmail.com', '123-874-6548', 'Florida City, FL, USA', 1, 2, '1', '52305', '2022-01-31 08:04:10', '2022-02-06 06:30:50'),
(14, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 14:35:04', '2023-04-26 14:35:04'),
(15, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 14:35:56', '2023-04-26 14:35:56'),
(16, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 14:37:38', '2023-04-26 14:37:38'),
(17, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 14:42:21', '2023-04-26 14:42:21'),
(18, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 15:01:18', '2023-04-26 15:01:18'),
(19, 49, 'address', 'department', NULL, NULL, NULL, NULL, 2, 3, '2', '147001', '2023-04-27 07:34:37', '2023-04-27 07:34:37'),
(20, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 07:43:20', '2023-04-27 07:43:20'),
(21, 51, 'address', 'department', NULL, NULL, NULL, NULL, 4, 3, '2', '147001', '2023-04-27 07:45:51', '2023-04-27 07:45:51'),
(22, 52, 'address', 'department', NULL, NULL, NULL, NULL, 4, 2, '4', '147001', '2023-04-27 07:51:21', '2023-04-27 07:51:21'),
(23, 53, 'Deleniti consequatur', 'Natus est quod sed v', NULL, NULL, NULL, NULL, 4, 9, '1', '14898', '2023-04-27 08:22:41', '2023-04-27 08:22:41'),
(24, 54, 'Eaque cupiditate ips', 'Reprehenderit facil', NULL, NULL, NULL, NULL, 5, 3, '7', '89774', '2023-04-27 08:24:17', '2023-04-27 08:24:17'),
(26, 56, 'Tempor cum eos quo m', 'Doloribus labore ani', NULL, NULL, NULL, NULL, 2, 8, '5', '55215', '2023-04-27 09:15:05', '2023-04-27 09:15:05'),
(27, 57, 'Et non quia omnis vo', 'Aliquam consectetur', NULL, NULL, NULL, NULL, 4, 9, '4', '63273', '2023-04-27 18:39:56', '2023-04-27 18:39:56'),
(28, 58, 'address', 'sadsad', NULL, NULL, NULL, NULL, 4, 2, '2', '5142', '2023-04-27 20:05:52', '2023-04-27 20:05:52'),
(29, 59, 'Qui numquam et earum', 'Consequatur Quaerat', NULL, NULL, NULL, NULL, 1, 8, '1', '67505', '2023-04-27 20:21:03', '2023-04-27 20:21:03'),
(30, 60, 'Provident nesciunt', 'Consequatur fugiat', NULL, NULL, NULL, NULL, 2, 5, '6', '50214', '2023-04-27 22:55:52', '2023-04-27 22:55:52'),
(31, 61, 'Labore nostrum verit', 'Dolores vel quaerat', NULL, NULL, NULL, NULL, 1, 2, '10', '42192', '2023-04-27 22:56:34', '2023-04-27 22:56:34'),
(32, 62, 'Non recusandae Pers', 'Provident culpa ame', NULL, NULL, NULL, NULL, 4, 7, '1', '73481', '2023-04-27 23:34:37', '2023-04-27 23:34:37'),
(35, 76, 'Et nemo aspernatur n', 'Itaque qui deserunt', NULL, NULL, NULL, NULL, 2, 2, '10', '52019', '2023-05-19 14:44:33', '2023-05-19 14:44:33'),
(36, 77, 'fugufuro@mailinator.com', 'worutucus@mailinator.com', NULL, NULL, NULL, NULL, 1, 1, '2', '52019', '2023-05-22 14:46:50', '2023-05-22 14:46:50'),
(37, 78, 'syfomaja@mailinator.com', 'pypuf@mailinator.com', NULL, NULL, NULL, NULL, 2, 5, '9', '52019', '2023-05-22 14:53:09', '2023-05-25 07:32:58'),
(39, 80, 'waparoca@mailinator.com', 'nobumelil@mailinator.com', NULL, NULL, NULL, NULL, 1, 9, '11', '52456', '2023-05-22 15:07:53', '2023-05-22 15:07:53'),
(40, 81, 'waxikelow@mailinator.com', 'puhotiz@mailinator.com', NULL, NULL, NULL, NULL, 4, 7, '10', '58729', '2023-05-23 07:49:09', '2023-05-23 08:59:36'),
(41, 99, 'vefysob', 'kosowopem@mailinator.com', NULL, NULL, NULL, NULL, 2, 5, '9', '54453', '2023-05-25 07:23:51', '2023-05-25 07:23:51'),
(42, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:22:55', '2023-06-05 08:22:55'),
(43, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:24:23', '2023-06-05 08:24:23'),
(44, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:27:30', '2023-06-05 08:27:30'),
(45, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:29:37', '2023-06-05 08:29:37'),
(46, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:31:26', '2023-06-05 08:31:26'),
(47, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:59:43', '2023-06-05 08:59:43'),
(48, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 09:06:10', '2023-06-05 09:06:10'),
(49, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 09:08:18', '2023-06-05 09:08:18'),
(50, 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 09:14:05', '2023-06-05 09:14:05'),
(51, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 09:15:51', '2023-06-05 09:15:51'),
(52, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 09:19:33', '2023-06-05 09:19:33'),
(53, 116, 'Dignissimos occaecat', 'Magni tempore ducim', NULL, NULL, NULL, NULL, 2, 8, '5', '97102', '2023-06-05 09:50:45', '2023-06-05 09:50:45'),
(54, 138, 'Et est rem eum quis', 'Id molestias qui nos', NULL, NULL, NULL, NULL, 2, 4, '8', '65784', '2023-06-06 12:50:22', '2023-06-06 12:50:22'),
(55, 306, 'Quidem molestiae par', 'Quam optio nisi lab', NULL, NULL, NULL, NULL, 160, 2952, 'lahore', '12752', '2023-06-20 07:30:33', '2023-07-03 12:49:55'),
(56, 310, 'Sunt occaecat ut ad', 'Occaecat quisquam mo', NULL, NULL, NULL, NULL, 167, 3035, 'Islamabad', '77193', '2023-08-08 06:50:08', '2023-08-08 06:50:08'),
(57, 312, 'Id error minus opti', 'Voluptatem Quia vol', NULL, NULL, NULL, NULL, 185, 3430, 'Deanna Kemp', '68148', '2023-08-18 09:29:42', '2023-08-18 09:29:42'),
(58, 316, 'Iste enim cupiditate', 'Eos laboriosam vol', NULL, NULL, NULL, NULL, 7, 147, 'Jana Dunn', '86277', '2023-08-18 11:13:29', '2023-08-18 11:13:29'),
(59, 317, 'Voluptatem doloremq', 'Aliquam iste molesti', NULL, NULL, NULL, NULL, 167, 3034, 'lahore', '72520', '2023-08-18 11:22:14', '2023-08-18 11:22:14'),
(60, 319, 'Ex laboriosam volup', 'Ab voluptas impedit', NULL, NULL, NULL, NULL, 50, 816, 'Kelsie Barron', '51470', '2023-08-18 11:25:45', '2023-08-18 11:25:45'),
(61, 321, 'Quidem molestiae par', 'Quam optio nisi lab', 'Price', 'usman@gmail.com', '953-809-1159', NULL, 160, 2952, 'lahore', 'lahore', '2023-08-22 08:07:00', '2023-08-22 08:07:00'),
(62, 322, 'Quidem molestiae par', 'Quam optio nisi lab', 'Price', 'usman@gmail.com', '953-809-1159', NULL, 160, 2952, 'lahore', 'lahore', '2023-08-22 08:18:41', '2023-08-22 08:18:41'),
(63, 323, 'Quidem molestiae par', 'Quam optio nisi lab', 'Price', 'usman@gmail.com', '953-809-1159', NULL, 160, 2952, 'lahore', 'lahore', '2023-08-22 08:24:29', '2023-08-22 08:24:29'),
(64, 324, 'Quidem molestiae par', 'Quam optio nisi lab', 'Price', 'usman@gmail.com', '953-809-1159', NULL, 160, 2952, 'lahore', 'lahore', '2023-08-22 08:26:04', '2023-08-22 08:26:04'),
(65, 328, 'Quidem molestiae par', 'Quam optio nisi lab', 'Price', 'usman@gmail.com', '953-809-1159', NULL, 160, 2952, 'lahore', 'lahore', '2023-08-22 08:38:33', '2023-08-22 08:38:33'),
(66, 329, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:33:55', '2023-08-24 06:33:55'),
(67, 331, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:42:08', '2023-08-24 06:42:08'),
(68, 332, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:43:00', '2023-08-24 06:43:00'),
(69, 333, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:43:52', '2023-08-24 06:43:52'),
(70, 334, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:52:51', '2023-08-24 06:52:51'),
(71, 335, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:56:25', '2023-08-24 06:56:25'),
(72, 336, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:57:23', '2023-08-24 06:57:23'),
(73, 337, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:58:25', '2023-08-24 06:58:25'),
(74, 338, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 06:59:15', '2023-08-24 06:59:15'),
(75, 339, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 07:00:13', '2023-08-24 07:00:13'),
(76, 340, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 07:01:31', '2023-08-24 07:01:31'),
(77, 341, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahore', '97297', '2023-08-24 07:02:49', '2023-08-24 07:02:49'),
(78, 342, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahoretayyabt', 'lahore', '2023-08-24 07:18:42', '2023-08-24 07:18:42'),
(79, 343, '941 New Parkway', 'Placeat nostrum ab', 'Kessie', 'qubodib@mailinator.com', '+1 (419) 814-3004', NULL, 167, 3037, 'lahoretayyabt', 'lahoretayyabt', '2023-08-24 14:47:13', '2023-08-24 14:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `fee` double NOT NULL DEFAULT 0,
  `is_free` int(11) NOT NULL DEFAULT 0,
  `minimum_order` double NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `title`, `fee`, `is_free`, `minimum_order`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Free Shipping', 0, 1, 1200, 1, '$1200 Up Condition', '2021-12-22 21:55:58', '2022-02-07 06:51:51'),
(7, 'Outside City', 120, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-01-30 09:43:24', '2022-02-07 06:52:03'),
(8, 'Inside City', 60, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-01-30 09:43:39', '2022-02-07 06:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `coupon_name` varchar(255) DEFAULT NULL,
  `coupon_price` double NOT NULL,
  `offer_type` int(11) NOT NULL,
  `image` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `user_id`, `product_id`, `name`, `qty`, `price`, `tax`, `coupon_name`, `coupon_price`, `offer_type`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(5, 1, 22, 'Suzuki Intruder M1800R', 3, 55.25, 2.7625, NULL, 0, 0, 'uploads/custom-images/suzuki-intruder-m1800r-2022-02-06-10-38-21-2749.jpg', 'suzuki-intruder-m1800r', '2022-04-27 10:35:58', '2022-04-27 10:35:58'),
(6, 1, 32, 'Casual  Fashion Shoes For Men', 1, 19.5, 0.585, NULL, 0, 0, 'uploads/custom-images/fashion-shoes-for-men-casual-shoes-comfortable-2022-02-06-02-50-15-7154.jpg', 'casual-fashion-shoes-for-men', '2022-04-27 10:36:42', '2022-04-27 10:36:42'),
(8, 1, 9, 'Apple iPhone 12 Pro Max', 1, 27, 1.35, '', 0, 0, 'uploads/custom-images/symphony-z20-2022-02-06-12-17-14-1684.jpg', 'apple-iphone-12-pro-max', '2022-04-28 04:29:22', '2022-04-28 04:29:22'),
(9, 3, 5, 'Preimum Quality Winter Hoodie For Men', 1, 70, 2.1, '', 0, 0, 'uploads/custom-images/red-hot-ink-t-shirts-2022-02-02-08-24-22-7441.jpg', 'preimum-quality-winter-hoodie-for-men', '2022-07-19 06:00:14', '2022-07-19 06:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_variants`
--

CREATE TABLE `shopping_cart_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopping_cart_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_cart_variants`
--

INSERT INTO `shopping_cart_variants` (`id`, `shopping_cart_id`, `name`, `value`, `price`, `created_at`, `updated_at`) VALUES
(6, 7, 'Camera', '68PX', '3', '2022-04-27 10:37:40', '2022-04-27 10:37:40'),
(7, 7, 'RAM', '68GB', '1', '2022-04-27 10:37:40', '2022-04-27 10:37:40'),
(8, 7, 'Memory', '64GB', '3', '2022-04-27 10:37:40', '2022-04-27 10:37:40'),
(9, 8, 'Camera', '68PX', '3', '2022-04-28 04:29:22', '2022-04-28 04:29:22'),
(10, 8, 'RAM', '68GB', '1', '2022-04-28 04:29:22', '2022-04-28 04:29:22'),
(11, 8, 'Memory', '64GB', '3', '2022-04-28 04:29:22', '2022-04-28 04:29:22'),
(12, 9, 'Color', 'Red', '0', '2022-07-19 06:00:14', '2022-07-19 06:00:14'),
(13, 9, 'Size', 'Medium', '0', '2022-07-19 06:00:14', '2022-07-19 06:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `shop_pages`
--

CREATE TABLE `shop_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_one` varchar(255) DEFAULT NULL,
  `header_two` varchar(255) DEFAULT NULL,
  `title_one` varchar(255) DEFAULT NULL,
  `title_two` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `filter_price_range` double NOT NULL DEFAULT 10000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_pages`
--

INSERT INTO `shop_pages` (`id`, `header_one`, `header_two`, `title_one`, `title_two`, `banner`, `link`, `button_text`, `status`, `filter_price_range`, `created_at`, `updated_at`) VALUES
(1, 'Up To', '70% Off', 'Women\'s Jeans Collection', 'Fashion For Women\'s', 'uploads/website-images/banner-2022-02-06-04-22-39-1426.jpg', 'product', 'Discover now', 1, 200000, NULL, '2022-02-13 13:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `serial` int(11) NOT NULL DEFAULT 0,
  `slider_location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `link`, `status`, `serial`, `slider_location`, `created_at`, `updated_at`) VALUES
(1, 'Up to 30% Offer', 'Lorem Ipsum is simply\r\ndummy text of the printing.', 'uploads/custom-images/slider-2022-02-07-02-42-31-2641.jpg', '#', 1, 2, NULL, '2022-01-30 10:25:59', '2022-02-07 11:54:46'),
(2, 'Up to 45% Offer', 'Lorem Ipsum is simply\r\ndummy text of the printing.', 'uploads/custom-images/slider-2022-02-07-08-45-04-8145.jpg', '#', 1, 1, NULL, '2022-02-07 02:45:05', '2022-02-07 11:54:14'),
(3, 'Up to 13% Offer', 'Lorem Ipsum is simply \r\ndummy text of the printing.', 'uploads/custom-images/slider-2022-02-07-09-56-43-1918.jpg', '#', 1, 3, NULL, '2022-02-07 02:46:47', '2022-02-07 11:55:04'),
(4, 'Up to 24% Offer', 'Lorem Ipsum is simply \r\ndummy text of the printing.', 'uploads/custom-images/slider-2022-02-07-09-55-37-3109.jpg', '#', 1, 4, NULL, '2022-02-07 02:48:51', '2022-02-07 11:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `social_login_information`
--

CREATE TABLE `social_login_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_facebook` int(11) NOT NULL DEFAULT 0,
  `facebook_client_id` text DEFAULT NULL,
  `facebook_secret_id` text DEFAULT NULL,
  `is_gmail` int(11) NOT NULL DEFAULT 0,
  `gmail_client_id` text DEFAULT NULL,
  `gmail_secret_id` text DEFAULT NULL,
  `facebook_redirect_url` text DEFAULT NULL,
  `gmail_redirect_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_login_information`
--

INSERT INTO `social_login_information` (`id`, `is_facebook`, `facebook_client_id`, `facebook_secret_id`, `is_gmail`, `gmail_client_id`, `gmail_secret_id`, `facebook_redirect_url`, `gmail_redirect_url`, `created_at`, `updated_at`) VALUES
(1, 1, '1844188565781706', 'f32f45abcf57a4dc23ac6f2b2e8e2241', 1, '810593187924-706in12herrovuq39i2pbn483otijei8.apps.googleusercontent.com', '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', 'http://localhost/web-solution-us/ecommerce_ibrahim/callback/google', 'http://localhost/web-solution-us/ecommerce_ibrahim/callback/google', NULL, '2022-01-22 19:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_payments`
--

CREATE TABLE `stripe_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `stripe_key` text DEFAULT NULL,
  `stripe_secret` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_code` varchar(10) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `currency_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripe_payments`
--

INSERT INTO `stripe_payments` (`id`, `status`, `stripe_key`, `stripe_secret`, `created_at`, `updated_at`, `country_code`, `currency_code`, `currency_rate`) VALUES
(1, 1, 'pk_test_51JU61aF56Pb8BOOX5ucAe5DlDwAkCZyffqlKMDUWsAwhKbdtuY71VvIzr0NgFKjq4sOVVaaeeyVXXnNWwu5dKgeq00kMzCBUm5', 'sk_test_51JU61aF56Pb8BOOXlz7jGkzJsCkozuAoRlFJskYGsgunfaHLmcvKLubYRQLCQOuyYHq0mvjoBFLzV7d8F6q8f6Hv00CGwULEEV', NULL, '2022-02-07 02:29:54', 'US', 'USD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `verified_token` text DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `status`, `verified_token`, `is_verified`, `created_at`, `updated_at`) VALUES
(1, 'user@gmail.com', 0, NULL, 1, '2022-01-31 01:07:56', '2022-01-31 01:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sub_category_code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `sub_category_code`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Camera', 'camera', '1-1', 'public/images/1684414294.jpg', 1, '2022-01-30 09:40:03', '2023-05-26 12:48:18'),
(2, 4, 'Suzuki', 'suzuki', '2', NULL, 1, '2022-01-30 10:07:45', '2023-05-26 10:37:06'),
(3, 4, 'TVS Motor', 'tvs-motor', '4', NULL, 1, '2022-01-30 10:07:58', '2023-05-26 10:37:19'),
(5, 5, 'T-shirt', 'tshirt', '1234', NULL, 1, '2022-01-30 10:08:32', '2022-01-30 10:08:32'),
(6, 6, 'Face Wash', 'face-wash', '153', NULL, 1, '2022-01-30 10:08:51', '2022-01-30 10:08:51'),
(10, 2, 'Mobile Phone Accessories', 'mobile-phone-accessories', '65', NULL, 1, '2022-02-06 02:59:54', '2022-02-06 02:59:54'),
(11, 2, 'Samsung', 'samsung', '83', NULL, 1, '2022-02-06 06:05:57', '2022-02-06 06:05:57'),
(12, 2, 'I-Phone', 'iphone', '43', NULL, 1, '2022-02-06 06:06:13', '2022-02-06 06:06:13'),
(13, 5, 'Shirt', 'shirt', '77', NULL, 1, '2022-02-06 06:33:51', '2022-02-06 06:33:51'),
(14, 6, 'Shoulder Bag', 'shoulder-bag', '88', NULL, 1, '2022-02-06 08:10:06', '2022-02-06 08:10:06'),
(15, 5, 'Huddy', 'huddy', '93', NULL, 1, '2022-02-06 08:42:49', '2022-02-06 08:42:49'),
(16, 5, 'Shoes', 'shoes', '36', NULL, 1, '2022-02-06 08:47:40', '2022-02-06 08:47:40'),
(24, 1, 'sdasdasd', 'sdasdasd', '1-2', 'public/images/1685102994.png', 1, '2023-05-26 13:09:54', '2023-05-26 13:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `tawk_chats`
--

CREATE TABLE `tawk_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tawk_chats`
--

INSERT INTO `tawk_chats` (`id`, `chat_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://embed.tawk.to/5a7c31ded7591465c7077c48/default', 0, NULL, '2022-01-19 05:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `image`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'USA', 'public/images/1692346070.png', '7', '2023-08-18 07:45:37', '2023-08-18 09:07:50'),
(2, 'Rest of World', 'public/images/1692346079.png', '16', '2023-08-18 07:45:37', '2023-08-18 09:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `technical_supports`
--

CREATE TABLE `technical_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `ticket_no` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technical_supports`
--

INSERT INTO `technical_supports` (`id`, `subject`, `ticket_no`, `date`, `status`, `description`, `document`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 'Sunt velit adipisic', '1', '2023-06-27 16:48:19', 'Complete', 'Est et quo eum cupi', 'public/images/1687862899.png', '2023-06-27 11:48:19', '2023-07-03 07:52:45', NULL),
(8, 'asdasda', '4', '2023-09-04 14:53:06', 'Completed', 'sdsadasd', 'public/images/1693817586.pdf', '2023-09-04 09:53:06', '2023-09-04 09:53:06', 306);

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_and_condition` longtext DEFAULT NULL,
  `terms_condition_banner` varchar(191) DEFAULT NULL,
  `privacy_banner` varchar(191) DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `terms_and_condition`, `terms_condition_banner`, `privacy_banner`, `privacy_policy`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', 'uploads/custom-images/terms-condition-2022-02-11-03-39-59-2524.jpg', 'uploads/custom-images/privacy-policy-2022-02-11-03-40-18-7844.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br></p>', '2022-01-30 12:34:53', '2022-02-11 09:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `three_column_categories`
--

CREATE TABLE `three_column_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id_one` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_one` int(11) NOT NULL DEFAULT 0,
  `child_category_id_one` int(11) NOT NULL DEFAULT 0,
  `category_id_two` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_two` int(11) NOT NULL DEFAULT 0,
  `child_category_id_two` int(11) NOT NULL DEFAULT 0,
  `category_id_three` int(11) NOT NULL DEFAULT 0,
  `sub_category_id_three` int(11) NOT NULL DEFAULT 0,
  `child_category_id_three` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `three_column_categories`
--

INSERT INTO `three_column_categories` (`id`, `category_id_one`, `sub_category_id_one`, `child_category_id_one`, `category_id_two`, `sub_category_id_two`, `child_category_id_two`, `category_id_three`, `sub_category_id_three`, `child_category_id_three`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 2, 0, 0, 5, 0, 0, NULL, '2022-02-07 03:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `forget_password_token` varchar(191) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `verify_token` varchar(191) DEFAULT NULL,
  `email_verified` int(1) NOT NULL DEFAULT 0,
  `customer_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role` enum('user','vendor') NOT NULL DEFAULT 'user',
  `secoundary_email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `email_verified_at`, `password`, `remember_token`, `forget_password_token`, `status`, `image`, `phone`, `address`, `pdf_file`, `verify_token`, `email_verified`, `customer_id`, `created_at`, `updated_at`, `last_name`, `role`, `secoundary_email`, `dob`, `gender`) VALUES
(233, 'Tatum', 'gewufije@mailinator.com', NULL, '$2y$10$X3FX1GEzvrXuVz5r4JamPevIOwucHTfGA4eBqT3ZFcpFTvUQw19xG', NULL, NULL, 0, NULL, '+1 (446) 221-1089', NULL, NULL, NULL, 0, NULL, '2023-06-14 09:31:32', '2023-06-14 09:31:32', 'Carr', 'vendor', NULL, NULL, NULL),
(234, 'Xerxes', 'molijiqef@mailinator.com', NULL, '$2y$10$CYbqhIK2jT9XBCH7S.MdkOUx/HPm5rLNe.1mLyhW2dGFECjh2ROAS', NULL, NULL, 0, NULL, '+1 (289) 876-2535', NULL, NULL, NULL, 0, NULL, '2023-06-14 09:37:05', '2023-06-14 09:37:05', 'Reynolds', 'vendor', NULL, NULL, NULL),
(235, 'Graiden', 'lubariru@mailinator.com', NULL, '$2y$10$ei79zRzlKQFfzckA9XchtOC0qMiSMoGMCEBycNQIo.B68L2KARx7W', NULL, NULL, 0, NULL, '+1 (814) 517-5769', NULL, NULL, NULL, 0, NULL, '2023-06-14 09:39:28', '2023-06-14 09:39:28', 'Lowe', 'vendor', NULL, NULL, NULL),
(237, 'Buffy', 'hytifezym@mailinator.com', NULL, '$2y$10$zNnNjvCPYhAo5X/t2Gw2De4AfuzEPYJKkmQsx4e7Kx98VawvCI7y6', NULL, NULL, 0, NULL, '+1 (361) 462-6768', NULL, NULL, NULL, 0, NULL, '2023-06-14 09:48:46', '2023-06-14 09:48:46', 'Savage', 'vendor', NULL, NULL, NULL),
(238, 'Montana', 'jejetol@mailinator.com', NULL, '$2y$10$5OnlQmgHsR9xKSiP0CuLPOPApFHybv1HG.mnAODe.vguh9K5e5hku', NULL, NULL, 0, NULL, '+1 (378) 274-7923', NULL, NULL, NULL, 0, NULL, '2023-06-14 11:42:37', '2023-06-14 11:42:37', 'Kramer', 'vendor', NULL, NULL, NULL),
(239, 'Jermaine', 'bitoxyzaki@mailinator.com', NULL, '$2y$10$m58cCmyJMMW74ryzTELWB.SqV2/J.lpnJP7vZJIupbsVGPolmEe9e', NULL, NULL, 0, NULL, '+1 (567) 753-7547', NULL, NULL, NULL, 0, NULL, '2023-06-14 12:20:56', '2023-06-14 12:20:56', 'George', 'vendor', NULL, NULL, NULL),
(246, 'Amal', 'mowe@mailinator.com', NULL, '$2y$10$4Vy28rx55IBxO0vCxtbCx.5Q1MbO9COz.NmGXj80xPh8BEpQxonem', NULL, NULL, 0, NULL, '+1 (574) 802-2846', NULL, NULL, NULL, 0, NULL, '2023-06-14 12:57:28', '2023-06-14 12:57:28', 'Goodman', 'vendor', NULL, NULL, NULL),
(247, 'Raymond', 'gemalaw@mailinator.com', NULL, '$2y$10$qY/QxJxXEgrrBsyzp/lco.wGhsU3G94rYm./urLZA/dfMFLxIJRrK', NULL, NULL, 0, NULL, '+1 (812) 432-6753', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:00:23', '2023-06-14 13:00:23', 'Morris', 'vendor', NULL, NULL, NULL),
(248, 'Kasimir', 'figoju@mailinator.com', NULL, '$2y$10$Gcbg.UrIxfELQ3HiAwjg6Oz0GC3xslycQm.f1GXpZPUhw/09/8uoq', NULL, NULL, 0, NULL, '+1 (307) 939-5697', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:10:17', '2023-06-14 13:10:17', 'Gonzales', 'vendor', NULL, NULL, NULL),
(251, 'Damon', 'venasa@mailinator.com', NULL, '$2y$10$2oZUX0OPkV44NEngzXq/.ODcL5qApb18OkLWhgzloivErlpbdjFbO', NULL, NULL, 0, NULL, '+1 (895) 562-8731', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:18:54', '2023-06-14 13:18:54', 'Garrison', 'vendor', NULL, NULL, NULL),
(252, 'Moses', 'puzacem@mailinator.com', NULL, '$2y$10$UX9Pgidm0EVcJZI2ArvPsuXN8eCZACV.yjLwZlB7PKVUQnoegCzJi', NULL, NULL, 0, NULL, '+1 (328) 208-9361', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:22:32', '2023-06-14 13:22:32', 'Henson', 'vendor', NULL, NULL, NULL),
(256, 'Yvette', 'cynukileq@mailinator.com', NULL, '$2y$10$6IUcpDnIjZMzIfsanQwR1.73smOedaTOkfWzyPmezvLV7kyh4MPGG', NULL, NULL, 0, NULL, '+1 (123) 797-7493', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:36:04', '2023-06-14 13:36:04', 'May', 'vendor', NULL, NULL, NULL),
(257, 'Kato', 'kiroti@mailinator.com', NULL, '$2y$10$gvFf.2njnsJ1CUeiP8wusOqmsSn0Qln98dnNI0jG0uSQu8xWXAny6', NULL, NULL, 0, NULL, '+1 (122) 133-6231', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:37:37', '2023-06-14 13:37:37', 'Davidson', 'vendor', NULL, NULL, NULL),
(262, 'MacKensie', 'votebyhos@mailinator.com', NULL, '$2y$10$qBGLffILrO9pYhKUuQqL4eup1/9QSqP2VShpCq0UPjxSpzmemtE0W', NULL, NULL, 0, NULL, '+1 (233) 781-4339', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:51:56', '2023-06-14 13:51:56', 'Moss', 'vendor', NULL, NULL, NULL),
(263, 'Mollie', 'caqokehiw@mailinator.com', NULL, '$2y$10$000fhW9.BXkCtwlGqEdUn.XxNEGHMErkIWVY0XmeX2HzGQ2r2K/3C', NULL, NULL, 0, NULL, '+1 (895) 188-5671', NULL, NULL, NULL, 0, NULL, '2023-06-14 13:55:03', '2023-06-14 13:55:03', 'Guerra', 'vendor', NULL, NULL, NULL),
(267, 'Emmanuel', 'gycy@mailinator.com', NULL, '$2y$10$CLNVhQYwFgjmwfuGtThmMOiuTUiqVnGBCBe0df/1Uzy/T8aoqutA.', NULL, NULL, 0, NULL, '+1 (687) 904-4372', NULL, NULL, NULL, 0, NULL, '2023-06-14 14:09:28', '2023-06-14 14:09:28', 'Brooks', 'vendor', NULL, NULL, NULL),
(268, 'Dalton', 'koqy@mailinator.com', NULL, '$2y$10$HFSggmC3plqKlgSBrcxbteoUuM8jft0PQr4Xhku5.FAiTmsWqCYwK', NULL, NULL, 0, NULL, '+1 (193) 664-2593', NULL, NULL, NULL, 0, NULL, '2023-06-14 14:11:24', '2023-06-14 14:11:24', 'Davenport', 'vendor', NULL, NULL, NULL),
(269, 'Aspen', 'homatek@mailinator.com', NULL, '$2y$10$k9qSTL.VhdzG/doVbKRIp.00T6FxcPiaQbUb.GHjs4rhMjvbBJoS6', NULL, NULL, 0, NULL, '+1 (548) 926-9506', NULL, NULL, NULL, 0, NULL, '2023-06-14 14:16:08', '2023-06-14 14:16:08', 'Curtis', 'vendor', NULL, NULL, NULL),
(270, 'Jared', 'cyhinolyh@mailinator.com', NULL, '$2y$10$ftUE5Skk2dNetmxJ8VbIQe8bP//RTKZpCQDgmBKrexTm.PyF2tDge', NULL, NULL, 0, NULL, '+1 (501) 507-8582', NULL, NULL, NULL, 0, NULL, '2023-06-14 14:19:44', '2023-06-14 14:19:44', 'Castaneda', 'vendor', NULL, NULL, NULL),
(279, 'Leroy', 'posyj@mailinator.com', NULL, '$2y$10$Quqaauwkjfm4cH88kdQyLec4DxP/uVB4/LiRpfPgeeZGXSOklbrZK', NULL, NULL, 1, NULL, '+1 (339) 157-8141', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:02:32', '2023-06-14 15:02:32', 'Santana', 'vendor', NULL, NULL, NULL),
(281, 'Glenna', 'korowon@mailinator.com', NULL, '$2y$10$gUp4U5WOy0OIW/.fr5l6h.7u6/8XBkOih3Tn6Pwgd.BMF6d3XDlhO', NULL, NULL, 0, NULL, '+1 (429) 508-7498', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:10:09', '2023-06-14 15:10:09', 'Oconnor', 'vendor', NULL, NULL, NULL),
(285, 'Elmo', 'qugymacage@mailinator.com', NULL, '$2y$10$DprtxnIthlyooqAI7hu1TeEUqWUxun0Hj7lepIlHW0Hga04uG35ui', NULL, NULL, 0, NULL, '+1 (164) 518-4435', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:26:18', '2023-06-14 15:26:18', 'Chan', 'vendor', NULL, NULL, NULL),
(288, 'Macey', 'nugalityry@mailinator.com', NULL, '$2y$10$L4kUsc9PNA4L0YYrxY4zA.swe5ltzW.tXVrSfigW7q8bACjTdeBVm', NULL, NULL, 1, NULL, '+1 (573) 214-1381', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:34:25', '2023-06-14 15:34:25', 'Bowers', 'vendor', NULL, NULL, NULL),
(289, 'Addison', 'ritytofyve@mailinator.com', NULL, '$2y$10$5mnifnjggLyONT558vziyeMBk5DmOAr2O2xfVjc7C94pccnU3hcNu', NULL, NULL, 0, NULL, '706-791-1171', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:38:29', '2023-06-14 15:38:29', 'Dean', 'vendor', NULL, NULL, NULL),
(290, 'Robin', 'zabawekoc@mailinator.com', NULL, '$2y$10$RdanIllD95iJEvwvrg0ShOovy/XMGQ.uUPaymR2icAQ8DdyVVYtgq', NULL, NULL, 0, NULL, '+1 (622) 123-6537', NULL, NULL, NULL, 0, NULL, '2023-06-14 15:42:12', '2023-06-14 15:42:12', 'Reeves', 'vendor', NULL, NULL, NULL),
(291, 'Kane', 'ravicacoso@mailinator.com', NULL, '$2y$10$zFK2hb.kU4rDNRybj4xFy.Odh3RHfYT58dbmxaT7wZVYFqPLbjx.6', NULL, NULL, 0, NULL, '+1 (401) 251-9875', NULL, NULL, NULL, 0, NULL, '2023-06-15 07:19:27', '2023-06-15 07:19:27', 'Barry', 'vendor', NULL, NULL, NULL),
(292, 'Giselle', 'podikeke@mailinator.com', NULL, '$2y$10$AIOfc9TMl3SijRdGYNKDxOHbrnu.ci.9r0iwtq9A37Xu4c4L3qaKe', NULL, NULL, 0, NULL, '+1 (732) 907-8234', NULL, NULL, NULL, 0, NULL, '2023-06-15 08:05:32', '2023-06-15 08:05:32', 'Cline', 'vendor', NULL, NULL, NULL),
(293, 'Aline', 'jehiguzixe@mailinator.com', NULL, '$2y$10$hmASyiV2ESKOecNUZ.c1mOseykpmLMtIIlvDHR6VDw/QN0bnORJYG', NULL, NULL, 0, NULL, '+1 (106) 479-8224', NULL, NULL, NULL, 0, NULL, '2023-06-15 08:14:13', '2023-06-15 08:14:13', 'Rios', 'vendor', NULL, NULL, NULL),
(298, 'Vaughan', 'gocabaj@mailinator.com', NULL, '$2y$10$54uBv.ceXReK2OQCF5Qa4eIKkHUQE3kwEpDXTITrbx8pVh3/zLybe', NULL, NULL, 0, NULL, '+1 (288) 512-3548', NULL, NULL, NULL, 0, NULL, '2023-06-15 08:50:10', '2023-06-15 08:50:10', 'Lee', 'vendor', NULL, NULL, NULL),
(302, 'Hadassah', 'hybyz@mailinator.com', NULL, '$2y$10$7k1M.zlO9YWnxNIFq1StrOdGN6F9y74YtqxjJ12RRnfF/agsXC/r6', NULL, NULL, 0, NULL, '+1 (795) 398-1956', NULL, NULL, NULL, 0, NULL, '2023-06-15 09:08:11', '2023-06-15 09:08:11', 'Sykes', 'vendor', NULL, NULL, NULL),
(303, 'Steel', 'totytebat@mailinator.com', NULL, '$2y$10$kTlno2Oi5zHHHDHSLGtzgujPnyBcfb6NtYTI0mBnBs1s4hlt3gYVa', NULL, NULL, 0, NULL, '+1 (135) 943-2791', NULL, NULL, NULL, 0, NULL, '2023-06-15 09:17:10', '2023-06-15 09:17:10', 'Mckay', 'vendor', NULL, NULL, NULL),
(304, 'Odessa', 'pelybuku@mailinator.com', NULL, '$2y$10$pPiODh5SvBArWhwlpEvfkORQBB1VGBkzwVb.OL4RdrHetYEtjj1Ji', NULL, NULL, 0, NULL, '+1 (306) 571-4108', NULL, NULL, NULL, 0, NULL, '2023-06-15 09:23:07', '2023-06-15 09:23:07', 'Hansen', 'vendor', NULL, NULL, NULL),
(305, 'Teegan', 'botusu@mailinator.com', NULL, '$2y$10$7hDwQHXcU8C5CbO3dAj8U.kyH/8B9c77i4/32z3xej1MvHI4VTJ2y', NULL, NULL, 1, NULL, '+1 (686) 785-7553', NULL, NULL, NULL, 0, NULL, '2023-06-15 09:39:30', '2023-06-15 09:39:30', 'Gillespie', 'vendor', NULL, NULL, NULL),
(306, 'Price', 'usman@gmail.com', NULL, '$2y$10$kMScqd2F8VZTVl7PnJxQCegeQFgXYG2PK3UfhK0dLokDvoqqVlpQe', NULL, NULL, 1, NULL, '925142115632', NULL, NULL, NULL, 0, NULL, '2023-06-20 07:30:33', '2023-09-20 09:09:42', 'Kirby', 'user', 'usmanusman@gmail.com', '2023-09-20', 'Male'),
(307, 'Usman', 'usman1@gmail.com', NULL, '$2y$10$GdDcoRFjJdrQ8gvO3DkyU.q5tUTJlQnP.rZNHUjtmqhx8zUVfII2O', NULL, NULL, 1, 'public/images/1688639084.png', '+1 (743) 273-1731', NULL, NULL, NULL, 0, NULL, '2023-07-03 08:21:46', '2023-07-06 11:24:44', 'Landry', 'vendor', NULL, NULL, NULL),
(308, 'Ella', 'wymumyqah@mailinator.com', NULL, '$2y$10$xwuZ7OQmgtBHaA0FrwaOyuWsUOvdoYuAKDQnd2IWgKReVVZXX2fQK', NULL, NULL, 1, NULL, '+1 (129) 306-9196', NULL, NULL, NULL, 0, NULL, '2023-07-06 12:01:10', '2023-07-06 12:01:10', 'King', 'vendor', NULL, NULL, NULL),
(310, 'Vielka', 'zyvecefe@mailinator.com', NULL, '$2y$10$Nywhe2.PS8LwLno99vH3ieLRDkXW/83ccpn0CXCF2VZNz4/3Rubxe', NULL, NULL, 1, NULL, '9554283454', NULL, NULL, NULL, 0, NULL, '2023-08-08 06:50:08', '2023-08-08 08:19:12', 'Osborne', 'user', NULL, NULL, NULL),
(311, 'Teagan', 'vivate@mailinator.com', NULL, '$2y$10$az01Z7QQ2kljy6yiekBC2egBBWaO3qfXK/k/N1rxGIbnJWed46oG6', NULL, NULL, 0, NULL, '03315142115', NULL, NULL, NULL, 0, NULL, '2023-08-08 09:29:21', '2023-08-08 09:29:21', 'Bowen', 'vendor', NULL, NULL, NULL),
(312, 'Nerea', 'usman.ranglerz449+555@gmail.com', NULL, '$2y$10$FTDajzSTxEPja.jYf8UMm.3KHQAyv5ioUqyXD95dipEiX6Bvz6YxC', NULL, NULL, 0, NULL, '515151231311', NULL, NULL, NULL, 0, NULL, '2023-08-18 09:29:42', '2023-08-18 09:29:42', 'Norris', 'user', NULL, NULL, NULL),
(316, 'Danielle', 'usman.ranglerz449+21@gmail.com', NULL, '$2y$10$VYZUNTpgUgLYTsPtqBJIeOGHzSXqI2BdKY5NTCzYGIyKfOS28j4Iq', NULL, NULL, 0, NULL, '03315142152', NULL, NULL, NULL, 0, NULL, '2023-08-18 11:13:24', '2023-08-18 11:13:24', 'Blair', 'user', NULL, NULL, NULL),
(317, 'Herrod', 'usman.ranglerz449+100@gmail.com', NULL, '$2y$10$.KriERbYOz1XHmTdI/b57e6TXHVGkvDnfBvGmaXD5HaSAmodMoOAm', NULL, NULL, 0, NULL, '0331514215', NULL, NULL, NULL, 0, NULL, '2023-08-18 11:22:09', '2023-08-18 11:22:09', 'Hays', 'user', NULL, NULL, NULL),
(319, 'Beau', 'usman.ranglerz449+400@gmail.com', NULL, '$2y$10$aEY8HP0EnJGrdyin/qJPj.bq4tB8vuebujl/hVi8C0KRoRfBjrmBi', NULL, NULL, 0, NULL, '033151224156', NULL, NULL, NULL, 0, NULL, '2023-08-18 11:25:40', '2023-08-18 11:25:40', 'Sharp', 'user', NULL, NULL, NULL),
(320, 'Christine', 'usman.ranglerz449+700@gmail.com', NULL, '$2y$10$Q7kWBjxDz6WGQd.nNdmIQ.4wFdBB7QvLDppdrp4TI0dki6dPB1JXi', NULL, NULL, 0, NULL, '0332512456', NULL, NULL, NULL, 0, NULL, '2023-08-18 11:32:26', '2023-08-18 11:32:26', 'Hall', 'vendor', NULL, NULL, NULL),
(321, 'usmanarshad03316+23', 'usmanarshad03316+23@gmail.com', NULL, '$2y$10$dizRCYxoIejjWgBBjGoxYOgyFZnEEzVdKdc8TUOPnANRmpyq/pC9m', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-22 08:07:00', '2023-08-22 08:07:00', NULL, 'user', NULL, NULL, NULL),
(322, 'usmanarshad03316+11', 'usmanarshad03316+11@gmail.com', NULL, '$2y$10$TN3YkWk.Fywzf6EiD0y4j.ixHBQQCtGBxPHocdo1X9UfK3kVMNcNW', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-22 08:18:41', '2023-08-22 08:18:41', NULL, 'user', NULL, NULL, NULL),
(323, 'usmanarshad03316+14', 'usmanarshad03316+14@gmail.com', NULL, '$2y$10$49677zbY/ponXTIPz8iLYu4mFooXhKGx4w6yHLr8NiLt1lnn.RkEO', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-22 08:24:29', '2023-08-22 08:24:29', NULL, 'user', NULL, NULL, NULL),
(324, 'usmanarshad03316+18', 'usmanarshad03316+18@gmail.com', NULL, '$2y$10$BB8rL199UHxNeNUH6ku5VOQptq4knAyc.4amVb03BJwPW8e78mt42', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-22 08:26:04', '2023-08-22 08:26:04', NULL, 'user', NULL, NULL, NULL),
(328, 'usmanarshad03316+13', 'usmanarshad03316+13@gmail.com', NULL, '$2y$10$R3vejM.zZZfX.MPAK7NZa.uTAvOgPvXqmUoG94FVM/FL/iXZzQ9r.', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-22 08:38:33', '2023-08-22 08:38:33', NULL, 'user', NULL, NULL, NULL),
(341, 'usman123456', 'usman123456@gmail.com', NULL, '$2y$10$NlERTp/VcnbTIBusnQRMjuvh6JdF1w6Wz/fUmmgfHgpPcDK0.ryLC', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-24 07:02:49', '2023-08-24 07:02:49', NULL, 'user', NULL, NULL, NULL),
(342, 'tayyab1.ranglerz', 'tayyab1.ranglerz@gmail.com', NULL, '$2y$10$CfF58AlK9hed86RaaPtxauKOj04hOAb6JQjecjUL31QH6wzkLyxCK', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-24 07:18:42', '2023-08-24 07:18:42', NULL, 'user', NULL, NULL, NULL),
(343, 'muhammadali.ranglerz', 'muhammadali.ranglerz@gmail.com', NULL, '$2y$10$PjS.8Tm4h8Z8eKocISvGsOYDoLEY4bAZxWfYrofYbrCCIsg1efh.2', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2023-08-24 14:47:13', '2023-08-24 14:47:13', NULL, 'user', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`id`, `Title`, `user_id`, `order_id`, `amount`, `created_at`, `updated_at`) VALUES
(7, 'customer', 306, 160, '3210', '2023-08-29 06:57:46', '2023-08-29 06:57:46'),
(8, 'customer', 306, 161, '3210', '2023-08-29 09:00:23', '2023-08-29 09:00:23'),
(9, 'customer', 306, 162, '3210', '2023-08-30 11:39:28', '2023-08-30 11:39:28'),
(10, 'customer', 306, 163, '3210', '2023-08-30 11:43:19', '2023-08-30 11:43:19'),
(11, 'customer', 306, 164, '3210', '2023-08-30 12:20:32', '2023-08-30 12:20:32'),
(12, 'customer', 306, 165, '3210', '2023-08-30 12:22:29', '2023-08-30 12:22:29'),
(13, 'customer', 306, 166, '3210', '2023-08-30 12:25:39', '2023-08-30 12:25:39'),
(14, 'customer', 306, 167, '3210', '2023-08-30 12:37:39', '2023-08-30 12:37:39'),
(15, 'customer', 306, 168, '3210', '2023-08-30 12:48:08', '2023-08-30 12:48:08'),
(16, 'customer', 306, 169, '3210', '2023-08-30 13:04:01', '2023-08-30 13:04:01'),
(17, 'customer', 306, 170, '3210', '2023-08-30 13:10:41', '2023-08-30 13:10:41'),
(18, 'customer', 306, 171, '3210', '2023-08-30 13:17:43', '2023-08-30 13:17:43'),
(19, 'customer', 306, 172, '2568', '2023-08-30 13:20:30', '2023-08-30 13:20:30'),
(20, 'customer', 306, 173, '2568', '2023-08-30 13:25:37', '2023-08-30 13:25:37'),
(21, 'customer', 306, 174, '2568', '2023-08-30 13:26:33', '2023-08-30 13:26:33'),
(22, 'customer', 306, 175, '3210', '2023-08-30 13:28:10', '2023-08-30 13:28:10'),
(23, 'customer', 306, 176, '3210', '2023-08-30 13:30:59', '2023-08-30 13:30:59'),
(24, 'customer', 306, 177, '3210', '2023-08-30 13:32:42', '2023-08-30 13:32:42'),
(25, 'customer', 306, 178, '3210', '2023-08-30 13:34:44', '2023-08-30 13:34:44'),
(26, 'customer', 306, 194, '3210', '2023-09-08 11:38:06', '2023-09-08 11:38:06'),
(27, 'customer', 306, 196, '3210', '2023-09-08 11:47:43', '2023-09-08 11:47:43'),
(28, 'customer', 306, 197, '3210', '2023-09-08 11:52:09', '2023-09-08 11:52:09'),
(29, 'customer', 306, 198, '3210', '2023-09-08 12:29:48', '2023-09-08 12:29:48'),
(30, 'customer', 306, 199, '3210', '2023-09-08 12:34:17', '2023-09-08 12:34:17'),
(31, 'customer', 306, 200, '3210', '2023-09-08 12:44:19', '2023-09-08 12:44:19'),
(32, 'customer', 306, 215, '3210', '2023-09-08 15:56:58', '2023-09-08 15:56:58'),
(33, 'customer', 306, 216, '3210', '2023-09-08 16:06:29', '2023-09-08 16:06:29'),
(34, 'customer', 306, 217, '3210', '2023-09-08 16:13:29', '2023-09-08 16:13:29'),
(35, 'customer', 306, 218, '3210', '2023-09-11 06:36:40', '2023-09-11 06:36:40'),
(36, 'customer', 306, 219, '3210', '2023-09-11 06:44:21', '2023-09-11 06:44:21'),
(37, 'customer', 306, 220, '3210', '2023-09-11 06:50:31', '2023-09-11 06:50:31'),
(38, 'customer', 306, 221, '3210', '2023-09-11 06:52:29', '2023-09-11 06:52:29'),
(39, 'customer', 306, 222, '3210', '2023-09-11 07:42:03', '2023-09-11 07:42:03'),
(40, 'customer', 306, 223, '3210', '2023-09-11 07:45:55', '2023-09-11 07:45:55'),
(41, 'customer', 306, 224, '3210', '2023-09-11 07:53:26', '2023-09-11 07:53:26'),
(42, 'customer', 306, 225, '3210', '2023-09-11 07:56:10', '2023-09-11 07:56:10'),
(43, 'customer', 306, 226, '3210', '2023-09-11 07:59:07', '2023-09-11 07:59:07'),
(44, 'customer', 306, 227, '3210', '2023-09-11 08:03:32', '2023-09-11 08:03:32'),
(45, 'customer', 306, 228, '3210', '2023-09-11 08:13:45', '2023-09-11 08:13:45'),
(46, 'customer', 306, 229, '3210', '2023-09-11 08:24:45', '2023-09-11 08:24:45'),
(47, 'customer', 306, 231, '3210', '2023-09-11 08:31:12', '2023-09-11 08:31:12'),
(48, 'customer', 306, 232, '3210', '2023-09-11 08:34:09', '2023-09-11 08:34:09'),
(49, 'customer', 306, 233, '3210', '2023-09-11 09:16:57', '2023-09-11 09:16:57'),
(50, 'customer', 306, 235, '3210', '2023-09-11 09:39:20', '2023-09-11 09:39:20'),
(51, 'customer', 306, 236, '3210', '2023-09-11 09:53:45', '2023-09-11 09:53:45'),
(52, 'customer', 306, 237, '3210', '2023-09-11 09:57:44', '2023-09-11 09:57:44'),
(53, 'customer', 306, 238, '3210', '2023-09-11 11:38:55', '2023-09-11 11:38:55'),
(54, 'customer', 306, 239, '3210', '2023-09-11 11:50:36', '2023-09-11 11:50:36'),
(55, 'customer', 306, 240, '3210', '2023-09-11 11:54:29', '2023-09-11 11:54:29'),
(56, 'customer', 306, 241, '3210', '2023-09-11 11:59:37', '2023-09-11 11:59:37'),
(57, 'customer', 306, 242, '3210', '2023-09-11 12:02:38', '2023-09-11 12:02:38'),
(58, 'customer', 306, 243, '3210', '2023-09-11 12:09:06', '2023-09-11 12:09:06'),
(59, 'customer', 306, 244, '3210', '2023-09-11 12:12:13', '2023-09-11 12:12:13'),
(60, 'customer', 306, 245, '3210', '2023-09-11 12:18:25', '2023-09-11 12:18:25'),
(61, 'customer', 306, 246, '3210', '2023-09-11 12:23:45', '2023-09-11 12:23:45'),
(62, 'customer', 306, 247, '3210', '2023-09-11 12:26:35', '2023-09-11 12:26:35'),
(63, 'customer', 306, 248, '3210', '2023-09-11 12:29:52', '2023-09-11 12:29:52'),
(64, 'customer', 306, 249, '3210', '2023-09-11 12:38:00', '2023-09-11 12:38:00'),
(65, 'customer', 306, 250, '3210', '2023-09-11 12:53:10', '2023-09-11 12:53:10'),
(66, 'customer', 306, 251, '3210', '2023-09-11 12:59:45', '2023-09-11 12:59:45'),
(67, 'customer', 306, 252, '3210', '2023-09-11 13:02:37', '2023-09-11 13:02:37'),
(68, 'customer', 306, 253, '3210', '2023-09-11 13:18:26', '2023-09-11 13:18:26'),
(69, 'customer', 306, 254, '3210', '2023-09-11 13:23:03', '2023-09-11 13:23:03'),
(70, 'customer', 306, 255, '3210', '2023-09-11 13:26:47', '2023-09-11 13:26:47'),
(71, 'customer', 306, 256, '3210', '2023-09-11 13:31:27', '2023-09-11 13:31:27'),
(72, 'customer', 306, 257, '3210', '2023-09-11 13:40:16', '2023-09-11 13:40:16'),
(73, 'customer', 306, 258, '3210', '2023-09-11 13:45:03', '2023-09-11 13:45:03'),
(74, 'customer', 306, 259, '3210', '2023-09-11 13:52:32', '2023-09-11 13:52:32'),
(75, 'customer', 306, 260, '3210', '2023-09-11 13:56:17', '2023-09-11 13:56:17'),
(76, 'customer', 306, 262, '3210', '2023-09-11 13:56:48', '2023-09-11 13:56:48'),
(77, 'customer', 306, 263, '3210', '2023-09-11 13:57:08', '2023-09-11 13:57:08'),
(78, 'customer', 306, 264, '3210', '2023-09-11 14:02:19', '2023-09-11 14:02:19'),
(79, 'customer', 306, 265, '3210', '2023-09-11 14:12:56', '2023-09-11 14:12:56'),
(80, 'customer', 306, 266, '3210', '2023-09-11 14:24:38', '2023-09-11 14:24:38'),
(81, 'customer', 306, 267, '3210', '2023-09-11 14:27:08', '2023-09-11 14:27:08'),
(82, 'customer', 306, 268, '3210', '2023-09-11 14:33:09', '2023-09-11 14:33:09'),
(83, 'customer', 306, 269, '1070', '2023-09-11 14:35:43', '2023-09-11 14:35:43'),
(84, 'customer', 306, 270, '1070', '2023-09-11 14:45:03', '2023-09-11 14:45:03'),
(85, 'customer', 306, 271, '1070', '2023-09-11 14:48:42', '2023-09-11 14:48:42'),
(86, 'customer', 306, 272, '1070', '2023-09-11 14:56:48', '2023-09-11 14:56:48'),
(87, 'customer', 306, 273, '1070', '2023-09-11 14:59:50', '2023-09-11 14:59:50'),
(88, 'customer', 306, 274, '1070', '2023-09-11 15:06:51', '2023-09-11 15:06:51'),
(89, 'customer', 306, 275, '1081', '2023-09-11 16:18:05', '2023-09-11 16:18:05'),
(90, 'customer', 306, 277, '3503', '2023-09-12 06:33:04', '2023-09-12 06:33:04'),
(91, 'customer', 306, 283, '3228', '2023-09-12 07:43:37', '2023-09-12 07:43:37'),
(92, 'customer', 306, 285, '3228', '2023-09-12 12:17:13', '2023-09-12 12:17:13'),
(93, 'customer', 306, 287, '3228', '2023-09-12 12:39:33', '2023-09-12 12:39:33'),
(94, 'customer', 306, 288, '3228', '2023-09-12 12:54:08', '2023-09-12 12:54:08'),
(95, 'customer', 306, 289, '3503', '2023-09-13 06:58:40', '2023-09-13 06:58:40'),
(96, 'customer', 306, 298, '3221', '2023-09-13 12:18:47', '2023-09-13 12:18:47'),
(97, 'customer', 306, 301, '3288', '2023-09-13 12:32:27', '2023-09-13 12:32:27'),
(98, 'customer', 306, 302, '3228', '2023-09-13 12:36:20', '2023-09-13 12:36:20'),
(99, 'customer', 306, 319, '3503', '2023-09-13 14:57:00', '2023-09-13 14:57:00'),
(100, 'customer', 306, 320, '3226', '2023-09-13 15:04:11', '2023-09-13 15:04:11'),
(101, 'customer', 306, 329, '3228', '2023-09-14 07:00:58', '2023-09-14 07:00:58'),
(102, 'customer', 306, 330, '3228', '2023-09-14 07:06:23', '2023-09-14 07:06:23'),
(103, 'customer', 306, 331, '3271', '2023-09-14 07:09:21', '2023-09-14 07:09:21'),
(104, 'customer', 306, 332, '3228', '2023-09-14 07:48:48', '2023-09-14 07:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` double NOT NULL DEFAULT 0,
  `banner_image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `open_at` varchar(255) DEFAULT NULL,
  `closed_at` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `top_rated` int(11) NOT NULL DEFAULT 0,
  `verified_token` varchar(255) DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `greeting_msg` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `user_id`, `total_amount`, `banner_image`, `phone`, `email`, `shop_name`, `slug`, `open_at`, `closed_at`, `address`, `seo_title`, `seo_description`, `status`, `is_featured`, `top_rated`, `verified_token`, `is_verified`, `description`, `greeting_msg`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 'uploads/custom-images/seller-banner-2022-02-07-07-53-20-3741.jpg', '123-874-6548', 'user@gmail.com', 'Shop Name One', 'shop-name-one', '09:00', '20:00', 'San Francisco City Hall, San Francisco, CA', 'Shop name one', 'Shop name one', 1, 0, 0, NULL, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Welcome to Shop name one.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-01-31 02:20:38', '2022-02-07 01:53:22'),
(2, 5, 0, 'uploads/custom-images/seller-banner-2022-02-06-12-51-30-3032.jpg', '123-343-4444', 'user3@gmail.com', 'Shop Name Two', 'shop-name-two', '06:20', '20:30', 'Florida City, FL, USA', 'Shop name 2', 'Shop name 2', 1, 0, 0, NULL, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Welcome to Shop name 2!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-01-31 08:44:13', '2022-02-06 06:55:47'),
(3, 6, 0, 'uploads/custom-images/seller-banner-2022-02-07-07-51-55-3425.jpg', '455-698-4587', 'seller@gmail.com', 'Shop Name Three', 'shop-name-three', '10:00', '22:00', 'Los Angeles, CA, USA', 'Shop Name Five', 'Shop Name Five', 1, 0, 0, NULL, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Welcome to Shop Name Five!\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-02-06 04:28:58', '2022-06-13 02:53:27'),
(4, 7, 0, 'uploads/custom-images/seller-banner-2022-02-06-01-04-56-5283.jpg', '123-343-4444', 'seller5@gmail.com', 'Shop Name Four', 'shop-name-four', '09:00', '10:00', 'Gandhinagar, Gujarat, India', 'Shop name 5', 'Shop name 5', 1, 0, 0, NULL, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Welcome to Shop name 5 ,\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-02-06 07:04:58', '2022-02-06 07:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_categories`
--

INSERT INTO `vendor_categories` (`id`, `category_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(148, 1, 233, '2023-06-14 09:31:32', '2023-06-14 09:31:32'),
(149, 1, 234, '2023-06-14 09:37:05', '2023-06-14 09:37:05'),
(150, 1, 235, '2023-06-14 09:39:28', '2023-06-14 09:39:28'),
(152, 1, 237, '2023-06-14 09:48:46', '2023-06-14 09:48:46'),
(153, 1, 238, '2023-06-14 11:42:37', '2023-06-14 11:42:37'),
(154, 1, 239, '2023-06-14 12:20:56', '2023-06-14 12:20:56'),
(161, 1, 246, '2023-06-14 12:57:28', '2023-06-14 12:57:28'),
(162, 1, 247, '2023-06-14 13:00:23', '2023-06-14 13:00:23'),
(163, 1, 248, '2023-06-14 13:10:17', '2023-06-14 13:10:17'),
(166, 1, 251, '2023-06-14 13:18:54', '2023-06-14 13:18:54'),
(169, 1, 291, '2023-06-15 07:19:27', '2023-06-15 07:19:27'),
(178, 1, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(179, 2, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(183, 1, 311, '2023-08-08 09:29:21', '2023-08-08 09:29:21'),
(184, 1, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(185, 2, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(186, 1, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06'),
(187, 2, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_child_categories`
--

CREATE TABLE `vendor_child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_child_categories`
--

INSERT INTO `vendor_child_categories` (`id`, `category_id`, `sub_category_id`, `child_category_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(104, 1, 1, 11, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(105, 1, 1, 12, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(106, 2, 10, 1, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(112, 1, 1, 11, 311, '2023-08-08 09:29:21', '2023-08-08 09:29:21'),
(113, 1, 1, 11, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(114, 2, 10, 1, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(115, 1, 1, 11, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06'),
(116, 1, 1, 12, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06'),
(117, 2, 10, 1, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_social_links`
--

CREATE TABLE `vendor_social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_social_links`
--

INSERT INTO `vendor_social_links` (`id`, `vendor_id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(30, 2, 'fab fa-twitter', 'https://www.twitter.com/', '2022-02-06 06:55:47', '2022-02-06 06:55:47'),
(31, 2, 'fab fa-facebook-f', 'https://www.facebook.com/', '2022-02-06 06:55:47', '2022-02-06 06:55:47'),
(32, 2, 'fab fa-linkedin', 'https://www.linkedin.com/', '2022-02-06 06:55:47', '2022-02-06 06:55:47'),
(33, 2, 'fab fa-instagram', 'https://www.instagram.com/', '2022-02-06 06:55:47', '2022-02-06 06:55:47'),
(34, 4, 'fab fa-twitter', 'https://www.twitter.com/', '2022-02-06 07:06:38', '2022-02-06 07:06:38'),
(35, 4, 'fab fa-facebook', 'https://www.facebook.com/', '2022-02-06 07:06:38', '2022-02-06 07:06:38'),
(36, 4, 'fab fa-linkedin', 'https://www.linkedin.com/', '2022-02-06 07:06:38', '2022-02-06 07:06:38'),
(37, 4, 'fab fa-instagram', 'https://www.instagram.com/', '2022-02-06 07:06:38', '2022-02-06 07:06:38'),
(38, 3, 'fab fa-facebook', 'https://www.facebook.com/', '2022-02-07 01:51:57', '2022-02-07 01:51:57'),
(39, 3, 'fab fa-twitter', 'https://www.twitter.com/', '2022-02-07 01:51:57', '2022-02-07 01:51:57'),
(40, 3, 'fab fa-linkedin', 'https://www.linkedin.com/', '2022-02-07 01:51:57', '2022-02-07 01:51:57'),
(41, 1, 'fab fa-twitter', 'https://www.twitter.com/', '2022-02-07 01:53:22', '2022-02-07 01:53:22'),
(42, 1, 'fab fa-facebook', 'https://www.facebook.com/', '2022-02-07 01:53:23', '2022-02-07 01:53:23'),
(43, 1, 'fab fa-linkedin', 'https://www.linkedin.com/', '2022-02-07 01:53:23', '2022-02-07 01:53:23'),
(44, 1, 'fab fa-instagram', 'https://www.instagram.com/', '2022-02-07 01:53:23', '2022-02-07 01:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_sub_categories`
--

CREATE TABLE `vendor_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_sub_categories`
--

INSERT INTO `vendor_sub_categories` (`id`, `category_id`, `sub_category_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(126, 1, 1, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(127, 2, 10, 307, '2023-07-03 13:13:31', '2023-07-03 13:13:31'),
(131, 1, 1, 311, '2023-08-08 09:29:21', '2023-08-08 09:29:21'),
(132, 1, 1, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(133, 2, 10, 320, '2023-08-18 11:32:31', '2023-08-18 11:32:31'),
(134, 1, 1, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06'),
(135, 2, 10, 308, '2023-08-25 14:39:06', '2023-08-25 14:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(31, 306, 1294, '2023-08-29 12:25:12', '2023-08-29 12:25:12'),
(32, 306, 1301, '2023-09-04 08:41:17', '2023-09-04 08:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_methods`
--

CREATE TABLE `withdraw_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `min_amount` double NOT NULL DEFAULT 0,
  `max_amount` double NOT NULL DEFAULT 0,
  `withdraw_charge` double NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_methods`
--

INSERT INTO `withdraw_methods` (`id`, `name`, `min_amount`, `max_amount`, `withdraw_charge`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bank Payment', 500, 2000, 5, '<p>Please provide your Bank Account information :&nbsp;</p><p>Bank Name: Your bank name</p><p><span style=\"background-color: transparent;\">Account Number:&nbsp; Your bank account number</span></p><p>Routing Number: Your bank routing number</p><p>Branch: Your bank branch name</p>', 1, '2022-01-31 09:30:55', '2022-02-07 02:38:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `announcement_modals`
--
ALTER TABLE `announcement_modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_payments`
--
ALTER TABLE `bank_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_address_with_user` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breadcrumb_images`
--
ALTER TABLE `breadcrumb_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_information`
--
ALTER TABLE `business_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_information_user_id_foreign` (`user_id`),
  ADD KEY `business_information_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_products`
--
ALTER TABLE `campaign_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_code_unique` (`category_code`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `child_categories_child_category_code_unique` (`child_category_code`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_consents`
--
ALTER TABLE `cookie_consents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_states`
--
ALTER TABLE `country_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_countries`
--
ALTER TABLE `currency_countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_pages`
--
ALTER TABLE `custom_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_paginations`
--
ALTER TABLE `custom_paginations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_configurations`
--
ALTER TABLE `email_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_pages`
--
ALTER TABLE `error_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_comments`
--
ALTER TABLE `facebook_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_pixels`
--
ALTER TABLE `facebook_pixels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flutterwaves`
--
ALTER TABLE `flutterwaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_social_links`
--
ALTER TABLE `footer_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_analytics`
--
ALTER TABLE `google_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_recaptchas`
--
ALTER TABLE `google_recaptchas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_centers`
--
ALTER TABLE `help_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_center_pages`
--
ALTER TABLE `help_center_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_banners`
--
ALTER TABLE `home_page_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_one_visibilities`
--
ALTER TABLE `home_page_one_visibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instamojo_payments`
--
ALTER TABLE `instamojo_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintainance_texts`
--
ALTER TABLE `maintainance_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mega_menu_categories`
--
ALTER TABLE `mega_menu_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mega_menu_sub_categories`
--
ALTER TABLE `mega_menu_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_visibilities`
--
ALTER TABLE `menu_visibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product_variants`
--
ALTER TABLE `order_product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `paymongo_payments`
--
ALTER TABLE `paymongo_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paystack_and_mollies`
--
ALTER TABLE `paystack_and_mollies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_categories`
--
ALTER TABLE `popular_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_posts`
--
ALTER TABLE `popular_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_with_images` (`product_id`);

--
-- Indexes for table `product_overviews`
--
ALTER TABLE `product_overviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_overviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_reports`
--
ALTER TABLE `product_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_report_images`
--
ALTER TABLE `product_report_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review_galleries`
--
ALTER TABLE `product_review_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sizes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specification_keys`
--
ALTER TABLE `product_specification_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_taxes`
--
ALTER TABLE `product_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variant_items`
--
ALTER TABLE `product_variant_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pusher_credentails`
--
ALTER TABLE `pusher_credentails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razorpay_payments`
--
ALTER TABLE `razorpay_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_policies`
--
ALTER TABLE `return_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6128145` (`user_id`),
  ADD KEY `role_id_fk_6128145` (`role_id`);

--
-- Indexes for table `seller_mail_logs`
--
ALTER TABLE `seller_mail_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_withdraws`
--
ALTER TABLE `seller_withdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart_variants`
--
ALTER TABLE `shopping_cart_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_pages`
--
ALTER TABLE `shop_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_login_information`
--
ALTER TABLE `social_login_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_payments`
--
ALTER TABLE `stripe_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_sub_category_code_unique` (`sub_category_code`);

--
-- Indexes for table `tawk_chats`
--
ALTER TABLE `tawk_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_supports`
--
ALTER TABLE `technical_supports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technical_supports_user_id_foreign` (`user_id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `three_column_categories`
--
ALTER TABLE `three_column_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_payments_user_id_foreign` (`user_id`),
  ADD KEY `user_payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_categories_category_id_foreign` (`category_id`),
  ADD KEY `vendor_categories_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `vendor_child_categories`
--
ALTER TABLE `vendor_child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_child_categories_category_id_foreign` (`category_id`),
  ADD KEY `vendor_child_categories_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `vendor_child_categories_child_category_id_foreign` (`child_category_id`),
  ADD KEY `vendor_child_categories_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `vendor_social_links`
--
ALTER TABLE `vendor_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_sub_categories`
--
ALTER TABLE `vendor_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_sub_categories_category_id_foreign` (`category_id`),
  ADD KEY `vendor_sub_categories_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `vendor_sub_categories_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcement_modals`
--
ALTER TABLE `announcement_modals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_payments`
--
ALTER TABLE `bank_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `breadcrumb_images`
--
ALTER TABLE `breadcrumb_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `business_information`
--
ALTER TABLE `business_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campaign_products`
--
ALTER TABLE `campaign_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cookie_consents`
--
ALTER TABLE `cookie_consents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `country_states`
--
ALTER TABLE `country_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4991;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `currency_countries`
--
ALTER TABLE `currency_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custom_paginations`
--
ALTER TABLE `custom_paginations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_configurations`
--
ALTER TABLE `email_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `error_pages`
--
ALTER TABLE `error_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facebook_comments`
--
ALTER TABLE `facebook_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facebook_pixels`
--
ALTER TABLE `facebook_pixels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flutterwaves`
--
ALTER TABLE `flutterwaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `footer_social_links`
--
ALTER TABLE `footer_social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `google_analytics`
--
ALTER TABLE `google_analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_recaptchas`
--
ALTER TABLE `google_recaptchas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help_centers`
--
ALTER TABLE `help_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `help_center_pages`
--
ALTER TABLE `help_center_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_page_banners`
--
ALTER TABLE `home_page_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_page_one_visibilities`
--
ALTER TABLE `home_page_one_visibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instamojo_payments`
--
ALTER TABLE `instamojo_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maintainance_texts`
--
ALTER TABLE `maintainance_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mega_menu_categories`
--
ALTER TABLE `mega_menu_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mega_menu_sub_categories`
--
ALTER TABLE `mega_menu_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu_visibilities`
--
ALTER TABLE `menu_visibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=652;

--
-- AUTO_INCREMENT for table `order_product_variants`
--
ALTER TABLE `order_product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymongo_payments`
--
ALTER TABLE `paymongo_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paystack_and_mollies`
--
ALTER TABLE `paystack_and_mollies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popular_categories`
--
ALTER TABLE `popular_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popular_posts`
--
ALTER TABLE `popular_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1363;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT for table `product_overviews`
--
ALTER TABLE `product_overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `product_reports`
--
ALTER TABLE `product_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_report_images`
--
ALTER TABLE `product_report_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_review_galleries`
--
ALTER TABLE `product_review_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `product_specification_keys`
--
ALTER TABLE `product_specification_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_taxes`
--
ALTER TABLE `product_taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_variant_items`
--
ALTER TABLE `product_variant_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pusher_credentails`
--
ALTER TABLE `pusher_credentails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `razorpay_payments`
--
ALTER TABLE `razorpay_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `return_policies`
--
ALTER TABLE `return_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_mail_logs`
--
ALTER TABLE `seller_mail_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_withdraws`
--
ALTER TABLE `seller_withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shopping_cart_variants`
--
ALTER TABLE `shopping_cart_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shop_pages`
--
ALTER TABLE `shop_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_login_information`
--
ALTER TABLE `social_login_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stripe_payments`
--
ALTER TABLE `stripe_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tawk_chats`
--
ALTER TABLE `tawk_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technical_supports`
--
ALTER TABLE `technical_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `three_column_categories`
--
ALTER TABLE `three_column_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `vendor_child_categories`
--
ALTER TABLE `vendor_child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `vendor_social_links`
--
ALTER TABLE `vendor_social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `vendor_sub_categories`
--
ALTER TABLE `vendor_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD CONSTRAINT `billing_address_with_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_information`
--
ALTER TABLE `business_information`
  ADD CONSTRAINT `business_information_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `business_information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_with_images` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_overviews`
--
ALTER TABLE `product_overviews`
  ADD CONSTRAINT `product_overviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_6128145` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_6128145` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technical_supports`
--
ALTER TABLE `technical_supports`
  ADD CONSTRAINT `technical_supports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD CONSTRAINT `user_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD CONSTRAINT `vendor_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_categories_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vendor_child_categories`
--
ALTER TABLE `vendor_child_categories`
  ADD CONSTRAINT `vendor_child_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_child_categories_child_category_id_foreign` FOREIGN KEY (`child_category_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_child_categories_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_child_categories_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vendor_sub_categories`
--
ALTER TABLE `vendor_sub_categories`
  ADD CONSTRAINT `vendor_sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_sub_categories_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendor_sub_categories_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

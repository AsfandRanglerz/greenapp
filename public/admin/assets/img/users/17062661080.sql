-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2024 at 09:08 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rangwdne_drivrrapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(3, NULL, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$N0LUc7qkZYhoPzg3l.B5Qud0a/bhx9hX5V9Y4MWBwxrR0k5Iy2PD2', 'public/admin/assets/images/users/admin.png', '2023-10-25 14:38:52', '2024-01-09 23:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `user_id`, `bank_name`, `holder_name`, `account_number`, `status`, `created_at`, `updated_at`) VALUES
(75, 166, 'Meezan', 'Muhammad Bilal', '1234567890098765', 'InActive', '2024-01-04 16:15:45', '2024-01-10 17:40:48'),
(76, 166, 'HBL', 'Bilal Rajpot', '098765532123456', 'InActive', '2024-01-04 16:16:28', '2024-01-10 17:40:48'),
(79, 166, 'Bilal', 'Rajpoot', '1234567890098765', 'Active', '2024-01-10 17:40:48', '2024-01-10 17:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `component_permission`
--

CREATE TABLE `component_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `component_permission`
--

INSERT INTO `component_permission` (`id`, `user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(209, 26, 27, NULL, NULL),
(210, 26, 35, NULL, NULL),
(211, 26, 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `image`, `created_at`, `updated_at`, `is_active`) VALUES
(254, 91, 'public/admin/assets/images/users/1700217025.jpg', '2023-11-17 15:30:25', '2023-11-17 15:34:18', 1),
(261, 166, 'public/admin/assets/images/users/1705063007.jpg', '2024-01-12 17:36:47', '2024-01-12 17:37:27', 1),
(262, 170, 'public/admin/assets/images/users/1705907289.jpg', '2024-01-22 12:08:09', '2024-01-22 12:08:43', 1),
(263, 176, 'public/admin/assets/images/users/1705918775.JPG', '2024-01-22 15:19:35', '2024-01-22 15:19:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver_vehicles`
--

CREATE TABLE `driver_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `license_plate` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_vehicles`
--

INSERT INTO `driver_vehicles` (`id`, `user_id`, `vehicle_id`, `vehicle_brand`, `model`, `year`, `license_plate`, `color`, `created_at`, `updated_at`, `is_active`) VALUES
(149, 166, 1, 'Civic', '2009', '2011', 'Lxr2089', 'Red', '2024-01-08 11:08:04', '2024-01-08 11:08:16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `driver_wallets`
--

CREATE TABLE `driver_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `total_earning` int(255) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_wallets`
--

INSERT INTO `driver_wallets` (`id`, `driver_id`, `total_earning`, `image`, `created_at`, `updated_at`) VALUES
(14, 91, 0, NULL, '2023-11-17 15:27:08', '2023-11-17 15:27:08'),
(34, 166, 3900, NULL, '2024-01-03 11:03:34', '2024-01-25 11:54:48'),
(40, 170, 0, NULL, '2024-01-17 12:16:30', '2024-01-17 12:16:30'),
(41, 172, 0, NULL, '2024-01-18 15:30:52', '2024-01-18 15:30:52'),
(42, 174, 0, NULL, '2024-01-22 14:54:06', '2024-01-22 14:54:06'),
(43, 176, 0, NULL, '2024-01-22 15:18:02', '2024-01-22 15:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `hours` int(24) DEFAULT NULL,
  `days` int(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` int(1) DEFAULT 0,
  `on_vehicle` int(1) NOT NULL DEFAULT 0,
  `active_job` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `vehicle_id`, `location`, `date`, `time`, `hours`, `days`, `price`, `description`, `created_at`, `updated_at`, `is_active`, `on_vehicle`, `active_job`) VALUES
(150, 165, 1, 'null', '13-01-2024', '10:53 AM', 2, 2, '10', 'Want to reached University', '2024-01-12 10:53:36', '2024-01-12 10:54:44', 0, 0, 1),
(151, 165, 1, 'undefined', '14-01-2024', '10:51 AM', 2, 1, '20', 'Want to reached Marriage Hall', '2024-01-12 10:56:23', '2024-01-22 17:10:37', 0, 0, 1),
(152, 165, 1, 'null', '19-01-2024', '10:24 AM', 1, 2, '30', 'Want to reached Hall', '2024-01-18 10:24:45', '2024-01-22 09:41:48', 0, 0, 1),
(153, 103, 1, '29a Civic Center St, Township Twp Commercial Area Lahore, Punjab 54770, Pakistan', '19-01-2024', '11:53 AM', 11, 11, '29', 'Fresh job', '2024-01-19 11:53:54', '2024-01-19 11:53:54', 0, 1, 0),
(154, 165, 1, 'F73X+4VG, College Road, Civic Center Twp Commercial Area Lahore, Punjab 54770, Pakistan', '23-01-2024', '11:55 AM', 1, 2, '20', 'Want to reached Hall', '2024-01-22 12:04:43', '2024-01-25 11:55:46', 1, 0, 0),
(155, 175, 1, 'null', '23-01-2024', '10:45 AM', 1, 1, '6', 'Shop', '2024-01-22 14:57:08', '2024-01-22 14:57:08', 0, 1, 0),
(157, 165, 1, 'akbar chownk', '24-01-2024', '10:48 AM', 1, 1, '25', 'School', '2024-01-23 10:48:51', '2024-01-24 11:58:44', 0, 0, 1),
(159, 103, 1, '29a Civic Center St, Township Twp Commercial Area Lahore, Punjab 54770, Pakistan', '25-01-2024', '5:40 PM', 9, 9, '14', 'Okkkkk', '2024-01-24 17:40:40', '2024-01-24 17:40:40', 0, 0, 1);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_17_055937_create_users_table', 1),
(3, '2021_12_17_063251_create_admins_table', 1),
(4, '2021_12_18_062039_password_resets', 1),
(5, '2021_12_20_060915_create_privacy_policies_table', 1),
(6, '2021_12_20_085741_create_term_conditions_table', 1),
(7, '2023_02_06_084933_create_roles_table', 2),
(12, '2023_10_06_065957_create_vehicles_table', 3),
(13, '2023_10_13_124051_create_driver_vehicles_table', 4),
(14, '2023_10_09_064140_create_documents_table', 5),
(15, '2023_10_18_110738_create_jobs_table', 6),
(16, '2023_10_23_113536_create_permission_tables', 7),
(17, '2023_10_24_050621_create_role_user_table', 8),
(18, '2023_10_24_134831_create_questions_table', 9),
(19, '2023_10_25_061713_create_admins_table', 10),
(20, '2023_10_25_103130_create_component_permssion_table', 11),
(21, '2023_10_25_121949_create_component_permission_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('06975bef-10c7-4f1b-9a62-3b0b6cc707e3', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"TheDriver UserUsmanHas been Created\"}', '2023-11-29 08:03:56', '2023-11-29 07:17:11', '2023-11-29 08:03:56'),
('52f5694e-be44-4d79-8115-a05117020b3e', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New Driver Usman Has been Created.\"}', '2023-11-29 08:03:56', '2023-11-29 07:20:34', '2023-11-29 08:03:56'),
('677533da-0094-4117-9400-23eef09f6e43', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"TheBusiness Owner UserCrane Meadows IncHas been Created\"}', '2023-11-14 19:00:00', '2023-11-29 06:43:54', '2023-11-29 06:43:54'),
('84455c77-77bd-4374-bcb6-afc66b6481fa', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New Business Owner Moon Has been Created.\"}', '2023-11-29 08:33:43', '2023-11-29 08:13:37', '2023-11-29 08:33:43'),
('b3f67199-d074-4973-ba12-c023be979272', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New UserChurch and Lindsey TradingHas been Created\"}', '2023-11-29 08:03:56', '2023-11-29 06:34:59', '2023-11-29 08:03:56'),
('d0c5b1c6-3d88-4fbc-8c49-347e41c2b95c', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New Driver Moon Has been Created.\"}', '2023-11-29 08:09:37', '2023-11-29 08:08:35', '2023-11-29 08:09:37'),
('dcaffa3d-ad36-450e-bbd7-d4d90965237b', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New Driver Moon Has been Created.\"}', '2023-11-29 08:03:56', '2023-11-29 07:26:32', '2023-11-29 08:03:56'),
('df700f2d-356c-45d2-b5ff-8cbe0cbb726d', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The New Driver Moon Has been Created.\"}', '2023-11-29 08:33:43', '2023-11-29 08:12:41', '2023-11-29 08:33:43'),
('f7e9553f-33e9-4073-8c3c-9c6be5feaf2b', 'App\\Notifications\\TestingNotification', 'App\\Models\\Admin', 3, '{\"message\":\"The NewDriverUsmanHas been Created.\"}', '2023-11-29 08:03:56', '2023-11-29 07:18:53', '2023-11-29 08:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`, `otp`) VALUES
('usman0725.ranglerz@gmail.com', '1RNXwh2mMotj0rJzA7WKisPWCxZM7N', NULL, '9424');

-- --------------------------------------------------------

--
-- Table structure for table `payment_requests`
--

CREATE TABLE `payment_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `card_holder` varchar(255) DEFAULT NULL,
  `cvc` varchar(255) DEFAULT NULL,
  `counter_offer` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripeToken` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_requests`
--

INSERT INTO `payment_requests` (`id`, `owner_id`, `driver_id`, `job_id`, `payment_amount`, `card_number`, `expiry_date`, `card_holder`, `cvc`, `counter_offer`, `location`, `status`, `created_at`, `updated_at`, `stripeToken`) VALUES
(720, 165, 166, 157, '15', NULL, NULL, NULL, NULL, '15', '29a Civic Center St, Township Twp Commercial Area Lahore, Punjab 54770, Pakistan', 'Accepted', '2024-01-25 14:08:11', '2024-01-24 11:58:44', NULL),
(736, 165, 166, 154, '20', NULL, NULL, NULL, NULL, NULL, 'Lahore', 'CancelRide', '2024-01-25 20:39:57', '2024-01-25 11:55:46', NULL),
(737, 103, 166, 159, '14', NULL, NULL, NULL, NULL, NULL, '18 Civic Center St, Township Twp Commercial Area Lahore, Punjab 54770, Pakistan', 'Accepted', '2024-01-24 17:40:58', '2024-01-24 17:40:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(27, 'Dashboard', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(28, 'Business Owner', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(29, 'Driver', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(30, 'SubAdmin', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(31, 'Vehicles', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(33, 'Privacy policies', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(35, 'Help & Support', 'web', '2023-10-31 18:37:56', '2023-10-31 18:37:56'),
(36, 'Term&Conditions', 'web', '2023-10-31 18:44:04', '2023-10-31 18:44:04'),
(37, 'Payments', 'web', '2023-12-07 17:30:10', '2023-12-07 17:30:10'),
(38, 'DriverWallets', 'web', '2023-12-07 17:30:45', '2023-12-07 17:30:45'),
(39, 'WithdrawRequest', 'web', '2023-12-07 17:31:10', '2023-12-07 17:31:10'),
(40, 'Notification', 'web', '2024-01-04 17:40:20', '2024-01-04 17:40:20');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 9, 'drver@gmail.com', 'ec994e4697e9c25b4e57e9584050f218eea5b4e7e787ab280c9654478b62c48c', '[\"*\"]', NULL, '2023-10-11 03:53:54', '2023-10-11 03:53:54'),
(2, 'App\\Models\\User', 10, 'drver1@gmail.com', '2f20f5c20c08a191b6ea054d2687e4f3e78740895ca1d09fd6defade2b713550', '[\"*\"]', NULL, '2023-10-11 05:55:29', '2023-10-11 05:55:29'),
(3, 'App\\Models\\User', 7, 'allll@gmail.com', '704c1e261954dc9d10806089709ceab5e88853252affd20d171e69e4d2366b87', '[\"*\"]', NULL, '2023-10-11 05:58:39', '2023-10-11 05:58:39'),
(4, 'App\\Models\\User', 7, 'allll@gmail.com', '2dfd9e8a95b2812c66d6b32576ff98a11945cbb9094c6f2c0a9bccc0b9f5ac49', '[\"*\"]', NULL, '2023-10-11 05:59:10', '2023-10-11 05:59:10'),
(5, 'App\\Models\\User', 7, 'allll@gmail.com', '1e27175caa7191a857f94233ad04d5c846fed7ea29d9e20289a66a14c56251f6', '[\"*\"]', NULL, '2023-10-11 05:59:13', '2023-10-11 05:59:13'),
(6, 'App\\Models\\User', 7, 'allll@gmail.com', '1d963e011e578d2d25c48a92ce400ad3bcecf479d6a70a5367df5c3de7465f04', '[\"*\"]', NULL, '2023-10-11 05:59:15', '2023-10-11 05:59:15'),
(7, 'App\\Models\\User', 7, 'allll@gmail.com', '3f65de0c5d643b7a1f048ced52e181d446b87d91878398bf87cbf1388a852d62', '[\"*\"]', NULL, '2023-10-11 05:59:16', '2023-10-11 05:59:16'),
(8, 'App\\Models\\User', 7, 'allll@gmail.com', 'a2695052d4c25162dd478ca8e29c4d372bcac7baa498590fff60842ac7e9739e', '[\"*\"]', NULL, '2023-10-11 05:59:18', '2023-10-11 05:59:18'),
(9, 'App\\Models\\User', 7, 'allll@gmail.com', '4f097487f3dadb1ce100d543804832856a64fc8b4648fcc8a964ff3f52d36243', '[\"*\"]', NULL, '2023-10-11 05:59:19', '2023-10-11 05:59:19'),
(10, 'App\\Models\\User', 7, 'allll@gmail.com', '667b0d4d92aca06f526e62725f2168e8aa33c14ff729837c9e1200f16281d6d2', '[\"*\"]', NULL, '2023-10-11 06:13:07', '2023-10-11 06:13:07'),
(15, 'App\\Models\\User', 11, 'usman0725.ranglerz@gmail.com', '146c9b56909a21373b5ed3b2987463c721db13e8c1cedc01aa7a7dc6cf0699a4', '[\"*\"]', '2023-10-18 03:11:01', '2023-10-13 02:08:14', '2023-10-18 03:11:01'),
(16, 'App\\Models\\User', 15, 'usman220725.ranglerz@gmail.com', 'f3e0dca731be9ab30c1204e162357f9d310d9d6c4761646400e07231d8bcbac2', '[\"*\"]', NULL, '2023-10-18 01:37:24', '2023-10-18 01:37:24'),
(17, 'App\\Models\\User', 15, 'usman220725.ranglerz@gmail.com', '05afb8c5d20034bb5c7072a1a7c9d2fbd7afe04b9fb2b98c4b955911311ad3aa', '[\"*\"]', NULL, '2023-10-18 01:39:09', '2023-10-18 01:39:09'),
(18, 'App\\Models\\User', 11, 'usman0725.ranglerz@gmail.com', 'ea50df784523027bca70aa663a062cfa44926c9709297624b121e1364362a8f3', '[\"*\"]', NULL, '2023-10-18 01:46:30', '2023-10-18 01:46:30'),
(19, 'App\\Models\\User', 16, 'u12.ranglerz@gmail.com', '356ad0022f4bf15dd2f1e9764683dc5f8c958e9ffa4e6fa7ad07b7c76e8f93db', '[\"*\"]', NULL, '2023-10-18 08:28:37', '2023-10-18 08:28:37'),
(20, 'App\\Models\\User', 16, 'u12.ranglerz@gmail.com', '64616bf7daecc8d26b2519c6d4bac64b77797da1356c04e4344bb69781940c37', '[\"*\"]', '2023-10-19 08:49:11', '2023-10-18 08:30:12', '2023-10-19 08:49:11'),
(21, 'App\\Models\\User', 30, 'ranabilal19999@gmail.com', 'a9898643119500f6e7faba25809e974ef48abc4197b060c24229cca80f26cb98', '[\"*\"]', NULL, '2023-10-31 16:44:32', '2023-10-31 16:44:32'),
(22, 'App\\Models\\User', 31, 'ranabilal19999@gmail.com', 'f1aeb9667cbd0e382157e17b77823cc7dba91def29b02d3889972684ab6e5d2b', '[\"*\"]', NULL, '2023-10-31 16:47:46', '2023-10-31 16:47:46'),
(23, 'App\\Models\\User', 32, 'bilal.ranglerz199@gmail.com', '9808ecd03962b8aa768ee69ad9003510c59d99c06a9e793407bf77436a6a2479', '[\"*\"]', NULL, '2023-10-31 16:49:33', '2023-10-31 16:49:33'),
(24, 'App\\Models\\User', 33, 'usmanqayyum.ranglerz@gmail.com', '673ccc12fa0b17dd4b1cb2c5a16ea3690bfed99025ef407ac3dbcf76d50493a0', '[\"*\"]', NULL, '2023-10-31 16:49:50', '2023-10-31 16:49:50'),
(25, 'App\\Models\\User', 34, 'afaq.ranglerz@gmail.com', '05834a5c17604bf6737870bdfd36cf564c8f8df46ceddab8e557ac113a713777', '[\"*\"]', NULL, '2023-10-31 16:53:26', '2023-10-31 16:53:26'),
(26, 'App\\Models\\User', 36, 'afaqahmad4009@gmail.com', '992b93215531a85440c3160bc914f534e4efb35abd43a7af34fc4635f9910167', '[\"*\"]', NULL, '2023-11-07 15:48:23', '2023-11-07 15:48:23'),
(27, 'App\\Models\\User', 37, '123@gmail.com', '9ee36b334bbc62939ca9e48749da48fe06f73093ab193cd30d8e80fc95669572', '[\"*\"]', NULL, '2023-11-07 16:48:02', '2023-11-07 16:48:02'),
(28, 'App\\Models\\User', 38, 'm.usman.talat.2001@gmail.com', 'b9d978774ca32dd1e638baed7d71b047922b3fcf4ac91601fee98bcba7d2a2b2', '[\"*\"]', NULL, '2023-11-07 17:16:58', '2023-11-07 17:16:58'),
(29, 'App\\Models\\User', 47, 'afaq1000@gmail.com', 'e1d44614d1b326b0f75a92c109e3fb311b854b0df5bacdb89c02e56169b30531', '[\"*\"]', NULL, '2023-11-08 12:10:15', '2023-11-08 12:10:15'),
(30, 'App\\Models\\User', 48, 'afaqahmed4009@gmail.com', '9fb3103992e935571077a8b6f4757b9fc7cece6d12cffe2aa70384a95ce24d33', '[\"*\"]', NULL, '2023-11-08 12:11:17', '2023-11-08 12:11:17'),
(31, 'App\\Models\\User', 49, 'afaqahmad4009@gmail.com', '75d9516c6a084b33760ec08ef3faf84e071ec26efc95812d75739b74c6582f4e', '[\"*\"]', NULL, '2023-11-08 12:28:39', '2023-11-08 12:28:39'),
(32, 'App\\Models\\User', 50, 'afaq.ranglerz@gmail.com', 'ab78d0a83d4eccbbce3856279da23aacaff8bafc7be90ed7832fd464cfeb55ca', '[\"*\"]', NULL, '2023-11-08 12:34:45', '2023-11-08 12:34:45'),
(33, 'App\\Models\\User', 52, 'afaqdev@gmail.com', '64b946a7c49e2760b9b3807effae81681831d5f0f61e7a8d1a563120848ae58f', '[\"*\"]', NULL, '2023-11-08 13:20:58', '2023-11-08 13:20:58'),
(34, 'App\\Models\\User', 53, 'afaqdev1@gmail.com', 'b62c58f8844ae7dcc9a11d36e694527355b68446218dee8b2750f494b0932ba5', '[\"*\"]', NULL, '2023-11-08 13:22:35', '2023-11-08 13:22:35'),
(35, 'App\\Models\\User', 54, 'afaqahmad4009@gmail.com', 'd43188b5cd27810245733c994774a1d5c1c80fd07d8e14f84f303d4a894844f4', '[\"*\"]', NULL, '2023-11-08 13:29:17', '2023-11-08 13:29:17'),
(36, 'App\\Models\\User', 55, 'afaq.ranglerz@gmail.com', 'dcabc1578f592e46a876458ee0cc620407255a4db69876e1059c376c822b1d45', '[\"*\"]', NULL, '2023-11-08 13:36:58', '2023-11-08 13:36:58'),
(37, 'App\\Models\\User', 56, 'Aliakber.ranglerz@gmail.com', '6b2339ac80c81b4e203244b0c25a6e55e329493292ccfcc35e5a9eccda232ec1', '[\"*\"]', NULL, '2023-11-08 13:40:03', '2023-11-08 13:40:03'),
(38, 'App\\Models\\User', 76, 'test1@gmail.com', '7f0ebf0bdec29f4930aa7a8c18fc2c166cd2338c5a353937d3b2d045f5df2825', '[\"*\"]', NULL, '2023-11-10 12:39:22', '2023-11-10 12:39:22'),
(39, 'App\\Models\\User', 79, 'test4@gmail.com', '8cd0707ed4eab417990e58ab7eb5c04384ad400ff146ac46b2829590ee7cb895', '[\"*\"]', NULL, '2023-11-10 12:43:05', '2023-11-10 12:43:05'),
(40, 'App\\Models\\User', 80, 'abc@gmail.com', '709d35a1ce650268dbdb59378059bbc963c53c01f8bd6e96c522e970af599d55', '[\"*\"]', NULL, '2023-11-14 13:34:59', '2023-11-14 13:34:59'),
(41, 'App\\Models\\User', 81, 'abc1@gmail.com', '9193136639ea4e9beb30a63776a2f24103ad8ede050f6c4f39aafdeb2544a474', '[\"*\"]', NULL, '2023-11-14 13:35:16', '2023-11-14 13:35:16'),
(42, 'App\\Models\\User', 82, 'abc2@gmail.com', 'ad674babe05d2ae30bf9afaaf6a447fd83f20eb80c4f330dc10afc21a0cd87f5', '[\"*\"]', NULL, '2023-11-14 13:36:45', '2023-11-14 13:36:45'),
(43, 'App\\Models\\User', 83, 'abcd@gmail.com', '1525635fc1757f2c123ef514f56309ee9de85d46d4a4392c095d5f6d08501571', '[\"*\"]', NULL, '2023-11-14 13:45:10', '2023-11-14 13:45:10'),
(44, 'App\\Models\\User', 85, 'bilal.ranglerz199@gmail.com', 'be5595a36e8d6469337fa20893a475802019888aa0d8e427d805e080dc7338f1', '[\"*\"]', NULL, '2023-11-17 11:06:17', '2023-11-17 11:06:17'),
(45, 'App\\Models\\User', 86, 'bilal.ranglerz199@gmail.com', '477a3152feac062ee5a896370dc1b8271d26fbc15173ec835b310ea245c49a64', '[\"*\"]', NULL, '2023-11-17 11:14:54', '2023-11-17 11:14:54'),
(46, 'App\\Models\\User', 87, 'ranabilal19999@gmail.com', '1fac1a8c9e39cb0eee0496269e1f3baaf8f4d720aceb8f36b3124af678aef5f7', '[\"*\"]', NULL, '2023-11-17 11:19:30', '2023-11-17 11:19:30'),
(47, 'App\\Models\\User', 90, 'm.usman.talat.2001@gmail.com', '5385eb1f6b6ed86079f48175c53925c0783a8d23dc71d2a8502fbfa4427f7bc8', '[\"*\"]', NULL, '2023-11-17 15:19:56', '2023-11-17 15:19:56'),
(48, 'App\\Models\\User', 91, 'usman0725.ranglerz@gmail.com', '4fc29c6f7478310619247839f2013bba03fd978a7dc19d0404bdf2fb5b64e382', '[\"*\"]', NULL, '2023-11-17 15:27:08', '2023-11-17 15:27:08'),
(49, 'App\\Models\\User', 92, 'ranabilal19999@gmail.com', '59900aef77d03e0b0409783e96e97b42c5001c21f86bb5f7baadde598d3a3141', '[\"*\"]', NULL, '2023-11-17 17:43:58', '2023-11-17 17:43:58'),
(50, 'App\\Models\\User', 93, 'ranabilal19999@gmail.com', 'aed4de440ab1f40205f2f05cb3f4cac02d262ea57ef670a638f981f9c7c757f2', '[\"*\"]', NULL, '2023-11-17 17:48:33', '2023-11-17 17:48:33'),
(51, 'App\\Models\\User', 94, 'bilal.ranglerz199@gmail.com', '6f4464a2b5f3f787daa932c63b0105541595b4a4087fde7302b2526bd9410ccc', '[\"*\"]', NULL, '2023-11-17 17:56:07', '2023-11-17 17:56:07'),
(52, 'App\\Models\\User', 95, 'bilal.ranglerz199@gmail.com', '5de1e66a152d4d5e247dc245831e5f1410ad90f70fe0d3f28603264a243620b9', '[\"*\"]', NULL, '2023-11-17 17:59:23', '2023-11-17 17:59:23'),
(53, 'App\\Models\\User', 96, 'ranabilal19999@gmail.com', '3dec557bc0cc0363afdd2852623f1439bc6572b84d3f0ffd37a9544e03bac095', '[\"*\"]', NULL, '2023-11-17 19:07:15', '2023-11-17 19:07:15'),
(54, 'App\\Models\\User', 97, 'ranabilal19999@gmail.com', '6342762577eea14b409b6aa81498885678611a044c3259fd617dc27c10a368d7', '[\"*\"]', NULL, '2023-11-17 19:08:59', '2023-11-17 19:08:59'),
(55, 'App\\Models\\User', 98, 'ranabilal19999@gmail.com', '3b3062c93b5d9e212a109a63d7e6df5e35d81f353c44f9ba8ae20fa6549f1a0e', '[\"*\"]', NULL, '2023-11-17 19:15:52', '2023-11-17 19:15:52'),
(56, 'App\\Models\\User', 99, 'bilal.ranglerz199@gmail.com', '8a8c212aa0caa273a5e6ca74e98ad02c10b284b1c5bfcd62d463d6568a75be42', '[\"*\"]', NULL, '2023-11-17 19:21:04', '2023-11-17 19:21:04'),
(57, 'App\\Models\\User', 100, 'afaqahmad4009@gmail.com', '2ce0bf8023999d16ae4147ad6b349e8724972321dc037c1fb99780a59dc43b45', '[\"*\"]', NULL, '2023-11-21 15:54:08', '2023-11-21 15:54:08'),
(58, 'App\\Models\\User', 101, 'afaqahmad4009@gmail.com', '543fee18241954c17ef832db81e139e016bede66bf930f9484e6154b8ac0dafd', '[\"*\"]', NULL, '2023-11-21 16:04:28', '2023-11-21 16:04:28'),
(59, 'App\\Models\\User', 102, 'afaq.ranglerz@gmail.com', 'd911c71042fc15eb061eb6218c62bddb920e5775610a446b4dd2dd545db9a5bf', '[\"*\"]', NULL, '2023-11-21 16:07:51', '2023-11-21 16:07:51'),
(60, 'App\\Models\\User', 103, 'afaqahmad4009@gmail.com', '045364e4ea2b2cdfae931095247b727863caa01ef457c90e4984c1bdbd5c9f5c', '[\"*\"]', NULL, '2023-11-21 17:07:42', '2023-11-21 17:07:42'),
(61, 'App\\Models\\User', 104, 'afaq.ranglerz@gmail.com', '9e35916fa3529b2d4e14f176ec8761059904a8c79c06e5b4bb33104823927b27', '[\"*\"]', NULL, '2023-11-21 17:10:30', '2023-11-21 17:10:30'),
(62, 'App\\Models\\User', 114, 'wwwww@gmail.com', 'fa2bdead57ea625c0e31ab18ebac8f8031cf38236d2d91cde153f5deeed8cc72', '[\"*\"]', NULL, '2023-12-08 16:01:18', '2023-12-08 16:01:18'),
(63, 'App\\Models\\User', 115, 'Bags@gmail.com', 'ebfece85e8e0b5b41f7b5c2a71b4362f0d49e8a20b264b7f0ebd981bf61256cb', '[\"*\"]', NULL, '2023-12-08 16:02:13', '2023-12-08 16:02:13'),
(64, 'App\\Models\\User', 116, 'Ahah@gmail.com', 'aa2ba90c106131da6f14c692705b50ae0b0c7470d6bf3e427c99bd95c07522a7', '[\"*\"]', NULL, '2023-12-08 16:06:36', '2023-12-08 16:06:36'),
(65, 'App\\Models\\User', 117, 'Ahahhshs@gmail.com', '92742ff4218d8994a4099a2d7c9462050793e831c9faa2867d4be1781464cf8e', '[\"*\"]', NULL, '2023-12-08 16:08:13', '2023-12-08 16:08:13'),
(66, 'App\\Models\\User', 114, 'wwwww@gmail.com', '1bffaa0cccc86e6eeda6826af2eeb72010cf67b2184ba53739848909e63adec5', '[\"*\"]', NULL, '2024-01-01 14:08:47', '2024-01-01 14:08:47'),
(67, 'App\\Models\\User', 98, 'ranabilal19999@gmail.com', 'eb04758aedb0725be07592852e2542bb60e5e1090a0d9233f834866efa4a79c1', '[\"*\"]', NULL, '2024-01-01 14:12:26', '2024-01-01 14:12:26'),
(68, 'App\\Models\\User', 98, 'ranabilal19999@gmail.com', 'cdb67d4af0e89ecd5dbc78736188db0003ce8216f5868eaf8dbc4396a936e640', '[\"*\"]', NULL, '2024-01-01 14:13:10', '2024-01-01 14:13:10'),
(69, 'App\\Models\\User', 98, 'ranabilal19999@gmail.com', '8c845adfb8ffb84fccd8fa2a14fbb25600072ef72ccfaaf5188062054767b455', '[\"*\"]', NULL, '2024-01-01 14:14:36', '2024-01-01 14:14:36'),
(70, 'App\\Models\\User', 118, 'bial1999@gmail.com', '3257519102a2ba301f1cf21154c45e0d949b85388e5078f4c67bd77671728da1', '[\"*\"]', NULL, '2024-01-01 14:15:09', '2024-01-01 14:15:09'),
(71, 'App\\Models\\User', 119, 'ranabilal19999@gmail.com', '25260dc901ffe49d2f5a4fcc66d2f176491197637597eec79d6a30d36e372a86', '[\"*\"]', NULL, '2024-01-01 14:16:50', '2024-01-01 14:16:50'),
(72, 'App\\Models\\User', 119, 'ranabilal19999@gmail.com', 'c3d3629503ef8787b261b2401b6537523f7ed802256ad2d683493bd9f84130fa', '[\"*\"]', NULL, '2024-01-01 14:18:44', '2024-01-01 14:18:44'),
(73, 'App\\Models\\User', 119, 'ranabilal19999@gmail.com', '769cc97852f4a762e31bd08ca7a90f0a7b9af2d8c6b53ccc38350e3864312acb', '[\"*\"]', NULL, '2024-01-01 14:19:34', '2024-01-01 14:19:34'),
(74, 'App\\Models\\User', 120, 'bial1999@gmail.com', 'c90cfd0eca8b416ee46ee05c2e3b213e0f3072aed4a78496aa63fc93f0b548cd', '[\"*\"]', NULL, '2024-01-01 14:23:19', '2024-01-01 14:23:19'),
(75, 'App\\Models\\User', 121, 'ranabilal19999@gmail.com', 'f5b73b700ec90bef73532e98e255b19b2e053d792db41e4380335c011ceea28a', '[\"*\"]', NULL, '2024-01-01 14:25:59', '2024-01-01 14:25:59'),
(76, 'App\\Models\\User', 121, 'ranabilal19999@gmail.com', '02d486ac83185234a5e54ef3eede87dd063f45d17c87f2222350fb823a45c60b', '[\"*\"]', NULL, '2024-01-01 14:26:02', '2024-01-01 14:26:02'),
(77, 'App\\Models\\User', 121, 'ranabilal19999@gmail.com', '50dc069096d18d7f9bd0494f6d9c0483eb4a29536f354e2a5406a967f88f216e', '[\"*\"]', NULL, '2024-01-01 14:27:33', '2024-01-01 14:27:33'),
(78, 'App\\Models\\User', 121, 'ranabilal19999@gmail.com', 'bf1a08ec04524168df328cd7a6e03039ec684d3b998ee560d32a8260fa0256b4', '[\"*\"]', NULL, '2024-01-01 14:31:53', '2024-01-01 14:31:53'),
(79, 'App\\Models\\User', 121, 'ranabilal19999@gmail.com', '9f90087e72aacf98035d84286851f723182a2eaf562cad783535d6a210b297c2', '[\"*\"]', NULL, '2024-01-01 14:35:20', '2024-01-01 14:35:20'),
(80, 'App\\Models\\User', 122, 'bial1999@gmail.com', '087cffe91175784dee26c7db9441b5bebfdd7d310f6acdc3be2887092fe03534', '[\"*\"]', NULL, '2024-01-01 14:36:37', '2024-01-01 14:36:37'),
(81, 'App\\Models\\User', 123, 'ranabilal19999@gmail.com', '152723092b78665441ba0759ed82fe4fa1100dad6cf042a03c7e6197b1e7aa0f', '[\"*\"]', NULL, '2024-01-01 14:43:16', '2024-01-01 14:43:16'),
(82, 'App\\Models\\User', 124, 'ranabilal19999@gmail.com', 'a371a74dd3020913143797867911d5e2ca60fb4a198c729b66cd567f505727e1', '[\"*\"]', NULL, '2024-01-01 14:48:24', '2024-01-01 14:48:24'),
(83, 'App\\Models\\User', 125, 'ranabilal19999@gmail.com', '987695f8db86bb3c03ff96da1e603b6432386c49faabde82eac19f551296eada', '[\"*\"]', NULL, '2024-01-01 14:52:02', '2024-01-01 14:52:02'),
(84, 'App\\Models\\User', 126, 'ranabilal19999@gmail.com', '6ada8c672a88b7e9363a2be93940475f1ee8773b896b38692738a20e59d6f174', '[\"*\"]', NULL, '2024-01-01 15:04:51', '2024-01-01 15:04:51'),
(85, 'App\\Models\\User', 127, 'ranabilal19999@gmail.com', '866e7413a66de1a8c5581338c8a0d2f26f121a3f486bb19f4c9d0364f21dbe1f', '[\"*\"]', NULL, '2024-01-01 15:09:07', '2024-01-01 15:09:07'),
(86, 'App\\Models\\User', 128, 'ranabilal19999@gmail.com', '18f4d5d55fc015b0c33440f2e960c0b15b206e8729ae2560c3f387cc4fe40fca', '[\"*\"]', NULL, '2024-01-01 15:20:49', '2024-01-01 15:20:49'),
(87, 'App\\Models\\User', 129, 'ranabilal19999@gmail.com', '5f119ad488220c872a622074818f1792ae6bc9ecbc6941fdd6ceb68ff31bc660', '[\"*\"]', NULL, '2024-01-01 15:25:26', '2024-01-01 15:25:26'),
(88, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', 'e6e45846fa92c9e6902cbba015f8d7cfddaece280d6b12ea9c1e69219f520623', '[\"*\"]', NULL, '2024-01-01 15:27:24', '2024-01-01 15:27:24'),
(89, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', '773c800b019cd93f7484a0743378db983816d9e19d753565c591f4238a357ef5', '[\"*\"]', NULL, '2024-01-01 15:31:54', '2024-01-01 15:31:54'),
(90, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', 'c21226fbcaae93cd470deec7ca631fc61e1159fbd33ae9ebc1b23fc7deb2cef3', '[\"*\"]', NULL, '2024-01-01 15:36:03', '2024-01-01 15:36:03'),
(91, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', '29ea9d524ebdb0fbb29534a3d40a9ea95d0d6756359934495d209ba7a7a659ed', '[\"*\"]', NULL, '2024-01-01 15:37:38', '2024-01-01 15:37:38'),
(92, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', '9284000e68a42a79c0398ab4bd1d7c5ea7891923415e04db5ff104374a793560', '[\"*\"]', NULL, '2024-01-01 15:38:36', '2024-01-01 15:38:36'),
(93, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', 'a1cf174bfa86eae9b085f178875b3e6e424fea0055c76b2acfabd149596afd7d', '[\"*\"]', NULL, '2024-01-01 15:41:54', '2024-01-01 15:41:54'),
(94, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', '13f8a1b62a6ec22e8c64ff4b6a070d4a6fbc3c71477e8e049a731da2f147df98', '[\"*\"]', NULL, '2024-01-01 15:43:12', '2024-01-01 15:43:12'),
(95, 'App\\Models\\User', 130, 'ranabilal19999@gmail.com', '010c33657c128e2dff038ea7f3ff3de7b6c0254e52546c46260e084388140481', '[\"*\"]', NULL, '2024-01-01 15:44:23', '2024-01-01 15:44:23'),
(96, 'App\\Models\\User', 131, 'ranabilal19999@gmail.com', '44a0966ed4a33f53fc8c369870570238cad6c6f805aa8b11560a63350893b9c5', '[\"*\"]', NULL, '2024-01-01 16:08:53', '2024-01-01 16:08:53'),
(97, 'App\\Models\\User', 132, 'ranabilal19999@gmail.com', 'fa1e3452a37dfafcf5cd8ac5c27e5869cccdb3526683f2345c05b8ddabaafe35', '[\"*\"]', NULL, '2024-01-01 16:10:07', '2024-01-01 16:10:07'),
(98, 'App\\Models\\User', 133, 'ranabilal19999@gmail.com', 'cccd76144b92d2809fb4e4a6d2688a7c9f5353ebb7de5e4e32ee7fa48a469c55', '[\"*\"]', NULL, '2024-01-01 16:34:40', '2024-01-01 16:34:40'),
(99, 'App\\Models\\User', 134, 'ranabilal19999@gmail.com', 'fcefed2c0ceed76de404d59a9335ddca5d4df4fbdb2aa29f98aedcd22b659af7', '[\"*\"]', NULL, '2024-01-01 16:45:26', '2024-01-01 16:45:26'),
(100, 'App\\Models\\User', 135, 'ranabilal19999@gmail.com', 'fb301a3a8a4e43f7ddad85428e531633dbb545001ea5170171944648f2bda464', '[\"*\"]', NULL, '2024-01-01 16:47:00', '2024-01-01 16:47:00'),
(101, 'App\\Models\\User', 135, 'ranabilal19999@gmail.com', '9c92996baff685be606947545bf3c48ab9888daafa15f60330951e811096358f', '[\"*\"]', NULL, '2024-01-01 16:48:04', '2024-01-01 16:48:04'),
(102, 'App\\Models\\User', 136, 'ranabilal19999@gmail.com', '6358485e67b6ebc24e5e84c319a591fdef9409a624d1df8b66234f483a0d6307', '[\"*\"]', NULL, '2024-01-01 16:49:44', '2024-01-01 16:49:44'),
(103, 'App\\Models\\User', 136, 'ranabilal19999@gmail.com', '045fa4735f0ba0ac91d6104890d564b1ef279a84182e2c1254a20bf043a8904e', '[\"*\"]', NULL, '2024-01-01 16:51:45', '2024-01-01 16:51:45'),
(104, 'App\\Models\\User', 137, 'ranabilal19999@gmail.com', '5820fe23349cb545c657652737e059ae1ed149aef20b4c82c920374d17c65f62', '[\"*\"]', NULL, '2024-01-01 16:52:39', '2024-01-01 16:52:39'),
(105, 'App\\Models\\User', 138, 'ranabilal19999@gmail.com', '5d1abfb88abe3260288a9878622eefcca5fa8347e325110c9a97deea33c88b9f', '[\"*\"]', NULL, '2024-01-01 16:55:14', '2024-01-01 16:55:14'),
(106, 'App\\Models\\User', 138, 'ranabilal19999@gmail.com', '788094c6f066f6b80a425f6fd8b76035bfd4b8d68660671a51bb735dad9d92d3', '[\"*\"]', NULL, '2024-01-01 16:56:47', '2024-01-01 16:56:47'),
(107, 'App\\Models\\User', 139, 'ranabilal19999@gmail.com', 'c5b425bd4c1c460a62a628b88dfd8c1df9135dbdb7be3f40a845313229dbd552', '[\"*\"]', NULL, '2024-01-01 16:57:36', '2024-01-01 16:57:36'),
(108, 'App\\Models\\User', 140, 'bilal@gmial.com', '8f75bc47c0209218a57504d46ad8eb69293e5597670fef3036218063a6c97340', '[\"*\"]', NULL, '2024-01-01 17:23:18', '2024-01-01 17:23:18'),
(109, 'App\\Models\\User', 140, 'bilal@gmial.com', '03877593526bbcb658b735b340336dfc521e919f2a97ce3668988fc30d884c2f', '[\"*\"]', NULL, '2024-01-01 17:24:11', '2024-01-01 17:24:11'),
(110, 'App\\Models\\User', 141, 'bilal@gmial.com', 'c64300b69da9c4f7519ed4e7b5e5c2d8123e407909568a92c788da09ee6add78', '[\"*\"]', NULL, '2024-01-01 17:26:21', '2024-01-01 17:26:21'),
(111, 'App\\Models\\User', 142, 'bilal@gmial.com', '2c8b4ca982b85115bf3cbc8cd6a37fb0ea639b7b461f888a944e756220ad2477', '[\"*\"]', NULL, '2024-01-01 17:31:03', '2024-01-01 17:31:03'),
(112, 'App\\Models\\User', 143, 'ranabilal19999@gmail.com', 'da4e89e295232504b549e42ba08b2c158f537210e43cdf71e0adfd9817ea8247', '[\"*\"]', NULL, '2024-01-01 17:31:29', '2024-01-01 17:31:29'),
(113, 'App\\Models\\User', 144, 'ranabilal19999@gmail.com', '05a842482d7003f670ca51c1eaf1338e6f3a2436107c2366e91f2b3d1a62fe02', '[\"*\"]', NULL, '2024-01-01 17:32:27', '2024-01-01 17:32:27'),
(114, 'App\\Models\\User', 145, 'ranabilal19999@gmail.com', 'bc4984a94957dc5a073031062c6ce2cab2aff82741c49b58656322888d750330', '[\"*\"]', NULL, '2024-01-01 17:38:04', '2024-01-01 17:38:04'),
(115, 'App\\Models\\User', 146, 'ranabilal19999@gmail.com', '8826f9293e2f07a4f3e0fed7053886cb1389d7921e879b4360f92c57368f4c08', '[\"*\"]', NULL, '2024-01-02 09:15:53', '2024-01-02 09:15:53'),
(116, 'App\\Models\\User', 146, 'ranabilal19999@gmail.com', '42162e399e123f76d51087856801e8d845ac80b4cecc925c2c24cf83419504ea', '[\"*\"]', NULL, '2024-01-02 09:23:42', '2024-01-02 09:23:42'),
(117, 'App\\Models\\User', 146, 'ranabilal19999@gmail.com', 'a5f1ac94547a4f5b207270a5222f133e1e70a164345082a3ea6c92d93c1d8ebf', '[\"*\"]', NULL, '2024-01-02 09:24:42', '2024-01-02 09:24:42'),
(118, 'App\\Models\\User', 147, 'ranabilal19999@gmail.com', '8dde3871eeb37f00221a4316b924eed5b067e92d041ad0c2bef9effbaef41cbf', '[\"*\"]', NULL, '2024-01-02 09:30:45', '2024-01-02 09:30:45'),
(119, 'App\\Models\\User', 147, 'ranabilal19999@gmail.com', 'd6fcf7c277ce48f9f98473a6a12b931142154867fef5d6604bf2f37331fb3869', '[\"*\"]', NULL, '2024-01-02 09:32:05', '2024-01-02 09:32:05'),
(120, 'App\\Models\\User', 148, 'ranabilal19999@gmail.com', '0d1066af160b94da3b97cfe0435be66cb3b77c55284329537f492ed8b132d37c', '[\"*\"]', NULL, '2024-01-02 09:35:32', '2024-01-02 09:35:32'),
(121, 'App\\Models\\User', 149, 'ranabilal19999@gmail.com', '7744cdd46a8a99f2537e147a401ecae0fe254d0bc4f126eec806de4f0cf0b487', '[\"*\"]', NULL, '2024-01-02 09:47:14', '2024-01-02 09:47:14'),
(122, 'App\\Models\\User', 149, 'ranabilal19999@gmail.com', '00ab53c29b24cf9a6b24f79917019162b0f7a8ec0c9489e31e1e9494a5a3cf81', '[\"*\"]', NULL, '2024-01-02 09:47:38', '2024-01-02 09:47:38'),
(123, 'App\\Models\\User', 149, 'ranabilal19999@gmail.com', '7eac333b88f5d6b41ab0d63290fb03298671d6863cd84c1af46ca3f0503253ce', '[\"*\"]', NULL, '2024-01-02 09:48:06', '2024-01-02 09:48:06'),
(124, 'App\\Models\\User', 149, 'ranabilal19999@gmail.com', '6ad2f779cd0efb2720c7bb1d8eb809a018413d31b9d8218b022383f4dafa8e2d', '[\"*\"]', NULL, '2024-01-02 09:48:11', '2024-01-02 09:48:11'),
(125, 'App\\Models\\User', 150, 'ranabilal19999@gmail.com', '1a015b83d78a3730283e3337d01327e37069351aa24df7be29a04bf219a7394f', '[\"*\"]', NULL, '2024-01-02 09:54:17', '2024-01-02 09:54:17'),
(126, 'App\\Models\\User', 150, 'ranabilal19999@gmail.com', 'a105d3acef28c19543716b0ea333ef66efbf8ee285d55c8957360520f98709ec', '[\"*\"]', NULL, '2024-01-02 09:54:48', '2024-01-02 09:54:48'),
(127, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', 'f91d924a7edcd491c80725c485c0bc82ac39b0c578898e33f915e6834b4d103f', '[\"*\"]', NULL, '2024-01-02 10:09:00', '2024-01-02 10:09:00'),
(128, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', '5773c3c5c38abc1bcbf355322892e4d6f10d27ce9defd864b3a3f16da8ab703a', '[\"*\"]', NULL, '2024-01-02 10:10:14', '2024-01-02 10:10:14'),
(129, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', 'a66a43fabcbcd5d78def4210c951a80868787f718767c6cf28bddaedbf5370f7', '[\"*\"]', NULL, '2024-01-02 10:12:03', '2024-01-02 10:12:03'),
(130, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', 'f1a83faa429b3e3dbc51593d3191bfa3fe2abba5b4ca1bc9656482e73a5684b1', '[\"*\"]', NULL, '2024-01-02 10:18:57', '2024-01-02 10:18:57'),
(131, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', 'bd958a36c90f11e49445e3e2396db04fc3942c8e14f0121e187384a7f081e298', '[\"*\"]', NULL, '2024-01-02 10:35:11', '2024-01-02 10:35:11'),
(132, 'App\\Models\\User', 151, 'ranabilal19999@gmail.com', 'f5546365e4728bc3b9a50176e46a42097f9eaddf5fad0238e10a93bbb6621402', '[\"*\"]', NULL, '2024-01-02 10:43:07', '2024-01-02 10:43:07'),
(133, 'App\\Models\\User', 152, 'ranabilal19999@gmail.com', 'e3b3e25a9ffe2feafda3abcba067199a76b208da5e9fd453c5dfb475bf030baa', '[\"*\"]', NULL, '2024-01-02 10:45:34', '2024-01-02 10:45:34'),
(134, 'App\\Models\\User', 153, 'bilal@gmial.com', '3b3afb559381cfdb829f0242aaa1342025579393e51593f3d483ef91fad66faf', '[\"*\"]', NULL, '2024-01-02 10:48:58', '2024-01-02 10:48:58'),
(135, 'App\\Models\\User', 154, 'ranabilal19999@gmail.com', '550f0d76f7a6ae45dfa0a0fb062e7b65e95009b55d3c7b638d4fced8d7cfac58', '[\"*\"]', NULL, '2024-01-02 10:50:17', '2024-01-02 10:50:17'),
(136, 'App\\Models\\User', 154, 'ranabilal19999@gmail.com', '7d8bb7d8a9ba8c3818d2e2d113484a89ec6e247f9bb02504cd5b5109e84a8fec', '[\"*\"]', NULL, '2024-01-02 10:52:28', '2024-01-02 10:52:28'),
(137, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', 'a46d3962e757aa917e43bb97e94b14a53f61800e26a2fe44738addb82345d472', '[\"*\"]', NULL, '2024-01-02 12:38:44', '2024-01-02 12:38:44'),
(138, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '9f005bc5dcd6fb2b5236f832de8edabaa25dcb05ba250e0d68aca86be294f627', '[\"*\"]', NULL, '2024-01-02 12:39:25', '2024-01-02 12:39:25'),
(139, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '00fc05731cf4b29d6d91a1ff7543bdcc14b78fcd7b548afe8773c284a27b3838', '[\"*\"]', NULL, '2024-01-02 12:39:42', '2024-01-02 12:39:42'),
(140, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', 'db338760d3f221c685aa68ed6279234950d1f28986ffe0762524bb68d2606a6b', '[\"*\"]', NULL, '2024-01-02 12:52:49', '2024-01-02 12:52:49'),
(141, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '42a7700bc9fe02b305bd8f99c19e7c220355bdf84c802c8c294ea190470350e0', '[\"*\"]', NULL, '2024-01-02 14:39:44', '2024-01-02 14:39:44'),
(142, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '60bf80f08575c0872ac5345e208acd309e2ab388439054d213ba90cc2fc0afe6', '[\"*\"]', NULL, '2024-01-02 14:48:40', '2024-01-02 14:48:40'),
(143, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', 'beb6c3f78c564f7e6e5e604cd1dbd461f7bb8d7640a5aaff6b22f0e2c56a1941', '[\"*\"]', NULL, '2024-01-02 15:03:57', '2024-01-02 15:03:57'),
(144, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '02ca020d7d6ec99d806ca32367f82e9e703562306a8c5bb10fa67b887d2eaa82', '[\"*\"]', NULL, '2024-01-02 16:03:52', '2024-01-02 16:03:52'),
(145, 'App\\Models\\User', 154, 'ranabilal19999@gmail.com', '3dd6a182b760ed8f1dce8c2a84a5ac0dd4d53a2d84f29ea56dcf9e3557feb3ea', '[\"*\"]', NULL, '2024-01-02 16:57:20', '2024-01-02 16:57:20'),
(146, 'App\\Models\\User', 157, 'bilal@gmial.com', '624cdf6684748a664ac3472713a7c430cbf3e40089ee2e19d90e5cf4e57dc923', '[\"*\"]', NULL, '2024-01-03 09:42:13', '2024-01-03 09:42:13'),
(147, 'App\\Models\\User', 159, 'Bilal@gmail.com', '026f98215f92755c987bcfa64ee569538854ae911080ee2e684a81fe79c2cfb5', '[\"*\"]', NULL, '2024-01-03 09:47:53', '2024-01-03 09:47:53'),
(148, 'App\\Models\\User', 160, 'bilal@gmail.com', '09e963ec31a61b75969c9ce677908462c09d9b5766ac655c12793b332764cec0', '[\"*\"]', NULL, '2024-01-03 09:49:48', '2024-01-03 09:49:48'),
(149, 'App\\Models\\User', 161, 'ranabilal19999@gmail.com', '579ab44a6c60ce494d7cc69b25133b95294edf65d15031120652052aa17d53b2', '[\"*\"]', NULL, '2024-01-03 09:50:42', '2024-01-03 09:50:42'),
(150, 'App\\Models\\User', 162, 'bilal@gmial.com', 'd792ce6150fc0b658ca3f55ecb5483356554e141456fc144cea55a2dfdb9018a', '[\"*\"]', NULL, '2024-01-03 09:57:43', '2024-01-03 09:57:43'),
(151, 'App\\Models\\User', 162, 'bilal@gmial.com', 'd49271e0f151ea0c573032d1a4c5d34894b87ca3df22308e5c485e703cf5850a', '[\"*\"]', NULL, '2024-01-03 09:57:43', '2024-01-03 09:57:43'),
(152, 'App\\Models\\User', 163, 'ranabilal19999@gmail.com', '27cea6843898f2b696c8ede64725cf748aed5290d19c6bd8b4ecaa86dbae7506', '[\"*\"]', NULL, '2024-01-03 09:59:08', '2024-01-03 09:59:08'),
(153, 'App\\Models\\User', 163, 'ranabilal19999@gmail.com', 'a3c700914385693b3610c9c7e53ab5cec8e4c1c11cf05ac5c8ad07b5aadd7a81', '[\"*\"]', NULL, '2024-01-03 09:59:08', '2024-01-03 09:59:08'),
(154, 'App\\Models\\User', 164, 'ranabilal19999@gmail.com', 'e26f71c42de789976c0df5e2110f0f3a879d4056b8c531ee7810a66ed3a178bc', '[\"*\"]', NULL, '2024-01-03 10:00:02', '2024-01-03 10:00:02'),
(155, 'App\\Models\\User', 164, 'ranabilal19999@gmail.com', 'c95bf2abff14644b9ebf591c76708facc1e3eaed618adb4244fbd50c47ec6754', '[\"*\"]', NULL, '2024-01-03 10:00:02', '2024-01-03 10:00:02'),
(156, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '7eb41fe5714fcddfad8bb2b608c2a7bfffa1052e43a6f925f9fc220ede2b6af8', '[\"*\"]', NULL, '2024-01-03 10:57:48', '2024-01-03 10:57:48'),
(157, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'a687529d7d3da3a7f37a66ef0b3a36b4cf300539f74dc7ca8dda635372b7f86e', '[\"*\"]', NULL, '2024-01-03 10:57:48', '2024-01-03 10:57:48'),
(158, 'App\\Models\\User', 166, 'bilal.ranglerz199@gmail.com', 'a82a4aed9c0c3f2d423913d95d907062702d6e6623029ced23c6fa69a9bc84cf', '[\"*\"]', NULL, '2024-01-03 11:03:34', '2024-01-03 11:03:34'),
(159, 'App\\Models\\User', 155, 'ranglerz291@gmail.com', '4b8fbf5b6c2293859b9720ac9aae274a06e4697ede0d2b95cdaa84fa111538df', '[\"*\"]', NULL, '2024-01-03 15:33:20', '2024-01-03 15:33:20'),
(160, 'App\\Models\\User', 167, 'alisher6269@gmail.com', '8b18d6233d3173643f56d0090379315fe7465b6b9cc7343b52a0ed1d128d91bb', '[\"*\"]', NULL, '2024-01-04 10:18:02', '2024-01-04 10:18:02'),
(161, 'App\\Models\\User', 167, 'alisher6269@gmail.com', 'fb18d08e41c294512ead012c779c272390b885a965300a0949ab05c412960f44', '[\"*\"]', NULL, '2024-01-04 10:18:02', '2024-01-04 10:18:02'),
(162, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'e2bac74d6a751d931a44ea72165ead6130bfdcedbeef3130e6249e1c5590f458', '[\"*\"]', NULL, '2024-01-04 11:39:36', '2024-01-04 11:39:36'),
(163, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '5080a0dc53dd52bcfc73db8e27e9407a86b4052cf37355d761409e7617a26ace', '[\"*\"]', NULL, '2024-01-04 11:41:58', '2024-01-04 11:41:58'),
(164, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '752f82e46a13aa305643897b5f42efb28fa4035a9acdda7c3d678111b6aacef5', '[\"*\"]', NULL, '2024-01-05 15:49:15', '2024-01-05 15:49:15'),
(165, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '220eb330b66852263bf992b30f6f88650fd314ae1bb4f09e685275f20e396e72', '[\"*\"]', NULL, '2024-01-08 14:42:42', '2024-01-08 14:42:42'),
(166, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '1f776b532edf3ba307800195ec6a12cb3b2f05dcf43e9725576cf6caa5a15dd5', '[\"*\"]', NULL, '2024-01-09 11:56:27', '2024-01-09 11:56:27'),
(167, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '60ceab05a54a453d5791c5d24d5a212705cef03326c287a82acebe2b75dae7d8', '[\"*\"]', NULL, '2024-01-10 16:34:55', '2024-01-10 16:34:55'),
(168, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'caca397c7733381604968fe5b56fa4d5693920b8685d5d912f670a996a8c19db', '[\"*\"]', NULL, '2024-01-10 16:52:33', '2024-01-10 16:52:33'),
(169, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '349c89269581a5abade3835171a0f1a971f0dd2faeff2792a46b39f9053b2aaa', '[\"*\"]', NULL, '2024-01-10 16:53:55', '2024-01-10 16:53:55'),
(170, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '41ecd7dfa187e383479358be5e6cecd35514e069502f97500fe477ac78da4256', '[\"*\"]', NULL, '2024-01-10 16:58:34', '2024-01-10 16:58:34'),
(171, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '5a79c86af29171a1b7ed4082bdc2f38370a2e1afa945ec22ed9fd07be2fbb1cc', '[\"*\"]', NULL, '2024-01-10 17:00:59', '2024-01-10 17:00:59'),
(172, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '8ed5cb863f51d9a69cdfff6bfc3b1c1c207ab2705dc8322a9254cef1d9ef2753', '[\"*\"]', NULL, '2024-01-10 17:02:07', '2024-01-10 17:02:07'),
(173, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '1dc5b496983c822723ff70732b13c5b574b5e9fa2a9cb7c257fee471e33ca88e', '[\"*\"]', NULL, '2024-01-10 17:02:34', '2024-01-10 17:02:34'),
(174, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '02f3b0e9053e906202b382e560eb6c2ab9fefb8b9b7f1d74f02aab057497412c', '[\"*\"]', NULL, '2024-01-11 10:52:44', '2024-01-11 10:52:44'),
(175, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '05bb907b7fb498ff153ac322a8eb5b3f2e048d91373564498eb7476b75cbdf0f', '[\"*\"]', NULL, '2024-01-11 11:23:24', '2024-01-11 11:23:24'),
(176, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '8350df1815d73c6633c79041df955bb2e94c3a0c1426ef326e328084a006e0aa', '[\"*\"]', NULL, '2024-01-11 12:24:23', '2024-01-11 12:24:23'),
(177, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'ce888bdada5c7eebc03af552bb079e7943956c886ec0e175d72fe82749b364d5', '[\"*\"]', NULL, '2024-01-11 12:40:24', '2024-01-11 12:40:24'),
(178, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '20b851235b69eadf1739b67177aa1bf105dc846fc8bb54397f956c8c560e846c', '[\"*\"]', NULL, '2024-01-11 15:26:11', '2024-01-11 15:26:11'),
(179, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'f1a3db706a52aabc4c873a91148baacee21ba79c27517b524f7319b62402c91a', '[\"*\"]', NULL, '2024-01-12 10:10:36', '2024-01-12 10:10:36'),
(180, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '06c0a209a1cd68f78c21bc978224aa3e039783620ef15062974191800b41da72', '[\"*\"]', NULL, '2024-01-12 10:53:03', '2024-01-12 10:53:03'),
(181, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '435292ddc5914fb18aa68356485572cea52de9e8f9326b4da2167d8060c821e8', '[\"*\"]', NULL, '2024-01-12 11:25:42', '2024-01-12 11:25:42'),
(182, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '5b1c61f1558c9595d016b7b41c378988cc0d0ecd78a10397129c037395326b03', '[\"*\"]', NULL, '2024-01-12 11:28:38', '2024-01-12 11:28:38'),
(183, 'App\\Models\\User', 104, 'afaq.ranglerz@gmail.com', 'c820287840ee57ef42fabd762c47e0606d939e9c9e5189ce85ba1e1bccdc42c1', '[\"*\"]', NULL, '2024-01-12 11:31:37', '2024-01-12 11:31:37'),
(184, 'App\\Models\\User', 103, 'afaqahmad4009@gmail.com', '60aa838d34b9ca3f7a7c987e780c63bb718d4e1264ed1229bbaaf67725e41f02', '[\"*\"]', NULL, '2024-01-12 11:32:04', '2024-01-12 11:32:04'),
(185, 'App\\Models\\User', 103, 'afaqahmad4009@gmail.com', 'fb7a2591fe08ed3671ca850ead7f671cca5f21ee2adb8df4154088557522ade3', '[\"*\"]', NULL, '2024-01-12 11:33:29', '2024-01-12 11:33:29'),
(186, 'App\\Models\\User', 103, 'afaqahmad4009@gmail.com', 'a4fdcbd1982809d20f12d1d0ee58145024903f0fadc8fb72c82505fb25eb0e37', '[\"*\"]', NULL, '2024-01-12 11:33:34', '2024-01-12 11:33:34'),
(187, 'App\\Models\\User', 103, 'afaqahmad4009@gmail.com', '4d01101c3c1c06c10ebf19f7a33cbee1e2fc54646a0b33fc4962cb94dabe1c29', '[\"*\"]', NULL, '2024-01-12 11:34:08', '2024-01-12 11:34:08'),
(188, 'App\\Models\\User', 104, 'afaq.ranglerz@gmail.com', 'd789bc947ecc132427a9ecf463ae5c39edcccddc238ee0baad623ab8c53f2928', '[\"*\"]', NULL, '2024-01-12 11:34:46', '2024-01-12 11:34:46'),
(189, 'App\\Models\\User', 104, 'afaq.ranglerz@gmail.com', '6d9de6641f5b12a36cd731d4d6e4173b8aead6a0f3f391dda383f045d698845b', '[\"*\"]', NULL, '2024-01-12 11:34:50', '2024-01-12 11:34:50'),
(190, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '274e7ddf815af2ba78fe8432705f4ad9a96d7f364b83a1b4128af06165b094ce', '[\"*\"]', NULL, '2024-01-12 11:35:23', '2024-01-12 11:35:23'),
(191, 'App\\Models\\User', 104, 'afaq.ranglerz@gmail.com', '8c5a02e36271395ac9635d74a61b610c741cf7bb7511d445aa63696f8d72450b', '[\"*\"]', NULL, '2024-01-12 11:35:50', '2024-01-12 11:35:50'),
(192, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'b357675b2876f8df84c5359295277c815edf96067c1a2b1c225b4041b393bf0a', '[\"*\"]', NULL, '2024-01-12 11:37:24', '2024-01-12 11:37:24'),
(193, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '49420bba6937fb77fb0eade0898dbf579c7110b0f5b07adba264718190988e7e', '[\"*\"]', NULL, '2024-01-12 11:48:12', '2024-01-12 11:48:12'),
(194, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '857b7667587bd5910350f0884a0c6e7fbb5405889e27441e28180d55874d0a57', '[\"*\"]', NULL, '2024-01-12 11:49:09', '2024-01-12 11:49:09'),
(195, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '58a37a0031fbb2e9873d1f203613ca94105c5ee03b6223403f8b38f744ec640b', '[\"*\"]', NULL, '2024-01-12 11:50:47', '2024-01-12 11:50:47'),
(196, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '31277948015d475e0b232049b689b04ec386bf7b9861ce46dceb2563210b79a8', '[\"*\"]', NULL, '2024-01-14 17:44:01', '2024-01-14 17:44:01'),
(197, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '6b9bcf00ea737a8827f5872653886ae07ffb989d3d9ad954f27ceedd98cac24d', '[\"*\"]', NULL, '2024-01-15 20:50:56', '2024-01-15 20:50:56'),
(198, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'fb87037f5df16392c0e675a85a23d9d8c57808e888e3bc6dfc110c8f695c0474', '[\"*\"]', NULL, '2024-01-16 10:37:14', '2024-01-16 10:37:14'),
(199, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'b5bd2764baf98144f9f750a3e07773ca7ea583190c9b203bf8dadac32455845a', '[\"*\"]', NULL, '2024-01-16 14:02:51', '2024-01-16 14:02:51'),
(200, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '681cb982a7e48c6151a6e6a325fc21fb1270115c29cde542536b7e7d6e97e7bd', '[\"*\"]', NULL, '2024-01-16 14:03:12', '2024-01-16 14:03:12'),
(201, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'e947372db5c18370c1aef65acaf364da747a85137cfeba10e747cb2565eeb50e', '[\"*\"]', NULL, '2024-01-16 14:05:42', '2024-01-16 14:05:42'),
(202, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '82cce26b5cf968fd9405be53efa145da4a741ebafcfaeb329f5dea962f10c2c5', '[\"*\"]', NULL, '2024-01-16 14:41:50', '2024-01-16 14:41:50'),
(203, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'c239046d53d7a027359728236fa80609a06e95df71062be5cb645b78b5c10d36', '[\"*\"]', NULL, '2024-01-16 14:43:27', '2024-01-16 14:43:27'),
(204, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '73add2e2556ccd5e583409ce3c3477de4f048b8caf3e3d6334d42259069c2087', '[\"*\"]', NULL, '2024-01-16 14:44:10', '2024-01-16 14:44:10'),
(205, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'e2b2cca68809fd3e4b038ec1ad083ef33ffc62e1e8f04724694494b7e21f864b', '[\"*\"]', NULL, '2024-01-16 14:45:23', '2024-01-16 14:45:23'),
(206, 'App\\Models\\User', 167, 'alisher6269@gmail.com', 'a846117e453dfe03793423c79b9017eb215d9853db7bd4f252ed768153a54515', '[\"*\"]', NULL, '2024-01-17 10:51:12', '2024-01-17 10:51:12'),
(207, 'App\\Models\\User', 168, 'alisher6269@gmail.com', 'f2fd166e25682dbd814009c015e7d0cbed90adf61ab6fede35f6a61e69eb55c1', '[\"*\"]', NULL, '2024-01-17 11:02:10', '2024-01-17 11:02:10'),
(208, 'App\\Models\\User', 168, 'alisher6269@gmail.com', 'd62591fcfd79d110f3a86418877c6dc030b8e441f8645f43f1ddc291f1b9024e', '[\"*\"]', NULL, '2024-01-17 11:07:19', '2024-01-17 11:07:19'),
(209, 'App\\Models\\User', 169, 'alisher6269@gmail.com', '0010d3272ff7ce75dca4fc4d5d9fa981a9d3e9efb4fb66b2ff27937d12f7d3e6', '[\"*\"]', NULL, '2024-01-17 11:08:00', '2024-01-17 11:08:00'),
(210, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '57718f12528feadd1be053c0550bc3f6e0b8eef105891e47b2dbb5b558d52078', '[\"*\"]', NULL, '2024-01-17 12:16:30', '2024-01-17 12:16:30'),
(211, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '5b3c9f098455fc2a54241d0182a7a630691fc6dfb2ad3492602e045538fa8ef0', '[\"*\"]', NULL, '2024-01-17 12:20:55', '2024-01-17 12:20:55'),
(212, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', 'cefdc364b039d5f42f1f44a7bc6b466a887e254299531828d083d1393a39cd7d', '[\"*\"]', NULL, '2024-01-17 15:47:38', '2024-01-17 15:47:38'),
(213, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '27fa559ca13ae71cf638e151989475e87d4f20f092bb24b81e54805a1265754b', '[\"*\"]', NULL, '2024-01-17 16:21:15', '2024-01-17 16:21:15'),
(214, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '596615839139a01c9a7ae17bca7aa95aeeafd37626e20092eb2f3cc3e3447061', '[\"*\"]', NULL, '2024-01-17 16:53:03', '2024-01-17 16:53:03'),
(215, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '427d86153e91ac9ee663e87fb115846760c52a0438a30680d4dcbd2219209ee8', '[\"*\"]', NULL, '2024-01-17 17:34:27', '2024-01-17 17:34:27'),
(216, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '2bf8895b27456740a2eacee40404415667ccc22a2c5341f3df4db2b77226c18c', '[\"*\"]', NULL, '2024-01-17 17:38:49', '2024-01-17 17:38:49'),
(217, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '47b789bbfcf99028bdeb0ca289c52a4ec6ba006390778c25510359e7d6e1c6ba', '[\"*\"]', NULL, '2024-01-17 17:39:04', '2024-01-17 17:39:04'),
(218, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '536b97e8b0cd7ca479740a8829b7b9b5bd04e453c1f05d2569b3269445e53452', '[\"*\"]', NULL, '2024-01-17 17:39:26', '2024-01-17 17:39:26'),
(219, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '4a714543fd73a26e1739427c6c516cf5050ae96dfbf9b27acd9f1e5734a015b0', '[\"*\"]', NULL, '2024-01-17 17:39:52', '2024-01-17 17:39:52'),
(220, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '535367bd60457e6f7b55d6149f458d9e87e2aaa97a7dd13dd298ed6fe1b5de83', '[\"*\"]', NULL, '2024-01-17 17:40:15', '2024-01-17 17:40:15'),
(221, 'App\\Models\\User', 171, 'usmanqayyum109@gmail.com', '00d583a82c198e3f8a88d50dd5247f08d6c3c913e94951830a3f05dc5d72a648', '[\"*\"]', NULL, '2024-01-17 17:41:01', '2024-01-17 17:41:01'),
(222, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', 'dd03d844033d45985650d0b22f81ce42e6a3c8870b319fbabcf921dd66aa06bf', '[\"*\"]', NULL, '2024-01-18 09:43:56', '2024-01-18 09:43:56'),
(223, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'c0fb3acc6b85c475dee05ecf19cbb3b56e6b3fbfd3b7a0363d38f14480d6e317', '[\"*\"]', NULL, '2024-01-18 10:26:33', '2024-01-18 10:26:33'),
(224, 'App\\Models\\User', 169, 'alisher6269@gmail.com', '6f18f68dbf9b1513676c94bd7349a71bbf12ed069fcc4d53608a8ca9d46cff85', '[\"*\"]', NULL, '2024-01-18 12:09:42', '2024-01-18 12:09:42'),
(225, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '8eda6030a3fc6ea1b0f13b8b4dd6da20261c4003ab548668f8beefbdc318a058', '[\"*\"]', NULL, '2024-01-18 15:30:52', '2024-01-18 15:30:52'),
(226, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '1567940e6e6a26fc5a72c1e954ed5346df4aacf228a9694867b767fc2a55330c', '[\"*\"]', NULL, '2024-01-18 15:51:42', '2024-01-18 15:51:42'),
(227, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '54f6ab61ba55f9d48e67e2c5309f634d1ef451756f50021ac2937f894b41ab3c', '[\"*\"]', NULL, '2024-01-18 16:01:38', '2024-01-18 16:01:38'),
(228, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', 'fef4175e00bda8a6a8ebccc12b984242e5b3221c221dc4c2e4709728cd22a864', '[\"*\"]', NULL, '2024-01-18 16:08:23', '2024-01-18 16:08:23'),
(229, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '278a7715a3c726dbf2f4a58d4d152e9f3df76d14a57b17be9d6bac4f873e9613', '[\"*\"]', NULL, '2024-01-18 16:21:46', '2024-01-18 16:21:46'),
(230, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '192148fb636340c737b973e0ff0fa0e9e7ca43d057cfc75a7416276470ede6d9', '[\"*\"]', NULL, '2024-01-18 16:48:13', '2024-01-18 16:48:13'),
(231, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', 'e4bd92530889ba612032b11dfdd8e95747c7c3ab4c06f2c98a3453bb59f98569', '[\"*\"]', NULL, '2024-01-18 17:08:11', '2024-01-18 17:08:11'),
(232, 'App\\Models\\User', 172, 'ranglerzoffice1@icloud.com', '986fbaf032a87014f355e4a0acbf0b5be596cd0222d2b3c200f1890027b8c059', '[\"*\"]', NULL, '2024-01-19 13:30:59', '2024-01-19 13:30:59'),
(233, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '27980ad072f9c3ff5abe33170f7812cd31056a50e9d8f57217b581bc810bfbb6', '[\"*\"]', NULL, '2024-01-19 14:37:32', '2024-01-19 14:37:32'),
(234, 'App\\Models\\User', 170, 'usmanqayyum.ranglerz@gmail.com', '183140e13f3e7b91de01f685a8bc3cca19a97ff3f9c66d2435f1fccfaed36885', '[\"*\"]', NULL, '2024-01-22 11:58:37', '2024-01-22 11:58:37'),
(235, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '71f014fe8d3e7ca9402b49b325ead7fd40148e917aa1b3b38ab3ad65f5a62a87', '[\"*\"]', NULL, '2024-01-22 12:18:42', '2024-01-22 12:18:42'),
(236, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'cc27f576e5c8d62bea132f20815aba1134055d42c7ea8f5bcfaaa73bda802c03', '[\"*\"]', NULL, '2024-01-22 12:20:05', '2024-01-22 12:20:05'),
(237, 'App\\Models\\User', 174, 'sztr98psmm@privaterelay.appleid.com', '43eb80ec1f02f2767fab044cd4f8c5abd8344c668124c91ce0b5aff749aa44d9', '[\"*\"]', NULL, '2024-01-22 14:54:06', '2024-01-22 14:54:06'),
(238, 'App\\Models\\User', 175, 'drivrr22@gmail.com', '8a3bf9694b8ec16946a95949f10433afd11f230d4e58e1f169045e1b07fd6604', '[\"*\"]', NULL, '2024-01-22 14:56:04', '2024-01-22 14:56:04'),
(239, 'App\\Models\\User', 175, 'drivrr22@gmail.com', 'f3eb8702b0bd07e974c2b0cb942f25d2496d7e93d03b3093211c2a39b15f50a7', '[\"*\"]', NULL, '2024-01-22 15:15:07', '2024-01-22 15:15:07'),
(240, 'App\\Models\\User', 175, 'drivrr22@gmail.com', 'd89af1a174ef979fa0a884a687422dadef2460d6d950a38fd1a2cda159c7c6e4', '[\"*\"]', NULL, '2024-01-22 15:17:26', '2024-01-22 15:17:26'),
(241, 'App\\Models\\User', 176, 'hayder.imam7@gmail.com', '1bbe9b199ec64bac07af0f8e86642ad5082ddf86afd0fd009a8c247e1be75c98', '[\"*\"]', NULL, '2024-01-22 15:18:02', '2024-01-22 15:18:02'),
(242, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '698c8258b901496009cea713efec81a16d2eee3cb480ee03e0ae3a9cbbef507c', '[\"*\"]', NULL, '2024-01-22 17:09:12', '2024-01-22 17:09:12'),
(243, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '9982fd0d0b0976b55118a954ef6fa36a87b0728b599aacec0def19981d7ce647', '[\"*\"]', NULL, '2024-01-23 10:30:41', '2024-01-23 10:30:41'),
(244, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'c47d58c9740e502a1cc8554231367197d0c47eff6600311384638c5051efa18a', '[\"*\"]', NULL, '2024-01-24 11:42:06', '2024-01-24 11:42:06'),
(245, 'App\\Models\\User', 177, 'ranabilal199@gmail.com', '478866d1e05a6fac404eeb7f5665e51aeaec22f4ed3914b767b8b6a7f9c1420a', '[\"*\"]', NULL, '2024-01-24 11:49:35', '2024-01-24 11:49:35'),
(246, 'App\\Models\\User', 178, 'ranabilal19@gmail.com', '403c5ef7d2206dce63d30f7ad4014eeaab12dfff764c6871548c2aa88f43087d', '[\"*\"]', NULL, '2024-01-24 11:50:38', '2024-01-24 11:50:38'),
(247, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', '4ff1849558bca149822afa522730ec8b9c091802913ab61a1fe2034b454a9f30', '[\"*\"]', NULL, '2024-01-24 11:51:13', '2024-01-24 11:51:13'),
(248, 'App\\Models\\User', 176, 'hayder.imam7@gmail.com', '855728ccaee7eac4f44ccc76e3bcaf877d8111187bd939bdd382ea2fb09a5cc9', '[\"*\"]', NULL, '2024-01-24 14:29:06', '2024-01-24 14:29:06'),
(249, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'e2677620a4ffa463bf53d121e03be5fa51b1ee535e22b1bdc706a999138aa2bb', '[\"*\"]', NULL, '2024-01-25 09:52:03', '2024-01-25 09:52:03'),
(250, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'c90e494c9cec704925b2b3c2bef00b52647aedfa9ca38b2c507e45305646dbb1', '[\"*\"]', NULL, '2024-01-25 11:06:09', '2024-01-25 11:06:09'),
(251, 'App\\Models\\User', 165, 'ranabilal19999@gmail.com', 'a73adcf0a32b75627372c7752d3a805313d0c4c5b5edb2682053e7397ff967d5', '[\"*\"]', NULL, '2024-01-25 12:19:09', '2024-01-25 12:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `seen_by` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `push_notifications`
--

INSERT INTO `push_notifications` (`id`, `admin`, `user_id`, `user_name`, `job_id`, `title`, `description`, `seen_by`, `created_at`, `updated_at`) VALUES
(331, 'Admin', 91, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:11', '2024-01-24 09:43:11'),
(332, 'Admin', 166, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '1', '2024-01-24 09:43:12', '2024-01-24 09:43:23'),
(333, 'Admin', 170, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:12', '2024-01-24 09:43:12'),
(334, 'Admin', 173, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:12', '2024-01-24 09:43:12'),
(335, 'Admin', 174, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:13', '2024-01-24 09:43:13'),
(336, 'Admin', 175, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:13', '2024-01-24 09:43:13'),
(337, 'Admin', 176, '3', NULL, 'Hello Drivers', 'Make sure Your Ride On time Thanks!', '0', '2024-01-24 09:43:13', '2024-01-24 09:43:13'),
(338, NULL, 166, '165', NULL, 'Bilal Rajpoot', 'The rider has given you a review. Check it out!', '1', '2024-01-24 09:50:27', '2024-01-24 09:50:36'),
(339, NULL, 166, '165', 157, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '1', '2024-01-24 10:19:21', '2024-01-24 10:21:42'),
(340, NULL, 166, '165', 157, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '1', '2024-01-24 11:07:49', '2024-01-24 11:08:00'),
(341, NULL, 166, '165', 157, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '1', '2024-01-24 11:16:11', '2024-01-24 11:18:56'),
(342, NULL, 166, '165', 157, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '1', '2024-01-24 11:18:45', '2024-01-24 11:18:56'),
(343, 'Admin', 90, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '0', '2024-01-24 11:52:01', '2024-01-24 11:52:01'),
(344, 'Admin', 155, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '0', '2024-01-24 11:52:02', '2024-01-24 11:52:02'),
(345, 'Admin', 103, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '1', '2024-01-24 11:52:02', '2024-01-24 17:44:51'),
(346, 'Admin', 165, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '1', '2024-01-24 11:52:02', '2024-01-24 11:56:05'),
(347, 'Admin', 169, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '0', '2024-01-24 11:52:03', '2024-01-24 11:52:03'),
(348, 'Admin', 171, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '0', '2024-01-24 11:52:03', '2024-01-24 11:52:03'),
(349, 'Admin', 172, '2', NULL, 'Hello Owner!', 'I am Your Admin Follow Rules my Rules', '0', '2024-01-24 11:52:03', '2024-01-24 11:52:03'),
(350, NULL, 166, '165', 157, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '1', '2024-01-24 11:58:44', '2024-01-24 12:11:31'),
(351, NULL, 103, '166', 159, 'Muhammad Bilal', 'Sent You a Job Request', '1', '2024-01-24 17:40:58', '2024-01-24 17:44:51'),
(352, NULL, 166, '165', 154, 'Bilal Rajpoot', 'Your Job Request Is Accepted', '0', '2024-01-25 11:55:00', '2024-01-25 11:55:00'),
(353, NULL, 166, '165', 154, 'Bilal Rajpoot', 'Your Ride has been canceled', '0', '2024-01-25 11:55:46', '2024-01-25 11:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `details`, `answer`, `created_at`, `updated_at`) VALUES
(39, 165, 'Hello', 'Hy', 'Ok !', '2024-01-11 14:53:02', '2024-01-11 14:53:33'),
(40, 166, 'What about today', 'Hy developer', 'Nothing specail!', '2024-01-12 09:27:23', '2024-01-12 09:28:06'),
(41, 165, 'Driver is not good', 'Hello', NULL, '2024-01-12 11:26:53', '2024-01-12 11:26:53'),
(42, 165, 'Hello i am business owner', 'Hello', 'yes', '2024-01-12 11:38:21', '2024-01-12 11:39:01'),
(43, 165, 'Where is my driver', 'Hello admin', 'on the way', '2024-01-12 11:52:08', '2024-01-12 11:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `stars` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `owner_id`, `driver_id`, `stars`, `comment`, `created_at`, `updated_at`) VALUES
(1, 165, 166, '5', 'good', '2024-01-05 10:25:03', '2024-01-05 10:25:03'),
(2, 165, 166, '4', 'Good', '2024-01-05 10:25:13', '2024-01-05 10:25:13'),
(3, 165, 166, '3', 'Good', '2024-01-05 10:29:17', '2024-01-05 10:29:17'),
(14, 165, 166, '4', 'good', '2024-01-22 16:46:23', '2024-01-22 16:46:23'),
(15, 165, 166, '4', 'good', '2024-01-22 16:48:00', '2024-01-22 16:48:00'),
(16, 165, 166, '4', 'good', '2024-01-22 16:48:23', '2024-01-22 16:48:23'),
(17, 165, 166, '4', 'good', '2024-01-22 16:49:16', '2024-01-22 16:49:16'),
(18, 165, 166, '4', 'good', '2024-01-22 16:52:09', '2024-01-22 16:52:09'),
(19, 165, 166, '4', 'good', '2024-01-23 17:17:07', '2024-01-23 17:17:07'),
(20, 165, 166, '4', 'good', '2024-01-23 17:19:35', '2024-01-23 17:19:35'),
(21, 165, 166, '4', 'good', '2024-01-23 17:21:28', '2024-01-23 17:21:28'),
(22, 165, 166, '4', 'good', '2024-01-23 17:23:22', '2024-01-23 17:23:22'),
(23, 165, 166, '4', 'good', '2024-01-23 17:29:00', '2024-01-23 17:29:00'),
(24, 165, 166, '4', 'good', '2024-01-23 17:31:02', '2024-01-23 17:31:02'),
(25, 165, 166, '4', 'good', '2024-01-23 17:33:30', '2024-01-23 17:33:30'),
(26, 165, 166, '4', 'good', '2024-01-23 17:34:42', '2024-01-23 17:34:42'),
(27, 165, 166, '4', 'good', '2024-01-23 17:36:54', '2024-01-23 17:36:54'),
(28, 165, 166, '4', 'good', '2024-01-23 17:38:08', '2024-01-23 17:38:08'),
(29, 165, 166, '4', 'good', '2024-01-23 17:39:11', '2024-01-23 17:39:11'),
(30, 165, 166, '4', 'good', '2024-01-24 09:50:26', '2024-01-24 09:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'subadmin', 'web', '2023-10-23 18:41:27', '2023-10-23 18:41:27'),
(2, 'Owner', 'web', '2023-10-23 18:41:49', '2023-10-23 18:41:49'),
(3, 'Driver', 'web', '2023-10-23 18:41:57', '2023-10-23 18:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(26, 1),
(90, 2),
(91, 3),
(155, 2),
(166, 3),
(103, 2),
(165, 2),
(169, 2),
(170, 3),
(171, 2),
(173, 3),
(172, 2),
(174, 3),
(175, 3),
(176, 3);

-- --------------------------------------------------------

--
-- Table structure for table `term_conditions`
--

CREATE TABLE `term_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `twilio_sms`
--

CREATE TABLE `twilio_sms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired_at` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_info` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `facebook_social_id` varchar(255) DEFAULT NULL,
  `google_social_id` varchar(255) DEFAULT NULL,
  `apple_social_id` varchar(255) DEFAULT NULL,
  `fcm_token` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fname`, `lname`, `phone`, `email`, `password`, `image`, `is_active`, `created_at`, `updated_at`, `company_name`, `company_info`, `location`, `facebook_social_id`, `google_social_id`, `apple_social_id`, `fcm_token`, `latitude`, `longitude`) VALUES
(26, 1, 'Muhammad', 'Bilal', '+923421432', 'subadmin@gmail.com', '$2y$10$Iq3dy9/G1D06Lc81swVnBucMb/ZA.DlcFRR9L32aKwe1lyE2E2dni', NULL, '1', '2023-10-24 15:54:19', '2023-10-24 16:00:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 2, 'Usman', 'Talate', '03004245818', 'm.usman.talat.2001@gmail.com', NULL, 'public/admin/assets/images/users/owner.jpg', '1', '2023-11-17 15:19:55', '2023-11-17 15:19:55', 'Textile', 'I am textile owner', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 3, 'Muhammad', 'Usman', '03174595818', 'usman0725.ranglerz@gmail.com', NULL, 'public/admin/assets/images/users/owner.jpg', '1', '2023-11-17 15:27:08', '2023-11-17 15:27:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 2, 'Afaq', 'Ahmad', '03174595919', 'afaqahmad4009@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocI184TSftZIxORk3fXFZbkg26qqb2pLwu_CK7y8o32V=s96-c', '1', '2023-11-21 17:07:42', '2024-01-24 17:40:00', 'Test', 'Testing', NULL, NULL, '100238357807856107764', NULL, 'e6iclBxfQtOG01S9d2CcR6:APA91bGcHR16kgP_3qne8GAsr84sCcMaIvllKxk52WorYezNumc4ti7OFS4vKYoremUfne0MbqSExlQw9ejFG6SbV-93AHTeRmO54dEOSydReiqxJBtGZVZitfVoV7FK2pEg8U8wqOu1', NULL, NULL),
(155, 2, 'Ranglerz', 'null', NULL, 'ranglerz291@gmail.com', '$2y$10$PodBtnGf/RO9v2ADQ0ulv.aUbeOmK6DEnOrApVIZMvJnLbdDhg4lW', 'public/admin/assets/images/users/1704349323.jpg', '1', '2024-01-02 12:38:44', '2024-01-04 11:22:03', NULL, NULL, NULL, NULL, '113670652251599014848', NULL, NULL, NULL, NULL),
(165, 2, 'Bilal', 'Rajpoot', '03174595818', 'ranabilal19999@gmail.com', '$2y$10$0nHap2gd8E/U.U1hITgIvOoKfPUkDUP7GXEfhn4dSTwgq8MWgc4RG', 'https://lh3.googleusercontent.com/a/ACg8ocL-aFA8sUZv5DAde-efelJnhugPhw4hpiUFHMDVOPO4pA=s96-c', '1', '2024-01-03 10:57:48', '2024-01-25 14:06:45', 'Testing', 'Xyz', NULL, NULL, '109034261858514098690', NULL, 'd-NSMnIaR3qV4oJVcCKuMr:APA91bFpYS-Kf09tg0x_LJ96IVwCJy10C32Ya-2x1TPjc1FWujTvJermLTiKEgJ5gKoER19sisyhivTVL7xfNpQ9oSqLjLNtr568EcRhgEjCJ5yaRVfmQEX2cajvMMvlVSYpxzWW--Yb', NULL, NULL),
(166, 3, 'Muhammad', 'Bilal', '03055588324', 'bilal.ranglerz199@gmail.com', NULL, 'public/admin/assets/images/users/1706159154.jpg', '1', '2024-01-03 11:03:34', '2024-01-25 12:58:50', NULL, NULL, '18 Civic Center St, Township Twp Commercial Area Lahore, Punjab 54770, Pakistan', NULL, NULL, NULL, 'd-NSMnIaR3qV4oJVcCKuMr:APA91bH_Y2t6kfcjgcKBSSLeFcgkszOPpjgR9N78CWd7eJHDc_C1Q3ZDiLoBpmsZcdYCBVY7AbUS0vHhSWqCdKMBZ7XXwXC3OXr1O038JzixYTDZGg4eMfYUmBfZStrJv6zqFJDDlzoD', '31.4528839', '74.2999403'),
(169, 2, 'Ali', 'Sher', NULL, 'alisher6269@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocJrhu-OCrnGja6PRXynenyDV710gwlLCZOx2MLmVIaM=s120', '1', '2024-01-17 11:08:00', '2024-01-18 12:09:42', NULL, NULL, NULL, NULL, '111500957718770723870', NULL, 'dQmpEuStfkodpX5szYm12w:APA91bF0ewaRnXRwV65fvCPWrnabEhY6A6JgQrjCioyebUYBlLG7FfNQa416HLIGkPmDlxNaFbDD18fpeSix9zXSkL1t0rrh6bUMiL1YqCP5FFsUC3NwmV7dTGZpV0awQN3nCVY1twq5', NULL, NULL),
(170, 3, 'usman', 'qayyum', NULL, 'usmanqayyum.ranglerz@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocIi9Os6jK2d0pYHR_385pcnyX82xy95KbM95xLGt8um=s96-c', '1', '2024-01-17 12:16:30', '2024-01-22 11:58:36', NULL, NULL, NULL, NULL, '102424568092319248548', NULL, 'dle9RncjT3yFWgnhmGm_hs:APA91bFzAWbR10PQTKZuIqmKScuOveXXYZhKG9QICJZKYL81XTRV3_jBxp2b-sDIETnDvfvJshNIcGITREZjAULG8Fc0VdUqwyIvWJYQYwXb_3kS_Q6jfxQYY-ApPqzY-myTXo5OJtjN', NULL, NULL),
(171, 2, 'USMAN', 'QAYYUM', NULL, 'usmanqayyum109@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocKxH1EJdVype9UwoyC7bCbb_rcGeTANNjhOrWWO1miCoQ=s96-c', '1', '2024-01-17 17:41:01', '2024-01-17 17:41:01', NULL, NULL, NULL, NULL, '106379475018719087825', NULL, 'dle9RncjT3yFWgnhmGm_hs:APA91bHzjXkRkIK3w49gd5N2shLCVDNhSAAD5-IJOtXAsFpBerUUrupRJ5Qra0Hh0_RrPv6kPsOR6eWdv1ZWowQMEn1BAEHuVci5Ej5lIFfl7PWZrAq1ShHmAWJPDA1KI1oHtb-OR08F', NULL, NULL),
(172, 3, 'Ranglerz', 'Office1', NULL, 'ranglerzoffice1@icloud.com', NULL, 'null', '1', '2024-01-18 15:30:51', '2024-01-19 13:30:59', NULL, NULL, NULL, NULL, NULL, '001279.cb4dbb450add4f3ca570204c4283a3a9.0913', 'dQmpEuStfkodpX5szYm12w:APA91bFLIGUx3qUBwecS1I-YvLhEUtDaDEAoTdbNoQoGaIoyu-UrnqdFlGOvPFGRzpPhguQAT-rB0xVZBQfvfi2Mom0ns1wREwwFedVo0h7z0MNV0ijia_bLdBW1DwTaz6OFkWoAwoWa', NULL, NULL),
(173, 3, 'null', 'null', NULL, 'null', NULL, 'null', '1', '2024-01-18 16:03:20', '2024-01-24 14:29:32', NULL, NULL, NULL, NULL, NULL, '001684.35f7af616aca433b9c69d67324df6e96.0954', 'fWVZT2jSC0oVl-ESWWOmAF:APA91bHylpycXHQydwORqGASoSv4-B6aYJ383unRcjrvJJglLi6xZPHtmP0zt7zklE-yXlhU-y5rqHr4yiwDoYcWQ34Z-MOliBY4qPTSd1IhC11EMHQMBIsORWatUbe9OR2o-ZWIS4NX', NULL, NULL),
(174, 3, 'Hayder', 'Imam', NULL, 'sztr98psmm@privaterelay.appleid.com', NULL, 'null', '1', '2024-01-22 14:54:06', '2024-01-22 14:54:06', NULL, NULL, NULL, NULL, NULL, '001684.35f7af616aca433b9c69d67324df6e96.0954', 'fWVZT2jSC0oVl-ESWWOmAF:APA91bFeTHQnAXvNkFQH-79Bh8Af8McMPg81UXcbqBFCpSqSf2dDSMBs9vxO4oQ0pmvA_m_Narnmq8VcBcs54oKyRmo6uWh0rXshMqOmtveAymFXF1nPL2Y6VGmYsPWdP-stI5tzqg_y', NULL, NULL),
(175, 2, 'Drivrr', 'null', NULL, 'drivrr22@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocKSaiPHh_87RDEEu_kdX8XGLqkJIxTGk6YHCeIzZ3A=s120', '1', '2024-01-22 14:56:04', '2024-01-22 15:17:26', NULL, NULL, NULL, NULL, '113047198025350269262', NULL, 'fWVZT2jSC0oVl-ESWWOmAF:APA91bHTTM98vru-89CGlO0gkj7aoaovZd0JBlkuRqtYsEl35C4op_p825q5IXu4qGffDXOhusVj_f9rm92KuapQCycrB3H5BP4hl0PsL6hFALfMNAzVRmBllTDObH1sRggNlT0zL5f4', NULL, NULL),
(176, 3, 'Hayder', 'Imam', NULL, 'hayder.imam7@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocI-Rl6Ewn1vMYKtfQNttXo52IhYh3iqOX2BkanFg3iR=s120', '1', '2024-01-22 15:18:02', '2024-01-24 14:29:06', NULL, NULL, NULL, NULL, '102383042764893010553', NULL, 'fWVZT2jSC0oVl-ESWWOmAF:APA91bGXutazQ4izQpkVuUIessrnt_Q5IY3XrhYbZ19QfjfOGYYj-fqRKze90I37ytQ2QsricxQbKGUcAveKoYhH9dbJnY-bDcbSdeTA90pIZSL23a-pOJ9SEukvFa84sTFXDZGx58I8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_with_otps`
--

CREATE TABLE `user_login_with_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_login_with_otps`
--

INSERT INTO `user_login_with_otps` (`id`, `email`, `otp`, `token`, `created_at`, `updated_at`, `user_id`) VALUES
(17, 'usman.talat.2001@gmail.com', '3970', 'HrGSt3jTFPPAOfyNEWjiYX3tujufSq', NULL, NULL, 0),
(159, '123@gmail.com', '9619', 'ECY0GUMAiJorbFcgixeKkwjpAykrqv', NULL, NULL, 37),
(234, 'Aliakber.ranglerz@gmail.com', '3046', '21HeRIHqF9nRGlz4btJBMGVNDsDl4L', NULL, NULL, 56),
(329, 'm.usman.talat.2001@gmail.com', '5740', '18Ydr2Zn0sGb7NPvdGuHpwU75rGXbN', NULL, NULL, 90),
(334, 'usman0725.ranglerz@gmail.com', '2479', 'UoHByrEX23kQqiKlPyWTpWFO03Ars4', NULL, NULL, 91),
(814, 'afaq.ranglerz@gmail.com', '4940', 'JVwn3B86RY4pnEp2ixGT6XrwxtnRLk', NULL, NULL, 104),
(840, 'afaqahmad4009@gmail.com', '3389', 'dYcVeqK86XVzGivjEseVgXgLeBYsVi', NULL, NULL, 103),
(847, 'bilal.ranglerz199@gmail.com', '9660', 'czU02aLz15sgvU0y2PukmAQBHa2FGs', NULL, NULL, 166),
(848, 'ranabilal19999@gmail.com', '7970', 'z6C47aEVY26pncRiiSNb0MWzQ7MQ7o', NULL, NULL, 165);

-- --------------------------------------------------------

--
-- Table structure for table `user_register_with_otps`
--

CREATE TABLE `user_register_with_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Car', '2023-10-13 07:53:30', '2023-10-13 07:53:30'),
(3, 'Motor Bike', '2023-10-13 07:53:46', '2023-10-13 07:53:46'),
(4, 'Bicycle', '2023-10-16 08:46:16', '2023-10-16 08:46:16'),
(5, 'HGV', '2023-10-16 08:46:28', '2023-10-16 08:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_requests`
--

CREATE TABLE `withdrawal_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `withdrawal_amount` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `seen` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_accounts_user_id_foreign` (`user_id`);

--
-- Indexes for table `component_permission`
--
ALTER TABLE `component_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `component_permission_user_id_foreign` (`user_id`),
  ADD KEY `component_permission_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `driver_vehicles`
--
ALTER TABLE `driver_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_vehicles_user_id_foreign` (`user_id`),
  ADD KEY `driver_vehicles_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `driver_wallets`
--
ALTER TABLE `driver_wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_wallets_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_requests_owner_id_foreign` (`owner_id`),
  ADD KEY `payment_requests_driver_id_foreign` (`driver_id`),
  ADD KEY `payment_requests_job_id_foreign` (`job_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_owner_id_foreign` (`owner_id`),
  ADD KEY `reviews_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `term_conditions`
--
ALTER TABLE `term_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twilio_sms`
--
ALTER TABLE `twilio_sms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `twilio_sms_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_login_with_otps`
--
ALTER TABLE `user_login_with_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register_with_otps`
--
ALTER TABLE `user_register_with_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawal_requests_driver_id_foreign` (`driver_id`),
  ADD KEY `withdrawal_requests_account_id_foreign` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `component_permission`
--
ALTER TABLE `component_permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `driver_vehicles`
--
ALTER TABLE `driver_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `driver_wallets`
--
ALTER TABLE `driver_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `twilio_sms`
--
ALTER TABLE `twilio_sms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `user_login_with_otps`
--
ALTER TABLE `user_login_with_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=849;

--
-- AUTO_INCREMENT for table `user_register_with_otps`
--
ALTER TABLE `user_register_with_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD CONSTRAINT `bank_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `component_permission`
--
ALTER TABLE `component_permission`
  ADD CONSTRAINT `component_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `component_permission_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_vehicles`
--
ALTER TABLE `driver_vehicles`
  ADD CONSTRAINT `driver_vehicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_wallets`
--
ALTER TABLE `driver_wallets`
  ADD CONSTRAINT `driver_wallets_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD CONSTRAINT `payment_requests_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_requests_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_requests_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `twilio_sms`
--
ALTER TABLE `twilio_sms`
  ADD CONSTRAINT `twilio_sms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawal_requests`
--
ALTER TABLE `withdrawal_requests`
  ADD CONSTRAINT `withdrawal_requests_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `bank_accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdrawal_requests_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

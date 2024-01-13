-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 10:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notify_to_admins`
--

CREATE TABLE `notify_to_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify_to_admins`
--

INSERT INTO `notify_to_admins` (`id`, `title`, `message`, `route`, `seen`, `created_at`, `updated_at`) VALUES
(3, 'Visa Notification', 'The company Usman take action on Signed MB & ST step of New Visa against employee piremojyx', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 01:27:11', '2024-01-10 01:50:43'),
(4, 'Visa Notification', 'The company Usman take action on Entry Visa step of New Visa against employee piremojyx', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 01:55:26', '2024-01-10 01:55:46'),
(5, 'Visa Notification', 'The company Usman take action on Medical Fitness step of New Visa Process against employee piremojyx', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 01:57:04', '2024-01-10 01:57:29'),
(6, 'Visa Notification', 'The company Usman take action on Tawjeeh Training Classes step of New Visa Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:03:56', '2024-01-10 02:04:17'),
(7, 'Visa Notification', 'The company Usman take action on Tawjeeh Training Classes step of New Visa Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:04:06', '2024-01-10 02:04:17'),
(8, 'Visa Notification', 'The company Usman take action on Employee Biometric step of New Visa Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:05:31', '2024-01-10 02:05:40'),
(9, 'Visa Notification', 'The company Usman take action on Medical Fitness step of Renewal Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:07:59', '2024-01-10 02:08:06'),
(10, 'Visa Notification', 'The company Usman take action on Upload signed MB step of Renewal Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:10:41', '2024-01-10 02:10:55'),
(11, 'Visa Notification', 'The company Usman take action on Tawjeeh classes step of Renewal Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:10:46', '2024-01-10 02:10:55'),
(12, 'Visa Notification', 'The company Usman take action on Employee Biometric step of Renewal Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:10:50', '2024-01-10 02:10:55'),
(13, 'Visa Notification', 'The company Usman take action on Upload signed MB step of Sponsored by Someone Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:13:21', '2024-01-10 02:13:28'),
(14, 'Visa Notification', 'The company Usman take action on Waiting for Approval step of Sponsored by Someone Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:14:23', '2024-01-10 02:14:32'),
(15, 'Visa Notification', 'The company Usman take action on Upload signed MB step of (Work Permit) Part Time and Temporary Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:16:22', '2024-01-10 02:16:28'),
(16, 'Visa Notification', 'The company Usman take action on Upload signed MB step of Work Permit (Part Time and Temporary Process) against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:23:47', '2024-01-10 02:24:37'),
(17, 'Visa Notification', 'The company Usman take action on  Waiting for Approval step of Work Permit (Part Time and Temporary) Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:23:58', '2024-01-10 02:24:37'),
(18, 'Visa Notification', 'The company Usman take action on Upload signed MB step of Work Permit (UAE & GCC National) Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:24:05', '2024-01-10 02:24:37'),
(19, 'Visa Notification', 'The company Usman take action on Waiting for Approval step of Work Permit (UAE & GCC National) Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:24:13', '2024-01-10 02:24:37'),
(20, 'Visa Notification', 'The company Usman take action on Upload Signed MB step of Work Permit (Modify Contract) Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:26:49', '2024-01-10 02:27:16'),
(21, 'Visa Notification', 'The company Usman take action on Waiting for Approval step of Modification of Emirates Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:33:06', '2024-01-10 02:35:05'),
(22, 'Visa Notification', 'The company Usman take action on Waiting for Approval step of Modification of Emirates Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:33:13', '2024-01-10 02:35:05'),
(23, 'Visa Notification', 'The company Usman take action on Upload Signed Cancellation Form step of Visa Cancellation Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:33:18', '2024-01-10 02:35:05'),
(24, 'Visa Notification', 'The company Usman take action on Upload Signed Cancellation Form step of Work Permit Cancellation Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:33:27', '2024-01-10 02:35:05'),
(25, 'Visa Notification', 'The company Usman take action on Waiting for Approval step of Modification of Emirates Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:34:02', '2024-01-10 02:35:05'),
(26, 'Visa Notification', 'The company Usman take action on Upload Signed Cancellation Form step of Visa Cancellation Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:34:09', '2024-01-10 02:35:05'),
(27, 'Visa Notification', 'The company Usman take action on Work Permit Cancellation Approval step of Visa Cancellation Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:34:18', '2024-01-10 02:35:05'),
(28, 'Visa Notification', 'The company Usman take action on Upload Signed Cancellation Form step of Work Permit Cancellation Process against employee piremojyx.', 'http://localhost/green-app/greenapp/admin/visa/0/81/18', '1', '2024-01-10 02:34:26', '2024-01-10 02:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notify_to_admins`
--
ALTER TABLE `notify_to_admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notify_to_admins`
--
ALTER TABLE `notify_to_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

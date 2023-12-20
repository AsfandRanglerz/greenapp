-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 10:11 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honeqseq_beta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h1>About Us for Honey Guards</h1>\r\n\r\n<p>At Honey Guards, accessible from https://honeyguardsltd.com/beta/getPrivayPolicy, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Honey Guards and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Honey Guards. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>Honey Guards follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of Honey Guards.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Honey Guards, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that Honey Guards has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>Honey Guards&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>Honey Guards does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Changes to This Privacy Policy</h2>\r\n\r\n<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>\r\n\r\n<p>Our Privacy Policy was created with the help of the&nbsp;<a href=\"https://www.termsfeed.com/privacy-policy-generator/\">Privacy Policy Generator</a>.</p>\r\n\r\n<h2>Contact Us</h2>\r\n\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>', '2023-06-14 09:18:37', '2023-09-22 17:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$yy.VjZqhAYJN//67skSwe.EaLE31dz6frldZFRaKFb0sovPZBipDm', 'public/admin/assets/images/users/1698433242.jpeg', '2023-06-09 14:22:30', '2023-10-27 23:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, 'England - Bath', '2023-10-26 22:50:40', '2023-10-26 22:50:40'),
(10, 'England - Birmingham', '2023-10-26 22:50:58', '2023-10-26 22:50:58'),
(11, 'England - Bradford', '2023-10-26 22:51:19', '2023-10-26 22:51:19'),
(12, 'England - Brighton & Hove', '2023-10-26 22:51:41', '2023-10-26 22:51:41'),
(13, 'England - Bristol', '2023-10-26 22:51:50', '2023-10-26 22:51:50'),
(14, 'England - Cambridge', '2023-10-26 22:52:00', '2023-10-26 22:52:00'),
(15, 'England - Canterbury', '2023-10-26 22:52:09', '2023-10-26 22:52:09'),
(16, 'England - Carlisle', '2023-10-26 22:52:19', '2023-10-26 22:52:19'),
(17, 'England - Chelmsford', '2023-10-26 22:52:27', '2023-10-26 22:52:27'),
(18, 'England - Chester', '2023-10-26 22:52:39', '2023-10-26 22:52:39'),
(19, 'England - Chichester', '2023-10-26 22:52:49', '2023-10-26 22:52:49'),
(20, 'England - Colchester', '2023-10-26 22:53:01', '2023-10-26 22:53:01'),
(22, 'England - Coventry', '2023-10-27 23:05:00', '2023-10-27 23:05:00'),
(23, 'England - Derby', '2023-10-27 23:05:10', '2023-10-27 23:05:10'),
(24, 'England - Doncaster', '2023-10-27 23:05:20', '2023-10-27 23:05:20'),
(25, 'England - Durham', '2023-10-27 23:05:29', '2023-10-27 23:05:29'),
(26, 'England - Ely', '2023-10-27 23:05:38', '2023-10-27 23:05:38'),
(27, 'England - Exeter', '2023-10-27 23:05:46', '2023-10-27 23:05:46'),
(28, 'England - Gloucester', '2023-10-27 23:06:00', '2023-10-27 23:06:00'),
(29, 'England - Hereford', '2023-10-27 23:06:08', '2023-10-27 23:06:08'),
(30, 'England - Kingston-upon-Hull', '2023-10-27 23:06:16', '2023-10-27 23:06:16'),
(31, 'England - Lancaster', '2023-10-27 23:06:26', '2023-10-27 23:06:26'),
(32, 'England - Leeds', '2023-10-27 23:06:34', '2023-10-27 23:06:34'),
(33, 'England - Leicester', '2023-10-27 23:06:46', '2023-10-27 23:06:46'),
(34, 'England - Lichfield', '2023-10-27 23:06:54', '2023-10-27 23:06:54'),
(35, 'England - Lincoln', '2023-10-27 23:07:02', '2023-10-27 23:07:02'),
(36, 'England - Liverpool', '2023-10-27 23:07:10', '2023-10-27 23:07:10'),
(37, 'England - London', '2023-10-27 23:07:19', '2023-10-27 23:07:19'),
(38, 'England - Manchester', '2023-10-27 23:07:26', '2023-10-27 23:07:26'),
(39, 'England - Milton Keynes', '2023-10-27 23:07:36', '2023-10-27 23:07:36'),
(40, 'England - Newcastle-upon-Tyne', '2023-10-27 23:07:46', '2023-10-27 23:07:46'),
(41, 'England - Norwich', '2023-10-27 23:07:54', '2023-10-27 23:07:54'),
(42, 'England - Nottingham', '2023-10-27 23:08:02', '2023-10-27 23:08:02'),
(43, 'England - Oxford', '2023-10-27 23:08:11', '2023-10-27 23:08:11'),
(44, 'England - Peterborough', '2023-10-27 23:08:21', '2023-10-27 23:08:21'),
(45, 'England - Plymouth', '2023-10-27 23:08:29', '2023-10-27 23:08:29'),
(46, 'England - Portsmouth', '2023-10-27 23:08:40', '2023-10-27 23:08:40'),
(47, 'England - Preston', '2023-10-27 23:08:48', '2023-10-27 23:08:48'),
(48, 'England - Ripon', '2023-10-27 23:09:21', '2023-10-27 23:09:21'),
(49, 'England - Salford', '2023-10-27 23:09:30', '2023-10-27 23:09:30'),
(50, 'England - Salisbury', '2023-10-27 23:09:39', '2023-10-27 23:09:39'),
(51, 'England - Sheffield', '2023-10-27 23:09:48', '2023-10-27 23:09:48'),
(52, 'England - Southampton', '2023-10-27 23:09:56', '2023-10-27 23:09:56'),
(53, 'England - Southend-on-Sea', '2023-10-27 23:10:04', '2023-10-27 23:10:04'),
(54, 'England - St Albans', '2023-10-27 23:10:13', '2023-10-27 23:10:13'),
(55, 'England - Stoke on Trent', '2023-10-27 23:10:21', '2023-10-27 23:10:21'),
(56, 'England - Sunderland', '2023-10-27 23:10:30', '2023-10-27 23:10:30'),
(57, 'England - Truro', '2023-10-27 23:10:37', '2023-10-27 23:10:37'),
(58, 'England - Wakefield', '2023-10-27 23:10:46', '2023-10-27 23:10:46'),
(59, 'England - Wells', '2023-10-27 23:10:53', '2023-10-27 23:10:53'),
(60, 'England - Westminster', '2023-10-27 23:11:01', '2023-10-27 23:11:01'),
(61, 'England - Winchester', '2023-10-27 23:11:10', '2023-10-27 23:11:10'),
(62, 'England - Wolverhampton', '2023-10-27 23:11:27', '2023-10-27 23:11:27'),
(63, 'England - Worcester', '2023-10-27 23:11:34', '2023-10-27 23:11:34'),
(64, 'England - York', '2023-10-27 23:11:51', '2023-10-27 23:11:51'),
(65, 'Northern Ireland - Armagh', '2023-10-27 23:39:36', '2023-10-27 23:39:36'),
(66, 'Northern Ireland - Bangor', '2023-10-27 23:39:55', '2023-10-27 23:39:55'),
(67, 'Northern Ireland - Belfast', '2023-10-27 23:40:17', '2023-10-27 23:40:17'),
(68, 'Northern Ireland - Lisburn', '2023-10-27 23:40:51', '2023-10-27 23:40:51'),
(69, 'Northern Ireland - Londonderry', '2023-10-27 23:41:11', '2023-10-27 23:41:11'),
(70, 'Northern Ireland - Newry', '2023-10-27 23:41:25', '2023-10-27 23:41:25'),
(71, 'Scotland - Aberdeen', '2023-10-27 23:47:09', '2023-10-27 23:47:09'),
(72, 'Scotland - Dundee', '2023-10-27 23:47:17', '2023-10-27 23:47:17'),
(73, 'Scotland - Dunfermline', '2023-10-27 23:47:25', '2023-10-27 23:47:25'),
(74, 'Scotland - Edinburgh', '2023-10-27 23:47:32', '2023-10-27 23:47:32'),
(75, 'Scotland - Glasgow', '2023-10-27 23:47:42', '2023-10-27 23:47:42'),
(76, 'Scotland - Inverness', '2023-10-27 23:47:52', '2023-10-27 23:47:52'),
(77, 'Scotland - Perth', '2023-10-27 23:48:02', '2023-10-27 23:48:02'),
(78, 'Scotland - Stirling', '2023-10-27 23:48:11', '2023-10-27 23:48:11'),
(79, 'Wales - Bangor', '2023-10-27 23:50:31', '2023-10-27 23:50:31'),
(80, 'Wales - Cardiff', '2023-10-27 23:50:48', '2023-10-27 23:50:48'),
(81, 'Wales - Newport', '2023-10-27 23:50:59', '2023-10-27 23:50:59'),
(82, 'Wales - St Asaph', '2023-10-27 23:51:24', '2023-10-27 23:51:24'),
(83, 'Wales - St Davids', '2023-10-27 23:51:44', '2023-10-27 23:51:44'),
(84, 'Wales - Swansea', '2023-10-27 23:52:00', '2023-10-27 23:52:00'),
(85, 'Wales - Wrexham', '2023-10-27 23:52:11', '2023-10-27 23:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `start_file` varchar(255) DEFAULT NULL,
  `end_file` varchar(255) DEFAULT NULL,
  `early_going_status` varchar(255) DEFAULT NULL,
  `early_hour` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `officer_id`, `job_id`, `start_file`, `end_file`, `early_going_status`, `early_hour`, `created_at`, `updated_at`) VALUES
(18, 2, 43, 'public/admin/assets/images/attendance/1694762036.jpg', 'public/admin/assets/images/attendance/1694762849.jpg', 'Accepted', '3', '2023-09-13 05:13:56', '2023-09-13 11:27:29'),
(19, 2, 43, 'public/admin/assets/images/attendance/1694764509.jpg', 'public/admin/assets/images/attendance/1694764596.jpg', 'Accepted', '2', '2023-09-14 05:55:09', '2023-09-15 11:56:36'),
(20, 2, 45, 'public/admin/assets/images/attendance/1694785617.jpg', NULL, NULL, '0', '2023-09-15 17:46:57', '2023-09-15 17:46:57'),
(21, 12, 45, 'public/admin/assets/images/attendance/1694785883.jpg', 'public/admin/assets/images/attendance/1694850126.jpg', NULL, '0', '2023-09-15 17:51:23', '2023-09-16 11:42:06'),
(22, 13, 46, 'public/admin/assets/images/attendance/1694786023.jpg', NULL, NULL, '0', '2023-09-15 17:53:43', '2023-09-15 17:53:43'),
(23, 2, 45, 'public/admin/assets/images/attendance/1694846504.jpg', 'public/admin/assets/images/attendance/1694846928.jpg', NULL, '0', '2023-09-16 03:41:44', '2023-09-16 10:48:48'),
(24, 12, 45, 'public/admin/assets/images/attendance/1694850141.jpg', 'public/admin/assets/images/attendance/1694850230.jpg', 'Accepted', '3', '2023-09-16 05:42:21', '2023-09-16 11:43:50'),
(28, 2, 48, 'public/admin/assets/images/attendance/1695026199.jpg', 'public/admin/assets/images/attendance/1695026289.jpg', 'Accepted', '1', '2023-09-15 12:36:39', '2023-09-18 12:38:09'),
(29, 2, 48, 'public/admin/assets/images/attendance/1695026305.jpg', 'public/admin/assets/images/attendance/1695026350.jpg', NULL, '0', '2023-09-16 12:38:25', '2023-09-18 12:39:10'),
(30, 2, 48, 'public/admin/assets/images/attendance/1695026367.jpg', 'public/admin/assets/images/attendance/1695026391.jpg', NULL, '0', '2023-09-17 12:39:27', '2023-09-18 12:39:51'),
(31, 12, 48, 'public/admin/assets/images/attendance/1695026489.jpg', 'public/admin/assets/images/attendance/1695026674.jpg', NULL, '0', '2023-09-15 12:41:29', '2023-09-18 12:44:34'),
(32, 2, 48, 'public/admin/assets/images/attendance/1695026794.jpg', NULL, NULL, '0', '2023-09-13 12:46:34', '2023-09-18 12:46:34'),
(33, 2, 48, 'public/admin/assets/images/attendance/1695109723.jpg', NULL, NULL, '0', '2023-09-19 11:48:43', '2023-09-19 11:48:43'),
(36, 19, 50, 'public/admin/assets/images/attendance/1695878630.jpg', NULL, NULL, '0', '2023-09-28 09:23:50', '2023-09-28 09:23:50'),
(37, 2, 54, 'public/admin/assets/images/attendance/1698309274.jpg', NULL, 'Accepted', '5', '2023-10-26 12:34:34', '2023-10-26 12:44:19'),
(38, 2, 55, 'public/admin/assets/images/attendance/1698317905.jpg', NULL, NULL, '0', '2023-10-26 14:58:25', '2023-10-26 14:58:25'),
(43, 2, 63, 'public/admin/assets/images/attendance/1698667435.jpg', NULL, 'Accepted', '1', '2023-10-30 16:03:55', '2023-10-30 16:05:40'),
(44, 2, 65, 'public/admin/assets/images/attendance/1698672093.jpg', 'public/admin/assets/images/attendance/1698825990.jpg', 'Accepted', '1', '2023-10-30 17:21:33', '2023-11-01 12:06:30'),
(45, 2, 65, 'public/admin/assets/images/attendance/1698750759.jpg', NULL, 'Accepted', '1', '2023-10-31 15:12:39', '2023-10-31 15:50:13'),
(46, 2, 65, 'public/admin/assets/images/attendance/1698817744.jpg', NULL, 'Accepted', '1', '2023-11-01 09:49:04', '2023-11-01 09:50:12'),
(47, 2, 66, 'public/admin/assets/images/attendance/1698821304.jpg', 'public/admin/assets/images/attendance/1698824899.jpg', 'Accepted', '1', '2023-11-01 10:48:24', '2023-11-01 11:48:19'),
(54, 2, 67, 'public/admin/assets/images/attendance/1698826649.jpg', 'public/admin/assets/images/attendance/1698909865.jpg', 'Accepted', '23', '2023-11-01 12:17:29', '2023-11-02 11:24:25'),
(56, 2, 69, 'public/admin/assets/images/attendance/1698921000.jpg', NULL, 'Rejected', '24', '2023-11-02 14:30:00', '2023-11-02 14:31:01'),
(57, 2, 70, 'public/admin/assets/images/attendance/1698921134.jpg', 'public/admin/assets/images/attendance/1698921194.jpg', 'Accepted', '24', '2023-11-02 14:32:14', '2023-11-02 14:33:14'),
(61, 2, 85, 'public/admin/assets/images/attendance/1700811959.jpg', 'public/admin/assets/images/attendance/1700812128.jpg', 'Accepted', '24', '2023-11-24 12:45:59', '2023-11-24 12:48:48'),
(62, 33, 86, 'public/admin/assets/images/attendance/1700812790.jpg', NULL, NULL, '0', '2023-11-24 12:59:50', '2023-11-24 12:59:50'),
(63, 2, 88, 'public/admin/assets/images/attendance/1701067548.jpg', 'public/admin/assets/images/attendance/1701067675.jpg', 'Accepted', '6', '2023-11-27 11:45:48', '2023-11-27 11:47:55'),
(64, 2, 93, 'public/admin/assets/images/attendance/1701692152.jpg', NULL, 'Requested', '6', '2023-12-04 17:15:52', '2023-12-04 17:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(255) DEFAULT NULL,
  `sort_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `officer_id`, `company_id`, `bank_name`, `account_holder_name`, `bank_account_number`, `sort_code`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Hbll', 'Tayyab', '2578975', NULL, '2023-06-09 14:58:25', '2023-07-22 18:46:45'),
(4, 2, NULL, 'HBL', 'Danial Babar', '7568686868', '885', '2023-06-09 17:56:54', '2023-06-23 11:32:54'),
(5, NULL, 3, 'Abc', 'Ahsan', '1663835', '126578', '2023-06-12 11:04:08', '2023-06-12 11:04:08'),
(6, NULL, 8, NULL, NULL, NULL, NULL, '2023-07-12 10:33:29', '2023-07-22 13:26:12'),
(11, 40, NULL, 'Ajhsjsus', 'Ahsan gahfoor', '049944994', '124578', '2023-12-11 00:58:03', '2023-12-11 00:58:03'),
(12, NULL, 26, 'Hbl', 'Ali', '2578975', NULL, '2023-12-19 13:37:54', '2023-12-19 13:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `chat_favorites`
--

CREATE TABLE `chat_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_groups`
--

CREATE TABLE `chat_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_favorite_id` bigint(20) UNSIGNED NOT NULL,
  `chat_group_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `tpye` enum('Group','Favorite') DEFAULT NULL,
  `body` text DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `maiden_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `company_id` varchar(255) DEFAULT NULL,
  `incorporate_on` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_person_number` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `fcm_token` varchar(255) DEFAULT NULL,
  `firebase_id` varchar(255) DEFAULT NULL,
  `is_verified` enum('0','1') NOT NULL DEFAULT '0',
  `profile_status` enum('0','1') NOT NULL DEFAULT '0',
  `rating_avg` varchar(255) DEFAULT NULL,
  `delete_request` varchar(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `image`, `position`, `first_name`, `maiden_name`, `last_name`, `email`, `password`, `company_id`, `incorporate_on`, `contact`, `address`, `post_code`, `contact_person`, `contact_person_number`, `about`, `is_active`, `fcm_token`, `firebase_id`, `is_verified`, `profile_status`, `rating_avg`, `delete_request`, `created_at`, `updated_at`) VALUES
(1, 'Company1', 'public/admin/assets/images/users/1702971259.jpg', 'Ceo', 'Daniyal', NULL, 'Babar', 'company1@gmail.com', '$2y$10$Ak8w7LXpvXDpESF2EF4kWOM3jvC.tvaNWo5s.A1TnDsHpb1kx5XJG', '14562184', '2023-06-09', '06855653535', 'townships lahore', '356', 'Tayyab', '06467375400', NULL, '1', NULL, 'drCfTgwpgFYyHOJw909lIg5sHx73', '1', '1', '2', '0', '2023-06-09 14:25:30', '2023-12-19 19:59:34'),
(3, 'Leopards Security', 'public/admin/assets/images/users/1686553398.jpg', 'Director', 'Ali', NULL, 'Nawaz', 'ahsanghafoor89@live.com', '$2y$10$SZqJV955QhNiE8YvzblgWu74ZCwJM92W5/FGfWM7ytq/j2vtbJ7PC', '137366388', '2020-06-12', '07579791168', 'Abc', 'E179at', 'Ahsan', '07579791168', 'Abc', '1', NULL, 'wTfTO9OPwehpvuAyM7LCAHRZmOA3', '1', '1', NULL, '0', '2023-06-12 11:01:48', '2023-10-28 10:28:49'),
(4, 'Company2', 'public/admin/assets/images/users/1695895278.png', 'Abc', 'Abc', 'Abc', 'Abc', 'company2@gmail.com', '$2y$10$px6Guhby/DTkVMs4866zyOXhn2bc91ajruoE/ZOgz09BrkZJGaY.2', NULL, NULL, '0757979116', 'hasfas', 'E179at', 'Ahsan', '07579791168', NULL, '1', 'cVZfsdSHRMuBWTtlINJ9F3:APA91bHBKuPqDaWi2WOnhmUOuLOJzhkkcomtJcnVcM-bzOve7malMh70eZwYP4nJD-fIykJMztbamWrYLBOk-xihX8pAjvr0kscAfOOXFgdM6lfpfxD5R16W5tjCZm7wkhgzAJ_o3BVe', 'TEjvShMmKRNnE7Wond3L4rwci8R2', '1', '1', '5', '0', '2023-06-16 09:21:31', '2023-11-27 11:07:23'),
(5, 'Ranglerz3', 'public/admin/assets/images/users/1675332882.jpg', 'laravel', 'Ranglrs', 'Arshad', 'Faarsi', 'arshadfaarsi13+3@gmail.com', '$2y$10$J1JMMvw0S7c0AFZBOy8Y4eA15rJTEr.Mxo1tkFcOlBM1zbHE.iFVi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'dIOT_aueQTKorNQ2lY0H3_:APA91bFTNW4BMSh27vx8s9XRf8cBwdzIqBOMEnilPGe8iPG2UB9n9w3rEV_Gpe3GatITDadgMj99nrvGNAm4korJAmbIgPt1fZ5NjCa0tG2BUjVYQU-f_HXBO9mVhALjLMeg_LJtk5OW', NULL, '1', '1', NULL, '0', '2023-06-27 13:05:45', '2023-07-14 11:52:03'),
(6, 'ranga', 'public/admin/assets/images/users/1675332882.jpg', NULL, NULL, NULL, NULL, 'arshadfaarsi13@gmail.com', '$2y$10$6tyohIo2lu/sfEs5Ed9uZesomC3vars6wOSwiHHLC91cEzA4fz4zS', '14562184', 'laravel', '03637362853', 'Lahore', '35346', 'Arshad', '042646573', 'There is no reason to ask reason', '1', NULL, NULL, '1', '1', NULL, '0', '2023-06-27 13:05:59', '2023-08-07 11:27:09'),
(7, 'Company3', 'public/admin/assets/images/users/1675332882.jpg', 'Hello', 'Company', NULL, 'Ok', 'abccc@gmail.com', '$2y$10$M3RtRSasfutKABvYg.ptQOiYp1/Xq8on1dm8xw21gakmx8X9W00CS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2RblQ7ApfzMbBwwGHr5HuOaU4X73', '1', '0', NULL, '0', '2023-07-06 11:50:14', '2023-07-06 11:50:14'),
(8, 'Company3', 'public/admin/assets/images/users/1689338391.jpg', 'Hello', 'Hi', NULL, 'Ok', 'company3@gmail.com', '$2y$10$PULbEPWc8Ai6CJprHks6Ouzvd1MwgcDWsKEAmNn3h/yoPAJN.jH4m', '14562184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'ZCOtmE7VlyTF9BsoMfuxLBZabyb2', '1', '1', '0', '0', '2023-07-06 11:51:24', '2023-09-28 11:57:43'),
(10, 'Security Provider', 'public/admin/assets/images/users/1675332882.jpg', 'Ceo', 'Usman', NULL, NULL, 'usman.ranglerz449@gmail.com', '$2y$10$F7kN93OxlOOK7TNFjgL8G.Fq.fjWDoflPHuxyuJHxyAWhmamO8Wyi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'c2LG5Pv0SvKliLqBrzxQjx:APA91bGBIe9Xgc2UU9wkvmAadZQQkIOTCJ9HQ9Gfmd94Wk883_YOvKzd8BmUueC5aHYsV9MgMHUDDdPlLd6TcavCmNR54f9rfhuaz0apEVSm91OP1meGBWGzEimgZ9Uz08kzLfIA9tQv', 'K2jxLa9ghEZGzmHtyN95nX0W4oh1', '0', '1', NULL, '0', '2023-09-21 17:56:15', '2023-09-28 16:56:35'),
(12, 'Company62', 'public/admin/assets/images/users/1675332882.jpg', 'Employee', 'Company', NULL, NULL, 'company62@gmail.com', '$2y$10$qx01uR3CbiQ9ey3jjNZ1weaOXQxOeH9qumpRgBIJUVn8U8i6d9Mgq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'vDR8PAAIrKXueqXRJVwSEhOmcGg1', '0', '1', NULL, '0', '2023-09-26 11:14:25', '2023-11-28 16:01:20'),
(13, 'Test', 'public/admin/assets/images/users/1675332882.jpg', 'Test', 'Testing', NULL, NULL, 'company10@gmail.com', '$2y$10$sEoHbca0s4u/DuAhqPrL8uZKLv9TgOQWpJF49pMQRHEYVRLF0lRpm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'rD3BhnPrUfgVuPIUxcaCXW830Uw1', '0', '1', NULL, '0', '2023-09-28 11:58:21', '2023-09-28 13:25:42'),
(14, 'Ranglerz Tech', 'public/admin/assets/images/users/1675332882.jpg', 'Developer', 'Afaq', NULL, 'Ahmad', 'afaqahmad4009@gmail.com', '$2y$10$vsoTnitPawl7QmKyKNsCmue4SD5pjbnCfXTfi6vhtf/pmF9qu0kUC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'cVZfsdSHRMuBWTtlINJ9F3:APA91bHBKuPqDaWi2WOnhmUOuLOJzhkkcomtJcnVcM-bzOve7malMh70eZwYP4nJD-fIykJMztbamWrYLBOk-xihX8pAjvr0kscAfOOXFgdM6lfpfxD5R16W5tjCZm7wkhgzAJ_o3BVe', 'nWl5GVs7N8Nwdg7BAVGGFW6A72z2', '0', '1', NULL, '0', '2023-10-26 10:56:03', '2023-11-27 11:08:42'),
(16, 'Lucia Mia Cugina', 'public/admin/assets/images/users/1675332882.jpg', 'Dragoni', 'Gabriele', 'Adam forde', 'Inutile', 'inutile_gabriele@icloud.com', '$2y$10$C.njcWYLfARqs0yyBWbfg.leajn5RdZw3hGd007vg.07DK3Q2Jsqa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'hDS8afy3pURNi9ow5G3WPHxduoU2', '0', '0', NULL, '0', '2023-11-23 12:33:43', '2023-11-23 12:33:43'),
(17, 'Ali Company', 'public/admin/assets/images/users/1701065503.jpg', 'Sub Contractor', 'Ali', NULL, 'Sher', 'alisher6269@gmail.com', '$2y$10$bqVv71n7jp5us906e4rYSOLh7UirbAIQqiaXmXKNeQcqMsgklZo1y', '12', 'yes', '1', 'Address', '4300', 'Ali', '123456789', NULL, '1', NULL, NULL, '0', '0', NULL, '0', '2023-11-27 11:11:43', '2023-11-27 11:11:43'),
(21, 'Usman', 'public/admin/assets/images/users/1675332882.jpg', 'Manager', 'Usman hh', NULL, NULL, 'usmanqayyum109@gmail.com', '$2y$10$Z/4gfk3PZFLmjPcqZawNHu.g55w13YN48k4AvVxOk98cRnNwM/zJO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'ROoLMkvxw1hdBVGqZqiI07VBzqe2', '0', '0', NULL, '0', '2023-11-27 12:47:35', '2023-11-27 12:47:35'),
(22, 'Asfand company', 'public/admin/assets/images/users/1675332882.jpg', 'Manager', 'Asfand', NULL, NULL, 'asfand@gmail.com', '$2y$10$z2PG4pkFVm9WFe.PJaU7LO.CYbf8c0geZtolMI2eSIZlwGO.jBcxu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'ruNVMccgSZVM8KxyJgt5y2MciKe2', '0', '1', NULL, '0', '2023-11-27 21:04:03', '2023-11-29 11:49:24'),
(25, 'HoneyguardsLtd', 'public/admin/assets/images/users/1702237417.jpg', 'Director', 'Ahsan', NULL, 'Ghafoor', 'ahsanghafoor89@gmail.com', '$2y$10$tOhEDXFnihRWNeqSZ8FAEucxY4RnY1zTe6bHWS5sTr5H9hVp3AD5m', '12345767', '2022-12-10', '07579791168', 'Ahxvh', '46786', 'Ahsan Ghafoor', '07579791168', 'Hzhsj', '1', '1', 'ymi4M8Kl7VUIl2R022vbmNW2cXw2', '0', '1', NULL, '0', '2023-12-11 00:33:18', '2023-12-19 19:55:59'),
(26, 'Ali', 'public/admin/assets/images/users/1702378175.jpg', 'Developer', 'Ali', NULL, 'Sher', 'aliakber.ranglerz@gmail.com', '$2y$10$gGLOXbZxDVTmDWvnA2QBuuVFFSU2zynvvOXyrT27P3XN618i57nxy', '14562178', '2023-12-19', '023559632566', 'Township lahore', '5400', '03334567891', '235645555', 'About', '1', NULL, 'mb0DEUT5U9PppFTlHzCJkdh9gCB2', '1', '1', NULL, '0', '2023-12-12 13:44:34', '2023-12-19 19:19:58'),
(27, 'Ali Create company', 'public/admin/assets/images/users/1702379146.jpeg', 'Sub Contractor', 'Ali', 'sher', 'akbar', 'alisher62@gmail.com', '$2y$10$EWcxEQnVYakIrQhxFaOQNOGoHZr/LhpbH2ORkQHzqKimqpF2TqyVi', '8888', 'yes', '1', 'Address', '4300', 'Ali', '3456789', NULL, '1', NULL, NULL, '0', '0', NULL, '0', '2023-12-12 16:05:46', '2023-12-12 16:05:46'),
(28, 'Ranglerz', 'public/admin/assets/images/users/1675332882.jpg', 'Project', 'Asfand', NULL, 'Check', 'asfand91@gmail.com', '$2y$10$VccXaIaAOKr3VOMSPPtIEehQUpErbTiiQ.uf4AN8cJBgGNTqaHJYK', '12345767', '2023-12-19', '03234555555', 'Address', '5400', '1467', '1234556', 'About', '1', '1', 'Nx7GOMKu9Agf6t6CvHR1U7C6Zvn2', '0', '1', NULL, '0', '2023-12-19 19:35:46', '2023-12-19 20:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_reviews`
--

INSERT INTO `company_reviews` (`id`, `company_id`, `user_id`, `job_id`, `rating`, `created_at`, `updated_at`) VALUES
(11, 1, 2, 43, '2', '2023-09-15 17:03:33', '2023-09-15 17:03:33'),
(12, 8, 2, 48, '0', '2023-09-18 14:12:44', '2023-09-18 14:12:44'),
(13, 4, 2, 45, '5', '2023-09-21 17:36:25', '2023-09-21 17:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `description`, `created_at`, `updated_at`) VALUES
(6, 'rameez', 'rameez.ranglerz@gmail.com', '03009000600', 'test', '2023-09-22 07:43:51', '2023-09-22 07:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_applies`
--

CREATE TABLE `contractor_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) UNSIGNED NOT NULL,
  `contractor_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Pending','Declined','Approved') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_applies`
--

INSERT INTO `contractor_applies` (`id`, `quotation_id`, `contractor_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 4, 'Approved', '2023-08-16 16:32:54', '2023-08-16 16:33:14'),
(4, 2, 8, 'Approved', '2023-08-16 16:34:39', '2023-08-16 16:40:14'),
(5, 3, 4, 'Approved', '2023-08-16 18:14:19', '2023-08-16 18:14:26'),
(6, 4, 4, 'Approved', '2023-09-15 17:34:06', '2023-09-15 17:34:33'),
(7, 4, 8, 'Approved', '2023-09-15 17:52:19', '2023-09-15 17:52:24'),
(10, 7, 4, 'Approved', '2023-09-18 12:34:08', '2023-09-18 12:34:15'),
(11, 8, 8, 'Approved', '2023-09-18 12:35:12', '2023-09-18 12:35:20'),
(12, 9, 1, 'Pending', '2023-09-26 14:20:09', '2023-09-26 14:20:09'),
(13, 12, 1, 'Declined', '2023-10-26 14:41:16', '2023-10-26 14:41:52'),
(16, 18, 14, 'Approved', '2023-11-06 15:02:23', '2023-11-06 15:02:32'),
(17, 19, 14, 'Approved', '2023-11-06 15:03:49', '2023-11-06 15:04:04'),
(18, 21, 14, 'Approved', '2023-11-06 15:27:47', '2023-11-06 15:31:36'),
(19, 22, 14, 'Approved', '2023-11-06 15:38:45', '2023-11-06 16:45:45'),
(21, 23, 12, 'Approved', '2023-11-27 20:17:14', '2023-11-27 20:20:36'),
(22, 24, 22, 'Approved', '2023-11-27 21:07:50', '2023-11-27 21:07:58'),
(23, 26, 22, 'Approved', '2023-11-28 16:00:13', '2023-11-28 16:00:26'),
(24, 28, 1, 'Approved', '2023-11-28 17:56:20', '2023-11-28 17:59:30'),
(25, 33, 1, 'Approved', '2023-11-29 11:28:40', '2023-11-29 11:28:53'),
(26, 34, 1, 'Approved', '2023-11-29 12:07:45', '2023-11-29 12:08:38'),
(27, 35, 1, 'Approved', '2023-11-29 12:26:23', '2023-11-29 12:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_bill_summaries`
--

CREATE TABLE `contractor_bill_summaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `contractor_id` bigint(20) UNSIGNED NOT NULL,
  `hire_officer` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `shift_hour` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `status` enum('Pending','Paid') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_bill_summaries`
--

INSERT INTO `contractor_bill_summaries` (`id`, `job_id`, `contractor_id`, `hire_officer`, `start_date`, `end_date`, `days`, `shift_hour`, `rate`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(276, 7, 4, 2, '2023-09-13', '2023-09-17', 5, 29, 7, 203, 'Pending', '2023-09-18 14:14:00', '2023-09-18 14:14:00'),
(277, 8, 8, 2, '2023-09-13', '2023-09-17', 5, 29, 6, 174, 'Pending', '2023-09-18 14:14:01', '2023-09-18 14:14:01'),
(278, 4, 4, 2, '2023-09-12', '2023-09-15', 4, 33, 3, 99, 'Pending', '2023-09-18 15:18:00', '2023-09-18 15:18:00'),
(279, 4, 8, 1, '2023-09-12', '2023-09-15', 1, 9, 3, 27, 'Pending', '2023-09-18 15:18:00', '2023-09-18 15:18:00'),
(280, 18, 14, 0, '2023-11-04', '2023-11-06', 0, 0, 50, 0, 'Pending', '2023-11-24 11:50:47', '2023-11-24 11:50:47'),
(281, 21, 14, 0, '2023-11-06', '2023-11-07', 0, 0, 500, 0, 'Pending', '2023-11-24 11:55:03', '2023-11-24 11:55:03'),
(282, 23, 12, 1, '2023-11-27', '2023-11-27', 0, 0, 50, 0, 'Pending', '2023-11-28 05:00:31', '2023-11-28 05:00:31'),
(283, 34, 1, 1, '2023-11-29', '2023-11-29', 0, 0, 50, 0, 'Pending', '2023-11-30 05:05:11', '2023-11-30 05:05:11'),
(284, 35, 1, 1, '2023-11-29', '2023-11-29', 0, 0, 50, 0, 'Pending', '2023-11-30 05:05:11', '2023-11-30 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_jobs`
--

CREATE TABLE `contractor_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractor_id` bigint(20) UNSIGNED NOT NULL,
  `contractor_quotation_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Open','Completed','Cancelled') NOT NULL DEFAULT 'Open',
  `payment_reminder` enum('0','1') CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_jobs`
--

INSERT INTO `contractor_jobs` (`id`, `contractor_id`, `contractor_quotation_id`, `status`, `payment_reminder`, `created_at`, `updated_at`) VALUES
(3, 4, 2, 'Completed', '0', '2023-08-16 16:33:14', '2023-08-31 18:36:00'),
(4, 8, 2, 'Completed', '0', '2023-08-16 16:40:14', '2023-08-31 18:36:00'),
(5, 4, 3, 'Completed', '0', '2023-08-16 18:14:26', '2023-09-01 16:45:00'),
(6, 4, 4, 'Completed', '0', '2023-09-15 17:34:33', '2023-09-18 15:18:00'),
(7, 8, 4, 'Completed', '0', '2023-09-15 17:52:24', '2023-09-18 15:18:00'),
(10, 4, 7, 'Completed', '0', '2023-09-18 12:34:15', '2023-09-18 12:49:00'),
(11, 8, 8, 'Completed', '0', '2023-09-18 12:35:20', '2023-09-18 12:49:01'),
(14, 14, 18, 'Completed', '0', '2023-11-06 15:02:32', '2023-11-24 11:50:47'),
(15, 14, 19, 'Completed', '0', '2023-11-06 15:04:04', '2023-11-24 11:50:48'),
(16, 14, 21, 'Completed', '0', '2023-11-06 15:31:36', '2023-11-24 11:55:03'),
(17, 14, 22, 'Completed', '0', '2023-11-06 16:45:45', '2023-11-24 11:55:03'),
(19, 12, 23, 'Completed', '0', '2023-11-27 20:20:36', '2023-11-28 05:00:31'),
(20, 22, 24, 'Completed', '0', '2023-11-27 21:07:58', '2023-11-28 05:00:31'),
(21, 22, 26, 'Completed', '0', '2023-11-28 16:00:26', '2023-11-29 05:00:08'),
(22, 1, 28, 'Completed', '0', '2023-11-28 17:59:30', '2023-11-29 05:05:15'),
(23, 1, 33, 'Completed', '0', '2023-11-29 11:28:53', '2023-11-30 05:00:48'),
(24, 1, 34, 'Completed', '0', '2023-11-29 12:08:38', '2023-11-30 05:05:11'),
(25, 1, 35, 'Completed', '0', '2023-11-29 12:26:58', '2023-11-30 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_job_wish_lists`
--

CREATE TABLE `contractor_job_wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractor_id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_job_wish_lists`
--

INSERT INTO `contractor_job_wish_lists` (`id`, `contractor_id`, `quotation_id`, `created_at`, `updated_at`) VALUES
(3, 12, 23, '2023-11-27 20:18:02', '2023-11-27 20:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_quotations`
--

CREATE TABLE `contractor_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `main_job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `shift_hour` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `payment_release` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `ni_req` varchar(255) DEFAULT NULL,
  `required_license` varchar(255) DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `chat` enum('0','1') NOT NULL DEFAULT '1',
  `req_officer` int(11) DEFAULT NULL,
  `status` enum('Open','Closed','Completed') NOT NULL DEFAULT 'Open',
  `quote_type` enum('Sub-Contractor','Multi-Contractor') NOT NULL DEFAULT 'Multi-Contractor',
  `post_to` varchar(255) NOT NULL DEFAULT 'Contractor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_quotations`
--

INSERT INTO `contractor_quotations` (`id`, `company_id`, `parent_id`, `main_job_id`, `title`, `description`, `area`, `location`, `post_code`, `start_date`, `end_date`, `start_time`, `end_time`, `days`, `shift_hour`, `rate`, `payment_release`, `type`, `ni_req`, `required_license`, `shift`, `name`, `contact`, `chat`, `req_officer`, `status`, `quote_type`, `post_to`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 2, 'Job for multi', 'Hi', 'Lahore', 'Hello', 'gzgs', '2023-08-16', '2023-08-18', '05:31 PM', '07:31 PM', 3, 2, 2, '3', 'Temporary', 'No', NULL, 'Morning', 'Hi', '0345757686', '1', 3, 'Completed', 'Multi-Contractor', 'Contractor', '2023-08-16 16:32:24', '2023-08-31 18:36:00'),
(3, 1, NULL, 3, 'Job for subcontractor', 'Ok', 'London', 'Ok', 'zgix', '2023-08-16', '2023-08-17', '07:12 PM', '09:13 PM', 1, 2, 36, '3', 'Permanent', 'No', NULL, 'Night', 'Ok', '0327575756', '0', 1, 'Completed', 'Sub-Contractor', 'Contractor', '2023-08-16 18:14:07', '2023-08-31 18:36:00'),
(4, 1, NULL, 4, 'Job for multi 22', 'hi', 'Lahore', 'Hello', 'hi', '2023-09-12', '2023-09-15', '06:30 AM', '03:30 PM', 3, 9, 3, '2', 'Permanent', 'Yes', 'SIA Security Guard License', 'Morning', 'Hello', '03228342544', '0', 5, 'Completed', 'Multi-Contractor', 'Contractor', '2023-09-15 17:31:19', '2023-09-18 15:18:00'),
(7, 1, NULL, 7, 'Job for sub', 'Hi', 'London', 'Hi', 'hello', '2023-09-13', '2023-09-17', '01:33 PM', '07:33 PM', 4, 6, 7, '3', 'Permanent', 'No', 'SIA CCTV operative License,SIA Door supervisors License', 'Night', 'Hello', '0355757585', '0', 2, 'Completed', 'Sub-Contractor', 'Contractor', '2023-09-18 12:33:48', '2023-09-18 14:14:00'),
(8, 4, 7, 7, 'Job for sub 2', 'Hi', 'London', 'Hi', 'hello', '2023-09-13', '2023-09-17', '01:33 PM', '07:33 PM', 4, 6, 6, '3', 'Permanent', 'No', NULL, 'Night', 'Hello', '0355757585', '0', 2, 'Completed', 'Sub-Contractor', 'Contractor', '2023-09-18 12:34:44', '2023-09-18 14:14:01'),
(9, 12, NULL, 9, 'Security', 'Hire security guard', 'Lahore', 'Civic center', '5400', '2023-09-26', '2023-09-27', '12:00 PM', '02:00 PM', 2, 2, 500, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '03244147352', '1', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-09-26 11:38:40', '2023-11-24 11:50:44'),
(10, 12, NULL, 10, 'Security guard', 'Vacancy available  guard', 'Lahore', 'Etc', '5400', '2023-09-26', '2023-09-27', '06:00 PM', '10:58 PM', 2, 4, 100, '1000', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Hafiz usman', '03244147352', '1', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-09-26 16:59:43', '2023-11-24 11:50:44'),
(11, 1, NULL, 11, 'Job for contractor', 'Job detail', 'Lahore', 'Township', '5400', '2023-10-29', '2023-10-30', '08:38 PM', '03:38 PM', 2, 19, 50, '5', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Akber', '03244147352', '1', 2, 'Completed', 'Sub-Contractor', 'Contractor', '2023-10-25 14:39:22', '2023-11-24 11:50:44'),
(12, 14, NULL, 12, 'Honey guard', 'Bodybuilder required', 'Lahore', 'Township lahore', '57700', '2023-10-26', '2023-10-28', '01:22 PM', '01:22 PM', 2, 24, 10, '50', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Afaq', '123456789', '1', 50, 'Completed', 'Multi-Contractor', 'Contractor', '2023-10-26 12:23:57', '2023-11-24 11:50:45'),
(13, 1, NULL, 13, 'for subcontract', 'subcontract', 'Lahore', 'abc', '5700', '2023-10-26', '2023-10-27', '03:27 PM', '03:27 AM', 2, 12, 10, '100', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'fakhar', 'fakhar', '1', 10, 'Completed', 'Sub-Contractor', 'Contractor', '2023-10-26 14:28:18', '2023-11-24 11:50:45'),
(14, 1, NULL, 14, 'for multicontract', 'multicontract', 'Lahore', 'abc', '57700', '2023-10-26', '2023-10-27', '03:31 PM', '03:31 AM', 1, 12, 10, '100', 'Temporary', 'Yes', NULL, 'Night', 'usman', '123456789', '1', 50, 'Completed', 'Multi-Contractor', 'Contractor', '2023-10-26 14:33:00', '2023-11-24 11:50:45'),
(15, 1, NULL, 15, 'Contractor job', 'Contractor detail', 'England - Bath', 'Address', '5400', '2023-10-27', '2023-10-31', '01:54 PM', '11:54 PM', 5, 10, 500, '5', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Security person name', '03235282870', '1', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-10-27 11:55:45', '2023-11-24 11:50:46'),
(17, 1, NULL, 17, 'SubContractor Jobs For worker', 'Detail of Sub Contractor', 'England - Bath', 'Sjjsnsjsjs', '6588', '2023-11-01', '2023-11-02', '03:52 PM', '06:52 PM', 1, 3, 500, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Ali Contractor', '123456789', '1', 10, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-01 14:53:38', '2023-11-24 11:50:47'),
(18, 1, NULL, 18, 'Job for contractor', 'Contractor details', 'England - Bath', 'Address hogig', '54000', '2023-11-04', '2023-11-06', '12:24 PM', '08:24 PM', 3, 8, 50, '1', 'Permanent', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '5252525252', '0', 1, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-03 11:25:44', '2023-11-24 11:50:47'),
(19, 1, NULL, 19, 'Job for sub contractor', 'Detail of sub contractor', 'England - Bath', 'Shjsjs', '67889', '2023-11-04', '2023-11-05', '06:47 AM', '05:47 PM', 1, 11, 100, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Sdff', '147852', '0', 1, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-03 17:49:13', '2023-11-24 11:50:48'),
(20, 14, 19, 19, 'Job for sub contractor', 'Detail of sub contractor', 'England - Bath', 'Shjsjs', '67889', '2023-11-04', '2023-11-05', '06:47 AM', '05:47 PM', 1, 11, 100, '1', 'Temporary', 'Yes', NULL, 'Night', 'Sdff', '147852', '0', 1, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-06 15:04:39', '2023-11-24 11:55:03'),
(21, 1, NULL, 21, 'Job for multi', 'Multi job detail', 'England - Bath', 'Bsjsjsj', '455', '2023-11-06', '2023-11-07', '03:25 PM', '03:25 PM', 1, 24, 500, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Gjj', '12345678', '0', 5, 'Completed', 'Multi-Contractor', 'Contractor', '2023-11-06 15:26:39', '2023-11-24 11:55:03'),
(22, 1, NULL, 22, 'Sub contractor', 'Details', 'England - Bath', 'Kxjxhxh', '54478', '2023-11-06', '2023-11-08', '03:36 PM', '07:36 PM', 3, 4, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Jdjx', '12546', '0', 2, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-06 15:37:35', '2023-11-24 11:55:03'),
(23, 1, NULL, 23, 'Sub contractor job', 'Description of sub', 'England - Bath', 'Address add', '5400', '2023-11-27', '2023-11-27', '11:02 AM', '04:02 PM', 1, 5, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '32325252525', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-27 11:03:10', '2023-11-28 05:00:31'),
(24, 12, NULL, 24, 'Asfand ko job', 'Description', 'England - Bath', 'Address', '54000', '2023-11-27', '2023-11-27', '09:07 PM', '02:07 AM', 1, 5, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '3232333', '0', 10, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-27 21:07:12', '2023-11-28 05:00:31'),
(25, 12, NULL, 25, 'New job create', 'Descruotion', 'England - Bath', 'Addres', '5400', '2023-11-27', '2023-11-27', '09:09 PM', '04:09 AM', 1, 7, 10, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '243464646', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-27 21:09:53', '2023-11-28 05:05:05'),
(26, 12, NULL, 26, 'Tuesday sub contrwtxor', 'Description', 'England - Bath', 'Qddeess', '5400', '2023-11-28', '2023-11-28', '03:32 PM', '10:32 PM', 1, 7, 500, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Asfand', '56567895', '0', 10, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 15:33:00', '2023-11-29 05:00:08'),
(27, 12, NULL, 27, '2nd test request', 'Description', 'England - Bath', 'Sffres', '5400', '2023-11-28', '2023-11-28', '03:58 PM', '11:50 PM', 1, 8, 50, '1', 'Temporary', 'No', 'SIA Security Guard License', 'Morning', 'Aki', '2353698741', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 15:59:36', '2023-11-29 05:05:15'),
(28, 22, 26, 26, 'Tuesday sub contrwtxor', 'Description', 'England - Bath', 'Qddeess', '5400', '2023-11-28', '2023-11-28', '03:32 PM', '10:32 PM', 1, 7, 500, '1', 'Temporary', 'Yes', NULL, 'Morning', 'Asfand', '56567895', '0', 10, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 16:06:29', '2023-11-29 05:05:15'),
(29, 22, NULL, 29, 'Multiple', 'Details', 'England - Bath', 'Ytrrr', '5400', '2023-11-28', '2023-11-28', '04:07 PM', '11:08 PM', 1, 7, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Tuiji', '56656', '0', 5, 'Completed', 'Multi-Contractor', 'Contractor', '2023-11-28 16:08:48', '2023-11-29 05:10:17'),
(30, 22, NULL, 30, 'Usman sub', 'Description', 'England - Bath', 'Address', '5400', '2023-11-28', '2023-11-28', '05:33 PM', '08:34 PM', 1, 3, 5, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Usman', '2355', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 17:34:49', '2023-11-29 05:10:17'),
(31, 22, NULL, 31, 'Asad job', 'Description', 'England - Bath', 'Address', '5400', '2023-11-28', '2023-11-28', '06:04 PM', '09:05 PM', 1, 3, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '53838', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 18:05:39', '2023-11-29 05:10:18'),
(32, 22, NULL, 32, 'Testing jon', 'Desjdjdj', 'England - Bath', 'Hsjsjs', '5400', '2023-11-28', '2023-11-28', '06:41 PM', '09:41 PM', 1, 3, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Hsjsjs', '535665', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-28 18:42:35', '2023-11-29 05:10:18'),
(33, 22, NULL, 33, 'Testing job for sub contrator', 'Details', 'England - Bath', 'Address', '5400', '2023-11-29', '2023-11-29', '11:13 AM', '07:10 PM', 1, 8, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '23568', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-29 11:15:21', '2023-11-30 05:00:48'),
(34, 22, NULL, 34, 'Rameez thekhedar', 'Description', 'England - Bath', 'Addrwss', '5400', '2023-11-29', '2023-11-29', '11:30 AM', '06:30 PM', 1, 7, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Asad', '565656', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-29 11:33:00', '2023-11-30 05:05:11'),
(35, 22, NULL, 35, 'Testing job', 'Detail', 'England - Bath', 'Addres', '5400', '2023-11-29', '2023-11-29', '12:24 PM', '06:24 PM', 1, 6, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '2356555', '0', 5, 'Completed', 'Sub-Contractor', 'Contractor', '2023-11-29 12:25:11', '2023-11-30 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>What is Honey Guard?</strong></p>', '<ul><li>Honey Guard is the platform where we as a Company can hire officer.</li></ul>', '2023-06-21 09:33:30', '2023-06-21 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `favorit_officers`
--

CREATE TABLE `favorit_officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_packages`
--

CREATE TABLE `job_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `hold` int(11) NOT NULL DEFAULT 0,
  `used` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_packages`
--

INSERT INTO `job_packages` (`id`, `company_id`, `total`, `hold`, `used`, `created_at`, `updated_at`) VALUES
(1, 1, 1625, 0, 1, '2023-06-09 14:25:30', '2023-12-15 05:00:22'),
(3, 3, 98, 1, 1, '2023-06-12 11:01:48', '2023-10-28 10:28:41'),
(4, 4, 825, 0, 4, '2023-06-16 09:21:31', '2023-11-24 12:00:01'),
(5, 5, 0, 0, 0, '2023-06-27 13:05:45', '2023-06-27 13:05:45'),
(6, 6, 0, 0, 0, '2023-06-27 13:05:59', '2023-07-11 15:25:59'),
(7, 7, 0, 0, 0, '2023-07-06 11:50:14', '2023-07-06 11:50:14'),
(8, 8, 1200, -12, 4, '2023-07-06 11:51:24', '2023-09-18 15:18:01'),
(10, 10, 0, 0, 0, '2023-09-21 17:56:15', '2023-09-21 17:56:15'),
(12, 12, 69, -5, 1, '2023-09-26 11:14:25', '2023-11-29 05:00:08'),
(13, 13, 0, 0, 0, '2023-09-28 11:58:21', '2023-09-28 11:58:21'),
(14, 14, 199, -24, 0, '2023-10-26 10:56:03', '2023-11-24 12:00:03'),
(16, 16, 0, 0, 0, '2023-11-23 12:33:43', '2023-11-23 12:33:43'),
(20, 21, 0, 0, 0, '2023-11-27 12:47:35', '2023-11-27 12:47:35'),
(21, 22, 78, -9, 1, '2023-11-27 21:04:03', '2023-11-30 05:05:11'),
(24, 25, 0, 0, 0, '2023-12-11 00:33:18', '2023-12-11 00:33:18'),
(25, 26, 100, 0, 0, '2023-12-12 13:44:34', '2023-12-13 05:00:40'),
(26, 28, 98, 2, 0, '2023-12-19 19:35:46', '2023-12-19 19:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `job_requests`
--

CREATE TABLE `job_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Open','Accepted','Rejected') NOT NULL DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_requests`
--

INSERT INTO `job_requests` (`id`, `officer_id`, `job_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 54, 'Open', '2023-10-26 14:21:59', '2023-10-26 14:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `licenses`
--

INSERT INTO `licenses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SIA Security Guard License', NULL, NULL),
(2, 'SIA Close Protection License', '2023-07-04 12:58:50', '2023-07-04 12:58:50'),
(4, 'SIA CCTV operative License', '2023-07-04 15:50:04', '2023-07-04 15:50:04'),
(5, 'SIA Door supervisors License', '2023-07-04 15:50:23', '2023-07-04 15:50:23'),
(6, 'Steward', '2023-07-04 15:50:49', '2023-07-04 15:50:49');

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
(2, '2021_12_17_063251_create_admins_table', 1),
(3, '2021_12_18_062039_password_resets', 1),
(4, '2021_12_20_060915_create_privacy_policies_table', 1),
(5, '2021_12_20_085741_create_term_conditions_table', 1),
(6, '2023_01_10_115236_create_users_table', 1),
(7, '2023_01_18_102651_create_faqs_table', 1),
(8, '2023_01_18_115549_create_abouts_table', 1),
(9, '2023_02_06_123601_create_companies_table', 1),
(10, '2023_02_08_081125_create_packages_table', 1),
(11, '2023_02_08_122312_create_banks_table', 1),
(12, '2023_02_24_140046_create_officer_documents_table', 1),
(13, '2023_03_07_113136_create_contractor_quotations_table', 1),
(14, '2023_03_07_113158_create_contractor_applies_table', 1),
(15, '2023_03_07_113224_create_officer_quotations_table', 1),
(16, '2023_03_07_113239_create_officer_applies_table', 1),
(17, '2023_03_10_063957_create_contractor_job_wish_lists_table', 1),
(18, '2023_03_10_064009_create_officer_job_wish_lists_table', 1),
(19, '2023_03_17_064133_create_favorit_officers_table', 1),
(20, '2023_03_19_064747_create_chat_favorites_table', 1),
(21, '2023_03_19_064804_create_chat_groups_table', 1),
(22, '2023_03_19_064821_create_chat_messages_table', 1),
(23, '2023_03_21_111058_create_officer_jobs_table', 1),
(24, '2023_03_28_093447_create_contractor_jobs_table', 1),
(25, '2023_04_26_113238_create_job_requests_table', 1),
(26, '2023_05_10_104331_create_contractor_bill_summaries_table', 1),
(27, '2023_05_10_104339_create_officer_bill_summaries_table', 1),
(28, '2023_05_15_125422_create_notifications_table', 1),
(29, '2023_05_17_083843_create_job_packages_table', 1),
(30, '2023_05_17_114904_create_attendances_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contractor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `officer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `officer_job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contractor_job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `receiver` enum('Company','Officer','Contractor') DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `attendance_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `company_id`, `contractor_id`, `officer_id`, `officer_job_id`, `contractor_job_id`, `title`, `body`, `receiver`, `type`, `seen`, `attendance_id`, `created_at`, `updated_at`) VALUES
(2295, 1, 4, NULL, NULL, 7, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '1', NULL, '2023-09-18 14:14:00', '2023-09-18 14:17:48'),
(2296, 1, NULL, NULL, NULL, 7, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '1', NULL, '2023-09-18 14:14:01', '2023-09-18 14:14:55'),
(2297, 4, 8, NULL, NULL, 8, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '1', NULL, '2023-09-18 14:14:01', '2023-09-18 14:22:14'),
(2298, 4, NULL, NULL, NULL, 8, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '1', NULL, '2023-09-18 14:14:01', '2023-09-18 14:16:47'),
(2299, 8, NULL, 2, 48, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '1', NULL, '2023-09-18 14:14:01', '2023-09-21 10:55:30'),
(2300, 8, NULL, 12, 48, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-09-18 14:14:02', '2023-09-18 14:14:02'),
(2301, 8, NULL, NULL, 48, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '1', NULL, '2023-09-18 14:14:02', '2023-09-18 14:27:29'),
(2302, 1, 4, NULL, NULL, 4, 'Completed', 'Your job has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '1', NULL, '2023-09-18 15:18:00', '2023-09-18 15:21:17'),
(2303, 1, 8, NULL, NULL, 4, 'Completed', 'Your job has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-09-18 15:18:00', '2023-09-18 15:18:00'),
(2304, 1, NULL, NULL, NULL, 4, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '1', NULL, '2023-09-18 15:18:00', '2023-09-18 15:18:52'),
(2305, 4, NULL, 2, 45, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '1', NULL, '2023-09-18 15:18:01', '2023-09-21 17:36:08'),
(2306, 4, NULL, 12, 45, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(2307, 4, NULL, NULL, 45, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(2308, 8, NULL, 13, 46, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(2309, 8, NULL, NULL, 46, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(2310, 8, NULL, 2, 48, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Job for sub 3\"', 'Company', 'Officer Attendance', '0', NULL, '2023-09-19 11:48:43', '2023-09-19 11:48:43'),
(2320, 12, 1, NULL, NULL, 9, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-09-26 14:20:09', '2023-09-26 16:55:30'),
(2321, 1, NULL, 19, 50, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-09-27 18:17:05', '2023-09-27 18:17:20'),
(2322, 1, NULL, 19, 50, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-09-27 18:17:21', '2023-09-27 18:17:56'),
(2323, 1, NULL, 19, 50, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Job for security\"', 'Company', 'Officer Attendance', '1', NULL, '2023-09-28 09:23:50', '2023-09-28 11:56:55'),
(2324, 1, NULL, 2, 53, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-25 14:34:42', '2023-10-25 14:35:12'),
(2325, 1, NULL, 2, 53, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-10-25 14:35:39', '2023-10-26 11:57:00'),
(2326, 4, NULL, 2, 52, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-10-25 14:41:26', '2023-10-25 14:41:26'),
(2327, 1, NULL, 2, 54, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-26 11:55:57', '2023-10-26 12:26:57'),
(2328, 1, NULL, 2, 54, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-10-26 12:28:36', '2023-10-26 12:29:28'),
(2329, 1, NULL, 2, 54, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Security guard required\"', 'Company', 'Officer Attendance', '1', NULL, '2023-10-26 12:34:34', '2023-10-26 12:41:29'),
(2330, 1, NULL, 2, 54, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Security guard required\"', 'Company', 'Early Going Request', '1', 37, '2023-10-26 12:35:22', '2023-10-26 12:42:24'),
(2331, NULL, NULL, 2, 54, NULL, 'Request Accepted', 'Your early going request for the job \"Security guard required\" has been accepted', 'Officer', 'Early Going Request Response', '1', NULL, '2023-10-26 12:44:19', '2023-10-26 12:44:28'),
(2332, 1, NULL, 2, 43, NULL, 'Payment Reminder', 'You have a pending payment of the officer \"Tayyab\" for the job \"Job for officer 111\"', 'Company', 'Payment Reminder', '1', NULL, '2023-10-26 14:06:08', '2023-10-26 14:06:18'),
(2333, 1, NULL, 2, 54, NULL, 'Job Request', 'Daniyal request you for a job', 'Officer', 'Job Request', '1', NULL, '2023-10-26 14:11:43', '2023-10-26 14:11:54'),
(2334, 1, NULL, 2, 54, NULL, 'Job Request', 'Daniyal request you for a job', 'Officer', 'Job Request', '1', NULL, '2023-10-26 14:21:59', '2023-10-26 14:22:06'),
(2335, 14, 1, NULL, NULL, 12, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-10-26 14:41:16', '2023-10-26 14:41:34'),
(2336, 1, 1, NULL, NULL, 12, 'Declined', 'Afaq Declined your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-10-26 14:41:52', '2023-10-26 14:41:57'),
(2337, 1, NULL, 2, 55, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-26 14:52:46', '2023-10-26 14:57:22'),
(2340, 1, NULL, 2, 55, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-10-26 14:57:25', '2023-10-26 14:57:48'),
(2341, 1, NULL, 2, 55, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"cricket\"', 'Company', 'Officer Attendance', '1', NULL, '2023-10-26 14:58:25', '2023-10-26 14:58:34'),
(2362, NULL, NULL, 4, NULL, NULL, 'Welcome Message', 'Welcome you for joining Honey Guards', 'Officer', 'admin', '0', NULL, '2023-10-27 23:14:58', '2023-10-27 23:14:58'),
(2363, NULL, NULL, 19, NULL, NULL, 'Welcome Message', 'Welcome you for joining Honey Guards', 'Officer', 'admin', '0', NULL, '2023-10-27 23:14:58', '2023-10-27 23:14:58'),
(2366, 1, NULL, NULL, NULL, NULL, 'Welcome Message', 'Welcome you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:15:17', '2023-10-27 23:15:17'),
(2368, 5, NULL, NULL, NULL, NULL, 'Welcome Message', 'Welcome you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:15:18', '2023-10-27 23:15:18'),
(2369, 10, NULL, NULL, NULL, NULL, 'Welcome Message', 'Welcome you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:15:18', '2023-10-27 23:15:18'),
(2371, 1, NULL, NULL, NULL, NULL, 'Welcome', 'Thank you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:16:12', '2023-10-27 23:16:12'),
(2373, 5, NULL, NULL, NULL, NULL, 'Welcome', 'Thank you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:16:13', '2023-10-27 23:16:13'),
(2374, 10, NULL, NULL, NULL, NULL, 'Welcome', 'Thank you for joining Honey Guards', 'Company', 'admin', '0', NULL, '2023-10-27 23:16:13', '2023-10-27 23:16:13'),
(2381, 1, NULL, 2, 58, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-28 12:09:17', '2023-10-30 14:29:26'),
(2382, 14, NULL, 2, 59, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-10-28 12:13:46', '2023-10-28 12:13:46'),
(2383, 14, NULL, 2, 59, NULL, 'Application Declined', 'Afaq Rejected Your Application', 'Officer', 'Application Declined', '1', NULL, '2023-10-28 12:16:13', '2023-10-28 12:16:35'),
(2387, 1, NULL, 2, 63, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-10-30 14:34:04', '2023-10-30 14:34:04'),
(2388, 1, NULL, 2, 63, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-10-30 15:03:29', '2023-10-30 15:03:29'),
(2389, 1, NULL, 2, 63, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Hire officer\"', 'Company', 'Officer Attendance', '0', NULL, '2023-10-30 16:03:55', '2023-10-30 16:03:55'),
(2390, 1, NULL, 2, 63, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Hire officer\"', 'Company', 'Early Going Request', '1', 43, '2023-10-30 16:05:31', '2023-10-30 16:05:35'),
(2391, NULL, NULL, 2, 63, NULL, 'Request Accepted', 'Your early going request for the job \"Hire officer\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-10-30 16:05:40', '2023-10-30 16:05:40'),
(2392, 1, NULL, 2, 64, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-30 16:58:05', '2023-10-30 16:58:11'),
(2393, 1, NULL, 2, 64, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-10-30 16:58:15', '2023-10-30 16:58:15'),
(2394, 1, NULL, 2, 65, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-10-30 17:18:40', '2023-10-30 17:18:50'),
(2395, 1, NULL, 2, 65, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-10-30 17:18:52', '2023-10-30 17:18:52'),
(2396, 1, NULL, 2, 65, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Cook hiring\"', 'Company', 'Officer Attendance', '1', NULL, '2023-10-30 17:21:33', '2023-10-30 17:22:45'),
(2397, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '0', 44, '2023-10-31 11:44:21', '2023-10-31 11:44:21'),
(2398, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '0', 44, '2023-10-31 11:44:22', '2023-10-31 11:44:22'),
(2399, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '0', 44, '2023-10-31 11:44:23', '2023-10-31 11:44:23'),
(2400, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '0', 44, '2023-10-31 12:02:25', '2023-10-31 12:02:25'),
(2401, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '1', 44, '2023-10-31 12:14:59', '2023-10-31 12:15:40'),
(2402, NULL, NULL, 2, 65, NULL, 'Request Accepted', 'Your early going request for the job \"Cook hiring\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-10-31 12:15:43', '2023-10-31 12:15:43'),
(2403, 1, NULL, 2, 65, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Cook hiring\"', 'Company', 'Officer Attendance', '0', NULL, '2023-10-31 15:12:39', '2023-10-31 15:12:39'),
(2404, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '1', 45, '2023-10-31 15:49:22', '2023-10-31 15:50:08'),
(2405, NULL, NULL, 2, 65, NULL, 'Request Accepted', 'Your early going request for the job \"Cook hiring\" has been accepted', 'Officer', 'Early Going Request Response', '1', NULL, '2023-10-31 15:50:13', '2023-11-01 09:37:47'),
(2406, 1, NULL, 2, 65, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Cook hiring\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-01 09:49:04', '2023-11-01 09:49:04'),
(2407, 1, NULL, 2, 65, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Cook hiring\"', 'Company', 'Early Going Request', '1', 46, '2023-11-01 09:49:44', '2023-11-01 09:50:10'),
(2408, NULL, NULL, 2, 65, NULL, 'Request Accepted', 'Your early going request for the job \"Cook hiring\" has been accepted', 'Officer', 'Early Going Request Response', '1', NULL, '2023-11-01 09:50:12', '2023-11-01 12:17:01'),
(2409, 1, NULL, 2, 66, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-01 10:41:48', '2023-11-01 10:41:51'),
(2410, 1, NULL, 2, 66, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-01 10:41:53', '2023-11-01 10:41:53'),
(2411, 1, NULL, 2, 66, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Security Person\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-01 10:48:24', '2023-11-01 10:48:24'),
(2412, 1, NULL, 2, 66, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Security Person\"', 'Company', 'Early Going Request', '1', 47, '2023-11-01 11:02:15', '2023-11-01 11:02:31'),
(2413, NULL, NULL, 2, 66, NULL, 'Request Accepted', 'Your early going request for the job \"Security Person\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-01 11:02:35', '2023-11-01 11:02:35'),
(2414, 1, NULL, 2, 66, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Security Person\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-01 11:48:19', '2023-11-01 11:48:19'),
(2415, 1, NULL, 2, 65, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Cook hiring\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-01 12:06:30', '2023-11-01 12:14:24'),
(2416, 1, NULL, 2, 67, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-01 12:14:17', '2023-11-02 14:35:07'),
(2417, 1, NULL, 2, 67, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-01 12:14:53', '2023-11-01 12:14:53'),
(2418, 1, NULL, 2, 67, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Worker\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-01 12:17:29', '2023-11-01 12:18:54'),
(2419, 1, NULL, 2, 67, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Worker\"', 'Company', 'Early Going Request', '1', 54, '2023-11-01 12:18:44', '2023-11-01 12:19:21'),
(2420, NULL, NULL, 2, 67, NULL, 'Request Accepted', 'Your early going request for the job \"Worker\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-01 12:19:23', '2023-11-01 12:19:23'),
(2427, 1, NULL, 2, 67, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Worker\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-02 11:24:25', '2023-11-02 14:35:04'),
(2428, 1, NULL, 2, 69, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-11-02 14:27:49', '2023-11-02 14:27:49'),
(2429, 1, NULL, 2, 69, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-11-02 14:28:44', '2023-11-02 14:28:48'),
(2430, 1, NULL, 2, 69, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Float check\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-02 14:30:00', '2023-11-02 14:35:01'),
(2431, 1, NULL, 2, 69, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Float check\"', 'Company', 'Early Going Request', '1', 56, '2023-11-02 14:30:46', '2023-11-02 14:30:52'),
(2432, NULL, NULL, 2, 69, NULL, 'Request Rejected', 'Your early going request for the job \"Float check\" has been rejected', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-02 14:31:01', '2023-11-02 14:31:01'),
(2433, 1, NULL, 2, 70, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-02 14:31:45', '2023-11-02 14:31:48'),
(2434, 1, NULL, 2, 70, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-11-02 14:31:50', '2023-11-02 14:31:53'),
(2435, 1, NULL, 2, 70, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Floating done\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-02 14:32:14', '2023-11-02 14:34:59'),
(2436, 1, NULL, 2, 70, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Floating done\"', 'Company', 'Early Going Request', '1', 57, '2023-11-02 14:32:50', '2023-11-02 14:32:53'),
(2437, NULL, NULL, 2, 70, NULL, 'Request Accepted', 'Your early going request for the job \"Floating done\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-02 14:32:56', '2023-11-02 14:32:56'),
(2438, 1, NULL, 2, 70, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Floating done\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-02 14:33:14', '2023-11-02 14:34:56'),
(2441, 1, NULL, 2, 71, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-03 14:06:18', '2023-11-03 14:06:22'),
(2442, 1, NULL, 2, 71, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-11-03 14:06:24', '2023-11-03 14:06:29'),
(2455, 1, NULL, 2, 79, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-03 17:42:54', '2023-11-03 17:43:57'),
(2456, 1, NULL, 2, 79, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-03 17:45:12', '2023-11-03 17:45:12'),
(2459, 1, 14, NULL, NULL, 18, 'Application', 'Afaq Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-06 15:02:23', '2023-11-06 15:02:27'),
(2460, 1, 14, NULL, NULL, 18, 'Approved', 'Daniyal Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-06 15:02:32', '2023-11-06 15:02:52'),
(2461, 1, 14, NULL, NULL, 19, 'Application', 'Afaq Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-06 15:03:49', '2023-11-06 15:03:54'),
(2462, 1, 14, NULL, NULL, 19, 'Approved', 'Daniyal Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-06 15:04:04', '2023-11-06 15:04:22'),
(2463, 1, 14, NULL, NULL, 21, 'Application', 'Afaq Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-06 15:27:47', '2023-11-06 15:27:53'),
(2464, 1, 14, NULL, NULL, 21, 'Approved', 'Daniyal Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-06 15:31:36', '2023-11-06 15:31:44'),
(2465, 1, 14, NULL, NULL, 22, 'Application', 'Afaq Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-06 15:38:45', '2023-11-06 15:38:50'),
(2466, 1, 14, NULL, NULL, 22, 'Approved', 'Daniyal Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-06 16:45:46', '2023-11-13 12:04:29'),
(2474, 12, NULL, NULL, NULL, 9, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:44', '2023-11-24 11:50:44'),
(2475, 12, NULL, NULL, NULL, 10, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:44', '2023-11-24 11:50:44'),
(2476, 1, NULL, NULL, NULL, 11, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:44', '2023-11-24 11:50:44'),
(2477, 14, NULL, NULL, NULL, 12, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:45', '2023-11-24 11:50:45'),
(2478, 1, NULL, NULL, NULL, 13, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:45', '2023-11-24 11:50:45'),
(2479, 1, NULL, NULL, NULL, 14, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:45', '2023-11-24 11:50:45'),
(2480, 1, NULL, NULL, NULL, 15, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:46', '2023-11-24 11:50:46'),
(2481, 1, NULL, NULL, NULL, 17, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:47', '2023-11-24 11:50:47'),
(2482, 1, 14, NULL, NULL, 18, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-11-24 11:50:47', '2023-11-24 11:50:47'),
(2483, 1, NULL, NULL, NULL, 18, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:50:47', '2023-11-24 11:50:47'),
(2484, 14, NULL, NULL, NULL, 20, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:55:03', '2023-11-24 11:55:03'),
(2485, 1, 14, NULL, NULL, 21, 'Completed', 'Your job has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-11-24 11:55:03', '2023-11-24 11:55:03'),
(2486, 1, NULL, NULL, NULL, 21, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 11:55:03', '2023-11-24 11:55:03'),
(2487, 4, NULL, NULL, 52, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:01', '2023-11-24 12:00:01'),
(2488, 1, NULL, NULL, 58, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:01', '2023-11-24 12:00:01'),
(2489, 14, NULL, NULL, 59, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:02', '2023-11-24 12:00:02'),
(2490, 14, NULL, NULL, 62, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:02', '2023-11-24 12:00:02'),
(2491, 1, NULL, NULL, 77, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:02', '2023-11-24 12:00:02'),
(2492, 1, NULL, NULL, 78, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:02', '2023-11-24 12:00:02'),
(2493, 1, NULL, 2, 79, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(2494, 1, NULL, NULL, 79, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(2495, 14, NULL, NULL, 80, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(2496, 14, NULL, NULL, 81, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(2497, 1, NULL, NULL, 82, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(2498, 1, NULL, NULL, 83, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-24 12:00:04', '2023-11-24 12:00:04'),
(2502, 1, NULL, 2, 85, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-11-24 12:38:07', '2023-11-24 12:38:07'),
(2503, 1, NULL, 33, 85, NULL, 'Application', 'Ghj Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-11-24 12:42:50', '2023-11-24 12:42:50'),
(2504, 1, NULL, 2, 85, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-24 12:43:38', '2023-11-24 12:43:38'),
(2505, 1, NULL, 33, 85, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-24 12:43:44', '2023-11-24 12:43:44'),
(2506, 1, NULL, 2, 85, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Create job\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-24 12:45:59', '2023-11-24 12:45:59'),
(2507, 1, NULL, 2, 85, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Create job\"', 'Company', 'Early Going Request', '1', 61, '2023-11-24 12:48:02', '2023-11-24 12:48:20'),
(2508, NULL, NULL, 2, 85, NULL, 'Request Accepted', 'Your early going request for the job \"Create job\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-24 12:48:24', '2023-11-24 12:48:24'),
(2509, 1, NULL, 2, 85, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Create job\"', 'Company', 'Officer Attendance', '1', NULL, '2023-11-24 12:48:48', '2023-11-24 12:51:52'),
(2510, 1, NULL, 33, 86, NULL, 'Application', 'Ghj Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-24 12:58:51', '2023-11-24 12:58:54'),
(2511, 1, NULL, 33, 86, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-11-24 12:58:57', '2023-11-24 12:59:01'),
(2512, 1, NULL, 33, 86, NULL, 'Officer Attendance', 'Officer \"Ghj\" marked his/her start job attendance for the job \"New job create\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-24 12:59:50', '2023-11-24 12:59:50'),
(2513, 1, NULL, 2, 87, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-24 13:05:46', '2023-11-24 13:05:49'),
(2514, 1, NULL, 2, 87, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '1', NULL, '2023-11-24 13:05:51', '2023-11-24 13:05:54'),
(2515, 1, NULL, 2, 85, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2516, 1, NULL, 33, 85, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2517, 1, NULL, NULL, 85, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2518, 1, NULL, 33, 86, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2519, 1, NULL, NULL, 86, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2520, 1, NULL, 2, 87, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(2521, 1, NULL, NULL, 87, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '1', NULL, '2023-11-25 05:00:28', '2023-11-27 10:38:46'),
(2524, 1, NULL, 2, 88, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-27 11:41:25', '2023-11-27 11:42:45'),
(2525, 1, NULL, 2, 88, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-27 11:42:50', '2023-11-27 11:42:50'),
(2526, 1, NULL, 2, 88, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Officer job\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-27 11:45:48', '2023-11-27 11:45:48'),
(2527, 1, NULL, 2, 88, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Officer job\"', 'Company', 'Early Going Request', '1', 63, '2023-11-27 11:46:02', '2023-11-27 11:46:32'),
(2528, NULL, NULL, 2, 88, NULL, 'Request Accepted', 'Your early going request for the job \"Officer job\" has been accepted', 'Officer', 'Early Going Request Response', '0', NULL, '2023-11-27 11:46:38', '2023-11-27 11:46:38'),
(2529, 1, NULL, 2, 88, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her end job attendance for the job \"Officer job\"', 'Company', 'Officer Attendance', '0', NULL, '2023-11-27 11:47:55', '2023-11-27 11:47:55'),
(2530, 1, 12, NULL, NULL, 23, 'Application', 'Company Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-27 20:17:14', '2023-11-27 20:20:24'),
(2531, 1, 12, NULL, NULL, 23, 'Approved', 'Daniyal Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-27 20:20:36', '2023-11-27 20:21:08'),
(2532, 12, NULL, 20, 89, NULL, 'Application', 'Ali Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-27 20:41:00', '2023-11-27 20:41:03'),
(2533, 12, NULL, 20, 89, NULL, 'Application Accepted', 'Company Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-27 20:41:08', '2023-11-27 20:41:08'),
(2534, 12, 22, NULL, NULL, 24, 'Application', 'Asfand Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-27 21:07:50', '2023-11-27 21:07:55'),
(2535, 1, 22, NULL, NULL, 24, 'Approved', 'Company Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-27 21:07:58', '2023-11-28 17:31:40'),
(2536, 1, 12, NULL, NULL, 23, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-11-28 05:00:31', '2023-11-28 05:00:31'),
(2537, 1, NULL, NULL, NULL, 23, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-28 05:00:31', '2023-11-28 05:00:31'),
(2538, 12, NULL, NULL, NULL, 25, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(2539, 1, NULL, 2, 88, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(2540, 1, NULL, NULL, 88, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(2541, 12, NULL, 20, 89, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(2542, 12, NULL, NULL, 89, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(2543, 12, 22, NULL, NULL, 26, 'Application', 'Asfand Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-28 16:00:13', '2023-11-28 16:00:18'),
(2544, 1, 22, NULL, NULL, 26, 'Approved', 'Company Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-28 16:00:26', '2023-11-28 16:00:48'),
(2545, 22, 1, NULL, NULL, 28, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-28 17:56:20', '2023-11-28 17:56:39'),
(2546, 1, 1, NULL, NULL, 28, 'Approved', 'Asfand Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-28 17:59:30', '2023-11-28 18:00:14'),
(2547, 12, NULL, NULL, NULL, 27, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:05:15', '2023-11-29 05:05:15'),
(2548, 22, NULL, NULL, NULL, 29, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:10:17', '2023-11-29 05:10:17'),
(2549, 22, NULL, NULL, NULL, 30, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:10:17', '2023-11-29 05:10:17'),
(2550, 22, NULL, NULL, NULL, 31, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:10:18', '2023-11-29 05:10:18'),
(2551, 22, NULL, NULL, NULL, 32, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:10:18', '2023-11-29 05:10:18'),
(2552, 22, NULL, NULL, 90, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-29 05:10:18', '2023-11-29 05:10:18'),
(2553, 22, 1, NULL, NULL, 33, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-29 11:28:40', '2023-11-29 11:28:45'),
(2554, 1, 1, NULL, NULL, 33, 'Approved', 'Asfand Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-29 11:28:53', '2023-11-29 11:29:06'),
(2555, 22, 1, NULL, NULL, 34, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '1', NULL, '2023-11-29 12:07:45', '2023-11-29 12:08:32'),
(2556, 1, 1, NULL, NULL, 34, 'Approved', 'Asfand Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-29 12:08:38', '2023-11-29 12:15:19'),
(2557, 1, NULL, 2, 91, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-29 12:17:21', '2023-11-29 12:17:24'),
(2558, 1, NULL, 2, 91, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-29 12:17:26', '2023-11-29 12:17:26'),
(2559, 22, 1, NULL, NULL, 35, 'Application', 'Daniyal Apply on your posted job', 'Company', 'Contractor Application', '0', NULL, '2023-11-29 12:26:23', '2023-11-29 12:26:23'),
(2560, 1, 1, NULL, NULL, 35, 'Approved', 'Asfand Approved your Application', 'Contractor', 'Contractor Application', '1', NULL, '2023-11-29 12:26:58', '2023-11-29 12:29:04'),
(2561, 1, NULL, 2, 92, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-11-29 12:30:27', '2023-11-29 12:30:35'),
(2562, 1, NULL, 2, 92, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-11-29 12:30:38', '2023-11-29 12:30:38'),
(2563, 22, 1, NULL, NULL, 34, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-11-30 05:05:11', '2023-11-30 05:05:11'),
(2564, 22, NULL, NULL, NULL, 34, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:11', '2023-11-30 05:05:11'),
(2565, 22, 1, NULL, NULL, 35, 'Completed', 'Your job as a Contractor has been completed and billing summary generated', 'Contractor', 'Contractor Completed', '0', NULL, '2023-11-30 05:05:11', '2023-11-30 05:05:11'),
(2566, 22, NULL, NULL, NULL, 35, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:12', '2023-11-30 05:05:12'),
(2567, 1, NULL, 19, 50, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-30 05:05:12', '2023-11-30 05:05:12'),
(2568, 1, NULL, NULL, 50, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:13', '2023-11-30 05:05:13'),
(2569, 1, NULL, NULL, 51, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:13', '2023-11-30 05:05:13'),
(2570, 1, NULL, 2, 91, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-30 05:05:13', '2023-11-30 05:05:13'),
(2571, 1, NULL, NULL, 91, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:13', '2023-11-30 05:05:13'),
(2572, 1, NULL, 2, 92, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-11-30 05:05:14', '2023-11-30 05:05:14'),
(2573, 1, NULL, NULL, 92, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-11-30 05:05:14', '2023-11-30 05:05:14'),
(2574, 1, NULL, 2, 93, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '1', NULL, '2023-12-04 17:14:32', '2023-12-04 17:15:13'),
(2575, 1, NULL, 2, 93, NULL, 'Application Accepted', 'Daniyal Accepted Your Application', 'Officer', 'Application Accepted', '0', NULL, '2023-12-04 17:15:16', '2023-12-04 17:15:16'),
(2576, 1, NULL, 2, 93, NULL, 'Officer Attendance', 'Officer \"Tayyab\" marked his/her start job attendance for the job \"Usman job\"', 'Company', 'Officer Attendance', '0', NULL, '2023-12-04 17:15:52', '2023-12-04 17:15:52'),
(2577, 1, NULL, 2, 93, NULL, 'Early Going Request', 'Officer \"Tayyab\" has been requested to early going for the job \"Usman job\"', 'Company', 'Early Going Request', '0', 64, '2023-12-04 17:17:03', '2023-12-04 17:17:03'),
(2584, 1, NULL, 2, 93, NULL, 'Completed', 'Your job has been completed and billing summary generated', 'Officer', 'Officer Completed', '0', NULL, '2023-12-05 05:00:16', '2023-12-05 05:00:16'),
(2585, 1, NULL, NULL, 93, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-12-05 05:00:16', '2023-12-05 05:00:16'),
(2613, 26, NULL, NULL, 98, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-12-13 05:00:40', '2023-12-13 05:00:40'),
(2614, NULL, NULL, 40, NULL, NULL, 'License Expired', 'Your license \"SIA CCTV operative License\" has been expired', 'Officer', 'License Expired', '1', NULL, '2023-12-13 18:05:41', '2023-12-14 15:00:06'),
(2615, NULL, NULL, 40, NULL, NULL, 'License Expired', 'Your license \"SIA Door supervisors License\" has been expired', 'Officer', 'License Expired', '1', NULL, '2023-12-14 05:00:38', '2023-12-14 15:00:05'),
(2616, 1, NULL, NULL, 99, NULL, 'Completed', 'Your posted job has been completed and billing summary generated', 'Company', 'Company Completed', '0', NULL, '2023-12-15 05:00:22', '2023-12-15 05:00:22'),
(2617, 28, NULL, 2, 100, NULL, 'Application', 'Tayyab Apply on your posted job', 'Company', 'Application', '0', NULL, '2023-12-19 19:47:48', '2023-12-19 19:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `officer_applies`
--

CREATE TABLE `officer_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Pending','Declined','Approved') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_applies`
--

INSERT INTO `officer_applies` (`id`, `quotation_id`, `officer_id`, `status`, `created_at`, `updated_at`) VALUES
(31, 43, 2, 'Approved', '2023-09-15 11:06:07', '2023-09-15 11:06:13'),
(32, 45, 2, 'Approved', '2023-09-15 17:36:17', '2023-09-15 17:37:08'),
(33, 45, 12, 'Approved', '2023-09-15 17:51:01', '2023-09-15 17:51:07'),
(34, 46, 13, 'Approved', '2023-09-15 17:53:19', '2023-09-15 17:53:24'),
(37, 48, 2, 'Approved', '2023-09-18 12:36:12', '2023-09-18 12:36:18'),
(38, 48, 12, 'Approved', '2023-09-18 12:41:07', '2023-09-18 12:41:14'),
(40, 50, 19, 'Approved', '2023-09-27 18:17:05', '2023-09-27 18:17:21'),
(41, 53, 2, 'Approved', '2023-10-25 14:34:42', '2023-10-25 14:35:39'),
(42, 52, 2, 'Pending', '2023-10-25 14:41:26', '2023-10-25 14:41:26'),
(43, 54, 2, 'Approved', '2023-10-26 11:55:57', '2023-10-26 12:28:36'),
(44, 55, 2, 'Approved', '2023-10-26 14:52:46', '2023-10-26 14:57:25'),
(50, 58, 2, 'Pending', '2023-10-28 12:09:17', '2023-10-28 12:09:17'),
(51, 59, 2, 'Declined', '2023-10-28 12:13:46', '2023-10-28 12:16:13'),
(53, 63, 2, 'Approved', '2023-10-30 14:34:04', '2023-10-30 15:03:29'),
(54, 64, 2, 'Approved', '2023-10-30 16:58:05', '2023-10-30 16:58:15'),
(55, 65, 2, 'Approved', '2023-10-30 17:18:40', '2023-10-30 17:18:52'),
(56, 66, 2, 'Approved', '2023-11-01 10:41:48', '2023-11-01 10:41:53'),
(57, 67, 2, 'Approved', '2023-11-01 12:14:17', '2023-11-01 12:14:53'),
(59, 69, 2, 'Approved', '2023-11-02 14:27:49', '2023-11-02 14:28:44'),
(60, 70, 2, 'Approved', '2023-11-02 14:31:45', '2023-11-02 14:31:50'),
(61, 71, 2, 'Approved', '2023-11-03 14:06:18', '2023-11-03 14:06:24'),
(68, 79, 2, 'Approved', '2023-11-03 17:42:54', '2023-11-03 17:45:12'),
(72, 85, 2, 'Approved', '2023-11-24 12:38:07', '2023-11-24 12:43:38'),
(73, 85, 33, 'Approved', '2023-11-24 12:42:50', '2023-11-24 12:43:44'),
(74, 86, 33, 'Approved', '2023-11-24 12:58:51', '2023-11-24 12:58:57'),
(75, 87, 2, 'Approved', '2023-11-24 13:05:46', '2023-11-24 13:05:51'),
(76, 88, 2, 'Approved', '2023-11-27 11:41:25', '2023-11-27 11:42:50'),
(77, 89, 20, 'Approved', '2023-11-27 20:41:00', '2023-11-27 20:41:08'),
(78, 91, 2, 'Approved', '2023-11-29 12:17:21', '2023-11-29 12:17:26'),
(79, 92, 2, 'Approved', '2023-11-29 12:30:27', '2023-11-29 12:30:38'),
(80, 93, 2, 'Approved', '2023-12-04 17:14:32', '2023-12-04 17:15:16'),
(89, 100, 2, 'Pending', '2023-12-19 19:47:48', '2023-12-19 19:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `officer_bill_summaries`
--

CREATE TABLE `officer_bill_summaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `shift_hour` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `status` enum('Pending','Paid') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_bill_summaries`
--

INSERT INTO `officer_bill_summaries` (`id`, `job_id`, `officer_id`, `start_date`, `end_date`, `days`, `shift_hour`, `rate`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(1480, 48, 2, '2023-09-13', '2023-09-17', 4, 23, 5, 115, 'Pending', '2023-09-18 14:14:01', '2023-09-18 14:14:01'),
(1481, 48, 12, '2023-09-13', '2023-09-17', 1, 6, 5, 30, 'Pending', '2023-09-18 14:14:02', '2023-09-18 14:14:02'),
(1482, 45, 2, '2023-09-12', '2023-09-15', 2, 18, 2, 36, 'Pending', '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(1483, 45, 12, '2023-09-12', '2023-09-15', 2, 15, 2, 30, 'Pending', '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(1484, 46, 13, '2023-09-12', '2023-09-15', 1, 9, 3, 27, 'Pending', '2023-09-18 15:18:01', '2023-09-18 15:18:01'),
(1486, 79, 2, '2023-11-04', '2023-11-05', 0, 0, 100, 0, 'Pending', '2023-11-24 12:00:03', '2023-11-24 12:00:03'),
(1489, 85, 2, '2023-11-24', '2023-11-24', 1, 0, 50, 0, 'Pending', '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(1490, 85, 33, '2023-11-24', '2023-11-24', 0, 0, 50, 0, 'Pending', '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(1491, 86, 33, '2023-11-24', '2023-11-24', 1, 24, 50, 1200, 'Pending', '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(1492, 87, 2, '2023-11-24', '2023-11-24', 0, 0, 50, 0, 'Pending', '2023-11-25 05:00:27', '2023-11-25 05:00:27'),
(1493, 88, 2, '2023-11-27', '2023-11-27', 1, 0, 20, 0, 'Pending', '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(1494, 89, 20, '2023-11-27', '2023-11-27', 0, 0, 50, 0, 'Pending', '2023-11-28 05:05:05', '2023-11-28 05:05:05'),
(1495, 50, 19, '2023-10-29', '2023-11-29', 1, 8, 5, 40, 'Pending', '2023-11-30 05:05:12', '2023-11-30 05:05:12'),
(1496, 91, 2, '2023-11-29', '2023-11-29', 0, 0, 50, 0, 'Pending', '2023-11-30 05:05:13', '2023-11-30 05:05:13'),
(1497, 92, 2, '2023-11-29', '2023-11-29', 0, 0, 50, 0, 'Pending', '2023-11-30 05:05:14', '2023-11-30 05:05:14'),
(1498, 93, 2, '2023-12-04', '2023-12-04', 1, 6, 50, 300, 'Pending', '2023-12-05 05:00:16', '2023-12-05 05:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `officer_documents`
--

CREATE TABLE `officer_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `license_type` varchar(255) DEFAULT NULL,
  `badge_number` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `type` enum('license','rightwork','address') DEFAULT NULL,
  `notified` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_documents`
--

INSERT INTO `officer_documents` (`id`, `officer_id`, `license_type`, `badge_number`, `expiry_date`, `file`, `type`, `notified`, `created_at`, `updated_at`) VALUES
(12, 2, NULL, NULL, NULL, 'public/admin/assets/images/users/1687505606.jpg', 'rightwork', '0', '2023-06-23 11:33:26', '2023-06-23 11:33:26'),
(13, 2, 'Steward', '556865', 'Fri Jun 23 2023 12:32:58 GMT+0500', 'public/admin/assets/images/users/1687505675.jpg', 'license', '1', '2023-06-23 11:34:35', '2023-09-04 15:25:00'),
(14, 2, NULL, NULL, NULL, 'public/admin/assets/images/users/1688380229.jpg', 'address', '0', '2023-07-03 14:30:29', '2023-07-03 14:30:29'),
(15, 2, NULL, NULL, NULL, 'public/admin/assets/images/users/1688380709.jpg', 'address', '0', '2023-07-03 14:38:29', '2023-07-03 14:38:29'),
(16, 2, 'SIA Security Guard License', '123', 'Mon Sep 04 2023 10:52:25 GMT+0500', 'public/admin/assets/images/users/1688450028.jpg', 'license', '1', '2023-07-04 09:53:48', '2023-09-15 11:24:01'),
(17, 2, 'SIA Security Guard License', '55', 'Tue Jul 04 2023 17:39:54 GMT+0500', 'public/admin/assets/images/users/1688474466.jpg', 'license', '1', '2023-07-04 16:41:06', '2023-09-04 15:25:01'),
(18, 2, NULL, NULL, NULL, 'public/admin/assets/images/users/1688474481.jpg', 'rightwork', '0', '2023-07-04 16:41:21', '2023-07-04 16:41:21'),
(33, 19, NULL, NULL, NULL, 'public/admin/assets/images/users/1695878711.png', 'address', '0', '2023-09-28 09:25:11', '2023-09-28 09:25:11'),
(36, 19, NULL, NULL, NULL, 'public/admin/assets/images/users/1695881235.jpg', 'rightwork', '0', '2023-09-28 10:07:15', '2023-09-28 10:07:15'),
(38, 19, 'SIA Close Protection License', '23', 'Mon Mar 16 2026 04:28:00 GMT+0500', 'public/admin/assets/images/users/1695881319.png', 'license', '0', '2023-09-28 10:08:39', '2023-09-28 10:08:39'),
(43, 19, NULL, NULL, NULL, 'public/admin/assets/images/users/1695893229.png', 'rightwork', '0', '2023-09-28 13:27:09', '2023-09-28 13:27:09'),
(44, 19, NULL, NULL, NULL, 'public/admin/assets/images/users/1695893596.png', 'address', '0', '2023-09-28 13:33:16', '2023-09-28 13:33:16'),
(56, 40, NULL, NULL, NULL, 'public/admin/assets/images/users/1702238215.jpg', 'rightwork', '0', '2023-12-11 00:56:55', '2023-12-11 00:56:55'),
(57, 40, NULL, NULL, NULL, 'public/admin/assets/images/users/1702238222.jpg', 'rightwork', '0', '2023-12-11 00:57:02', '2023-12-11 00:57:02'),
(58, 40, NULL, NULL, NULL, 'public/admin/assets/images/users/1702238262.jpg', 'address', '0', '2023-12-11 00:57:42', '2023-12-11 00:57:42'),
(59, 40, NULL, NULL, NULL, 'public/admin/assets/images/users/1702238262.jpg', 'address', '0', '2023-12-11 00:57:42', '2023-12-11 00:57:42'),
(61, 40, 'SIA Door supervisors License', '124567858757', 'Wed Dec 13 2023 13:00:11 GMT+0000', 'public/admin/assets/images/users/1702472421.png', 'license', '1', '2023-12-13 18:00:21', '2023-12-14 05:00:38'),
(62, 40, 'SIA CCTV operative License', '4885555', 'Tue Dec 12 2023 13:04:50 GMT+0000', 'public/admin/assets/images/users/1702472702.png', 'license', '1', '2023-12-13 18:05:02', '2023-12-13 18:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `officer_jobs`
--

CREATE TABLE `officer_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `officer_quotation_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Open','Completed','Cancelled') NOT NULL DEFAULT 'Open',
  `payment_reminder` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_jobs`
--

INSERT INTO `officer_jobs` (`id`, `officer_id`, `officer_quotation_id`, `status`, `payment_reminder`, `created_at`, `updated_at`) VALUES
(18, 2, 43, 'Completed', '0', '2023-09-15 11:06:13', '2023-11-24 11:50:44'),
(19, 2, 45, 'Completed', '0', '2023-09-15 17:37:08', '2023-09-18 15:18:01'),
(20, 12, 45, 'Completed', '0', '2023-09-15 17:51:07', '2023-09-18 15:18:01'),
(21, 13, 46, 'Completed', '0', '2023-09-15 17:53:24', '2023-09-18 15:18:01'),
(24, 2, 48, 'Completed', '0', '2023-09-18 12:36:18', '2023-09-18 14:14:01'),
(25, 12, 48, 'Completed', '0', '2023-09-18 12:41:14', '2023-09-18 14:14:02'),
(27, 19, 50, 'Completed', '0', '2023-09-27 18:17:21', '2023-11-30 05:05:12'),
(28, 2, 53, 'Open', '0', '2023-10-25 14:35:39', '2023-10-25 14:35:39'),
(29, 2, 54, 'Open', '0', '2023-10-26 12:28:36', '2023-10-26 12:28:36'),
(31, 2, 55, 'Open', '0', '2023-10-26 14:57:25', '2023-10-26 14:57:25'),
(37, 2, 63, 'Open', '0', '2023-10-30 15:03:29', '2023-10-30 15:03:29'),
(38, 2, 64, 'Open', '0', '2023-10-30 16:58:15', '2023-10-30 16:58:15'),
(39, 2, 65, 'Open', '0', '2023-10-30 17:18:52', '2023-10-30 17:18:52'),
(40, 2, 66, 'Open', '0', '2023-11-01 10:41:53', '2023-11-01 10:41:53'),
(41, 2, 67, 'Open', '0', '2023-11-01 12:14:53', '2023-11-01 12:14:53'),
(43, 2, 69, 'Open', '0', '2023-11-02 14:28:44', '2023-11-02 14:28:44'),
(44, 2, 70, 'Open', '0', '2023-11-02 14:31:50', '2023-11-02 14:31:50'),
(45, 2, 71, 'Open', '0', '2023-11-03 14:06:24', '2023-11-03 14:06:24'),
(52, 2, 79, 'Completed', '0', '2023-11-03 17:45:12', '2023-11-24 12:00:03'),
(55, 2, 85, 'Completed', '0', '2023-11-24 12:43:38', '2023-11-25 05:00:27'),
(56, 33, 85, 'Completed', '0', '2023-11-24 12:43:44', '2023-11-25 05:00:27'),
(57, 33, 86, 'Completed', '0', '2023-11-24 12:58:57', '2023-11-25 05:00:27'),
(58, 2, 87, 'Completed', '0', '2023-11-24 13:05:51', '2023-11-25 05:00:27'),
(59, 2, 88, 'Completed', '0', '2023-11-27 11:42:50', '2023-11-28 05:05:05'),
(60, 20, 89, 'Completed', '0', '2023-11-27 20:41:08', '2023-11-28 05:05:05'),
(61, 2, 91, 'Completed', '0', '2023-11-29 12:17:26', '2023-11-30 05:05:13'),
(62, 2, 92, 'Completed', '0', '2023-11-29 12:30:38', '2023-11-30 05:05:14'),
(63, 2, 93, 'Completed', '0', '2023-12-04 17:15:16', '2023-12-05 05:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `officer_job_wish_lists`
--

CREATE TABLE `officer_job_wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officer_id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_job_wish_lists`
--

INSERT INTO `officer_job_wish_lists` (`id`, `officer_id`, `quotation_id`, `created_at`, `updated_at`) VALUES
(10, 2, 69, '2023-11-02 14:27:44', '2023-11-02 14:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `officer_quotations`
--

CREATE TABLE `officer_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `contractor_quotation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `shift_hour` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `payment_release` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `ni_req` varchar(255) DEFAULT NULL,
  `required_license` varchar(255) DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `chat` enum('0','1') NOT NULL DEFAULT '1',
  `req_officer` int(11) DEFAULT NULL,
  `status` enum('Open','Closed','Completed') NOT NULL DEFAULT 'Open',
  `post_to` varchar(255) NOT NULL DEFAULT 'Officer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_quotations`
--

INSERT INTO `officer_quotations` (`id`, `company_id`, `contractor_quotation_id`, `title`, `description`, `area`, `location`, `post_code`, `start_date`, `end_date`, `start_time`, `end_time`, `days`, `shift_hour`, `rate`, `payment_release`, `type`, `ni_req`, `required_license`, `shift`, `name`, `contact`, `chat`, `req_officer`, `status`, `post_to`, `created_at`, `updated_at`) VALUES
(43, 1, NULL, 'Job for officer 111', 'Hello', 'Lahore', 'Abc', 'a', '2023-09-13', '2023-09-14', '10:06 AM', '07:27 PM', 6, 9, 5, '3', 'Permanent', 'Yes', 'SIA Security Guard License,SIA Close Protection License', 'Any', 'Abc', '0325572757', '0', 3, 'Completed', 'Officer', '2023-09-05 14:31:00', '2023-09-15 14:45:00'),
(44, 1, NULL, 'Need officer 222', 'Hello', 'Lahore', 'Hi', 'hi', '2023-09-14', '2023-09-14', '04:06 PM', '06:06 PM', 1, 2, 2, '2', 'Permanent', 'Yes', 'SIA Close Protection License,SIA CCTV operative License', 'Morning', 'Hello', '032575579', '0', 2, 'Completed', 'Officer', '2023-09-14 15:06:52', '2023-09-15 11:24:00'),
(45, 4, 4, 'Officer Job for multi 22', 'hi', 'Lahore', 'Hello', 'hi', '2023-09-12', '2023-09-15', '06:30 AM', '03:30 PM', 3, 9, 2, '2', 'Permanent', 'Yes', NULL, 'Morning', 'Hello', '03228342544', '0', 5, 'Completed', 'Officer', '2023-09-15 17:35:23', '2023-09-18 15:18:01'),
(46, 8, 4, 'Officer 2 Job for multi 22', 'hi', 'Lahore', 'Hello', 'hi', '2023-09-12', '2023-09-15', '06:30 AM', '03:30 PM', 3, 9, 3, '2', 'Permanent', 'Yes', NULL, 'Morning', 'Hello', '03228342544', '0', 5, 'Completed', 'Officer', '2023-09-15 17:52:44', '2023-09-18 15:18:01'),
(48, 8, 7, 'Job for sub 3', 'Hi', 'London', 'Hi', 'hello', '2023-09-13', '2023-09-17', '01:33 PM', '07:33 PM', 4, 6, 5, '3', 'Permanent', 'No', NULL, 'Night', 'Hello', '0355757585', '0', 2, 'Completed', 'Officer', '2023-09-18 12:35:44', '2023-09-18 14:14:01'),
(50, 1, NULL, 'Job for security', 'This is the job for security', 'Lahore', 'Lahore', '05246', '2023-10-29', '2023-11-29', '03:00 PM', '11:00 PM', 32, 8, 5, '3', 'Permanent', 'Yes', 'SIA Security Guard License,SIA Close Protection License', 'Any', 'Smith', '0323567878', '1', 4, 'Completed', 'Officer', '2023-09-27 18:16:32', '2023-11-30 05:05:12'),
(51, 1, NULL, 'Private event security job', 'This is security job', 'London', 'London', 'E17DJ', '2023-11-28', '2023-11-29', '10:00 PM', '02:00 AM', 1, 4, 60, '3', 'Permanent', 'Yes', 'SIA Security Guard License,SIA Close Protection License,Steward', 'Night', 'John', '442371517685', '1', 5, 'Completed', 'Officer', '2023-09-28 13:59:35', '2023-11-30 05:05:13'),
(52, 4, NULL, 'Wedding security', 'This is job of security', 'London', 'London', 'E17DJ', '2023-10-29', '2023-11-02', '09:00 PM', '03:00 AM', 4, 6, 90, '5', 'Permanent', 'Yes', 'SIA CCTV operative License', 'Night', 'Kevin', '4455857680', '1', 6, 'Completed', 'Officer', '2023-09-28 14:04:06', '2023-11-24 12:00:01'),
(53, 1, NULL, 'Hire officer', 'Details', 'Lahore', 'Township lahore', '54000', '2023-10-26', '2023-10-28', '05:32 PM', '06:32 PM', 3, 1, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '03244147352', '1', 3, 'Completed', 'Officer', '2023-10-25 14:33:45', '2023-11-03 14:06:00'),
(54, 1, NULL, 'Security guard required', 'Guard required', 'Lahore', 'Township lahore', '57700', '2023-10-26', '2023-10-27', '12:52 PM', '12:52 PM', 1, 24, 50, '500', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Ahmad', '123456789', '1', 100, 'Completed', 'Officer', '2023-10-26 11:52:55', '2023-11-03 14:06:00'),
(55, 1, NULL, 'cricket', 'batsman', 'Lahore', 'abc', '57700', '2023-10-26', '2023-10-28', '03:24 PM', '03:24 PM', 3, 24, 10, '100', 'Temporary', 'Yes', 'SIA Security Guard License', 'Any', 'azhar', '123456789', '1', 10, 'Completed', 'Officer', '2023-10-26 14:25:36', '2023-11-03 14:06:00'),
(58, 1, NULL, 'Check for job create', 'Ranglerz detail p', 'England - Carlisle', 'Township', '5400', '2023-10-27', '2023-10-27', '12:51 PM', '12:52 PM', 1, 24, 50, '1', 'Temporary', 'No', 'SIA Security Guard License', 'Morning', 'Officer hire', '03232332252', '0', 1, 'Completed', 'Officer', '2023-10-27 11:53:01', '2023-11-24 12:00:01'),
(59, 14, NULL, 'Afaq company', 'Afaq detail', 'England - Bath', 'Township', '5400', '2023-10-27', '2023-10-30', '01:01 PM', '01:01 PM', 4, 24, 50, '5', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Afaq person', '032352282870', '1', 5, 'Completed', 'Officer', '2023-10-27 12:02:20', '2023-11-24 12:00:02'),
(62, 14, NULL, 'Job', 'Detail', 'England - Bath', 'Yjjj', '5300', '2023-10-30', '2023-10-30', '03:12 PM', '03:12 PM', 1, 24, 12, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Any', 'Oiio', '123456789', '0', 1, 'Completed', 'Officer', '2023-10-30 14:13:38', '2023-11-24 12:00:02'),
(63, 1, NULL, 'Hire officer', 'Officer detail', 'England - Bath', 'Yup', '5400', '2023-10-30', '2023-10-30', '03:33 PM', '03:33 PM', 1, 24, 12, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '123456789', '1', 1, 'Completed', 'Officer', '2023-10-30 14:33:40', '2023-11-03 14:06:00'),
(64, 1, NULL, 'Security guard', 'Details of security guard', 'England - Bath', 'Township', '5400', '2023-10-30', '2023-10-31', '05:55 PM', '11:53 PM', 1, 6, 12, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Ali', '03244147352', '1', 2, 'Completed', 'Officer', '2023-10-30 16:56:20', '2023-11-03 14:06:00'),
(65, 1, NULL, 'Cook hiring', 'Professional chef', 'England - Bath', 'Iqbal town', '5400', '2023-10-30', '2023-10-31', '06:16 PM', '06:16 PM', 1, 24, 51, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Ali', '123456789', '1', 2, 'Completed', 'Officer', '2023-10-30 17:17:14', '2023-11-03 14:06:00'),
(66, 1, NULL, 'Security Person', 'Person Detail', 'England - Bath', 'Township', '54000', '2023-11-01', '2023-11-01', '11:40 AM', '12:40 PM', 1, 1, 12, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '03244147352', '0', 1, 'Completed', 'Officer', '2023-11-01 10:41:17', '2023-11-03 14:06:00'),
(67, 1, NULL, 'Worker', 'Worker detail', 'England - Bath', 'Township', '54000', '2023-11-03', '2023-11-03', '11:50 AM', '11:55 AM', 1, 24, 51, '50', 'Temporary', 'Yes', 'SIA Security Guard License', 'Night', 'Ali', '123426853', '0', 2, 'Completed', 'Officer', '2023-11-01 12:10:57', '2023-11-03 14:06:00'),
(69, 1, NULL, 'Float check', 'Checking float detils', 'England - Bath', 'Bzjsjsj', '54000', '2023-11-02', '2023-11-02', '12:50 PM', '12:50 PM', 1, 24, 13.5, '1', 'Temporary', 'Yes', NULL, 'Morning', 'Ali', '123456789', '0', 1, 'Completed', 'Officer', '2023-11-02 11:51:54', '2023-11-03 14:06:00'),
(70, 1, NULL, 'Floating done', 'Floating details', 'England - Bath', 'Sbsj', '5400', '2023-11-02', '2023-11-02', '01:01 PM', '01:01 PM', 1, 24, 12.5, '1', 'Temporary', 'No', 'SIA Security Guard License', 'Morning', 'Ali', '123456789', '0', 1, 'Completed', 'Officer', '2023-11-02 12:01:51', '2023-11-03 14:06:00'),
(71, 1, NULL, 'Bilal job', 'Bilal  details', 'England - Bath', 'Shahis', '5400', '2023-11-03', '2023-11-04', '03:01 PM', '11:01 PM', 2, 8, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Bilal', '5535353', '0', 1, 'Completed', 'Officer', '2023-11-03 14:02:22', '2023-11-03 14:09:51'),
(77, 1, NULL, 'Jobtest', 'Hiii', 'England - Brighton & Hove', 'Shshzh', '123', '2023-11-03', '2023-11-03', '05:58 PM', '06:00 PM', 1, 1, 52.8, '1', 'Temporary', 'Yes', 'SIA CCTV operative License', 'Morning', '56171', '5454887', '0', 2, 'Completed', 'Officer', '2023-11-03 16:56:13', '2023-11-24 12:00:02'),
(78, 1, NULL, 'Hiring test', 'Sgzggz', 'England - Birmingham', 'Shshsh', '1626', '2023-11-03', '2023-11-03', '06:15 PM', '06:17 PM', 1, 24, 25, '1', 'Temporary', 'No', 'SIA Close Protection License', 'Morning', '17171', '345778', '0', 2, 'Completed', 'Officer', '2023-11-03 17:12:55', '2023-11-24 12:00:02'),
(79, 1, NULL, 'Check current job', 'Shsnns', 'England - Bath', 'Shjsjs', '6578', '2023-11-04', '2023-11-05', '06:33 AM', '10:33 PM', 2, 16, 100, '1', 'Temporary', 'No', 'SIA Security Guard License', 'Morning', 'Ddgg', '12425', '0', 1, 'Completed', 'Officer', '2023-11-03 17:34:32', '2023-11-24 12:00:03'),
(80, 14, 18, 'Job for contractor', 'Contractor details', 'England - Bath', 'Address hogig', '54000', '2023-11-04', '2023-11-06', '12:24 PM', '08:24 PM', 3, 8, 50, '1', 'Permanent', 'Yes', NULL, 'Morning', 'Ali', '5252525252', '0', 1, 'Completed', 'Officer', '2023-11-06 15:03:27', '2023-11-24 12:00:03'),
(81, 14, 21, 'Job for multi', 'Multi job detail', 'England - Bath', 'Bsjsjsj', '455', '2023-11-06', '2023-11-07', '03:25 PM', '03:25 PM', 1, 24, 500, '1', 'Temporary', 'Yes', NULL, 'Night', 'Gjj', '12345678', '0', 5, 'Completed', 'Officer', '2023-11-06 15:32:55', '2023-11-24 12:00:03'),
(82, 1, NULL, 'Check job temporary', 'Check description', 'England - Bath', 'Hsshssh', '6799', '2023-11-07', '2023-11-09', '03:43 PM', '10:43 PM', 3, 7, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Hdjsjdjd', '1234564899', '0', 2, 'Completed', 'Officer', '2023-11-07 15:43:53', '2023-11-24 12:00:03'),
(83, 1, NULL, 'Current job test', 'Check', 'England - Bath', 'Hehehej', '6767', '2023-11-07', '2023-11-07', '03:44 PM', '04:50 PM', 1, 1, 100, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Shehns', '12', '0', 1, 'Completed', 'Officer', '2023-11-07 15:45:28', '2023-11-24 12:00:04'),
(85, 1, NULL, 'Create job', 'Job description', 'England - Bath', 'Address', '5400', '2023-11-24', '2023-11-24', '12:38 PM', '12:35 PM', 1, 24, 50, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '03244147352', '0', 2, 'Completed', 'Officer', '2023-11-24 12:36:05', '2023-11-25 05:00:27'),
(86, 1, NULL, 'New job create', 'Job create discrimination', 'England - Bath', 'Address', '5400', '2023-11-24', '2023-11-24', '01:00 PM', '01:15 PM', 1, 24, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali sher', '03244147352', '0', 1, 'Completed', 'Officer', '2023-11-24 12:58:29', '2023-11-25 05:00:27'),
(87, 1, NULL, 'Check time job', 'Detail of job', 'England - Bath', 'Multan Rd', '5400', '2023-11-24', '2023-11-24', '01:05 PM', '01:10 PM', 1, 24, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Developer', '323232323', '0', 1, 'Completed', 'Officer', '2023-11-24 13:05:11', '2023-11-25 05:00:27'),
(88, 1, NULL, 'Officer job', 'Description job', 'England - Bath', 'Address', '5400', '2023-11-27', '2023-11-27', '11:38 AM', '05:38 PM', 1, 6, 20, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '123456789', '0', 5, 'Completed', 'Officer', '2023-11-27 11:40:34', '2023-11-28 05:05:05'),
(89, 12, 23, 'Sub contractor job', 'Description of sub', 'England - Bath', 'Address add', '5400', '2023-11-27', '2023-11-27', '11:02 AM', '04:02 PM', 1, 5, 50, '1', 'Temporary', 'Yes', NULL, 'Morning', 'Ali', '32325252525', '0', 5, 'Completed', 'Officer', '2023-11-27 20:40:07', '2023-11-28 05:05:05'),
(90, 22, NULL, 'Officer', 'Detail', 'England - Bath', 'Hjj', '5400', '2023-11-28', '2023-11-28', '06:06 PM', '06:06 PM', 1, 24, 2, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '456', '0', 1, 'Completed', 'Officer', '2023-11-28 18:07:15', '2023-11-29 05:10:18'),
(91, 1, 34, 'Rameez thekhedar', 'Description', 'England - Bath', 'Addrwss', '5400', '2023-11-29', '2023-11-29', '11:30 AM', '06:30 PM', 1, 7, 50, '1', 'Temporary', 'Yes', NULL, 'Morning', 'Asad', '565656', '0', 5, 'Completed', 'Officer', '2023-11-29 12:15:31', '2023-11-30 05:05:13'),
(92, 1, 35, 'Testing job', 'Detail', 'England - Bath', 'Addres', '5400', '2023-11-29', '2023-11-29', '12:24 PM', '06:24 PM', 1, 6, 50, '1', 'Temporary', 'Yes', NULL, 'Morning', 'Ali', '2356555', '0', 5, 'Completed', 'Officer', '2023-11-29 12:29:42', '2023-11-30 05:05:14'),
(93, 1, NULL, 'Usman job', 'Detail', 'England - Bath', 'Adress', '5400', '2023-12-04', '2023-12-04', '05:13 PM', '11:13 PM', 1, 6, 50, '1', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '3235288888', '0', 5, 'Completed', 'Officer', '2023-12-04 17:14:19', '2023-12-05 05:00:16'),
(98, 26, NULL, 'Testing job', 'Details', 'England - Bath', 'Address', '5400', '2023-12-12', '2023-12-12', '06:03 PM', '11:59 PM', 1, 5, 50, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Any', 'Ali', '2235685', '0', 5, 'Completed', 'Officer', '2023-12-12 18:05:09', '2023-12-13 05:00:40'),
(99, 1, NULL, 'Thursday job', 'Detail', 'England - Bath', 'Address', '5400', '2023-12-14', '2023-12-14', '03:11 PM', '07:11 PM', 1, 4, 50, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '235689147', '0', 2, 'Completed', 'Officer', '2023-12-14 15:17:40', '2023-12-15 05:00:22'),
(100, 28, NULL, 'Check job create', 'Detail', 'England - Bath', 'Address', '5400', '2023-12-19', '2023-12-19', '07:38 PM', '07:38 PM', 1, 24, 100, '2', 'Temporary', 'Yes', 'SIA Security Guard License', 'Morning', 'Ali', '03235382858', '0', 2, 'Open', 'Officer', '2023-12-19 19:40:04', '2023-12-19 19:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `jobs` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `jobs`, `price`, `sale`, `created_at`, `updated_at`) VALUES
(1, 'Silver', 100, 30, 11, NULL, '2023-12-19 19:39:56'),
(2, 'Gold', 300, 50, 2, NULL, '2023-10-27 14:25:47'),
(3, 'Premium', 500, 100, 8, NULL, '2023-08-15 10:57:08');

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
('tayyab1.ranglerz@gmail.com', '1991', '2023-09-22 11:11:23'),
('tayyab1.ranglerz@gmail.com', '7225', '2023-09-22 11:12:52'),
('tayyab1.ranglerz@gmail.com', '2221', '2023-09-22 11:15:57'),
('tayyab1.ranglerz@gmail.com', '6973', '2023-09-22 11:27:14'),
('tayyab1.ranglerz@gmail.com', '7045', '2023-09-22 11:50:46'),
('tayyab1.ranglerz@gmail.com', '5861', '2023-09-22 15:36:42'),
('tayyab1.ranglerz@gmail.com', '5815', '2023-09-22 15:36:42'),
('tayyab1.ranglerz@gmail.com', '2085', '2023-09-22 15:36:43'),
('tayyab1.ranglerz@gmail.com', '4685', '2023-09-22 15:37:53'),
('tayyab1.ranglerz@gmail.com', '9770', '2023-09-22 15:41:02'),
('usman.ranglerz449@gmail.com', '3365', '2023-09-22 15:51:08'),
('tahir.ranglerz@gmail.com', '9357', '2023-09-22 15:56:03'),
('tahir.ranglerz@gmail.com', '8113', '2023-09-22 15:56:42'),
('tahir.ranglerz@gmail.com', '9098', '2023-09-22 15:56:44'),
('tahir.ranglerz@gmail.com', '6802', '2023-09-22 15:57:27'),
('tayyab1.ranglerz@gmail.com', '4019', '2023-09-22 16:00:05'),
('officer62@gmail.com', '5084', '2023-11-24 12:41:38');

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
(87, 'App\\Models\\User', 4, 'authToken', '297bea9cd9587a066c42da0457cf74fc72a7f09bd90cd734ab027806340816e3', '[\"*\"]', '2023-07-13 16:14:52', '2023-06-22 12:27:32', '2023-07-13 16:14:52'),
(107, 'App\\Models\\User', 4, 'authToken', '61204f4d649d4503c5e1ab57b1645696ae541e545da8db05e4b7096025fbe879', '[\"*\"]', NULL, '2023-06-23 17:55:46', '2023-06-23 17:55:46'),
(108, 'App\\Models\\User', 4, 'authToken', 'd3aab2fd0791cb02f13f070b4f6ab005a0d38f6e50ff1b45f749bc4983509b86', '[\"*\"]', NULL, '2023-06-23 17:57:15', '2023-06-23 17:57:15'),
(109, 'App\\Models\\User', 4, 'authToken', 'f50b4556080cc0c854920ca7a77a1a479d6d46889d0a57c18b5aec6b55d8efdf', '[\"*\"]', NULL, '2023-06-23 17:58:55', '2023-06-23 17:58:55'),
(111, 'App\\Models\\User', 4, 'authToken', 'de0b3dbe72de5b0742e33055f3c3b504a57f220fbe12a3aab34c41066355b483', '[\"*\"]', NULL, '2023-06-23 18:01:35', '2023-06-23 18:01:35'),
(112, 'App\\Models\\User', 4, 'authToken', 'e0f15126a550d4979d690c752886b165ebc57f7fd2121a175986021452c0fc46', '[\"*\"]', NULL, '2023-06-23 18:01:50', '2023-06-23 18:01:50'),
(114, 'App\\Models\\User', 4, 'authToken', 'b037ede5baf17c136f5909c94f3e89c25fd968c076675b04f5c835b5a3a9754b', '[\"*\"]', NULL, '2023-06-23 18:02:09', '2023-06-23 18:02:09'),
(115, 'App\\Models\\User', 4, 'authToken', 'defaa101c3fd7070b2cfad82f8e19907e7e884663544fef7ec1cf9626a82fff7', '[\"*\"]', NULL, '2023-06-23 18:02:15', '2023-06-23 18:02:15'),
(119, 'App\\Models\\User', 4, 'authToken', '51961447581a11e2cf3f04dd976b9c23fea73d1002034140fc4d46268eef0e0f', '[\"*\"]', NULL, '2023-06-23 18:07:47', '2023-06-23 18:07:47'),
(120, 'App\\Models\\User', 4, 'authToken', '551668b9627540692d9e5539b99d86bf630690ac8fd5edbb4925409947d95807', '[\"*\"]', NULL, '2023-06-23 18:07:52', '2023-06-23 18:07:52'),
(153, 'App\\Models\\Company', 5, 'authToken', 'eff80efd7850ed75ab637c2d1d5fb714ed2dcc49d902061fb1d993acfda2f58c', '[\"*\"]', NULL, '2023-06-27 13:05:45', '2023-06-27 13:05:45'),
(154, 'App\\Models\\Company', 6, 'authToken', 'b5c21a64c8224167fbd16dc02f56fccf09f24640d3ac3754c60dd76715ad1266', '[\"*\"]', '2023-07-12 11:07:09', '2023-06-27 13:05:59', '2023-07-12 11:07:09'),
(224, 'App\\Models\\User', 4, 'authToken', '94347d66b662ad4990311a6b580e340c12fef77d3b6c9b9fa47f1125abb52116', '[\"*\"]', '2023-07-05 11:05:56', '2023-07-05 11:05:27', '2023-07-05 11:05:56'),
(229, 'App\\Models\\User', 4, 'authToken', '0790ed9fe70114282f466c05c5b1042959eb28c59640784f0e264ab75e5c558f', '[\"*\"]', '2023-07-05 15:10:38', '2023-07-05 15:09:54', '2023-07-05 15:10:38'),
(251, 'App\\Models\\Company', 7, 'authToken', 'b1446ec4ef000f418b89dae16089a4a183bd83390963b23fa0a5c705ab6c8e69', '[\"*\"]', NULL, '2023-07-06 11:50:14', '2023-07-06 11:50:14'),
(411, 'App\\Models\\User', 4, 'authToken', '71806c8d8cc79995a2465a6cf339a57aabc3b51e6b86e36263dc3a2cbf2a501f', '[\"*\"]', NULL, '2023-07-14 10:58:48', '2023-07-14 10:58:48'),
(412, 'App\\Models\\User', 4, 'authToken', '209d9fa199a11a6e89c8ed900ba1249009c8d1856409bbc9b360712b3f99fcda', '[\"*\"]', NULL, '2023-07-14 10:59:34', '2023-07-14 10:59:34'),
(413, 'App\\Models\\User', 4, 'authToken', 'b13ef302c0bbcc5702e62ec9fd9d1ae70959208af4d628e4a5a76030fc2ca068', '[\"*\"]', NULL, '2023-07-14 10:59:38', '2023-07-14 10:59:38'),
(414, 'App\\Models\\User', 4, 'authToken', 'a98f4eff6e3eb11c7ccf42dd9b30ea35e0f5305e2379fea91c1123cf507c6efc', '[\"*\"]', NULL, '2023-07-14 10:59:59', '2023-07-14 10:59:59'),
(415, 'App\\Models\\User', 4, 'authToken', '3643f6af8ff37dcc31f602e8e601577141c6538cd0e5abfeb8bfcd16152133da', '[\"*\"]', NULL, '2023-07-14 11:00:37', '2023-07-14 11:00:37'),
(416, 'App\\Models\\User', 4, 'authToken', '6c0c98d398e9e2553706a24e65c5cd8d55c70345278e94dbc5233cfde3091a2b', '[\"*\"]', NULL, '2023-07-14 11:00:49', '2023-07-14 11:00:49'),
(426, 'App\\Models\\Company', 6, 'authToken', '3d0d16f18938e13bd4cfe63675236f4db3cba0e40697ec162fd7bfec0630bcc5', '[\"*\"]', NULL, '2023-07-14 11:50:47', '2023-07-14 11:50:47'),
(427, 'App\\Models\\Company', 6, 'authToken', '74c5102c90f115435d23cbbb6d4ff36600618c68fad3a3d2ee135a25f8d49f2c', '[\"*\"]', NULL, '2023-07-14 11:50:53', '2023-07-14 11:50:53'),
(429, 'App\\Models\\Company', 5, 'authToken', '1d84086b2103f1ea88180b92598c9766b9c322791f783e5df88920bbb721a78d', '[\"*\"]', NULL, '2023-07-14 11:52:03', '2023-07-14 11:52:03'),
(469, 'App\\Models\\User', 4, 'authToken', '326f9944d72551e301380902ba7c211408734af520609c7cfb942df7a32d016a', '[\"*\"]', NULL, '2023-07-18 11:07:22', '2023-07-18 11:07:22'),
(555, 'App\\Models\\User', 5, 'authToken', '891e1ea8f715cb463bab702d8369be915f1759eace938b05653494ad0ba70371', '[\"*\"]', NULL, '2023-07-21 11:09:02', '2023-07-21 11:09:02'),
(556, 'App\\Models\\User', 5, 'authToken', '1fb84b373a333e335976f7910731822fb896eded64b0977a69e69fe3ced7d2e6', '[\"*\"]', NULL, '2023-07-21 11:10:31', '2023-07-21 11:10:31'),
(557, 'App\\Models\\User', 5, 'authToken', '4a2d701a7920d9373f4abe07de085785b0bb1b335f05186bffe1c7e774646748', '[\"*\"]', NULL, '2023-07-21 11:11:01', '2023-07-21 11:11:01'),
(614, 'App\\Models\\User', 8, 'authToken', '5df6b793f188536f4d0870fb0477848e2041d62278d58ad1701cabe107cc1c24', '[\"*\"]', '2023-07-22 13:42:04', '2023-07-22 13:41:55', '2023-07-22 13:42:04'),
(627, 'App\\Models\\User', 5, 'authToken', '6926dd00f0a267f1bf540b8c07a4471ca8e974b0840134872832c25d66038960', '[\"*\"]', NULL, '2023-07-22 16:47:25', '2023-07-22 16:47:25'),
(696, 'App\\Models\\Company', 6, 'authToken', '42fb661b1c4808974745d604a5966af659f9a6a65cc5e44df692ea3e1e40ddb6', '[\"*\"]', NULL, '2023-08-07 11:27:09', '2023-08-07 11:27:09'),
(699, 'App\\Models\\User', 5, 'authToken', 'f5f9655c5f867b1c034f9c1e80a23690caa797e405d7b2cd893d529cf46eb197', '[\"*\"]', NULL, '2023-08-08 16:22:16', '2023-08-08 16:22:16'),
(1080, 'App\\Models\\Company', 10, 'authToken', 'ca478d567812539d2954dff743916d9bb1622f963d5d571c17b136e3d84eab38', '[\"*\"]', '2023-09-28 16:56:36', '2023-09-28 16:56:35', '2023-09-28 16:56:36'),
(1081, 'App\\Models\\User', 19, 'authToken', '137de7e28bebc1b3af7649c6a810e0b81587312a117cfbdb61e255942f9fe445', '[\"*\"]', '2023-09-29 04:08:10', '2023-09-29 04:07:54', '2023-09-29 04:08:10'),
(1093, 'App\\Models\\User', 19, 'authToken', 'bcf088443f646244034199944a163f732767e9c3659f42a672df67f406828850', '[\"*\"]', '2023-10-26 09:48:58', '2023-10-26 09:47:16', '2023-10-26 09:48:58'),
(1244, 'App\\Models\\User', 24, 'authToken', 'df96b8b9b6b7e51d850f2199f063f0653ca661549434a0d13dd9821c5e17277b', '[\"*\"]', '2023-11-03 19:30:45', '2023-11-03 19:30:40', '2023-11-03 19:30:45'),
(1252, 'App\\Models\\User', 21, 'authToken', '31de6939d8e3f27c2400c7805f2e397df52b6a7bb9b98a4a734cd5fe370434b2', '[\"*\"]', '2023-11-06 12:35:54', '2023-11-06 12:35:39', '2023-11-06 12:35:54'),
(1268, 'App\\Models\\User', 30, 'authToken', '3ac1a824e4e4c827babee7a3fbd78cbcc7dcbc53c247b1d8c5124a5dd01f4650', '[\"*\"]', NULL, '2023-11-07 12:05:59', '2023-11-07 12:05:59'),
(1269, 'App\\Models\\User', 30, 'authToken', '835947e5b170f899f540d94042b7e7ad2a0166671c11f5cdb6691be78d2504c4', '[\"*\"]', '2023-11-07 12:06:59', '2023-11-07 12:06:43', '2023-11-07 12:06:59'),
(1270, 'App\\Models\\User', 31, 'authToken', '94966009a9dc12ee54cea9f24c64f62692c2be171a216291465f2c25f5543df1', '[\"*\"]', NULL, '2023-11-07 12:10:48', '2023-11-07 12:10:48'),
(1271, 'App\\Models\\User', 32, 'authToken', '168bc346e5df810e1e34bf9531715cad7d0880a99ef4bb4eaf2e0e27059f29ba', '[\"*\"]', NULL, '2023-11-07 13:16:05', '2023-11-07 13:16:05'),
(1272, 'App\\Models\\User', 32, 'authToken', '0a3320e8311de372adb2082d6e3d2ea5d87969c5ea838eb12e818da75a067fa4', '[\"*\"]', '2023-11-07 13:16:51', '2023-11-07 13:16:39', '2023-11-07 13:16:51'),
(1288, 'App\\Models\\Company', 16, 'authToken', '7b6ce5aaa00b70870c38349ec7b5e810fb10e752b509d3b4bb22ba297874f954', '[\"*\"]', NULL, '2023-11-23 12:33:43', '2023-11-23 12:33:43'),
(1309, 'App\\Models\\Company', 14, 'authToken', '934bf2e2f07e7d17527250fcfbab2888e99ca0d7cf594f52a140829c714032eb', '[\"*\"]', NULL, '2023-11-27 11:08:43', '2023-11-27 11:08:43'),
(1319, 'App\\Models\\Company', 18, 'authToken', 'ed14f25052852c01d547db8df0a724fd504ccfc13bd3daa7ff262017910f4617', '[\"*\"]', '2023-11-27 12:13:32', '2023-11-27 12:13:17', '2023-11-27 12:13:32'),
(1322, 'App\\Models\\Company', 19, 'authToken', 'c8b91bdda26f1373881f29ff088ac12a45729c421a97a2b412651c92773c0a26', '[\"*\"]', '2023-11-27 12:19:02', '2023-11-27 12:18:53', '2023-11-27 12:19:02'),
(1323, 'App\\Models\\User', 14, 'authToken', '4cc1042079156e5739c7a97ac0bf07f7813fd1e5d6ab823bb39bb2e896ac5f9f', '[\"*\"]', '2023-11-27 12:39:01', '2023-11-27 12:37:05', '2023-11-27 12:39:01'),
(1324, 'App\\Models\\User', 35, 'authToken', '0732b937f26e178c0fb6b61c577cf8cc8180807c5c5ebebefa5f73fd2f84a37b', '[\"*\"]', NULL, '2023-11-27 12:40:18', '2023-11-27 12:40:18'),
(1325, 'App\\Models\\User', 36, 'authToken', '4ae6bf7bb604b3a6861790b18e470238a114774191eeeed9b50e80a655b45d04', '[\"*\"]', NULL, '2023-11-27 12:40:48', '2023-11-27 12:40:48'),
(1328, 'App\\Models\\Company', 21, 'authToken', '8982c88683df41ba12688890f17d47c5a1821588465878224679409dc022260e', '[\"*\"]', NULL, '2023-11-27 12:47:35', '2023-11-27 12:47:35'),
(1349, 'App\\Models\\Company', 22, 'authToken', '0631dcda3626e2b4ab5c941b6aef6d665c2e73506ea36918d2ec1ba7c3d9152d', '[\"*\"]', '2023-11-29 12:34:19', '2023-11-29 11:47:05', '2023-11-29 12:34:19'),
(1350, 'App\\Models\\Company', 22, 'authToken', '9bda2b7e871e8541b458c6993dd6e0dee60ee95a2722c87b4b8f69d24ab410dd', '[\"*\"]', '2023-11-29 12:13:55', '2023-11-29 11:49:24', '2023-11-29 12:13:55'),
(1360, 'App\\Models\\Company', 2, 'authToken', '0b1c8ce6f4f69ab7db810f904c269f091d3e75cd93b53824408fdd6a2f4f3fb8', '[\"*\"]', '2023-12-06 13:09:03', '2023-12-04 23:08:57', '2023-12-06 13:09:03'),
(1363, 'App\\Models\\Company', 2, 'authToken', '6b0371c83d5d1ca162e59a4bb445b3c8db323ae10a4a9795c3b30205192894bf', '[\"*\"]', '2023-12-07 02:13:08', '2023-12-06 13:10:19', '2023-12-07 02:13:08'),
(1365, 'App\\Models\\User', 3, 'authToken', '6b5dc7492464ff1df5e7bb159bc9790d5a67940ab9273a53cf288bc86c2dede4', '[\"*\"]', '2023-12-10 21:13:15', '2023-12-10 21:13:08', '2023-12-10 21:13:15'),
(1366, 'App\\Models\\Company', 2, 'authToken', 'cff7d9cb2ca80e2ad0ad24c50fe03dbfe1e2c92d61640bb1d5b2ed2440d00d00', '[\"*\"]', '2023-12-10 21:15:50', '2023-12-10 21:15:41', '2023-12-10 21:15:50'),
(1383, 'App\\Models\\User', 9, 'authToken', 'dc0ab8859478b29f102b28d5b0be69d636b7dbd5989e2de97f94fa541cfcf57b', '[\"*\"]', '2023-12-11 00:48:06', '2023-12-11 00:48:01', '2023-12-11 00:48:06'),
(1386, 'App\\Models\\User', 39, 'authToken', 'ca178fce53ecd20cbdcead6af4f52a62e76aa53168b37162adbc96e46b4f5b08', '[\"*\"]', '2023-12-11 00:51:37', '2023-12-11 00:51:32', '2023-12-11 00:51:37'),
(1407, 'App\\Models\\Company', 28, 'authToken', 'b95134332de04df764e5e38ce6b42b531706744cc93b3444db082fc484efc58f', '[\"*\"]', '2023-12-19 20:07:59', '2023-12-19 19:49:35', '2023-12-19 20:07:59'),
(1409, 'App\\Models\\Company', 25, 'authToken', '37d81f402c70dce7f8f115426a23444380afad216f71ea4bf4827ec873a3b456', '[\"*\"]', '2023-12-19 20:02:05', '2023-12-19 19:55:59', '2023-12-19 20:02:05'),
(1411, 'App\\Models\\Company', 28, 'authToken', '4b7809b71df1f2f16269bd8e8c66e2a7ce5233a517a5ecd39b16121a0105821f', '[\"*\"]', '2023-12-19 20:01:16', '2023-12-19 20:00:00', '2023-12-19 20:01:16');

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

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Privacy Policy for Honey Guards</strong></p>\r\n\r\n<p><strong>1. Introduction</strong></p>\r\n\r\n<p>Welcome to Honey Guards. At Honey Guards, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy is designed to help you understand how we collect, use, disclose, and safeguard your information when you use our mobile application and services.</p>\r\n\r\n<p><strong>2. Information We Collect</strong></p>\r\n\r\n<p>2.1. <strong>Information You Provide</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>For Companies:</strong> When companies use our app to post security job listings, they may provide information such as company name, contact details, job descriptions, and other relevant details.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>For Officers (Security Guards):</strong> When officers use our app to find security job listings, they may provide information such as their name, contact details, qualifications, and work experience.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>2.2. <strong>Location Information</strong></p>\r\n\r\n<ul>\r\n	<li><strong>For Officers:</strong> Our app may collect and use your background location to provide location-based job listings to companies who have hired you for security services. You have the option to enable or disable location sharing within the app at any time.</li>\r\n</ul>\r\n\r\n<p><strong>3. How We Use Your Information</strong></p>\r\n\r\n<p>We may use the information we collect for various purposes, including but not limited to:</p>\r\n\r\n<ul>\r\n	<li>Matching companies with suitable officers for security job listings.</li>\r\n	<li>Providing location-based job recommendations.</li>\r\n	<li>Communicating with users regarding job listings and applications.</li>\r\n	<li>Improving our app&#39;s functionality and user experience.</li>\r\n	<li>Complying with legal and regulatory requirements.</li>\r\n</ul>\r\n\r\n<p><strong>4. Information Sharing</strong></p>\r\n\r\n<p>We may share your information as follows:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>With Companies:</strong> We may share officers&#39; information (including background location, if enabled) with companies that have hired those officers for security services.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Service Providers:</strong> We may share your information with third-party service providers who assist us in providing and improving our services.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Legal Compliance:</strong> We may disclose your information to comply with legal obligations or in response to a lawful request.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>5. Security</strong></p>\r\n\r\n<p>We take reasonable steps to protect your information from unauthorized access or disclosure. However, no data transmission or storage system is completely secure, and we cannot guarantee the security of your data.</p>\r\n\r\n<p><strong>6. Your Choices</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Location Sharing:</strong> Officers can choose to enable or disable location sharing within the app&#39;s settings.</li>\r\n</ul>\r\n\r\n<p><strong>7. Children&#39;s Privacy</strong></p>\r\n\r\n<p>Our services are not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If you believe we have collected information from a child under 13, please contact us immediately.</p>\r\n\r\n<p><strong>8. Changes to this Privacy Policy</strong></p>\r\n\r\n<p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the revised policy on our website or within the app. Your continued use of the app after the changes are made constitutes acceptance of the updated policy.</p>\r\n\r\n<p><strong>9. Contact Us</strong></p>\r\n\r\n<p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us at honeyguardsltd@gmail.com.</p>', '2023-06-14 09:18:37', '2023-09-28 14:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `term_conditions`
--

CREATE TABLE `term_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_conditions`
--

INSERT INTO `term_conditions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Honey Guard is platform where Company hire officer', '2023-06-14 09:18:37', '2023-06-14 09:18:37'),
(2, 'Honey Guard is platform where Company hire officer', '2023-06-14 09:18:37', '2023-06-14 09:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `maiden_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `ni_number` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `preffered_time` varchar(255) DEFAULT NULL,
  `first_security_job` varchar(255) DEFAULT NULL,
  `address_proof` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `fcm_token` varchar(255) DEFAULT NULL,
  `firebase_id` varchar(255) DEFAULT NULL,
  `is_verified` enum('0','1') NOT NULL DEFAULT '0',
  `profile_status` enum('0','1') NOT NULL DEFAULT '0',
  `delete_request` varchar(20) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `maiden_name`, `last_name`, `image`, `email`, `password`, `contact`, `area`, `post_code`, `address`, `weight`, `height`, `about`, `ni_number`, `experience`, `preffered_time`, `first_security_job`, `address_proof`, `latitude`, `longitude`, `is_active`, `fcm_token`, `firebase_id`, `is_verified`, `profile_status`, `delete_request`, `created_at`, `updated_at`) VALUES
(1, 'companies', NULL, NULL, 'public/admin/assets/images/users/1687331750.jpg', 'daniyalbabar9@gmail.com', '$2y$10$9GVBxcNvbaJSbJocXaiN2.syogQAeh/0uDSnvyEBBREB0YN7wxen.', '24252', '	\nabc lahore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'CXk05Tlq4RhWul3lACMAIHR9Wo72', '0', '0', '0', '2023-06-09 14:43:46', '2023-06-21 15:36:31'),
(2, 'Tayyab', NULL, 'Sheikh', 'public/admin/assets/images/users/1695297262.png', 'officer1@gmail.com', '$2y$10$3z4yBXIMCrAPvpsqrFiQa.z/iOtTm.0qi3wILPCvk50WUvDuaOsEm', '0645454', 'London', '7fujc', 'Abc street uk', '74', '5.8', 'A security officer', '47gj', '4', 'Any', '2023-06-23', 'public/admin/assets/images/users/1687505623.jpg', '31.4529913479256', '74.29993220506908', '1', NULL, 'a1VaCMXLNsfZ7jUxrwSoGoHyuLu1', '1', '1', '0', '2023-06-09 14:48:53', '2023-12-19 19:47:57'),
(4, 'Muhammad', 'Arshad', 'Faarsi', 'public/admin/assets/images/users/1675332882.jpg', 'arshadfaarsi13@gmail.com', '$2y$10$3z4yBXIMCrAPvpsqrFiQa.z/iOtTm.0qi3wILPCvk50WUvDuaOsEm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34.463633', '71.463635', '1', 'dIOT_aueQTKorNQ2lY0H3_:APA91bFTNW4BMSh27vx8s9XRf8cBwdzIqBOMEnilPGe8iPG2UB9n9w3rEV_Gpe3GatITDadgMj99nrvGNAm4korJAmbIgPt1fZ5NjCa0tG2BUjVYQU-f_HXBO9mVhALjLMeg_LJtk5OW', NULL, '1', '1', '0', '2023-06-22 12:27:32', '2023-07-14 11:00:49'),
(12, 'Officer10', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'officer10@gmail.com', '$2y$10$9mf1D4vxD3w0XuiI4ciPJOy4ej0KY/qpT/TgTFkozI18loam33Uha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31.453018188476562', '74.29989561968304', '1', NULL, '17Nyw5bB4OgLN1SNEyjgFi28oSE3', '0', '1', '0', '2023-08-15 10:35:04', '2023-09-18 12:45:47'),
(13, 'Officer11', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'officer11@gmail.com', '$2y$10$0q4r8BAKEiBBMbOIjgG3WOqgxCpHHHZll7Cn3BEDuqhId9uktjg7G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'DMAWamaNGtQ49eLWyQ1e47T3wzi1', '0', '1', '0', '2023-08-15 10:35:12', '2023-09-18 11:21:35'),
(18, 'Ali', 'devloper', 'ali developer', 'public/admin/assets/images/users/1695283304.png', 'usman.ranglerz449+12@gmail.com', '$2y$10$1Zy/fVoZk3fNtRd.3tC9pedBcqmNpWTSi/MFiRrEG.rc/lkj4Jhwi', '12345', 'qweg', 'wertg', 'wert', 'qwer', 'fg', NULL, NULL, NULL, 'qwert', 'qwer', NULL, NULL, NULL, '1', NULL, NULL, '0', '0', '0', '2023-09-21 12:01:44', '2023-09-22 14:36:56'),
(19, 'Tayyab', NULL, NULL, 'public/admin/assets/images/users/1695894755.jpg', 'tayyab1.ranglerz@gmail.com', '$2y$10$8PQcKXq..EvnCVLwHfu/uO3NprE24na5uMMywLspuHZ6iwHqVpEYe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31.453052702899434', '74.29986382615658', '1', 'e4izf2Umi0SKlGg0udXoMf:APA91bGtP8ZzhNSTku6MXyaGwiEd9J_BLpxZlJvj7Cal0__syf7IqRieP8XIaPg2UiXkPPIX6ApJ-4rBlBnUzO7YIr0Bcd3xGDKg01OngQHObpRrkAwVScCnF3dcigknUMkHTAqkkuaf', 'qTXwu3bvlrXvcN2DAvOmCQ1dCJ03', '0', '1', '0', '2023-09-21 17:52:23', '2023-10-26 09:47:15'),
(20, 'Ali', 'Ali', 'Sher', 'public/admin/assets/images/users/1695717461.jpg', 'officer62@gmail.com', '$2y$10$fSfu0VeltwT1eB6WQIDMsO7j0LVWTGdcXf/Jk0y3zRmLuM9EqIyAa', '03244147352', 'Lahore', '5400', 'Civic center', '50', '50', 'Etc', '1456', '1', 'Any', '2023-09-26', NULL, NULL, NULL, '1', NULL, 'O02ib4lrM9grBSSFKmDRQERlhi02', '0', '1', '0', '2023-09-26 11:46:31', '2023-11-27 20:41:27'),
(33, 'Ghj', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'ranglerzoffice1@icloud.com', '$2y$10$iU6p6KSF6DRgMes83fpjBeYpux0pGS8nXzooy.BrIlU5xJSqfLfL2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '31.4529108', '74.2998683', '1', NULL, '8R1i5yUgKYdazW3w1P57pLNCudr1', '0', '1', '0', '2023-11-07 13:17:34', '2023-11-24 13:05:23'),
(34, 'Waqas', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'ahsanghafoor89@mail.com', '$2y$10$a2zLEKWzxgOadZl4j0C0BuDQe8XpRhpaaob.zL35oDPB0gfw0kbXa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '51.5475389', '-0.0604736', '0', '1', '6cxKspnO9gMiWdWNcrlNR9zhcmA2', '0', '1', '0', '2023-11-07 16:47:04', '2023-12-11 15:19:01'),
(35, 'Ali', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'offer12@gmail.com', '$2y$10$l1z2ldeKHsmof3GlW2Aor.dpe3fRvgF4jGUUPIORdhpkUmuZBfqq.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'MiBAXLTvG7QInVFDKsaLRQwD4Pf2', '0', '0', '0', '2023-11-27 12:40:18', '2023-11-27 12:40:18'),
(36, 'Ali', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'officer12@gmail.com', '$2y$10$T5ExFQveZBwxLfw3c1emmuRwwrq3nD1G3ys9fUCofcc09J.Zp53Iq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'qsJ9uBgydegaw1LATk1b83DhG4A3', '0', '0', '0', '2023-11-27 12:40:48', '2023-11-27 12:40:48'),
(37, 'Umar', NULL, NULL, 'public/admin/assets/images/users/1675332882.jpg', 'umarghafoor89@gmail.com', '$2y$10$gzrVYAMZfXz1C/WNPcWKU.mxK8TegxfrTOIj67aUMYg.GvktQKQT2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54.5567488', '-1.2516198', '1', NULL, 'DvSOSfnTFkTBUY1XFwQmbsCyngI2', '0', '1', '0', '2023-12-05 18:46:23', '2023-12-05 22:14:15'),
(40, 'Ahsan', NULL, 'Ghafoor', 'public/admin/assets/images/users/1702238315.jpg', 'honeyguardsltd@gmail.com', '$2y$10$TpmTuL8yS.xm780n8/QSd.IJH4VOIkTNfLvIjZRiwV7dQjEVoBMGC', '07579791168', 'England - London', 'e179at', 'Jagjshsu', '82', '172', 'Jshssgusis', 'ja high to 75', '5', 'Any', '2023-12-10', NULL, NULL, NULL, '1', NULL, 'tdmf8UPYTWNgarehuuQjwCmBs7i1', '1', '1', '0', '2023-12-11 00:52:19', '2023-12-19 19:49:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_officer_id_foreign` (`officer_id`),
  ADD KEY `attendances_job_id_foreign` (`job_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banks_officer_id_foreign` (`officer_id`),
  ADD KEY `banks_company_id_foreign` (`company_id`);

--
-- Indexes for table `chat_favorites`
--
ALTER TABLE `chat_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_favorites_officer_id_foreign` (`officer_id`),
  ADD KEY `chat_favorites_company_id_foreign` (`company_id`);

--
-- Indexes for table `chat_groups`
--
ALTER TABLE `chat_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_groups_company_id_foreign` (`company_id`),
  ADD KEY `chat_groups_job_id_foreign` (`job_id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_messages_chat_favorite_id_foreign` (`chat_favorite_id`),
  ADD KEY `chat_messages_chat_group_id_foreign` (`chat_group_id`),
  ADD KEY `chat_messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_reviews_company_id_foreign` (`company_id`),
  ADD KEY `company_reviews_user_id_foreign` (`user_id`),
  ADD KEY `company_reviews_job_id_foreign` (`job_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_applies`
--
ALTER TABLE `contractor_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_applies_quotation_id_foreign` (`quotation_id`),
  ADD KEY `contractor_applies_contractor_id_foreign` (`contractor_id`);

--
-- Indexes for table `contractor_bill_summaries`
--
ALTER TABLE `contractor_bill_summaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_bill_summaries_job_id_foreign` (`job_id`),
  ADD KEY `contractor_bill_summaries_contractor_id_foreign` (`contractor_id`);

--
-- Indexes for table `contractor_jobs`
--
ALTER TABLE `contractor_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_jobs_contractor_id_foreign` (`contractor_id`),
  ADD KEY `contractor_jobs_contractor_quotation_id_foreign` (`contractor_quotation_id`);

--
-- Indexes for table `contractor_job_wish_lists`
--
ALTER TABLE `contractor_job_wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_job_wish_lists_contractor_id_foreign` (`contractor_id`),
  ADD KEY `contractor_job_wish_lists_quotation_id_foreign` (`quotation_id`);

--
-- Indexes for table `contractor_quotations`
--
ALTER TABLE `contractor_quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_quotations_company_id_foreign` (`company_id`),
  ADD KEY `contractor_quotations_parent_id_foreign` (`parent_id`),
  ADD KEY `contractor_quotations_main_job_id_foreign` (`main_job_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorit_officers`
--
ALTER TABLE `favorit_officers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorit_officers_company_id_foreign` (`company_id`),
  ADD KEY `favorit_officers_officer_id_foreign` (`officer_id`);

--
-- Indexes for table `job_packages`
--
ALTER TABLE `job_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_packages_company_id_foreign` (`company_id`);

--
-- Indexes for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_requests_officer_id_foreign` (`officer_id`),
  ADD KEY `job_requests_job_id_foreign` (`job_id`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_company_id_foreign` (`company_id`),
  ADD KEY `notifications_contractor_id_foreign` (`contractor_id`),
  ADD KEY `notifications_officer_id_foreign` (`officer_id`),
  ADD KEY `notifications_officer_job_id_foreign` (`officer_job_id`),
  ADD KEY `notifications_contractor_job_id_foreign` (`contractor_job_id`),
  ADD KEY `attendance_id_with_attendance` (`attendance_id`);

--
-- Indexes for table `officer_applies`
--
ALTER TABLE `officer_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_applies_quotation_id_foreign` (`quotation_id`),
  ADD KEY `officer_applies_officer_id_foreign` (`officer_id`);

--
-- Indexes for table `officer_bill_summaries`
--
ALTER TABLE `officer_bill_summaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_bill_summaries_job_id_foreign` (`job_id`),
  ADD KEY `officer_bill_summaries_officer_id_foreign` (`officer_id`);

--
-- Indexes for table `officer_documents`
--
ALTER TABLE `officer_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_documents_officer_id_foreign` (`officer_id`);

--
-- Indexes for table `officer_jobs`
--
ALTER TABLE `officer_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_jobs_officer_id_foreign` (`officer_id`),
  ADD KEY `officer_jobs_officer_quotation_id_foreign` (`officer_quotation_id`);

--
-- Indexes for table `officer_job_wish_lists`
--
ALTER TABLE `officer_job_wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_job_wish_lists_officer_id_foreign` (`officer_id`),
  ADD KEY `officer_job_wish_lists_quotation_id_foreign` (`quotation_id`);

--
-- Indexes for table `officer_quotations`
--
ALTER TABLE `officer_quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_quotations_company_id_foreign` (`company_id`),
  ADD KEY `officer_quotations_contractor_quotation_id_foreign` (`contractor_quotation_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_conditions`
--
ALTER TABLE `term_conditions`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat_favorites`
--
ALTER TABLE `chat_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_groups`
--
ALTER TABLE `chat_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contractor_applies`
--
ALTER TABLE `contractor_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contractor_bill_summaries`
--
ALTER TABLE `contractor_bill_summaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `contractor_jobs`
--
ALTER TABLE `contractor_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contractor_job_wish_lists`
--
ALTER TABLE `contractor_job_wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contractor_quotations`
--
ALTER TABLE `contractor_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorit_officers`
--
ALTER TABLE `favorit_officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_packages`
--
ALTER TABLE `job_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `job_requests`
--
ALTER TABLE `job_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2618;

--
-- AUTO_INCREMENT for table `officer_applies`
--
ALTER TABLE `officer_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `officer_bill_summaries`
--
ALTER TABLE `officer_bill_summaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1504;

--
-- AUTO_INCREMENT for table `officer_documents`
--
ALTER TABLE `officer_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `officer_jobs`
--
ALTER TABLE `officer_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `officer_job_wish_lists`
--
ALTER TABLE `officer_job_wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `officer_quotations`
--
ALTER TABLE `officer_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1412;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendances_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `banks_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_favorites`
--
ALTER TABLE `chat_favorites`
  ADD CONSTRAINT `chat_favorites_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_favorites_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_groups`
--
ALTER TABLE `chat_groups`
  ADD CONSTRAINT `chat_groups_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_groups_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD CONSTRAINT `chat_messages_chat_favorite_id_foreign` FOREIGN KEY (`chat_favorite_id`) REFERENCES `chat_favorites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_messages_chat_group_id_foreign` FOREIGN KEY (`chat_group_id`) REFERENCES `chat_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD CONSTRAINT `company_reviews_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_reviews_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_applies`
--
ALTER TABLE `contractor_applies`
  ADD CONSTRAINT `contractor_applies_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_applies_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_bill_summaries`
--
ALTER TABLE `contractor_bill_summaries`
  ADD CONSTRAINT `contractor_bill_summaries_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_bill_summaries_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_jobs`
--
ALTER TABLE `contractor_jobs`
  ADD CONSTRAINT `contractor_jobs_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_jobs_contractor_quotation_id_foreign` FOREIGN KEY (`contractor_quotation_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_job_wish_lists`
--
ALTER TABLE `contractor_job_wish_lists`
  ADD CONSTRAINT `contractor_job_wish_lists_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_job_wish_lists_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_quotations`
--
ALTER TABLE `contractor_quotations`
  ADD CONSTRAINT `contractor_quotations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_quotations_main_job_id_foreign` FOREIGN KEY (`main_job_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractor_quotations_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorit_officers`
--
ALTER TABLE `favorit_officers`
  ADD CONSTRAINT `favorit_officers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorit_officers_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_packages`
--
ALTER TABLE `job_packages`
  ADD CONSTRAINT `job_packages_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD CONSTRAINT `job_requests_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_requests_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `attendance_id_with_attendance` FOREIGN KEY (`attendance_id`) REFERENCES `attendances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_contractor_job_id_foreign` FOREIGN KEY (`contractor_job_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_officer_job_id_foreign` FOREIGN KEY (`officer_job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_applies`
--
ALTER TABLE `officer_applies`
  ADD CONSTRAINT `officer_applies_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `officer_applies_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_bill_summaries`
--
ALTER TABLE `officer_bill_summaries`
  ADD CONSTRAINT `officer_bill_summaries_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `officer_bill_summaries_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_documents`
--
ALTER TABLE `officer_documents`
  ADD CONSTRAINT `officer_documents_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_jobs`
--
ALTER TABLE `officer_jobs`
  ADD CONSTRAINT `officer_jobs_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `officer_jobs_officer_quotation_id_foreign` FOREIGN KEY (`officer_quotation_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_job_wish_lists`
--
ALTER TABLE `officer_job_wish_lists`
  ADD CONSTRAINT `officer_job_wish_lists_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `officer_job_wish_lists_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `officer_quotations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_quotations`
--
ALTER TABLE `officer_quotations`
  ADD CONSTRAINT `officer_quotations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `officer_quotations_contractor_quotation_id_foreign` FOREIGN KEY (`contractor_quotation_id`) REFERENCES `contractor_quotations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2023 at 05:36 AM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranglnbo_greenapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h2>Greenapp<br />\r\n<br />\r\nWe are Abu Dhabi Based Registered Company - We Aim to Provide the best services at your fingertips<br />\r\n&nbsp;</h2>\r\n\r\n<p>We provide exceptional government typing services for corporates and Individuals.</p>\r\n\r\n<p>Typing Centre Visa Services for Companies and Individuals<br />\r\nProvision of all typing centre activities related to all government functions (same as Tasheel, Tawjeeh and Amer Centre).<br />\r\nWe provide (Government Relations, Ministry of Labour,&nbsp;Ministry of Economic Development, Ministry of Interior, Ministry of Health, Federal Authority for Identity and Citizenship, Department of Municipalities and Transport,&nbsp;Judicial department Services,&nbsp;Ministry of Foreign Affairs and other government department services to ensure client business&rsquo;s smooth operation.</p>\r\n\r\n<p><strong>Commercial License Number: CN-4817170</strong></p>', NULL, '2023-05-05 20:12:52');

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
(1, 'Greepapp Admin Pannel', 'admin@gmail.com', '0562680492', '$2y$10$XAZhLSSmSQXVbjihq.0bJekmjyA1m64NMjTwLJA50Xa/ZiImaIioS', 'public/admin/assets/img/1675165178.jpg', '2023-01-31 06:15:56', '2023-06-13 17:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `to_all` varchar(255) NOT NULL,
  `seen` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `title`, `message`, `to_all`, `seen`, `created_at`, `updated_at`) VALUES
(32, 'All Employees', 'Testing notification which is send to all types of employees.', 'All Employees', 1, '2023-11-24 11:11:15', '2023-11-24 11:17:24'),
(33, 'Employees', 'Testing employees which are belongs to companies.', 'Employees', 1, '2023-11-24 11:12:19', '2023-11-30 21:01:01'),
(34, 'Company Notice', 'Your request has been rejected.', 'Companies', 1, '2023-11-24 11:12:58', '2023-11-24 13:31:24'),
(35, 'Self Employees', 'Testing notifications which are send to all self employees.', 'Self Employees', 1, '2023-11-24 11:13:41', '2023-11-24 11:17:24'),
(36, 'Inquiry', 'Inquiry', 'Self Employees', 1, '2023-11-24 13:27:00', '2023-11-24 13:29:35'),
(37, 'Update', 'Greetings', 'Companies', 1, '2023-11-24 13:29:26', '2023-11-24 13:31:24'),
(38, 'Testing', 'Company\'s Notification', 'Companies', 1, '2023-11-24 19:44:07', '2023-11-24 19:45:46'),
(39, 'Test', '12345', 'Self Employees', 1, '2023-11-27 16:19:16', '2023-11-27 16:19:41'),
(40, 'h', 'h', 'Individuals', 1, '2023-11-29 15:33:48', '2023-11-29 15:33:58'),
(41, 'qwq', 'wqw', 'Companies', 1, '2023-11-29 15:47:15', '2023-11-30 21:00:12'),
(42, 'qwq', 'wqw', 'Companies', 1, '2023-11-29 16:00:20', '2023-11-30 21:00:12'),
(43, 'Testing', 'Testing', 'Companies', 1, '2023-11-29 16:14:39', '2023-11-30 21:00:12'),
(44, 'd', 'd', 'Individuals', 1, '2023-12-01 19:22:35', '2023-12-01 19:22:43'),
(45, 'd', 'd', 'Individuals', 1, '2023-12-01 19:25:41', '2023-12-01 19:26:04'),
(46, 'MOHRE', 'Work Permit Fees updated for company catorgary 2', 'Companies', 1, '2023-12-01 20:57:58', '2023-12-01 20:58:14'),
(47, 'Arabic Typing Testing', 'السلام عليكم', 'Companies', 1, '2023-12-01 20:59:49', '2023-12-01 20:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `establishment_no` varchar(255) DEFAULT NULL,
  `establishment_issue_date` date DEFAULT NULL,
  `establishment_expiry_date` date DEFAULT NULL,
  `license_no` varchar(255) DEFAULT NULL,
  `license_issue_date` date DEFAULT NULL,
  `license_expiry_date` date DEFAULT NULL,
  `mohre_no` varchar(255) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `tenancy` varchar(255) DEFAULT NULL,
  `tenancy_issue_date` date DEFAULT NULL,
  `tenancy_expiry_date` date DEFAULT NULL,
  `e_channel_issue_date` date DEFAULT NULL,
  `e_channel_expiry_date` date DEFAULT NULL,
  `daman_police_number` varchar(255) DEFAULT NULL,
  `daman_customer_number` varchar(255) DEFAULT NULL,
  `other_insurance_policy_number` varchar(255) DEFAULT NULL,
  `po_box` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_delete` enum('0','1') NOT NULL DEFAULT '0',
  `admin_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `phone`, `image`, `email`, `password`, `establishment_no`, `establishment_issue_date`, `establishment_expiry_date`, `license_no`, `license_issue_date`, `license_expiry_date`, `mohre_no`, `issue_date`, `expiry_date`, `tenancy`, `tenancy_issue_date`, `tenancy_expiry_date`, `e_channel_issue_date`, `e_channel_expiry_date`, `daman_police_number`, `daman_customer_number`, `other_insurance_policy_number`, `po_box`, `created_at`, `updated_at`, `company_delete`, `admin_delete`) VALUES
(1, 'text', '03047299635', 'public/admin/assets/img/users/1678102415.jpg', 'ranglerz@gmail.com', '$2y$10$qU91zKrXwjmxTy.xmHFZ2O272FPJteLSKjwyrnDbafkdxFnAjoHqq', 'text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 16:32:51', '2023-06-23 08:55:27', '0', '0'),
(4, 'hostel khata', '03047299635', 'public/admin/assets/img/users/1675332882.jpg', 'arshadfaarsi13+5@gmail.com', '$2y$10$eBYs6CWgtVDwHTv4neUolevVGpk.EBWp.tiJpdqdOtTAh1RrwgZcq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-14 11:13:38', '2023-03-14 11:13:38', '0', '0'),
(5, 'imran', '03009000600', 'public/admin/assets/img/users/1675332882.jpg', 'imrandogar@gmail.com', '$2y$10$PHzy4JrgQFQBvAUhSN4kx.scnmQoNmRQ68kAQu3PgjDutrQwlsZEK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 14:23:58', '2023-03-17 14:23:58', '0', '0'),
(6, 'greenapptyping', '0562680492', 'public/admin/assets/img/users/1679488080.png', 'greenapptyping@gmail.com', '$2y$10$ulZ9eEwQkeP8HuUcMzfmYulfcTVso8Fy6lixqYt1fFMmVbGnseyIu', '826010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 16:49:32', '2023-06-19 15:20:18', '0', '0'),
(8, 'Lee Bullock Traders', '70', 'public/admin/assets/img/users/1675332882.jpg', 'aliashraf20026+9@gmail.com', '$2y$10$5xc6l3e0oJVJmQ354J1JX.FHB5F/EgrioswJO6hBGFFfv7G1Wsj.q', 'Dolor proident odit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 12:58:26', '2023-05-18 14:39:31', '0', '0'),
(9, 'Kitra Valencia', '03348058699', 'public/admin/assets/img/users/1675332882.jpg', 'aliashraf20026+97@gmail.com', '$2y$10$xV3ojDMQ8ABy.B/iXqssSOSF6h.mto8r7EpG4Te2UgPr.WBeYFgfa', 'Numquam incidunt mo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 13:04:09', '2023-04-06 13:04:09', '0', '0'),
(10, 'Ariel Marshall', '03348058699', 'public/admin/assets/img/users/1675332882.jpg', 'aliashraf20026+76@gmail.com', '$2y$10$xuQhJVi6yLECn/9QN8qmG./KQyk8STx8Pdk0dJmA24LWPzti.t4nW', 'Iusto consequatur A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 13:05:52', '2023-04-06 13:05:52', '0', '0'),
(11, 'Preston and Hendricks Trading', 'Hardy Lewis Traders', 'public/admin/assets/img/users/1675332882.jpg', 'zafomyfih@mailinator.com', '$2y$10$La8eUj/QznRjf5ySI3dE1u4tLR5ECIa.yLYujvHrbHxEpusuuc7dO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 14:04:25', '2023-04-06 14:04:25', '0', '0'),
(13, 'Shah Zeb', '+923358076120', 'public/admin/assets/img/users/1675332882.jpg', 'shahzeb615180@gmail.com', '$2y$10$C8K8l7fZ3pePSuk4i40kL.1H2vW0oXA2Nh4hp7qrWV3CXI6wZQm3S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 20:58:34', '2023-05-02 20:58:34', '0', '0'),
(14, 'CITY GATE CARGO FORWARDING BRANCH', '0551395775', 'public/admin/assets/img/users/1685088826.jpg', 'citygatecargobr@gmail.com', '$2y$10$N/AyT9nnujTLAex.fYJyg.jbLrB/wv8OSLG7xxcxoSAdIA4uLfoLO', '175741', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-26 12:13:46', '2023-05-26 12:13:46', '0', '0'),
(15, 'INTRACT GENERAL CONTRACTING L.L.C.', '0502470923', 'public/admin/assets/img/users/1675332882.jpg', 'intract@gmail.com', '$2y$10$prqzUDw4uzhLbB/QzOQtcu2iqrWZiLNZGACcilosPeTJ0lyoROr0W', '789115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 21:39:55', '2023-06-23 20:00:35', '0', '0'),
(17, 'Sharon', '09811731881', 'public/admin/assets/img/users/1675332882.jpg', 'sharondumrigue@gmail.com', '$2y$10$ESMv7eKsb6ap6kqvkIXYq.Ruy40BVVNDSRWLvnEPIeSJGVPUCV1m.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 19:59:12', '2023-07-15 19:59:12', '0', '0'),
(18, 'MICHEAL COMPUTERS AND SOFTWARES', '09157657860', 'public/admin/assets/img/users/1675332882.jpg', 'elewandosky5002@gmail.com', '$2y$10$R.juHKawQh7IYPSOf.AUYuZb2hZQRe2VODiq7wcoXv08VDG8IFwGm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 02:38:59', '2023-07-18 02:38:59', '0', '0'),
(19, 'Kedi health care', '0913725658', 'public/admin/assets/img/users/1675332882.jpg', 'quassimbarakat6@gmail.com', '$2y$10$xGlpLkVU4CHexQBhdFBV6uAtm/1p6azeYlyXXmuhxNwyHSQp9vYqS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-28 02:02:04', '2023-07-28 02:02:04', '0', '0'),
(20, 'Clyde Diverson', '09097221343', 'public/admin/assets/img/users/1675332882.jpg', 'palomaresclyde@gmail.com', '$2y$10$8fXsSo9zSKOeUiSqT1KLYOP1SzpjOtYHZpyz18N3ws0S.4.Xt0.Ja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-30 07:34:38', '2023-07-30 07:34:38', '0', '0'),
(21, 'Stella', '08108698263', 'public/admin/assets/img/users/1675332882.jpg', 'sundaybari2022@gmail.com', '$2y$10$yUv1vF2.VQQsRtPn3w/fRumFVxyHIV0wXEYDf201kYVxmXjGWQoxy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 01:11:15', '2023-07-31 01:11:15', '0', '0'),
(22, 'ساناز جویباری', '09194162377', 'public/admin/assets/img/users/1675332882.jpg', 'sanazjooibarysani@gmail.com', '$2y$10$92a0oTdD6Y7LodTLEPVnDu/TjW2.Laahq8skWGPxem4.Z3GbdG4oG', '5859831012234414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 16:16:03', '2023-08-11 16:19:06', '0', '0'),
(23, 'Ashfaq jazzcash centre', '03265825610', 'public/admin/assets/img/users/1675332882.jpg', 'aliwadood561@gmail.com', '$2y$10$.i2lDUPLMVCoP3JYBl/ooOtkOb2mpbAGsG6wt4CMLYl5z8sZhsuua', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 18:32:24', '2023-08-11 18:32:24', '0', '0'),
(24, 'Zairheyne', '09925645002', 'public/admin/assets/img/users/1675332882.jpg', 'delacruzzairheynejoesil@gmail.com', '$2y$10$ZF5IOfGFdKGIOvekp932A.dQ7Mi4bMeknPObB0GVKx1eb2UU0inY6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 16:07:33', '2023-08-16 16:07:33', '0', '0'),
(25, 'shella', '09810846055', 'public/admin/assets/img/users/1675332882.jpg', 'shellamaetorriente626@gmail.com', '$2y$10$XINlUtrL.paQd5mCdIlnhuuJx0q886MyYAKRsQWkYX0281EvRoSPS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-19 09:33:24', '2023-08-19 09:33:24', '0', '0'),
(26, 'Sefam', '03084106582', 'public/admin/assets/img/users/1675332882.jpg', 'ladlaprince952@gmail.com', '$2y$10$lqoYQHPACnqXH43ShSbtMe2V3yiVyA5ZhFcWbtfQKFqlq7tlK5hn2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-11 13:54:25', '2023-10-11 13:54:25', '0', '0'),
(27, 'Hussain bakish', '03462783533', 'public/admin/assets/img/users/1675332882.jpg', 'qurbankhansolangi77@gmail.com', '$2y$10$hPaRBo1Tf1yJdGpVw2EOsup8DM5QfSuHQGXRQho.yCUjSGVms0.5W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-18 21:20:42', '2023-11-18 21:20:42', '0', '0'),
(28, 'Moon', '+1 (677) 921-3091', 'public/admin/assets/img/users/1675332882.jpg', 'm.usman.talat.2001@gmail.com', '$2y$10$N72.sFK2EMSJBACvkG.HEuHTxAfzSMjYXhNiANgQdzp1axCiQ.9OC', 'Explicabo Aut esse', '1978-10-08', '1997-05-21', 'Nam aute vitae moles', '1986-07-26', '2006-06-12', 'Voluptas sequi perfe', NULL, NULL, 'Tempor nihil proiden', '2014-08-12', '1975-09-02', '2020-06-12', '1995-03-25', '165', '196', '245', 'PO Box 9200', '2023-11-23 18:41:13', '2023-11-24 10:23:28', '0', '0'),
(29, 'Quail Deleon', '+1 (101) 503-8129', 'public/admin/assets/img/users/1675332882.jpg', 'cohozuc@mailinator.com', '$2y$10$FohDupPnp.aRxb6bUvjGx.KyFRkIilYwKHbxo6DppQ7QoIxMLo5Fu', 'Labore quidem vel ex', '2023-06-24', '1987-10-22', 'Delectus do iste in', '1987-10-01', '1973-11-26', 'Voluptatibus id ips', NULL, NULL, 'Sit et exercitation', '2014-05-01', '1989-04-28', '1990-05-21', '1984-08-09', '866', '926', '854', 'PO Box 42952', '2023-12-06 18:29:55', '2023-12-06 18:29:55', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `company_documents`
--

CREATE TABLE `company_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_documents`
--

INSERT INTO `company_documents` (`id`, `company_id`, `doc_name`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'public/admin/assets/img/users/16790569210.jpg', '2023-03-17 16:42:01', '2023-03-17 16:42:01'),
(2, 1, 'test', 'public/admin/assets/img/users/16790569211.jpg', '2023-03-17 16:42:01', '2023-03-17 16:42:01'),
(3, 6, 'Membership Certificate', 'public/admin/assets/img/users/16794701300.pdf', '2023-03-22 11:28:50', '2023-03-22 11:28:50'),
(4, 6, 'Tenancy Contract', 'public/admin/assets/img/users/16794701520.Pdf', '2023-03-22 11:29:12', '2023-03-22 11:29:12'),
(5, 6, 'Notarized MOA', 'public/admin/assets/img/users/16794702020.pdf', '2023-03-22 11:30:02', '2023-03-22 11:30:02'),
(8, 6, 'New Trade License', 'public/admin/assets/img/users/16817182440.pdf', '2023-04-17 11:57:24', '2023-04-17 11:57:24'),
(9, 6, 'Notarized MOA - New Owner', 'public/admin/assets/img/users/16817182940.pdf', '2023-04-17 11:58:14', '2023-04-17 11:58:14'),
(10, 6, 'immigration Est Card', 'public/admin/assets/img/users/16818059300.pdf', '2023-04-18 12:18:50', '2023-04-18 12:18:50'),
(11, 6, 'Yousaf - POA', 'public/admin/assets/img/users/16826879350.pdf', '2023-04-28 17:18:55', '2023-04-28 17:18:55'),
(12, 6, 'Letter Head', 'public/admin/assets/img/users/16830135680.pdf', '2023-05-02 11:46:08', '2023-05-02 11:46:08'),
(14, 14, 'Sponsor Unified Number', 'public/admin/assets/img/users/16850890350.jpeg', '2023-05-26 12:17:15', '2023-05-26 12:17:15'),
(15, 14, 'Sponsor EID', 'public/admin/assets/img/users/16850890351.jpeg', '2023-05-26 12:17:15', '2023-05-26 12:17:15'),
(16, 14, 'Sponsor Passport', 'public/admin/assets/img/users/16850890352.jpeg', '2023-05-26 12:17:15', '2023-05-26 12:17:15'),
(17, 14, 'Trade License', 'public/admin/assets/img/users/16850890353.jpeg', '2023-05-26 12:17:15', '2023-05-26 12:17:15'),
(18, 14, 'Establishment- card', 'public/admin/assets/img/users/16853429440.pdf', '2023-05-29 10:49:04', '2023-05-29 10:49:04'),
(19, 15, 'E Signature Card', 'public/admin/assets/img/users/16862462130.jpg', '2023-06-08 21:43:33', '2023-06-08 21:43:33'),
(20, 6, 'Typing Expenses', 'public/admin/assets/img/users/16865047770.xlsx', '2023-06-11 21:32:57', '2023-06-11 21:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(2, 'Albania', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(3, 'Algeria', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(4, 'Andorra', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(5, 'Angola', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(6, 'Antigua and Barbuda', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(7, 'Argentina', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(8, 'Armenia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(9, 'Austria', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(10, 'Azerbaijan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(11, 'Bahrain', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(12, 'Bangladesh', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(13, 'Barbados', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(14, 'Belarus', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(15, 'Belgium', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(16, 'Belize', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(17, 'Benin', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(18, 'Bhutan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(19, 'Bolivia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(20, 'Bosnia and Herzegovina', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(21, 'Botswana', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(22, 'Brazil', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(23, 'Brunei', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(24, 'Bulgaria', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(25, 'Burkina Faso', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(26, 'Burundi', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(27, 'Cabo Verde', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(28, 'Cambodia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(29, 'Cameroon', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(30, 'Canada', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(31, 'Central African Republic', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(32, 'Chad', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(33, 'Channel Islands', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(34, 'Chile', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(35, 'China', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(36, 'Colombia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(37, 'Comoros', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(38, 'Congo', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(39, 'Costa Rica', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(40, 'Côte d\'Ivoire', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(41, 'Croatia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(42, 'Cuba', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(43, 'Cyprus', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(44, 'Czech Republic', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(45, 'Denmark', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(46, 'Djibouti', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(47, 'Dominica', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(48, 'Dominican Republic', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(49, 'DR Congo', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(50, 'Ecuador', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(51, 'Egypt', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(52, 'El Salvador', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(53, 'Equatorial Guinea', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(54, 'Eritrea', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(55, 'Estonia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(56, 'Eswatini', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(57, 'Ethiopia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(58, 'Faeroe Islands', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(59, 'Finland', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(60, 'France', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(61, 'French Guiana', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(62, 'Gabon', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(63, 'Gambia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(64, 'Georgia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(65, 'Germany', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(66, 'Ghana', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(67, 'Gibraltar', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(68, 'Greece', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(69, 'Grenada', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(70, 'Guatemala', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(71, 'Guinea', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(72, 'Guinea-Bissau', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(73, 'Guyana', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(74, 'Haiti', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(75, 'Holy See', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(76, 'Honduras', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(77, 'Hong Kong', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(78, 'Hungary', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(79, 'Iceland', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(80, 'India', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(81, 'Indonesia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(82, 'Iran', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(83, 'Iraq', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(84, 'Ireland', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(85, 'Isle of Man', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(86, 'Israel', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(87, 'Italy', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(88, 'Jamaica', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(89, 'Japan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(90, 'Jordan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(91, 'Kazakhstan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(92, 'Kenya', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(93, 'Kuwait', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(94, 'Kyrgyzstan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(95, 'Laos', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(96, 'Latvia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(97, 'Lebanon', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(98, 'Lesotho', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(99, 'Liberia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(100, 'Libya', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(101, 'Liechtenstein', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(102, 'Lithuania', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(103, 'Luxembourg', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(104, 'Macao', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(105, 'Madagascar', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(106, 'Malawi', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(107, 'Malaysia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(108, 'Maldives', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(109, 'Mali', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(110, 'Malta', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(111, 'Mauritania', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(112, 'Mauritius', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(113, 'Mayotte', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(114, 'Mexico', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(115, 'Moldova', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(116, 'Monaco', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(117, 'Mongolia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(118, 'Montenegro', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(119, 'Morocco', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(120, 'Mozambique', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(121, 'Myanmar', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(122, 'Namibia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(123, 'Nepal', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(124, 'Netherlands', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(125, 'Nicaragua', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(126, 'Niger', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(127, 'Nigeria', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(128, 'North Korea', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(129, 'North Macedonia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(130, 'Norway', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(131, 'Oman', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(132, 'Pakistan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(133, 'Panama', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(134, 'Paraguay', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(135, 'Peru', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(136, 'Philippines', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(137, 'Poland', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(138, 'Portugal', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(139, 'Qatar', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(140, 'Réunion', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(141, 'Romania', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(142, 'Russia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(143, 'Rwanda', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(144, 'Saint Helena', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(145, 'Saint Kitts and Nevis', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(146, 'Saint Lucia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(147, 'Saint Vincent and the Grenadines', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(148, 'San Marino', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(149, 'Sao Tome & Principe', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(150, 'Saudi Arabia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(151, 'Senegal', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(152, 'Serbia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(153, 'Seychelles', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(154, 'Sierra Leone', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(155, 'Singapore', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(156, 'Slovakia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(157, 'Slovenia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(158, 'Somalia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(159, 'South Africa', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(160, 'South Korea', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(161, 'South Sudan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(162, 'Spain', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(163, 'Sri Lanka', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(164, 'State of Palestine', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(165, 'Sudan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(166, 'Suriname', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(167, 'Sweden', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(168, 'Switzerland', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(169, 'Syria', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(170, 'Taiwan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(171, 'Tajikistan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(172, 'Tanzania', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(173, 'Thailand', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(174, 'The Bahamas', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(175, 'Timor-Leste', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(176, 'Togo', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(177, 'Trinidad and Tobago', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(178, 'Tunisia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(179, 'Turkey', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(180, 'Turkmenistan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(181, 'Uganda', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(182, 'Ukraine', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(183, 'United Arab Emirates', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(184, 'United Kingdom', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(185, 'United States', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(186, 'Uruguay', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(187, 'Uzbekistan', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(188, 'Venezuela', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(189, 'Vietnam', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(190, 'Western Sahara', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(191, 'Yemen', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(192, 'Zambia', '2023-02-09 10:27:41', '2023-02-09 10:23:39'),
(193, 'Zimbabwe', '2023-02-09 10:27:41', '2023-02-09 10:23:39');

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
(1, '<p>What is greenapp?</p>', '<p>Greenapp is a mobile application and website through which you can request online for all govermental and individual services and we will process your applications.</p>', NULL, '2023-03-22 11:15:04'),
(2, '<p>Is Uploading Personal Information and Documents Safe?</p>', '<p>We Never Check your documents without your request for any application.</p>', '2023-03-22 11:16:35', '2023-03-23 11:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `individual_dependents`
--

CREATE TABLE `individual_dependents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dependent_type` varchar(255) DEFAULT NULL,
  `request_type` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individual_dependents`
--

INSERT INTO `individual_dependents` (`id`, `user_id`, `dependent_type`, `request_type`, `file`, `issue_date`, `expiry_date`, `response`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 118, 'Father', 'Personal Photo', 'public/admin/assets/img/users/17019440390.docx', '2023-12-15', '2023-12-30', NULL, NULL, NULL, '2023-12-07 15:13:59', '2023-12-07 15:13:59'),
(3, 118, 'Father', 'Personal Photo', 'public/admin/assets/img/users/17019444840.sql', '2023-12-30', '2023-12-21', NULL, NULL, NULL, '2023-12-07 15:21:24', '2023-12-07 15:21:24'),
(4, 118, 'Father', 'Personal Photo', 'public/admin/assets/img/users/17019457860.docx', '2023-12-30', '2023-12-29', NULL, NULL, NULL, '2023-12-07 15:43:06', '2023-12-07 15:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `individual_services`
--

CREATE TABLE `individual_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `req_type` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `seen_by_admin` int(1) NOT NULL DEFAULT 0,
  `seen_by_user` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individual_services`
--

INSERT INTO `individual_services` (`id`, `user_id`, `req_type`, `comment`, `file`, `response`, `status`, `seen_by_admin`, `seen_by_user`, `created_at`, `updated_at`) VALUES
(7, 61, 'Request for Documents Attestation', 'testing', NULL, 'Request For Document Upload', 'Pending', 1, 1, '2023-12-01 00:37:06', '2023-12-01 01:43:07'),
(9, 61, 'Request to Apply for Golden Visa Nomination', 's', NULL, NULL, 'Pending', 1, 0, '2023-12-01 01:35:31', '2023-12-01 01:43:07'),
(10, 61, 'Request to Apply for Golden Visa Nomination', 's', NULL, 'Upload your document', 'Upload your document', 1, 1, '2023-12-01 01:36:19', '2023-12-01 18:12:13'),
(15, 118, 'Request to Apply for Golden Visa Nomination', 'testing', NULL, 'Returned', 'Returned', 1, 1, '2023-12-01 18:13:05', '2023-12-01 18:42:44'),
(17, 118, 'Request to Apply for Golden Visa Nomination', 'ddd', 'public/admin/assets/img/users/1701440664.jpg', 'Skip', 'Skip', 1, 1, '2023-12-01 19:24:24', '2023-12-01 19:26:24'),
(19, 11, 'Request for Legal Translation', 'legal tr', NULL, 'Approved', 'Approved', 1, 1, '2023-12-01 19:58:08', '2023-12-01 20:19:03'),
(20, 119, 'Request to Apply for Golden Visa Nomination', 'Company\'s Employee', 'public/admin/assets/img/users/1701445759.jpg', 'Completed', 'Completed', 1, 1, '2023-12-01 20:49:19', '2023-12-01 20:50:03'),
(21, 11, 'Request for Visit Visa Services', 'visit visa request', NULL, 'Approved', 'Approved', 1, 1, '2023-12-01 20:52:35', '2023-12-01 20:53:46'),
(22, 11, 'New Business setup inquiry', 'Inquire about business', NULL, 'Rejected', 'Rejected', 1, 1, '2023-12-01 20:54:15', '2023-12-01 22:06:12'),
(23, 11, 'Request to Apply for Golden Visa Nomination', 'Please apply for the request', 'public/admin/assets/img/users/1701451724.png', 'Rejected', 'Rejected', 1, 1, '2023-12-01 22:28:44', '2023-12-04 18:15:06'),
(24, 11, 'Request for Legal Translation', 'transalation', 'public/admin/assets/img/users/1701510705.jpg', 'Returned', 'Returned', 1, 1, '2023-12-02 14:51:45', '2023-12-04 18:14:51'),
(25, 119, 'Request for Documents Attestation', 'Dear Sir attach documents for Translation (English to Arabic)', NULL, 'Approved', 'Approved', 1, 1, '2023-12-04 18:24:21', '2023-12-07 20:08:14'),
(26, 118, 'Request to Apply for Golden Visa Nomination', 'test', 'public/admin/assets/img/users/1701946092.png', 'Returned', 'Returned', 1, 1, '2023-12-07 15:48:13', '2023-12-07 15:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `seen` int(1) NOT NULL DEFAULT 0,
  `answered` int(1) NOT NULL DEFAULT 0,
  `individual_seen` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `user_id`, `question`, `answer`, `seen`, `answered`, `individual_seen`, `created_at`, `updated_at`) VALUES
(7, 2, 'what is green app', '<p>asdfghjhgfd</p>', 1, 0, 0, '2023-03-10 19:16:50', '2023-11-29 15:23:04'),
(15, 13, 'Hello Sir\r\nMy Name is Muhammad Abubaker', '<p>Thank you for asking greenapp</p><p>Please let us know how can we help you .. you can ask anything&nbsp;</p><p>Thank you&nbsp;</p>', 1, 0, 0, '2023-03-15 21:03:01', '2023-11-29 15:23:04'),
(17, 16, 'Hi Good evening', '<p>Hi Good Evening&nbsp;<br>how can we help you?</p>', 1, 0, 0, '2023-03-17 20:11:25', '2023-11-29 15:23:04'),
(19, 11, 'Test Inquiry', '<p>Done</p>', 1, 0, 0, '2023-03-20 20:24:33', '2023-11-29 15:23:04'),
(20, 17, 'Transit visa', '<p>Yes, We Can apply -&nbsp;</p>', 1, 0, 0, '2023-03-22 12:57:13', '2023-11-29 15:23:04'),
(21, 12, 'I need CV.', '<p>Thank you for contacting US&nbsp;<br>Your CV has been Attached in your file&nbsp;<br><br>Thank you</p>', 1, 0, 0, '2023-03-24 00:05:35', '2023-11-29 15:23:04'),
(23, 11, 'What\'s the new update in the app?', '<p>A lot of new features are coming - Stay Tuned&nbsp;</p>', 1, 0, 0, '2023-06-15 16:06:48', '2023-11-29 15:23:04'),
(24, 11, 'Any Update on my request?', '<p>It has been approved&nbsp;</p>', 1, 0, 0, '2023-06-21 10:57:34', '2023-11-29 15:23:04'),
(25, 11, 'Why the app is loading?', '<p>Greetings</p><p>We are working on it and will fix it as soon as possible&nbsp;</p><p>&nbsp;</p><p>Best wishes</p>', 1, 0, 0, '2023-07-26 16:14:15', '2023-11-29 15:23:04'),
(26, 11, 'What\'s the visa fees?', '<p>It depends on visa type</p>', 1, 0, 0, '2023-07-27 15:41:45', '2023-11-29 15:23:04'),
(27, 11, 'Hi', '<p>Received</p>', 1, 0, 0, '2023-08-17 22:44:14', '2023-11-29 15:23:04'),
(29, 11, 'Please quote us the family visa renewal cost\r\nWife and Kid (kid age is 12)', '<p>Greetings from Greenapp</p>', 1, 0, 0, '2023-11-24 13:35:39', '2023-11-29 15:23:04'),
(31, 11, '12345', '<p>678910</p>', 1, 0, 0, '2023-11-27 18:55:19', '2023-11-29 15:23:04'),
(32, 118, 'Testing', NULL, 1, 0, 0, '2023-11-29 15:22:02', '2023-11-29 15:23:04'),
(33, 118, 'Testing', '<p>b</p>', 1, 1, 1, '2023-11-29 15:22:48', '2023-11-29 15:32:42'),
(34, 118, 'Testing3', '<p>responsed successfully</p>', 1, 1, 1, '2023-11-29 15:23:20', '2023-11-29 15:24:01'),
(36, 11, 'Test inquiry 1', '<p>Answer 1</p>', 1, 1, 1, '2023-11-30 20:24:37', '2023-11-30 20:26:36'),
(37, 11, 'Test inquiry 2', '<p>Inquiry 2</p>', 1, 1, 1, '2023-11-30 20:24:47', '2023-11-30 20:26:36'),
(38, 118, 'testing', '<p>d</p>', 1, 1, 1, '2023-12-01 19:21:25', '2023-12-01 19:22:15'),
(39, 11, 'inquiry test 1', '<p>inquiry test 1 - responded - 2 - 3</p>', 1, 1, 1, '2023-12-02 14:54:50', '2023-12-07 22:47:27');

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
(6, '2023_01_10_101350_create_companies_table', 1),
(7, '2023_01_10_114334_create_company_documents_table', 1),
(10, '2023_01_18_102651_create_faqs_table', 1),
(11, '2023_01_18_110722_create_about_us_table', 1),
(12, '2023_02_09_101633_create_countries_table', 2),
(13, '2023_01_10_115236_create_users_table', 3),
(14, '2023_01_10_115959_create_user_documents_table', 3),
(15, '2023_02_22_080800_create_inquiries_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 74),
(1, 'App\\Models\\User', 120),
(1, 'App\\Models\\User', 121),
(1, 'App\\Models\\User', 123),
(2, 'App\\Models\\User', 74),
(2, 'App\\Models\\User', 120),
(2, 'App\\Models\\User', 121),
(2, 'App\\Models\\User', 123),
(3, 'App\\Models\\User', 120),
(3, 'App\\Models\\User', 121),
(3, 'App\\Models\\User', 123),
(4, 'App\\Models\\User', 120),
(4, 'App\\Models\\User', 121),
(4, 'App\\Models\\User', 123),
(6, 'App\\Models\\User', 121),
(12, 'App\\Models\\User', 121);

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
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `company_id`, `user_id`, `admin_id`, `note`, `created_at`, `updated_at`) VALUES
(3, 6, NULL, NULL, NULL, '2023-08-29 11:25:42', '2023-11-29 11:37:04'),
(4, 8, NULL, NULL, 'aaaaaaaawwwwww55555', '2023-08-29 17:22:29', '2023-09-05 09:55:49'),
(5, NULL, 11, NULL, 'My User id and password are safe here', '2023-09-30 21:37:26', '2023-09-30 21:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `guard` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `otp`, `guard`, `created_at`) VALUES
('imrandogar@gmail.com', '33xWquXbGQpBBjHgrGfKeJ3X4oAYy8', '872650', 'company', '2023-03-17 16:46:29'),
('arshadfaarsi13@gmail.com', 'Ozg3J5ZGMjw1uwtcSJdLQjyFs5Nwa0', '830787', 'web', '2023-03-20 14:24:34'),
('ranglerz@gmail.com', 'k8Md6u9FUDPCe33CphqMqMWZThkEIQ', '606818', 'company', '2023-03-21 04:38:37'),
('asfand.ranglerz@gmail.com', 'lVaWj7nkbjKiw8Po6ytGtr46tY1yLC', '241503', 'web', '2023-04-06 12:56:54'),
('aliashraf20026+9@gmail.com', '4b8ZuTue3RoZ4jw239uhA9si9kcCx2', '471437', 'company', '2023-04-06 12:59:01'),
('arshadfaarsi13+1@gmail.com', 'jjb8uJDrIXEnESDXJSZtYuvTAZ9QvD', '114506', 'web', '2023-04-06 13:37:49'),
('kristelmirandarobles@gmail.com', 'uQ41kY1lh7WEhoNzqYWr5pXVDOXCze', '526541', 'web', '2023-08-03 12:35:41'),
('hannayooheet@gmail.com', 's5L5PKSmPQy2VwrhneT5teTc3S4hca', '631670', 'web', '2023-08-10 14:30:23');

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
(1, 'Dashboard', 'web', '2023-12-04 05:49:21', '2023-12-06 04:01:36'),
(2, 'Companies', 'web', '2023-12-04 05:50:55', '2023-12-04 05:50:55'),
(3, 'Employees', 'web', '2023-12-04 05:51:04', '2023-12-04 05:51:04'),
(4, 'Individuals', 'web', '2023-12-04 05:51:14', '2023-12-04 05:51:14'),
(5, 'Notifications', 'web', '2023-12-04 05:51:34', '2023-12-04 05:51:34'),
(6, 'Inquiry', 'web', '2023-12-04 05:51:41', '2023-12-04 05:51:41'),
(7, 'Services', 'web', '2023-12-04 05:51:48', '2023-12-04 05:51:48'),
(8, 'FAQs', 'web', '2023-12-04 05:52:03', '2023-12-04 05:52:03'),
(9, 'About us', 'web', '2023-12-04 05:52:10', '2023-12-04 05:52:10'),
(10, 'Privacy Policy', 'web', '2023-12-04 05:52:22', '2023-12-04 05:52:22'),
(11, 'Terms & Conditions', 'web', '2023-12-04 05:52:52', '2023-12-04 05:52:52'),
(12, 'Sub Admin', 'web', '2023-12-06 04:01:52', '2023-12-06 04:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `permission_components`
--

CREATE TABLE `permission_components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `permission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_components`
--

INSERT INTO `permission_components` (`id`, `user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(72, 74, 1, '2023-12-06 03:49:42', '2023-12-06 03:49:42'),
(73, 74, 2, '2023-12-06 03:49:42', '2023-12-06 03:49:42'),
(86, 121, 1, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(87, 121, 2, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(88, 121, 3, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(89, 121, 4, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(90, 121, 6, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(91, 121, 12, '2023-12-06 18:29:30', '2023-12-06 18:29:30'),
(113, 120, 1, '2023-12-07 18:18:14', '2023-12-07 18:18:14'),
(114, 120, 2, '2023-12-07 18:18:14', '2023-12-07 18:18:14'),
(115, 120, 3, '2023-12-07 18:18:14', '2023-12-07 18:18:14'),
(116, 120, 4, '2023-12-07 18:18:14', '2023-12-07 18:18:14'),
(117, 123, 1, '2023-12-07 18:19:03', '2023-12-07 18:19:03'),
(118, 123, 2, '2023-12-07 18:19:03', '2023-12-07 18:19:03'),
(119, 123, 3, '2023-12-07 18:19:03', '2023-12-07 18:19:03'),
(120, 123, 4, '2023-12-07 18:19:03', '2023-12-07 18:19:03');

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
(1, '<h1>Privacy Policy for GreenApp</h1>\r\n\r\n<p>At GreenApp, accessible from https://greenapp.ae, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by GreenApp and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in GreenApp. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>GreenApp follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of GreenApp.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on GreenApp, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that GreenApp has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>GreenApp&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>GreenApp does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Changes to This Privacy Policy</h2>\r\n\r\n<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>\r\n\r\n<p>Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Privacy Policy Generator</a>.</p>\r\n\r\n<h2>Contact Us</h2>\r\n\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>', NULL, '2023-04-05 13:48:55');

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
(1, 'subadmin', 'web', NULL, NULL);

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
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `term_conditions`
--

INSERT INTO `term_conditions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h2>How is a paragraph structured?&nbsp;</h2>\r\n\r\n<p>Before we dive into paragraph structure, let&rsquo;s start with paragraph meaning. A paragraph is an individual segment of writing that discusses a central idea, typically with more than one sentence. It even has its own paragraph symbol in copyediting, called the&nbsp;<em>pilcrow</em>&nbsp;(&para;), not to be confused with the section symbol called the&nbsp;<em>silcrow</em>&nbsp;(&sect;) that&rsquo;s common in legal code.&nbsp;</p>\r\n\r\n<p>Here we focus mainly on paragraph structure, but feel free to read our&nbsp;<a href=\"https://www.grammarly.com/blog/paragraphs/\" target=\"_blank\">ultimate guide to paragraphs</a>&nbsp;for more of the basics.&nbsp;</p>\r\n\r\n<h3>Parts of a paragraph</h3>\r\n\r\n<p>Like other forms of writing, paragraphs follow a standard three-part structure with a beginning, middle, and end. These parts are the&nbsp;<strong>topic sentence</strong>,&nbsp;<strong>development and support</strong>, and&nbsp;<strong>conclusion</strong>.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.grammarly.com/blog/topic-sentences/\" target=\"_blank\"><strong>Topic sentences</strong></a>, also known as &ldquo;paragraph leaders,&rdquo; introduce the main idea that the paragraph is about. They shouldn&rsquo;t reveal too much on their own, but rather prepare the reader for the rest of the paragraph by stating clearly what topic will be discussed.&nbsp;</p>\r\n\r\n<p>The&nbsp;<strong>development and support sentences</strong>&nbsp;act as the body of the paragraph. Development sentences elaborate and explain the idea with details too specific for the topic sentence, while support sentences provide evidence, opinions, or other statements that back up or confirm the paragraph&rsquo;s main idea.&nbsp;</p>\r\n\r\n<p>Last, the&nbsp;<strong>conclusion</strong>&nbsp;wraps up the idea, sometimes summarizing what&rsquo;s been presented or transitioning to the next paragraph. The content of the conclusion depends on the type of paragraph, and it&rsquo;s often acceptable to end a paragraph with a final piece of support that concludes the thought instead of a summary.&nbsp;</p>\r\n\r\n<h3>How many sentences are in a paragraph?</h3>\r\n\r\n<p>Most paragraphs contain between three and five sentences, but there are plenty of exceptions. Different types of paragraphs have different numbers of sentences, like those in narrative writing, in particular, where single-sentence paragraphs are common.</p>\r\n\r\n<p>Likewise, the number of sentences in a paragraph can change based on the style of the writer. Some authors prefer longer, more descriptive paragraphs, while other authors prefer shorter, faster-paced paragraphs.&nbsp;</p>\r\n\r\n<p>When it comes to nonfiction writing, like&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-research-paper/\" target=\"_blank\">research papers</a>&nbsp;or&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-report/\" target=\"_blank\">reports</a>, most paragraphs have at least three sentences: a topic sentence, a development/support sentence, and a conclusion sentence.&nbsp;</p>', NULL, '2023-02-03 06:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `emp_type` varchar(255) DEFAULT NULL,
  `carrier_objectives` longtext DEFAULT NULL,
  `education_details` longtext DEFAULT NULL,
  `experience` longtext DEFAULT NULL,
  `license` varchar(3) DEFAULT NULL,
  `skills` longtext DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `unified_number` varchar(255) DEFAULT NULL,
  `emirate_id_number` varchar(255) DEFAULT NULL,
  `work_permit_number` varchar(255) DEFAULT NULL,
  `person_code` varchar(255) DEFAULT NULL,
  `pob` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `residence_no` varchar(255) DEFAULT NULL,
  `insurance_no` varchar(255) DEFAULT NULL,
  `salary_detail` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `image`, `password`, `dob`, `gender`, `nationality`, `religion`, `company_id`, `emp_type`, `carrier_objectives`, `education_details`, `experience`, `license`, `skills`, `father_name`, `mother_name`, `passport_number`, `unified_number`, `emirate_id_number`, `work_permit_number`, `person_code`, `pob`, `join_date`, `marital_status`, `residence_no`, `insurance_no`, `salary_detail`, `position`, `created_at`, `updated_at`) VALUES
(1, 'lybepadiw', '1345', 'arshadfaarsi13+2@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$do/PxfvY0pGh1Cd4FeRoq.F5L7iNwBDyXM0F.1R2FOD1aIthApkla', '2015-10-03', NULL, 'South Korea', 'Omnis nostrum velit', 1, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 18:15:09', '2023-03-09 10:50:28'),
(2, 'beqegedo', '46', 'arshadfaarsi13+1@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$L0MDCPJn4BSj32WrYt5dte.IpRLQHagV4xcgcWvoyVs9DNnriDTtm', '2004-03-18', 'Ad qui eos voluptat', 'Comoros', 'In quis enim sit iu', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Colin Cherry', 'Althea Cooke', '168', '432', '750', '194', 'Quia qui quo sed asp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 18:19:48', '2023-03-06 18:20:20'),
(7, 'supopi', '19', 'arshadfaarsi13@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$C3VghjKjCWD2kvuohNntEecEGppf.CHnqzhufXtWdsqAJ2uk9A8w.', '2018-06-25', NULL, 'Chile', 'Islam', 1, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-09 10:51:11', '2023-03-09 10:51:11'),
(8, 'seguxu', '32', 'aliashraf20026@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$EXy15mlWLHyulGrkhfo/4OlxvCl3YB95McaVy3m/yry2BNOC9f1r2', '1976-12-04', 'Ullamco hic natus ex', 'Sudan', 'Dolor quis blanditii', NULL, 'self', 'Pariatur Sit do re', 'Voluptatem et corpo', 'Est tempora necessit', 'Yes', 'Magnam rem cillum au,Aliqua Aut molestia,Laboriosam veniam,Ratione do irure ut,Sunt esse est con,Perferendis fugit i,Maxime voluptatum ne,Officia magnam ea ul,Consequatur ea repel', 'Ann Kim', 'Zephania Austin', '829', '712', '333', '843', 'Dignissimos eius inv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 12:22:14', '2023-12-04 14:35:56'),
(11, 'Muhammad Yousaf', '0562680492', 'iamyousaf099@gmail.com', 'public/admin/assets/img/users/1701673564.jpg', '$2y$10$OfGaPf4LeUNpgygvA3wCueAVVQ.l/xcUo8GsG9AkA/ARtEgG3jZN6', '1998-04-28', 'Male', 'Pakistan', 'Islam', NULL, 'self', 'Seeking a suitable position of a “Software Developer” where my past experience and knowledge would be fully utilized in a career opportunity and to reach great heights. As a self-motivated person, I do have intension to serve any esteemed organization with utmost sincerity that offers challenges to accomplish missions to achieve set goals with optimum perfections on the way to build up a career as a professional.', 'Metric', 'Currently working as a “Software Developer” Since august 2018.                                                                                                                     Currently working as a “Software Developer” Since august 2018.', 'Yes', 'Comunication,IT,Computer,Comunication,IT,Computer', 'Ihsan Ullah Khan', 'Mumtaz Begum', 'EW6915162', '58586654', '784199847496959', '100110657', '20028049835207', 'Hangu', '1998-04-28', 'Single', '101/2022/2/7754646', '101561', 'Total', NULL, '2023-03-14 18:16:24', '2023-12-07 22:55:50'),
(12, 'Rizwan U Dinn', '0509016180', 'muhammadsudais44@gmail.com', 'public/admin/assets/img/users/1679480109.jpg', '$2y$10$TCQk3a20rRBERC78czRSF.xOJUVg6vYhA4sI50iMv7/3r8m5uSXvO', '1998-05-09', 'Male', 'Pakistan', 'Islam', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Afzal Hameed', NULL, 'GY7790331', '228457359', '784199841669015', '102070840', '20009059858784', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-15 20:46:03', '2023-03-22 14:15:09'),
(13, 'Muhammad Abubaker', '03324975970', 'mab352hkr970@gmail.com', 'public/admin/assets/img/users/1679479263.JPG', '$2y$10$I45opqSrGyUCxz.IMz1FqeFTvr45hs7sydB2BUfkOPr0WbK8BFqwW', '1997-04-03', 'Male', 'Pakistan', 'Islam', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Ihsan Ullah Khan', 'Mumtaz Begum', 'AT1038621', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-15 20:50:20', '2023-07-25 11:50:07'),
(14, 'Tayyab', '03470638917', 'tayyab1.ranglerz@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$G/MwE5YVh74YBRlfCgzuM.VkUjqjaSA1Mqs4zK.BotsFeRTSJKqr2', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 16:49:39', '2023-03-17 16:49:39'),
(16, 'Edward Rigor', '0521554773', 'Edwardrigor.uae@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$.YNR/Noqiv9rkcOpRLxTM./8mlX8Hp9Orqqr/smT1pIoGJ6cJ/R0.', '1988-12-01', 'Male', 'Philippines', 'Jehova\'s Witnesses', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Edward Rigor', 'Alma Rigor', 'P1813508B', '12345', '784198810751523', '12345', '012346677890087666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 20:06:54', '2023-03-17 20:10:31'),
(17, 'Aqeel Ahmed', '0567486910', 'aqeelrauf145@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$yz6MuCAHDmUlXQhPmzyfquoytWdXEN0Y8TZBbG2s/F9ofsuLGGMMi', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-22 12:54:32', '2023-03-22 12:54:32'),
(19, 'Asfand', '03470638915', 'asfand.ranglerz@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$.6qh1N4f65bi83huJVKI9e9ov2vzf.xn4ZZgizK2RQHv0PeBofFFG', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 12:54:34', '2023-04-06 12:54:34'),
(20, 'Asfand Yar', '03470638915', 'asfand.ranglerz+1@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$aCC7njJgCfUTVoDHdSJO8O2cifXl6h8e.cy1ZLYSKE/qAxUu./vdi', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 14:10:35', '2023-04-06 14:10:35'),
(21, 'Ismail Patel', '0521441480', 'ismailmakadam@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$VWlEbZllUgXxc7IrpbAGAeEfDTPZt80PYO8YsHYR1.j6XZjYC1T5m', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-28 22:15:18', '2023-04-28 22:15:18'),
(22, 'Shah Zeb', '+923358076120', 'shahzeb61518@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$wgQWlLMicY8S2omBaYauPu2XRcRRjfWG3Ij7leQPJ..8URBPR.0qS', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 20:56:50', '2023-05-02 20:56:50'),
(23, 'Eman Alhamed', '0506883630', 'e.a_1985@icloud.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$ajtLKZ7g4l.6iuTxMdE3BOx5ZF8PrSqqT7O03zt4xunoNeaButyFy', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 23:49:59', '2023-05-02 23:49:59'),
(25, 'Abdul Razaq', '0507288507', 'abdulrazaq6507@gmail.com', 'public/admin/assets/img/users/1683294016.jpeg', '$2y$10$n21Xz/c16TixZyhz5zOOoeeqrwxEff47/a5lRe3XvdFgjL43GURUy', '1994-01-07', 'Male', 'Pakistan', 'Islam', NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AQ9866734', NULL, '784199473032029', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-05 17:37:24', '2023-05-05 17:40:16'),
(27, 'sheve', '09465217269', 'shevenaharaque@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Trg1Fv9LoZ10x6O/SV3a/.ZPg7yPmSKfhnlkt/Oivhj94GAuFldju', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-21 13:25:37', '2023-05-21 13:25:37'),
(28, 'Zea Baque', '09755889327', 'baquezea@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$54aiFSpr.OkDP6n6ZOmUgu32Wz0UT9fpvjqd5bhlpiZgtAg7REFyy', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-22 21:20:13', '2023-05-22 21:20:13'),
(29, 'Cherry', '09064551023', 'magallanescherry911@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$ajKjClRcwhM6a7C9wf2lKuZXJTLSqcNqTVUxaIOC5iMP3IYSRO5xq', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 18:23:11', '2023-05-28 18:23:11'),
(30, 'MUHAMMAD ZAKIR MIR WALI', '0502470923', 'zak@gmail.com', 'public/admin/assets/img/users/1686246340.JPG', '$2y$10$wQ2ZD85zQG6Sz3HwLXJ5pu4IR/ZZILGU4VdF8tzEUiHcPmqL8lH.e', '1997-05-10', NULL, 'Pakistan', 'Islam', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 21:45:40', '2023-06-08 21:45:40'),
(31, '09978821163', '+109978821163', 'rectoxyrine@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$0viAWzp3Wq8.zjwOFF/2GuN1OwB9xSX0QRvvMWiLyaH/fdKkwOnya', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-10 20:49:54', '2023-06-10 20:49:54'),
(32, 'sanymae lamsis', '09811726452', 'sanymaelamsis39@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$XY69.dggsgVkvqdJXWUvHuccLUKHEmM8uOdTc28utSbkGE3VJDLMO', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-11 09:18:51', '2023-06-11 09:18:51'),
(33, 'Cosmina M H Basser', '09533404878', 'gmail@cosminahbasser.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Vc.z2N1KCWogUxX0cf2gWeII/Nrcpn28z9/yPM1wroOTuV6eLW4mK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-11 10:46:33', '2023-06-11 10:46:33'),
(34, 'MUHAMMAD SHOAIB IHSAN ULLAH KHAN', '0562680492', 'shoiab@gmail.com', 'public/admin/assets/img/users/1691079442.jpg', '$2y$10$qJRNIxfJy3T.stgn6Ju6jOUe5Qer57KpcLnroaK0Whx0P7tmA2.XO', '2004-08-15', NULL, 'Pakistan', 'Islam', 6, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-11 11:11:40', '2023-08-03 20:17:22'),
(35, 'John carlo valledor', '09063280158', 'valledoronyok@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Ki5HDLTP.YFBgJ3YHyMcVeOgh4brooxPWskgrUs5g0z5bQ3XQ4oK6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-12 07:03:54', '2023-06-12 07:03:54'),
(36, 'Russ', '09706962893', 'arviependon123@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$O4J2FWjfMd04eIkc/gHK2eMUi5Yr6Bi5b2rklJG6j22xGmuCTSN1.', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-12 14:51:54', '2023-06-12 14:51:54'),
(37, 'Sakura nagata', '09664694119', 'sakuranagata4@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$PsihS53qdkNGZ22cmLyX0.JrutbvmskxrSrtL5JAJvIuDSJaYaIWa', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-13 04:45:55', '2023-06-13 04:45:55'),
(38, 'Shielo maria 09', '639552393339', 'oleisemarie294@gmail.com', 'public/admin/assets/img/users/1686646503.png', '$2y$10$x/HcILpc0KEdzTphYOXQ9OJOKPdQPc3he0yFmwSjU0b6.9AGQjWFy', '2001-02-09', 'Female', 'Philippines', 'Catholic', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Edel laorden', 'Reshel lecias', 'None', '09552393339', 'None', 'None', '6699', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-13 12:49:24', '2023-06-13 12:55:37'),
(39, 'dermin john miranda', '09510553151', 'djm38409@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$qBuQpGhoRxuo014CAuD3puI5oHyK6R6QMtzPDAy.u/7SfLZL4Kyti', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-14 08:07:46', '2023-06-14 08:07:46'),
(40, 'RIZWAN ULLAH KHAN AZIZ KHAN', '0562680492', 'rizwan@gmail.com', 'public/admin/assets/img/users/1686850811.jpeg', '$2y$10$oJ13zIQydCjU/Yo4RgqDoeOLyKdwav9Q4PfgqgpWGFyBYTZxy1e2G', '1995-08-01', NULL, 'Pakistan', 'Islam', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-15 21:40:11', '2023-06-15 21:40:11'),
(42, 'MUHAMMAD SULEMAN KHAN MUHAMMAD KHAN', '0562680492', 'SULEMAN@gmail.com', 'public/admin/assets/img/users/1687422248.jpg', '$2y$10$DIOk4D4.3DoNWz.Eai//Oe4IqbyHk.Tb0R/pidrf5Shc/RHZT/uJq', '1980-06-06', NULL, 'Pakistan', 'Islam', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 12:24:08', '2023-06-22 12:24:08'),
(43, 'Shivraj Prajapat', '0562680492', 'Shivraj@gmail.com', 'public/admin/assets/img/users/1687457074.jpg', '$2y$10$GDV.zsp4EFw6lETIjEFrle.hrUyv34zWQrXkEbM61fTlsUxfxtMLe', '1983-08-18', NULL, 'India', 'Hindu', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 21:25:51', '2023-06-22 22:04:34'),
(45, 'Samantha', '09678670883', 'samanthaorapa68@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$zxeEbTsxvxfoSX.RW1bCE.2jYFUqKMje2MhPnuBkYPPnYh3AFwBj6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-24 19:43:23', '2023-06-24 19:43:23'),
(46, 'Annabel Cabia', '09273260074', 'annabelcabia8@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$MomOfmWPVj7Epy.qwF0IbOKi3dupJ9M.90npvJrgX/UF1HIxlX7IC', '2006-05-19', 'Female', 'Philippines', 'Catholic', NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-04 10:51:31', '2023-07-04 10:58:56'),
(47, 'Lisa', '08148038540', 'tengsmafeng@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$nYK8gcw7RevoFqH8OwXGreHaRk1SaL0IHZ7GMCJxrcGYSZsxzlJnG', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-04 11:42:39', '2023-07-04 11:42:39'),
(48, 'RIA ROSE BAROTEA BRENA', '0562680492', 'RIA@gmail.com', 'public/admin/assets/img/users/1688482608.jpg', '$2y$10$YwJ.48Lt4ivfPydAQxAK.uQ.s8iNh8.nv7B7mVB9fdpY0gQmO/wgS', '1995-01-10', 'Female', 'Philippines', 'Christian', NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P3620769B', '223776996', '784199537005433', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-04 18:56:48', '2023-07-04 18:56:48'),
(49, 'Keisha Faye Dela Rita', '09852178864', 'coffeeebeeaauurrr@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$mUofGQY8HtfbsBZbVoSPoeJihA2Jwuwj5tEjKma2PH3bOmFxiYwu6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 21:26:57', '2023-07-07 21:26:57'),
(50, 'Keisha Faye Dela Rita', '09852178864', 'keishfaeydelarita@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$UxP9VkVMFk7EzjuRvTLW9eEuks9e5XRwGvGy3DCbCuOyqYLGgVrE6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 21:31:49', '2023-07-07 21:31:49'),
(51, 'Dave John Padilla', '09451832285', 'davejohnpadilla5@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$7rAgupNtkdxpkSjIUxtcPO4hBfYE10rcSeI3/F6wk4T9C9X4Z37b6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 12:06:21', '2023-07-10 12:06:21'),
(52, 'Jeanne', '09935085106', 'jeannenarisma11@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$/1B/cbirmy5nLXH3HxJ2/eW/u6dy8EbHrDR750QIx8tEzeiVwWov2', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 17:59:26', '2023-07-13 17:59:26'),
(53, 'asdasd', '09356522335', 'dcikpvy@exelica.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$MfyDOosjBNP/mP.3qwjNLet.562QkXMFPzr2OhPuTwcGq9ZP1hKDG', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-14 04:10:22', '2023-07-14 04:10:22'),
(54, 'Jay pee Francisco', '09307119011', 'christianfrancisco086@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$yk8f/pI.dvM9ewlzRdY0ue5FXhDpOnSvEjQSXrJroo8uX2uSzmTvK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 04:25:53', '2023-07-15 04:25:53'),
(55, 'Mark Joseph Populi', '+639602114972', 'populimarkjoseph757@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$alb9oTrEpGqrAZjM12UAM.GWHkJi/Rx5xkQgLPBjKgpxDNLfMdNHO', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 05:23:49', '2023-07-15 05:23:49'),
(56, 'Samantha Orapa', '09678670883', 'orapasam6@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$2jxrkENlE.xOZl34zuU7vednzFMvGYq3mzwG0ujf9WSEs8BpPcgLu', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 12:13:31', '2023-07-15 12:13:31'),
(57, 'Jennifer manie', '09303810533', 'jenifermani2005@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$MyjBk85Vqvf0QIlHX3niLuyJN5xgLd5cr7k/imonzn/qwytstc1YS', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:39:35', '2023-07-15 16:39:35'),
(58, 'RAVINDRA KUMAR', '0562680492', 'ravindra@gmail.com', 'public/admin/assets/img/users/1689521414.jpg', '$2y$10$Hi8qh4ZRHAV9oLmCKXDBMOkwHjL2VvxYgYN6sFPdtHcN/YiOxcNY.', '1992-09-12', NULL, 'India', 'Hindi', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-16 19:30:14', '2023-07-16 19:30:14'),
(59, 'Amier', '09352642426', 'amierbuisan5555@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$YZGI/RPXEqVxmFpHK3TvVOQ22ApxIfEA2HYOSG9JXEvgVqxIdQGIe', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 03:01:16', '2023-07-17 03:01:16'),
(60, 'Lovely Alibangbang', '+639066512459', 'alibangbanglovely86@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$vJnyjhri.lJibqx.ggKhcemfA7.iB6rThjormexj2zXe4Pe05LlNe', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 15:28:33', '2023-07-17 15:28:33'),
(61, 'AYYUB ALI KHAN YAKUB ALI KHAN', '0562680492', 'ayyub@gmail.com', 'public/admin/assets/img/users/1689704249.jpg', '$2y$10$OqSbNeVZpqMluzxHt6SdB.mbcFQOyE0ewZobIVSnJdpimXK.0Yck6', '1973-06-25', NULL, 'India', 'Islam', 15, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 22:17:29', '2023-07-18 22:17:29'),
(62, 'Maricel sayson', '09361043623', 'maricelsayson88@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$KtMRFWbpJGfzzLlloIJslOzP.i0STspzHDV65e6AvAWCmqvKanqyi', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-19 16:50:11', '2023-07-19 16:50:11'),
(63, 'Cindy Clare M. Marquez', '09207751951', 'cindyclaremarquez23@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Ns9qq2xcJTwuEOWqtMktjOM9LtHmFzzD039MsVpBO94jMwkc26MrC', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-20 13:15:13', '2023-07-20 13:15:13'),
(64, 'Princess Cueto', '09851093150', 'lhianacueto@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$hQlrpWPNKbuzE4Yy/MXHDe8bYZH7bVbgsGsQIyGEDWO1vo/GmOv8.', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-21 12:08:58', '2023-07-21 12:08:58'),
(65, 'Anna Murielle Polenio', '09089326347', 'polenio.a.m.bsmath@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$SvomZvRBTkY7klBesVz2z..gLlGQju1YTpuFAEzFneum.3231EToK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-21 20:25:43', '2023-07-21 20:25:43'),
(66, 'Jay-R', '09067126493', 'jayrurbano179@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$bYYJ6HSDCdKHkHYmHsS1.OecIATM87yejNYqfeTxmIJKHRLP8x1DK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-24 19:08:23', '2023-07-24 19:08:23'),
(67, 'Elias', '0793814487', 'nandasabaelias1@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$QP2wQ2qCjckUIsl8ykZrjOqeIrgOH6b0MktWbYVFkpVsJA2qkRqmC', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 20:17:20', '2023-07-26 20:17:20'),
(68, 'Nadzmer Nasir', '09650989727', 'nadzmernasir@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$RAm.cAjwVMzia.WztvP0Xe2qLDBPu4A0/kWuXFE.PcAxfYcHu3uJO', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 04:40:47', '2023-07-27 04:40:47'),
(69, 'Gerlyn Huellar', '09358153586', 'huellargerlyn@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$CCT7Wkq8lb69..ke8XOc4.aUkZRiAsdQNMvh1eKzTsYm8igJ98bZ.', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-30 06:20:35', '2023-07-30 06:20:35'),
(70, 'Jonard ivan pasibe', '0994 916 8417', 'vanessapasibe@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$D8Sw6oqXDlPeoQDobipU6.3V1k20KcJhsvbSJs8NC.6RIi0mxJwxC', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-30 19:17:15', '2023-07-30 19:17:15'),
(71, 'Windyduron', '09489862692', 'Windyduron681@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$oDP9NvfWWw7UXSJrmvLVhOxPWwFhhpkDfdtFT0x53vj6bK5NZXuK2', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 02:49:46', '2023-07-31 02:49:46'),
(72, 'Migs Baylon', '09560039792', 'migslndrbaylon@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$hPJtSiKcHyn4Jtw5SjOVP.l9bTdxXc2XHLri2v5ghxmY3BINbCwyy', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 15:39:47', '2023-08-02 15:39:47'),
(73, 'Kristel Miranda Robles', '09656939792', 'kristelmirandarobles@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$eoz/iWCgHUFaBdZnRb2K8echTL8t8pbjZu9MbxM3wj3H4pE9KZnYy', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-03 12:28:17', '2023-08-03 12:28:17'),
(74, 'Khalil Afzal', '03439321021', 'multidragon@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$YiGGyceh1GWT3uGoV1WU1.rGd9d7QSy3tBhWEEW10SgjS/Wlqq0I2', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-03 23:56:44', '2023-08-03 23:56:44'),
(75, 'Kristel Miranda Robles', '09656939792', 'kristel@huawei.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$5tIdIWIdnZP7G0EB7itfH.luyKcn74Jjp0O8PWTVN6/sKC9XEp8qu', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-06 10:34:41', '2023-08-06 10:34:41'),
(76, 'Muhammad Abu Bakar', '0562680492', 'abu@gmail.com', 'public/admin/assets/img/users/1691335409.JPG', '$2y$10$s0rFOJaMlBdvBI7abdDjvO0Unja.5JUy.7o9NJhmhe9hRflT.xZjS', '1997-04-03', NULL, 'Pakistan', 'Islam', 6, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-06 19:23:29', '2023-08-06 19:23:29'),
(77, 'Mark Jholan Alen Navarro', '09675980251', 'navarromarkjholan@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$VxK3PhkzM.4T6OEQoTiPIunPYGIX4glQjuvaFZbMwMOUeNfeRVg1i', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 20:20:40', '2023-08-08 20:20:40'),
(78, 'Rbykezmonk', '09354222352', 'kezmonkrby@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$f3Pb4khQhGAEpnoB86vFd.JbVXmvI77p3I8s.8YSuTlTW/pFmmSOq', '2002-06-26', 'Male', 'Philippines', 'Islam', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Robert caranain', 'Divine caranain', NULL, NULL, NULL, NULL, '1973', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 13:18:57', '2023-08-10 13:23:00'),
(79, 'Eugene baldago', '09504940329', 'eugenefran1998@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$yFkN/JhxE6GCEnLvRxkAt.1Ad7SmWQBRTIpYP49ArZv0UGJTvjHje', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 13:26:25', '2023-08-10 13:26:25'),
(80, 'Hanna yoo hee tuy', '09451139864', 'hannayooheet@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$.LlgX3b/8LaVVjlw5XXbWeTsRsBVBzthWHKM4.FPO3PQXd6ZpgWSK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 14:28:01', '2023-08-10 14:28:01'),
(81, 'Abery Torres', '09164276292', 'aberytorres@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$B5Cxla1NTHqXINbVQd6hLexB1NKCDJwzzPoZHhtik92xE7EHYfSVq', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 17:58:16', '2023-08-10 17:58:16'),
(82, 'Ashley', '09553047218', 'ashleyregidor202308@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$BV4k/F6jwAp8n.utFLvdKuja2QW6i9hIVruUcPoXVXL4OdUyZud2C', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 18:53:20', '2023-08-10 18:53:20'),
(83, 'Fred', '09813739941', 'alfredjabinar3@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$VKRyn9Lt2K9LRm86UEXd1eCr8ncDlXo9hjoNWFZ8mJxoICw2RsIsa', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 03:29:37', '2023-08-11 03:29:37'),
(84, 'Analyn', '09975086685', 'dantelegisma@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$guC8i6/g.qp8zQI7kPdg3.NUJFpyHr7e5Hg..xsUtY5V/n1g92Db.', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 05:37:14', '2023-08-11 05:37:14'),
(85, 'Cindie Francisco', '+109057974582', 'cindiefrancisco44@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$XWFRv93wqgHBKTpj/ezFJOltvgQGV3Il9teBBtRDgwDawS2rdA5YC', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 09:41:17', '2023-08-11 09:41:17'),
(86, 'Marychris', '09452354796', 'marychrisdgidacan@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$s/QUG0PEnxF4y18RA3kTEehj5XeiBGGtThUmxEXrWK9mwTVxkCEAK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 12:34:36', '2023-08-11 12:34:36'),
(87, 'Piplup', '+639274530567', 'mr8133942@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Jy8P.qvSf.2BG0JhfJD6mu3cp7V.6mDzmuYMGgNZOhcqQ7VFbrWYu', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 13:02:24', '2023-08-11 13:02:24'),
(88, 'Ivy Maestral', '09667527999', 'maestral.ivy0902@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$TcttatAwkxmFSD6iC1bvqOZ5t8ZmKKOGGMOethOwponpLOPgABIHi', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 13:04:18', '2023-08-11 13:04:18'),
(89, 'Ria', '09618288183', 'anony.ria.mous@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$CniMi1umSrA0JN/RkZMdRuDFeMZqIydnjp/SzRQnzlLc9mag8jo3S', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 14:53:53', '2023-08-11 14:53:53'),
(90, 'Anton', '09813302035', 'harukalescano@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$YVLESvkwoz/S9ASVGUp0WeF8x2xiPlOwQSXThujOwGL184R3PaT.C', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 18:26:04', '2023-08-11 18:26:04'),
(91, 'Ameerbadua', '639106405867', 'ameerbadua74@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$BKGenFj4Vwom2oOcNXMtNuanqT/dW4fv3s3sOg1LzRt00x/r3wfRG', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-12 07:48:42', '2023-08-12 07:48:42'),
(92, 'Jm', '09463248737', 'Jaymarktalaguit@gmail.come', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$s3yY3i61EO6rIpKZTPzBO.b2BaYNEhkdtZnGTDP/vavX.OWWI5A52', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-12 13:45:25', '2023-08-12 13:45:25'),
(93, 'Jm', '09463248737', 'Jaymarserviente@gmail.come', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$yRkQwJPu1hePvqfkcThHO.iNxo.eczj8Jeo4Ndsp4aMmOx02nIm9K', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-12 13:46:15', '2023-08-12 13:46:15'),
(94, 'alliah bongato', '09463639596', 'alliah.10232010@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$ilIYPsbSzundAgWwqwBlpueFrM.lCORRHBOjP3LdtaR43wRPgcr1i', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-13 19:45:10', '2023-08-13 19:45:10'),
(95, 'Jiovanie', '09057581275', 'pejanojiovanie5@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$N87xlioc.kjc.yDtndpAOejHUe4j/Sa2W.c5m9SLG95guwz4oiEGK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-14 10:08:16', '2023-08-14 10:08:16'),
(96, 'Diether', '09098501953', 'diethersantander437@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$JzPQTVM3UG0rMnh6IB0PFuOq6UluoFw/nGiUQQRYDjKVPjLIYEoSK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 03:32:39', '2023-08-16 03:32:39'),
(97, 'Diether Santander', '09098501953', 'diethersantander09@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$akb61Ns/sPtHJyubFly8bOp3X2jlhI1DLz3BCxW5Kd4MW2d/EqsWW', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 03:34:49', '2023-08-16 03:34:49'),
(98, 'Angelica', '09051400208', 'angelicasonza108@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$N4fZ/x6/Mrh/KgL1nvZZ4.ZK1Rdv9nKRedVECv2St4kF5zRXiTccm', '2010-06-24', 'Female', 'Philippines', 'Catholic', NULL, 'self', NULL, NULL, NULL, NULL, NULL, 'Christopher', 'Rita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-18 11:46:06', '2023-08-18 12:03:23'),
(99, 'Karlo', '+639365159635', 'karlodinopol16@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$c4o8NWXoUyEibEfT1tiIneGw4b5j08vYfL1EcaDS6td6BG1YHjEeC', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-18 12:11:00', '2023-08-18 12:11:00'),
(100, 'Kresneh', '0926156806/', 'khiaraaguilar.08@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$jA2E3ii60HHKTUMkvo07xOoKmmy4sLGJ4wXO8pMaIHI1ZumcHYcVK', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-18 20:14:17', '2023-08-18 20:14:17'),
(101, 'Babar javed', '03114031399', 'assadullah0399@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$DkKsYMSvXQVPcLIx9Ykx4u.eRYyMmvKd0npG7dnqk6gvuQ50G5Ade', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 08:06:48', '2023-08-24 08:06:48'),
(102, 'Jovelyn Branzuela', '09079008738', 'JovelynBranzuela@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$6NyTG/7psH2J.Bx21mYGz.wQ5LV9m87AhB3pP.uzWe67p.AP/Lg0O', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 09:50:37', '2023-08-24 09:50:37'),
(103, 'Patrick', '09187727166', 'lchester39@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$OFBXfNNGg2gWsNFbWNsKheD6zwbvmiicBMJowF/4Ox0DI7BTTekEu', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 18:27:28', '2023-08-24 18:27:28'),
(104, 'Cindy M. Romero', '09366531903', 'cindymangarinromero111@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$AV55yEO6.1rdn7GjlKWI9OBUIkBa48SWEjQj8zfQGJhk5TtVqf1Mq', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:04:02', '2023-08-27 08:04:02'),
(105, 'Emile MUHIRWA', '0782077574', 'emilemuhirwa12@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$6YTDpSu3b8QrXOCdMvOTb.15f7Yp5EJMkivbuhi5PgsxnULmtWI7W', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-10 06:57:33', '2023-09-10 06:57:33'),
(106, 'Oscar Barabara', '0706369663', 'B.oscar019@yahoo.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$NOEt8U6wJjbynsq1CDT1D.kWnYo3R70I/P4VFBMqR4ToBmm37XMaS', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 15:33:05', '2023-09-11 15:33:05'),
(107, 'Joseph Poyaoan', '+639947452930', 'poyaoanjoseph8@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$ivNk8GaELoySkegIcfZiPOXA5lPBJppNIde7Y/axHNLL.Nz1ug8u2', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 15:28:15', '2023-09-12 15:28:15'),
(108, 'Mary ann', '09197572208', 'mheannmijares435@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$2xZJe5r39Inh4cNyKkikLuRQHJR7wgNMlSJAW6FiAkI/x5xZYWnl.', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 09:32:30', '2023-09-13 09:32:30'),
(109, 'Michaela', '09674058040', 'markjosephestigoy07@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$A9oz5VJEn7KgwYGtgn9x1.NmO0WCOZSfIIYD9I2XldikPMO6mfCWa', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-17 08:39:06', '2023-09-17 08:39:06'),
(110, 'Anamie Budiongan', '09268674790', 'Anamiebudiongan16@outlook.ph', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Gt7g55CZRKYmcmNLMAGi7uNX9DyOTvnKbSVc54xWbj7I2MtoG/3V6', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-01 09:32:51', '2023-10-01 09:32:51'),
(111, 'paul john corpus', '0936 485 5814', 'vhecksante14@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$Q1/VWqVtmOEP5pzBmygfHOKQ.atIKg7hc42rtqzZAaaei6H/fyUly', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 10:25:29', '2023-10-06 10:25:29'),
(112, 'Sammy Singar', '254725140927', 'verohsingar844@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$EFjsmgtHO422piw2GrKi3Oe95HLMfyR/GZd0XN9LXPsDSbmuGLozG', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-15 00:16:44', '2023-10-15 00:16:44'),
(113, 'Mehul', 'Mehul.dhakan1@outlook.com', 'mehul.dhakan1@outlook.clm', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$HHZMT8nG5SwowwpINKiOJuIej7Vg.TBdKiFwWj6rjj1n1qDfNcCki', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-01 22:03:58', '2023-11-01 22:03:58'),
(114, 'Mehul', '0508091949', 'mehul.dhakan1@outlook.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$KV8V/1yr98drYzuETH2G7OHaNxIZ3hwvnxkVirigJzUz9RUT4nyRm', NULL, NULL, NULL, NULL, NULL, 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-01 22:05:18', '2023-11-01 22:05:18'),
(115, 'company-employee', '87', 'm.usman.talat.2001+1@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$18vNci/kj47T2UT3nnBWLO7KWoHrk/2CMdDqfj6Xy.EGWU8oFGFSi', '2019-09-26', 'Female', 'Poland', 'Atheist', 28, 'company', NULL, NULL, NULL, NULL, NULL, 'Emi Hahn', 'Baxter Bryant', '758', '539', '28', '415', 'Ad quia est pariatur', 'Sed minus sunt fugit', '1997-03-23', 'Widowed', 'Eiusmod est nisi re', 'Reprehenderit sed do', 'Total', 'Nihil amet aut eaqu', '2023-11-24 10:34:11', '2023-11-24 11:06:06'),
(118, 'Usman Usman', '03114397467', 'm.usman.talat.2001+2@gmail.com', 'public/admin/assets/img/users/1701433900.jpg', '$2y$10$VrN5ktxTqDt5wnaaLPB1b.qvf4rgHmvQVs8As5URQpEgpFUyRszYC', '2022-09-03', 'Male', 'United States', 'Buddhism', NULL, 'self', 'Hard-working and self-driven web developer with 5+ years\' relevant coding and site creation experience. Proactive and dedicated project manager looking for opportunities to pursue technology milestones while contributing to a company\'s business growth.', 'Hard-working and self-driven web developer with 5+ years\' relevant coding and site creation experience. Proactive and dedicated project manager looking for opportunities to pursue technology milestones while contributing to a company\'s business growth.Hard-working and self-driven web developer with 5+ years\' relevant coding and site creation experience. Proactive and dedicated project manager looking for opportunities to pursue technology milestones while contributing to a company\'s business growth.', 'Hard-working and self-driven web developer with 5+ years\' relevant coding and site creation experience. Proactive and dedicated project manager looking for opportunities to pursue technology milestones while contributing to a company\'s business growth.', 'Yes', 'Kotlin,Usamn,Basic,C++,C#', 'Valentine Vega', 'Naida Roach', '341', '700', '707', '707', 'Veniam ipsum sint', 'Blanditiis nulla acc', '2023-07-30', 'Single', 'Sit distinctio Cons', 'Animi aut irure Nam', 'Other Allowance', 'Ex sint laboris magn', '2023-11-29 15:21:13', '2023-12-07 15:19:52'),
(119, 'Test Employee', '0562608492', 'yousaf.freelancertypist@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$xpu.Yr8dK22InrpbwxUM/epfeF2uzCQdbkkxWL7J4vHOT6GDwIYKa', '1998-01-01', 'Male', 'Pakistan', 'Islam', 6, 'company', NULL, NULL, NULL, NULL, NULL, '123', '123', '123', '1231', '123', '1231', '0', 'Hangu', '2022-01-01', 'Single', '123', '1321', 'Total', 'Manager', '2023-11-30 21:00:05', '2023-11-30 21:00:05'),
(120, 'Usman', NULL, 'usman@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$OBSXiIgbQ9VV0U/XTa3jtejkRh892QI0U7lt41dVd/H6Y2YBNEv7e', NULL, NULL, NULL, NULL, NULL, 'subadmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-06 17:33:37', '2023-12-06 17:33:37'),
(121, 'subadmin', NULL, 'sub@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$fyXTTJnyMU1SoQ9nlM3ks.cxuUrpLm5M1w1VeK0ZiZIbVT0/2p3vS', NULL, NULL, NULL, NULL, NULL, 'subadmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-06 18:23:48', '2023-12-06 18:23:48'),
(123, 'test', NULL, 'test@gmail.com', 'public/admin/assets/img/users/1701946291.png', '$2y$10$p.q.gB74avsEYXmWn2Yv1.rtBlVWl.DfK.y0G4aegY1NZ5QpGIJ7O', NULL, NULL, NULL, NULL, NULL, 'subadmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 15:51:31', '2023-12-07 15:51:31'),
(124, 'Sub Admin 1', NULL, 'yousaf@gmail.com', 'public/admin/assets/img/users/1701961810.png', '$2y$10$aoJ3sse6X4q5vxiLIgzMu.FixR9EwuFp34JdwkfTeCUn/H.7yP7A.', NULL, NULL, NULL, NULL, NULL, 'subadmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 20:10:10', '2023-12-07 20:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doc_type` varchar(255) DEFAULT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `doc_type`, `doc_name`, `file`, `issue_date`, `expiry_date`, `comment`, `created_at`, `updated_at`) VALUES
(10, 14, 'Visit Visa', NULL, 'public/admin/assets/img/users/16790574220.jpg', '2023-03-17', '2023-03-26', NULL, '2023-03-17 16:50:22', '2023-03-17 16:50:22'),
(12, 11, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16794696400.jpg', '2022-08-24', '2024-08-23', NULL, '2023-03-22 11:20:40', '2023-03-22 11:20:40'),
(13, 13, 'Passport', NULL, 'public/admin/assets/img/users/16794793280.jpg', '2019-10-07', '2024-10-06', NULL, '2023-03-22 14:02:08', '2023-03-22 14:02:08'),
(14, 13, 'National Identity Card', NULL, 'public/admin/assets/img/users/16794793720.jpg', '2015-04-30', '2025-04-30', NULL, '2023-03-22 14:02:52', '2023-03-22 14:02:52'),
(15, 12, 'Passport', NULL, 'public/admin/assets/img/users/16794802160.jpeg', '2022-06-13', '2027-06-12', NULL, '2023-03-22 14:16:56', '2023-03-22 14:16:56'),
(16, 12, 'Work Permit', NULL, 'public/admin/assets/img/users/16794802860.jpg', '2022-11-30', '2024-11-29', NULL, '2023-03-22 14:18:06', '2023-03-22 14:18:06'),
(17, 12, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16794802861.jpeg', '2022-12-13', '2024-12-12', NULL, '2023-03-22 14:18:06', '2023-03-22 14:18:06'),
(18, 11, 'Work Permit', NULL, 'public/admin/assets/img/users/16794803900.jpg', '2022-08-23', '2024-08-22', NULL, '2023-03-22 14:19:50', '2023-03-22 14:19:50'),
(19, 12, 'CV', NULL, 'public/admin/assets/img/users/16796435690.pdf', NULL, NULL, NULL, '2023-03-24 11:39:29', '2023-03-24 11:39:29'),
(20, 12, 'Health Insurance Card', NULL, 'public/admin/assets/img/users/16797813120.pdf', '2022-12-04', '2023-11-13', NULL, '2023-03-26 01:55:12', '2023-03-26 01:55:12'),
(21, 7, 'Visa', NULL, 'public/admin/assets/img/users/16805217170.xlsx', '1984-01-16', '1988-09-02', 'Sit dolores ut volu', '2023-04-03 15:35:17', '2023-04-03 15:35:17'),
(22, 2, 'Diploma', NULL, 'public/admin/assets/img/users/16805898570.pdf', '1976-06-10', '2005-05-10', NULL, '2023-04-04 10:30:57', '2023-04-04 10:30:57'),
(23, 12, 'Entry Permit Visa', NULL, 'public/admin/assets/img/users/16830165850.pdf', NULL, NULL, NULL, '2023-05-02 12:36:25', '2023-05-02 12:36:25'),
(24, 12, 'Change of Status Visa', NULL, 'public/admin/assets/img/users/16830337630.pdf', '2023-05-02', '2023-07-01', NULL, '2023-05-02 17:22:43', '2023-05-02 17:22:43'),
(27, 25, 'Passport', NULL, 'public/admin/assets/img/users/16832939500.jpg', '2020-12-10', '2025-12-09', NULL, '2023-05-05 17:39:10', '2023-05-05 17:39:10'),
(28, 25, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16832940470.jpg', '2022-02-24', '2024-02-21', NULL, '2023-05-05 17:40:47', '2023-05-05 17:40:47'),
(29, 25, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16832940770.jpg', NULL, NULL, NULL, '2023-05-05 17:41:17', '2023-05-05 17:41:17'),
(30, 25, 'Other', 'Driving licenses', 'public/admin/assets/img/users/16832942840.jpg', '2012-08-27', '2023-08-25', NULL, '2023-05-05 17:44:44', '2023-05-05 17:44:44'),
(31, 25, 'Other', 'Driving licenses', 'public/admin/assets/img/users/16832942841.jpg', NULL, NULL, NULL, '2023-05-05 17:44:44', '2023-05-05 17:44:44'),
(32, 30, 'Other', 'pre approval work permit application receipt', 'public/admin/assets/img/users/1686469739.pdf', NULL, NULL, 'MB246668063AE', '2023-06-08 21:49:02', '2023-06-11 11:48:59'),
(33, 30, 'Other', 'VISIT VISA', 'public/admin/assets/img/users/16862465421.jpg', NULL, NULL, NULL, '2023-06-08 21:49:02', '2023-06-08 21:49:02'),
(34, 30, 'Other', 'ST CONTRACT', 'public/admin/assets/img/users/16862465422.pdf', NULL, NULL, NULL, '2023-06-08 21:49:02', '2023-06-08 21:49:02'),
(35, 30, 'Other', 'MB CONTRACT', 'public/admin/assets/img/users/16862465423.pdf', NULL, NULL, NULL, '2023-06-08 21:49:02', '2023-06-08 21:49:02'),
(36, 30, 'Other', 'PAKISTANI ID', 'public/admin/assets/img/users/16862465424.jpg', NULL, NULL, NULL, '2023-06-08 21:49:02', '2023-06-08 21:49:02'),
(37, 30, 'Passport', NULL, 'public/admin/assets/img/users/16862465425.jpg', '2023-05-25', '2033-05-20', NULL, '2023-06-08 21:49:02', '2023-06-08 21:49:02'),
(41, 34, 'Other', 'Photo', 'public/admin/assets/img/users/16864678143.jpeg', NULL, NULL, NULL, '2023-06-11 11:16:54', '2023-06-11 11:16:54'),
(42, 34, 'Other', 'National ID Card', 'public/admin/assets/img/users/16864678144.jpeg', NULL, NULL, NULL, '2023-06-11 11:16:54', '2023-06-11 11:16:54'),
(43, 34, 'Passport', NULL, 'public/admin/assets/img/users/16864678145.jpeg', '2021-12-27', '2026-12-26', NULL, '2023-06-11 11:16:54', '2023-06-11 11:16:54'),
(45, 30, 'Other', 'Dubai Insurance Payment', 'public/admin/assets/img/users/16866626990.pdf', NULL, NULL, NULL, '2023-06-13 17:24:59', '2023-06-13 17:24:59'),
(46, 30, 'Other', 'Work Permit Payment', 'public/admin/assets/img/users/16866627600.pdf', NULL, NULL, 'MB246882936AE', '2023-06-13 17:26:00', '2023-06-13 17:26:00'),
(50, 30, 'Other', 'COS', 'public/admin/assets/img/users/16867598070.pdf', NULL, NULL, NULL, '2023-06-14 20:23:27', '2023-06-14 20:23:27'),
(51, 30, 'Other', 'COS RECEIPT', 'public/admin/assets/img/users/16867598071.pdf', NULL, NULL, '0101015071532023433029449', '2023-06-14 20:23:27', '2023-06-14 20:23:27'),
(52, 30, 'Other', 'E VISA RECEIPT', 'public/admin/assets/img/users/16867598072.pdf', NULL, NULL, '0101024400092023433027126', '2023-06-14 20:23:27', '2023-06-14 20:23:27'),
(53, 40, 'Other', 'COS', 'public/admin/assets/img/users/16868510730.pdf', NULL, NULL, NULL, '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(54, 40, 'Other', 'Cos receipt', 'public/admin/assets/img/users/16868510731.pdf', NULL, NULL, '0101015071532023433201897', '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(55, 40, 'Other', 'Entry Visa Receipt', 'public/admin/assets/img/users/16868510732.pdf', NULL, NULL, '0101024400092023433200553', '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(56, 40, 'Other', 'Visit Visa', 'public/admin/assets/img/users/16868510733.jpeg', NULL, NULL, NULL, '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(57, 40, 'Other', 'National Id Card', 'public/admin/assets/img/users/16868510734.jpeg', NULL, NULL, NULL, '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(58, 40, 'Passport', NULL, 'public/admin/assets/img/users/16868510735.jpeg', '2023-01-03', '2028-01-03', NULL, '2023-06-15 21:44:33', '2023-06-15 21:44:33'),
(60, 34, 'Other', 'ST236596162AE', 'public/admin/assets/img/users/16871030290.pdf', NULL, NULL, NULL, '2023-06-18 19:43:49', '2023-06-18 19:43:49'),
(61, 34, 'Other', 'MB247213621AE', 'public/admin/assets/img/users/16871030570.pdf', NULL, NULL, NULL, '2023-06-18 19:44:17', '2023-06-18 19:44:17'),
(62, 34, 'Other', 'MB247213620AE', 'public/admin/assets/img/users/16871030770.pdf', NULL, NULL, 'MB247213620AE', '2023-06-18 19:44:37', '2023-06-18 19:44:37'),
(63, 42, 'Visa', NULL, 'public/admin/assets/img/users/16874224620.pdf', '2023-02-01', '2023-06-23', 'CANCEL RESIDENCE', '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(64, 42, 'Other', 'MB247472963AE', 'public/admin/assets/img/users/16874224621.pdf', NULL, NULL, 'MB247472963AE', '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(65, 42, 'Other', 'ST236737705AE', 'public/admin/assets/img/users/16874224622.pdf', NULL, NULL, NULL, '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(66, 42, 'Other', 'MB247472965AE', 'public/admin/assets/img/users/16874224623.pdf', NULL, NULL, NULL, '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(67, 42, 'Identity Card', NULL, 'public/admin/assets/img/users/16874224624.jpg', NULL, NULL, NULL, '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(68, 42, 'Passport', NULL, 'public/admin/assets/img/users/16874224625.jpg', '2017-07-24', '2027-07-23', NULL, '2023-06-22 12:27:42', '2023-06-22 12:27:42'),
(69, 43, 'Identity Card', NULL, 'public/admin/assets/img/users/16874548780.jpg', NULL, NULL, 'Old EID Card', '2023-06-22 21:27:58', '2023-06-22 21:27:58'),
(70, 43, 'Passport', NULL, 'public/admin/assets/img/users/16874548781.jpg', '2023-02-11', '2033-02-09', NULL, '2023-06-22 21:27:58', '2023-06-22 21:27:58'),
(71, 30, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16875290320.pdf', NULL, NULL, NULL, '2023-06-23 18:03:52', '2023-06-23 18:03:52'),
(72, 40, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16875292150.pdf', NULL, NULL, NULL, '2023-06-23 18:06:55', '2023-06-23 18:06:55'),
(74, 40, 'Other', 'Daman Receipt', 'public/admin/assets/img/users/16877553490.pdf', NULL, NULL, NULL, '2023-06-26 08:55:49', '2023-06-26 08:55:49'),
(75, 43, 'Other', 'MB247634065AE', 'public/admin/assets/img/users/16877597600.pdf', NULL, NULL, 'MB247634065AE', '2023-06-26 10:09:20', '2023-06-26 10:09:20'),
(76, 43, 'Other', 'MOL MB', 'public/admin/assets/img/users/16877597601.pdf', NULL, NULL, NULL, '2023-06-26 10:09:20', '2023-06-26 10:09:20'),
(77, 43, 'Other', 'MOL ST', 'public/admin/assets/img/users/16877597602.pdf', NULL, NULL, NULL, '2023-06-26 10:09:20', '2023-06-26 10:09:20'),
(78, 30, 'Other', 'Daman Receipt', 'public/admin/assets/img/users/16877598600.pdf', NULL, NULL, NULL, '2023-06-26 10:11:00', '2023-06-26 10:11:00'),
(79, 40, 'Insurance Card', NULL, 'public/admin/assets/img/users/16877607110.pdf', NULL, NULL, NULL, '2023-06-26 10:25:11', '2023-06-26 10:25:11'),
(80, 30, 'Insurance Card', NULL, 'public/admin/assets/img/users/16877607330.pdf', NULL, NULL, NULL, '2023-06-26 10:25:33', '2023-06-26 10:25:33'),
(81, 42, 'Other', 'MB247678767AE', 'public/admin/assets/img/users/16877934070.pdf', NULL, NULL, NULL, '2023-06-26 19:30:07', '2023-06-26 19:30:07'),
(82, 43, 'Other', 'pre approval work permit fees', 'public/admin/assets/img/users/16883836530.pdf', NULL, NULL, 'MB247773869AE', '2023-07-03 15:27:33', '2023-07-03 15:27:33'),
(83, 43, 'Other', 'Dubai Insurance', 'public/admin/assets/img/users/16883836531.pdf', NULL, NULL, NULL, '2023-07-03 15:27:33', '2023-07-03 15:27:33'),
(84, 42, 'Other', 'pre approval work permit fees', 'public/admin/assets/img/users/16883945580.pdf', NULL, NULL, NULL, '2023-07-03 18:29:18', '2023-07-03 18:29:18'),
(85, 42, 'Other', 'Dubai Insurance', 'public/admin/assets/img/users/16883945581.pdf', NULL, NULL, NULL, '2023-07-03 18:29:18', '2023-07-03 18:29:18'),
(86, 42, 'Other', 'COS Receipt', 'public/admin/assets/img/users/16884444190.pdf', NULL, NULL, NULL, '2023-07-04 08:20:19', '2023-07-04 08:20:19'),
(87, 42, 'Other', 'Visa Fines Receipt', 'public/admin/assets/img/users/16884444191.pdf', NULL, NULL, NULL, '2023-07-04 08:20:19', '2023-07-04 08:20:19'),
(88, 42, 'Other', 'E Visa Receipt', 'public/admin/assets/img/users/16884444192.pdf', NULL, NULL, NULL, '2023-07-04 08:20:19', '2023-07-04 08:20:19'),
(89, 42, 'Other', 'COS', 'public/admin/assets/img/users/16884447440.pdf', NULL, NULL, NULL, '2023-07-04 08:25:44', '2023-07-04 08:25:44'),
(90, 43, 'Other', 'COS Receipt', 'public/admin/assets/img/users/16884481580.pdf', NULL, NULL, NULL, '2023-07-04 09:22:38', '2023-07-04 09:22:38'),
(91, 43, 'Other', 'E Visa Receipt', 'public/admin/assets/img/users/16884481581.pdf', NULL, NULL, NULL, '2023-07-04 09:22:38', '2023-07-04 09:22:38'),
(92, 43, 'Other', 'COS', 'public/admin/assets/img/users/16884482400.pdf', NULL, NULL, NULL, '2023-07-04 09:24:00', '2023-07-04 09:24:00'),
(93, 48, 'Passport', NULL, 'public/admin/assets/img/users/16884826280.jpg', NULL, NULL, NULL, '2023-07-04 18:57:08', '2023-07-04 18:57:08'),
(94, 48, 'Personal Photo', NULL, 'public/admin/assets/img/users/16884826450.jpg', NULL, NULL, NULL, '2023-07-04 18:57:25', '2023-07-04 18:57:25'),
(95, 48, 'Visit Visa', NULL, 'public/admin/assets/img/users/16884826680.pdf', NULL, NULL, NULL, '2023-07-04 18:57:48', '2023-07-04 18:57:48'),
(96, 48, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16884826990.pdf', NULL, NULL, NULL, '2023-07-04 18:58:19', '2023-07-04 18:58:19'),
(97, 48, 'Other', 'Visa Cancellation', 'public/admin/assets/img/users/16884827690.pdf', NULL, NULL, NULL, '2023-07-04 18:59:29', '2023-07-04 18:59:29'),
(98, 48, 'Other', 'Court Documents', 'public/admin/assets/img/users/16884828460.jpeg', NULL, NULL, NULL, '2023-07-04 19:00:46', '2023-07-04 19:00:46'),
(99, 48, 'Other', 'Current Status', 'public/admin/assets/img/users/16884828461.jpg', NULL, NULL, NULL, '2023-07-04 19:00:46', '2023-07-04 19:00:46'),
(100, 48, 'Other', 'Fines Screenshot', 'public/admin/assets/img/users/16884828462.jpg', NULL, NULL, NULL, '2023-07-04 19:00:46', '2023-07-04 19:00:46'),
(101, 48, 'Other', '0101066361692023434991479', 'public/admin/assets/img/users/16885394280.pdf', NULL, NULL, NULL, '2023-07-05 10:43:48', '2023-07-05 10:43:48'),
(102, 48, 'Other', 'VISA DETAILS Arabic', 'public/admin/assets/img/users/16885394281.pdf', NULL, NULL, NULL, '2023-07-05 10:43:48', '2023-07-05 10:43:48'),
(103, 48, 'Other', 'VISA DETAILS', 'public/admin/assets/img/users/16885394282.pdf', NULL, NULL, NULL, '2023-07-05 10:43:48', '2023-07-05 10:43:48'),
(104, 48, 'Other', 'MOL MB', 'public/admin/assets/img/users/16885410640.pdf', NULL, NULL, NULL, '2023-07-05 11:11:04', '2023-07-05 11:11:04'),
(105, 48, 'Other', 'MOL ST', 'public/admin/assets/img/users/16885410641.pdf', NULL, NULL, NULL, '2023-07-05 11:11:04', '2023-07-05 11:11:04'),
(106, 48, 'Other', 'MB247897944AE', 'public/admin/assets/img/users/16885410642.pdf', NULL, NULL, NULL, '2023-07-05 11:11:04', '2023-07-05 11:11:04'),
(107, 42, 'Work Permit', NULL, 'public/admin/assets/img/users/16891473970.jpg', NULL, NULL, NULL, '2023-07-12 11:36:37', '2023-07-12 11:36:37'),
(108, 42, 'Other', 'Approved Contract', 'public/admin/assets/img/users/16891477010.pdf', NULL, NULL, NULL, '2023-07-12 11:41:41', '2023-07-12 11:41:41'),
(109, 42, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16891697240.pdf', NULL, NULL, NULL, '2023-07-12 17:48:44', '2023-07-12 17:48:44'),
(110, 48, 'Other', 'Dubai Insurance', 'public/admin/assets/img/users/16891787050.pdf', NULL, NULL, NULL, '2023-07-12 20:18:25', '2023-07-12 20:18:25'),
(111, 48, 'Other', 'MB248375116AE', 'public/admin/assets/img/users/16891795480.pdf', NULL, NULL, NULL, '2023-07-12 20:32:28', '2023-07-12 20:32:28'),
(112, 48, 'Other', 'E Visa Receipt', 'public/admin/assets/img/users/1689224233.pdf', NULL, NULL, NULL, '2023-07-13 08:51:59', '2023-07-13 08:57:13'),
(113, 48, 'Other', 'COS Receipt', 'public/admin/assets/img/users/16892242010.pdf', NULL, NULL, NULL, '2023-07-13 08:56:41', '2023-07-13 08:56:41'),
(114, 48, 'Other', 'COS', 'public/admin/assets/img/users/16892243260.pdf', NULL, NULL, NULL, '2023-07-13 08:58:46', '2023-07-13 08:58:46'),
(115, 40, 'Other', 'EID Application form', 'public/admin/assets/img/users/16892426160.pdf', NULL, NULL, NULL, '2023-07-13 14:03:36', '2023-07-13 14:03:36'),
(116, 40, 'Other', 'Residency Receipt', 'public/admin/assets/img/users/16892426161.pdf', NULL, NULL, NULL, '2023-07-13 14:03:36', '2023-07-13 14:03:36'),
(117, 40, 'Other', 'EID Receipt', 'public/admin/assets/img/users/16892426162.pdf', NULL, NULL, NULL, '2023-07-13 14:03:36', '2023-07-13 14:03:36'),
(118, 30, 'Other', 'EID Application form', 'public/admin/assets/img/users/16892430910.pdf', NULL, NULL, NULL, '2023-07-13 14:11:31', '2023-07-13 14:11:31'),
(119, 30, 'Other', 'Residency Receipt', 'public/admin/assets/img/users/16892430911.pdf', NULL, NULL, NULL, '2023-07-13 14:11:31', '2023-07-13 14:11:31'),
(120, 30, 'Other', 'EID Receipt', 'public/admin/assets/img/users/16892430912.pdf', NULL, NULL, NULL, '2023-07-13 14:11:31', '2023-07-13 14:11:31'),
(121, 43, 'Other', 'Daman Insurance Card', 'public/admin/assets/img/users/16892432640.jpeg', NULL, NULL, NULL, '2023-07-13 14:14:24', '2023-07-13 14:14:24'),
(122, 53, 'Entry Permit Visa', NULL, 'public/admin/assets/img/users/16892934640.php', '2023-07-05', '2023-07-21', NULL, '2023-07-14 04:11:04', '2023-07-14 04:11:04'),
(123, 40, 'Other', 'Final Invoice', 'public/admin/assets/img/users/16893558270.xlsx', NULL, NULL, NULL, '2023-07-14 21:30:27', '2023-07-14 21:30:27'),
(124, 30, 'Other', 'Final Invoice', 'public/admin/assets/img/users/16893558680.xlsx', NULL, NULL, NULL, '2023-07-14 21:31:08', '2023-07-14 21:31:08'),
(125, 56, 'Salary Certificate', NULL, 'public/admin/assets/img/users/16894091180.jpg', '2023-07-15', NULL, NULL, '2023-07-15 12:18:38', '2023-07-15 12:18:38'),
(126, 58, 'Passport', NULL, 'public/admin/assets/img/users/16895214580.jpg', '2015-06-19', '2025-06-18', NULL, '2023-07-16 19:30:58', '2023-07-16 19:30:58'),
(127, 58, 'Visa', NULL, 'public/admin/assets/img/users/16895217350.jpg', NULL, NULL, 'Visit Visa', '2023-07-16 19:35:35', '2023-07-16 19:35:35'),
(128, 58, 'Other', 'Mol MB', 'public/admin/assets/img/users/16895236490.pdf', NULL, NULL, NULL, '2023-07-16 20:07:29', '2023-07-16 20:07:29'),
(129, 58, 'Other', 'Mol ST', 'public/admin/assets/img/users/16895236491.pdf', NULL, NULL, NULL, '2023-07-16 20:07:29', '2023-07-16 20:07:29'),
(130, 58, 'Other', 'Preapproval Work Permit Receipt', 'public/admin/assets/img/users/16895236492.pdf', NULL, NULL, 'MB248563185AE', '2023-07-16 20:07:29', '2023-07-16 20:07:29'),
(131, 40, 'Other', 'EMIRATES ID', 'public/admin/assets/img/users/16896161310.pdf', NULL, NULL, NULL, '2023-07-17 21:48:51', '2023-07-17 21:48:51'),
(132, 30, 'Other', 'EMIRATES ID', 'public/admin/assets/img/users/16896162260.pdf', NULL, NULL, NULL, '2023-07-17 21:50:26', '2023-07-17 21:50:26'),
(133, 48, 'Work Permit', NULL, 'public/admin/assets/img/users/16896945460.jpeg', '2023-07-11', '2025-07-12', NULL, '2023-07-18 19:35:46', '2023-07-18 19:35:46'),
(134, 61, 'Other', 'Preapproval Work Permit Receipt', 'public/admin/assets/img/users/16897044390.pdf', NULL, NULL, 'MB248720880AE', '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(135, 61, 'Other', 'Mol ST', 'public/admin/assets/img/users/16897044391.pdf', NULL, NULL, NULL, '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(136, 61, 'Other', 'Mol MB', 'public/admin/assets/img/users/16897044392.pdf', NULL, NULL, NULL, '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(137, 61, 'Other', 'Old Emirates ID', 'public/admin/assets/img/users/16897044393.jpg', NULL, NULL, NULL, '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(138, 61, 'Other', 'Visit Visa', 'public/admin/assets/img/users/16897044394.jpg', NULL, NULL, NULL, '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(139, 61, 'Passport', NULL, 'public/admin/assets/img/users/16897044395.jpg', '2023-05-04', '2033-05-03', NULL, '2023-07-18 22:20:39', '2023-07-18 22:20:39'),
(140, 43, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16897802890.pdf', NULL, NULL, NULL, '2023-07-19 19:24:49', '2023-07-19 19:24:49'),
(141, 43, 'Work Permit', 'WORK PERMIT', 'public/admin/assets/img/users/16897804370.jpg', '2023-07-02', '2025-07-03', NULL, '2023-07-19 19:27:17', '2023-07-19 19:27:17'),
(142, 58, 'Other', 'pre approval work permit fees', 'public/admin/assets/img/users/16898320760.pdf', NULL, NULL, 'MB248805999AE', '2023-07-20 09:47:56', '2023-07-20 09:47:56'),
(143, 58, 'Other', 'Dubai Insurance', 'public/admin/assets/img/users/16898320761.pdf', NULL, NULL, NULL, '2023-07-20 09:47:56', '2023-07-20 09:47:56'),
(144, 61, 'Other', 'Picture', 'public/admin/assets/img/users/16898329490.png', NULL, NULL, NULL, '2023-07-20 10:02:29', '2023-07-20 10:02:29'),
(145, 48, 'Personal Photo', NULL, 'public/admin/assets/img/users/16898470530.jpg', NULL, NULL, NULL, '2023-07-20 13:57:33', '2023-07-20 13:57:33'),
(146, 48, 'Other', 'EMIRATES ID Application', 'public/admin/assets/img/users/16898478390.pdf', NULL, NULL, NULL, '2023-07-20 14:10:39', '2023-07-20 14:10:39'),
(147, 58, 'Other', 'COS Receipt', 'public/admin/assets/img/users/16898590920.pdf', NULL, NULL, NULL, '2023-07-20 17:18:12', '2023-07-20 17:18:12'),
(148, 58, 'Other', 'E Visa Receipt', 'public/admin/assets/img/users/16898590921.pdf', NULL, NULL, NULL, '2023-07-20 17:18:12', '2023-07-20 17:18:12'),
(149, 58, 'Other', 'COS', 'public/admin/assets/img/users/16898591490.pdf', NULL, NULL, NULL, '2023-07-20 17:19:09', '2023-07-20 17:19:09'),
(150, 48, 'Health Insurance Card', NULL, 'public/admin/assets/img/users/16898596360.pdf', '2023-07-20', '2024-07-19', NULL, '2023-07-20 17:27:16', '2023-07-20 17:27:16'),
(151, 30, 'Work Permit', NULL, 'public/admin/assets/img/users/16898648520.jpg', '2023-06-12', '2025-06-13', NULL, '2023-07-20 18:54:12', '2023-07-20 18:54:12'),
(152, 61, 'Other', 'MB248896512AE', 'public/admin/assets/img/users/16900229500.pdf', NULL, NULL, NULL, '2023-07-22 14:49:10', '2023-07-22 14:49:10'),
(153, 61, 'Other', 'Dubin', 'public/admin/assets/img/users/16900229501.pdf', NULL, NULL, NULL, '2023-07-22 14:49:10', '2023-07-22 14:49:10'),
(154, 34, 'Other', 'Photo', 'public/admin/assets/img/users/16900235140.jpg', NULL, NULL, NULL, '2023-07-22 14:58:34', '2023-07-22 14:58:34'),
(155, 43, 'Other', 'Emirates ID Application', 'public/admin/assets/img/users/16900251260.pdf', NULL, NULL, NULL, '2023-07-22 15:25:26', '2023-07-22 15:25:26'),
(156, 43, 'Other', 'Residency Receipt', 'public/admin/assets/img/users/16900251261.pdf', NULL, NULL, NULL, '2023-07-22 15:25:26', '2023-07-22 15:25:26'),
(157, 43, 'Other', 'Emirates ID Receipt', 'public/admin/assets/img/users/16900251262.pdf', NULL, NULL, NULL, '2023-07-22 15:25:26', '2023-07-22 15:25:26'),
(158, 61, 'Other', 'COS Receipt', 'public/admin/assets/img/users/16901145070.pdf', NULL, NULL, NULL, '2023-07-23 16:15:07', '2023-07-23 16:15:07'),
(159, 61, 'Other', 'E VISA RECEIPT', 'public/admin/assets/img/users/16901145071.pdf', NULL, NULL, NULL, '2023-07-23 16:15:07', '2023-07-23 16:15:07'),
(160, 61, 'Other', 'COS', 'public/admin/assets/img/users/16901150560.pdf', NULL, NULL, NULL, '2023-07-23 16:24:16', '2023-07-23 16:24:16'),
(161, 48, 'Emirates Identity Card', NULL, 'public/admin/assets/img/users/16902092450.jpeg', '2023-07-20', '2025-07-19', NULL, '2023-07-24 18:34:05', '2023-07-24 18:34:05'),
(162, 66, 'Personal Photo', NULL, 'public/admin/assets/img/users/16902116130.png', '2023-07-24', '2024-01-01', NULL, '2023-07-24 19:13:33', '2023-07-24 19:13:33'),
(163, 42, 'Other', 'Daman Receipt', 'public/admin/assets/img/users/16902702280.pdf', NULL, NULL, NULL, '2023-07-25 11:30:28', '2023-07-25 11:30:28'),
(164, 61, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16904712660.jpg', NULL, NULL, NULL, '2023-07-27 19:21:06', '2023-07-27 19:21:06'),
(165, 58, 'Other', 'Tawjeeh Payment - Receipt', 'public/admin/assets/img/users/16904713090.jpg', NULL, NULL, NULL, '2023-07-27 19:21:49', '2023-07-27 19:21:49'),
(166, 61, 'Other', 'Approved Contract', 'public/admin/assets/img/users/16904740600.pdf', NULL, NULL, NULL, '2023-07-27 20:07:40', '2023-07-27 20:07:40'),
(168, 58, 'Other', 'Approved Contract', 'public/admin/assets/img/users/16904748830.pdf', NULL, NULL, NULL, '2023-07-27 20:21:23', '2023-07-27 20:21:23'),
(169, 58, 'Work Permit', 'WORK PERMIT', 'public/admin/assets/img/users/16904748831.jpg', '2023-07-18', '2025-07-19', NULL, '2023-07-27 20:21:23', '2023-07-27 20:21:23'),
(170, 61, 'Work Permit', NULL, 'public/admin/assets/img/users/16904750230.jpg', '2023-07-21', '2025-07-22', NULL, '2023-07-27 20:23:43', '2023-07-27 20:23:43'),
(171, 61, 'Other', 'Daman Receipt', 'public/admin/assets/img/users/16905488210.pdf', NULL, NULL, NULL, '2023-07-28 16:53:41', '2023-07-28 16:53:41'),
(172, 58, 'Other', 'Daman Receipt', 'public/admin/assets/img/users/16905488720.pdf', NULL, NULL, NULL, '2023-07-28 16:54:32', '2023-07-28 16:54:32'),
(173, 69, 'Personal Photo', NULL, 'public/admin/assets/img/users/16906836950.png', '2023-07-30', '2024-01-27', NULL, '2023-07-30 06:21:35', '2023-07-30 06:21:35'),
(174, 61, 'Other', 'Emirates ID Application', 'public/admin/assets/img/users/16907939780.pdf', NULL, NULL, NULL, '2023-07-31 12:59:38', '2023-07-31 12:59:38'),
(175, 61, 'Other', 'Residency Receipt', 'public/admin/assets/img/users/16907939781.pdf', NULL, NULL, 'Paid by Greenapp Card', '2023-07-31 12:59:38', '2023-07-31 12:59:38'),
(176, 61, 'Other', 'Emirates ID Receipt', 'public/admin/assets/img/users/16907939782.pdf', NULL, NULL, 'Paid by Greenapp Card', '2023-07-31 12:59:38', '2023-07-31 12:59:38'),
(177, 76, 'Other', 'MB249746556AE', 'public/admin/assets/img/users/16913355750.pdf', NULL, NULL, NULL, '2023-08-06 19:26:15', '2023-08-06 19:26:15'),
(178, 76, 'Other', 'Photo', 'public/admin/assets/img/users/16913355751.JPG', NULL, NULL, NULL, '2023-08-06 19:26:15', '2023-08-06 19:26:15'),
(179, 76, 'Other', 'National Identity Card', 'public/admin/assets/img/users/16913355752.jpg', NULL, NULL, NULL, '2023-08-06 19:26:15', '2023-08-06 19:26:15'),
(180, 76, 'Passport', NULL, 'public/admin/assets/img/users/16913355753.jpg', '2019-10-07', '2024-10-06', NULL, '2023-08-06 19:26:15', '2023-08-06 19:26:15'),
(181, 61, 'Other', 'Emirates ID', 'public/admin/assets/img/users/16914303540.pdf', NULL, NULL, NULL, '2023-08-07 21:45:54', '2023-08-07 21:45:54'),
(182, 90, 'Other', 'RWS module', 'public/admin/assets/img/users/16917640850.pdf', NULL, NULL, NULL, '2023-08-11 18:28:05', '2023-08-11 18:28:05'),
(183, 98, 'Birth Certificate', NULL, 'public/admin/assets/img/users/16923455250.jpg', '2023-08-18', '2024-08-18', NULL, '2023-08-18 11:58:45', '2023-08-18 11:58:45'),
(184, 42, 'Other', 'EID Application form', 'public/admin/assets/img/users/16934872950.pdf', NULL, NULL, NULL, '2023-08-31 17:08:15', '2023-08-31 17:08:15'),
(185, 42, 'Other', '0101107642012023441932838', 'public/admin/assets/img/users/16934872951.pdf', NULL, NULL, NULL, '2023-08-31 17:08:15', '2023-08-31 17:08:15'),
(186, 42, 'Other', '0101014841162023441671080', 'public/admin/assets/img/users/16934872952.pdf', NULL, NULL, NULL, '2023-08-31 17:08:15', '2023-08-31 17:08:15'),
(187, 42, 'Other', 'EID Application form', 'public/admin/assets/img/users/16937619900.pdf', NULL, NULL, NULL, '2023-09-03 21:26:30', '2023-09-03 21:26:30'),
(188, 58, 'Other', 'EMIRATES ID Application', 'public/admin/assets/img/users/16937621900.pdf', NULL, NULL, NULL, '2023-09-03 21:29:50', '2023-09-03 21:29:50'),
(189, 58, 'Other', 'EMIRATES ID Receipt', 'public/admin/assets/img/users/16937621901.pdf', NULL, NULL, NULL, '2023-09-03 21:29:50', '2023-09-03 21:29:50'),
(190, 58, 'Other', 'Residency Receipt', 'public/admin/assets/img/users/16937621902.pdf', NULL, NULL, NULL, '2023-09-03 21:29:50', '2023-09-03 21:29:50'),
(191, 58, 'Identity Card', NULL, 'public/admin/assets/img/users/16939863620.jpg', '2023-09-03', '2025-09-02', 'EID', '2023-09-06 11:46:02', '2023-09-06 11:46:02'),
(192, 34, 'Other', 'Entry Visa', 'public/admin/assets/img/users/16941945600.jpeg', NULL, NULL, NULL, '2023-09-08 21:36:00', '2023-09-08 21:36:00'),
(193, 34, 'Identity Card', NULL, 'public/admin/assets/img/users/16955603850.pdf', '2023-09-20', '2025-09-19', NULL, '2023-09-24 16:59:45', '2023-09-24 16:59:45'),
(194, 34, 'Visa', NULL, 'public/admin/assets/img/users/16955603851.pdf', '2023-09-20', '2025-09-19', NULL, '2023-09-24 16:59:46', '2023-09-24 16:59:46'),
(195, 118, 'Passport', NULL, 'public/admin/assets/img/users/17012535400.jpg', '2021-12-26', '2023-12-01', NULL, '2023-11-29 15:25:40', '2023-11-29 15:25:40'),
(196, 118, 'Visit Visa', NULL, 'public/admin/assets/img/users/17012536020.jpg', '2023-11-08', '2024-01-31', NULL, '2023-11-29 15:26:42', '2023-11-29 15:26:42'),
(197, 11, 'Passport', NULL, 'public/admin/assets/img/users/17019552460.png', '2022-02-01', '2025-02-01', NULL, '2023-12-07 18:20:46', '2023-12-07 18:20:46'),
(198, 11, 'Residence Visa', NULL, 'public/admin/assets/img/users/17019552790.png', '2022-02-01', '2024-02-01', NULL, '2023-12-07 18:21:19', '2023-12-07 18:21:19'),
(199, 11, 'Visit Visa', NULL, 'public/admin/assets/img/users/17019553370.png', '2022-02-01', '2022-02-01', NULL, '2023-12-07 18:22:17', '2023-12-07 18:22:17');

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
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_documents_company_id_foreign` (`company_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_dependents`
--
ALTER TABLE `individual_dependents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `individual_dependents_user_id_foreign` (`user_id`);

--
-- Indexes for table `individual_services`
--
ALTER TABLE `individual_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `individual_services_user_id_foreign` (`user_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_user_id_foreign` (`user_id`);

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
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_company_id_foreign` (`company_id`),
  ADD KEY `notes_user_id_foreign` (`user_id`),
  ADD KEY `notes_admin_id_foreign` (`admin_id`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_components`
--
ALTER TABLE `permission_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_components_user_id_foreign` (`user_id`),
  ADD KEY `permission_components_permission_id_foreign` (`permission_id`);

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
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_company_id_foreign` (`company_id`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_documents_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company_documents`
--
ALTER TABLE `company_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `individual_dependents`
--
ALTER TABLE `individual_dependents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `individual_services`
--
ALTER TABLE `individual_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permission_components`
--
ALTER TABLE `permission_components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD CONSTRAINT `company_documents_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `individual_dependents`
--
ALTER TABLE `individual_dependents`
  ADD CONSTRAINT `individual_dependents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `individual_services`
--
ALTER TABLE `individual_services`
  ADD CONSTRAINT `individual_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_components`
--
ALTER TABLE `permission_components`
  ADD CONSTRAINT `permission_components_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_components_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD CONSTRAINT `user_documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

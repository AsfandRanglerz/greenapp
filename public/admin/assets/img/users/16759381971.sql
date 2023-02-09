-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h2>How is a paragraph structured?&nbsp;</h2>\r\n\r\n<p>Before we dive into paragraph structure, let&rsquo;s start with paragraph meaning. A paragraph is an individual segment of writing that discusses a central idea, typically with more than one sentence. It even has its own paragraph symbol in copyediting, called the&nbsp;<em>pilcrow</em>&nbsp;(&para;), not to be confused with the section symbol called the&nbsp;<em>silcrow</em>&nbsp;(&sect;) that&rsquo;s common in legal code.&nbsp;</p>\r\n\r\n<p>Here we focus mainly on paragraph structure, but feel free to read our&nbsp;<a href=\"https://www.grammarly.com/blog/paragraphs/\" target=\"_blank\">ultimate guide to paragraphs</a>&nbsp;for more of the basics.&nbsp;</p>\r\n\r\n<h3>Parts of a paragraph</h3>\r\n\r\n<p>Like other forms of writing, paragraphs follow a standard three-part structure with a beginning, middle, and end. These parts are the&nbsp;<strong>topic sentence</strong>,&nbsp;<strong>development and support</strong>, and&nbsp;<strong>conclusion</strong>.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.grammarly.com/blog/topic-sentences/\" target=\"_blank\"><strong>Topic sentences</strong></a>, also known as &ldquo;paragraph leaders,&rdquo; introduce the main idea that the paragraph is about. They shouldn&rsquo;t reveal too much on their own, but rather prepare the reader for the rest of the paragraph by stating clearly what topic will be discussed.&nbsp;</p>\r\n\r\n<p>The&nbsp;<strong>development and support sentences</strong>&nbsp;act as the body of the paragraph. Development sentences elaborate and explain the idea with details too specific for the topic sentence, while support sentences provide evidence, opinions, or other statements that back up or confirm the paragraph&rsquo;s main idea.&nbsp;</p>\r\n\r\n<p>Last, the&nbsp;<strong>conclusion</strong>&nbsp;wraps up the idea, sometimes summarizing what&rsquo;s been presented or transitioning to the next paragraph. The content of the conclusion depends on the type of paragraph, and it&rsquo;s often acceptable to end a paragraph with a final piece of support that concludes the thought instead of a summary.&nbsp;</p>\r\n\r\n<h3>How many sentences are in a paragraph?</h3>\r\n\r\n<p>Most paragraphs contain between three and five sentences, but there are plenty of exceptions. Different types of paragraphs have different numbers of sentences, like those in narrative writing, in particular, where single-sentence paragraphs are common.</p>\r\n\r\n<p>Likewise, the number of sentences in a paragraph can change based on the style of the writer. Some authors prefer longer, more descriptive paragraphs, while other authors prefer shorter, faster-paced paragraphs.&nbsp;</p>\r\n\r\n<p>When it comes to nonfiction writing, like&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-research-paper/\" target=\"_blank\">research papers</a>&nbsp;or&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-report/\" target=\"_blank\">reports</a>, most paragraphs have at least three sentences: a topic sentence, a development/support sentence, and a conclusion sentence.&nbsp;</p>', NULL, '2023-02-03 06:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '03015262920', '$2y$10$T7eWwuGO3FIeielvtsvgSOL.5OMvR8eqdEBqWVRO935AZHvR5j9iW', 'public/admin/assets/img/1675165178.jpg', '2023-01-31 06:15:56', '2023-01-31 06:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mohre_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `phone`, `image`, `email`, `password`, `establishment_no`, `license_no`, `mohre_no`, `created_at`, `updated_at`) VALUES
(1, 'netsol', '45678965', 'public/admin/assets/img/users/1675332430.jpg', 'netsol@gmail.com', '$2y$10$3Gc1sxuWF5Tn9ZwWT0o9LOnBSKYmAfIA.kgCnoyu94l8rSBu8714u', '34567', '34567', '34567', '2023-01-31 06:19:23', '2023-02-08 03:24:44'),
(3, 'admin', '03348058699', 'public/admin/assets/img/users/1675328003.jpg', 'aliashraf2002676543@gmail.com', '$2y$10$DBd64oyUVVN1oVFyHYZqHu3dlQaYBmBlsNtvl9chC/7zPJriThAmO', '3456', '3456', '3456', '2023-02-02 03:53:23', '2023-02-02 03:53:23'),
(4, 'muhammad ali', '03348058699', 'public/admin/assets/img/users/1675341257.png', 'netsol123@gmail.com', '$2y$10$yCIgdCe/qMIJr9KSPzaM7.GsFE.XJsmeIHGpFTkCLzy52jQhn1XcG', '34567', '345678', '387456', '2023-02-02 07:16:00', '2023-02-02 07:34:17'),
(5, 'muhammad ali123', '03348058699', 'public/admin/assets/img/users/1675332882.jpg', 'aliashraf200264356@gmail.com', '$2y$10$Zr/KPaEOAma7sInKIU2o4Oz.NTFau3nxPYdAut2RE7oiGARJbitTa', '23456', '3456', '3456', '2023-02-03 06:42:01', '2023-02-03 06:42:01'),
(6, 'westBridge', '03348058699', NULL, 'westbridge@gmail.com', '$2y$10$qKKE/0v4v6xAiMQVFBqxQ.S6mViT0AWpBrd0rqv2wFICsEM/X7kHO', '2345', '23456', '23456', '2023-02-06 03:40:50', '2023-02-06 05:07:32'),
(8, 'muhammad ali', '03348058699', NULL, 'aliashraf20026432@gmail.com', '$2y$10$wq8J/x0MqnoR8ydIaA8XE.eeb61cAVr75wabVZqDEKrgd7uhKCB4W', NULL, NULL, NULL, '2023-02-06 08:11:15', '2023-02-06 08:11:15'),
(9, 'muhammad ali', '03348058699', NULL, 'aliashraf2002643@gmail.com', '$2y$10$Ei76/yW.1woeCF5pQ.wWjOX6qDsjEnLtxRPyJx97nM5ReT956ZHB.', NULL, NULL, NULL, '2023-02-06 08:13:39', '2023-02-06 08:13:39'),
(10, 'muhammad ali', '03348058699', NULL, 'aliashraf2004526@gmail.com', '$2y$10$QRPzLeJI8mvK.0o.1YXW5eu8SJOpBW.FTiCljTFjiDb3HwF1MPIS2', NULL, NULL, NULL, '2023-02-06 08:14:36', '2023-02-06 08:14:36'),
(11, 'muhammad ali', '03348058699', NULL, 'aliashraf20026876@gmail.com', '$2y$10$pp99VbjQ1qUwfeTyqMCxeuYkTTmynYbGb9Tx.RsLVS2w/iLuJ.Zoe', NULL, NULL, NULL, '2023-02-06 08:15:15', '2023-02-06 08:15:15'),
(12, 'muhammad ali', '03348058699', NULL, 'aliashraf20026321@gmail.com', '$2y$10$kgrheTHvsE.NR4x8wmGswOKWk5KrbLYZoN4FLidDvE6UGUurMii0e', NULL, NULL, NULL, '2023-02-06 08:16:57', '2023-02-06 08:16:57'),
(13, 'muhammad ali', '03348058699', NULL, 'aliashraf20026890@gmail.com', '$2y$10$T2j9w7AcLRxcuyU0itk3kO2Rk8lRlCB26p2u47WKnhPjedUOSUkF6', NULL, NULL, NULL, '2023-02-06 08:18:10', '2023-02-06 08:18:10'),
(14, 'muhammad ali', '03348058699', NULL, 'aliashraf20026543@gmail.com', '$2y$10$l.e3nCkCUcxqKZzfCvT2T.AMRHHZDi3TIJ0Pnp6zt.s2i70vodGPu', NULL, NULL, NULL, '2023-02-06 08:19:37', '2023-02-06 08:19:37'),
(15, 'muhammad ali', '03348058699', NULL, 'aliashraf2002656@gmail.com', '$2y$10$uV1jmKwcmTKBk5V6RIZBL.RzZYFH5lzetgAUE8Fc7GLomd7ORuyUC', NULL, NULL, NULL, '2023-02-06 08:20:55', '2023-02-06 08:20:55'),
(16, 'muhammad ali', '03348058699', NULL, 'aliashraf20554026@gmail.com', '$2y$10$0Dgrx/v/3/C3cySAOyxKL.k9/pIW2D.FGMPJOzpx0jpCDnSthEVcy', NULL, NULL, NULL, '2023-02-06 08:45:23', '2023-02-06 08:45:23'),
(17, 'muhammad ali', '03348058699', 'public/admin/assets/img/users/1675332882.jpg', 'aliashraf200267654@gmail.com', '$2y$10$JE1utAJusE7IrW8XEyvjEuouelc7L4.rUOdduC4DL3mt/icpjRLaC', '345', '234', '2345', '2023-02-08 06:10:24', '2023-02-08 06:10:24'),
(18, 'i2C', '03348058699', 'public/admin/assets/img/users/1675332882.jpg', 'i2c@gmail.com', '$2y$10$FkL69rrqCat38soiCo7C1u.esQ4o6iKD96hLUkDRqnP4IvINw0h1S', '23456', '2345', '3456', '2023-02-08 06:13:47', '2023-02-08 06:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `company_documents`
--

CREATE TABLE `company_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `doc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_documents`
--

INSERT INTO `company_documents` (`id`, `company_id`, `doc_name`, `file`, `created_at`, `updated_at`) VALUES
(4, 1, 'Visa', 'public/admin/assets/img/users/1675231617.pdf', '2023-02-01 01:06:57', '2023-02-01 01:06:57'),
(5, 1, 'Insurance Card', 'public/admin/assets/img/users/1675238149.jpg', '2023-02-01 02:55:49', '2023-02-01 02:55:49'),
(6, 1, 'Identity Card', 'public/admin/assets/img/users/1675246957.pdf', '2023-02-01 05:22:37', '2023-02-01 05:22:37'),
(7, 1, 'Identity Card', 'public/admin/assets/img/users/1675247465.pdf', '2023-02-01 05:31:05', '2023-02-01 05:31:05'),
(8, 1, 'Identity Card', 'public/admin/assets/img/users/1675247744.pdf', '2023-02-01 05:35:44', '2023-02-01 05:35:44'),
(9, 1, 'Insurance Card', 'public/admin/assets/img/users/1675247871.pdf', '2023-02-01 05:37:51', '2023-02-01 05:37:51'),
(10, 1, 'Insurance Card', 'public/admin/assets/img/users/1675248009.pdf', '2023-02-01 05:40:09', '2023-02-01 05:40:09'),
(11, 1, 'Visa', 'public/admin/assets/img/users/1675248025.pdf', '2023-02-01 05:40:26', '2023-02-01 05:40:26'),
(12, 1, 'Visa', 'public/admin/assets/img/users/1675248158.pdf', '2023-02-01 05:42:38', '2023-02-01 05:42:38'),
(13, 1, 'Visa', 'public/admin/assets/img/users/1675248282.pdf', '2023-02-01 05:44:42', '2023-02-01 05:44:42'),
(14, 1, 'Visa', 'public/admin/assets/img/users/1675248294.pdf', '2023-02-01 05:44:54', '2023-02-01 05:44:54'),
(15, 1, 'Insurance Card', 'public/admin/assets/img/users/1675248317.pdf', '2023-02-01 05:45:17', '2023-02-01 05:45:17'),
(16, 1, 'Identity Card', 'public/admin/assets/img/users/1675248413.jpg', '2023-02-01 05:46:53', '2023-02-01 05:46:53'),
(17, 1, 'Insurance Card', 'public/admin/assets/img/users/1675248481.jpg', '2023-02-01 05:48:01', '2023-02-01 05:48:01'),
(18, 1, 'Identity Card', 'public/admin/assets/img/users/1675248533.jpg', '2023-02-01 05:48:53', '2023-02-01 05:48:53'),
(21, 1, 'Visa', 'public/admin/assets/img/users/1675256161.pdf', '2023-02-01 07:56:01', '2023-02-01 07:56:01'),
(22, 3, 'ali', 'public/admin/assets/img/users/1675333453.pdf', '2023-02-02 05:24:01', '2023-02-02 05:24:13'),
(23, 4, 'Identity Card', 'public/admin/assets/img/users/1675347079.pdf', '2023-02-02 09:11:19', '2023-02-02 09:11:19'),
(26, 1, 'Passport', 'public/admin/assets/img/users/16754067560.pdf', '2023-02-03 01:45:56', '2023-02-03 01:45:56'),
(28, 6, 'Visa', 'public/admin/assets/img/users/16756778960.pdf', '2023-02-06 05:04:56', '2023-02-06 05:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Your Services (And Benefits)\r\nOf course, you have a homepage and dedicated pages for your products, but summarizing your offerings on the About Us page is crucial to tie them in with brand values in your messaging.\r\n\r\nHighlight the benefits and showcase w', 'Your Services (And Benefits)\r\nOf course, you have a homepage and dedicated pages for your products, but summarizing your offerings on the About Us page is crucial to tie them in with brand values in your messaging.\r\n\r\nHighlight the benefits and showcase w', NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_17_063251_create_admins_table', 1),
(3, '2021_12_18_062039_password_resets', 1),
(4, '2021_12_20_060915_create_privacy_policies_table', 1),
(5, '2021_12_20_085741_create_term_conditions_table', 1),
(6, '2023_01_10_101350_create_companies_table', 1),
(7, '2023_01_10_114334_create_company_documents_table', 1),
(8, '2023_01_10_115236_create_users_table', 1),
(9, '2023_01_10_115959_create_user_documents_table', 1),
(10, '2023_01_18_102651_create_faqs_table', 1),
(11, '2023_01_18_110722_create_about_us_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h2>How is a paragraph structured?&nbsp;</h2>\r\n\r\n<p>Before we dive into paragraph structure, let&rsquo;s start with paragraph meaning. A paragraph is an individual segment of writing that discusses a central idea, typically with more than one sentence. It even has its own paragraph symbol in copyediting, called the&nbsp;<em>pilcrow</em>&nbsp;(&para;), not to be confused with the section symbol called the&nbsp;<em>silcrow</em>&nbsp;(&sect;) that&rsquo;s common in legal code.&nbsp;</p>\r\n\r\n<p>Here we focus mainly on paragraph structure, but feel free to read our&nbsp;<a href=\"https://www.grammarly.com/blog/paragraphs/\" target=\"_blank\">ultimate guide to paragraphs</a>&nbsp;for more of the basics.&nbsp;</p>\r\n\r\n<h3>Parts of a paragraph</h3>\r\n\r\n<p>Like other forms of writing, paragraphs follow a standard three-part structure with a beginning, middle, and end. These parts are the&nbsp;<strong>topic sentence</strong>,&nbsp;<strong>development and support</strong>, and&nbsp;<strong>conclusion</strong>.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.grammarly.com/blog/topic-sentences/\" target=\"_blank\"><strong>Topic sentences</strong></a>, also known as &ldquo;paragraph leaders,&rdquo; introduce the main idea that the paragraph is about. They shouldn&rsquo;t reveal too much on their own, but rather prepare the reader for the rest of the paragraph by stating clearly what topic will be discussed.&nbsp;</p>\r\n\r\n<p>The&nbsp;<strong>development and support sentences</strong>&nbsp;act as the body of the paragraph. Development sentences elaborate and explain the idea with details too specific for the topic sentence, while support sentences provide evidence, opinions, or other statements that back up or confirm the paragraph&rsquo;s main idea.&nbsp;</p>\r\n\r\n<p>Last, the&nbsp;<strong>conclusion</strong>&nbsp;wraps up the idea, sometimes summarizing what&rsquo;s been presented or transitioning to the next paragraph. The content of the conclusion depends on the type of paragraph, and it&rsquo;s often acceptable to end a paragraph with a final piece of support that concludes the thought instead of a summary.&nbsp;</p>\r\n\r\n<h3>How many sentences are in a paragraph?</h3>\r\n\r\n<p>Most paragraphs contain between three and five sentences, but there are plenty of exceptions. Different types of paragraphs have different numbers of sentences, like those in narrative writing, in particular, where single-sentence paragraphs are common.</p>\r\n\r\n<p>Likewise, the number of sentences in a paragraph can change based on the style of the writer. Some authors prefer longer, more descriptive paragraphs, while other authors prefer shorter, faster-paced paragraphs.&nbsp;</p>\r\n\r\n<p>When it comes to nonfiction writing, like&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-research-paper/\" target=\"_blank\">research papers</a>&nbsp;or&nbsp;<a href=\"https://www.grammarly.com/blog/how-to-write-a-report/\" target=\"_blank\">reports</a>, most paragraphs have at least three sentences: a topic sentence, a development/support sentence, and a conclusion sentence.&nbsp;</p>', NULL, '2023-02-03 06:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `term_conditions`
--

CREATE TABLE `term_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `image`, `password`, `dob`, `nationality`, `religion`, `company_id`, `created_at`, `updated_at`) VALUES
(7, 'muhammad ali', '03348058699', 'aliashraf20026987@gmail.com', 'public/admin/assets/img/users/1675235174.png', '$2y$10$lpC9gzkaC5y5SYxEKNmGQOuJuSwOMbtVEX6HBK4hfx4aPGxxHpPa.', '20-04-2023', 'Iran', 'islam', 1, '2023-02-01 01:30:55', '2023-02-01 02:07:05'),
(8, 'admin', '03348058699', 'aliashraf2002609@gmail.com', 'public/admin/assets/img/users/1675245643.png', '$2y$10$GVKR0EUqGuZmMPIyBo1ZpORUohHTgepScppzNLXI7NM.95YZ/7PIy', '14-02-2023', 'Pakistan', 'islam', 1, '2023-02-01 05:00:43', '2023-02-01 05:00:43'),
(10, 'muhammad ali', '03348058699', 'aliashraf2002698798@gmail.com', 'public/admin/assets/img/users/1675246448.jpg', '$2y$10$IhwLU/wYy2o0EWH3WYgpnegG59i9vNV.xYR6mx1FXdvpoc5D94alG', '13-02-2023', 'India', 'islam', 1, '2023-02-01 05:14:09', '2023-02-01 05:14:09'),
(11, 'muhammad ali', '03348058699', 'aliashraf2@gmail.com', 'public/admin/assets/img/users/1675246849.png', '$2y$10$b2yknZCwZ5TOKCJmOmSo9u.IDWEddntNcyHR7MFFvfDG/f4c7hwUO', '13-02-2023', 'Bangladesh', 'islam', 1, '2023-02-01 05:20:49', '2023-02-02 05:57:04'),
(12, 'muhammad ali', '03348058699', 'aliashraf226@gmail.com', 'public/admin/assets/img/users/1675249284.jpg', '$2y$10$1dvIOMjzRWU23Pb2rqJus.HMowovGZ/IHsBsQKfIVfBCBD0TrQ8AC', '14-02-2023', 'Iran', 'islam', 1, '2023-02-01 06:01:24', '2023-02-01 06:01:24'),
(14, 'muhammad ali', '03348058699', 'aliashraf2002654@gmail.com', 'public/admin/assets/img/users/1675341329.png', '$2y$10$LW5zZexFG/Ak.kfBCX5eI.Cf6GnMsG7u9K0M/im2rQ.nBYCL5QLsu', '22-02-2023', 'Iran', 'islam', 4, '2023-02-02 07:35:29', '2023-02-02 07:35:29'),
(24, 'muhammad ali', '03348058699', 'aliashraf20026128@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$THsNMnNuEYDnU.vg7VxIIe2Cl081ZNP4xyw9UzVDcQB9Hj.WVUVbW', '22-02-2023', 'Pakistan', 'islam', 1, '2023-02-03 05:59:41', '2023-02-03 05:59:41'),
(32, 'muhammad ali', '03348058699', 'aliashraf20026345@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$zMAP7Jyl5EnTX0E21kxnDur/9WkuDlFmsKuDp3HsJV2wzLjEt9YC6', '21-02-2023', 'Pakistan', 'islam', 6, '2023-02-06 05:05:29', '2023-02-06 05:05:29'),
(33, 'muhammad ali', '03348058699', 'aliashraf20026@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$36jfqYwvh5fp8xWrwtE1R.q8sanGxZ/P/WPJtWkd3ZwqNvS7YICPW', '28-02-2023', 'Pakistan', 'islam', 1, '2023-02-08 03:38:35', '2023-02-08 07:29:34'),
(34, 'muhammad ali', '03348058699', 'aliashrafi20026@gmail.com', 'public/admin/assets/img/users/1675332882.jpg', '$2y$10$gK6lqknsTNwGf.njPxUaXu00RNzdRT3qdRFEgH51iqAJX79xHFRCe', '28-02-2023', 'Pakistan', 'islam', 18, '2023-02-08 06:33:45', '2023-02-08 06:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `doc_type`, `file`, `issue_date`, `expiry_date`, `comment`, `created_at`, `updated_at`) VALUES
(3, 7, 'Identity Card', 'public/admin/assets/img/users/1675236682.pdf', '21-02-2023', '20-02-2023', NULL, '2023-02-01 02:31:22', '2023-02-01 02:31:22'),
(6, 7, 'Visa', 'public/admin/assets/img/users/1675246541.pdf', '09-03-2023', '14-02-2023', NULL, '2023-02-01 05:15:41', '2023-02-01 05:15:41'),
(7, 11, 'Passport', 'public/admin/assets/img/users/1675247582.pdf', '25-02-2023', '01-03-2023', NULL, '2023-02-01 05:33:02', '2023-02-01 05:33:02'),
(8, 11, 'Visa', 'public/admin/assets/img/users/1675247616.pdf', '17-02-2023', '22-02-2023', 'asdfhgjhgy', '2023-02-01 05:33:36', '2023-02-01 05:33:36'),
(9, 11, 'Driving License', 'public/admin/assets/img/users/1675255491.pdf', '23-02-2023', '21-02-2023', NULL, '2023-02-01 07:44:51', '2023-02-01 07:44:51'),
(10, 11, 'Work Permit', 'public/admin/assets/img/users/1675255520.pdf', '22-02-2023', '20-02-2023', NULL, '2023-02-01 07:45:20', '2023-02-01 07:45:20'),
(11, 11, 'Identity Card', 'public/admin/assets/img/users/1675255601.pdf', '14-02-2023', '13-02-2023', NULL, '2023-02-01 07:46:41', '2023-02-01 07:46:41'),
(12, 12, 'Visa', 'public/admin/assets/img/users/1675255660.pdf', '22-02-2023', '14-02-2023', NULL, '2023-02-01 07:47:40', '2023-02-01 07:47:40'),
(13, 12, 'Driving License', 'public/admin/assets/img/users/1675255734.pdf', '23-02-2023', '21-02-2023', NULL, '2023-02-01 07:48:54', '2023-02-01 07:48:54'),
(14, 8, 'Insurance Card', 'public/admin/assets/img/users/1675255803.pdf', '16-02-2023', '21-02-2023', NULL, '2023-02-01 07:50:03', '2023-02-01 07:50:03'),
(15, 8, 'Insurance Card', 'public/admin/assets/img/users/1675255900.pdf', '15-02-2023', '20-02-2023', NULL, '2023-02-01 07:51:40', '2023-02-01 07:51:40'),
(16, 8, 'Passport', 'public/admin/assets/img/users/1675255992.pdf', '15-02-2023', '05-02-2023', NULL, '2023-02-01 07:53:12', '2023-02-01 07:53:12'),
(17, 8, 'Visa', 'public/admin/assets/img/users/1675256032.pdf', '02-03-2023', '21-02-2023', NULL, '2023-02-01 07:53:52', '2023-02-01 07:53:52'),
(18, 8, 'Visa', 'public/admin/assets/img/users/1675256145.pdf', '23-02-2023', '14-02-2023', NULL, '2023-02-01 07:55:46', '2023-02-01 07:55:46'),
(19, 12, 'Visa', 'public/admin/assets/img/users/1675256750.pdf', '23-02-2023', '14-02-2023', NULL, '2023-02-01 08:05:50', '2023-02-01 08:05:50'),
(20, 12, 'Visa', 'public/admin/assets/img/users/1675256769.pdf', '23-02-2023', '14-02-2023', NULL, '2023-02-01 08:06:09', '2023-02-01 08:06:09'),
(21, 12, 'Insurance Card', 'public/admin/assets/img/users/1675256814.pdf', '22-02-2023', '14-02-2023', NULL, '2023-02-01 08:06:54', '2023-02-01 08:06:54'),
(22, 12, 'Identity Card', 'public/admin/assets/img/users/1675257009.pdf', '24-02-2023', '14-02-2023', NULL, '2023-02-01 08:10:09', '2023-02-01 08:10:09'),
(23, 12, 'Identity Card', 'public/admin/assets/img/users/1675257357.pdf', '22-02-2023', '14-02-2023', NULL, '2023-02-01 08:15:57', '2023-02-01 08:15:57'),
(24, 12, 'Visa', 'public/admin/assets/img/users/1675259178.pdf', '22-02-2023', '23-02-2023', NULL, '2023-02-01 08:46:18', '2023-02-01 08:46:18'),
(25, 12, 'Identity Card', 'public/admin/assets/img/users/1675259214.pdf', '23-02-2023', '21-02-2023', NULL, '2023-02-01 08:46:54', '2023-02-01 08:46:54'),
(26, 11, 'Identity Card', 'public/admin/assets/img/users/1675320895.pdf', '15-02-2023', '14-02-2023', NULL, '2023-02-02 01:54:55', '2023-02-02 01:54:55'),
(42, 11, 'Visa', 'public/admin/assets/img/users/16758534140.xlsx', NULL, NULL, NULL, '2023-02-08 05:50:14', '2023-02-08 05:50:14'),
(44, 34, 'Visa', 'public/admin/assets/img/users/16758565040.xlsx', NULL, NULL, NULL, '2023-02-08 06:41:44', '2023-02-08 06:41:44');

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company_documents`
--
ALTER TABLE `company_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD CONSTRAINT `company_documents_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

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

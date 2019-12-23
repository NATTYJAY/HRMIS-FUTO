-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:12 AM
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
-- Database: `hrmis`
--
CREATE DATABASE IF NOT EXISTS `hrmis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hrmis`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Admin', 'admin@admin.com', NULL, '$2y$10$l40RWEEwsWle2i3TrzGmF.QUtQQ2Zs9ZCUW8FpX7ChbpZXj.ex62S', NULL, '2019-03-05 22:32:35', '2019-03-05 22:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `appraisal`
--

DROP TABLE IF EXISTS `appraisal`;
CREATE TABLE `appraisal` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `totalScore` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appraisal`
--

INSERT INTO `appraisal` (`id`, `staff_id`, `student_id`, `totalScore`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 17, 2, '2019-05-07 16:26:02', '2019-05-07 16:26:02'),
(2, 1, 1, 14, 2, '2019-05-07 16:27:30', '2019-05-07 16:27:30'),
(3, 1, 1, 12, 5, '2019-05-07 16:28:49', '2019-05-07 16:28:49'),
(4, 2, 1, 9, 5, '2019-05-07 16:29:49', '2019-05-07 16:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `assigncourse`
--

DROP TABLE IF EXISTS `assigncourse`;
CREATE TABLE `assigncourse` (
  `id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `clasSize` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigncourse`
--

INSERT INTO `assigncourse` (`id`, `dept_id`, `staff_id`, `course_id`, `clasSize`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 50, '2019-04-16 10:25:29', '2019-04-16 10:25:29'),
(2, 2, 5, 1, 20, '2019-04-16 10:32:24', '2019-04-16 10:32:24'),
(3, 2, 4, 1, 7, '2019-04-17 12:49:01', '2019-04-17 12:49:01'),
(4, 4, 3, 4, 6, '2019-04-17 18:39:24', '2019-04-17 18:39:24'),
(5, 1, 2, 2, 6, '2019-04-17 18:41:40', '2019-04-17 18:41:40'),
(6, 1, 1, 5, 2, '2019-04-17 18:45:58', '2019-04-17 18:45:58'),
(7, 1, 2, 5, 2, '2019-04-17 18:47:18', '2019-04-17 18:47:18'),
(8, 2, 4, 6, 2, '2019-04-17 18:49:05', '2019-04-17 18:49:05'),
(9, 2, 5, 6, 2, '2019-04-17 18:49:27', '2019-04-17 18:49:27'),
(10, 3, 7, 3, 2, '2019-04-17 18:51:58', '2019-04-17 18:51:58'),
(11, 3, 7, 7, 5, '2019-04-17 20:38:57', '2019-04-17 20:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `coursetbl`
--

DROP TABLE IF EXISTS `coursetbl`;
CREATE TABLE `coursetbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `courseCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courseName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursetbl`
--

INSERT INTO `coursetbl` (`id`, `courseCode`, `courseName`, `credit_unit`, `semester`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'mth101', 'engineering mathematics', '1', '1', 2, '2019-04-15 11:14:23', '2019-04-15 19:53:34'),
(2, 'eng101', 'english', '3', '1', 1, '2019-04-16 09:53:37', '2019-04-16 09:53:37'),
(3, 'code111', 'crimology', '2', '1', 3, '2019-04-17 18:38:10', '2019-04-17 18:38:10'),
(4, 'wee221', 'world changers department', '2', '2', 4, '2019-04-17 18:38:41', '2019-04-17 18:38:41'),
(5, 'mec122', 'mechanics', '2', '1', 1, '2019-04-17 18:43:40', '2019-04-17 18:43:40'),
(6, 'sug111', 'sug', '4', '2', 2, '2019-04-17 18:44:26', '2019-04-17 18:44:26'),
(7, '3333', 'dddddddddddddddd', '4', '3', NULL, '2019-04-17 20:38:34', '2019-04-18 07:40:19'),
(8, NULL, NULL, NULL, NULL, NULL, '2019-05-07 08:01:35', '2019-05-07 08:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `fac_id` int(10) UNSIGNED NOT NULL,
  `dept_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `fac_id`, `dept_name`, `dept_desc`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computer Engineering', 'gfggfg', '2019-03-06 17:48:00', '2019-03-06 17:48:00'),
(2, 5, 'medicine and surgery', 'ffgfg', '2019-03-06 17:48:36', '2019-03-06 17:48:36'),
(3, 5, 'christology', 'dfdf', '2019-03-06 17:49:45', '2019-03-06 17:49:45'),
(4, 4, 'wwwerrer', 'gggg', '2019-03-06 17:50:25', '2019-03-06 17:50:25'),
(5, 3, 'lol', 'iim', '2019-03-10 21:02:05', '2019-03-10 21:02:05'),
(6, 1, 'vv v', 'ccd', '2019-03-30 02:26:19', '2019-03-30 02:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `fac_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fac_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `fac_name`, `fac_desc`, `created_at`, `updated_at`) VALUES
(1, 'enginering', 'dfd', '2019-03-06 16:24:37', '2019-03-06 16:24:37'),
(2, 'science', 'sdsds', '2019-03-06 16:25:51', '2019-03-06 16:25:51'),
(3, 'environmental', 'yeh', '2019-03-06 16:26:43', '2019-03-06 16:26:43'),
(4, 'fdfdfdf', 'd', '2019-03-06 16:42:01', '2019-03-06 16:42:01'),
(5, 'medicine', 'cvcv', '2019-03-06 16:43:33', '2019-03-06 16:43:33'),
(6, 'rrtr', 'err', '2019-03-06 17:02:53', '2019-03-06 17:02:53'),
(7, 'best life', 'is a best life i dey tell you', '2019-03-06 17:03:57', '2019-03-06 17:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

DROP TABLE IF EXISTS `leavetbl`;
CREATE TABLE `leavetbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_applied_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_start_yr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_end_yr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_reasons` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_recommended_yr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `leaveActualYear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leavetbl`
--

INSERT INTO `leavetbl` (`id`, `staff_id`, `leave_type`, `leave_applied_year`, `leave_start_yr`, `leave_end_yr`, `leave_reasons`, `leave_recommended_yr`, `status`, `created_at`, `updated_at`, `leaveActualYear`) VALUES
(2, '2', 'Sabastical Leave', '2020', '1591158643', '1233', '32323', '2021', 1, '2019-03-29 01:42:18', '2019-04-10 22:27:40', '2022'),
(7, '1', 'Sabastical Leave', '2019', '1649462400', '8099', 'kkkkkkkkk', NULL, 2, '2019-04-09 19:49:34', '2019-04-09 19:49:34', NULL),
(8, '1', 'Sabastical Leave', '2019', '1649462400', '2090', 'ffd', '2023', 2, '2019-04-10 15:37:54', '2019-04-10 21:59:56', '2026'),
(9, '1', 'Sabastical Leave', '2019', '1334016000', '2011', '1222222ddddddddddddddd', '2023', 1, '2019-04-10 22:04:27', '2019-04-11 08:29:02', '2024'),
(10, '2', 'Sabastical Leave', '2019', '1334016000', '2222', '2ggggggg', '2020', 1, '2019-04-10 22:29:28', '2019-04-11 08:30:18', '2021'),
(11, '1', 'Sabastical Leave', '2019', '0', '1212', 'hhhhhhhhhhhhhhhhhh', '2023', 1, '2019-04-11 08:02:44', '2019-04-11 08:18:27', '2024'),
(12, '1', 'Sabastical Leave', '2019', '0', '222222', 'dddsd', '2023', 1, '2019-04-11 08:18:47', '2019-04-11 08:18:59', '2025'),
(13, '1', 'Sabastical Leave', '2019', '0', '2323', 'hhhhhhhhhhhheeeeeeeeeeee', '2023', 1, '2019-04-11 08:19:43', '2019-04-11 08:19:59', '2024'),
(14, '1', 'Sabastical Leave', '2019', '0', '2323', 'jjjjjjjjjjjjjj', '2023', 2, '2019-04-11 08:20:25', '2019-04-15 10:18:06', '2024'),
(15, '1', 'Sabastical Leave', '2019', '0', '54554', 'hgghghgh', '2023', 2, '2019-04-11 08:37:04', '2019-04-15 08:57:07', '2024'),
(16, '2', 'Sabastical Leave', '2019', '0', '23232', 'gfgfgfgfgfgfgfg', '2027', 2, '2019-04-11 16:36:14', '2019-04-15 08:56:44', '2029'),
(17, '2', 'Sabastical Leave', '2019', '0', '14442', 'gggggggggggreeeeeeeeeeeeeeeeee', '2020', 2, '2019-04-11 17:29:09', '2019-04-15 08:56:17', '2022'),
(18, '1', 'Sabastical Leave', '2019', '1586822400', '2025', 'fffffffffffffffff', '2020', 2, '2019-04-14 21:01:37', '2019-04-15 08:26:24', '2021'),
(19, '1', 'Sabastical Leave', '2019', '1334361600', '2016', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', NULL, 2, '2019-04-14 21:06:55', '2019-04-15 07:53:07', NULL),
(20, '1', 'Sabastical Leave', '2019', '1334448000', '2020', 'bgbgbgbb', NULL, 2, '2019-04-15 07:55:49', '2019-04-15 08:25:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

DROP TABLE IF EXISTS `memos`;
CREATE TABLE `memos` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `staff_id`, `memo_type`, `memo_body`, `memo_title`, `sender`, `created_at`, `updated_at`) VALUES
(1, '2', 'heal', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n\r\nbecause it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure', 'Promotion Letter', '1', '2019-03-09 22:47:37', '2019-03-09 22:47:37'),
(2, '4', 'heal', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus\r\n\r\nbecause it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure', 'sack eyyah', '1', '2019-03-10 19:11:13', '2019-03-10 19:11:13'),
(3, '2', 'sick', 'sdsrsrss', 'lllllllllllll', '1', '2019-03-10 19:28:00', '2019-03-10 19:28:00'),
(4, '5', 'heal', 'hhhhhhhhhhhhhhhhhh', 'jjjjjjjjjjjjj', '1', '2019-03-10 19:28:31', '2019-03-10 19:28:31'),
(5, '6', 'sick', 'yyyyyyyyyyyyyyyyyy', 'lol', '1', '2019-03-10 21:03:32', '2019-03-10 21:03:32'),
(6, '5', 'heal', 'vvvvvvvvvvvvvvvv', 'ssssssssssss', '1', '2019-04-09 22:08:56', '2019-04-09 22:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(3, '2019_03_05_125555_create_admins_table', 1),
(4, '2019_03_05_130016_create_faculties_table', 1),
(5, '2019_03_05_130039_create_departments_table', 1),
(7, '2019_03_09_140903_create_memos_table', 2),
(8, '2019_03_17_010743_add_img_path', 3),
(9, '2019_03_17_012418_create_staff_academics_table', 4),
(10, '2019_03_17_012433_create_staff_works_table', 4),
(11, '2019_03_17_012948_add_status', 4),
(12, '2019_03_28_172236_leave_tbl', 5),
(13, '2019_03_28_172508_create_leavetbl_table', 5),
(14, '2019_04_01_024632_add_promoted_year_to_table', 6),
(15, '2019_04_08_230125_add_status_staff_leave_to_staff_works', 7),
(16, '2019_04_10_084226_add_leave_actual_leave_leavetbl', 8),
(17, '2019_04_15_102731_create_course_tbl', 9),
(18, '2019_04_15_103047_create_assign_course', 9),
(19, '2019_04_19_211559_create_student_tbl', 10),
(20, '2019_04_19_223651_create_student_course_tbl', 10),
(21, '2019_04_20_221130_add_dept_i_d', 11),
(22, '2019_04_20_222000_drop_column', 12),
(23, '2019_04_21_173225_create_students_table', 13),
(24, '2019_04_21_174102_add_dept_id_table', 14),
(25, '2019_04_21_214118_create_students_table', 15),
(26, '2019_04_21_214526_add_dept_id_table', 16),
(27, '2019_04_25_215620_create_appraisal_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_academics`
--

DROP TABLE IF EXISTS `staff_academics`;
CREATE TABLE `staff_academics` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(11) NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_attended` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_study` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_img_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_academics`
--

INSERT INTO `staff_academics` (`id`, `staff_id`, `degree`, `school_attended`, `starting_date`, `ending_date`, `field_study`, `specialization`, `degree_img_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'B.sc', 'uniuyo', '10/16/2018', '10/20/2018', 'petroleum engineering', 'engineering', '1553621196PPA_Letter.PDF.pdf', '2019-03-20 06:58:29', '2019-03-27 00:26:36'),
(6, 3, 'B.sc', 'uniuyo', '10/16/2018', '10/20/2018', '10/16/2018', '10/16/2018', '15531255561.JPG', '2019-03-21 06:34:08', '2019-03-21 06:45:56'),
(7, 2, 'B.sc', 'uniuyo', '10/16/2018', '10/20/2018', 'fffffffffffffff', 'bbbbbbbbbbbbbb', '1554977403COURTESY DEPARTMENT.docx', '2019-03-21 06:48:31', '2019-04-11 17:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `staff_works`
--

DROP TABLE IF EXISTS `staff_works`;
CREATE TABLE `staff_works` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_assumption_duty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_ractification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_confirm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_first_appoint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `PromotedYear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_leave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_works`
--

INSERT INTO `staff_works` (`id`, `staff_id`, `status`, `rank`, `date_assumption_duty`, `date_ractification`, `step`, `date_confirm`, `status_first_appoint`, `created_at`, `updated_at`, `PromotedYear`, `status_leave`) VALUES
(1, 1, '5', 'CONUASS 3', '12', 'eeeeeeeee', '3', '12', 'Lecturer 2', '2019-03-20 08:03:56', '2019-04-14 21:05:17', '1555352040', '1'),
(7, 3, '2', 'CONUASS 1', '10/16/2018', '10/16/2018', '5', '10/16/2018', 'Assistant Lecturer', '2019-03-21 06:34:08', '2019-04-01 05:16:41', '1555352100', '0'),
(8, 2, '5', 'CONUASS 5', '4232', 'bbbbbbbbb', '4', '2323', 'Lecturer 2', '2019-03-21 06:48:32', '2019-04-14 21:00:53', '1555352100', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dept_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dept_id`) VALUES
(1, NULL, NULL, '12/eg/co/900', NULL, '$2y$10$5o6cSqrg/jrhEklwTRxTUeKW9Y9v6KKLxDQizAKOgUCJcYXchCouK', NULL, '2019-04-21 20:47:17', '2019-04-21 20:47:17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_tbl`
--

DROP TABLE IF EXISTS `student_course_tbl`;
CREATE TABLE `student_course_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_course_tbl`
--

INSERT INTO `student_course_tbl` (`id`, `student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2019-04-21 20:47:38', '2019-04-21 20:47:38'),
(2, '1', '5', '2019-04-21 20:47:38', '2019-04-21 20:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

DROP TABLE IF EXISTS `student_tbl`;
CREATE TABLE `student_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dept_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `reg_no`, `password`, `remember_token`, `created_at`, `updated_at`, `dept_id`) VALUES
(1, '12/eg/co/608', '$2y$10$L/I5T5YLasukati8cuOCJOTOwoUNJ8wb.5sYh2p1FG/Wa.txrG7mu', NULL, '2019-04-20 21:41:09', '2019-04-20 21:41:09', '1'),
(2, '12/eg/co/609', '$2y$10$NnRMVTrlSAWD4J6mvgW.v.IpXi0GU6zHnuvzF51zKZXv/Km3ZeX4K', NULL, '2019-04-20 23:26:33', '2019-04-20 23:26:33', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `img_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_idNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `dept_id`, `img_path`, `age`, `phone`, `marital_status`, `gender`, `nationality`, `staff_idNo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'emma', 'israel', 'emma@yahoo.com', 1, 'images/20190326172636.jpg', '12', '5555555555', 'divorce', 'Male', 'NIGERIA', '8RZELAW', NULL, '$2y$10$biwL77q.xmYaTspkZXZf..4WGeJKIMCdTwJaBVZPPGmNtKEaP7T.y', 'n03tE5bc6eFz5eBkMQFtuULnvf869T2pYDzVG76Ph42SdAhrtheSpip7EUey', '2019-03-06 18:16:14', '2019-03-27 00:26:36', '0'),
(2, 'PEACE', 'king', 'peace@yahoo.com', 1, 'images/20190411101003.jpg', '43', '433343434', 'divorce', 'Male', 'NIGERIA', '1ONA0RK', NULL, '$2y$10$qIG4WTNl18HVX9Dzq53a2evQbD9G8OQf9LEp8KrofQi9.Ituy.wgK', NULL, '2019-03-06 18:20:23', '2019-04-11 17:10:03', '0'),
(3, 'OKON', 'OKON', 'okon@yhoo.com', 4, 'images/20190320234556.jpg', '123', '133333333333333444444444', 'married', 'Female', 'NIGERIA', 'I1QTYV4', NULL, '$2y$10$ZAXKoh/uKcE0ZfGlps6sPuDN0urnptgDNnYcZisLr/KSiP6f4meiG', NULL, '2019-03-06 18:22:43', '2019-03-21 06:45:56', '0'),
(4, 'HOLY', 'KING', 'holy@yahoo.com', 2, '', NULL, NULL, NULL, NULL, NULL, '5PWHAN4', NULL, '$2y$10$hM72w4BqdL04wMxes1TniePmZ3sZgEY5jPWRAv/DcrK6vHIAB30Au', NULL, '2019-03-06 19:22:34', '2019-03-06 19:22:34', '0'),
(5, 'GFGF', 'FGF', 'fg@yahoo.com', 2, '', NULL, NULL, NULL, NULL, NULL, 'BILK9O2', NULL, '$2y$10$dfjTa8Sa1Weq8CIdjoq2Oeznn7rSNVu6OxPiyRvXdU/.mRQOdFk2i', NULL, '2019-03-06 20:06:09', '2019-03-06 20:06:09', '0'),
(6, 'QIJJIJIKM', 'LLLLLLLL', 'lol@yahoo.com', 5, '', NULL, NULL, NULL, NULL, NULL, '9EV5KFL', NULL, '$2y$10$QrnncGqSBp7p2/H7/Rrh6exOJY8kh.nUOHlvhrEA6KzX3NUoiTz8u', NULL, '2019-03-10 21:02:45', '2019-03-10 21:02:45', '0'),
(7, 'HONCHO', 'ISRAEL', 'honcho@yahoo.com', 3, NULL, NULL, NULL, NULL, NULL, NULL, 'ZPA3QCG', NULL, '$2y$10$axmLStBLfMJERTCkOqUrj.Zv0FrJm82blvsYS2Z21npVmX8Dj.KIS', NULL, '2019-04-17 18:51:39', '2019-04-17 18:51:39', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appraisal`
--
ALTER TABLE `appraisal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigncourse`
--
ALTER TABLE `assigncourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursetbl`
--
ALTER TABLE `coursetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavetbl`
--
ALTER TABLE `leavetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
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
-- Indexes for table `staff_academics`
--
ALTER TABLE `staff_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_works`
--
ALTER TABLE `staff_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `student_course_tbl`
--
ALTER TABLE `student_course_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_tbl_reg_no_unique` (`reg_no`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appraisal`
--
ALTER TABLE `appraisal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assigncourse`
--
ALTER TABLE `assigncourse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coursetbl`
--
ALTER TABLE `coursetbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leavetbl`
--
ALTER TABLE `leavetbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `staff_academics`
--
ALTER TABLE `staff_academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_works`
--
ALTER TABLE `staff_works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_course_tbl`
--
ALTER TABLE `student_course_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

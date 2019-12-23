-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 06:59 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

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

CREATE TABLE `appraisal` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `totalScore` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigncourse`
--

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
(1, 1, 1, 1, 6, '2019-06-17 03:57:16', '2019-06-17 03:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `coursetbl`
--

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
(1, 'mpm123', 'Formulation of Microbs', '2', '1', 1, '2019-05-12 15:08:42', '2019-05-12 15:08:42'),
(2, 'mee123', 'Micorbs formulation', '2', '1', 1, '2019-05-12 15:19:40', '2019-05-12 15:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

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
(1, 1, 'Microbiology', 'This is the study of microbs', '2019-05-12 14:50:17', '2019-05-12 14:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

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
(1, 'Science', 'This is where all the department that belongs to this faculty would be added', '2019-05-12 14:49:47', '2019-05-12 14:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

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
(1, '1', 'sick', 'Greetings . Ash color senator, Turquoise color senator, white LONG sleeve senator shall be included in men’s uniform from Next year.\r\nWhite long sleeve senator + Any color of agbada is propose for First Sunday of January 2019. Similar picture is attached above.\r\nSame color of tie will be organize (This include both long tie and butterfly bow tie)\r\nDetails concerning the aforementioned point No. (3) will be communicated later to all men\r\nAny other changes shall be communicated before time so that all men will be able to prepare for it.\r\nIs all about Love, unity and uniformity.', 'Notice of Minimum wage Increment', '1', '2019-05-12 14:55:58', '2019-05-12 14:55:58');

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

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_academics`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `staff_works`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

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
(1, NULL, NULL, '13/ee/ff/1234', NULL, '$2y$10$qaPWlaC1YDy9RivphIMWnuX8mmsBj93sIZ/V9qVLlkUMtZEK4rgSG', NULL, '2019-05-12 14:56:35', '2019-05-12 14:56:35', '1'),
(2, NULL, NULL, '12/dd/ss/123', NULL, '$2y$10$JSHQ63A22qHHBVEodMPu5uPdDb9OfNi9MG.FP17mRacwimX8gl3hi', NULL, '2019-05-12 14:58:23', '2019-05-12 14:58:23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_tbl`
--

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
(1, '2', '1', '2019-05-12 15:11:23', '2019-05-12 15:11:23'),
(2, '1', '2', '2019-05-12 20:45:16', '2019-05-12 20:45:16'),
(3, '2', '2', '2019-05-12 20:47:35', '2019-05-12 20:47:35'),
(4, '1', '1', '2019-05-12 20:52:43', '2019-05-12 20:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dept_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
(1, 'KINGDOM', 'KINGDOM', 'kingdom@yahoo.com', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2IEZNA5', NULL, '$2y$10$cFUQiflt5H.a9Il8aO90A.qDiJRERNX9jsv4KAPB9NLLPRHS4fSdu', NULL, '2019-05-12 14:50:50', '2019-05-12 14:50:50', '0');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assigncourse`
--
ALTER TABLE `assigncourse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coursetbl`
--
ALTER TABLE `coursetbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leavetbl`
--
ALTER TABLE `leavetbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `staff_academics`
--
ALTER TABLE `staff_academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_works`
--
ALTER TABLE `staff_works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_course_tbl`
--
ALTER TABLE `student_course_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2024 at 02:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_english_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `address_details` varchar(255) DEFAULT NULL,
  `district_id` bigint(20) DEFAULT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL,
  `province_name` varchar(255) DEFAULT NULL,
  `ward_id` bigint(20) DEFAULT NULL,
  `ward_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `created_at`, `created_by`, `is_delete`, `updated_at`, `updated_by`, `address_details`, `district_id`, `district_name`, `province_id`, `province_name`, `ward_id`, `ward_name`) VALUES
(1, '2023-12-17 16:11:38.770274', NULL, NULL, '2023-12-17 16:11:38.770274', NULL, 'Thôn 6', 155, NULL, 17, NULL, 5173, NULL),
(2, '2023-12-17 16:16:14.214270', NULL, NULL, '2023-12-17 16:16:14.214270', NULL, 'Thôn 6', 260, NULL, 27, NULL, 9349, NULL),
(3, '2023-12-17 16:23:12.836101', 'Nguyễn Thuỳ Trang', 0, '2023-12-17 16:23:12.836101', 'Nguyễn Thuỳ Trang', 'Thôn 6', 26, 'Huyện Đồng Văn', 2, 'Tỉnh Hà Giang', 745, 'Xã Phố Cáo'),
(4, '2023-12-20 00:00:00.000000', 'Nguyễn Ngọc Lan', 0, '2023-12-20 00:00:00.000000', 'Nguyễn Ngọc Lan', 'Thôn 5', 58, 'Thành Phố Bắc Kạn', 6, 'Tỉnh Bắc Kạn', 1837, 'Phường Sông Cầu'),
(5, '2023-12-20 00:00:00.000000', 'Nguyễn Ngọc Lan', 0, '2023-12-20 00:00:00.000000', 'Nguyễn Ngọc Lan', 'Thôn 6', 248, 'Huyện Tam Đảo', 26, 'Tỉnh Vĩnh Phúc', 8917, 'Xã Yên Dương'),
(6, '2023-12-20 00:00:00.000000', 'Nguyễn Văn Tài', 0, '2023-12-20 00:00:00.000000', 'Nguyễn Văn Tài', 'Thôn 5', 84, 'Huyện Si Ma Cai', 10, 'Tỉnh Lào Cai', 2818, 'Xã Lùng Thẩn'),
(7, '2023-12-20 00:00:00.000000', 'Nguyễn Văn Lợi', 0, '2023-12-20 00:00:00.000000', 'Nguyễn Văn Lợi', '215 Ho Tung Maau', 96, 'Huyện Mường Nhé', 11, 'Tỉnh Điện Biên', 3155, 'Xã Sen Thượng'),
(8, '2023-12-21 00:00:00.000000', NULL, NULL, '2023-12-21 00:00:00.000000', NULL, '215 Ho Tung Maau', 260, NULL, 27, NULL, 9355, NULL),
(9, '2023-12-24 00:00:00.000000', NULL, NULL, '2023-12-24 00:00:00.000000', NULL, 'Thôn 5', 61, NULL, 6, NULL, 1894, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `total_students` int(11) DEFAULT NULL,
  `semester_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `end_semester_score` float DEFAULT NULL,
  `fifteen_min_score` float DEFAULT NULL,
  `final_score` float DEFAULT NULL,
  `fourty_fifth_min_score` float DEFAULT NULL,
  `mid_semester_score` float DEFAULT NULL,
  `oral_score` float DEFAULT NULL,
  `student_id` bigint(20) DEFAULT NULL,
  `subject_id` bigint(20) DEFAULT NULL,
  `semester_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `semester_name` varchar(255) DEFAULT NULL,
  `year_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `dob` datetime(6) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` enum('FEMALE','MALE') DEFAULT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `address_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `created_by`, `is_delete`, `updated_at`, `updated_by`, `email`, `password`, `phone`, `role`) VALUES
(18, NULL, NULL, 0, NULL, NULL, 'superadmin@gmail.com', '$2y$10$Cro3xOVXQEnOJr7fITzfCOLAPmNUqSmrshBMTYJbY90N29Ww0SCRW', '0909090909', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT 0,
  `updated_at` datetime(6) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `year_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `created_at`, `created_by`, `is_delete`, `updated_at`, `updated_by`, `year_name`) VALUES
(1, '2023-12-20 07:50:34.000000', 'superadmin', 0, '2023-12-20 07:50:34.000000', 'superadmin', '2023-2024'),
(2, '2023-12-20 07:50:34.000000', 'superadmin', 0, '2023-12-20 07:50:34.000000', 'superadmin', '2022-2023'),
(3, '2023-12-20 07:50:34.000000', 'superadmin', 0, '2023-12-20 07:50:34.000000', 'superadmin', '2021-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKg7h1twsp1j0prlrch227u5iux` (`semester_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK5secqnjjwgh9wxk4h1xwgj1n0` (`student_id`),
  ADD KEY `FKhhw6hbmiyabjlm1jghr00m5d8` (`subject_id`),
  ADD KEY `FKndoaallktteqb0osyspg5fsi0` (`semester_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK7w0wxawgsexa0ifu262tob1ep` (`year_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK2gfv5igrehldexncc2pvnvqse` (`card_id`),
  ADD UNIQUE KEY `UK_bkix9btnoi1n917ll7bplkvg5` (`user_id`),
  ADD KEY `FKcaf6ht0hfw93lwc13ny0sdmvo` (`address_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK6dotkott2kjsp8vw4d0m25fb7` (`email`),
  ADD UNIQUE KEY `UKdu5v5sr43g5bfnji4vb8hg5s3` (`phone`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `FKg7h1twsp1j0prlrch227u5iux` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `FK5secqnjjwgh9wxk4h1xwgj1n0` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `FKhhw6hbmiyabjlm1jghr00m5d8` FOREIGN KEY (`subject_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `FKndoaallktteqb0osyspg5fsi0` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `FK7w0wxawgsexa0ifu262tob1ep` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FKcaf6ht0hfw93lwc13ny0sdmvo` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `FKk0thg920a3xk3v59yjbsatw1l` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 02:18 PM
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
-- Database: `research_complex`
--
CREATE DATABASE IF NOT EXISTS `research_complex` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `research_complex`;

-- --------------------------------------------------------

--
-- Table structure for table `check_form`
--

CREATE TABLE `check_form` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `nationalid` varchar(50) NOT NULL,
  `job` varchar(250) NOT NULL,
  `job_place` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `quesm` varchar(150) NOT NULL,
  `shoaba` varchar(100) DEFAULT NULL,
  `specilisation` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `Co_supervisor` varchar(250) NOT NULL,
  `message_title` varchar(500) NOT NULL,
  `Broad_topic` varchar(500) NOT NULL,
  `keyWords` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `reserach_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `check_form`:
--   `id_user`
--       `user` -> `id`
--

--
-- Dumping data for table `check_form`
--

INSERT INTO `check_form` (`id`, `name`, `nationalid`, `job`, `job_place`, `phone`, `faculty`, `quesm`, `shoaba`, `specilisation`, `email`, `academic_year`, `supervisor`, `Co_supervisor`, `message_title`, `Broad_topic`, `keyWords`, `date`, `id_user`, `reserach_type`) VALUES
(21, 'Ali Mahmoud', '34444444444444', 'معيد', 'حاسبات اسيوط', '011222222', 'الطب', 'باطنه', 'باطنه', '', 'aaa@gmail.com', '2023', '', '', 'الأمراض الوراثيه التي تؤثر علي السلامه المهنيه', '', '', '2023-09-18', 9, 'ماجستير');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `events`:
--

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `description`, `employee_name`, `student_name`, `date`) VALUES
(18, 'تم  رفع نموذج طلب خدمة البحث', 'admin', '', '2023-09-18'),
(19, 'تم  رفع طلب الحصول علي خدمة', 'admin', '', '2023-09-18'),
(20, 'تم  رفع طلب الحصول علي خدمة', 'admin', '', '2023-09-18'),
(21, 'تم  رفع طلب الحصول علي خدمة', 'admin', '', '2023-09-18'),
(22, 'تم  رفع طلب الحصول علي خدمة', 'admin', 'Ali Mahmoud', '2023-09-18'),
(23, 'تم  رفع طلب الحصول علي خدمة', 'admin', 'Ali Mahmoud', '2023-09-18'),
(24, 'تم  رفع نموذج طلب خدمة البحث', 'admin', 'Ali Mahmoud', '2023-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `faculty`:
--

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(2, 'الطب'),
(3, 'هندسه');

-- --------------------------------------------------------

--
-- Table structure for table `message_attachments`
--

CREATE TABLE `message_attachments` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `message_attachments`:
--   `message_id`
--       `check_form` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_attachments_services`
--

CREATE TABLE `message_attachments_services` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `message_attachments_services`:
--   `message_id`
--       `check_form` -> `id`
--   `services_id`
--       `services` -> `id`
--

--
-- Dumping data for table `message_attachments_services`
--

INSERT INTO `message_attachments_services` (`id`, `message_id`, `services_id`, `description`, `file_path`) VALUES
(6, 21, 15, 'طلب الحصول علي خدمة', 'New Text Document.txt'),
(7, 21, 15, 'نموذج طلب خدمة البحث', 'جدول تخلفات 2021-2022 و 2022-2023.docx');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `dateservices` date NOT NULL,
  `extra_Services` varchar(150) DEFAULT NULL,
  `SUP_Phone` varchar(11) DEFAULT NULL,
  `Notes` varchar(400) NOT NULL,
  `is_finished` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `services`:
--   `id_message`
--       `check_form` -> `id`
--

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `description`, `id_message`, `dateservices`, `extra_Services`, `SUP_Phone`, `Notes`, `is_finished`) VALUES
(15, 1, 21, '2023-09-18', '', '01222222222', '', 0),
(16, 3, 21, '2023-09-18', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `servsalary`
--

CREATE TABLE `servsalary` (
  `id` int(11) NOT NULL,
  `desc_ser` varchar(400) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `servsalary`:
--

--
-- Dumping data for table `servsalary`
--

INSERT INTO `servsalary` (`id`, `desc_ser`, `salary`) VALUES
(1, 'فحص الرسالة', 0),
(2, 'مراجعة مستخلص الرسالة باللغة العربية', 0),
(3, 'مراجعة ملخص الرسالة باللغة العربية', 0),
(5, 'مراجعة ملخص الرسالة باللغة الإنجليزية', 0),
(7, 'رسوم مطابقة الرسالة علي القواعد', 0),
(8, 'رسوم تعديلات لمطابقة الرسالة للقواعد', 0),
(9, 'المراجعة اللغوية للرسالة باللغة العربية', 0),
(10, 'المراجعة اللغوية للرسالة باللغة الإنجليزية', 0),
(11, 'المراجعة الصياغية والأسلوبية للرسالة باللغة العربية', 0),
(12, 'خدمة الترجمة', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `national_number` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `national_number`, `email`, `password`, `type`) VALUES
(1, 'admin', '222222222222222222222222', '12345', '12345', 'admin'),
(9, 'Ahmed Ali', '32222222222222', 'aaa@gmail.com', 'aaa@gmail.com', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_form`
--
ALTER TABLE `check_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_form_ibfk_1` (`id_user`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_attachments`
--
ALTER TABLE `message_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `message_attachments_services`
--
ALTER TABLE `message_attachments_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id` (`services_id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_message` (`id_message`);

--
-- Indexes for table `servsalary`
--
ALTER TABLE `servsalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_form`
--
ALTER TABLE `check_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message_attachments`
--
ALTER TABLE `message_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_attachments_services`
--
ALTER TABLE `message_attachments_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `servsalary`
--
ALTER TABLE `servsalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_form`
--
ALTER TABLE `check_form`
  ADD CONSTRAINT `check_form_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `message_attachments`
--
ALTER TABLE `message_attachments`
  ADD CONSTRAINT `message_attachments_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `check_form` (`id`);

--
-- Constraints for table `message_attachments_services`
--
ALTER TABLE `message_attachments_services`
  ADD CONSTRAINT `message_attachmentsss_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `check_form` (`id`),
  ADD CONSTRAINT `message_attachmentssss_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `check_form` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 04:28 PM
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
(19, 'محمد أحمد محمود', '12345676543212', 'bnng', 'bnng', 'bnng', 'الطب', 'bnng', 'bnng', 'bnng', 'aboa51371@gmail.com', '2023', 'bnng', 'bnng', 'bnng', 'bnng', 'bnng', '2023-09-14', 7, 'أختر نوع الدرجة');

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
(1, 'تم تعديل بيانات موضوع بحثي ', '', 'محمد أحمد محمود', '2023-09-12'),
(2, 'تم  رفع استمارة فحص', 'admin', 'محمد أحمد محمود', '2023-09-13'),
(3, 'تم تعديل بيانات موضوع بحثي ', 'احمد محمد محمود', 'محمد أحمد محمود', '2023-09-13'),
(4, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14'),
(5, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'bnng', '2023-09-14'),
(6, 'تم تعديل بيانات موضوع بحثي ', 'admin', '12345676543212', '2023-09-14'),
(7, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14'),
(8, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14'),
(9, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14'),
(10, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14'),
(11, 'تم تعديل بيانات موضوع بحثي ', 'admin', 'محمد أحمد محمود', '2023-09-14');

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
(2, 'admin', '222222222222222222222222', '12345', '12345', 'admin'),
(7, 'احمد محمد محمود', '2883333333333333333333', 'aaa@gmail.com', 'aaa@gmail.com', 'student');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

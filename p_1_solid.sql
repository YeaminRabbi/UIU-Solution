-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2022 at 05:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'rabbi', 'rabbi@gmail.com', '123', '2021-07-17 06:56:58'),
(2, 'mehnaz', 'mehnaz@gmail.com', '123', '2021-07-17 06:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user_id`, `created_at`, `post_id`) VALUES
(2, 'wkjbga;lvqwrv\r\n', 7, '2022-12-16 04:49:10', 1),
(3, 'adfbadf', 7, '2022-12-16 04:50:54', 1),
(4, 'kjvklyvlkihblknljbkuvijhyv', 7, '2022-12-16 04:57:27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `name`, `created_at`) VALUES
(1, 'SPL', '2022-12-11 13:42:51'),
(2, 'APL', '2022-12-11 13:43:58'),
(3, 'DLD', '2022-12-11 13:43:58'),
(4, 'Accounting', '2022-12-11 13:43:58'),
(5, 'Economics', '2022-12-11 13:43:58'),
(6, 'Vector', '2022-12-11 13:43:58'),
(7, 'OOP', '2022-12-11 13:43:59'),
(8, 'Data Structure 2', '2022-12-11 13:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `created_at`) VALUES
(1, 'CSE', '2021-07-18 15:56:00'),
(2, 'EEE', '2021-07-18 15:56:00'),
(3, 'DEPT', '2021-07-18 15:58:52'),
(4, 'ELectic', '2021-07-18 15:58:56'),
(5, 'Magical', '2021-07-18 15:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_issues`
--

CREATE TABLE `faculty_issues` (
  `id` int(11) NOT NULL,
  `issue` text NOT NULL,
  `reply` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_issues`
--

INSERT INTO `faculty_issues` (`id`, `issue`, `reply`, `status`, `user_id`) VALUES
(1, 'I have to insert the form data again and again give me a solution to this problem in the admin section for creating a exam portal', 'Taken Care of already\r\n', 1, 5),
(2, 'asdgasdfgadsfbv\r\n', 'We are lokking for this soluction', 1, 6),
(3, 'asdgasfdhasedtgwerfb', NULL, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `details`, `user_id`, `created_at`) VALUES
(1, 'Facing Lab Issues', 'for the last few month lab time is way to lengthy in this winter', 7, '2022-12-16 03:58:00'),
(2, 'kjhvljhvl', 'kgcklugv;lkhub;', 7, '2022-12-16 04:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `project_proposal`
--

CREATE TABLE `project_proposal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `team` text NOT NULL,
  `supervisor` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `trimester` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_proposal`
--

INSERT INTO `project_proposal` (`id`, `title`, `user_id`, `team`, `supervisor`, `position`, `course_id`, `details`, `created_at`, `trimester`, `status`) VALUES
(1, 'Mini Drone', 7, 'x,y,z,d,df', 'Rim SIr', '2nd Runner up', 4, 'nlanlfnglaenvleknbpoqwietb\r\nsdgnsg\r\nnsgbns\r\ngbwegtbw\r\nrgbwrgbwr\r\ngnwrgnmetykryu,rterrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\r\nrrrrrrrrrrrrrrrrrjfgndsfgs', '2022-12-16 03:04:49', 'Spring 22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_answer_solutions`
--

CREATE TABLE `question_answer_solutions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `course_name` varchar(255) NOT NULL,
  `trimester` varchar(255) NOT NULL,
  `mid_final` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_answer_solutions`
--

INSERT INTO `question_answer_solutions` (`id`, `title`, `question`, `answer`, `reply`, `user_id`, `reply_id`, `created_at`, `course_name`, `trimester`, `mid_final`) VALUES
(3, 'asdfa', 'uploads/jellyLogo.jpg', NULL, NULL, 7, NULL, '2022-12-11 12:19:31', 'CODE_101', 'asvasdv', 'mid'),
(4, 'sdfgwerb', 'uploads/jellyLogo.jpg', NULL, NULL, 7, NULL, '2022-12-11 12:21:14', 'CODE_101', 'sdbsdfb', 'mid'),
(5, 'sdgsdgn', 'uploads/679906.jpg', NULL, 'asdasdsvawergqerth', 7, NULL, '2022-12-11 12:25:17', 'CODE_102', 'sdaf', 'mid'),
(6, 'sedghnws', 'images/passport_jaria.jpeg', NULL, 'asdfgbafnhwretnrfg sdfghndsfgn sb', 7, NULL, '2022-12-11 12:27:33', 'CODE_101', 'asdfbgerbv', 'final'),
(7, 'sdfgnbsdgbn', 'uploads/passport_jaria.jpeg', NULL, NULL, 7, NULL, '2022-12-11 12:30:24', 'CODE_102', 'sadfgasdfasdf', 'final');

-- --------------------------------------------------------

--
-- Table structure for table `requisition_order_list`
--

CREATE TABLE `requisition_order_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_contact` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requisition_order_list`
--

INSERT INTO `requisition_order_list` (`id`, `user_id`, `order_name`, `order_contact`, `created_at`, `status`) VALUES
(12, 2, 'Rabbi', '01768002727', '2021-07-21 21:03:29', 0),
(13, 2, 'Jelly ', '1425', '2021-07-21 21:17:53', 1),
(14, 2, 'Rabbi', '01768002727', '2021-07-21 21:18:45', 1),
(15, 2, 'Pajji', '546', '2021-07-21 21:21:16', 1),
(16, 3, 'Yousuf', '0154624814', '2021-07-22 10:08:22', 0),
(17, 1, 'Helly', '01768002727', '2021-07-22 10:10:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requisition_order_product_list`
--

CREATE TABLE `requisition_order_product_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requisition_order_product_list`
--

INSERT INTO `requisition_order_product_list` (`id`, `product_name`, `category_name`, `order_id`, `quantity`) VALUES
(8, 'Windows Pro Version 10 (Activated)', 'Windows 10', 12, 100),
(9, 'Monitor', 'Computer', 12, 2),
(10, 'Keyboard', 'Computer', 12, 3),
(11, 'Wifi Router', 'Computer', 12, 1),
(12, 'Monitor', 'Computer', 13, 9),
(13, 'Keyboard', 'Computer', 13, 20),
(14, 'RFL chair (plastic)', 'Chair', 14, 5),
(15, 'RFL chair (plastic)', 'Chair', 15, 5),
(16, 'Monitor', 'Computer', 16, 4),
(17, 'Mouse', 'Computer', 16, 5),
(18, 'Keyboard', 'Computer', 16, 30),
(19, 'Wifi Router', 'Computer', 16, 10),
(20, 'RFL chair (plastic)', 'Chair', 16, 4),
(21, 'Windows Pro Version 10 (Activated)', 'Windows 10', 16, 10),
(22, 'Mouse', 'Computer', 17, 9),
(23, 'Windows Pro Version 10 (Activated)', 'Windows 10', 17, 10);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `created_at`) VALUES
(1, 'Mohammadpur Preparatory School', '2021-07-17 09:14:43'),
(2, 'BAF Shaheen College', '2021-07-17 09:14:43'),
(3, 'Milstone', '2021-07-18 15:37:58'),
(4, 'Kakoli School', '2021-07-18 15:39:17'),
(5, 'VNC', '2021-07-18 15:39:19'),
(6, 'DRMC', '2021-07-18 15:41:46'),
(7, 'Preparatory', '2021-07-18 15:46:26'),
(8, 'United International University', '2022-12-11 09:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `ua_grader_application`
--

CREATE TABLE `ua_grader_application` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_grade` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ua_grader_application`
--

INSERT INTO `ua_grader_application` (`id`, `type`, `user_id`, `course_id`, `name`, `course_grade`, `phone`, `section`, `created_at`, `status`) VALUES
(1, 'GRADER', 7, 3, 'jellyfish', '2.54', '01768004414', 'A', '2022-12-11 14:17:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `school_division` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `official_id` int(11) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_id` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `password`, `user_type`, `school_division`, `status`, `official_id`, `designation`, `created_id`) VALUES
(1, 'Helly', 'hlas@gmail.com', '01768002727', '123', 'STUDENT', '1', 1, 111745, 'Professor', '2021-07-17 09:39:41'),
(2, 'Rabbi', 'rabbi@gmail.com', '01768002727', '123', 'TEACHER', '1', 1, 1425, 'Manager XX', '2021-07-17 09:40:13'),
(3, 'Yousuf', 'yousuf@gmail.com', '0154624814', '123', 'TEACHER', '1', 1, 12356478, 'CEO', '2021-07-18 07:38:41'),
(4, 'Bejji', 'bejji@gmail.com', '123', '123', 'OFFICIAL', '4', 1, 11171248, 'Web Developer', '2021-07-21 20:10:48'),
(5, 'JellyFish', 'jellyfish@gmail.com', '01768002727', '123', 'TEACHER', '1', 1, 12455781, 'Faculty', '2022-12-11 09:13:40'),
(6, 'jelluy2', 'jellyfish2@gmail.com', '121212', '123', 'OFFICIAL', '1', 1, 12413, 'asdf', '2022-12-11 09:26:06'),
(7, 's1', 's1@gmail.com', '0147744212', '123', 'STUDENT', '8', 1, 11171248, 'student', '2022-12-11 09:38:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_issues`
--
ALTER TABLE `faculty_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_proposal`
--
ALTER TABLE `project_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answer_solutions`
--
ALTER TABLE `question_answer_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_order_list`
--
ALTER TABLE `requisition_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_order_product_list`
--
ALTER TABLE `requisition_order_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ua_grader_application`
--
ALTER TABLE `ua_grader_application`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty_issues`
--
ALTER TABLE `faculty_issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_proposal`
--
ALTER TABLE `project_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_answer_solutions`
--
ALTER TABLE `question_answer_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requisition_order_list`
--
ALTER TABLE `requisition_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `requisition_order_product_list`
--
ALTER TABLE `requisition_order_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ua_grader_application`
--
ALTER TABLE `ua_grader_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

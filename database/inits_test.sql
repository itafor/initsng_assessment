-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 04:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inits_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `venue` text,
  `description` text,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `venue`, `description`, `start_date`, `end_date`, `photo`, `photo_name`, `created_at`, `updated_at`) VALUES
(18, 'TESTIG', 'CALABAR', 'OKK', '2020-11-10 00:00:00', '2020-11-17 00:00:00', NULL, NULL, '2020-11-15 14:10:04', '2020-11-15 14:10:04'),
(19, 'efqfe', 'hhh', 'hbh', '2020-11-19 00:00:00', '2020-11-17 00:00:00', NULL, NULL, '2020-11-15 14:17:04', '2020-11-15 14:17:04'),
(20, 'fm ,m ,m d,ms ds,m ', 'eweewew', 'eknewlknelknklewnklewn', '2020-11-03 00:00:00', '2020-11-28 00:00:00', NULL, NULL, '2020-11-15 14:26:10', '2020-11-15 14:26:10'),
(21, 'updated event', 'updated venue', 'updated', '2020-11-12 00:00:00', '2020-11-10 00:00:00', NULL, NULL, '2020-11-15 15:40:02', '2020-11-16 01:45:47'),
(22, 'Sunday Event', 'Lagos', 'Another desc', '2020-11-11 00:00:00', '2020-11-18 00:00:00', '‰PNG\r\n\Z\r\n\0\0\0\r\nIHDR\0\0\0±\0\0\0…\0\0\0#éL\0\0\0uPLTEÿ- ÿÿÿÿ\0\0ÿ\0ÿ*ÿ\"ÿ%ÿ¦¦ÿ(ÿ÷öÿÔÒÿÉÇÿµ³ÿ¹·ÿÚØÿb[ÿˆƒÿPGÿáàÿ®«ÿUMÿŠÿòñÿ{uÿ1%ÿçæÿ\\Uÿ8-ÿìëÿÂÀÿIAÿc`ÿB8ÿokÿ¡ÿ}|þ˜•þjdÿts¾bË\0\05IDATxœí˜ívª:@I&Á0 Ê§ èû?âDzÚsWOë]õ¬;ûGW	70™IâyAAAAAAAA¯‚úi?DÉ\r\nü', 'laravel logo.png', '2020-11-16 02:34:08', '2020-11-16 02:34:40'),
(23, 'qwqwqw', 'wqwq', 'wwqww', '2020-11-12 00:00:00', '2020-11-11 00:00:00', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿí\06Photoshop 3.0\08BIM\0\0\0\0\0g\0MA1N_RzXvG12eeJEr43m\0ÿÛ\0C\0				\n	\n\n  1$$1,5+(+5,N=77=NZLHLZnbbnŠƒŠ´´òÿÛ\0C				\n	\n\n  1$$1,5+(+5,N=77=NZLHLZnbbnŠƒŠ´´òÿÂ\0ÀÐ\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0', 'francis_itafor.jpg', '2020-11-16 02:40:12', '2020-11-16 02:40:12'),
(24, 'ewewee', 'jbh kjbkj', 'weewewewew', '2020-11-19 00:00:00', '2020-11-17 00:00:00', '', 'laravel logo.png', '2020-11-16 02:48:59', '2020-11-16 02:48:59'),
(25, 'ewewee', 'ewew', 'ewewew', '2020-11-19 00:00:00', '2020-11-16 00:00:00', '', '21.-Alia-Bhatt.jpg', '2020-11-16 02:50:03', '2020-11-16 02:50:03'),
(26, 'ytyyuyu', 'yuyuyu', 'qwqqww', '2020-11-18 00:00:00', '2020-10-28 00:00:00', '', '26.-Kylie-Jenner-2.jpg', '2020-11-16 02:58:19', '2020-11-16 02:58:19'),
(27, 'ewewe', 'qwwq', 'qwwwwq', '2020-11-07 00:00:00', '2020-11-09 00:00:00', '', 'BeautyPlusMe_20191204171710_fast.jpg', '2020-11-16 03:05:51', '2020-11-16 03:05:51'),
(28, 'qwwq', 'wwq', '11weeere', '2020-11-12 00:00:00', '2020-11-03 00:00:00', '', 'BeautyPlusMe_20191125215951_fast.jpg', '2020-11-16 03:14:51', '2020-11-16 03:14:51'),
(29, 'eweewwe', 'errere', 'qwqwqw', '2020-12-04 00:00:00', '2020-11-10 00:00:00', '', 'BeautyPlusMe_20191125074841_fast.jpg', '2020-11-16 03:26:09', '2020-11-16 03:26:09'),
(30, 'wqwqw', 'ewe', 'qwqwqw', '2020-11-13 00:00:00', '2020-11-18 00:00:00', '', 'BeautyPlusMe_20191204142810_fast.jpg', '2020-11-16 03:28:33', '2020-11-16 03:28:33'),
(31, 'wqqw', 'qwqw', 'eweewew', '2020-11-21 00:00:00', '2020-11-24 00:00:00', '', 'BeautyPlusMe_20191125074841_fast.jpg', '2020-11-16 03:29:17', '2020-11-16 03:29:17'),
(32, 'qwqw', 'ewwq', 'qwqw', '2020-11-20 00:00:00', '2020-11-16 00:00:00', '', 'BeautyPlusMe_20191125074747_fast.jpg', '2020-11-16 03:31:56', '2020-11-16 03:31:56'),
(33, 'qwqwqw', 'eee', 'weeew', '2020-11-11 00:00:00', '2020-11-10 00:00:00', '', 'BeautyPlusMe_20191125074841_fast.jpg', '2020-11-16 03:35:31', '2020-11-16 03:35:31'),
(34, 'qwwwq', 'qeqww', 'wqwq', '2020-11-21 00:00:00', '2020-11-17 00:00:00', '', 'BeautyPlusMe_20191128161601_fast.jpg', '2020-11-16 03:36:34', '2020-11-16 03:36:34'),
(35, 'ewew', 'rer', 'qwqwqw', '2020-11-17 00:00:00', '2020-11-10 00:00:00', '', 'BeautyPlusMe_20191204142810_fast.jpg', '2020-11-16 06:12:29', '2020-11-16 06:12:29'),
(36, 'Learn how to use your mobile phone (android) to shoot and edit videos for your business', 'ifelodun local council dev. area\r\n\r\n3 Dispensary Street\r\n\r\nLagos, LA', 'Limelite Lift Conference is a gathering of professionals, experts, creatives in different industry of the economy. It is an initiative organized by Eventriga TV under the platform #LimeliteNG.\r\n\r\nThe conference sought to connect, enlighten and empower young and talented creative(s) from the grassroots.\r\n\r\nAt the Lift Conference, young creative(s) from different local government will be educated on how to grow their craft and also leverage on the existing resources in their community for self development\r\n\r\n', '2020-10-28 00:00:00', '2020-11-19 00:00:00', '', 'IMG_0196.JPG', '2020-11-16 21:19:35', '2020-11-16 21:19:35'),
(37, 'Learn how to use your mobile phone (android) to shoot and edit videos for your business', 'Location\r\nifelodun local council dev. area\r\n\r\n3 Dispensary Street\r\n\r\nLagos, LA', 'Limelite Lift Conference is a gathering of professionals, experts, creatives in different industry of the economy. It is an initiative organized by Eventriga TV under the platform #LimeliteNG.\r\n\r\nThe conference sought to connect, enlighten and empower young and talented creative(s) from the grassroots.\r\n\r\nAt the Lift Conference, young creative(s) from different local government will be educated on how to grow their craft and also leverage on the existing resources in their community for self development\r\n\r\n', '2020-06-15 14:45:00', '2020-06-15 14:45:00', '', 'BeautyPlusMe_20191204171710_fast.jpg', '2020-11-16 21:32:49', '2020-11-16 21:32:49'),
(38, 'LEARN TO MAKE MONEY WITHOUT TRADING TIME FOR IT', 'Lagos ikeja\r\n\r\nCALL/SMS FOR RESERVATION 08167757627\r\n\r\nLagos, 234', 'An Islamic scholar and security expert, Malam Lawal Gusau, has reported a group, Feminist Coalition, to the Department of State Services for the role the coalition played in the #EndSARS protests.\r\n\r\nGusau also lodged a complaint against a member of the coalition, Fikhirriya Hashim, who is based in the United KingdomThe letter titled, â€˜Complaint of Instigation of Public Disturbances, Instigation of Nigerians Against a Government Institution (Nigeria Police Force) and Subversion of Nigerian Democracy Against one Fikhirriya Hashim and Her Organisation, Feminist Coalitionâ€™ is dated October 26, 2020.', '2020-08-13 15:35:00', '2020-12-25 11:35:00', '', '21.-Alia-Bhatt.jpg', '2020-11-17 01:30:04', '2020-11-17 01:30:04'),
(39, 'rttttttttttttttttttttttttttttttttt', 'gyttttttttttttttttttttttt', 'yttttttttttttttttttt', '2020-06-15 14:45:00', '2020-06-15 14:45:00', '', '', '2020-11-17 02:59:15', '2020-11-17 02:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `event_applications`
--

CREATE TABLE `event_applications` (
  `id` int(6) UNSIGNED NOT NULL,
  `event_id` int(6) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_applications`
--

INSERT INTO `event_applications` (`id`, `event_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 37, 9, '2020-11-16 23:54:54', '2020-11-16 23:54:54'),
(2, 37, 11, '2020-11-17 00:57:13', '2020-11-17 00:57:13'),
(3, 38, 12, '2020-11-17 02:38:16', '2020-11-17 02:38:16'),
(4, 34, 13, '2020-11-17 03:00:44', '2020-11-17 03:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(17, ' MeetUp', ' MeetUp event', '2020-11-17 01:25:23', '2020-11-17 01:25:23'),
(18, 'Leap', 'Leap event', '2020-11-17 01:25:45', '2020-11-17 01:25:45'),
(19, 'Recruiting Mission', 'Recruiting Mission event', '2020-11-17 01:27:26', '2020-11-17 01:27:26'),
(20, 'Hackathon', 'Hackathon event', '2020-11-17 01:27:39', '2020-11-17 01:27:39'),
(21, ' Premium-only Webinar', ' Premium-only Webinar event', '2020-11-17 01:27:58', '2020-11-17 01:27:58'),
(22, 'Open Webinar', 'Open Webinar event', '2020-11-17 01:28:15', '2020-11-17 01:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `get_event_types`
--

CREATE TABLE `get_event_types` (
  `id` int(6) UNSIGNED NOT NULL,
  `event_id` int(6) UNSIGNED NOT NULL,
  `event_type_id` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_event_types`
--

INSERT INTO `get_event_types` (`id`, `event_id`, `event_type_id`, `created_at`, `updated_at`) VALUES
(16, 20, 10, '2020-11-15 14:26:10', '2020-11-15 14:26:10'),
(17, 20, 15, '2020-11-15 14:26:10', '2020-11-15 14:26:10'),
(18, 21, 10, '2020-11-15 15:40:02', '2020-11-15 15:40:02'),
(19, 21, 15, '2020-11-15 15:40:02', '2020-11-15 15:40:02'),
(20, 21, 16, '2020-11-15 15:40:02', '2020-11-15 15:40:02'),
(23, 22, 15, '2020-11-16 02:34:08', '2020-11-16 02:34:08'),
(24, 23, 15, '2020-11-16 02:40:12', '2020-11-16 02:40:12'),
(25, 24, 10, '2020-11-16 02:48:59', '2020-11-16 02:48:59'),
(26, 25, 15, '2020-11-16 02:50:03', '2020-11-16 02:50:03'),
(27, 26, 15, '2020-11-16 02:58:19', '2020-11-16 02:58:19'),
(28, 27, 15, '2020-11-16 03:05:51', '2020-11-16 03:05:51'),
(29, 28, 15, '2020-11-16 03:14:51', '2020-11-16 03:14:51'),
(30, 29, 15, '2020-11-16 03:26:09', '2020-11-16 03:26:09'),
(31, 30, 10, '2020-11-16 03:28:33', '2020-11-16 03:28:33'),
(32, 31, 15, '2020-11-16 03:29:17', '2020-11-16 03:29:17'),
(33, 32, 15, '2020-11-16 03:31:56', '2020-11-16 03:31:56'),
(34, 33, 10, '2020-11-16 03:35:31', '2020-11-16 03:35:31'),
(35, 34, 10, '2020-11-16 03:36:34', '2020-11-16 03:36:34'),
(36, 34, 16, '2020-11-16 03:36:34', '2020-11-16 03:36:34'),
(37, 35, 15, '2020-11-16 06:12:29', '2020-11-16 06:12:29'),
(38, 36, 10, '2020-11-16 21:19:35', '2020-11-16 21:19:35'),
(39, 36, 15, '2020-11-16 21:19:35', '2020-11-16 21:19:35'),
(40, 37, 10, '2020-11-16 21:32:49', '2020-11-16 21:32:49'),
(41, 37, 15, '2020-11-16 21:32:49', '2020-11-16 21:32:49'),
(42, 37, 16, '2020-11-16 21:32:49', '2020-11-16 21:32:49'),
(43, 38, 17, '2020-11-17 01:30:05', '2020-11-17 01:30:05'),
(44, 38, 21, '2020-11-17 01:30:05', '2020-11-17 01:30:05'),
(45, 38, 22, '2020-11-17 01:30:05', '2020-11-17 01:30:05'),
(46, 39, 18, '2020-11-17 02:59:15', '2020-11-17 02:59:15'),
(47, 39, 21, '2020-11-17 02:59:15', '2020-11-17 02:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `emailid`, `first_name`, `last_name`, `phone`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', 'itaforfrancis@gmail.com', 'itaforfrancis@gmail.com', 'Francis', '+2347065907948', NULL, '2020-11-14 17:41:19', '2020-11-14 17:41:19'),
(2, 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 'Super', 'Admin', '+2347065907948', 'Admin', '2020-11-14 17:42:00', '2020-11-14 17:43:05'),
(3, 'e10adc3949ba59abbe56e057f20f883e', 'blessing@gmail.com', 'Blessing', 'Paul', '09012341234', NULL, '2020-11-14 18:34:15', '2020-11-14 18:34:15'),
(4, 'e10adc3949ba59abbe56e057f20f883e', 'asor@gmail.com', 'Asor', 'Francis', '09012341230', NULL, '2020-11-14 18:35:40', '2020-11-14 18:35:40'),
(5, 'e10adc3949ba59abbe56e057f20f883e', 'moses@gmail.com', 'Moses', 'Etu', '09065907942', NULL, '2020-11-14 19:46:34', '2020-11-14 19:46:34'),
(6, 'e10adc3949ba59abbe56e057f20f883e', 'michael@gmail.com', 'Michael', 'Id', '+2347065907948', NULL, '2020-11-14 20:05:09', '2020-11-14 20:05:09'),
(7, 'e10adc3949ba59abbe56e057f20f883e', 'dorathy@gmail.com', 'Dorathy', 'Felix', '+2347065907948', NULL, '2020-11-16 20:23:14', '2020-11-16 20:23:14'),
(9, 'e10adc3949ba59abbe56e057f20f883e', 'eliza@gmail.com', 'Eliza', 'Simon', '09020000000', NULL, '2020-11-16 23:54:54', '2020-11-16 23:54:54'),
(11, 'e10adc3949ba59abbe56e057f20f883e', 'etuki@gmail.com', 'Etuki', 'Felix', '+2347065907948', NULL, '2020-11-17 00:57:13', '2020-11-17 00:57:13'),
(12, '202cb962ac59075b964b07152d234b70', 'DDDD@gmail.com', 'gf', 'Francis', '+2347065907948', NULL, '2020-11-17 02:38:16', '2020-11-17 02:38:16'),
(13, 'b53b3a3d6ab90ce0268229151c9bde11', 'ww@gmail.com', 'ewewew', 'ereer', '9999', NULL, '2020-11-17 03:00:44', '2020-11-17 03:00:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_applications`
--
ALTER TABLE `event_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_event_types`
--
ALTER TABLE `get_event_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `event_applications`
--
ALTER TABLE `event_applications`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `get_event_types`
--
ALTER TABLE `get_event_types`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_applications`
--
ALTER TABLE `event_applications`
  ADD CONSTRAINT `event_applications_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `event_applications_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `get_event_types`
--
ALTER TABLE `get_event_types`
  ADD CONSTRAINT `get_event_types_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

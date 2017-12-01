-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 09:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakkodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

DROP TABLE IF EXISTS `t_info`;
CREATE TABLE `t_info` (
  `info_id` int(11) NOT NULL,
  `info_title` text COLLATE utf8_unicode_ci,
  `info_date` datetime DEFAULT NULL,
  `info_type` int(2) DEFAULT NULL,
  `info1_url` text COLLATE utf8_unicode_ci,
  `info2_file` text COLLATE utf8_unicode_ci,
  `info3_contents` longtext COLLATE utf8_unicode_ci,
  `info3_img` text COLLATE utf8_unicode_ci,
  `info3_url` text COLLATE utf8_unicode_ci,
  `info3_mail` text COLLATE utf8_unicode_ci,
  `info3_file` text COLLATE utf8_unicode_ci,
  `info3_filename` text COLLATE utf8_unicode_ci,
  `info_dspl_flag` int(2) DEFAULT NULL COMMENT 'NULL:Show, 1:Not Show',
  `info_top_flag` int(2) DEFAULT NULL COMMENT 'NULL:Normal, 1:Show Top Page',
  `info_start` datetime DEFAULT NULL,
  `info_end` datetime DEFAULT NULL,
  `info_free1` text COLLATE utf8_unicode_ci,
  `info_free2` text COLLATE utf8_unicode_ci,
  `info_free3` text COLLATE utf8_unicode_ci,
  `info_free4` text COLLATE utf8_unicode_ci,
  `info_free5` text COLLATE utf8_unicode_ci,
  `last_date` datetime DEFAULT NULL,
  `last_kind` int(2) DEFAULT NULL COMMENT '0:Insert, 1:Update, 9:Delete',
  `last_ipadrs` text COLLATE utf8_unicode_ci,
  `last_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table t_info';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` text COLLATE utf8_unicode_ci,
  `username` text COLLATE utf8_unicode_ci,
  `password` text COLLATE utf8_unicode_ci,
  `u_free1` text COLLATE utf8_unicode_ci,
  `u_free2` text COLLATE utf8_unicode_ci,
  `u_free3` text COLLATE utf8_unicode_ci,
  `u_free4` text COLLATE utf8_unicode_ci,
  `u_free5` text COLLATE utf8_unicode_ci,
  `last_date` datetime DEFAULT NULL,
  `last_kind` int(2) DEFAULT NULL COMMENT '0:Insert, 1:Update, 9:Delete',
  `last_ipadrs` text COLLATE utf8_unicode_ci,
  `last_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `username`, `password`, `u_free1`, `u_free2`, `u_free3`, `u_free4`, `u_free5`, `last_date`, `last_kind`, `last_ipadrs`, `last_user`) VALUES
(3, 'Hakko', 'hakko', 'fc00fbc693a291e66afef2b94d4f7aaced6df875', NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', 9, '127.0.0.1', 1),
(4, 'Admin', 'admin', 'fc00fbc693a291e66afef2b94d4f7aaced6df875', NULL, NULL, NULL, NULL, NULL, '2017-11-29 00:00:00', 0, '127.0.0.1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

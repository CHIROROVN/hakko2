-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 11:37 AM
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
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `u_id` int(11) NOT NULL,
  `u_name` text COLLATE utf8_unicode_ci,
  `u_login` text COLLATE utf8_unicode_ci,
  `u_passwd` text COLLATE utf8_unicode_ci,
  `remember_token` text COLLATE utf8_unicode_ci,
  `u_free1` text COLLATE utf8_unicode_ci,
  `u_free2` text COLLATE utf8_unicode_ci,
  `u_free3` text COLLATE utf8_unicode_ci,
  `u_free4` text COLLATE utf8_unicode_ci,
  `u_free5` text COLLATE utf8_unicode_ci,
  `last_date` datetime DEFAULT NULL,
  `last_kind` int(2) DEFAULT NULL COMMENT '0:Insert, 1:Update, 9:Delete',
  `last_ipadrs` text COLLATE utf8_unicode_ci,
  `last_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table m_user';

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`u_id`, `u_name`, `u_login`, `u_passwd`, `remember_token`, `u_free1`, `u_free2`, `u_free3`, `u_free4`, `u_free5`, `last_date`, `last_kind`, `last_ipadrs`, `last_user`) VALUES
(3, 'Hakko', 'hakko', 'cafbbe7154449f6778f021fcc951e8e7e61c2ac1', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', 0, '127.0.0.1', 1),
(4, 'Admin', 'admin', 'cafbbe7154449f6778f021fcc951e8e7e61c2ac1', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', 1, '127.0.0.1', 1);

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

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`info_id`, `info_title`, `info_date`, `info_type`, `info1_url`, `info2_file`, `info3_contents`, `info3_img`, `info3_url`, `info3_mail`, `info3_file`, `info3_filename`, `info_dspl_flag`, `info_top_flag`, `info_start`, `info_end`, `info_free1`, `info_free2`, `info_free3`, `info_free4`, `info_free5`, `last_date`, `last_kind`, `last_ipadrs`, `last_user`) VALUES
(1, 'News 001', '2017-12-01 17:56:00', 1, 'http://new-shikishima.chiroro-test.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-01 11:57:10', 0, '127.0.0.1', 3),
(2, 'Info Title 003', '2017-12-04 10:32:00', 1, '', 'uploads/infos/files/dummy-12_1151853777.pdf', 'Contents\r\nContents\r\nContents\r\nContents\r\n', 'uploads/infos/images/akaiwa_1252975867.png', 'http://new-shikishima.chiroro-test.com/', 'phuong.nd@chiroro.com.vn', 'uploads/infos/files/dummy-15_364936623.pdf', '関連ファイル名03', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-04 04:45:18', 1, '127.0.0.1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

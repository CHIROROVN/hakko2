-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 06:13 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hakkodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE IF NOT EXISTS `m_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `last_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table m_user' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

DROP TABLE IF EXISTS `t_info`;
CREATE TABLE IF NOT EXISTS `t_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_title` text COLLATE utf8_unicode_ci,
  `info_date` date DEFAULT NULL,
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
  `last_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table t_info' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

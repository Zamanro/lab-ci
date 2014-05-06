-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12-log
-- รุ่นของ PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `registers`
--
CREATE DATABASE IF NOT EXISTS `registers` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `registers`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `fileupload`
--

CREATE TABLE IF NOT EXISTS `fileupload` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- dump ตาราง `fileupload`
--

INSERT INTO `fileupload` (`id`, `name`) VALUES
(12, 'xyz');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `userid`
--

CREATE TABLE IF NOT EXISTS `userid` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=62 ;

--
-- dump ตาราง `userid`
--

INSERT INTO `userid` (`id`, `username`, `password`) VALUES
(61, '552535009', '1234');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `userinfoid` int(9) NOT NULL AUTO_INCREMENT,
  `field` varchar(50) COLLATE utf8_bin NOT NULL,
  `fieldValue` varchar(50) COLLATE utf8_bin NOT NULL,
  `id` int(9) NOT NULL,
  PRIMARY KEY (`userinfoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=58 ;

--
-- dump ตาราง `userinfo`
--

INSERT INTO `userinfo` (`userinfoid`, `field`, `fieldValue`, `id`) VALUES
(57, 'Name', 'Worapon', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

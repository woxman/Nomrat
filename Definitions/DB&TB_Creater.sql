-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 02:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `User_Defined`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
CREATE Database naserii;
use naserii;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(3) NOT NULL,
  `user` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(20) NOT NULL,
  `mehr` int(2) NOT NULL,
  `aban` int(2) NOT NULL,
  `azar` int(11) NOT NULL,
  `dey` int(2) NOT NULL,
  `bahman` int(2) NOT NULL,
  `esfand` int(2) NOT NULL,
  `farvardin` int(2) NOT NULL,
  `ordibehesht` int(2) NOT NULL,
  `khordad` int(2) NOT NULL,
  `rate` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `d_birth` varchar(11) NOT NULL,
  `address` varchar(1024) CHARACTER SET utf32 NOT NULL,
  `sh_sh` int(11) NOT NULL,
  `base` int(2) NOT NULL,
  `field` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `evidence` varchar(30) NOT NULL,
  `post` varchar(50) NOT NULL,
  `school` varchar(30) CHARACTER SET utf32 NOT NULL,
  `area` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `post` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

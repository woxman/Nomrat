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
CREATE Database Naseri;
use Naseri;
CREATE TABLE IF NOT EXISTS `admins` (
  `ID` int(3) NOT NULL,
  `Users` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(256) NOT NULL,
  `Photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `ID` int(20) NOT NULL,
  `Mehr` int(2) NOT NULL,
  `Aban` int(2) NOT NULL,
  `Azar` int(11) NOT NULL,
  `Dey` int(2) NOT NULL,
  `Bahman` int(2) NOT NULL,
  `Esfand` int(2) NOT NULL,
  `Farvardin` int(2) NOT NULL,
  `Ordibehesht` int(2) NOT NULL,
  `Khordad` int(2) NOT NULL,
  `Rate` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Family` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `D_Birth` varchar(11) NOT NULL,
  `Address` varchar(1024) CHARACTER SET utf32 NOT NULL,
  `Sh_Sh` int(11) NOT NULL,
  `Base` int(2) NOT NULL,
  `Field` varchar(30) NOT NULL,
  `School` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(18) NOT NULL,
  `Photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `ID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Family` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `Evidence` varchar(30) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `School` varchar(30) CHARACTER SET utf32 NOT NULL,
  `Area` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(18) NOT NULL,
  `Photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Users` varchar(10) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(18) NOT NULL,
  `Photo` varchar(124) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

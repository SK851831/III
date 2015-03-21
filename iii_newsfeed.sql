-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 11:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iii_newsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE IF NOT EXISTS `1` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:38'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `2`
--

CREATE TABLE IF NOT EXISTS `2` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `2`
--

INSERT INTO `2` (`pid`, `seen`, `posted_on`) VALUES
(30, 0, '2015-03-14 15:21:57'),
(31, 0, '2015-03-14 15:23:13'),
(32, 0, '2015-03-14 15:37:38'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `3`
--

CREATE TABLE IF NOT EXISTS `3` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3`
--

INSERT INTO `3` (`pid`, `seen`, `posted_on`) VALUES
(30, 0, '2015-03-14 15:21:57'),
(31, 0, '2015-03-14 15:23:14'),
(32, 0, '2015-03-14 15:37:38'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `4`
--

CREATE TABLE IF NOT EXISTS `4` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `4`
--

INSERT INTO `4` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `5`
--

CREATE TABLE IF NOT EXISTS `5` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `5`
--

INSERT INTO `5` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `6`
--

CREATE TABLE IF NOT EXISTS `6` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `6`
--

INSERT INTO `6` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:50'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `7`
--

CREATE TABLE IF NOT EXISTS `7` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `7`
--

INSERT INTO `7` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:51'),
(36, 0, '2015-03-20 14:59:48'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `8`
--

CREATE TABLE IF NOT EXISTS `8` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `8`
--

INSERT INTO `8` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(33, 0, '2015-03-14 15:38:44'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:51'),
(36, 0, '2015-03-20 14:59:49'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `9`
--

CREATE TABLE IF NOT EXISTS `9` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `9`
--

INSERT INTO `9` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:39'),
(33, 0, '2015-03-14 15:38:44'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:51'),
(36, 0, '2015-03-20 14:59:49'),
(37, 0, '2015-03-20 16:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `10`
--

CREATE TABLE IF NOT EXISTS `10` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `10`
--

INSERT INTO `10` (`pid`, `seen`, `posted_on`) VALUES
(32, 0, '2015-03-14 15:37:40'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:51'),
(36, 0, '2015-03-20 14:59:49'),
(37, 0, '2015-03-20 16:27:34'),
(39, 0, '2015-03-21 06:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `11`
--

CREATE TABLE IF NOT EXISTS `11` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`,`posted_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `11`
--

INSERT INTO `11` (`pid`, `seen`, `posted_on`) VALUES
(30, 0, '2015-03-14 15:21:57'),
(31, 0, '2015-03-14 15:23:14'),
(32, 0, '2015-03-14 15:37:40'),
(33, 0, '2015-03-14 15:38:44'),
(34, 0, '2015-03-17 14:06:07'),
(35, 0, '2015-03-17 14:06:51'),
(36, 0, '2015-03-20 14:59:49'),
(37, 0, '2015-03-20 16:27:34'),
(38, 0, '2015-03-20 16:29:25'),
(39, 0, '2015-03-21 06:11:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

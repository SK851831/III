-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 04:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iii_posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `30`
--

CREATE TABLE IF NOT EXISTS `30` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `31`
--

CREATE TABLE IF NOT EXISTS `31` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `32`
--

CREATE TABLE IF NOT EXISTS `32` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `33`
--

CREATE TABLE IF NOT EXISTS `33` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `34`
--

CREATE TABLE IF NOT EXISTS `34` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `35`
--

CREATE TABLE IF NOT EXISTS `35` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `36`
--

CREATE TABLE IF NOT EXISTS `36` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `37`
--

CREATE TABLE IF NOT EXISTS `37` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `39`
--

CREATE TABLE IF NOT EXISTS `39` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `41`
--

CREATE TABLE IF NOT EXISTS `41` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `42`
--

CREATE TABLE IF NOT EXISTS `42` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `43`
--

CREATE TABLE IF NOT EXISTS `43` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `45`
--

CREATE TABLE IF NOT EXISTS `45` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `46`
--

CREATE TABLE IF NOT EXISTS `46` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `47`
--

CREATE TABLE IF NOT EXISTS `47` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `48`
--

CREATE TABLE IF NOT EXISTS `48` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `49`
--

CREATE TABLE IF NOT EXISTS `49` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `50`
--

CREATE TABLE IF NOT EXISTS `50` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `51`
--

CREATE TABLE IF NOT EXISTS `51` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `52`
--

CREATE TABLE IF NOT EXISTS `52` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(2000) NOT NULL,
  `uid` int(11) NOT NULL,
  `auth` int(20) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `posted_on` (`posted_on`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `post_content`, `uid`, `auth`, `posted_on`) VALUES
(30, 'hi', 2, 2, '2015-03-14 15:21:57'),
(31, 'test', 2, 2, '2015-03-14 15:23:13'),
(32, 'hi<br><br>', 1, 11, '2015-03-14 15:37:38'),
(33, 'cool', 9, 55, '2015-03-14 15:38:44'),
(34, '&lt;hr&gt;', 1, 11, '2015-03-17 14:06:07'),
(35, '<a target="_blank" rel="nofollow" href="http://facebook.com">http://facebook.com/</a>', 1, 11, '2015-03-17 14:06:50'),
(36, ''';', 1, 11, '2015-03-20 14:59:48'),
(37, '<h1><u><b><i>ssda</i></b><b><i></i></b></u></h1>', 1, 11, '2015-03-20 16:27:33'),
(38, '&nbsp;', 1, 11, '2015-03-20 16:29:24'),
(39, 'dx<br><br>', 11, 77, '2015-03-21 06:11:39'),
(40, '''";', 1, 11, '2015-03-21 16:31:00'),
(41, '''asddsa', 1, 11, '2015-03-21 16:31:16'),
(42, '"nknkk', 1, 11, '2015-03-21 16:31:23'),
(43, '''"', 1, 11, '2015-03-21 16:31:30'),
(44, '"''', 1, 11, '2015-03-21 16:31:36'),
(45, '"''', 1, 11, '2015-03-21 16:31:45'),
(46, 'mm<br><br><br>', 1, 11, '2015-03-21 16:32:30'),
(47, '"'';', 1, 11, '2015-03-21 16:56:00'),
(48, ''';', 1, 11, '2015-03-21 16:56:08'),
(49, 'mkmkmkkkmkmkmkmmkkmkmmkkmmckasmasmkasdkasdmsdaksdamksdmaskm', 1, 11, '2015-03-22 07:18:55'),
(50, 'fgggggggggggggggggggggggggggggggggggggggggggg gdddddddddddddddddddddddddddddddddddddddddddf', 1, 11, '2015-03-22 07:28:23'),
(51, 'zxzcxxxxxxxc sffffffffffffffffffff fassssssssssssss afs &nbsp; asffsasas', 1, 11, '2015-03-22 07:31:08'),
(52, '1234567890123456789012345678901234567890123456789', 1, 11, '2015-03-22 07:44:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

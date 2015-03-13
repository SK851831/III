-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 11:34 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

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
-- Table structure for table `3`
--

CREATE TABLE IF NOT EXISTS `3` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4`
--

CREATE TABLE IF NOT EXISTS `4` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `5`
--

CREATE TABLE IF NOT EXISTS `5` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6`
--

CREATE TABLE IF NOT EXISTS `6` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7`
--

CREATE TABLE IF NOT EXISTS `7` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8`
--

CREATE TABLE IF NOT EXISTS `8` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `9`
--

CREATE TABLE IF NOT EXISTS `9` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `10`
--

CREATE TABLE IF NOT EXISTS `10` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11`
--

CREATE TABLE IF NOT EXISTS `11` (
  `uid` int(30) DEFAULT NULL,
  `comments` varchar(30) DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(2000) NOT NULL,
  `uid` int(11) NOT NULL,
  `auth` int(20) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `post_content`, `uid`, `auth`, `posted_on`) VALUES
(1, 'hello', 12, 2, '2015-03-13 13:31:45'),
(2, 'hello', 12, 2, '2015-03-13 13:32:38'),
(3, 'hello', 12, 2, '2015-03-13 13:33:42'),
(4, 'thee new text', 12, 2, '2015-03-13 13:33:52'),
(5, 'hahahahahah', 12, 2, '2015-03-13 13:34:33'),
(6, 'Hello this is the master admin reporting for duty ! :p', 1, 11, '2015-03-13 15:01:34'),
(7, 'HAHAHAHAHAAHHA MASTER ADMIN', 1, 11, '2015-03-13 15:04:43'),
(8, 'The new post Feature', 12, 2, '2015-03-13 15:10:25'),
(9, 'hahhaha', 12, 2, '2015-03-13 15:10:44'),
(10, 'Karthic was here', 5, 33, '2015-03-13 15:46:30'),
(11, 'Karthic 2 was here<br><br>', 5, 33, '2015-03-13 15:47:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

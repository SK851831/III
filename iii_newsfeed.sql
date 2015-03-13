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
-- Database: `iii_newsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE IF NOT EXISTS `1` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`pid`, `seen`, `posted_on`) VALUES
(0, 0, '0000-00-00 00:00:00'),
(0, 0, '0000-00-00 00:00:00'),
(3, 0, '0000-00-00 00:00:00'),
(4, 0, '0000-00-00 00:00:00'),
(5, 0, '0000-00-00 00:00:00'),
(6, 0, '0000-00-00 00:00:00'),
(6, 0, '0000-00-00 00:00:00'),
(7, 0, '0000-00-00 00:00:00'),
(8, 0, '2015-03-13 15:10:26'),
(9, 0, '2015-03-13 15:10:44'),
(10, 0, '2015-03-13 15:46:30'),
(11, 0, '2015-03-13 15:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `2`
--

CREATE TABLE IF NOT EXISTS `2` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2`
--

INSERT INTO `2` (`pid`, `seen`, `posted_on`) VALUES
(3, 0, '0000-00-00 00:00:00'),
(4, 0, '0000-00-00 00:00:00'),
(5, 0, '0000-00-00 00:00:00'),
(7, 0, '0000-00-00 00:00:00'),
(8, 0, '2015-03-13 15:10:25'),
(9, 0, '2015-03-13 15:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `3`
--

CREATE TABLE IF NOT EXISTS `3` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3`
--

INSERT INTO `3` (`pid`, `seen`, `posted_on`) VALUES
(3, 0, '0000-00-00 00:00:00'),
(4, 0, '0000-00-00 00:00:00'),
(5, 0, '0000-00-00 00:00:00'),
(7, 0, '0000-00-00 00:00:00'),
(8, 0, '2015-03-13 15:10:26'),
(9, 0, '2015-03-13 15:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `4`
--

CREATE TABLE IF NOT EXISTS `4` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4`
--

INSERT INTO `4` (`pid`, `seen`, `posted_on`) VALUES
(11, 0, '2015-03-13 15:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `5`
--

CREATE TABLE IF NOT EXISTS `5` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5`
--

INSERT INTO `5` (`pid`, `seen`, `posted_on`) VALUES
(10, 0, '2015-03-13 15:46:30'),
(11, 0, '2015-03-13 15:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `6`
--

CREATE TABLE IF NOT EXISTS `6` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6`
--

INSERT INTO `6` (`pid`, `seen`, `posted_on`) VALUES
(7, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `12`
--

CREATE TABLE IF NOT EXISTS `12` (
  `pid` int(200) NOT NULL,
  `seen` int(200) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12`
--

INSERT INTO `12` (`pid`, `seen`, `posted_on`) VALUES
(3, 0, '0000-00-00 00:00:00'),
(4, 0, '0000-00-00 00:00:00'),
(5, 0, '0000-00-00 00:00:00'),
(7, 0, '0000-00-00 00:00:00'),
(8, 0, '2015-03-13 15:10:26'),
(9, 0, '2015-03-13 15:10:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

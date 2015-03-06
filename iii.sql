-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 03:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iii`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `auth_no` int(2) DEFAULT NULL,
  `auth` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `auth_no`, `auth`) VALUES
(1, 11, 'admin'),
(2, 2, 'android'),
(3, 22, 'admin android'),
(4, 3, 'web'),
(5, 33, 'admin web'),
(6, 4, 'programming'),
(7, 44, 'admin programming'),
(8, 5, 'networks'),
(9, 55, 'admin networks'),
(12, 7, 'machine learning'),
(13, 77, 'admin machL');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(11) NOT NULL DEFAULT '0',
  `userid` int(10) DEFAULT NULL,
  `notify` varchar(450) DEFAULT NULL,
  `date` datetime NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `auth` int(2) DEFAULT NULL,
  `profilepic` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `auth`, `profilepic`) VALUES
(1, 'Santhosh', 'sk851831@gmail.com', 'santhosh', 11, 'ss'),
(2, 'Santhosh', 'sk2@gmail.com', 'santhosh', 2, 'ss'),
(3, 'santhosh', 'sk22@gmail.com', 'santhosh', 22, 'ss'),
(4, 'santhosh', 'sk3@gmail.com', 'santhosh', 3, 'ss'),
(5, 'santhosh', 'sk33@gmail.com', 'santhosh', 33, 'ss'),
(6, 'santhosh', 'sk4@gmail.com', 'santhosh', 4, 'ss'),
(7, 'santhosh', 'sk44@gmail.com', 'santhosh', 44, 'ss'),
(8, 'santhosh', 'sk5@gmail.com', 'santhosh', 5, 'ss'),
(9, 'santhosh', 'sk55@gmail.com', 'santhosh', 55, 'ss'),
(10, 'santhosh', 'sk7@gmail.com', 'santhosh', 7, 'ss'),
(11, 'santhosh', 'sk77@gmail.com', 'santhosh', 77, 'ss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

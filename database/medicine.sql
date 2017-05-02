-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 02:45 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `fullname`, `gender`) VALUES
('sandeepsoni214', 'dba2ba502811f95a1d1779e3116245ce', 'sandeepsoni214@gmail.com', 'sandeep soni', 'male'),
('srdgroup2012', 'dba2ba502811f95a1d1779e3116245ce', 'srdgroup2012@gmail.com', 'srdgroup2012', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE IF NOT EXISTS `security_question` (
  `username` varchar(120) NOT NULL,
  `question1` varchar(120) NOT NULL,
  `answer1` varchar(120) NOT NULL,
  `question2` varchar(120) NOT NULL,
  `answer2` varchar(120) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`username`, `question1`, `answer1`, `question2`, `answer2`) VALUES
('sandeepsoni214', 'Your Birth City', 'allahabad', 'Your Primary School Name', 'mcd primary school'),
('srdgroup2012', 'Your Birth City', 'pratapgarh', 'Your Primary School Name', 'mcd primary harijan basti new rohtak road delhi 110005');

-- --------------------------------------------------------

--
-- Table structure for table `shopedetail`
--

CREATE TABLE IF NOT EXISTS `shopedetail` (
  `username` varchar(120) NOT NULL,
  `shop_name` varchar(120) NOT NULL,
  `shop_phone` varchar(120) NOT NULL,
  `shop_address` varchar(120) NOT NULL,
  `website` varchar(120) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopedetail`
--

INSERT INTO `shopedetail` (`username`, `shop_name`, `shop_phone`, `shop_address`, `website`) VALUES
('sandeepsoni214', 'srdgroup', '9871162553', 'utm nagar', 'trickandgame.blogspot.com'),
('srdgroup2012', 'ABCD ', '9871162553', 'Sanjay Enclave Uttam Nagar', 'www.absitsolution.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

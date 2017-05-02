-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 02:44 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sandeepsoni214`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `count` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`count`) VALUES
(2527);

-- --------------------------------------------------------

--
-- Table structure for table `medicinecompany`
--

CREATE TABLE IF NOT EXISTS `medicinecompany` (
  `medicine` varchar(40) NOT NULL,
  `company` varchar(40) DEFAULT NULL,
  `medicinetype` varchar(40) DEFAULT NULL,
  `mfg` date NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`medicine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinecompany`
--

INSERT INTO `medicinecompany` (`medicine`, `company`, `medicinetype`, `mfg`, `exp`) VALUES
('crocin_500', 'cipla', 'Tablet', '2012-05-06', '2015-05-06'),
('disprin_100', 'disprin', 'Tablet', '2012-05-06', '2015-05-06'),
('kbc_500', 'kbc', 'Capsules', '2012-06-23', '2016-06-23'),
('rablet-d_500', 'glaxosmith', 'Tablet', '2013-05-06', '2016-05-06'),
('vestige_500mg', 'vestige', 'Food Supplement', '2013-05-07', '2015-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `medicineentry`
--

CREATE TABLE IF NOT EXISTS `medicineentry` (
  `medicine` varchar(40) NOT NULL,
  `quantity` int(5) DEFAULT NULL,
  `issuedate` date NOT NULL,
  `expdate` date NOT NULL,
  PRIMARY KEY (`medicine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicineentry`
--

INSERT INTO `medicineentry` (`medicine`, `quantity`, `issuedate`, `expdate`) VALUES
('crocin_500', 6232, '2015-05-06', '2012-05-06'),
('disprin_100', 158, '2015-05-06', '2012-05-06'),
('kbc_500', 111, '2016-06-23', '2012-06-23'),
('rablet-d_500', 14990, '2016-05-06', '2013-05-06'),
('vestige_500mg', 493, '2015-05-07', '2013-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_weight`
--

CREATE TABLE IF NOT EXISTS `medicine_weight` (
  `medicine` varchar(40) NOT NULL,
  `weight` int(5) DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  PRIMARY KEY (`medicine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_weight`
--

INSERT INTO `medicine_weight` (`medicine`, `weight`, `rate`, `quantity`) VALUES
('crocin_500', 500, 5, 6232),
('disprin_100', 100, 1, 158),
('kbc_500', 500, 5, 111),
('rablet-d_500', 500, 7, 14990),
('vestige_500mg', 500, 200, 493);

-- --------------------------------------------------------

--
-- Table structure for table `recycle`
--

CREATE TABLE IF NOT EXISTS `recycle` (
  `slip` int(10) NOT NULL,
  `medicine` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(5) NOT NULL,
  `rate` float NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recycle`
--

INSERT INTO `recycle` (`slip`, `medicine`, `date`, `quantity`, `rate`, `amount`) VALUES
(275, 'crocin_500', '2013-03-24', 5, 5, 25),
(263, 'crocin_500', '2013-03-24', 5, 5, 25),
(279, 'crocin_500', '2013-12-07', 2, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `stockupdate`
--

CREATE TABLE IF NOT EXISTS `stockupdate` (
  `medicine` varchar(40) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `medicinetype` varchar(40) DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockupdate`
--

INSERT INTO `stockupdate` (`medicine`, `company`, `medicinetype`, `rate`, `quantity`, `date`) VALUES
('crocin_500', 'cipla', 'Tablet', 5, 5000, '2013-03-17'),
('crocin_500', 'cipla', 'Tablet', 5, 5000, '2013-03-17'),
('rablet-d_500', 'rablet', 'Tablet', 7, 5000, '2013-12-11'),
('rablet-d_500', 'rablet', 'Tablet', 7, 5000, '2013-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `totalsale`
--

CREATE TABLE IF NOT EXISTS `totalsale` (
  `slip` int(10) NOT NULL AUTO_INCREMENT,
  `medicine` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `mfg` date NOT NULL,
  `rate` int(5) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  PRIMARY KEY (`slip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=319 ;

--
-- Dumping data for table `totalsale`
--

INSERT INTO `totalsale` (`slip`, `medicine`, `date`, `quantity`, `mfg`, `rate`, `amount`) VALUES
(1, 'crocin_500', '2013-03-09', 5, '0000-00-00', 5, 25),
(2, 'crocin_500', '2013-03-09', 5, '0000-00-00', 5, 25),
(3, 'crocin_500', '2013-03-09', 5, '0000-00-00', 5, 25),
(4, 'crocin_500', '2013-03-09', 5, '0000-00-00', 5, 25),
(5, 'rablet-d_500', '2013-03-09', 5, '0000-00-00', 6, 30),
(6, 'crocin_500', '2013-03-11', 10, '0000-00-00', 5, 50),
(7, 'rablet-d_500', '2013-03-12', 10, '0000-00-00', 6, 60),
(8, 'rablet-d_500', '2013-03-12', 10, '0000-00-00', 6, 60),
(9, 'rablet-d_500', '2013-03-12', 10, '0000-00-00', 6, 60),
(10, 'rablet-d_500', '2013-03-12', 10, '0000-00-00', 6, 60),
(11, 'rablet-d_500', '2013-03-12', 10, '0000-00-00', 6, 60),
(12, 'crocin_500', '2013-03-13', 12, '0000-00-00', 5, 60),
(13, 'crocin_500', '2013-03-13', 5, '0000-00-00', 5, 25),
(14, 'crocin_500', '2013-03-13', 5, '0000-00-00', 5, 25),
(15, 'crocin_500', '2013-03-13', 5, '0000-00-00', 5, 25),
(16, 'rablet-d_500', '2013-03-13', 10, '0000-00-00', 6, 60),
(17, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(18, 'crocin_500', '2013-03-14', 1, '0000-00-00', 5, 5),
(19, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(20, 'crocin_500', '2013-03-14', 1, '0000-00-00', 5, 5),
(21, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(22, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(23, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(24, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(25, 'crocin_500', '2013-03-14', 1, '0000-00-00', 5, 5),
(26, 'crocin_500', '2013-03-14', 1, '0000-00-00', 5, 5),
(27, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(28, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(29, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(30, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(31, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(32, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(33, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(34, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(35, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(36, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(37, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(38, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(39, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(40, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(41, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(42, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(43, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(44, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(45, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(46, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(47, 'crocin_500', '2013-03-14', 3, '0000-00-00', 5, 15),
(48, 'rablet-d_500', '2013-03-14', 10, '0000-00-00', 6, 60),
(49, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(50, 'crocin_500', '2013-03-14', 5, '0000-00-00', 5, 25),
(51, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(52, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(53, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(54, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(55, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(56, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(57, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(58, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(59, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(60, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(61, 'crocin_500', '2013-03-15', 500, '0000-00-00', 5, 2500),
(62, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(63, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(64, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(65, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(66, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(67, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(68, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(69, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(70, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(71, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(72, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(73, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(74, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(75, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(76, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(77, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(78, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(79, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(80, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(81, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(82, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(83, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(84, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(85, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(86, 'CROCIN_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(87, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(88, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(89, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(90, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(91, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(92, 'disprin_100', '2013-03-15', 5, '0000-00-00', 1, 5),
(93, 'disprin_100', '2013-03-15', 5, '0000-00-00', 1, 5),
(94, 'crocin_500', '2013-03-15', 5, '0000-00-00', 5, 25),
(95, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(96, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(97, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(98, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(99, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(100, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(101, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(102, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(103, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(104, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(105, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(106, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(107, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(108, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(109, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(110, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(111, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(112, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(113, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(114, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(115, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(116, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(117, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(118, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(119, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(120, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(121, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(122, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(123, 'crocin_500', '2013-03-17', 5000, '0000-00-00', 5, 25000),
(124, 'disprin_100', '2013-03-17', 5, '0000-00-00', 1, 5),
(125, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(126, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(127, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(128, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(129, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(130, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(131, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(132, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(133, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(134, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(135, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(136, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(137, 'CROCIN_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(138, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(139, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(140, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(141, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(142, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(143, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(144, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(145, 'crocin_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(146, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(147, 'kbc_500', '2013-03-17', 5, '0000-00-00', 5, 25),
(148, 'disprin_100', '2013-03-17', 5, '0000-00-00', 1, 5),
(149, 'disprin_100', '2013-03-17', 5, '0000-00-00', 1, 5),
(150, 'disprin_100', '2013-03-17', 5, '0000-00-00', 1, 5),
(151, 'diclovin+_500', '2013-03-17', 5, '0000-00-00', 1, 5),
(152, 'crocin_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(153, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(154, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(155, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(156, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(157, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(158, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(159, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(160, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(161, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(162, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(163, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(164, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(165, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(166, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(167, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(168, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(169, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(170, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(171, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(172, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(173, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(174, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(175, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(176, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(177, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(178, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(179, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(180, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(181, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(182, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(183, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(184, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(185, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(186, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(187, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(188, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(189, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(190, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(191, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(192, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(193, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(194, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(195, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(196, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(197, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(198, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(199, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(200, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(201, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(202, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(203, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(204, 'kbc_500', '2013-03-18', 5, '0000-00-00', 5, 25),
(205, 'crocin_500', '2013-03-19', 0, '0000-00-00', 5, 0),
(206, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(207, 'crocin_500', '2013-03-19', -5, '0000-00-00', 5, -25),
(208, 'crocin_500', '2013-03-19', 0, '0000-00-00', 5, 0),
(209, 'crocin_500', '2013-03-19', 0, '0000-00-00', 5, 0),
(210, 'crocin_500', '2013-03-19', 0, '0000-00-00', 5, 0),
(211, 'crocin_500', '2013-03-19', 0, '0000-00-00', 5, 0),
(212, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(213, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(214, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(215, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(216, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(217, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(218, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(219, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(220, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(221, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(222, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(223, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(224, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(225, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(226, 'crocin_500', '2013-03-19', 5, '0000-00-00', 5, 25),
(227, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(228, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(229, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(230, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(231, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(232, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(233, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(234, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(235, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(236, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(237, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(238, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(239, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(240, 'crocin_500', '2013-03-20', 0, '0000-00-00', 5, 0),
(241, 'crocin_500', '2013-03-24', 0, '0000-00-00', 5, 0),
(242, 'crocin_500', '2013-03-24', 0, '0000-00-00', 5, 0),
(243, 'crocin_500', '0000-00-00', 0, '0000-00-00', 5, 0),
(244, 'crocin_500', '2013-03-24', 0, '0000-00-00', 5, 0),
(245, 'crocin_500', '2013-03-24', 0, '0000-00-00', 5, 0),
(246, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(247, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(248, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(249, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(250, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(251, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(252, 'crocin_500', '2013-03-24', 10, '0000-00-00', 5, 50),
(253, 'crocin_500', '2013-03-24', 10, '0000-00-00', 5, 50),
(254, 'crocin_500', '2013-03-24', 10, '0000-00-00', 5, 50),
(255, 'crocin_500', '2013-03-24', 10, '0000-00-00', 5, 50),
(256, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(257, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(258, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(259, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(260, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(261, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(262, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(264, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(265, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(266, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(267, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(268, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(269, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(270, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(271, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(272, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(273, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(274, 'crocin_500', '2013-03-24', 5, '0000-00-00', 5, 25),
(276, 'crocin_500', '2013-12-07', 5, '0000-00-00', 5, 25),
(277, 'crocin_500', '2013-12-07', 5, '0000-00-00', 5, 25),
(278, 'vestige_500mg', '2013-12-07', 2, '0000-00-00', 200, 400),
(280, 'crocin_500', '2013-12-10', 5, '0000-00-00', 5, 25),
(281, 'crocin_500', '2013-12-10', 5, '0000-00-00', 5, 25),
(282, 'crocin_500', '2013-12-10', 5, '0000-00-00', 5, 25),
(283, 'vestige_500mg', '2013-12-10', 5, '0000-00-00', 200, 1000),
(284, 'kbc_500', '2013-12-10', 5, '0000-00-00', 5, 25),
(285, 'rablet-d_500', '2013-12-10', 10, '0000-00-00', 6, 60),
(286, 'disprin_100', '2013-12-11', 6, '0000-00-00', 1, 6),
(287, 'disprin_100', '2013-12-11', 6, '0000-00-00', 1, 6),
(288, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(289, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(290, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(291, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(292, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(293, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(294, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(295, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(296, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(297, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(298, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(299, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(300, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(301, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(302, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(303, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(304, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(305, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(306, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(307, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(308, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(309, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(310, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(311, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(312, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(313, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(314, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(315, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(316, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(317, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5),
(318, 'crocin_500', '2013-12-11', 1, '0000-00-00', 5, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

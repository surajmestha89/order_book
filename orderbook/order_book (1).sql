-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2020 at 06:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardk`
--

DROP TABLE IF EXISTS `boardk`;
CREATE TABLE IF NOT EXISTS `boardk` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `place` varchar(20) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `bname` varchar(20) DEFAULT NULL,
  `model` varchar(15) NOT NULL,
  `weight` int(5) NOT NULL,
  `odate` date NOT NULL,
  `ddate` date NOT NULL,
  `amount` int(8) NOT NULL,
  `advance` int(8) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boardk`
--

INSERT INTO `boardk` (`id`, `name`, `place`, `mob`, `bname`, `model`, `weight`, `odate`, `ddate`, `amount`, `advance`, `status`) VALUES
(1, 'lrehsgrdrt', 'ergst', '97846531', 'bname', 'model', 8545, '2020-02-06', '2020-02-14', 1234, 1234, ''),
(4, 'varad', 'karkal', '876556', 'rytfugihojpo', 'sada', 78, '2020-02-08', '2020-02-14', 87328, 0, 'PAID'),
(3, 'lrehsgrdrt', 'ergst', '97846531', 'bname', 'model', 8545, '2020-02-06', '2020-02-14', 1234, 1234, ''),
(2, 'sooraj', 'karwar', '9632529881', 'mesta', 'sada', 64, '2020-02-06', '2020-02-21', 100000, 0, 'PARTIALI');

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

DROP TABLE IF EXISTS `boards`;
CREATE TABLE IF NOT EXISTS `boards` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `place` varchar(20) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `model` varchar(15) NOT NULL,
  `weight` int(5) NOT NULL,
  `odate` date NOT NULL,
  `ddate` date NOT NULL,
  `amount` int(8) NOT NULL,
  `advance` int(8) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id`, `name`, `place`, `mob`, `bname`, `model`, `weight`, `odate`, `ddate`, `amount`, `advance`, `status`) VALUES
(1, 'shree ganesh', 'gokarn', '0', 'om', '2020', 0, '2017-08-24', '2020-02-05', 0, 0, ''),
(2, 'sooraj', 'karwar', '9632529881', 'mesta', 'small', 64, '2020-02-06', '2020-02-21', 100000, 0, ''),
(3, 'varun', 'karwar', '9632529881', 'mesta', 'small', 64, '2020-02-06', '2020-02-21', 100000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

DROP TABLE IF EXISTS `revenue`;
CREATE TABLE IF NOT EXISTS `revenue` (
  `id` int(11) NOT NULL,
  `company-name` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

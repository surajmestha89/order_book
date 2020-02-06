-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2020 at 01:20 PM
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boardk`
--

INSERT INTO `boardk` (`id`, `name`, `place`, `mob`, `bname`, `model`, `weight`, `odate`, `ddate`, `amount`, `advance`) VALUES
(1, 'sooraj', 'tadri', '123456789', 'welcome', 'sada', 60, '2020-02-01', '2020-02-14', 100000, 1000),
(2, 'varad', 'tadri', '123456789', 'tyu', 'sada', 67, '2020-02-03', '2020-02-04', 876656, 67998),
(3, 'babi', 'gokarna', '8884008119', 'shree durga prasanna', 'sada', 55, '2020-02-06', '2020-02-29', 15000, 5000),
(4, 'babi', 'gokarna', '8884008119', 'shree durga prasanna', 'sada', 55, '2020-02-06', '2020-02-29', 15000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

DROP TABLE IF EXISTS `boards`;
CREATE TABLE IF NOT EXISTS `boards` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `place` varchar(20) NOT NULL,
  `mob` int(10) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `model` varchar(15) NOT NULL,
  `weight` int(5) NOT NULL,
  `odate` date NOT NULL,
  `ddate` date NOT NULL,
  `amount` int(8) NOT NULL,
  `advance` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


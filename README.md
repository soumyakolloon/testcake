# testcake
cakephp projexct with latest codes

# Sql details are given below

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:80
-- Generation Time: Apr 07, 2015 at 03:07 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycake`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(20, 'soumya', '2bb01b345f36b4a1490d3b7cb5576a478014e1d3', NULL),
(21, 'soumya', '2bb01b345f36b4a1490d3b7cb5576a478014e1d3', 'soumya.k@bridge-indi'),
(22, 'soumyarewre', '2f3091c9128e76a679bba6074b5163d7bb1da667', 'sds@dd.vv'),
(23, 'soumya', '2bb01b345f36b4a1490d3b7cb5576a478014e1d3', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

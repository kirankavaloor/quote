-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2020 at 05:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `quoteid` int(255) NOT NULL AUTO_INCREMENT,
  `customer` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `date` date NOT NULL,
  `street1` text NOT NULL,
  `street2` text NOT NULL,
  `city` text NOT NULL,
  `postalcode` int(6) NOT NULL,
  `mobile` int(10) NOT NULL,
  `grandtotal` int(255) NOT NULL,
  PRIMARY KEY (`quoteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`quoteid`, `customer`, `company`, `mail`, `date`, `street1`, `street2`, `city`, `postalcode`, `mobile`, `grandtotal`) VALUES
(1, 'kiran', 'sp', 'kaval', '0000-00-00', 'fff', 'fff', 'bang', 560036, 2147483647, 1000);

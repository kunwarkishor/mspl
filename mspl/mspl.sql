-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2015 at 02:10 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mspl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Created` date NOT NULL,
  `Lastlogin` datetime NOT NULL,
  `Logout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `uname`, `password`, `emailid`, `image`, `Created`, `Lastlogin`, `Logout`) VALUES
(1, 'admin', 'kun_war', '123', 'admin@gmail.com', 'Kunwar.jpg', '2015-07-01', '2015-08-21 07:39:25', '2015-08-21 07:39:19'),
(2, 'kunwar', 'kunwar', '123456', 'kunwarkishor@gmail.com', '7.png', '2015-07-01', '2015-07-15 10:46:11', '2015-07-14 05:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `contactuss`
--

CREATE TABLE IF NOT EXISTS `contactuss` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `massage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactuss`
--


-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `Uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aboutus` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `firstname`, `lastname`, `Uname`, `pass`, `EmailId`, `contactno`, `address`, `aboutus`, `image`, `created`, `modified`) VALUES
(1, 'Kunwar', 'Kishor', 'kun_war', 'kunwar@123', 'kunwar@gmail.com', '9717736752', 'New Ashok nagar, New Delhi', 'My life motto is ''Do my best, so that I can''t blame myself for anything.', '7.png', '2015-07-07', '2015-07-07'),
(2, 'kuwnar', 'kishor', 'kun_war', '123', 'kunwarkishor@gmail.com', '9717736752', 'hy', 'hello', '5.png', '2015-07-09', '2015-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimgs`
--

CREATE TABLE IF NOT EXISTS `sliderimgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(200) NOT NULL,
  `addon` date NOT NULL,
  `addby` int(11) NOT NULL,
  `modify` date NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sliderimgs`
--

INSERT INTO `sliderimgs` (`id`, `pic`, `addon`, `addby`, `modify`, `modifiedby`, `status`) VALUES
(1, '1.jpg', '2015-07-01', 1, '2015-07-01', 1, 1),
(2, '2.jpg', '2015-07-01', 1, '2015-07-01', 1, 1),
(3, '3.jpg', '2015-07-01', 2, '2015-07-01', 2, 0),
(4, '4.jpg', '2015-07-01', 2, '2015-07-01', 1, 1),
(5, '5.jpg', '2015-07-01', 1, '2015-07-07', 2, 0);

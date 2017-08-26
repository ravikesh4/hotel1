-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2017 at 02:16 ???????
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `dob`, `mobile`, `address`) VALUES
(1, 'ravikesh', 'ravikesh', 'admin', '1996-11-22', '2147483647', 'Bangalore\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'Ravikesh yadav', 'ravikeshyadav4@gmail.com', '2147483647', 'hi hello how are you.'),
(2, 'Sachin', 'sachin@gmail.com', '2147483647', 'erhjfer'),
(3, 'vivek', 'vivek@gmail.com', '43567890', 'rcdtfvghbjnk'),
(4, 'vivek', 'vivek@gmail.com', '123456', 'dbiufqeruhjvbewrgvtrbwrt'),
(5, 'Ravikesh yadav', 'ravikeshyadav4@gmail.com', '07411966489', 'fjkgrgrtgtr h trht yhj tyj ty jryu ju ynftietrbrgt nty\r\njnyu\r\nmyu\r\nkm\r\nyum\r\ntym\r\nyu\r\nmyu\r\nmyu\r\n,m\r\nyum\r\nryu,\r\ntyu\r\nm,yu\r\n,y\r\num\r\nru,r\r\nmryu\r\nk,\r\nyu');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `amount` int(4) NOT NULL,
  `card` varchar(20) NOT NULL,
  `date1` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `name`, `phone`, `address`, `checkin`, `checkout`, `amount`, `card`, `date1`) VALUES
(1, 'ravikeshyadav4@gmail.com', 'Ravikesh yadav', '74119666489', 'FTR HQ BSF campus, yelahanka, Bangalore', '0000-00-00', '0000-00-00', 3000, '2147483647', '2038-07'),
(2, 'sachin@gmail.com', 'Sachin', '7411966489', 'FTR HQ BSF campus, yelahanka, Bangalore', '0000-00-00', '0000-00-00', 3000, '666666666', '2038-11'),
(3, 'sachin@gmail.com', 'Sachin', '2147483647', 'FTR HQ BSF campus, yelahanka, Bangalore', '0000-00-00', '0000-00-00', 3000, '2147483647', '2045-05'),
(6, 'ravikeshyadav4@gmail.com', 'Ravikesh yadav', '07411966489', 'FTR HQ BSF campus, yelahanka, Bangalore', '0000-00-00', '0000-00-00', 7000, '2147483647', '2034-12'),
(7, 'sachin@gmail.com', 'Sachin', '78996541235', 'bangalore', '0000-00-00', '0000-00-00', 5000, '2222222', '2034-06'),
(8, 'vivek@gmail.com', 'vivek', '098765321', 'sdfghnj', '1111-11-11', '2200-11-22', 7000, '123456788765432', '2043-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `dob`, `mobile`, `address`) VALUES
(1, 'vivek', 'vivek@gmail.com', 'vivek', '1994-01-01', '9412520972', 'Bangalore'),
(10, 'nanda Kumar Singh', 'nanda@gmail.com', 'nanda', '1994-11-11', '1234567898', 'stc bsf campus,po:-near AFS yelhankha,Bangalore');

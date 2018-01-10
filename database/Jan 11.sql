-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 04:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhotel`
--
CREATE DATABASE IF NOT EXISTS `dbhotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbhotel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) DEFAULT NULL,
  `middleName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `contactNumber` varchar(15) DEFAULT NULL,
  `emailAddress` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `firstName`, `middleName`, `lastName`, `contactNumber`, `emailAddress`, `username`, `password`) VALUES
(3, NULL, NULL, NULL, NULL, 'jreid@yahoo.com', 'demo', 'demo'),
(4, NULL, NULL, NULL, NULL, 'haroldbaniqued@yahoo.com', 'haroldbaniqued', '123!@#qweQWE');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(200) NOT NULL AUTO_INCREMENT,
  `total_adult` int(50) NOT NULL,
  `total_children` int(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `special_requirement` text NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `total_amount` double DEFAULT NULL,
  `deposit` double NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `add_line1` varchar(100) NOT NULL,
  `add_line2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `total_adult`, `total_children`, `checkin_date`, `checkout_date`, `special_requirement`, `payment_status`, `total_amount`, `deposit`, `booking_date`, `first_name`, `last_name`, `email`, `telephone_no`, `add_line1`, `add_line2`, `city`, `state`, `postcode`, `country`) VALUES
(127, 2, 0, '2018-01-05', '2018-01-07', '', 'pending', 440, 66, '2018-01-04 20:52:53', 'Khen', 'Daniel', 'kd@bai.com', '9065261234', 'Testing Street', 'None', 'Marikina', 'Metro Manila', '1800', 'Philippines'),
(128, 1, 0, '2018-01-05', '2018-01-06', '', 'pending', 360, 54, '2018-01-06 03:49:58', 'Khen', 'Daniel', 'kd@bai.com', '9065261234', 'Central City', 'None', 'Marikina', 'Metro Manila', '1800', 'Philippines'),
(129, 1, 0, '2014-12-05', '2014-12-07', '', 'Confirmed', 240, 36, '2014-12-05 04:53:27', 'Khen', 'Daniel', 'kd@bai.com', '9065261234', 'Central City', 'None', 'Pasig', 'Metro Manila', '1800', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` int(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) DEFAULT NULL,
  `middleName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `contactNumber` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `emailAddress` varchar(50) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(255) NOT NULL AUTO_INCREMENT,
  `total_room` int(255) NOT NULL,
  `occupancy` int(255) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `view` varchar(30) DEFAULT NULL,
  `room_name` varchar(50) NOT NULL,
  `descriptions` text,
  `rate` double NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `total_room`, `occupancy`, `size`, `view`, `room_name`, `descriptions`, `rate`, `imgpath`) VALUES
(1, 5, 2, '10 sqft', 'city', 'Deluxe Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 120, 'img/room2.png'),
(2, 5, 2, '10 sqft', 'city', 'Single Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 100, 'img/room3.png'),
(3, 10, 10, '20 sqft', 'Cityy', 'King Suite Room', 'Suitable for honeymoon', 120, 'img/room3.jpg'),
(4, 3, 3, '12', 'city', 'Test', 'Try', 120, 'img/Standard Room.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `totalroombook` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`booking_id`, `room_id`, `totalroombook`, `id`) VALUES
(127, 1, 1, 67),
(127, 2, 1, 68),
(128, 3, 3, 69),
(129, 1, 1, 70),
(130, 1, 1, 71),
(131, 1, 1, 72),
(132, 1, 2, 73),
(132, 2, 1, 74);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'demo', 'demo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

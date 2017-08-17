-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 02:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_nic` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_nic` (`customer_nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE IF NOT EXISTS `customer_table` (
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `nic` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(20) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `name`, `nic`, `Email`, `gender`, `Address`, `City`, `PhoneNo`) VALUES
(1, 'dd', '935681421V', 'sachini.thaksala@gmail.com', 'femal', '"Awanthi",Kohuliyadda,Hakmana.', 'Ampara', 1111111),
(3, 'Kamal', '943551005v', 'kamal.ac', 'male', '65,colombo', 'Colombo', 113333344),
(34, 'ffff', '935331005v', 'dd.sc', 'femal', 'ffff', 'Ampara', 66666),
(45, 'ffff', '64356789', 'dddd', 'femal', 'fffff', 'Ampara', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `food_table`
--

CREATE TABLE IF NOT EXISTS `food_table` (
  `category` text NOT NULL,
  `name` text NOT NULL,
  `food_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_table`
--

INSERT INTO `food_table` (`category`, `name`, `food_id`, `price`) VALUES
('wwwwe', 'tre', 4, 456),
('111', '111', 111, 111),
('ssss', 'fff', 666, 244);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_nic` int(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_capacity` varchar(20) NOT NULL,
  `adults` int(11) NOT NULL,
  `kids` int(11) NOT NULL,
  `meal_type` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `customer_id` (`customer_nic`),
  KEY `customer_id_2` (`customer_nic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `customer_nic`, `check_in`, `check_out`, `room_type`, `room_capacity`, `adults`, `kids`, `meal_type`) VALUES
(100, 1, '2017-08-02', '2017-08-11', 'Sea view', 'double', 3, 3, 'dinein'),
(101, 1, '2017-08-02', '2017-08-11', 'Sea view', 'double', 3, 3, 'dinein'),
(102, 1, '2017-08-02', '2017-08-11', 'Sea view', 'double', 3, 3, 'dinein'),
(103, 1, '2017-08-10', '2017-08-10', 'Sea view', 'double', 3, 3, 'dinein'),
(104, 1, '2017-08-03', '2017-08-10', 'Sea view', 'general', 1, 2, 'other'),
(105, 1, '2017-08-01', '2017-08-01', 'Sea view', 'single', 10, 10, 'dinein'),
(106, 1, '2017-08-01', '2017-08-03', 'Sea view', 'single', 1, 1, 'roomservice');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `RoomNo` int(5) NOT NULL,
  `RoomType` varchar(15) NOT NULL,
  `RoomCapacity` varchar(15) NOT NULL,
  `days` int(5) NOT NULL,
  `AC` varchar(10) NOT NULL,
  PRIMARY KEY (`RoomNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomNo`, `RoomType`, `RoomCapacity`, `days`, `AC`) VALUES
(1, 'sea view', 'Single', 1, 'AC'),
(65, 'garden view', 'Double', 30, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `user_type`) VALUES
('sachini', '123', 'adm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

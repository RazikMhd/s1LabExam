-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2021 at 06:57 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `rooms_ac` int(10) NOT NULL,
  `rooms_nonac` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `contact`, `hotel`, `arrival`, `rooms_ac`, `rooms_nonac`) VALUES
(1, 'Jason', '9899372321', 'Shangri La', '2021-07-10', 1, 0),
(2, 'Gill', '8388231231', 'Shangri La', '2021-07-10', 2, 0),
(3, 'Gemini', '7802122112', 'Taj', '2020-06-18', 2, 2),
(4, 'Shaad', '9473243232', 'Taj', '2021-05-29', 1, 0),
(5, 'Kylian', '92882112312', 'Taj', '2021-06-29', 1, 1),
(6, 'Hitomi', '98256021', 'Galaxy', '2021-05-05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(500) NOT NULL,
  `ac` int(11) NOT NULL,
  `nonac` int(11) NOT NULL,
  `ac_nos` int(11) NOT NULL,
  `nonac_nos` int(11) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `location`, `ac`, `nonac`, `ac_nos`, `nonac_nos`) VALUES
(1, 'Shangri La', 'Kochi', 7000, 4000, 5, 10),
(2, 'Taj', 'Kochi', 4000, 2000, 3, 3),
(3, 'Galaxy', 'Mumbai', 10000, 5000, 10, 7),
(4, 'Leela', 'Trivandrum', 12000, 8000, 9, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

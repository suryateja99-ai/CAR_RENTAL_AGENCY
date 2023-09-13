-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2023 at 02:20 PM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sde`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `null` int NOT NULL AUTO_INCREMENT,
  `model` text NOT NULL,
  `number` text NOT NULL,
  `seating_capacity` text NOT NULL,
  `rent_per_day` text NOT NULL,
  `name` text NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  PRIMARY KEY (`null`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`null`, `model`, `number`, `seating_capacity`, `rent_per_day`, `name`, `start_date`, `end_date`) VALUES
(2, 'ZA23Hy5', '897123', '8', '2500', 'suryateja', '2023-09-14', '2023-09-17'),
(4, 'NA4KKb8', '64294', '6', '2000', 'suryateja', '2023-09-16', '2023-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `NULL` int NOT NULL AUTO_INCREMENT,
  `model` text NOT NULL,
  `number` text NOT NULL,
  `seating_capacity` text NOT NULL,
  `rent_per_day` text NOT NULL,
  `car_id` text NOT NULL,
  PRIMARY KEY (`NULL`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`NULL`, `model`, `number`, `seating_capacity`, `rent_per_day`, `car_id`) VALUES
(1, 'Toyota Camry', 'ABC 123', '6', '1500', '1'),
(2, 'Honda Civic', 'XYZ 456', '8', '2500', '2'),
(3, 'BMW X5', 'GHI 101', '6', '2000', '3');

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

DROP TABLE IF EXISTS `registration_details`;
CREATE TABLE IF NOT EXISTS `registration_details` (
  `NULL` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `user_type` text NOT NULL,
  PRIMARY KEY (`NULL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`NULL`, `name`, `email`, `password`, `phone`, `address`, `user_type`) VALUES
(1, 'suryateja', 'chennurisuryateja@gmail.com', '123456', '8367253902', 'girimajipet,warangal,telangana, 506002', 'customer'),
(2, 'sreeja', 'sreeja@gmail.com', '1234', '784964585', 'warangal, India', 'agency');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

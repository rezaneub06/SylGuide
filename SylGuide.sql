-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 03:30 PM
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
-- Database: `sylventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabin_reservation`
--

CREATE TABLE `cabin_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `bookingDate` date NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabin_reservation`
--

INSERT INTO `cabin_reservation` (`id`, `name`, `email`, `phone`, `hospital`, `bookingDate`, `message`) VALUES
(1, 'Akram', 'akfahim1995@gmail.com', '+880173153356', 'Popular Medical Centre', '2020-01-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_reservation`
--

CREATE TABLE `car_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `carType` varchar(255) NOT NULL,
  `pickup` int(5) NOT NULL DEFAULT 1,
  `pickupDate` date NOT NULL,
  `dropoff` int(5) NOT NULL DEFAULT 1,
  `dropoffDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_reservation`
--

INSERT INTO `car_reservation` (`id`, `name`, `email`, `phone`, `carType`, `pickup`, `pickupDate`, `dropoff`, `dropoffDate`) VALUES
(1, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Toyota Noah', 0, '2020-01-23', 0, '2020-01-30'),
(2, 'Akramul Islam', 'akram.fahim31@gmail.com', '01731533561', 'Toyota Noah', 2, '2020-01-30', 3, '2020-01-24'),
(3, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Toyota Noah', 0, '2020-01-17', 0, '2020-01-18'),
(4, 'Tania', 'tania@gmail.com', '+8801731533', 'Probox Car', 1, '2020-01-25', 1, '2020-01-29'),
(5, 'Amina', 'amina@yahoo.com', '01677404338', 'Allion Sedan', 1, '2020-01-22', 1, '2020-01-25'),
(6, 'Islam', 'islam@yahoo.com', '01731533561', 'Allion Sedan', 1, '2020-01-24', 1, '2020-01-28'),
(7, 'Akram', 'akram@gmail.com', '01731533561', 'Allion Sedan', 1, '2020-01-24', 1, '2020-01-25'),
(8, 'Ruposhi', 'ruposhi@gmail.com', '12345678925', 'AC Car', 3, '2020-01-31', 4, '2020-02-26'),
(9, 'Akramul Islam', 'akram.fahim31@gmail.com', '01731533561', 'AC Car', 3, '2020-01-21', 4, '2020-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'akram', 'akram@gmail.com', '01731533561', 'I need help for my next Sylhet trip'),
(2, 'Tania', 'tania@gmail.com', '123456', 'If I want to give you the whole trip supervision would you accept?'),
(3, 'Amina', 'amina@gmail.com', '017533561', 'ajfhugwbniugbfiuesargaegawrgzg'),
(4, 'Ali', 'Ali@gmail.com', '+8850123456', 'qrhyeweauzeu'),
(5, 'Tanu Chy', 'tanu@gmail.com', '01731533561', 'Which Place should we visit first'),
(6, 'Tania Begum', 'tania.begum@gmail.com', '01731533561', 'Ami Tumake Valobashi');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reservation`
--

CREATE TABLE `doctor_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `bookingDate` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_reservation`
--

INSERT INTO `doctor_reservation` (`id`, `name`, `email`, `phone`, `doctor`, `bookingDate`, `message`) VALUES
(3, 'Akram', 'akram@gmail.com', '07134566581', 'DR. MD. SHAFIULLAH', '1/28/2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_reservation`
--

CREATE TABLE `food_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `restaurant` varchar(255) NOT NULL,
  `person` int(5) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_reservation`
--

INSERT INTO `food_reservation` (`id`, `name`, `email`, `phone`, `restaurant`, `person`, `bookingDate`, `bookingTime`, `message`) VALUES
(1, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Palki Restaurant', 4, '2020-01-28', '8PM', ''),
(2, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Panshi Restaurant', 2, '2020-01-26', '2PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reservation`
--

CREATE TABLE `hotel_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `rooms` int(5) NOT NULL,
  `adults` int(5) NOT NULL,
  `children` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_reservation`
--

INSERT INTO `hotel_reservation` (`id`, `name`, `email`, `phone`, `hotel`, `roomType`, `datein`, `dateout`, `rooms`, `adults`, `children`) VALUES
(1, 'Akramul Islam', 'akram.fahim31@gmail.com', '01731533561', 'Hotel Supreme', 'King Suit', '2020-01-24', '2020-01-26', 2, 3, 0),
(2, 'Tania', 'tania@gmail.com', '+8801731533', 'Hotel Supreme', 'Deluxe Double/Triple Room', '2020-01-20', '2020-01-25', 1, 2, 0),
(3, 'John', 'john@gmail.com', '+8801731533', 'Hotel Nirvana Inn', 'Deluxe Double/Triple Room', '2020-01-24', '2020-01-30', 1, 1, 0),
(4, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Hotel Supreme', 'Deluxe Family Room', '2020-01-17', '2020-01-24', 2, 4, 3),
(5, 'Tarana', 'tarana@yahoo.com', '07134566581', 'Hotel Supreme', 'Deluxe Family Room', '2020-01-24', '2020-01-25', 3, 4, 3),
(7, 'Marzina', 'mar@g.com', '54835977854', 'Hotel Supreme', 'Triple Room', '2020-01-23', '2020-01-24', 3, 4, 2),
(8, 'Ruposhi Konna', 'ruposhi@gmail.com', '01753684987', 'Hotel Noorjahan Grand', 'Budget Single Room', '2020-01-23', '2020-01-25', 3, 4, 2),
(9, 'Akramul Islam Fahim', 'akram.fahim2017@gmail.com', '01731533561', 'Hotel Supreme', 'Superior Double Room', '2020-01-24', '2020-01-29', 2, 4, 3),
(10, 'Akramul Islam', 'akram.fahim31@gmail.com', '01731533561', 'Hotel Name is Not Valid', 'Room Type is not Specified', '2020-01-31', '2020-02-12', 3, 3, 2),
(11, 'Tania Islam ', 'tania.islam@gmail.com', '+8801234569', 'Hotel Name is Not Valid', 'Room Type is not Specified', '2020-01-23', '2020-01-30', 2, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabin_reservation`
--
ALTER TABLE `cabin_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_reservation`
--
ALTER TABLE `car_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_reservation`
--
ALTER TABLE `doctor_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_reservation`
--
ALTER TABLE `food_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabin_reservation`
--
ALTER TABLE `cabin_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_reservation`
--
ALTER TABLE `car_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor_reservation`
--
ALTER TABLE `doctor_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_reservation`
--
ALTER TABLE `food_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

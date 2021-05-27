-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 09:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `username`, `password`) VALUES
(1, 'admin212', 'admin212');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_details`
--

CREATE TABLE `bloodbank_details` (
  `id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `district` varchar(25) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `bloodgroup` enum('A+','B+','AB+','O+','A-','B-','AB-','O-') NOT NULL,
  `keyword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_details`
--

INSERT INTO `bloodbank_details` (`id`, `name`, `username`, `password`, `phone_number`, `district`, `gender`, `bloodgroup`, `keyword`) VALUES
(1, 'kamesh', 'kamesh212', 'kamesh212', 9897865643, 'madurai', 'male', 'AB+', 'msd'),
(2, 'ganapathy', 'gana123', 'gana123', 8987675690, 'trichy', 'male', 'B+', 'ganapathyda'),
(3, 'vengadesh', 'venky123', 'venky123', 9898989898, 'coimbatore', 'male', 'A+', 'venky'),
(4, 'akash', 'akash123', 'akash123', 7898678756, 'dindukal', 'male', 'AB+', 'akashakash'),
(5, 'bagadeesh', 'bagi123', 'bagi212', 8767876787, 'salem', 'male', 'A-', 'bagibagi'),
(6, 'arjun', 'asak', 'arjunasak', 9887766547, 'thiruppur', 'male', 'A-', 'asak'),
(7, 'siva', 'siva123', 'siva123', 9887766554, 'dharmapuri', 'male', 'AB-', 'siva'),
(8, 'radhakrish', 'rk123', 'rk212', 7898678756, 'ooty', 'male', 'O-', 'rk'),
(9, 'arun', 'arun123', 'arun123', 7876565456, 'madurai', 'male', 'A-', 'arun'),
(10, 'mani', 'mani123', 'mani123', 8776655443, 'kanchipuram', 'male', 'B-', 'mani'),
(11, 'kamesh', 'k123', 'k123', 8987676567, 'chennai', 'male', 'B+', 'kamesh'),
(12, 'arun', 'arun123', 'arun123', 7876565456, 'kodaikanal', 'male', 'A-', 'arun'),
(14, 'user1', 'user1', 'user123', 7876767565, 'chennai', 'female', 'A-', 'user'),
(15, 'new user', 'new user1', '12345', 9089767564, 'trichy', 'female', 'AB+', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `camp_details`
--

CREATE TABLE `camp_details` (
  `district` varchar(25) NOT NULL,
  `timing` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp_details`
--

INSERT INTO `camp_details` (`district`, `timing`, `date`, `location`) VALUES
('madurai', '10 AM - 2 PM', '2021-05-15', 'keela vaasal,madurai'),
('chennai', '12 PM - 4 PM', '2021-05-16', 'adayar,chennai'),
('trichy', '10 AM - 4 PM', '2021-05-25', 'south area,trichy'),
('coimbatore', '9 AM - 3 PM', '2021-06-25', 'north area,coimbatore'),
('chennai', '10 AM - 12 PM', '2021-05-25', 'chennai'),
('madurai', '10 AM - 2 PM', '2021-12-15', 'south,madurai'),
('chennai', '1 PM - 5 PM', '2022-01-08', 'north,chennai');

-- --------------------------------------------------------

--
-- Table structure for table `camp_donors`
--

CREATE TABLE `camp_donors` (
  `id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `district` varchar(25) NOT NULL,
  `gender` enum('male','female','transgender') NOT NULL,
  `bloodgroup` enum('A+','B+','AB+','O+','A-','B-','AB-','O-') NOT NULL,
  `date` date NOT NULL,
  `camp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp_donors`
--

INSERT INTO `camp_donors` (`id`, `name`, `phone_number`, `location`, `district`, `gender`, `bloodgroup`, `date`, `camp`) VALUES
(1, 'kamesh', 9878767656, 'avaniyapuram,madurai', 'madurai', 'male', 'AB+', '2021-05-23', 'madurai'),
(2, 'ganapathy', 9887766554, 'madurai south', 'madurai', 'male', 'A-', '2021-05-23', 'madurai'),
(3, 'vengadesh', 6756456756, 'east madurai', 'madurai', 'male', 'AB-', '2021-05-23', 'madurai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbank_details`
--
ALTER TABLE `bloodbank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp_donors`
--
ALTER TABLE `camp_donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbank_details`
--
ALTER TABLE `bloodbank_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `camp_donors`
--
ALTER TABLE `camp_donors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

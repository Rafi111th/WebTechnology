-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khaboi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(30) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `email`, `username`, `date`, `password`) VALUES
(62, 'Anamul Rafi', 'admin5@khaboi.com', 'anamul_rafi', '2021-12-12 15:39:01', 'YWRtaW41'),
(63, 'Anamul Rafi', 'admin1@khaboi.com', 'anamul_rafi', '2021-12-12 15:42:39', 'YWRtaW4x'),
(64, 'rifat', 'admin2@khaboi.com', 'rifat', '2021-12-12 15:43:19', 'YWRtaW4y');

-- --------------------------------------------------------

--
-- Table structure for table `area_manager`
--

CREATE TABLE `area_manager` (
  `manager_id` int(30) UNSIGNED NOT NULL,
  `manager_username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_manager`
--

INSERT INTO `area_manager` (`manager_id`, `manager_username`, `first_name`, `last_name`, `phone`, `email`, `password`, `address`, `image`) VALUES
(3, 'rohan11', 'raf', 'lfja', 1967866786, 'rohan@gmail.com', '$2y$12$pOctIwSHSXQXR05yqD2U2uDUYnWJb9YV5fjMqEYwXWiEbhc3RmzOq', '87j,qiuy', 'Rafi'),
(4, 'rohan11', 'raf', 'lfja', 1967866786, 'rohan@gmail.com', '$2y$12$n.0Z8r1wntGf7zuE9rMIielaZxj10Di44fXIMOVxo2ttcWCI3ZdWe', '87j,qiuy', 'Rafi'),
(5, 'rifat2nd', 'rifat', 'rahman', 1677777777, 'rifat2nd@gmail.com', '$2y$12$pARBDj0dc4N50YAKUI6TpeM09eckCuO5ADGqKeZ6CE2Pogueu.VXC', '116, html', 'Rafi'),
(6, 'rifat2nd', 'rifat', 'rahman', 1677777777, 'rifat2nd@gmail.com', '$2y$12$LaJJXHFUo1s3VmxHw4ONR.bpihnompkLj0hWtcBre6ESlh1e.kfle', '116, html', 'Rafi'),
(7, 'rafi11th', 'Anamul', 'Rafi', 1978888890, 'anamulhoquerafi118399@gmail.com', '$2y$12$DMBr8v5QPsWhsb73H9G72OhzEWjmXglTjIYaUEV7EIENWXinjHS5a', '116, Nabinagar Hospital Para, Nabinagar, Brahmanbaria', 'Rafi');

-- --------------------------------------------------------

--
-- Table structure for table `cart_list`
--

CREATE TABLE `cart_list` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_list`
--

INSERT INTO `cart_list` (`ID`, `Name`, `Price`) VALUES
(33, 'Subs Hook ', 600);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`Name`, `Email`, `User_Name`, `Password`, `Dob`, `Gender`) VALUES
('Tonney Test', 'tonney@gmail.com', 'tonney123', 'tonney123', '1998-12-15', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `Name`, `Price`) VALUES
(1, 'Subs Hook & Ladder Sandwich', 600),
(2, 'Pepperoni Pizza', 1200),
(3, 'Cheeseburger', 250),
(4, 'Chicken Honey Butter Biscuits', 55);

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL,
  `Balance` int(20) NOT NULL,
  `Picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`Name`, `Email`, `User_Name`, `Password`, `Dob`, `Gender`, `Balance`, `Picture`) VALUES
('Nibedita Tonney ', 'tonney@gmail.com', 'tonney1234', 'tonney1234', '1998-12-13', 'female', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL,
  `Balance` int(20) NOT NULL,
  `Picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Name`, `Email`, `User_Name`, `Password`, `Dob`, `Gender`, `Balance`, `Picture`) VALUES
('Sara Sara', 'sara@gmail.com', 'Saratest', 'Saratest', '1995-01-16', 'female', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area_manager`
--
ALTER TABLE `area_manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `User_Name` (`User_Name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `User_Name` (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `area_manager`
--
ALTER TABLE `area_manager`
  MODIFY `manager_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2024 at 10:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `dated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `user_name`, `user_email`, `user_pass`, `dated`) VALUES
(1, 'Hassaan', 'hassaan6', 'chassaanzahid6@gmail.com', '$2y$10$GWB0EFhKcObAMqNtOsvxgu3bfL.ZwAKnEXvM/aSUtFTNVnTkhCqhO', '2024-09-18 21:19:45.759745');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `dated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone_no`, `email`, `message`, `dated`) VALUES
(2, 'Saad Zahid', '03067017725', 'saadzahid260@gmail.com', 'hello', '2024-09-05 14:34:07.832414'),
(3, 'Saad Zahid', '03067017725', 'saadzahid260@gmail.com', 'hello', '2024-09-05 14:35:48.112872');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(255) NOT NULL,
  `cName` varchar(255) DEFAULT NULL,
  `cPhone` varchar(255) DEFAULT NULL,
  `cEmail` varchar(255) DEFAULT NULL,
  `guests` int(255) DEFAULT NULL,
  `reserveDate` date DEFAULT NULL,
  `reserveTime` varchar(255) DEFAULT NULL,
  `cmessage` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `dated` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `cName`, `cPhone`, `cEmail`, `guests`, `reserveDate`, `reserveTime`, `cmessage`, `status`, `dated`) VALUES
(1, 'Saad Zahid', '03067017725', 'saadzahid260@gmail.com', 7, '0000-00-00', '10:00 PM - 03:00 AM', 'ytft', '', '2024-09-05 13:38:02.335181'),
(2, 'Saad Zahid', '306701772', 'saadzahid260@gmail.com', 4, '0000-00-00', '05:00 PM - 10:00 PM', 'bhb', '', '2024-09-05 13:40:44.443759'),
(3, 'Saad Zahid', '306701772', 'saadzahid260@gmail.com', 7, '0000-00-00', '05:00 PM - 10:00 PM', 'htyy', '', '2024-09-05 13:42:31.017860'),
(4, 'tariq', '75746', 'chassaan12@gmail.com', 8, '0000-00-00', '05:00 PM - 10:00 PM', 'hi', '', '2024-09-05 15:17:31.126841'),
(5, 'bilal tariq', '000000000', 'tariqkoti@gmail.com', 6, '0000-00-00', '10:00 PM - 03:00 AM', 'black coffee ,etc', '', '2024-09-11 07:01:33.870643'),
(12, 'Ammar', '03067119099', 'ammarsohail344@gmail.com', 11, '2024-09-25', '10:00 PM - 03:00 AM', 'gfdshfg', 'Completed', '2024-09-17 07:09:00.200926'),
(15, 'Ammar', '03067119099', 'ammarsohail344@gmail.com', 8, '2024-09-17', '10:00 PM - 03:00 AM', '', 'Pending', '2024-09-17 10:30:22.049721'),
(16, 'Ammar', '03067119099', 'ammarsohail344@gmail.com', 5, '2024-09-18', '05:00 PM - 10:00 PM', 'fdsdfg', 'Pending', '2024-09-18 07:27:29.813922'),
(17, 'Ammar', '03067119099', 'ammarsohail344@gmail.com', 11, '2024-09-19', '05:00 PM - 10:00 PM', '', 'Completed', '2024-09-18 07:28:30.837667');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(255) NOT NULL,
  `subEmail` varchar(255) DEFAULT NULL,
  `dated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `subEmail`, `dated`) VALUES
(1, 'ammarsohail344@gmail.com', '2024-09-05 13:27:07.490721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

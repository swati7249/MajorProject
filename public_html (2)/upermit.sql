-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upermit`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `Id` int(50) NOT NULL,
  `Name` text NOT NULL,
  `Roll_Number` text NOT NULL,
  `Branch` text NOT NULL,
  `Parent_Email` text NOT NULL,
  `Parent_Contact` text NOT NULL,
  `Student_Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(50) NOT NULL,
  `Name` text NOT NULL,
  `Roll_Number` text NOT NULL,
  `Branch` text NOT NULL,
  `Parent_Email` text NOT NULL,
  `Parent_Contact` text NOT NULL,
  `Student_Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Roll_Number`, `Branch`, `Parent_Email`, `Parent_Contact`, `Student_Email`, `Password`) VALUES
(1, 'swati thakur ', '123', 'bca', 'sfftf@gmail.com', '2345667854', 'swatithakyr@gmail.com', '124'),
(2, 'swati thakur', '2210997249', 'BCA', 'Bhushansingh8699@gmail.com', '7837700902', 'swatithakur3310@gmail.com', '12345'),
(3, 'mehardeep', '2210997287', 'BCA', 'Bhushansingh8699@gmail.com', '2345667854', 'swatithakur3310@gmail.com', '345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

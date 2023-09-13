-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 07:13 AM
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
-- Database: `sjiit_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `emp_rowId` int(10) NOT NULL,
  `empId` varchar(25) NOT NULL,
  `emp_Salutation` varchar(3) NOT NULL,
  `emp_FirstName` varchar(25) NOT NULL,
  `emp_LastName` varchar(25) NOT NULL,
  `emp_DOB` date NOT NULL,
  `emp_Gender` varchar(8) NOT NULL,
  `emp_MaritalStatus` varchar(10) NOT NULL,
  `emp_BloodGroup` varchar(6) NOT NULL,
  `emp_Religion` varchar(10) NOT NULL,
  `emp_Nationality` varchar(25) NOT NULL,
  `emp_Hobbies` varchar(25) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`emp_rowId`, `empId`, `emp_Salutation`, `emp_FirstName`, `emp_LastName`, `emp_DOB`, `emp_Gender`, `emp_MaritalStatus`, `emp_BloodGroup`, `emp_Religion`, `emp_Nationality`, `emp_Hobbies`, `create_date`) VALUES
(1, '20004010123', 'Mr', 'John', 'Doe', '2004-10-21', 'Male', 'Unmarried', 'A+', 'Buddhism', 'Sinhala', 'Playing Cricket', '2023-06-21 12:00:36'),
(2, '2003049583', 'Mrs', 'Anne', 'Perera', '2003-06-14', 'Male', 'Married', 'B-', 'Catholic', 'Sinhala', 'Drawing', '2023-06-21 12:02:49'),
(6, '2002078656', 'Mrs', 'Amal', 'Silva', '2002-06-08', 'Male', 'Married', 'A-', 'Buddhism', 'Sinhala', 'Playing football', '2023-06-21 12:05:34'),
(7, '2001034934', 'Ms', 'Jane', 'Peris', '2001-06-06', 'Female', 'Married', 'B+', 'Buddhism', 'Sinhala', 'Dancing', '2023-06-21 12:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`emp_rowId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
  MODIFY `emp_rowId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

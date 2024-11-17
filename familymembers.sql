-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solo_parent`
--

-- --------------------------------------------------------

--
-- Table structure for table `familymembers`
--

CREATE TABLE `familymembers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `civil_status` enum('Single','Married','Widowed','Divorced') NOT NULL,
  `educational_attainment` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `monthly_income` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `familymembers`
--

INSERT INTO `familymembers` (`id`, `name`, `sex`, `relationship`, `age`, `birthdate`, `civil_status`, `educational_attainment`, `occupation`, `monthly_income`) VALUES
(17, 'guzman', 'Male', 'brother', 15, '2024-11-01', 'Married', 'College Grad', 'iT Dev', 3434.00),
(18, 'mnjbh', 'Female', 'fsrfsrf', 5, '2024-10-28', 'Married', 'college Level', 'N/A', 43454354.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familymembers`
--
ALTER TABLE `familymembers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familymembers`
--
ALTER TABLE `familymembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

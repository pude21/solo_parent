-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 02:58 PM
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
-- Table structure for table `solo_parent`
--

CREATE TABLE `solo_parent` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `philsys_card_number` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `address` varchar(50) NOT NULL,
  `civil_status` varchar(8) NOT NULL,
  `educational_attainment` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `company_agency` varchar(20) NOT NULL,
  `monthly_income` varchar(10) NOT NULL,
  `employment_status` varchar(10) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `pantawid_beneficiary` varchar(5) NOT NULL,
  `indigenous_person` varchar(5) NOT NULL,
  `are_you_a_migrant_worker` varchar(5) NOT NULL,
  `lgbtq` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solo_parent`
--

INSERT INTO `solo_parent` (`id`, `fullname`, `philsys_card_number`, `date_of_birth`, `age`, `place_of_birth`, `sex`, `address`, `civil_status`, `educational_attainment`, `occupation`, `religion`, `company_agency`, `monthly_income`, `employment_status`, `contact_number`, `email_address`, `pantawid_beneficiary`, `indigenous_person`, `are_you_a_migrant_worker`, `lgbtq`) VALUES
(22, 'JOJO', 123456789, '2024-07-04', 21, 'CCMC', 'male', 'Tres de Abril St. Punta, Princesa', 'Single', 'College Level', 'IT Developers', 'Catholic', 'Crown Regency', '23000', 'employed', 2147483647, 'jojo@gmail.com', 'no', 'no', 'no', 'no'),
(23, 'maton', 2222222, '2024-10-31', 23, 'macao', 'male', 'bohol', 'Single', 'College grad', 'artist', 'Catholic', 'abscbn', '234345', 'employed', 999999999, 'mato@ggmail.com', 'no', 'no', 'no', 'no'),
(24, 'jeprox', 4356574, '2024-11-02', 34, 'jimenez', 'male', 'lobogon', 'Single', 'college grad', 'artist', 'Catholic', 'KONOHA TROOP', '243234', 'employed', 908976, 'uzumaki@gmail.com', 'no', 'no', 'no', 'no'),
(25, 'mharben', 2147483647, '2024-09-12', 26, 'aloran', 'male', 'Cebu, City', 'Single', 'college grad', 'IT Developers', 'Catholic', 'cityhall', '25000', 'employed', 2147483647, 'joshuagimao@gmail.com', 'yes', 'yes', 'yes', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solo_parent`
--
ALTER TABLE `solo_parent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solo_parent`
--
ALTER TABLE `solo_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

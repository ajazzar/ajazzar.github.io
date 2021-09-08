-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2021 at 01:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landscape`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bill_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `customer_l_name` varchar(30) NOT NULL,
  `services` varchar(100) NOT NULL,
  `customer_bill` double(6,2) NOT NULL,
  `bill_date` varchar(10) NOT NULL,
  `amt_paid` double(6,2) NOT NULL,
  `date_paid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bill_id`, `customer_id`, `customer_l_name`, `services`, `customer_bill`, `bill_date`, `amt_paid`, `date_paid`) VALUES
(1, 1, 'Alvarez', 'planted trees and shrubs; mowed the lawn', 100.50, '12/10/2020', 100.50, '01/10/2021'),
(2, 2, 'Quimby', 'fertilized the plants; mowed the lawn', 200.00, '02/01/2021', 0.00, 'N/A'),
(3, 3, 'Thomas', 'mulching service, planting tree', 150.00, '10/20/2020', 150.00, '11/20/2020'),
(4, 4, 'Eisenhower', 'leaf removal and grass planting', 500.00, '03/01/2021', 150.00, '04/01/2021'),
(5, 5, 'Mitchell', 'Pest Control', 100.00, '04/01/2021', 0.00, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(3) NOT NULL,
  `customer_title` varchar(10) NOT NULL,
  `customer_f_name` varchar(30) NOT NULL,
  `customer_l_name` varchar(30) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `City_State_Zip` varchar(50) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_title`, `customer_f_name`, `customer_l_name`, `street_address`, `City_State_Zip`, `customer_phone`, `customer_email`) VALUES
(1, 'Dr.', 'Mario', 'Alvarez', '10310 Montrose Drive', 'Charlotte, NC 28223', '(704) 687-5657', 'malvarez@verizon.net'),
(2, 'Mrs.', 'Denise', 'Quimby', '17107 Tomahawk Trail', 'Concord, NC 28269', '(269) 483-9910', 'denise.quimby@cms.k12.nc.us'),
(3, 'Dr.', 'Maria', 'Thomas', '6807 46th Terrace East', 'Kannapolis, NC 28081', '(941) 752-4861', 'maria.thomas@cms.k12.nc.us'),
(4, 'Mr.', 'Aaron', 'Eisenhower', '3460 East Ridge Court', 'Mount Pleasant, NC 28124', '(704) 947-9904', 'aeisenhower@gmail.com'),
(5, 'Mr.', 'Dennis', 'Mitchell', '1200 North Arms Road', 'Charlotte, NC 28217', '(616) 530-8787', 'dennis.mitchell@uncc.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bill_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

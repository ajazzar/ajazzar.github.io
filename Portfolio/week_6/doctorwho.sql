-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2021 at 10:42 PM
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
-- Database: `doctorwho`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `receipt_number` int(4) NOT NULL,
  `total_paid` double(6,2) NOT NULL,
  `date_paid` varchar(10) NOT NULL,
  `insurance_info` varchar(20) NOT NULL,
  `patient_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`receipt_number`, `total_paid`, `date_paid`, `insurance_info`, `patient_id`) VALUES
(1, 350.75, '7/15/2020', 'BCBS', 1),
(2, 350.75, '1/10/2021', 'Medicare', 2),
(3, 350.75, '02/12/2021', 'BCBS', 1),
(4, 400.25, '03/15/2021', 'Aetna', 3),
(5, 500.00, '3/07/2021', 'Cigna', 4);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `prescription_id` int(4) NOT NULL,
  `med_name` varchar(30) NOT NULL,
  `presc_date` varchar(10) NOT NULL,
  `days_supply` int(4) NOT NULL,
  `patient_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`prescription_id`, `med_name`, `presc_date`, `days_supply`, `patient_id`) VALUES
(1, 'Lisinopril', '10/30/2020', 90, 1),
(2, 'Lipitor', '08/02/2020', 180, 2),
(3, 'Metformin', '09/05/2020', 30, 3),
(4, 'Valsartan', '11/25/2020', 180, 4),
(5, 'Crestor', '1/15/2021', 90, 5);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(4) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `first_name`, `last_name`, `email_address`, `birth_date`, `gender`) VALUES
(1, 'Aaron', 'Jazzar', 'ajazzar@mail.usf.edu', '10/23/1982', 'male'),
(2, 'Gary', 'Swan', 'gary.swan@yahoo.com', '05/20/1950', 'male'),
(3, 'Chen', 'Kim', 'chen.kim@myschool.edu', '06/10/1990', 'male'),
(4, 'Jill', 'Smith', 'jill.smith@gmail.com', '11/5/2000', 'female'),
(5, 'Victoria', 'Vanderhoff', 'vv2@myschool.edu', '03/07/1960', 'female'),
(6, 'Danielle', 'Jones', 'djones@gmail.com', '07/02/1985', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`receipt_number`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `receipt_number` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `prescription_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 11:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `dob` varchar(233) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `joiningdate` varchar(244) NOT NULL,
  `relievingdate` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `first_name`, `dob`, `salary`, `joiningdate`, `relievingdate`, `contact`, `status`) VALUES
(1, 'yogeshwaran', '2023-12-31T18:30:00.000Z', '54443', '2023-12-31T18:30:00.000Z', '2024-01-15T18:30:00.000Z', '9998887777', 'Inactive'),
(2, 'mani', '1996-12-02T18:30:00.000Z', '50000', '2023-02-05T18:30:00.000Z', '2023-12-30T18:30:00.000Z', '9988776655', 'Active'),
(3, 'divya', '1997-01-26T18:30:00.000Z', '600000', '2020-01-19T18:30:00.000Z', '2023-01-01T18:30:00.000Z', '9988776655', 'Inactive'),
(4, 'Satish', '1997-03-28T18:30:00.000Z', '400000', '2021-07-15T18:30:00.000Z', '2022-02-27T18:30:00.000Z', '9988776655', 'Inactive'),
(5, 'naveen', '1998-11-30T18:30:00.000Z', '40000', '2017-03-31T18:30:00.000Z', '2022-04-19T18:30:00.000Z', '9988776655', 'Active'),
(6, 'narean', '1997-03-02T18:30:00.000Z', '9888', '2023-11-30T18:30:00.000Z', '2023-12-31T18:30:00.000Z', '9988776643', 'Active'),
(7, 'umapathy', '1995-08-08T18:30:00.000Z', '8999', '2015-05-07T18:30:00.000Z', '2019-09-06T18:30:00.000Z', '8877665544', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

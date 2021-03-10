-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 05:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajasthantourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_travel`
--

CREATE TABLE `book_travel` (
  `book_co_id` int(255) NOT NULL,
  `book_co_name` varchar(255) NOT NULL,
  `book_cost` int(255) NOT NULL,
  `book_desc` varchar(2000) NOT NULL,
  `district_id` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_travel`
--

INSERT INTO `book_travel` (`book_co_id`, `book_co_name`, `book_cost`, `book_desc`, `district_id`, `status`) VALUES
(123, 'UBER', 2500, 'from jaipur to jodhpur', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cottage`
--

CREATE TABLE `cottage` (
  `cottage_id` varchar(200) NOT NULL,
  `cottage_name` varchar(200) NOT NULL,
  `cottage_price` int(100) NOT NULL,
  `location` varchar(500) NOT NULL,
  `district_id` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cottage`
--

INSERT INTO `cottage` (`cottage_id`, `cottage_name`, `cottage_price`, `location`, `district_id`, `status`) VALUES
('cott1', 'Krishna COttage', 2000, 'gandhinagar', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `status`) VALUES
(1, 'ajmer', 1),
(2, 'Alwar', 1),
(3, 'Jaipur', 1),
(4, 'Jodhpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guide_id` varchar(100) NOT NULL,
  `guide_name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_restaurant`
--

CREATE TABLE `pay_restaurant` (
  `Res_id` varchar(100) NOT NULL,
  `Res_name` varchar(200) NOT NULL,
  `Res_desc` varchar(2000) NOT NULL,
  `district_id` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_restaurant`
--

INSERT INTO `pay_restaurant` (`Res_id`, `Res_name`, `Res_desc`, `district_id`, `status`) VALUES
('rest1', 'Radhe Krisha Restaurants', 'pure vegetarian', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent_travel`
--

CREATE TABLE `rent_travel` (
  `rent_veh_co_id` varchar(100) NOT NULL,
  `rent_name` varchar(200) NOT NULL,
  `rent_cost` int(100) NOT NULL,
  `rent_desc` varchar(2000) NOT NULL,
  `rent_sec_mon` int(100) NOT NULL,
  `district_id` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_travel`
--

INSERT INTO `rent_travel` (`rent_veh_co_id`, `rent_name`, `rent_cost`, `rent_desc`, `rent_sec_mon`, `district_id`, `status`) VALUES
('rent1', 'APACHE', 1000, 'Provided by Neha Rental.', 30000, 1, 1),
('rent2', 'ROYAL ENFIELD', 2000, 'provided by RAJMANI', 40000, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_travel`
--
ALTER TABLE `book_travel`
  ADD PRIMARY KEY (`book_co_id`);

--
-- Indexes for table `cottage`
--
ALTER TABLE `cottage`
  ADD PRIMARY KEY (`cottage_id`);

--
-- Indexes for table `rent_travel`
--
ALTER TABLE `rent_travel`
  ADD PRIMARY KEY (`rent_veh_co_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

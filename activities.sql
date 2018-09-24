-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:07 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_royal_palm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `LOC_ID` int(11) NOT NULL,
  `TRAINER_ID` int(11) DEFAULT NULL,
  `COST_PER_MONTH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ID`, `NAME`, `LOC_ID`, `TRAINER_ID`, `COST_PER_MONTH`) VALUES
(1, 'TENNIS', 7, NULL, 2500),
(2, 'SWIMMING', 1, 5, 6000),
(3, 'GOLF', 3, NULL, 10000),
(4, 'YOGA', 8, 3, 5000),
(5, 'EXERCISE', 8, 2, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LOC_ID` (`LOC_ID`),
  ADD KEY `TRAINER_ID` (`TRAINER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

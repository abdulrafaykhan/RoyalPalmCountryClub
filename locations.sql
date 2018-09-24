-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:09 PM
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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ADDRESS` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`ID`, `NAME`, `ADDRESS`) VALUES
(1, 'POOL', 'NEAR THE CLUBHOUSE'),
(2, 'GARDEN', 'NEAR THE CLUBHOUSE'),
(3, 'GOLF COURSE', 'NEAR THE PAVILION'),
(4, 'RESTAURANT', 'NEAR THE CLUBHOUSE'),
(5, 'BANQUET HALL', 'NEAR THE PAVILION'),
(6, 'JOGGING TRACK', 'NEAR THE GOLF COURSE'),
(7, 'TENNIS COURT', 'NEAR THE GYMNASIUM'),
(8, 'GYMNASIUM', 'NEAR THE PAVILION');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

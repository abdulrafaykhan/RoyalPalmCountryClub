-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:08 PM
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
-- Table structure for table `involved_in`
--

CREATE TABLE `involved_in` (
  `MEMBER_ID` int(11) NOT NULL,
  `ACTIVITY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `involved_in`
--

INSERT INTO `involved_in` (`MEMBER_ID`, `ACTIVITY_ID`) VALUES
(5, 2),
(5, 3),
(5, 4),
(5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `involved_in`
--
ALTER TABLE `involved_in`
  ADD PRIMARY KEY (`MEMBER_ID`,`ACTIVITY_ID`),
  ADD KEY `ACTIVITY_ID` (`ACTIVITY_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

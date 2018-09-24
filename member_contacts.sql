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
-- Table structure for table `member_contacts`
--

CREATE TABLE `member_contacts` (
  `ID` int(11) NOT NULL,
  `CONTACT_NO` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `member_contacts`
--

INSERT INTO `member_contacts` (`ID`, `CONTACT_NO`) VALUES
(2, '03208890565'),
(2, '03208890566'),
(4, '02136345788'),
(4, '02136345877'),
(4, '03215544785'),
(4, '03215566985'),
(5, '02136345998');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_contacts`
--
ALTER TABLE `member_contacts`
  ADD UNIQUE KEY `CONTACT_NO` (`CONTACT_NO`),
  ADD KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

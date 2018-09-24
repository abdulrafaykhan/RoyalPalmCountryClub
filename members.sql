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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `LNAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `CNIC_NO` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `HOUSE_NO` int(11) NOT NULL,
  `BLOCK` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `AREA` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `CITY` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `COUNTRY` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `GENDER` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `CARD_NO` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `DATE_OF_JOINING` date NOT NULL,
  `TYPE` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `COST_PER_MONTH` varchar(11) COLLATE latin1_general_ci DEFAULT NULL,
  `MONTHLY_INSTALLMENTS` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `PAYMENT_STATUS` varchar(6) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `FNAME`, `LNAME`, `CNIC_NO`, `HOUSE_NO`, `BLOCK`, `AREA`, `CITY`, `COUNTRY`, `EMAIL`, `GENDER`, `CARD_NO`, `DATE_OF_JOINING`, `TYPE`, `COST_PER_MONTH`, `MONTHLY_INSTALLMENTS`, `PAYMENT_STATUS`) VALUES
(2, 'ABDUL RAFAY', 'KHAN', '4210156669856', 2, 'G-45', 'FEDERAL CAPITAL AREA', 'KARACHI', 'PAKISTAN', 'abdul.rafay.khan10@gmail.com', 'MALE', '223365322323', '2016-10-25', 'PRV', NULL, '70000', 'UNPAID'),
(4, 'AHSAN', 'AHAD', '42101655895959', 55, 'A-12', 'AZIZABAD', 'KARACHI', 'PAKISTAN', 'aa111@gmail.com', 'MALE', '21321516515', '2016-10-30', 'PRV', NULL, '50000', 'UNPAID'),
(5, 'KIRAN', 'MEHER', '42105151', 35, 'D-4', 'ASKARI IV', 'KARACHI', 'PAKISTAN', 'km34@gmail.com', 'MALE', '5564564654', '2016-10-31', 'REG', '8000', '', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CNIC_NO` (`CNIC_NO`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `CREDIT_CARD_NO` (`CARD_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

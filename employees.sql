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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
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
  `EXPERTISE` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HIREDATE` date NOT NULL,
  `SALARY` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `BANK_NAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ACCOUNT_NO` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `WORK_HOURS` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `JOB` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `COMMISSION` varchar(6) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `FNAME`, `LNAME`, `CNIC_NO`, `HOUSE_NO`, `BLOCK`, `AREA`, `CITY`, `COUNTRY`, `EMAIL`, `GENDER`, `EXPERTISE`, `HIREDATE`, `SALARY`, `BANK_NAME`, `ACCOUNT_NO`, `WORK_HOURS`, `JOB`, `COMMISSION`) VALUES
(1, 'AHSAN', 'DANISH', '421015698989', 23, 'B-56', '32ND STREET', 'ONTARIO', 'CANADA', 'ahsan_danish@live.com', 'MALE', 'Mechanical engineering', '2016-10-29', '45000', 'MCB', '454654564', '4', 'SENIOR ASSISTANT MANAGER (MECHANICAL)', ''),
(2, 'ASAD', 'MAHAR', '4210156986', 34, 'C-67', 'TEEN TALWAR', 'KARACHI', 'PAKISTAN', 'asad_mahar@live.com', 'MALE', 'Weightlifting', '2016-10-29', '20000', 'BANK AL HABIB', '56456564', '5', 'TRAINER', ''),
(3, 'AHAD', 'QAMAR', '42101569866', 45, 'E-56', 'GULSHAN-E-IQBAL', 'KARACHI', 'PAKISTAN', 'ahad.qamar23@gmail.com', 'MALE', 'Yoga', '2016-10-29', '25000', 'HABIB BANK', '5156156151', '5', 'TRAINER', ''),
(4, 'ABDUL', 'HANAN', '42101569898', 45, 'C-56', 'NATHIA GALI', 'MURREE', 'PAKISTAN', 'a.hanan10@gmail.com', 'MALE', 'Yoga', '2016-10-29', '23000', 'HABIB BANK', '4655151561651', '6', 'TRAINER', ''),
(5, 'HAROLD', 'BANNING', '15165165156', 4, 'A-89', 'GRATON STREET', 'LONDON', 'UNITED KINGDOM', 'banning1@gmail.com', 'MALE', 'Swimming', '2016-10-30', '25000', 'HSBC', '1561515616', '6', 'TRAINER', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

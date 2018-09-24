-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:06 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `USERNAME`, `PASSWORD`, `EMPLOYEE_ID`) VALUES
(1, 'admin', '$2y$10$MTMxYmYzOGVkYjhhOTMyNufZJ8TigULncT7uDmXq5dPbqOZu9odjK', 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `ID` int(11) NOT NULL,
  `CONTACT_NO` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employee_contacts`
--

INSERT INTO `employee_contacts` (`ID`, `CONTACT_NO`) VALUES
(1, '0325569995656'),
(2, '02136345888'),
(3, '02136345788'),
(3, '0325569856'),
(4, '03215569856');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_info`
--
CREATE TABLE `employee_info` (
`ID` int(11)
,`FNAME` varchar(255)
,`LNAME` varchar(255)
,`CNIC_NO` varchar(50)
,`HOUSE_NO` int(11)
,`BLOCK` varchar(255)
,`AREA` varchar(255)
,`CITY` varchar(255)
,`COUNTRY` varchar(255)
,`EMAIL` varchar(255)
,`GENDER` varchar(6)
,`EXPERTISE` varchar(255)
,`HIREDATE` date
,`SALARY` varchar(11)
,`BANK_NAME` varchar(255)
,`ACCOUNT_NO` varchar(50)
,`WORK_HOURS` varchar(6)
,`JOB` varchar(255)
,`COMMISSION` varchar(6)
,`CONTACT_NO` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE `employee_login` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `PASSWORD` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`EMPLOYEE_ID`, `PASSWORD`) VALUES
(1, '$2y$10$NDllMDY2ZmI5MTYwYWE4YehwFrzg.LXLgW5ctQhoXP3hIdMNGh5K2'),
(2, '$2y$10$ZWNjYzQ4ZGVjYWU0ZjgzMOTlyOw6yvbLz7yKmCkuEdvk5AxbKNiEW'),
(3, '$2y$10$MTJiMWNjNjdjYmJjNjQ2N.vZsKNCUoLhRrfuo4YUUR66AzGSNaZyS'),
(4, '$2y$10$MDgzMWQyMWIyODI3YThmZeJOOen4QH.mv9csUcuSJwzk6FuEwwAVS'),
(5, '$2y$10$ODBmZmNkYmJjY2UyNDVhNuVeQK4HxV6iqSU.8TF5Xj7ibi6VCO1yK');

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

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `MEMBER_ID` int(11) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`MEMBER_ID`, `PASSWORD`) VALUES
(2, '$2y$10$OGYwNDU5NTEwNGE1OTc0N.185nEv8bPyr2RyJsmOTaKBXtf6zyeKW'),
(4, '$2y$10$YjAzYWM4N2U3N2ZmOGRhMuSkzho1IF3.9bEyqSYIQnW0GUpVS4ely'),
(5, '$2y$10$ODllMjc4Y2Q5YWU2OTk1NuLPkc2A.9Pl.wBzv3nptt2xVULYHHWEW');

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `member_privileged`
--
CREATE TABLE `member_privileged` (
`ID` int(11)
,`FNAME` varchar(255)
,`LNAME` varchar(255)
,`CNIC_NO` varchar(50)
,`HOUSE_NO` int(11)
,`BLOCK` varchar(255)
,`AREA` varchar(255)
,`CITY` varchar(255)
,`COUNTRY` varchar(255)
,`EMAIL` varchar(255)
,`GENDER` varchar(6)
,`CARD_NO` varchar(50)
,`DATE_OF_JOINING` date
,`MONTHLY_INSTALLMENTS` varchar(8)
,`PAYMENT_STATUS` varchar(6)
,`CONTACT_NO` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `member_regular`
--
CREATE TABLE `member_regular` (
`ID` int(11)
,`FNAME` varchar(255)
,`LNAME` varchar(255)
,`CNIC_NO` varchar(50)
,`HOUSE_NO` int(11)
,`BLOCK` varchar(255)
,`AREA` varchar(255)
,`CITY` varchar(255)
,`COUNTRY` varchar(255)
,`EMAIL` varchar(255)
,`GENDER` varchar(6)
,`CARD_NO` varchar(50)
,`DATE_OF_JOINING` date
,`COST_PER_MONTH` varchar(11)
,`CONTACT_NO` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `ROOM_ID` int(11) NOT NULL,
  `MEMBER_ID` int(11) NOT NULL,
  `FROM_DATE` date NOT NULL,
  `TILL_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ROOM_NO` int(11) NOT NULL,
  `TYPE` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `FACING` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `RENT` int(11) NOT NULL,
  `STATUS` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ROOM_NO`, `TYPE`, `FACING`, `RENT`, `STATUS`) VALUES
(1, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(2, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(3, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(4, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(5, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(6, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(7, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(8, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(9, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(10, 'EXECUTIVE SUITE', 'GARDEN', 25000, 'A'),
(11, 'SUPERIOR CLUB SUITE', 'GOLF COURSE', 22000, 'A'),
(12, 'SUPERIOR CLUB SUITE', 'GOLF COURSE', 22000, 'A'),
(13, 'SUPERIOR CLUB SUITE', 'GOLF COURSE', 22000, 'A'),
(14, 'SUPERIOR CLUB SUITE', 'GOLF COURSE', 22000, 'A'),
(15, 'SUPERIOR CLUB SUITE', 'GOLF COURSE', 22000, 'A'),
(16, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(17, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(18, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(19, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(20, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(21, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(22, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(23, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(24, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(25, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(26, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(27, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(28, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(29, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(30, 'KICHNETTE SUITE', 'JOGGING TRACK', 20000, 'A'),
(31, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(32, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(33, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(34, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(35, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(36, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(37, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(38, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(39, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(40, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(41, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(42, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(43, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(44, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(45, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(46, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(47, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(48, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(49, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(50, 'FAMILY SUITE', 'POOL', 22000, 'A'),
(51, 'KING SUITE', 'GOLF COURSE', 30000, 'A'),
(52, 'KING SUITE', 'GOLF COURSE', 30000, 'A'),
(53, 'KING SUITE', 'GOLF COURSE', 30000, 'A'),
(54, 'KING SUITE', 'GOLF COURSE', 30000, 'A'),
(55, 'KING SUITE', 'GOLF COURSE', 30000, 'A'),
(56, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(57, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(58, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(59, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(60, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(61, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(62, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(63, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(64, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(65, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(66, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(67, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(68, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(69, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(70, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(71, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(72, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(73, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(74, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(75, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(76, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(77, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(78, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(79, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(80, 'STUDIO SUITE', 'GOLF COURSE', 18000, 'A'),
(81, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(82, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(83, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(84, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(85, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(86, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(87, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(88, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(89, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(90, 'TWO BEDROOM APARTMENT', 'GOLF COURSE', 21000, 'A'),
(91, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(92, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(93, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(94, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(95, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(96, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(97, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(98, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(99, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A'),
(100, 'THREE BEDROOM APARTMENT', 'GOLF COURSE', 24000, 'A');

-- --------------------------------------------------------

--
-- Structure for view `employee_info`
--
DROP TABLE IF EXISTS `employee_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`rafay`@`localhost` SQL SECURITY DEFINER VIEW `employee_info`  AS  select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`EXPERTISE` AS `EXPERTISE`,`a`.`HIREDATE` AS `HIREDATE`,`a`.`SALARY` AS `SALARY`,`a`.`BANK_NAME` AS `BANK_NAME`,`a`.`ACCOUNT_NO` AS `ACCOUNT_NO`,`a`.`WORK_HOURS` AS `WORK_HOURS`,`a`.`JOB` AS `JOB`,`a`.`COMMISSION` AS `COMMISSION`,`b`.`CONTACT_NO` AS `CONTACT_NO` from (`employees` `a` join `employee_contacts` `b`) where (`a`.`ID` = `b`.`ID`) ;

-- --------------------------------------------------------

--
-- Structure for view `member_privileged`
--
DROP TABLE IF EXISTS `member_privileged`;

CREATE ALGORITHM=UNDEFINED DEFINER=`rafay`@`localhost` SQL SECURITY DEFINER VIEW `member_privileged`  AS  select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`CARD_NO` AS `CARD_NO`,`a`.`DATE_OF_JOINING` AS `DATE_OF_JOINING`,`a`.`MONTHLY_INSTALLMENTS` AS `MONTHLY_INSTALLMENTS`,`a`.`PAYMENT_STATUS` AS `PAYMENT_STATUS`,`b`.`CONTACT_NO` AS `CONTACT_NO` from (`members` `a` join `member_contacts` `b`) where ((`a`.`TYPE` = 'PRV') and (`a`.`ID` = `b`.`ID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `member_regular`
--
DROP TABLE IF EXISTS `member_regular`;

CREATE ALGORITHM=UNDEFINED DEFINER=`rafay`@`localhost` SQL SECURITY DEFINER VIEW `member_regular`  AS  select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`CARD_NO` AS `CARD_NO`,`a`.`DATE_OF_JOINING` AS `DATE_OF_JOINING`,`a`.`COST_PER_MONTH` AS `COST_PER_MONTH`,`b`.`CONTACT_NO` AS `CONTACT_NO` from (`members` `a` join `member_contacts` `b`) where ((`a`.`TYPE` = 'REG') and (`a`.`ID` = `b`.`ID`)) ;

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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NAME` (`USERNAME`) USING BTREE,
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD UNIQUE KEY `CONTACT_NO` (`CONTACT_NO`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `involved_in`
--
ALTER TABLE `involved_in`
  ADD PRIMARY KEY (`MEMBER_ID`,`ACTIVITY_ID`),
  ADD KEY `ACTIVITY_ID` (`ACTIVITY_ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`MEMBER_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CNIC_NO` (`CNIC_NO`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `CREDIT_CARD_NO` (`CARD_NO`);

--
-- Indexes for table `member_contacts`
--
ALTER TABLE `member_contacts`
  ADD UNIQUE KEY `CONTACT_NO` (`CONTACT_NO`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`ROOM_ID`),
  ADD KEY `MEMBER_ID` (`MEMBER_ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ROOM_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ROOM_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

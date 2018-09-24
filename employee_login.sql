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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

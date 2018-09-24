-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:10 PM
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
-- Structure for view `member_privileged`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`rafay`@`localhost` SQL SECURITY DEFINER VIEW `member_privileged`  AS  select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`CARD_NO` AS `CARD_NO`,`a`.`DATE_OF_JOINING` AS `DATE_OF_JOINING`,`a`.`MONTHLY_INSTALLMENTS` AS `MONTHLY_INSTALLMENTS`,`a`.`PAYMENT_STATUS` AS `PAYMENT_STATUS`,`b`.`CONTACT_NO` AS `CONTACT_NO` from (`members` `a` join `member_contacts` `b`) where ((`a`.`TYPE` = 'PRV') and (`a`.`ID` = `b`.`ID`)) ;

--
-- VIEW  `member_privileged`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

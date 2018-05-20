-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 05:22 PM
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
-- Database: `cashfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `datekey`
--

DROP TABLE IF EXISTS `datekey`;
CREATE TABLE `datekey` (
  `datekey` int(11) NOT NULL,
  `date` date NOT NULL,
  `month` tinyint(4) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_list`
--

DROP TABLE IF EXISTS `expense_list`;
CREATE TABLE `expense_list` (
  `month` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `expense_category` varchar(256) NOT NULL,
  `daily_expense` decimal(10,2) NOT NULL,
  `monthly_expense` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `incomes_list`
--

DROP TABLE IF EXISTS `incomes_list`;
CREATE TABLE `incomes_list` (
  `month` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `income_category` varchar(256) NOT NULL,
  `daily_income` decimal(10,2) NOT NULL,
  `monthly_income` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_report`
--

DROP TABLE IF EXISTS `monthly_report`;
CREATE TABLE `monthly_report` (
  `month` tinyint(4) NOT NULL,
  `monthly_income` decimal(10,2) NOT NULL,
  `monthly_expense` decimal(10,2) NOT NULL,
  `saved` decimal(10,2) NOT NULL,
  `income_category` varchar(256) NOT NULL,
  `expense_category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `email` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datekey`
--
ALTER TABLE `datekey`
  ADD PRIMARY KEY (`datekey`),
  ADD KEY `month` (`month`),
  ADD KEY `date` (`date`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD UNIQUE KEY `expense_category` (`expense_category`),
  ADD KEY `daily_expense` (`daily_expense`),
  ADD KEY `monthly_expense` (`monthly_expense`),
  ADD KEY `month` (`month`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `incomes_list`
--
ALTER TABLE `incomes_list`
  ADD PRIMARY KEY (`date`),
  ADD UNIQUE KEY `income_category` (`income_category`),
  ADD KEY `daily_income` (`daily_income`),
  ADD KEY `monthly_income` (`monthly_income`),
  ADD KEY `month` (`month`);

--
-- Indexes for table `monthly_report`
--
ALTER TABLE `monthly_report`
  ADD KEY `monthly_income` (`monthly_income`),
  ADD KEY `monthly_expense` (`monthly_expense`),
  ADD KEY `income_category` (`income_category`),
  ADD KEY `expense_category` (`expense_category`),
  ADD KEY `month` (`month`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD CONSTRAINT `expense_list_ibfk_1` FOREIGN KEY (`month`) REFERENCES `datekey` (`month`),
  ADD CONSTRAINT `expense_list_ibfk_2` FOREIGN KEY (`date`) REFERENCES `datekey` (`date`);

--
-- Constraints for table `incomes_list`
--
ALTER TABLE `incomes_list`
  ADD CONSTRAINT `incomes_list_ibfk_1` FOREIGN KEY (`month`) REFERENCES `datekey` (`month`),
  ADD CONSTRAINT `incomes_list_ibfk_2` FOREIGN KEY (`date`) REFERENCES `datekey` (`date`);

--
-- Constraints for table `monthly_report`
--
ALTER TABLE `monthly_report`
  ADD CONSTRAINT `monthly_report_ibfk_1` FOREIGN KEY (`monthly_income`) REFERENCES `incomes_list` (`monthly_income`),
  ADD CONSTRAINT `monthly_report_ibfk_2` FOREIGN KEY (`monthly_expense`) REFERENCES `expense_list` (`monthly_expense`),
  ADD CONSTRAINT `monthly_report_ibfk_3` FOREIGN KEY (`income_category`) REFERENCES `incomes_list` (`income_category`),
  ADD CONSTRAINT `monthly_report_ibfk_4` FOREIGN KEY (`expense_category`) REFERENCES `expense_list` (`expense_category`),
  ADD CONSTRAINT `monthly_report_ibfk_5` FOREIGN KEY (`month`) REFERENCES `datekey` (`month`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

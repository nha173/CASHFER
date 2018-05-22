-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 06:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
CREATE DATABASE IF NOT EXISTS `cashfer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cashfer`;

-- --------------------------------------------------------

--
-- Table structure for table `expense_list`
--

DROP TABLE IF EXISTS `expense_list`;
CREATE TABLE `expense_list` (
  `expid` int(6) NOT NULL,
  `userid` int(6) NOT NULL,
  `date` date NOT NULL,
  `expense_category` varchar(256) NOT NULL,
  `expenses` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_list`
--

INSERT INTO `expense_list` (`expid`, `userid`, `date`, `expense_category`, `expenses`) VALUES
(121665, 123123, '2018-04-17', 'food', '90.00'),
(123111, 123123, '2018-05-22', 'magic', '111.00'),
(123155, 123123, '2018-05-21', 'food', '100.00'),
(123195, 123123, '2018-05-22', 'food', '80.00'),
(671682, 123123, '2018-05-21', 'master', '100.00'),
(705122, 123123, '2018-05-21', 'gege', '106.00');

-- --------------------------------------------------------

--
-- Table structure for table `incomes_list`
--

DROP TABLE IF EXISTS `incomes_list`;
CREATE TABLE `incomes_list` (
  `incid` int(6) NOT NULL,
  `userid` int(6) NOT NULL,
  `date` date NOT NULL,
  `income_category` varchar(256) NOT NULL,
  `incomes` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incomes_list`
--

INSERT INTO `incomes_list` (`incid`, `userid`, `date`, `income_category`, `incomes`) VALUES
(123415, 123123, '2018-05-22', 'Interest', '100.00'),
(414123, 123123, '2018-05-22', 'salary', '1500.00'),
(427424, 123123, '2018-05-21', 'fawd', '123.00'),
(653593, 123123, '2018-05-21', 'fasdwa', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(6) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`) VALUES
(123123, 'te', 'qwer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD PRIMARY KEY (`expid`),
  ADD KEY `FK_userid` (`userid`);

--
-- Indexes for table `incomes_list`
--
ALTER TABLE `incomes_list`
  ADD PRIMARY KEY (`incid`),
  ADD KEY `FK_iuserid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `incomes_list`
--
ALTER TABLE `incomes_list`
  ADD CONSTRAINT `FK_iuserid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

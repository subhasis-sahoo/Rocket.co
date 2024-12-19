-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 11:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(16) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `gender`, `dob`, `email`, `mobile`, `address`, `password`, `image`) VALUES
(1, 'RAnjeet', 'male', '2024-12-15', 'jhon@gmail.com', 5896589658, 'asas', 'ssssssss', '');

-- --------------------------------------------------------

--
-- Table structure for table `appliedjob`
--

CREATE TABLE `appliedjob` (
  `noofapplication` int(11) NOT NULL,
  `userid` int(255) NOT NULL,
  `jobid` int(255) NOT NULL,
  `jobname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `adminid` int(255) NOT NULL,
  `adminname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `adminid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `jobname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` double(12,2) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`adminid`, `jid`, `companyname`, `jobname`, `location`, `salary`, `experience`, `description`, `image`) VALUES
(1, 1, 'accenture', 'front-end', 'bhubanaeshwar', 20000020.00, '1 yr-2 yr', 'huhuyygbygvb', NULL),
(3, 2, 'tcs', 'front-end', 'bhubanaeshwar', 20000020.00, '1 yr-2 yr', 'sssssssssssssss', NULL),
(5, 3, 'accenture', 'front-end', 'bbsr', 22222.00, '1 yr-2 yr', 'siteeeee', NULL),
(6, 4, 'tcs', 'dddddddd', 'odisha', 222.00, '6 yr- 10 yr', 'sssssssssssssssssss', NULL),
(7, 5, 'tcs', 'dddddddd', 'bhubanaeshwar', 222.00, 'Fresher', 'ddddddddd', NULL),
(8, 6, 'tcs', 'front-end', 'bbsr', 22222.00, '6 yr- 10 yr', 'ssssssss', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(16) NOT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `gender`, `dob`, `email`, `mobile`, `address`, `password`, `resume`, `image`) VALUES
(5, 'Ranjeet Parida', 'male', '2024-12-09', 'ranjeetparida152@gmail.com', 9348603945, 'snpur', 'ddddddddd', './link/res', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `appliedjob`
--
ALTER TABLE `appliedjob`
  ADD PRIMARY KEY (`noofapplication`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `resume` (`resume`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appliedjob`
--
ALTER TABLE `appliedjob`
  MODIFY `noofapplication` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

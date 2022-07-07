-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2022 at 11:25 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_status`
--

DROP TABLE IF EXISTS `add_status`;
CREATE TABLE IF NOT EXISTS `add_status` (
  `complaintid` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_status`
--

INSERT INTO `add_status` (`complaintid`, `status`, `photo`) VALUES
('St1387266691', 'solved', '');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_authority`
--

DROP TABLE IF EXISTS `assigned_authority`;
CREATE TABLE IF NOT EXISTS `assigned_authority` (
  `id` varchar(40) NOT NULL,
  `send_date` date NOT NULL,
  `send_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assigned_staff`
--

DROP TABLE IF EXISTS `assigned_staff`;
CREATE TABLE IF NOT EXISTS `assigned_staff` (
  `staff_name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `assign_date` date NOT NULL,
  `status` varchar(40) NOT NULL,
  `cmpid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_staff`
--

INSERT INTO `assigned_staff` (`staff_name`, `dept`, `contact`, `email`, `assign_date`, `status`, `cmpid`) VALUES
('Shivaraj', 'keb', '1122334455', 'shivaraj@gmail.com', '2022-01-23', 'sent', 'St1387266691');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_wordworker`
--

DROP TABLE IF EXISTS `assigned_wordworker`;
CREATE TABLE IF NOT EXISTS `assigned_wordworker` (
  `worker_name` varchar(30) NOT NULL,
  `ward` varchar(30) NOT NULL,
  `area` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_wordworker`
--

INSERT INTO `assigned_wordworker` (`worker_name`, `ward`, `area`, `contact`, `email`, `cid`, `status`) VALUES
('w15', '15', 'Dharwad', '9988774455', 'w15@gmail.com', 'St1387266691', 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `complaintdetails`
--

DROP TABLE IF EXISTS `complaintdetails`;
CREATE TABLE IF NOT EXISTS `complaintdetails` (
  `userid` varchar(30) NOT NULL,
  `cmptype` varchar(50) NOT NULL,
  `cmpname` varchar(50) NOT NULL,
  `ward` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `photo` varchar(400) NOT NULL,
  `cmpid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintdetails`
--

INSERT INTO `complaintdetails` (`userid`, `cmptype`, `cmpname`, `ward`, `area`, `adate`, `atime`, `photo`, `cmpid`) VALUES
('Ro1761046068', 'Street light', 'Street light not working', '15', 'Dharwad', '2022-01-23', '14:46:26', 'delete.png', 'St1387266691');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `citizen_name` varchar(30) NOT NULL,
  `complaint_id` varchar(20) NOT NULL,
  `complaint_status` varchar(40) NOT NULL,
  `about_service` varchar(40) NOT NULL,
  `worker_status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`citizen_name`, `complaint_id`, `complaint_status`, `about_service`, `worker_status`) VALUES
('rohit', 'St1387266691', 'solved', 'very good', 'satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `higher_authority`
--

DROP TABLE IF EXISTS `higher_authority`;
CREATE TABLE IF NOT EXISTS `higher_authority` (
  `cdate` varchar(30) NOT NULL,
  `complaintid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `utype` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `utype`) VALUES
('', '1809190857', 'staff'),
('admin', '1234', 'admin'),
('authority', '1111', 'authority'),
('rohit@gmail.com', '701498680', 'user'),
('shivaraj@gmail.com', '969376828', 'staff'),
('w15@gmail.com', '2125528812', 'wardworker');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

DROP TABLE IF EXISTS `staff_details`;
CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_name` varchar(30) NOT NULL,
  `Dept` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addrs` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_name`, `Dept`, `contact`, `email`, `addrs`) VALUES
('', '', '', '', ''),
('Shivaraj', 'keb', '1122334455', 'shivaraj@gmail.com', 'Dharwad');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `userid` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `addrs` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userid`, `fname`, `lname`, `gender`, `country`, `state`, `city`, `addrs`, `contact`, `email`) VALUES
('Ro1761046068', 'Rohit', 'J', 'male', 'India', 'Karnataka', 'Dharwad', 'Dharwad', '8822334455', 'rohit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wardworker_details`
--

DROP TABLE IF EXISTS `wardworker_details`;
CREATE TABLE IF NOT EXISTS `wardworker_details` (
  `worker_name` varchar(30) NOT NULL,
  `ward` varchar(30) NOT NULL,
  `area` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardworker_details`
--

INSERT INTO `wardworker_details` (`worker_name`, `ward`, `area`, `address`, `contact`, `email`) VALUES
('w15', '15', 'Dharwad', 'Dharwad', '9988774455', 'w15@gmail.com'),
('w15', '15', 'Dharwad', 'Dharwad', '9988774455', 'w15@gmail.com'),
('', '', '', '', '', ''),
('', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

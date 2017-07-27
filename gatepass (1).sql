-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 09:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatepass`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `college` varchar(80) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subject` varchar(80) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `rollno`, `college`, `branch`, `date`, `time`, `subject`, `status`) VALUES
(1, 'sa Sarma', '15255-cm-017', 'Aditya Engineering College', 'CSE', '2016-12-29', '03:23:17', 'sick leave', 1),
(2, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '12:59:00', 'wef', 1),
(3, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '14:34:00', 'dsdvsdv', 2),
(4, ' edvfqV', '24344', 'Aditya Engineering College', 'CSE', '2016-12-31', '23:59:00', 'dfvfdsv q', 1),
(5, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '12:59:00', 'nenu bayatiki vellali', 1),
(6, 'Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '12:55:00', 'afaefca wefsw w fw eswvffewfewfewfewf wef wefwefwefewfwef wefwef', 1),
(7, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '0000-00-00', '00:00:00', '', 1),
(8, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '12:59:00', 'srgewfwv', 1),
(9, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '12:59:00', 'srgewfwv', 2),
(10, ' Mukesh Kalaga', '15255-CM-017', 'Aditya Engineering College', 'CSE', '2016-12-31', '01:14:00', 'sdegvrsdgvs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `rollno` varchar(20) NOT NULL,
  `Position` int(11) NOT NULL DEFAULT '1',
  `mobileno` varchar(17) DEFAULT NULL,
  `college` varchar(80) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `rollno`, `Position`, `mobileno`, `college`, `branch`, `password`) VALUES
('Swaroop', 'sunandasuresh.5369@gmail.com', '15249-M-012', 1, '9618824777', 'Sri Sai Aditya College of Engineering and Technology', 'MECHANICAL', 'swaroop6733'),
('Maharshi', 'maharshivaragopisetti@gmail.com', '15255-CM-014', 1, '7075250922', 'Aditya Engineering College', 'CSE', 'maharshi'),
('Mukesh Kalaga', 'kalagamukesh@gmail.com', '15255-CM-017', 1, '9948994533', 'Aditya Engineering College', 'CSE', 'mukeshkalaga'),
('sa Sarmasdfsdf', 'kalagamukesh@gmail.com', '15A91A0542', 1, '454645545', 'Aditya Engineering College', 'CSE', 'ravi'),
('edvfqV', 'SDVDS@wef.fe', '24344', 1, '2353434633', 'Aditya Engineering College', 'CSE', 'eeeee'),
('Rvai', 'asfafva@aac.wefw', 'adsc', 1, '434635356', 'Aditya Engineering College', 'CSE', 'adadv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

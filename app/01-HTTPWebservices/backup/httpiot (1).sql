-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 07:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `httpiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `ROLL_ID` varchar(10) NOT NULL,
  `INPUT1` int(11) NOT NULL,
  `INPUT2` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `ROLL_ID`, `INPUT1`, `INPUT2`, `time`) VALUES
(1, 'abc', 0, 0, '2018-03-07 11:46:29'),
(2, 'abc', 0, 0, '2018-03-07 11:46:29'),
(3, 'abc', 8979, 897, '2018-03-07 11:46:29'),
(4, 'ab12', 15, 25, '2018-03-07 11:46:29'),
(5, 'ab12', 15, 25, '2018-03-07 11:46:29'),
(6, 'huj', 89, 56, '2018-03-07 11:46:29'),
(7, 'huj', 89, 56, '2018-03-07 11:46:29'),
(8, 'huj', 89, 56, '2018-03-07 11:46:29'),
(9, 'huj', 89, 56, '2018-03-07 11:46:29'),
(10, 'huj', 89, 56, '2018-03-07 11:46:29'),
(11, 'anie', 100, 565, '2018-03-07 11:46:29'),
(12, '', 0, 0, '2018-03-07 11:46:29'),
(13, '', 0, 0, '2018-03-07 11:46:29'),
(14, '', 2, 5, '2018-03-07 11:46:29'),
(15, 'ash', 2, 5, '2018-03-07 11:46:29'),
(20, 'ash', 80, 90, '2018-03-07 11:46:29'),
(21, 'ash', 80, 90, '2018-03-07 11:46:29'),
(22, 'ash', 40, 60, '2018-03-07 11:47:18'),
(23, 'ash', 40, 60, '2018-03-07 17:01:43'),
(24, 'ash', 45, 55, '2018-03-07 18:26:58'),
(25, 'ash', 4, 28, '2018-03-07 18:27:12'),
(26, 'ash', 4, 7, '2018-03-07 18:36:14'),
(27, 'ash', 4, 45, '2018-03-07 18:37:08'),
(28, '', 0, 0, '2018-03-09 11:40:10'),
(29, 'ash', 45, 55, '2018-03-09 11:41:27'),
(30, 'ash', 5, 10, '2018-03-09 11:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `sentmsg`
--

CREATE TABLE `sentmsg` (
  `id` int(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentmsg`
--

INSERT INTO `sentmsg` (`id`, `message`, `time`) VALUES
(5, 'asd', '2018-03-07 12:08:21'),
(5, 'hello', '2018-03-07 12:19:54'),
(5, 'third', '2018-03-07 12:35:01'),
(5, '1455', '2018-03-07 13:27:57'),
(5, '58585', '2018-03-07 13:28:15'),
(5, '5252', '2018-03-07 13:29:45'),
(0, '', '2018-03-07 17:00:03'),
(0, '', '2018-03-07 17:00:27'),
(5, '4545', '2018-03-07 18:13:12'),
(5, '90999', '2018-03-09 11:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `ROLL_ID` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `NAME`, `ROLL_ID`, `EMAIL`, `PASSWORD`) VALUES
(1, 'ani', 'abc', 'a@a.com', 'a'),
(2, 'anirudh', 'ab12', 'anirudh@gmail.com', 'anirudh'),
(3, 'shiva ', '12345agb', 'shiva@gmail.com', 'shiva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

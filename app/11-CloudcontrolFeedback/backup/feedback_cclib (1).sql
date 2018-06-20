-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 07:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_cclib`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `pt_id` int(5) NOT NULL,
  `feedback` int(5) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `pt_id`, `feedback`, `date_time`) VALUES
(1, 1, 1, 1, '2018-03-20 12:01:48'),
(2, 1, 1, 0, '2018-03-20 12:02:15'),
(3, 1, 1, 0, '2018-03-20 12:02:46'),
(4, 1, 2, 0, '2018-03-20 12:07:22'),
(5, 1, 2, 1, '2018-03-20 12:07:59'),
(6, 1, 3, 1, '2018-03-20 12:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `switches`
--

CREATE TABLE `switches` (
  `id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pt_id` int(10) NOT NULL,
  `sw1` int(5) NOT NULL DEFAULT '0',
  `sw2` int(5) NOT NULL DEFAULT '0',
  `sw3` int(5) NOT NULL DEFAULT '0',
  `sw4` int(5) NOT NULL DEFAULT '0',
  `sw1_pt` int(5) NOT NULL DEFAULT '1',
  `sw2_pt` int(5) NOT NULL DEFAULT '2',
  `sw3_pt` int(5) NOT NULL DEFAULT '3',
  `sw4_pt` int(5) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `switches`
--

INSERT INTO `switches` (`id`, `user_id`, `pt_id`, `sw1`, `sw2`, `sw3`, `sw4`, `sw1_pt`, `sw2_pt`, `sw3_pt`, `sw4_pt`) VALUES
(1, 1, 1, 0, 1, 1, 0, 1, 2, 1, 1),
(2, 1, 2, 1, 1, 0, 0, 4, 2, 3, 4),
(3, 1, 3, 0, 0, 0, 0, 1, 2, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switches`
--
ALTER TABLE `switches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `switches`
--
ALTER TABLE `switches`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

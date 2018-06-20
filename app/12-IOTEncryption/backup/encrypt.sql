-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 09:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encrypt`
--

-- --------------------------------------------------------

--
-- Table structure for table `decrypt`
--

CREATE TABLE `decrypt` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `data` varchar(350) NOT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decrypt`
--

INSERT INTO `decrypt` (`id`, `user_id`, `data`, `date_time`) VALUES
(1, 1, 'hihelloooooo\0\0\0\0', '2018-03-16 13:50:31'),
(2, 1, ' HI HELO HOE DW FDNKVN DN\0\0\0\0\0\0\0', '2018-03-16 13:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `encrypt`
--

CREATE TABLE `encrypt` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `data` varchar(325) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `encrypt`
--

INSERT INTO `encrypt` (`id`, `user_id`, `data`, `date_time`) VALUES
(1, 1, 'Qqw7LllB8m8U18F1OVcw6Ck04Uwn4yV9Pc8rsiQEYRM=', '2018-03-16 13:50:31'),
(2, 1, 'PTmnjt3yRT97ZZOtW/mYAkhJHiZxekNnOrw+g/FuBnK8f7pFpp2GgySG35dkYgrM', '2018-03-16 13:53:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decrypt`
--
ALTER TABLE `decrypt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encrypt`
--
ALTER TABLE `encrypt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `decrypt`
--
ALTER TABLE `decrypt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `encrypt`
--
ALTER TABLE `encrypt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 07:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alsalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `fb_icon` varchar(255) NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `tw_icon` varchar(255) NOT NULL,
  `tw_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `fb_icon`, `fb_url`, `tw_icon`, `tw_url`, `image`) VALUES
(1, 'Qasim husen', 'CTO', 'fa fa-facebook', '#', 'fa fa-twitter', '#', 'e8kyuscz3kocwgw.jpg'),
(2, 'Sheikh Hassan', 'CEO', 'fa fa-facebook', '#', 'fa fa-twitter', '#', '38muyn12k3ggs88.jpg'),
(3, 'Younis MD', 'PHP Developer', 'fa fa-facebook', '#', 'fa fa-twitter', '#', '75utyvv9mjggksc.jpg'),
(4, 'Shahid', 'PHP Developer', 'fa fa-facebook', '#', 'fa fa-twitter', '#', 'e6eahua7pgoo0kk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

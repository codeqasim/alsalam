-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 07:54 PM
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
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `icon` varchar(300) NOT NULL,
  `time` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `image`, `icon`, `time`) VALUES
(1, 'QURAN CLASS', '2wo5x51w27eo0c4.jpg', 'fa icon-book', '09:00 A.M - 03:00 P.M'),
(2, 'COUNSELLING', '4wsd89qmvc84css.jpg', 'fa icon-social', '04:00 A.M - 06:00 P.M'),
(3, 'NIKAH SERVICES', 'e1mkdu9fl7kg8s4.jpg', 'fa icon-people', '03:00 A.M - 01:00 P.M'),
(4, 'HADITH SCHOOL', '14jmszdp16sgooc.jpg', 'fa icon-islam', '07:00 A.M - 04:00 P.M'),
(5, 'FUNERAL SERVICES', 'a9gig6l2bpk48sg.jpg', 'fa icon-monuments-1', '09:00 A.M - 01:00 P.M'),
(6, 'OUR CACADEMIES', '85de3bj76h44gcw.jpg', 'fa icon-monuments', '08:00 A.M - 03:00 P.M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

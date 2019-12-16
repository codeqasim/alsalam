-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 12:55 PM
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
-- Table structure for table `module_cms_menus`
--

CREATE TABLE `module_cms_menus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `header` tinyint(1) NOT NULL,
  `footer` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_cms_menus`
--

INSERT INTO `module_cms_menus` (`id`, `name`, `slug`, `header`, `footer`, `status`, `parent_id`, `ordering`) VALUES
(1, 'Quran Audio', 'www.quranaudio.com', 1, 0, 0, 0, 1),
(2, 'Home', 'www.home.com', 1, 0, 1, 3, 3),
(3, 'Quran video', 'www.quranvideo.com', 1, 0, 0, 0, 2),
(4, 'about', 'www.about.com', 1, 0, 0, 3, 4),
(5, 'Quran video', 'www.quranvideo.com', 0, 1, 0, 0, 1),
(6, 'Quran Audio', 'www.quranaudio.com', 0, 1, 0, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_cms_menus`
--
ALTER TABLE `module_cms_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_cms_menus`
--
ALTER TABLE `module_cms_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

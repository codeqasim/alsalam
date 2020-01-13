-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 07:51 PM
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
-- Table structure for table `module_blogs`
--

CREATE TABLE `module_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_blogs`
--

INSERT INTO `module_blogs` (`id`, `title`, `description`, `image`, `category_id`, `created_at`, `slug`) VALUES
(1, 'sdfsdfs', '<p>sfsfsdfsdf</p>', 'bwcuuflsjoooso0.jpg', 1, '2019-07-24 00:00:00', '#'),
(2, 'sdfds', '<p>sdfsdf</p>', 'ay6e76lgtfs4k4w.jpg', 2, '2019-07-18 00:00:00', '#'),
(3, 'Article about hadeeth', '<p>Article about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeethArticle about hadeeth</p>', '68knqu4ge64goog.jpg', 3, '2019-12-08 19:00:00', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_blogs`
--
ALTER TABLE `module_blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_blogs`
--
ALTER TABLE `module_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

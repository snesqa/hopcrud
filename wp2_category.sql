-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql52.unoeuro.com
-- Generation Time: Apr 07, 2019 at 12:30 PM
-- Server version: 5.7.25-28-log
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snezana_dk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp2_category`
--

CREATE TABLE `wp2_category` (
  `cat_id` int(11) NOT NULL,
  `cat_type` varchar(25) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp2_category`
--

INSERT INTO `wp2_category` (`cat_id`, `cat_type`) VALUES
(40, 'Raw cakes'),
(43, 'Candy Cakes'),
(45, 'Event arrangement'),
(46, 'Raw cakes'),
(50, 'jordbÃ¦rtÃ¦rte'),
(51, 'hinbÃ¦rtÃ¦rte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp2_category`
--
ALTER TABLE `wp2_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp2_category`
--
ALTER TABLE `wp2_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

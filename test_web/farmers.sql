-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 11:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Test 123', '580 Darling Street, Rozelle, NSW', 6.926950, 79.892593, 'restaurant'),
(2, 'Young Henrys', '76 Wilford Street, Newtown, NSW', 8.469401, 80.143204, 'bar'),
(3, 'Hunter Gatherer', 'Greenwood Plaza, 36 Blue St, North Sydney NSW', 7.999142, 80.747452, 'bar'),
(4, 'The Potting Shed', '7A, 2 Huntley Street, Alexandria, NSW', 7.854964, 80.478287, 'bar'),
(5, 'Sumanasiri', 'Sumanasiri vegitables,Hoamagama', 6.849608, 79.996864, 'bar'),
(6, 'Three Blue Ducks', '43 Macpherson Street, Bronte, NSW', 6.960241, 80.124153, 'restaurant'),
(7, 'Single Origin Roasters', '60-64 Reservoir Street, Surry Hills, NSW', 6.740033, 80.863083, 'restaurant'),
(8, 'Red Lantern', '60 Riley Street, Darlinghurst, NSW', 7.110882, 81.148598, 'restaurant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

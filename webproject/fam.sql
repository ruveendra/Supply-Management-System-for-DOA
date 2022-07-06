-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 11:49 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fam`
--

-- --------------------------------------------------------

--
-- Table structure for table `famtab`
--

CREATE TABLE `famtab` (
  `Report_ID` int(10) NOT NULL,
  `Farmer_ID` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Item` varchar(25) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Image` text NOT NULL,
  `Quantity` float NOT NULL,
  `Unit_Price` float NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `famtab`
--

INSERT INTO `famtab` (`Report_ID`, `Farmer_ID`, `Title`, `Category`, `Item`, `Description`, `Image`, `Quantity`, `Unit_Price`, `Latitude`, `Longitude`, `Date`) VALUES
(1, 1111, 'carrot', 'vegitable', 'carrot', 'carrot from Kandy.', 'carrot1.jpg', 100, 80, 0, 0, '2021-01-08'),
(2, 1112, 'carrot', 'vegitable', 'carrot', 'Carrot from nuwaraeliya.', 'carrot1.jpg', 250, 85, 0, 0, '2021-01-09'),
(3, 1113, 'carrot', 'vegitable', 'carrot', 'carrot from kandy', 'carrot1.jpg', 350, 80, 0, 0, '2021-01-10'),
(4, 1114, 'apple', 'fruits', 'apple', 'green apple', 'apple.png', 400, 100, 0, 0, '2021-01-10'),
(5, 1115, 'apple', 'fruits', 'apple', 'fresh apple', 'apple.png', 250, 120, 0, 0, '2021-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `famtab`
--
ALTER TABLE `famtab`
  ADD PRIMARY KEY (`Report_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

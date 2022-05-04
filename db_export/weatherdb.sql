-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 05:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weatherdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `weatherdetails`
--

CREATE TABLE `weatherdetails` (
  `weatherID` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `dateSpecified` date NOT NULL,
  `datetime` date NOT NULL,
  `conditions` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `icon` varchar(500) NOT NULL,
  `sunrise` varchar(100) NOT NULL,
  `sunset` varchar(100) NOT NULL,
  `tempmax` int(11) NOT NULL,
  `tempmin` int(11) NOT NULL,
  `dew` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `pressure` int(11) NOT NULL,
  `windspeed` int(11) NOT NULL,
  `visibility` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weatherdetails`
--

INSERT INTO `weatherdetails` (`weatherID`, `location`, `dateSpecified`, `datetime`, `conditions`, `description`, `icon`, `sunrise`, `sunset`, `tempmax`, `tempmin`, `dew`, `humidity`, `pressure`, `windspeed`, `visibility`) VALUES
(3, 'Limerick', '2021-04-03', '2021-04-03', 'Clear', 'Clear conditions throughout the day.', 'clear-day', '07:03:39', '20:12:56', 59, 34, 37, 73, 1035, 9, 11),
(7, 'Raheen', '2022-04-02', '2022-04-02', 'Rain,', 'Partly', 'rain', '07:06:33', '20:10:46', 53, 37, 36, 74, 1026, 16, 14),
(9, 'Klare Updated', '2022-04-02', '2022-04-02', 'Snow,', 'Partly', 'rain', '07:17:44', '20:18:03', 42, 34, 26, 61, 1019, 16, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weatherdetails`
--
ALTER TABLE `weatherdetails`
  ADD PRIMARY KEY (`weatherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weatherdetails`
--
ALTER TABLE `weatherdetails`
  MODIFY `weatherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

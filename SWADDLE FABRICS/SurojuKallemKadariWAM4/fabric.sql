-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 11:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabric`
--

-- --------------------------------------------------------

--
-- Table structure for table `fabrictable`
--

CREATE TABLE `fabrictable` (
  `FabricName` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Colour` varchar(10) NOT NULL,
  `Yards` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fabrictable`
--

INSERT INTO `fabrictable` (`FabricName`, `Price`, `Colour`, `Yards`) VALUES
('Cotton', 8.99, '#ff0000', 5),
('Silk', 9.99, '#ff0000', 5),
('Cotton', 8.99, '#ff0000', 5),
('Silk', 9.99, '#ff0000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CardNumber` varchar(50) NOT NULL,
  `CVV` int(11) NOT NULL,
  `expiry` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`FirstName`, `LastName`, `CardNumber`, `CVV`, `expiry`, `amount`) VALUES
('xcvbnm,.', 'ertyuio', '987654321098765', 123, '2024-04-22', 94.401);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`CardNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

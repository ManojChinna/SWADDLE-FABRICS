-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabric`
--
CREATE DATABASE IF NOT EXISTS `fabric` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fabric`;
-- --------------------------------------------------------



CREATE TABLE paymenttable (
FirstName VARCHAR(50)  NOT NULL,
LastName VARCHAR(50) NOT NULL,
CardNumber VARCHAR(50) NOT  NULL primary key,
CVV int NOT NULL,
expiry date NOT  NULL,
amount FLOAT NOT  NULL

);

CREATE TABLE fabrictable (
FabricName VARCHAR(50)  NOT NULL,
Price float NOT NULL,
Colour VARCHAR(10) NOT  NULL,
Yards int NOT NULL
);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
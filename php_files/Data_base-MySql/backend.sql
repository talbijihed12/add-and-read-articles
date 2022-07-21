-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: july 07, 2022 at 06:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_backend`
--
CREATE TABLE `article` (
`id` int NOT NULL,
`Title` varchar(1000) NOT NULL,
`Image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
`HeaderImage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
`Introduction` mediumtext NOT NULL,
`Description` text NOT NULL,
`LastMod` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`Language` varchar(2) NOT NULL,
`KeyWords` varchar(1000) NOT NULL,
`State` int NOT NULL,
`NumVisit` int NOT NULL,
`IdTheme` int NOT NULL,
`IdUser` int NOT NULL,
`IdHost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

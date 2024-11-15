-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 01:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `involved` text NOT NULL,
  `Salutation` text NOT NULL,
  `fullName` text NOT NULL,
  `mail` text NOT NULL,
  `phone` text NOT NULL,
  `jobTitle` text NOT NULL,
  `companyName` text NOT NULL,
  `CompanyMainActivity` text NOT NULL,
  `question` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`involved`, `Salutation`, `fullName`, `mail`, `phone`, `jobTitle`, `companyName`, `CompanyMainActivity`, `question`) VALUES
('mrs.', 'mr.', 'test', 'anassaitalla@gmail.com', '0600000', 'kvjgv', 'vhkjgjg', 'jhvkj', 'khvjg'),
('Other', 'mrs.', 'lvkgj:\'', 'anassaitalla@gmail.com', '08984', 'j;ljkhl\"', 'hkvwkh', 'jcg', '\"vtehkg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 05:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`firstName`, `lastName`, `email`, `gender`, `mobile`, `dob`, `ssc`, `hsc`, `courses`, `year`, `semester`) VALUES
('shahriar', 'omi', 'shahriaromi10@gmail.com', 'male', '01707568742', '1998-11-15', '4.89', '4.71', 'cse', '2021', 'winter');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

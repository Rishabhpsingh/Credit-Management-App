-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2020 at 07:08 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `Id_num` int(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Credits` int(10) DEFAULT NULL,
  PRIMARY KEY (`Id_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Id_num`, `Name`, `Email`, `Credits`) VALUES
(1, 'Rishabh Singh', 'rishabhp.singh98@gmail.com', 567578),
(2, 'Utkarsh', 'utkarsh@gmail.com', 876756),
(3, 'Yogesh', 'yogesh@gmail.com', 86427),
(4, 'Ritesh', 'ritesh@gmail.com', 45455),
(5, 'Bansal', 'bansal@gmail.com', 87777),
(6, 'Vishal', 'vishal@gmail.com', 55433),
(7, 'Ritvik', 'ritvik@gmail.com', 99934),
(8, 'Pancham', 'pancham@gmail.com', 76767),
(9, 'Prakash', 'prakash@gmail.com', 34456),
(10, 'Prashant', 'prashant@gmail.com', 76565);

-- --------------------------------------------------------

--
-- Table structure for table `transanctions`
--

DROP TABLE IF EXISTS `transanctions`;
CREATE TABLE IF NOT EXISTS `transanctions` (
  `Sender` varchar(20) DEFAULT NULL,
  `Receiver` varchar(20) DEFAULT NULL,
  `Amount` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transanctions`
--

INSERT INTO `transanctions` (`Sender`, `Receiver`, `Amount`) VALUES
('Rishabh singh', 'Yogesh', 1000),
('Rishabh singh', 'Prakash', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

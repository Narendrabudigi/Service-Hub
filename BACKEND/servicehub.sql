-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2024 at 08:51 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u890236982_servicehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `Workerimage` varchar(250) NOT NULL,
  `workername` varchar(255) DEFAULT NULL,
  `worktype` varchar(255) DEFAULT NULL,
  `Experience` int(200) NOT NULL,
  `Minimumcharge` varchar(250) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Shoplocation` varchar(200) NOT NULL,
  `ratings` float NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`Workerimage`, `workername`, `worktype`, `Experience`, `Minimumcharge`, `Contact`, `Shoplocation`, `ratings`) VALUES
('worker-images/4fafe1e94b1e42432c2b0797b796bd143495.jpg', 'test', 'carpenter', 5, '55555', '8309377748', 'bhavani-nagar-tirupati', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

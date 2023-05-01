-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 06:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_rak1`
--

CREATE TABLE `data_rak1` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `time_in` double DEFAULT NULL,
  `time_out` double DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `aktual` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rak1`
--

INSERT INTO `data_rak1` (`id`, `kode`, `time_in`, `time_out`, `status`, `aktual`) VALUES
(4, '146G07061', 1682648206950, 1682648571476, 'off', 0),
(5, '147G08060', 2147483648, 1681878679064, 'on', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_rak1`
--
ALTER TABLE `data_rak1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_rak1`
--
ALTER TABLE `data_rak1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

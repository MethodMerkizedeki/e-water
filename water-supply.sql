-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water-supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(255) NOT NULL,
  `user_phone` bigint(15) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `units` varchar(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `last_access` varchar(255) NOT NULL,
  `user_added_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_full_name`, `user_phone`, `user_email`, `user_password`, `units`, `session_id`, `last_access`, `user_added_time`) VALUES
(11, 762227737, 'sadfsdf', 11231, 'sdsadf@sdfsdf.com', '6cc3722ad23e516c8475a45b35a7d3ca', '0', '', '', '1682240239'),
(12, 164162499, 'ethan mark', 234123, 'muniru.panya13@gmail.com', '9ef2465cee2e248aba75e11907b7013d', '-29.6', 'dseie4668ubseg12mj24huaopm', '1682489381', '1682240267'),
(13, 119236345, 'davy chande', 34324, 'davy@gmail.com', 'be4a30e33b9c1ba9732c3dea961349e9', '-10', 'coa8gnnern126avrddq97n2c0h', '1682283550', '1682248938');

-- --------------------------------------------------------

--
-- Table structure for table `water_usage`
--

CREATE TABLE `water_usage` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `water_usage` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water_usage`
--

INSERT INTO `water_usage` (`id`, `user_id`, `water_usage`, `date`) VALUES
(2, 164162499, '3', '2023-04-25'),
(3, 164162499, '5.5', '2023-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_usage`
--
ALTER TABLE `water_usage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `water_usage`
--
ALTER TABLE `water_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

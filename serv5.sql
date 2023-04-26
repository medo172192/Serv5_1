-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 11:04 PM
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
-- Database: `serv5`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) UNSIGNED NOT NULL,
  `payer_email` varchar(100) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '0',
  `amount` varchar(40) NOT NULL DEFAULT '0',
  `currency` varchar(25) NOT NULL DEFAULT 'usd',
  `status` varchar(50) NOT NULL DEFAULT '',
  `created_at` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payer_email`, `product_id`, `amount`, `currency`, `status`, `created_at`) VALUES
(1, 'sb-mgxk925789879@personal.example.com', 'UXN5ECTSLW5LQ', '100.00', 'USD', 'Completed', '2023-04-26T16:36:57Z'),
(2, 'sb-mgxk925789879@personal.example.com', '0', '0', 'usd', '', ''),
(3, 'sb-mgxk925789879@personal.example.com', 'UXN5ECTSLW5LQ', '100.00', 'USD', 'Completed', '2023-04-26T18:17:57Z'),
(4, 'sb-mgxk925789879@personal.example.com', 'UXN5ECTSLW5LQ', '100.00', 'USD', 'Completed', '2023-04-26T20:51:39Z'),
(5, 'sb-igddp25795118@personal.example.com', 'RNHA4J4B32EL2', '104.00', 'USD', 'Completed', '2023-04-26T20:58:03Z');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

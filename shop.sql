-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 07:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cu_info`
--

CREATE TABLE `cu_info` (
  `cu_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cu_info`
--

INSERT INTO `cu_info` (`cu_id`, `name`, `email`, `password`) VALUES
(2, 'Tarikul', 'tarikulsun@gmail.com', 'MTIzNDU2');

-- --------------------------------------------------------

--
-- Table structure for table `cu_order`
--

CREATE TABLE `cu_order` (
  `or_id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quentiy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `img_type` varchar(50) NOT NULL,
  `quentiy` int(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `img_name`, `img_path`, `img_type`, `quentiy`, `price`) VALUES
(1, 'tass', '84398045_2902766016428726_9214805325150945280_n.jp', '../image/84398045_2902766016428726_921480532515094', 'image/jpeg', 12, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cu_info`
--
ALTER TABLE `cu_info`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `cu_order`
--
ALTER TABLE `cu_order`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `cu_id` (`cu_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cu_info`
--
ALTER TABLE `cu_info`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cu_order`
--
ALTER TABLE `cu_order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cu_order`
--
ALTER TABLE `cu_order`
  ADD CONSTRAINT `cu_order_ibfk_1` FOREIGN KEY (`cu_id`) REFERENCES `cu_info` (`cu_id`),
  ADD CONSTRAINT `cu_order_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

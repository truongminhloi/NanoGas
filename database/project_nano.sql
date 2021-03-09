-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 10:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_nano`
--

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name`, `color`, `material`, `weight`, `price`, `visible`) VALUES
(1, 'Bếp gas mini', 'Đỏ', 'Thép', 1, '150000.00', 1),
(2, 'Bếp đôi', 'Đỏ', 'Thép', 1, '150000.00', 1),
(3, 'Bộ chén dĩa', 'Đỏ', 'Composit', 1, '150000.00', 1),
(4, 'Nước tương', 'Đỏ', 'Composit', 1, '150000.00', 1),
(5, 'Bột ngọt', 'Đỏ', 'Composit', 1, '150000.00', 1),
(6, 'Dầu ăn', 'Đỏ', 'Composit', 1, '150000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `color`, `material`, `weight`, `price`, `visible`) VALUES
(1, 'EIF gas', 'Đỏ', 'Thép', 15, '290000.00', 1),
(2, 'LP Petrol', 'Đỏ', 'Composit', 13, '320000.00', 1),
(3, 'Petrol Limex', 'Đỏ', 'Composit', 13, '320000.00', 1),
(4, 'Nam Gas', 'Đỏ', 'Composit', 13, '320000.00', 1),
(5, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, '320000.00', 1),
(6, 'Nam Gas', 'Đỏ', 'Composit', 13, '320000.00', 1),
(7, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, '320000.00', 1),
(9, 'asda', 'sadasd', 'asdasd', 0, '120000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `phone`, `visible`) VALUES
(8, 'Cửa Hàng Số 1', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 1),
(9, 'Cửa Hàng Số 1', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(4, 'truong-minh-loi', '123456', 'loitruongminhit@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

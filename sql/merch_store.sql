-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 04:31 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merch_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `small` int(10) NOT NULL DEFAULT 0,
  `medium` int(10) NOT NULL DEFAULT 0,
  `large` int(10) NOT NULL DEFAULT 0,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `description`, `product_image`, `small`, `medium`, `large`, `seller_id`) VALUES
(1, 'shoes', 1000, 'Shoes being sold', 'nike.jpg', 10, 10, 10, 2021001),
(2, 'Hoodie', 2000, 'Swag Hoodie Merchandise', 'img1.jpg', 15, 25, 5, 2021001),
(3, 'shirt', 2100, 'New shirts', 'clothes2.jpg', 3, 4, 5, 2021001),
(4, 'White Shoes', 5000, 'White shoe Merchandise', 'sneaker.png', 10, 10, 10, 2021001);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `popularsite` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `sellerimage` varchar(250) NOT NULL DEFAULT 'default-avatar.webp',
  `reg_date` date NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `username`, `email`, `phone`, `popularsite`, `password`, `sellerimage`, `reg_date`, `verified`) VALUES
(2021003, 'test', 'test@gmail.com', '+2540712345678', 'https://www.itsmarius.ninja', '098f6bcd4621d373cade4e832627b4f6', 'default-avatar.webp', '2021-04-05', 1),
(2021006, 'test2', 'test2@gmail.com', '+2540712345678', 'https://www.itsmarius.ninja', 'ad0234829205b9033196ba818f7a872b', 'default-avatar.webp', '2021-04-06', 1),
(2021008, 'test3', 'test3@gmail.com', '+2540733333333', 'https://www.itsmarius.ninja', '8ad8757baa8564dc136c1e07507f4a98', 'default-avatar.webp', '2021-04-06', 1),

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `date_registered` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `verified`, `date_registered`) VALUES
(9, 'test', 'test@gmail.com', '+2540712345678', '098f6bcd4621d373cade4e832627b4f6', 1, '2021-04-06'),
(10, 'test1', 'test1@gmail.com', '+2540712345678', '5a105e8b9d40e1329780d62ea2265d8a', 1, '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

CREATE TABLE `user_verification` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `verification_code` varchar(10) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_verification`
--
ALTER TABLE `user_verification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021010;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_verification`
--
ALTER TABLE `user_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

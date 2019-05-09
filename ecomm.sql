-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 10:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Electronics'),
(2, 'Accessories'),
(5, 'Sports'),
(6, 'watch'),
(7, 'Gym Equipments');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `date`) VALUES
(12, 21, 14, '2019-02-22 10:10:35'),
(13, 21, 3, '2019-02-22 10:10:35'),
(14, 22, 14, '2019-02-22 10:20:34'),
(15, 22, 3, '2019-02-22 10:20:34'),
(16, 23, 14, '2019-02-22 10:36:08'),
(17, 23, 3, '2019-02-22 10:36:08'),
(18, 24, 14, '2019-02-22 10:37:59'),
(19, 24, 3, '2019-02-22 10:37:59'),
(20, 25, 14, '2019-02-22 10:37:59'),
(21, 25, 3, '2019-02-22 10:37:59'),
(22, 26, 14, '2019-02-22 10:38:00'),
(23, 26, 3, '2019-02-22 10:38:00'),
(24, 27, 14, '2019-02-22 10:40:12'),
(25, 27, 3, '2019-02-22 10:40:12'),
(26, 28, 14, '2019-02-22 10:42:24'),
(27, 28, 3, '2019-02-22 10:42:24'),
(28, 29, 14, '2019-02-22 10:42:45'),
(29, 29, 3, '2019-02-22 10:42:45'),
(30, 30, 14, '2019-02-22 10:43:46'),
(31, 30, 3, '2019-02-22 10:43:46'),
(32, 31, 1, '2019-02-22 10:48:38'),
(33, 31, 4, '2019-02-22 10:48:38'),
(34, 32, 4, '2019-02-22 10:56:55'),
(35, 33, 3, '2019-02-22 10:59:49'),
(36, 34, 6, '2019-02-22 11:15:07'),
(37, 34, 14, '2019-02-22 11:15:07'),
(38, 35, 12, '2019-02-22 11:18:11'),
(39, 36, 2, '2019-02-22 11:23:00'),
(40, 37, 2, '2019-02-22 11:23:33'),
(41, 38, 4, '2019-02-22 11:26:08'),
(42, 39, 4, '2019-02-22 11:26:24'),
(43, 40, 1, '2019-02-22 11:26:50'),
(44, 41, 14, '2019-02-22 11:28:09'),
(45, 42, 6, '2019-02-22 11:29:51'),
(46, 43, 4, '2019-02-22 11:34:29'),
(47, 44, 2, '2019-02-22 11:36:35'),
(48, 45, 4, '2019-02-22 11:37:55'),
(49, 46, 1, '2019-02-22 11:42:15'),
(50, 47, 1, '2019-02-22 11:57:47'),
(51, 47, 2, '2019-02-22 11:57:47'),
(52, 48, 1, '2019-02-22 12:37:42'),
(53, 48, 16, '2019-02-22 12:37:42'),
(54, 49, 1, '2019-02-22 12:40:47'),
(55, 49, 14, '2019-02-22 12:40:47'),
(56, 49, 12, '2019-02-22 12:40:47'),
(57, 50, 1, '2019-02-22 12:41:36'),
(58, 51, 1, '2019-02-22 12:41:59'),
(59, 52, 1, '2019-02-22 12:44:18'),
(60, 52, 15, '2019-02-22 12:44:18'),
(61, 53, 1, '2019-02-22 12:47:53'),
(62, 53, 2, '2019-02-22 12:47:53'),
(63, 53, 3, '2019-02-22 12:47:53'),
(64, 53, 4, '2019-02-22 12:47:53'),
(65, 53, 5, '2019-02-22 12:47:53'),
(66, 53, 6, '2019-02-22 12:47:53'),
(67, 53, 12, '2019-02-22 12:47:53'),
(68, 53, 13, '2019-02-22 12:47:53'),
(69, 53, 14, '2019-02-22 12:47:53'),
(70, 53, 15, '2019-02-22 12:47:53'),
(71, 53, 16, '2019-02-22 12:47:53'),
(72, 54, 1, '2019-02-22 12:48:30'),
(73, 54, 2, '2019-02-22 12:48:30'),
(74, 54, 3, '2019-02-22 12:48:30'),
(75, 54, 4, '2019-02-22 12:48:30'),
(76, 54, 5, '2019-02-22 12:48:30'),
(77, 54, 6, '2019-02-22 12:48:30'),
(78, 54, 12, '2019-02-22 12:48:30'),
(79, 54, 13, '2019-02-22 12:48:30'),
(80, 54, 14, '2019-02-22 12:48:30'),
(81, 54, 15, '2019-02-22 12:48:30'),
(82, 54, 16, '2019-02-22 12:48:30'),
(83, 55, 1, '2019-02-22 12:49:17'),
(84, 55, 2, '2019-02-22 12:49:17'),
(85, 55, 3, '2019-02-22 12:49:17'),
(86, 55, 4, '2019-02-22 12:49:17'),
(87, 55, 5, '2019-02-22 12:49:17'),
(88, 55, 6, '2019-02-22 12:49:17'),
(89, 55, 12, '2019-02-22 12:49:17'),
(90, 55, 13, '2019-02-22 12:49:17'),
(91, 55, 14, '2019-02-22 12:49:17'),
(92, 55, 15, '2019-02-22 12:49:17'),
(93, 55, 16, '2019-02-22 12:49:17'),
(94, 56, 1, '2019-02-22 12:58:44'),
(95, 56, 3, '2019-02-22 12:58:44'),
(96, 56, 4, '2019-02-22 12:58:44'),
(97, 56, 2, '2019-02-22 12:58:44'),
(98, 57, 1, '2019-02-22 13:04:07'),
(99, 58, 2, '2019-02-22 13:53:50'),
(100, 58, 4, '2019-02-22 13:53:50'),
(101, 59, 4, '2019-02-22 14:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bill` double NOT NULL,
  `status` varchar(10) NOT NULL,
  `transaction_id` varchar(40) NOT NULL,
  `date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `email`, `bill`, `status`, `transaction_id`, `date`) VALUES
(45, 'emad', 'Mirbag', 'emad@emad.com', 15000, 'A', '60117038893', '2019-02-22 11:37:55'),
(46, 'emad', 'Mirbag', 'emad@emad.com', 1000, 'A', '60117039149', '2019-02-22 11:42:15'),
(48, 'emad', 'Mirbag', 'emad@emad.com', 40000, 'P', '', '2019-02-22 12:37:42'),
(49, 'emad', 'Mirbag', 'emad@emad.com', 288000, 'P', '', '2019-02-22 12:40:47'),
(50, 'emad', 'Mirbag', 'emad@emad.com', 3000, 'P', '', '2019-02-22 12:41:36'),
(51, 'emad', 'Mirbag', 'emad@emad.com', 5000, 'A', '60117040661', '2019-02-22 12:41:59'),
(52, 'emad', 'Mirbag', 'emad@emad.com', 9000, 'A', '60117040754', '2019-02-22 12:44:18'),
(53, 'emad', 'Mirbag', 'emad@emad.com', 210200, 'P', '', '2019-02-22 12:47:53'),
(54, 'emad', 'Mirbag', 'emad@emad.com', 210200, 'P', '', '2019-02-22 12:48:30'),
(55, 'emad', 'Mirbag', 'emad@emad.com', 211200, 'P', '', '2019-02-22 12:49:17'),
(56, 'emad', 'Mirbag', 'emad@emad.com', 77200, 'A', '60117041035', '2019-02-22 12:58:44'),
(57, 'emad', 'Mirbag', 'emad@emad.com', 1000, 'A', '60117041644', '2019-02-22 13:04:07'),
(58, 'emad', 'Mirbag', 'emad@emad.com', 18000, 'A', '60117042950', '2019-02-22 13:53:50'),
(59, 'emad', 'Mirbag', 'emad@emad.com', 75000, 'A', '60117043138', '2019-02-22 14:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `inventory` int(32) NOT NULL,
  `price` int(10) NOT NULL,
  `img_name` varchar(32) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` int(32) NOT NULL,
  `reviews` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `cat_id`, `inventory`, `price`, `img_name`, `description`, `rating`, `reviews`) VALUES
(1, 'watch', 'watch', 6, 0, 1000, 'watch1.jpg', 'A beautiful watch. Made in China.', 4, '4'),
(2, 'watch', 'watch', 6, 3, 500, 'watch2.jpg', 'A beautiful watch. Made in Japan.', 5, '3'),
(3, 'watch', 'watch', 6, 19, 700, 'watch3.jpg', 'Bangladeshi Watch. 10 years warranty.', 5, '5'),
(4, 'mobile', 'Electronics', 1, 10, 15000, 'mobile1.jpg', 'Smartphone that makes life easier', 5, '5'),
(5, 'mobile', 'Electronics', 1, 20, 10000, 'mobile2.jpg', 'Smartphone that makes life easier', 3, '5'),
(6, 'mobile', 'Electronics', 1, 20, 25000, 'mobile3.jpg', 'Smartphone that makes life easier', 4, '4'),
(12, 'Laptop', 'Electronics', 1, 40, 45000, 'laptop.jpg', 'New look. Great Performance.', 0, ''),
(13, 'Laptop', 'Electronics', 1, 70, 70000, 'l2.jpg', 'Gaming laptop', 0, ''),
(14, 'Drone', 'Electronics', 1, 15, 35000, 'drone2.jpg', 'Fly high and capture photos', 0, ''),
(15, 'Football', 'Sports', 5, 96, 1000, 'football.jpg', 'New Arrival.Play Hard and shoot', 0, ''),
(16, 'Bike', 'Accessories', 2, 70, 7000, 'bike2.jpg', 'Cycle the way out', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(32) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `address`, `status`) VALUES
(1, 'emad', '8a94c4f2dd83b64ee9c2a79f54aba4ba', 'emad@emad.com', 'Mirbag', 'A'),
(2, 'Admin', 'admin', 'admin@admin.com', 'Admin', 'A'),
(3, 'Emad', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'A'),
(4, 'Emad', '81dc9bdb52d04dc20036dbd8313ed055', 'emad@emad.com', 'Mirbag', 'A'),
(5, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'mirbag', 'A'),
(6, 'xyz', 'd16fb36f0911f878998c136191af705e', 'xyz@gmail.com', 'mirbag', 'A'),
(7, 'abc', '900150983cd24fb0d6963f7d28e17f72', 'abc@abc.com', 'mirbag', 'A'),
(8, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'aaa', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

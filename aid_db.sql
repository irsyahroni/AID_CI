-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `status` enum('paid','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `date`, `due_date`, `status`) VALUES
(1, '2015-01-04 05:06:50', '2015-01-05 05:06:50', 'unpaid'),
(2, '2015-01-04 05:10:20', '2015-01-05 05:10:20', 'unpaid'),
(3, '2018-11-21 19:49:20', '2018-11-22 19:49:20', 'unpaid'),
(4, '2018-11-27 20:23:28', '2018-11-28 20:23:28', 'unpaid'),
(5, '2018-11-28 09:01:18', '2018-11-29 09:01:18', 'unpaid'),
(6, '2018-11-28 14:35:42', '2018-11-29 14:35:42', 'unpaid'),
(7, '2018-11-28 15:07:15', '2018-11-29 15:07:15', 'unpaid'),
(8, '2018-11-28 15:20:44', '2018-11-29 15:20:44', 'unpaid'),
(9, '2018-11-28 15:22:48', '2018-11-29 15:22:48', 'unpaid'),
(10, '2018-11-28 15:25:55', '2018-11-29 15:25:55', 'unpaid'),
(11, '2018-11-28 15:26:21', '2018-11-29 15:26:21', 'unpaid'),
(12, '2018-11-28 15:26:31', '2018-11-29 15:26:31', 'unpaid'),
(13, '2018-11-28 15:27:14', '2018-11-29 15:27:14', 'unpaid'),
(14, '2018-11-28 15:29:49', '2018-11-29 15:29:49', 'unpaid'),
(15, '2018-11-28 15:33:50', '2018-11-29 15:33:50', 'unpaid'),
(16, '2018-11-28 15:35:24', '2018-11-29 15:35:24', 'unpaid'),
(17, '2018-11-28 15:37:16', '2018-11-29 15:37:16', 'unpaid'),
(18, '2018-11-28 15:39:03', '2018-11-29 15:39:03', 'unpaid'),
(19, '2018-11-28 15:43:41', '2018-11-29 15:43:41', 'unpaid'),
(20, '2018-11-28 15:45:15', '2018-11-29 15:45:15', 'unpaid'),
(21, '2018-11-28 15:50:59', '2018-11-29 15:50:59', 'unpaid'),
(22, '2018-11-28 15:53:10', '2018-11-29 15:53:10', 'unpaid'),
(23, '2018-11-28 15:57:11', '2018-11-29 15:57:11', 'unpaid'),
(24, '2018-11-28 15:59:03', '2018-11-29 15:59:03', 'unpaid'),
(25, '2018-11-28 15:59:59', '2018-11-29 15:59:59', 'unpaid'),
(26, '2018-11-28 16:20:40', '2018-11-29 16:20:40', 'unpaid'),
(27, '2018-11-28 16:22:48', '2018-11-29 16:22:48', 'unpaid'),
(28, '2018-11-28 16:25:24', '2018-11-29 16:25:24', 'unpaid'),
(29, '2018-11-28 16:26:52', '2018-11-29 16:26:52', 'unpaid'),
(30, '2018-11-28 16:27:55', '2018-11-29 16:27:55', 'unpaid'),
(31, '2018-11-28 16:28:19', '2018-11-29 16:28:19', 'unpaid'),
(32, '2018-11-28 17:43:02', '2018-11-29 17:43:02', 'unpaid'),
(33, '2018-11-28 17:43:22', '2018-11-29 17:43:22', 'unpaid'),
(34, '2018-11-28 17:44:01', '2018-11-29 17:44:01', 'unpaid'),
(35, '2018-11-28 17:45:06', '2018-11-29 17:45:06', 'unpaid'),
(36, '2018-11-28 17:49:55', '2018-11-29 17:49:55', 'unpaid'),
(37, '2018-11-28 17:51:39', '2018-11-29 17:51:39', 'unpaid'),
(38, '2018-11-28 17:52:00', '2018-11-29 17:52:00', 'unpaid'),
(39, '2018-11-28 17:53:27', '2018-11-29 17:53:27', 'unpaid'),
(40, '2018-11-28 17:54:40', '2018-11-29 17:54:40', 'unpaid'),
(41, '2018-11-28 17:58:03', '2018-11-29 17:58:03', 'unpaid'),
(42, '2018-11-28 18:17:12', '2018-11-29 18:17:12', 'unpaid'),
(43, '2018-11-28 18:19:09', '2018-11-29 18:19:09', 'unpaid'),
(44, '2018-11-28 18:21:26', '2018-11-29 18:21:26', 'unpaid'),
(45, '2018-11-28 21:05:21', '2018-11-29 21:05:21', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
(1, 1, 1, 'Baju', 1, 79000, ''),
(2, 1, 3, 'Topi', 1, 80000, ''),
(3, 2, 5, 'Dasi', 1, 77500, ''),
(4, 3, 2, 'Sandal Casual', 1, 35000, ''),
(5, 3, 1, 'Baju', 1, 35000, ''),
(6, 4, 2, 'Sandal Casual', 1, 35000, ''),
(7, 4, 1, 'A Black Tshirt', 1, 35000, ''),
(8, 5, 5, 'Dasi', 1, 77500, ''),
(9, 9, 2, 'Sandal Casual', 1, 35000, ''),
(10, 10, 2, 'Sandal Casual', 1, 35000, ''),
(11, 15, 1, 'A Black Tshirt', 1, 35000, ''),
(12, 16, 1, 'A Black Tshirt', 1, 35000, ''),
(13, 38, 1, 'A Black Tshirt', 1, 35000, ''),
(14, 39, 1, 'A Black Tshirt', 1, 35000, ''),
(15, 40, 1, 'A Black Tshirt', 1, 35000, ''),
(16, 41, 1, 'A Black Tshirt', 1, 35000, ''),
(17, 42, 1, 'A Black Tshirt', 1, 35000, ''),
(18, 43, 1, 'A Black Tshirt', 1, 35000, ''),
(19, 44, 2, 'Sandal Casual', 1, 35000, ''),
(20, 45, 2, 'Sandal Casual', 1, 35000, ''),
(21, 45, 3, 'Topi', 1, 80000, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(9) NOT NULL,
  `donated` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `donated`, `stock`, `image`) VALUES
(1, 'A Black Tshirt', 'Literally a black shirt, for daily uses, just dont use it when its 35 degrees outside', 35000, 10000, 5, '8.jpg'),
(2, '&quot;Myolnir&quot; T Shirt', 'Myolnir, shaken by earthquake that hit palu, decided to design this shirt so that he can done some help ', 100000, 70000, 10, '6.jpg'),
(3, 'Topi', 'Topi Casual', 80000, 20000, 12, '91qz+oNEDIL._SL1500__.jpg'),
(4, 'Sepatu', 'Sepatu Kets', 240000, 20000, 1, 'Converse-Shoes.jpg'),
(5, 'Dasi', 'Dasi Formal', 77500, 15000, 1, 'Platinum-Ties-Mens-Red-Power-Tie-Necktie-P14034714.jpg'),
(6, 'Indonesia Map Phone case', 'If You&#39;re true nationalist u need this case', 130000, 20000, 12, '1.jpg'),
(7, 'COEXIST wall sticker', 'To repel all racist talk in your home, install this sticker, proven by sum niggas', 230000, 30000, 12, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `recipient_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `street_address` text NOT NULL,
  `city` text NOT NULL,
  `postal_code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `invoice_id`, `recipient_name`, `phone_number`, `street_address`, `city`, `postal_code`) VALUES
(1, 0, 'rtdtr', 'ertre', 'tretr', 'etrert', 32543),
(2, 0, '213', '123', '123', '123', 123),
(3, 0, '213', '123', '123', '123', 123),
(4, 0, '213', '123', '123', '123', 123),
(5, 0, '', '', '', '', 0),
(6, 0, 'qwe', 'qwe', 'qwe', 'asd', 213),
(7, 0, '', '', '', '', 0),
(8, 0, 'qwe', 'qwe', 'qwe', 'qwe', 312),
(9, 0, 'das', 'asd', 'asd                                        ', 'asd', 231);

-- --------------------------------------------------------

--
-- Table structure for table `toko_sessions`
--

CREATE TABLE `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko_sessions`
--

INSERT INTO `toko_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('43ef679ba0a4762f8e927ca6288363d4', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 1544073487, ''),
('482673de07ce46613b955b7c427176de', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 1543470060, ''),
('55f52b1de581cf2aef1b988b0df94286', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 1543460027, 'a:3:{s:9:\"user_data\";s:0:\"\";s:8:\"username\";s:5:\"admin\";s:5:\"group\";s:1:\"1\";}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`) VALUES
(1, 'admin', 'admin', 1),
(2, 'bob', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko_sessions`
--
ALTER TABLE `toko_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

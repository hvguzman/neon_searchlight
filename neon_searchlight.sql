-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 10:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neon_searchlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'Runs'),
(2, 'Kicks');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL DEFAULT 'info_withheld',
  `lastName` varchar(50) NOT NULL DEFAULT 'info_withheld',
  `birthday` date NOT NULL,
  `city` varchar(50) NOT NULL DEFAULT 'info_withheld',
  `lawEnf` smallint(1) NOT NULL COMMENT '1 = yes, 0 = no',
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `birthday`, `city`, `lawEnf`, `users_id`) VALUES
(1, 'Hannah', 'Guzman', '1994-08-18', 'Caloocan', 0, 1),
(5, 'USER2', 'ANON', '0000-00-00', 'Makati', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`date`, `name`, `email`, `message`) VALUES
('2017-10-19 11:31:23.321266', 'curious cat', 'curiouscat@gmail.com', ''),
('2017-10-19 11:33:14.225201', 'anon_anon', 'anon_anon@yahoo.com', 'Where is the next run?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_users` varchar(50) NOT NULL,
  `products_id` varchar(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `ordersQty` int(11) NOT NULL,
  `timeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_users`, `products_id`, `productName`, `ordersQty`, `timeStamp`) VALUES
(1, 'police', '3', 'hide', 1, '2017-10-20 07:01:52.726912'),
(41, 'police', '3', 'hide', 1, '2017-10-20 07:01:56.550489'),
(42, 'police', '4', 'night_watch', 3, '2017-10-20 07:01:46.943541'),
(43, 'hannah', '6', 'C8H10N4O2_rush', 1, '2017-10-20 06:55:08.168346'),
(44, 'hannah', '6', 'C8H10N4O2_rush', 1, '2017-10-20 07:00:52.745056'),
(45, 'hannah', '6', 'C8H10N4O2_rush', 1, '2017-10-20 07:00:59.446225'),
(46, 'hannah', '6', 'C8H10N4O2_rush', 1, '2017-10-20 07:01:02.006817'),
(47, 'hannah', '6', 'C8H10N4O2_rush', 1, '2017-10-20 07:01:03.295352'),
(48, 'hannah', '1', 'riot', 1, '2017-10-20 07:01:58.927912'),
(49, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:06.021593'),
(50, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:07.021914'),
(51, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:09.631212'),
(52, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:11.021491'),
(53, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:12.469104'),
(54, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:15.726152'),
(55, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:16.855271'),
(56, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:18.711958'),
(57, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:20.630564'),
(58, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:21.856128'),
(59, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:01:25.255693'),
(60, 'user2', '4', 'night_watch', 1, '2017-10-20 07:02:11.399791'),
(61, 'user2', '4', 'night_watch', 1, '2017-10-20 07:02:15.081340'),
(62, 'user2', '6', 'C8H10N4O2_rush', 2, '2017-10-20 07:02:17.174744'),
(63, 'user2', '4', 'night_watch', 1, '2017-10-20 07:02:21.847578'),
(64, 'user2', '4', 'night_watch', 1, '2017-10-20 07:02:25.815900'),
(65, 'user2', '6', '', 2, '2017-10-20 05:31:57.857312'),
(66, 'user2', '4', '', 1, '2017-10-20 05:31:57.894632'),
(67, 'user2', '1', '', 1, '2017-10-20 05:31:57.919223'),
(68, 'user2', '1', '', 1, '2017-10-20 05:31:57.955461'),
(69, 'user2', '6', '', 2, '2017-10-20 05:32:11.203967'),
(70, 'user2', '4', '', 1, '2017-10-20 05:32:11.235568'),
(71, 'user2', '1', '', 1, '2017-10-20 05:32:11.268482'),
(72, 'user2', '1', '', 1, '2017-10-20 05:32:11.304598'),
(73, 'guest', '1', '', 2, '2017-10-20 08:33:23.998288'),
(74, 'guest', '1', '', 2, '2017-10-20 08:33:24.059328');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImg` varchar(100) NOT NULL,
  `productImg2` varchar(50) NOT NULL,
  `productImg3` varchar(50) NOT NULL,
  `productImg4` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDesc` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `productQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productImg`, `productImg2`, `productImg3`, `productImg4`, `productPrice`, `productDesc`, `category_id`, `productQty`) VALUES
(1, 'riot', 'img/yellow.jpg', 'img/riot.jpg', 'img/riot2.jpg', '', 500, 'The basic package.', 2, 5),
(2, 'siren', 'img/red.jpg', 'img/red2.jpg', 'img/red3.jpg', '', 900, 'Red as red can be.', 2, 8),
(3, 'hide', 'img/stepsup.jpg', 'img/hide2.jpg', 'img/hide.jpg', 'img/hide3.jpg', 1500, 'Don\'t slow down.', 2, 9),
(4, 'night_watch', 'img/city.jpg', 'img/shadowgirl.jpg', '', '', 3000, 'We\'ll show you the best places to hide when the riot squad comes after you.', 1, 5),
(5, 'synesthesia', 'img/neonguitar.jpg', 'img/concert.jpg', '', '', 3000, 'Taste the sounds and feel the lights.', 1, 4),
(6, 'C8H10N4O2_rush', 'img/cafemouth.jpg', 'img/croissant.jpg', '', '', 4500, 'Looking for a caffeine rush? We\'ll show you the best places to grab a cuppa, at night, of course.', 1, 3),
(7, 'widewalls', 'img/graffitti.jpg', 'img/graffitti2.jpg', '', '', 2000, 'Tired of museums? There\'s plenty of art to be had in the streets. We\'ll show you just where to look.', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'admin'),
(5, 'user2', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productName` (`productName`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `productName` (`productName`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

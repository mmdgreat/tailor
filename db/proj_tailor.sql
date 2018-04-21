-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2018 at 12:09 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `email`, `address`, `created`, `modified`) VALUES
(1, 'Mrunal', '9096805292', 'mmdgreat@gmail.com', 'test', '2018-03-04 00:00:00', '2018-03-04 00:00:00'),
(2, 'Test', '5555555555', 'mm@gmail.com', 'rrrtttrrere', '2018-03-05 23:25:00', '2018-03-05 23:25:00'),
(3, 'eee', '33333', 'dd@fd.com', 'edihdfidf', '2018-03-06 00:02:35', '2018-03-06 00:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE `dresses` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `default_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id`, `type`, `default_price`) VALUES
(1, 'Dress 1', '200.00'),
(2, 'Dress 2', '300.00');

-- --------------------------------------------------------

--
-- Table structure for table `dresses_mesurements`
--

CREATE TABLE `dresses_mesurements` (
  `id` int(11) NOT NULL,
  `dress_id` int(11) NOT NULL,
  `mesurement_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dresses_mesurements`
--

INSERT INTO `dresses_mesurements` (`id`, `dress_id`, `mesurement_id`, `remark`) VALUES
(1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `mesurements`
--

CREATE TABLE `mesurements` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesurements`
--

INSERT INTO `mesurements` (`id`, `type`) VALUES
(1, 'Height'),
(2, 'Shoulder');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `dress_id` int(11) NOT NULL,
  `remarks` text,
  `mesurements` text,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_date` datetime DEFAULT NULL,
  `tailor_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tailor_assigned` datetime NOT NULL,
  `tailor_price` decimal(10,2) DEFAULT NULL,
  `advance_amount` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `mobile`, `email`, `role`, `created`, `modified`) VALUES
(1, 'tailor', 'mrunal', 'Mrunal', 'Dadhi', '1111111111', 'mmdgreat@gmail.com', 1, '2018-01-28 16:14:41', '2018-01-28 16:14:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dresses`
--
ALTER TABLE `dresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dresses_mesurements`
--
ALTER TABLE `dresses_mesurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesurements`
--
ALTER TABLE `mesurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dresses`
--
ALTER TABLE `dresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dresses_mesurements`
--
ALTER TABLE `dresses_mesurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mesurements`
--
ALTER TABLE `mesurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

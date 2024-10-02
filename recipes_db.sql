-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2024 at 09:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodysCart_tb`
--

CREATE TABLE `foodysCart_tb` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodys_tb`
--

CREATE TABLE `foodys_tb` (
  `food_id` int(10) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodys_tb`
--

INSERT INTO `foodys_tb` (`food_id`, `food_type`, `food_name`, `food_description`, `food_price`, `image_name`) VALUES
(69, 'lunch', 'Spaghetti & Ground Beef Sauce', '', '6000', '158140-Spaghetti-sauce-with-ground-beef-DDMFS-4x3-ce598bcb0b304eed966c81f95e24d57b-removebg-preview (2).png'),
(70, 'lunch', 'Yam and egg sauce', '', '3500', 'yam-egg-removebg-preview.png'),
(71, 'dessert', 'Carrot Cake', '', '2000', 'carrot-cake-removebg-preview.png'),
(72, 'dessert', 'Berry Pie', '', '3500', 'pie-removebg-preview.png'),
(73, 'dinner', 'Beef Stew', '', '3200', 'beef-stew-removebg-preview.png'),
(74, 'dinner', 'Braised Beef & Potatoes', '', '6500', 'beef_potato-removebg-preview.png'),
(75, 'drink', 'Toronto Cocktail', '', '7000', 'toronto-cocktail-removebg-preview.png'),
(76, 'drink', 'Strawberry Soda', '', '5000', 'strawberry-soda-removebg-preview.png'),
(77, 'dessert', 'puff-puff', '', '500', 'puff-puff-removebg-preview.png'),
(78, 'drink', 'Boba Tea', '', '5000', 'boba-tea-removebg-preview.png'),
(83, 'breakfast', 'Jollof Rice', 'Jollof rice and Chicken.', '5000', 'french-toast-removebg-preview.png'),
(84, 'lunch', 'Jollof Rice', '', '8000', 'french-toast-removebg-preview.png'),
(86, 'breakfast', 'Spaghetti & Ground Beef Sauce', '', '7000', '158140-Spaghetti-sauce-with-ground-beef-DDMFS-4x3-ce598bcb0b304eed966c81f95e24d57b-removebg-preview (2).png'),
(87, '', '', '', '', ''),
(88, 'breakfast', 'Jollof Rice', 'Jollof rice and Chicken.', '6000', 'jollof-rice.png'),
(89, 'breakfast', 'Jollof Rice', 'Jollof rice and Chicken.', '6000', 'jollof-rice.png');

-- --------------------------------------------------------

--
-- Table structure for table `receipts_tb`
--

CREATE TABLE `receipts_tb` (
  `receipt_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `food_price` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipts_tb`
--

INSERT INTO `receipts_tb` (`receipt_id`, `user_id`, `food_name`, `quantity`, `food_price`, `total_price`, `order_date`) VALUES
(29, '1', 'Spaghetti & Ground Beef Sauce', '1', '7000', '7000', '2024-09-30 16:10:52'),
(30, '1', 'Braised Beef & Potatoes', '1', '6500', '6500', '2024-09-30 16:10:52'),
(31, '1', 'Jollof Rice', '1', '8000', '8000', '2024-09-30 16:10:52'),
(32, '1', 'Spaghetti & Ground Beef Sauce', '1', '7000', '7000', '2024-09-30 16:15:13'),
(33, '1', 'Jollof Rice', '1', '6000', '6000', '2024-09-30 16:15:13'),
(34, '1', 'Jollof Rice', '1', '6000', '6000', '2024-09-30 16:15:49'),
(35, '1', 'Jollof Rice', '1', '6000', '6000', '2024-09-30 16:16:13'),
(36, '1727715558', 'Spaghetti & Ground Beef Sauce', '1', '7000', '7000', '2024-09-30 16:59:18'),
(37, '1727715558', 'Jollof Rice', '1', '5000', '5000', '2024-09-30 16:59:18'),
(38, '1727724440', 'Jollof Rice', '1', '6000', '6000', '2024-09-30 19:27:20'),
(39, '1727724440', 'Spaghetti & Ground Beef Sauce', '1', '7000', '7000', '2024-09-30 19:27:20'),
(40, '1727724440', 'Braised Beef & Potatoes', '3', '6500', '19500', '2024-09-30 19:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `username`, `f_name`, `l_name`, `password`, `confirm_password`, `email`, `date_created`) VALUES
(1, 'John', 'John', 'Doe', '1234', '1234', 'lomeezehi@gmail.com', '2024-09-22 19:49:44'),
(6, 'Lome', 'Lome', 'Ezehi ', 'oseijoyalome2', 'oseijoyalome2', '', '2024-09-25 11:33:26'),
(7, 'Justin', 'Justin', 'Orna', '1234', '1234', 'justin@gmail.com', '2024-09-23 14:55:49'),
(8, 'Sage', '', '', '1234', '1234', '', '2024-09-23 14:59:59'),
(9, 'Sage', '', '', '1234', '1234', '', '2024-09-23 15:01:53'),
(10, 'Angelo', 'Angelo', 'Ezehi ', '1234', '1234', 'angelomcdonald@gmail.com', '2024-09-23 15:52:48'),
(11, 'Lome', '', '', '1234', '1234', '', '2024-09-24 09:50:45'),
(12, 'Lome', '', '', 'oseijoyalome2', 'oseijoyalome2', 'lomeezehi@gmail.com', '2024-09-25 23:33:02'),
(13, 'Lome', '', '', 'oseijoyalome2', 'oseijoyalome2', 'lomeezehi@gmail.com', '2024-09-25 23:34:12'),
(14, 'Lome', '', '', 'oseijoyalome2', 'oseijoyalome2', 'lomeezehi@gmail.com', '2024-09-25 23:35:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodysCart_tb`
--
ALTER TABLE `foodysCart_tb`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `foodys_tb`
--
ALTER TABLE `foodys_tb`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `receipts_tb`
--
ALTER TABLE `receipts_tb`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodysCart_tb`
--
ALTER TABLE `foodysCart_tb`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `foodys_tb`
--
ALTER TABLE `foodys_tb`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `receipts_tb`
--
ALTER TABLE `receipts_tb`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

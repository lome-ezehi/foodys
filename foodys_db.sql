-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2024 at 11:09 AM
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
-- Database: `foodys_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodysCart_tb`
--

CREATE TABLE `foodysCart_tb` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodysCart_tb`
--

INSERT INTO `foodysCart_tb` (`food_id`, `food_name`, `food_price`, `quantity`, `order_id`) VALUES
(209, 'Waffle House Breakfast Wannabe', 1000, 1, 96),
(210, 'Chorizo Breakfast Bowls', 4000, 1, 94),
(211, 'Fruity Mini Pancake Skewers', 1000, 1, 97);

-- --------------------------------------------------------

--
-- Table structure for table `foodys_tb`
--

CREATE TABLE `foodys_tb` (
  `food_id` int(10) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(10) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodys_tb`
--

INSERT INTO `foodys_tb` (`food_id`, `food_type`, `food_name`, `food_description`, `food_price`, `image_name`) VALUES
(69, 'lunch', 'Spaghetti & Ground Beef Sauce', '', 6000, '158140-Spaghetti-sauce-with-ground-beef-DDMFS-4x3-ce598bcb0b304eed966c81f95e24d57b-removebg-preview (2).png'),
(70, 'lunch', 'Yam and egg sauce', '', 3500, 'yam-egg.png'),
(71, 'dessert', 'Carrot Cake', '', 2000, 'carrot-cake-removebg-preview.png'),
(73, 'dinner', 'Pounded Yam and Egusi soup.', '', 4000, 'p-yam.png'),
(74, 'dinner', 'Braised Beef & Potatoes', '', 6500, 'beef_potato-removebg-preview.png'),
(77, 'dessert', 'puff-puff', '', 500, 'puff-puff-removebg-preview.png'),
(78, 'drink', 'Boba Tea', '', 5000, 'boba-tea-removebg-preview.png'),
(92, 'lunch', 'Jollof Rice and Chicken.', 'Jollof rice with deliciously deep fried Chicken on the side.', 3800, 'jollof-rice.png'),
(94, 'breakfast', 'Chorizo Breakfast Bowls', '', 4000, 'bgremover.png'),
(96, 'breakfast', 'Waffle House Breakfast Wannabe', 'Waffles', 1000, 'waffles.png'),
(97, 'breakfast', 'Fruity Mini Pancake Skewers', 'Pancakes', 1000, 'fruity-pancake.png'),
(98, 'lunch', 'Rice and Ofada stew', 'Rice and ofada', 4500, 'rice-ofada.png'),
(99, 'drink', 'Strawberry Lemonade', 'Strawberry lemonade', 4500, 'strawberry-lemonade.png'),
(100, 'breakfast', 'Dutch Pancakes', 'Pancakes', 1000, 'dutch-pancakes-removebg-preview.png'),
(101, 'dessert', 'Roasted Salmon with Curry Leaf Butter', 'Roasted Salmon with Curry Leaf Butter.', 4550, 'curry-leaf.png'),
(102, 'dessert', 'Pork and Prawn Wontons', 'Pork and Prawn Wontons', 1500, 'Pork-and-Prawn-Wontons-removebg-preview.png'),
(103, 'drink', 'Piña Colada Kale Smoothie', 'Piña Colada Kale Smoothie', 3000, 'Apple-Pie-Kale-Smoothie-removebg-preview.png'),
(104, 'drink', 'Carrot, Pineapple & Coconut Smoothie', 'Carrot, Pineapple & Coconut Smoothie', 4700, 'carrot-pineapple-and-coconut-smoothie-removebg-preview.png'),
(105, 'lunch', 'Pulled Aubergine Ragu (Eggplant Ragu)', 'Pulled Aubergine Ragu (Eggplant Ragu)', 3800, 'pulled-aubergine-ragu-removebg-preview.png'),
(106, 'dinner', 'Vegan Butternut Squash and Chickpea Tagine', 'Vegan Butternut Squash and Chickpea Tagine', 5000, 'Vegan-Butternut-Squash-and-Chickpea-Tagine-removebg-preview.png'),
(107, 'dinner', 'Beef & Bacon Stew', 'Beef & Bacon Stew', 2500, 'Beef-and-Bacon-Stew-removebg-preview.png'),
(108, 'breakfast', 'Sticky Harissa Courgette Flatbreads (Zucchini)', 'Sticky Harissa Courgette Flatbreads (Zucchini)', 6000, 'sticky-harissa-courgette-flatbreads-2-removebg-preview.png');

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
(61, '1728540657', 'Waffle House Breakfast Wannabe', '1', '1000', '1000', '2024-10-10 06:10:57'),
(62, '1728540657', 'Sticky Harissa Courgette Flatbreads (Zucchini)', '1', '6000', '6000', '2024-10-10 06:10:57'),
(63, '1728915487', 'Waffle House Breakfast Wannabe', '1', '1000', '1000', '2024-10-14 14:18:07'),
(64, '1728915487', 'Waffle House Breakfast Wannabe', '1', '1000', '1000', '2024-10-14 14:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_tb`
--

CREATE TABLE `recipe_tb` (
  `recipe_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `recipe_type` varchar(255) NOT NULL,
  `recipe_description` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_tb`
--

INSERT INTO `recipe_tb` (`recipe_id`, `email`, `recipe_name`, `recipe_type`, `recipe_description`, `image_name`, `created_at`) VALUES
(17, 'lomeezehi@gmail.com', 'Chips', 'cake', 'chips', 'Unknown-4.jpg', '2024-09-24 07:30:23'),
(18, '', '', 'cake', '', '', '2024-09-24 07:42:10'),
(19, '', '', 'cake', '', '', '2024-09-24 07:42:42'),
(20, '', '', 'cake', '', '', '2024-10-03 11:28:14');

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
(6, 'Lome', 'Lome', 'Ezehi ', 'oseijoyalome2', 'oseijoyalome2', 'lomeezehi@gmail.com ', '2024-10-03 07:52:46'),
(7, 'Justin', 'Justin', 'Orna', '1234', '1234', 'justin@gmail.com', '2024-09-23 14:55:49'),
(15, 'Angelo', 'Angelo', 'Ezehi ', 'baldme', 'baldme', 'angelomcdonald@gmail.com', '2024-10-06 18:43:00'),
(16, 'Victor', 'Victor', 'Ezehi ', '123456Vi.', '123456Vi.', 'ezehivictor2@gmail.com', '2024-10-06 18:53:42'),
(17, 'Busayomi', 'Favour', 'Abass', 'ilovetheddy', 'ilovetheddy', 'busayo@gmail.com', '2024-10-07 07:56:19'),
(18, 'dubem', 'chidubem', 'chukwu', 'wisdom1234', 'wisdom1234', 'collinschukwu32@gmail.com', '2024-10-13 10:14:57'),
(19, 'lomeezehi@gmail.com', 'e', 'e', 'lome', 'lome', '', '2024-10-14 14:49:01');

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
-- Indexes for table `recipe_tb`
--
ALTER TABLE `recipe_tb`
  ADD PRIMARY KEY (`recipe_id`);

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
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `foodys_tb`
--
ALTER TABLE `foodys_tb`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `receipts_tb`
--
ALTER TABLE `receipts_tb`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `recipe_tb`
--
ALTER TABLE `recipe_tb`
  MODIFY `recipe_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

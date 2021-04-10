-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baker-st`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

--
-- Dumping data for table `category`
--

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_category` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `category`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'cake', 'Red Velvet', 449.00, './assets/Inventory/Cakes/red_velvet.jpeg', NOW()), -- NOW()
(2, 'cake', 'Carrot Cake', 299.00, './assets/Inventory/Cakes/', NOW()),
(3, 'cake', 'Yellow Butter Cake', 349.00, './assets/products/3.png', NOW()),
(4, 'cake', 'Sponge Cake', 299.00, './assets/products/4.png', NOW()),
(5, 'cake', 'Genoise Cake', 499.00, './assets/products/5.png', NOW()),
(6, 'cake', 'Cheese Cake', 399.00, './assets/products/6.png', NOW()),
(7, 'cake', 'Black Forest', 349.00, './assets/products/8.png', NOW()),
(8, 'cake', 'Chocolate Cake', 299.00, './assets/products/10.png', NOW()),
(9, 'cake', 'Vanilla Cake', 299.00, './assets/products/11.png', NOW()),
(10, 'cake', 'Butterscotch Cake', 299.00, './assets/products/12.png', NOW()),
(11, 'cake', 'Chiffon Cake', 299.00, './assets/products/13.png', NOW()),
(12, 'bread', 'White Bread', 49.00, './assets/products/14.png', NOW()),
(13, 'bread', 'Banana Bread', 75.00, './assets/products/15.png', NOW());
(14, 'bread', 'Baguette', 99.00, './assets/products/15.png', NOW());
(15, 'bread', 'Bread Sticks', 49.00, './assets/products/15.png', NOW());
(16, 'bread', 'Focaccia', 99.00, './assets/products/15.png', NOW());
(17, 'bread', 'Multigrain Bread', 75.00, './assets/products/15.png', NOW());
(18, 'bread', 'Rye Bread', 75.00, './assets/products/15.png', NOW());
(19, 'bread', 'Sourdough Bread', 75.00, './assets/products/15.png', NOW());
(20, 'bread', 'Fruit Bread', 99.00, './assets/products/15.png', NOW());
(21, 'muffin', 'Blueberry Muffin', 199.00, './assets/products/15.png', NOW());
(22, 'muffin', 'Chocolate Chip Muffin', 149.00, './assets/products/15.png', NOW());
(23, 'muffin', 'Banana Muffin', 149.00, './assets/products/15.png', NOW());
(24, 'muffin', 'Raspberry Muffin', 199.00, './assets/products/15.png', NOW());
(25, 'muffin', 'Strawberry Muffin', 199.00, './assets/products/15.png', NOW());
(26, 'cookie', 'Chocolate Chip Cookies', 299.00, './assets/products/15.png', NOW());
(27, 'cookie', 'Oatmeal Raisin Cookies', 299.00, './assets/products/15.png', NOW());
(28, 'cookie', 'Peanut Butter Cookies', 199.00, './assets/products/15.png', NOW());
(29, 'cookie', 'Butter Cookies', 199.00, './assets/products/15.png', NOW());
(30, 'cookie', 'Gingerbread Cookies', 299.00, './assets/products/15.png', NOW());
(31, 'cookie', 'Macarons', 299.00, './assets/products/15.png', NOW());
(32, 'brownie', 'Chocolate Brownie', 499.00, './assets/products/15.png', NOW());
(33, 'brownie', 'Peanut Butter Brownie', 649.00, './assets/products/15.png', NOW());
(34, 'brownie', 'Nutella Brownie', 649.00, './assets/products/15.png', NOW());
(35, 'brownie', 'Cream Cheese Brownie', 699.00, './assets/products/15.png', NOW());
(36, 'pie', 'Apple Pie', 499.00, './assets/products/15.png', NOW());
(37, 'pie', 'Cherry Pie', 449.00, './assets/products/15.png', NOW());
(38, 'pie', 'Sugar Cream Pie', 449.00, './assets/products/15.png', NOW());
(39, 'pie', 'Lemon Meringue Pie', 399.00, './assets/products/15.png', NOW());
(40, 'pie', 'Mixed Berry Pie', 599.00, './assets/products/15.png', NOW());
(41, 'other', 'Croissant', 249.00, './assets/products/15.png', NOW());
(42, 'other', 'Pretzel', 249.00, './assets/products/15.png', NOW());
(43, 'other', 'Assorted Box of Donut', 599.00, './assets/products/15.png', NOW());
(44, 'other', 'Assorted Box of Handmade Chocolates', 749.00, './assets/products/15.png', NOW());
(45, 'other', 'Choco Lava Cake', 199.00, './assets/products/15.png', NOW());
(46, 'other', 'Cinnamon Rolls', 199.00, './assets/products/15.png', NOW());
(47, 'other', 'Chef Special Brownies ¯\_(ツ)_/¯', 999.00, './assets/products/15.png', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Noel', 'Surin', NOW()),
(2, 'Neha', 'Singh', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
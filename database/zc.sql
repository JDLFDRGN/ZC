-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 02:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUsername` varchar(250) NOT NULL,
  `adminPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `qty`) VALUES
(479, 11, 50, 1),
(480, 10, 50, 1),
(533, 15, 54, 1),
(534, 13, 54, 1),
(609, 19, 60, 1),
(610, 40, 60, 1),
(613, 13, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_ID` int(11) NOT NULL,
  `categories` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_ID`, `categories`) VALUES
(1, 'Blouse'),
(2, 'Crop Top'),
(3, 'Sweater/Jacket'),
(4, 'Tube top'),
(5, 'Pants/Trousers'),
(6, 'Shorts'),
(7, 'Skirts'),
(8, 'Shirt'),
(9, 'Dress'),
(12, 'Swim Suits');

-- --------------------------------------------------------

--
-- Table structure for table `closet`
--

CREATE TABLE `closet` (
  `closetID` int(11) NOT NULL,
  `closetImage` varchar(250) NOT NULL,
  `closetName` varchar(250) NOT NULL,
  `closetCategory` int(20) NOT NULL,
  `closetStock` varchar(250) NOT NULL,
  `closetDescription` varchar(250) NOT NULL,
  `closetPrice` float NOT NULL,
  `closetStatus` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `closet`
--

INSERT INTO `closet` (`closetID`, `closetImage`, `closetName`, `closetCategory`, `closetStock`, `closetDescription`, `closetPrice`, `closetStatus`) VALUES
(9, 'aa.jpg', 'Outfit (27)', 3, '3', '1 BuFashion for Lorem ipsum dolor si', 500, 0),
(10, 'i.jpg', 'Outfit (21)', 1, '0', '2 LitFashion for Lorem ipsum dolor si', 600, 0),
(11, 'c.jpg', 'Outfit (22)', 10, '0', 'PansFashion for Lorem ipsum dolor si', 850, 0),
(12, 'd.jpg', 'Outfit (20)', 9, '0', 'GrahFashion for Lorem ipsum dolor si', 500, 0),
(13, 'e.jpg', 'Outfit (19)', 8, '0', 'SiniFashion for Lorem ipsum dolor si', 700, 0),
(14, 'f.jpg', 'Outfit (18)', 7, '0', 'PinakbeFashion for Lorem ipsum dolor si', 400, 0),
(15, 'g.jpg', 'Outfit (17)', 7, '1', 'TakoFashion for Lorem ipsum dolor si', 500, 0),
(16, 'h.jpg', 'Outfit (16)', 6, '0', 'SizzlFashion for Lorem ipsum dolor si', 300, 0),
(17, 'b.jpg', 'Outfit (15)', 5, '0', 'ChFashion for Lorem ipsum dolor si', 600, 0),
(18, 'j.jpg', 'Outfit (14)', 4, '0', 'HoliFashion for Lorem ipsum dolor si', 500, 0),
(19, 'k.jpg', 'Outfit (13)', 3, '2', 'goFashion for Lorem ipsum dolor si', 600, 0),
(20, 'l.jpg', 'Outfit (12)', 2, '4', 'An iFashion for Lorem ipsum dolor si', 1000, 0),
(21, 'm.jpg', 'Outfit (28)', 1, '1', '1.Fashion for Lorem ipsum dolor si', 500, 1),
(22, 'n.jpg', 'Outfit (11)', 10, '4', 'FiliFashion for Lorem ipsum dolor si', 850, 0),
(23, 'o.jpg', 'Outfit (10)', 9, '0', 'StraFashion for Lorem ipsum dolor si', 500, 0),
(24, 'p.jpg', 'Outfit (09)', 8, '2', 'AdFashion for Lorem ipsum dolor si', 160, 1),
(25, 'q.jpg', 'Outfit (08)', 7, '0', 'GiniFashion for Lorem ipsum dolor si', 600, 0),
(26, 'r.jpg', 'Outfit (07)', 6, '0', 'NilFashion for LakoFashion for orem ipsum dolor si', 800, 0),
(27, 's.jpg', 'Outfit (06)', 5, '8', 'A salaFashion for Lorem ipsum dolor si', 600, 1),
(28, 't.jpg', 'Outfit (05)', 2, '3', 'KapeFashion for Lorem ipsum dolor si', 450, 1),
(29, 'u.jpg', 'Outfit (04)', 6, '4', 'Fashion for Lorem ipsum dolor si', 700, 0),
(30, 'v.jpg', 'Outfit (03)', 6, '1', 'Fashion for Lorem ipsum dolor si', 800, 0),
(33, 'w.jpg', 'Outfit (02)', 6, '9', 'Fashion for Lorem ipsum dolor si', 1000, 0),
(34, 'x.jpg', 'Outfit (01)', 4, '1', 'Lorem ipsum dolor Fashion for Fashion for ', 500, 0),
(35, 'y.jpg', 'Outfit (23) ', 1, '1', 'Lorem ipsum dolor si si la feisi a feisi  a feisi ', 300, 0),
(40, 'fttcs.jpg', 'Outfit (28) ', 3, '-8', 'try ged asda sd das da sd', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `customerImage` varchar(250) NOT NULL,
  `customerName` varchar(250) NOT NULL,
  `customerContact` varchar(250) NOT NULL,
  `customerAddress` varchar(250) NOT NULL,
  `customerEmail` varchar(250) NOT NULL,
  `customerUsername` varchar(250) NOT NULL,
  `customerPassword` varchar(250) NOT NULL,
  `customerStatus` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerImage`, `customerName`, `customerContact`, `customerAddress`, `customerEmail`, `customerUsername`, `customerPassword`, `customerStatus`) VALUES
(2, 'default.png', 'Usain Bolt', '09983984983', 'Mars', 'usain@gmail.com', 'usain', 'de28d42581fefc60e4d723122638ff3f', 0),
(3, 'default.png', 'dwayne johnson', '', '', '', 'dwayne', 'd20117ac3697491a958bb1fb08b8cad3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `ID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `percentage` decimal(10,2) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `discountStatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`ID`, `code`, `customer_id`, `percentage`, `expiration`, `discountStatus`) VALUES
(1, '9090', 0, '90.00', '2022-11-10', 1),
(2, '50off', 3, '90.00', '2022-11-18', 0),
(3, '60off', 2, '90.00', '2022-11-19', 0),
(5, '', 0, '0.00', '', 1),
(6, '80off', 3, '80.00', '2022-11-30', 1),
(7, 'hoho', 2, '70.00', '2022-11-26', 1),
(8, 'expired', 3, '80.00', '2022-11-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(11) NOT NULL,
  `user_id` int(250) NOT NULL,
  `total_amount` float NOT NULL,
  `payment_option` varchar(250) NOT NULL,
  `date_time_bought` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`order_id`, `user_id`, `total_amount`, `payment_option`, `date_time_bought`, `order_status`) VALUES
(2, 2, 500, 'Cash On Delivery', '2022-11-22 23:43:36', 'Cancel'),
(3, 2, 600, 'Cash On Delivery', '2022-11-22 23:43:39', 'Cancel'),
(4, 2, 500, 'Cash On Delivery', '2022-11-22 23:43:41', 'Cancel'),
(5, 2, 600, 'Cash On Delivery', '2022-11-22 23:43:43', 'Cancel'),
(6, 2, 700, 'G-Cash', '2022-11-22 23:43:45', 'Cancel'),
(7, 2, 500, 'G-Cash', '2022-11-22 23:43:48', 'Cancel'),
(8, 2, 700, 'G-Cash', '2022-11-22 23:43:50', 'Cancel'),
(9, 2, 700, 'G-Cash', '2022-11-22 23:43:53', 'Cancel'),
(10, 2, 500, 'G-Cash', '2022-11-22 23:43:59', 'Cancel'),
(11, 2, 700, 'G-Cash', '2022-11-22 23:44:01', 'Cancel'),
(12, 2, 400, 'G-Cash', '2022-11-22 23:44:03', 'Cancel'),
(13, 2, 400, 'G-Cash', '2022-11-22 23:44:05', 'Cancel'),
(14, 2, 400, 'Cash On Delivery', '2022-11-22 23:44:08', 'Cancel'),
(15, 2, 500, 'Cash On Delivery', '2022-11-24 01:01:55', 'Cancel'),
(16, 2, 700, 'G-Cash', '2022-11-24 01:01:57', 'Cancel'),
(17, 2, 240, 'Cash On Delivery', '2022-11-24 01:17:03', 'Cancel'),
(18, 2, 90, 'Cash On Delivery', '2022-11-24 01:17:06', 'Cancel'),
(19, 2, 30, 'Cash On Delivery', '2022-11-24 01:22:05', 'Cancel'),
(20, 2, 50, 'Cash On Delivery', '2022-11-24 01:28:25', 'Cancel'),
(21, 2, 600, 'G-Cash', '2022-11-24 01:28:28', 'Cancel'),
(22, 2, 500, 'G-Cash', '2022-11-24 01:28:29', 'Cancel'),
(23, 2, 500, 'G-Cash', '2022-11-24 01:28:31', 'Cancel'),
(24, 2, 600, 'G-Cash', '2022-11-24 01:30:45', 'Order'),
(25, 2, 600, 'G-Cash', '2022-11-24 01:32:28', 'Order'),
(26, 2, 500, 'G-Cash', '2022-11-24 01:32:48', 'Order'),
(27, 2, 500, 'G-Cash', '2022-11-24 01:33:40', 'Order'),
(28, 2, 60, 'G-Cash', '2022-11-24 01:35:50', 'Order');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  `date_time_bought` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `product`, `quantity`, `total`, `date_time_bought`) VALUES
(2, '12', 1, 500, '2022-11-22 09:10:11'),
(3, '10', 1, 600, '2022-11-22 09:11:08'),
(4, '12', 1, 500, '2022-11-22 09:12:03'),
(5, '10', 1, 600, '2022-11-22 09:12:55'),
(6, '13', 1, 700, '2022-11-22 09:13:09'),
(7, '12', 1, 500, '2022-11-22 09:14:23'),
(8, '13', 1, 700, '2022-11-22 09:14:44'),
(9, '13', 1, 700, '2022-11-22 09:16:47'),
(10, '9', 1, 500, '2022-11-22 09:18:33'),
(11, '13', 1, 700, '2022-11-22 10:25:10'),
(12, '14', 1, 400, '2022-11-22 10:27:35'),
(13, '14', 1, 400, '2022-11-22 10:28:18'),
(14, '14', 1, 400, '2022-11-22 10:31:56'),
(15, '18', 1, 500, '2022-11-23 01:51:28'),
(16, '13', 1, 700, '2022-11-23 23:14:36'),
(17, '14', 1, 400, '2022-11-24 01:01:44'),
(18, '17', 1, 600, '2022-11-24 01:13:33'),
(18, '16', 1, 300, '2022-11-24 01:13:33'),
(19, '16', 1, 300, '2022-11-24 01:21:40'),
(20, '15', 1, 500, '2022-11-24 01:23:18'),
(21, '17', 1, 600, '2022-11-24 01:26:13'),
(22, '15', 1, 500, '2022-11-24 01:26:33'),
(23, '15', 1, 500, '2022-11-24 01:28:18'),
(24, '17', 1, 600, '2022-11-24 01:30:45'),
(25, '17', 1, 600, '2022-11-24 01:32:28'),
(26, '15', 1, 500, '2022-11-24 01:32:48'),
(27, '9', 1, 500, '2022-11-24 01:33:40'),
(28, '19', 1, 600, '2022-11-24 01:35:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_ID`);

--
-- Indexes for table `closet`
--
ALTER TABLE `closet`
  ADD PRIMARY KEY (`closetID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `closet`
--
ALTER TABLE `closet`
  MODIFY `closetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

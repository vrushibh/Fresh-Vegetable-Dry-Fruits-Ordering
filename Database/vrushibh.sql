-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 07:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrushibh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'vrushibhpatel@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `con_id` int(10) NOT NULL,
  `con_fnm` varchar(32) NOT NULL,
  `con_email` varchar(32) NOT NULL,
  `con_sub` varchar(32) NOT NULL,
  `con_message` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`con_id`, `con_fnm`, `con_email`, `con_sub`, `con_message`) VALUES
(1, 'Vrushibh ', 'Vrushibhpatel@gmail.com', 'mksdlvmds', 'c ndsklackjl'),
(2, 'Vrushibh ', 'Vrushibhpatel@gmail.com', 'sndbakj', 'ascn'),
(3, 'Vrushibh ', 'Vrushibhpatel@gmail.com', 's m,cv.ns', 'mnksbvsjkl');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_username` varchar(32) NOT NULL,
  `c_pwd` varchar(64) NOT NULL,
  `c_email` varchar(32) NOT NULL,
  `c_phone` varchar(32) NOT NULL,
  `c_address` varchar(128) NOT NULL,
  `c_order` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_username`, `c_pwd`, `c_email`, `c_phone`, `c_address`, `c_order`) VALUES
(1, 'Mahendra', '7265003501', 'Vrushibhpatel@gmail.com', '7265003501', 'At Rajkot\r\nMunjka \r\n360001', '10'),
(5, 'Alexx', '123456789', 'alexx@gmail.com', '8899664455', 'At talala gir,\r\nSasan gir,\r\nGir Somnath', ''),
(6, 'Rahul', '12345678', 'rahul@gmail.com', '9965423156', 'At:- Munjka\r\nRajkot\r\n360001', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(32) NOT NULL,
  `customer_id` int(32) NOT NULL,
  `product_id` int(32) NOT NULL,
  `order_qty` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `customer_id`, `product_id`, `order_qty`) VALUES
(1, 1, 1, 5),
(3, 1, 2, 1),
(4, 1, 3, 1),
(5, 5, 1, 2),
(6, 5, 2, 3),
(7, 5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(64) NOT NULL,
  `p_price` varchar(64) NOT NULL,
  `p_detail` varchar(64) NOT NULL,
  `p_cat` varchar(34) NOT NULL,
  `p_photo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_detail`, `p_cat`, `p_photo`) VALUES
(1, 'Tomato', '30', '30', 'vegetables', 'gallery-img-02.jpg'),
(2, 'Chilli', '30', '20', 'vegetables', 'gallery-img-03.jpg'),
(3, 'Orange', '80', '20', 'fruits', 'instagram-img-04.jpg'),
(4, 'Banana', '20', '1', 'fruits', 'banana.jpg'),
(21, 'Papaya', '30', '30', 'fruits', 'img-pro-04.jpg'),
(22, 'Carrot', '20', '65', 'vegetables', 'img-pro-01.jpg'),
(24, 'Beetroot', '25', '20', 'vegetables', 'beetroot.jpg'),
(25, 'Onion', '40', '20', 'vegetables', 'onion.jpg'),
(26, 'Brinjal', '15', '20', 'vegetables', 'brinjal.jpg'),
(27, 'Cauliflower', '55', '20', 'vegetables', 'cauliflower.jpg'),
(28, 'Cucumber', '45', '20', 'vegetables', 'cucumber.jpg'),
(29, 'Corn', '65', '20', 'fruits', 'corn.jpg'),
(30, 'Potato', '20', '20', 'vegetables', 'potato.jpg'),
(32, 'Cashews', '60', '20', 'dryfruits', 'cashews.jpg'),
(33, 'Badaam', '95', '20', 'dryfruits', 'Badam.jpg'),
(34, 'Kismiss', '75', '20', 'dryfruits', 'kismis.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

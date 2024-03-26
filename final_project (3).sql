-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 11:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(2, 'dbstore@gmail.com', 'db@123'),
(4, 'maulikprajapati722004@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `brandtable`
--

CREATE TABLE `brandtable` (
  `id` int(20) NOT NULL,
  `brandName` varchar(200) NOT NULL,
  `imgSrc` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `deletedPrice` varchar(200) NOT NULL,
  `currentPrice` varchar(200) NOT NULL,
  `price_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandtable`
--

INSERT INTO `brandtable` (`id`, `brandName`, `imgSrc`, `title`, `ram`, `battery`, `deletedPrice`, `currentPrice`, `price_id`) VALUES
(1, 'Samsung', 'images\\samsung\\samsung_s21_fe_5g\\samsung_s21_fe_5g_gray.jpg', 'Galaxy S21 FE 5G ', '(128 GB | 8 GB)', '4,500mAh | 120Hz Referesh Rates', '40999', '20500', 4),
(2, 'Oppo', 'images\\oppo\\oppo_f17_pro\\blue\\0.jpg', 'Oppo F17 Pro++', '(128 GB | 8 GB)', '30W VOOC Flash Charge 4.0', '17999', '16200', 3),
(4, 'Apple', 'images\\Iphone\\Iphone 13 Pro\\iphone1.jpg', 'Iphone 13 Pro', '(128 GB | 4 GB)', 'A15 Bionic', '139999', '126000', 6),
(5, 'Oneplus', 'images\\oneplus\\onePlus Nord\\1.jpg', 'Oneplus Nord', '(128 GB | 8 GB)', 'MediaTek Helio G75 Processor', '60000', '40000', 5),
(6, 'RealMe', 'images\\realme\\realme_narzo\\blue\\0.png', 'Realme Narjo', '(128 GB | 8 GB)', 'MediaTek Helio G65 Processor', '20000', '13000', 2),
(28, 'Mi', 'images\\redmi\\redmi_note_10s\\redmi_note_10s_blue_1.png', 'Redmi Note 10s', '(128 Gb| 8 GB)', '5000 mAh Lithium-Ploymer Battery ', '16999', '13300', 2);

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `brand_id` int(20) NOT NULL,
  `brand_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_product`
--

INSERT INTO `brand_product` (`brand_id`, `brand_image`) VALUES
(1, 'images\\samsungBrand2.jpg'),
(2, 'images\\MiBrand.jpg'),
(3, 'images\\oppoBrand.jpg'),
(4, 'images\\appleBrand.jpg'),
(5, 'images\\onePlus.jpg'),
(6, 'images\\vivoBrand.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `Quantity` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `Quantity`, `email`) VALUES
(1, 'Galaxy S21 FE 5G ', 20500, 1, 'maulikprajapati@gmail.com'),
(2, 'Oppo F17 Pro++', 16200, 1, 'maulikprajapati@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, 'Maulik Prajapati', 'm@gmail.com', 'affgdfdgrg'),
(4, 'aa', 'a@gmail.com', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `firstName`, `lastName`, `email`, `phoneNo`, `address`, `pin`, `product_id`) VALUES
(1, 'maulik', 'prajapati', 'maulik@gmail.com', '7984335855', 'sujanpur', 384151, 0),
(2, 'maulik', 'prajapati', 'maulik@gmail.com', '7984335855', 'sujanpur', 384151, 0),
(3, 'Ashvin', 'Parmar', 'p@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(4, 'abs', 'abs', 'abs@gmail.com', '12345567890', 'siddhpur', 384151, 0),
(5, 'maulik', 'prajapati', 'maulik@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(6, 'Ashvin', 'Parmar', 'a@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(7, 'Ashvin', 'parmar', 'a@gmail.com', '7984335855', 'sujanpur', 384151, 0),
(8, 'maulik', 'prajapati', 'm@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(9, 'a', 'a', 'a@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(10, 'as', 'vin', 'as@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(11, 'maulik', 'prajapati', 'm@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(12, 'maulik', 'prajapati', 'm@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(13, 'ashvin', 'parmar', 'a@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(14, 'vishvas', 'chauhan', 'a@gmail.com', '1234567890', 'kalana', 384151, 0),
(15, 'cc', 'cc', 'cc@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(16, 'Maulik', 'Prajapati', 'maulik@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(17, 'maulik', 'prajapati', 'm@gmail.com', '12234567890', 'sujanpur', 384151, 0),
(18, 'maulik', 'prajapati', 'maulik@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(19, 'maulik', 'prajapati', 'm@gmail.com', '1234567890', 'sujanpur', 384151, 0),
(20, 'Maulik', 'Prajapati', 'm@gmail.com', '1234567890', 'sujanpur', 384151, 0);

-- --------------------------------------------------------

--
-- Table structure for table `price_product`
--

CREATE TABLE `price_product` (
  `price_id` int(20) NOT NULL,
  `price_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_product`
--

INSERT INTO `price_product` (`price_id`, `price_image`) VALUES
(1, 'images\\shopbyprice\\below_10000.jpg'),
(2, 'images\\shopbyprice\\10to15.jpg'),
(3, 'images\\shopbyprice\\15to20.jpg'),
(4, 'images\\shopbyprice\\20to30.jpg'),
(5, 'images\\shopbyprice\\30to40.jpg'),
(6, 'images\\shopbyprice\\above_40000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `product_id` int(55) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `orders` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `eStorage` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `refreshRage` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `screenSize` varchar(255) NOT NULL,
  `id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_id`, `storage`, `ram`, `about`, `orders`, `sim`, `eStorage`, `weight`, `os`, `refreshRage`, `battery`, `camera`, `screenSize`, `id`) VALUES
(1, '128 GB', '8 GB', '7 Days Replacement Policy', 'GST Invoice Available', 'Dual SIM', '246 GB', '178g', 'Android', '120HZ', '4,500mAh(typical)', '50MP + 2MP + 2MP | 8MP Front Camera', '16.29cm(6.4) Dynamic AMOLED 2x(2340 X 1080)', 1),
(2, '128 GB', '8 GB', '7 Days Replacement Policy', 'GST Invoice Available', 'Dual SIM', '246 GB', '177g', 'Android', '120HZ', '4,015 mAh Lithium-ion Battery', '48MP + 8MP + 2MP + 2MP | 16MP + 2MP Dual Front Camera', '16.33 cm(6.43 inch) FULL HD + Display', 2),
(4, '128 GB', '8 GB', '7 Days Replacement Policy', 'GST Invoice Available', 'Dual SIM', '512 GB', '177g', 'IOS', '120HZ', '2000 mAh Battery', '50MP + 2MP + 2MP | 8MP Front Camera', '16.51 cm (6.5 inch) HD + Display ', 4),
(29, '128 GB', '8 GB', '7 days Replacement policy', 'GST invoice available', 'Dual SIM', '512 GB', '178.8g', 'Android 11', '120HZ', '5000 mAh Lithium-Ploymer Battery', '64MP + 8MP + 2MP + 2MP | 13MP Front Camera', '16.33 cm (6.43 inch) FULL HD + Display', 28),
(30, '128 GB', '8 GB', '7 days Replacement policy', 'GST invoice available', 'Dual SIM', '512 GB', '178.8g', 'Android 11', '120 Hz', '5000 mAh Lithium-Ploymer Battery', '64MP + 8MP + 2MP + 2MP | 13MP Front Camera', '16.33 cm (6.43 inch) FULL HD + Display', 5),
(32, '128 GB', '8 GB', '7 days Replacement policy', 'GST invoice available', 'Dual SIM', '512 GB', '178.8g', 'Android 11', '120HZ', '5000 mAh Lithium-Ploymer Battery', '64MP + 8MP + 2MP + 2MP | 13MP Front Camera', '16.33 cm (6.43 inch) FULL HD + Display', 6);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`email`, `password`) VALUES
('maulikprajapati@gmail.com', 'a'),
('virulal@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandtable`
--
ALTER TABLE `brandtable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_id` (`price_id`);

--
-- Indexes for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `price_product`
--
ALTER TABLE `price_product`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brandtable`
--
ALTER TABLE `brandtable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `brand_product`
--
ALTER TABLE `brand_product`
  MODIFY `brand_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `price_product`
--
ALTER TABLE `price_product`
  MODIFY `price_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brandtable`
--
ALTER TABLE `brandtable`
  ADD CONSTRAINT `brandtable_ibfk_1` FOREIGN KEY (`price_id`) REFERENCES `price_product` (`price_id`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `brandtable` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

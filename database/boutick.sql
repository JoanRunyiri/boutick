
# --phpMyAdmin SQL Dump
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
-- Database: `boutick`
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
                           `item_image` varchar(255) NOT NULL,
                          `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`,`item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Off-Shoulder Leopard Dress', 3500, 'pics2/leopard.png', '2020-03-28 11:08:57'), -- NOW()
(2,  'Half Sleeve Bodysuit', 122.00, 'pics2/bodysuit.png', 'NOW'),
(3, 'Bare Leg Backless Two Piece set', 122.00, 'pics2/slit_twopiece.png', '2020-03-28 11:08:57'),
(4,  'Leather Dress with Sleeves', 122.00, 'pics2/leather_dress.png', '2020-03-28 11:08:57'),
(5,  'Sexy Elegant Dress', 122.00, 'pics2/black_drops.png', '2020-03-28 11:08:57'),
(6,  'Long Sleeve, Deep V Mini Dress', 122.00, 'pics2/ribbed_dress.png', '2020-03-28 11:08:57'),
(7, 'Elegant Sweater Dress', 122.00, 'pics2/sweater_dress.png', '2020-03-28 11:08:57'),
(8,  'Sexy Party Dress', 122.00, 'pics2/black_x.png', '2020-03-28 11:08:57'),
(9,  'Sexy Short Skirt Two Piece Set', 152.00, 'pics2/mini_twopiece.png', '2020-03-28 11:08:57'),
(10,  'Two Piece Sexy Short piece', 152.00, 'pics2/twopiece_short.png', '2020-03-28 11:08:57'),
(11,  'Off the Shoulder Dress', 152.00, 'pics2/offshoulder.png', '2020-03-28 11:08:57'),
(12,  'Mini Dress Turtleneck Dress', 152.00, 'pics2/yellow.png', '2020-03-28 11:08:57'),
(13,  'Long Sleeve Crop Jacket', 152.00, 'pics2/crop_jacket.png', '2020-03-28 11:08:57');
# (14,  'Sexy Fitting Maxi Dress', 152.00, 'pics2/maxi_tight.png', '2020-03-28 11:08:57');
# (15,  'Deep V-neck Women Short Dress', 152.00, 'pics2/sweater_dress.png', '2020-03-28 11:08:57');
# (13,  'Deep V-neck Women Short Dress', 152.00, 'pics2/sweater_dress.png', '2020-03-28 11:08:57');
# (13,  'Deep V-neck Women Short Dress', 152.00, 'pics2/sweater_dress.png', '2020-03-28 11:08:57');
# (13,  'Deep V-neck Women Short Dress', 152.00, 'pics2/sweater_dress.png', '2020-03-28 11:08:57');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `username` varchar(100) NOT NULL,
                        `email` varchar(100) NOT NULL,
                        `password_1` varchar(100) NOT NULL,
                        `password_2` varchar(100) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

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

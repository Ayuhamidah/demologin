-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 03:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shoes` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `list_shop` text NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `total` double NOT NULL,
  `image` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `arrived` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_shoes`
--

CREATE TABLE `tb_shoes` (
  `id_shoes` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `tags` text NOT NULL,
  `price` double NOT NULL,
  `sizes` text NOT NULL,
  `colors` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shoes`
--

INSERT INTO `tb_shoes` (`id_shoes`, `name`, `rating`, `tags`, `price`, `sizes`, `colors`, `description`, `image`) VALUES
(1, 'Nike N20 Tez', 3.5, 'Black, Nike, Sneaker, Sport', 56.8, '40, 41, 42, 43', 'Black, White, Grey', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(2, 'Vans Tip zec 21', 4.5, 'Red, Vans', 30.4, '38, 39, 40, 41', 'Red, Black, Navy', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(3, 'Nike Yuto Gun', 4.3, 'Red, Nike', 4, '40, 41, 42, 43, 44', 'Red, White', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c2hvZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(4, 'Blue Sky Go', 4.5, 'Glow, Light, Nike, Blue', 42.3, '40, 41, 42', 'Light Blue', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHNob2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(5, 'Low Dunnil Tuff', 4.3, 'Green, Nike, Grey, White', 51.3, '39, 40, 41', 'Grey, Green, White', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1612902377756-414b2139d5e2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHNob2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(6, 'Green Leaft Thin', 3.5, 'Light Green, Nike, Sport, Sneaker', 4.1, '40, 41, 42, 43', 'Light Green', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fHNob2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(7, 'Tuff Thin Gun', 4.7, 'Sport, Nike', 34.1, '40, 41, 42, 43', 'White, Orange', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzV8fHNob2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(8, 'Verse Multi Ex', 4.6, 'Casual, Converse', 40.3, '41, 42, 43', 'White, Grey', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA0fHxzaG9lc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(9, 'Snow Fit Slim', 4.1, 'Kasual, Converse', 30.4, '38, 39, 40, 41', 'White, Black', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1542280756-74b2f55e73ab?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTIyfHxzaG9lc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(10, 'Blip Tight Wossh', 4.3, 'Dance, Fighter', 30.4, '40, 41, 42', 'Red, Black', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1620156437986-dab01dc1b3f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzY5fHxzaG9lc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(11, 'Calm Belt Slim', 4.5, 'Nike, Casual', 50.2, '39, 40, 41, 42', 'Blue, White', 'Comfortable shoes, both for sports and casual. Classic color options available. Durable to use, easy maintenance and waterproof. free socks according to the color of the shoes selected.', 'https://images.unsplash.com/photo-1619223669568-f195c955da7f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzkxfHxzaG9lc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_wishlist`
--

CREATE TABLE `tb_wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_shoes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_shoes`
--
ALTER TABLE `tb_shoes`
  ADD PRIMARY KEY (`id_shoes`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_shoes`
--
ALTER TABLE `tb_shoes`
  MODIFY `id_shoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_wishlist`
--
ALTER TABLE `tb_wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

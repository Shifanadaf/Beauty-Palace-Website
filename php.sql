-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_c`
--

CREATE TABLE `add_c` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_c`
--

INSERT INTO `add_c` (`id`, `name`, `price`, `brand`, `qty`) VALUES
(18, 'Tea Tree Face Wash', '249', 'Mamaearth ', 1),
(20, 'Dark Perfume ', '399', 'Ustraa ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `beauty`
--

CREATE TABLE `beauty` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beauty`
--

INSERT INTO `beauty` (`id`, `name`, `price`, `brand`, `photo`, `cat`) VALUES
(5, ' Incense Perfume', '349', 'Carlton London', 'b1.jpg', 'frag'),
(6, ' Blush Eau de Perfume', '599', 'Carlton London ', 'b2.jpg', 'frag'),
(7, 'Edge Perfume', '249', 'Wild Stone ', 'b3.jpg', 'frag'),
(8, 'Perfume ', '299', 'Villain ', 'b4.jpg', 'frag'),
(9, 'Dark Perfume ', '399', 'Ustraa ', 'b5.jpg', 'frag'),
(10, 'Perfume Spray ', '100', ' Wild Stone', 'b6.jpg', 'frag'),
(11, 'Ice Roller Massager ', '299', 'FRESROZ ', 'b7.jpg', 'tool'),
(12, 'Eye Lash Curler', '120', 'Vega ', 'b8.jpg', 'tool'),
(13, ' Foot File Large', '249', 'Vega ', 'b9.jpg', 'tool'),
(14, 'Derma Roller ', '139', 'Kostech ', 'b10.jpg', 'tool'),
(15, 'Sponge Scrubber ', '99', 'Ross', 'b12.jpg', 'tool'),
(16, ' Hair Comb Set', '149', 'Miramar ', 'b13.jpg', 'tool');

-- --------------------------------------------------------

--
-- Table structure for table `cnt`
--

CREATE TABLE `cnt` (
  `id` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feed` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cnt`
--

INSERT INTO `cnt` (`id`, `fname`, `lname`, `email`, `feed`) VALUES
(1, 'shifa', 'nadaf', 'shifanadaf3@gmail.com', 'nice website'),
(2, 'shifa', 'nadaf', 'shifanadaf3@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `name`, `price`, `brand`, `photo`, `cat`) VALUES
(5, 'Face CC Cream', '199', 'Lakme ', 'c1.jpg', 'fm'),
(6, 'Rose Face Powder', '249', 'Lakme ', 'c2.jpg', 'fm'),
(7, ' Liquid Foundation Tube', '300', 'Maybelline ', 'c3.jpg', 'fm'),
(8, ' Serum Foundatio', '249', 'Lotus', 'c4.jpg', 'fm'),
(9, 'Cream Compact ', '599', 'Lotus ', 'c5.jpg', 'fm'),
(10, 'Compact Powder', '399', 'Maybelline ', 'c6.jpg', 'fm'),
(11, 'Bold Liner & Colossal Kajal ', '349', 'Maybelline', 'c7.jpg', 'em'),
(12, ' Intense Kajal ', '249', 'SUGAR Cosmetics', 'c8.jpg', 'em'),
(13, 'Eyeconic Kajal ', '230', 'Lakme ', 'c9.jpg', 'em'),
(14, ' Liquid Eye Liner', '299', 'Lakme ', 'c10.jpg', 'em'),
(15, ' Eyeshadow Palette', '249', 'Swiss Beauty', 'c11.jpg', 'em'),
(16, ' Dual Eyeshadow ', '349', 'SUGAR Cosmetics', 'c12.jpg', 'em');

-- --------------------------------------------------------

--
-- Table structure for table `hair`
--

CREATE TABLE `hair` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hair`
--

INSERT INTO `hair` (`id`, `name`, `price`, `brand`, `photo`, `cat`) VALUES
(1, ' Coconut Oil', '99', 'Parachute', 'h2.jpg', 'oil'),
(2, 'Onion Hair Oil ', '349', 'Mamaearth ', 'h1.jpg', 'oil'),
(3, ' Jasmine Coconut Hair Oil,', '149', 'Parachute ', 'h3.jpg', 'oil'),
(4, 'Hair Fall Shampoo ', '249', 'Dove ', 'h4.jpg', 'oil'),
(5, ' Anti Dandruff Shampoo', '299', 'Head & Shoulders ', 'h5.jpg', 'oil'),
(6, 'Onion Shampoo ', '599', 'Mamaearth ', 'h6.jpg', 'oil'),
(9, ' Hair Dryer ', '599', 'VEGA ', 'h8.jpg', 'hairst'),
(10, ' Hair Dryer& Styler', '459', 'GEUNPA', 'h9.jpg', 'hairst'),
(11, ' Hair Dryer', '700', 'Philips ', 'h10.jpg', 'hairst'),
(12, ' Titanium Straightener ', '1499', 'PHILIPS ', 'h11.jpg', 'hairst'),
(13, 'Hair Straightener', '799', 'SYSKA ', 'h12.jpg', 'hairst'),
(14, 'Hair Straightener Brush', '549', 'VEGA  ', 'h14.jpg', 'hairst');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `ph_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `email`, `address`, `gender`, `pass`, `ph_no`) VALUES
(1, 'mahek', 'shahbad', 'mahekshahbad04@gmail.com', 'solapur', 'female', 1234, 2147483647),
(2, 'shifa', 'nadaf', 'shifanadaf3@gmail.com', 'gentyal solapur', 'female', 1234, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE `skin` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(55,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`id`, `name`, `price`, `brand`, `photo`, `cat`) VALUES
(5, 'Ubtan Face Wash', '249', 'Mamaearth ', 'sk1.jpg', 'face'),
(6, 'Tea Tree Face Wash', '249', 'Mamaearth ', 'sk2.jpg', 'face'),
(7, 'Herbals Purifying Neem Face Wash', '149', 'Himalaya ', 'sk3.jpg', 'face'),
(9, 'Blush & Glow Gel Face Wash ', '195', 'Lakme ', 'sk5.jpg', 'face'),
(10, 'Blush & Glow Lemon Gel Face Wash ', '299', 'Lakme ', 'sk6.jpg', 'face'),
(11, 'Intensive Moisture Body Lotion', '235', 'Vaseline ', 'sk7.jpg', 'body'),
(12, 'Healthy Bright Body Lotion', '199', 'Vaseline ', 'sk8.jpg', 'body'),
(13, 'Eyebrow Trimmer', '499', 'Lifelong ', 'sk9.jpg', 'body'),
(14, 'Silk Touch Eyebrow Trimmer', '999', 'VEGA ', 'sk10.jpg', 'body'),
(15, 'Coffee Body Scrub', '599', 'MCaffeine ', 'sk11.jpg', 'body'),
(16, 'Deodorant Smooth Skin', '399', 'Body Shop ', 'sk12.jpg', 'body'),
(17, ' Kesar Face Wash', '169', 'Himalaya ', 'sk4.jpg', 'face'),
(20, 'lotion', '499', 'Mamaearth ', 'b7.jpg', 'face');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_c`
--
ALTER TABLE `add_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beauty`
--
ALTER TABLE `beauty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cnt`
--
ALTER TABLE `cnt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair`
--
ALTER TABLE `hair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_c`
--
ALTER TABLE `add_c`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beauty`
--
ALTER TABLE `beauty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cnt`
--
ALTER TABLE `cnt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hair`
--
ALTER TABLE `hair`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

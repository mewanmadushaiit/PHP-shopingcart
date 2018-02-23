-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 06:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serversidecase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodid`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'JBL E45BT Bluetooth Headphone', 'img1', 'JBL E45BT on-ear wireless headphones bring the signature sound of JBL right to your ears. The E45BT is one of our most versatile products ever, featuring up to 16 hours of battery life, an innovative, stylish fabric headband and ergonomic on-ear design. This means that your entertainment continues and your fun factor gets amped up no matter what you’re doing – working, commuting, or just making your way around town. ', '80.00', 20),
(2, 'HP Wireless Mouse Z3700 ', 'img2', 'It’s time your accessories matched your individuality. Meet your new wireless mouse, carefully crafted to bring its unique slim style to your work. It’s functional. It’s portable. It’s fashionable. It’s yours.\r\n', '18.00', 100),
(3, 'Sandisk 64GB Ultra USB 3.0 ', 'img3', 'The SanDisk Ultra Flair™ USB 3.0 flash drive moves your files fast. Spend less time waiting to transfer files and enjoy high-speed USB 3.0 performance of up to 150MB/s. Its durable and sleek metal casing is tough enough to handle knocks with style. And, with password protection, you can rest assured that your private files stay private. Store your files in style with the SanDisk Ultra Flair USB 3.0 flash drive.', '24.00', 100),
(4, 'Sony DVD Player With HD ', 'img4', 'Watch your DVDs in near-HD picture quality and record directly to USB, with the Sony SR760 DVD Player. Featuring picture enhancing technology, HDMI and USB connectivity, you\'ll also enjoy the convenience and versatility of multi-format DVD playback. Its space-saving, compact design means that at just 270mm, this player packs a lot of features into a neat, stylish package.', '35.00', 100),
(5, 'Kitvision Splash Action ', 'img5', 'The Splash is great for family holidays or fun days out. Whether it\'s their very first swim or an adventure down the slopes, the waterproof Splash action camera is there to record the event. It\'s simple to use with one-touch recording and an LCD display to compose shots and view playback. Full HD 1080p video and 12 MP photos ensure every special moment is captured in great quality. Packed full of accessories and mounts, whatever your family is doing, the Splash action camera guarantees you won\'t miss a thing.\r\n', '70.00', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

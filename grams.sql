-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 07:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grams`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_name` varchar(15) NOT NULL,
  `cat_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_name`, `cat_id`) VALUES
('Bike', 1),
('Book', 2),
('Car', 3),
('Mobile', 4),
('Laptop', 5),
('Furnishing', 6),
('Sports Item', 7),
('Accessories', 8),
('Clothing', 9),
('Electronics', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(500) NOT NULL,
  `price` int(8) NOT NULL,
  `cat` int(2) NOT NULL,
  `dt` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `title`, `desp`, `price`, `cat`, `dt`, `name`, `img1`) VALUES
(12, 'BIKE HELMET', 'year of purchase is 2018 and only used 4 months .very comfortable ', 450, 8, '23-03-2018 Friday', 'ghirit kumar sahoo', 'IMG_20180323_130047.jpg'),
(15, 'BAJAJ PULSAR', 'BIKE is in good condition. year of purchase 2015 .65000 km driven', 45000, 1, '23-03-2018 Friday', 'ghirit kumar sahoo', 'IMG_20180323_130132.jpg'),
(16, 'SCOOTY PLEASURE', 'SCOOTY is in good condition. year of purchase 2015 .65000 km driven', 35000, 1, '23-03-2018 Friday', 'ghirit kumar sahoo', 'IMG_20180323_130221.jpg'),
(17, 'AUDI', 'car is in good condition. year of purchase 2018 .9000 km driven', 900000, 3, '23-03-2018 Friday', 'ghirit kumar sahoo', 'IMG_20180323_130258.jpg'),
(18, 'CHAIR', 'ONLY 3 MONTHS OLD.', 600, 6, '23-03-2018 Friday', 'ravi', 'IMG_20180323_130659.jpg'),
(20, '32 gb pendrive', 'only 6 months old.', 900, 10, '23-03-2018 Friday', 'ravi', 'IMG_20180323_130727.jpg'),
(21, 'study table', 'year of purchase 8 months .higly maintained.', 2500, 6, '23-03-2018 Friday', 'ravi', 'IMG_20180323_130803.jpg'),
(22, 'CCTV CAMERA ', 'CAMERA IS IN GOOD CONDITION', 3000, 10, '23-03-2018 Friday', 'sibasis', 'IMG_20180323_130820.jpg'),
(24, 'PHONE COVER', 'ONLY 2 MONTHS OLD.', 150, 4, '23-03-2018 Friday', 'sibasis', 'IMG_20180323_130851.jpg'),
(25, 'DELL DESKTOP', 'YEAR OF PURCHASE 2015.CONDITION IS GOOD', 25000, 5, '23-03-2018 Friday', 'sibasis', 'IMG_20180323_130912.jpg'),
(26, 'PARAM SUPER COMPUTER', 'FASTEST COMPUTER AND IN GOOD CONDTION.', 2000000, 5, '23-03-2018 Friday', 'Rajneesh', 'IMG_20180323_131427.jpg'),
(27, 'WRIST WATCH', 'GOOD CONDITION', 1100, 9, '23-03-2018 Friday', 'Rajneesh', 'IMG_20180323_131521.jpg'),
(30, 'SHOES', 'GOOD CONDITION.', 650, 9, '23-03-2018 Friday', 'Rajneesh', 'IMG_20180323_131602.jpg'),
(31, 'BASKETBALL', 'GOOD CONDITION', 600, 7, '23-03-2018 Friday', 'ravi', 'IMG_20180322_103757.jpg'),
(32, 'watch', 'jhgytgyfytfgt', 2, 10, '07-04-2018 Saturday', 'sameer', 'IMG_0491.JPG'),
(33, 'fan', 'good condition fan', 1500, 8, '15-03-2019 Friday', 'siba', ''),
(34, 'fan', 'well conditioned fan', 1600, 8, '15-03-2019 Friday', 'siba', 'IMG_7811.JPG'),
(35, 'bike 1', 'at good condition', 200000, 1, '16-03-2019 Saturday', 'cvrce', '20160308_191037.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `s_chat`
--

CREATE TABLE `s_chat` (
  `id` int(11) NOT NULL,
  `chat_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `when` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_chat_messages`
--

CREATE TABLE `s_chat_messages` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `when` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_chat_messages`
--

INSERT INTO `s_chat_messages` (`id`, `user`, `message`, `when`) VALUES
(1, 'User1', 'Hi', 1553511049),
(2, 'User1', 'Hello', 1553511127),
(3, 'User2', 'Hi', 1553511146),
(4, 'User1', 'sibasis', 1553517432);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `regd_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(13) NOT NULL,
  `otp` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `regd_no`, `email`, `phone`, `password`, `otp`) VALUES
('amits3559', 1501227252, 'amits3559@gmail.com', 2147483647, 'amits', 1770),
('anurag', 1501227022, 'iamarya22@gmail.com', 2147483647, 'Cvrce@123', 8700),
('asdf', 4486, 'asd@gdv', 945465, '456', NULL),
('atul', 1501227568, 'atulkumar440@gmail.com', 2147483647, 'Cvrce@123', 8080),
('cvrce', 1501227021, 'de@gmail.com', 2147483647, 'Cvrce@123', NULL),
('gdfgdf', 5435, 'gfdgfd@xcvcxv', 2147483647, '123', NULL),
('ghirit kumar sahoo', 1501227276, 'ghiritsahoo046@gmail.com', 2147483647, 'Ghirit@123', NULL),
('joydeep', 1501227020, 'joydeepmahato3@gmail.com', 2147483647, 'Cvrce@123', 7910),
('Pratik', 1501227053, 'savaliapratik3@gmail.com', 2147483647, 'Cvrce@123', 8454),
('Rajneesh', 1501227025, 'rajneeshkr.309@gmail.com', 2147483647, '1234', 9038),
('ravi', 1501227291, 'ravi@gmail.com', 2147483647, 'Ravi@123', NULL),
('sachin', 2147483647, 'sacht985@gmail.com', 2147483647, 'Qwe@123', 6599),
('sameer', 1501227027, 'sm@gmail.com', 2147483647, 'Dipu@123', NULL),
('siba', 150122701, 'sabita.admin@gmail.com', 2147483647, 'Cvrce@123', NULL),
('sibasis', 1501227027, 'dipu2597@gmail.com', 2147483647, 'cvrce@123', 4151),
('Sibasis1', 1501227027, 'sibasispanigrahy25@gmail.com', 2147483647, 'Cvrce@123', 4104);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `name` (`name`),
  ADD KEY `cat` (`cat`);

--
-- Indexes for table `s_chat`
--
ALTER TABLE `s_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_chat_messages`
--
ALTER TABLE `s_chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `s_chat`
--
ALTER TABLE `s_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s_chat_messages`
--
ALTER TABLE `s_chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`name`) REFERENCES `user` (`name`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `category` (`cat_id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_records` ON SCHEDULE EVERY 1 SECOND STARTS '2019-03-21 13:46:34' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN 
DELETE FROM product WHERE DATEDIFF(NOW(), dt) >= 30; 
END$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

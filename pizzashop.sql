-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 11:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adname` varchar(20) NOT NULL,
  `adpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adname`, `adpass`) VALUES
('1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL,
  `catimg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`, `catimg`) VALUES
(3, 'SDSD', ''),
(103, 'ADASD', 'bg.jpg'),
(104, 'EWERAWE', 'bg.jpg'),
(105, 'RAWERAR', 'bg.jpg'),
(106, 'AERWER', 'bg.jpg'),
(108, 'VEG', 'bg.jpg'),
(110, 'BEVERAGES', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `cid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`cid`, `username`, `cname`, `phone`, `cpass`) VALUES
(1, 'ananthu', 'Ananthu Suresh', 1234567890, '11223344'),
(4, 'raju', 'raju ck', 2147483647, '123'),
(8, 'rahul', 'rahuk pr', 2147483647, '123');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `did` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `hno` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `landmark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `iod` int(11) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `pid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `dod` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `pimg` varchar(20) NOT NULL,
  `details` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `catid`, `pname`, `price`, `pimg`, `details`) VALUES
(8, 3, 'PIZEWQERQWR', 11900, 'bg.jpg', 'very good'),
(9, 103, 'arqwe', 0, 'bg.jpg', 'aswr'),
(10, 3, 'arf', 0, 'bg.jpg', 'sdfsdf'),
(11, 3, 'sdfgtdfg', 234, 'bg.jpg', '4312412341234'),
(12, 110, 'GDG', 100, 'bg.jpg', 'good'),
(13, 110, 'WEQW', 1000, 'admin.png', 'we4tswertwer'),
(14, 3, 'QWEQWER', 100, 'bg.jpg', 'wfrdefrwde'),
(15, 108, 'ERWER', 100, 'bg.jpg', 'araerer'),
(16, 110, 'HOT PIZZA', 290, 'bg.jpg', 'vry good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`),
  ADD UNIQUE KEY `catname` (`catname`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

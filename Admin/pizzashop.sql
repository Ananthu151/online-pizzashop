-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 12:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL,
  `catimg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catimg`) VALUES
(1, 'PIZZA', ''),
(2, 'PAPPI', ''),
(3, 'SDSD', ''),
(4, 'DFSDF', ''),
(12, 'NEW', ''),
(16, 'GHGH', ''),
(18, 'GHFH', ''),
(19, 'DS', ''),
(20, '43423', ''),
(21, 'SHOP', ''),
(23, 'DFS', ''),
(24, 'JJJJ', '');

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
  `details` varchar(15) NOT NULL,
  `available` varchar(20) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `catid`, `pname`, `price`, `pimg`, `details`, `available`) VALUES
(1, 1, 'pappi', 20, 'pappiimage.jpg', 'nallathuvarum', 'no'),
(2, 1, '', 2, '', 'dfsaf', 'no'),
(3, 1, 'bijoy', 2, '2pac-wiz-khalifa-sno', 'fdsd', 'yes'),
(4, 1, 'bijoy', 4, '2pac-wiz-khalifa-sno', '54', 'yes'),
(5, 1, 'bijoy', 23, '2pac-wiz-khalifa-sno', 'rff', 'yes'),
(6, 1, 'pappi', 4, 'bg.jpg', 'ew', 'yes'),
(7, 1, 'anandhu', 23, 'bg.jpg', 'pizzashop1', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`),
  ADD UNIQUE KEY `catname` (`catname`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

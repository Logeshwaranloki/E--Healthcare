-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 09:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `member` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `member`) VALUES
(1, 'Admin', 'Admin1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `cuid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `cuid`, `pid`, `quantity`, `total`, `status`) VALUES
(1, 9, 15, 2, 560, 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(10) NOT NULL,
  `categoryname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `categoryname`) VALUES
(19, 'Nutritions'),
(20, 'Head Ache');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuid` int(100) NOT NULL,
  `customername` varchar(50) NOT NULL DEFAULT '-',
  `customermail` varchar(60) NOT NULL DEFAULT '-',
  `customerphone` varchar(10) NOT NULL DEFAULT '-',
  `customeraddress` varchar(100) NOT NULL DEFAULT '-',
  `customerstate` varchar(50) NOT NULL DEFAULT '-',
  `wallet` text NOT NULL DEFAULT '0',
  `password` varchar(100) DEFAULT NULL,
  `member` varchar(1000) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuid`, `customername`, `customermail`, `customerphone`, `customeraddress`, `customerstate`, `wallet`, `password`, `member`) VALUES
(7, 'Dinesh', 'dinesh@gmail.com', '7845995565', 'Madurai', 'Tamilnadu', '0', '1234', 'hp'),
(9, 'Parthiban', 'parthi@gmail.com', '6383406578', '16/1, Kalki Bhavanam- First Floor, Visuvasapuri 4th street, Opposite to Bhuvesh Agency, Arappalayam,', 'Tamilnadu', '0', '1234', 'customer'),
(10, 'Parthiban', '', '6383406578', 'Arappalayam, Madurai 625016', 'Tamilnadu', '0', '1234', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `cid` int(100) NOT NULL,
  `categoryname` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`cid`, `categoryname`, `picture`) VALUES
(1, 'Head Ache', 'disease/ha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `choosecategory` varchar(30) NOT NULL,
  `productname` text NOT NULL,
  `productimage` text NOT NULL,
  `price` int(10) NOT NULL,
  `stack` int(10) NOT NULL,
  `description` text NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `choosecategory`, `productname`, `productimage`, `price`, `stack`, `description`, `edate`) VALUES
(15, 'Nutritions', 'Glucon-D Regular Instant Energy Drink, 1 kg Refill Pack', 'images/71KdavW7IpL._SL1500_.jpg', 280, 125, 'Glucon-D is enhanced with Vitamin C for Instant energy with blend of pure glucose, vitamins and minerals', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `regdb`
--

CREATE TABLE `regdb` (
  `id` int(100) NOT NULL,
  `rid` varchar(1000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `member` varchar(1000) NOT NULL,
  `mailid` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regdb`
--

INSERT INTO `regdb` (`id`, `rid`, `name`, `mobile`, `member`, `mailid`, `password`, `address`, `status`) VALUES
(8, '1', 'kishore', '8696859685', 'Delivery boy', 'kishore22@gmail.com', 'kishore', 'anna nagar', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sm`
--

CREATE TABLE `sm` (
  `mid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `pid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm`
--

INSERT INTO `sm` (`mid`, `sid`, `pid`) VALUES
(1, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `sv`
--

CREATE TABLE `sv` (
  `sid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `video` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sv`
--

INSERT INTO `sv` (`sid`, `userid`, `did`, `video`, `title`) VALUES
(1, 7, 1, 'video/Working Demo.flv', 'Heavy Head Ache ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cuid`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `regdb`
--
ALTER TABLE `regdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm`
--
ALTER TABLE `sm`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cuid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `regdb`
--
ALTER TABLE `regdb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sm`
--
ALTER TABLE `sm`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sv`
--
ALTER TABLE `sv`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

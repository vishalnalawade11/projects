-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 06:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicoo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `userid` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `productid` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` text NOT NULL,
  `zipcode` int(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `name`, `email`, `date`, `userid`, `price`, `productid`, `phone`, `address`, `zipcode`, `state`, `country`) VALUES
(1, 'Samarth upare', 'samarthupare1935@gma', '2022-05-23', 'sam', 2068, 'abce133', 2147483647, '49/45 b', 413002, 'Maharashtra', 'India'),
(2, 'soham  Dhawale ', 'charushilajagdale9@g', '2022-05-24', 'soham', 4000, 'abc12', 2147483647, 'bhavani peth solapur', 413002, 'maharastra ', 'India'),
(3, 'soham  Dhawale ', 'charushilajagdale9@g', '2022-05-24', 'soham', 1034, 'abce133', 2147483647, 'bhavani peth solapur', 413002, 'maharastra ', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pdescription` text NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `pcategory` varchar(40) NOT NULL,
  `pingedients` varchar(200) NOT NULL,
  `pprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `productid`, `pname`, `pdescription`, `pimg`, `pcategory`, `pingedients`, `pprice`) VALUES
(1, 'abc12', 'himalaya', 'it is a great product which can have great thing with himself ', 'images/upload/1.png', 'Vitamins', 'hiudo fi fnieiufh', 1000),
(2, 'abce133', 'dabur', 'fhionod foe jfojoiekn fnildnkln fkenof fenlnfl fmnlkenf fjodnc', 'images/upload/2.png', 'Nutrients', 'nfnjnfon cdion kdnionc chdihn fcidjn cnidnol ciodnjnc cioednco', 1034);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobileno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `mobileno`) VALUES
(2, 'sam', '1234', 1234567897),
(5, 'soham', '123', 1234567897),
(7, 'sam1', '123', 1234567897);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

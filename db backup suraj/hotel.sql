-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 01:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_bedtype`
--

CREATE TABLE `tbl_add_bedtype` (
  `bedtypeid` int(11) NOT NULL,
  `bedtype` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_bedtype`
--

INSERT INTO `tbl_add_bedtype` (`bedtypeid`, `bedtype`) VALUES
(2, 'deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_roomtype`
--

CREATE TABLE `tbl_add_roomtype` (
  `roomtypeid` int(11) NOT NULL,
  `roomtype` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_roomtype`
--

INSERT INTO `tbl_add_roomtype` (`roomtypeid`, `roomtype`) VALUES
(1, 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fooditems`
--

CREATE TABLE `tbl_fooditems` (
  `foodid` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general`
--

CREATE TABLE `tbl_general` (
  `genid` int(11) NOT NULL,
  `namehotel` varchar(200) NOT NULL,
  `emailhotel` varchar(150) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pobox` varchar(150) NOT NULL,
  `logopic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_general`
--

INSERT INTO `tbl_general` (`genid`, `namehotel`, `emailhotel`, `contact`, `address`, `pobox`, `logopic`) VALUES
(32, 'Hotel Royal Kusum', 'hotel@gmail.com', '98435678980', 'ktm', 'nothing', '3969.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_facilities`
--

CREATE TABLE `tbl_hotel_facilities` (
  `hotelfac_id` int(11) NOT NULL,
  `facilities` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_facilities`
--

INSERT INTO `tbl_hotel_facilities` (`hotelfac_id`, `facilities`) VALUES
(5, 'wifi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id_room` int(11) NOT NULL,
  `roomno` int(200) NOT NULL,
  `bedstatus` varchar(150) NOT NULL,
  `capacity` int(150) NOT NULL,
  `attach_bathrom` varchar(50) NOT NULL,
  `ac` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id_room`, `roomno`, `bedstatus`, `capacity`, `attach_bathrom`, `ac`) VALUES
(1, 101, 'Single bed 2', 2, 'yes', 'no'),
(2, 102, 'Double bed 2', 5, 'yes', 'yes'),
(3, 103, 'Double Bed 2', 4, 'yes', 'yes'),
(4, 104, 'Double Bed 1 and Single Bed 1', 3, 'yes', 'no'),
(5, 105, 'Single Bed ', 1, 'yes', 'no'),
(6, 201, 'Single Bed 2', 4, 'yes', 'no'),
(7, 202, 'Double Bed 2', 4, 'yes', 'yes'),
(8, 203, 'Double Bed 2', 4, 'yes', 'yes'),
(9, 204, 'Double Bed 2', 4, 'yes', 'no'),
(10, 205, 'Double Bed 1 and Single Bed 1', 3, 'yes', 'no'),
(11, 301, 'Single Bed 2', 2, 'yes', 'no'),
(12, 302, 'Double Bed 2', 4, 'yes', 'yes'),
(13, 303, 'Double Bed 2', 4, 'yes', 'yes'),
(14, 304, 'Double Bed 2', 4, 'yes', 'no'),
(15, 305, 'Double Bed 1 and Single Bed 1', 3, 'yes', 'no'),
(16, 401, 'Double Bed 1 and Single Bed 1', 3, 'yes', 'yes'),
(17, 402, 'Single Bed 3', 3, 'yes', 'no'),
(18, 403, 'Single Bed 2', 2, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_registration`
--

CREATE TABLE `tbl_user_registration` (
  `userid` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `userpic` varchar(200) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cnum` varchar(16) NOT NULL,
  `joindate` date NOT NULL,
  `maritialstatus` varchar(30) NOT NULL,
  `workstatus` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `citizenship` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_registration`
--

INSERT INTO `tbl_user_registration` (`userid`, `fname`, `lname`, `userpic`, `address`, `email`, `cnum`, `joindate`, `maritialstatus`, `workstatus`, `gender`, `citizenship`, `username`, `password`) VALUES
(49, 'po', 'po', 'user_49_pic.jpg', 'po', 'po@po.com', 'po', '2017-10-13', 'Married', 'working', 'male', 'Anmol49_pict.jpg', 'pop', 'tyu'),
(55, 'anmol', 'koirala', 'user_55_pic.jpg', 'btm', 'anmolkoirala3@mail.com', '789654123', '2017-10-21', 'Married', 'working', 'male', 'citizenship_55_pic.jpg', 'anmol', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_add_bedtype`
--
ALTER TABLE `tbl_add_bedtype`
  ADD PRIMARY KEY (`bedtypeid`);

--
-- Indexes for table `tbl_add_roomtype`
--
ALTER TABLE `tbl_add_roomtype`
  ADD PRIMARY KEY (`roomtypeid`);

--
-- Indexes for table `tbl_fooditems`
--
ALTER TABLE `tbl_fooditems`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `tbl_general`
--
ALTER TABLE `tbl_general`
  ADD PRIMARY KEY (`genid`);

--
-- Indexes for table `tbl_hotel_facilities`
--
ALTER TABLE `tbl_hotel_facilities`
  ADD PRIMARY KEY (`hotelfac_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add_bedtype`
--
ALTER TABLE `tbl_add_bedtype`
  MODIFY `bedtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_add_roomtype`
--
ALTER TABLE `tbl_add_roomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fooditems`
--
ALTER TABLE `tbl_fooditems`
  MODIFY `foodid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_general`
--
ALTER TABLE `tbl_general`
  MODIFY `genid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_hotel_facilities`
--
ALTER TABLE `tbl_hotel_facilities`
  MODIFY `hotelfac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

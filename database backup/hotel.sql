-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 07:01 AM
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
(9, 'Single'),
(10, 'Double'),
(11, 'Queen');

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
(4, 'Deluxe'),
(5, 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drinkmenu`
--

CREATE TABLE `tbl_drinkmenu` (
  `drinkid` int(11) NOT NULL,
  `drink_name` varchar(150) NOT NULL,
  `drink_type` varchar(150) NOT NULL,
  `drink_code` int(100) NOT NULL,
  `fprice` float NOT NULL,
  `hprice` float NOT NULL,
  `qprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_drinkmenu`
--

INSERT INTO `tbl_drinkmenu` (`drinkid`, `drink_name`, `drink_type`, `drink_code`, `fprice`, `hprice`, `qprice`) VALUES
(1, 'Vodka', 'Hard', 10, 1200, 650, 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foodmenu`
--

CREATE TABLE `tbl_foodmenu` (
  `menuid` int(11) NOT NULL,
  `item_category` varchar(225) NOT NULL,
  `item_name` varchar(225) NOT NULL,
  `fprice` float NOT NULL,
  `hprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_foodmenu`
--

INSERT INTO `tbl_foodmenu` (`menuid`, `item_category`, `item_name`, `fprice`, `hprice`) VALUES
(2, 'nepali', 'veg khana set', 250, 125),
(3, 'nepali', 'Chicken Khana Set ', 300, 150),
(4, 'indian', 'jhk', 855, 745),
(5, 'ugkh', 'jhbk', 85, 78),
(6, 'chinese', 'noodles', 100, 50),
(7, 'nepali', 'veg khana set', 11, 10),
(8, 'Nepali', 'veg khana set', 1200, 700);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general`
--

CREATE TABLE `tbl_general` (
  `genid` int(11) NOT NULL,
  `namehotel` varchar(200) NOT NULL,
  `emailhotel` varchar(150) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `site` varchar(155) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pan` varchar(150) NOT NULL,
  `vat` int(20) NOT NULL,
  `logopic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_general`
--

INSERT INTO `tbl_general` (`genid`, `namehotel`, `emailhotel`, `contact`, `site`, `address`, `pan`, `vat`, `logopic`) VALUES
(38, 'HOTEL MANAGEMENT SYSTEM', 'admin@admin.cm', 'adlkfjl', 'alsdkjfl', 'lakdjlfkasj', 'lkajdlf', 0, '1101.png');

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
(18, 'TV'),
(19, 'Free Wifi'),
(20, 'Attach Bathroom'),
(21, 'Telephone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laundry`
--

CREATE TABLE `tbl_laundry` (
  `laundryid` int(11) NOT NULL,
  `items` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `roomid` int(11) NOT NULL,
  `roomno` int(150) NOT NULL,
  `roomtypeid` int(150) NOT NULL,
  `bedtypeid` int(150) NOT NULL,
  `hotelfacilitiesid` varchar(150) NOT NULL,
  `maxnumbed` int(150) NOT NULL,
  `extrabed` int(150) NOT NULL,
  `roomprice` float NOT NULL,
  `maxperson` int(150) NOT NULL,
  `extraperson` int(150) NOT NULL,
  `maxnumchild` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`roomid`, `roomno`, `roomtypeid`, `bedtypeid`, `hotelfacilitiesid`, `maxnumbed`, `extrabed`, `roomprice`, `maxperson`, `extraperson`, `maxnumchild`) VALUES
(14, 101, 1, 2, '5,6,7', 2, 1, 1000, 2, 1, 2),
(15, 102, 2, 2, '5,8', 2, 1, 1500, 2, 1, 2),
(16, 103, 1, 5, '6,8', 2, 1, 1000, 2, 1, 1),
(17, 90, 1, 2, '5', 2, 2, 14, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE `tbl_table` (
  `tableid` int(11) NOT NULL,
  `tablenum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`tableid`, `tablenum`) VALUES
(7, 'table 1'),
(9, 'table 3');

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
(55, 'anmol', 'koirala', 'user_55_pic.jpg', 'btm', 'anmolkoirala3@mail.com', '789654123', '2017-10-21', 'Married', 'working', 'male', 'citizenship_55_pic.jpg', 'anmol', '1111'),
(56, 'anmol', 'hbjhj', 'user_56_pic.jpg', '12edsf', 'n@m.com', '45848485', '2017-11-17', 'Single', 'working', 'male', 'citizenship_56_pic.jpg', 'anmol', 'anm'),
(57, 'suraz', 'hero', 'user_57_pic.jpg', 'lailitpur', 'suaz@gmail.com', '98975645645', '2017-11-10', 'Single', 'working', 'male', 'citizenship_57_pic.jpg', 'suraz', 'suraz');

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
-- Indexes for table `tbl_drinkmenu`
--
ALTER TABLE `tbl_drinkmenu`
  ADD PRIMARY KEY (`drinkid`);

--
-- Indexes for table `tbl_foodmenu`
--
ALTER TABLE `tbl_foodmenu`
  ADD PRIMARY KEY (`menuid`);

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
-- Indexes for table `tbl_laundry`
--
ALTER TABLE `tbl_laundry`
  ADD PRIMARY KEY (`laundryid`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD PRIMARY KEY (`tableid`);

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
  MODIFY `bedtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_add_roomtype`
--
ALTER TABLE `tbl_add_roomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_drinkmenu`
--
ALTER TABLE `tbl_drinkmenu`
  MODIFY `drinkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_foodmenu`
--
ALTER TABLE `tbl_foodmenu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_general`
--
ALTER TABLE `tbl_general`
  MODIFY `genid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_hotel_facilities`
--
ALTER TABLE `tbl_hotel_facilities`
  MODIFY `hotelfac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_laundry`
--
ALTER TABLE `tbl_laundry`
  MODIFY `laundryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_table`
--
ALTER TABLE `tbl_table`
  MODIFY `tableid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

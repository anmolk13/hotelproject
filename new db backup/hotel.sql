-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 04:00 PM
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
-- Table structure for table `tbl_fooditems`
--

CREATE TABLE `tbl_fooditems` (
  `foodid` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id_room` int(11) NOT NULL,
  `roomno` int(200) NOT NULL,
  `roomtype` varchar(150) NOT NULL,
  `nubed` int(150) NOT NULL,
  `attach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id_room`, `roomno`, `roomtype`, `nubed`, `attach`) VALUES
(1, 101, 'beautiful', 2, 'yes');

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
(49, 'po', 'po', 'user_49_pic.jpg', 'po', 'po@po.com', 'po', '2017-10-13', 'Married', 'working', 'male', 'Anmol49_pict.jpg', 'pop', 'po'),
(50, 'ui', 'ui', 'user_50_pic.jpg', 'ui', 'ui@ui.com', '65629841', '2017-10-12', 'Married', 'working', 'male', 'citizenship_50_pic.jpg', 'ui', 'ui'),
(51, 'yt', 'ty', 'user_51_pic.gif', 'ty', 'ty@ty.com', 'ty', '2017-10-20', 'Married', 'working', 'male', 'citizenship_51_pic.gif', 'ty', 'ty'),
(52, 'yt', 'ty', 'user_52_pic.gif', 'ty', 'ty@rt.com', '123654789', '2017-10-20', 'Married', 'working', 'male', 'citizenship_52_pic.gif', 'ty', 'jk'),
(53, 'op', 'op', 'user_53_pic.gif', 'op', 'op@op.co', 'op', '2017-10-20', 'Married', 'working', 'male', 'citizenship_53_pic.gif', 'op', 'op'),
(54, 'op', 'op', 'user_54_pic.gif', 'op', 'op@op.co', 'op', '2017-10-20', 'Married', 'working', 'male', 'citizenship_54_pic.gif', 'op', 'op'),
(55, 'anmol', 'koirala', 'user_55_pic.jpg', 'btm', 'anmolkoirala3@mail.com', '789654123', '2017-10-21', 'Married', 'working', 'male', 'citizenship_55_pic.jpg', 'anmol', '11'),
(56, 'ty', 'ty', 'user_56_pic.gif', 'ty', 'ty@hj.com', 'ty', '2017-10-04', 'Married', 'working', 'male', 'citizenship_56_pic.gif', 'tyo', 'ty'),
(57, 'ty', 'ty', 'user_57_pic.gif', 'ty', 'ty@hj.com', 'ty', '2017-10-04', 'Married', 'working', 'male', 'citizenship_57_pic.1', 'tyo', 'ty'),
(58, 'ty', 'ty', 'user_58_pic.gif', 'ty', 'ty@hj.com', 'ty', '2017-10-04', 'Married', 'working', 'male', 'citizenship_58_pic.1', 'tyo', 'ty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fooditems`
--
ALTER TABLE `tbl_fooditems`
  ADD PRIMARY KEY (`foodid`);

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
-- AUTO_INCREMENT for table `tbl_fooditems`
--
ALTER TABLE `tbl_fooditems`
  MODIFY `foodid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

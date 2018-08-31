-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 04:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsutlike_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `Name` varchar(255) NOT NULL,
  `RoomName` varchar(255) NOT NULL,
  `RoomCharges` varchar(255) NOT NULL,
  `RoomStatus` varchar(255) NOT NULL,
  `RoomDescription` varchar(255) NOT NULL,
  `RoomAvailable` int(255) NOT NULL,
  `RoomImage` text NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserCode` varchar(255) NOT NULL,
  `Addcode` varchar(255) NOT NULL,
  `AreaId` int(255) NOT NULL,
  `AddStatus` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`Name`, `RoomName`, `RoomCharges`, `RoomStatus`, `RoomDescription`, `RoomAvailable`, `RoomImage`, `Description`, `Status`, `Image`, `UserCode`, `Addcode`, `AreaId`, `AddStatus`) VALUES
('Hotel', 'Luxery Room', '40000', 'Active', '', 0, '', '', 'Deactive', 'images/994262695subhan.png', '4VLD', '12AL', 1, 2),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/107360839subhan.png', '7PF8', '2QX3', 1, 0),
('dadwd', 'awdawd', 'adsd', 'Active', 'dawdawd', 4, '', 'adwad', 'Active', '', '7PF8', '2VNN', 2, 1),
('dadwd', 'ererdsf', 'adsd', 'Active', 'sfsefse', 4, '', 'dfsdf', 'Active', '', 'BDMF', '3USV', 5, 1),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/972442626subhan.png', '7PF8', '7O46', 1, 0),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/666015625subhan.png', '7PF8', '7XPY', 1, 0),
('Hostels', 'Luxery Room', '12000', 'Active', '', 4, '', '', 'Active', 'images/769683837subhan.png', '4VLD', '8C4P', 2, 1),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/860321044subhan.png', '7PF8', 'E5JR', 1, 0),
('adawdaw', 'awdfdgdfg', 'dffgdfg', 'Active', 'dgdrgdr', 4, '', 'gdgdrgdrg', 'Active', '', '4VLD', 'GIM4', 1, 2),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/68450927subhan.png', '7PF8', 'H6UP', 1, 0),
('dfgdgggggggggggg', 'drgdrggggggggggggg', 'dgdg', 'Active', 'dfgdgdrg', 5, '', 'dfgdfg', 'Active', '', '4VLD', 'IVXO', 1, 1),
('Hotel', 'Luxery Room', '12', 'Active', '', 12, '', '', 'Active', 'images/990295410subhan.png', 'BDMF', 'IZF7', 1, 0),
('Hotel', 'Luxery Room', '1200', 'Active', '', 2, '', '', 'Active', 'images/222229003subhan.png', '7PF8', 'J8I5', 1, 0),
('Hotel', 'Luxery Room', '24', 'Active', '', 23, '', '', 'Active', 'images/815093994subhan.png', 'BDMF', 'JL3U', 1, 0),
('asdasd', 'adwadw', 'dfsfs', 'Active', 'sefsee', 4, '', 'sdfsese', 'Active', '', '7PF8', 'JXWQ', 1, 1),
('Hotel', 'Luxery Room', '12', 'Active', '', 12, '', '', 'Active', 'images/817352294subhan.png', 'BDMF', 'M7HE', 1, 0),
('Hotel', 'Luxery Room', '24', 'Active', '', 23, '', '', 'Active', 'images/18859863subhan.png', 'BDMF', 'PZC9', 1, 0),
('Hotel', 'Luxery Room', '24', 'Active', '', 23, '', '', 'Active', 'images/680053710subhan.png', 'BDMF', 'SNYS', 1, 0),
('fsdfsdfyyyyyyyyyyyyyyy', 'yyyyyyyyyyyyyyy', 'adsd', 'Active', 'efsefsef', 45, '', 'sdfsfs', 'Active', '', '4VLD', 'UNDE', 1, 1),
('dadwdtttttt', 'ttttttttttttt', 'adsd', 'Active', 'esfsefse', 44, '', 'fsdfs', 'Active', '', '7PF8', 'XCBR', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `indexnum` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`indexnum`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'OsamaAnwar', 'osama@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AreaId` int(255) NOT NULL,
  `AreaName` varchar(255) NOT NULL,
  `CityId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AreaId`, `AreaName`, `CityId`) VALUES
(1, 'Malir', 1),
(2, 'InidaArea', 2),
(4, 'Shah-e-Faisal', 1),
(5, 'Tariq Road', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(255) NOT NULL,
  `RoomName` varchar(255) NOT NULL,
  `Charges` varchar(255) NOT NULL,
  `AvailableRoom` int(255) NOT NULL,
  `BookRoom` int(255) NOT NULL,
  `BookingDate` varchar(255) NOT NULL,
  `UserCode_Seller` varchar(255) NOT NULL,
  `UserCode_Buyer` varchar(255) NOT NULL,
  `AddCode` varchar(255) NOT NULL,
  `BookCode` varchar(255) NOT NULL,
  `Status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `RoomName`, `Charges`, `AvailableRoom`, `BookRoom`, `BookingDate`, `UserCode_Seller`, `UserCode_Buyer`, `AddCode`, `BookCode`, `Status`) VALUES
('Hotel', 'Luxery Room', '12000', 10, 1, '5/9/2018', '4VLD', 'BDMF', '8C4P', '2Z85', 2),
('Hotel', 'Luxery Room', '40000', 4, 4, '5/9/2018', '4VLD', 'BDMF', '8C4P', '43RP', 0),
('PainGues', 'Standard Room', '12000', 12, 2, '5/9/2018', '4VLD', 'BDMF', '12AL', '6JUQ', 0),
('Hotel', 'Luxery Room', '40000', 4, 4, '8/9/2018', '4VLD', 'BDMF', '12AL', '6UMJ', 0),
('Hostels', 'Luxery Room', '12000', 10, 10, '6/9/2018', '4VLD', '7PF8', '8C4P', 'HD65', 0),
('Hotel', 'Luxery Room', '40000', 22, 2, '8/9/2018', '4VLD', 'BDMF', '12AL', 'IQT1', 1),
('Hotel', 'Luxery Room', '40000', 20, 20, '9/9/2018', '4VLD', '7PF8', '12AL', 'KFAU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Cityid` int(255) NOT NULL,
  `CityName` varchar(255) NOT NULL,
  `CountryId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Cityid`, `CityName`, `CountryId`) VALUES
(1, 'Karachi', 1),
(2, 'Mumbaii', 2);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Id` int(255) NOT NULL,
  `CountryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Id`, `CountryName`) VALUES
(1, 'Pakistan'),
(2, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `Coustomer_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Cnic` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ReenterPassword` varchar(255) NOT NULL,
  `UserCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`Coustomer_Name`, `Address`, `Email`, `Cnic`, `Mobile`, `Password`, `ReenterPassword`, `UserCode`) VALUES
('subhan', 'shamsi', 'subhanayub450@gmail.com', '425012315699', '032129310777', 'hello', 'hello', '4VLD'),
('asmar', 'shamsi', 'asmar@gmail.com', '425012315699', '032129310777', 'hello', 'hello', '7PF8'),
('Nehal', 'Defence', 'nehal@gmail.com', '425012315699', '032129310777', 'hello', 'hello', 'BDMF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`Addcode`),
  ADD KEY `AreaId` (`AreaId`),
  ADD KEY `UserCode` (`UserCode`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`indexnum`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AreaId`),
  ADD KEY `CityId` (`CityId`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookCode`),
  ADD KEY `AddCode` (`AddCode`),
  ADD KEY `UserCode` (`UserCode_Seller`),
  ADD KEY `UserCode_Buyer` (`UserCode_Buyer`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Cityid`),
  ADD KEY `CountryId` (`CountryId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD PRIMARY KEY (`UserCode`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `indexnum` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AreaId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Cityid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adds`
--
ALTER TABLE `adds`
  ADD CONSTRAINT `adds_ibfk_1` FOREIGN KEY (`AreaId`) REFERENCES `area` (`AreaId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adds_ibfk_4` FOREIGN KEY (`UserCode`) REFERENCES `coustomer` (`UserCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`CityId`) REFERENCES `city` (`Cityid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`UserCode_Seller`) REFERENCES `coustomer` (`UserCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`UserCode_Buyer`) REFERENCES `coustomer` (`UserCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`AddCode`) REFERENCES `adds` (`Addcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`CountryId`) REFERENCES `country` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

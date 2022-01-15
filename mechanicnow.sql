-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 02:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanicnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(50) NOT NULL,
  `adminUserN` varchar(50) NOT NULL,
  `adminPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUserN`, `adminPass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(50) NOT NULL,
  `custFirstname` varchar(50) NOT NULL,
  `custLastname` varchar(50) NOT NULL,
  `custAddress` varchar(50) NOT NULL,
  `custEmail` varchar(50) NOT NULL,
  `custCnumber` int(50) NOT NULL,
  `vehicleType` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `custFirstname`, `custLastname`, `custAddress`, `custEmail`, `custCnumber`, `vehicleType`, `Username`, `Password`) VALUES
(1, 'JINNO', 'JALOSJOS', 'LOOC, MARIBAGO', 'jinnojalosjos310@gmail.com', 2147483647, 'bicycle', 'JALOSJOS12', 'jalosjos12'),
(2, 'JEPRIEL', 'TIBAY', 'IBABAO', 'jepriel@gmail.com', 2147483647, 'bicycle', 'JEPRIEL1', 'jepriel1');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechID` int(50) NOT NULL,
  `mechFirstname` varchar(50) NOT NULL,
  `mechLastname` varchar(50) NOT NULL,
  `mechAddress` varchar(50) NOT NULL,
  `mechEmail` varchar(50) NOT NULL,
  `mechCnumber` varchar(50) NOT NULL,
  `mechValidID` int(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechID`, `mechFirstname`, `mechLastname`, `mechAddress`, `mechEmail`, `mechCnumber`, `mechValidID`, `Specialization`, `Username`, `Password`) VALUES
(1, 'JINNO', 'TIBS', 'LOOC, MARIBAGO', 'JINNOJALOSJOS310@GMAIL.COM', '234567', 0, 'SADF', 'TIBS', 'TIBS');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `restID` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `mechID` int(11) NOT NULL,
  `custFisrtname` varchar(11) NOT NULL,
  `custLastname` varchar(11) NOT NULL,
  `mechFirstname` varchar(11) NOT NULL,
  `mechLastname` varchar(11) NOT NULL,
  `serviceType` varchar(50) DEFAULT NULL,
  `serviceDescription` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `resDate` datetime(6) DEFAULT NULL,
  `resTime` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transID` int(50) NOT NULL,
  `resID` int(20) NOT NULL,
  `transdate` datetime(6) NOT NULL,
  `servicePayment` int(50) NOT NULL,
  `mechanicFare` int(50) NOT NULL,
  `totalPayment` int(50) NOT NULL,
  `custFirstname` varchar(50) NOT NULL,
  `mechFirstname` varchar(50) NOT NULL,
  `custLastname` varchar(50) NOT NULL,
  `mechLastname` varchar(50) NOT NULL,
  `serviceType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`restID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `restID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gearup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `product_id`, `name`, `description`, `price`, `quantity`) VALUES
(1, 1, 'Amaron Car Battery', '', 25000.00, 1),
(2, 2, 'Ceat Car Tyre', '', 175000.00, 1),
(3, 7, 'Havoline Full Sunthetic CVT Fluid', '', 50000.00, 3),
(4, 6, 'Havoline Automatic Transmission Fluid Type', '', 45000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PaymentMethod` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `Name`, `Address`, `PaymentMethod`, `Phone`) VALUES
(1, 'Thisal Fernando', '517/1, Heenkenda, Ragama', 'Cash', '0754993959');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `Image`, `Name`, `Description`, `Price`) VALUES
(1, 'AmaronCarBattery_25000.jpg', 'Amaron Car Battery', 'Car Battery', 25000.00),
(2, 'CeatCarTyre_175000.jpg', 'Ceat Car Tyre', 'Car Tyre', 175000.00),
(3, 'DuracellCarBattery_20000.jpg', 'Duracell Car Battery', 'Car Battery', 20000.00),
(4, 'EagleOneTyreSwiper_530.png', 'Eagle One Tyre Swiper', 'Tyre Swiper', 530.00),
(5, 'ExideCarBattery_16000.jpg', 'Exide Car Battery', 'Car Battery', 16000.00),
(6, 'HavolineAutomaticTransmissionFluidType.png', 'Havoline Automatic Transmission Fluid Type', 'Fluid', 45000.00),
(7, 'HavolineFullSuntheticCVTFluid.png', 'Havoline Full Sunthetic CVT Fluid', 'Fluid', 50000.00),
(8, 'HavolinePRODSFullSyntheticMotorOil.png', 'Havoline PRO-DS Full Synthetic Motor Oil', 'Motor Oil', 11000.00),
(9, 'HavolineUnniversalCoolant.png', 'Havoline Universal Coolant', 'Coolant', 5000.00),
(10, 'HoltsTyreweld_1985.png', 'Holts Tyreweld ', 'Clearing Liquid', 1985.00),
(11, 'PrestonePremixAntifreeze_4360.png', 'Prestone Premix Antifreeze', 'Antifreezer', 4360.00),
(12, 'PretoneRadiatorCoolGreenFluid_1660.jpg', 'Pretone Radiator Cool Green Fluid', 'Radiators', 1660.00),
(13, 'PRSDOT3_1695.png', 'PRSDOT3', 'Car Polish', 1695.00),
(14, 'ToyotaAirFilter_2300.jpg', 'Toyota Air Filter', 'Air Filters', 2300.00),
(15, 'ValvolineSynpowerow20_16420.png', 'Valvoline Synpowerow 20', 'Motor Oil', 16420.00),
(16, 'SIMB2Btyre&trim(WETLOOK)TRG_2980.png', 'SIM B2B tyre & trim (WET LOOK) TRG', 'Car Wax', 2980.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fName`, `dob`, `gender`, `maritalstatus`, `phone`, `email`) VALUES
(1, 'Thisal Fernando', '2002-10-28', 'Male', 'Single', '0754993959', 'thisalfernando39@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

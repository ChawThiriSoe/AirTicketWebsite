-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 11:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(128) NOT NULL,
  `adminName` varchar(128) COLLATE utf8_bin NOT NULL,
  `adminPhone` varchar(128) COLLATE utf8_bin NOT NULL,
  `adminEmail` varchar(128) COLLATE utf8_bin NOT NULL,
  `adminPwd` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPhone`, `adminEmail`, `adminPwd`) VALUES
(1, 'Than Than Lwin', '09799567752', 'thanlwin99@gmail.com', 'bfa74ace87a438e4686c2e63c69d13dc');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `airId` int(128) NOT NULL,
  `airName` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`airId`, `airName`) VALUES
(1, 'Air Mandalay Airline'),
(2, 'Yangon Airways Airline'),
(3, 'Air KBZ Airline'),
(4, 'Asian Wings Airline'),
(5, 'Golden Myanmar Airline'),
(6, 'Mann Yadanarpon Airline'),
(7, 'Air Bagan Airline'),
(8, 'Myanmar Airways Airline'),
(9, 'Air Asia Airline'),
(10, 'Air China Airline'),
(11, 'Bangkok Airways Airline'),
(12, 'Dragon Air (KA) Airline'),
(13, 'Myanmar Airways International Airline'),
(14, 'Thai Airways International Airline'),
(15, 'Vietnam Airlines (VN)'),
(16, 'Nok Air Airline'),
(17, 'Druk Airlines (KB)');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusId` int(128) NOT NULL,
  `cusName` varchar(128) COLLATE utf8_bin NOT NULL,
  `cusPhone` varchar(128) COLLATE utf8_bin NOT NULL,
  `cusEmail` varchar(128) COLLATE utf8_bin NOT NULL,
  `cusPwd` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusId`, `cusName`, `cusPhone`, `cusEmail`, `cusPwd`) VALUES
(1, 'Chaw Thiri Soe', '09799586616', 'chawthirisoe@gmail.com', '4d31bd5da6aa800b9a2eb3847cbd6415'),
(2, 'Aye Sandi', '09798743575', 'ayesandi@gmail.com', 'aae546a9a36b4b5bf6ca550b7bca97ad'),
(3, 'than', '096778834984', 'than@gmail.com', '7761127a460aaf290ed953098284dd1a'),
(4, 'nang', '09468283723', 'nang@gmail.com', 'd9e58ca36de842e0388a4ad287298ea0');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `cusId` int(128) NOT NULL,
  `ticId` int(128) NOT NULL,
  `qty` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`cusId`, `ticId`, `qty`) VALUES
(1, 2, 2),
(1, 2, 2),
(3, 3, 2),
(3, 2, 5),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cusId` int(128) NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cusId`, `orderDate`) VALUES
(1, '2019-09-12'),
(3, '2019-09-12'),
(3, '2019-09-12'),
(3, '2019-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticId` int(128) NOT NULL,
  `ticName` varchar(128) COLLATE utf8_bin NOT NULL,
  `ticDate` varchar(128) COLLATE utf8_bin NOT NULL,
  `ticPrice` int(128) NOT NULL,
  `oriPrice` int(128) NOT NULL,
  `ticImg` varchar(128) COLLATE utf8_bin NOT NULL,
  `ticDes` varchar(128) COLLATE utf8_bin NOT NULL,
  `airId` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticId`, `ticName`, `ticDate`, `ticPrice`, `oriPrice`, `ticImg`, `ticDes`, `airId`) VALUES
(1, 'Yangon to Mandalay', '09/03/2019', 350000, 320000, '01_Common-Myths-About-Airplanes-You-Need-to-Stop-Believing_559714906_motive56-760x506.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, a cup of drink', 1),
(2, 'Yangon to Taunggyi', '09/10/2019', 322000, 310000, '1.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 3),
(3, 'Yangon to Nay Pyay Taw', '09/14/2019', 439000, 430000, '5a64bd5200d0eff6048b4ccb-750-563.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 4),
(4, 'Yangon to Nay Pyay Taw', '09/18/2019', 439000, 440000, '5c2d1aaf0df1761295400933-750-563.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 5),
(5, 'Mandalay to Yangon', '09/03/2019', 499000, 500000, '8.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 6),
(6, 'Yangon to Nay Pyay Taw', '09/22/2019', 499000, 500000, '10.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 4),
(7, 'Bago to Yangon', '09/18/2019', 322000, 310000, '11.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 5),
(8, 'Yangon to Bagan', '09/27/2019', 499000, 479000, '12.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 7),
(9, 'Yangon to Mandalay', '09/30/2019', 350000, 355000, '16_64_09_Airplane_flying_in_Cloud.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1),
(10, 'Yangon to Taunggyi', '09/03/2019', 499000, 495000, '24-feb-2-crop.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1),
(11, 'Bagan to Yangon', '09/14/2019', 439000, 429000, '700_FO26840702_03b0928e1bccd2cbe2bb397231a7bcfb.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 7),
(12, 'Yangon to Taunggyi', '09/10/2019', 499000, 500000, '800_e175klm_low.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 6),
(13, 'Yangon to Nay Pyay Taw', '09/30/2019', 1500000, 1400000, '12399_Wonderful-landscape-over-the-clouds-Flying-with-plane.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 8),
(14, 'Yangon to China', '09/03/2019', 496000, 493000, '29815E0C00000578-0-image-m-5_1433947137443.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 9),
(15, 'Yangon to Taunggyi', '10/03/2019', 496000, 480000, '47502c3e6dbe486d70f4df28a781a661.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 3),
(16, 'Yangon to China', '09/22/2019', 499000, 499000, '160503_FT_cybersecurity-airplanes.jpg.CROP_.promo-xlarge2.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 10),
(17, 'Yangon to Thai', '09/18/2019', 499000, 496000, '27431566-airlines-wallpapers.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 9),
(18, 'Yangon to Mandalay', '09/03/2019', 350000, 350000, '56750200-commercial-passenger-plane-flying-above-clouds.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 3),
(19, 'Yangon to Thai', '10/09/2019', 450000, 430000, '175544661-56a24fc05f9b58b7d0c8ec0e.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 11),
(20, 'Thai to Yangon', '10/15/2019', 499000, 490000, '621849218.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 11),
(21, 'Yangon to Nay Pyay Taw', '10/15/2019', 499000, 500000, '1046842027.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 5),
(22, 'Yangon to Japan', '09/10/2019', 3500000, 3000000, '14114424364_219291fa92_b.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 12),
(23, 'Nay Pyay Taw to Yangon', '10/16/2019', 480000, 485000, '1545796882300.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1),
(24, 'Bago to Yangon', '10/03/2019', 450000, 460000, '1548048327915.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 4),
(25, 'Vietnam to Yangon', '10/20/2019', 1000000, 1005000, 'AEGEAN-airbus-aircraft.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 15),
(26, 'Yangon to China', '09/03/2019', 2000000, 1900000, 'Aerospace-Lightweight.jpeg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 16),
(27, 'Yangon to Thai', '10/25/2019', 499000, 495000, 'air1.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 12),
(28, 'China to Yangon', '09/27/2019', 1000000, 1000000, 'air2.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 16),
(29, 'Thai to Yangon', '10/29/2019', 2000000, 2000000, 'Airbus.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 12),
(30, 'Yangon to Mandalay', '09/10/2019', 350000, 350000, 'airbus-a320-wallpapers-31762-4224051.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1),
(31, 'Thai to Yangon', '10/12/2019', 2000000, 1990000, 'airline-airplane-aircraft-810x476.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 14),
(32, 'Nay Pyay Taw to Yangon', '10/09/2019', 480000, 480000, 'airliner-over-exotic-island-3293127.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 2),
(33, 'Yangon to Japan', '09/03/2019', 15000000, 14500000, 'Airplane-Images-with-Beautiful-Picture-of-Flight-in-Sunset-500x313.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 17),
(34, 'Yangon to Vietnam', '10/03/2019', 1000000, 1000000, 'Airport_07-12-12_2_retus_final3.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 15),
(35, 'Yangon to Thai', '10/11/2019', 480000, 450000, 'fiji_airways.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 13),
(36, 'Yangon to Bangkok', '09/27/2019', 1500000, 1495000, 'FJ-LIVERY_02_9868LR.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 17),
(37, 'Yangon to Vietnam', '10/09/2019', 4500000, 4000000, 'getty_505754522_2000133320009280155_354106.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 13),
(38, 'Yangon to Mandalay', '09/03/2019', 350000, 330000, 'giant_12620.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1),
(39, 'Nay Pyay Taw to Yangon', '09/10/2019', 480000, 450000, 't-acft-a350-4.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 2),
(40, 'Mandalay to Yangon', '09/27/2019', 1000000, 1000000, '24-feb-2-crop.jpg', 'Wet tissue, one pillow, one blanket, one set of meal, one cup of drink', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`airId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `airId` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusId` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticId` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

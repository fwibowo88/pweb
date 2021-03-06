-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 04:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbotoweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `userID` varchar(50) NOT NULL,
  `namaAdmin` varchar(45) DEFAULT NULL,
  `passwordAdmin` varchar(45) DEFAULT NULL,
  `saltAdmin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`userID`, `namaAdmin`, `passwordAdmin`, `saltAdmin`) VALUES
('u001', 'Igor', '1234567890', 'a'),
('u002', 'Ivan', '0987654321', 'b'),
('u003', 'Viktor', '123456', 'c'),
('u004', 'Nikolae', '654321', 'd'),
('u005', 'Anastasiya', '160987', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `tblmerk`
--

CREATE TABLE `tblmerk` (
  `idMerk` int(11) NOT NULL,
  `namaMerk` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmerk`
--

INSERT INTO `tblmerk` (`idMerk`, `namaMerk`) VALUES
(11, 'Toyota'),
(12, 'Mitsubishi'),
(13, 'Daihatsu'),
(14, 'Ford'),
(15, 'Nissan'),
(16, 'Suzuki'),
(17, 'Honda'),
(18, 'BMW'),
(19, 'Hyundai');

-- --------------------------------------------------------

--
-- Table structure for table `tblmobil`
--

CREATE TABLE `tblmobil` (
  `idMobil` int(11) NOT NULL,
  `idMerk` int(11) NOT NULL,
  `tipe` varchar(45) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `jarakSumbuRoda` int(11) DEFAULT NULL,
  `radiusPutar` int(11) DEFAULT NULL,
  `hargaMin` double DEFAULT NULL,
  `hargaMax` double DEFAULT NULL,
  `kapasitasMesin` int(11) DEFAULT NULL,
  `kapasitasTangki` int(11) DEFAULT NULL,
  `ukuranVelg` int(11) DEFAULT NULL,
  `ukuranRoda` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmobil`
--

INSERT INTO `tblmobil` (`idMobil`, `idMerk`, `tipe`, `panjang`, `lebar`, `tinggi`, `jarakSumbuRoda`, `radiusPutar`, `hargaMin`, `hargaMax`, `kapasitasMesin`, `kapasitasTangki`, `ukuranVelg`, `ukuranRoda`) VALUES
(20, 11, 'Fortuner', 4795, 1855, 1835, 2745, 3500, 467.3, 659.4, 2393, 80, 17, '265/65 R17'),
(21, 12, 'Xpander', 4475, 1750, 1695, 2775, 3000, 197.1, 253.4, 1499, 45, 15, '185/65 R15'),
(22, 17, 'Mobilio', 4386, 1683, 1603, 2650, 3000, 193, 247, 1496, 42, 15, '185/65 R15'),
(23, 13, 'Sigra', 4070, 1655, 1600, 2525, 3000, 109.9, 150.65, 998, 36, 13, '155/80 R13'),
(24, 16, 'Ignis', 3700, 1660, 1595, 2435, 3000, 144.5, 175.5, 1197, 32, 15, '175/65 R15'),
(25, 15, 'Juke', 4135, 1765, 1565, 2350, 3000, 301.7, 330.9, 1498, 52, 17, '215/55 R17'),
(26, 18, 'M5', 4910, 2119, 1467, 2964, 2500, 4006, 4006, 4395, 80, 19, '265/40 ZR19'),
(27, 19, 'Tucson', 4475, 1850, 1650, 2670, 3000, 385, 458, 1999, 62, 17, '225/60 R17'),
(28, 12, 'Pajero Sport', 4785, 1815, 1805, 2800, 3000, 454, 662, 2477, 68, 16, '265/70 R16'),
(29, 17, 'Accord', 4870, 1850, 1465, 2775, 3000, 646, 646, 2356, 65, 18, '235/45 R18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tblmerk`
--
ALTER TABLE `tblmerk`
  ADD PRIMARY KEY (`idMerk`);

--
-- Indexes for table `tblmobil`
--
ALTER TABLE `tblmobil`
  ADD PRIMARY KEY (`idMobil`),
  ADD KEY `fk_tblMobil_tblMerk_idx` (`idMerk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmerk`
--
ALTER TABLE `tblmerk`
  MODIFY `idMerk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblmobil`
--
ALTER TABLE `tblmobil`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmobil`
--
ALTER TABLE `tblmobil`
  ADD CONSTRAINT `fk_tblMobil_tblMerk` FOREIGN KEY (`idMerk`) REFERENCES `tblmerk` (`idMerk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

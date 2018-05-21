-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 07:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

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
('AAA', '1234', 'xx', ''),
('abc', 'AAA', '', ''),
('abca', 'AAA', '82258f90af2f75aff141bcbef9f345f2', '3'),
('admin', 'admin', 'admin', '1'),
('ALANA', 'ALAN ALAN', 'edabf5cde6f88d35e32b7e37aeed4ed9', '2'),
('lol', 'COBA YA', 'lol', 'xx'),
('s', '1', 'eaf418aefb7a9c97a6abeff9e7d827a0', '1'),
('user1', 'FERNANDO WIBOWO', '1234', 'xx');

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
(1, 'CC'),
(2, 'HONDA'),
(3, 'DATSUN'),
(4, 'MITSUBISHI'),
(5, ''),
(6, 'MERCY'),
(7, 'WULING'),
(8, 'COBA DEH'),
(9, 'aAAA');

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
(1, 4, 'EXPANDER AT', 4475, 1750, 1700, 2755, 5, 189, 246, 1500, 45, 15, '185/65 R15 '),
(2, 1, 'INNOVA G M/T DIESEL', 4735, 1830, 1795, 2750, NULL, NULL, NULL, 2393, 50, 16, '205/65 R16 '),
(3, 1, 'INNNN', 1, 2, 3, 4, 5, 7, 6, 8, 9, 0, '11'),
(4, 1, 'adsad', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 1, 'WULING CONFERO S', 111, 111, 111, 111, 111, 500, 1000, 900, 900, 1, '1'),
(6, 1, 'sd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(7, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(8, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(9, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(10, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(11, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(12, 1, 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(13, 1, 'sd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(14, 1, 'sd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(15, 1, 'sd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(16, 1, 'a1', 11, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2'),
(17, 2, 'COBA DEH YA XX', 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, '1');

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
  MODIFY `idMerk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblmobil`
--
ALTER TABLE `tblmobil`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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

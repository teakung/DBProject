-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 05:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `notebookID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`notebookID`, `username`, `comment`) VALUES
(1, 'alex', 'Hi, This is a good One!'),
(1, 'caesar', 'This Notebook is Fast!'),
(1, 'Elisa', 'Hi, How to replace Harddrive. Thanks'),
(1, 'Jeff', 'Wow, Good Spec.'),
(2, 'Jeff', 'Cheap and Fast!'),
(15, 'Jeff', 'Hi, Does this notebook available on Pantip?'),
(13, 'John', 'Look So good!'),
(6, 'tekung', 'Good Screen.');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE IF NOT EXISTS `cpu` (
  `CPUID` int(11) NOT NULL,
  `CPUname` varchar(40) NOT NULL,
  `ClockSpeed (GHz)` float NOT NULL,
  `ClockSpeed_turbo (GHz)` float NOT NULL,
  `CoreCount` int(11) NOT NULL,
  `Thread` int(11) NOT NULL,
  `cache(MB)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`CPUID`, `CPUname`, `ClockSpeed (GHz)`, `ClockSpeed_turbo (GHz)`, `CoreCount`, `Thread`, `cache(MB)`) VALUES
(1, 'amd fx-7500', 2.1, 3.3, 4, 4, 4),
(2, 'amd fx-7600p', 2.7, 3.6, 4, 4, 4),
(3, 'intel core i7-5500u', 2.4, 3, 2, 4, 4),
(4, 'intel core i7-4710hq', 2.5, 3.5, 4, 8, 6),
(5, 'intel core i7-4720hq', 2.6, 3.6, 4, 8, 6),
(6, 'intel core i3-4005u', 1.7, 0, 2, 4, 3),
(7, 'intel core i3-4010u', 1.7, 0, 2, 4, 3),
(8, 'intel core i3-4000m', 2.4, 0, 2, 4, 3),
(9, 'intel core i5-5200u', 2.2, 2.7, 2, 4, 3),
(10, 'intel core i5-5300u', 2.3, 2.9, 2, 4, 3),
(11, 'intel core i5-4210u', 1.7, 2.7, 2, 4, 3),
(12, 'amd e1-6010', 1.35, 0, 2, 2, 1),
(13, 'intel core m-5y31', 0.9, 2.4, 2, 4, 4),
(14, 'intel core m-5y71', 1.2, 1.9, 2, 4, 4),
(15, 'intel core i5-5257u', 2.7, 3.1, 2, 4, 3),
(16, 'intel core i7-4712mq', 2.3, 3.3, 4, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE IF NOT EXISTS `notebook` (
  `notebookID` int(11) NOT NULL,
  `NBname` varchar(50) NOT NULL,
  `screensize` float NOT NULL,
  `screen_resolution` varchar(20) NOT NULL,
  `main_memory` float NOT NULL,
  `harddisk` float NOT NULL,
  `Optical_disk` varchar(1) NOT NULL,
  `Battery` float NOT NULL,
  `Weiqht` float NOT NULL,
  `Rating` float NOT NULL,
  `OS` varchar(20) NOT NULL,
  `Warranty` float NOT NULL,
  `Price` float NOT NULL,
  `VGAID` int(11) NOT NULL,
  `CPUID` int(11) NOT NULL,
  `remark` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`notebookID`, `NBname`, `screensize`, `screen_resolution`, `main_memory`, `harddisk`, `Optical_disk`, `Battery`, `Weiqht`, `Rating`, `OS`, `Warranty`, `Price`, `VGAID`, `CPUID`, `remark`, `picture`) VALUES
(1, 'lenovo y5070', 15.6, '1920x1080', 4, 1024, 'n', 54, 2.4, 4.7, 'dos', 2, 29990, 10, 4, 'None', '1.jpg'),
(2, 'asus x550ze-xx047d', 15.6, '1366x768', 4, 1024, 'y', 44, 2.26, 4.8, 'dos', 2, 19990, 5, 2, 'None', '2.jpg'),
(3, 'lenovo thinkpad x250', 12.5, '1366x768', 4, 1024, 'n', 48, 1.3, 4, 'dos', 3, 32900, 2, 9, 'Bussiness', '3.jpg'),
(4, 'hp 14-g001au', 14, '1366x768', 4, 500, 'y', 41, 1.96, 1.8, 'dos', 1, 10990, 4, 12, 'None', '4.jpg'),
(5, 'lenovo thinkpad edge e440', 14, '1366x768', 4, 1024, 'y', 48, 2.13, 3.2, 'dos', 1, 21900, 7, 8, 'Bussiness', '5.jpg'),
(6, 'msi gp60 2qf-892th ', 15.6, '1920x1080', 4, 1024, 'y', 49, 2.52, 4, 'dos', 2, 34900, 11, 5, 'None', '6.jpg'),
(7, 'msi gs60 2qc ghost', 15.6, '1920x1080', 8, 1024, 'n', 52, 1.96, 5, 'windows 8.1', 2, 56900, 12, 5, 'None', '7.jpg'),
(8, 'dell inspiron 7348-w561040th', 13.3, '1920x1080', 8, 500, 'n', 43, 1.67, 4.3, 'windows 8.1', 2, 35990, 2, 3, 'Convertible', '8.jpg'),
(9, 'dell inspiron n3542-w560935th', 15.6, '1366x768', 4, 500, 'y', 40, 1.99, 3.2, 'ubuntu', 1, 15990, 8, 6, 'None', '9.jpg'),
(10, 'asus k550ld-xx106d', 15.6, '1366x768', 4, 500, 'y', 37, 2.3, 3, 'dos', 2, 16990, 8, 7, 'None', '10.jpg'),
(11, 'dell latitude 7450', 14, '1920x1080', 8, 128, 'n', 54, 1.56, 5, 'windows 8.1', 3, 45490, 2, 10, 'Bussiness', '11.jpg'),
(12, 'apple macbook retina 12', 12, '2304x1440', 8, 256, 'n', 39.7, 0.92, 4.5, 'osx', 1, 43900, 1, 13, 'None', '12.jpg'),
(13, 'apple macbook pro retina 13', 13.3, '2560x1600', 8, 128, 'n', 74.9, 1.58, 4, 'osx', 1, 43900, 3, 15, 'None', '13.jpg'),
(14, 'asus k451ln', 14, '1366x768', 4, 1024, 'y', 48, 2, 4.1, 'windows 8.1', 2, 21990, 9, 11, 'None', '14.jpg'),
(15, 'asus g751jt', 17.3, '1920x1080', 16, 1024, 'y', 88, 4.8, 4.8, 'windows 8.1', 2, 59990, 13, 5, 'None', '15.jpg'),
(16, 'asus zenbook ux305fa', 13.3, '1920x1080', 4, 256, 'n', 45, 1.18, 3.8, 'windows 8.1', 2, 29990, 1, 14, 'None', '16.jpg'),
(17, 'lenovo ideapad g4080', 14, '1366x768', 4, 1024, 'y', 41, 2.2, 2.5, 'windows 8.1', 2, 23590, 5, 3, 'None', '17.jpg'),
(18, 'hp pavilion 15', 15.6, '1366x768', 8, 1024, 'y', 41, 2.54, 4.4, 'windows 8.1', 1, 26490, 9, 3, 'Touchscreen', '18.jpg'),
(19, 'toshiba satellite l50', 15.6, '1366x768', 4, 500, 'y', 45, 2.2, 1.3, 'dos', 1, 25990, 6, 11, 'None', '19.jpg'),
(20, 'acer aspire e5-572g', 15.6, '1366x768', 8, 1024, 'y', 56, 2.6, 2.9, 'windows 8.1', 2, 25900, 9, 16, 'None', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('admin', 'admin', 'admin@notebookPlus.com'),
('alex', '123344', 'alex@hotmail.com'),
('caesar', '098761', 'caesar@h.com'),
('Elisa', 'qwerty', 'Elisa@Hotmail.com'),
('Jeff', 'kioski', 'Jeff@gmail.com'),
('John', '123356', 'John@h.com'),
('taekung', '789355', 'taekung@notebookPlus.com'),
('tekung', '123456', 'nathee@noteboolPlus.com');

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

CREATE TABLE IF NOT EXISTS `vga` (
  `VGAID` int(11) NOT NULL,
  `VGAname` varchar(40) NOT NULL,
  `Vendor` varchar(20) NOT NULL,
  `CoreSpeed(GHz)` float NOT NULL,
  `CoreCount` int(11) NOT NULL,
  `Memory size(MB)` int(11) NOT NULL,
  `Memory Type` varchar(10) NOT NULL,
  `OnBoard` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`VGAID`, `VGAname`, `Vendor`, `CoreSpeed(GHz)`, `CoreCount`, `Memory size(MB)`, `Memory Type`, `OnBoard`) VALUES
(1, 'intel hd graphics 5300', 'intel', 0.1, 24, 0, 'none', 'yes'),
(2, 'intel hd graphics 5500', 'intel', 0.3, 24, 0, 'none', 'yes'),
(3, 'intel iris graphics 6100', 'intel', 0.3, 48, 0, 'none', 'yes'),
(4, 'amd radeon hd 8210 (1gb ddr3)', 'amd', 0.3, 128, 0, 'none', 'yes'),
(5, 'amd radeon r5 m230(2gb gddr3)', 'amd', 0.885, 320, 4096, 'ddr3', 'no'),
(6, 'amd radeon r7 m260 (2gb gddr3)', 'amd', 0.715, 384, 4096, 'ddr3', 'no'),
(7, 'nvidia geforce gt 740m (2 gb gddr3)', 'nvidia', 0.81, 384, 2048, 'ddr3', 'no'),
(8, 'nvidia geforce gt 820m (2gb gddr3)', 'nvidia', 0.775, 96, 2048, 'ddr3', 'no'),
(9, 'nvidia geforce gt 840m (2gb gddr3)', 'nvidia', 1, 384, 4096, 'ddr3', 'no'),
(10, 'nvidia geforce gtx 860m(2gb gddr5)', 'nvidia', 1, 640, 4096, 'gddr5', 'no'),
(11, 'nvidia geforce gtx 950m (2gb gddr3)', 'nvidia', 0.914, 640, 4096, 'ddr3', 'no'),
(12, 'nvidia geforce gtx 960m (2gb gddr5)', 'nvidia', 1, 640, 4096, 'gddr5', 'no'),
(13, 'nvidia geforce gtx 970m (3gb gddr5)', 'nvidia', 0.924, 2560, 12288, 'gddr5', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`CPUID`);

--
-- Indexes for table `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`notebookID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`VGAID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

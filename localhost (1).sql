-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2022 at 04:25 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19591074_hostel2022`
--
CREATE DATABASE IF NOT EXISTS `id19591074_hostel2022` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19591074_hostel2022`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('pramodgoswami1432@gmail.com', 'admin@27');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `moble` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`email`, `password`, `address`, `moble`, `name`, `gender`) VALUES
('pramodgoswami1432@gmail.com', 'pramod@27', 'Nepali Colony Bosco Nagar Latma, Hesag Hatia Ranchi.', '6201794185', 'tata', 'M'),
('srinkhalpriya@gmail.com', 'srink@1234', 'Sharda Battery Gali', '9334484874', 'Ranchi', 'F'),
('dimple2027@gmail.com', 'dandp123@', 'Singhmore', '8340295244', 'Ranchi', 'F'),
('vikash00@gmail.com', 'vikash@20', 'Tatisilwai PO-MAHILONG', '9934764523', 'Ranchi', 'M'),
('jaibiroraon45@gmail.com', 'jaibir1234@', 'mandar,ranchi', '7367959674', 'ranchi', 'M'),
('animakmrimht1923@gmail.com', 'anima23@', 'Tatisilwai ', '6203806358', 'Ranchi', 'F'),
('QTBIHoNmqmAU8880@bPPNu.btP', 'gQSeB77@', 'uKuhkalqCv ', '9273826437', 'rxzpXZ', 'W'),
('priyankayadav1432@gmail.com', '12345678@', 'AT-DWARIKA,PANKI,GP-KEKAR GARH,BLOCK-PANKI', '9122646056', 'DWARIKA', 'F'),
('mk62955@gmail.com', '12345678@', 'Hatia', '9430735677', 'Ranchi', 'M'),
('vikash000050@gmail.com', 'ghsjjsks@12', 'Tatisilwai PO-MAHILONG', '9945781289', 'Ranchi', 'M'),
('Swetathakkar840@gmail.com', 'Sweety@840', 'Dipatoli', '9113780571', 'Ranchi', 'F'),
('priyankayadav20092000@gmail.com', '12345678@', 'singh more', '2345678998', 'ranchi', 'F'),
('mahtoanima16@gmail.com', 'Anima@23', 'Tatisilwai ', '6203806358', 'Ranchi', 'F'),
('khalkhojaibir@gmail.com', 'Janedo12@#$_&&+', 'Kanjiya ', '7870704437', 'Ranchi ', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `cust1`
--

CREATE TABLE `cust1` (
  `Hostel Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MobileNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facility` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hostel Rate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pic1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic3` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cust1`
--

INSERT INTO `cust1` (`Hostel Name`, `MobileNo`, `address`, `Location`, `facility`, `Hostel Rate`, `type`, `pic1`, `pic2`, `pic3`) VALUES
('Muskan girls hostel', '6201979687', 'ratu road', 'lalpur', 'All facility Avilable.', '2000', 'Boys', 'bunk-beds-hostel-room-54783462.jpg', 'Hostel-infra.jpg', 'HOSTEL 5.JPG'),
('Swarnarekha girls hostel', '6203806358', 'Jatin Chandra road burdwan compound lalpur', 'Lalpur ', 'You can make payment via cash, master card, visa card , credit card\r\n24 hours electricity is available\r\nFriendly environment and healthy food', '3000', 'Girls', 'swarnrekha-girls-hostel-lalpur-ranchi-hostels-for-working-women-rrx5py51uv.jpg', '13490profile.jpg', 'swarnrekha-girls-hostel-ranchi_1579073802 (1).jpg'),
('arayan hosetl', '7979977353', 'sarjana chowk', 'main road', 'on roada', '1500', 'Boys', 'h3.jpg', 'hh.jpg', 'h10.jpeg'),
('verma hostel', '6555865454', 'patel nagar hatia', 'khuti', '24 hour water and ac avilable', '4000', 'Boys', 'What-is-a-hostel-1a-min.jpg', 'ladies-hostel-guest-accommodation-tirupur-0kweya7pbh.jpg', 'theresa-ladies-hostels-mogappair-east-chennai-hostels-pqthw1j8x4.jpg'),
('RSST GIRLS HOSTEL', '6366456217', '45/1, 22nd Cross, Jayanagar, III Block Bengaluru-560011 Karnataka, India', 'benguluru', 'Accommodation up to 40 beds\r\nDining\r\nDrinking water,\r\nReading room,\r\nDaily newspapers and\r\nFree wi-fi', '3000', 'Girls', '9Q8A3318-scaled.jpg', '9Q8A3297-2-scaled.jpg', 'sri-sivadurga-ladies-hostel-kanuru-vijayawada-paying-guest-accommodations-0wfcpyyoha.jpg'),
('Dimple girls hostel', '8340295244', 'Ranchi hatia', 'Singhmor', '3Bhk, free wifi, water supply 24 hours', '7000', 'Girls', '8-bed-mixed-gender-dorm.jpg', 'hostel-1.jpg', 'hostel-dormitory-beds-arranged-room-98447572.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `hname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comm` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`hname`, `remail`, `comm`, `grad`, `datetime`) VALUES
('Dimple Girls Hostel', 'pramodgoswami1432@gmail.com', 'Nice Hostel', '4', 'Sat Oct 01 2022 13:51:29 GMT+0530 (India Standard Time)'),
('Muskan girls hostel', 'pramodgoswami1432@gmail.com', 'best hostel in ranchi', '5', 'Sun Oct 02 2022 15:44:25 GMT+0530 (India Standard Time)'),
('Muskan girls hostel', 'pramodgoswami1432@gmail.com', 'best hostel in ranchi', '5', 'Sun Oct 02 2022 15:44:25 GMT+0530 (India Standard Time)'),
('verma hostel', 'pramodgoswami1432@gmail.com', 'nive', '3', 'Fri Oct 14 2022 16:01:16 GMT+0530 (India Standard Time)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

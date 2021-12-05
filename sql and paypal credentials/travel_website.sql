-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2021 at 10:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `username`, `password`, `flag`) VALUES
(1, 'admin', '7c222fb2927d828af22f592134e8932480637c0d', '2'),
(5, 'testadmin', '7c222fb2927d828af22f592134e8932480637c0d', '1');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(100) NOT NULL,
  `adv_org` varchar(200) NOT NULL,
  `ad_to` varchar(255) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `adv_org`, `ad_to`, `img_path`) VALUES
(1, 'aa', '2021-09-09', 'upload/d2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`Id`, `firstname`, `lastname`, `email`, `password`) VALUES
(5, 'aa', 'bb', 'test@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(6, 'eee', 'eee', 'bbb@a.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(7, 'new', 'new', 'newtest@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(8, 'new', 'user', 'newuser@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(9, 'testuser', 'testuser', 'testuser123@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(100) NOT NULL,
  `enquiry_for` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `departure_from` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `enquiry_for`, `full_name`, `mobile`, `email`, `departure_from`, `message`) VALUES
(1, 'Submit', 'aa', 'aa', 'aaa@a.com', 'sassa', 'asdssd'),
(2, 'Submit', 'test name', '04517289347', 'testuser@gmail.com', 'australia', 'test message'),
(3, 'Submit', 'test name', '0938578377', 'testname@gmail.com', 'australia', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img_path` text NOT NULL,
  `facility_highlight` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `img_path`, `facility_highlight`) VALUES
(3, 'United States', 'upload/p1.jpg', 'flight accomodation'),
(4, 'Paris', 'upload/p4.jpg', 'meals and travel insurance'),
(5, 'Dubai', 'upload/p6.jpg', 'free breakfast and parking'),
(6, 'Spain', 'upload/p2.jpg', 'All inclusive accomodation offer'),
(7, 'Egypt', 'upload/p5.jpg', 'Admin + Lunch'),
(8, 'Italy', 'upload/p3.jpg', 'Travel accomodation'),
(9, 'Trip to New York', 'upload/javn.jpg', 'Statue of liberty');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_desc` text NOT NULL,
  `start_from` varchar(100) NOT NULL,
  `img_path` text NOT NULL,
  `facility_highlight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_desc`, `start_from`, `img_path`, `facility_highlight`) VALUES
(2, 'Australia', 'Trip to Sydney', '150', 'upload/s1.jpg', 'Pickup and Drop facility || Hotel || Excursions'),
(3, 'london', 'Trip to london bridge', '200', 'upload/s2.jpg', 'flight accomodation || rental car || day tours || meals and travel insurance');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `id` int(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `sub_pid` varchar(100) NOT NULL,
  `sub_pname` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `bfrom` varchar(100) NOT NULL,
  `bto` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`id`, `cid`, `cname`, `pid`, `sub_pid`, `sub_pname`, `amount`, `bfrom`, `bto`, `feedback`) VALUES
(2, '4', 'aa aa', '4', '2', 'as', '125', '2021-10-06', '2021-10-06', ''),
(3, '4', 'aa aa', '4', '2', 'as', '125', '2021-10-05', '2021-10-13', ''),
(4, '5', 'aa bb', '4', '2', 'as', '125', '2021-10-05', '2021-10-14', ''),
(5, '5', 'aa bb', '4', '2', 'as', '125', '2021-10-05', '2021-10-14', ''),
(6, '4', 'aa aa', '4', '2', 'as', '125', '2021-10-05', '2021-10-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int(11) NOT NULL,
  `cid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `sub_pid` varchar(100) NOT NULL,
  `sub_pname` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `payerid` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`id`, `cid`, `cname`, `pid`, `sub_pid`, `sub_pname`, `amount`, `paymentid`, `token`, `payerid`, `pdate`) VALUES
(3, 4, 'aa aa', '4', '2', 'as', '125', 'PAYID-MFNUC7A1KE35916BV083991H', 'EC-15F60028PS955434A', 'QGVBKX7CWWR62', '2021-10-04'),
(4, 4, 'aa aa', '4', '2', 'as', '125', 'PAYID-MFNU5CA92F758522F099405N', 'EC-33J05523A7282282W', 'QGVBKX7CWWR62', '2021-10-04'),
(5, 5, 'aa bb', '4', '2', 'as', '125', 'PAYID-MFN5HDQ7DB82184BF9383322', 'EC-23M443929S1445017', 'QGVBKX7CWWR62', '2021-10-05'),
(6, 5, 'aa bb', '4', '2', 'as', '125', 'PAYID-MFOCVAY49D79319SH2265459', 'EC-9MG33828L5889513W', 'QGVBKX7CWWR62', '2021-10-05'),
(7, 4, 'aa aa', '4', '2', 'as', '125', 'PAYID-MFOKYKY3EV16170042373001', 'EC-7C668778CG163162C', 'QGVBKX7CWWR62', '2021-10-05'),
(8, 5, 'aa bb', '6', '2', 'perth', '200', 'PAYID-MFOW4UI6YP79092FC301323K', 'EC-7M547266BG599732Y', 'QGVBKX7CWWR62', '2021-10-06'),
(9, 5, 'aa bb', '4', '2', 'melbourne', '200', 'PAYID-MFOW4UI6YP79092FC301323K', 'EC-7M547266BG599732Y', 'QGVBKX7CWWR62', '2021-10-06'),
(10, 5, 'aa bb', '6', '2', 'perth', '200', 'PAYID-MFOXD2I97S56975RL966203Y', 'EC-66T16554PC525050N', 'QGVBKX7CWWR62', '2021-10-06'),
(11, 5, 'aa bb', '4', '2', 'melbourne', '125', 'PAYID-MFOXHTY0PS26571AR226704C', 'EC-5NV15230H8512042A', 'QGVBKX7CWWR62', '2021-10-06'),
(12, 5, 'aa bb', '6', '2', 'perth', '125', 'PAYID-MFOXHTY0PS26571AR226704C', 'EC-5NV15230H8512042A', 'QGVBKX7CWWR62', '2021-10-06'),
(13, 5, 'aa bb', '4', '2', 'melbourne', '125', 'PAYID-MFOXPPQ29K36851N94706020', 'EC-5B251056PK719025M', 'QGVBKX7CWWR62', '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_package`
--

CREATE TABLE `sub_package` (
  `id` int(100) NOT NULL,
  `package_id` int(100) NOT NULL,
  `subpackage_name` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `highlights` text NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_package`
--

INSERT INTO `sub_package` (`id`, `package_id`, `subpackage_name`, `price`, `highlights`, `img_path`) VALUES
(4, 2, 'melbourne', '125', 'Pickup and Drop facility', 'upload/blog-pic.jpg'),
(6, 2, 'perth', '200', 'Pickup and Drop facility', 'upload/index.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_package`
--
ALTER TABLE `sub_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_package`
--
ALTER TABLE `sub_package`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_package`
--
ALTER TABLE `sub_package`
  ADD CONSTRAINT `sub_package_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

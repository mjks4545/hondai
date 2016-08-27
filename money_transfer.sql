-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 01:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `money_transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`, `branch`) VALUES
(1, 'admin@admin.com', 'admin123', '1', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
`asset_id` int(11) NOT NULL,
  `asset_amount` varchar(50) NOT NULL,
  `asset_dateadded` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `asset_amount`, `asset_dateadded`) VALUES
(1, '41500', '24-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
`b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_role` varchar(50) NOT NULL,
  `b_status` varchar(50) NOT NULL,
  `b_city` varchar(50) NOT NULL DEFAULT '',
  `b_country` varchar(50) NOT NULL,
  `b_streetaddress` varchar(50) NOT NULL,
  `b_month` varchar(50) NOT NULL,
  `b_year` varchar(50) NOT NULL,
  `b_dateadded` varchar(50) NOT NULL,
  `b_dateupdated` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_role`, `b_status`, `b_city`, `b_country`, `b_streetaddress`, `b_month`, `b_year`, `b_dateadded`, `b_dateupdated`) VALUES
(2, 'China', '', '1', 'saddar', 'dwjd', 'umeed abad no 2 peshawar saddar', 'august', '2018', '18/08/16', ''),
(3, 'Pakistan', '', '0', 'peshawar', 'pakistan', 'university road peshawar', 'august', '2016', '10/08/16', ''),
(4, 'UAE', '5', '0', 'bermingum', 'UAE', 'chota landon', 'august', '2018', '10/08/16', ''),
(5, 'sher', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'August ', '2016', '25/08/16', '');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
`c_id` int(11) NOT NULL,
  `cu_id` varchar(50) NOT NULL,
  `m_id` varchar(50) NOT NULL,
  `r_id` varchar(50) NOT NULL,
  `s_b_id` varchar(20) NOT NULL,
  `r_b_id` varchar(20) NOT NULL,
  `c_amount` varchar(50) NOT NULL,
  `c_symbol` varchar(50) NOT NULL,
  `c_rate` varchar(50) NOT NULL,
  `c_feecharges` varchar(50) NOT NULL,
  `c_status` varchar(50) NOT NULL,
  `c_code` varchar(50) NOT NULL,
  `c_notes` varchar(50) NOT NULL,
  `c_month` varchar(50) NOT NULL,
  `c_year` varchar(50) NOT NULL,
  `c_dateadded` varchar(50) NOT NULL,
  `paid_date` int(20) NOT NULL,
  `c_dateupdated` varchar(50) NOT NULL,
  `c_transaction` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`c_id`, `cu_id`, `m_id`, `r_id`, `s_b_id`, `r_b_id`, `c_amount`, `c_symbol`, `c_rate`, `c_feecharges`, `c_status`, `c_code`, `c_notes`, `c_month`, `c_year`, `c_dateadded`, `paid_date`, `c_dateupdated`, `c_transaction`) VALUES
(97, '256', '17', '257', '2', '3', '1233', 'adasd', '1233', '123', '0', '123', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 1),
(98, '258', '17', '259', '2', '2', '123', 'symbol', '3000', '10000', '0', '90', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 1),
(99, '260', '17', '261', '2', '2', '123', 'symbol', '3000', '10000', '1', '90', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 1),
(100, '262', '17', '263', '3', '3', '123', 'symbol', '3000', '10000', '1', '90', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(101, '264', '17', '265', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(102, '266', '17', '267', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(103, '268', '17', '269', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(104, '270', '17', '271', '2', '4', '123', 'symbol', '3000', '10000', '0', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(105, '272', '17', '273', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(106, '274', '17', '275', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(107, '276', '17', '277', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(108, '278', '17', '279', '2', '4', '123', 'symbol', '3000', '10000', '1', '90', 'ASDASD', 'Aug', '2016', '2016-08-25', 0, '', 0),
(109, '280', '17', '281', '2', '3', '123', 'symbol', '3000', '10000', '1', '1234', 'zsdasdasd', 'Aug', '2016', '2016-08-25', 0, '', 1),
(110, '282', '17', '283', '2', '3', '123', 'symbol', '3000', '10000', '1', '9999', 'sdsdfsdf', 'Aug', '2016', '2016-08-25', 0, '', 0),
(111, '284', '17', '285', '3', '2', '123', 'symbol', '3000', '10000', '1', '999', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(112, '286', '17', '287', '2', '3', '333', 'symbol', '3000', '10000', '1', '904', 'asdasdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(113, '288', '17', '289', '2', '3', '123', 'symbol', '3000', '10000', '1', '2323', 'asadasdasdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(114, '290', '17', '291', '2', '2', '123', 'symbol', '3000', '10000', '1', '9022', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(115, '292', '17', '293', '5', '3', '123', 'symbol', '3000', '10000', '1', '9021', 'asdasdasda', 'Aug', '2016', '2016-08-25', 0, '', 0),
(116, '294', '17', '295', '5', '3', '123', 'symbol', '3000', '10000', '1', '2323', 'asdasdasasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(117, '296', '17', '297', '4', '3', '123', 'symbol', '3000', '10000', '1', '90', 'asdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(118, '298', '17', '299', '5', '3', '1000', 'symbol', '3000', '300', '1', '90', 'asasdasd', 'Aug', '2016', '2016-08-25', 0, '', 0),
(119, '300', '17', '301', '5', '4', '500', 'symbol', '3000', '400', '1', '9912', 'sdasdasdas', 'Aug', '2016', '2016-08-25', 0, '', 0),
(120, '302', '17', '303', '5', '2', '500', 'symbol', '3000', '100', '0', '9044', 'asdasd\r\nasdasd', 'Aug', '2016', '2016-08-25', 0, '', 1),
(121, '304', '17', '305', '2', '3', '30000', 'symbol', '3000', '10000', '0', '98112', 'asdasdas', 'Aug', '2016', '2016-08-27', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`cu_id` int(11) NOT NULL,
  `cu_name` varchar(50) NOT NULL,
  `cu_number` varchar(50) NOT NULL,
  `cu_role` varchar(50) NOT NULL,
  `cu_status` varchar(50) NOT NULL,
  `cu_city` varchar(50) NOT NULL,
  `cu_country` varchar(50) NOT NULL,
  `cu_street_adress` varchar(50) NOT NULL,
  `c_type` varchar(1) NOT NULL,
  `cu_month` varchar(50) NOT NULL,
  `cu_year` varchar(50) NOT NULL,
  `cu_dateadded` varchar(50) NOT NULL,
  `cu_dateupdated` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=306 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cu_id`, `cu_name`, `cu_number`, `cu_role`, `cu_status`, `cu_city`, `cu_country`, `cu_street_adress`, `c_type`, `cu_month`, `cu_year`, `cu_dateadded`, `cu_dateupdated`) VALUES
(254, 'sher ', '12312312312', '1', '1', 'Peshawar', 'pakistan ', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(255, 'Khan', '12312312312', '1', '1', 'UAE city', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(256, 'sdsf', '12312312312', '1', '1', 'asd', 'asd', '123asda', 'S', 'Aug', '2016', '2016-08-25', ''),
(257, 'sdf', '12312312312', '1', '1', 'sdasd', 'asdas', 'asdasd', 'R', 'Aug', '2016', '2016-08-25', ''),
(258, 'sdsd', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(259, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(260, 'sdsd', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(261, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(262, 'asda', '12312312312', '1', '1', 'asda', 'asdasd', '123asda', 'S', 'Aug', '2016', '2016-08-25', ''),
(263, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(264, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(265, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(266, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(267, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(268, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(269, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(270, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(271, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(272, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(273, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(274, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(275, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(276, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(277, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(278, 'zxzxZXC', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(279, 'ZXC', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(280, '12eww', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(281, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(282, 'asddd', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(283, 'sdfsdf', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(284, 'aassddd', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(285, 'asdasd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(286, 'sulaiman', '12312312312', '1', '1', 'peshawar', 'pakistan ', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(287, 'khan', '12312312312', '1', '1', 'UAE', 'UAE', 'asdasd', 'R', 'Aug', '2016', '2016-08-25', ''),
(288, 'kone', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(289, 'gaanry', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(290, 'asd', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(291, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(292, 'sher', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(293, 'Muhammad', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(294, 'Ahsan', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(295, 'khan', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(296, 'sher', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(297, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(298, 'salman', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(299, 'khan', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(300, 'asad', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(301, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(302, 'sher123', '12312312312', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-25', ''),
(303, 'asd', '12312312312', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-25', ''),
(304, 'musawer', '123', '1', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'S', 'Aug', '2016', '2016-08-27', ''),
(305, 'khan', '123', '1', '1', 'UAE', 'UAE', 'UAE UAE', 'R', 'Aug', '2016', '2016-08-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`m_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_number` varchar(50) NOT NULL,
  `m_role` varchar(50) NOT NULL,
  `m_status` varchar(50) NOT NULL,
  `m_city` varchar(50) NOT NULL,
  `m_country` varchar(50) NOT NULL,
  `m_streetaddress` varchar(50) NOT NULL,
  `m_month` varchar(50) NOT NULL,
  `m_year` varchar(50) NOT NULL,
  `date_added` varchar(50) NOT NULL,
  `date_updated` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `b_id`, `user_name`, `m_name`, `m_number`, `m_role`, `m_status`, `m_city`, `m_country`, `m_streetaddress`, `m_month`, `m_year`, `date_added`, `date_updated`) VALUES
(17, 3, 'admin', 'suleman khan khalil ', '222', ' 3', 'nothing', 'peshawar', 'pakistan ', 'umeed abad no 2 peshawar cantt ', 'pakistan ', 'peshawar', '12-08-16', ''),
(18, 3, '', 'sher', '123456789', '3', '1', 'peshawar', 'pakistan', 'peshawar pakistan', 'Aug', '2016', '25-08-16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
 ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
 ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=306;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

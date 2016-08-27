-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 11:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money_transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`, `branch`) VALUES
(1, 'admin@admin.com', 'admin123', '1', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_role`, `b_status`, `b_city`, `b_country`, `b_streetaddress`, `b_month`, `b_year`, `b_dateadded`, `b_dateupdated`) VALUES
(2, 'Nothia peshawar', '', 'branch', 'saddar', 'dwjd', 'umeed abad no 2 peshawar saddar', 'august', '2018', '10/08/16', ''),
(3, 'Pakistan', '', 'something', 'peshawar', 'pakistan', 'university road peshawar', 'august', '2016', '10/08/16', ''),
(4, 'UAE', '5', 'nothing', 'bermingum', 'UAE', 'chota landon', 'august', '2018', '10/08/16', '');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `c_id` int(11) NOT NULL,
  `cu_id` varchar(50) NOT NULL,
  `m_id` varchar(50) NOT NULL,
  `r_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
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
  `c_dateupdated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`c_id`, `cu_id`, `m_id`, `r_id`, `b_id`, `c_amount`, `c_symbol`, `c_rate`, `c_feecharges`, `c_status`, `c_code`, `c_notes`, `c_month`, `c_year`, `c_dateadded`, `c_dateupdated`) VALUES
(54, '156', '17', '157', '4', '120', '$$$', '233', '20', '1', '14', 'im here nothing wrong', 'Aug', '2016', '12/08/16', ''),
(55, '158', '17', '159', '3', '1200', '####', '432452', '20', '1', '15', 'something else', 'Aug', '2016', '12/08/16', ''),
(56, '160', '17', '161', '4', '222', '****', '5555`', '400', '1', '16', 'nothing else', 'Aug', '2016', '12/08/16', ''),
(57, '162', '17', '163', '2', 'hj22', 'vjhhvfjv', 'fh3', 'wefbgf', '1', '17', 'jvf', 'Aug', '2016', '12/08/16', ''),
(58, '164', '17', '165', '3', 'EEFE', 'EWF', 'FEFF', 'EFWFE', '1', '18', 'FEWFFW', 'Aug', '2016', '12/08/16', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cu_id`, `cu_name`, `cu_number`, `cu_role`, `cu_status`, `cu_city`, `cu_country`, `cu_street_adress`, `c_type`, `cu_month`, `cu_year`, `cu_dateadded`, `cu_dateupdated`) VALUES
(156, 'suleman khalil', '122', '', '1', 'punjab ', 'pakistan ', 'umeed abad no 2 peshawar saddar', 's', 'Aug', '2016', '12/08/16', ''),
(157, 'salman khan ', '122', '', '1', 'london', 'england', 'america london', 'r', 'Aug', '2016', '12/08/16', ''),
(158, 'ali ', '122', '', '1', 'peshawar', 'pakistan ', 'umeed abad no 2 peshawar saddar', 's', 'Aug', '2016', '12/08/16', ''),
(159, 'khan  ', '122', '', '1', 'peshawar', 'pakistan', 'peshawar saddar', 'r', 'Aug', '2016', '12/08/16', ''),
(160, 'muhammadullah ', '3333', '', '1', 'mardan ', 'pakistan ', 'mardan villege', 's', 'Aug', '2016', '12/08/16', ''),
(161, 'janas khan', '3333', '', '1', 'peshawar', 'pakistan', 'peshawar saddar', 'r', 'Aug', '2016', '12/08/16', ''),
(162, 'mehboob ali shah', '3333', '', '1', 'bahjdfgwhqe', 'hsdqwhefg', 'hjk', 's', 'Aug', '2016', '12/08/16', ''),
(163, 'khan sher', '3333', '', '1', 'hjefg', 'we', 'vfhef', 'r', 'Aug', '2016', '12/08/16', ''),
(164, 'FQF', '2112', '', '1', 'FWEF', 'EWFWEF', 'WFF', 's', 'Aug', '2016', '12/08/16', ''),
(165, 'FEF', '2112', '', '1', 'FEF', 'EFEFF', 'FEFWEF', 'r', 'Aug', '2016', '12/08/16', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `b_id`, `user_name`, `m_name`, `m_number`, `m_role`, `m_status`, `m_city`, `m_country`, `m_streetaddress`, `m_month`, `m_year`, `date_added`, `date_updated`) VALUES
(17, 3, 'admin', 'suleman khan khalil ', '222', ' 3', 'nothing', 'peshawar', 'pakistan ', 'umeed abad no 2 peshawar cantt ', 'pakistan ', 'peshawar', '12-08-16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

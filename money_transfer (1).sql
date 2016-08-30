-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 05:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `asset_id` int(11) NOT NULL,
  `asset_amount` varchar(50) NOT NULL,
  `asset_dateadded` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `asset_amount`, `asset_dateadded`) VALUES
(1, '44444', '24-08-16'),
(2, '55555', '24-08-16'),
(3, '666666666', '24-08-16');

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
(2, 'China', '', '1', 'saddar', 'dwjd', 'umeed abad no 2 peshawar saddar', 'august', '2018', '18/08/16', ''),
(3, 'Pakistan', '', '0', 'peshawar', 'pakistan', 'university road peshawar', 'august', '2016', '10/08/16', ''),
(4, 'UAE', '5', '0', 'bermingum', 'UAE', 'chota landon', 'august', '2018', '10/08/16', '');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`c_id`, `cu_id`, `m_id`, `r_id`, `s_b_id`, `r_b_id`, `c_amount`, `c_symbol`, `c_rate`, `c_feecharges`, `c_status`, `c_code`, `c_notes`, `c_month`, `c_year`, `c_dateadded`, `paid_date`, `c_dateupdated`, `c_transaction`) VALUES
(54, '156', '17', '157', '2', '2', '120', '$$$', '233', '20', '0', '14', 'im here nothing wrong', 'Aug', '2016', '2016-08-22', 0, '', 1),
(55, '158', '17', '159', '3', '3', '1200', '####', '432452', '20', '0', '15', 'something else', 'Aug', '2016', '2016-08-22', 0, '', 0),
(56, '160', '17', '161', '2', '3', '222', '****', '5555`', '400', '0', '16', 'nothing else', 'Aug', '2016', '2016-08-21', 0, '', 0),
(57, '162', '17', '163', '3', '2', 'hj22', 'vjhhvfjv', 'fh3', 'wefbgf', '0', '17', 'jvf', 'Aug', '2016', '2016-08-20', 0, '', 0),
(58, '164', '17', '165', '3', '2', 'EEFE', 'EWF', 'FEFF', 'EFWFE', '0', '18', 'FEWFFW', 'Aug', '2016', '2016-08-20', 0, '', 0),
(59, '166', '17', '167', '2', '3', '200', '$$$', '2332', '39%', '0', '19', 'something else', 'Aug', '2016', '08/18/16', 0, '', 0),
(60, '168', '17', '169', '2', '3', '173617', 'LKLJQWNKLR', 'KLJHLQWR', 'LKDJQWKL', '1', '20', 'KHNQWKRJ', 'Aug', '2016', '18/08/16', 0, '', 0),
(61, '170', '17', '171', '2', '3', 'hqwdfvqwh', 'v2hrfjh', 'rdh', 'hqwdfvqw', '1', '21', 'jhvjh', 'Aug', '2016', '08/20/16', 0, '', 0),
(62, '170', '17', '174', '1', '3', '12212', '$$$', '21313', '1313', '1', '22', 'jfklqwhkF', 'Aug', '2016', '08/19/16', 0, '', 0),
(63, '170', '17', '175', '2', '2', '2222', '$$$', '31241', '1331', '0', '23', 'djhdfhqwjfhq23', 'Aug', '2016', '08/20/16', 0, '', 0),
(64, '176', '17', '177', '2', '4', '4121', '$$$$', 'krj23it', '242', '1', '24', 'k32ljr2;io', 'Aug', '2016', '08/21/16', 0, '', 0),
(65, '178', '17', '179', '4', '4', '110', '&&&&', '3441', '344', '0', '25', 'wjkdhwqjfh23', 'Aug', '2016', '08/22/16', 0, '', 0),
(66, '186', '17', '187', 'Select Branch', 'Select Branch', '1232', 'ccs', '3423', '132', '1', '26', 'adf', 'Aug', '2016', '16/08/22', 0, '', 0),
(67, '188', '17', '189', 'Select Branch', 'Select Branch', '3343', 'rupay', '123', '343', '1', '27', 'adfdf', 'Aug', '2016', '16/08/22', 0, '', 0),
(68, '190', '17', '191', '2', '2', '123', 'rupai', '333', '34', '1', '28', 'kjfak', 'Aug', '2016', '16/08/22', 0, '', 0),
(69, '192', '17', '193', '2', '2', '3434', 'skfjk', '23423', '098', '1', '29', 'frtr', 'Aug', '2016', '16/08/22', 0, '', 0),
(70, '194', '17', '195', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '30', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(71, '196', '17', '197', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '31', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(72, '198', '17', '199', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '32', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(73, '200', '17', '201', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '33', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(74, '202', '17', '203', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '34', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(75, '204', '17', '205', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '35', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(76, '206', '17', '207', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '36', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(77, '208', '17', '209', '2', '2', '987987', 'khkjhl', '98797', '799', '1', '37', 'k;kj;j', 'Aug', '2016', '16/08/22', 0, '', 0),
(78, '210', '17', '211', '2', '2', '909', 'kdjlakj', '09u09', '--0909', '1', '38', 'kadjf;\r\n', 'Aug', '2016', '16/08/22', 0, '', 0),
(79, '212', '17', '213', '2', '2', '909', 'kdjlakj', '09u09', '--0909', '1', '39', 'kadjf;\r\n', 'Aug', '2016', '16/08/22', 0, '', 0),
(80, '214', '17', '215', '3', '3', '222', 'kjkj', '90809', '89709', '1', '40', 'jkk\r\n', 'Aug', '2016', '16/08/22', 0, '', 0),
(81, '222', '17', '223', '3', '2', '9098', 'jhh', '09809', '9090', '1', '41', 'kkjkjlk', 'Aug', '2016', '16/08/23', 0, '', 0),
(82, '224', '17', '225', '3', '2', '659', 'updated', 'updated', '898', '1', '234', 'updated', 'Aug', '2016', '16/08/23', 0, '', 1),
(83, '226', '17', '227', '3', '2', '8978', 'fdf', '9809', '8798', '1', '9809', 'kjkdjf\r\n', 'Aug', '2016', '16/08/23', 0, '', 1),
(84, '228', '17', '229', '2', '4', '9878', 'kdasfjkl', '098098', '9089', '1', '098098', 'dsfs', 'Aug', '2016', '16/08/23', 0, '', 1),
(85, '230', '17', '231', '2', '4', '9878', 'kdasfjkl', '098098', '9089', '1', '098098', 'dsfs', 'Aug', '2016', '16/08/23', 0, '', 1),
(86, '232', '17', '233', '2', '4', '9878', 'kdasfjkl', '098098', '9089', '1', '098098', 'dsfs', 'Aug', '2016', '16/08/23', 0, '', 0),
(87, '234', '17', '235', '2', '4', '9878', 'kdasfjkl', '098098', '9089', '1', '098098', 'dsfs', 'Aug', '2016', '16/08/23', 0, '', 1),
(88, '236', '17', '237', '2', '2', '9098', 'hjkj', '9809', '0989', '1', '09809', 'kjkl', 'Aug', '2016', '16/08/23', 0, '', 1),
(89, '238', '17', '239', '3', '2', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1),
(90, '240', '17', '241', '3', '2', '908908', 'adf', '90809', '9809', '1', '$c_code', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 0),
(91, '242', '17', '243', '3', '3', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1),
(92, '244', '17', '245', '3', '3', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1),
(93, '246', '17', '247', '3', '3', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1),
(94, '248', '17', '249', '3', '3', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1),
(95, '250', '17', '251', '3', '3', '908908', 'adf', '90809', '9809', '1', '98098', 'dfadf', 'Aug', '2016', '16/08/23', 0, '', 1);

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
(165, 'FEF', '2112', '', '1', 'FEF', 'EFEFF', 'FEFWEF', 'r', 'Aug', '2016', '12/08/16', ''),
(166, 'sher alam ', '122', '', '1', 'peshawar', 'peshawar', 'umeed abad no 2 swati gate peshawar cantt', 's', 'Aug', '2016', '18/08/16', ''),
(167, 'akbar ali ', '122', '', '1', 'mardan', 'mardan', 'mardan peshawar', 'r', 'Aug', '2016', '18/08/16', ''),
(168, 'hdasdh', '121', '', '1', 'sdbsfh', 'JKFHQWJK', 'KJQWKLR', 's', 'Aug', '2016', '18/08/16', ''),
(169, 'hjwdgqwjh', '121', '', '1', 'JKFHQWJKF', 'JKJKWEJK', 'LKJK', 'r', 'Aug', '2016', '18/08/16', ''),
(170, 'hasd', '1313', '', '1', 'jdqwhfj', 'sdjhqwj', 'hejhvqwhjrf', 's', 'Aug', '2016', '20/08/16', ''),
(171, 'ajfhqwj', '133', '', '1', 'fhejfgq', 'vhwdfqw', 'jhjhdr1', 'r', 'Aug', '2016', '20/08/16', ''),
(172, 'afqwf', '', '', '1', 'wqfqwfqf', 'qwff3w', 'sdaewgwer', 'r', 'Aug', '2016', '20/08/16', ''),
(173, 'mad', '', '', '1', 'mumbai', 'india', 'mumbai india', 'r', 'Aug', '2016', '20/08/16', ''),
(174, 'mad', '', '', '1', 'mumbai', 'india', 'mardan peshawar', 'r', 'Aug', '2016', '20/08/16', ''),
(175, 'madi', '122', '', '1', 'ching ming', 'china', 'changa manga', 'r', 'Aug', '2016', '20/08/16', ''),
(176, 'hdasdh', '121', '', '1', 'sdbsfh', 'JKFHQWJK', 'KJQWKLR', 's', 'Aug', '2016', '20/08/16', ''),
(177, 'jhdfewjkh', '121', '', '1', 'RQJ3K', 'rn.23kt', 'knrjkjk', 'r', 'Aug', '2016', '20/08/16', ''),
(178, 'muhammadullah ', '3333', '', '1', 'mardan ', 'pakistan ', 'mardan villege', 's', 'Aug', '2016', '20/08/16', ''),
(179, 'salo bhai', '3333', '', '1', 'peshawar', 'pakistan', 'kfjefkwe', 'r', 'Aug', '2016', '20/08/16', ''),
(180, 'ajfhqwj', '133', '', '1', 'fhejfgq', 'vhwdfqw', 'klefj', 's', 'Aug', '2016', '08/22/16', ''),
(181, 'fkwef', '133', '', '1', 'jnkkjldfhe', 'hkjhgi24', 'kwljehf.l', 'r', 'Aug', '2016', '08/22/16', ''),
(182, 'muhammadullah ', '3333', '', '1', 'mardan ', 'pakistan ', 'mardan villege', 's', 'Aug', '2016', '08/22/16', ''),
(183, 'salman', '3333', '', '1', 'peshawar ', 'pakistan', 'qwkdjwirj', 'r', 'Aug', '2016', '08/22/16', ''),
(184, 'muhammadullah ', '3333', '', '1', 'mardan ', 'pakistan ', 'mardan villege', 's', 'Aug', '2016', '22/08/16', ''),
(185, 'jfwejk', '3333', '', '1', 'qjsfnqw', 'jkfqhwjkfh', 'kfjwehklj', 'r', 'Aug', '2016', '22/08/16', ''),
(186, 'suleman khalil', '122', '', '1', 'punjab ', 'pakistan ', 'Peshawar, Khyber Pakhtunkhwa, Pakistan', 's', 'Aug', '2016', '16/08/22', ''),
(187, 'khan', '122', '', '1', 'Peshawar', 'Pakistan', 'Peshawar, Khyber Pakhtunkhwa, Pakistan', 'r', 'Aug', '2016', '16/08/22', ''),
(188, 'suleman khalil', '122', '', '1', 'punjab ', 'pakistan ', 'Peshawar, Khyber Pakhtunkhwa, Pakistan', 's', 'Aug', '2016', '16/08/22', ''),
(189, 'khah', '122', '', '1', 'Peshawar', 'Pakistan', 'Peshawar, Khyber Pakhtunkhwa, Pakistan', 'r', 'Aug', '2016', '16/08/22', ''),
(190, 'jadoon', '234234', '', '1', 'Peshawar', 'Pakistan', 'adfakdj', 's', 'Aug', '2016', '16/08/22', ''),
(191, 'khan', '234234', '', '1', 'xiang', 'china', 'kdjfino', 'r', 'Aug', '2016', '16/08/22', ''),
(192, 'wasim', '8789', '', '1', 'Peshawar', 'Pakistan', 'kjfa;k', 's', 'Aug', '2016', '16/08/22', ''),
(193, 'shah', '8789', '', '1', 'xianl;k', 'jkljdfkdj', 'fjakdjf', 'r', 'Aug', '2016', '16/08/22', ''),
(194, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(195, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(196, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(197, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(198, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(199, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(200, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(201, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(202, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(203, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(204, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(205, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(206, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(207, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(208, 'jhj', '987987', '', '1', 'jhlkjh', 'kjkj', 'kjhjkh', 's', 'Aug', '2016', '16/08/22', ''),
(209, 'hlkjhlj', '987987', '', '1', 'kj;lk', 'kjkj', 'kjhlkjh', 'r', 'Aug', '2016', '16/08/22', ''),
(210, 'jaklj', '909', '', '1', 'dfjaj', 'kfj;akj', 'kdsf;akj', 's', 'Aug', '2016', '16/08/22', ''),
(211, 'kjaskdjfd', '909', '', '1', 'kajkdjk', 'kjdkfj;', 'klajdklfj', 'r', 'Aug', '2016', '16/08/22', ''),
(212, 'jaklj', '909', '', '1', 'dfjaj', 'kfj;akj', 'kdsf;akj', 's', 'Aug', '2016', '16/08/22', ''),
(213, 'kjaskdjfd', '909', '', '1', 'kajkdjk', 'kjdkfj;', 'klajdklfj', 'r', 'Aug', '2016', '16/08/22', ''),
(214, 'kfjdgk', '98098', '', '1', 'kjlkj', 'lkjlkj', 'kj;lkj', 's', 'Aug', '2016', '16/08/22', ''),
(215, 'kjklj', '98098', '', '1', 'kjlkj', 'lkjlkj', 'kjklj', 'r', 'Aug', '2016', '16/08/22', ''),
(216, 'akdfj', '9098', '', '1', 'dkfjakf', 'kdjfalk', 'kjklklkj', 's', 'Aug', '2016', '16/08/23', ''),
(217, 'akdjf', '9098', '', '1', 'ksdjfkj', 'akdsjf', 'kjklj', 'r', 'Aug', '2016', '16/08/23', ''),
(218, 'dkajdfk', '9090', '', '1', 'asdf', 'kjkfj', 'kfjdskfj', 's', 'Aug', '2016', '16/08/23', ''),
(219, 'kajdkj', '9090', '', '1', 'jakj', 'a;fkjf', 'kajsdfkj', 'r', 'Aug', '2016', '16/08/23', ''),
(220, 'kjsdakfj', '444', '', '1', 'adsf', 'adf', 'fjjkfh', 's', 'Aug', '2016', '16/08/23', ''),
(221, 'jalkdfj', '444', '', '1', 'asdf', 'sdf', 'adfad', 'r', 'Aug', '2016', '16/08/23', ''),
(222, 'kk;j', '0909', '', '1', 'kkj', 'kjkljlk', 'kjlkj', 's', 'Aug', '2016', '16/08/23', ''),
(223, 'jkhjkh', '0909', '', '1', 'kjkjlk', 'kljlkj', 'kljlkjlk', 'r', 'Aug', '2016', '16/08/23', ''),
(224, 'updated', '3123', '', '1', 'updated', 'updated', 'updated', 's', 'Aug', '2016', '16/08/23', ''),
(225, 'updated', '3123', '', '1', 'updated', 'updated', 'updated', 'r', 'Aug', '2016', '16/08/23', ''),
(226, 'update 1', '0980', '', '1', 'sdf', 'df', 'hjfhlkjh', 's', 'Aug', '2016', '16/08/23', ''),
(227, 'kjalkdj', '0980', '', '1', 'djfalkfj', 'kdjfk', 'jkhkjh', 'r', 'Aug', '2016', '16/08/23', ''),
(228, 'daaidf', '222', '', '1', 'Swabi', 'sdf', ';lkjfdk', 's', 'Aug', '2016', '16/08/23', ''),
(229, 'kjkl', '222', '', '1', 'fasdf', 'fasdf', 'jslkjk', 'r', 'Aug', '2016', '16/08/23', ''),
(230, 'daaidf', '222', '', '1', 'Swabi', 'sdf', ';lkjfdk', 's', 'Aug', '2016', '16/08/23', ''),
(231, 'kjkl', '222', '', '1', 'fasdf', 'fasdf', 'jslkjk', 'r', 'Aug', '2016', '16/08/23', ''),
(232, 'daaidf', '222', '', '1', 'Swabi', 'sdf', ';lkjfdk', 's', 'Aug', '2016', '16/08/23', ''),
(233, 'kjkl', '222', '', '1', 'fasdf', 'fasdf', 'jslkjk', 'r', 'Aug', '2016', '16/08/23', ''),
(234, 'daaidf', '222', '', '1', 'Swabi', 'sdf', ';lkjfdk', 's', 'Aug', '2016', '16/08/23', ''),
(235, 'kjkl', '222', '', '1', 'fasdf', 'fasdf', 'jslkjk', 'r', 'Aug', '2016', '16/08/23', ''),
(236, 'kjlkj', '98098', '', '1', 'jlkjlk', 'kjlkj', 'kkj', 's', 'Aug', '2016', '16/08/23', ''),
(237, 'lkjlk', '98098', '', '1', 'kjlkj', 'lkjlk', 'kjlkjlk', 'r', 'Aug', '2016', '16/08/23', ''),
(238, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(239, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(240, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(241, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(242, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(243, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(244, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(245, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(246, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(247, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(248, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(249, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(250, 'djklajd', '098', '', '1', 'asdf', 'dsf', 'asdf', 's', 'Aug', '2016', '16/08/23', ''),
(251, 'lkajfdlk', '098', '', '1', 'akdjf', 'kajdlkj', 'akdjflk', 'r', 'Aug', '2016', '16/08/23', ''),
(252, 'dfgdeg', '2314', '', '1', 'hsjfhwjfh', 'jfwekj', 'nwefjkh', 's', 'Aug', '2016', '16/08/23', ''),
(253, 'dfgdeg', '2314', '', '1', 'hsjfhwjfh', 'jfwekj', 'nwefjkh', 's', 'Aug', '2016', '16/08/23', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

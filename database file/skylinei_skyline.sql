-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2022 at 06:50 PM
-- Server version: 10.1.44-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skylinei_skyline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'we@admin.com', '2021surepas');

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `specialid` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `referalcode` text NOT NULL,
  `referalbalance` text NOT NULL,
  `plans` text NOT NULL,
  `days` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliates`
--

INSERT INTO `affiliates` (`id`, `name`, `email`, `specialid`, `password`, `address`, `gender`, `referalcode`, `referalbalance`, `plans`, `days`) VALUES
(14, 'Fekir Han', 'joezymuzik@icloud.com', '51fb395307024b851a1c087a5f4ba4c0', '8471e6bc7984c6ef6d8e36d5f968f556', 'Mushrif park', 'Male', '2ub6RL3', '90000', 'none', '0'),
(15, 'Becky Jay', 'beckyyjay@gmail.com', 'dddff7e7aa360ee6d0f2f32818b9048e', 'd4ae538d73471028819f757209c47801', 'Baltimore, Maryland USA', 'female', 'HKwdjG9', '70000', 'none', '0'),
(16, 'Frank Johnson ', 'Paulaqua282@gmail.com', '41435b5ae72a6f3e2fdd34928ea7d0a2', '896ad231b041cfb4adbdef7fa36b4bfa', 'Consuelo zuniga 215 w Mcfarland dr Kerrville TX 78028', 'male', 'KmU9ckR', '60000', 'none', '0'),
(17, 'Nelson Shahid ', 'nelsonshahid071@gmail.com', '3a10dd7512015100e69beaba6de1af94', '7c978a441aac405dc7d731eba8f82f4b', 'Mill View Cottage, London Road', 'male', 'bS81EdJ', '100000', 'none', '0'),
(18, 'Fabio Rollins ', 'rollinsfabio@gmail.com', 'df34013f62af347ebfb176cbd456d732', '501a1f106ad1531f9f8fb6ecf57ac49b', '254 Express road', 'male', '1Hn67Ko', '70000', 'none', '0'),
(19, 'Viola Hobart', 'violahobart24@gmail.com', '7b90b23aa249a3e61010b378b09ad1c0', '8729e27026e696b62abc65a8a4871184', '22 Vina street, Lexington, Massachusetts', 'female', 'W8FebVY', '70000', 'none', '0');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `specialid` text NOT NULL,
  `plan` text NOT NULL,
  `daysleft` text NOT NULL,
  `refer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `address`, `gender`, `specialid`, `plan`, `daysleft`, `refer`) VALUES
(14, 'Fekir Han', 'joezymuzik@icloud.com', 'd0773838829234e04fb749067b8c6432', 'No.1 chief Edem close', 'male', '79282acfe16d5aca6e6889aeac135add', 'none', '0', 'referal code'),
(15, 'frank jeffrey', 'frankjeff@gmail.com', '6ae3c71496b344168ea0df08cf5abfa6', '', 'female', 'd3d4881706baed38b227aae67bf29259', 'none', '0', 'bs81Edj'),
(16, 'Jackson', 'jacksonjay@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Texas', 'male', '247fb1bb21a936247ad68c60a9b42633', 'none', '0', 'HKwdjG9'),
(17, 'Wem:skylineinvestment.org Ich mag  www.audi.com', 'everodo6@mail.ru', '7975c2163981e3fcf185d193e4280da6', 'https://www.audi.com', '1', '219968c6f20186f8f7ea58369ba6878c', 'none', '0', 'referal code'),
(18, 'Combet Ohct', 'mr.combetohct@gmail.com', '2e515ee51d8b4c85db2795d4f20774b0', 'Jakarta', 'male', '8bf084f35956c87bc4b1f976b3e53ff9', 'none', '0', 'referal code'),
(19, 'Peter', 'petercruz608@gmail.com', '801b2fc9153d3d3a7b5f7578c57b656e', 'No 38 megom street off ugbowo lagos road ', 'male', 'ffd13ed72e643e1b56db3c8324f40cd3', 'none', '0', 'referal code'),
(20, 'irene price', 'kingsleykngsley921@gmail.com', 'f412551b737c4b223b2bb5b8e22bed9f', '503 4th st ne', 'male', 'abc25fa562f9f9ee1450b160434eb55e', 'none', '0', 'referal code'),
(21, 'global cryptotrade', 'ingsleykingsley921@gmail.com', 'a5f25effad366faea36db9581df9bcac', '503 4th st ne', 'male', 'c8480b497868d855b070f1481b4b6174', 'none', '0', 'referal code');

-- --------------------------------------------------------

--
-- Table structure for table `holding`
--

CREATE TABLE `holding` (
  `id` int(11) NOT NULL,
  `specialid` varchar(200) NOT NULL,
  `btc` int(11) NOT NULL,
  `eth` int(11) NOT NULL,
  `xrp` int(11) NOT NULL,
  `ltc` int(11) NOT NULL,
  `doge` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `dogedate` text NOT NULL,
  `xrpdate` text NOT NULL,
  `btcdate` text NOT NULL,
  `ethdate` text NOT NULL,
  `ltcdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holding`
--

INSERT INTO `holding` (`id`, `specialid`, `btc`, `eth`, `xrp`, `ltc`, `doge`, `balance`, `dogedate`, `xrpdate`, `btcdate`, `ethdate`, `ltcdate`) VALUES
(21, '79282acfe16d5aca6e6889aeac135add', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(22, '51fb395307024b851a1c087a5f4ba4c0', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(23, 'dddff7e7aa360ee6d0f2f32818b9048e', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(24, '41435b5ae72a6f3e2fdd34928ea7d0a2', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(25, '3a10dd7512015100e69beaba6de1af94', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(26, 'df34013f62af347ebfb176cbd456d732', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(27, 'd3d4881706baed38b227aae67bf29259', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(28, '247fb1bb21a936247ad68c60a9b42633', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(29, '7b90b23aa249a3e61010b378b09ad1c0', 0, 0, 0, 0, 0, 160500, '0', '0', '0', '0', '0'),
(30, '219968c6f20186f8f7ea58369ba6878c', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(31, '8bf084f35956c87bc4b1f976b3e53ff9', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(32, 'ffd13ed72e643e1b56db3c8324f40cd3', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(33, 'abc25fa562f9f9ee1450b160434eb55e', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0'),
(34, 'c8480b497868d855b070f1481b4b6174', 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `specialid` text NOT NULL,
  `currency` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `specialid`, `currency`, `name`, `address`, `amount`) VALUES
(1, 'ffd13ed72e643e1b56db3c8324f40cd3', 'Bitcoin', 'Peter', '', '500'),
(2, '', 'Bitcoin', '', '', '500');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `currency` text NOT NULL,
  `amount` text NOT NULL,
  `specialid` text NOT NULL,
  `wallet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `currency`, `amount`, `specialid`, `wallet`) VALUES
(19, 'In', 'Btc', '5000', '51fb395307024b851a1c087a5f4ba4c0', 'bc1q7fg906eentc6rnupxl478lawpfu0egtpphhjst'),
(20, 'Out', 'Eth', '2000', '51fb395307024b851a1c087a5f4ba4c0', '0xa720771013D2A58c78062126017eE41ad36DF004'),
(21, 'In', 'Doge', '2000', '51fb395307024b851a1c087a5f4ba4c0', 'DTTv2YFQfVCgSg7wKfk3TK6tcJfmMZRSGG'),
(22, 'in', 'btc', '5000', 'dddff7e7aa360ee6d0f2f32818b9048e', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(23, 'out', 'ltc', '30000', 'dddff7e7aa360ee6d0f2f32818b9048e', 'LRHDEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(24, 'out', 'btc', '15000', 'dddff7e7aa360ee6d0f2f32818b9048e', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(25, 'out', 'btc', '30000', '41435b5ae72a6f3e2fdd34928ea7d0a2	', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(26, 'in', 'ltc', '10000', '41435b5ae72a6f3e2fdd34928ea7d0a2', 'LRHDEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(27, 'in', 'btc', '30000', '41435b5ae72a6f3e2fdd34928ea7d0a2', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(28, 'in', 'btc', '30000', '3a10dd7512015100e69beaba6de1af94', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(29, 'out', 'ltc', '15000', '3a10dd7512015100e69beaba6de1af94', 'LRHDEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(30, 'out', 'btc', '30000', '3a10dd7512015100e69beaba6de1af94', '0axMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(31, 'in', 'btc', '30000', 'df34013f62af347ebfb176cbd456d732	', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(32, 'out', 'eth', '30000', 'df34013f62af347ebfb176cbd456d732	', '0axMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(33, 'in', 'btc', '20000', 'df34013f62af347ebfb176cbd456d732', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(34, 'out', 'eth', '30000', 'df34013f62af347ebfb176cbd456d732', '0axMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(35, 'in', 'btc', '30000', '7b90b23aa249a3e61010b378b09ad1c0	', 'DKEMLRaoZ9Efj5Js5sdSXPjQK6r2QZ'),
(36, 'out', 'btc', '30000', '7b90b23aa249a3e61010b378b09ad1c0', 'DKEMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ'),
(37, 'in', 'eth', '15000', '7b90b23aa249a3e61010b378b09ad1c0', '0axMLRaoZ9EmzeUfj5Js5sdSXPjQK6r2QZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holding`
--
ALTER TABLE `holding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `holding`
--
ALTER TABLE `holding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 11:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `ID` int(25) NOT NULL,
  `AppName` varchar(121) NOT NULL,
  `AppUrl` varchar(255) NOT NULL,
  `AppStatus` varchar(121) NOT NULL,
  `endpoint1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`endpoint1`)),
  `endpoint2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `endpoint3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `endpoint4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `endpoint5` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `endpoint6` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `endpoint7` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `LastUpdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UrlLogoApp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`ID`, `AppName`, `AppUrl`, `AppStatus`, `endpoint1`, `endpoint2`, `endpoint3`, `endpoint4`, `endpoint5`, `endpoint6`, `endpoint7`, `LastUpdate`, `UrlLogoApp`) VALUES
(1, 'https://superbet.ro/', 'https://superbet.ro/', '0', '{\"URL\":\"https://superbet.ro/pariuri-sportive/fotbal/astazi\",\"Status\":0}', '{\"URL\":\"https://superbet.ro/casino/\",\"Status\":0}', '{\"URL\":\"https://superbet.ro/pariuri-loto\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '2024-04-07 02:01:08', 'https://pbs.twimg.com/profile_images/1721628504549163008/dkGHqZtO_400x400.jpg'),
(2, 'https://bingo.ro/', 'https://superbet.ro/', '0', '{\"URL\":\"https://superbet.ro/pariuri-sportive/fotbal/astazi\",\"Status\":0}', '{\"URL\":\"https://superbet.ro/casino/\",\"Status\":0}', '{\"URL\":\"https://superbet.ro/pariuri-loto\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '2024-04-07 07:38:12', 'https://pbs.twimg.com/profile_images/1721628504549163008/dkGHqZtO_400x400.jpg'),
(3, 'https://twitter.com/', 'https://twitter.com/', '0', '{\"URL\":\"https://twitter.com/i/flow/login\",\"Status\":0}', '{\"URL\":\"https://twitter.com/i/flow/password_reset?input_flow_data=%7B%22requested_variant%22%3A%22eyJwbGF0Zm9ybSI6IlJ3ZWIifQ%3D%3D%22%7D\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '2024-04-07 02:16:55', 'https://financialintelligence.ro/wp-content/uploads/2021/05/Twitter.jpg'),
(4, 'https://twitter.com/', 'https://twitter.com/', '0', '{\"URL\":\"https://twitter.com/i/flow/login\",\"Status\":0}', '{\"URL\":\"https://twitter.com/i/flow/password_reset?input_flow_data=%7B%22requested_variant%22%3A%22eyJwbGF0Zm9ybSI6IlJ3ZWIifQ%3D%3D%22%7D\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '2024-04-07 12:37:13', 'https://financialintelligence.ro/wp-content/uploads/2021/05/Twitter.jpg'),
(5, 'https://superbet.ro/', 'https://superbet.ro/', '0', '{\"URL\":\"https://superbet.ro/pariuri-sportive/fotbal/astazi\",\"Status\":0}', '{\"URL\":\"https://twitter.com/i/flow/password_reset?input_flow_data=%7B%22requested_variant%22%3A%22eyJwbGF0Zm9ybSI6IlJ3ZWIifQ%3D%3D%22%7D\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '{\"URL\":\"\",\"Status\":0}', '2024-04-09 08:25:30', 'https://pbs.twimg.com/profile_images/1721628504549163008/dkGHqZtO_400x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `endpoint_status`
--

CREATE TABLE `endpoint_status` (
  `id` int(11) NOT NULL,
  `Endpoint` varchar(255) DEFAULT NULL,
  `Hour` datetime DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Email` varchar(121) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `usertype` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`, `usertype`) VALUES
(1, 'lucianmombasa', 'lucian20074567@gmail.com', '$2y$10$qeMAU.p9CzZTuQedqrYQJudNzZQJnFKPIHRkeBgPv00yacUOGXL5O', 'developer'),
(2, 'andrei123', 'andrei123@gmail.com', '$2y$10$cTu1qk.X0Nj5/DgxepjCdu4LoC1GwXY8Duh/WAFV16TGgk4oyOvsK', 'user'),
(3, 'ionu13', 'ionut1321@gmail.com', '$2y$10$Hu1YdVUfxPnZ8eTsC3nX7.hiMAPUocpgt5FsFxvldDWTgvrot/1g.', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `endpoint_status`
--
ALTER TABLE `endpoint_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `endpoint_status`
--
ALTER TABLE `endpoint_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

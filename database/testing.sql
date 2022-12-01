-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `created`) VALUES
(1, 'Pallavi Auchat', 'pallaviauchat23@gmail.com', '51930a678d3478f4ea026d37ff21d3fd', '2022-12-01 16:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `reg_id`, `name`, `location`, `created`) VALUES
(1, 1, 'Sahyadri School', 'Pune', '2022-12-01 16:06:32'),
(2, 1, 'MSB Educational Institute, Kondhwa Budruk', 'Pune', '2022-12-01 16:06:32'),
(3, 1, 'D Y Patil International College', 'Pune', '2022-12-01 16:06:40'),
(4, 1, 'CP Goenka International School', 'Pune', '2022-12-01 16:06:40'),
(5, 1, 'Neeri Modern School', 'Nagpur', '2022-12-01 16:08:14'),
(6, 1, 'Reliance Foundation School', 'Nagpur', '2022-12-01 16:08:14'),
(7, 1, 'Delhi Public School', 'Nagpur', '2022-12-01 16:08:17'),
(8, 1, 'Air Force School', 'Nagpur', '2022-12-01 16:08:17'),
(9, 1, 'St. Mary\'s High School', 'Mumbai', '2022-12-01 16:10:20'),
(10, 1, 'Aakansha Play School', 'Mumbai', '2022-12-01 16:10:20'),
(11, 1, 'The JB Petit High School for Girls', 'Mumbai', '2022-12-01 16:10:21'),
(12, 1, 'Bombay International School', 'Mumbai', '2022-12-01 16:10:21'),
(13, 1, 'Sahy School', 'Pune', '2022-12-01 10:36:32'),
(14, 1, 'MSB Kondhwa Budruk', 'Pune', '2022-12-01 10:36:32'),
(15, 1, 'D Y Patil  College', 'Pune', '2022-12-01 10:36:40'),
(16, 1, 'CP Goenka International School', 'Pune', '2022-12-01 10:36:40'),
(17, 1, 'Neerih School', 'Nagpur', '2022-12-01 10:38:14'),
(18, 1, 'Reliance g School', 'Nagpur', '2022-12-01 10:38:14'),
(19, 1, 'DelhiSchool', 'Nagpur', '2022-12-01 10:38:17'),
(20, 1, 'Air Force School', 'Nagpur', '2022-12-01 10:38:17'),
(21, 1, 'St High School', 'Mumbai', '2022-12-01 10:40:20'),
(22, 1, 'Aakansha School', 'Mumbai', '2022-12-01 10:40:20'),
(23, 1, 'The High School for Girls', 'Mumbai', '2022-12-01 10:40:21'),
(24, 1, 'Bombay School', 'Mumbai', '2022-12-01 10:40:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

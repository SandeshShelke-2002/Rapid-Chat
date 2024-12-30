-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:18 PM
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
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(50) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `Aemail` varchar(30) NOT NULL,
  `number` bigint(12) NOT NULL,
  `Apassword` varchar(6) NOT NULL,
  `img` varchar(250) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `firstname`, `middlename`, `lastname`, `Aemail`, `number`, `Apassword`, `img`, `date`) VALUES
(1, 'Sandesh', 'Sanjay', 'Shelke', 'sandesh@gmail.com', 1234567890, '1478', '1715067612download.png', '2024-05-07 16:21:59'),
(2, 'Aamil', 'A', 'Malik', 'aamil@gmail.com', 1234567890, '12345', '1710673130download.png', '2024-03-22 16:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(60) NOT NULL,
  `fname` text DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `idea` varchar(500) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `email`, `subject`, `idea`, `date`) VALUES
(2, 'Sandesh', 'sandesh@gmail.com', 'My Opinions', 'my opinions is this web app nice. I enjoyed a lot of this web application.', '2024-03-22 16:18:11'),
(3, 'prashik', 'prashik@gmail.com', 'myopinions', 'This web app performance is nice. I really enjoyed this app.', '2024-03-22 16:18:11'),
(4, 'pawan', 'pawan@gmail.com', 'myopinions', 'this web application is nice.', '2024-03-22 16:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `pho` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `pho`, `date`) VALUES
(190, 1434774316, 1394063231, 'hojm', 'home.jpg', '2024-05-07 07:37:16'),
(191, 1434774316, 1394063231, 'hi', 'home.jpg', '2024-05-07 07:37:25'),
(192, 1434774316, 1394063231, 'hii', '', '2024-05-07 07:37:31'),
(193, 1394063231, 681473200, 'hii', '', '2024-05-07 07:40:23'),
(194, 1394063231, 681473200, 'hi', 'a4.jpg', '2024-05-07 07:40:36'),
(195, 681473200, 1394063231, 'hii', '', '2024-05-07 07:41:58'),
(196, 681473200, 1394063231, 'project', '', '2024-05-07 15:50:34'),
(198, 681473200, 1394063231, 'img', 'comm.jpg', '2024-05-07 16:48:59'),
(199, 681473200, 838256376, 'hii', '', '2024-05-07 17:12:53'),
(200, 681473200, 838256376, 'icon', 'add.png', '2024-05-07 17:13:03'),
(201, 838256376, 681473200, 'hii', '', '2024-05-07 17:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` text NOT NULL,
  `lname` varchar(255) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no` bigint(20) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `mname`, `lname`, `country`, `state`, `city`, `email`, `no`, `bio`, `password`, `img`, `status`, `date`) VALUES
(33, 1394063231, 'sandesh', 'Sanjay', 'shelke', 'India', 'Madhya Pradesh', 'Nagpur', 'shelke@gmail.co', 9673857610, 'mca srpce', '4ba29b9f9e5732ed33761840f4ba6c53', 'a2.png', 'Offline now', '2024-05-07 17:11:56'),
(35, 681473200, 'abhi', 'u', 'shel', 'India', 'Maharashtra & Goa', 'New Delhi', 'abhi@gmail.com', 265, 'BAMS', '8d8818c8e140c64c743113f563cf750f', '1715067612download.png', 'Offline now', '2024-05-07 17:17:39'),
(36, 838256376, 'Ankit', 'k', 'ramteke', 'India', 'Maharashtra & Goa', 'Nagpur', 'Ankit@gmail.com', 545, 'jj', 'd0fb963ff976f9c37fc81fe03c21ea7b', '1715101962a4.jpg', 'Offline now', '2024-05-07 17:13:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

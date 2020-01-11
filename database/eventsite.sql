-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 10:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(100) NOT NULL,
  `event_title` text NOT NULL,
  `event_price` int(20) NOT NULL,
  `participents` int(100) NOT NULL,
  `img_link` text NOT NULL,
  `type_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_price`, `participents`, `img_link`, `type_id`) VALUES
(1, 'PUBG', 50, 0, '2.jpg', 3),
(2, 'Counter Strike', 50, 0, '6.jpg', 2),
(3, 'PUBG', 50, 0, '6.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `type_id` int(10) NOT NULL,
  `type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`type_id`, `type_title`) VALUES
(1, 'TECHNICAL'),
(3, 'HACKING'),
(4, 'GAMING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `coursetype` varchar(50) NOT NULL,
  `event_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `college`, `coursetype`, `event_name`) VALUES
(1, 's', '', '', '', '', ''),
(2, 'Ajay', 'Ajaysah531@gmail.com', '9653818316', 'SGVU', 'ef', 'PUBG'),
(3, 'MONET', 'monetjohnson2000@gmail.com', '9653818316', 'SURESH GYAN VIHAR UNIVERSITY', 'CS', 'Counter Strike'),
(4, 'gagan', 'gagan@gmail.com', '45678', 'sdfg', 'CS', 'PUBG'),
(5, 'Akash', 'Akah@123gmail.com', '9861857', 'SgVh', 'Bac', 'PUBG'),
(6, 'gagan', 'gagan@gmail.com', '45678', 'sdfg', 'CS', 'PUBG'),
(7, '', 'sd', '', '', '', 'PUBG'),
(8, 'aja', 'ajas@gmail.com', '9115158', 'dfghj', 'fghjk', 'PUBG'),
(9, 'rtggh', '112124@gfmail.com', '1234', 'qdwef', '1212', 'PUBG'),
(10, 'ds', 'Ajaysah531@gmail.com', '1478158', 'sdfg', 'Jaipur', 'PUBG'),
(11, 'Ajay', 'Ajaysah531@gmail.com', '9653818316', 'SURESH GYAN VIHAR UNIVERSITY', 'Jaipur', 'PUBG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

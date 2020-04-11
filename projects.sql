-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 12:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `guide` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `PL` varchar(20) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `review` int(1) NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Name`, `id`, `author`, `guide`, `year`, `PL`, `domain`, `status`, `review`, `description`) VALUES
('AirplaneSearch WTII', 25, 'Kaustubh', 'Vinay Joshi', 2020, 'JS,Jquery,PHP', 'Web Technologies', 0, 1, 'This is part of the final project. This code helps the user to find airlines,airfares etc.'),
('IOT Home Automation', 26, 'Kaustubh,Shreyas', 'Charanraj', 2020, 'English', 'IOT', 0, 1, 'This is the final report of IOT project. This deals with Home Automation and its benefits.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usn` varchar(10) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usn`, `passwd`, `email`, `usertype`, `DOB`, `gender`, `phone`, `name`) VALUES
('kraghavan', 'c44a471bd78cc6c2fea32b9fe028d30a', 'kaustubh.raghavan@gmail.com', 'user', '1999-01-07', 1, '9535535422', 'Kaustubh'),
('kjoshi', 'c44a471bd78cc6c2fea32b9fe028d30a', 'kjoshi@gmail.com', 'admin', '2020-04-23', 1, '8860112233', 'Kaushik'),
('knaidu99', 'c44a471bd78cc6c2fea32b9fe028d30a', 'knaidu@gmail.com', 'user', '2020-04-16', 1, '7789112233', 'Kethan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 03:02 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pragnesh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL,
  `standerd` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `email`, `marks`, `standerd`, `image`) VALUES
(17, 0, 'test3', 'asd@hg', 41, 3, 'pexels-photo (1).jpg'),
(19, 40, 'test4', 'test@ewaf', 48, 4, 'pexels-photo-459225.jpeg'),
(20, 5, 'dev patel', 'dev@fdghz', 65, 5, 'pexels-photo-257360.jpeg'),
(21, 0, 'karan raval', 'karan@rawal', 100, 12, 'stock-photo-159533631-1500x1000.jpg'),
(22, 0, 'karan raval', 'karan@rawal', 100, 12, 'stock-photo-159533631-1500x1000.jpg'),
(23, 5, 'pragnesh', 'asd', 45, 5, ''),
(24, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(25, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(26, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(27, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(28, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(29, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(30, 0, 'pragnesh', 'asd', 45, 1, 'stock-photo-159533631-1500x1000.jpg'),
(31, 5, 'Dilip', 'dilip.vora07@gmail.com', 100, 12, ''),
(32, 0, 'Dilip', 'dilip.vora07@gmail.com', 100, 12, 'carousel_right-bk.png'),
(33, 0, 'Sr.Karan', 'kjrawal@outlook.com', 100, 0, 'pexels-photo-459225.jpeg'),
(34, 0, 'Sr.Karan', 'kjrawal@outlook.com', 100, 0, 'pexels-photo-459225.jpeg'),
(35, 0, 'pragnesh', 'adsafatg', 52, 5, '63328616.jpg'),
(36, 0, 'pragnesh', 'adsafatg', 52, 5, '63328616.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

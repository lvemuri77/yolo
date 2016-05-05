-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2016 at 12:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yolo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `username`, `password`, `email`) VALUES
(1, 'lalitha', 'lalitha123', 'lalitha@gmail.com'),
(2, 'prats', 'prats123', 'pratyusha@gmail.com'),
(3, 'abc', 'abc123', 'abc@gmail.com'),
(4, 'john', 'john123', 'john@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `sno` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `p_age` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_fee` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`sno`, `p_name`, `p_type`, `p_age`, `p_description`, `p_fee`, `image`) VALUES
(1, 'Lucky ', 'DOG', '6', 'Lucky is adopted from lakeview area and it is just crossed 5years', '$150', 'pet_pics/dog2.jpg'),
(2, 'leela', 'CAT', '2', 'Leela is adopted 1 year back', '$200', 'pet_pics/cat.png'),
(3, 'lucy', 'RABBIT', '3', 'sdkasjda', '$50', 'pet_pics/rabbit.jpg'),
(4, 'Catter', 'CAT', '4', 'Catter is adopted from the streets of CA', '$100', 'pet_pics/cat.png'),
(5, 'Marcy', 'DOG', '5', 'Marcy is adopted from NJ', '$90', 'pet_pics/dog1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `city`, `state`, `zipcode`) VALUES
(1, 'lalitha', 'vemuri', 'lalitha', 'lalitha123', 'lalitha@gmail.com', '123456', 'carteret', 'nj', '07008'),
(2, 'pratyusha', 'r', 'prats', 'prats123', 'pratyusha@gmail.com', '123', 'carteret', 'nj', '07008'),
(3, 'abc', 'as', 'abc', 'abc123', 'abc@gmail.com', '123678', 'edison', 'NJ', '08817'),
(4, 'john', 's', 'john', 'john123', 'john@gmail.com', '111', 'edison', 'NJ', '07010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

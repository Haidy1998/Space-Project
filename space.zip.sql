-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 08:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'haidyramzy@gmail.com', 111111),
(2, 'youstina@gmail.com', 666666),
(3, 'Merna@gamil.com', 555555);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `trip_name` varchar(50) NOT NULL,
  `trip_price` varchar(50) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `trip_agency` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `admin_id`, `trip_name`, `trip_price`, `trip_id`, `trip_agency`, `user_id`) VALUES
(1, 1, 'Los Angeles_Toronto', '15000', 1, 'spaceX', 0),
(2, 1, 'Bangkok_Dubai', '15000', 2, 'spaceX', 0),
(3, 1, 'Tokyo_Singapora', '15000', 3, 'spaceX', 0),
(4, 1, 'London_Dubai', '15000', 4, 'spaceX', 0),
(5, 1, 'London_New York', '15000', 5, 'spaceX', 0),
(6, 1, 'New York_Paris', '15000', 6, 'spaceX ', 0),
(7, 1, 'spaceX_OrbitalFlight', '15000', 7, 'spaceX', 0),
(8, 1, 'blueOrigin_OrbitalFlight', '15000', 8, 'blueOrigin', 0),
(9, 1, 'blueOrigin_SubOrbitalFlight', '15000', 9, 'blueOrigin', 0),
(10, 1, 'galactic_SubOrbitalFlight', '15000', 10, 'galactic', 0),
(11, 1, 'Parabolic flight_LowClass', '15000', 11, 'zeroGravity', 0),
(12, 1, 'Parabolic flight_SecondClass', '15000', 12, 'zeroGravity', 0),
(13, 1, 'Parabolic flight_ThirdClass', '5400', 13, 'zeroGravity', 0),
(14, 1, 'High altitude jet Flight', '25000', 14, 'zeroGravity', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `third_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `visa_number` varchar(20) NOT NULL,
  `national_id` varchar(14) NOT NULL,
  `mobile_nom` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `second_name`, `third_name`, `age`, `email`, `password`, `Address`, `visa_number`, `national_id`, `mobile_nom`, `gender`, `profession`) VALUES
(18, 'Haidy', 'Ramzy', 'Goda', 22, 'Haidy@gmail.com', '47d786b743945cab173492e5a812f381', 'Ain shams', '26c924b47cf221582c9d', '', '', 'Female', '0'),
(19, 'Youstina', 'Rifaat', 'Fekry', 21, 'youstina@gmail.com', '47d786b743945cab173492e5a812f381', 'Ezbet ', '2cd95c5d54b689c65382', '289777908b5ae0', '', 'Female', '0'),
(24, 'Marina', 'Attas', 'Goda', 22, 'Marina@gmail.com', '47d786b743945cab173492e5a812f381', 'Ezbet ', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'Female', '0'),
(33, 'Merna', 'Shenouda', 'Rofaael', 22, 'Merna@gmail.com', '24f1c2ccf20342aa6b490d965f2933f1', '', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'Female', '0'),
(35, 'Magdy', 'Saad', 'Goda', 31, 'Magdy@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Ezbet ', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'male', '0'),
(36, 'Magdy', 'Saad', 'Goda', 31, 'Magdy@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Ezbet ', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'male', '0'),
(37, 'Sandra', 'Ramzy', 'Goda', 15, 'Sandra@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Ain shams', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'Female', '0'),
(38, 'Merna', 'Samir', 'Thabet', 22, 'Mernasamir@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Ezbet ', '3bbf879a5bd2963837a7', '259816479e3729', '01125468978', 'Female', '0'),
(39, 'Mohamed', 'Maged', 'Maged', 22, 'Mohamed@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Zamalek', '2cd95c5d54b689c65382', '289777908b5ae0', '01125468978', 'male', '0'),
(40, 'Kerollous', 'Maged', 'Thabet', 26, 'Kerollous@gmail.com', '1bbd886460827015e5d605ed44252251', 'Marsa Matroh', 'b60092f7d2b81d2e8321', '22222222222222', '011254689785', '', '0'),
(41, 'Mira', 'Maged', 'Maged', 22, 'Mira@gmail.com', '87d6d25f9004e4334f6f8c8bfce0ffe6', 'Zaton', 'b60092f7d2b81d2e8321', '1e9ae5f78bbb9d', '01125468978', 'Female', '0'),
(42, 'Mahmoud', 'Mosa', 'Mosa', 0, 'Mahmoud@gmail.com', '1bbd886460827015e5d605ed44252251', 'Zamalek', '2cd95c5d54b689c65382', '289777908b5ae0', '01125468978', 'male', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_trips`
--

CREATE TABLE `users_trips` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_trips`
--

INSERT INTO `users_trips` (`id`, `user_id`, `trip_id`) VALUES
(1, 8, 1),
(2, 18, 3),
(3, 18, 3),
(4, 18, 3),
(5, 18, 3),
(6, 18, 3),
(7, 18, 8),
(8, 37, 9),
(9, 37, 9),
(10, 37, 9),
(11, 37, 9),
(12, 37, 9),
(13, 37, 9),
(14, 37, 9),
(15, 37, 9),
(16, 37, 9),
(17, 37, 9),
(18, 37, 9),
(19, 37, 9),
(20, 33, 8),
(21, 0, 1),
(22, 0, 2),
(23, 0, 1),
(24, 18, 1),
(25, 0, 1),
(26, 18, 1),
(27, 18, 1),
(28, 0, 11),
(29, 0, 12),
(30, 0, 8),
(31, 0, 8),
(32, 0, 8),
(33, 0, 8),
(34, 0, 8),
(35, 0, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `con` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_trips`
--
ALTER TABLE `users_trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users_trips`
--
ALTER TABLE `users_trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `con` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

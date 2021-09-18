-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2021 at 10:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(1, 10, 'Crafted for your craving.<br>Angus Third Pounder Deluxe<br>I\'m lovin it.'),
(2, 5, 'Meet up with a good friend.<br>Audi Q4 Sportback e-tron concept'),
(3, 3, 'My HAT\'S OFF to the pause that refreshes.<br>Drink Coca Cola<br>Delicious and Refreshing'),
(4, 8, 'Viceroys FILTER the smoke!<br>As your Dentist, I would recommend VICEROYS'),
(5, 9, 'GET YUMMY HOT WINGS FREE WITH ANY KFC MEAL!<br>KFC so good'),
(6, 2, 'Food Love Stories<br>MAKE YOUR OWN WITH THE NEW TESCO PLANT CHEF RANGE<br>TESCO Every little helps'),
(7, 4, 'LESS Plastic<br>A TANGIBLE GESTURE TO HELP OUR ENVIRONMENT<br>We are removing plastic products from our shelves'),
(8, 1, 'MONEY HEIST SEASON 5<br>Available at September 3th on Netflix');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Mónica Gaztambide'),
(2, 'Arturo Roman'),
(3, 'Stewie Griffin'),
(4, 'Rita Bennet'),
(5, 'Hollós Endre'),
(6, 'Aradi Teréz'),
(7, 'John Smith'),
(8, 'Jack Daniels'),
(9, 'Dexter Morgan'),
(10, 'James Hetfield');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

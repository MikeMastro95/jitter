-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 12:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jitter`
--
CREATE DATABASE IF NOT EXISTS `jitter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jitter`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `created_at`) VALUES
(1, '<p>Phasellus egestas porta imperdiet. Donec id orci nec quam ornare lobortis. Praesent purus nibh, cursus nec sodales eget, consequat non tellus.&nbsp;</p>', '2019-10-14 21:56:18'),
(2, '<p>Donec sodales, justo tincidunt vulputate hendrerit, lectus tortor eleifend augue, a commodo lacus nibh lacinia sem.</p>', '2019-10-14 21:56:23'),
(3, '<p>Phasellus egestas porta imperdiet. Donec id orci nec quam ornare lobortis. Praesent purus nibh, cursus nec sodales eget, consequat non tellus.&nbsp;</p>', '2019-10-14 21:56:28'),
(4, '<p>Donec sodales, justo tincidunt vulputate hendrerit, tortor eleifend augue, a commodo lacus nibh lacinia sem.</p>', '2019-10-14 21:56:32'),
(5, '<p>Phasellus egestas porta imperdiet. Donec id orci nec quam ornare lobortis. Praesent purus nibh, cursus nec sodales eget, consequat non tellus.</p>', '2019-10-14 21:56:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 02:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bia`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `school` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `school`, `message`, `date_created`) VALUES
(1, 'Adu', 'Knutsford University College', 'hi', '2017-10-30 22:14:00'),
(6, 'Roberta', 'Knutsford University College', 'sup', '2017-10-31 09:41:05'),
(7, 'MikeOwusu', 'Kutsford University College', 'Hi guys', '2017-10-31 09:51:33'),
(8, 'MikeOwusu', 'Kutsford University College', 'Whatsup''', '2017-10-31 09:59:20'),
(9, 'Robert', 'Knutsford University College', 'Hi', '2017-10-31 10:30:21'),
(10, 'Robert', 'Knutsford University College', 'hello', '2017-10-31 10:30:29'),
(11, 'Saliha', 'Knutsford University College', 'Hi', '2017-10-31 11:55:09'),
(12, 'Saliha', 'Knutsford University College', 'hello', '2017-10-31 13:37:00'),
(13, 'Saliha', 'Knutsford University College', 'sup', '2017-10-31 13:39:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

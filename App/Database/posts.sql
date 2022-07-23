-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 23, 2022 at 10:58 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(20, 'Zabihullah Danish', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(19, 'test1', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(18, 'Zabihullah Danish', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(17, 'test1', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(16, 'Zabihullah Danish', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(15, 'Zabihullah Danish', 'danish@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

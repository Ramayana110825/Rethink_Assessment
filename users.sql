-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2023 at 03:01 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blogs`
--

DROP TABLE IF EXISTS `tb_blogs`;
CREATE TABLE IF NOT EXISTS `tb_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `title` varchar(450) NOT NULL,
  `content` varchar(450) NOT NULL,
  `DandT` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blogs`
--

INSERT INTO `tb_blogs` (`id`, `username`, `title`, `content`, `DandT`) VALUES
(14, 'rama', 'dasda', 'dasdasd', '02/03/2023 02:56:55 am'),
(13, 'rafaell', 'Hello 2nd Post', 'Hello guyss I am Rafael', '02/03/2023 02:55:24 am'),
(12, 'rafaell', 'asdas', 'dasdas', '02/03/2023 02:32:07 am'),
(15, 'rama', 'rama', 'ramaa', '02/03/2023 02:57:03 am');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `email`, `password`) VALUES
(3, 'rafaell', 'rafael.teberio11@gmail.com', '$2y$10$JuKoQyj8bpy1pdEZL82KfeHYIsYGUKvB6tBMjRiUKmUd/iDhiv63e'),
(4, 'rama', 'rafael@gmail.com', '$2y$10$YI4DIRGLGq7J8UbJ962xpeaHgcY3KvSwIC3KJEa3FptrheJveS9KC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

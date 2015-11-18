-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2014 at 02:19 PM
-- Server version: 5.5.40-36.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acelwor1_autosuggestion`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `comment` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `email`, `comment`, `datetime`) VALUES
(1, 'Abhijit Pal', 'abhijitpal.technokrats@gmail.com', 'This is  a test', '2014-12-22 13:26:57'),
(2, 'Amit Adhikary', 'amitadhikary@gmail.com', 'nice guestbook. thank you very much', '2014-12-22 13:40:01'),
(3, 'Demo User', 'demo@gmail.com', 'This is for testing', '2014-12-22 14:17:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

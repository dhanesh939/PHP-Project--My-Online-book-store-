-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2014 at 04:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id_book` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Author` text NOT NULL,
  `Year` int(5) NOT NULL,
  `Price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `Title`, `Author`, `Year`, `Price`) VALUES
(1, 'PHP and MySQL Web Development (4th Edition)', 'Luke Weling and Laura Thomsson', 2008, '21.63'),
(2, 'PHP Cookbook', 'Adam Trachtenberg and David Sklar', 2006, '32.10'),
(3, 'Professional JavaScript for Web Developers', 'Nicholas C. Zakas', 2000, '33.85'),
(4, 'PHP in Action: Objects, Design, Agility', 'Dagfinn Reiersol', 2009, '32.75'),
(5, 'XML: Visual QuickStart Guide (2nd Edition)', 'Kevin Howard Goldberg', 2010, '26.32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(10) NOT NULL,
  `user_last_name` varchar(10) NOT NULL,
  `user_user_name` varchar(15) NOT NULL,
  `user_address` text NOT NULL,
  `user_email_id` varchar(25) NOT NULL,
  `user_password` text NOT NULL,
  `user_phone_number` int(10) NOT NULL,
  `user_credit_card_no` int(16) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_user_name`, `user_address`, `user_email_id`, `user_password`, `user_phone_number`, `user_credit_card_no`) VALUES
(1, 'Nishit', 'Shah', 'nishitshah', '', 'abc@kart.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890, 2147483647),
(2, 'Nishit', 'Patel', 'dhanesh', '', 'abc@kart1.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890, 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

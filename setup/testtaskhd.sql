-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2014 at 04:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testtaskhd`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created` varchar(19) DEFAULT NULL,
  `updated` varchar(19) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `created`, `updated`) VALUES
(1, 'admin@testtaskhd.com', '098f6bcd4621d373cade4e832627b4f6', '1234', '1234'),
(2, 'customer@testtasthd.com', 'cc03e747a6afbbcbf8be7668acfebee5', NULL, NULL),
(3, 'customersupport@testtasthd.com', 'cc03e747a6afbbcbf8be7668acfebee5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` char(32) NOT NULL DEFAULT '',
  `modified` int(11) DEFAULT NULL,
  `lifetime` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `modified`, `lifetime`, `data`) VALUES
('94vvik9hfllclkm0ukh62ehnh5', 1402688840, 36000, 'Default|a:1:{s:3:"foo";i:100;}mySpace|a:1:{s:3:"foo";i:100;}Zend_Auth|a:3:{s:4:"user";s:19:"glopez686@gmail.com";s:20:"numberOfPageRequests";i:119;s:7:"storage";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:5:"email";s:19:"glopez686@gmail.com";s:7:"created";s:4:"1234";s:7:"updated";s:4:"1234";s:10:"last_login";s:19:"2014-06-13 15-06-14";s:10:"ip_address";s:9:"127.0.0.1";}}'),
('crdncs7r9fbu6maerp53gpifd2', 1402672146, 36000, ''),
('nh59kr8vot5h5b35t9ptf3feu4', 1402639721, 36000, 'Zend_Auth|a:3:{s:7:"storage";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:5:"email";s:19:"glopez686@gmail.com";s:7:"created";s:4:"1234";s:7:"updated";s:4:"1234";s:10:"last_login";s:19:"2014-06-13 02-06-56";s:10:"ip_address";s:9:"127.0.0.1";}s:4:"user";s:26:"nh59kr8vot5h5b35t9ptf3feu4";s:20:"numberOfPageRequests";i:10;}__ZF|a:1:{s:9:"Zend_Auth";a:1:{s:3:"ENT";i:1402640021;}}'),
('seatm8o21b2ilthqje3354e401', 1402690811, 36000, 'Zend_Auth|a:3:{s:7:"storage";O:8:"stdClass":4:{s:2:"id";s:1:"1";s:5:"email";s:20:"admin@testtaskhd.com";s:7:"created";s:4:"1234";s:7:"updated";s:4:"1234";}s:4:"user";s:20:"admin@testtaskhd.com";s:20:"numberOfPageRequests";i:1;}'),
('vv4jhvsatu95o8b46r0k33m4q5', 1402639759, 36000, 'Zend_Auth|a:3:{s:7:"storage";O:8:"stdClass":6:{s:2:"id";s:1:"1";s:5:"email";s:19:"glopez686@gmail.com";s:7:"created";s:4:"1234";s:7:"updated";s:4:"1234";s:10:"last_login";s:19:"2014-06-13 02-06-23";s:10:"ip_address";s:9:"127.0.0.1";}s:4:"user";s:26:"vv4jhvsatu95o8b46r0k33m4q5";s:20:"numberOfPageRequests";i:1;}__ZF|a:1:{s:9:"Zend_Auth";a:1:{s:3:"ENT";i:1402640059;}}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

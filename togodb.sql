-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2019 at 06:32 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `togodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `taskid` int(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL DEFAULT 'Untitled Task',
  `description` text,
  `starttime` date NOT NULL,
  `stoptime` date NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`taskid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES
(1, 'Task 2', 'this is 1st task', '2019-01-10', '2019-01-12', 'Home', 0),
(2, 'Task 1', 'this is 2nd task', '2019-01-09', '2019-01-11', 'College', 0),
(3, '', '', '0000-00-00', '0000-00-00', '', 0);

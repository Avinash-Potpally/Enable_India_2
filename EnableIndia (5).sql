-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2014 at 01:03 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `EnableIndia`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `task_id` int(7) NOT NULL AUTO_INCREMENT,
  `m_id` int(5) NOT NULL,
  `mt_id` int(5) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `resources` varchar(50) NOT NULL,
  `upload_time` datetime NOT NULL,
  `submission_time` datetime NOT NULL,
  `submission` mediumblob NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE IF NOT EXISTS `course_info` (
  `cid` int(2) NOT NULL,
  `category` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `duration` int(3) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentee_req`
--

CREATE TABLE IF NOT EXISTS `mentee_req` (
  `mt_id` int(5) NOT NULL,
  `cid` int(3) NOT NULL,
  `req_date` date NOT NULL,
  `m_id` int(5) NOT NULL,
  `mod_approval` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_mentee`
--

CREATE TABLE IF NOT EXISTS `mentor_mentee` (
  `mt_id` int(5) NOT NULL,
  `m_id` int(5) NOT NULL,
  `cid` int(3) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `course_status` varchar(15) NOT NULL DEFAULT 'incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_skill`
--

CREATE TABLE IF NOT EXISTS `mentor_skill` (
  `m_id` int(5) NOT NULL,
  `cid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `language` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `skypeId` varchar(30) NOT NULL,
  `facebookId` varchar(30) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-16 01:48:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `starring` varchar(1000) NOT NULL,
  `director` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `releasedate` date NOT NULL,
  `xglink` varchar(1000) NOT NULL,
  `jjlink` varchar(1000) NOT NULL,
  `thunderlink` varchar(1000) NOT NULL,
  `uploadtime` datetime NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- 表的结构 `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `showid` int(11) NOT NULL,
  `seriesid` int(11) NOT NULL,
  `xglink` varchar(1000) NOT NULL,
  `jjlink` varchar(1000) NOT NULL,
  `thunderlink` varchar(1000) NOT NULL,
  `uploadtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `showid` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `starring` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `uploadtime` datetime NOT NULL,
  PRIMARY KEY (`showid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

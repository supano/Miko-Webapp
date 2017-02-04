-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 09:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mikono`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `member`
-- 

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `id-card` bigint(13) NOT NULL,
  `birthday` date default NULL,
  `email` varchar(80) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `member`
-- 

INSERT INTO `member` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'นาย', 'ศุภชัย', 'สุทธิคีรี', 1103100365167, '1995-11-23', 'supano1995@gmail.com');
INSERT INTO `member` VALUES ('test001', '81dc9bdb52d04dc20036dbd8313ed055', 'นาย', 'ประยุทธ์', 'จันโอชา', 1103100365168, '1995-10-11', '2');
INSERT INTO `member` VALUES ('', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, '0000-00-00', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `pro_id` varchar(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_stock` int(5) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  PRIMARY KEY  (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES ('001', 'Honey toast', 120, 3, 'honey_toast.jpg');
INSERT INTO `product` VALUES ('002', 'Chocolate toast ', 120, 5, 'chocolate_toast.jpg');
INSERT INTO `product` VALUES ('003', 'strawberry toast', 120, 0, 'strawberry_toast.jpg');

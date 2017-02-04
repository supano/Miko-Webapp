-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 09:18 AM
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
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_stock` int(5) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  PRIMARY KEY  (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (1, 'Honey toast', 120, 3, 'honey_toast.jpg');
INSERT INTO `product` VALUES (2, 'Chocolate toast ', 120, 5, 'chocolate_toast.jpg');
INSERT INTO `product` VALUES (3, 'strawberry toast', 120, 0, 'strawberry_toast.jpg');
INSERT INTO `product` VALUES (4, 'ice1', 200, 0, '');
INSERT INTO `product` VALUES (5, 'ice2', 300, 500, '');
INSERT INTO `product` VALUES (6, 'asdasd', 100, 5, '');
INSERT INTO `product` VALUES (7, 'sehgsdhg', 205, 2, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `wait`
-- 

CREATE TABLE `wait` (
  `order_id` int(20) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_num` int(3) NOT NULL,
  `order_price` float NOT NULL,
  `order_total` float NOT NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `wait`
-- 

INSERT INTO `wait` VALUES (1, 'Honey toast', 1, 120, 120);
INSERT INTO `wait` VALUES (2, 'Chocolate toast ', 1, 120, 240);
INSERT INTO `wait` VALUES (3, 'ice2', 2, 600, 840);
INSERT INTO `wait` VALUES (4, 'Honey toast', 1, 120, 960);

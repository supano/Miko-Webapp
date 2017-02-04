-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `mikono`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
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
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'นาย', 'ศุภชัย', 'สุทธิคีรี', 1103100365167, '1995-11-23', 'supano1995@gmail.com');
INSERT INTO `member` VALUES ('test001', '81dc9bdb52d04dc20036dbd8313ed055', 'นาย', 'ประยุทธ์', 'จันโอชา', 1103100365168, '1995-10-11', '2');
INSERT INTO `member` VALUES ('', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, '0000-00-00', '');
INSERT INTO `member` VALUES ('test', '098f6bcd4621d373cade4e832627b4f6', 'นาย', 'ss', 'dd', 1222222222222, '0000-00-00', 'sa');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `product`
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
-- dump ตาราง `product`
-- 

INSERT INTO `product` VALUES (1, 'Honey toast', 120, 80, 'honey_toast.jpg');
INSERT INTO `product` VALUES (2, 'Chocolate toast ', 120, 54, 'chocolate_toast.jpg');
INSERT INTO `product` VALUES (3, 'strawberry toast', 120, 78, 'strawberry_toast.jpg');
INSERT INTO `product` VALUES (4, 'ice1', 200, 90, '');
INSERT INTO `product` VALUES (5, 'ice2', 300, 90, '');
INSERT INTO `product` VALUES (6, 'asdasd', 100, 90, '');
INSERT INTO `product` VALUES (7, 'sehgsdhg', 205, 100, '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `receipt`
-- 

CREATE TABLE `receipt` (
  `Receipt_id` int(10) NOT NULL,
  `Receipt_pro` varchar(1000) NOT NULL,
  `Receipt_price` float NOT NULL,
  `Receipt_date` varchar(10) default NULL,
  `Receipt_time` varchar(10) default NULL,
  PRIMARY KEY  (`Receipt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `receipt`
-- 

INSERT INTO `receipt` VALUES (1, '\r\n						Chocolate toast  * 1 		', 120, '2016-04-15', '20:15');
INSERT INTO `receipt` VALUES (2, '\r\n						asdasd * 2 		', 200, '2016-04-15', '20:15');
INSERT INTO `receipt` VALUES (3, '\r\n						Honey toast * 5 strawberry toast * 8 ice1 * 3 asdasd * 8 		', 2960, '2016-04-16', '12:16');
INSERT INTO `receipt` VALUES (4, '\r\n						Chocolate toast  * 7 ice2 * 1 		', 1140, '2016-04-16', '12:17');
INSERT INTO `receipt` VALUES (5, '\r\n						Chocolate toast  * 2 Honey toast * 3 Chocolate toast  * 4 Chocolate toast  * 12 Chocolate toast  * 3 Chocolate toast  * 3 strawberry toast * 1 Chocolate toast  * 2 strawberry toast * 1 		', 3720, '2016-04-16', '14:45');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `wait`
-- 

CREATE TABLE `wait` (
  `order_id` int(20) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_num` int(3) NOT NULL,
  `order_price` float NOT NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `wait`
-- 

INSERT INTO `wait` VALUES (1, 'Honey toast', 7, 840);

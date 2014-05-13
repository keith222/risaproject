-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2014 年 05 月 13 日 20:04
-- 伺服器版本: 5.5.25
-- PHP 版本: 5.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `risaproject`
--

-- --------------------------------------------------------

--
-- 表的結構 `video`
--

CREATE TABLE `video` (
  `vId` int(11) NOT NULL AUTO_INCREMENT,
  `yId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'stop',
  PRIMARY KEY (`vId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 轉存資料表中的資料 `video`
--

INSERT INTO `video` (`vId`, `yId`, `status`) VALUES
(1, 'xnjE2RBfn-s', 'stop'),
(2, 'eaKSr1Vbb4g', 'stop'),
(3, 'aoeOxecd0qw', 'stop'),
(4, 'jxvi5ozyRqE', 'stop'),
(5, 'YohlqPqymz4', 'stop'),
(6, 'Yp2wgDzojL0', 'stop'),
(7, 'NsdFamnYAz8', 'stop'),
(8, '4rf2o9Ej2rE', 'stop'),
(9, 'DENaU_y1VY0', 'stop'),
(10, 'icUpRUNqSQs', 'stop'),
(11, 'TxHmxiymtmw', 'stop'),
(12, 'N75IJQYJCzY', 'stop'),
(13, 'wYCOKDfD8o8', 'stop'),
(14, 'b6hdB_VBIpQ', 'stop');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

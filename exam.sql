-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 11 月 22 日 12:21
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exam`
--

CREATE TABLE `exam` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sid` int(20) NOT NULL,
  `f-name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m-name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kind` int(10) NOT NULL,
  `t-comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `t-signature` int(10) DEFAULT 0,
  `s-comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `s-signature` int(10) DEFAULT 0,
  `p-signature` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `exam`
--

INSERT INTO `exam` (`ID`, `name`, `sid`, `f-name`, `m-name`, `kind`, `t-comment`, `t-signature`, `s-comment`, `s-signature`, `p-signature`) VALUES
(1, 'Janne', 109213004, 'Amisha Gaines', 'Hammad Marshall', 1, NULL, 0, NULL, 0, 0),
(2, 'Adam', 109213074, 'Kishan Britt', 'Jade Oakley', 1, NULL, 0, NULL, 0, 0),
(3, 'Mimi', 105213014, 'Nabeel Allen', 'Michael Neville', 1, NULL, 0, NULL, 0, 0),
(4, 'Tom', 107213002, 'Raphael Mccoy', 'Denzel Ewing', 3, NULL, 0, NULL, 0, 0),
(5, 'Ray', 108213046, 'Georga Gunn', 'Kody Ferguson', 2, NULL, 0, NULL, 0, 0),
(6, 'Zoe', 105213077, 'Hussain Mckee', 'Erin Davey', 2, NULL, 0, NULL, 0, 0),
(7, 'Yati', 109213003, 'Roscoe Brandt', 'Arjun Kerr', 2, NULL, 0, NULL, 0, 0),
(8, 'Obama', 109213012, 'Lyndsey Berger\r\n', 'Enoch Love', 3, NULL, 0, NULL, 0, 0),
(9, 'Trump', 109213007, 'Sid Mata', 'Reggie Lopez', 3, NULL, 0, NULL, 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exam`
--
ALTER TABLE `exam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

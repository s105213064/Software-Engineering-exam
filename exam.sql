-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-21 19:18:23
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `kind` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t-comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t-signature` int(10) NOT NULL,
  `s-comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s-signature` int(10) NOT NULL,
  `p-signature` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `exam`
--

INSERT INTO `exam` (`ID`, `name`, `sid`, `f-name`, `m-name`, `kind`, `t-comment`, `t-signature`, `s-comment`, `s-signature`, `p-signature`) VALUES
(1, 'Janne', 109213004, 'Amisha Gaines', 'Hammad Marshall', '低收入戶', NULL, 0, NULL, 0, 0),
(2, 'Adam', 109213074, 'Kishan Britt', 'Jade Oakley', '低收入戶', NULL, 0, NULL, 0, 0),
(3, 'Mimi', 105213014, 'Nabeel Allen', 'Michael Neville', '低收入戶', NULL, 0, NULL, 0, 0),
(4, 'Tom', 107213002, 'Raphael Mccoy', 'Denzel Ewing', '家庭突發因素', NULL, 0, NULL, 0, 0),
(5, 'Ray', 108213046, 'Georga Gunn', 'Kody Ferguson', '中低收入戶', NULL, 0, NULL, 0, 0),
(6, 'Zoe', 105213077, 'Hussain Mckee', 'Erin Davey', '中低收入戶', NULL, 0, NULL, 0, 0),
(7, 'Yati', 109213003, 'Roscoe Brandt', 'Arjun Kerr', '中低收入戶', NULL, 0, NULL, 0, 0),
(8, 'Obama', 109213012, 'Lyndsey Berger\r\n', 'Enoch Love', '家庭突發因素', NULL, 0, NULL, 0, 0),
(9, 'Trump', 109213007, 'Sid Mata', 'Reggie Lopez', '家庭突發因素', NULL, 0, NULL, 0, 0),
(10, 'Janne', 109213004, 'father2', 'mother2', '中低收入戶', NULL, 0, NULL, 0, 0),

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

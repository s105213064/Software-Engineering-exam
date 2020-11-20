-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 10:02:05
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
  `kind` int(10) NOT NULL,
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
(1, 'test', 123, 'test', 'test', 1, '559222', 1, 'test', 1, 1),
(5, 'user1', 2147483647, '你父親', '你母', 2, '555555577777', 0, 'hello~', 0, 1),
(6, 'user', 12341234, '我不知道', '可能是吧', 1, '', 0, 'qweqwe', 1, 0);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

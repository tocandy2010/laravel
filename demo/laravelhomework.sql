-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 10 日 11:55
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `laravelhomework`
--

-- --------------------------------------------------------

--
-- 資料表結構 `home`
--

CREATE TABLE `home` (
  `home_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `time` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `home`
--

INSERT INTO `home` (`home_id`, `title`, `content`, `time`) VALUES
(1, '公告標題11', '公告內容1', '1562750608'),
(2, '公告標題2', '公告內容2', '2'),
(3, '公告標題3', '公告內容3', '3'),
(5, '公告標題1', '公告內容1', '1562749973');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 9 月 23 日 17:32
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kanikeiziban`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `keiziban_table`
--

CREATE TABLE `keiziban_table` (
  `id` int(12) NOT NULL,
  `named` varchar(128) NOT NULL,
  `contents` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `keiziban_table`
--

INSERT INTO `keiziban_table` (`id`, `named`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'テスト', '本文', '2021-09-24 00:03:16', '2021-09-24 00:03:16'),
(2, 'テスト', '本文', '2021-09-24 00:07:36', '2021-09-24 00:07:36'),
(3, 'テスト3', '本文3', '2021-09-24 00:07:55', '2021-09-24 00:07:55'),
(4, 'テスト4', '本文4', '2021-09-24 00:08:10', '2021-09-24 00:08:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `keiziban_table`
--
ALTER TABLE `keiziban_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `keiziban_table`
--
ALTER TABLE `keiziban_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

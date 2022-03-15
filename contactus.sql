-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 11 2022 г., 10:49
-- Версия сервера: 10.3.34-MariaDB
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kattrinc_teamproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contactus`
--

CREATE TABLE `contactus` (
  `uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contactus`
--

INSERT INTO `contactus` (`uid`, `email`, `message`) VALUES
(13, 'kattrin90210@mail.ru', 'Wow'),
(15, 'kattrin90210@inbox.ru', 'hello'),
(16, 'kattrin90210@inbox.ru', 'Great!!!'),
(17, 'kattrin90210@inbox.ru', 'have'),
(18, 'gggggggggggg@mail.ru', 'ghjdhb '),
(19, 'kattrin90210@mail.ru', 'hello\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contactus`
--
ALTER TABLE `contactus`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

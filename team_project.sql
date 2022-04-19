-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Апр 19 2022 г., 11:37
-- Версия сервера: 5.7.34
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `team_project`
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
(19, 'kattrin90210@mail.ru', 'hello\r\n'),
(20, 'kattrin90210@inbox.ru', 'hhhhh'),
(21, 'kattrin90210@inbox.ru', 'Hello');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `orderid` int(10) NOT NULL,
  `uid` int(5) NOT NULL,
  `foodname` varchar(25) NOT NULL,
  `amount` int(15) NOT NULL,
  `paymentstatusid` int(5) NOT NULL,
  `paymentmethodid` int(3) NOT NULL,
  `datepaid` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`orderid`, `uid`, `foodname`, `amount`, `paymentstatusid`, `paymentmethodid`, `datepaid`) VALUES
(1, 1, 'Bavarian Sausages', 1, 1, 1, '2022-04-04 16:55:13'),
(2, 1, 'Meat stew', 2, 2, 1, '2022-04-08 16:35:13'),
(3, 5, 'Meat plate', 3, 2, 1, '2022-04-18 18:24:13'),
(4, 7, 'Meat plate', 3, 2, 1, '2022-04-19 10:24:13');

-- --------------------------------------------------------

--
-- Структура таблицы `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentmethodid` int(11) NOT NULL,
  `paymenttype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `paymentmethod`
--

INSERT INTO `paymentmethod` (`paymentmethodid`, `paymenttype`) VALUES
(1, 'cash');

-- --------------------------------------------------------

--
-- Структура таблицы `paymentstatus`
--

CREATE TABLE `paymentstatus` (
  `paymentstatusid` int(2) NOT NULL,
  `paymentstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `paymentstatus`
--

INSERT INTO `paymentstatus` (`paymentstatusid`, `paymentstatus`) VALUES
(1, 'pending'),
(2, 'complete');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`uid`, `fullname`, `username`, `password`, `email`, `phonenumber`, `address`, `postcode`, `gender`) VALUES
(1, 'Ekaterina', 'kate', '12345', 'kate@mail.ru', 999999999, 'Headland Court 65', 'AB10 7 HL', 'Female'),
(2, 'Jerry Ademi', 'jerry', '123456', 'jerry@mail.ru', 111111111, 'Road 57', 'AB10 7 HL', 'Male'),
(3, 'Ivan', 'ivan', '11111', 'ivan@mail.ru', 799999999, 'Bazhova street', '129128', 'male'),
(4, 'Irina', 'irina', '22222', 'irina@gmail.com', 799999999, '65 Headland Court', '141205', 'female'),
(5, 'Kat', 'kat', '00000', 'kattrin90210@inbox.ru', 799999999, 'Aberdeen', '11111', 'female'),
(6, 'Iren', 'iren', '11111', 'iren@rambler.ru', 700000000, '65 Headland Court', '141205', 'female'),
(7, 'Mark', 'mark', '11111', 'mark@gmail.com', 700000000, 'Robert Gordon University', 'AB10 7QB', 'male');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`uid`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Индексы таблицы `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentmethodid`);

--
-- Индексы таблицы `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD PRIMARY KEY (`paymentstatusid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contactus`
--
ALTER TABLE `contactus`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `paymentmethodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `paymentstatus`
--
ALTER TABLE `paymentstatus`
  MODIFY `paymentstatusid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

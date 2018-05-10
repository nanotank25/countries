-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2018 г., 20:28
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `countries`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `population` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `population`, `description`, `url`) VALUES
(1, 'Россия', 146880432, 'Россия — многонациональное государство, отличающееся большим этнокультурным многообразием. Большая часть населения (около 75 %) относит себя к православию, что делает Россию страной с самым многочисленным православным населением в мире.', 'https://cdn.flamp.ru/0994f46e111213790b3323bb0caeb244_100_100.jpg'),
(2, 'Япония', 126225000, 'Являясь великой экономической державой, Япония занимает третье место в мире по номинальному ВВП и четвёртое по ВВП, рассчитанному по паритету покупательной способности. Япония является четвёртым по величине экспортёром и шестым по величине импортёром.', 'https://i1.sndcdn.com/artworks-000143177894-qfz51o-large.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 19 2025 г., 10:30
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ipalexan_amssoft`
--

-- --------------------------------------------------------

--
-- Структура таблицы `workcosts`
--
-- Создание: Янв 19 2025 г., 06:30
-- Последнее обновление: Янв 19 2025 г., 07:28
--

DROP TABLE IF EXISTS `workcosts`;
CREATE TABLE `workcosts` (
  `id` int(11) NOT NULL,
  `workType` varchar(30) DEFAULT NULL,
  `workTime` varchar(30) DEFAULT NULL,
  `workCost` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workcosts`
--

INSERT INTO `workcosts` (`id`, `workType`, `workTime`, `workCost`) VALUES
(1, 'Замена колодок', '1', '500'),
(2, 'Ремонт двигателя', '20', '25000'),
(3, 'Замена прокладки ГБЦ', '3', '1800'),
(8, 'Замена тросика ручника', '2', '2500'),
(9, 'Чистка пылесосом', '1.2', '750');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `workcosts`
--
ALTER TABLE `workcosts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `workcosts`
--
ALTER TABLE `workcosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

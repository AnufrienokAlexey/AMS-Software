-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 16 2025 г., 04:04
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ams-software_storage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `workcosts`
--

CREATE TABLE `workcosts` (
  `id` int(11) NOT NULL,
  `workType` varchar(30) DEFAULT NULL,
  `workTime` varchar(30) DEFAULT NULL,
  `workCost` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

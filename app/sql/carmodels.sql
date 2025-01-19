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
-- Структура таблицы `carmodels`
--
-- Создание: Янв 19 2025 г., 06:30
-- Последнее обновление: Янв 19 2025 г., 07:27
--

DROP TABLE IF EXISTS `carmodels`;
CREATE TABLE `carmodels` (
  `id` int(11) NOT NULL,
  `carModel` varchar(30) DEFAULT NULL,
  `startDate` varchar(30) DEFAULT NULL,
  `endDate` varchar(30) DEFAULT NULL,
  `carImage` varchar(100) DEFAULT NULL,
  `carType` varchar(30) DEFAULT NULL,
  `carBrand_id` int(30) NOT NULL,
  `workType_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carmodels`
--

INSERT INTO `carmodels` (`id`, `carModel`, `startDate`, `endDate`, `carImage`, `carType`, `carBrand_id`, `workType_id`) VALUES
(1, 'granta', '2012', '2025', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep', 2, 8),
(2, 'priora', '2007', '2013', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan', 2, 9),
(7, 'w200', '2010', '2019', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan', 3, 1),
(8, 'tt', '1998', '2015', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep', 1, 3),
(9, 'prado', '1990', '2025', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep', 4, 8),
(10, 'corolla', '1991', '2017', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan', 4, 1),
(11, 'golf', '2006', '2021', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'hatchback', 5, 9),
(12, 'passat', '1999', '2021', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan', 5, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carmodels`
--
ALTER TABLE `carmodels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carmodels`
--
ALTER TABLE `carmodels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

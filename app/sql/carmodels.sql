-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2025 г., 08:59
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
-- Структура таблицы `carmodels`
--

CREATE TABLE `carmodels` (
  `id` int(11) NOT NULL,
  `carModel` varchar(30) DEFAULT NULL,
  `startDate` varchar(30) DEFAULT NULL,
  `endDate` varchar(30) DEFAULT NULL,
  `carImage` varchar(100) DEFAULT NULL,
  `carType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `carmodels`
--

INSERT INTO `carmodels` (`id`, `carModel`, `startDate`, `endDate`, `carImage`, `carType`) VALUES
(1, 'granta', '2012', '2025', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep'),
(2, 'priora', '2007', '2013', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan'),
(7, 'w200', '2010', '2019', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan'),
(8, 'tt', '1998', '2015', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep'),
(9, 'prado', '1990', '2025', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'jeep'),
(10, 'corolla', '1991', '2017', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan'),
(11, 'golf', '2006', '2021', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'hatchback'),
(12, 'passat', '1999', '2021', 'C:xampphtdocsAMS-Softwareapp/uploads/5c8ef3fbc48ab31be880013cc057d4bf.jpg', 'sedan');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

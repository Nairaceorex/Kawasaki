-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 24 2021 г., 15:23
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kawasaki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `moto`
--

CREATE TABLE `moto` (
  `id` int NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Engine``s type` varchar(255) NOT NULL,
  `Engine volume` int NOT NULL,
  `Horsepower` int NOT NULL,
  `Transmission` int NOT NULL,
  `Clutch` varchar(255) NOT NULL,
  `Model year` int NOT NULL,
  `Volume of the tank` int NOT NULL,
  `Curb weight` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `moto`
--

INSERT INTO `moto` (`id`, `Type`, `Name`, `Picture`, `Description`, `Engine`s type`, `Engine volume`, `Horsepower`, `Transmission`, `Clutch`, `Model year`, `Volume of the tank`, `Curb weight`) VALUES
(1, 'Дорожный', 'Kawasaki Z900RS Черный 2021', 'img\\Kawasaki Z900RS SE 2021.jpg', 'Здесь нет места для суррогатов и подделок. Дух легенды 1970-х годов, Z1, нашел свое современное\r\nвоплощение в Z900RS.', 'Рядный', 948, 111, 6, 'Мокрое многодисковое, ручное', 2021, 17, 215);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

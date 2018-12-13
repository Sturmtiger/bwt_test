-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2018 г., 01:27
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bwt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `gender`, `bday`, `password`) VALUES
(45, 'Антон', 'Лошаренко', 'anthony@gmail.com', 'Male', NULL, '$2y$10$fY78xKj5lqr0Jqi0SmYJvuXzseUU8hCHvZHH0qvq.npuAayu2wjBO'),
(48, 'Verh', 'Sturm', 'verh@gmail.com', 'Male', '1976-11-11', '$2y$10$3MWi6ow.mWyxM/XIbEzoWuWwzPufovLCXIfME7vcQlPPg0iN6AG8a'),
(51, 'Антон', 'Sturm', 'Ekozdlik@mail.rus', NULL, NULL, '$2y$10$vpAOYELc0dWGc.93Xvn7G.sMN3FhxEqorUdA6V8nfxIrEmnx924RC'),
(53, 'Fritz', 'Schultze', 'waffen@gmail.com', 'Male', '1980-11-11', '$2y$10$1XyE7niroH8rh065XcUXHucaYxxqG5E10LkY6BeLU0yF9MTTFKRVy');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

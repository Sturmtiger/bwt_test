-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 01 2019 р., 00:06
-- Версія сервера: 5.6.41
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `bwt`
--

-- --------------------------------------------------------

--
-- Структура таблиці `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'Анаис', 'anais@gmail.com', 'Всем привет! Фидбеки исправно отправляются.'),
(2, 'Fritz Schultze', 'waffen@gmail.com', 'Круто!'),
(4, 'Blab242', 'kek@gmail.com', 'Afafafaf');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `gender`, `bday`, `password`) VALUES
(1, 'Максим', 'Ширяев', 'maksim155555@gmail.com', 'male', '1997-07-21', '$2y$10$B06wulKwHyPMXKYv9OC6z.qq7mVrqPnZx17.tlzyUs0skLJanHhKu'),
(2, 'Fritz', 'Schultze', 'waffen@gmail.com', NULL, NULL, '$2y$10$5TE8IcwZXjvZx6ZIKmqcUu6fzp3b0jTbJ3cCUr3RAL/PcLAEEtFVm'),
(3, 'Анаис', 'Шатле', 'anais@gmail.com', 'female', '1989-02-05', '$2y$10$A7UEbDaL7N/ir2hq5s4yB.75dLO9nE/n9sRgfoV5NepbZBdIQ2QZe');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

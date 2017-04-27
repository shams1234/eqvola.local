-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2017 г., 13:05
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eqvola_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_surname` varchar(50) DEFAULT NULL,
  `u_dob` date DEFAULT NULL,
  `u_country` varchar(50) DEFAULT NULL,
  `u_phone` varchar(50) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_pwd` varchar(255) DEFAULT NULL,
  `u_city` varchar(50) DEFAULT NULL,
  `u_address` varchar(100) DEFAULT NULL,
  `u_post_code` varchar(50) DEFAULT NULL,
  `u_avatar` varchar(200) DEFAULT 'default',
  `u_registered_at` timestamp NULL DEFAULT NULL,
  `u_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_surname`, `u_dob`, `u_country`, `u_phone`, `u_email`, `u_pwd`, `u_city`, `u_address`, `u_post_code`, `u_avatar`, `u_registered_at`, `u_updated_at`) VALUES
(1, 'Anton', 'Shamseev', '1985-06-25', 'Ukraine', '+38(097)106-000-3', 'aka.shams@gmail.com', '123', 'Zaporizhzhya', 'Severoe Shosse 5a', '69006', 'https://randomuser.me/api/portraits/men/10.jpg', '2017-04-24 17:40:56', '2017-04-26 18:39:48'),
(6, 'Alisa', 'Jokela', '1975-06-13', 'Kymenlaakso', '09-863-057', 'alisa.jokela@example.com', '12345', 'Merijärvi', '7936 rautatienkatu', '42336', 'https://randomuser.me/api/portraits/women/10.jpg', '2017-04-27 07:51:27', '2017-04-27 09:56:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

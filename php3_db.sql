-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2016 г., 19:13
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php3_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `__id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`__id`, `name`, `title`) VALUES
(1, 'admin', 'Администратор'),
(2, 'user', 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `__migrations`
--

CREATE TABLE IF NOT EXISTS `__migrations` (
  `__id` bigint(20) unsigned NOT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `__migrations`
--

INSERT INTO `__migrations` (`__id`, `time`) VALUES
(7, 1480259628),
(8, 1480259820);

-- --------------------------------------------------------

--
-- Структура таблицы `__users`
--

CREATE TABLE IF NOT EXISTS `__users` (
  `__id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `registered` date DEFAULT NULL,
  `__role_id` bigint(20) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `__users`
--

INSERT INTO `__users` (`__id`, `name`, `email`, `password`, `registered`, `__role_id`) VALUES
(1, NULL, 'alexx-gsm@yandex.ru', '$2y$10$C.y7Li3jIQIoycYuPKvExuB7/C.mALI8JureDx9rEUb3pEYmJa0ee', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`__id`),
  ADD UNIQUE KEY `__id` (`__id`),
  ADD KEY `name_idx` (`name`);

--
-- Индексы таблицы `__migrations`
--
ALTER TABLE `__migrations`
  ADD PRIMARY KEY (`__id`),
  ADD UNIQUE KEY `__id` (`__id`),
  ADD UNIQUE KEY `time_idx` (`time`);

--
-- Индексы таблицы `__users`
--
ALTER TABLE `__users`
  ADD PRIMARY KEY (`__id`),
  ADD UNIQUE KEY `__id` (`__id`),
  ADD KEY `__role_id_idx` (`__role_id`),
  ADD KEY `email_idx` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `__id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `__migrations`
--
ALTER TABLE `__migrations`
  MODIFY `__id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `__users`
--
ALTER TABLE `__users`
  MODIFY `__id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

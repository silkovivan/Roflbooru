-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2021 г., 23:40
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rolf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lable`
--

CREATE TABLE `lable` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lable`
--

INSERT INTO `lable` (`id`, `text`) VALUES
(1, 'Мемы это искусство'),
(2, 'Сделано не индусами'),
(3, 'Гжегож Кэмбербетч и Бенедикт Бженчишчикевич'),
(4, 'Не хорошо и не ужасно');

-- --------------------------------------------------------

--
-- Структура таблицы `roflbooru`
--

CREATE TABLE `roflbooru` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `thumbnail` text NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roflbooru`
--

INSERT INTO `roflbooru` (`id`, `title`, `thumbnail`, `date`, `content`, `star`) VALUES
(15, 'Авианосец', 'http://localhost/img/art/1.jpg', '2021-12-05', 'Японский', 3),
(17, 'sci fi', 'http://localhost/img/art/2.jpg', '2021-12-05', 'Космический корабль', 3),
(18, 'Надоедливая реклама', 'http://localhost/img/comics/1.jpg', '2021-12-06', 'Какой маленький крестик', 1),
(19, 'Он не хочет битвы', 'http://localhost/img/comics/2.png', '2021-12-06', 'Автор DanbyDraws', 1),
(20, 'Gif', 'http://localhost/img/gifs/1.gif', '2021-12-06', '8/10', 2),
(21, 'Авто', 'http://localhost/img/gifs/2.gif', '2021-12-07', 'Потеря колеса не повлияла', 2),
(22, 'memes', 'http://localhost/img/mems/1.jpg', '2021-12-07', '', 4),
(23, 'Русская рулетка', 'http://localhost/img/mems/3.jpg', '2021-12-07', 'Не советую так делать ', 4),
(24, 'Pixar', 'http://localhost/img/mems/2.jpg', '2021-12-07', 'Бедная буква', 4),
(25, 'Линукс', 'http://localhost/img/mems/4.jpg', '2021-12-07', 'Ах уж этот линукс', 4),
(26, 'Где-то в Китае', 'http://localhost/img/gifs/3.gif', '2021-12-07', 'Шаолиньские монахи', 2),
(27, 'art', 'http://localhost/img/art/3.jpg', '2021-12-07', 'Титаник', 3),
(28, 'Art', 'http://localhost/img/art/4.jpg', '2021-12-08', 'Котик', 3),
(29, 'Зима', 'http://localhost/img/art/5.jpg', '2021-12-08', 'А скоро рождество', 3),
(30, 'Art', 'http://localhost/img/art/6.jpg', '2021-12-08', 'Осень', 3),
(31, 'Странные правила', 'http://localhost/img/comics/3.png', '2021-12-08', 'Никогда не понимал правила бейсбола', 1),
(32, 'Да, но', 'http://localhost/img/comics/4.jpg', '2021-12-08', 'А сейчас это так почти всегда', 1),
(33, 'Лебеди', 'http://localhost/img/gifs/4.gif', '2021-12-08', 'Красота', 2),
(34, 'Слоумо', 'http://localhost/img/gifs/5.gif', '2021-12-08', 'Пёсель', 2),
(35, 'НАДО СНЕСТИ СТЕНУ', 'http://localhost/img/gifs/6.gif', '2021-12-08', '<p>-АЛЛО КОЛЯ, У НАС ЕСТЬ ПИЦЦА!<br>\r\n-ГДЕ?<br>\r\n-ПРЯМО ЗА ТОЙ СТЕНОЙ</p>', 2),
(36, 'Advanced Volume Control', 'http://localhost/img/mems/5.jpg', '2021-12-08', 'Фича', 4),
(37, 'Дай руку', 'http://localhost/img/mems/6.png', '2021-12-08', 'Кусать буду', 4),
(38, 'Happy', 'http://localhost/img/mems/7.jpeg', '2021-12-08', 'KISS', 4),
(41, 'Art', 'http://localhost/img/art/7.jpg', '2021-12-09', 'Красиво', 3),
(42, 'Art', 'http://localhost/img/art/8.jpg', '2021-12-09', 'sci fi', 3),
(43, 'Art', 'http://localhost/img/art/9.jpg', '2021-12-09', 'Ух ты', 3),
(44, 'Современное искуство', 'http://localhost/img/comics/5.jpg', '2021-12-09', 'А что выберешь ты', 1),
(45, 'Злой', 'http://localhost/img/comics/6.png', '2021-12-09', 'Погавкай мне тут', 1),
(46, 'Мотоцикл из шоколада', 'http://localhost/img/gifs/8.gif', '2021-12-09', 'Слипнется', 2),
(47, 'Черепаха', 'http://localhost/img/gifs/7.gif', '2021-12-09', 'Как быстро поплыла', 2),
(48, 'Посвящение', 'http://localhost/img/gifs/9.gif', '2021-12-09', 'В механики', 2),
(49, 'Star wars', 'http://localhost/img/comics/7.jpg', '2021-12-10', 'Оби-Ван?', 1),
(50, 'Утки', 'http://localhost/img/comics/8.png', '2021-12-10', 'Веди', 1),
(51, 'Бедный том', 'http://localhost/img/comics/16.gif', '2021-12-10', 'Не люблю Джерри', 1),
(52, 'Как придумывают названия', 'http://localhost/img/mems/14.jpg', '2021-12-10', 'Эх, учёные', 4),
(53, 'Хах', 'http://localhost/img/mems/15.jpeg', '2021-12-10', 'Киса', 4),
(54, 'Найди нужный провод', 'http://localhost/img/mems/20.jpg', '2021-12-10', 'geek', 4),
(55, 'Студенты...', 'http://localhost/img/mems/22.png', '2021-12-11', 'Ну работает же?', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lable`
--
ALTER TABLE `lable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roflbooru`
--
ALTER TABLE `roflbooru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lable`
--
ALTER TABLE `lable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `roflbooru`
--
ALTER TABLE `roflbooru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

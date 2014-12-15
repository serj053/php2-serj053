-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 15 2014 г., 10:05
-- Версия сервера: 5.6.21-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `dbarticles`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id_art` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '1',
  `title` varchar(100) NOT NULL DEFAULT 'title',
  `content` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_art`, `id_user`, `title`, `content`, `created_date`) VALUES
(1, 1, 'Власть', 'Власть должна принадлежать народу и передаваться через народных избранников, но к сожалению это не так, власть захвачена преступным сообществом, которые для свих целей используют технологии фальсификаций выборов..', '2014-12-01 22:46:26'),
(2, 1, 'Деревня', 'Хорошо в деревне зимой, тишина, снежок и чистейший воздух, вот только дрова надо для печки колоть, а так хорошо..', '2014-12-01 22:54:27'),
(3, 1, 'Кто виноват и что делать', 'Виноваты все, народ что пассивен и доверчив, власть что обнаглела и постоянно врет и грабит народ', '2014-12-02 23:05:27'),
(4, 1, 'Украина', 'Украина это экспериментальная площадка для Америки..', '2014-12-02 23:06:29'),
(5, 1, 'Проверка', 'Эту статью можно стереть..или отредактировать', '2014-12-02 23:06:59'),
(6, 1, 'Выборы в России', 'Выборы в России практически отсутствуют, так как они превратились в сплошной фарс с использованием массовых фальсификаций, и у власти все время одна и та же преступная группировка..', '2014-12-02 23:08:49'),
(7, 1, 'Альтернативная энергия', 'Развитие альтернативной энергии тормозиться нефтегазовой мафией...', '2014-12-02 23:11:17'),
(8, 1, 'Госдума', 'Не припомню ни одного закона принятого госдумой, что бы я ощутил улучшения жизни, зато зарплаты они себе обеспечили высокие..', '2014-12-02 23:40:28'),
(9, 1, 'Для чего человек живет', 'Если бы люди об этом чаще задумывались бы то многие бы в корне изменили бы свою жизнь..', '2014-12-03 23:53:44'),
(10, 1, 'йцуввайц', 'увйыц айцуай', '2014-12-14 19:49:39'),
(11, 1, 'цпцкепр', 'Запцаепцепцк урп уп цекпцкпц', '2014-12-14 19:50:18'),
(20, 1, 'Власть', 'Власть должна принадлежать народу и передаваться через народных избранников, но к сожалению это не так, власть захвачена преступным сообществом, которые для свих целей используют технологии фальсификаций выборов..', '2014-12-14 20:26:59'),
(41, 1, 'Власть это  духовная помойка и отстой', 'Власть должна принадлежать народу и передаваться через народных избранников, но к сожалению это не так, власть захвачена преступным сообществом, которые для свих целей используют технологии фальсификаций выборов.., жулики правят', '2014-12-14 21:07:07'),
(57, 1, 'Статья для удаления', 'Терроризм результат действия властей..', '2014-12-15 07:47:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id_art`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
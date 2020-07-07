-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 13 2019 г., 08:01
-- Версия сервера: 10.2.21-MariaDB
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mond`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `purpose`, `login`, `password`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'https://192.168.10.7:4433', 'zsv', 'asoNya1988', 'PRTG Monitor - отслеживание работы серверов и служб', '2019-06-27 03:59:34', '2019-06-27 03:59:34'),
(2, 'https://www.1-ofd.ru/', 'admin@mond51.ru', 'BpfXPs0Di', 'Кассы ГОБУЗ МОНД', '2019-06-27 04:04:43', '2019-06-27 04:04:43'),
(3, 'http://10.10.0.2:84/', 'maslatcsov_ag', 'q/vnYGBD', 'АРМ Формирование заявок на оказание мед. помощи в МОКБ Баяндина.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 04:52:06', '2019-07-02 10:29:44'),
(4, 'https://ссту.рф', 'ROIV51-I-NaumovaOS', 'KZdSpGV+nD', 'Открытая часть ССТУ. Используется для передачи обращений и жалоб посетителей.', '2019-06-27 05:25:07', '2019-06-27 05:25:21'),
(5, 'https://62.rosminzdrav.ru', 'reg4654', 'EFc4TO', 'Система мониторинга ресурсного обеспечения. Пользователь - Желем. Используется экономистами.', '2019-06-27 05:28:01', '2019-06-27 05:28:01'),
(6, 'ftp://ftp.esklp.rosminzdrav.ru/', 'esklp_xls', 'bUUZSZ6e', 'Единый справочник-каталог лекарственных препаратов', '2019-06-27 05:30:52', '2019-06-27 05:30:52'),
(7, 'TrueConf', 'murmansk', '123', 'Программа для конференций', '2019-06-27 05:34:14', '2019-06-27 05:34:14'),
(8, 'http://nok.rosminzdrav.ru/', 'GOBUZ_ND', '6tqOH8', 'Портал независимой оценки качества работы учреждения.', '2019-06-27 05:40:10', '2019-07-09 09:14:19'),
(9, 'http://polarmed.ru/', 'zamolin_s', '69n.kckjvei', 'Сведения о медицинской организации МИАЦ', '2019-06-27 05:44:56', '2019-06-27 10:47:09'),
(10, 'http://81.200.91.85:8570', 'r51-nd-admin', 'Qo1Nn1s4', 'Администратор.\r\nФедеральная телемедицинская информационная система Минзрава России.', '2019-06-27 05:47:45', '2019-06-27 05:47:45'),
(13, 'http://81.200.91.85:8570', 'r51-nd-oper', 'K5e7Ttr0', 'Оператор.\r\nФедеральная телемедицинская информационная система Минзрава России.', '2019-06-27 06:23:09', '2019-06-27 08:04:37'),
(14, 'VinteoClient ФТМС', '5100040', '3oKMk0', 'Клиент.\r\nФедеральная телемедицинская информационная система Минзрава России.\r\nСсылка на программу:\r\nhttp://download.vinteo.com/VinteoClient/win/VinteoDesktop-0.5.0.exe\r\nИнструкция по настройке:\r\nhttp://doc.vinteo.com/ru/manuals/vinteo-desktop/chapter-3/chapter-3-3\r\nАдрес сервера ВКС для настройки клиента – 81.200.91.42\r\nНе забыть поставить галочку  - Необходима регистрация\r\nТелефоны операторов для проверки ВКС – \r\n8 (495) 924-05-64\r\n8 (495) 765-12-16 \r\n8 (495) 727-88-14\r\n8 (495) 210-00-68\r\nКруглосуточный телефон операторов телемедицинской системы – 8-985-110-43-30\r\nНастройка портов и vinteo web client: http://194.0.219.190', '2019-06-27 09:25:03', '2019-07-31 06:47:45'),
(15, 'http://rism.polarmed.ru', 'Замолин С.В.', 'WrmNjUOA', 'РИСМ - Система отчетности МИАЦ', '2019-06-27 09:27:55', '2019-08-01 06:10:23'),
(16, 'http://rism.polarmed.ru', 'Рябинин А.А.', 'TfCHHMpe', 'РИСМ - Система отчетности МИАЦ', '2019-06-27 09:28:12', '2019-08-01 06:10:30'),
(17, 'http://rism.polarmed.ru', 'Михеевская Н.А.', 'kw5ub7IR', 'РИСМ - Система отчетности МИАЦ', '2019-06-27 09:28:45', '2019-08-01 06:10:34'),
(18, 'http://rism.polarmed.ru/', 'Желем Н.В.', 'fiesNJkR', 'РИСМ - Система отчетности МИАЦ', '2019-06-27 09:28:58', '2019-08-01 06:10:37'),
(19, 'http://10.10.0.2:81/login.php', 'kolosov_sn', 'P@ssw0rd', 'Колосов С.Н.\r\nМедицинское свидетельство о смерти.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:32:02', '2019-06-27 10:10:36'),
(20, 'http://10.10.0.2:81/login.php', 'kazankov_ka', 'P@ssw0rd', 'Казанков К.А.\r\nМедицинское свидетельство о смерти.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:34:35', '2019-06-27 10:10:40'),
(21, 'http://10.10.0.2:81/login.php', 'galanchuk_yuv', 'P@ssw0rd', 'Галанчук Ю.В.\r\nМедицинское свидетельство о смерти.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:35:51', '2019-06-27 10:10:45'),
(22, 'http://10.10.0.2:81/login.php', 'ganchar_gv', 'P@ssw0rd', 'Ганчар Г.В.\r\nМедицинское свидетельство о смерти.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:36:14', '2019-06-27 10:10:49'),
(23, 'Терминалы Сбербанка', 'Нет', '878787', 'Платежные терминалы в лаборатории, приемном отделении и регистратуре ВРШ', '2019-06-27 09:40:34', '2019-06-27 09:40:34'),
(24, 'https://helpdesk.rosminzdrav.ru', 'admin@mond51.ru', 'P@ssw0rd', 'Техническая поддержка Росминздрава', '2019-06-27 09:42:21', '2019-06-27 09:42:21'),
(25, 'http://training.medialog.ru', 'Verpul', 'Ltncrfz2', 'Дистанционное обучение администраторов МИС МЕДИАЛОГ', '2019-06-27 09:44:39', '2019-06-27 09:44:39'),
(26, 'http://10.10.0.2/MQUI/', 'src_lpu239', 'z0h239', 'Управление направлениями и очередями в МОКБ Баяндина.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:46:59', '2019-06-27 10:10:58'),
(27, 'https://alfa-doc.ru/account/login/', 'gobuz_mond', 'P@ssw0rd', 'Автоматизация процессов по защите информации (ПД)', '2019-06-27 09:48:50', '2019-06-27 09:49:00'),
(28, 'https://www.google.com/', 'mondmurmansk@gmail.com', 'Djkjlfhcrjuj-16', 'Аккаунт Google', '2019-06-27 09:50:04', '2019-06-27 09:50:04'),
(29, 'http://mail.m51.ru', 'mond@m51.ru', 'Pfgkfnrby', 'Официальная почта ГОБУЗ МОНД', '2019-06-27 09:51:04', '2019-06-27 09:51:04'),
(30, 'https://10.10.0.2/owa', 'mond@polarmed.ru', 'tubsir75', 'Почта для информации об управление направлениями и очередями в МОКБ Баяндина.\r\nНа ПК с прокси требуется прописать адрес 10.10.* в исключения.', '2019-06-27 09:53:04', '2019-06-27 10:11:05'),
(31, 'http://mond51.ru/administrator/', 'dicmfysv', 'dWmeDGye', 'Админка официального сайта ГОБУЗ МОНД', '2019-06-27 09:56:36', '2019-07-05 09:18:37'),
(32, 'http://masterhost.ru/', 'c389195', 'pregn5shio', 'Личный кабинет хостинг-провайдера.\r\nВаш персональный pin-код 3431.', '2019-06-27 09:58:08', '2019-06-27 09:58:08'),
(33, 'https://phpmyadmin.masterhost.ru/', 'u386955', 'AnEette.rIes4m', 'MySQL сервер официального сайта ГОБУЗ МОНД', '2019-06-27 10:00:07', '2019-06-27 10:00:07'),
(34, 'https://webftp.masterhost.ru/', 'u386955', 'hoodiscringe7a', 'FTP официального сайта ГОБУЗ МОНД', '2019-06-27 10:01:04', '2019-06-27 10:01:04'),
(35, 'http://u386955.ssh.masterhost.ru', 'u386955', 'ptatiorme9', 'SSH официального сайта ГОБУЗ МОНД', '2019-06-27 10:02:28', '2019-06-27 10:02:28'),
(36, 'https://vk.com/mond51', 'mond@m51.ru', 'P@ssw0rd', 'Официальная группа ГОБУЗ МОНД Вконтакте.\r\nРегистрация на корпоративный номер 89537550317. Моб. телефон у сторожей ВРШ.', '2019-06-27 10:05:14', '2019-07-22 04:22:37'),
(37, 'https://twitter.com/gobuz_mond', 'mond@m51.ru', 'P@ssw0rd', 'Официальная страница ГОБУЗ МОНД в Твиттере.\r\nПривязана к телефону 8-953-755-0325', '2019-06-27 10:06:34', '2019-06-27 10:09:44'),
(38, '192.168.200.3', 'Нет', 'asoNya', 'Коммутатор D-Link DSG-1216T Лаборатория.\r\nВход через IE.', '2019-06-27 10:12:47', '2019-06-27 10:14:43'),
(39, '192.168.200.20', 'admin', 'asoNya', 'Коммутатор Cisco Серверная ГС.\r\nВход через Firefox.', '2019-06-27 10:14:33', '2019-06-27 10:14:33'),
(40, '192.168.20.200', 'zsv', 'asoNya1988', 'Сервер srv-hp-dl320.\r\nСервер обновлений WSUS и ESET для пользователей ГС', '2019-06-27 10:19:29', '2019-06-27 10:24:39'),
(41, '192.168.10.1', 'zsv', 'asoNya1988', 'Сервер DC1.\r\nКонтроллер домена', '2019-06-27 10:20:41', '2019-06-27 10:24:45'),
(42, '192.168.10.8', 'yusv', 'Ltncrfz2', 'Сервер vsrv-ts.\r\nДля подключения тонких клиентов. \r\nЕсть официальный FineReader', '2019-06-27 10:22:58', '2019-06-27 10:38:45'),
(43, '192.168.10.6', 'zsv', 'asoNya1988', 'Сервер vsrv-sql.\r\nРасположение MySQL базы Медиалог.\r\nАдрес ВЧС 10.51.6.254', '2019-06-27 10:24:25', '2019-06-27 10:25:17'),
(44, '192.168.10.34', 'yusv', 'Ltncrfz2', 'Сервер vsrv-deploy.\r\nНастройка бэкапов. Сервер ESET ВРШ и Гаранта', '2019-06-27 10:28:20', '2019-06-27 10:28:48'),
(45, '192.168.10.33', 'zsv', 'asoNya', 'Сервер UserGate.', '2019-06-27 10:30:30', '2019-06-27 10:30:30'),
(46, 'https://www.cryptopro.ru', 'nicenick@mail.ru', 'Ltncrfz2', 'Официальный сайт КриптоПро', '2019-06-27 10:36:36', '2019-06-27 10:37:37'),
(47, 'https://gov-murman.ru', 'minzdrav_podved_10', 'snVUZpe(02', 'Реестр государственных информационных систем Мурманской области', '2019-06-27 10:40:58', '2019-06-27 10:40:58'),
(48, 'http://gz-murman.ru', 'wr_805_00322_1', 'simugb', 'АИС управления закупками Мурманской области', '2019-06-27 10:42:19', '2019-06-27 10:42:19'),
(49, 'http://asmms.mednet.ru', 'murmansk@spravka.mednet.ru', '123456', 'Центральный НИИ организации и информатизации здравоохранения.\r\nМониторинг смертности.', '2019-06-27 10:44:57', '2019-06-27 10:44:57'),
(50, 'srv-hp-320dl:2223', 'Администратор', 'Нет', 'ESET Remote Administrator Console ГС.\r\nВход через программу ESET Remote Administrator', '2019-06-27 10:49:39', '2019-06-27 10:51:47'),
(51, 'vsrv-deploy:2223', 'Администратор', 'Нет', 'ESET Remote Administrator Console ВРШ.\r\nВход через программу ESET Remote Administrator', '2019-06-27 10:51:12', '2019-06-27 10:51:59'),
(52, 'http://192.168.20.44', 'zsv', 'asoNya', 'Камеры 3го отделения ГС.\r\nВход через IE.', '2019-06-27 10:54:41', '2019-06-27 10:54:41'),
(53, 'https://www.zdrav.ru/', 'st@mond51.ru', '27041963', 'Портал для главной мед.сестры и эпидимиолога', '2019-07-04 04:16:47', '2019-07-04 04:16:47'),
(54, 'https://vip.1glms.ru/', 'st@mond51.ru', '27041963', 'Премиальная версия портала для главной м.сестры и эпидимиолога', '2019-07-04 04:18:02', '2019-07-04 04:18:02'),
(55, 'http://192.168.50.6/', 'admin', 'asoNya', 'ASUS RT-N66U\r\nWi-Fi name: MOND-H-2', '2019-08-01 06:08:03', '2019-08-01 06:09:04'),
(56, 'MOND-H-2', 'Нет', 'LoveMurmansk!', 'Wi-Fi ВРШ', '2019-08-01 06:08:35', '2019-08-01 06:08:35'),
(57, 'http://rism.polarmed.ru', 'Маслацов А.Г.', 'BjsvKclb', 'РИСМ - Система отчетности МИАЦ', '2019-08-01 06:11:37', '2019-08-01 06:11:37');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_18_075808_create_data_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

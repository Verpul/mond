-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 27 2019 г., 08:36
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
-- База данных: `mond_data`
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
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `purpose`, `login`, `password`, `comment`, `created_at`, `updated_at`) VALUES
(21, '123133', '321', '123', '123', '2019-06-26 08:56:07', '2019-06-27 03:12:57'),
(22, 'deleniti', 'Josiah Cummerata', 'Non.', 'Animi eos repellendus porro.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(23, 'laborum', 'Mrs. Constance Kohler', 'Culpa.', 'Nostrum dolorum in et rerum.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(25, 'ut', 'Polly Tromp MD', 'Ab in.', 'Sed molestiae voluptatem vel.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(27, 'voluptatum', 'Camren Kirlin', 'Est.', 'Ab enim dolores placeat quia.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(28, 'minus', 'Rosemary Lehner', 'Amet.', 'Provident architecto non et.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(29, 'minima', 'Selena Bosco', 'Quia.', 'Ut ut nisi ut est qui.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(30, 'tenetur', 'Ms. Felipa Stark PhD', 'Sit.', 'Minus quo maiores iusto illo.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(31, 'voluptas', 'Dr. Chandler Bednar', 'Ut.', 'Corrupti et ex illo quas.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(32, 'aut', 'Astrid Bailey MD', 'Harum.', 'Aut in architecto esse sint.', '2019-06-26 09:07:12', '2019-06-26 09:07:12'),
(33, 'eos', 'Anissa Treutel', 'Nemo.', 'Modi sapiente ex et natus.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(34, 'et', 'Mavis Okuneva DVM', 'Sit.', 'Quod libero et dolorem.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(35, 'repudiandae', 'Claire Daugherty', 'Eos.', 'Ut at cum iste sequi.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(36, 'saepe', 'Dr. Sydnee Jacobson', 'Est.', 'Nostrum voluptatem ex ut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(37, 'ipsum', 'Dr. Myrtice Kirlin', 'Nobis.', 'Sed ratione sed ut est aut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(38, 'sit', 'Prof. Gay Altenwerth MD', 'Sint.', 'Qui quibusdam sint rerum.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(39, 'aspernatur', 'Johanna Treutel', 'Quo.', 'Ex voluptas non aut a.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(40, 'molestiae', 'Rico Ernser', 'Ut.', 'Suscipit rerum iure nisi.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(41, 'dicta', 'Marina Rice Sr.', 'Enim.', 'Cumque et aperiam et qui.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(42, 'ut', 'Jaleel Nitzsche IV', 'Et ut.', 'Porro id voluptas aut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(43, 'adipisci', 'Dr. Dariana Satterfield I', 'Qui.', 'Ex ut et qui molestiae.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(44, 'sint', 'Mattie Frami', 'Error.', 'Ratione in aut neque.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(45, 'ipsam', 'Jamey Rempel', 'Est a.', 'Aut omnis voluptatem vero.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(46, 'dignissimos', 'Miss Lou Kuvalis', 'Aut.', 'Sunt qui qui ut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(47, 'ut', 'Reyna Hahn', 'Sit.', 'Id nesciunt sint et sunt.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(48, 'praesentium', 'Brigitte Lindgren', 'Aut.', 'Quae molestiae rerum enim.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(49, 'autem', 'Nellie Price Jr.', 'Sed.', 'Ut aut et dolores et.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(50, 'ea', 'Mrs. Jennifer Cummerata PhD', 'Vero.', 'Vel quisquam in veniam aut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(51, 'voluptatem', 'Ms. Lavonne Zieme PhD', 'In.', 'Quasi repellendus quo et.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(52, 'nihil', 'Dr. Davin Stark PhD', 'Eum.', 'Saepe at blanditiis rerum in.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(53, 'error', 'Dylan Marquardt', 'Et.', 'Quia officiis mollitia ut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(54, 'sequi', 'Mr. Dylan Little', 'Ex.', 'In illo hic a id assumenda.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(55, 'doloremque', 'Maeve Kerluke', 'Esse.', 'Eligendi vel vel ut.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(56, 'maxime', 'Emil Schaden', 'Sed.', 'Maxime et beatae omnis culpa.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(57, 'dicta', 'Mr. Christop Bergnaum', 'Dolor.', 'Qui fugit ex sit.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(58, 'eius', 'Doyle Rogahn', 'Est.', 'Veritatis ad illum est eaque.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(59, 'aperiam', 'Miss Onie Dibbert', 'Non.', 'Aut ea aut nihil voluptas.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(60, 'sunt', 'Miss Brielle Upton', 'Quis.', 'Cum aut odit nihil.', '2019-06-26 09:07:13', '2019-06-26 09:07:13'),
(61, 'autem', 'Kelsi Leuschke', 'Dolor.', 'Et animi est quasi.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(62, 'est', 'Brianne Glover', 'Eum.', 'Est qui officiis vel earum.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(63, 'non', 'Mrs. Euna Koelpin', 'Cum.', 'Sunt in quae vel quasi.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(64, 'inventore', 'Nikolas Johnston DVM', 'Ipsam.', 'Temporibus ex sed hic.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(65, 'tenetur', 'Ila Simonis', 'Omnis.', 'Et autem et dolores sunt.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(66, 'consectetur', 'Rick Gorczany', 'Quas.', 'Alias et occaecati vel.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(67, 'nobis', 'Wiley Bernhard', 'Ipsam.', 'Eos sunt ut omnis et et.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(68, 'quis', 'Flo Jacobi', 'Omnis.', 'Ab magnam enim et et.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(69, 'numquam', 'Justice Gutkowski', 'Ipsam.', 'Nihil adipisci velit in id.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(70, 'inventore', 'Dr. Daisha Heller', 'Velit.', 'Esse et dolores placeat quae.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(71, 'vero', 'Alexie Rosenbaum', 'Eaque.', 'Dolores molestiae ad est.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(72, 'harum', 'Noe Welch', 'Ut.', 'Vel asperiores ad eos.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(73, 'laudantium', 'Zack Balistreri', 'Nam.', 'Quasi quia est optio.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(74, 'quo', 'Michel Muller Sr.', 'Unde.', 'Velit porro ad est eum atque.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(75, 'rerum', 'Dr. Aniya Lynch', 'Quia.', 'Et illo ipsa dolore.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(76, 'enim', 'Eloy Block', 'Ut.', 'Rerum nam in dolorem et.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(77, 'minus', 'Leonardo Ward', 'Atque.', 'Unde ut hic error eius.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(78, 'est', 'Mr. Freeman Erdman', 'Aut.', 'Et mollitia est numquam qui.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(79, 'sit', 'Myrtis Reichel PhD', 'Ex.', 'Et rerum fugiat omnis odio.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(80, 'aut', 'Dejon Kuphal', 'Dolor.', 'Corrupti nisi aliquam sit et.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(81, 'nam', 'Jammie Grimes', 'Natus.', 'Et enim voluptatum minus.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(82, 'et', 'Desmond Rodriguez', 'Illo.', 'Alias non quod est est.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(83, 'perferendis', 'Shawna Stokes I', 'In.', 'In nulla quam nihil ut quasi.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(84, 'ut', 'Bailee Hane', 'Fuga.', 'Iusto non voluptate sit qui.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(85, 'aut', 'Dr. Arnaldo Gerhold', 'Eaque.', 'Quod natus laudantium nemo.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(86, 'dolores', 'Cortney Haag', 'Rerum.', 'Rerum fugit et voluptates.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(87, 'harum', 'Adela Kling', 'Sit.', 'Velit aliquid est eos.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(88, 'non', 'Prof. Holly Harber MD', 'Sequi.', 'Beatae officia et sed aut.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(89, 'quod', 'Estell McKenzie II', 'In.', 'Ut vel laborum et itaque.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(90, 'assumenda', 'Myrl Gleason', 'Velit.', 'Sunt quia nulla ipsa ipsa.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(91, 'et', 'Jalen Ledner', 'Iste.', 'Et tenetur eum qui corporis.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(92, 'architecto', 'Dr. George Konopelski I', 'Neque.', 'Aut tempore quidem odit est.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(93, 'harum', 'Camille McDermott', 'Odit.', 'Vel quasi ut est iure.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(94, 'facere', 'Florence Kunde', 'Eum.', 'Quo voluptas ea error hic et.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(95, 'nemo', 'Ms. Raina Abernathy', 'Sint.', 'Nesciunt saepe tenetur quia.', '2019-06-26 09:07:14', '2019-06-26 09:07:14'),
(96, 'optio', 'Tabitha Schroeder', 'Odit.', 'Nobis non nihil deleniti ex.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(97, 'doloremque', 'Casper Parker', 'Ab.', 'Eligendi sunt ea quo impedit.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(98, 'odit', 'Kirk Okuneva I', 'Ipsam.', 'Harum sunt harum nemo iste.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(99, 'commodi', 'Cheyanne Emard', 'Rerum.', 'Eveniet laborum vel a in.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(100, 'quisquam', 'Judah Batz', 'Sed.', 'Ducimus sit aut molestias.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(101, 'et', 'Hunter Tillman Jr.', 'Sunt.', 'Sit in adipisci in unde quis.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(102, 'qui', 'Mrs. Vincenza Cormier I', 'Harum.', 'Aut tempora ipsa dolores.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(103, 'non', 'Pierce Bayer', 'Quo.', 'Suscipit ut cupiditate nisi.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(104, 'tempora', 'Cayla Carter', 'Est.', 'Qui sunt vero non excepturi.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(105, 'corrupti', 'Mallie Bosco', 'Velit.', 'Ad sed dolores omnis impedit.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(106, 'iusto', 'Madeline Schinner', 'Dolor.', 'Eum est aut esse qui et.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(107, 'voluptatem', 'Concepcion Ruecker', 'Qui.', 'Minus ut enim nam ut quis.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(108, 'aliquam', 'Mr. Morris Barrows IV', 'Enim.', 'Cum ut itaque minus sed.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(109, 'explicabo', 'Carmela Green PhD', 'Quos.', 'Et nam id velit nesciunt.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(110, 'aperiam', 'Cristina Feil', 'Nihil.', 'At eos est et dolor porro.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(111, 'nihil', 'Mrs. Brooklyn Powlowski PhD', 'Et.', 'Dolor ab unde et voluptatem.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(112, 'perspiciatis', 'Giovanny Schoen', 'Ut.', 'Minima ut adipisci et totam.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(113, 'rerum', 'Tremayne Kassulke', 'Ut.', 'Velit qui ipsum non.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(114, 'molestiae', 'Doug White', 'Vero.', 'Nobis non quo voluptatem est.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(115, 'expedita', 'Tyler Thiel', 'Ut.', 'Numquam et at at blanditiis.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(116, 'repellendus', 'Esther Tromp', 'Quis.', 'Facilis aut quo omnis nam.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(117, 'ipsam', 'Jammie Hand', 'In.', 'Ut quae velit nobis fugiat.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(118, 'et', 'Verona Aufderhar', 'Et.', 'Aut assumenda ad recusandae.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(119, 'voluptas', 'Miss Palma Willms', 'Iure.', 'Nemo et soluta rerum.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(120, 'quo', 'Mrs. Earnestine Breitenberg', 'Enim.', 'Et ab a rerum doloribus illo.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(121, 'ut', 'Isaiah Heller', 'Sint.', 'Veniam qui quos molestiae.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(122, 'omnis', 'Miss Marilou Turcotte IV', 'Ipsum.', 'Et dolor illum saepe ducimus.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(123, 'ab', 'Royce Cruickshank', 'Modi.', 'Autem dolor illo a quos.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(124, 'quas', 'Keanu Hane', 'Est.', 'Magni voluptate ut iste.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(125, 'aliquid', 'Freda Brown', 'Saepe.', 'Alias ad rerum cupiditate.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(126, 'aliquam', 'Dr. Carleton Ferry Jr.', 'Sit.', 'Quia vel dolor alias qui.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(127, 'deleniti', 'Robb Torp', 'Est.', 'Sed repellendus maxime aut.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(128, 'ipsam', 'Braden Hoeger', 'Ipsum.', 'Dolore quia placeat non.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(129, 'aut', 'Cary Walsh Sr.', 'In.', 'Provident voluptatem a et.', '2019-06-26 09:07:15', '2019-06-26 09:07:15'),
(130, 'pariatur', 'Juwan Gorczany', 'Quam.', 'Iste qui itaque libero dolor.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(131, 'autem', 'Peggie Mitchell', 'Est.', 'Aut rerum quia aut nulla ea.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(132, 'modi', 'Giovanni McKenzie', 'Aut.', 'Qui eaque velit et quibusdam.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(133, 'quo', 'Ulices Stamm Sr.', 'Enim.', 'Soluta porro debitis debitis.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(134, 'reprehenderit', 'Dr. Kara Spinka Sr.', 'Eos.', 'Iusto dolorum est non.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(135, 'illo', 'Prof. Rossie Gusikowski I', 'Esse.', 'Nostrum ut fuga ipsum qui.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(136, 'unde', 'Myrtis Little', 'Harum.', 'Dolor esse dolores eveniet.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(137, 'aut', 'Harvey Buckridge', 'Qui.', 'Ut ipsum voluptatem deserunt.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(138, 'ipsam', 'Francisco Bauch', 'Quam.', 'Quae amet alias hic libero.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(139, 'eos', 'Dr. Jeffery Borer MD', 'Et.', 'Dolor est nostrum ut.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(140, 'adipisci', 'Mr. Reinhold Bode', 'Quo.', 'Quis eaque nihil ipsam nulla.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(141, 'culpa', 'Miss Anjali Beahan', 'Sunt.', 'At in culpa sint atque.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(142, 'voluptas', 'Valerie O\'Keefe', 'Aut.', 'Neque sint expedita beatae.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(143, 'aut', 'Mrs. Luella Hahn', 'Et.', 'Sed qui ut dolorum autem.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(144, 'ipsum', 'Dr. Preston Breitenberg', 'Aut.', 'Eius vel quia recusandae.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(145, 'ut', 'Antonio Heller', 'Eaque.', 'Totam ea facere et non.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(146, 'ut', 'Kiera Reynolds', 'Amet.', 'Modi nihil qui eius fugit.', '2019-06-26 09:07:16', '2019-06-26 09:07:16'),
(147, '\\3535', '@Q4', 'rqwer', '123', '2019-06-27 03:12:20', '2019-06-27 03:12:20'),
(148, 'qwe', 'ewq', 'qwe', NULL, '2019-06-27 03:13:13', '2019-06-27 03:13:13');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

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

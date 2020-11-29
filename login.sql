-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 01:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `q_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `answer`, `q_id`, `username`, `timestamp`) VALUES
(17, '<p><strong>6 Best Places to Learn HTML</strong></p>\r\n\r\n<ul>\r\n	<li>Codecademy.</li>\r\n	<li>Learn HTML.</li>\r\n	<li>BitDegree.</li>\r\n	<li>W3Schools.</li>\r\n	<li>HTML Website.</li>\r\n	<li>Shay Howe&#39;s Learning Site.</li>\r\n</ul>\r\n\r\n<h3>This is one of the best&nbsp;<a href=\"https://www.w3schools.com/\" target=\"_blank\">https://www.w3schools.com/</a></h3>\r\n\r\n<p>&nbsp;</p>\r\n', 42, 'Ghaida.B7', '2020-11-29 12:09:38'),
(18, '<p>here is some&nbsp;<a href=\"https://www.youtube.com/user/khanacademy\" target=\"_blank\">https://www.youtube.com/user/khanacademy</a>&nbsp;,&nbsp;<a href=\"https://www.youtube.com/channel/UCEWpbFLzoYGPfuWUMFPSaoA\" target=\"_blank\">https://www.youtube.com/channel/UCEWpbFLzoYGPfuWUMFPSaoA</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 43, 'Shada1', '2020-11-29 12:11:11'),
(19, '<p>there is (java.awt, java.awt.event, javax.swing, javax.swing.event)</p>\r\n', 44, 'Bassam', '2020-11-29 12:19:02'),
(20, '<p>لو كان فيه غلط بكود php يطلع لك بالمتصفح&nbsp;</p>\r\n', 46, 'noura1', '2020-11-29 12:25:49'),
(21, '<p>Maybe the MovieLens datasets can help you:<br />\r\n<a href=\"http://grouplens.org/datasets/movielens/\" target=\"_blank\">http://grouplens.org/datasets/movielens/</a></p>\r\n', 45, 'noura1', '2020-11-29 12:34:51'),
(22, '<p>فيه اكثر من طريقة ولو كنتي تستخدمين اتوم&nbsp;هذا المقطع راح يساعدك&nbsp;</p>\r\n\r\n<p><a href=\"https://youtu.be/6HsZMl-qV5k\" target=\"_blank\">https://youtu.be/6HsZMl-qV5k</a></p>\r\n', 47, 'noura1', '2020-11-29 12:36:24'),
(23, '<p>تسوين مخزن بقيت هب وتسوين لصق او رفع للملفات&nbsp;</p>\r\n', 47, 'ghada1', '2020-11-29 12:38:51'),
(24, '<p>ايوه تقدرين يا من اوامر SQL او من صفحة myphpadmin تسوين تعديل لقاعدة البيانات&nbsp;</p>\r\n', 48, 'ghada1', '2020-11-29 12:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `a_tags`
--

CREATE TABLE `a_tags` (
  `a_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_tags`
--

INSERT INTO `a_tags` (`a_id`, `tag_id`) VALUES
(7, 21),
(8, 19),
(9, 17),
(9, 19),
(9, 21),
(10, 17),
(11, 17),
(11, 19),
(15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_title` varchar(255) DEFAULT NULL,
  `q_body` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_title`, `q_body`, `username`, `timestamp`) VALUES
(42, 'HTML', '<p>what is the best online platform to learn HTML?&nbsp;</p>\r\n', 'Shada1', '2020-11-29 12:04:25'),
(43, '', '<pre>\r\nAny suggestions of good channels in YouTupe for Math classes?</pre>\r\n', 'Ghaida.B7', '2020-11-29 12:10:23'),
(44, 'Java API', '<p>What can i use from java API packages for GUI project?</p>\r\n', 'noura1', '2020-11-29 12:16:20'),
(45, 'How important is the instructional design model: \"Backward Design\", for the field of learning technology?', '<p>I wanted to know the importance of &quot;Backward Design&quot; for the field of learning technology</p>\r\n', 'Bassam', '2020-11-29 12:17:52'),
(46, 'تحقق php', '<p>كيف اسوي فالديشين لكود php ?</p>\r\n', 'Shoaa12', '2020-11-29 12:23:00'),
(47, 'github', '<p>كيف ارفع ملفاتي بموقع github?&nbsp;</p>\r\n', 'noura1', '2020-11-29 12:27:41'),
(48, 'قاعدة البيانات ', '<p>اقدر اعدل على قاعدة البيانات من غير ما اسويها من جديد؟</p>\r\n', 'ghada1', '2020-11-29 12:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `q_tags`
--

CREATE TABLE `q_tags` (
  `q_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_tags`
--

INSERT INTO `q_tags` (`q_id`, `tag_id`) VALUES
(1, 15),
(2, 16),
(1, 17),
(7, 14),
(7, 16),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(9, 14),
(10, 14),
(11, 15),
(13, 13),
(15, 18),
(17, 16),
(18, 17),
(21, 17),
(22, 17),
(23, 19),
(24, 17),
(27, 17),
(27, 19),
(29, 17),
(29, 19),
(32, 17),
(33, 17),
(34, 17),
(34, 19),
(34, 21),
(35, 17),
(36, 17),
(36, 19),
(36, 21),
(37, 21),
(42, 27),
(42, 30),
(43, 25),
(44, 22),
(44, 29),
(46, 33),
(46, 34),
(47, 35),
(48, 27),
(48, 30),
(48, 33),
(48, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_title`) VALUES
(22, 'Programming'),
(23, 'CS'),
(24, 'IT'),
(25, 'Math'),
(26, 'IT251'),
(27, 'IT271'),
(28, 'IT214'),
(29, 'Java'),
(30, 'Web'),
(31, 'CS211'),
(32, 'Algorithms'),
(33, 'Server-side '),
(34, 'php '),
(35, 'Github');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `is_Admin`) VALUES
('Bassam', 'b.alammarii@gmail.com', '$2y$10$w.xobpjiI56T3QLc7OrAkezqw7B6nSTsp6lAj8X0sv3vC2G.8cRla', 0),
('ghada1', 'ghada11@gmail.com', '$2y$10$51arObxiIh5vnv1w.6MfJeQ39uqZh4trEqbY/sEAU/.qS/.f6v8xW', 0),
('Ghaida.B7', 'Ghaida.b@gmail.com', '$2y$10$eBQJ.k4iwI8.QSKJL0XAD.1h/sX94zDdVQCxokk7VIJxc0bC8H55S', 0),
('Hana.m1', '1hana.f@gmail.com', '$2y$10$GXwdJDilfetHEVZNkaj7tedjElMNHyAXmfJ5OTyt5veRwFB3XWVjm', 0),
('noura1', '1norraa.s1@gmail.com', '$2y$10$GRIymhd/XjIogScvRim91emZUpB9.YDVlQPBLMfIKbW4RiBfAC/W.', 0),
('noura2', '1norraa.s1@gmail.com', '$2y$10$xal8Dzh3IIUfUZJyR0ftiOuRjA305iFphXNKbfXm9VJTK.E.HYNhW', 1),
('noura33', 'norraa.al7@gmail.com', '$2y$10$s05QiYJP65SAH8l6z1/QluJTIuQGGOew7bUJSj0D2VhzegK2OXC5S', 0),
('Shada1', 'Shada.Fahad@gmail.com', '$2y$10$LyEv3c9xT6F/N.gsS1AbIOAB8/Hh/6E1nYz9LhaJ49z4iEls6WcTW', 0),
('Shoaa12', 'shoaa1@gmail.com', '$2y$10$IgQEVQg8BT98jPYT..KB0O1r4SFb.XXbkjzOsYE9wECvIqDrTMbka', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2020 at 09:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related',
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_text`, `is_valid_answer`, `answer_question_id`) VALUES
(1, 'paris', 0, 1),
(2, 'london', 0, 1),
(3, 'madrid', 1, 1),
(5, 'madrid', 0, 2),
(6, 'london', 0, 2),
(7, 'paris', 1, 2),
(8, 'paris', 0, 3),
(9, 'london', 1, 3),
(10, 'madrid', 0, 3),
(11, 'human after all', 0, 4),
(12, 'alive', 0, 4),
(13, 'random access memories', 1, 4),
(14, 'angus young', 1, 5),
(15, 'Nirvana', 1, 6),
(16, 'Placebo', 0, 6),
(17, 'Pearl Jeam', 0, 6),
(18, 'Offspring', 0, 6),
(19, 'Brian Johnson', 0, 7),
(20, 'Stevie young', 0, 7),
(21, 'Anthony Kiedis', 1, 7),
(22, 'chad smith', 1, 7),
(23, ' ', 0, 5),
(24, 'oui oui', 0, 5),
(25, 'la mere a wakz', 0, 5),
(26, 'la mere a wakz', 0, 5),
(27, 'la mere a wakz', 0, 5),
(28, 'oui oui', 0, 5),
(29, 'oui oui', 0, 5),
(30, 'oui oui', 0, 5),
(31, 'oui oui', 0, 5),
(32, 'oui oui', 0, 5),
(33, 'oui oui', 0, 5),
(34, 'jimmy hendrix', 0, 5),
(35, 'kimmy page', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question',
  PRIMARY KEY (`question_id`),
  KEY `question_quizz_id_fk` (`question_quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'what is the capital city of spain', 1, 'radio'),
(2, 'what is the capital city of france', 1, 'radio'),
(3, 'what is the capital city of england', 1, 'radio'),
(4, 'what is the name of the daft punk last album', 2, 'radio'),
(5, 'type the name of acdc guitarist', 2, 'string'),
(6, 'which group interpreted smell like teen spirit', 2, 'select'),
(7, 'which of these artist is not in the acdc actual band multiple good answer', 2, 'checkbox');

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name',
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'capital'),
(2, 'music');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant',
  `user_last_name` varchar(255) NOT NULL COMMENT 'user last name',
  `user_first_name` varchar(255) NOT NULL COMMENT 'user first name',
  `user_adress` longtext COMMENT 'user physical adress',
  `user_phone` varchar(255) DEFAULT NULL COMMENT 'user phone',
  `user_birthdate` datetime DEFAULT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'User Password',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_last_name`, `user_first_name`, `user_adress`, `user_phone`, `user_birthdate`, `user_password`) VALUES
(7, 'Courmont', 'Gael', NULL, NULL, NULL, 'les3'),
(18, 'Doe', 'John', NULL, NULL, NULL, '***'),
(19, 'hermant', 'jean', NULL, NULL, NULL, 'brioche2chocolat'),
(20, 'deleval', 'elise', NULL, NULL, NULL, 'isen'),
(21, 'hobeiter', 'louis', NULL, NULL, NULL, 'isen'),
(22, 'kaiss', 'mohamad', NULL, NULL, NULL, 'isen');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `answer_id_fk` (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`user_answer_id`, `user_id`, `answer_id`, `user_answer_date`) VALUES
(64, 19, 2, '2020-11-19 23:00:00'),
(65, 19, 6, '2020-11-19 23:00:00'),
(66, 19, 9, '2020-11-19 23:00:00'),
(79, 7, 3, '2020-11-19 23:00:00'),
(80, 7, 7, '2020-11-19 23:00:00'),
(81, 7, 9, '2020-11-19 23:00:00'),
(82, 7, 12, '2022-11-19 23:00:00'),
(83, 7, 14, '2022-11-19 23:00:00'),
(84, 7, 16, '2022-11-19 23:00:00'),
(85, 7, 21, '2022-11-19 23:00:00'),
(86, 20, 1, '2022-11-19 23:00:00'),
(87, 20, 6, '2022-11-19 23:00:00'),
(88, 20, 9, '2022-11-19 23:00:00'),
(89, 20, 13, '2022-11-19 23:00:00'),
(90, 20, 14, '2022-11-19 23:00:00'),
(91, 20, 17, '2022-11-19 23:00:00'),
(92, 20, 21, '2022-11-19 23:00:00'),
(93, 20, 22, '2022-11-19 23:00:00'),
(94, 20, 22, '2022-11-19 23:00:00'),
(95, 21, 3, '2022-11-19 23:00:00'),
(96, 21, 7, '2022-11-19 23:00:00'),
(97, 21, 8, '2022-11-19 23:00:00'),
(98, 21, 12, '2022-11-19 23:00:00'),
(99, 21, 34, '2022-11-19 23:00:00'),
(100, 21, 17, '2022-11-19 23:00:00'),
(101, 21, 20, '2022-11-19 23:00:00'),
(102, 21, 20, '2022-11-19 23:00:00'),
(103, 21, 21, '2022-11-19 23:00:00'),
(104, 22, 1, '2022-11-19 23:00:00'),
(105, 22, 7, '2022-11-19 23:00:00'),
(106, 22, 9, '2022-11-19 23:00:00'),
(107, 22, 11, '2022-11-19 23:00:00'),
(108, 22, 35, '2022-11-19 23:00:00'),
(109, 22, 18, '2022-11-19 23:00:00'),
(110, 22, 19, '2022-11-19 23:00:00'),
(111, 22, 19, '2022-11-19 23:00:00'),
(112, 22, 22, '2022-11-19 23:00:00'),
(113, 22, 22, '2022-11-19 23:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Constraints for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

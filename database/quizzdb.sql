-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- HÃ´te : localhost:8889
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de donnÃ©es :  `my_databse_name` 
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement table 'answer' 
--

<<<<<<< Updated upstream
INSERT INTO `answer` (`answer_text`, `is_valid_answer`,'answer_question_id') VALUES
('paris',false,1),
('londdres',false,1),
('barcelone',true,1);
=======
INSERT INTO `answer` (`answer_text`, `is_valid_answer`,`answer_question_id`) VALUES
(`paris`,`FALSE`,1),
(`londdres`,`FALSE`,1),
(`barcelone`,`TRUE`,1);
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement table 'question' 
--

INSERT INTO `question` (`question_title`, `question_input_type`, `questioon_quizz_id`) VALUES
('quel est la capitale de l espagne',checkbox,1)


-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

CREATE TABLE `quizz` (
  `quizz_id` int(11) NOT NULL COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement table 'quizz' 
--

INSERT INTO `quizz` (`quizz_name`) VALUES
('capitale');


-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `user_last_name` varchar(255) NOT NULL COMMENT 'user last name',
  `user_first_name` varchar(255) NOT NULL COMMENT 'user first name',
  `user_adress` longtext COMMENT 'user physical adress',
  `user_phone` varchar(255) DEFAULT NULL COMMENT 'user phone',
  `user_birthdate` datetime DEFAULT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'User Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement table 'user' 
--

INSERT INTO `quizz` ('user_last_name','user_first_name','user_adress','user_phone','user_birthdate','user_password') VALUES
('courmont','gael','156 rue de douai','','','password');


-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

CREATE TABLE `user_answer` (
  `user_answer_id` int(11) NOT NULL COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement table 'user_answer' 
--

INSERT INTO `user_answer` ('user_id','answer_id','user_answer_date') VALUES
(1,1,now());



--
-- Index pour les tables dÃ©chargÃ©es
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_quizz_id_fk` (`question_quizz_id`);

--
-- Index pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`quizz_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`user_answer_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `answer_id_fk` (`answer_id`);

--
-- AUTO_INCREMENT pour les tables dÃ©chargÃ©es
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier';

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification';

--
-- AUTO_INCREMENT pour la table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant';

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant';

--
-- AUTO_INCREMENT pour la table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant';

--
-- Contraintes pour les tables dÃ©chargÃ©es
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Contraintes pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 08 mai 2023 à 20:16
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweets`
--

CREATE TABLE `tweets` (
  `tweets_id` int NOT NULL,
  `user_id` int NOT NULL,
  `tweet` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tweets`
--

INSERT INTO `tweets` (`tweets_id`, `user_id`, `tweet`, `date`) VALUES
(66, 1, 'qfqsfqfsqsffqfqfqf', '2023-05-08 10:42:02'),
(86, 10, ' J’aime les tweets parce qu’ils partent en silence, circulent en silence et arrivent en silence. Les tweets sont des chats. » Grâce aux tweets, ces messages qui ne peuvent dépasser 140 signes,', '2023-05-08 14:11:35'),
(87, 10, 'Pour lui, le tweet, dont il propose une anthologie délirante où rôdent Proust, Malraux, Colette, Léautaud, Sagan, Hugo, Mallarmé et consorts, qu’il fait voyager par le truchement de son lance-pierre verbal, est propice à toutes les expressions, qu’elles soient politiques, littéraires, amoureuses ou même philosophiques. Jean-Louis Ezine, Le Nouvel Observateur.', '2023-05-08 15:06:37'),
(89, 10, 'Le secteur offensif de notre équipe type de la 34e journée est trusté par les grands artisans du 5-4 qui a eu lieu au Groupama Stadium dimanche, entre Lyon et Montpellier.', '2023-05-08 16:07:43'),
(91, 10, 'Lors du succès de City samedi, Erling Haaland s\'est montré maladroit face au but et s\'est fait reprendre par Pep Guardiola pour avoir renoncé à tirer un penalty qui lui revenait.', '2023-05-08 16:11:19');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `my_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `nom`, `pseudo`, `mail`, `my_password`) VALUES
(10, 'Damon salvatoree', 'TheHybrid', 'vampirediairies@gmail.com', 'qdqdqsd15151'),
(11, 'Michael KLAUS', 'TheHybrid', 'vampirediairies@gmail.com', '188981919841'),
(12, 'jhonny deep', 'sparrow', 'jhonnydp@gmail.com', '4457889632'),
(13, 'aaron kolins', 'aaronkgb', 'tillduskdawn@gmail.com', '15484951841'),
(14, 'aaron kolins', 'aaronkgb', 'tillduskdawn@gmail.com', ''),
(15, 'Dan salvatore', 'TheHybridddd', 'mickyklaus@gmail.com', '51518188117');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweets_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `tweets_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

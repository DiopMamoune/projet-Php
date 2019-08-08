-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 27 juin 2019 à 18:51
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp4`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `mdp` varchar(15) DEFAULT NULL,
  `profile` enum('admin','user') DEFAULT 'user',
  `status` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `tel`, `login`, `mdp`, `profile`, `status`) VALUES
(1, 'Niang', 'Bassirou', 'niang@gmail.com', '777208716', 'bass', 'lampfall', 'admin', '1'),
(2, 'Fall', 'Alioune', 'Fall@gmail.com', '778656754', 'alioune', '123', 'user', '1'),
(3, 'Dico', 'Haby', 'dico@gmail.com', '778908765', 'haby', '1234', 'user', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

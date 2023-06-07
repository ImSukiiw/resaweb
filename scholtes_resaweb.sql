-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 07 juin 2023 à 23:01
-- Version du serveur : 10.3.39-MariaDB
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `scholtes_resaweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `ext_genre` int(11) NOT NULL,
  `jours_seance` varchar(10) NOT NULL,
  `horaires_seance` varchar(10) NOT NULL,
  `image_event` varchar(50) NOT NULL,
  `pegi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `ext_genre`, `jours_seance`, `horaires_seance`, `image_event`, `pegi`) VALUES
(5, 7, 'Mercredi', '21h a 23h', 'anim-jap.webp', 'Aucune restriction'),
(6, 5, 'Jeudi', '21h a 00h', 'film_aventure.jpg', 'Aucune restriction'),
(7, 6, 'Lundi', '21h a 23h', 'comedie.jpeg', 'Aucune restriction'),
(8, 3, 'Samedi', '21h a 23h', 'disney.png', 'Aucune restriction'),
(9, 4, 'Mardi', '21h a 00h', 'horreur.jpeg', '16'),
(10, 2, 'Vendredi', '21h a 00h', 'science-fiction.webp', '12');

-- --------------------------------------------------------

--
-- Structure de la table `genres_films`
--

CREATE TABLE `genres_films` (
  `id_genre` int(11) NOT NULL,
  `genre_nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `genres_films`
--

INSERT INTO `genres_films` (`id_genre`, `genre_nom`) VALUES
(2, 'Science-Fiction'),
(3, 'Disney'),
(4, 'Horreur'),
(5, 'Aventure'),
(6, 'Comedie'),
(7, 'Animation Japonaise');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `nb_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `prenom`, `nom`, `mail`, `date`, `nb_personne`) VALUES
(13, 'Amel', 'Chabah', 'amelou518@gmail.com', '2023-06-21', 4),
(14, 'Maxime', 'Scholtes', 'maxime.sch0405@gmail.com', '2023-06-15', 4),
(15, 'Mel', 'Bach', 'amel.chabah@edu.univ-eiffel.fr', '2023-06-17', 2),
(16, 'GrÃ©goire', 'Margotton', 'markhenry7800@gmail.com', '2023-06-26', 3),
(17, 'Alain', 'TÃ©rieur', 'markhenry7800@gmail.com', '2023-06-13', 1),
(18, 'Alex', 'TÃ©rieur', 'markhenry7800@gmail.com', '2023-06-28', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `genres_films` (`ext_genre`);

--
-- Index pour la table `genres_films`
--
ALTER TABLE `genres_films`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `genres_films`
--
ALTER TABLE `genres_films`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`ext_genre`) REFERENCES `genres_films` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

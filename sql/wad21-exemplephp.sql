-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 31 mai 2021 à 09:41
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wad21-exemplephp`
--
CREATE DATABASE IF NOT EXISTS `wad21-exemplephp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wad21-exemplephp`;

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `idAppartement` int(11) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `etat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`idAppartement`, `adresse`, `etat`) VALUES
(1, 'Rue de la Banane', 'bon'),
(2, 'Rue du Citron', 'superb'),
(3, 'Rue de la Poire', 'ok'),
(4, 'Rue de la Tulipe', 'bon');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `idLocation` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  `idAppartement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`idLocation`, `idPersonne`, `idAppartement`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 3),
(4, 2, 2),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nom`, `prenom`) VALUES
(1, 'Garland', 'Judy'),
(2, 'Hermant', 'Lola');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`idAppartement`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idLocation`),
  ADD KEY `idPersonne` (`idPersonne`),
  ADD KEY `idAppartement` (`idAppartement`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `idAppartement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `idLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`idAppartement`) REFERENCES `appartement` (`idAppartement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

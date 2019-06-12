-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 juin 2019 à 13:44
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ete`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mdp_admin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `mdp_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `detient`
--

DROP TABLE IF EXISTS `detient`;
CREATE TABLE IF NOT EXISTS `detient` (
  `id_mutuelle` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  PRIMARY KEY (`id_mutuelle`,`id_video`),
  KEY `detient_video0_FK` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detient`
--

INSERT INTO `detient` (`id_mutuelle`, `id_video`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `nom`) VALUES
(1, 'sport'),
(2, 'yoga');

-- --------------------------------------------------------

--
-- Structure de la table `mutuelle`
--

DROP TABLE IF EXISTS `mutuelle`;
CREATE TABLE IF NOT EXISTS `mutuelle` (
  `id_mutuelle` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mutuelle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mutuelle`
--

INSERT INTO `mutuelle` (`id_mutuelle`, `nom`, `mdp`) VALUES
(1, 'harmonie', 'harmonie'),
(2, 'axa', 'axa');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `date_upload` date NOT NULL,
  `duree` time NOT NULL,
  `coach` varchar(50) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `video_genre_FK` (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id_video`, `titre`, `date_upload`, `duree`, `coach`, `id_genre`, `adresse`, `img`, `genre`) VALUES
(3, 'Comment tonifier les muscles des bras', '2017-09-13', '00:18:22', 'jim', 1, 'img/ete3.mp4', 'img/1.png', 'sport'),
(4, 'Comment tonifier les triceps quand on est senior', '2018-07-10', '00:02:32', 'jim', 1, 'img/ete2.mp4', 'img/2.png', 'sport');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `detient`
--
ALTER TABLE `detient`
  ADD CONSTRAINT `detient_mutuelle_FK` FOREIGN KEY (`id_mutuelle`) REFERENCES `mutuelle` (`id_mutuelle`),
  ADD CONSTRAINT `detient_video0_FK` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 avr. 2021 à 07:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `y-c_gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_article` varchar(20) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `PU` float DEFAULT NULL,
  `Unite` float DEFAULT NULL,
  `serial_num` varchar(15) DEFAULT NULL,
  `files_name` varchar(50) NOT NULL,
  `nomCategorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idarticle`),
  KEY `nomCategorie` (`nomCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `Nom_article`, `brand`, `PU`, `Unite`, `serial_num`, `files_name`, `nomCategorie`) VALUES
(168, 'Transformateur', 'courant', 127, 1000, '100123040100', '../image/tÃ©lÃ©chargement-_2_.png', 'Electronique'),
(169, 'Relais', 'puissance ', 120, 20000, '2203402013', '../image/tÃ©lÃ©chargement.jfif', 'Electronique');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `nomCategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`nomCategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`nomCategorie`) VALUES
('Fourniture Bureau'),
('Fourniture Hygremme'),
('Fourniture Impression'),
('Fourniture Informatique'),
('Habillement'),
('Hymophilie'),
('Literie et Couchage'),
('Materiel Bureau');

-- --------------------------------------------------------

--
-- Structure de la table `usere`
--

DROP TABLE IF EXISTS `usere`;
CREATE TABLE IF NOT EXISTS `usere` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `CIN` varchar(10) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Prenom` varchar(30) DEFAULT NULL,
  `files_name` varchar(80) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usere`
--

INSERT INTO `usere` (`Id`, `CIN`, `Pass`, `Nom`, `Prenom`, `files_name`) VALUES
(1, 'HH2356', 'Admin', 'Ahmed', 'Zerouali', '../image/A.png'),
(2, 'HH9876', 'Admin1', 'Mohamdi', 'Ilhame', '../image/S.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

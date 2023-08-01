-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 31 juil. 2023 à 11:15
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `employés`
--

-- --------------------------------------------------------

--
-- Structure de la table `abscences`
--

DROP TABLE IF EXISTS `abscences`;
CREATE TABLE IF NOT EXISTS `abscences` (
  `Nom` varchar(58) NOT NULL,
  `Nb_jrs` varchar(58) NOT NULL,
  `Depart` varchar(58) NOT NULL,
  `retour` varchar(58) NOT NULL,
  `Raison` varchar(58) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `abscences`
--

INSERT INTO `abscences` (`Nom`, `Nb_jrs`, `Depart`, `retour`, `Raison`) VALUES
('fatima zahra dira', '2', '', '2023-08-13', 'Maladie'),
('fatima zahra dira', '2', '', '2023-08-13', 'Maladie'),
('fatima zahra dira', '2', '2023-08-12', '2023-08-13', 'Maladie');

-- --------------------------------------------------------

--
-- Structure de la table `congés`
--

DROP TABLE IF EXISTS `congés`;
CREATE TABLE IF NOT EXISTS `congés` (
  `Nom` varchar(58) NOT NULL,
  `Nb_jrs` varchar(22) NOT NULL,
  `Départ` varchar(23) NOT NULL,
  `retour` varchar(23) NOT NULL,
  `Tel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `congés`
--

INSERT INTO `congés` (`Nom`, `Nb_jrs`, `Départ`, `retour`, `Tel`) VALUES
('fatima zahra dira', '2', '2023-08-21', '2023-08-22', '0666084523');

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `Nom` varchar(58) NOT NULL,
  `Prénom` varchar(58) NOT NULL,
  `Email` varchar(58) NOT NULL,
  `Sexe` varchar(58) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Fonction` varchar(58) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date_Entrée` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`Nom`, `Prénom`, `Email`, `Sexe`, `Tel`, `Fonction`, `Date_Entrée`, `adresse`) VALUES
('admin', 'admin', 'admin@gmail.com', 'Homme', '0645781246', 'Administrateur', '2020-05-04', 'rue al mahassen n 12'),
('fatima zahra', 'dira', 'fatima@gmail.com', 'Femme', '0660541245', 'secretaire', '2015-02-12', 'hay falah'),
('fatima zahra', 'dira', 'fatima@gmail.com', 'Femme', '0660541245', 'secretaire', '2015-02-12', 'hay falah');

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

DROP TABLE IF EXISTS `gestion`;
CREATE TABLE IF NOT EXISTS `gestion` (
  `Nom_Complet` varchar(58) NOT NULL,
  `Heure_EntréeM` varchar(58) NOT NULL,
  `Heure_EntréeS` varchar(58) NOT NULL,
  `Heure_SortieM` varchar(58) NOT NULL,
  `Heure_SortieS` varchar(58) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gestion`
--

INSERT INTO `gestion` (`Nom_Complet`, `Heure_EntréeM`, `Heure_EntréeS`, `Heure_SortieM`, `Heure_SortieS`) VALUES
('Dira Fatima Zahra', '08:05', ' 13:00', '12:00', '18:00'),
('Dira Fatima Zahra', '08:05', ' 13:00', '12:00', '18:00'),
('lala', '09:00', ' 14:00', '13:00', '19:00');

-- --------------------------------------------------------

--
-- Structure de la table `retards`
--

DROP TABLE IF EXISTS `retards`;
CREATE TABLE IF NOT EXISTS `retards` (
  `Nom_complet` varchar(58) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Raison` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `retards`
--

INSERT INTO `retards` (`Nom_complet`, `Date`, `Raison`) VALUES
('fatima Zahra dira', '2023-08-12', 'Maladie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

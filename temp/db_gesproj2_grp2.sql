-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 15 Décembre 2020 à 15:25
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_gesproj2_grp2`
--
CREATE DATABASE IF NOT EXISTS `db_gesproj2_grp2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_gesproj2_grp2`;

-- --------------------------------------------------------

--
-- Structure de la table `t_consommable`
--

CREATE TABLE `t_consommable` (
  `idConsommable` int(11) NOT NULL,
  `conType` varchar(50) NOT NULL,
  `conName` varchar(50) NOT NULL,
  `conDescription` varchar(500) NOT NULL,
  `conPrix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_consommable`
--

INSERT INTO `t_consommable` (`idConsommable`, `conType`, `conName`, `conDescription`, `conPrix`) VALUES
(2, 'test', 'testt', 'tesst', 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_correspondre`
--

CREATE TABLE `t_correspondre` (
  `idConsommable` int(11) NOT NULL,
  `idImprimante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_correspondre`
--

INSERT INTO `t_correspondre` (`idConsommable`, `idImprimante`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_imprimante`
--

CREATE TABLE `t_imprimante` (
  `idImprimante` int(11) NOT NULL,
  `impFabriquant` varchar(50) NOT NULL,
  `impMarque` varchar(50) NOT NULL,
  `impModele` varchar(100) NOT NULL,
  `impTechImpression` varchar(50) NOT NULL,
  `impVitesseImpression` float NOT NULL,
  `impCapaciteBac` int(11) NOT NULL,
  `impPoids` float NOT NULL,
  `impResolutionX` int(11) NOT NULL,
  `impResolutionY` int(11) NOT NULL,
  `impLongueur` float NOT NULL,
  `impLargeur` float NOT NULL,
  `impHauteur` float NOT NULL,
  `impPrix` float NOT NULL,
  `impImage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_imprimante`
--

INSERT INTO `t_imprimante` (`idImprimante`, `impFabriquant`, `impMarque`, `impModele`, `impTechImpression`, `impVitesseImpression`, `impCapaciteBac`, `impPoids`, `impResolutionX`, `impResolutionY`, `impLongueur`, `impLargeur`, `impHauteur`, `impPrix`, `impImage`) VALUES
(1, 'Brother', 'Brother', 'DCP-L3510CDW', 'laser/LED', 18, 250, 21, 600, 2400, 36, 41, 47, 305, ''),
(2, 'HP inc', 'HP', 'M479dw Color Laser Jet Pro', 'laser/LED', 27, 300, 21, 600, 600, 47, 41, 40, 395, ''),
(3, 'Lexmark', 'Lexmark', 'MC3326adwe', 'laser/LED', 24, 250, 19, 600, 600, 39, 41, 34, 267, ''),
(4, 'Lexmark', 'Lexmark', 'MC253adwe', 'laser/LED', 33, 250, 27, 1200, 1200, 58, 44, 46, 457, ''),
(5, 'HP inc', 'HP', 'M28w LaserJet Pro', 'laser/LED', 18, 150, 5, 600, 600, 26, 36, 19, 149, ''),
(6, 'HP inc', 'HP', 'M183fw Color LaserJet Pro', 'laser/LED', 16, 150, 16, 600, 600, 38, 42, 34, 334, ''),
(7, 'Canon', 'Canon', 'PIXMA G6050 MegaTank', 'réservoire encre', 13, 350, 8, 4800, 1200, 36, 45, 19.5, 330, ''),
(8, 'HP inc', 'HP', 'M283fdw Color LaserJet Pro', 'laser/LED', 21, 200, 18, 600, 600, 49, 42, 33, 323, ''),
(9, 'Brother', 'Brother', 'MFC-L8690CDW', 'laser/LED', 31, 300, 27, 2400, 600, 52, 43, 53, 459, ''),
(10, 'Brother', 'Brother', 'MFC-L3730CDN', 'laser/LED', 24, 250, 24, 2400, 600, 47, 41, 41, 319, ''),
(11, 'Lexmark', 'Lexmark', 'MC2425adw', 'laser/LED', 25, 250, 26, 1200, 1200, 55, 44, 46, 278, ''),
(12, 'Canon', 'Canon', 'MF744Cdw i-Sensys', 'laser/LED', 27, 300, 26, 600, 600, 46, 47, 46, 459, ''),
(13, 'HP inc', 'HP', 'M479fdn Color Laser Jet Pro', 'laser/LED', 27, 300, 23, 600, 600, 47, 41, 40, 459, ''),
(14, 'Epson', 'Epson', 'ET-3750 EcoTank', 'réservoire encre', 15, 150, 6, 4800, 1200, 34, 37, 23, 384, ''),
(15, 'Xerox', 'Xerox', '6515V/DNI WorkCentre', 'laser/LED', 28, 300, 30, 1200, 2400, 50, 42, 50, 421, ''),
(16, 'Brother', 'Brother', 'MFC-L2730W', 'laser/LED', 34, 300, 11, 2400, 600, 51, 58, 43, 257, ''),
(17, 'HP inc', 'HP', '477dw PageWide Pro', 'Encre', 40, 550, 22, 2400, 1200, 40, 53, 46, 467, ''),
(18, 'Canon', 'Canon', 'PIXMA TS9550', 'Encre', 15, 200, 9, 4800, 1200, 45, 36, 16, 171, ''),
(19, 'Oki', 'Oki', 'MC853dnct', 'laser/LED', 23, 935, 93, 1200, 600, 60, 56, 121, 1525, ''),
(20, 'Xerox', 'Xerox', 'VersaLink C7020DN', 'laser/LED', 20, 520, 69, 1200, 2400, 67, 59, 76, 1990, ''),
(21, 'HP inc', 'HP', 'M428dw LaserJet Pro', 'laser/LED', 38, 100, 12, 600, 600, 39, 42, 32, 393, ''),
(22, 'Oki', 'Oki', 'MC883dnv', 'laser/LED', 35, 2005, 89, 1200, 1200, 60, 56, 121, 2365, ''),
(23, 'Brother', 'Brother', 'MFC-L9570CDWT', 'laser/LED', 31, 800, 42, 2400, 600, 52, 49, 42, 1049, ''),
(24, 'Lexmark', 'Lexmark', 'MC3224dwe', 'laser/LED', 22, 250, 21, 600, 600, 41, 39, 30, 218, ''),
(25, 'HP inc', 'HP', 'Smart Tank Plus 655', 'réservoire encre', 22, 100, 6, 1200, 1200, 44, 19, 37, 319, ''),
(26, 'Brother', 'Brother', 'DCP-L2550DN', 'laser/LED', 34, 300, 11, 1200, 1200, 39, 41, 31, 174, ''),
(27, 'Epson', 'Epson', 'WF-7720DTWF Main d\'uvre', 'Encre', 18, 536, 21, 4800, 2400, 48, 56, 41, 267, ''),
(28, 'Epson', 'Epson', 'WF-4745DTWF WorkForce Pro', 'Encre', 24, 500, 12, 4800, 1200, 38, 42, 33, 234, ''),
(29, 'HP inc', 'hp', 'OfficeJet Pro 7740', 'Encre', 22, 535, 20, 4800, 1200, 54, 67, 48, 232, ''),
(30, 'Kyocera', 'Kyocera', 'ECOSYS M5526cdw', 'laser/LED', 26, 300, 26, 1200, 1200, 42, 41, 49, 474, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_consommable`
--
ALTER TABLE `t_consommable`
  ADD PRIMARY KEY (`idConsommable`),
  ADD UNIQUE KEY `ID_t_consommable_IND` (`idConsommable`);

--
-- Index pour la table `t_correspondre`
--
ALTER TABLE `t_correspondre`
  ADD PRIMARY KEY (`idConsommable`,`idImprimante`),
  ADD UNIQUE KEY `ID_t_correspondre_IND` (`idConsommable`,`idImprimante`),
  ADD KEY `FKt_c_t_i_IND` (`idImprimante`);

--
-- Index pour la table `t_imprimante`
--
ALTER TABLE `t_imprimante`
  ADD PRIMARY KEY (`idImprimante`),
  ADD UNIQUE KEY `ID_t_imprimante_IND` (`idImprimante`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_consommable`
--
ALTER TABLE `t_consommable`
  MODIFY `idConsommable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_imprimante`
--
ALTER TABLE `t_imprimante`
  MODIFY `idImprimante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_correspondre`
--
ALTER TABLE `t_correspondre`
  ADD CONSTRAINT `t_correspondre_ibfk_3` FOREIGN KEY (`idImprimante`) REFERENCES `t_imprimante` (`idImprimante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_correspondre_ibfk_4` FOREIGN KEY (`idConsommable`) REFERENCES `t_consommable` (`idConsommable`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

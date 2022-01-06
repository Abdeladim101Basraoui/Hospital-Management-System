-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 01 jan. 2022 à 13:57
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
-- Base de données : `centresante`
--
CREATE DATABASE IF NOT EXISTS `centresante` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `centresante`;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier_rdv`
--

DROP TABLE IF EXISTS `calendrier_rdv`;
CREATE TABLE IF NOT EXISTS `calendrier_rdv` (
  `id_calendrier` int(11) NOT NULL AUTO_INCREMENT,
  `Date_calendrier_RDV` date NOT NULL,
  `Heure_Calendrier_RDV` time NOT NULL,
  `id_rdv` int(11) NOT NULL,
  PRIMARY KEY (`id_calendrier`),
  KEY `Fk_calendrier_rdv` (`id_rdv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `Num_conge` int(11) NOT NULL AUTO_INCREMENT,
  `Objet` text NOT NULL,
  `Etat_conge` varchar(20) NOT NULL,
  `Date_conge` date NOT NULL,
  `Duree_conge` float NOT NULL,
  `Note` text NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Num_conge`),
  KEY `fk_conge` (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `Id_consultation` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Consultation` date NOT NULL,
  `Note_Consultation` text NOT NULL,
  `Traitement` text NOT NULL,
  `Cin_patient` varchar(10) NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_consultation`),
  KEY `fk_consultation_patient` (`Cin_patient`),
  KEY `fk_consultation_medecin` (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demande_materiel`
--

DROP TABLE IF EXISTS `demande_materiel`;
CREATE TABLE IF NOT EXISTS `demande_materiel` (
  `Num_demande` int(11) NOT NULL AUTO_INCREMENT,
  `Date_demande` datetime NOT NULL,
  `Date_besoin_materiel` datetime NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  `Cin_employe_technicien` varchar(10) NOT NULL,
  `Etat_demande` varchar(30) NOT NULL,
  PRIMARY KEY (`Num_demande`),
  KEY `fk_demande_medecin_chef` (`Cin_employe`),
  KEY `fk_demande_technicien` (`Cin_employe_technicien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `Cin_employe` varchar(10) NOT NULL,
  `Nom_complet` varchar(40) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Addresse` varchar(40) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL,
  PRIMARY KEY (`Cin_employe`),
  UNIQUE KEY `Unique_email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

DROP TABLE IF EXISTS `infirmier`;
CREATE TABLE IF NOT EXISTS `infirmier` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `Num_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle_materiel` varchar(50) NOT NULL,
  `Etat_materiel` varchar(30) NOT NULL,
  PRIMARY KEY (`Num_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel_demande`
--

DROP TABLE IF EXISTS `materiel_demande`;
CREATE TABLE IF NOT EXISTS `materiel_demande` (
  `num_demande` int(11) NOT NULL,
  `num_materiel` int(11) NOT NULL,
  PRIMARY KEY (`num_demande`,`num_materiel`),
  KEY `fk_materiel_demande` (`num_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin_chef`
--

DROP TABLE IF EXISTS `medecin_chef`;
CREATE TABLE IF NOT EXISTS `medecin_chef` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Cin_patient` varchar(10) NOT NULL,
  `Nom_complet` varchar(40) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Addresse` varchar(40) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Historique` text NOT NULL,
  `Cin_employe` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Cin_patient`),
  UNIQUE KEY `Unique_email` (`Email`) USING BTREE,
  KEY `fk_patient_employe` (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`Cin_patient`, `Nom_complet`, `Date_naissance`, `Addresse`, `Sexe`, `Tel`, `Email`, `Password`, `Historique`, `Cin_employe`) VALUES
('h52855', 'gvhjk', '2020-08-09', 'fghjk ghbj', 'femme', '0615203690', 'fgvhbj,@fgvj.hg', 'fghjbn', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `Id_rdv` int(11) NOT NULL AUTO_INCREMENT,
  `Date_RDV` date NOT NULL,
  `Heure_RDV` time NOT NULL,
  `Objet` text NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  `Cin_patient` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_rdv`),
  KEY `fk_rdv_infermier` (`Cin_employe`),
  KEY `fk_rdv_patient` (`Cin_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `calendrier_rdv`
--
ALTER TABLE `calendrier_rdv`
  ADD CONSTRAINT `Fk_calendrier_rdv` FOREIGN KEY (`id_rdv`) REFERENCES `rdv` (`Id_rdv`);

--
-- Contraintes pour la table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `fk_conge` FOREIGN KEY (`Cin_employe`) REFERENCES `employe` (`Cin_employe`);

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_consultation_medecin` FOREIGN KEY (`Cin_employe`) REFERENCES `medecin` (`Cin_employe`),
  ADD CONSTRAINT `fk_consultation_patient` FOREIGN KEY (`Cin_patient`) REFERENCES `patient` (`Cin_patient`);

--
-- Contraintes pour la table `demande_materiel`
--
ALTER TABLE `demande_materiel`
  ADD CONSTRAINT `fk_demande_medecin_chef` FOREIGN KEY (`Cin_employe`) REFERENCES `medecin_chef` (`Cin_employe`),
  ADD CONSTRAINT `fk_demande_technicien` FOREIGN KEY (`Cin_employe_technicien`) REFERENCES `technicien` (`Cin_employe`);

--
-- Contraintes pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD CONSTRAINT `fk_infirmier` FOREIGN KEY (`Cin_employe`) REFERENCES `employe` (`Cin_employe`);

--
-- Contraintes pour la table `materiel_demande`
--
ALTER TABLE `materiel_demande`
  ADD CONSTRAINT `fk_demande_materiel` FOREIGN KEY (`num_demande`) REFERENCES `demande_materiel` (`Num_demande`),
  ADD CONSTRAINT `fk_materiel_demande` FOREIGN KEY (`num_materiel`) REFERENCES `materiel` (`Num_materiel`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `fk_medecin` FOREIGN KEY (`Cin_employe`) REFERENCES `employe` (`Cin_employe`);

--
-- Contraintes pour la table `medecin_chef`
--
ALTER TABLE `medecin_chef`
  ADD CONSTRAINT `fk_medecin_chef` FOREIGN KEY (`Cin_employe`) REFERENCES `medecin` (`Cin_employe`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `fk_patient_employe` FOREIGN KEY (`Cin_employe`) REFERENCES `infirmier` (`Cin_employe`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `fk_rdv_infermier` FOREIGN KEY (`Cin_employe`) REFERENCES `infirmier` (`Cin_employe`),
  ADD CONSTRAINT `fk_rdv_patient` FOREIGN KEY (`Cin_patient`) REFERENCES `patient` (`Cin_patient`);

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `fk_technicien` FOREIGN KEY (`Cin_employe`) REFERENCES `employe` (`Cin_employe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

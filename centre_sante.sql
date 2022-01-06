-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 jan. 2022 à 21:56
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`Num_conge`, `Objet`, `Etat_conge`, `Date_conge`, `Duree_conge`, `Note`, `Cin_employe`) VALUES
(3, 'qlq chose', 'refuse', '2022-01-05', 5, 'something', 'A12345'),
(4, 'conge', 'valide', '2020-10-20', 5, 'i really need it', 'M12345'),
(5, 'conge', 'refuse', '2020-10-20', 5, 'something', 'A12345'),
(6, 'conge', 'annulÃ©', '2020-10-20', 5, '', 't12345'),
(7, 'conge', 'demandÃ©', '2020-10-20', 5, '', 't12345'),
(8, 'conge', 'annulÃ©', '2020-10-20', 5, '', 'B12345');

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`Id_consultation`, `Date_Consultation`, `Note_Consultation`, `Traitement`, `Cin_patient`, `Cin_employe`) VALUES
(30, '2022-01-01', 'HELLO salam idk something inass', 'there tma', 'G12345', 'A12345'),
(31, '2022-01-01', 'Note 1', 'Traitement 1', 'G12345', 'A12345'),
(32, '2022-01-02', 'Note 2', 'Traitement 2', 'G12345', 'A12345'),
(33, '2022-01-01', 'tryguh', 'ftghjk', 'G12345', 'A12345'),
(34, '2022-01-01', 'fghjk', 'fghvjb', 'G12345', 'A12345'),
(35, '2022-01-01', 'fghbj nouha', 'fghvjb', 'G12345', 'A12345'),
(36, '2023-01-01', 'idk something', 'diri hakka', 'G12345', 'A12345'),
(37, '2023-01-01', 'idk something', 'diri hakka', 'G12345', 'A12345'),
(38, '2023-01-05', 'consultation', 'je sais pas', 'G12345', 'A12345'),
(39, '2022-01-02', 'note', 'trait', 'G12345', 'A12345'),
(40, '2022-01-02', 'note', 'trait', 'G12345', 'A12345'),
(41, '2023-01-05', 'consultation', 'je sais pas', 'G12345', 'A12345'),
(42, '2023-01-05', 'consultation', 'je sais pas', 'G12345', 'A12345'),
(43, '2022-01-02', 'something', 'traitement', 'G12345', 'A12345'),
(44, '2022-01-02', 'something', 'traitement', 'G12345', 'A12345'),
(45, '2023-01-01', 'traite', 'note', 'G12345', 'A12345'),
(46, '2023-01-05', 'note', 'trait', 'G12345', 'A12345'),
(47, '2021-01-04', 'Note 1', 'Traitement 1', 'G12345', 'A12345'),
(48, '2022-01-04', 'fievre', 'doliprane', 'G12345', 'A12345'),
(49, '2022-01-01', 'inass', 'soukaina', 'G12345', 'A12345'),
(50, '2011-10-10', 'note nouhaila', 'traitement de fievre', 'G12345', 'A12345'),
(51, '2022-01-01', 'first note', 'first traitement', 'G78945', 'A12345'),
(52, '2022-01-01', 'a medecin chef', 'a medecin chef', 'G12345', 'A12345'),
(53, '2022-01-01', 'a medecin chef', 'a medecin chef', 'G12345', 'A12345'),
(54, '2022-01-01', 'a medecin chef', 'a medecin chef', 'G12345', 'A12345'),
(55, '2022-01-02', 'a medecin chef', 'a medecin cheef', 'G12345', 'A12345'),
(56, '2023-01-05', 'note 1', 'trait 1', 'G12345', 'M12345');

-- --------------------------------------------------------

--
-- Structure de la table `demande_materiel`
--

DROP TABLE IF EXISTS `demande_materiel`;
CREATE TABLE IF NOT EXISTS `demande_materiel` (
  `Num_demande` int(11) NOT NULL AUTO_INCREMENT,
  `Date_demande` date NOT NULL,
  `Date_besoin_materiel` date NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  `Cin_employe_technicien` varchar(10) DEFAULT NULL,
  `Etat_demande` varchar(30) NOT NULL,
  PRIMARY KEY (`Num_demande`),
  KEY `fk_demande_medecin_chef` (`Cin_employe`),
  KEY `fk_demande_technicien` (`Cin_employe_technicien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande_materiel`
--

INSERT INTO `demande_materiel` (`Num_demande`, `Date_demande`, `Date_besoin_materiel`, `Cin_employe`, `Cin_employe_technicien`, `Etat_demande`) VALUES
(2, '2022-01-05', '2022-01-12', 'M12345', 'T12345', 'traite'),
(3, '2022-01-05', '2022-01-12', 'M12345', 'T12345', 'valide');

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

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`Cin_employe`, `Nom_complet`, `Date_naissance`, `Addresse`, `Sexe`, `Tel`, `Email`, `Password`, `Role`) VALUES
('A12345', 'medecin1', '2000-12-07', 'somewhere in the world', 'Homme', '0610203040', 'medecin1@gmail.com', '1234', 'Medecin'),
('B12345', 'Infirmier 1', '1999-09-01', 'somewhere on earth', 'Femme', '0652963054', 'infirmiere1@gmail.com', '1234', 'Infirmier'),
('M12345', 'medecin chef ', '1999-01-03', 'somewhere in the world', 'femme', '0610203040', 'medecinchef@gmail.com', '1234', 'medecin-chef'),
('T12345', 'Technicien 1', '2001-12-06', 'somewhere in the world', 'Homme', '0610203040', 'technicien@gmail.com', '1234', 'technicien');

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

DROP TABLE IF EXISTS `infirmier`;
CREATE TABLE IF NOT EXISTS `infirmier` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infirmier`
--

INSERT INTO `infirmier` (`Cin_employe`) VALUES
('B12345');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`Num_materiel`, `Libelle_materiel`, `Etat_materiel`) VALUES
(1, 'Pet scan', 'en panne'),
(2, 'Scanner', 'en panne'),
(6, 'Pet scan', 'marche'),
(7, 'Scanner', 'marche'),
(8, 'irm', 'en panne');

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

--
-- Déchargement des données de la table `materiel_demande`
--

INSERT INTO `materiel_demande` (`num_demande`, `num_materiel`) VALUES
(2, 1),
(2, 8);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`Cin_employe`) VALUES
('A12345'),
('M12345');

-- --------------------------------------------------------

--
-- Structure de la table `medecin_chef`
--

DROP TABLE IF EXISTS `medecin_chef`;
CREATE TABLE IF NOT EXISTS `medecin_chef` (
  `Cin_employe` varchar(10) NOT NULL,
  PRIMARY KEY (`Cin_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin_chef`
--

INSERT INTO `medecin_chef` (`Cin_employe`) VALUES
('M12345');

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
('G12345', 'Nassim Ihnich', '2004-02-01', 'nowhere', 'homme', '0680256930', 'nassim@gmail.com', '1234', '', NULL),
('G123456', 'patient 2', '2000-05-04', 'sale kenitra rabat', 'on', '0658903675', 'patient2@gmail.com', '1234', 'something', 'B12345'),
('G78945', 'salim ham', '2001-09-02', 'ghhjs khks jkkf', 'femme', '0645802369', 'email.test@gmail.com', '1234', '', NULL),
('G7896', 'nouha', '2003-02-02', 'nowhere', 'homme', '0658903675', 'nassimf@gmail.com', '1234', '', NULL),
('h52855', 'gvhjk', '2020-08-09', 'fghjk ghbj', 'femme', '0615203690', 'fgvhbj@fgvj.hg', 'fghjbn', '', NULL),
('Q12345', 'patient 3', '2004-02-01', 'rabat', 'on', '0610205869', 'nassima@gmail.com', '1234', 'fievre', 'B12345');

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
  `Cin_employe` varchar(10) DEFAULT NULL,
  `Cin_patient` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_rdv`),
  KEY `fk_rdv_infermier` (`Cin_employe`),
  KEY `fk_rdv_patient` (`Cin_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`Id_rdv`, `Date_RDV`, `Heure_RDV`, `Objet`, `Cin_employe`, `Cin_patient`) VALUES
(3, '2020-10-15', '00:00:00', 'something', 'B12345', 'G7896'),
(4, '2020-10-15', '00:00:00', 'something', 'B12345', 'G123456'),
(5, '2020-10-15', '00:00:00', 'something', 'B12345', 'G123456');

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
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`Cin_employe`) VALUES
('T12345');

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

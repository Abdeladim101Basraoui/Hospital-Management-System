-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 01 jan. 2022 à 13:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `calendrier_rdv` (
  `id_calendrier` int(11) NOT NULL,
  `Date_calendrier_RDV` date NOT NULL,
  `Heure_Calendrier_RDV` time NOT NULL,
  `id_rdv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `Num_conge` int(11) NOT NULL,
  `Objet` text NOT NULL,
  `Etat_conge` varchar(20) NOT NULL,
  `Date_conge` date NOT NULL,
  `Duree_conge` float NOT NULL,
  `Note` text NOT NULL,
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `Id_consultation` int(11) NOT NULL,
  `Date_Consultation` date NOT NULL,
  `Note_Consultation` text NOT NULL,
  `Traitement` text NOT NULL,
  `Cin_patient` varchar(10) NOT NULL,
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demande_materiel`
--

CREATE TABLE `demande_materiel` (
  `Num_demande` int(11) NOT NULL,
  `Date_demande` datetime NOT NULL,
  `Date_besoin_materiel` datetime NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  `Cin_employe_technicien` varchar(10) NOT NULL,
  `Etat_demande` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `Cin_employe` varchar(10) NOT NULL,
  `Nom_complet` varchar(40) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Addresse` varchar(40) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

CREATE TABLE `infirmier` (
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `Num_materiel` int(11) NOT NULL,
  `Libelle_materiel` varchar(50) NOT NULL,
  `Etat_materiel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel_demande`
--

CREATE TABLE `materiel_demande` (
  `num_demande` int(11) NOT NULL,
  `num_materiel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin_chef`
--

CREATE TABLE `medecin_chef` (
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `Cin_patient` varchar(10) NOT NULL,
  `Nom_complet` varchar(40) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Addresse` varchar(40) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Historique` text NOT NULL,
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `Id_rdv` int(11) NOT NULL,
  `Date_RDV` date NOT NULL DEFAULT current_timestamp(),
  `Heure_RDV` time NOT NULL,
  `Objet` text NOT NULL,
  `Cin_employe` varchar(10) NOT NULL,
  `Cin_patient` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE `technicien` (
  `Cin_employe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendrier_rdv`
--
ALTER TABLE `calendrier_rdv`
  ADD PRIMARY KEY (`id_calendrier`),
  ADD KEY `Fk_calendrier_rdv` (`id_rdv`);

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`Num_conge`),
  ADD KEY `fk_conge` (`Cin_employe`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Id_consultation`),
  ADD KEY `fk_consultation_patient` (`Cin_patient`),
  ADD KEY `fk_consultation_medecin` (`Cin_employe`);

--
-- Index pour la table `demande_materiel`
--
ALTER TABLE `demande_materiel`
  ADD PRIMARY KEY (`Num_demande`),
  ADD KEY `fk_demande_medecin_chef` (`Cin_employe`),
  ADD KEY `fk_demande_technicien` (`Cin_employe_technicien`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`Cin_employe`),
  ADD UNIQUE KEY `Unique_email` (`Email`);

--
-- Index pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`Cin_employe`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`Num_materiel`);

--
-- Index pour la table `materiel_demande`
--
ALTER TABLE `materiel_demande`
  ADD PRIMARY KEY (`num_demande`,`num_materiel`),
  ADD KEY `fk_materiel_demande` (`num_materiel`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`Cin_employe`);

--
-- Index pour la table `medecin_chef`
--
ALTER TABLE `medecin_chef`
  ADD PRIMARY KEY (`Cin_employe`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Cin_patient`),
  ADD UNIQUE KEY `Unique_email` (`Email`) USING BTREE,
  ADD KEY `fk_patient_employe` (`Cin_employe`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`Id_rdv`),
  ADD KEY `fk_rdv_infermier` (`Cin_employe`),
  ADD KEY `fk_rdv_patient` (`Cin_patient`);

--
-- Index pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD PRIMARY KEY (`Cin_employe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendrier_rdv`
--
ALTER TABLE `calendrier_rdv`
  MODIFY `id_calendrier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `Num_conge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `Id_consultation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande_materiel`
--
ALTER TABLE `demande_materiel`
  MODIFY `Num_demande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `Num_materiel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `Id_rdv` int(11) NOT NULL AUTO_INCREMENT;

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

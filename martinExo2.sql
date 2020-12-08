-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 08 Décembre 2020 à 15:06
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `martinExo2`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idConsultation` int(11) NOT NULL,
  `codeSS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `idConsultation` int(11) NOT NULL,
  `dateHeure` varchar(255) NOT NULL,
  `idSS` int(11) NOT NULL,
  `idMatricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `consultation`
--

INSERT INTO `consultation` (`idConsultation`, `dateHeure`, `idSS`, `idMatricule`) VALUES
(6, '10h', 8, 6),
(7, '10h20', 10, 7),
(8, '11h45', 11, 7),
(9, '11h30', 10, 6),
(10, '19h', 11, 6);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idMatricule` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`idMatricule`, `nom`, `prenom`) VALUES
(6, 'martel', 'vincent'),
(7, 'pesont', 'valentin');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `codeSS` int(11) NOT NULL,
  `nomCommercial` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `medicament`
--

INSERT INTO `medicament` (`codeSS`, `nomCommercial`, `prix`) VALUES
(5, 'Dolipranne', '5.00'),
(6, 'Betadine', '7.10');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idSS` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`idSS`, `nom`, `prenom`) VALUES
(8, 'varnier', 'evans'),
(9, 'de almeida', 'nicolas'),
(10, 'dechir', 'mathys'),
(11, 'colson', 'baptista'),
(12, 'bryan', 'll');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD KEY `idConsultation` (`idConsultation`),
  ADD KEY `codeSS` (`codeSS`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`idConsultation`),
  ADD KEY `idSS` (`idSS`),
  ADD KEY `patient` (`idMatricule`),
  ADD KEY `idMatricule` (`idMatricule`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idMatricule`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`codeSS`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idSS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `idConsultation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idMatricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `codeSS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `idSS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idConsultation`) REFERENCES `consultation` (`idConsultation`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`codeSS`) REFERENCES `medicament` (`codeSS`);

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`idSS`) REFERENCES `patient` (`idSS`),
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`idMatricule`) REFERENCES `medecin` (`idMatricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

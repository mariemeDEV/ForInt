-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 10 Mai 2019 à 10:57
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testApp`
--

-- --------------------------------------------------------

--
-- Structure de la table `police`
--

CREATE TABLE `police` (
  `id_police` varchar(16) NOT NULL,
  `num_police` varchar(16) NOT NULL,
  `date_police` datetime NOT NULL,
  `numFacture` varchar(25) NOT NULL,
  `attestation` varchar(16) DEFAULT NULL,
  `attestation_cedeao` varchar(16) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL,
  `intermediaire_matricule` int(11) NOT NULL,
  `conducteur_vehicule_id_cond` varchar(16) NOT NULL,
  `periode_garantie_id_periode` varchar(16) NOT NULL,
  `vehicule_id_vehicule` varchar(16) NOT NULL,
  `decompte_prime_id_dp` varchar(16) NOT NULL,
  `red_maj_id_red_maj` varchar(16) NOT NULL,
  `assure_id_assure` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id_police`,`red_maj_id_red_maj`),
  ADD UNIQUE KEY `num_police_UNIQUE` (`num_police`),
  ADD UNIQUE KEY `id_police_UNIQUE` (`id_police`),
  ADD UNIQUE KEY `numFacture` (`numFacture`),
  ADD UNIQUE KEY `attestation_2` (`attestation`),
  ADD UNIQUE KEY `attestation_cedeao` (`attestation_cedeao`),
  ADD KEY `fk_police_intermediaire1_idx` (`intermediaire_matricule`),
  ADD KEY `fk_police_conducteur_vehicule1_idx` (`conducteur_vehicule_id_cond`),
  ADD KEY `fk_police_periode_garantie1_idx` (`periode_garantie_id_periode`),
  ADD KEY `fk_police_vehicule1_idx` (`vehicule_id_vehicule`),
  ADD KEY `fk_police_decompte_prime1_idx` (`decompte_prime_id_dp`),
  ADD KEY `fk_police_red_maj1_idx` (`red_maj_id_red_maj`),
  ADD KEY `fk_police_assure1_idx` (`assure_id_assure`),
  ADD KEY `attestation` (`attestation`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `police`
--
ALTER TABLE `police`
  ADD CONSTRAINT `fk_police_assure1` FOREIGN KEY (`assure_id_assure`) REFERENCES `assure` (`id_assure`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_conducteur_vehicule` FOREIGN KEY (`conducteur_vehicule_id_cond`) REFERENCES `conducteur_vehicule` (`id_cond`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_decompte_prime1` FOREIGN KEY (`decompte_prime_id_dp`) REFERENCES `decompte_prime` (`id_dp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_intermediaire1` FOREIGN KEY (`intermediaire_matricule`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_periode_garantie1` FOREIGN KEY (`periode_garantie_id_periode`) REFERENCES `periode_garantie` (`id_periode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_red_maj1` FOREIGN KEY (`red_maj_id_red_maj`) REFERENCES `red_maj` (`id_red_maj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_vehicule1` FOREIGN KEY (`vehicule_id_vehicule`) REFERENCES `vehicule` (`id_vehicule`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

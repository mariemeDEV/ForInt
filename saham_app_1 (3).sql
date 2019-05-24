-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Mai 2019 à 16:53
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `saham_app_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `assure`
--

CREATE TABLE `assure` (
  `id_assure` varchar(16) NOT NULL,
  `nom_assure` varchar(45) DEFAULT NULL,
  `prenom_assure` varchar(45) DEFAULT NULL,
  `adresse_assure` varchar(45) DEFAULT NULL,
  `tel_assure` varchar(30) DEFAULT NULL,
  `email_assure` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `assure`
--

INSERT INTO `assure` (`id_assure`, `nom_assure`, `prenom_assure`, `adresse_assure`, `tel_assure`, `email_assure`) VALUES
('5cde7ad43e3a6', 'koundoul', 'NDEYE MARIEME', 'PARCELLES', '', 'KNDEYEMARIEME@GMAIL.COM'),
('5cde7e8b2e4a2', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde7fcb28a8b', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde80e668843', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde8227b52eb', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde836b9575e', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde8c11186a6', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cde90fd4eff9', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeaa7724db1', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeaac78c8ff', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeabdddc136', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeb4f3b1355', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeb55a4812e', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeb7d33d56a', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeb80ecc77e', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeb8a10f8d5', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdeba4bbf245', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5cdec1eae4530', 'FALL', 'PAPA MALICK', 'PARCELLES', '', 'FALLGMAIL.COM'),
('5cdede6c3f28d', 'KOUNDOUL', 'MARIME', '', '', ''),
('5cdee259bd5fa', 'FALL', 'IBRAHIMA', '', '', ''),
('5cdee2b810379', 'DIOP', 'FALLOU', '', '', ''),
('5cdee3ab0fccb', 'FALL', 'FATIM', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `id_attestation` int(11) NOT NULL,
  `numero_attestation` varchar(10) CHARACTER SET utf8 NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_vente` varchar(20) DEFAULT NULL,
  `intermediaire` int(10) DEFAULT NULL,
  `etat_actuel` enum('attribue','libre') NOT NULL,
  `etat_sortie` enum('restante','vendue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `attestation`
--

INSERT INTO `attestation` (`id_attestation`, `numero_attestation`, `id_type`, `id_vente`, `intermediaire`, `etat_actuel`, `etat_sortie`) VALUES
(190, '0000000', 1, NULL, 4091, 'attribue', 'restante'),
(191, '0000001', 1, NULL, 4091, 'attribue', 'restante'),
(192, '0000002', 1, NULL, 4091, 'attribue', 'restante'),
(193, '0000003', 1, NULL, 4091, 'attribue', 'restante'),
(194, '0000004', 1, NULL, 4091, 'attribue', 'restante'),
(195, '0000005', 1, NULL, 4091, 'attribue', 'restante'),
(196, '0000006', 2, 'c57f4', 4091, 'attribue', 'vendue'),
(197, '0000007', 2, '8zrk6', 4091, 'attribue', 'vendue'),
(198, '0000008', 2, 'YDcme', 4091, 'attribue', 'vendue'),
(199, '0000009', 2, 'aInzy', 4091, 'attribue', 'vendue'),
(200, '0000010', 2, 'tuF0Y', 4091, 'attribue', 'vendue'),
(201, '0000011', 3, '8zrk6', 4091, 'attribue', 'vendue'),
(202, '0000012', 3, 'c57f4', 4091, 'attribue', 'vendue'),
(204, '0000014', 3, 'YDcme', 4091, 'attribue', 'vendue'),
(205, '0000015', 3, 'aInzy', 4091, 'attribue', 'vendue');

-- --------------------------------------------------------

--
-- Structure de la table `attestation_cedeao`
--

CREATE TABLE `attestation_cedeao` (
  `id_attestation` int(11) NOT NULL,
  `intermediaire` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `numero_attestation` varchar(16) CHARACTER SET utf8 NOT NULL,
  `etat_actuel` enum('attribue','libre') NOT NULL,
  `etat_sortie` enum('restante','vendue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `attestation_cedeao`
--

INSERT INTO `attestation_cedeao` (`id_attestation`, `intermediaire`, `numero_attestation`, `etat_actuel`, `etat_sortie`) VALUES
(7, 'diopkhadi@gmail.com', '0000070', 'attribue', 'restante'),
(8, 'diopkhadi@gmail.com', '0000088', 'attribue', 'restante'),
(10, 'mbacke@saham.com', '0000044', 'attribue', 'vendue'),
(18, 'mbacke@saham.com', '000013', 'attribue', 'vendue'),
(19, 'mbacke@saham.com', '0000018', 'attribue', 'vendue'),
(20, 'mbacke@saham.com', '0000045', 'attribue', 'vendue'),
(21, 'mbacke@saham.com', '0000046', 'attribue', 'vendue'),
(22, 'mbacke@saham.com', '0000047', 'attribue', 'vendue'),
(23, 'mbacke@saham.com', '0000049', 'attribue', 'restante'),
(24, 'mbacke@saham.com', '0000050', 'attribue', 'restante'),
(25, NULL, '0000089', 'libre', 'restante'),
(26, NULL, '0000090', 'libre', 'restante'),
(29, NULL, '0000091', 'libre', 'restante'),
(30, NULL, '0000092', 'libre', 'restante'),
(31, NULL, '0000093', 'libre', 'restante'),
(32, NULL, '0000094', 'libre', 'restante'),
(33, NULL, '0000095', 'libre', 'restante'),
(34, NULL, '0000096', 'libre', 'restante'),
(35, NULL, '0000097', 'libre', 'restante'),
(36, NULL, '0000098', 'libre', 'restante');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_vehicule`
--

CREATE TABLE `categorie_vehicule` (
  `id_cat` int(11) NOT NULL,
  `libelle_categorie` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie_vehicule`
--

INSERT INTO `categorie_vehicule` (`id_cat`, `libelle_categorie`) VALUES
(1, 'CAT 401'),
(2, 'CAT 402'),
(3, 'CAT 403'),
(4, 'CAT 404'),
(5, 'CAT 405'),
(6, 'CAT 418');

-- --------------------------------------------------------

--
-- Structure de la table `conducteur_vehicule`
--

CREATE TABLE `conducteur_vehicule` (
  `id_cond` varchar(16) NOT NULL,
  `nom_conducteur` varchar(45) DEFAULT NULL,
  `prenom_conducteur` varchar(45) DEFAULT NULL,
  `annee_permis` varchar(45) DEFAULT NULL,
  `duree_conduite` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `conducteur_vehicule`
--

INSERT INTO `conducteur_vehicule` (`id_cond`, `nom_conducteur`, `prenom_conducteur`, `annee_permis`, `duree_conduite`) VALUES
('5cde7ad43e3a6', 'koundoul', 'NDEYE MARIEME', '', ''),
('5cde7e8b2e4a2', 'nom prospect', 'prenom prospect', '', ''),
('5cde7fcb28a8b', 'nom prospect', 'prenom prospect', '', ''),
('5cde80e668843', 'nom prospect', 'prenom prospect', '', ''),
('5cde8227b52eb', 'nom prospect', 'prenom prospect', '', ''),
('5cde836b9575e', 'nom prospect', 'prenom prospect', '', ''),
('5cde8c11186a6', 'nom prospect', 'prenom prospect', '', ''),
('5cde90fd4eff9', 'nom prospect', 'prenom prospect', '', ''),
('5cdeaa7724db1', 'nom prospect', 'prenom prospect', '', ''),
('5cdeaac78c8ff', 'nom prospect', 'prenom prospect', '', ''),
('5cdeabdddc136', 'nom prospect', 'prenom prospect', '', ''),
('5cdeb4f3b1355', 'nom prospect', 'prenom prospect', '', ''),
('5cdeb55a4812e', 'nom prospect', 'prenom prospect', '', ''),
('5cdeb7d33d56a', 'nom prospect', 'prenom prospect', '', ''),
('5cdeb80ecc77e', 'nom prospect', 'prenom prospect', '', ''),
('5cdeb8a10f8d5', 'nom prospect', 'prenom prospect', '', ''),
('5cdeba4bbf245', 'nom prospect', 'prenom prospect', '', ''),
('5cdec1eae4530', 'FALL', 'PAPA MALICK', '', ''),
('5cdede6c3f28d', 'KOUNDOUL', 'MARIME', '', ''),
('5cdee259bd5fa', 'FALL', 'IBRAHIMA', '', ''),
('5cdee2b810379', 'DIOP', 'FALLOU', '', ''),
('5cdee3ab0fccb', 'FALL', 'FATIM', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id_contenir` varchar(16) NOT NULL,
  `lim_gant` varchar(25) DEFAULT NULL,
  `franchise` varchar(25) DEFAULT NULL,
  `prime_brute` varchar(25) DEFAULT NULL,
  `prime_prorata` varchar(25) DEFAULT NULL,
  `garantie_id_garantie` int(11) NOT NULL,
  `police_id_police` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenir`
--

INSERT INTO `contenir` (`id_contenir`, `lim_gant`, `franchise`, `prime_brute`, `prime_prorata`, `garantie_id_garantie`, `police_id_police`) VALUES
('5cde7ad4cc4ad', 'ILLIMITE', '0', '86456', '45389', 1, '5cde7ad43e3a6'),
('5cde7ad4d9f79', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde7ad43e3a6'),
('5cde7ad4e7767', '200000', '0', '6000', '3150', 3, '5cde7ad43e3a6'),
('5cde7ad5090d7', '0', '36000', '4500', '2362', 5, '5cde7ad43e3a6'),
('5cde7ad51eec1', '0', '0', '31500', '16537', 6, '5cde7ad43e3a6'),
('5cde7e8bb2c8e', 'ILLIMITE', '0', '37601', '19740', 1, '5cde7e8b2e4a2'),
('5cde7e8bc889a', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde7e8b2e4a2'),
('5cde7e8bde4e8', '0', '0', '0', '0', 4, '5cde7e8b2e4a2'),
('5cde7fcb784d4', 'ILLIMITE', '0', '51078', '26815', 1, '5cde7fcb28a8b'),
('5cde7fcb83336', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde7fcb28a8b'),
('5cde7fcb8e155', '0', '0', '0', '0', 4, '5cde7fcb28a8b'),
('5cde80e71aff5', 'ILLIMITE', '0', '45181', '23720', 1, '5cde80e668843'),
('5cde80e730c6e', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde80e668843'),
('5cde80e7469c4', '0', '0', '0', '0', 4, '5cde80e668843'),
('5cde82281737a', 'ILLIMITE', '0', '45181', '3953', 1, '5cde8227b52eb'),
('5cde822822143', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde8227b52eb'),
('5cde82282cf52', '0', '0', '0', '0', 4, '5cde8227b52eb'),
('5cde836c34a7e', 'ILLIMITE', '0', '37601', '16450', 1, '5cde836b9575e'),
('5cde836c4a642', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde836b9575e'),
('5cde836c603d0', '0', '0', '0', '0', 4, '5cde836b9575e'),
('5cde8c1181591', 'ILLIMITE', '0', '45181', '23720', 1, '5cde8c11186a6'),
('5cde8c118c3b4', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde8c11186a6'),
('5cde8c11a1d7a', '0', '0', '0', '0', 4, '5cde8c11186a6'),
('5cde90fe0b13b', 'ILLIMITE', '0', '45181', '3953', 1, '5cde90fd4eff9'),
('5cde90fe20d64', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cde90fd4eff9'),
('5cde90fe36ad5', '0', '0', '0', '0', 4, '5cde90fd4eff9'),
('5cdeaa779f60b', 'ILLIMITE', '0', '37601', '19740', 1, '5cdeaa7724db1'),
('5cdeaa77aa3f2', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeaa7724db1'),
('5cdeaa77b51dd', '0', '0', '0', '0', 4, '5cdeaa7724db1'),
('5cdeaac814ad4', 'ILLIMITE', '0', '127880', '137584', 1, '5cdeaac78c8ff'),
('5cdeaac81f99e', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeaac78c8ff'),
('5cdeaac82a539', '0', '0', '0', '0', 4, '5cdeaac78c8ff'),
('5cdeabde9be8d', 'ILLIMITE', '0', '51078', '35754', 1, '5cdeabdddc136'),
('5cdeabdeb1aa6', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeabdddc136'),
('5cdeabdec76e2', '0', '0', '0', '0', 4, '5cdeabdddc136'),
('5cdeb4f45e8ad', 'ILLIMITE', '0', '45181', '3953', 1, '5cdeb4f3b1355'),
('5cdeb4f46bfcf', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeb4f3b1355'),
('5cdeb4f4823b8', '0', '0', '0', '0', 4, '5cdeb4f3b1355'),
('5cdeb55acf550', 'ILLIMITE', '0', '45181', '23720', 1, '5cdeb55a4812e'),
('5cdeb55ada4ac', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeb55a4812e'),
('5cdeb55ae529d', '0', '0', '0', '0', 4, '5cdeb55a4812e'),
('5cdeb7d3ba682', 'ILLIMITE', '0', '51078', '26815', 1, '5cdeb7d33d56a'),
('5cdeb7d3d0250', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeb7d33d56a'),
('5cdeb7d3e5f6a', '0', '0', '0', '0', 4, '5cdeb7d33d56a'),
('5cdeb80f75e6b', 'ILLIMITE', '0', '45181', '23720', 1, '5cdeb80ecc77e'),
('5cdeb80f80d06', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeb80ecc77e'),
('5cdeb80f8bbc8', '0', '0', '0', '0', 4, '5cdeb80ecc77e'),
('5cdeb8a1b4c36', 'ILLIMITE', '0', '51078', '26815', 1, '5cdeb8a10f8d5'),
('5cdeb8a1c272a', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeb8a10f8d5'),
('5cdeb8a1d008d', '0', '0', '0', '0', 4, '5cdeb8a10f8d5'),
('5cdeba4c30c20', 'ILLIMITE', '0', '65677', '34480', 1, '5cdeba4bbf245'),
('5cdeba4c467f7', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdeba4bbf245'),
('5cdeba4c5c3cc', '0', '0', '0', '0', 4, '5cdeba4bbf245'),
('5cdec1eb7e4d8', 'ILLIMITE', '0', '51078', '26815', 1, '5cdec1eae4530'),
('5cdec1eb913d2', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdec1eae4530'),
('5cdede6cbe120', 'ILLIMITE', '0', '45181', '3953', 1, '5cdede6c3f28d'),
('5cdede6cc8ef4', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdede6c3f28d'),
('5cdee25a36b88', 'ILLIMITE', '0', '65677', '65677', 1, '5cdee259bd5fa'),
('5cdee25a4195d', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdee259bd5fa'),
('5cdee25a4c6ca', '0', '0', '0', '0', 4, '5cdee259bd5fa'),
('5cdee2b8b8bd6', 'ILLIMITE', '0', '51078', '51078', 1, '5cdee2b810379'),
('5cdee2b8c393f', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdee2b810379'),
('5cdee2b8d95c1', '0', '0', '0', '0', 4, '5cdee2b810379'),
('5cdee3ab926e1', 'ILLIMITE', '0', '51078', '51078', 1, '5cdee3ab0fccb'),
('5cdee3ab9cbff', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5cdee3ab0fccb'),
('5cdee3aba7a09', '0', '0', '0', '0', 4, '5cdee3ab0fccb');

-- --------------------------------------------------------

--
-- Structure de la table `decompte_prime`
--

CREATE TABLE `decompte_prime` (
  `id_dp` varchar(16) NOT NULL,
  `taxe` int(11) DEFAULT NULL,
  `accessoire` int(11) DEFAULT NULL,
  `fond_garantie` int(11) DEFAULT NULL,
  `prime_nette` int(11) DEFAULT NULL,
  `prime_totale` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `decompte_prime`
--

INSERT INTO `decompte_prime` (`id_dp`, `taxe`, `accessoire`, `fond_garantie`, `prime_nette`, `prime_totale`) VALUES
('5cde7ad43e3a6', 6032, 20000, 964, 57323, 67319),
('5cde7e8b2e4a2', 2174, 20000, 493, 19740, 24407),
('5cde7fcb28a8b', 2882, 20000, 670, 26815, 32367),
('5cde80e668843', 2572, 20000, 593, 23720, 28885),
('5cde8227b52eb', 595, 20000, 98, 3953, 6646),
('5cde836b9575e', 1845, 20000, 411, 16450, 20706),
('5cde8c11186a6', 2572, 20000, 593, 23720, 28885),
('5cde90fd4eff9', 595, 20000, 98, 3953, 6646),
('5cdeaa7724db1', 2174, 20000, 493, 19740, 24407),
('5cdeaac78c8ff', 14258, 20000, 3439, 137584, 160281),
('5cdeabdddc136', 3775, 20000, 893, 35754, 42422),
('5cdeb4f3b1355', 595, 20000, 98, 3953, 6646),
('5cdeb55a4812e', 2572, 20000, 593, 23720, 28885),
('5cdeb7d33d56a', 2882, 20000, 670, 26815, 32367),
('5cdeb80ecc77e', 2572, 20000, 593, 23720, 28885),
('5cdeb8a10f8d5', 2882, 20000, 670, 26815, 32367),
('5cdeba4bbf245', 3648, 20000, 862, 34480, 40990),
('5cdec1eae4530', 2882, 20000, 670, 26815, 32367),
('5cdede6c3f28d', 595, 20000, 98, 3953, 6646),
('5cdee259bd5fa', 6868, 3000, 1641, 65677, 77186),
('5cdee2b810379', 5408, 3000, 1276, 51078, 60762),
('5cdee3ab0fccb', 5408, 3000, 1276, 51078, 60762);

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `id_garantie` int(11) NOT NULL,
  `libelle_garantie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `garantie`
--

INSERT INTO `garantie` (`id_garantie`, `libelle_garantie`) VALUES
(1, 'Responsabilite Civile'),
(2, 'Recours des tiers incendie'),
(3, 'Defense et recours'),
(4, 'Incendie'),
(5, 'Vol'),
(6, 'Bris de glace'),
(7, 'Tierce Complete (TCM)'),
(8, 'Tierce Collision (TCL)'),
(9, 'Avance sur recours-OPT1'),
(10, 'Avance sur recours-OPT2'),
(11, 'Avance sur recours-OPT3'),
(12, 'Personnes transportées-OPT1'),
(13, 'Personnes transportées-OPT2'),
(14, 'Personnes transportées-OPT3'),
(15, 'Assistance');

-- --------------------------------------------------------

--
-- Structure de la table `intermediaire`
--

CREATE TABLE `intermediaire` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `actived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `intermediaire`
--

INSERT INTO `intermediaire` (`matricule`, `nom`, `prenom`, `adresse`, `tel`, `email`, `mdp`, `role`, `actived`) VALUES
(401, 'Mboup', 'Fallou', 'liberte 6 extension', '774808682', 'fallou.mboup@sahamassurance.com', '$2y$10$anCfE8WNL6NDBFQCWl6YFuzaqhs8qEGfWONpzROCi8xW5vJWfYTJ6', 1, 1),
(403, 'Dioug', 'dga', 'dakar', '768521463', 'dga@saham.com', '$2y$10$0p0eJ0t3Fgm/IVVU9W2UdO9DAxfn/mpR2a7yqoAhzX7F3vBYeC67C', 1, 1),
(4091, 'mbacke', 'samb', 'pikine', '778563256', 'mbacke@saham.com', '$2y$10$QPSZpcAG0WN/c4Hl9Mccnu1eXgXGtE9wNSsJENrBeFxa4uKe.g00K', 2, 1),
(4095, 'Diop', 'Khadi', 'sipres', '785412263', 'diopkhadi@gmail.com', '$2y$10$hOBhwHX6FKPqfWi1V7IQkuYP/m0X8ts1mxioOn9cYfTgD5Y4N73le', 2, 0),
(4595, 'Diop', 'Fallou', 'Parcelles', '785412263', 'diop@gmail.com', 'passer123', 2, 0),
(4820, 'dieng', 'ibrahima', 'foire', '784521103', 'ibrahima@gmail.com', '$2y$10$wH1sWnYU06UGGR85XrGzjOEcpYhPjqdPOujNCssQqnZqHByNwGs4e', 2, 0),
(9841, 'Fall', 'Ibrahima', 'sipres', '785412036', 'fall@gmail.com', '$2y$10$nuZj5IqX897EEtsinaGjLeXp4Wg0KpwwchkdQaKrV0dVd8hJbvw2S', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `periode_garantie`
--

CREATE TABLE `periode_garantie` (
  `id_periode` varchar(16) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  `duree` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `periode_garantie`
--

INSERT INTO `periode_garantie` (`id_periode`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `duree`) VALUES
('5cde7ad43e3a6', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cde7e8b2e4a2', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cde7fcb28a8b', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cde80e668843', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cde8227b52eb', '2019-05-17', '2019-06-16', '08:00:00', '23:59:00', '1'),
('5cde836b9575e', '2019-05-17', '2019-10-16', '08:00:00', '23:59:00', '5'),
('5cde8c11186a6', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cde90fd4eff9', '2019-05-17', '2019-06-16', '08:00:00', '23:59:00', '1'),
('5cdeaa7724db1', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdeaac78c8ff', '2019-05-17', '2020-05-16', '08:00:00', '23:59:00', '12'),
('5cdeabdddc136', '2019-05-17', '2020-01-16', '08:00:00', '23:59:00', '8'),
('5cdeb4f3b1355', '2019-05-17', '2019-06-16', '08:00:00', '23:59:00', '1'),
('5cdeb55a4812e', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdeb7d33d56a', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdeb80ecc77e', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdeb8a10f8d5', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdeba4bbf245', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdec1eae4530', '2019-05-17', '2019-11-16', '08:00:00', '23:59:00', '6'),
('5cdede6c3f28d', '2019-05-17', '2019-06-16', '08:00:00', '23:59:00', '1'),
('5cdee259bd5fa', '2019-05-17', '2019-05-16', '08:00:00', '23:59:00', '0'),
('5cdee2b810379', '2019-05-17', '2019-05-16', '08:00:00', '23:59:00', '0'),
('5cdee3ab0fccb', '2019-05-17', '2019-05-16', '08:00:00', '23:59:00', '0');

-- --------------------------------------------------------

--
-- Structure de la table `police`
--

CREATE TABLE `police` (
  `id_police` varchar(16) NOT NULL,
  `num_police` varchar(16) NOT NULL,
  `date_police` datetime NOT NULL,
  `numFacture` varchar(25) DEFAULT NULL,
  `attestation` varchar(150) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL,
  `intermediaire_matricule` int(11) NOT NULL,
  `conducteur_vehicule_id_cond` varchar(16) DEFAULT NULL,
  `periode_garantie_id_periode` varchar(16) DEFAULT NULL,
  `vehicule_id_vehicule` varchar(16) NOT NULL,
  `decompte_prime_id_dp` varchar(16) NOT NULL,
  `red_maj_id_red_maj` varchar(16) NOT NULL,
  `assure_id_assure` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `police`
--

INSERT INTO `police` (`id_police`, `num_police`, `date_police`, `numFacture`, `attestation`, `validation`, `intermediaire_matricule`, `conducteur_vehicule_id_cond`, `periode_garantie_id_periode`, `vehicule_id_vehicule`, `decompte_prime_id_dp`, `red_maj_id_red_maj`, `assure_id_assure`) VALUES
('5cde7ad43e3a6', '4091/41000001', '2019-05-17 09:11:48', '41000001-2019-40910000', '0000006', 1, 4091, '5cde7ad43e3a6', '5cde7ad43e3a6', '5cde7ad43e3a6', '5cde7ad43e3a6', '5cde7ad43e3a6', '5cde7ad43e3a6'),
('5cde7e8b2e4a2', '4091/41000002', '2019-05-17 09:27:39', '41000002-2019-40910001', 'NULL', 0, 4091, '5cde7e8b2e4a2', '5cde7e8b2e4a2', '5cde7e8b2e4a2', '5cde7e8b2e4a2', '5cde7e8b2e4a2', '5cde7e8b2e4a2'),
('5cde7fcb28a8b', '4091/41000003', '2019-05-17 09:32:59', '41000003-2019-40910002', 'NULL', 0, 4091, '5cde7fcb28a8b', '5cde7fcb28a8b', '5cde7fcb28a8b', '5cde7fcb28a8b', '5cde7fcb28a8b', '5cde7fcb28a8b'),
('5cde80e668843', '4091/41000004', '2019-05-17 09:37:43', '41000004-2019-40910003', 'NULL', 0, 4091, '5cde80e668843', '5cde80e668843', '5cde80e668843', '5cde80e668843', '5cde80e668843', '5cde80e668843'),
('5cde8227b52eb', '4091/41000005', '2019-05-17 09:43:04', '41000005-2019-40910004', 'NULL', 0, 4091, '5cde8227b52eb', '5cde8227b52eb', '5cde8227b52eb', '5cde8227b52eb', '5cde8227b52eb', '5cde8227b52eb'),
('5cde836b9575e', '4091/41000006', '2019-05-17 09:48:28', '41000006-2019-40910005', 'NULL', 0, 4091, '5cde836b9575e', '5cde836b9575e', '5cde836b9575e', '5cde836b9575e', '5cde836b9575e', '5cde836b9575e'),
('5cde8c11186a6', '4091/41000007', '2019-05-17 10:25:21', '41000007-2019-40910006', 'NULL', 0, 4091, '5cde8c11186a6', '5cde8c11186a6', '5cde8c11186a6', '5cde8c11186a6', '5cde8c11186a6', '5cde8c11186a6'),
('5cde90fd4eff9', '4091/41000008', '2019-05-17 10:46:21', '41000008-2019-40910007', 'NULL', 0, 4091, '5cde90fd4eff9', '5cde90fd4eff9', '5cde90fd4eff9', '5cde90fd4eff9', '5cde90fd4eff9', '5cde90fd4eff9'),
('5cdeaa7724db1', '4091/41000009', '2019-05-17 12:35:03', '41000009-2019-40910008', 'NULL', 0, 4091, '5cdeaa7724db1', '5cdeaa7724db1', '5cdeaa7724db1', '5cdeaa7724db1', '5cdeaa7724db1', '5cdeaa7724db1'),
('5cdeaac78c8ff', '4091/42000001', '2019-05-17 12:36:24', '42000001-2019-40910009', 'NULL', 0, 4091, '5cdeaac78c8ff', '5cdeaac78c8ff', '5cdeaac78c8ff', '5cdeaac78c8ff', '5cdeaac78c8ff', '5cdeaac78c8ff'),
('5cdeabdddc136', '4091/41000010', '2019-05-17 12:41:02', '41000010-2019-40910010', 'NULL', 0, 4091, '5cdeabdddc136', '5cdeabdddc136', '5cdeabdddc136', '5cdeabdddc136', '5cdeabdddc136', '5cdeabdddc136'),
('5cdeb4f3b1355', '4091/41000011', '2019-05-17 13:19:48', '41000011-2019-40910011', 'NULL', 0, 4091, '5cdeb4f3b1355', '5cdeb4f3b1355', '5cdeb4f3b1355', '5cdeb4f3b1355', '5cdeb4f3b1355', '5cdeb4f3b1355'),
('5cdeb55a4812e', '4091/41000012', '2019-05-17 13:21:30', '41000012-2019-40910012', 'NULL', 0, 4091, '5cdeb55a4812e', '5cdeb55a4812e', '5cdeb55a4812e', '5cdeb55a4812e', '5cdeb55a4812e', '5cdeb55a4812e'),
('5cdeb7d33d56a', '4091/41000013', '2019-05-17 13:32:03', '41000013-2019-40910013', 'NULL', 0, 4091, '5cdeb7d33d56a', '5cdeb7d33d56a', '5cdeb7d33d56a', '5cdeb7d33d56a', '5cdeb7d33d56a', '5cdeb7d33d56a'),
('5cdeb80ecc77e', '4091/41000014', '2019-05-17 13:33:03', '41000014-2019-40910014', 'NULL', 0, 4091, '5cdeb80ecc77e', '5cdeb80ecc77e', '5cdeb80ecc77e', '5cdeb80ecc77e', '5cdeb80ecc77e', '5cdeb80ecc77e'),
('5cdeb8a10f8d5', '4091/41000015', '2019-05-17 13:35:29', '41000015-2019-40910015', 'NULL', 0, 4091, '5cdeb8a10f8d5', '5cdeb8a10f8d5', '5cdeb8a10f8d5', '5cdeb8a10f8d5', '5cdeb8a10f8d5', '5cdeb8a10f8d5'),
('5cdeba4bbf245', '4091/41000016', '2019-05-17 13:42:36', '41000016-2019-40910016', 'NULL', 0, 4091, '5cdeba4bbf245', '5cdeba4bbf245', '5cdeba4bbf245', '5cdeba4bbf245', '5cdeba4bbf245', '5cdeba4bbf245'),
('5cdec1eae4530', '4091/41000017', '2019-05-17 14:15:07', '41000017-2019-40910017', '0000007', 1, 4091, '5cdec1eae4530', '5cdec1eae4530', '5cdec1eae4530', '5cdec1eae4530', '5cdec1eae4530', '5cdec1eae4530'),
('5cdede6c3f28d', '4091/41000018', '2019-05-17 16:16:44', '41000018-2019-40910018', '', 1, 4091, '5cdede6c3f28d', '5cdede6c3f28d', '5cdede6c3f28d', '5cdede6c3f28d', '5cdede6c3f28d', '5cdede6c3f28d'),
('5cdee259bd5fa', '4091/41000019', '2019-05-17 16:33:30', '41000019-2019-40910019', '0000008', 1, 4091, '5cdee259bd5fa', '5cdee259bd5fa', '5cdee259bd5fa', '5cdee259bd5fa', '5cdee259bd5fa', '5cdee259bd5fa'),
('5cdee2b810379', '4091/41000020', '2019-05-17 16:35:04', '41000020-2019-40910020', '0000009', 1, 4091, '5cdee2b810379', '5cdee2b810379', '5cdee2b810379', '5cdee2b810379', '5cdee2b810379', '5cdee2b810379'),
('5cdee3ab0fccb', '4091/41000021', '2019-05-17 16:39:07', '41000021-2019-40910021', '0000010', 1, 4091, '5cdee3ab0fccb', '5cdee3ab0fccb', '5cdee3ab0fccb', '5cdee3ab0fccb', '5cdee3ab0fccb', '5cdee3ab0fccb');

-- --------------------------------------------------------

--
-- Structure de la table `red_maj`
--

CREATE TABLE `red_maj` (
  `id_red_maj` varchar(16) NOT NULL,
  `pourcentageBC` int(11) DEFAULT NULL,
  `bonus_rc` int(11) DEFAULT NULL,
  `pourcentageRC` int(11) DEFAULT NULL,
  `reduc_com` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `red_maj`
--

INSERT INTO `red_maj` (`id_red_maj`, `pourcentageBC`, `bonus_rc`, `pourcentageRC`, `reduc_com`) VALUES
('5cde7ad43e3a6', 15, 6808, 15, 3307),
('5cde7e8b2e4a2', 0, 0, 0, 0),
('5cde7fcb28a8b', 0, 0, 0, 0),
('5cde80e668843', 0, 0, 0, 0),
('5cde8227b52eb', 0, 0, 0, 0),
('5cde836b9575e', 0, 0, 0, 0),
('5cde8c11186a6', 0, 0, 0, 0),
('5cde90fd4eff9', 0, 0, 0, 0),
('5cdeaa7724db1', 0, 0, 0, 0),
('5cdeaac78c8ff', 0, 0, 0, 0),
('5cdeabdddc136', 0, 0, 0, 0),
('5cdeb4f3b1355', 0, 0, 0, 0),
('5cdeb55a4812e', 0, 0, 0, 0),
('5cdeb7d33d56a', 0, 0, 0, 0),
('5cdeb80ecc77e', 0, 0, 0, 0),
('5cdeb8a10f8d5', 0, 0, 0, 0),
('5cdeba4bbf245', 0, 0, 0, 0),
('5cdec1eae4530', 0, 0, 0, 0),
('5cdede6c3f28d', 0, 0, 0, 0),
('5cdee259bd5fa', 0, 0, 0, 0),
('5cdee2b810379', 0, 0, 0, 0),
('5cdee3ab0fccb', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `libelle_role`) VALUES
(1, 'admin'),
(2, 'intermediaire'),
(3, 'producteur');

-- --------------------------------------------------------

--
-- Structure de la table `schema_data`
--

CREATE TABLE `schema_data` (
  `id` int(11) NOT NULL,
  `codeformule` int(11) NOT NULL DEFAULT '1',
  `typecontrat` varchar(5) NOT NULL DEFAULT 'F',
  `naturecontrat` varchar(5) NOT NULL DEFAULT 'N',
  `codezone` varchar(5) NOT NULL DEFAULT '1',
  `qualite` varchar(5) NOT NULL DEFAULT '1',
  `codeville` varchar(5) NOT NULL DEFAULT '0',
  `codeprofession` int(11) NOT NULL DEFAULT '0',
  `codeactivité` varchar(5) NOT NULL DEFAULT '0',
  `typepiece` varchar(5) NOT NULL DEFAULT 'CIN',
  `numpiece` varchar(15) NOT NULL,
  `typepermi` varchar(5) NOT NULL,
  `numepermis` varchar(5) NOT NULL,
  `datedelivpermis` varchar(10) NOT NULL,
  `lieudelivpermis` varchar(25) NOT NULL,
  `codeusage` varchar(5) NOT NULL,
  `codecarrosserie` varchar(5) DEFAULT NULL,
  `datevali` date NOT NULL,
  `datesous` date NOT NULL,
  `datesais` date NOT NULL,
  `flagtrans` varchar(10) NOT NULL DEFAULT 'N',
  `id_police` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_attestation`
--

CREATE TABLE `type_attestation` (
  `id_type` int(10) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_attestation`
--

INSERT INTO `type_attestation` (`id_type`, `libelle`) VALUES
(1, 'verte'),
(2, 'jaune'),
(3, 'cedeao');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` varchar(16) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `immatriculation` varchar(12) DEFAULT NULL,
  `puissance` varchar(4) DEFAULT NULL,
  `energie` varchar(45) DEFAULT NULL,
  `charge_utile` varchar(45) DEFAULT NULL,
  `places` int(11) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `chassis` varchar(45) DEFAULT NULL,
  `cylindre` varchar(25) DEFAULT NULL,
  `date_mec` date DEFAULT NULL,
  `valeur_neuve` varchar(120) DEFAULT NULL,
  `valeur_venale` varchar(120) DEFAULT NULL,
  `nom_chauffeur` varchar(45) DEFAULT NULL,
  `categorie_vehicule_id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `marque`, `type`, `immatriculation`, `puissance`, `energie`, `charge_utile`, `places`, `genre`, `chassis`, `cylindre`, `date_mec`, `valeur_neuve`, `valeur_venale`, `nom_chauffeur`, `categorie_vehicule_id_cat`) VALUES
('', 'PEUGEOT', '404', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cd55d6879cd1', 'CITROEN', 'EEEEE', 'DK-9854-BH', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '12000000', 'DIAGNE', 1),
('5cd92ba2776c6', 'CITROEN', 'XXXXX', 'DK-9502-BH', '20', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '9000000', 'DIOP', 1),
('5cd92bde2ee67', 'PEUGEOT', '404', 'DK-8745-BK', '5', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cd985d8d7e29', 'PEUGEOT', '404', 'DK-8745-BK', '6', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIOP', 1),
('5cd9886d330f5', 'CITROEN', 'XXX', 'DK-9874-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '15000000', '9000000', 'DIOP', 1),
('5cd98af084611', 'PEUGEOT', '404', 'DK-8745-BK', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cd98d873f1c7', 'PEUGEOT', '306', 'DK-8954-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '15000000', '12000000', 'KANE', 1),
('5cd98e4d6b3ed', 'CITROEN', 'ZZZZZ', 'DK-9874-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '20000000', '18000000', 'KANE', 1),
('5cd98f67a6f37', 'PEUGEOT', '404', 'DK-9874-BK', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIENG', 1),
('5cd991f5be631', 'PEUGEOT', '605', 'DK-9821-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '10000000', 'COULIBALY', 1),
('5cd99494c415a', 'CITROEN', 'XXXXX', 'DK-2014-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '18000000', '12000000', 'FAYE', 1),
('5cd9952239453', 'PEUGEOT', '305', 'DK-9802-AH', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '9000000', 'FAYE', 1),
('5cd996dd3cb08', 'CITROEN', 'XXXXX', 'DK-0214-BK', '15', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '12000000', 'DIAGNE', 1),
('5cd998a18c132', 'CITROEN', 'ZZZZ', 'DK-8745-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '20000000', '18000000', 'SARR', 1),
('5cd99ac5eaa1a', '', '404', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cda870e6bd90', 'CITROEN', 'XXXXX', 'DK-9854-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '5000000', 'FAYE', 1),
('5cda878963e69', 'CITROEN', 'ZZZZZ', 'DK-8402-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '12000000', '9000000', 'DIENG', 1),
('5cda9204de776', 'PEUGEOT', '852', 'DK-8954-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIENG', 1),
('5cda929326b53', 'PEUGEOT', '404', 'DK-8745-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'FAYE', 1),
('5cdaa7836a52d', 'CITROEN', 'EEEEE', 'DK-9845-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '12000000', '6000000', 'FALL', 1),
('5cdaa83474302', 'CITROEN', '402', 'DK-8745-BH', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '16000000', '12000000', 'DIENG', 1),
('5cdaa93a0bb01', 'CITROEN', 'XXXXX', 'DK-8745-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '18000000', '9000000', 'FALL', 1),
('5cdab37a74a09', 'CITROEN', 'XXXXX', 'DK-9874-BH', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '15000000', '10000000', 'BEYE', 1),
('5cdab44be0ce0', 'CITROEN', 'YYYYY', 'DK-9845-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '20000000', '18000000', 'NDIAYE', 1),
('5cdab5d65a74f', 'PEUGEOT', '306', 'DK-9854-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '12000000', '9000000', 'KANE', 1),
('5cdab6c6c90cc', 'PEUGEOT', 'ZZZZ', 'DK-9840-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '18000000', '15000000', 'DIAGNE', 1),
('5cdab7bebdf9a', 'CITROEN', 'PPPPP', 'DK-9854-BK', '25', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '15000000', '12000000', 'FAYE', 1),
('5cdabb37a404d', 'CITROEN', 'XXXXX', 'DK-9854-BK', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-02', '15000000', '12000000', 'L', 1),
('5cdabc0c63876', 'PEUGEOT', 'YYYY', 'DK-8745-BK', '20', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '20000000', '18000000', 'LO', 1),
('5cdabe154acfe', 'PEUGEOT', '852', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabe29c6561', 'PEUGEOT', '852', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabe4708784', 'PEUGEOT', '852', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabe5799468', 'PEUGEOT', '852', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabe83b8e10', 'PEUGEOT', '404', 'DK-8745-BK', '1', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabecadbf2e', 'PEUGEOT', '852', 'DK-8954-BK', '12', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdabef3cc8e8', 'PEUGEOT', '852', 'DK-8954-BK', '12', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdac42ff18b3', 'PEUGEOT', '852', 'DK-8954-BK', '12', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdad1ed5ea42', 'PEUGEOT', '404', 'DK-8745-BK', '1', 'essence', 'Moins de 3,5T', 7, 'TPC', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 2),
('5cdad222e26d1', 'PEUGEOT', '404', 'DK-8745-BK', '4', 'diesel', 'Break', 2, 'Pack auto', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'LLO', 6),
('5cdadc3c16d48', 'PEUGEOT', '404', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'Koundoul', 1),
('5cdadf15675e8', 'PEUGEOT', '404', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdadf9f823de', 'PEUGEOT', '404', 'DK-8954-BK', '5852', 'essence', 'Moins de 3,5T', 10, 'TPC', 'N/A', 'N/A', '2019-05-02', '2000000', '1000000', 'KOUNDOUL', 2),
('5cdadfc591f52', 'PEUGEOT', '404', 'DK-8745-BK', '4', 'essence', 'Moins de 3,5T', 5, 'TPM', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 3),
('5cdae00ea8797', 'PEUGEOT', '404', 'DK-8745-BK', '8', 'essence', 'Break', 4, 'TPV', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'FGD', 4),
('5cdb63647771d', 'PEUGEOT', '404', 'DK-8745-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdb63bf41657', 'PEUGEOT', '404', 'DK-8745-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdb6443d3153', 'PEUGEOT', '852', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdb65332543c', 'PEUGEOT', '404', 'DK-8745-BK', '10', 'diesel', 'Moins de 3,5T', 7, 'TPC', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 2),
('5cdb657f30009', 'PEUGEOT', '404', 'DK-8745-BK', '5', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdb65cedfa66', 'PEUGEOT', '404', 'DK-8954-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdb660fa777b', 'PEUGEOT', '404', 'DK-8745-BK', '5', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIOP', 1),
('5cdbd1bdc73e7', 'PEUGEOT', '605', 'DK-8954-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIOP', 1),
('5cdbd2a44a23d', 'CITROEN', 'ZZZZ', 'DK-854-BH', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '15000000', '10000000', 'DIAKHATE', 1),
('5cdbd31fc8cf3', 'CITROEN', '404', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIOP', 1),
('5cdbf490c0836', 'PEUGEOT', '404', 'DK-8954-BK', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2018-12-11', '8000000', '5000000', 'nom prospect', 1),
('5cdbf84bf23cd', 'PEUGEOT', '607', 'DK-23256-BB', '11', 'essence', 'Break', 7, ' PAPP', 'N/A', 'N/A', '2000-05-20', '8000000', '4000000', 'KOUNDOU', 1),
('5cdbf93b65df4', 'PEUGEOT', '404', 'DK-8954-BK', '11', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-13', '7000000', '2000000', 'KOUNDOUL', 1),
('5cdc007f143c1', 'PEUGEOT', '405', 'DK-8745-BK', '12', 'essence', 'Break', 5, 'Pack auto', 'N/A', 'N/A', '2019-05-06', '8000000', '5000000', 'KOUNDOUL', 6),
('5cdc0f20e2d67', 'PEUGEOT', '404', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdc385467c3a', 'PEUGEOT', '404', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdc393106149', 'PEUGEOT', '', 'DK-8745-BK', '6', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdc399c65a47', '', '', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdc3ae7e5e00', 'PEUGEOT', '', 'DK-8745-BK', '6', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdc3b4de03a4', 'PEUGEOT', '', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdc3b8eb87b4', 'PEUGEOT', '', 'DK-8954-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd1c020f6a2', 'PEUGEOT', '', 'DK-8745-BK', '1', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd21a06951a', 'PEUGEOT', '404', 'DK-8954-BK', '12', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2018-12-11', '8000000', '5000000', 'KKK', 1),
('5cdd2a294c586', 'PEUGEOT', '', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd2cda69863', 'PEUGEOT', '', 'DK-8745-BK', '', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-02', '', '', 'KOUNDOUL', 1),
('5cdd507e79074', 'PEUGEOT', '404', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdd51b3b3242', 'PEUGEOT', '404', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd529672f5c', 'PEUGEOT', '', 'DK-8745-BK', '4', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd531c979cf', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd533877c78', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd535812811', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 6, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd5381a7607', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd53d600f3c', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 4, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdd5bbcef9d1', 'PEUGEOT', '404', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdd5bbd8c189', 'PEUGEOT', '404', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'KOUNDOUL', 1),
('5cdd6b73d0cab', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd6cb162e19', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '12000000', '11000000', 'KOUNDOUL', 1),
('5cdd6d419e376', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'FALL', 1),
('5cdd7946b52b5', 'PEUGEOT', '', 'DK-8954-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd79ef8f123', 'PEUGEOT', '', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7a6696747', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7b550994b', 'PEUGEOT', '', 'DK-8745-BK', '10', 'essence', 'Break', 6, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7db8f2d9d', 'PEUGEOT', '', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7e3f299e6', 'PEUGEOT', '', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7e7c06e00', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd7eb13531b', 'PEUGEOT', '', 'DK-8745-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdd80a645d84', 'CITROEN', 'XXXXX', 'DK-9801-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '12000000', '10000000', 'DIOP', 1),
('5cdd84ae88943', 'PEUGEOT', '', 'DK-8745-BK', '12', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-08', '', '', 'KOUNDOUL', 1),
('5cde7ad43e3a6', 'PEUGEOT', '206', 'DK-9845-BK', '15', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-03-06', '2000000', '1500000', 'koundoul', 1),
('5cde7e8b2e4a2', 'PEUGEOT', '', '', '2', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cde7fcb28a8b', 'CITROEN', '', '', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cde80e668843', 'PEUGEOT', '', 'DK-8745-BK', '6', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cde8227b52eb', 'PEUGEOT', '', '', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cde836b9575e', 'PEUGEOT', '', 'DK-8745-BK', '2', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cde8c11186a6', 'PEUGEOT', '', 'DK-8745-BK', '6', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-02', '', '', 'nom prospect', 1),
('5cde90fd4eff9', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdeaa7724db1', 'PEUGEOT', '404', 'DK-8745-BK', '1', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdeaac78c8ff', 'PEUGEOT', '404', 'DK-9874-BK', '10', 'essence', 'Moins de 3,5T', 7, 'TPC', 'N/A', 'N/A', '2019-05-04', '5000000', '3000000', 'nom prospect', 2),
('5cdeabdddc136', 'PEUGEOT', '404', 'DK-8745-BK', '10', 'diesel', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdeb4f3b1355', 'PEUGEOT', '', 'DK-8745-BK', '3', 'essence', 'Break', 4, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdeb55a4812e', '', '', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'nom prospect', 1),
('5cdeb7d33d56a', 'PEUGEOT', '404', 'DK-8954-BK', '8', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdeb80ecc77e', 'PEUGEOT', '852', 'DK-8745-BK', '5', 'diesel', 'Break', 3, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdeb8a10f8d5', 'PEUGEOT', '404', 'DK-8745-BK', '7', 'diesel', 'Break', 6, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdeba4bbf245', 'PEUGEOT', '404', 'DK-8745-BK', '14', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'nom prospect', 1),
('5cdec1eae4530', 'PEUGEOT', '307', 'DK-8954-BK', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '3000000', '2000000', 'FALL', 1),
('5cdede6c3f28d', 'PEUGEOT', '', 'DK-8745-BK', '5', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2019-05-01', '', '', 'KOUNDOUL', 1),
('5cdee259bd5fa', 'PEUGEOT', '404', 'DK-8745-BK', '14', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'FALL', 1),
('5cdee2b810379', 'PEUGEOT', '404', 'DK-8745-BK', '10', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'DIOP', 1),
('5cdee3ab0fccb', 'PEUGEOT', '404', 'DK-8745-BK', '10', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2019-05-01', '2000000', '1000000', 'FALL', 1),
('fke80orzaaa409ak', 'kj', 'ij', '8k', '5', 'kj', 'po', 5, 'kjhgf', 'test', '55', '2019-05-01', '555555', '55555', 'lkjh', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `assure`
--
ALTER TABLE `assure`
  ADD PRIMARY KEY (`id_assure`),
  ADD UNIQUE KEY `id_assure_UNIQUE` (`id_assure`);

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`id_attestation`),
  ADD UNIQUE KEY `numero_attestation` (`numero_attestation`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `intermediaire` (`intermediaire`);

--
-- Index pour la table `attestation_cedeao`
--
ALTER TABLE `attestation_cedeao`
  ADD PRIMARY KEY (`id_attestation`),
  ADD UNIQUE KEY `numero_attestation_2` (`numero_attestation`),
  ADD KEY `numero_attestation` (`numero_attestation`),
  ADD KEY `numero_attestation_3` (`numero_attestation`),
  ADD KEY `intermediaire` (`intermediaire`);

--
-- Index pour la table `categorie_vehicule`
--
ALTER TABLE `categorie_vehicule`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `conducteur_vehicule`
--
ALTER TABLE `conducteur_vehicule`
  ADD PRIMARY KEY (`id_cond`),
  ADD UNIQUE KEY `id_cond_UNIQUE` (`id_cond`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id_contenir`),
  ADD UNIQUE KEY `id_contenir_UNIQUE` (`id_contenir`),
  ADD KEY `fk_contenir_garantie_idx` (`garantie_id_garantie`),
  ADD KEY `fk_contenir_police1_idx` (`police_id_police`);

--
-- Index pour la table `decompte_prime`
--
ALTER TABLE `decompte_prime`
  ADD PRIMARY KEY (`id_dp`),
  ADD UNIQUE KEY `id_dp_UNIQUE` (`id_dp`);

--
-- Index pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD PRIMARY KEY (`id_garantie`);

--
-- Index pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `matricule_UNIQUE` (`matricule`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`);

--
-- Index pour la table `periode_garantie`
--
ALTER TABLE `periode_garantie`
  ADD PRIMARY KEY (`id_periode`),
  ADD UNIQUE KEY `id_periode_UNIQUE` (`id_periode`);

--
-- Index pour la table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id_police`,`red_maj_id_red_maj`),
  ADD UNIQUE KEY `num_police_UNIQUE` (`num_police`),
  ADD UNIQUE KEY `id_police_UNIQUE` (`id_police`),
  ADD UNIQUE KEY `numFacture` (`numFacture`),
  ADD KEY `fk_police_intermediaire1_idx` (`intermediaire_matricule`),
  ADD KEY `fk_police_conducteur_vehicule1_idx` (`conducteur_vehicule_id_cond`),
  ADD KEY `fk_police_periode_garantie1_idx` (`periode_garantie_id_periode`),
  ADD KEY `fk_police_vehicule1_idx` (`vehicule_id_vehicule`),
  ADD KEY `fk_police_decompte_prime1_idx` (`decompte_prime_id_dp`),
  ADD KEY `fk_police_red_maj1_idx` (`red_maj_id_red_maj`),
  ADD KEY `fk_police_assure1_idx` (`assure_id_assure`);

--
-- Index pour la table `red_maj`
--
ALTER TABLE `red_maj`
  ADD PRIMARY KEY (`id_red_maj`),
  ADD UNIQUE KEY `id_red_maj_UNIQUE` (`id_red_maj`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `schema_data`
--
ALTER TABLE `schema_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_police` (`id_police`);

--
-- Index pour la table `type_attestation`
--
ALTER TABLE `type_attestation`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD UNIQUE KEY `id_vehicule_UNIQUE` (`id_vehicule`),
  ADD KEY `fk_vehicule_categorie_vehicule1_idx` (`categorie_vehicule_id_cat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT pour la table `attestation_cedeao`
--
ALTER TABLE `attestation_cedeao`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `categorie_vehicule`
--
ALTER TABLE `categorie_vehicule`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `garantie`
--
ALTER TABLE `garantie`
  MODIFY `id_garantie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `schema_data`
--
ALTER TABLE `schema_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_attestation`
--
ALTER TABLE `type_attestation`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `fk_intermediaire` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `type_attestation` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD CONSTRAINT `fk_role_int` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

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

--
-- Contraintes pour la table `schema_data`
--
ALTER TABLE `schema_data`
  ADD CONSTRAINT `schema_data_ibfk_1` FOREIGN KEY (`id_police`) REFERENCES `police` (`id_police`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `fk_vehicule_categorie_vehicule` FOREIGN KEY (`categorie_vehicule_id_cat`) REFERENCES `categorie_vehicule` (`id_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 05 juil. 2019 à 19:18
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Structure de la table `annulation`
--

CREATE TABLE `annulation` (
  `id_annulation` int(10) NOT NULL,
  `id_police` varchar(16) CHARACTER SET utf8 NOT NULL,
  `code_intermediaire` int(10) NOT NULL,
  `motif_annulation` varchar(150) NOT NULL,
  `etat_annulation` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_annulation` datetime NOT NULL,
  `matricule_auteur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Déchargement des données de la table `assure`
--

INSERT INTO `assure` (`id_assure`, `nom_assure`, `prenom_assure`, `adresse_assure`, `tel_assure`, `email_assure`) VALUES
('5d1f7debb5e93', 'FAYE', 'AMADOU', 'PARCELLES', '775402296', 'FAYE@GMAIL.COM'),
('5d1f7f4650509', 'DIENG', 'OULIMATA', 'PARCELLES', '78540229', 'NIANG@GMAIL.COM'),
('5d1f82ba32177', 'KOUNDOUL', 'MARIME', 'PARCELLES', '', 'KNDEYEMARIEME@GMAIL.COM');

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `id_attestation` int(11) NOT NULL,
  `numero_attestation` varchar(10) NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_vente` varchar(20) DEFAULT NULL,
  `intermediaire` int(10) DEFAULT NULL,
  `etat_actuel` enum('attribue','libre') NOT NULL,
  `etat_sortie` enum('restante','vendue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attestation`
--

INSERT INTO `attestation` (`id_attestation`, `numero_attestation`, `id_type`, `id_vente`, `intermediaire`, `etat_actuel`, `etat_sortie`) VALUES
(4, '0023926', 1, '', 4000, 'attribue', 'restante'),
(5, '0023926', 1, '', 4000, 'attribue', 'restante'),
(6, '0023927', 1, '', 4000, 'attribue', 'restante'),
(7, '0023927', 1, '', 4000, 'attribue', 'restante'),
(8, '0023928', 1, '', 4000, 'attribue', 'restante'),
(9, '0023928', 1, '', 4000, 'attribue', 'restante'),
(10, '0023929', 1, '', 4000, 'attribue', 'restante'),
(11, '0023929', 1, '', 4000, 'attribue', 'restante'),
(12, '0023930', 1, '', 4000, 'attribue', 'restante'),
(13, '0023930', 1, '', 4000, 'attribue', 'restante'),
(14, '0159491', 2, '', 4000, 'attribue', 'restante'),
(15, '0159491', 2, '', 4000, 'attribue', 'restante'),
(16, '0159492', 2, '', 4000, 'attribue', 'restante'),
(17, '0159492', 2, '', 4000, 'attribue', 'restante'),
(18, '0159493', 2, '', 4000, 'attribue', 'restante'),
(19, '0159493', 2, '', 4000, 'attribue', 'restante'),
(20, '0159494', 2, '', 4000, 'attribue', 'restante'),
(21, '0159494', 2, '', 4000, 'attribue', 'restante'),
(22, '0159495', 2, '', 4000, 'attribue', 'restante'),
(23, '0159495', 2, '', 4000, 'attribue', 'restante'),
(24, '0645956', 3, '', 4000, 'attribue', 'restante'),
(25, '0645956', 3, '', 4000, 'attribue', 'restante'),
(26, '0645957', 3, '', 4000, 'attribue', 'restante'),
(27, '0645957', 3, '', 4000, 'attribue', 'restante'),
(28, '0645958', 3, '', 4000, 'attribue', 'restante'),
(29, '0645958', 3, '', 4000, 'attribue', 'restante'),
(30, '0645959', 3, '', 4000, 'attribue', 'restante'),
(31, '0645959', 3, '', 4000, 'attribue', 'restante'),
(32, '0645960', 3, '', 4000, 'attribue', 'restante'),
(33, '0645960', 3, '', 4000, 'attribue', 'restante'),
(34, '0645961', 3, '', 4000, 'attribue', 'restante'),
(35, '0645961', 3, '', 4000, 'attribue', 'restante'),
(36, '0645962', 3, '', 4000, 'attribue', 'restante'),
(37, '0645962', 3, '', 4000, 'attribue', 'restante'),
(38, '0645963', 3, '', 4000, 'attribue', 'restante'),
(39, '0645963', 3, '', 4000, 'attribue', 'restante'),
(40, '0645964', 3, '', 4000, 'attribue', 'restante'),
(41, '0645964', 3, '', 4000, 'attribue', 'restante'),
(42, '0645965', 3, '', 4000, 'attribue', 'restante'),
(43, '0645965', 3, '', 4000, 'attribue', 'restante'),
(44, '0645966', 3, '', 4000, 'attribue', 'restante'),
(45, '0645966', 3, '', 4000, 'attribue', 'restante'),
(46, '0645967', 3, '', 4000, 'attribue', 'restante'),
(47, '0645967', 3, '', 4000, 'attribue', 'restante'),
(48, '0645968', 3, '', 4000, 'attribue', 'restante'),
(49, '0645968', 3, '', 4000, 'attribue', 'restante'),
(50, '0645969', 3, '', 4000, 'attribue', 'restante'),
(51, '0645969', 3, '', 4000, 'attribue', 'restante'),
(52, '0645970', 3, '', 4000, 'attribue', 'restante'),
(53, '0645970', 3, '', 4000, 'attribue', 'restante'),
(54, '0000010', 1, '', 4091, 'attribue', 'restante'),
(55, '0000010', 1, '', 4091, 'attribue', 'restante'),
(56, '0000011', 1, '', 4091, 'attribue', 'restante'),
(57, '0000011', 1, '', 4091, 'attribue', 'restante'),
(58, '0000012', 1, '', 4091, 'attribue', 'restante'),
(59, '0000012', 1, '', 4091, 'attribue', 'restante'),
(60, '0000013', 1, '', 4091, 'attribue', 'restante'),
(61, '0000013', 1, '', 4091, 'attribue', 'restante'),
(62, '0000014', 1, '', 4091, 'attribue', 'restante'),
(63, '0000014', 1, '', 4091, 'attribue', 'restante'),
(64, '0000015', 1, '', 4091, 'attribue', 'restante'),
(65, '0000015', 1, '', 4091, 'attribue', 'restante'),
(66, '0000016', 1, '', 4091, 'attribue', 'restante'),
(67, '0000016', 1, '', 4091, 'attribue', 'restante'),
(68, '0000017', 1, '', 4091, 'attribue', 'restante'),
(69, '0000017', 1, '', 4091, 'attribue', 'restante'),
(70, '0000018', 1, '', 4091, 'attribue', 'restante'),
(71, '0000018', 1, '', 4091, 'attribue', 'restante'),
(72, '0000019', 1, '', 4091, 'attribue', 'restante'),
(73, '0000019', 1, '', 4091, 'attribue', 'restante'),
(74, '0000020', 1, '', 4091, 'attribue', 'restante'),
(75, '0000020', 1, '', 4091, 'attribue', 'restante'),
(80, '0000023', 2, '7ESnK', 4091, 'attribue', 'vendue'),
(81, '0000023', 2, '7ESnK', 4091, 'attribue', 'vendue'),
(82, '0000024', 2, 'ol@3k', 4091, 'attribue', 'vendue'),
(83, '0000024', 2, 'ol@3k', 4091, 'attribue', 'vendue'),
(84, '0000025', 2, 'B7dct', 4091, 'attribue', 'vendue'),
(85, '0000025', 2, 'B7dct', 4091, 'attribue', 'vendue'),
(86, '0000026', 2, '', 4091, 'attribue', 'restante'),
(87, '0000026', 2, '', 4091, 'attribue', 'restante'),
(88, '0000027', 2, '', 4091, 'attribue', 'restante'),
(89, '0000027', 2, '', 4091, 'attribue', 'restante'),
(90, '0000028', 2, '', 4091, 'attribue', 'restante'),
(91, '0000028', 2, '', 4091, 'attribue', 'restante'),
(92, '0000029', 2, '', 4091, 'attribue', 'restante'),
(93, '0000029', 2, '', 4091, 'attribue', 'restante'),
(94, '0000030', 2, '', 4091, 'attribue', 'restante'),
(95, '0000030', 2, '', 4091, 'attribue', 'restante'),
(100, '0000033', 3, '7ESnK', 4091, 'attribue', 'vendue'),
(101, '0000033', 3, '7ESnK', 4091, 'attribue', 'vendue'),
(102, '0000034', 3, 'ol@3k', 4091, 'attribue', 'vendue'),
(103, '0000034', 3, 'ol@3k', 4091, 'attribue', 'vendue'),
(104, '0000035', 3, 'B7dct', 4091, 'attribue', 'vendue'),
(105, '0000035', 3, 'B7dct', 4091, 'attribue', 'vendue'),
(106, '0000036', 3, '', 4091, 'attribue', 'restante'),
(107, '0000036', 3, '', 4091, 'attribue', 'restante'),
(108, '0000037', 3, '', 4091, 'attribue', 'restante'),
(109, '0000037', 3, '', 4091, 'attribue', 'restante'),
(110, '0000038', 3, '', 4091, 'attribue', 'restante'),
(111, '0000038', 3, '', 4091, 'attribue', 'restante'),
(112, '0000039', 3, '', 4091, 'attribue', 'restante'),
(113, '0000039', 3, '', 4091, 'attribue', 'restante'),
(114, '0000040', 3, '', 4091, 'attribue', 'restante'),
(115, '0000040', 3, '', 4091, 'attribue', 'restante');

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

-- --------------------------------------------------------

--
-- Structure de la table `categorie_vehicule`
--

CREATE TABLE `categorie_vehicule` (
  `id_cat` int(11) NOT NULL,
  `libelle_categorie` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_vehicule`
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
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(10) NOT NULL,
  `date_commande` date NOT NULL,
  `matricule_intermediaire` int(11) NOT NULL,
  `nombre_attestation_verte` int(255) DEFAULT NULL,
  `nombre_attestation_jaune` int(255) DEFAULT NULL,
  `nombre_attestation_cedeao` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Déchargement des données de la table `conducteur_vehicule`
--

INSERT INTO `conducteur_vehicule` (`id_cond`, `nom_conducteur`, `prenom_conducteur`, `annee_permis`, `duree_conduite`) VALUES
('5d1f7debb5e93', 'FAYE', 'AMADOU', '', ''),
('5d1f7f4650509', 'DIENG', 'OULIMATA', '', ''),
('5d1f82ba32177', 'nom prospect', 'prenom prospect', '', '');

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
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id_contenir`, `lim_gant`, `franchise`, `prime_brute`, `prime_prorata`, `garantie_id_garantie`, `police_id_police`) VALUES
('0ihka7n', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d1f7debb5e93'),
('1ipWz2@', '1000000', '0', '6000', '3150', 12, '5d1f7f4650509'),
('2X56y52', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d1f7f4650509'),
('5d1f82ba39b57', 'ILLIMITE', '0', '51078', '4469', 1, '5d1f82ba32177'),
('5d1f82ba3d847', '0', '0', '0', '0', 4, '5d1f82ba32177'),
('5d1f82d392fa3', 'ILLIMITE', '0', '51078', '8938', 1, '5d1f82ba32177'),
('5d1f82d396c93', '0', '0', '0', '0', 4, '5d1f82ba32177'),
('adplBBj', '0', '36000', '3000', '787', 5, '5d1f7debb5e93'),
('CoYC5qY', '200000', '0', '6000', '1575', 3, '5d1f7debb5e93'),
('dr1uCBp', '0', '0', '5000', '1312.5', 4, '5d1f7debb5e93'),
('f3fCliy', 'ILLIMITE', '0', '51078', '13407', 1, '5d1f7debb5e93'),
('iz8Xfde', 'ILLIMITE', '0', '51078', '26815', 1, '5d1f7f4650509'),
('odCdmBz', '1000000', '0', '6000', '1575', 12, '5d1f7debb5e93'),
('s9A3xwr', '0', '0', '20000', '5250', 6, '5d1f7debb5e93');

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
-- Déchargement des données de la table `decompte_prime`
--

INSERT INTO `decompte_prime` (`id_dp`, `taxe`, `accessoire`, `fond_garantie`, `prime_nette`, `prime_totale`) VALUES
('5d1f7debb5e93', 2419, 2000, 318, 22187, 26924),
('5d1f7f4650509', 3197, 2000, 670, 29965, 35832),
('5d1f82ba32177', 647, 2000, 111, 4469, 7227);

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `id_garantie` int(11) NOT NULL,
  `libelle_garantie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `garantie`
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
-- Déchargement des données de la table `intermediaire`
--

INSERT INTO `intermediaire` (`matricule`, `nom`, `prenom`, `adresse`, `tel`, `email`, `mdp`, `role`, `actived`) VALUES
(401, 'Mboup', 'Fallou', 'liberte 6 extension', '774808682', 'fallou.mboup@sahamassurance.com', '$2y$10$anCfE8WNL6NDBFQCWl6YFuzaqhs8qEGfWONpzROCi8xW5vJWfYTJ6', 1, 1),
(4000, 'ndiaye', 'diarra', 'parcelles', '775201899', 'diarra@gmail.com', '$2y$10$m.4Phi4.dFlkZSmpGjOrJ.PqXdd1KfxP.MORn6yyGe26Go79mWLl.', 2, 1),
(4022, 'faye', 'amadou', 'sipres', '775420036', 'am@gmail.com', '$2y$10$vUB/JUeJn1OGs..KIcSZ5.H5BJYr3w6W4QdjCezOHuK3h5YEWGEGq', 2, 1),
(4091, 'mbacke', 'samb', 'pikine', '778563256', 'mbacke@saham.com', '$2y$10$QPSZpcAG0WN/c4Hl9Mccnu1eXgXGtE9wNSsJENrBeFxa4uKe.g00K', 2, 1);

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
-- Déchargement des données de la table `periode_garantie`
--

INSERT INTO `periode_garantie` (`id_periode`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `duree`) VALUES
('5d1f7debb5e93', '2019-07-05', '2019-10-04', '08:00:00', '23:59:00', '3'),
('5d1f7f4650509', '2019-07-05', '2020-01-04', '08:00:00', '23:59:00', '6'),
('5d1f82ba32177', '2019-07-05', '2019-08-04', '08:00:00', '23:59:00', '1');

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
  `etat` varchar(10) DEFAULT NULL,
  `intermediaire_matricule` int(11) NOT NULL,
  `conducteur_vehicule_id_cond` varchar(16) DEFAULT NULL,
  `periode_garantie_id_periode` varchar(16) DEFAULT NULL,
  `vehicule_id_vehicule` varchar(16) NOT NULL,
  `decompte_prime_id_dp` varchar(16) NOT NULL,
  `red_maj_id_red_maj` varchar(16) NOT NULL,
  `assure_id_assure` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `police`
--

INSERT INTO `police` (`id_police`, `num_police`, `date_police`, `numFacture`, `attestation`, `validation`, `etat`, `intermediaire_matricule`, `conducteur_vehicule_id_cond`, `periode_garantie_id_periode`, `vehicule_id_vehicule`, `decompte_prime_id_dp`, `red_maj_id_red_maj`, `assure_id_assure`) VALUES
('5d1f7debb5e93', '41000001', '2019-07-05 16:42:19', '41000001-2019-40910000', '0000023', 1, 'En cours', 4091, '5d1f7debb5e93', '5d1f7debb5e93', '5d1f7debb5e93', '5d1f7debb5e93', '5d1f7debb5e93', '5d1f7debb5e93'),
('5d1f82ba32177', '4091/41000001', '2019-07-05 17:02:50', '41000001-2019-40910001', '0000025', 1, 'En cours', 4091, '5d1f82ba32177', '5d1f82ba32177', '5d1f82ba32177', '5d1f82ba32177', '5d1f82ba32177', '5d1f82ba32177');

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
-- Déchargement des données de la table `red_maj`
--

INSERT INTO `red_maj` (`id_red_maj`, `pourcentageBC`, `bonus_rc`, `pourcentageRC`, `reduc_com`) VALUES
('5d1f7debb5e93', 5, 670, 10, 1049),
('5d1f7f4650509', 0, 0, 0, 0),
('5d1f82ba32177', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
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
  `codeformule` int(11) NOT NULL DEFAULT 1,
  `typecontrat` varchar(5) NOT NULL DEFAULT 'F',
  `naturecontrat` varchar(5) NOT NULL DEFAULT 'N',
  `codezone` varchar(5) NOT NULL DEFAULT '1',
  `qualite` varchar(5) NOT NULL DEFAULT '1',
  `codeville` varchar(5) NOT NULL DEFAULT '0',
  `codeprofession` int(11) NOT NULL DEFAULT 0,
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
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `libelle` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_attestation`
--

CREATE TABLE `type_attestation` (
  `id_type` int(10) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_attestation`
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
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `marque`, `type`, `immatriculation`, `puissance`, `energie`, `charge_utile`, `places`, `genre`, `chassis`, `cylindre`, `date_mec`, `valeur_neuve`, `valeur_venale`, `nom_chauffeur`, `categorie_vehicule_id_cat`) VALUES
('5d1f7debb5e93', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '1000000', 'FAYE', 1),
('5d1f7f4650509', 'BMW', 'X5', 'DK-9874-BK', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '10000000', '5000000', 'DIENG', 1),
('5d1f82ba32177', 'PEUGEOT', '404', 'DK-9874-BK', '10', 'essence', 'Break', 2, '', 'N/A', 'N/A', '2017-06-01', '10000000', '5000000', 'KOUNDOUL', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id_annulation`),
  ADD UNIQUE KEY `id_annulation_2` (`id_annulation`),
  ADD KEY `id_annulation` (`id_annulation`),
  ADD KEY `fk_police` (`id_police`),
  ADD KEY `fk_auteur` (`matricule_auteur`);

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
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annulation`
--
ALTER TABLE `annulation`
  MODIFY `id_annulation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

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
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD CONSTRAINT `fk_auteur` FOREIGN KEY (`matricule_auteur`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police` FOREIGN KEY (`id_police`) REFERENCES `police` (`id_police`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 28 juin 2019 à 19:44
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

--
-- Déchargement des données de la table `annulation`
--

INSERT INTO `annulation` (`id_annulation`, `id_police`, `code_intermediaire`, `motif_annulation`, `etat_annulation`, `date_annulation`, `matricule_auteur`) VALUES
(9, '5d139acc46f16', 4091, 'Retour', 'AnnulÃ©', '2019-06-28 14:51:03', 4091),
(10, '5d15efc577759', 4091, 'Erreur de saisie', 'AnnulÃ©', '2019-06-28 15:04:56', 4091);

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
('5d139acc46f16', 'DIALLO', 'ABDOULAYE', 'PARCELES', '774585588', 'DIALLO@GMAIL.COM'),
('5d139b132e870', 'NDIAYE', 'DIARRA', 'PARCELLES', '778541025', 'NDIAYE@GMAIL.COM'),
('5d1480739f31f', 'DIOP', 'DIOR', 'PARCELLES', '775210855', 'DIOP@GMAIL.COM'),
('5d14ac7c66078', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d14ae3d31488', 'FALL', 'AMADOU', 'PARCELLES', '775241186', 'FALL@GMAIL.COM'),
('5d15ef2795f83', 'FAYE', 'DIOR', 'PARCELLES', '775412058', 'FAYE@GMAIL.COM'),
('5d15ef7b5cca2', 'DIOP', 'KHADI', 'PARCELLES', '785410259', 'DIOP@GMAIL.COM'),
('5d15efc577759', 'DIA', 'FALLA', 'SIPRES', '785410258', 'DIA@GMAIL.COM');

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
-- Déchargement des données de la table `attestation`
--

INSERT INTO `attestation` (`id_attestation`, `numero_attestation`, `id_type`, `id_vente`, `intermediaire`, `etat_actuel`, `etat_sortie`) VALUES
(411, '0000051', 3, NULL, 4091, 'attribue', 'vendue'),
(412, '0000001', 1, NULL, 4091, 'attribue', 'restante'),
(413, '0000002', 1, NULL, 4091, 'attribue', 'restante'),
(414, '0000003', 1, NULL, 4091, 'attribue', 'restante'),
(415, '0000004', 1, NULL, 4091, 'attribue', 'restante'),
(416, '0000005', 1, NULL, 4091, 'attribue', 'restante'),
(417, '0000006', 1, NULL, 4091, 'attribue', 'restante'),
(418, '0000007', 1, NULL, 4091, 'attribue', 'restante'),
(419, '0000008', 1, NULL, 4091, 'attribue', 'restante'),
(420, '0000009', 1, NULL, 4091, 'attribue', 'restante'),
(421, '0000010', 1, NULL, 4091, 'attribue', 'restante'),
(422, '0000011', 1, NULL, 4091, 'attribue', 'restante'),
(423, '0000012', 1, NULL, 4091, 'attribue', 'restante'),
(424, '0000013', 1, NULL, 4091, 'attribue', 'restante'),
(425, '0000014', 1, NULL, 4091, 'attribue', 'restante'),
(426, '0000015', 1, NULL, 4091, 'attribue', 'restante'),
(427, '0000016', 1, NULL, 4091, 'attribue', 'restante'),
(428, '0000017', 1, NULL, 4091, 'attribue', 'restante'),
(429, '0000018', 1, NULL, 4091, 'attribue', 'restante'),
(430, '0000019', 1, NULL, 4091, 'attribue', 'restante'),
(431, '0000020', 1, NULL, 4091, 'attribue', 'restante'),
(432, '0000021', 2, NULL, 4091, 'attribue', 'vendue'),
(433, '0000022', 2, 'NULL', 4091, 'attribue', 'vendue'),
(434, '0000023', 2, NULL, 4091, 'attribue', 'restante'),
(435, '0000024', 2, 'dFtUp', 4091, 'attribue', 'vendue'),
(436, '0000025', 2, 'Heyw8', 4091, 'attribue', 'vendue'),
(437, '0000026', 2, NULL, 4091, 'attribue', 'restante'),
(438, '0000027', 2, NULL, 4091, 'attribue', 'restante'),
(439, '0000028', 2, NULL, 4091, 'attribue', 'restante'),
(440, '0000029', 2, NULL, 4091, 'attribue', 'restante'),
(441, '0000030', 2, NULL, 4091, 'attribue', 'restante'),
(442, '0000031', 2, NULL, 4091, 'attribue', 'restante'),
(443, '0000032', 3, 'NULL', 4091, 'attribue', 'vendue'),
(444, '0000033', 3, 'Heyw8', 4091, 'attribue', 'vendue'),
(445, '0000034', 3, NULL, 4091, 'attribue', 'restante'),
(446, '0000035', 3, 'dFtUp', 4091, 'attribue', 'vendue'),
(447, '0000036', 3, NULL, 4091, 'attribue', 'restante'),
(448, '0000037', 3, NULL, 4091, 'attribue', 'restante'),
(449, '0000038', 3, NULL, 4091, 'attribue', 'restante'),
(450, '0000039', 3, NULL, 4091, 'attribue', 'restante'),
(451, '0000040', 3, NULL, 4091, 'attribue', 'restante'),
(452, '0000041', 3, NULL, 4091, 'attribue', 'restante'),
(453, '0000042', 3, NULL, 4091, 'attribue', 'restante');

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

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id_commande`, `date_commande`, `matricule_intermediaire`, `nombre_attestation_verte`, `nombre_attestation_jaune`, `nombre_attestation_cedeao`) VALUES
(5, '2019-06-27', 4091, 5, 4, 2);

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
('5d139acc46f16', 'DIALLO', 'ABDOULAYE', '', ''),
('5d139b132e870', 'NDIAYE', 'DIARRA', '', ''),
('5d1480739f31f', 'DIOP', 'DIOR', '', ''),
('5d14ac7c66078', 'nom prospect', 'prenom prospect', '', ''),
('5d14ae3d31488', 'FALL', 'AMADOU', '', ''),
('5d15ef2795f83', 'FAYE', 'DIOR', '', ''),
('5d15ef7b5cca2', 'DIOP', 'KHADI', '', ''),
('5d15efc577759', 'DIA', 'FALLA', '', '');

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
('0Xdlgq0', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d139b132e870'),
('5d13a20a19816', 'ILLIMITE', '0', '45181', '23720', 1, '5d13a20a08e72'),
('5d13a20a19fe6', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d13a20a08e72'),
('5d13a20a1a3ce', '0', '0', '0', '0', 4, '5d13a20a08e72'),
('5d14aae3f1653', 'ILLIMITE', '0', '51078', '26815', 1, '5d14aae3e2808'),
('5d14aae3f397c', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d14aae3e2808'),
('5d14aae4002f4', '200000', '0', '6000', '3150', 3, '5d14aae3e2808'),
('5d14aae400ac4', '0', '0', '15000', '7875', 4, '5d14aae3e2808'),
('5d14aae402a05', '0', '36000', '9000', '4725', 5, '5d14aae3e2808'),
('5d14aae402ded', '0', '0', '20000', '10500', 6, '5d14aae3e2808'),
('5d14aae4035bd', '0', '0', '275000', '144375', 7, '5d14aae3e2808'),
('5d14aae4039a5', '2000000', '0', '4800', '2520', 13, '5d14aae3e2808'),
('5d14ac7c75694', 'ILLIMITE', '0', '65677', '34480', 1, '5d14ac7c66078'),
('5d14ac7c75a7c', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d14ac7c66078'),
('5d14ac7c7895d', '0', '0', '0', '0', 4, '5d14ac7c66078'),
('5j2rqYw', '200000', '0', '6000', '3150', 3, '5d14ae3d31488'),
('5Xwbb3t', '0', '36000', '9000', '4725', 5, '5d139acc46f16'),
('9aajdg5', '0', '0', '15000', '7875', 4, '5d14ae3d31488'),
('a2lY530', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d15efc577759'),
('AgefW1y', '0', '0', '20000', '10500', 6, '5d14ae3d31488'),
('Awfmgln', '0', '0', '20000', '10500', 6, '5d1480739f31f'),
('c3mW6Xo', '0', '0', '20000', '10500', 6, '5d139acc46f16'),
('Crh8x5W', '200000', '0', '6000', '3150', 3, '5d1480739f31f'),
('ggchbss', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d139acc46f16'),
('irdjicn', '0', '0', '20000', '10500', 6, '5d15efc577759'),
('it7xy31', '0', '0', '15000', '7875', 4, '5d139acc46f16'),
('jqeeyd0', 'ILLIMITE', '0', '51078', '26815', 1, '5d14ae3d31488'),
('jw74yjk', '0', '36000', '9000', '4725', 5, '5d14ae3d31488'),
('kdY5mdC', 'ILLIMITE', '0', '51078', '26815', 1, '5d139acc46f16'),
('lCshgX1', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d14ae3d31488'),
('m6hCAqh', 'ILLIMITE', '0', '51078', '26815', 1, '5d1480739f31f'),
('mpzpixX', '0', '0', '15000', '7875', 4, '5d1480739f31f'),
('qBoXh2o', '1000000', '0', '6000', '3150', 12, '5d139acc46f16'),
('shxAbtn', 'ILLIMITE', '0', '51078', '26815', 1, '5d139b132e870'),
('tgxpblZ', '0', '0', '15000', '7875', 4, '5d15efc577759'),
('vpy9032', '0', '36000', '9000', '4725', 5, '5d1480739f31f'),
('x3Zr5ah', '1000000', '0', '6000', '3150', 12, '5d1480739f31f'),
('YAZl8rA', '0', '36000', '9000', '4725', 5, '5d15efc577759'),
('ydrZ8ee', '200000', '0', '6000', '3150', 3, '5d15efc577759'),
('yexo7hd', '0', '0', '18000', '9450', 14, '5d14ae3d31488'),
('yuq7Y5@', 'ILLIMITE', '0', '51078', '26815', 1, '5d15efc577759'),
('yzp2ns8', '0', '36000', '6000', '3150', 5, '5d139b132e870'),
('ZnkY0vm', '2000000', '0', '12000', '6300', 13, '5d15efc577759'),
('zygvx3z', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d1480739f31f');

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
('5d139acc46f16', 4976, 2000, 603, 47759, 55338),
('5d139b132e870', 3197, 2000, 670, 29965, 35832),
('5d1480739f31f', 5100, 2000, 636, 48995, 56731),
('5d14ac7c66078', 3648, 2000, 862, 34480, 40990),
('5d14ae3d31488', 6239, 3000, 636, 59390, 69265),
('5d15ef2795f83', 5806, 3000, 603, 55057, 64466),
('5d15ef7b5cca2', 5926, 3000, 603, 56264, 65793),
('5d15efc577759', 5643, 3000, 603, 53429, 62675);

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
(403, 'Dioug', 'dga', 'dakar', '768521463', 'dga@saham.com', '$2y$10$0p0eJ0t3Fgm/IVVU9W2UdO9DAxfn/mpR2a7yqoAhzX7F3vBYeC67C', 1, 1),
(4032, 'faye', 'amadou', 'parcelles', '785412588', 'faye@saham.com', '$2y$10$UmRggmkiuNDVdv3mxm.bweD5SRyy6ji2gstFwVMmSngBA4HJiG25y', 2, 1),
(4091, 'mbacke', 'samb', 'pikine', '778563256', 'mbacke@saham.com', '$2y$10$QPSZpcAG0WN/c4Hl9Mccnu1eXgXGtE9wNSsJENrBeFxa4uKe.g00K', 2, 1),
(4095, 'Diop', 'Khadi', 'sipres', '785412263', 'diopkhadi@gmail.com', '$2y$10$hOBhwHX6FKPqfWi1V7IQkuYP/m0X8ts1mxioOn9cYfTgD5Y4N73le', 2, 0),
(4595, 'Diop', 'Fallou', 'Parcelles', '785412263', 'd@gmail.com', 'passer123', 2, 1),
(4820, 'dieng', 'ibrahima', 'foire', '784521103', 'ibrahima@gmail.com', '$2y$10$wH1sWnYU06UGGR85XrGzjOEcpYhPjqdPOujNCssQqnZqHByNwGs4e', 2, 0),
(9841, 'Fall', 'Ibrahima', 'sipres', '785412036', 'fall@gmail.com', '$2y$10$nuZj5IqX897EEtsinaGjLeXp4Wg0KpwwchkdQaKrV0dVd8hJbvw2S', 2, 0),
(40000, 'mbaye', 'fatou', 'parcelles', '778471524', 'mbaye@saham.com', '$2y$10$XyoPXcbgCBGGtH6TRK9gY.vzOpOAs/mMukMoFs6bQCt0mLvwPPU7O', 2, 1);

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
('5d139acc46f16', '2019-06-26', '2019-12-25', '08:00:00', '23:59:00', '6'),
('5d139b132e870', '2019-06-26', '2019-12-25', '08:00:00', '23:59:00', '6'),
('5d1480739f31f', '2019-06-27', '2019-12-26', '08:00:00', '23:59:00', '6'),
('5d14ac7c66078', '2019-06-27', '2019-12-26', '08:00:00', '23:59:00', '6'),
('5d14ae3d31488', '2019-06-27', '2019-12-26', '08:00:00', '23:59:00', '6'),
('5d15ef2795f83', '2019-06-28', '2019-12-27', '08:00:00', '23:59:00', '6'),
('5d15ef7b5cca2', '2019-06-28', '2019-12-27', '08:00:00', '23:59:00', '6'),
('5d15efc577759', '2019-06-28', '2019-12-27', '08:00:00', '23:59:00', '6');

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
('5d139acc46f16', '4091/41000001', '2019-06-26 16:18:20', '41000001-2019-40910000', '0000023', 1, 'AnnulÃ©', 4091, '5d139acc46f16', '5d139acc46f16', '5d139acc46f16', '5d139acc46f16', '5d139acc46f16', '5d139acc46f16'),
('5d139b132e870', '4091/41000002', '2019-06-25 16:19:31', '41000002-2019-40910001', '0000024', 1, 'En cours', 4091, '5d139b132e870', '5d139b132e870', '5d139b132e870', '5d139b132e870', '5d139b132e870', '5d139b132e870'),
('5d14ac7c66078', '4091/41000003', '2019-06-27 11:46:04', '41000003-2019-40910002', 'NULL', 0, 'En cours', 4091, '5d14ac7c66078', '5d14ac7c66078', '5d14ac7c66078', '5d14ac7c66078', '5d14ac7c66078', '5d14ac7c66078'),
('5d14ae3d31488', '4091/41000004', '2019-06-27 11:53:33', '41000004-2019-40910003', '0000025', 1, 'En cours', 4091, '5d14ae3d31488', '5d14ae3d31488', '5d14ae3d31488', '5d14ae3d31488', '5d14ae3d31488', '5d14ae3d31488'),
('5d15efc577759', '4091/41000005', '2019-06-28 10:45:25', '41000005-2019-40910004', '0000026', 1, 'AnnulÃ©', 4091, '5d15efc577759', '5d15efc577759', '5d15efc577759', '5d15efc577759', '5d15efc577759', '5d15efc577759');

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
('5d139acc46f16', 10, 2681, 10, 2625),
('5d139b132e870', 0, 0, 0, 0),
('5d1480739f31f', 5, 1340, 20, 5880),
('5d14ac7c66078', 0, 0, 0, 0),
('5d14ae3d31488', 5, 1340, 5, 1785),
('5d15ef2795f83', 10, 2681, 5, 1627),
('5d15ef7b5cca2', 10, 2681, 10, 3570),
('5d15efc577759', 10, 2681, 10, 3255);

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
('5d139acc46f16', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '3000000', 'DIALLO', 1),
('5d139b132e870', 'PEUGEOT', '206', 'DK-9587-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '2000000', 'NDIAYE', 1),
('5d1480739f31f', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '3000000', 'DIOP', 1),
('5d14ac7c66078', 'CITROEN', 'C4', 'DK-8547-BB', '11', 'essence', 'Break', 2, ' PAPP', 'N/A', 'N/A', '2017-06-01', '3000000', '1000000', 'nom prospect', 1),
('5d14ae3d31488', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2013-07-25', '5000000', '3000000', 'FALL', 1),
('5d15ef2795f83', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '3000000', 'FAYE', 1),
('5d15ef7b5cca2', 'CITROEN', 'C5', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '3000000', 'DIOP', 1),
('5d15efc577759', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'Break', 5, ' PAPP', 'N/A', 'N/A', '2017-06-01', '5000000', '3000000', 'DIA', 1);

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
  MODIFY `id_annulation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;

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
  MODIFY `id_commande` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

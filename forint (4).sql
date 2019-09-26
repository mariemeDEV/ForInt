-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 26 sep. 2019 à 18:56
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
-- Base de données :  `forint`
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
(45, '5d566bfc87fc9', 4091, 'Erreur sur immatriculation vehicule', 'Annule', '2019-08-19 11:26:11', 401),
(46, '5d5fd2f02ab6a', 4091, 'Erreur sur pÃ©riode de garantie', 'Annule', '2019-08-23 13:50:54', 4091),
(47, '5d63c769c91ae', 4091, 'Refus client', 'Annule', '2019-08-26 13:54:19', 4091),
(48, '5d6524c71a21f', 4201, 'Autre', 'Annule', '2019-08-27 14:47:56', 4201),
(49, '5d666163c629e', 4091, 'Autre', 'Annule', '2019-08-28 13:17:20', 401),
(50, '5d66a6f24ba16', 4091, 'Autre', 'A annuler', '2019-08-28 18:14:15', 4091),
(51, '5d713833016fc', 4201, 'Erreur sur date effet', 'Annule', '2019-09-05 18:47:13', 401),
(52, '5d71398447cbd', 4201, 'Doublons', 'Annule', '2019-09-18 14:45:14', 401),
(53, '5d7287cf86cdd', 4201, 'Doublons', 'Annule', '2019-09-18 14:57:34', 401),
(54, '5d7278f92b997', 4250, 'Erreur sur date effet', 'Annule', '2019-09-20 18:03:29', 401),
(55, '5d8b53f60b911', 4091, 'Erreur sur nom/prenom assurÃ©', 'A annuler', '2019-09-25 13:55:04', 4091),
(56, '5d8b661680347', 4091, 'Erreur sur nom/prenom assurÃ©', 'A annuler', '2019-09-25 15:09:34', 4091),
(57, '5d8b7babadbd0', 4091, 'Erreur sur date effet', 'A annuler', '2019-09-25 16:40:34', 4091);

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
('5d4bef5e05f4a', 'NDIAYE', 'IBRAHIMA', 'PARCELLES', '775402218', 'NDIAYE@GMAIL.COM'),
('5d4bef949c45a', 'FALL', 'MASOUR', 'SIPRES', '775201189', 'FALL@GMAIL.COM'),
('5d4befcb1c2b9', 'DIOP', 'LALIA', 'FOIRE', '775840021', 'DIOP@GMAIL.COM'),
('5d4bf000a3a47', 'DJIBRIL', 'NDIAYE', 'PARCELLES', '775402215', 'NDIAYE@GMAIL.COM'),
('5d4bf03d15c61', 'DIENG', 'FALLA', 'PARCELLES', '775840021', 'DIENG@GMAIL.COM'),
('5d53cfa058ecb', 'DIOP', 'MAYASSINE', 'PARCELLES', '775840021', 'DIOP@GMAIL.COM'),
('5d566bfc87fc9', 'FAYE', 'FAMA', 'PARCELLES', '775402215', 'FAYE@GMAL.COM'),
('5d5fd2f02ab6a', 'fall', 'souleye', '', '', ''),
('5d5fd3851e67b', 'DIOP', 'MAMADOU', 'PARCELLES', '775402215', 'DIOP@GMAIL.COM'),
('5d5fd6cfaa3ab', 'SAGNE', 'CHEIKH MOUHAMADOU OUSSEYNOU', '204 GOLF NORD', '', ''),
('5d6006b5882e5', 'KA', 'HABY ', 'CITE DES ENSEIGNANTS N21', '', ''),
('5d600aa84b7be', 'KANE', 'FALLOU', 'PARCELLES', '774445555', ''),
('5d610a3229507', 'CISSE', 'COBEYE', 'HLM GRAND YOFF N312', '', ''),
('5d6163e7ec519', 'SAMBOU', 'EMMANUEL ALFONSE', 'SICAP', '', ''),
('5d616a438de64', 'MENDY', 'DAVID', 'QRT GAZELLE OUEST PIKINE VILLA N52', '', ''),
('5d616d6a7c14d', 'SENE', 'IBRAHIMA', 'GUINAW RAIL SUD', '', ''),
('5d62acd295c4f', 'NDIAYE', 'FAMBAYE', 'CITE PAPA GUEYE FALL KEUR MASSAR', '', ''),
('5d62ecf32b551', 'NDIAYE', 'MAMADOU', 'OUEST FOIRE CITE MAME N32', '', ''),
('5d63c769c91ae', 'COUNDOUL', 'MARIEME', 'DFFG', '', ''),
('5d63ca4c4117f', 'BAO', 'AMINATOU', '', '', ''),
('5d650efdab7c1', 'FALL', 'OUSMANE', 'GUEDIAWAYE ANGLE MOUSSE', '', ''),
('5d65182fb33f1', 'NDAO', 'IBRAHIMA', '40 GOLF NORD EX BARRY ET LY', '', ''),
('5d6524c71a21f', 'MOUSTAPHA ', 'MBEGUE', 'RUFISQUE', '773215584', ''),
('5d65334705afe', 'FOFANA ', 'THIERNO SAIDOU NOUROU', 'RUFISQUE', '774185370', ''),
('5d663c8ebfbe1', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d664f33c355e', 'BA', 'LICKA', 'MBODE 3 PLLE N1085 GUEDIAWAYE', '', ''),
('5d666163c629e', 'DIOP', 'FATOU', '', '', ''),
('5d6665c151d89', 'SARR', 'TAPHA', 'DAKAR', '', ''),
('5d666654b0d4c', 'DIOUF', 'DIAKHATE', 'PLLE ASSAINIES U 14 N236', '', ''),
('5d667472182ed', 'FALL', 'MARIETOU', '', '', ''),
('5d6677fd8c0d0', 'BO', 'NDEYE MARIETOU', '', '', ''),
('5d667be0b4780', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d667ce26e444', 'FAYE', 'IBRAHIM', '', '', ''),
('5d66809a73d9c', 'GOGO', 'TRANSPORT SERVICES', 'NGOR ALMADIES', '', ''),
('5d66869910504', 'NDIAYE', 'PAPA AMATH', 'DIEUPPEUL 4 VILLA N2979', '', ''),
('5d669de96e7a0', 'FAYA', 'MAREME', '', '', ''),
('5d66a6f24ba16', 'FALL', 'MARIAMA', '', '775402215', ''),
('5d66a9851fc5b', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d6a6fa3950a2', 'BASSIROU', 'LO', 'RUFSQUE', '772122756', ''),
('5d6fb326cd2a4', 'MOUHAMADOU', 'SALL', 'RUFISQUE', '773540351', ''),
('5d6fe16e16838', 'FALL', 'KHDI', 'PARCELLES', '775402215', 'FALL@GMAIL.COM'),
('5d6feb4e3e682', 'SAMB', 'MAME JACQUE AMB', 'LIBERTE 6', '', ''),
('5d6ff2b3eea97', 'DIOME', 'SERIGNE SALIOU', 'HLM4 VILLA N87', '', ''),
('5d71087ba679b', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d713540e3744', 'DIATTOU NDIAYE ', 'AZZEDIE', 'DAKAR', '771130772', ''),
('5d713833016fc', 'DIATTOU NDIAYE', 'AZZEDINE', 'DAKAR', '771130772', ''),
('5d71398447cbd', 'DIATTOU NDAYE ', 'AZZEDINE', 'DAKAR', '771130772', ''),
('5d71475699c84', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d7245a15f730', 'DIOP', 'BINTOU', 'P ASSAINIES U11', '', ''),
('5d7278f92b997', 'GAYE', 'KHADIM', '132HLM FASS', '773105699', ''),
('5d727b6fc7fa1', 'GAYE', 'KHADIM', '132 HLM FASS', '773105699', ''),
('5d7284c8de4de', 'BALDE', 'MOUHAMADOU', 'RUFISQUE', '773540351', ''),
('5d7287cf86cdd', 'BALDE', 'MOUHAMADOU', 'RUSFIQUE', '773540351', ''),
('5d7292beb82c4', 'NDIAYE', 'FATOU', '', '', ''),
('5d7298df259f1', 'FAYE', 'NABOU', '', '', ''),
('5d73b2077b8f1', 'CISSE', 'CHEIKH', 'SICAP FOIRE VILLA N10658', '', ''),
('5d762f585ac2e', 'FAYE', 'MARIAMA', 'PARCELLES', '778540215', 'FAYE@GMAIL.COM'),
('5d766b687a3d3', 'FAYE', 'MANSOUR', 'PARCELLES', '755421', 'FAYE@GMAIL.COM'),
('5d78c76a7fbcf', 'faye', 'IBRAHIMA', 'PARCELLES', '775402218', 'FAYE@GMAIL.COM'),
('5d78c97173843', 'NDIAYE', 'DIADJI', 'PARCELLES', '775548211', 'NDIAYE@GMAIL.COM'),
('5d78ca380dd4b', 'fall', 'amina', 'PARCELLES', '775842201', 'FALL@GMAUIL.COM'),
('5d78cee57376a', 'FALL', 'DAOUDA', '', '', ''),
('5d78cf7c85b69', 'NDIAYE', 'KHADIM', '', '', ''),
('5d78dd2877b5b', 'SOW', 'ABOUBACRY', 'TALLY DIALLO QT BOUBOU', '', ''),
('5d78e05c01b44', 'LY', 'MAMADOU ABDOULAYE', 'CAMBERENE2 N132', '', ''),
('5d7b94c8cb1c7', 'CISSE', 'NENE', 'KEUR MASSAR', '', ''),
('5d7b95f85c1bd', 'SOW', 'BOUBOU', 'THIES', '', ''),
('5d7cd7e8a93d0', 'DIOP', 'NDEYE MAGUETTE', 'SOPRIM EXTENSION N-330', '777306969', ''),
('5d80f847524bc', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d80f97c304c4', 'DIEYE', 'BALLA', 'DAKAR', '776306153', ''),
('5d8511002b1f7', 'SOW', 'FATIMATA', 'LYCEE JOHN F KENEDY', '775635706', ''),
('5d89f0d7d54e5', 'DIAGNE', 'AMADOU LAMINE', 'ZDC', '775262690', 'ALDSTRATEGIES57@YAHOO.FR'),
('5d89f426d2595', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d8a05b78ed7f', 'WILANE', 'MOUSTAPHA', 'SICAAP FOIRE', '', ''),
('5d8a077f66060', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d8b53f60b911', 'DIOP', 'MAMOUR', '', '', ''),
('5d8b573cbf202', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d8b661680347', 'DIOP', 'FATMA', '', '', ''),
('5d8b68c650a5f', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d8b7babadbd0', 'DIOP', 'FATOU', '', '', ''),
('5d8b7cd47a989', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect'),
('5d8b834b301c3', 'MASSENE ', 'NDIAYE', 'IMPOTS ET DOMAINES VILLA 135', '778540702', ''),
('5d8b84212129b', 'SOKHNA', 'ABDOULAYE', 'DAKAR', '', ''),
('5d8b89b8abc3e', 'DIA', 'IBRAHIMA', '', '', ''),
('5d8b9911979a4', 'ASNON', 'GILLES', '', '', ''),
('5d8ba2e833da6', 'FALL', 'ABDOU', 'DAKAR', '', ''),
('5d8ba9a3f382d', 'MBENGUE', 'AMADOU', 'DAKAR', '', ''),
('5d8ccd1fb148a', 'DROIT A LA VILLE', 'FONDATION', 'SC DIRECTION DE L39URBANISME', '', ''),
('5d8ce68e45f59', 'nom prospect', 'prenom prospect', 'adresse prospect', '', 'emailprospect');

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
(596, '0023926', 1, '', 4091, 'attribue', 'restante'),
(597, '0023927', 1, '', 4091, 'attribue', 'restante'),
(598, '0023928', 1, '', 4091, 'attribue', 'restante'),
(599, '0023929', 1, '', 4091, 'attribue', 'restante'),
(600, '0023930', 1, '', 4091, 'attribue', 'restante'),
(601, '0023931', 1, '', 4091, 'attribue', 'restante'),
(602, '0023932', 1, '', 4091, 'attribue', 'restante'),
(603, '0023933', 1, '', 4091, 'attribue', 'restante'),
(604, '0023934', 1, '', 4091, 'attribue', 'restante'),
(605, '0023935', 1, '', 4091, 'attribue', 'restante'),
(606, '0023936', 1, '', 4091, 'attribue', 'restante'),
(607, '0023937', 1, '', 4091, 'attribue', 'restante'),
(608, '0023938', 1, '', 4091, 'attribue', 'restante'),
(609, '0023939', 1, '', 4091, 'attribue', 'restante'),
(610, '0023940', 1, '', 4091, 'attribue', 'restante'),
(611, '0159491', 2, 'fhg97', 4091, 'attribue', 'vendue'),
(612, '0159492', 2, '0E6XT', 4091, 'attribue', 'vendue'),
(613, '0159493', 2, 'zZitA', 4091, 'attribue', 'vendue'),
(614, '0159494', 2, 'v0jKQ', 4091, 'attribue', 'vendue'),
(615, '0159495', 2, 'zzgxO', 4091, 'attribue', 'vendue'),
(616, '0159496', 2, 'OXhF6', 4091, 'attribue', 'vendue'),
(617, '0159497', 2, 'ceUOz', 4091, 'attribue', 'vendue'),
(618, '0159498', 2, 'CXOyY', 4091, 'attribue', 'vendue'),
(619, '0159499', 2, 'VYwrA', 4091, 'attribue', 'vendue'),
(620, '0159500', 2, '7wDkT', 4091, 'attribue', 'vendue'),
(621, '0159501', 2, 'jIAZ9', 4091, 'attribue', 'vendue'),
(622, '0159502', 2, '8Dhon', 4091, 'attribue', 'vendue'),
(623, '0159503', 2, '8EenC', 4091, 'attribue', 'vendue'),
(624, '0159504', 2, 'MllBF', 4091, 'attribue', 'vendue'),
(625, '0159505', 2, '7eyW3', 4091, 'attribue', 'vendue'),
(626, '0159506', 2, 'Lbm5J', 4091, 'attribue', 'vendue'),
(627, '0159507', 2, 'LTZ8@', 4091, 'attribue', 'vendue'),
(628, '0159508', 2, 'ffeDs', 4091, 'attribue', 'vendue'),
(629, '0159509', 2, '2vS51', 4091, 'attribue', 'vendue'),
(630, '0159510', 2, 'Osgym', 4091, 'attribue', 'vendue'),
(631, '0568151', 3, 'fhg97', 4091, 'attribue', 'vendue'),
(632, '0568152', 3, '0E6XT', 4091, 'attribue', 'vendue'),
(633, '0568153', 3, 'zZitA', 4091, 'attribue', 'vendue'),
(634, '0568154', 3, 'zzgxO', 4091, 'attribue', 'vendue'),
(635, '0568155', 3, 'OXhF6', 4091, 'attribue', 'vendue'),
(636, '0568156', 3, 'VYwrA', 4091, 'attribue', 'vendue'),
(637, '0568157', 3, 'CXOyY', 4091, 'attribue', 'vendue'),
(638, '0568158', 3, '7wDkT', 4091, 'attribue', 'vendue'),
(639, '0568159', 3, 'jIAZ9', 4091, 'attribue', 'vendue'),
(640, '0568160', 3, '8Dhon', 4091, 'attribue', 'vendue'),
(641, '0568161', 3, 'MllBF', 4091, 'attribue', 'vendue'),
(642, '0568162', 3, 'ceUOz', 4091, 'attribue', 'vendue'),
(643, '0568163', 3, '8EenC', 4091, 'attribue', 'vendue'),
(644, '0568164', 3, 'Lbm5J', 4091, 'attribue', 'vendue'),
(645, '0568165', 3, 'ffeDs', 4091, 'attribue', 'vendue'),
(933, '0174366', 2, 'HFTu0', 4209, 'attribue', 'vendue'),
(934, '0174367', 2, 'SoJFB', 4209, 'attribue', 'vendue'),
(935, '0174368', 2, 'nHkQx', 4209, 'attribue', 'vendue'),
(936, '0174369', 2, 'UyTFx', 4209, 'attribue', 'vendue'),
(937, '0174370', 2, 'PFMgC', 4209, 'attribue', 'vendue'),
(938, '0174371', 2, 'Ya0Hr', 4209, 'attribue', 'vendue'),
(939, '0174372', 2, 'BX3O1', 4209, 'attribue', 'vendue'),
(940, '0174373', 2, 'ymVxn', 4209, 'attribue', 'vendue'),
(941, '0174374', 2, '3jDBD', 4209, 'attribue', 'vendue'),
(942, '0174375', 2, '', 4209, 'attribue', 'restante'),
(943, '0174376', 2, 'TyMt8', 4209, 'attribue', 'vendue'),
(944, '0174377', 2, 'ir0Hc', 4209, 'attribue', 'vendue'),
(945, '0174378', 2, 'mEWQS', 4209, 'attribue', 'vendue'),
(946, '0174379', 2, 'Zqaz5', 4209, 'attribue', 'vendue'),
(947, '0174380', 2, 'IQq9n', 4209, 'attribue', 'vendue'),
(948, '0174381', 2, '', 4209, 'attribue', 'restante'),
(949, '0174382', 2, '', 4209, 'attribue', 'restante'),
(950, '0174383', 2, '', 4209, 'attribue', 'restante'),
(951, '0174384', 2, '', 4209, 'attribue', 'restante'),
(952, '0174385', 2, '', 4209, 'attribue', 'restante'),
(953, '0174386', 2, '', 4209, 'attribue', 'restante'),
(954, '0174387', 2, '', 4209, 'attribue', 'restante'),
(955, '0027364', 1, '', 4209, 'attribue', 'restante'),
(956, '0027365', 1, '', 4209, 'attribue', 'restante'),
(957, '0027366', 1, '', 4209, 'attribue', 'restante'),
(958, '0027367', 1, '', 4209, 'attribue', 'restante'),
(959, '0027368', 1, '', 4209, 'attribue', 'restante'),
(960, '0027369', 1, '', 4209, 'attribue', 'restante'),
(961, '0027370', 1, '', 4209, 'attribue', 'restante'),
(962, '0027371', 1, '', 4209, 'attribue', 'restante'),
(963, '0027372', 1, '', 4209, 'attribue', 'restante'),
(964, '0027373', 1, '', 4209, 'attribue', 'restante'),
(965, '0027374', 1, '', 4209, 'attribue', 'restante'),
(966, '0027375', 1, '', 4209, 'attribue', 'restante'),
(967, '0027376', 1, '', 4209, 'attribue', 'restante'),
(968, '0643085', 3, 'HFTu0', 4209, 'attribue', 'vendue'),
(969, '0643086', 3, 'SoJFB', 4209, 'attribue', 'vendue'),
(970, '0643087', 3, 'nHkQx', 4209, 'attribue', 'vendue'),
(971, '0643088', 3, 'UyTFx', 4209, 'attribue', 'vendue'),
(972, '0643089', 3, 'XvQXa', 4209, 'attribue', 'vendue'),
(973, '0643090', 3, '', 4209, 'attribue', 'restante'),
(974, '0643091', 3, 'PFMgC', 4209, 'attribue', 'vendue'),
(975, '0643092', 3, 'Ya0Hr', 4209, 'attribue', 'vendue'),
(976, '0643093', 3, 'BX3O1', 4209, 'attribue', 'vendue'),
(977, '0643094', 3, 'ymVxn', 4209, 'attribue', 'vendue'),
(978, '0643095', 3, '3jDBD', 4209, 'attribue', 'vendue'),
(979, '0643096', 3, '', 4209, 'attribue', 'restante'),
(980, '0643097', 3, 'TyMt8', 4209, 'attribue', 'vendue'),
(981, '0643098', 3, 'ir0Hc', 4209, 'attribue', 'vendue'),
(982, '0643099', 3, 'mEWQS', 4209, 'attribue', 'vendue'),
(983, '0643100', 3, 'Zqaz5', 4209, 'attribue', 'vendue'),
(984, '0643101', 3, 'IQq9n', 4209, 'attribue', 'vendue'),
(985, '0027249', 1, '', 4039, 'attribue', 'restante'),
(986, '0027250', 1, '', 4039, 'attribue', 'restante'),
(987, '0027251', 1, '', 4039, 'attribue', 'restante'),
(988, '0027252', 1, '', 4039, 'attribue', 'restante'),
(989, '0027253', 1, '', 4039, 'attribue', 'restante'),
(990, '0027254', 1, '', 4039, 'attribue', 'restante'),
(991, '0027156', 1, '', 4039, 'attribue', 'restante'),
(992, '0027157', 1, '', 4039, 'attribue', 'restante'),
(1003, '0650474', 3, '', 4039, 'attribue', 'restante'),
(1004, '0650475', 3, 'ktcpq', 4039, 'attribue', 'vendue'),
(1005, '0650476', 3, 'Q5rqF', 4039, 'attribue', 'vendue'),
(1006, '0650477', 3, '', 4039, 'attribue', 'restante'),
(1007, '0650478', 3, '', 4039, 'attribue', 'restante'),
(1025, '0167959', 2, '', 4227, 'attribue', 'restante'),
(1026, '0167960', 2, '', 4227, 'attribue', 'restante'),
(1027, '0167961', 2, '', 4227, 'attribue', 'restante'),
(1028, '0167962', 2, '', 4227, 'attribue', 'restante'),
(1029, '0494975', 3, '', 4227, 'attribue', 'restante'),
(1030, '0494976', 3, '', 4227, 'attribue', 'restante'),
(1031, '0494977', 3, '', 4227, 'attribue', 'restante'),
(1032, '0494978', 3, '', 4227, 'attribue', 'restante'),
(1033, '0494979', 3, '', 4227, 'attribue', 'restante'),
(1034, '0494980', 3, '', 4227, 'attribue', 'restante'),
(1035, '0494981', 3, '', 4227, 'attribue', 'restante'),
(1036, '0494982', 3, '', 4227, 'attribue', 'restante'),
(1037, '0494983', 3, '', 4227, 'attribue', 'restante'),
(1038, '0494984', 3, '', 4227, 'attribue', 'restante'),
(1039, '0494985', 3, '', 4227, 'attribue', 'restante'),
(1040, '0494986', 3, '', 4227, 'attribue', 'restante'),
(1041, '0494987', 3, '', 4227, 'attribue', 'restante'),
(1078, '0173702', 2, 'AC7Kt', 4201, 'attribue', 'vendue'),
(1079, '0173703', 2, 'aQsp2', 4201, 'attribue', 'vendue'),
(1080, '0173704', 2, '', 4201, 'attribue', 'restante'),
(1081, '0173705', 2, '', 4201, 'attribue', 'restante'),
(1082, '0173706', 2, NULL, 4201, 'attribue', 'restante'),
(1083, '0173707', 2, 'mqaJM', 4201, 'attribue', 'vendue'),
(1084, '0173708', 2, NULL, 4201, 'attribue', 'restante'),
(1085, '0173709', 2, '2wlQ8', 4201, 'attribue', 'vendue'),
(1086, '0173710', 2, NULL, 4201, 'attribue', 'restante'),
(1087, '0173711', 2, '', 4201, 'attribue', 'restante'),
(1088, '0173712', 2, '', 4201, 'attribue', 'restante'),
(1089, '0173713', 2, 'NGfIH', 4201, 'attribue', 'vendue'),
(1090, '0173714', 2, '', 4201, 'attribue', 'restante'),
(1091, '0173715', 2, '', 4201, 'attribue', 'restante'),
(1092, '0646143', 3, 'AC7Kt', 4201, 'attribue', 'vendue'),
(1093, '0646144', 3, 'aQsp2', 4201, 'attribue', 'vendue'),
(1094, '0646145', 3, '2wlQ8', 4201, 'attribue', 'vendue'),
(1095, '0646146', 3, NULL, 4201, 'attribue', 'restante'),
(1096, '0646147', 3, '', 4201, 'attribue', 'restante'),
(1097, '0646148', 3, '', 4201, 'attribue', 'restante'),
(1098, '0646149', 3, '', 4201, 'attribue', 'restante'),
(1099, '0646150', 3, '', 4201, 'attribue', 'restante'),
(1100, '0646151', 3, '', 4201, 'attribue', 'restante'),
(1101, '0646152', 3, '', 4201, 'attribue', 'restante'),
(1102, '0646153', 3, '', 4201, 'attribue', 'restante'),
(1103, '0646154', 3, '', 4201, 'attribue', 'restante'),
(1104, '0646155', 3, '', 4201, 'attribue', 'restante'),
(1105, '0646156', 3, '', 4201, 'attribue', 'restante'),
(1106, '0646157', 3, '', 4201, 'attribue', 'restante'),
(1107, '0646158', 3, '', 4201, 'attribue', 'restante'),
(1108, '0646159', 3, '', 4201, 'attribue', 'restante'),
(1109, '0646160', 3, NULL, 4201, 'attribue', 'restante'),
(1110, '0646161', 3, NULL, 4201, 'attribue', 'restante'),
(1111, '0646162', 3, 'mqaJM', 4201, 'attribue', 'vendue'),
(1112, '0646163', 3, '', 4201, 'attribue', 'restante'),
(1113, '0646164', 3, 'NGfIH', 4201, 'attribue', 'vendue'),
(1114, '0174602', 2, '', 4273, 'attribue', 'restante'),
(1115, '0174603', 2, '', 4273, 'attribue', 'restante'),
(1116, '0174604', 2, '', 4273, 'attribue', 'restante'),
(1117, '0174605', 2, '', 4273, 'attribue', 'restante'),
(1118, '0174606', 2, '', 4273, 'attribue', 'restante'),
(1119, '0174607', 2, '', 4273, 'attribue', 'restante'),
(1120, '0174608', 2, '', 4273, 'attribue', 'restante'),
(1121, '0174609', 2, '', 4273, 'attribue', 'restante'),
(1122, '0174610', 2, '', 4273, 'attribue', 'restante'),
(1123, '0174611', 2, '', 4273, 'attribue', 'restante'),
(1124, '0174612', 2, '', 4273, 'attribue', 'restante'),
(1125, '0174613', 2, '', 4273, 'attribue', 'restante'),
(1126, '0174614', 2, '', 4273, 'attribue', 'restante'),
(1127, '0174615', 2, '', 4273, 'attribue', 'restante'),
(1128, '0174616', 2, '', 4273, 'attribue', 'restante'),
(1129, '0644163', 3, '', 4273, 'attribue', 'restante'),
(1130, '0644164', 3, '', 4273, 'attribue', 'restante'),
(1131, '0644165', 3, '', 4273, 'attribue', 'restante'),
(1132, '0644166', 3, '', 4273, 'attribue', 'restante'),
(1133, '0644167', 3, '', 4273, 'attribue', 'restante'),
(1134, '0644168', 3, '', 4273, 'attribue', 'restante'),
(1135, '0644169', 3, '', 4273, 'attribue', 'restante'),
(1136, '0644170', 3, '', 4273, 'attribue', 'restante'),
(1137, '0644171', 3, '', 4273, 'attribue', 'restante'),
(1138, '0644172', 3, '', 4273, 'attribue', 'restante'),
(1139, '0644173', 3, '', 4273, 'attribue', 'restante'),
(1140, '0644174', 3, '', 4273, 'attribue', 'restante'),
(1141, '0644175', 3, '', 4273, 'attribue', 'restante'),
(1142, '0644176', 3, '', 4273, 'attribue', 'restante'),
(1143, '0644177', 3, '', 4273, 'attribue', 'restante'),
(1144, '0644178', 3, '', 4273, 'attribue', 'restante'),
(1145, '0644179', 3, '', 4273, 'attribue', 'restante'),
(1146, '0644180', 3, '', 4273, 'attribue', 'restante'),
(1147, '0644181', 3, '', 4273, 'attribue', 'restante'),
(1148, '0644182', 3, '', 4273, 'attribue', 'restante'),
(1149, '0644183', 3, '', 4273, 'attribue', 'restante'),
(1150, '0644184', 3, '', 4273, 'attribue', 'restante'),
(1151, '0644185', 3, '', 4273, 'attribue', 'restante'),
(1152, '0644186', 3, '', 4273, 'attribue', 'restante'),
(1153, '0644187', 3, '', 4273, 'attribue', 'restante'),
(1154, '0027426', 1, '', 4273, 'attribue', 'restante'),
(1155, '0027427', 1, '', 4273, 'attribue', 'restante'),
(1156, '0027428', 1, '', 4273, 'attribue', 'restante'),
(1157, '0027429', 1, '', 4273, 'attribue', 'restante'),
(1158, '0027430', 1, '', 4273, 'attribue', 'restante'),
(1159, '0027431', 1, '', 4273, 'attribue', 'restante'),
(1160, '0027432', 1, '', 4273, 'attribue', 'restante'),
(1161, '0027433', 1, '', 4273, 'attribue', 'restante'),
(1162, '0027434', 1, '', 4273, 'attribue', 'restante'),
(1163, '0027435', 1, '', 4273, 'attribue', 'restante'),
(1164, '0166256', 2, '', 4253, 'attribue', 'restante'),
(1165, '0166257', 2, '', 4253, 'attribue', 'restante'),
(1166, '0166258', 2, '', 4253, 'attribue', 'restante'),
(1167, '0166259', 2, '', 4253, 'attribue', 'restante'),
(1168, '0166260', 2, '', 4253, 'attribue', 'restante'),
(1169, '0025927', 1, '', 4253, 'attribue', 'restante'),
(1170, '0025928', 1, '', 4253, 'attribue', 'restante'),
(1171, '0025929', 1, '', 4253, 'attribue', 'restante'),
(1172, '0025930', 1, '', 4253, 'attribue', 'restante'),
(1173, '0025931', 1, '', 4253, 'attribue', 'restante'),
(1174, '0025932', 1, '', 4253, 'attribue', 'restante'),
(1175, '0025933', 1, '', 4253, 'attribue', 'restante'),
(1176, '0025934', 1, '', 4253, 'attribue', 'restante'),
(1177, '0025935', 1, '', 4253, 'attribue', 'restante'),
(1178, '0651488', 3, '', 4253, 'attribue', 'restante'),
(1179, '0651489', 3, '', 4253, 'attribue', 'restante'),
(1180, '0651490', 3, '', 4253, 'attribue', 'restante'),
(1181, '0651491', 3, '', 4253, 'attribue', 'restante'),
(1182, '0651492', 3, '', 4253, 'attribue', 'restante'),
(1183, '0651493', 3, '', 4253, 'attribue', 'restante'),
(1184, '0651494', 3, '', 4253, 'attribue', 'restante'),
(1185, '0651495', 3, '', 4253, 'attribue', 'restante'),
(1186, '0651496', 3, '', 4253, 'attribue', 'restante'),
(1187, '0651497', 3, '', 4253, 'attribue', 'restante'),
(1188, '0651498', 3, '', 4253, 'attribue', 'restante'),
(1189, '0651499', 3, '', 4253, 'attribue', 'restante'),
(1190, '0651500', 3, '', 4253, 'attribue', 'restante'),
(1191, '0651501', 3, '', 4253, 'attribue', 'restante'),
(1192, '0651502', 3, '', 4253, 'attribue', 'restante'),
(1193, '0651503', 3, '', 4253, 'attribue', 'restante'),
(1194, '0651504', 3, '', 4253, 'attribue', 'restante'),
(1195, '0651505', 3, '', 4253, 'attribue', 'restante'),
(1196, '0651506', 3, '', 4253, 'attribue', 'restante'),
(1197, '0651507', 3, '', 4253, 'attribue', 'restante'),
(1198, '0651508', 3, '', 4253, 'attribue', 'restante'),
(1199, '0651509', 3, '', 4253, 'attribue', 'restante'),
(1200, '0651510', 3, '', 4253, 'attribue', 'restante'),
(1201, '0651511', 3, '', 4253, 'attribue', 'restante'),
(1202, '0651512', 3, '', 4253, 'attribue', 'restante'),
(1239, '0164711', 2, 'zd6JC', 4250, 'attribue', 'vendue'),
(1240, '0164712', 2, 'APWKY', 4250, 'attribue', 'vendue'),
(1241, '0164713', 2, '', 4250, 'attribue', 'restante'),
(1242, '0164714', 2, 'ixVsj', 4250, 'attribue', 'vendue'),
(1243, '0164715', 2, 'Ueq7y', 4250, 'attribue', 'vendue'),
(1244, '0164716', 2, '', 4250, 'attribue', 'restante'),
(1245, '0164717', 2, '', 4250, 'attribue', 'restante'),
(1246, '0164718', 2, '', 4250, 'attribue', 'restante'),
(1247, '0164719', 2, '', 4250, 'attribue', 'restante'),
(1248, '0025777', 1, '', 4250, 'attribue', 'restante'),
(1250, '0650480', 3, '', 4250, 'attribue', 'restante'),
(1251, '0650481', 3, 'XuIhV', 4250, 'attribue', 'vendue'),
(1252, '0650482', 3, 'f4TYy', 4250, 'attribue', 'vendue'),
(1253, '0650483', 3, 'zd6JC', 4250, 'attribue', 'vendue'),
(1254, '0650484', 3, 'ixVsj', 4250, 'attribue', 'vendue'),
(1255, '0650485', 3, '', 4250, 'attribue', 'restante'),
(1256, '0650486', 3, '', 4250, 'attribue', 'restante'),
(1257, '0650487', 3, '', 4250, 'attribue', 'restante'),
(1258, '0650488', 3, '', 4250, 'attribue', 'restante'),
(1259, '0650489', 3, '', 4250, 'attribue', 'restante'),
(1260, '0650490', 3, '', 4250, 'attribue', 'restante'),
(1261, '0650491', 3, '', 4250, 'attribue', 'restante'),
(1262, '0650492', 3, '', 4250, 'attribue', 'restante'),
(1263, '0650493', 3, '', 4250, 'attribue', 'restante'),
(1264, '0650494', 3, '', 4250, 'attribue', 'restante'),
(1265, '0650495', 3, '', 4250, 'attribue', 'restante'),
(1266, '0650496', 3, '', 4250, 'attribue', 'restante'),
(1267, '0650497', 3, '', 4250, 'attribue', 'restante'),
(1268, '0650498', 3, 'Ueq7y', 4250, 'attribue', 'vendue'),
(1269, '0000600', 3, 'LTZ8@', 4091, 'attribue', 'vendue'),
(1270, '0000601', 3, '7eyW3', 4091, 'attribue', 'vendue'),
(1311, '0174024', 2, 'G8GAy', 4254, 'attribue', 'vendue'),
(1312, '0174025', 2, 'SSp0R', 4254, 'attribue', 'vendue'),
(1313, '0174026', 2, 'JCzLE', 4254, 'attribue', 'vendue'),
(1314, '0174027', 2, 'rCQPT', 4254, 'attribue', 'vendue'),
(1315, '0174028', 2, 'H@gG6', 4254, 'attribue', 'vendue'),
(1316, '0174029', 2, 'rop34', 4254, 'attribue', 'vendue'),
(1317, '0174030', 2, '@5NtW', 4254, 'attribue', 'vendue'),
(1318, '0174031', 2, 'E5vnU', 4254, 'attribue', 'vendue'),
(1319, '0174032', 2, '', 4254, 'attribue', 'restante'),
(1320, '0174033', 2, '', 4254, 'attribue', 'restante'),
(1321, '0174034', 2, '', 4254, 'attribue', 'restante'),
(1322, '0174035', 2, '', 4254, 'attribue', 'restante'),
(1323, '0174036', 2, '', 4254, 'attribue', 'restante'),
(1324, '0174037', 2, '', 4254, 'attribue', 'restante'),
(1325, '0652085', 3, 'G8GAy', 4254, 'attribue', 'vendue'),
(1326, '0652086', 3, 'SSp0R', 4254, 'attribue', 'vendue'),
(1327, '0652087', 3, '', 4254, 'attribue', 'restante'),
(1328, '0652088', 3, 'JCzLE', 4254, 'attribue', 'vendue'),
(1329, '0652089', 3, 'rCQPT', 4254, 'attribue', 'vendue'),
(1330, '0652090', 3, 'H@gG6', 4254, 'attribue', 'vendue'),
(1331, '0652091', 3, 'rop34', 4254, 'attribue', 'vendue'),
(1332, '0652092', 3, '@5NtW', 4254, 'attribue', 'vendue'),
(1333, '0652093', 3, 'E5vnU', 4254, 'attribue', 'vendue'),
(1334, '0652094', 3, '', 4254, 'attribue', 'restante'),
(1335, '0652095', 3, '', 4254, 'attribue', 'restante'),
(1336, '0652096', 3, '', 4254, 'attribue', 'restante'),
(1337, '0652097', 3, '', 4254, 'attribue', 'restante'),
(1338, '0652098', 3, '', 4254, 'attribue', 'restante'),
(1339, '0652099', 3, '', 4254, 'attribue', 'restante'),
(1340, '0652100', 3, '', 4254, 'attribue', 'restante'),
(1341, '0652101', 3, '', 4254, 'attribue', 'restante'),
(1342, '0652102', 3, '', 4254, 'attribue', 'restante'),
(1343, '4444444', 3, '2vS51', 4091, 'attribue', 'vendue'),
(1344, '4444445', 3, 'c@fb7', 4091, 'attribue', 'vendue'),
(1345, '4444448', 3, 'pMcyg', 4091, 'attribue', 'vendue'),
(1346, '4444449', 3, 'Osgym', 4091, 'attribue', 'vendue'),
(1347, '4443336', 2, 'pMcyg', 4091, 'attribue', 'vendue'),
(1348, '4443337', 2, 'c@fb7', 4091, 'attribue', 'vendue'),
(1349, '4443338', 2, 'VL578', 4091, 'attribue', 'vendue'),
(1350, '4443339', 2, 'yX2Ug', 4091, 'attribue', 'vendue'),
(1351, '4444440', 2, 'MKp@6', 4091, 'attribue', 'vendue'),
(1352, '4444441', 2, '', 4091, 'attribue', 'restante'),
(1353, '4444442', 2, '', 4091, 'attribue', 'restante'),
(1354, '4444443', 2, '', 4091, 'attribue', 'restante'),
(1355, '4444444', 2, '', 4091, 'attribue', 'restante'),
(1356, '4444445', 2, '', 4091, 'attribue', 'restante'),
(1357, '4444446', 2, '', 4091, 'attribue', 'restante'),
(1358, '4444447', 2, '', 4091, 'attribue', 'restante'),
(1359, '4444448', 2, '', 4091, 'attribue', 'restante'),
(1360, '4444449', 2, '', 4091, 'attribue', 'restante'),
(1361, '4444450', 2, 'ndr81', 4091, 'attribue', 'vendue'),
(1362, '4444460', 3, 'MKp@6', 4091, 'attribue', 'vendue'),
(1363, '4444461', 3, 'ndr81', 4091, 'attribue', 'vendue'),
(1364, '4444462', 3, 'VL578', 4091, 'attribue', 'vendue'),
(1365, '4444463', 3, 'yX2Ug', 4091, 'attribue', 'vendue'),
(1366, '4444464', 3, '5hOso', 4091, 'attribue', 'vendue'),
(1367, '4444465', 3, 'e3VKj', 4091, 'attribue', 'vendue'),
(1377, '0175300', 2, '', 4201, 'attribue', 'restante'),
(1378, '0175301', 2, '', 4201, 'attribue', 'restante'),
(1379, '0175302', 2, '', 4201, 'attribue', 'restante'),
(1380, '0175303', 2, '', 4201, 'attribue', 'restante'),
(1381, '0175304', 2, '', 4201, 'attribue', 'restante'),
(1382, '0175305', 2, '', 4201, 'attribue', 'restante'),
(1383, '0175306', 2, '', 4201, 'attribue', 'restante'),
(1384, '0175307', 2, '', 4201, 'attribue', 'restante'),
(1385, '0175308', 2, '', 4201, 'attribue', 'restante'),
(1386, '0175309', 2, '', 4201, 'attribue', 'restante'),
(1387, '0175310', 2, '', 4201, 'attribue', 'restante'),
(1388, '0175311', 2, '', 4201, 'attribue', 'restante'),
(1389, '0175312', 2, '', 4201, 'attribue', 'restante'),
(1390, '0175313', 2, '', 4201, 'attribue', 'restante'),
(1391, '0175314', 2, '', 4201, 'attribue', 'restante'),
(1392, '0175315', 2, '', 4201, 'attribue', 'restante'),
(1393, '0175316', 2, '', 4201, 'attribue', 'restante'),
(1394, '0175317', 2, '', 4201, 'attribue', 'restante'),
(1395, '0175318', 2, '', 4201, 'attribue', 'restante'),
(1396, '0175319', 2, '', 4201, 'attribue', 'restante'),
(1397, '0175320', 2, '', 4201, 'attribue', 'restante'),
(1398, '0175321', 2, '', 4201, 'attribue', 'restante'),
(1399, '0175322', 2, '', 4201, 'attribue', 'restante'),
(1400, '0175323', 2, '', 4201, 'attribue', 'restante'),
(1401, '0175324', 2, '', 4201, 'attribue', 'restante'),
(1402, '0175325', 2, '', 4201, 'attribue', 'restante'),
(1403, '0175326', 2, '', 4201, 'attribue', 'restante'),
(1404, '0175327', 2, '', 4201, 'attribue', 'restante'),
(1405, '0175328', 2, '', 4201, 'attribue', 'restante'),
(1406, '0175329', 2, '', 4201, 'attribue', 'restante'),
(1407, '0175330', 2, '', 4201, 'attribue', 'restante'),
(1408, '0175331', 2, '', 4201, 'attribue', 'restante'),
(1409, '0175332', 2, '', 4201, 'attribue', 'restante'),
(1410, '0175333', 2, '', 4201, 'attribue', 'restante'),
(1411, '0175334', 2, '', 4201, 'attribue', 'restante'),
(1412, '0175335', 2, '', 4201, 'attribue', 'restante'),
(1413, '0175336', 2, '', 4201, 'attribue', 'restante'),
(1414, '0175337', 2, '', 4201, 'attribue', 'restante'),
(1415, '0175338', 2, '', 4201, 'attribue', 'restante'),
(1416, '0175339', 2, '', 4201, 'attribue', 'restante'),
(1417, '0173711', 2, '', 4201, 'attribue', 'restante'),
(1418, '0027515', 1, '', 4201, 'attribue', 'restante'),
(1419, '0027516', 1, '', 4201, 'attribue', 'restante'),
(1420, '0027517', 1, '', 4201, 'attribue', 'restante'),
(1421, '0027518', 1, '', 4201, 'attribue', 'restante'),
(1422, '0027519', 1, '', 4201, 'attribue', 'restante'),
(1423, '0027520', 1, '', 4201, 'attribue', 'restante'),
(1424, '0027521', 1, '', 4201, 'attribue', 'restante'),
(1425, '0027522', 1, '', 4201, 'attribue', 'restante'),
(1426, '0027523', 1, '', 4201, 'attribue', 'restante'),
(1427, '0027524', 1, '', 4201, 'attribue', 'restante'),
(1428, '0175671', 2, '', 4254, 'attribue', 'restante'),
(1429, '0175672', 2, '', 4254, 'attribue', 'restante'),
(1430, '0175673', 2, '', 4254, 'attribue', 'restante'),
(1431, '0175674', 2, '', 4254, 'attribue', 'restante'),
(1432, '0175675', 2, '', 4254, 'attribue', 'restante'),
(1433, '0175676', 2, '', 4254, 'attribue', 'restante'),
(1434, '0175677', 2, '', 4254, 'attribue', 'restante'),
(1435, '0175678', 2, '', 4254, 'attribue', 'restante'),
(1436, '0175679', 2, '', 4254, 'attribue', 'restante'),
(1437, '0175680', 2, '', 4254, 'attribue', 'restante'),
(1438, '0175681', 2, '', 4254, 'attribue', 'restante'),
(1439, '0175682', 2, '', 4254, 'attribue', 'restante'),
(1440, '0175683', 2, '', 4254, 'attribue', 'restante'),
(1441, '0175684', 2, '', 4254, 'attribue', 'restante'),
(1442, '0175685', 2, '', 4254, 'attribue', 'restante'),
(1443, '0175686', 2, '', 4254, 'attribue', 'restante'),
(1444, '0175687', 2, '', 4254, 'attribue', 'restante'),
(1445, '0175688', 2, '', 4254, 'attribue', 'restante'),
(1446, '0175689', 2, '', 4254, 'attribue', 'restante'),
(1447, '0175690', 2, '', 4254, 'attribue', 'restante'),
(1448, '0175691', 2, '', 4254, 'attribue', 'restante'),
(1449, '0175692', 2, '', 4254, 'attribue', 'restante'),
(1450, '0175693', 2, '', 4254, 'attribue', 'restante'),
(1451, '0175694', 2, '', 4254, 'attribue', 'restante'),
(1452, '0175695', 2, '', 4254, 'attribue', 'restante'),
(1453, '0175696', 2, '', 4254, 'attribue', 'restante'),
(1454, '0027570', 1, '', 4254, 'attribue', 'restante'),
(1455, '0027571', 1, '', 4254, 'attribue', 'restante'),
(1456, '0027572', 1, '', 4254, 'attribue', 'restante'),
(1457, '0027573', 1, '', 4254, 'attribue', 'restante'),
(1458, '0027574', 1, '', 4254, 'attribue', 'restante'),
(1459, '0027575', 1, '', 4254, 'attribue', 'restante'),
(1460, '0027576', 1, '', 4254, 'attribue', 'restante'),
(1461, '0027577', 1, '', 4254, 'attribue', 'restante'),
(1462, '0027578', 1, '', 4254, 'attribue', 'restante'),
(1463, '0027579', 1, '', 4254, 'attribue', 'restante'),
(1464, '0027580', 1, '', 4254, 'attribue', 'restante'),
(1465, '0027581', 1, '', 4254, 'attribue', 'restante'),
(1466, '0027582', 1, '', 4254, 'attribue', 'restante'),
(1467, '0027583', 1, '', 4254, 'attribue', 'restante'),
(1468, '0027584', 1, '', 4254, 'attribue', 'restante'),
(1469, '0027585', 1, '', 4254, 'attribue', 'restante'),
(1470, '0027586', 1, '', 4254, 'attribue', 'restante'),
(1471, '0027587', 1, '', 4254, 'attribue', 'restante'),
(1472, '0027588', 1, '', 4254, 'attribue', 'restante'),
(1473, '0027589', 1, '', 4254, 'attribue', 'restante'),
(1474, '0027590', 1, '', 4254, 'attribue', 'restante'),
(1475, '0027591', 1, '', 4254, 'attribue', 'restante'),
(1476, '0027592', 1, '', 4254, 'attribue', 'restante'),
(1477, '0027593', 1, '', 4254, 'attribue', 'restante'),
(1478, '0027594', 1, '', 4254, 'attribue', 'restante'),
(1479, '0027595', 1, '', 4254, 'attribue', 'restante'),
(1480, '0027596', 1, '', 4254, 'attribue', 'restante'),
(1481, '0027597', 1, '', 4254, 'attribue', 'restante'),
(1482, '0027598', 1, '', 4254, 'attribue', 'restante'),
(1483, '0027599', 1, '', 4254, 'attribue', 'restante'),
(1484, '0027600', 1, '', 4254, 'attribue', 'restante'),
(1485, '0027601', 1, '', 4254, 'attribue', 'restante'),
(1486, '0027602', 1, '', 4254, 'attribue', 'restante'),
(1487, '0027603', 1, '', 4254, 'attribue', 'restante'),
(1488, '0027604', 1, '', 4254, 'attribue', 'restante'),
(1489, '0027605', 1, '', 4254, 'attribue', 'restante'),
(1490, '0027606', 1, '', 4254, 'attribue', 'restante'),
(1491, '0027607', 1, '', 4254, 'attribue', 'restante'),
(1492, '0027608', 1, '', 4254, 'attribue', 'restante'),
(1493, '0027609', 1, '', 4254, 'attribue', 'restante'),
(1494, '0027610', 1, '', 4254, 'attribue', 'restante'),
(1495, '0027611', 1, '', 4254, 'attribue', 'restante'),
(1496, '0027612', 1, '', 4254, 'attribue', 'restante'),
(1497, '0027613', 1, '', 4254, 'attribue', 'restante'),
(1498, '0027614', 1, '', 4254, 'attribue', 'restante'),
(1499, '0027615', 1, '', 4254, 'attribue', 'restante'),
(1500, '0027616', 1, '', 4254, 'attribue', 'restante'),
(1501, '0027617', 1, '', 4254, 'attribue', 'restante'),
(1502, '0027618', 1, '', 4254, 'attribue', 'restante'),
(1503, '0027619', 1, '', 4254, 'attribue', 'restante'),
(1506, '0175800', 2, '', 4209, 'attribue', 'restante'),
(1507, '0175801', 2, '', 4209, 'attribue', 'restante'),
(1508, '0175802', 2, '', 4209, 'attribue', 'restante'),
(1509, '0175803', 2, '', 4209, 'attribue', 'restante'),
(1510, '0175804', 2, '', 4209, 'attribue', 'restante'),
(1511, '0175805', 2, 'ISMil', 4209, 'attribue', 'vendue'),
(1512, '0175806', 2, '', 4209, 'attribue', 'restante'),
(1513, '0175807', 2, '', 4209, 'attribue', 'restante'),
(1514, '0175808', 2, '', 4209, 'attribue', 'restante'),
(1515, '0175809', 2, '', 4209, 'attribue', 'restante'),
(1516, '0175810', 2, '', 4209, 'attribue', 'restante'),
(1517, '0175811', 2, '', 4209, 'attribue', 'restante'),
(1518, '0175812', 2, '', 4209, 'attribue', 'restante'),
(1519, '0175813', 2, '', 4209, 'attribue', 'restante'),
(1520, '0175814', 2, '', 4209, 'attribue', 'restante'),
(1521, '0175815', 2, '', 4209, 'attribue', 'restante'),
(1522, '0175816', 2, '', 4209, 'attribue', 'restante'),
(1523, '0175817', 2, '', 4209, 'attribue', 'restante'),
(1524, '0175818', 2, '', 4209, 'attribue', 'restante'),
(1525, '0175819', 2, '', 4209, 'attribue', 'restante'),
(1526, '0175820', 2, '', 4209, 'attribue', 'restante'),
(1527, '0175821', 2, '', 4209, 'attribue', 'restante'),
(1528, '0175822', 2, '', 4209, 'attribue', 'restante'),
(1529, '0175823', 2, '', 4209, 'attribue', 'restante'),
(1530, '0175824', 2, '', 4209, 'attribue', 'restante'),
(1531, '0175825', 2, '', 4209, 'attribue', 'restante'),
(1532, '0175826', 2, '', 4209, 'attribue', 'restante'),
(1533, '0175827', 2, '', 4209, 'attribue', 'restante'),
(1534, '0175828', 2, '', 4209, 'attribue', 'restante'),
(1535, '0027525', 1, '', 4209, 'attribue', 'restante'),
(1536, '0027526', 1, '', 4209, 'attribue', 'restante'),
(1537, '0027527', 1, '', 4209, 'attribue', 'restante'),
(1538, '0027528', 1, '', 4209, 'attribue', 'restante'),
(1539, '0027529', 1, '', 4209, 'attribue', 'restante'),
(1540, '0027530', 1, '', 4209, 'attribue', 'restante'),
(1543, '0647502', 3, 'ISMil', 4209, 'attribue', 'vendue'),
(1544, '0647503', 3, '', 4209, 'attribue', 'restante'),
(1545, '0647504', 3, '', 4209, 'attribue', 'restante'),
(1546, '0647505', 3, '', 4209, 'attribue', 'restante'),
(1547, '0647506', 3, '', 4209, 'attribue', 'restante'),
(1548, '0647507', 3, '', 4209, 'attribue', 'restante'),
(1549, '0647508', 3, '', 4209, 'attribue', 'restante'),
(1550, '0647509', 3, '', 4209, 'attribue', 'restante'),
(1551, '0647510', 3, '', 4209, 'attribue', 'restante'),
(1552, '0647511', 3, '', 4209, 'attribue', 'restante'),
(1553, '0647512', 3, '', 4209, 'attribue', 'restante'),
(1554, '0647513', 3, '', 4209, 'attribue', 'restante'),
(1555, '0647514', 3, '', 4209, 'attribue', 'restante'),
(1556, '0647515', 3, '', 4209, 'attribue', 'restante'),
(1557, '0647516', 3, '', 4209, 'attribue', 'restante'),
(1558, '0647517', 3, '', 4209, 'attribue', 'restante'),
(1559, '0647518', 3, '', 4209, 'attribue', 'restante'),
(1560, '0647519', 3, '', 4209, 'attribue', 'restante'),
(1561, '0647520', 3, '', 4209, 'attribue', 'restante'),
(1562, '0647521', 3, '', 4209, 'attribue', 'restante'),
(1563, '0647522', 3, '', 4209, 'attribue', 'restante'),
(1564, '0647523', 3, '', 4209, 'attribue', 'restante'),
(1565, '0647524', 3, '', 4209, 'attribue', 'restante'),
(1566, '0647525', 3, '', 4209, 'attribue', 'restante'),
(1567, '0647526', 3, '', 4209, 'attribue', 'restante'),
(1568, '0647527', 3, '', 4209, 'attribue', 'restante'),
(1569, '0647528', 3, '', 4209, 'attribue', 'restante'),
(1570, '0647529', 3, '', 4209, 'attribue', 'restante'),
(1571, '0647530', 3, '', 4209, 'attribue', 'restante'),
(1572, '0647531', 3, '', 4209, 'attribue', 'restante'),
(1573, '0647532', 3, '', 4209, 'attribue', 'restante'),
(1574, '0647533', 3, '', 4209, 'attribue', 'restante'),
(1575, '0647534', 3, '', 4209, 'attribue', 'restante'),
(1576, '0647535', 3, '', 4209, 'attribue', 'restante'),
(1577, '0647536', 3, '', 4209, 'attribue', 'restante'),
(1578, '0647537', 3, '', 4209, 'attribue', 'restante'),
(1579, '0647538', 3, '', 4209, 'attribue', 'restante'),
(1580, '0647539', 3, '', 4209, 'attribue', 'restante'),
(1581, '0647540', 3, '', 4209, 'attribue', 'restante'),
(1582, '0647541', 3, '', 4209, 'attribue', 'restante'),
(1583, '0647542', 3, '', 4209, 'attribue', 'restante'),
(1584, '0647543', 3, '', 4209, 'attribue', 'restante'),
(1585, '0647544', 3, '', 4209, 'attribue', 'restante'),
(1586, '0647545', 3, '', 4209, 'attribue', 'restante'),
(1587, '0024553', 1, '', 4234, 'attribue', 'restante'),
(1588, '0024554', 1, '', 4234, 'attribue', 'restante'),
(1589, '0024555', 1, '', 4234, 'attribue', 'restante'),
(1590, '0024556', 1, '', 4234, 'attribue', 'restante'),
(1591, '0024557', 1, '', 4234, 'attribue', 'restante'),
(1592, '0024558', 1, '', 4234, 'attribue', 'restante'),
(1593, '0024559', 1, '', 4234, 'attribue', 'restante'),
(1594, '0024560', 1, '', 4234, 'attribue', 'restante'),
(1595, '0024561', 1, '', 4234, 'attribue', 'restante'),
(1596, '0024562', 1, '', 4234, 'attribue', 'restante'),
(1597, '0024563', 1, '', 4234, 'attribue', 'restante'),
(1598, '0175244', 2, '', 4234, 'attribue', 'restante'),
(1599, '0175245', 2, '', 4234, 'attribue', 'restante'),
(1600, '0175246', 2, '', 4234, 'attribue', 'restante'),
(1601, '0175247', 2, '', 4234, 'attribue', 'restante'),
(1602, '0175248', 2, '', 4234, 'attribue', 'restante'),
(1603, '0175249', 2, '', 4234, 'attribue', 'restante'),
(1604, '0175250', 2, '', 4234, 'attribue', 'restante'),
(1605, '0175251', 2, '', 4234, 'attribue', 'restante'),
(1606, '0175252', 2, '', 4234, 'attribue', 'restante'),
(1607, '0175253', 2, '', 4234, 'attribue', 'restante'),
(1608, '0571392', 3, '', 4234, 'attribue', 'restante'),
(1609, '0571393', 3, '', 4234, 'attribue', 'restante'),
(1610, '0571394', 3, '', 4234, 'attribue', 'restante'),
(1611, '0571395', 3, '', 4234, 'attribue', 'restante'),
(1612, '0571396', 3, '', 4234, 'attribue', 'restante'),
(1613, '0571397', 3, '', 4234, 'attribue', 'restante'),
(1614, '0571398', 3, '', 4234, 'attribue', 'restante'),
(1615, '0571399', 3, '', 4234, 'attribue', 'restante'),
(1616, '0571400', 3, '', 4234, 'attribue', 'restante'),
(1617, '0571401', 3, '', 4234, 'attribue', 'restante'),
(1618, '0571402', 3, '', 4234, 'attribue', 'restante'),
(1619, '0571403', 3, '', 4234, 'attribue', 'restante'),
(1620, '0571404', 3, '', 4234, 'attribue', 'restante'),
(1621, '0571405', 3, '', 4234, 'attribue', 'restante'),
(1622, '0571406', 3, '', 4234, 'attribue', 'restante'),
(1623, '0571407', 3, '', 4234, 'attribue', 'restante'),
(1624, '0571408', 3, '', 4234, 'attribue', 'restante'),
(1625, '0571409', 3, '', 4234, 'attribue', 'restante'),
(1626, '0571410', 3, '', 4234, 'attribue', 'restante'),
(1627, '0571411', 3, '', 4234, 'attribue', 'restante'),
(1628, '0571412', 3, '', 4234, 'attribue', 'restante'),
(1629, '0571413', 3, '', 4234, 'attribue', 'restante'),
(1630, '0571414', 3, '', 4234, 'attribue', 'restante'),
(1631, '0571415', 3, '', 4234, 'attribue', 'restante'),
(1632, '0571416', 3, '', 4234, 'attribue', 'restante'),
(1633, '0571417', 3, '', 4234, 'attribue', 'restante'),
(1634, '0571418', 3, '', 4234, 'attribue', 'restante'),
(1635, '0571419', 3, '', 4234, 'attribue', 'restante'),
(1636, '0571420', 3, '', 4234, 'attribue', 'restante'),
(1637, '0571421', 3, '', 4234, 'attribue', 'restante'),
(1638, '0571422', 3, '', 4234, 'attribue', 'restante'),
(1639, '0571423', 3, '', 4234, 'attribue', 'restante'),
(1640, '1111002', 2, 'e3VKj', 4091, 'attribue', 'vendue'),
(1641, '1111003', 2, '5hOso', 4091, 'attribue', 'vendue'),
(1642, '1111004', 2, 'LvAkm', 4091, 'attribue', 'vendue'),
(1643, '1111005', 2, 'npXj5', 4091, 'attribue', 'vendue'),
(1644, '1111006', 2, '', 4091, 'attribue', 'restante'),
(1645, '1111007', 2, '', 4091, 'attribue', 'restante'),
(1646, '1111008', 2, '', 4091, 'attribue', 'restante'),
(1647, '1111009', 2, '', 4091, 'attribue', 'restante'),
(1648, '1111010', 2, '', 4091, 'attribue', 'restante'),
(1649, '1111011', 2, '', 4091, 'attribue', 'restante'),
(1650, '1111012', 2, '', 4091, 'attribue', 'restante'),
(1651, '1111013', 2, '', 4091, 'attribue', 'restante'),
(1652, '1111014', 2, '', 4091, 'attribue', 'restante'),
(1653, '1111015', 2, '', 4091, 'attribue', 'restante'),
(1654, '1111016', 2, '', 4091, 'attribue', 'restante'),
(1655, '1111017', 2, '', 4091, 'attribue', 'restante'),
(1656, '1111018', 2, '', 4091, 'attribue', 'restante'),
(1657, '1111019', 2, '', 4091, 'attribue', 'restante'),
(1658, '1111020', 2, '', 4091, 'attribue', 'restante'),
(1659, '3333333', 3, 'npXj5', 4091, 'attribue', 'vendue'),
(1660, '3333334', 3, 'LvAkm', 4091, 'attribue', 'vendue'),
(1661, '3333335', 3, '', 4091, 'attribue', 'restante'),
(1662, '0175235', 2, '', 4219, 'attribue', 'restante'),
(1663, '0175236', 2, '', 4219, 'attribue', 'restante'),
(1664, '0175237', 2, '', 4219, 'attribue', 'restante'),
(1665, '0175238', 2, '', 4219, 'attribue', 'restante'),
(1666, '0175239', 2, '', 4219, 'attribue', 'restante'),
(1667, '0175240', 2, '', 4219, 'attribue', 'restante'),
(1668, '0175241', 2, '', 4219, 'attribue', 'restante'),
(1669, '0175242', 2, '', 4219, 'attribue', 'restante'),
(1670, '0175243', 2, '', 4219, 'attribue', 'restante'),
(1671, '0644671', 3, '', 4219, 'attribue', 'restante'),
(1672, '0644672', 3, '', 4219, 'attribue', 'restante'),
(1673, '0644673', 3, '', 4219, 'attribue', 'restante'),
(1674, '0644674', 3, '', 4219, 'attribue', 'restante'),
(1675, '0644675', 3, '', 4219, 'attribue', 'restante'),
(1676, '0644676', 3, '', 4219, 'attribue', 'restante'),
(1677, '0644677', 3, '', 4219, 'attribue', 'restante'),
(1678, '0644678', 3, '', 4219, 'attribue', 'restante'),
(1679, '0644679', 3, '', 4219, 'attribue', 'restante'),
(1680, '0644680', 3, '', 4219, 'attribue', 'restante'),
(1681, '0644681', 3, '', 4219, 'attribue', 'restante'),
(1682, '0644682', 3, '', 4219, 'attribue', 'restante'),
(1683, '0644683', 3, '', 4219, 'attribue', 'restante'),
(1684, '0644684', 3, '', 4219, 'attribue', 'restante'),
(1685, '0644685', 3, '', 4219, 'attribue', 'restante'),
(1686, '0644686', 3, '', 4219, 'attribue', 'restante'),
(1687, '0644687', 3, '', 4219, 'attribue', 'restante'),
(1688, '0644688', 3, '', 4219, 'attribue', 'restante'),
(1689, '0644689', 3, '', 4219, 'attribue', 'restante'),
(1690, '0176278', 2, 'gR74@', 1063, 'attribue', 'vendue'),
(1691, '0176279', 2, '', 1063, 'attribue', 'restante'),
(1692, '0176280', 2, '', 1063, 'attribue', 'restante'),
(1693, '0176281', 2, '', 1063, 'attribue', 'restante'),
(1694, '0176282', 2, '', 1063, 'attribue', 'restante'),
(1695, '0176283', 2, '', 1063, 'attribue', 'restante'),
(1696, '0176284', 2, '', 1063, 'attribue', 'restante'),
(1697, '0176285', 2, '', 1063, 'attribue', 'restante'),
(1698, '0176286', 2, '', 1063, 'attribue', 'restante'),
(1699, '0176287', 2, '', 1063, 'attribue', 'restante'),
(1700, '0571443', 3, 'gR74@', 1063, 'attribue', 'vendue'),
(1701, '0571444', 3, '', 1063, 'attribue', 'restante'),
(1702, '0571445', 3, '', 1063, 'attribue', 'restante'),
(1703, '0571446', 3, '', 1063, 'attribue', 'restante'),
(1704, '0571447', 3, '', 1063, 'attribue', 'restante'),
(1705, '0571448', 3, '', 1063, 'attribue', 'restante'),
(1706, '0571449', 3, '', 1063, 'attribue', 'restante'),
(1707, '0571450', 3, '', 1063, 'attribue', 'restante'),
(1708, '0571451', 3, '', 1063, 'attribue', 'restante'),
(1709, '0571452', 3, '', 1063, 'attribue', 'restante'),
(1710, '0647501', 3, '', 4201, 'attribue', 'restante'),
(1711, '0647502', 3, 'ISMil', 4201, 'attribue', 'vendue'),
(1712, '0647503', 3, '', 4201, 'attribue', 'restante'),
(1713, '0647504', 3, '', 4201, 'attribue', 'restante'),
(1714, '0647505', 3, '', 4201, 'attribue', 'restante'),
(1715, '0647506', 3, '', 4201, 'attribue', 'restante'),
(1716, '0647507', 3, '', 4201, 'attribue', 'restante'),
(1717, '0647508', 3, '', 4201, 'attribue', 'restante'),
(1718, '0647509', 3, '', 4201, 'attribue', 'restante'),
(1719, '0647510', 3, '', 4201, 'attribue', 'restante'),
(1720, '0647511', 3, '', 4201, 'attribue', 'restante'),
(1721, '0647512', 3, '', 4201, 'attribue', 'restante'),
(1722, '0647513', 3, '', 4201, 'attribue', 'restante'),
(1723, '0647514', 3, '', 4201, 'attribue', 'restante'),
(1724, '0647515', 3, '', 4201, 'attribue', 'restante'),
(1725, '0647516', 3, '', 4201, 'attribue', 'restante'),
(1726, '0647517', 3, '', 4201, 'attribue', 'restante'),
(1727, '0647518', 3, '', 4201, 'attribue', 'restante'),
(1728, '0647519', 3, '', 4201, 'attribue', 'restante'),
(1729, '0647520', 3, '', 4201, 'attribue', 'restante'),
(1730, '0647521', 3, '', 4201, 'attribue', 'restante'),
(1731, '0647522', 3, '', 4201, 'attribue', 'restante'),
(1732, '0647523', 3, '', 4201, 'attribue', 'restante'),
(1733, '0647524', 3, '', 4201, 'attribue', 'restante'),
(1734, '0647525', 3, '', 4201, 'attribue', 'restante'),
(1735, '0647526', 3, '', 4201, 'attribue', 'restante'),
(1736, '0647527', 3, '', 4201, 'attribue', 'restante'),
(1737, '0647528', 3, '', 4201, 'attribue', 'restante'),
(1738, '0647529', 3, '', 4201, 'attribue', 'restante'),
(1739, '0647530', 3, '', 4201, 'attribue', 'restante'),
(1740, '0647531', 3, '', 4201, 'attribue', 'restante'),
(1741, '0647532', 3, '', 4201, 'attribue', 'restante'),
(1742, '0647533', 3, '', 4201, 'attribue', 'restante'),
(1743, '0647534', 3, '', 4201, 'attribue', 'restante'),
(1744, '0647535', 3, '', 4201, 'attribue', 'restante'),
(1745, '0647536', 3, '', 4201, 'attribue', 'restante'),
(1746, '0647537', 3, '', 4201, 'attribue', 'restante'),
(1747, '0647538', 3, '', 4201, 'attribue', 'restante'),
(1748, '0647539', 3, '', 4201, 'attribue', 'restante'),
(1749, '0647540', 3, '', 4201, 'attribue', 'restante'),
(1750, '0647541', 3, '', 4201, 'attribue', 'restante'),
(1751, '0647542', 3, '', 4201, 'attribue', 'restante'),
(1752, '0647543', 3, '', 4201, 'attribue', 'restante'),
(1753, '0647544', 3, '', 4201, 'attribue', 'restante'),
(1754, '0647545', 3, '', 4201, 'attribue', 'restante'),
(1755, '0647501', 3, '', 4201, 'attribue', 'restante'),
(1756, '0647502', 3, 'ISMil', 4201, 'attribue', 'vendue'),
(1757, '0647503', 3, '', 4201, 'attribue', 'restante'),
(1758, '0647504', 3, '', 4201, 'attribue', 'restante'),
(1759, '0647505', 3, '', 4201, 'attribue', 'restante'),
(1760, '0647506', 3, '', 4201, 'attribue', 'restante'),
(1761, '0647507', 3, '', 4201, 'attribue', 'restante'),
(1762, '0647508', 3, '', 4201, 'attribue', 'restante'),
(1763, '0647509', 3, '', 4201, 'attribue', 'restante'),
(1764, '0647510', 3, '', 4201, 'attribue', 'restante'),
(1765, '0647511', 3, '', 4201, 'attribue', 'restante'),
(1766, '0647512', 3, '', 4201, 'attribue', 'restante'),
(1767, '0647513', 3, '', 4201, 'attribue', 'restante'),
(1768, '0647514', 3, '', 4201, 'attribue', 'restante'),
(1769, '0647515', 3, '', 4201, 'attribue', 'restante'),
(1770, '0647516', 3, '', 4201, 'attribue', 'restante'),
(1771, '0647517', 3, '', 4201, 'attribue', 'restante'),
(1772, '0647518', 3, '', 4201, 'attribue', 'restante'),
(1773, '0647519', 3, '', 4201, 'attribue', 'restante'),
(1774, '0647520', 3, '', 4201, 'attribue', 'restante'),
(1775, '0647521', 3, '', 4201, 'attribue', 'restante'),
(1776, '0647522', 3, '', 4201, 'attribue', 'restante'),
(1777, '0647523', 3, '', 4201, 'attribue', 'restante'),
(1778, '0647524', 3, '', 4201, 'attribue', 'restante'),
(1779, '0647525', 3, '', 4201, 'attribue', 'restante'),
(1780, '0647526', 3, '', 4201, 'attribue', 'restante'),
(1781, '0647527', 3, '', 4201, 'attribue', 'restante'),
(1782, '0647528', 3, '', 4201, 'attribue', 'restante'),
(1783, '0647529', 3, '', 4201, 'attribue', 'restante'),
(1784, '0647530', 3, '', 4201, 'attribue', 'restante'),
(1785, '0647531', 3, '', 4201, 'attribue', 'restante'),
(1786, '0647532', 3, '', 4201, 'attribue', 'restante'),
(1787, '0647533', 3, '', 4201, 'attribue', 'restante'),
(1788, '0647534', 3, '', 4201, 'attribue', 'restante'),
(1789, '0647535', 3, '', 4201, 'attribue', 'restante'),
(1790, '0647536', 3, '', 4201, 'attribue', 'restante'),
(1791, '0647537', 3, '', 4201, 'attribue', 'restante'),
(1792, '0647538', 3, '', 4201, 'attribue', 'restante'),
(1793, '0647539', 3, '', 4201, 'attribue', 'restante'),
(1794, '0647540', 3, '', 4201, 'attribue', 'restante'),
(1795, '0647541', 3, '', 4201, 'attribue', 'restante'),
(1796, '0647542', 3, '', 4201, 'attribue', 'restante'),
(1797, '0647543', 3, '', 4201, 'attribue', 'restante'),
(1798, '0647544', 3, '', 4201, 'attribue', 'restante'),
(1799, '0647545', 3, '', 4201, 'attribue', 'restante'),
(1800, '0647501', 3, '', 4209, 'attribue', 'restante');

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
  `nombre_attestation_cedeao` int(255) DEFAULT NULL,
  `etat_commande` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id_commande`, `date_commande`, `matricule_intermediaire`, `nombre_attestation_verte`, `nombre_attestation_jaune`, `nombre_attestation_cedeao`, `etat_commande`) VALUES
(21, '2019-08-28', 4201, 50, 10, 0, 'En attente'),
(25, '2019-09-05', 4039, 20, 0, 20, 'En attente'),
(26, '2019-09-24', 4091, 10, 5, 10, 'En attente'),
(27, '2019-09-24', 4091, 20, 11, 5, 'En attente'),
(28, '2019-09-25', 4091, 5, 10, 20, 'En attente'),
(29, '2019-09-25', 4091, 50, 50, 100, 'En attente'),
(30, '2019-09-25', 4091, 20, 0, 5, 'En attente');

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
('5d4bef5e05f4a', 'NDIAYE', 'IBRAHIMA', '', ''),
('5d4bef949c45a', 'FALL', 'MASOUR', '', ''),
('5d4befcb1c2b9', 'DIOP', 'LALIA', '', ''),
('5d4bf000a3a47', 'DJIBRIL', 'NDIAYE', '', ''),
('5d4bf03d15c61', 'DIENG', 'FALLA', '', ''),
('5d53cfa058ecb', 'DIOP', 'MAYASSINE', '', ''),
('5d566bfc87fc9', 'FAYE', 'FAMA', '', ''),
('5d5fd2f02ab6a', 'fall', 'souleye', '', ''),
('5d5fd3851e67b', 'DIOP', 'MAMADOU', '', ''),
('5d5fd6cfaa3ab', 'SAGNE', 'CHEIKH MOUHAMADOU OUSSEYNOU', '', ''),
('5d6006b5882e5', 'KA', 'HABY ', '', ''),
('5d600aa84b7be', 'KANE', 'FALLOU', '', ''),
('5d610a3229507', 'CISSE', 'COBEYE', '', ''),
('5d6163e7ec519', 'SAMBOU', 'EMMANUEL ALFONSE', '', ''),
('5d616a438de64', 'MENDY', 'DAVID', '', ''),
('5d616d6a7c14d', 'SENE', 'IBRAHIMA', '', ''),
('5d62acd295c4f', 'NDIAYE', 'FAMBAYE', '', ''),
('5d62ecf32b551', 'NDIAYE', 'MAMADOU', '', ''),
('5d63c769c91ae', 'COUNDOUL', 'MARIEME', '', ''),
('5d63ca4c4117f', 'nom prospect', 'prenom prospect', '', ''),
('5d650efdab7c1', 'FALL', 'OUSMANE', '', ''),
('5d65182fb33f1', 'NDAO', 'IBRAHIMA', '', ''),
('5d6524c71a21f', 'MOUSTAPHA ', 'MBEGUE', '', ''),
('5d65334705afe', 'FOFANA ', 'THIERNO SAIDOU NOUROU', '', ''),
('5d663c8ebfbe1', 'nom prospect', 'prenom prospect', '', ''),
('5d664f33c355e', 'BA', 'LICKA', '', ''),
('5d666163c629e', 'DIOP', 'FATOU', '', ''),
('5d6665c151d89', 'SARR', 'TAPHA', '', ''),
('5d666654b0d4c', 'DIOUF', 'DIAKHATE', '', ''),
('5d667472182ed', 'FALL', 'MARIETOU', '', ''),
('5d6677fd8c0d0', 'BO', 'NDEYE MARIETOU', '', ''),
('5d667be0b4780', 'nom prospect', 'prenom prospect', '', ''),
('5d667ce26e444', 'nom prospect', 'prenom prospect', '', ''),
('5d66809a73d9c', 'GOGO', 'TRANSPORT SERVICES', '', ''),
('5d66869910504', 'NDIAYE', 'PAPA AMATH', '', ''),
('5d669de96e7a0', 'FAYA', 'MAREME', '', ''),
('5d66a6f24ba16', 'FALL', 'MARIAMA', '', ''),
('5d66a9851fc5b', 'nom prospect', 'prenom prospect', '', ''),
('5d6a6fa3950a2', 'BASSIROU', 'LO', '', ''),
('5d6fb326cd2a4', 'MOUHAMADOU', 'SALL', '', ''),
('5d6fe16e16838', 'FALL', 'KHDI', '', ''),
('5d6feb4e3e682', 'SAMB', 'MAME JACQUE AMB', '', ''),
('5d6ff2b3eea97', 'DIOME', 'SERIGNE SALIOU', '', ''),
('5d71087ba679b', 'nom prospect', 'prenom prospect', '', ''),
('5d713540e3744', 'DIATTOU NDIAYE ', 'AZZEDIE', '', ''),
('5d713833016fc', 'DIATTOU NDIAYE', 'AZZEDINE', '', ''),
('5d71398447cbd', 'DIATTOU NDAYE ', 'AZZEDINE', '', ''),
('5d71475699c84', 'nom prospect', 'prenom prospect', '', ''),
('5d7245a15f730', 'DIOP', 'BINTOU', '', ''),
('5d7278f92b997', 'GAYE', 'KHADIM', '', ''),
('5d727b6fc7fa1', 'GAYE', 'KHADIM', '', ''),
('5d7284c8de4de', 'BALDE', 'MOUHAMADOU', '', ''),
('5d7287cf86cdd', 'BALDE', 'MOUHAMADOU', '', ''),
('5d7292beb82c4', 'NDIAYE', 'FATOU', '', ''),
('5d7298df259f1', 'FAYE', 'NABOU', '', ''),
('5d73b2077b8f1', 'CISSE', 'CHEIKH', '', ''),
('5d762f585ac2e', 'FAYE', 'MARIAMA', '', ''),
('5d766b687a3d3', 'FAYE', 'MANSOUR', '', ''),
('5d78c76a7fbcf', 'faye', 'IBRAHIMA', '', ''),
('5d78c97173843', 'NDIAYE', 'DIADJI', '', ''),
('5d78ca380dd4b', 'fall', 'amina', '', ''),
('5d78cee57376a', 'FALL', 'DAOUDA', '', ''),
('5d78cf7c85b69', 'NDIAYE', 'KHADIM', '', ''),
('5d78dd2877b5b', 'SOW', 'ABOUBACRY', '', ''),
('5d78e05c01b44', 'LY', 'MAMADOU ABDOULAYE', '', ''),
('5d7b94c8cb1c7', 'CISSE', 'NENE', '', ''),
('5d7b95f85c1bd', 'SOW', 'BOUBOU', '', ''),
('5d7cd7e8a93d0', 'DIOP', 'NDEYE MAGUETTE', '', ''),
('5d80f847524bc', 'nom prospect', 'prenom prospect', '', ''),
('5d80f97c304c4', 'DIEYE', 'BALLA', '', ''),
('5d8511002b1f7', 'SOW', 'FATIMATA', '', ''),
('5d89f0d7d54e5', 'DIAGNE', 'AMADOU LAMINE', '', ''),
('5d89f426d2595', 'nom prospect', 'prenom prospect', '', ''),
('5d8a05b78ed7f', 'WILANE', 'MOUSTAPHA', '', ''),
('5d8a077f66060', 'nom prospect', 'prenom prospect', '', ''),
('5d8b53f60b911', 'DIOP', 'MAMOUR', '', ''),
('5d8b573cbf202', 'nom prospect', 'prenom prospect', '', ''),
('5d8b661680347', 'DIOP', 'FATMA', '', ''),
('5d8b68c650a5f', 'nom prospect', 'prenom prospect', '', ''),
('5d8b7babadbd0', 'DIOP', 'FATOU', '', ''),
('5d8b7cd47a989', 'nom prospect', 'prenom prospect', '', ''),
('5d8b834b301c3', 'MASSENE ', 'NDIAYE', '', ''),
('5d8b84212129b', 'SOKHNA', 'ABDOULAYE', '', ''),
('5d8b89b8abc3e', 'DIA', 'IBRAHIMA', '', ''),
('5d8b9911979a4', 'ASNON', 'GILLES', '', ''),
('5d8ba2e833da6', 'FALL', 'ABDOU', '', ''),
('5d8ba9a3f382d', 'MBENGUE', 'AMADOU', '', ''),
('5d8ccd1fb148a', 'DROIT A LA VILLE', 'FONDATION', '', ''),
('5d8ce68e45f59', 'nom prospect', 'prenom prospect', '', '');

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
('0@0YZbh', '1000000', '0', '6000', '3150', 12, '5d7298df259f1'),
('0uXllCA', 'ILLIMITE', '0', '12772', '12772', 1, '5d7278f92b997'),
('0xhc4yg', 'ILLIMITE', '0', '51078', '26815', 1, '5d63c769c91ae'),
('12l8i6p', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d62acd295c4f'),
('1B0@6fa', '1000000', '0', '6000', '6000', 12, '5d6ff2b3eea97'),
('1b8Yv04', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8ba9a3f382d'),
('1mqntx7', '1000000', '0', '6000', '1575', 12, '5d4befcb1c2b9'),
('1r8atne', 'ILLIMITE', '0', '65677', '22986', 1, '5d65182fb33f1'),
('1YAenWu', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d73b2077b8f1'),
('2hsxc91', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d650efdab7c1'),
('2t7ZpAh', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b661680347'),
('2Xkqxp1', '0', '0', '15750', '4134', 6, '5d8511002b1f7'),
('2ZwXz39', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b7babadbd0'),
('34CZ2oY', 'ILLIMITE', '0', '51078', '4469', 1, '5d650efdab7c1'),
('3AoZ1u1', 'ILLIMITE', '0', '240245', '63064', 1, '5d6a6fa3950a2'),
('3h@@pdn', '1000000', '0', '6000', '1575', 12, '5d89f0d7d54e5'),
('3ohnZAo', 'ILLIMITE', '0', '51078', '26815', 1, '5d8a05b78ed7f'),
('3r17flq', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d62ecf32b551'),
('3tr6ywr', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b9911979a4'),
('4eXvblo', '1000000', '0', '6000', '1575', 12, '5d78c97173843'),
('4lXhtij', '1000000', '0', '6000', '3150', 12, '5d66a6f24ba16'),
('57314xl', 'ILLIMITE', '0', '51078', '4469', 1, '5d600aa84b7be'),
('5Bfplkk', '1000000', '0', '6000', '1575', 12, '5d4bef949c45a'),
('5d4c020a7c5e6', 'ILLIMITE', '0', '51078', '13407', 1, '5d4c020a74c06'),
('5d63ca4c44e6f', 'ILLIMITE', '0', '51078', '26815', 1, '5d63ca4c4117f'),
('5d63ca4c48b5f', '0', '0', '0', '0', 4, '5d63ca4c4117f'),
('5d63caaf6e40d', 'ILLIMITE', '0', '51078', '26815', 1, '5d63ca4c4117f'),
('5d663c8ebfbe1', 'ILLIMITE', '0', '174491', '15267', 1, '5d663c8ebfbe1'),
('5d663f9f44403', 'undefined', 'undefined', 'undefined', 'NaN', 1, '5d663f9f3ca23'),
('5d6663d2a85a4', 'ILLIMITE', '0', '51078', '26815', 1, '5d6663d2a0bc4'),
('5d667be0b8470', 'ILLIMITE', '0', '51078', '13407', 1, '5d667be0b4780'),
('5d667ce275e24', 'ILLIMITE', '0', '51078', '26815', 1, '5d667ce26e444'),
('5d667d1148e27', 'ILLIMITE', '0', '51078', '26815', 1, '5d667ce26e444'),
('5d66a9852394b', 'ILLIMITE', '0', '51078', '26815', 1, '5d66a9851fc5b'),
('5d710653958a1', 'ILLIMITE', '0', 'undefined', 'NaN', 1, '5d71065391bb1'),
('5d7108621413e', 'ILLIMITE', '0', '17162', '17162', 1, '5d7108621413e'),
('5d71086217e2e', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7108621413e'),
('5d71087ba679b', 'ILLIMITE', '0', '17162', '17162', 1, '5d71087ba679b'),
('5d7147569d974', 'ILLIMITE', '0', '17162', '17162', 1, '5d71475699c84'),
('5d7147c58cf06', 'ILLIMITE', '0', 'undefined', 'NaN', 1, '5d7108621413e'),
('5d724b2f2e803', 'ILLIMITE', '0', '65677', '65677', 1, '5d724b2f2ab13'),
('5d724d0f325e7', 'ILLIMITE', '0', '37601', '37601', 1, '5d724d0f2e8f7'),
('5d724d78bba70', 'ILLIMITE', '0', '37601', '37601', 1, '5d724d78b7d80'),
('5d724e2290837', 'ILLIMITE', '0', '65677', '65677', 1, '5d724e2288e57'),
('5d724e2294527', '200000', '0', '6000', '6000', 3, '5d724e2288e57'),
('5d80f84770c3d', 'ILLIMITE', '0', '29448', '7730', 1, '5d80f847524bc'),
('5d89f426d6285', 'ILLIMITE', '0', '51078', '26815', 1, '5d89f426d2595'),
('5d8a077f66060', 'ILLIMITE', '0', '51078', '26815', 1, '5d8a077f66060'),
('5d8a077f69d50', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8a077f66060'),
('5d8b573cc2ef2', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b573cbf202'),
('5d8b68c65474f', 'ILLIMITE', '0', '51078', '26815', 1, '5d8b68c650a5f'),
('5d8b7cd47a989', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b7cd47a989'),
('5d8b7cd47e679', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b7cd47a989'),
('5d8ce5fdecfcc', 'ILLIMITE', '0', '18780', '1643', 1, '5d8ce5fde18fc'),
('5d8ce68e4d939', 'ILLIMITE', '0', '34021', '2976', 1, '5d8ce68e45f59'),
('5ms3hyp', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7287cf86cdd'),
('699oug8', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d610a3229507'),
('6ne6h4l', '0', '0', '18000', '4725', 14, '5d5fd2f02ab6a'),
('6th7xu8', '1000000', '0', '6000', '1575', 12, '5d6677fd8c0d0'),
('6XtZrYX', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78c76a7fbcf'),
('796iqu1', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8511002b1f7'),
('7cZvzcl', '0', '0', '20000', '10500', 6, '5d53cfa058ecb'),
('7i8p3ga', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b53f60b911'),
('7i8sumr', '0', '0', '20000', '10500', 6, '5d4bef5e05f4a'),
('7xhb4vY', 'ILLIMITE', '0', '65677', '17240', 1, '5d78c97173843'),
('822Wzya', '1000000', '0', '6000', '1575', 12, '5d8b7babadbd0'),
('8ht742u', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7278f92b997'),
('8o03k0j', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d5fd6cfaa3ab'),
('8xgimkX', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d616d6a7c14d'),
('9htXgjX', '1000000', '0', '6000', '3150', 12, '5d566bfc87fc9'),
('9w7a7cs', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d667472182ed'),
('@p1mkk2', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8ccd1fb148a'),
('@yfu9fZ', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78cee57376a'),
('a6w95en', '200000', '0', '6000', '3150', 3, '5d8ccd1fb148a'),
('Abn4xuk', 'ILLIMITE', '0', '65677', '17240', 1, '5d7245a15f730'),
('alqwv64', '0', '0', '20000', '10500', 6, '5d8a05b78ed7f'),
('Aq4Y547', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d4bf03d15c61'),
('atp8wp@', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d4bef5e05f4a'),
('aX982ce', 'ILLIMITE', '0', '65677', '34480', 1, '5d8ccd1fb148a'),
('aXaqrje', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d65334705afe'),
('AYzyw39', 'ILLIMITE', '0', '45181', '3953', 1, '5d713833016fc'),
('b37wt99', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d53cfa058ecb'),
('b62pb07', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6163e7ec519'),
('b9bjmv@', 'ILLIMITE', '0', '51078', '4469', 1, '5d6524c71a21f'),
('b@yA2BB', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d713540e3744'),
('BkZBun5', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d4befcb1c2b9'),
('bv@Cxso', 'ILLIMITE', '0', '51078', '13407', 1, '5d78ca380dd4b'),
('BWfpv7C', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d89f0d7d54e5'),
('Bxkyvmm', 'ILLIMITE', '0', '45181', '11860', 1, '5d664f33c355e'),
('c5doCCs', '200000', '0', '6000', '3150', 3, '5d4bef5e05f4a'),
('C5m@czw', 'ILLIMITE', '0', '51078', '4469', 1, '5d7287cf86cdd'),
('c7krl74', 'ILLIMITE', '0', '51078', '13407', 1, '5d4befcb1c2b9'),
('Ccm5gyu', '0', '0', '20000', '10500', 6, '5d63c769c91ae'),
('Chj2Cim', '0', '0', '31500', '8268', 6, '5d6fe16e16838'),
('CtAouAz', 'ILLIMITE', '0', '45181', '3953', 1, '5d66809a73d9c'),
('dB3xYC5', 'ILLIMITE', '0', '51078', '4469', 1, '5d6665c151d89'),
('dCXunax', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d66869910504'),
('dgir08C', 'ILLIMITE', '0', '45181', '11860', 1, '5d7b94c8cb1c7'),
('dl9BZbx', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d5fd2f02ab6a'),
('dnpfCpq', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6ff2b3eea97'),
('dW70uxB', 'ILLIMITE', '0', '51078', '13407', 1, '5d762f585ac2e'),
('ebqh9wX', 'ILLIMITE', '0', '65677', '17240', 1, '5d89f0d7d54e5'),
('emepd67', 'ILLIMITE', '0', '29448', '2576', 1, '5d4bf000a3a47'),
('et756Bo', 'ILLIMITE', '0', '51078', '26815', 1, '5d66a6f24ba16'),
('euqh1zW', '1000000', '0', '6000', '3150', 12, '5d78cf7c85b69'),
('f3d2vtz', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6524c71a21f'),
('f6l8inl', 'ILLIMITE', '0', '51078', '13407', 1, '5d5fd6cfaa3ab'),
('f8o6h6m', 'ILLIMITE', '0', '86456', '22694', 1, '5d6006b5882e5'),
('fhfAj1b', 'ILLIMITE', '0', '51078', '26815', 1, '5d7292beb82c4'),
('fivXYfp', '1000000', '0', '6000', '1575', 12, '5d762f585ac2e'),
('fmAgftC', 'ILLIMITE', '0', '51078', '13407', 1, '5d5fd3851e67b'),
('fyaBet9', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78ca380dd4b'),
('fYz8jyY', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b834b301c3'),
('ges@jha', '1000000', '0', '6000', '1575', 12, '5d8b53f60b911'),
('gg9qfh2', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d766b687a3d3'),
('h25By4X', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7cd7e8a93d0'),
('h9a9ozl', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d669de96e7a0'),
('hA4o@an', 'ILLIMITE', '0', '12772', '12772', 1, '5d727b6fc7fa1'),
('harBaYC', 'ILLIMITE', '0', '86456', '7564', 1, '5d616a438de64'),
('hfaudtt', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6feb4e3e682'),
('hiWkWW3', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d71398447cbd'),
('ht1tro9', 'ILLIMITE', '0', '12772', '12772', 1, '5d8ba2e833da6'),
('hYheqmp', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b89b8abc3e'),
('i8y7C8i', '1000000', '0', '6000', '1575', 12, '5d4bf03d15c61'),
('iA788Xm', 'ILLIMITE', '0', '12772', '12772', 1, '5d8b84212129b'),
('ihcWpbp', 'ILLIMITE', '0', '45181', '3953', 1, '5d666654b0d4c'),
('ij2zAAw', 'ILLIMITE', '0', '51078', '4469', 1, '5d66869910504'),
('il8AWef', '1000000', '0', '6000', '1575', 12, '5d6fe16e16838'),
('imw6hC7', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6fe16e16838'),
('in4jrf5', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78e05c01b44'),
('ipqnoZw', 'ILLIMITE', '0', '51078', '26815', 1, '5d566bfc87fc9'),
('iqbqWr4', '1000000', '0', '6000', '3150', 12, '5d8ccd1fb148a'),
('irb0bff', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d566bfc87fc9'),
('itAhlAp', '1000000', '0', '6000', '1575', 12, '5d667472182ed'),
('iY9crY5', '1000000', '0', '6000', '3150', 12, '5d53cfa058ecb'),
('j3uykyw', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78cf7c85b69'),
('jqBwtls', '1000000', '0', '6000', '1575', 12, '5d6fb326cd2a4'),
('jX1n3o3', 'ILLIMITE', '0', '51078', '26815', 1, '5d78e05c01b44'),
('k8ZWdpm', '1000000', '0', '6000', '1575', 12, '5d7245a15f730'),
('kA0bwuh', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b7babadbd0'),
('kCxcl5h', 'ILLIMITE', '0', '51078', '13407', 1, '5d669de96e7a0'),
('kZj6j59', 'ILLIMITE', '0', '51078', '13407', 1, '5d5fd2f02ab6a'),
('l19ffke', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7292beb82c4'),
('l7p6etb', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7284c8de4de'),
('l@7Cuvf', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8a05b78ed7f'),
('lcgx5iX', 'ILLIMITE', '0', '12772', '12772', 1, '5d8ba9a3f382d'),
('li1sxmy', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d666163c629e'),
('lvXihah', 'ILLIMITE', '0', '45181', '3953', 1, '5d8b9911979a4'),
('lXubAeA', 'ILLIMITE', '0', '170617', '89573', 1, '5d78cf7c85b69'),
('lYZ9a@f', 'ILLIMITE', '0', '51078', '51078', 1, '5d8b661680347'),
('m4qlr1p', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8ba2e833da6'),
('mB6h1in', '1000000', '0', '6000', '1575', 12, '5d78ca380dd4b'),
('mdhi2zn', 'ILLIMITE', '0', '51078', '26815', 1, '5d7298df259f1'),
('o89ecps', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78dd2877b5b'),
('oc8Banz', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6006b5882e5'),
('oZupaeb', '1000000', '0', '6000', '1575', 12, '5d669de96e7a0'),
('p2r6yv1', 'ILLIMITE', '0', '51078', '26815', 1, '5d78c76a7fbcf'),
('p8Xswr0', '1000000', '0', '6000', '525', 12, '5d600aa84b7be'),
('pBnzCi3', 'ILLIMITE', '0', '29448', '7730', 1, '5d80f97c304c4'),
('pfhYm6Z', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d4bef949c45a'),
('piY@f8h', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7b94c8cb1c7'),
('pjzglpB', '1000000', '0', '6000', '3150', 12, '5d78c76a7fbcf'),
('pt8mtA1', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d600aa84b7be'),
('pudvXds', 'ILLIMITE', '0', '51078', '4469', 1, '5d7284c8de4de'),
('qduuXrC', '200000', '0', '6000', '6000', 3, '5d8b661680347'),
('qjcAxju', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d63c769c91ae'),
('qk7yYzz', 'ILLIMITE', '0', '51078', '13407', 1, '5d766b687a3d3'),
('qnoA9du', '1000000', '0', '6000', '3150', 12, '5d7292beb82c4'),
('qspwBgf', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d5fd3851e67b'),
('qY2sqqZ', 'ILLIMITE', '0', '86456', '22694', 1, '5d6fe16e16838'),
('qzgm2dn', '1000000', '0', '2400', '630', 12, '5d6a6fa3950a2'),
('r3zbgYY', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d666654b0d4c'),
('rctAkwY', 'ILLIMITE', '0', '45181', '3953', 1, '5d666163c629e'),
('rhWqr@k', '1000000', '0', '6000', '1575', 12, '5d8b89b8abc3e'),
('rkog7ss', 'ILLIMITE', '0', '51078', '13407', 1, '5d4bef949c45a'),
('rmxtCnu', '0', '0', '20000', '20000', 6, '5d8b661680347'),
('ryl@hzl', '2000000', '0', '12000', '6300', 13, '5d8a05b78ed7f'),
('s3x04X5', 'ILLIMITE', '0', '51078', '4469', 1, '5d62acd295c4f'),
('sewdwsk', '200000', '0', '6000', '3150', 3, '5d53cfa058ecb'),
('sfdwrA3', 'ILLIMITE', '0', '51078', '4469', 1, '5d610a3229507'),
('si9vpgy', 'ILLIMITE', '0', '65677', '17240', 1, '5d78cee57376a'),
('sYurm21', '200000', '0', '6000', '1575', 3, '5d89f0d7d54e5'),
('sZn0WZk', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d713833016fc'),
('tbCrynA', 'ILLIMITE', '0', '51078', '4469', 1, '5d65334705afe'),
('tBscq3r', '0', '0', '20000', '10500', 6, '5d566bfc87fc9'),
('tomjfsn', 'ILLIMITE', '0', '51078', '26815', 1, '5d53cfa058ecb'),
('tqxCli@', 'ILLIMITE', '0', '51078', '26815', 1, '5d4bef5e05f4a'),
('trCvAW6', 'ILLIMITE', '0', '51078', '51078', 1, '5d6ff2b3eea97'),
('tuoC5C7', '200000', '0', '6000', '3150', 3, '5d8a05b78ed7f'),
('u4B@ao5', 'ILLIMITE', '0', '12772', '12772', 1, '5d6163e7ec519'),
('ugieZAv', 'ILLIMITE', '0', '51078', '13407', 1, '5d667472182ed'),
('uo0sijy', '200000', '0', '6000', '1575', 3, '5d4befcb1c2b9'),
('upr@dYj', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d727b6fc7fa1'),
('usrwCgp', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7245a15f730'),
('usZ1gcf', 'ILLIMITE', '0', '45181', '3953', 1, '5d713540e3744'),
('uu862ta', '0', '36000', '24000', '6300', 5, '5d89f0d7d54e5'),
('uwg1hpe', '0', '0', '26250', '6890', 6, '5d6fb326cd2a4'),
('uXq8r2u', '2000000', '0', '12000', '6300', 13, '5d63c769c91ae'),
('v16pCjk', 'ILLIMITE', '0', '51078', '13407', 1, '5d4bf03d15c61'),
('v17ctug', '1000000', '0', '6000', '525', 12, '5d666163c629e'),
('v4elAcd', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d66a6f24ba16'),
('v7zjgWt', '0', '0', '20000', '5250', 6, '5d4befcb1c2b9'),
('v95mZ9k', '0', '0', '26250', '13781', 6, '5d8ccd1fb148a'),
('vppfdlz', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d78c97173843'),
('vq3l08f', '0', '0', '20000', '5250', 6, '5d5fd2f02ab6a'),
('vX@0cuk', '200000', '0', '6000', '1575', 3, '5d6fb326cd2a4'),
('vZ6kart', '1000000', '0', '6000', '1575', 12, '5d766b687a3d3'),
('vzAd3by', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7b95f85c1bd'),
('W58Bv7C', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d4bf000a3a47'),
('w@a4cgx', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d664f33c355e'),
('Wjjqsdv', '0', '36000', '6000', '1575', 5, '5d6677fd8c0d0'),
('Wpyu5tW', 'ILLIMITE', '0', '51078', '26815', 1, '5d7b95f85c1bd'),
('wuuXXoX', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b84212129b'),
('WvA99ej', 'ILLIMITE', '0', '86456', '86456', 1, '5d73b2077b8f1'),
('X1k@u9e', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6665c151d89'),
('X3oxnbm', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d66809a73d9c'),
('x90zfc1', 'ILLIMITE', '0', '51078', '13407', 1, '5d6677fd8c0d0'),
('xagCfe6', 'ILLIMITE', '0', '65677', '17240', 1, '5d6fb326cd2a4'),
('xB7dwYB', '0', '36000', '6000', '1575', 5, '5d4bef949c45a'),
('XCu74gl', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6fb326cd2a4'),
('Xdmf3b3', 'ILLIMITE', '0', '51078', '13407', 1, '5d6feb4e3e682'),
('xe4ZnCA', 'ILLIMITE', '0', '45181', '3953', 1, '5d7cd7e8a93d0'),
('xfY3wta', '1000000', '0', '6000', '3150', 12, '5d4bef5e05f4a'),
('xfz4BYk', '1000000', '0', '6000', '1575', 12, '5d5fd3851e67b'),
('xkhjCZj', '0', '0', '10000', '2625', 4, '5d6677fd8c0d0'),
('xkz5ml3', 'ILLIMITE', '0', '51078', '26815', 1, '5d78dd2877b5b'),
('xntgd86', 'ILLIMITE', '0', '45181', '11860', 1, '5d8511002b1f7'),
('XpjvwvW', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b89b8abc3e'),
('Xqatl6o', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6a6fa3950a2'),
('xsnnnno', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d762f585ac2e'),
('y7C38w1', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d80f97c304c4'),
('y9io27o', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d616a438de64'),
('y9lfaka', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d8b53f60b911'),
('Yepek0f', 'ILLIMITE', '0', '51078', '13407', 1, '5d8b834b301c3'),
('yXBh0xj', 'ILLIMITE', '0', '51078', '4469', 1, '5d616d6a7c14d'),
('YZ9C3jm', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d6677fd8c0d0'),
('Zar0out', 'ILLIMITE', '0', '45181', '3953', 1, '5d71398447cbd'),
('zBAj503', '200000', '0', '6000', '1575', 3, '5d8b7babadbd0'),
('zfBjC6p', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d7298df259f1'),
('zi@gczl', '0', '0', '20000', '5250', 6, '5d8b7babadbd0'),
('zoBf4rq', '50000000', '0', 'GRATUITS', 'GRATUITS', 2, '5d65182fb33f1'),
('zrvoh6g', 'ILLIMITE', '0', '51078', '4469', 1, '5d62ecf32b551'),
('zt4hZ8A', '1000000', '0', '6000', '1575', 12, '5d78cee57376a');

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
('5d4bef5e05f4a', 4562, 2000, 670, 43615, 50847),
('5d4bef949c45a', 1789, 2000, 318, 15887, 19994),
('5d4befcb1c2b9', 2205, 2000, 301, 20047, 24553),
('5d4bf000a3a47', 458, 2000, 64, 2576, 5098),
('5d4bf03d15c61', 1698, 2000, 335, 14982, 19015),
('5d53cfa058ecb', 4562, 2000, 670, 43615, 50847),
('5d566bfc87fc9', 3910, 2000, 603, 37102, 43615),
('5d5fd2f02ab6a', 2538, 2000, 335, 23382, 28255),
('5d5fd3851e67b', 1698, 2000, 335, 14982, 19015),
('5d5fd6cfaa3ab', 1273, 2000, 268, 10726, 14267),
('5d6006b5882e5', 2016, 2000, 453, 18156, 22625),
('5d600aa84b7be', 699, 2000, 111, 4994, 7804),
('5d610a3229507', 558, 2000, 89, 3576, 6223),
('5d6163e7ec519', 1477, 2000, 319, 12772, 16568),
('5d616a438de64', 805, 2000, 151, 6052, 9008),
('5d616d6a7c14d', 558, 2000, 89, 3576, 6223),
('5d62acd295c4f', 558, 2000, 89, 3576, 6223),
('5d62ecf32b551', 558, 2000, 89, 3576, 6223),
('5d63c769c91ae', 3957, 2000, 603, 37574, 44134),
('5d63ca4c4117f', 2882, 2000, 670, 26815, 32367),
('5d650efdab7c1', 558, 2000, 89, 3576, 6223),
('5d65182fb33f1', 2039, 2000, 459, 18389, 22887),
('5d6524c71a21f', 558, 2000, 89, 3576, 6223),
('5d65334705afe', 558, 2000, 89, 3576, 6223),
('5d663c8ebfbe1', 1790, 2000, 381, 15897, 20068),
('5d664f33c355e', 1149, 2000, 237, 9488, 12874),
('5d666163c629e', 648, 2000, 98, 4478, 7224),
('5d6665c151d89', 558, 2000, 89, 3576, 6223),
('5d666654b0d4c', 516, 2000, 79, 3163, 5758),
('5d667472182ed', 1698, 2000, 335, 14982, 19015),
('5d6677fd8c0d0', 2118, 2000, 335, 19182, 23635),
('5d667be0b4780', 1541, 2000, 335, 13407, 17283),
('5d667ce26e444', 2882, 2000, 670, 26815, 32367),
('5d66809a73d9c', 516, 2000, 79, 3163, 5758),
('5d66869910504', 558, 2000, 89, 3576, 6223),
('5d669de96e7a0', 1698, 2000, 335, 14982, 19015),
('5d66a6f24ba16', 3197, 2000, 670, 29965, 35832),
('5d66a9851fc5b', 2882, 2000, 670, 26815, 32367),
('5d6a6fa3950a2', 5408, 3000, 1261, 51082, 60751),
('5d6fb326cd2a4', 2583, 2000, 344, 23832, 28759),
('5d6fe16e16838', 3000, 2000, 453, 27999, 33452),
('5d6feb4e3e682', 1273, 2000, 268, 10726, 14267),
('5d6ff2b3eea97', 4886, 2000, 1021, 46863, 54770),
('5d71087ba679b', 1916, 2000, 429, 17162, 21507),
('5d713540e3744', 516, 2000, 79, 3163, 5758),
('5d713833016fc', 595, 2000, 98, 3953, 6646),
('5d71398447cbd', 516, 2000, 79, 3163, 5758),
('5d71475699c84', 1916, 2000, 429, 17162, 21507),
('5d7245a15f730', 1737, 2000, 344, 15367, 19448),
('5d7278f92b997', 1477, 2000, 319, 12772, 16568),
('5d727b6fc7fa1', 1477, 2000, 319, 12772, 16568),
('5d7284c8de4de', 558, 2000, 89, 3576, 6223),
('5d7287cf86cdd', 558, 2000, 89, 3576, 6223),
('5d7292beb82c4', 3197, 2000, 670, 29965, 35832),
('5d7298df259f1', 3197, 2000, 670, 29965, 35832),
('5d73b2077b8f1', 7217, 3000, 1729, 69165, 81111),
('5d762f585ac2e', 1698, 2000, 335, 14982, 19015),
('5d766b687a3d3', 1698, 2000, 335, 14982, 19015),
('5d78c76a7fbcf', 3197, 2000, 670, 29965, 35832),
('5d78c97173843', 2082, 2000, 431, 18815, 23328),
('5d78ca380dd4b', 1698, 2000, 335, 14982, 19015),
('5d78cee57376a', 2082, 2000, 431, 18815, 23328),
('5d78cf7c85b69', 9572, 3000, 2239, 92723, 107534),
('5d78dd2877b5b', 2345, 2000, 536, 21452, 26333),
('5d78e05c01b44', 2345, 2000, 536, 21452, 26333),
('5d7b94c8cb1c7', 1149, 2000, 237, 9488, 12874),
('5d7b95f85c1bd', 2345, 2000, 536, 21452, 26333),
('5d7cd7e8a93d0', 595, 2000, 98, 3953, 6646),
('5d80f847524bc', 896, 2000, 173, 6957, 10026),
('5d80f97c304c4', 896, 2000, 173, 6957, 10026),
('5d8511002b1f7', 1740, 2000, 281, 15401, 19422),
('5d89f0d7d54e5', 2288, 2000, 344, 20880, 25512),
('5d89f426d2595', 2882, 2000, 670, 26815, 32367),
('5d8a05b78ed7f', 4340, 2000, 536, 41402, 48278),
('5d8a077f66060', 2882, 2000, 670, 26815, 32367),
('5d8b53f60b911', 1698, 2000, 335, 14982, 19015),
('5d8b573cbf202', 1273, 2000, 268, 10726, 14267),
('5d8b661680347', 6986, 3000, 1021, 66863, 77870),
('5d8b68c650a5f', 2882, 2000, 670, 26815, 32367),
('5d8b7babadbd0', 2381, 2000, 335, 21807, 26523),
('5d8b7cd47a989', 1541, 2000, 335, 13407, 17283),
('5d8b834b301c3', 1407, 2000, 301, 12067, 15775),
('5d8b84212129b', 1477, 2000, 319, 12772, 16568),
('5d8b89b8abc3e', 1698, 2000, 335, 14982, 19015),
('5d8b9911979a4', 516, 2000, 79, 3163, 5758),
('5d8ba2e833da6', 1477, 2000, 319, 12772, 16568),
('5d8ba9a3f382d', 1477, 2000, 319, 12772, 16568),
('5d8ccd1fb148a', 4967, 2000, 689, 47665, 55321),
('5d8ce68e45f59', 438, 2000, 59, 2381, 4878);

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
(401, 'Mboup', 'Fallou ', 'Sipres', '785420012', 'fallou.mboup@sahamassurance.com', '$2y$10$xXHQuw0K5PuxcR.jWPKXJO.jwtgL5d1dONCkNQs31t5hu7Q6PmsQ.', 1, 1),
(1063, 'CHEFA VOYAGES ET SERVICES', 'CHEFA VOYAGES ET SERVICES', 'KM 50 RTE DE RUFISQUE', '772621659', 'contact@chefavoyages.com', '$2y$10$lh0lJrT0p4DWrZMrrHqC8ujuU5U5JzoHHBlBt7UWSVxNOReNLvnyq', 2, 1),
(1078, 'Soukeyna', 'SOUKEYNA PRESTATION', 'SICAP FOIRE No10733', '776592491', 'soukeynaservices.sn@gmail.com', '$2y$10$ET2Z.eI02ILbg.KPtqRJeOxlLYgFQvPTpILD/Bno5xQAMVCrKlTje', 2, 1),
(3111, 'Essor', 'Essor Assurance', 'Foire', '773006625', 'essorconseils@gmail.com', '$2y$10$wv8kGHkqQTzPeTjltSLSU.6Np0VRzja4Fx8SoDVg.TXCAgdtyzsfK', 2, 1),
(4039, 'DAFFE', 'SOULEYMANE', 'SICAP', '774501868', 'bounadaffe@gmail.com', '$2y$10$elNIg2OGYKl2YF88Rsbiz.UC.nkfd5qBySBHq5MdTboDa4W6r6HIO', 2, 1),
(4091, 'mbacke', 'samb', 'pikine', '778563256', 'mbacke@saham.com', '$2y$10$QPSZpcAG0WN/c4Hl9Mccnu1eXgXGtE9wNSsJENrBeFxa4uKe.g00K', 2, 1),
(4201, 'Wade Gueye', 'Khady', 'Qrt Arafat 02 Rufisque', '773215584', 'kwgueye@gmail.com', '$2y$10$0X3xuweMfG72KVVOSIkf6eQOqxO/R.tLzqHiao15ybrIzUisDD9FC', 2, 1),
(4209, 'Gueye', 'Astou', '79 GOLF NORD EST', '776666274', 'astouibeu@gmail.com', '$2y$10$BdgpdtK7d71G9vHMW8Ay.e53iIngy3DwjMGlQMyIsIbS4.CIc8ihK', 2, 1),
(4219, 'TRAORE', 'YAKHOUBA', 'KEUR MASSAR', '774380133', 'yakhoubatraore83@gmail.com', '$2y$10$.ORPEJ0TlYdARTppvjNSdeFNaqYD1xC2U1OgImGyN/.X6fIpnQvba', 2, 1),
(4227, 'Ndiaye', 'Amy', 'Ouest Foire', '776311988', 'amy.ndiaye1920@gmail.com', '$2y$10$2AmYIosfzluYhW0R918pNO50XenZge9T8DPazc6TNa8PrS/FGie8i', 2, 1),
(4234, 'DIAGNE', 'AMADOU LAMINE', 'ZONE DE CAPTAGE', '775262690', 'aldstrategies57@yahoo.fr', '$2y$10$AVw5OPESIlrHlYyAqH7Re.7VBCIyLyeu2eAg0Aie3asLZ.TajpDYG', 2, 1),
(4250, 'Ba', 'Ndeye Binta', 'Colobane 42X44', '77 775 1514', 'bintakinema@gmail.com', '$2y$10$/7lLEwEPpdh.rkBUaI/WNuR/E1kb5uWNNuOitoew3SlNQJjQsbjve', 2, 1),
(4251, 'Gueye', 'Alioune', 'Colobane 41 X 38', '776053069', 'lunegueye9@gmail.com', '$2y$10$TSBLY7xyIc67k7e1StHezOlfpkqgbhuWmGB8oBekq/ZzBfG3wkjTm', 2, 1),
(4253, 'Mbaye', 'Ndeye Kene', 'Nord Foire ', '77 101 59 36', 'kenaservices2019@gmail.com', '$2y$10$/DKYd77MkEkcgU2DzKIeSOudvaWrXROpUhRRDat.f9z91SaXGIkOe', 2, 1),
(4254, 'Bo', 'Ndeye Marietou', 'Guediawaye HLM Paris', '775490633', 'bomarietou@gmail.com', '$2y$10$6gWIHnmXZlZqDiuR1d2zZ.q.tJm7cPSgEC2b4L1WTeRy29ilse7qq', 2, 1),
(4273, 'BAO', 'AMINATOU', 'PATTE DOIE', '707544971', 'gm-solutions@outlook.fr', '$2y$10$6lGhqCmlENAymf.qT9ha6OLCgKAUgA3VmRuVXI.CA9ypLhr/QBk5C', 2, 1);

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
('5d4bef5e05f4a', '2019-08-08', '2020-02-07', '08:00:00', '23:59:00', '6'),
('5d4bef949c45a', '2019-08-08', '2019-11-07', '08:00:00', '23:59:00', '3'),
('5d4befcb1c2b9', '2019-08-08', '2019-11-07', '08:00:00', '23:59:00', '3'),
('5d4bf000a3a47', '2019-08-08', '2019-09-07', '08:00:00', '23:59:00', '1'),
('5d4bf03d15c61', '2019-08-08', '2019-11-07', '08:00:00', '23:59:00', '3'),
('5d53cfa058ecb', '2019-08-14', '2020-02-13', '08:00:00', '23:59:00', '6'),
('5d566bfc87fc9', '2019-08-16', '2020-02-15', '08:00:00', '23:59:00', '6'),
('5d5fd2f02ab6a', '2019-08-23', '2019-11-22', '08:00:00', '23:59:00', '3'),
('5d5fd3851e67b', '2019-08-23', '2019-11-22', '08:00:00', '23:59:00', '3'),
('5d5fd6cfaa3ab', '2019-08-23', '2019-11-22', '08:00:00', '23:59:00', '3'),
('5d6006b5882e5', '2019-08-23', '2019-11-22', '08:00:00', '23:59:00', '3'),
('5d600aa84b7be', '2019-08-23', '2019-09-22', '08:00:00', '23:59:00', '1'),
('5d610a3229507', '2019-08-24', '2019-09-23', '08:00:00', '23:59:00', '1'),
('5d6163e7ec519', '2019-08-25', '2019-09-24', '08:00:00', '23:59:00', '1'),
('5d616a438de64', '2019-08-24', '2019-09-23', '08:00:00', '23:59:00', '1'),
('5d616d6a7c14d', '2019-08-24', '2019-09-23', '08:00:00', '23:59:00', '1'),
('5d62acd295c4f', '2019-08-25', '2019-09-24', '08:00:00', '23:59:00', '1'),
('5d62ecf32b551', '2019-08-25', '2019-09-24', '08:00:00', '23:59:00', '1'),
('5d63c769c91ae', '2019-08-26', '2020-02-25', '08:00:00', '23:59:00', '6'),
('5d63ca4c4117f', '2019-08-26', '2020-02-25', '08:00:00', '23:59:00', '6'),
('5d650efdab7c1', '2019-08-27', '2019-09-26', '08:00:00', '23:59:00', '1'),
('5d65182fb33f1', '2019-08-27', '2019-12-26', '08:00:00', '23:59:00', '4'),
('5d6524c71a21f', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d65334705afe', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d663c8ebfbe1', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d664f33c355e', '2019-08-28', '2019-11-27', '08:00:00', '23:59:00', '3'),
('5d666163c629e', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d6665c151d89', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d666654b0d4c', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d667472182ed', '2019-08-28', '2019-11-27', '08:00:00', '23:59:00', '3'),
('5d6677fd8c0d0', '2019-08-29', '2019-11-28', '08:00:00', '23:59:00', '3'),
('5d667be0b4780', '2019-08-28', '2019-11-27', '08:00:00', '23:59:00', '3'),
('5d667ce26e444', '2019-08-28', '2020-02-27', '08:00:00', '23:59:00', '6'),
('5d66809a73d9c', '2019-08-28', '2019-09-27', '08:00:00', '23:59:00', '1'),
('5d66869910504', '2019-08-29', '2019-09-28', '08:00:00', '23:59:00', '1'),
('5d669de96e7a0', '2019-08-28', '2019-11-27', '08:00:00', '23:59:00', '3'),
('5d66a6f24ba16', '2019-08-28', '2020-02-27', '08:00:00', '23:59:00', '6'),
('5d66a9851fc5b', '2019-08-28', '2020-02-27', '08:00:00', '23:59:00', '6'),
('5d6a6fa3950a2', '2019-08-31', '2019-11-30', '08:00:00', '23:59:00', '3'),
('5d6fb326cd2a4', '2019-09-04', '2019-12-03', '08:00:00', '23:59:00', '3'),
('5d6fe16e16838', '2019-09-04', '2019-12-03', '08:00:00', '23:59:00', '3'),
('5d6feb4e3e682', '2019-09-04', '2019-12-03', '08:00:00', '23:59:00', '3'),
('5d6ff2b3eea97', '2019-09-06', '2020-09-05', '08:00:00', '23:59:00', '12'),
('5d71087ba679b', '2019-09-05', '2019-09-04', '08:00:00', '23:59:00', '0'),
('5d713540e3744', '2019-09-05', '2019-10-04', '08:00:00', '23:59:00', '1'),
('5d713833016fc', '2019-09-05', '2019-10-04', '08:00:00', '23:59:00', '1'),
('5d71398447cbd', '2019-09-05', '2019-10-04', '08:00:00', '23:59:00', '1'),
('5d71475699c84', '2019-09-05', '2019-10-04', '08:00:00', '23:59:00', '1'),
('5d7245a15f730', '2019-09-07', '2019-12-06', '08:00:00', '23:59:00', '3'),
('5d7278f92b997', '2019-09-06', '2019-10-05', '08:00:00', '23:59:00', '1'),
('5d727b6fc7fa1', '2019-09-06', '2019-10-05', '08:00:00', '23:59:00', '1'),
('5d7284c8de4de', '2019-09-06', '2019-10-05', '08:00:00', '23:59:00', '1'),
('5d7287cf86cdd', '2019-09-06', '2019-10-05', '08:00:00', '23:59:00', '1'),
('5d7292beb82c4', '2019-09-06', '2020-03-05', '08:00:00', '23:59:00', '6'),
('5d7298df259f1', '2019-09-06', '2020-03-05', '08:00:00', '23:59:00', '6'),
('5d73b2077b8f1', '2019-09-07', '2020-09-06', '08:00:00', '23:59:00', '12'),
('5d762f585ac2e', '2019-09-09', '2019-12-08', '08:00:00', '23:59:00', '3'),
('5d766b687a3d3', '2019-09-09', '2019-12-08', '08:00:00', '23:59:00', '3'),
('5d78c76a7fbcf', '2019-09-11', '2020-03-10', '08:00:00', '23:59:00', '6'),
('5d78c97173843', '2019-09-11', '2019-12-10', '08:00:00', '23:59:00', '3'),
('5d78ca380dd4b', '2019-09-11', '2019-12-10', '08:00:00', '23:59:00', '3'),
('5d78cee57376a', '2019-09-11', '2019-12-10', '08:00:00', '23:59:00', '3'),
('5d78cf7c85b69', '2019-09-11', '2020-03-10', '08:00:00', '23:59:00', '6'),
('5d78dd2877b5b', '2019-09-11', '2020-03-10', '08:00:00', '23:59:00', '6'),
('5d78e05c01b44', '2019-09-12', '2020-03-11', '08:00:00', '23:59:00', '6'),
('5d7b94c8cb1c7', '2019-09-13', '2019-12-12', '08:00:00', '23:59:00', '3'),
('5d7b95f85c1bd', '2019-09-13', '2020-03-12', '08:00:00', '23:59:00', '6'),
('5d7cd7e8a93d0', '2019-09-14', '2019-10-13', '08:00:00', '23:59:00', '1'),
('5d80f847524bc', '2019-09-17', '2019-12-16', '08:00:00', '23:59:00', '3'),
('5d80f97c304c4', '2019-09-17', '2019-12-16', '08:00:00', '23:59:00', '3'),
('5d8511002b1f7', '2019-09-20', '2019-12-19', '08:00:00', '23:59:00', '3'),
('5d89f0d7d54e5', '2019-09-24', '2019-12-23', '08:00:00', '23:59:00', '3'),
('5d89f426d2595', '2019-09-24', '2020-03-23', '08:00:00', '23:59:00', '6'),
('5d8a05b78ed7f', '2019-09-24', '2020-03-23', '08:00:00', '23:59:00', '6'),
('5d8a077f66060', '2019-09-24', '2020-03-23', '08:00:00', '23:59:00', '6'),
('5d8b53f60b911', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b573cbf202', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b661680347', '2019-09-25', '2020-09-24', '08:00:00', '23:59:00', '12'),
('5d8b68c650a5f', '2019-09-25', '2020-03-24', '08:00:00', '23:59:00', '6'),
('5d8b7babadbd0', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b7cd47a989', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b834b301c3', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b84212129b', '2019-09-26', '2019-10-25', '08:00:00', '23:59:00', '1'),
('5d8b89b8abc3e', '2019-09-25', '2019-12-24', '08:00:00', '23:59:00', '3'),
('5d8b9911979a4', '2019-09-25', '2019-10-24', '08:00:00', '23:59:00', '1'),
('5d8ba2e833da6', '2019-09-25', '2019-10-24', '08:00:00', '23:59:00', '1'),
('5d8ba9a3f382d', '2019-09-25', '2019-10-24', '08:00:00', '23:59:00', '1'),
('5d8ccd1fb148a', '2019-09-26', '2020-03-25', '08:00:00', '23:59:00', '6'),
('5d8ce68e45f59', '2019-09-26', '2019-10-25', '08:00:00', '23:59:00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `police`
--

CREATE TABLE `police` (
  `id_police` varchar(16) NOT NULL,
  `num_police` varchar(16) NOT NULL,
  `date_police` datetime NOT NULL,
  `numFacture` varchar(20) DEFAULT NULL,
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
('5d4bef5e05f4a', '41000001', '2019-08-08 09:46:06', '41000001-2019-4091', '0159491', 1, 'En cours', 4091, '5d4bef5e05f4a', '5d4bef5e05f4a', '5d4bef5e05f4a', '5d4bef5e05f4a', '5d4bef5e05f4a', '5d4bef5e05f4a'),
('5d4bef949c45a', '41000002', '2019-08-08 09:47:00', '41000002-2019-4091', '0159492', 1, 'En cours', 4091, '5d4bef949c45a', '5d4bef949c45a', '5d4bef949c45a', '5d4bef949c45a', '5d4bef949c45a', '5d4bef949c45a'),
('5d4befcb1c2b9', '41000003', '2019-08-08 09:47:55', '41000003-2019-4091', '0159493', 1, 'En cours', 4091, '5d4befcb1c2b9', '5d4befcb1c2b9', '5d4befcb1c2b9', '5d4befcb1c2b9', '5d4befcb1c2b9', '5d4befcb1c2b9'),
('5d4bf000a3a47', '45000001', '2019-08-08 09:48:48', '45000001-2019-4091', '0159494', 1, 'En cours', 4091, '5d4bf000a3a47', '5d4bf000a3a47', '5d4bf000a3a47', '5d4bf000a3a47', '5d4bf000a3a47', '5d4bf000a3a47'),
('5d4bf03d15c61', '41000004', '2019-08-08 09:49:49', '41000004-2019-4091', '0159495', 1, 'En cours', 4091, '5d4bf03d15c61', '5d4bf03d15c61', '5d4bf03d15c61', '5d4bf03d15c61', '5d4bf03d15c61', '5d4bf03d15c61'),
('5d53cfa058ecb', '41000005', '2019-08-14 09:08:48', '41000005-2019-4091', '0159496', 1, 'En cours', 4091, '5d53cfa058ecb', '5d53cfa058ecb', '5d53cfa058ecb', '5d53cfa058ecb', '5d53cfa058ecb', '5d53cfa058ecb'),
('5d566bfc87fc9', '41000006', '2019-08-16 08:40:28', '41000006-2019-4091', '0159497', 1, 'Annule', 4091, '5d566bfc87fc9', '5d566bfc87fc9', '5d566bfc87fc9', '5d566bfc87fc9', '5d566bfc87fc9', '5d566bfc87fc9'),
('5d5fd2f02ab6a', '41000007', '2019-08-23 11:50:08', '41000007-2019-4091', '0159498', 1, 'Annule', 4091, '5d5fd2f02ab6a', '5d5fd2f02ab6a', '5d5fd2f02ab6a', '5d5fd2f02ab6a', '5d5fd2f02ab6a', '5d5fd2f02ab6a'),
('5d5fd3851e67b', '41000008', '2019-08-23 11:52:37', '41000008-2019-4091', '0159498', 1, 'En cours', 4091, '5d5fd3851e67b', '5d5fd3851e67b', '5d5fd3851e67b', '5d5fd3851e67b', '5d5fd3851e67b', '5d5fd3851e67b'),
('5d5fd6cfaa3ab', '41000009', '2019-08-23 12:06:39', '41000009-2019-4209', '0174366', 1, 'En cours', 4209, '5d5fd6cfaa3ab', '5d5fd6cfaa3ab', '5d5fd6cfaa3ab', '5d5fd6cfaa3ab', '5d5fd6cfaa3ab', '5d5fd6cfaa3ab'),
('5d6006b5882e5', '41000010', '2019-08-23 15:31:01', '41000010-2019-4209', '0174367', 1, 'En cours', 4209, '5d6006b5882e5', '5d6006b5882e5', '5d6006b5882e5', '5d6006b5882e5', '5d6006b5882e5', '5d6006b5882e5'),
('5d600aa84b7be', '41000011', '2019-08-23 15:47:52', '41000011-2019-4091', '0159500', 1, 'En cours', 4091, '5d600aa84b7be', '5d600aa84b7be', '5d600aa84b7be', '5d600aa84b7be', '5d600aa84b7be', '5d600aa84b7be'),
('5d610a3229507', '41000012', '2019-08-24 09:58:10', '41000012-2019-4209', '0174368', 1, 'En cours', 4209, '5d610a3229507', '5d610a3229507', '5d610a3229507', '5d610a3229507', '5d610a3229507', '5d610a3229507'),
('5d6163e7ec519', '44000001', '2019-08-24 16:20:55', '44000001-2019-4209', '', 1, 'En cours', 4209, '5d6163e7ec519', '5d6163e7ec519', '5d6163e7ec519', '5d6163e7ec519', '5d6163e7ec519', '5d6163e7ec519'),
('5d616a438de64', '41000013', '2019-08-24 16:48:03', '41000013-2019-4209', '0174369', 1, 'En cours', 4209, '5d616a438de64', '5d616a438de64', '5d616a438de64', '5d616a438de64', '5d616a438de64', '5d616a438de64'),
('5d616d6a7c14d', '41000014', '2019-08-24 17:01:30', '41000014-2019-4209', '0174370', 1, 'En cours', 4209, '5d616d6a7c14d', '5d616d6a7c14d', '5d616d6a7c14d', '5d616d6a7c14d', '5d616d6a7c14d', '5d616d6a7c14d'),
('5d62acd295c4f', '41000015', '2019-08-25 15:44:18', '41000015-2019-4209', '0174371', 1, 'En cours', 4209, '5d62acd295c4f', '5d62acd295c4f', '5d62acd295c4f', '5d62acd295c4f', '5d62acd295c4f', '5d62acd295c4f'),
('5d62ecf32b551', '41000016', '2019-08-25 20:17:55', '41000016-2019-4209', '0174372', 1, 'En cours', 4209, '5d62ecf32b551', '5d62ecf32b551', '5d62ecf32b551', '5d62ecf32b551', '5d62ecf32b551', '5d62ecf32b551'),
('5d63c769c91ae', '41000017', '2019-08-26 11:50:01', '41000017-2019-4091', '0159501', 1, 'Annule', 4091, '5d63c769c91ae', '5d63c769c91ae', '5d63c769c91ae', '5d63c769c91ae', '5d63c769c91ae', '5d63c769c91ae'),
('5d63ca4c4117f', '41000018', '2019-08-26 12:03:59', '41000018-2019-4091', '0159501', 1, 'En cours', 4091, '5d63ca4c4117f', '5d63ca4c4117f', '5d63ca4c4117f', '5d63ca4c4117f', '5d63ca4c4117f', '5d63ca4c4117f'),
('5d650efdab7c1', '41000019', '2019-08-27 11:07:41', '41000019-2019-4209', '0174373', 1, 'En cours', 4209, '5d650efdab7c1', '5d650efdab7c1', '5d650efdab7c1', '5d650efdab7c1', '5d650efdab7c1', '5d650efdab7c1'),
('5d65182fb33f1', '41000020', '2019-08-27 11:46:55', '41000020-2019-4209', '0174374', 1, 'En cours', 4209, '5d65182fb33f1', '5d65182fb33f1', '5d65182fb33f1', '5d65182fb33f1', '5d65182fb33f1', '5d65182fb33f1'),
('5d6524c71a21f', '41000021', '2019-08-27 12:40:39', '41000021-2019-4201', '0173702', 1, 'Annule', 4201, '5d6524c71a21f', '5d6524c71a21f', '5d6524c71a21f', '5d6524c71a21f', '5d6524c71a21f', '5d6524c71a21f'),
('5d65334705afe', '41000022', '2019-08-27 13:42:31', '41000022-2019-4201', '0173702', 1, 'En cours', 4201, '5d65334705afe', '5d65334705afe', '5d65334705afe', '5d65334705afe', '5d65334705afe', '5d65334705afe'),
('5d663c8ebfbe1', '4201/FD1', '2019-08-28 10:34:22', '', 'NULL', 0, 'En cours', 4201, '5d663c8ebfbe1', '5d663c8ebfbe1', '5d663c8ebfbe1', '5d663c8ebfbe1', '5d663c8ebfbe1', '5d663c8ebfbe1'),
('5d664f33c355e', '41000023', '2019-08-28 09:53:55', '41000023-2019-4209', '0174376', 1, 'En cours', 4209, '5d664f33c355e', '5d664f33c355e', '5d664f33c355e', '5d664f33c355e', '5d664f33c355e', '5d664f33c355e'),
('5d666163c629e', '41000024', '2019-08-28 11:11:31', '41000024-2019-4091', '0159499', 1, 'Annule', 4091, '5d666163c629e', '5d666163c629e', '5d666163c629e', '5d666163c629e', '5d666163c629e', '5d666163c629e'),
('5d6665c151d89', '41000025', '2019-08-28 11:30:09', '41000025-2019-4209', '0174377', 1, 'En cours', 4209, '5d6665c151d89', '5d6665c151d89', '5d6665c151d89', '5d6665c151d89', '5d6665c151d89', '5d6665c151d89'),
('5d666654b0d4c', '41000026', '2019-08-28 11:32:36', '41000026-2019-4209', '0174378', 1, 'En cours', 4209, '5d666654b0d4c', '5d666654b0d4c', '5d666654b0d4c', '5d666654b0d4c', '5d666654b0d4c', '5d666654b0d4c'),
('5d667472182ed', '41000027', '2019-08-28 12:32:50', '41000027-2019-4091', '0159502', 1, 'En cours', 4091, '5d667472182ed', '5d667472182ed', '5d667472182ed', '5d667472182ed', '5d667472182ed', '5d667472182ed'),
('5d6677fd8c0d0', '41000028', '2019-08-28 12:47:57', '41000028-2019-4091', '0159506', 1, 'En cours', 4091, '5d6677fd8c0d0', '5d6677fd8c0d0', '5d6677fd8c0d0', '5d6677fd8c0d0', '5d6677fd8c0d0', '5d6677fd8c0d0'),
('5d667be0b4780', '4253/YGR', '2019-08-28 15:04:32', '', 'NULL', 0, 'En cours', 4253, '5d667be0b4780', '5d667be0b4780', '5d667be0b4780', '5d667be0b4780', '5d667be0b4780', '5d667be0b4780'),
('5d667ce26e444', '41000029', '2019-08-28 13:09:37', '41000029-2019-4091', '0159503', 1, 'En cours', 4091, '5d667ce26e444', '5d667ce26e444', '5d667ce26e444', '5d667ce26e444', '5d667ce26e444', '5d667ce26e444'),
('5d66809a73d9c', '41000030', '2019-08-28 13:24:42', '41000030-2019-4209', '0174379', 1, 'En cours', 4209, '5d66809a73d9c', '5d66809a73d9c', '5d66809a73d9c', '5d66809a73d9c', '5d66809a73d9c', '5d66809a73d9c'),
('5d66869910504', '41000031', '2019-08-28 13:50:17', '41000031-2019-4209', '0174380', 1, 'En cours', 4209, '5d66869910504', '5d66869910504', '5d66869910504', '5d66869910504', '5d66869910504', '5d66869910504'),
('5d669de96e7a0', '41000032', '2019-08-28 15:29:45', '41000032-2019-4091', '0159504', 1, 'En cours', 4091, '5d669de96e7a0', '5d669de96e7a0', '5d669de96e7a0', '5d669de96e7a0', '5d669de96e7a0', '5d669de96e7a0'),
('5d66a6f24ba16', '41000033', '2019-08-28 16:08:18', '41000033-2019-4091', '0159508', 1, 'A annuler', 4091, '5d66a6f24ba16', '5d66a6f24ba16', '5d66a6f24ba16', '5d66a6f24ba16', '5d66a6f24ba16', '5d66a6f24ba16'),
('5d66a9851fc5b', '4091/QdF', '2019-08-28 18:19:17', '', 'NULL', 0, 'En cours', 4091, '5d66a9851fc5b', '5d66a9851fc5b', '5d66a9851fc5b', '5d66a9851fc5b', '5d66a9851fc5b', '5d66a9851fc5b'),
('5d6a6fa3950a2', '42000001', '2019-08-31 13:01:23', '42000001-2019-4201', '0173703', 1, 'En cours', 4201, '5d6a6fa3950a2', '5d6a6fa3950a2', '5d6a6fa3950a2', '5d6a6fa3950a2', '5d6a6fa3950a2', '5d6a6fa3950a2'),
('5d6fb326cd2a4', '41000034', '2019-09-04 12:50:46', '41000034-2019-4201', '0173713', 1, 'En cours', 4201, '5d6fb326cd2a4', '5d6fb326cd2a4', '5d6fb326cd2a4', '5d6fb326cd2a4', '5d6fb326cd2a4', '5d6fb326cd2a4'),
('5d6fe16e16838', '41000035', '2019-09-04 16:08:14', '41000035-2019-4091', '0159505', 1, 'En cours', 4091, '5d6fe16e16838', '5d6fe16e16838', '5d6fe16e16838', '5d6fe16e16838', '5d6fe16e16838', '5d6fe16e16838'),
('5d6feb4e3e682', '41000036', '2019-09-04 16:50:22', '41000036-2019-4254', '0174024', 1, 'En cours', 4254, '5d6feb4e3e682', '5d6feb4e3e682', '5d6feb4e3e682', '5d6feb4e3e682', '5d6feb4e3e682', '5d6feb4e3e682'),
('5d6ff2b3eea97', '41000037', '2019-09-04 17:21:56', '41000037-2019-4254', '0174025', 1, 'En cours', 4254, '5d6ff2b3eea97', '5d6ff2b3eea97', '5d6ff2b3eea97', '5d6ff2b3eea97', '5d6ff2b3eea97', '5d6ff2b3eea97'),
('5d71087ba679b', '4091/3XE', '2019-09-05 15:07:07', '', 'NULL', 0, 'En cours', 4091, '5d71087ba679b', '5d71087ba679b', '5d71087ba679b', '5d71087ba679b', '5d71087ba679b', '5d71087ba679b'),
('5d713540e3744', '41000038', '2019-09-05 16:18:08', '41000038-2019-4201', '0173707', 1, 'En cours', 4201, '5d713540e3744', '5d713540e3744', '5d713540e3744', '5d713540e3744', '5d713540e3744', '5d713540e3744'),
('5d713833016fc', '41000039', '2019-09-05 16:30:43', '41000039-2019-4201', '0173706', 1, 'Annule', 4201, '5d713833016fc', '5d713833016fc', '5d713833016fc', '5d713833016fc', '5d713833016fc', '5d713833016fc'),
('5d71398447cbd', '41000040', '2019-09-05 16:36:20', '41000040-2019-4201', '0173708', 1, 'Annule', 4201, '5d71398447cbd', '5d71398447cbd', '5d71398447cbd', '5d71398447cbd', '5d71398447cbd', '5d71398447cbd'),
('5d71475699c84', '4250/EN3', '2019-09-05 19:35:18', '', 'NULL', 0, 'En cours', 4250, '5d71475699c84', '5d71475699c84', '5d71475699c84', '5d71475699c84', '5d71475699c84', '5d71475699c84'),
('5d7245a15f730', '41000041', '2019-09-06 11:40:17', '41000041-2019-4254', '0174026', 1, 'En cours', 4254, '5d7245a15f730', '5d7245a15f730', '5d7245a15f730', '5d7245a15f730', '5d7245a15f730', '5d7245a15f730'),
('5d7278f92b997', '44000002', '2019-09-06 15:19:21', '44000002-2019-4250', '', 1, 'Annule', 4250, '5d7278f92b997', '5d7278f92b997', '5d7278f92b997', '5d7278f92b997', '5d7278f92b997', '5d7278f92b997'),
('5d727b6fc7fa1', '44000003', '2019-09-06 15:29:51', '44000003-2019-4250', '', 1, 'En cours', 4250, '5d727b6fc7fa1', '5d727b6fc7fa1', '5d727b6fc7fa1', '5d727b6fc7fa1', '5d727b6fc7fa1', '5d727b6fc7fa1'),
('5d7284c8de4de', '41000042', '2019-09-06 16:09:44', '41000042-2019-4201', '0173709', 1, 'En cours', 4201, '5d7284c8de4de', '5d7284c8de4de', '5d7284c8de4de', '5d7284c8de4de', '5d7284c8de4de', '5d7284c8de4de'),
('5d7287cf86cdd', '41000043', '2019-09-06 16:22:39', '41000043-2019-4201', '0173710', 1, 'Annule', 4201, '5d7287cf86cdd', '5d7287cf86cdd', '5d7287cf86cdd', '5d7287cf86cdd', '5d7287cf86cdd', '5d7287cf86cdd'),
('5d7292beb82c4', '41000044', '2019-09-06 17:09:18', '41000044-2019-4091', '0159507', 1, 'En cours', 4091, '5d7292beb82c4', '5d7292beb82c4', '5d7292beb82c4', '5d7292beb82c4', '5d7292beb82c4', '5d7292beb82c4'),
('5d7298df259f1', '41000045', '2019-09-06 17:35:27', '41000045-2019-4091', '0159509', 1, 'En cours', 4091, '5d7298df259f1', '5d7298df259f1', '5d7298df259f1', '5d7298df259f1', '5d7298df259f1', '5d7298df259f1'),
('5d73b2077b8f1', '41000046', '2019-09-07 13:35:03', '41000046-2019-4254', '0174027', 1, 'En cours', 4254, '5d73b2077b8f1', '5d73b2077b8f1', '5d73b2077b8f1', '5d73b2077b8f1', '5d73b2077b8f1', '5d73b2077b8f1'),
('5d762f585ac2e', '41000047', '2019-09-09 10:54:16', '41000047-2019-4091', '0159510', 1, 'En cours', 4091, '5d762f585ac2e', '5d762f585ac2e', '5d762f585ac2e', '5d762f585ac2e', '5d762f585ac2e', '5d762f585ac2e'),
('5d766b687a3d3', '41000048', '2019-09-09 15:10:32', '41000048-2019-4091', '4443336', 1, 'En cours', 4091, '5d766b687a3d3', '5d766b687a3d3', '5d766b687a3d3', '5d766b687a3d3', '5d766b687a3d3', '5d766b687a3d3'),
('5d78c76a7fbcf', '41000049', '2019-09-11 10:07:38', '41000049-2019-4091', '4443337', 1, 'En cours', 4091, '5d78c76a7fbcf', '5d78c76a7fbcf', '5d78c76a7fbcf', '5d78c76a7fbcf', '5d78c76a7fbcf', '5d78c76a7fbcf'),
('5d78c97173843', '41000050', '2019-09-11 10:16:17', '41000050-2019-4091', '4444440', 1, 'En cours', 4091, '5d78c97173843', '5d78c97173843', '5d78c97173843', '5d78c97173843', '5d78c97173843', '5d78c97173843'),
('5d78ca380dd4b', '41000051', '2019-09-11 10:19:36', '41000051-2019-4091', '4444450', 1, 'En cours', 4091, '5d78ca380dd4b', '5d78ca380dd4b', '5d78ca380dd4b', '5d78ca380dd4b', '5d78ca380dd4b', '5d78ca380dd4b'),
('5d78cee57376a', '41000052', '2019-09-11 10:39:33', '41000052-2019-4091', '4443338', 1, 'En cours', 4091, '5d78cee57376a', '5d78cee57376a', '5d78cee57376a', '5d78cee57376a', '5d78cee57376a', '5d78cee57376a'),
('5d78cf7c85b69', '42000002', '2019-09-11 10:42:04', '42000002-2019-4091', '4443339', 1, 'En cours', 4091, '5d78cf7c85b69', '5d78cf7c85b69', '5d78cf7c85b69', '5d78cf7c85b69', '5d78cf7c85b69', '5d78cf7c85b69'),
('5d78dd2877b5b', '41000053', '2019-09-11 11:40:24', '41000053-2019-4254', '0174028', 1, 'En cours', 4254, '5d78dd2877b5b', '5d78dd2877b5b', '5d78dd2877b5b', '5d78dd2877b5b', '5d78dd2877b5b', '5d78dd2877b5b'),
('5d78e05c01b44', '41000054', '2019-09-11 11:54:04', '41000054-2019-4254', '0174029', 1, 'En cours', 4254, '5d78e05c01b44', '5d78e05c01b44', '5d78e05c01b44', '5d78e05c01b44', '5d78e05c01b44', '5d78e05c01b44'),
('5d7b94c8cb1c7', '41000055', '2019-09-13 13:08:24', '41000055-2019-4254', '0174030', 1, 'En cours', 4254, '5d7b94c8cb1c7', '5d7b94c8cb1c7', '5d7b94c8cb1c7', '5d7b94c8cb1c7', '5d7b94c8cb1c7', '5d7b94c8cb1c7'),
('5d7b95f85c1bd', '41000056', '2019-09-13 13:13:28', '41000056-2019-4254', '0174031', 1, 'En cours', 4254, '5d7b95f85c1bd', '5d7b95f85c1bd', '5d7b95f85c1bd', '5d7b95f85c1bd', '5d7b95f85c1bd', '5d7b95f85c1bd'),
('5d7cd7e8a93d0', '41000057', '2019-09-14 12:07:04', '41000057-2019-4250', '0164711', 1, 'En cours', 4250, '5d7cd7e8a93d0', '5d7cd7e8a93d0', '5d7cd7e8a93d0', '5d7cd7e8a93d0', '5d7cd7e8a93d0', '5d7cd7e8a93d0'),
('5d80f847524bc', '4250/7SA', '2019-09-17 17:14:15', '', 'NULL', 0, 'En cours', 4250, '5d80f847524bc', '5d80f847524bc', '5d80f847524bc', '5d80f847524bc', '5d80f847524bc', '5d80f847524bc'),
('5d80f97c304c4', '45000002', '2019-09-17 15:19:24', '45000002-2019-4250', '0164712', 1, 'En cours', 4250, '5d80f97c304c4', '5d80f97c304c4', '5d80f97c304c4', '5d80f97c304c4', '5d80f97c304c4', '5d80f97c304c4'),
('5d8511002b1f7', '41000058', '2019-09-20 17:48:48', '41000058-2019-4250', '0164714', 1, 'En cours', 4250, '5d8511002b1f7', '5d8511002b1f7', '5d8511002b1f7', '5d8511002b1f7', '5d8511002b1f7', '5d8511002b1f7'),
('5d89f0d7d54e5', '41000059', '2019-09-24 10:32:55', '41000059-2019-4091', '0159499', 1, 'En cours', 4091, '5d89f0d7d54e5', '5d89f0d7d54e5', '5d89f0d7d54e5', '5d89f0d7d54e5', '5d89f0d7d54e5', '5d89f0d7d54e5'),
('5d89f426d2595', '4091/W1X', '2019-09-24 12:47:02', '', 'NULL', 0, 'En cours', 4091, '5d89f426d2595', '5d89f426d2595', '5d89f426d2595', '5d89f426d2595', '5d89f426d2595', '5d89f426d2595'),
('5d8a05b78ed7f', '41000060', '2019-09-24 12:01:59', '41000060-2019-4091', '0159497', 1, 'En cours', 4091, '5d8a05b78ed7f', '5d8a05b78ed7f', '5d8a05b78ed7f', '5d8a05b78ed7f', '5d8a05b78ed7f', '5d8a05b78ed7f'),
('5d8a077f66060', '4091/SAP', '2019-09-24 14:09:35', '', 'NULL', 0, 'En cours', 4091, '5d8a077f66060', '5d8a077f66060', '5d8a077f66060', '5d8a077f66060', '5d8a077f66060', '5d8a077f66060'),
('5d8b53f60b911', '41000061', '2019-09-25 11:48:06', '41000061-2019-4091', '1111003', 1, 'A annuler', 4091, '5d8b53f60b911', '5d8b53f60b911', '5d8b53f60b911', '5d8b53f60b911', '5d8b53f60b911', '5d8b53f60b911'),
('5d8b573cbf202', '4091/cPQ', '2019-09-25 14:02:04', '', 'NULL', 0, 'En cours', 4091, '5d8b573cbf202', '5d8b573cbf202', '5d8b573cbf202', '5d8b573cbf202', '5d8b573cbf202', '5d8b573cbf202'),
('5d8b661680347', '41000062', '2019-09-25 13:05:26', '41000062-2019-4091', '1111002', 1, 'A annuler', 4091, '5d8b661680347', '5d8b661680347', '5d8b661680347', '5d8b661680347', '5d8b661680347', '5d8b661680347'),
('5d8b68c650a5f', '4091/bK0', '2019-09-25 15:16:54', '', 'NULL', 0, 'En cours', 4091, '5d8b68c650a5f', '5d8b68c650a5f', '5d8b68c650a5f', '5d8b68c650a5f', '5d8b68c650a5f', '5d8b68c650a5f'),
('5d8b7babadbd0', '41000063', '2019-09-25 14:37:31', '41000063-2019-4091', '1111005', 1, 'A annuler', 4091, '5d8b7babadbd0', '5d8b7babadbd0', '5d8b7babadbd0', '5d8b7babadbd0', '5d8b7babadbd0', '5d8b7babadbd0'),
('5d8b7cd47a989', '4091/RQ8', '2019-09-25 16:42:28', '', 'NULL', 0, 'En cours', 4091, '5d8b7cd47a989', '5d8b7cd47a989', '5d8b7cd47a989', '5d8b7cd47a989', '5d8b7cd47a989', '5d8b7cd47a989'),
('5d8b834b301c3', '41000064', '2019-09-25 15:10:03', '41000064-2019-4250', '0164715', 1, 'En cours', 4250, '5d8b834b301c3', '5d8b834b301c3', '5d8b834b301c3', '5d8b834b301c3', '5d8b834b301c3', '5d8b834b301c3'),
('5d8b84212129b', '44000004', '2019-09-25 15:13:37', '44000004-2019-4039', '', 1, 'En cours', 4039, '5d8b84212129b', '5d8b84212129b', '5d8b84212129b', '5d8b84212129b', '5d8b84212129b', '5d8b84212129b'),
('5d8b89b8abc3e', '41000065', '2019-09-25 15:37:28', '41000065-2019-4091', '1111004', 1, 'En cours', 4091, '5d8b89b8abc3e', '5d8b89b8abc3e', '5d8b89b8abc3e', '5d8b89b8abc3e', '5d8b89b8abc3e', '5d8b89b8abc3e'),
('5d8b9911979a4', '41000066', '2019-09-25 16:42:57', '41000066-2019-1063', '0176278', 1, 'En cours', 1063, '5d8b9911979a4', '5d8b9911979a4', '5d8b9911979a4', '5d8b9911979a4', '5d8b9911979a4', '5d8b9911979a4'),
('5d8ba2e833da6', '44000005', '2019-09-25 17:24:56', '44000005-2019-4039', '', 1, 'En cours', 4039, '5d8ba2e833da6', '5d8ba2e833da6', '5d8ba2e833da6', '5d8ba2e833da6', '5d8ba2e833da6', '5d8ba2e833da6'),
('5d8ba9a3f382d', '44000006', '2019-09-25 17:53:40', '44000006-2019-4039', '', 1, 'En cours', 4039, '5d8ba9a3f382d', '5d8ba9a3f382d', '5d8ba9a3f382d', '5d8ba9a3f382d', '5d8ba9a3f382d', '5d8ba9a3f382d'),
('5d8ccd1fb148a', '41000067', '2019-09-26 14:37:19', '41000067-2019-4209', '0175805', 1, 'En cours', 4209, '5d8ccd1fb148a', '5d8ccd1fb148a', '5d8ccd1fb148a', '5d8ccd1fb148a', '5d8ccd1fb148a', '5d8ccd1fb148a'),
('5d8ce68e45f59', '1063/5HB', '2019-09-26 18:25:50', '', 'NULL', 0, 'En cours', 1063, '5d8ce68e45f59', '5d8ce68e45f59', '5d8ce68e45f59', '5d8ce68e45f59', '5d8ce68e45f59', '5d8ce68e45f59');

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
('5d4bef5e05f4a', 0, 0, 0, 0),
('5d4bef949c45a', 5, 670, 0, 0),
('5d4befcb1c2b9', 10, 1340, 5, 420),
('5d4bf000a3a47', 0, 0, 0, 0),
('5d4bf03d15c61', 0, 0, 0, 0),
('5d53cfa058ecb', 0, 0, 0, 0),
('5d566bfc87fc9', 10, 2681, 5, 682),
('5d5fd2f02ab6a', 0, 0, 0, 0),
('5d5fd3851e67b', 0, 0, 0, 0),
('5d5fd6cfaa3ab', 20, 2681, 0, 0),
('5d6006b5882e5', 20, 4538, 0, 0),
('5d600aa84b7be', 0, 0, 0, 0),
('5d610a3229507', 20, 893, 0, 0),
('5d6163e7ec519', 0, 0, 0, 0),
('5d616a438de64', 20, 1512, 0, 0),
('5d616d6a7c14d', 20, 893, 0, 0),
('5d62acd295c4f', 20, 893, 0, 0),
('5d62ecf32b551', 20, 893, 0, 0),
('5d63c769c91ae', 10, 2681, 20, 3360),
('5d63ca4c4117f', 0, 0, 0, 0),
('5d650efdab7c1', 20, 893, 0, 0),
('5d65182fb33f1', 20, 4597, 0, 0),
('5d6524c71a21f', 20, 893, 0, 0),
('5d65334705afe', 20, 893, 0, 0),
('5d663c8ebfbe1', 0, 0, 0, 0),
('5d664f33c355e', 20, 2372, 0, 0),
('5d666163c629e', 0, 0, 0, 0),
('5d6665c151d89', 20, 893, 0, 0),
('5d666654b0d4c', 20, 790, 0, 0),
('5d667472182ed', 0, 0, 0, 0),
('5d6677fd8c0d0', 0, 0, 0, 0),
('5d667be0b4780', 0, 0, 0, 0),
('5d667ce26e444', 0, 0, 0, 0),
('5d66809a73d9c', 20, 790, 0, 0),
('5d66869910504', 20, 893, 0, 0),
('5d669de96e7a0', 0, 0, 0, 0),
('5d66a6f24ba16', 0, 0, 0, 0),
('5d66a9851fc5b', 0, 0, 0, 0),
('5d6a6fa3950a2', 20, 12612, 0, 0),
('5d6fb326cd2a4', 20, 3448, 0, 0),
('5d6fe16e16838', 20, 4538, 0, 0),
('5d6feb4e3e682', 20, 2681, 0, 0),
('5d6ff2b3eea97', 20, 10215, 0, 0),
('5d71087ba679b', 0, 0, 0, 0),
('5d713540e3744', 20, 790, 0, 0),
('5d713833016fc', 0, 0, 0, 0),
('5d71398447cbd', 20, 790, 0, 0),
('5d71475699c84', 0, 0, 0, 0),
('5d7245a15f730', 20, 3448, 0, 0),
('5d7278f92b997', 0, 0, 0, 0),
('5d727b6fc7fa1', 0, 0, 0, 0),
('5d7284c8de4de', 20, 893, 0, 0),
('5d7287cf86cdd', 20, 893, 0, 0),
('5d7292beb82c4', 0, 0, 0, 0),
('5d7298df259f1', 0, 0, 0, 0),
('5d73b2077b8f1', 20, 17291, 0, 0),
('5d762f585ac2e', 0, 0, 0, 0),
('5d766b687a3d3', 0, 0, 0, 0),
('5d78c76a7fbcf', 0, 0, 0, 0),
('5d78c97173843', 0, 0, 0, 0),
('5d78ca380dd4b', 0, 0, 0, 0),
('5d78cee57376a', 0, 0, 0, 0),
('5d78cf7c85b69', 0, 0, 0, 0),
('5d78dd2877b5b', 20, 5363, 0, 0),
('5d78e05c01b44', 20, 5363, 0, 0),
('5d7b94c8cb1c7', 20, 2372, 0, 0),
('5d7b95f85c1bd', 20, 5363, 0, 0),
('5d7cd7e8a93d0', 0, 0, 0, 0),
('5d80f847524bc', 10, 773, 0, 0),
('5d80f97c304c4', 10, 773, 0, 0),
('5d8511002b1f7', 5, 593, 0, 0),
('5d89f0d7d54e5', 20, 3448, 25, 2362),
('5d89f426d2595', 0, 0, 0, 0),
('5d8a05b78ed7f', 20, 5363, 0, 0),
('5d8a077f66060', 0, 0, 0, 0),
('5d8b53f60b911', 0, 0, 0, 0),
('5d8b573cbf202', 20, 2681, 0, 0),
('5d8b661680347', 20, 10215, 0, 0),
('5d8b68c650a5f', 0, 0, 0, 0),
('5d8b7babadbd0', 0, 0, 0, 0),
('5d8b7cd47a989', 0, 0, 0, 0),
('5d8b834b301c3', 10, 1340, 0, 0),
('5d8b84212129b', 0, 0, 0, 0),
('5d8b89b8abc3e', 0, 0, 0, 0),
('5d8b9911979a4', 20, 790, 0, 0),
('5d8ba2e833da6', 0, 0, 0, 0),
('5d8ba9a3f382d', 0, 0, 0, 0),
('5d8ccd1fb148a', 20, 6896, 0, 0),
('5d8ce68e45f59', 20, 595, 0, 0);

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
('5d4bef5e05f4a', 'CITROEN', 'C4', 'DK-8502-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'NDIAYE', 1),
('5d4bef949c45a', 'PEUGEOT', '206', 'DK-8549-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'FALL', 1),
('5d4befcb1c2b9', 'PEUGEOT', '205', 'DK-8599-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'DIOP', 1),
('5d4bf000a3a47', 'YAMAHA', 'TMAX', 'DK-9999-BB', 'N/A', 'essence', 'NULL', 5, '2 roues', '', '125', '2017-06-01', '', '', 'DJIBRIL', 5),
('5d4bf03d15c61', 'PEUGEOT', '205', 'DK-9854-BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '1000000', 'DIENG', 1),
('5d53cfa058ecb', 'CITROEN', 'C4', 'DK-5847-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'DIOP', 1),
('5d566bfc87fc9', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'FAYE', 1),
('5d5fd2f02ab6a', 'CITROEN', 'C4', 'DK-8502-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'fall', 1),
('5d5fd3851e67b', 'CITROEN', 'C5', 'DK-8599-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'DIOP', 1),
('5d5fd6cfaa3ab', 'CITROEN', 'JUMPER', 'DK0204AT', '9', 'diesel', 'NULL', 7, '', 'N/A', 'N/A', '2006-04-03', '', '', 'SAGNE', 1),
('5d6006b5882e5', 'TOYOTA ', 'HIGHLANDER', '9515TTD1', '20', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'KA', 1),
('5d600aa84b7be', 'CITROEN', 'C4', 'DK-85447', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'KANE', 1),
('5d610a3229507', 'HYUNDAI', 'EXCEL', 'DK4169H', '8', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'CISSE', 1),
('5d6163e7ec519', 'RENAULT', 'R21', 'DK5956X', '8', 'essence', 'Moins de 3,5T', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'SAMBOU', 4),
('5d616a438de64', 'NISSAN', 'MAXIMAN', 'DK5737AB', '17', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2007-06-03', '', '', 'MENDY', 1),
('5d616d6a7c14d', 'PEUGEOT', '205', 'DK0108M', '8', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SENE', 1),
('5d62acd295c4f', 'HYUNDAI', 'GETZ', 'DK0788AC', '8', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'NDIAYE', 1),
('5d62ecf32b551', 'RENAULT', 'R21', 'DK3523X', '8', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2006-08-06', '', '', 'NDIAYE', 1),
('5d63c769c91ae', 'PEUGEOT', '305', 'DK9999BK', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'COUNDOUL', 1),
('5d63ca4c4117f', 'CITROEN', 'C4', 'DK4444FG', '10', 'essence', 'NULL', 2, '', 'N/A', 'N/A', '2017-06-01', '', '', 'BAO', 1),
('5d650efdab7c1', 'AUDI', 'AUDI 80', 'DK1945T', '8', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FALL', 1),
('5d65182fb33f1', 'TOYOTA', 'CAMRY', 'DK0145BG', '14', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'NDAO', 1),
('5d6524c71a21f', 'TOYOTA', 'COROLA', 'DK2586MB', '8', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2018-12-31', '', '', 'MOUSTAPHA ', 1),
('5d65334705afe', 'PEUGEOT', '307', 'DK4073AH', '9', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FOFANA ', 1),
('5d663c8ebfbe1', '', '', '', '32', 'essence', 'Break', 2, 'TPC', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 2),
('5d664f33c355e', 'CITROEN', 'C4', 'DK1719AS', '6', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'BA', 1),
('5d666163c629e', 'PEUGEOT', '', 'DK0000BB', '5', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d6665c151d89', 'PEUGEOT', '306', 'DK3251X', '8', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SARR', 1),
('5d666654b0d4c', 'PEUGEOT', '207', 'DK0663BB', '6', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOUF', 1),
('5d667472182ed', 'CITROEN', '', 'DK8547BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FALL', 1),
('5d6677fd8c0d0', 'DACIA', '', 'DK2356K', '08', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'BO', 1),
('5d667be0b4780', 'PEUGEOT', '', 'DK0425BC', '9', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d667ce26e444', 'PEUGEOT', '', 'DK00221BH', '10', 'essence', 'NULL', 2, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FAYE', 1),
('5d66809a73d9c', 'TOYOTA', 'AYGO', 'DK2152BK', '6', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'GOGO', 1),
('5d66869910504', 'RENAULT', 'MEGANE', 'DK8863N', '9', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'NDIAYE', 1),
('5d669de96e7a0', 'CHEVROLET', 'RR', 'DK8888BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FAYA', 1),
('5d66a6f24ba16', 'CITROEN', 'C4', 'DK9999BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FALL', 1),
('5d66a9851fc5b', 'FORD', '', 'DK4444BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d6a6fa3950a2', 'RENAULT', 'TRACTEUR MAGNUM', 'TH5476K', '34', 'diesel', 'Plus de 3,5T', 2, 'TPC', 'N/A', 'N/A', '2017-06-01', '', '', 'BASSIROU', 2),
('5d6fb326cd2a4', 'JEEP', 'PATRIOT', 'DK1409BP', '14', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '9000000', '7000000', 'MOUHAMADOU', 1),
('5d6fe16e16838', 'PEUGEOT', '306', 'DK-8547-BH', '20', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'FALL', 1),
('5d6feb4e3e682', 'KIA', '', 'DK4921AT', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SAMB', 1),
('5d6ff2b3eea97', 'TOYOTA', '', 'DK7351BL', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOME', 1),
('5d71087ba679b', 'PEUGEOT', '', 'DK8915F', '8', 'diesel', 'Break', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 4),
('5d713540e3744', 'CITROEN', 'C3', 'DK0532AL', '6', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIATTOU NDIAYE ', 1),
('5d713833016fc', 'CITROEN', 'C3', 'DK0532AL', '6', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIATTOU NDIAYE', 1),
('5d71398447cbd', 'CITROEN', 'C3', 'DK0532AL', '6', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIATTOU NDAYE ', 1),
('5d71475699c84', 'PEUGEOT', '405', 'DK8915S', '8', 'diesel', 'Break', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 4),
('5d7245a15f730', 'MAZDA', '3', 'DK9605BC', '11', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d7278f92b997', 'RENAULT', 'KANGO', 'DK0293AT', '6', 'diesel', 'Break', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'GAYE', 4),
('5d727b6fc7fa1', 'RENAULT', 'KANGO', 'DK0293AT', '6', 'diesel', 'Break', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'GAYE', 4),
('5d7284c8de4de', 'FIAT', '', 'DK9072Y', '8', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'BALDE', 1),
('5d7287cf86cdd', 'FIAT', '', 'DK9072Y', '8', 'diesel', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'BALDE', 1),
('5d7292beb82c4', 'CITROEN', 'C4', 'DK-8547-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'NDIAYE', 1),
('5d7298df259f1', 'CITROEN', '', 'DK-8547-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'FAYE', 1),
('5d73b2077b8f1', 'CHEVROLET', 'EQUINOX', 'DK1698BH', '17', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'CISSE', 1),
('5d762f585ac2e', 'PEUGEOT', '206', 'DK-8547-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'FAYE', 1),
('5d766b687a3d3', 'ACURA', 'ZZZ', 'DK-8547-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'FAYE', 1),
('5d78c76a7fbcf', 'CITROEN', 'C4', 'DK8855BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'faye', 1),
('5d78c97173843', 'CITROEN', 'C5', 'DK8547BB', '11', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '2000000', 'NDIAYE', 1),
('5d78ca380dd4b', 'CITROEN', 'C4', 'DK-9521-BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '3000000', '1000000', 'fall', 1),
('5d78cee57376a', 'PEUGEOT', '206', 'DK-8547-BB', '11', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '2000000', '1000000', 'FALL', 1),
('5d78cf7c85b69', 'CHEVROLET', 'XX', 'DK-8547-BB', '12', 'essence', 'Plus de 3,5T', 5, 'TPC', 'N/A', 'N/A', '2017-06-01', '', '', 'NDIAYE', 2),
('5d78dd2877b5b', 'VOLKSWAGEN', '', 'DK3660AB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SOW', 1),
('5d78e05c01b44', 'TOYOTA', 'RAV4', 'DK0975BD', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'LY', 1),
('5d7b94c8cb1c7', 'CITROEN', '', 'DK9304AZ', '06', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'CISSE', 1),
('5d7b95f85c1bd', 'MITSUBISHI', '', 'TH5839G', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SOW', 1),
('5d7cd7e8a93d0', 'KIA', 'PIKANTE', 'DK2911AP', '5', 'essence', 'NULL', 4, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d80f847524bc', 'HONDA', 'JF41D', 'AA6-8506-AH', 'N/A', 'essence', 'Break', 2, '2 roues', '', '125', '2017-06-01', '', '', 'nom prospect', 5),
('5d80f97c304c4', 'HONDA SH', 'JF41D', 'AA6-8506-AH', 'N/A', 'essence', 'NULL', 5, '2 roues', '', '125', '2017-06-01', '', '', 'DIEYE', 5),
('5d8511002b1f7', 'PEUGEOT 308', 'PEUGEOT', 'DK0878BC', '6', 'diesel', 'NULL', 4, '', 'N/A', 'N/A', '2017-06-01', '', '', 'SOW', 1),
('5d89f0d7d54e5', 'FORD', '', 'DK5106AH', '11', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2009-09-10', '18000000', '8000000', 'DIAGNE', 1),
('5d89f426d2595', 'FIAT', '', 'DK5478BH', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d8a05b78ed7f', 'CHEVROLET', 'CAMARO', 'AA- 245 - AJ', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'WILANE', 1),
('5d8a077f66060', 'PEUGEOT', '', 'DK2251BH', '10', 'essence', 'Break', 2, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d8b53f60b911', 'CITROEN', 'C4', 'DK2140-BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d8b573cbf202', 'FORD', '', 'DK2547BH', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d8b661680347', 'FIAT', '', 'DK8547BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d8b68c650a5f', 'CITROEN', '', 'DK2541BH', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d8b7babadbd0', 'CITROEN', 'C4', 'DK9854BH', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIOP', 1),
('5d8b7cd47a989', 'PEUGEOT', '', 'DK8547BH', '10', 'essence', 'Break', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'nom prospect', 1),
('5d8b834b301c3', 'TOYOTA AVENSIS', '53DBNO', 'DK-6595-AA', '8', 'diesel', 'NULL', 4, '', 'N/A', 'N/A', '2017-06-01', '', '', 'MASSENE ', 1),
('5d8b84212129b', 'TOYOTA', 'COROLLA', 'DK 7914 AS', '7', 'diesel', 'NULL', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'SOKHNA', 4),
('5d8b89b8abc3e', 'CITROEN', 'C4', 'DK9852BB', '10', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DIA', 1),
('5d8b9911979a4', 'VOLSWAGEN', '', 'DK3028A', '6', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'ASNON', 1),
('5d8ba2e833da6', 'TOYOTA', 'COROLLA', 'DK 8510 P', '7', 'diesel', 'NULL', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'FALL', 4),
('5d8ba9a3f382d', 'TOYOTA', 'CARINA1', 'DK 2486 E', '7', 'essence', 'NULL', 4, 'TPV', 'N/A', 'N/A', '2017-06-01', '', '', 'MBENGUE', 4),
('5d8ccd1fb148a', 'TOYOTA', 'HILUX 44', 'DK2329BD', '12', 'essence', 'NULL', 5, '', 'N/A', 'N/A', '2017-06-01', '', '', 'DROIT A LA VILLE', 1),
('5d8ce68e45f59', 'PIAGGIO', '', 'DK4799BH', 'N/A', 'essence', 'Break', 2, '2 roues', '', '198', '2017-06-01', '', '', 'nom prospect', 5);

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
  MODIFY `id_annulation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1801;

--
-- AUTO_INCREMENT pour la table `categorie_vehicule`
--
ALTER TABLE `categorie_vehicule`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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

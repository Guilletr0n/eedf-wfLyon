-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 24 Décembre 2017 à 10:48
-- Version du serveur :  10.0.32-MariaDB-0+deb8u1
-- Version de PHP :  5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wf3lyon`
--

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` int(4) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `docdescription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `docfile` varchar(255) NOT NULL,
  `size` int(4) NOT NULL,
  `docfilename` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`id`, `docname`, `docdescription`, `date`, `docfile`, `size`, `docfilename`, `id_categorie`) VALUES
(2, 'Fiche d\'adhésion 2017', 'Fiche à remplir avant chaque adhésion à EEDF Annonay', '2017-06-03', 'documents/adhesion-eedf-pdf', 367229, 'Adhésion_EEDF.pdf', 1),
(3, 'Fiche sanitaire 2017', 'Fiche à remplir avant chaque adhésion à EEDF Annonay', '2017-06-03', 'documents/fiche-sanitaire-auto-remplissable-pdf', 355263, 'FICHE_SANITAIRE_auto_remplissable.pdf', 1),
(4, 'Fiche de sortie Ainés', '22/23 octobre 2017', '2017-06-03', 'documents/convoc-aines-22-23-oct-aines-pdf', 537539, 'convoc Ainés 22-23 oct Ainés.pdf', 2),
(5, 'Fiche de sortie Eclaireurs', 'Sortie les 22/23 octobres 2017', '2017-06-03', 'documents/convoc-ecles-22-23-oct-ecles-pdf', 515875, 'convoc Eclés 22-23 oct Eclés.pdf', 2);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT 'sans titre',
  `subtitle` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `materials` varchar(50) NOT NULL,
  `activity` varchar(500) NOT NULL,
  `infos` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `startdate`, `enddate`, `description`, `materials`, `activity`, `infos`) VALUES
(1, 'whatevaevent', 'Sous titre 1', '2017-06-04', '2017-06-05', 'Test event', 'Material 1', 'activity1', 'Info1');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(4) NOT NULL,
  `id_event` int(4) NOT NULL,
  `galleryname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gallery`
--

INSERT INTO `gallery` (`id`, `id_event`, `galleryname`) VALUES
(1, 1, 'TestGallery'),
(2, 0, 'Testnana'),
(3, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `listemembers`
--

CREATE TABLE `listemembers` (
  `id_member` int(4) NOT NULL,
  `id_event` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(4) NOT NULL,
  `id_section` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `totem` varchar(255) DEFAULT NULL,
  `infosup` varchar(255) DEFAULT NULL,
  `register` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `id_section`, `id_user`, `name`, `firstname`, `totem`, `infosup`, `register`) VALUES
(2, 1, 3, 'Member2', 'Firstname2', 'totem2', 'infosup2', 1),
(3, 3, 3, 'Member3', 'Firstname3', 'totem3', 'infosup3', 1),
(4, 4, 1, 'Member4', 'Firstname4', 'totem4', 'infosup4', 0),
(5, 5, 2, 'Member5', 'Firstname5', 'totem5', 'infosup5', 1),
(6, 1, 3, 'Member6', 'Firstname6', 'totem6', 'infosup6', 1),
(7, 1, 1, 'Member7', 'Firstname7', 'totem7', 'infosup7', 1),
(8, 2, 2, 'Member8', 'Firstname8', 'totem8', 'infosup8', 1),
(9, 3, 3, 'Member9', 'Firstname9', 'totem9', 'infosup9', 1),
(10, 4, 1, 'Member10', 'Firstname10', 'totem10', 'infosup10', 0),
(11, 5, 2, 'Member11', 'Firstname11', 'totem11', 'infosup11', 1),
(12, 6, 3, 'Member12', 'Firstname12', 'totem12', 'infosup12', 1),
(13, 6, 3, 'Member13', 'Firstname13', 'totem13', 'infosup13', 0),
(14, 6, 3, 'Member14', 'Firstname14', 'totem14', 'infosup14', 0),
(15, 6, 3, 'Member15', 'Firstname15', 'totem15', 'infosup15', 1),
(16, 6, 3, 'Member16', 'Firstname16', 'totem16', 'infosup16', 0),
(17, 6, 3, 'Member17', 'Firstname17', 'totem17', 'infosup17', 0),
(18, 6, 3, 'Member18', 'Firstname18', 'totem18', 'infosup18', 1),
(19, 6, 3, 'Member19', 'Firstname19', 'totem19', 'infosup19', 0),
(20, 6, 3, 'Member20', 'Firstname20', 'totem20', 'infosup20', 0),
(21, 6, 3, 'Member21', 'Firstname21', 'totem21', 'infosup21', 1),
(22, 6, 3, 'Member22', 'Firstname22', 'totem22', 'infosup22', 0),
(23, 3, 3, 'Jean Paul', 'Roger', 'Loup saoulard', 'info', 0),
(27, 5, 5, 'AZEAZ', 'AZEAZEAZE', 'AZEAZEAZE', 'AZEAZEAZEAZEAZEAZEAZE', 0),
(29, 3, 6, 'TEST', 'Online', 'testonline', 'azerty', 1),
(31, 3, 6, 'Mobile', 'Onlinemobile', 'Webphonetest', 'Coucou toua', 0),
(32, 5, 6, 'FIREFOX', 'Mozilla', 'MF', 'FOX', 1),
(41, 4, 6, 'Mr', 'Ajax', 'Ajax amsterdam', 'AJAY', 1),
(54, 4, 6, 'Name', 'Firstname', 'Totem', 'EnglishBoy', 0);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(4) NOT NULL,
  `photoname` varchar(255) NOT NULL,
  `photodescription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `photofilename` varchar(255) NOT NULL,
  `size` int(4) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `photofile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `photoname`, `photodescription`, `date`, `photofilename`, `size`, `id_gallery`, `photofile`) VALUES
(47, 'Gallery 2016', 'Patinoire janvier 2016', '2017-06-06', '', 238430, 1, 'photos/kids1-jpg'),
(48, 'Gallerie 2016', 'Journée démarrage septembre 2016', '2017-06-06', '', 344686, 1, 'photos/kids2-jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `id` int(2) NOT NULL,
  `rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sections`
--

INSERT INTO `sections` (`id`, `rank`) VALUES
(2, 'Accompagnateur'),
(6, 'Ainé'),
(5, 'Éclaireur'),
(4, 'Louveteau'),
(3, 'Lutin'),
(1, 'Responsable');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `motivation` text,
  `phone` varchar(10) NOT NULL,
  `confirm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `token`, `motivation`, `phone`, `confirm`) VALUES
(1, 'nordine', 'nordine', '$2y$10$iCI5Bmf5SlqF.oKuNt6feOW.OHOoC0772gmY3mVrQ46PhbgCGVg26', 'superadmin', '', NULL, '1', NULL),
(2, 'fregevu', 'fregevuf@yahoo.fr', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'admin', '', NULL, '0643163491', NULL),
(3, 'andre', 'estherandre07@orange.fr', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'adherent', '', NULL, '0', NULL),
(5, 'eedf', 'qsdqsd', '$2y$10$NcObSVnUk7TDnZDx0GWjvO3B5foVpv/7M6u5MzpTYGkKruHWbhb86', 'adherent', 'HhL6M1xKBRh9M_oMw3UNyq6dgLdgIxB16ZwUc_Oq5_rB17gSDQRBjRYFwBzV1fDnhI6en6mnhaQf4F_H', NULL, 'qsdqsd', NULL),
(6, 'DEV1', 'dev', '$2y$10$zQ/IH0ZV9C8rgcqp75IcPe2WS4diXrHHowRbObatpzlBIm/Ndx64C', 'admin', 'rkUJpjV1fFJ-UJK6e1h-GwE_dWn7Jf59RqqGjsMIF54-ApunhHL4k1dWBTz1pLXgKKBdW31G8R6lL265', NULL, 'dev', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_categorie_2` (`id_categorie`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_gallery`);

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rank` (`rank`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `Photo_gallery` FOREIGN KEY (`id_gallery`) REFERENCES `gallery` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

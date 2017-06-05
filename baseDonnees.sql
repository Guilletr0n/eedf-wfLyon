DROP DATABASE `wflyon`;
CREATE DATABASE `wflyon` COLLATE `utf8_general_ci`;
USE `wflyon`;

/******************** Création des tables ********************/
/* CREATE TABLE Crée une nouvelle table SQL  */
/*************************************************************/

CREATE TABLE `photos` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`photoname` varchar(255) NOT NULL,
	`photodescription` varchar(500) NOT NULL,
	`date` DATE NOT NULL,
	`photofilename` varchar(255) NOT NULL,
	`size` INT(4) NOT NULL,
	`id_gallery` INT(11) NOT NULL,
	`photofile` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`username` varchar(60) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`role` varchar(255) NOT NULL,
	`token` varchar(255) NOT NULL,
	`motivation` text CHARACTER SET utf8,
  	`phone` varchar(10) NOT NULL,
  	`confirm` tinyint(1) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `members` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_section` INT NOT NULL,
	`id_user` INT NOT NULL,
	`name` varchar(255) NOT NULL,
	`firstname` varchar(255) NOT NULL,
	`totem` varchar(255),
	`infosup` varchar(255),
	`register` BOOLEAN NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `events` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) NOT NULL DEFAULT 'sans titre',
	`startdate` DATE NOT NULL,
	`enddate` DATE NOT NULL,
	`description` varchar(500) NOT NULL,
	`id_section` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `sections` (
	`id` INT (2) NOT NULL AUTO_INCREMENT,
	`rank` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `gallery` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT(4) NOT NULL,
	`galleryname` varchar(500) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `listmembers` (
	`id_member` INT(4) NOT NULL,
	`id_event` INT (4) NOT NULL
);

CREATE TABLE `documents` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`docname` varchar(255) NOT NULL,
	`docdescription` varchar(500) NOT NULL,
	`date` DATE NOT NULL,
	`docfile` varchar(255) NOT NULL,
	`size` INT(4) NOT NULL,
	`docfilename` varchar(255) NOT NULL,
	`id_categorie` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

/******************** Déclaration des Index ********************/
/*ALTER TABLE ==> Modifie la définition d'une table en changeant, en ajoutant ou en supprimant des colonnes et des contraintes, en réaffectant et reconstruisant des partitions, en désactivant ou en activant des contraintes et des déclencheurs. */
/**************************************************************/

ALTER TABLE `gallery` ADD INDEX(`id_event`);
ALTER TABLE `photos` ADD INDEX(`id_gallery`);
ALTER TABLE `events` ADD INDEX(`id_member`);
ALTER TABLE `members` ADD INDEX(`id_section`);
ALTER TABLE `members` ADD INDEX(`id_user`);
ALTER TABLE `listmembers` ADD INDEX(`id_member`);
ALTER TABLE `listmembers` ADD INDEX(`id_event`);
ALTER TABLE `documents` ADD INDEX(`id_categorie`);
ALTER TABLE `documents` ADD INDEX(`id_categorie`);

/******************** Création des contraintes  ********************/
/*******************************************************************/

ALTER TABLE `listmembers` ADD CONSTRAINT `listmembers_member` FOREIGN KEY (`id_member`) REFERENCES `members`(`id`);
ALTER TABLE `listmembers` ADD CONSTRAINT `listmembers_event` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `gallery` ADD CONSTRAINT `gallery_events` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `photos` ADD CONSTRAINT `Photo_gallery` FOREIGN KEY (`id_gallery`) REFERENCES `gallery`(`id`);
ALTER TABLE `members` ADD CONSTRAINT `member_users` FOREIGN KEY (`id_user`) REFERENCES `users`(`id`);
ALTER TABLE `members` ADD CONSTRAINT `member_sections` FOREIGN KEY (`id_section`) REFERENCES `sections`(`id`);

/**************************  Création d'information pour test **************************/

/*********** Sections************/
INSERT INTO `sections` (`id`, `rank`) VALUES (NULL, 'Responsable'), (NULL, 'Accompagnateur'), (NULL, 'Lutin'), (NULL, 'Louveteau'), (NULL, 'Éclaireur'), (NULL, 'Ainé');

/*********** Users ************/
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('nordine', 'nordine', '1', '$2y$10$iCI5Bmf5SlqF.oKuNt6feOW.OHOoC0772gmY3mVrQ46PhbgCGVg26', 'superadmin');
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('fregevu', 'fregevuf@yahoo.fr', '0643163491', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'admin');
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('andre', 'estherandre07@orange.fr', '0', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'adherent');

/*********** Events ************/
INSERT INTO `events` (`id`, `title`, `startdate`, `enddate`, `description`, `id_member`) VALUES
(1, 'test', '2017-06-04', '2017-06-04', 'je suis pas d\'accord', 0),
(2, 'Promenade champêtre', '2017-06-12', '2017-06-13', 'Promenons nous dans les bois', 1),
(3, 'cache-cache géant', '2017-06-22', '2017-06-22', '8000 joueurs', 0),
(4, 'pêche au canard', '2017-06-28', '2017-06-30', 'avec vrais faux canards', 2),
(5, 'découverte arbres de la région', '2017-06-26', '2017-06-30', 'dégustation au top ^^', 5);

/*********** Members ************/
INSERT INTO `members` (`id`, `id_section`, `id_user`, `name`, `firstname`, `totem`, `infosup`, `register`) VALUES
(1, 1, 1, 'Member1', 'Firstname1', 'totem1', 'infosup1', 1),
(2, 2, 2, 'Member2', 'Firstname2', 'totem2', 'infosup2', 0),
(3, 3, 3, 'Member3', 'Firstname3', 'totem3', 'infosup3', 1),
(4, 4, 1, 'Member4', 'Firstname4', 'totem4', 'infosup4', 0),
(5, 5, 2, 'Member5', 'Firstname5', 'totem5', 'infosup5', 1),
(6, 6, 3, 'Member6', 'Firstname6', 'totem6', 'infosup6', 0),
(7, 1, 1, 'Member7', 'Firstname7', 'totem7', 'infosup7', 1),
(8, 2, 2, 'Member8', 'Firstname8', 'totem8', 'infosup8', 0),
(9, 3, 3, 'Member9', 'Firstname9', 'totem9', 'infosup9', 1),
(10, 4, 1, 'Member10', 'Firstname10', 'totem10', 'infosup10', 0),
(11, 5, 2, 'Member11', 'Firstname11', 'totem11', 'infosup11', 1),
(12, 6, 3, 'Member12', 'Firstname12', 'totem12', 'infosup12', 0);

/*********** Documents ************/
INSERT INTO `documents` (`id`, `docname`, `docdescription`, `date`, `docfile`, `size`, `id_categorie`, `docfilename`) VALUES
(2, 'Fiche d\'adhésion 2017', 'Fiche à remplir avant chaque adhésion à EEDF Annonay', '2017-06-03', 'documents/adhesion-eedf-pdf', 367229, 1, 'Adhésion_EEDF.pdf'),
(3, 'Fiche sanitaire 2017', 'Fiche à remplir avant chaque adhésion à EEDF Annonay', '2017-06-03', 'documents/fiche-sanitaire-auto-remplissable-pdf', 355263, 1, 'FICHE_SANITAIRE_auto_remplissable.pdf'),
(4, 'Fiche de sortie Ainés', '22/23 octobre 2017', '2017-06-03', 'documents/convoc-aines-22-23-oct-aines-pdf', 537539, 2, 'convoc Ainés 22-23 oct Ainés.pdf'),
(5, 'Fiche de sortie Eclaireurs', 'Sortie les 22/23 octobres 2017', '2017-06-03', 'documents/convoc-ecles-22-23-oct-ecles-pdf', 515875, 2, 'convoc Eclés 22-23 oct Eclés.pdf'),
(6, 'Fiche de sortie Lutins - Louveteaux', 'Sortie les 22/23 octobres 2017', '2017-06-03', 'documents/convoc-ecles-22-23-oct-lutlvx-pdf', 414305, 2, 'convoc Eclés 22-23 oct LutLvx.pdf');

-- --------------------------------------------------------

/*********** Inscriptions Evènement  ************/
INSERT INTO `listmembers` (`id_member`, `id_event`) VALUES
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 5),
(7, 5),
(8, 4),
(9, 3);


/*********** Gallery ************/


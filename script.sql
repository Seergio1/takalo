create database IF NOT EXISTS `takalo`;

use `takalo`;

create table IF NOT EXISTS `utilisateur`(
    `id` int PRIMARY KEY auto_increment,
    `nom` varchar(20) NOT NULL,
    `email` varchar(30) NOT NULL,
    `pwd` varchar(30) NOT NULL,
    `numero` varchar(30) NOT NULL,
    `admin` varchar(30) NOT NULL
);

create table IF NOT EXISTS `categorie`(
    `id` int PRIMARY KEY auto_increment,
    `nom` varchar(20) NOT NULL
);


create table IF NOT EXISTS `objet`(
    `id` int PRIMARY KEY auto_increment,
    `idCategorie` int,
    `idUtilisateur` int,
    `titre` varchar(30) NOT NULL,
    `description` varchar(100) NOT NULL,
    `photo` varchar(30) NOT NULL,
    `prix` float,
    foreign key(`idCategorie`) references `categorie`(`id`)
);


create table IF NOT EXISTS `echange`(
    `id` int PRIMARY KEY auto_increment,
    `idObjet1` int,
    `idObjet2` int,
    `dateDemande` datetime,
    `dateAccepte` datetime,
    `etat` varchar(30) NOT NULL,
    foreign key(`idObjet1`) references `Objet`(`id`),
    foreign key(`idObjet2`) references `Objet`(`id`)
);


create table IF NOT EXISTS `historique`(
    `id` int PRIMARY KEY auto_increment,
    `idObjet` int,
    `idUser` int,
    `dateAppartenance` datetime,
    foreign key (`idObjet`) references `Objet`(`id`)
);






INSERT INTO `utilisateur` values (default, 'mandresy', 'mandresy@gmail.com', 'mAdmin', '1910', 'oui');
INSERT INTO `utilisateur` values (default, 'jeremie', 'jeremie@gmail.com', 'jAdmin', '1891', 'oui');
INSERT INTO `utilisateur` values (default, 'sergio' , 'sergio@gmail.com','sAdmin', '1811', 'oui');
INSERT INTO `utilisateur` values (default, 'miora' , 'miora@gmail.com','mClient', '5647', 'non');

INSERT INTO `categorie` values (default, 'Vetements');
INSERT INTO `categorie` values (default, 'Chaussure');
INSERT INTO `categorie` values (default, 'Ordinateur');
INSERT INTO `categorie` values (default, 'Phone');

INSERT INTO `objet` values (default, 1, 4, 'akanjoBA', 'maafana sy matevina', 'pull001.png' ,2500);
INSERT INTO `objet` values (default, 3, 4, 'hp', 'matanjaka sy rapidaaaa', 'ordi001.png' ,200500);






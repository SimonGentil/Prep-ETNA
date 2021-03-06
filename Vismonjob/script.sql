CREATE USER 'admin_viemonjob'@'localhost' IDENTIFIED BY 'viemonmdp';
GRANT ALL PRIVILEGES ON * . * TO 'admin_viemonjob'@'localhost';

CREATE DATABASE viemonjob CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE viemonjob;

CREATE TABLE Utilisateurs
(
ID SMALLINT NOT NULL AUTO_INCREMENT,
Nom VARCHAR(255) NOT NULL,
Prenom VARCHAR(255) NOT NULL,
Date_de_naissance DATE NOT NULL,
Metier VARCHAR(255),
Photo VARCHAR(255),
Situation_professionnelle VARCHAR(255),
Email VARCHAR(255) NOT NULL,
Mot_de_passe VARCHAR(255),
Adresse VARCHAR(255) NOT NULL,
Code_postal INT(5) NOT NULL,
Ville VARCHAR(255) NOT NULL,
Telephone_Portable INT NOT NULL,
Telephone_fix INT,
Rôle SMALLINT NOT NULL,
Descriptif_activite TEXT,
IBAN VARCHAR(255),
Date_inscription DATETIME NOT NULL,
PRIMARY KEY (ID)
);

CREATE TABLE Jobs
(
ID SMALLINT NOT NULL AUTO_INCREMENT,
Libelle VARCHAR(255) NOT NULL,
ID_Utilisateur SMALLINT NOT NULL references Utilisateurs(ID),
Description VARCHAR(255) NOT NULL,
Prix SMALLINT NOT NULL,
Validation SMALLINT NOT NULL,
Date_demande DATETIME NOT NULL,
Date_validation DATETIME,
PRIMARY KEY (ID)
);

CREATE TABLE Temoignages
(
ID SMALLINT NOT NULL AUTO_INCREMENT,
Prenom VARCHAR(255) NOT NULL,
Tmp_job TEXT NOT NULL,
Duree VARCHAR(255) NOT NULL,
Ville VARCHAR(255) NOT NULL,
Photo VARCHAR(255),
Temoignage TEXT NOT NULL,
Validation SMALLINT NOT NULL,
Date_demande INT NOT NULL,
PRIMARY KEY (ID)
);

CREATE TABLE Actualites
(
ID SMALLINT NOT NULL AUTO_INCREMENT,
Libelle VARCHAR(255) NOT NULL,
Description TEXT NOT NULL,
Auteur VARCHAR(255) NOT NULL,
Date_parution DATETIME NOT NULL,
PRIMARY KEY (ID)
);
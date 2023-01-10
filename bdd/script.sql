drop database if exists web_projet;

CREATE database web_projet;

CREATE TABLE Station(
   id INT,
   nom VARCHAR(50),
   etat VARCHAR(50),
   velo VARCHAR(50),
   place VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE Utilisateur(
   id INT,
   nom VARCHAR(50),
   mail VARCHAR(50),
   num VARCHAR(50),
   message VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE Avis(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   msg VARCHAR(50),
   _date DATETIME,
   PRIMARY KEY(id)
);
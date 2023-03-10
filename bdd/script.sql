drop database if exists web_projet;

CREATE database web_projet;

CREATE TABLE Contact(
   id INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50),
   mail VARCHAR(50),
   num VARCHAR(50),
   msg VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE Avis(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   msg VARCHAR(50),
   _date DATETIME,
   PRIMARY KEY(id)
);
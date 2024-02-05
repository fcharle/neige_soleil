drop database if exists neige_et_soleil;
create database neige_et_soleil;
use neige_et_soleil;

CREATE TABLE User (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(255),
  prenom VARCHAR(255),
  adresse VARCHAR(255),
  CP VARCHAR(255),
  ville VARCHAR(255),
  email VARCHAR(255),
  telephone VARCHAR(255),
  mdp VARCHAR(255),
  role VARCHAR(255) DEFAULT 'user'
);

CREATE TABLE Contrat (
  NumC INT PRIMARY KEY,
  DateCon DATE,
  DateFin DATE,
  EtatCon VARCHAR(255),
  Description TEXT,
);

CREATE TABLE Activites (
  CodeAC INT PRIMARY KEY,
  NomAC VARCHAR(255),
  PrixAC DECIMAL(10, 2)
);

CREATE TABLE Stations (
  CodeSta INT PRIMARY KEY,
  NomSta VARCHAR(255),
  Adresse VARCHAR(255),
  CP VARCHAR(255),
  Ville VARCHAR(255)
);

CREATE TABLE Reservations (
  IDR INT PRIMARY KEY,
  DateR DATE,
  DateD DATE,
  DateF DATE,
  NbPers INT,
  Etat VARCHAR(255),
  Cautions DECIMAL(10, 2)
);

CREATE TABLE Habitations (
  id INT PRIMARY KEY AUTO_INCREMENT,
  TypeH VARCHAR(255),
  Nom VARCHAR(255),
  Superficie DECIMAL(10, 2),
  Capacite INT,
  Adresse VARCHAR(255),
  CP VARCHAR(255),
  Ville VARCHAR(255),
  PrixHabJ DECIMAL(10, 2),
  EtatHab VARCHAR(255)
);

CREATE TABLE Region (
  CodeREG INT PRIMARY KEY,
  NomReg VARCHAR(255)
);

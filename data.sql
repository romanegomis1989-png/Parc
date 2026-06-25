DROP DATABASE IF EXISTS parc_informatique;
CREATE DATABASE parc_informatique CHARACTER SET utf8mb4;
USE parc_informatique;

-- DROP TABLE IF EXISTS utilise;
-- DROP TABLE IF EXISTS materiels;
-- DROP TABLE IF EXISTS utilisateurs;
-- DROP TABLE IF EXISTS marques;
-- DROP TABLE IF EXISTS services;

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE marques (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    id_service INT,
    FOREIGN KEY (id_service) REFERENCES services(id)
);

CREATE TABLE materiels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    no_serie VARCHAR(100) NOT NULL UNIQUE,
    id_marque INT,
    modele VARCHAR(120),
    date_achat DATE,
    prix_achat DECIMAL(8,2),
    FOREIGN KEY (id_marque) REFERENCES marques(id)
);

CREATE TABLE utilise (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    id_materiel INT,
    date_debut DATETIME NOT NULL,
    date_fin_prevue DATE,
    date_fin DATE,
    UNIQUE (id_utilisateur, id_materiel, date_debut),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id),
    FOREIGN KEY (id_materiel) REFERENCES materiels(id)
);

INSERT INTO services (nom) VALUES
    ('Informatique'),
    ('Comptabilité'),
    ('Direction');

INSERT INTO marques (nom) VALUES
    ('Dell'),
    ('HP'),
    ('Lenovo');

INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, id_service) VALUES
('Gomis',  'Romane', 'romane.gomis@parc.fr', 'hash_factice_1', 1)
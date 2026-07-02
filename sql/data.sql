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
('Gomis',  'Romane', 'romane.gomis@parc.fr', 'hash_factice_1', 1),
('Kurz',  'Philippe', 'philippe.kurz@parc.fr', 'hash_factice_2', 1),
('Dupont',  'Pierre', 'pierre.dupont@parc.fr', 'hash_factice_3', 1);

INSERT INTO materiels (no_serie, id_marque, modele, date_achat, prix_achat) VALUES
('SN-001-ABC', 1, 'ThinkPad X1 Carbon', '2023-03-15', 1299.99),
('SN-002-DEF', 2, 'MacBook Pro 14"',   '2023-07-22', 2199.00),
('SN-003-GHI', 1, 'ThinkPad E15',      '2024-01-10',  899.50);

INSERT INTO utilise (id_utilisateur, id_materiel, date_debut, date_fin_prevue, date_fin) VALUES
(1, 1, '2023-03-20 08:00:00', '2024-03-20', '2024-02-15'),
(2, 2, '2023-08-01 09:00:00', '2024-08-01',  NULL),
(3, 3, '2024-01-15 08:30:00', '2025-01-15',  NULL);
-- Création de la base de données
drop database if exists BDD_GP2;
CREATE DATABASE IF NOT EXISTS BDD_GP2
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE BDD_GP2;

CREATE TABLE categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);
INSERT INTO categorie (nom) VALUES
('DVD'),
('CD'),
('Livre');

CREATE TABLE produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    prix DECIMAL(10,2) NOT NULL,
    idcat INT NOT NULL,
	foreign key (idcat) references id(categorie)
);
INSERT INTO produit (nom, description, prix, idcat) VALUES
-- DVD
('Inception', 'Film de science-fiction', 14.99, 1),
('Interstellar', 'Voyage spatial et émotion', 16.99, 1),
('Matrix', 'Film culte de science-fiction', 12.99, 1),
('Gladiator', 'Film historique', 11.99, 1),
('Le Seigneur des Anneaux', 'Fantasy épique', 19.99, 1),

-- CD
('Random Access Memories', 'Album de Daft Punk', 13.99, 2),
('Thriller', 'Album de Michael Jackson', 15.99, 2),
('Back in Black', 'Album de AC/DC', 14.99, 2),
('The Eminem Show', 'Album de rap', 12.99, 2),
('Discovery', 'Album électro', 11.99, 2),

-- Livre
('1984', 'Roman dystopique', 9.99, 3),
('Le Hobbit', 'Fantasy', 10.99, 3),
('Harry Potter à l\'école des sorciers', 'Fantasy jeunesse', 8.99, 3),
('L\'Étranger', 'Roman philosophique', 7.99, 3),
('Dune', 'Science-fiction', 12.99, 3);
CREATE DATABASE projet_php_tighiouart

CREATE TABLE employe (
   id_employe INT NOT NULL AUTO_INCREMENT,
   identifiant VARCHAR(25) NOT NULL,
   mot_de_passe VARCHAR(500) NOT NULL,
   nom VARCHAR(25) NOT NULL,
   prenom VARCHAR(25) NOT NULL,
   adresse_email VARCHAR(50) NOT NULL,
   PRIMARY KEY ( id_employe )
);

CREATE TABLE client (
   id_client INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(25) NOT NULL,
   prenom VARCHAR(25) NOT NULL,
   adresse_email VARCHAR(50) NOT NULL,
   PRIMARY KEY ( id_client )
);

CREATE TABLE produit (
    id_produit INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
    marque VARCHAR(25) NOT NULL,
    prix INT NOT NULL,
    stock INT DEFAULT 0,
    description TEXT NOT NULL,
    PRIMARY KEY ( id_produit )
)

CREATE TABLE images (
    id_image INT NOT NULL AUTO_INCREMENT,
    src VARCHAR(100) NOT NULL,
    id_produit INT NOT NULL,
    PRIMARY KEY ( id_image ),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
)

CREATE TABLE transaction (
    id_transaction INT NOT NULL AUTO_INCREMENT,
    date_transaction date,
    id_client INT NOT NULL,
    id_employe INT NOT NULL,

    PRIMARY KEY ( id_transaction ),
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_emplye) REFERENCES employe(id_emplye)
)

CREATE TABLE liste_achat (
    id_transaction INT NOT NULL,
    id_produit INT NOT NULL,

    PRIMARY KEY ( id_transaction,id_produit ),
    FOREIGN KEY (id_transaction) REFERENCES transaction(id_transaction),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
)
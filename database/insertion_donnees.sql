INSERT INTO produit(nom,marque,prix,stock,description)
VALUES
("F24T350FHR","Samsung",150,8,"Samsung F24T350FHR et sa dalle IPS d'une résolution Full HD (1920 x 1080 pixels) qui vous plongera au coeur de votre contenu. 
Également très agréable d'utilisation, il propose notamment les technologies Flicker-Free et Eye Saver."),

("Vengeance","Corsair ",124,1,"Découvrez la série Vengeance LPX qui vous offre plus de réactivité que la DDR3 ainsi que des performances excellentes sur le long terme,
 grâce notamment à une conception qui favorise le refroidissement du PCB."),

("MX500 ","Crucial",75,5,"Le Disque SSD Crucial MX500 incarne parfaitement tout le savoir-faire de Crucial.
 Tout en étant encore plus vif que la génération précédente, il offre aussi un niveau de garantie plus élevé."),

("G502","Logitech",60,0,"La souris gaming Logitech G502 HERO utilise un capteur optique d'une précision de 16 000 DPI
 ainsi que 11 boutons programmables et un système de poids modulables."),

("Access","Materiel.net",579,1,"Idéal pour démarrer en informatique, notre Access intègre un SSD comme support principal de stockage,
 ce qui vous offre bien plus de réactivité qu'un disque dur classique.")

INSERT INTO images(src,id_produit)
VALUES
("img1.jpg",1),("img2.jpg",1),("img3.jpg",1),
("img1.jpg",2),
("img1.jpg",3),("img2.jpg",3),
("img1.jpg",4),("img2.jpg",4),("img3.jpg",4),("img4.jpg",4),
("img1.jpg",5),("img2.jpg",5),("img3.jpg",5)

/*
Mot de passe : SHA-256 + Salting avec l'identifiant
*/

INSERT INTO employe(identifiant, mot_de_passe, nom,prenom, adresse_email)
VALUES
("admin", "b56f34b92977b77bd09c659bc863ba2f997fb1a439627d531a9fd3e3eb3b30bc", "Tyson","Dean", "admin@gmail.com"),
("employe", "f77e47cc52b9129931493c6c86f6d3c5038d932ddf39929a5ab0e3271f211142", "Mike","Barrett", "Mike@gmail.com")


INSERT INTO client(nom,prenom,adresse_email)
VALUES
("Alessandro","Hills","Alessandro@gmail.com"),
("Edward","Lutz","Edward@gmail.com"),
("Harris","Lozano","Harris@gmail.com"),
("Oskar","Dunn","Oskar@gmail.com"),
("Krista","Heath","Krista@gmail.com"),
("Saara","Mueller","Saara@gmail.com"),
("Pierce","Marsh","Pierce@gmail.com")

INSERT INTO transaction(date_transaction, id_client, id_employe)
VALUES
("2021-08-02", 1, 2),
("2021-08-02", 2, 2),
("2021-08-02", 2, 1),
("2021-08-02", 3, 2),
("2021-08-02", 4, 2),
("2021-08-02", 5, 2),
("2021-08-02", 5, 1)

INSERT INTO liste_achat(id_transaction,id_produit)
VALUES
(1,1),(1,3),
(2,4),
(3,2),(3,3),(3,5),
(4,1),
(5,4),(5,5),
(6,2),
(7,4)
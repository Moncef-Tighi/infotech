<html>

<?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
?>
<link rel="stylesheet" href="CSS/lister.css" media="screen" type="text/css" />


<body>
    <section class="main_container">
        <?php
                include("model/database.php");
                $db=db_connect();
                $SQL=utf8_encode("SELECT produit.nom as pn , date_transaction, client.nom as cn, client.prenom as cp
                , employe.nom as em, employe.prenom as ep FROM liste_achat
                INNER JOIN produit ON produit.id_produit = liste_achat.id_produit
                INNER JOIN transaction ON transaction.id_transaction= liste_achat.id_transaction
                INNER JOIN client ON client.id_client= transaction.id_client
                INNER JOIN employe ON employe.id_employe= transaction.id_employe");
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $entry){   

                    echo("<div class='container'><ul>
                        <li><b>Nom du client : </b>".$entry["cn"]. " ".$entry["cp"]."</li>
                        <li><b>Employé ayant effectué la transaction : </b> ".$entry["em"]. " ".$entry["ep"]."</li>
                        <li><b>Produit vendu : </b>".$entry["pn"]. " </li>
                        <li><b>Date de la transaction : </b>".$entry["date_transaction"]. " </li>
                        </ul></div>");
                }
            ?>

    </section>


</body>
<?php
    include("HTML/footer.html");
?>
</html>
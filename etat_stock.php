<html>

<?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
?>
<link rel="stylesheet" href="CSS/lister.css" media="screen" type="text/css" />
<link rel="stylesheet" href="CSS/table.css" media="screen" type="text/css" />


<body>
    <section class="main_container">
        <h1 class="title">Liste des transactions : </h1>
            <table>
                <thead>
                    <tr id="header"> 
                        <th>Nom du client</th>
                        <th>Nom de l'employé</th>
                        <th>Produit vendu</th>
                        <th>Date de la transaction</th>
                    </tr>

                </thead>

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

                        echo("
                        <tr>
                            <th>".$entry["cn"]. "</th>
                            <th>".$entry["em"]. "</th>
                            <th>".$entry["pn"]. "</th>
                            <th>".$entry["date_transaction"]. "</th>
                        </tr>");
                    }
                ?>
        </table>
    </section>


</body>
<?php
    include("HTML/footer.html");
?>
</html>
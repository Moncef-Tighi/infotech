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

        <h1 class="title">Liste des clients : </h1>
        <table>
            <thead>
                <tr id="header"> 
                    <th>Nom du client</th>
                    <th>Prenom du client</th>
                    <th>Adresse mail </th>
                    <th>Actions</th>
                </tr>

            </thead>
        <?php
                include("model/database.php");
                $db=db_connect();
                $SQL=utf8_encode("SELECT * FROM client");
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $entry){            
                    echo("<tr>
                            <th>".$entry["nom"]. "</th>
                            <th>".$entry["prenom"]. "</th>
                            <th>".$entry["adresse_email"]. "</th>
                            <th><a href='client_form.php'><img src='img/ajouter.svg' class='btn-actions' alt='Ajouter'></a>
                            <a href='editer_client.php?id=".$entry["id_client"]."'><img class='btn-actions' src='img/editer.svg' alt='Editer'></a>
                            <a href='model/supprimer.php?type=client&id=".$entry["id_client"]."'> <img class='btn-actions' src='img/supprimer.svg' alt='Supprimer'></a></th>
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
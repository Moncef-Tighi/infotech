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
                $SQL=utf8_encode("SELECT * FROM employe");
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $entry){            
                    echo("<div class='container'><ul>
                        <li><b>Nom du client : </b>".$entry["nom"]. "</li>
                        <li><b>Prenom du client : </b> ".$entry["prenom"]. " </li>
                        <li><b>Adresse mail : </b>".$entry["adresse_email"]. " </li>
                        <li class='actions'><a href='employe_form.php'><img src='img/ajouter.svg' class='btn-actions' alt='Ajouter'></a>
                        <a href='editer_employe.php?id=".$entry["id_employe"]."'><img class='btn-actions' src='img/editer.svg' alt='Editer'></a>
                        <a href='model/supprimer.php?type=employe&id=".$entry["id_employe"]."'> <img class='btn-actions' src='img/supprimer.svg' alt='Supprimer'></a>
                        </li></ul></div>");
                }
            ?>

    </section>


</body>
<?php
    include("HTML/footer.html");
?>
</html>
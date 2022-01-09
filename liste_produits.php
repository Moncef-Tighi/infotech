<html>

<?php
session_start();
include("HTML/header.html");
if (isset($_SESSION["username"])) {
    include("HTML/sidebar.html");
}
?>
<link rel="stylesheet" href="CSS/lister.css" media="screen" type="text/css" />

<body>
    <section class="main_container">
        <?php

                include("model/database.php");
                $db=db_connect();
                $SQL=utf8_encode("SELECT * FROM produit");
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $entry){
                    $SQL=utf8_encode("SELECT src FROM images WHERE id_produit=:id");
                    $requete = $db->prepare($SQL);
                    $requete->bindValue(":id", $entry["id_produit"]);
                    $requete->execute();
                    $image=$requete->fetchAll();    

                    echo("<div class='container'>");

                    if ($image){
                        echo("<img class='illustration' src='img/produit_".$entry["id_produit"]."/".$image[0]["src"]."'>");
                    }
                    
                    echo("<ul>
                        <li><b>Nom du produit : </b>".$entry["nom"]. "</li>
                        <li><b>Fabriquant : </b> ".$entry["marque"]. " </li>
                        <li><b>Stock : </b>".$entry["stock"]. " </li>
                        <li><b>Description : </b>".$entry["description"]. "m² </li>
                        <li class='price'><b>prix : </b>".$entry["prix"]. " </li>");
                    
                    if (isset($_SESSION["username"])){
                        echo("<li class='actions'> 
                        <a href='produit_form.php'><img class='btn-actions' src='img/ajouter.svg' alt='Ajouter'></a>
                        <a href='editer_produit.php?id=".$entry["id_produit"]."'><img class='btn-actions' src='img/editer.svg' alt='Editer'></a>
                        <a href='model/supprimer.php?type=produit&id=".$entry["id_produit"]."'> <img class='btn-actions' src='img/supprimer.svg' alt='Supprimer'></a>
                    ");
                    }
                    echo("</ul></div>");
                }
            ?>

    </section>


</body>
<?php
    include("HTML/model-overlay.html");
    include("HTML/footer.html");
?>
</html>
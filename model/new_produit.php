<?php


    include("database.php");
    $db=db_connect();
    if (isset($_GET["edit"])) {
        $sql="UPDATE produit
        SET nom=:nom,marque=:marque,prix=:prix,stock=:stock,description=:description
        WHERE id_produit=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':marque' =>$_POST["marque"],
            ':prix' => $_POST["prix"],
            ':stock' => $_POST["stock"],
            ':description' => $_POST["description"],
            ':id' => $_GET["edit"]
        ));    
    } else {
        $sql="INSERT INTO produit(nom,marque,prix,stock,description)
        VALUES (:nom,:marque,:prix,:stock,:description)";    
        $requete = $db->prepare($sql);
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':marque' =>$_POST["marque"],
            ':prix' => $_POST["prix"],
            ':stock' => $_POST["stock"],
            ':description' => $_POST["description"]
        ));    
    
    }

    unset($_POST);
    header("Location: ../produit_form.php?confirm=1");


?>
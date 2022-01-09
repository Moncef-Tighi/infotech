<?php


    include("database.php");
    $db=db_connect();
    if (isset($_GET["edit"])) {
        $sql="UPDATE client
        SET nom=:nom,prenom=:prenom,adresse_email=:adresse_email
        WHERE id_client=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':prenom' =>$_POST["prenom"],
            ':adresse_email' => $_POST["adresse_email"],
            ':id' => $_GET["edit"]
        ));    
    } else {
        $sql="INSERT INTO client(nom,prenom,adresse_email)
        VALUES (:nom,:prenom,:adresse_email)";    
        $requete = $db->prepare($sql);
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':prenom' =>$_POST["prenom"],
            ':adresse_email' => $_POST["adresse_email"],
        ));    
    
    }

    unset($_POST);
    header("Location: ../client_form.php?confirm=1");


?>
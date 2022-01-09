<?php

    $password= $_POST['password'];
    $mot_de_passe=hash('sha256', $_POST["identifiant"].$password);
    include("database.php");
    $db=db_connect();
    if (isset($_GET["edit"])) {
        $sql="UPDATE employe
        SET nom=:nom,prenom=:prenom,adresse_email=:adresse_email,mot_de_passe=:mot_de_passe, adresse_email=:adresse_email
        WHERE id_employe=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':prenom' =>$_POST["prenom"],
            ':adresse_email' => $_POST["adresse_email"],
            ':identifiant' => $_POST["identifiant"],
            ':mot_de_passe' => $mot_de_passe,
            ':id' => $_GET["edit"]
        ));    
    } else {
        $sql="INSERT INTO employe(nom,prenom,adresse_email,identifiant,mot_de_passe)
        VALUES (:nom,:prenom,:adresse_email,:identifiant,:mot_de_passe)";    
        $requete = $db->prepare($sql);
        $requete->execute(array(
            ':nom' =>$_POST["nom"],
            ':prenom' =>$_POST["prenom"],
            ':adresse_email' => $_POST["adresse_email"],
            ':identifiant' => $_POST["identifiant"],
            ':mot_de_passe' => $mot_de_passe
        ));    
    
    }

    unset($_POST);
    header("Location: ../employe_form.php?confirm=1");


?>
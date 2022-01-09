<?php
    include("database.php");
    $db=db_connect();

    if ($_GET["type"]=="produit"){
        $sql="DELETE FROM produit WHERE id_produit=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':id' => $_GET["id"]
        ));    
        unset($_POST);
        header("Location: ../liste_produits.php");    
    }

    if ($_GET["type"]=="client"){
        $sql="DELETE FROM client WHERE id_client=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':id' => $_GET["id"]
        ));    
        unset($_POST);
        header("Location: ../liste_clients.php");    
    }

    if ($_GET["type"]=="employe"){
        $sql="DELETE FROM employe WHERE id_employe=:id";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $_GET["edit"]);   
        $requete->execute(array(
            ':id' => $_GET["id"]
        ));    
        unset($_POST);
        header("Location: ../liste_employe.php");    
    }

?>
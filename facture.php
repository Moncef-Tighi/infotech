<html>

<?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
        
?>
<body>
    <section class="main_container">
        <h1>Facture : </h1>
        <ul id="facture">
<?php

if (count($_POST["id_produit"])==0){ 
    unset($_POST);
    header("Location: ../transction_form.php");
}


include("model/database.php");
$db=db_connect();
$total=0;
foreach ($_POST["id_produit"] as $produit){
    $SQL="SELECT nom,prix FROM produit
    WHERE id_produit=:id";
    $requete = $db->prepare($SQL);
    $requete->bindValue(":id", $produit);
    $requete->execute();
    $resultat=$requete->fetch(); 

    $total+=$resultat["prix"];
    echo("<li> + ".$resultat["nom"]." : ".$resultat["prix"]."$ </li>");  
}
echo("<li class='price'> = total : " .$total. "$ </li>")
?>
        </ul>

        <a href="etat_stock.php">Bon de visite</a>
        
        <a href="transction_form.php">confirmer</a>

        <a href="transction_form.php">Annuler</a>
    </section>
</body>
<?php
    include("HTML/footer.html");
?>
</html>
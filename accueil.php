<html>

<?php
include("model/check_connexion.php");
check();
include("HTML/header.html");
include("HTML/sidebar.html");

?>

<body>
    <section class="main_container">
        
        <div>
        <?php
            include("model/database.php");
            $db=db_connect();
            $sql = "SELECT nom,prenom,adresse_email FROM employe WHERE identifiant = :username";
            $requete = $db->prepare($sql);
            $requete->bindValue(":username", $_SESSION['username']);
            $requete->execute();
            $data=$requete->fetch();

            echo("<h2>Vous êtes connectés en tant que ".$_SESSION['username']." </h2>

            <ul>
                <li>Votre nom : ".$data["nom"]." </li>
                <li>Votre prénom : ".$data["prenom"]."</li>
                <li>Votre addresse mail : ".$data["adresse_email"]." </li>
            </ul>
")
            
        ?>
        </div>
    </section>
</body>

<?php
    include("HTML/footer.html");
?>
</html>
<html>
    <?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
    ?>

  <body>

    <section class="main_container">

    <?php
         include("model/database.php");
         $db=db_connect();
        $SQL=utf8_encode("SELECT * FROM client WHERE id_client=:id");
        $requete = $db->prepare($SQL);
        $requete->bindValue(":id", $_GET["id"]);
        $requete->execute();
        $data=$requete->fetch(); 
    ?>
    <form action="model/new_client.php?edit=<?php echo($_GET["id"]);?>" method='POST'>
        <h1>Ajouter un nouveau client</h1>

        <label><b>Nom du client</b></label>
        <input type="text" placeholder="nom" name="nom" value="<?php echo($data["nom"]); ?>" required >

        <label><b>Prénom du client :</b></label>
        <input type="text" placeholder="prenom" name="prenom" value="<?php echo($data["prenom"]); ?>"  required>

        <label><b>adresse emeail :</b></label>
        <input type="text" placeholder="exemple@gmail.com" name="adresse_email" value="<?php echo($data["adresse_email"]); ?>"  required>

        <input type="submit" id='submit' value='Confirmer' >

    </form>
    <?php
    if (isset($_GET["confirm"])) {
        echo("<br><br>Le nouveau client a bien été ajouté");
    }
  ?>
    </section>


  </body>


        <?php
          include("HTML/footer.html");
      ?>
  </body>
</html>
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
        $SQL=utf8_encode("SELECT * FROM employe WHERE id_employe=:id");
        $requete = $db->prepare($SQL);
        $requete->bindValue(":id", $_GET["id"]);
        $requete->execute();
        $data=$requete->fetch(); 
    ?>
    <form action="model/new_employe.php?edit=<?php echo($_GET["id"]);?>" method='POST'>
        <h1>Ajouter un nouveau employe</h1>

        <label><b>Nom de l'employe</b></label>
        <input type="text" placeholder="nom" name="nom" value="<?php echo($data["nom"]); ?>" required >

        <label><b>Prénom de l'employe :</b></label>
        <input type="text" placeholder="prenom" name="prenom" value="<?php echo($data["prenom"]); ?>"  required>

        <label><b>adresse email :</b></label>
        <input type="text" placeholder="exemple@gmail.com" name="adresse_email" value="<?php echo($data["adresse_email"]); ?>"  required>

        <label><b>identifiant :</b></label>
        <input type="text" placeholder="exemple@gmail.com" name="identifiant" value="<?php echo($data["identifiant"]); ?>"  required>

        <label><b>password :</b></label>
        <input type="password" placeholder="Attention ! Il faut obligatoirement réinitialiser le password" name="mot_de_passe" value=""  required>

        <input type="submit" id='submit' value='Confirmer' >

    </form>
    <?php
    if (isset($_GET["confirm"])) {
        echo("<br><br>Le nouveau employe a bien été ajouté");
    }
  ?>
    </section>


  </body>


        <?php
          include("HTML/footer.html");
      ?>
  </body>
</html>
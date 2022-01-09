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
        $SQL=utf8_encode("SELECT * FROM produit WHERE id_produit=:id");
        $requete = $db->prepare($SQL);
        $requete->bindValue(":id", $_GET["id"]);
        $requete->execute();
        $data=$requete->fetch(); 
    ?>
    <form action="model/new_produit.php?edit=<?php echo($_GET["id"]);?>" method='POST'>
        <h1>Ajouter un nouveau produit</h1>

        <label><b>Nom du produit</b></label>
        <input type="text" placeholder="nom" name="nom" value="<?php echo($data["nom"]); ?>" required >

        <label><b>Fabriquant/Fournisseur :</b></label>
        <input type="text" placeholder="fournisseur" name="marque" value="<?php echo($data["marque"]); ?>"  required>

        <label><b>prix :</b></label>
        <input type="text" placeholder="0" name="prix" value="<?php echo($data["prix"]); ?>"  required>

        <label><b>Stock :</b></label>
        <input type="text" placeholder="0" name="stock" value="<?php echo($data["stock"]); ?>"  required>

        <label><b>Description :</b></label>
        <textarea  name="description" required><?php echo($data["description"]); ?></textarea>

        <input type="submit" id='submit' value='Confirmer' >

    </form>
    <?php
    if (isset($_GET["confirm"])) {
        echo("<br><br>Le nouveau produit a bien été ajouté");
    }
  ?>
    </section>


  </body>


        <?php
          include("HTML/footer.html");
      ?>
  </body>
</html>
<html>
    <?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
    ?>

  <body>

    <section class="main_container">

    <form action="model/new_produit.php" method="POST">
        <h1>Ajouter un nouveau produit</h1>

        <label><b>Nom du produit</b></label>
        <input type="text" placeholder="nom" name="nom" required >

        <label><b>Fabriquant/Fournisseur :</b></label>
        <input type="text" placeholder="fournisseur" name="marque" required>

        <label><b>prix :</b></label>
        <input type="text" placeholder="0" name="prix" required>

        <label><b>Stock :</b></label>
        <input type="text" placeholder="0" name="stock" required>

        <label><b>Description :</b></label>
        <textarea  name="description" required></textarea>

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
<html>
    <?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
    ?>

  <body>

    <section class="main_container">

    <form action="model/new_client.php" method="POST">
        <h1>Ajouter un nouveau employé</h1>

        <label><b>Nom de l'employé</b></label>
        <input type="text" placeholder="nom" name="nom" required >

        <label><b>prenom de l'employé :</b></label>
        <input type="text" placeholder="prenom" name="prenom" required>

        <label><b>adresse email :</b></label>
        <input type="mail" placeholder="example@gmail.com" name="adresse_email" required>

        <input type="submit" id='submit' value='Confirmer' >

    </form>
    <?php
    if (isset($_GET["confirm"])) {
        echo("<br><br>Le nouvel employé a bien été ajouté");
    }
  ?>
    </section>


  </body>


        <?php
          include("HTML/footer.html");
      ?>
  </body>
</html>
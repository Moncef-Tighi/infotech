<html>
    <?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
    ?>

  <body>

    <section class="main_container">

    <form action="model/new_employe.php" method="POST">
        <h1>Ajouter un nouveau client</h1>

        <label><b>Nom du client</b></label>
        <input type="text" placeholder="nom" name="nom" required >

        <label><b>prenom du client :</b></label>
        <input type="text" placeholder="prenom" name="prenom" required>

        <label><b>adresse email :</b></label>
        <input type="mail" placeholder="example@gmail.com" name="adresse_email" required>

        <label><b>login :</b></label>
        <input type="text" name="identifiant" required>

        <label><b>password :</b></label>
        <input type="password"  name="mot_de_passe" required>

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
<html>
    <?php
        include("model/check_connexion.php");
        check();
        include("HTML/header.html");
        include("HTML/sidebar.html");
    ?>

  <body>

    <section class="main_container">

    <form action="facture.php" method="POST">
        <h1>Ajouter une nouvelle transaction</h1>

        <label>Nom du client :</label>
        <select name="id_client">
            <?php
                include("model/database.php");
                $db=db_connect();            
                $SQL="SELECT id_client,nom, prenom FROM client";
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $value){
                    echo("<option value='".$value["id_client"]."'>".$value["nom"]." ".$value["prenom"]."</option>");
                }        

            ?>
        </select>

        <?php

                $SQL="SELECT id_produit,nom,marque,prix FROM produit
                WHERE stock !=0";
                $requete = $db->prepare($SQL);
                $requete->execute();
                $data=$requete->fetchAll();
                foreach($data as $value){
                    echo("<input type='checkbox' name='id_produit[]' value='".$value["id_produit"]."'> ".$value["nom"]." De ".$value["marque"]." à ".$value["prix"]." $");
                }        

            ?>

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
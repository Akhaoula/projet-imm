<?php

$conn = mysqli_connect("127.0.0.1", "root","","exelib");      

//Après clic sur le bouton "Envoyer" envoie de données par post
if(count($_POST)>2) {
      //récupération et protection des données envoyées
      $titre = mysqli_real_escape_string($conn,$_POST["titre"]);
      $auteur = mysqli_real_escape_string($conn, $_POST["auteur"]);
      $date = mysqli_real_escape_string($conn, $_POST["date"]);
      $sql = "INSERT INTO exercice (titre, auteur, date_creation) VALUES ('{$titre}', '{$auteur}', '{$date}')";
    //exécuter la requête d'insertion
      if (mysqli_query($conn, $sql)) {
      $message= "L’exercice a été ajouté  avec succès";
      } else {
      $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
//les autres pages peuvent envoyer un message dans L’URL. On le  récupère ici pour l'afficher dans l’élément "div.message"
if(isset($_GET["message"])){
      $message=$_GET["message"];
}

?>


<!doctype html>
<html>
<head>
      <title>PHP CRUD</title>
      <meta charset="utf-8">
      <style type="text/css">
      /* Des styles pour la mise en forme de la page*/
      div{
            margin: auto;
            width: 600px;
            margin-bottom: 20px;
      } 
      label{
            display: block;
            width: 150px;
            float: left;
      }
       thead{
            background: #f39c12;

       }
       tbody{
            background: #3498db;
            color: white
       }
     td,th{
      width: 100px;
      text-align: center;
      border: 1px solid white;
     }
     a{
      color: white;
     }
   
     .message{
      background: #d35400;
      color:white;
      padding: 5px;
     }
      </style>
</head>
<body>

      <?php

        if(isset($message)) { 
          echo "<div class='message'>".$message."</div>"; 
        } 
      ?>
      <div class="frm">
            
      
      <form name="exe" action="test.php" method="post">
            <fieldset>
                  <legend>Ajouter un exercice</legend>
            
            <label for="titre">Titre de l'exercice</label>
            <input type="text" id="titre" name="titre" required autofocus><br/>
            <label for="auteur">Auteur de l'exercice</label>
            <input type="text" id="auteur" name="auteur" required><br/>
            <label for="date">Date création</label>
            <input type="date" id="date" name="date" required placeholder="YYYY/MM/DD"><br/>
            <input Type="submit" value="Envoyer">
            </fieldset>
      </form>

      </div>
      
      <div class="grid">
            <table  cellspacing="0">
                  <thead>
                        <tr>
                              <th>id</th>
                              <th>titre</th>
                              <th>auteur</th>
                              <th>date</th>
                              <th colspan="2">Actions</th>
                        </tr>
                  </thead>
                  <tbody>
                        <!-- Récupération de la liste des exercices  -->
                        <?php
                        $sql = "SELECT * FROM exercice";
                              $result = mysqli_query($conn, $sql);
                  
                              if (mysqli_num_rows($result) > 0) {
                                    // Parcourir les lignes de résultat

                                while($row = mysqli_fetch_assoc($result)) {
                                      echo "<tr><td> " . $row["id"]. "</td><td>" . $row["titre"]. "</td><td>" . $row["auteur"]."</td><td>" . $row["date_creation"] 
                                      ."</td><td><a href=\"modif_exe.php?id=".$row["id"]."\">Modifier</a></td>"
                                      ."</td><td><a href=\"supp_exe.php?id=".$row["id"]."\" onclick=\"return confirm('Vous voulez vraiment supprimer cet exercice')\">Supprimer</a></td></tr>";
                                }
                              // Le lien Modifier envoie vers la page modif_exe.php avec l'id de l'exercice
                              // Le lien Supprimer envoie vers la page supp_exe.php avec l'id de l'exercice 
                                    // L'attribut "onclick" fait appel à la fonction confirm() afin de permettre à l'utilisateur de valider l'action de suppression.

                              } 
                        ?>
                  </tbody>
            </table>
      </div>

</body>
</html>
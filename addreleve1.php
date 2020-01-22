
<?php
session_start();
include("connectbase.php");
$result1 = $db->query("select id_tournee, Nom_tour from tournee");
$result2 = $db->query("select id_pav, Nom_PAV from pav");

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" /> 
  <title>Titre de la page</title>
</head>
<body>
    <div class= "fond1">  
  
<header class= "bandeauh">
</header>
<contenu class ="contenu">
<center>
        
        <h2>Formulaire de création d'un relevé de PAV :</h2>
        <form name="formtourne" method="post" action="transitionreleve.php">
            Choisir le PAV:  <select name="rpav">
       <option value=""> ----- Choisir ----- </option>
     <?php
       while ($row = $result2->fetch_assoc()) 
       {
         echo '<option value=" '.$row['id_pav'].' "> '.$row['Nom_PAV'].' </option>';
       }
    ?>
  </select>
  <br/><br>
            
            Entrez la date de la tournée: <input type="date" name="rdate"/> <br/><br>    
            Tournée: <select name="rtournee">
       <option value=""> ----- Choisir ----- </option>
     <?php
       while ($row = $result1->fetch_assoc()) 
       {
         echo '<option value=" '.$row['id_tournee'].' "> '.$row['Nom_tour'].' </option>';
       }
    ?>
  </select>
  <br/><br> 

                               
            <input type="submit" name="valider" value="Creer le relevé"/><br><br>
            <a href="gestiontourne.php">Retour</a>
            
        </form>
</center>
</contenu>
<footer class= "bandeaub">
     </footer>
    </th>
</th>
</div>
</body>
</html>

      

<?php
session_start();
include("connectbase.php");
$result = $db->query("select ID_Age, nom from agent");


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
        
        <h2>Formulaire creation tourné :</h2>
        <form name="formtourne" method="post" action="transitiontourne1.php">
            Nom de la tournée: <input type="text" name="tname"/> <br/><br>            
            Entrez la date de la tournée: <input type="date" name="tdate"/> <br/><br>    
            Agent : <select name="tagent">
       <option value=""> ----- Choisir ----- </option>
     <?php
       while ($row = $result->fetch_assoc()) 
       {
         echo '<option value=" '.$row['ID_Age'].' "> '.$row['nom'].' </option>';
       }
    ?>
  </select>
  <br/><br> 

                               
            <input type="submit" name="valider" value="Creer tourné"/><br><br>
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

      
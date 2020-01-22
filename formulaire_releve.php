<?php
$recupe = $_POST["idrel"];
?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">

<link rel="stylesheet" href="css/style.css" />
  <title>Relève des taux de remplissage</title>
</head>
<body>
<div class= "fond1">  
  
<header class= "bandeauh">
</header>


<contenu class ="contenu">
<center>
        <h1>Formulaire de saisie des remplissages</h1>
        <h2>Entrez le taux et un commentaire :</h2>
        <form name="inscription" method="post" action="editreleve.php">            
            Commentaire: <textarea name="com" row="10"  cols="35" ></textarea> <br/><br>
            Taux de remplissage: <select name="relever_taux">
                <option value=""> ----- Choisir ----- </option>
                <option value="0/4">0/4</option>
                <option value="1/4">1/4</option>
                <option value="2/4">2/4</option>
                <option value="3/4">3/4</option>
                <option value="4/4">4/4</option>
                </select> <br/><br>
          
            
            <input type='hidden' value=<?php echo $recupe ?>  name='idtf'>
            <input type="submit" name="valider" value="Valider"/><br><br>
            
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



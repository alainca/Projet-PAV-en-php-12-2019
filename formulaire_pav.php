<?php
include("connectbase.php");
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
        <h1>Formulaire de saisie des PAV</h1>
        <h2>Entrez l'adresse des PAV :</h2>
        <form name="inscription" method="post" action="traitementpav.php">
            Entrez le nom du PAV: <input type="text" name="Nom_PAV"/> <br/><br>
            Entrez l'adresse (rue, lieu dit): <input type="text" name="adresse"/> <br/><br>
            Entrez le code postal: <input type="text" name="code_postal"/> <br/><br>
            Entrez la ville: <input type="text" name="ville"/> <br/><br>
            Taux de remplissage: <select name="Taux_de_remplissage">
                <option value=""> ----- Choisir ----- </option>
                <option value="0/4">0/4</option>
                <option value="1/4">1/4</option>
                <option value="2/4">2/4</option>
                <option value="3/4">3/4</option>
                <option value="4/4">4/4</option>
                </select> <br/><br>
            <input type="submit" name="valider" value="Ajouter PAV"/><br><br>
            <a href="listepav.php">Retour</a>
            
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
<?php
include("connectbase.php");
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<center>
        <h1>Formulaire de saisie des PAV</h1>
        <h2>Entrez l'adresse des PAV :</h2>
        <form name="inscription" method="post" action="traitementpav.php">
            Entrez le nom du PAV: <input type="text" name="Nom_PAV"/> <br/><br>
            Entrez l'adresse (rue, lieu dit): <input type="text" name="adresse"/> <br/><br>
            Entrez le code postal: <input type="text" name="code_postal"/> <br/><br>
            Entrez la ville: <input type="text" name="ville"/> <br/><br>
            
           
            <input type="submit" name="valider" value="Ajouter PAV"/><br><br>
            <a href="gestionpav.php">Retour</a>
            
        </form>
</center>
        </html>
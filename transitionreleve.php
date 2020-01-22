<?php
//liste des variables
include("connectbase.php");
//recuperation donné creation releve:
$rtournee = $_POST['rtournee'];
$rdate = $_POST['rdate'];
$rpav = $_POST['rpav'];






?> 

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" /> 
  <title>Creation Tourne</title>
</head>
<body>
    <div class= "fond1">  
  
<header class= "bandeauh">
</header>
<contenu class ="contenu">
<center>
        <?php  echo "<h1>Création du relevé du pav $rpav !</h1>"; ?>                  
        <a href="gestiontourne.php">Valider</a>           
        
</center>
</contenu>
<footer class= "bandeaub">
     </footer>
    </th>
</th>
</div>
</body>
</html>

<?php
//conexion
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
$mysqli->set_charset("utf8");
//ajout de la ligne dans le tableaux releve :
if (isset ($_POST['valider'])){
   
    mysqli_query($mysqli, "INSERT INTO releve (`id_tournee`,`id_pav`,`Date_r`,`commentaire`,`Taux_de_remplissage` ) VALUES ('$rtournee','$rpav','$rdate','votre commentaire ici','0/4');");
}
$mysqli->close();

?>
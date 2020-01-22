<?php
<?php
session_start();
include("connectbase.php");
//recuperation donné creation releve:
$nametourne = $_POST['tname'];
$datetourne = $_POST['tdate'];
$agenttourne = $_POST['tagent'];
$pavtourne = $_POST['tpav'];

?> 

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Creation Tourne</title>
</head>
<center>
        <?php  echo "<h1>Création $nametourne !</h1>"; ?>                  
        <a href="gestiontourne.php">Valider</a>           
        
</center>
</html>
<?php
//conexion
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
$mysqli->set_charset("utf8");
//ajout de la ligne dans le tableaux releve :
if (isset ($_POST['valider'])){
	mysqli_query($mysqli, "INSERT INTO releve (`commentaire`) VALUES ('coucou');");
	mysqli_query($mysqli, "INSERT INTO tournee (`Date_t`,`Nom_tour`) VALUES ('$datetourne','$nametourne');");
	mysqli_query($mysqli, "INSERT INTO agent (`ID_Age`) VALUES ('$agenttourne');");
    
    

   
    
}
$mysqli->close();




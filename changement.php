<?php
//liste des variables
$host = "localhost";
$utilisateur = "root";
$mdp = "";
$bd = "mcd";
//recuperation donné creation releve:
$nnametourne = $_POST['newtname'];
$ndatetourne = $_POST['newtdate'];
$nagenttourne = $_POST['newtagent'];
$npavtourne = $_POST['newtpav'];
var_dump($nnametourne);
var_dump($ndatetourne);
var_dump($nagenttourne);
var_dump($npavtourne);
?> 

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Creation Tourne</title>
</head>
<center>
        <?php  echo "<h1>changement de $nnametourne !</h1>"; ?>                    
        <a href="gestiontourne.php">Valider</a>           
        
</center>
</html>

<?php
//conexion
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
$mysqli->set_charset("utf8");
//ajout de la ligne dans le tableaux releve :
if (isset ($_POST['valider'])){
    mysqli_query($mysqli, "INSERT INTO tournee (`Date_t`,`Nom_tour`) VALUES ('$datetourne','$nametourne');");
    mysqli_query($mysqli, "INSERT INTO releve (`ID_Age`,`id_pav`) VALUES ('$agenttourne','$pavtourne');");
}
$mysqli->close();

?>
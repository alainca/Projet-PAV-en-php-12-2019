<?php
session_start();
include("connectbase.php");
$result = $db->query("select nom from agent");



$nametourne = $_POST['tname'];
$datetourne = $_POST['tdate'];
$agenttourne = $_POST['tagent'];
/*var_dump($nametourne);
var_dump($datetourne);
var_dump($agenttourne);*/

//var_dump($agenttourne);
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
        <?php  echo "<h1>Création de la tournée $nametourne !</h1>"; ?>                  
        <a href="gestiontourne1.php">Valider</a>           
        
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
	
	mysqli_query($mysqli, "INSERT INTO tournee (`Date_t`,`Nom_tour`,`ID_Age`) VALUES ('$datetourne','$nametourne','$agenttourne');");

    
    

   
    
}
$mysqli->close();




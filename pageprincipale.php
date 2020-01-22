<!doctype html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" /> 
<body>
<div class= "fond1">  
  
<header class= "bandeauh">
</header>
<menuhaut class = "menuinc">


</menuhaut>
<contenu class ="contenu">
	<?php
session_start();
include("connectbase.php");
$utilisateur = $_SESSION['utilisateur'];

if(!isset($utilisateur)){
    header("location: login.php");
} else {
   
    echo "<center><a href='sortir.php'>Se déconnecter</a></center>";
}
?>
<br>
<div id="conteneur">
    <div class="bouton"> <a href="gestiontourne.php"><img src="images/bouttournee.png"  alt="ton image"/></a></div>
    <div class="bouton"><a href="listeagents.php"><img src="images/boutagent.png"  alt="ton image"/></div>
    <div class="bouton"><a href="listepavs.php"><img src="images/boutpav.png"  alt="ton image"/></a></div>
    
</div>
<br>
    <b><center><a href="index.php" id="retour">Retour</a></center></b>
  </div>
    
        </div>
    <footer class="bandeaub"></footer>
    </center>
    </body>
</html>
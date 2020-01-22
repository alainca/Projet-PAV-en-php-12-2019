 <?php
include("connectbase.php");
?>
<?php

if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
	        $Nom_PAV=$_POST['Nom_PAV'];
            $adresse=$_POST['adresse'];
            $code_postal=$_POST['code_postal'];
            $ville=$_POST['ville'];
           $Taux_de_remplissage=$_POST['Taux_de_remplissage'];
//insert
$smtp = $db->query("INSERT INTO `pav`( `Nom_PAV`, `adresse`, `code_postal`, `ville`, `Taux_de_remplissage`,`id_admin`)  VALUES ('$Nom_PAV', '$adresse', '$code_postal', '$ville', '$Taux_de_remplissage', '1');");}

header("Location:listepavs.php");
?>
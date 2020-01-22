 <?php
include("connectbase.php");
?>
<?php

if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
            $ident=$_POST['ident'];
            $mdp=$_POST['mdp'];
//insert
$smtp = $db->query("INSERT INTO `agent`( `nom`, `prenom`, `ident`, `mdp`,`id_admin`)  VALUES ('$prenom', '$nom', '$ident', '$mdp', '1');");}

header("Location:listeagents.php");
?>
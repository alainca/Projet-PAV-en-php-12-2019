<?php
require 'connectbase.php';
session_start();

$utilisateur = $_POST['utilisateur'];
$mdp = $_POST['mdp'];

$sql = "SELECT COUNT(*) as compter FROM administrateur WHERE ident = '$utilisateur' and mdp = '$mdp'";

$requete = mysqli_query($db, $sql);
$array = mysqli_fetch_array($requete);

if($array['compter']>0){
    $_SESSION['utilisateur'] = $utilisateur;
    header("location: pageprincipale.php");
} else {
    echo "<center>Données incorrectes</center><br>";
    echo "<center><a href='loginadmin.php'>Retour</a></center>";
}
?>
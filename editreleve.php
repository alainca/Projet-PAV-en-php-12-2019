<?php
session_start(); 

$comm = $_POST['com'];
$relev = $_POST['relever_taux'];
$idt = $_POST['idtf'];


/* Connexion à la bdd */
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8"); 

/* Définition de la requête */


$query = "UPDATE releve SET commentaire='$comm',Taux_de_remplissage='$relev' WHERE id_releve='$idt'";

/* Envoie de la requête */
$result = $mysqli->query($query);
header("location: principaleag.php");
//header("location: principaleag.php");

?>
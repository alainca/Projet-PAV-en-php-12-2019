<?php
//importation de la connexion à la bdd
include 'connectbase.php';
//Récupération de l'ID de l'agent  sur lequel on a cliqué
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM tournee WHERE id_tournee =" .$_GET['edit_id'];
 $result = mysqli_query($db, $sql);
 $row = mysqli_fetch_array($result);
}
//Envoie des nouvelles informations pour la mise à jours
if(isset($_POST['btn-update'])){
 $Nom_tour = $_POST['Nom_tour'];
 $Date_t = $_POST['Date_t'];
 $ID_Age = $_POST['ID_Age'];
 

 $update = "UPDATE tournee SET Nom_tour='$Nom_tour',Date_t='$Date_t',ID_Age='$ID_Age' WHERE id_tournee=". $_GET['edit_id'];
 $up = mysqli_query($db, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: gestiontourne.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<link rel="stylesheet" href="css/style.css" />
<body>
<div class= "fond1">	 
<header class= "bandeauh">
</header>
<contenu class ="contenu">
<center>
	<form method="post">
	<h1>Mise à jour des Informations de la tournée</h1>
	<label>Nom de la tournée:</label><input type="text" name="Nom_tour" placeholder="Nom_tour" value="<?php echo $row['Nom_tour']; ?>"><br/><br/>
	<label>Date de la tournée:</label><input type="text" name="Date_t" placeholder="Date_t" value="<?php echo $row['Date_t']; ?>"><br/><br/>
	<label>ID_Age:</label><input type="text" name="ID_Age" placeholder="ID_Age" value="<?php echo $row['ID_Age']; ?>"><br/><br/>



	<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Mettre à jour</strong></button>
	<a href="gestiontourne.php"><button type="button" value="button">Annuler</button></a>
	</form>
</center
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("La mise à jour de la tournée est réalisée") == true){
 x= "update";
 }
}
</script>
</contenu>
<footer class= "bandeaub">
	 </footer>
	</th>
</th>
</div>
<?php
//importation de la connexion à la bdd
include 'connectbase.php';
//Récupération de l'ID de l'agent  sur lequel on a cliqué
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM pav WHERE id_pav =" .$_GET['edit_id'];
 $result = mysqli_query($db, $sql);
 $row = mysqli_fetch_array($result);
}
//Envoie des nouvelles informations pour la mise à jours
if(isset($_POST['btn-update'])){
 $Nom_PAV = $_POST['Nom_PAV'];
 $adresse = $_POST['adresse'];
 $code_postal = $_POST['code_postal'];
 $ville = $_POST['ville'];
 $Taux_de_remplissage = $_POST['Taux_de_remplissage'];

 $update = "UPDATE pav SET Nom_PAV='$Nom_PAV',adresse='$adresse',code_postal='$code_postal',ville='$ville',Taux_de_remplissage='$Taux_de_remplissage' WHERE id_pav=". $_GET['edit_id'];
 $up = mysqli_query($db, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: listepavs.php");
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
<form method="post">
<h1>Mise à jour des Informations du PAV</h1>
<label>Nom du PAV:</label><input type="text" name="Nom_PAV" placeholder="Nom_PAV" value="<?php echo $row['Nom_PAV']; ?>"><br/><br/>
<label>adresse:</label><input type="text" name="adresse" placeholder="adresse" value="<?php echo $row['adresse']; ?>"><br/><br/>
<label>Code Postal:</label><input type="text" name="code_postal" placeholder="code_postal" value="<?php echo $row['code_postal']; ?>"><br/><br/>
<label>Ville:</label><input type="text" name="ville" placeholder="ville" value="<?php echo $row['ville']; ?>"><br/><br/>
<label>Taux de remplissage:</label><input type="text" name="Taux_de_remplissage" placeholder="Taux_de_remplissage" value="<?php echo $row['Taux_de_remplissage']; ?>">


<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Mettre à jour</strong></button>
<a href="listepavs.php"><button type="button" value="button">Annuler</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("La mise à jour du PAV est réalisée") == true){
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
</body>
</html>
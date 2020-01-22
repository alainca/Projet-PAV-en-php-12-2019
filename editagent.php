<?php
//importation de la connexion à la bdd
include 'connectbase.php';
//Récupération de l'ID de l'agent  sur lequel on a cliqué
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM agent WHERE ID_Age =" .$_GET['edit_id'];
 $result = mysqli_query($db, $sql);
 $row = mysqli_fetch_array($result);
}
//Envoie des nouvelles informations pour la mise à jours
if(isset($_POST['btn-update'])){
 $prenom = $_POST['prenom'];
 $nom = $_POST['nom'];
 $ident = $_POST['ident'];
 $mdp = $_POST['mdp'];

 $update = "UPDATE agent SET prenom='$prenom', nom='$nom',ident='$ident',mdp='$mdp' WHERE ID_Age=". $_GET['edit_id'];
 $up = mysqli_query($db, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: listeagents.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" /> 
<body>
<div class= "fond1">  
  
<header class= "bandeauh">
</header>
<contenu class ="contenu">
<center>
    <form method="post">
    <h1>Mise à jour des Informations de l'Agent</h1>
    <label>Prenom:</label><input type="text" name="prenom" placeholder="prenom" value="<?php echo $row['prenom']; ?>"><br/><br/>
    <label>Nom:</label><input type="text" name="nom" placeholder="nom" value="<?php echo $row['nom']; ?>"><br/><br/>
    <label>Identifiant:</label><input type="text" name="ident" placeholder="ident" value="<?php echo $row['ident']; ?>"><br/><br/>
    <label>Mot de passe:</label><input type="text" name="mdp" placeholder="mdp" value="<?php echo $row['mdp']; ?>"><br/><br/>

    <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Mettre à jour</strong></button>
    <a href="listeagents.php"><button type="button" value="button">Annuler</button></a>
    </form>
</center>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("La mise à jour de l'agent est réaliséee") == true){
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
<?php
//Connection for database
include 'connectbase.php';
//Select Database
$sql = "SELECT * FROM agent";
$result = $db->query($sql);
?>
<!doctype html>
<html>
<meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" /> 
  <title>Titre de la page</title>
<body>
	<div class= "fond1">  
  
<header class= "bandeauh">
</header>
<contenu class ="contenu">
<center>
	<?php
	 echo "<a href='formulaire_agent.php'>Ajouter un nouvel agent</a> <br><br>";
	 ?>
</center>
<h1 align="center">Liste des agents</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Agent ID</th>
<th>Prénom</th>
<th>Nom</th>
<th>Identifiant</th>
<th>Mot de passe</th>

</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['ID_Age']; ?></td>
 <td><?php echo $row['prenom']; ?></td>
 <td><?php echo $row['nom']; ?></td>
 <td><?php echo $row['ident']; ?></td>
 <td><?php echo $row['mdp']; ?></td>
 
 <!--Edit option -->
 <td><a href="editagent.php?edit_id=<?php echo $row['ID_Age']; ?>" alt="edit" >Modifier</a></td>
 <td><a href="deleteagent?ID_Age=<?php echo $row['ID_Age']; ?>$supp=ok"onClick="confirm('êtes vous sur de vouloir Supprimer?')" >Supp </a></td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
<br>
<center><a href="pageprincipale.php">Retour</a></center>
</contenu>
<footer class= "bandeaub">
     </footer>
    </th>
</th>
</div>
</body>
</html>
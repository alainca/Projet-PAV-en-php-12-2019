<?php
//Connection for database
include 'connectbase.php';
//Select Database
$sql = "SELECT * FROM pav";
$result = $db->query($sql);
?>
<!doctype html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" />
<head> <!-- meta données - importante pour le référencement-->
	<title>Liste des pavs - modification, ajout & suppression</title>
<body>
<div1 class= "fond1">	 
	<header class= "bandeauh">
	 </header>
	<contenu class ="contenu">
	<?php
	 echo "<a href='formulaire_pav.php'>Ajouter un nouveau pav</a> <br><br>";
	 ?>
<h1 align="center">Liste des pavs</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>PAV ID</th>
<th>Nom PAV</th>
<th>Adresse</th>
<th>Code postal</th>
<th>Ville</th>
<th>Taux de remplissage<th>

</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['id_pav']; ?></td>
 <td><?php echo $row['Nom_PAV']; ?></td>
 <td><?php echo $row['adresse']; ?></td>
 <td><?php echo $row['code_postal']; ?></td>
 <td><?php echo $row['ville']; ?></td>
 <td><?php echo $row['Taux_de_remplissage']; ?></td>
 <!--Edit option -->
 <td><a href="editpav.php?edit_id=<?php echo $row['id_pav']; ?>" alt="edit" >Modifier</a></td>
 <td><a href="deletepav?id_pav=<?php echo $row['id_pav']; ?>$supp=ok"onClick="return confirm('êtes vous sur de vouloir Supprimer?')" >Supp </a></td>
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
</contenu>
<footer class= "bandeaub">
	 </footer>
	</th>
</th>
</div1>
</body>
</html>
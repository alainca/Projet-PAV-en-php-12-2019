<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" /> 
    <title>Gestions Tournee</title>
</head>
<body>
	<div class= "fond1">  
  
<header class= "bandeauh">
</header>
<contenu class ="contenu">
    <center>
        <h1>Gestions des Tournées</h1>
        <?php
        include("connectbase.php");
        echo "<a href='addtourne1.php'>Ajouter une nouvelle tournee</a> <br><br>";
		echo "<a href='addreleve1.php'>Ajouter un relevé de PAV à une tournée</a> <br><br>";
		echo "<a href='Listerel.php'>Liste des relevées</a> <br><br>";
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM tournee';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';?>
		<table border="1" align="center" style="line-height:25px;">
			<tr>
<th>Nom de la tournée</th>
<th>Date de la tournée</th>
<th>ID de l'agent</th>

</tr>
		
		<tr>
 <td><?php echo $ligne['Nom_tour']; ?></td>
 <td><?php echo $ligne['Date_t']; ?></td>
 <td><?php echo $ligne['ID_Age']; ?></td>
 </tr>
 
		<tr>	
			
			<td><a href="edittournee.php?edit_id=<?php echo $ligne['id_tournee']; ?>" alt="edit" >Modifier</a></td>
			<td></td>
			<td><a href="deletetourne?id_tournee=<?php echo $ligne['id_tournee']; ?>$supp=ok"onClick="return confirm('êtes vous sur de vouloir Supprimer?')" >Supp </a></td>
			<?php			
			echo"</br><br>";
		}


		$mysqli->close();?>
		</tr>
		</table>
        <form><br>
		<a href="pageprincipale.php">Retour</a>
		</form> 
    </center>
    </contenu>
<footer class= "bandeaub">
     </footer>
    </th>
</th>
</div>
</body>
</html>
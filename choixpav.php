<?php
//recupération des POST
$spa =  $_POST['sendPAVadresse'];
$spc =  $_POST['sendPAVcode_postal'];
$spv =  $_POST['sendPAVville'];
var_dump($spa);
var_dump($spc);
var_dump($spv);
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	</head>
	<body>
		<center>
		<?php
		//connexion
		$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM pav';
		$resultat = $mysqli->query($requete);

		//affichage des lignes du tableaux PAV
		while ($ligne = $resultat->fetch_assoc()) {echo '<tr>';
			echo $ligne['adresse'].' '.$ligne['code_postal'].' '.$ligne['ville'].'  ';
            echo $ligne['Taux_de_remplissage'].' <td> <br>';			      
			
			//enregistrement des valeurs des lignes du tableaux PAV actuel 
			?>		
			<form name="sdPAV" method="post">
			<input type='submit' value='+' name='ajoutPAV'>
			<input type='hidden' value="<?php echo $ligne['adresse']; ?>"  name='sendPAVadresse'>
			<input type='hidden' value="<?php echo $ligne['code_postal']; ?>"  name='sendPAVcode_postal'>
			<input type='hidden' value="<?php echo $ligne['ville']; ?>"  name='sendPAVville'>
			</form>							
			<?php			
            echo '<br>';   
		}
		//ajout des lignes dans le tableaux temporaire
		if (isset ($_POST['ajoutPAV'])){	
			$nametourne = $_POST['touname'];	          
			$spa =  $_POST['sendPAVadresse'];          
			$spc =  $_POST['sendPAVcode_postal'];           
			$spv =  $_POST['sendPAVville'];   		
			mysqli_query($mysqli, "INSERT INTO releve (`id_Tourne`, `id_PAV`, `Nom_PAV`, `adresse`, `code_postal`, `ville`, `Taux_de_remplissage`) VALUES ('3', '2', 'bobo', '3 rue du martinet', '33650', 'cabanac', '');");}
		$mysqli->close();?>
		<a href="formulaire_tourne.php">Valider</a>
		</center>
	</body> 
</html>


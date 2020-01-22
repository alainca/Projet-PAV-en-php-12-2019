    <?php
//including the database connection file
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");

if(isset($_GET['id_tournee'])){
     
    	// retrieve id from url
    	$id_tournee = (int)$_GET['id_tournee'];
     
    	// sql delete query
    	$result = mysqli_query($mysqli, "DELETE FROM tournee WHERE id_tournee =" . $id_tournee);
    }
    header("Location:gestiontourne.php");
?>
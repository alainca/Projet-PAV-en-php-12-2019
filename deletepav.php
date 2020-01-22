    <?php
//including the database connection file
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");

if(isset($_GET['id_pav'])){
     
    	// retrieve id from url
    	$id_pav = (int)$_GET['id_pav'];
     
    	// sql delete query
    	$result = mysqli_query($mysqli, "DELETE FROM pav WHERE id_pav =" . $id_pav);
    }
    header("Location:listepavs.php");
?>
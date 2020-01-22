    <?php
//including the database connection file
$mysqli = new mysqli('localhost', 'root', '', 'mcd');
		$mysqli->set_charset("utf8");

if(isset($_GET['ID_Age'])){
     
    	// retrieve id from url
    	$ID_Age = (int)$_GET['ID_Age'];
     
    	// sql delete query
    	$result = mysqli_query($mysqli, "DELETE FROM agent WHERE ID_Age =" . $ID_Age);
    }
    header("Location:listeagents.php");
?>
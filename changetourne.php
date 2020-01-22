<?php
include("connectbase.php");
?>

<html>
        <center>
            <h1>Formulaire de changement de Tournée</h1>                
            <form name="formtourne" method="post" action="changement.php">
            Nom de la tournée: <input type="text" name="newtname"/> <br/><br>            
            Entrez la date de la tournée: <input type="date" name="newtdate"/> <br/><br>    
            Agent : <input type="text" name="newtagent"/> <br/><br> 
            PAV: <input type="text" name="newtpav"/> <br/><br>                     
            <input type="submit" name="valider" value="changement"/><br><br>
            <a href="gestiontourne.php">Valider</a>
            
        </form>
        </center>
</html>
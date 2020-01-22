<?php
include("connectbase.php");
?>

<html>
<link rel="stylesheet" href="css/style.css" />
<body>
<div class= "fond1">     
<header class= "bandeauh">
</header>
<contenu class ="contenu">

        <center>
            <h1>Formulaire de saisie des agents</h1>
            <h2>Entrez les données demandées :</h2>
            <form name="inscription" method="post" action="traitementagents.php">
            Entrez le prénom de l'agent: <input type="text" name="prenom"/> <br/><br>
            Entrez le nom de l'agent: <input type="text" name="nom"/> <br/><br>
            Entrez l'identifiant de l'agent: <input type="text" name="ident"/><br/><br>
            Entrez le mot de passe de l'agent: <input type="text" name="mdp"/><br/><br>
            <input type="submit" name="valider" value="Ajouter"/><br><br>
            <a href="listeagents.php">Retour</a>
        </center>
            
        </form>
        </contenu>
<footer class= "bandeaub">
     </footer>
    </th>
</th>
</div>
</body>
        </html>
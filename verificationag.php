<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    require 'connectbase.php';
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT * FROM agent where 
              ident = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
      // nom d'utilisateur et mot de passe correctes
        if( (isset($reponse['ident']) && isset($reponse['mdp'])) && ($reponse['ident'] == $_POST['username']) && ($reponse['mdp'] == $_POST['password'])) // comparaison des mots de passe et username avec l'ident et le mdp rentré dans la base
        {
           $_SESSION['username'] = $reponse['ident']; // entrée dans la session des données que l'on va récupérrer aprés la connexion de l'agent
           $_SESSION['prenom'] = $reponse['prenom'];
           $_SESSION['nom'] = $reponse['nom'];
           $_SESSION['ID_Age'] = $reponse['ID_Age'];
           header('Location: principaleag.php');
        }
        else
        {
           header('Location: loginag.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: loginag.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <title>Login Administrateur</title>
</head>
<body>
    <header class="bandeauh">
    </header>
    <center>
        <div id = "contenu">
            <h1>Identification  Administrateur</h1>
            <div id="login">
            <form action="log.php" method="POST">
                <b><label>Identifiant: </label></b>
                <input type="text" name="utilisateur"><br><br>
                <b><label>Mot de passe: </label></b>
                <input type="password" name="mdp"><br>
                <br>
                <button type="submit">Envoyer</button>
            </form>
            </div>
            <br>
            <b><a href="index.php" id="retour">Retour</a></b>
        </div>
    <footer class="bandeaub">
    </footer>
    </center>
</body>
</html>
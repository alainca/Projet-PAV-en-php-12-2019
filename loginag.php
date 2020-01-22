<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/admin.css" media="screen" type="text/css" />
    </head>
    <body>
        <header class="bandeauh"></header>
    
        <div id="contenu">
       
            <!-- zone de connexion -->
     <center>       
            <form action="verificationag.php" method="POST">
                <h1>Identification - Agent</h1>
                
                <label><b>Identifiant:</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br><br>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>
                <br>

                <input type="submit" id='submit' value='Entrer' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form><b><a href="index.php" id="retour">Retour</a></b>
    </center>   
    </div>
    
        </div>
    <footer class="bandeaub"></footer>
    
    </body>
</html>
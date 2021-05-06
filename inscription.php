<?php
require_once "entete.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Inscription</title>
</head>
<body>


<div id="conteneura">

<div id="titre2">Formulaire d'inscription</div>

</br>
</br>
    <form method="POST" enctype="multipart/form-data" action="upload.php">
    
        <div class="form-group">
                <label for="identifiant">Pseudo: </label>
                <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Entrez votre pseudo" value="<?=(isset($_POST['email']) ? $_POST['email'] : "")?>" required>
        </div>
    
        </br>

        <div class="form-group">
                <label for="mdp">Mot de passe: </label>
                <input type="password" class="form-control" name="mdp" id="mpd" placeholder="Entrez votre mot de passe" value="<?=(isset($_POST['mdp']) ? $_POST['mdp'] : "")?>" required>
        </div>
    
        </br>

        <div class="form-group">
                <label for="mdpVerif">Vérification du mot de passe: </label>
                <input type="password" class="form-control" name="mdpVerif" id="mdpVerif" placeholder="Vérifier votre mot de passe" value="<?=(isset($_POST['mdpVerif']) ? $_POST['mdpVerif'] : "")?>" required>
        </div>


        </br>


        <div class="form-group">
                <label for="avatar">Ajoutez un avatar</label>
                <input type="file" name="avatar"/>
        </div>

        <div id="btco">
        <button type="submit">Conexion</button>
        </div>
        
    
    </form>
    
</div>
</body>
</html>
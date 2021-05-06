<?php
require_once "entete.php";
require_once "modele/Modele.php";
?>


<?php
$requete = getbdd()->prepare("SELECT * FROM categories");   
        $requete->execute();
        $categories = $requete->fetchALL(PDO::FETCH_ASSOC)
?>


<?php
if( isset($_POST["nom"]) && !empty($_POST["nom"]) && 
    isset($_POST["id_categorie"]) && !empty($_POST["id_categorie"]))
    {
    $nom = $_POST["nom"];
    $res = $_POST["id_categorie"];
    

try {
?>



<div class="alert alert-success">Le quizz <?=$_POST["nom"];?> a bien été ajouté.
<br>Vous allez être redirigé vers l'accueil.<br>
<a href="lesquizz.php">Cliquez ici si vous ne voulez pas attendre.</a></div>
    


<?php
    header('refresh:4;lesquizz.php');
    } catch (Exception $e){
?>

<div class="alert alert-danger">Ce quizz n'a pas pu être ajouté</div>



<?php
} 
    }
else { 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Ajouter un quizz</title>
</head>


<body>
<h1>Ajoutez un nouveau Quizz</h1>

</br>

    <form method="post">
    
        <div class="form-group">
            <label for="nom">Nom du quizz</label>
            <input type="text" class="form-control" name="nom" 
            placeholder="Ajoutez un nom">
        </div>

</br>        

    <div class="form-group">
        <label for="id_categorie">Choisissez unz catégorie:</label>
        <select name="id_categorie" id="id_categorie">

</br>

        <?php
        foreach ($categories as $categorie){    
        ?>

<option value="<?=$categorie["IdCategorie"];?>"><?=$categorie["Titre"];?></option>

        <?php
        }
        ?>

        </select>
    </div>

    </br>



<?php
$nombre_de_lignes = 1;
$x=1; 

while ($nombre_de_lignes <= 10)
{

?>    
        <div class="form-group">
            <label for="theme">Question <?=$x++?> </label>
            <input type="text" class="form-control" name="id_categorie">
        </div>
</br>
            <ul>
                <li>
                    <div class="form-group">
                        <label for="theme">Reponse 1</label>
                        <input type="text" class="form-control" name="id_categorie">
                    </div>
                </li>


                <li>
                    <div class="form-group">
                        <label for="theme">Reponse 2</label>
                        <input type="text" class="form-control" name="id_categorie">
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <label for="theme">Reponse 3</label>
                        <input type="text" class="form-control" name="id_categorie">
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <label for="theme">Reponse 4</label>
                        <input type="text" class="form-control" name="id_categorie">
                    </div>
                </li>
            </ul>

</br>

<?php
$nombre_de_lignes++;
}
?>


    <div id="bt2">
        <button type="submit">Ajoutez</button>
    </div>


    </form>
</body>

</html>
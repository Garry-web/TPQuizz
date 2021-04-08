<?php
require_once "Utilisateur.php";
$Utilisateur = new Utilisateur($_POST["username"], $_POST["password"]);
?>

<p>
Inscription de l'utilisateur <?= $Utilisateur->getUsername(); ?> effectué 
</p>

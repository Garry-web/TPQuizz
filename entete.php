<?php
 session_start();
require_once "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar navbar-light navbar-expand-md bg-light">
  </a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="navbar-nav">

    <?php if(isset($_SESSION["identifiant"]) && !empty ($_SESSION["identifiant"]))
          if($_SESSION["id_role"]==2) {?>
          
       
<?php 
   }
       if(empty($_SESSION["identifiant"])){?>
       
      <?php 
      }
      if(isset($_SESSION["identifiant"]) && !empty ($_SESSION["identifiant"])) { ?>
        <a href="deconnexion.php" class="btn-danger float-right">Se déconnecter</a>
        
        <a class="nav-item nav-link" href="profil.php" id="profil">Mon profil</a>
        
        <?php
        if(isset($_SESSION["id_user"]) && !empty($_SESSION["id_user"])){
          $requete =getBdd()->prepare("SELECT * FROM utilisateurs WHERE id_user = ?");
          $requete->execute([$_SESSION["id_user"]]);
          $utilisateurs = $requete->fetch(PDO::FETCH_ASSOC);?>
        <img src="<?=$utilisateurs["avatar"];?>" style="float:left">
      <?php
      }
    }
      ?>

    </ul>
  </div>



  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="navbar-nav">

    <?php if(isset($_SESSION["identifiant"]) && !empty ($_SESSION["identifiant"]))
          if($_SESSION["id_role"]==2) {?>
          <a class="nav-item nav-link" href="gestion_user.php">Gérer les utillisateurs</a>
          

<?php 
   }
       if(empty($_SESSION["identifiant"])){?>
       
        <a class="nav-item nav-link" href="index.php">Menu</a>

        <a class="nav-item nav-link" href="inscription.php">Inscription</a>

        <a class="nav-item nav-link" href="connexion.php">Connexion</a>
      <?php 
      }
      if(isset($_SESSION["identifiant"]) && !empty ($_SESSION["identifiant"])) { ?>
        <a href="deconnexion.php" class="btn-danger float-right">Se déconnecter</a>
        
        <a class="nav-item nav-link" href="profil.php" id="profil">Mon profil</a>
        
        <?php
        if(isset($_SESSION["id_user"]) && !empty($_SESSION["id_user"])){
          $requete =getBdd()->prepare("SELECT * FROM utilisateurs WHERE id_user = ?");
          $requete->execute([$_SESSION["id_user"]]);
          $utilisateurs = $requete->fetch(PDO::FETCH_ASSOC);?>
        <img src="<?=$utilisateurs["avatar"];?>" style="float:left">
      <?php
      }
    }
      ?>

    </ul>
  </div>

</nav>
<div class="container mt-4"><?php

require_once "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.JPG" type="image/x-icon" rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container mt-4">
<?php
class Utilisateur extends Modele{
    public function inscription(){
        extract($_POST);
        $mdp = password_hash($mdp, PASSWORD_BCRYPT);
        $requete = getBdd()->prepare("INSERT INTO utilisateurs(identifiant, mdp, autorisation, photoProfil) VALUES(?, ?, ?, ?)");
        $requete->execute([$identifiant, $mdp, 1, "../pages/images/profils/default.jpg"]);
    }

    public function questionSecrete(){
        extract($_POST);
        $requete = getBdd()->prepare("INSERT INTO secret(idQuestionSecrete, reponse) VALUES(?, ?)");
        if($_POST["questionSecrete"] == "question1"){
            $idQuestionSecrete = 1;
        }else if($_POST["questionSecrete"] == "question2"){
            $idQuestionSecrete = 2;
        }else{
            $idQuestionSecrete = 3;
        }
        $requete->execute([$idQuestionSecrete, $reponseQuestionSecrete]);
    }
}
?>
<?php
class Top extends Modele{
    private $topCategorie = [];

    public function initialiserTopCategorie(){
        $requete = $this->getBdd()->prepare ("SELECT IdCategorie,titre,photo,COUNT(idQuizz) as nbrQuizz FROM categories LEFT JOIN quizz USING(idCategorie) GROUP BY IdCategorie ORDER BY nbrQuizz DESC LIMIT 4");
        $requete->execute();
        $top = $requete->fetchAll(PDO::FETCH_ASSOC);
        foreach($top as $categorie){
            $objetCategorie = new Categorie();
            $objetCategorie->InitialiserCategorie($categorie["idCategorie"],$categorie["titre"],$categorie["photo"]);
        }
    }
}

?>
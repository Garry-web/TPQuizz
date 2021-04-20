<?php

    class Quizz
    {

    private $idQuizz = int; // int
    private $titre = string; // string
    private $categorie = object; // objet
    private $questions = []; // array

    public function __construct($idQuizz = null)
    {


        if($idQuizz !== null){

            $requete = $this->getBdd()->prepare("SELECT titre, FROM quizz WHERE idQuizz = ?");
            $requete->execute([$idQuizz]);
            $infos = $requete->fetch(PDO::FETCH_ASSOC);


            $requete = $this->getBdd()->prepare("SELECT categorie FROM quizz WHERE idQuizz = ?");
            $requete->execute([$idQuizz]);
            $questions = $requete->fetchAll(PDO::FETCH_ASSOC);


            $requete = $this->getBdd()->prepare("SELECT question FROM quizz WHERE idQuizz = ?");
            $requete->execute([$idQuizz]);
            $questions = $requete->fetchAll(PDO::FETCH_ASSOC);



            $this->idQuizz = $idQuizz;
            $this->titre  = $infos["titre"];
            $this->categorie = new Categorie($infos["idCategorie"]);



            foreach ( $questions as $question ){
                $objetQuestion = new Question($question["idQuestion"]);
                $this->questions[] = $objetQuestion;

            }

        }
    }
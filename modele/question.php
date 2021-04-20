<?php

    class Question 
    {

    privat $idQuestion = int;
    privat $question = string ;
    privat $reponse = []; 

    public function __construct($idQ=null){
        if(idQ!=null){
            $requete = $this->getBdd()->prepare("SELECT * FROM questions WHERE id-question = ?");
            $requete->execute([$idQ]);
            $LaQuestion = $requete->fetch(PDO::FETCH_ASSOC);

            $requete = $this->getBdd()->prepare("SELECT * FROM questions WHERE id-question = ?");
            $requete->execute([$idQ]);
            $reponses = $requete->fetchALL(PDO::FETCH_ASSOC);

            foreach($reponse as $reponse) {
                $objetReponse = new Reponse($reponses["id_reponse"])
                $this->reponses[] = $objetReponse;
            }


            $this->idQuestion = $idQ;
            $this->question = $LaQuestion["question"];
        }
    }
    public function getQuestion(){
        return $this->question;
    }
    public function setQuestion($newQ){
        this->question = $newQ;
    }
}
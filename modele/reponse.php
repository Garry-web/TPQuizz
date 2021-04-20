<?php

    class Reponse 
    {
      
    private $idreponse = int;
    private $reponse = string;
    private $vrai = boolean;

    public function __construct($idR=null){

    if($idR!=null){

      $requete = $this->getBdd(->prepare("SELECT * FROM reponses WHERE id_reponse=?"));
      $requete->execute([$idR]);
      $LaReponse = $requete->fetch(PDO::FETCH_ASSOC);

      $this->idReponse = $idR;
      $this->reponse = $LaReponse["reponse"];
      $this->vrai = $LaReponse["vrai"];


    }
  }
}
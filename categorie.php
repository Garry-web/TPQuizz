<?php
class categorie
{
    public $idCategorie;
    public $nomCategorie;
    public $illustration;

    public function _construct($idcat)
    {
        if($idCat!=null){
            $requete= $this->getBdd()->prepare("SELECT * FROM categories WHERE")
            $requete->execute([$idCat]);
            $idCategorie=$requete->fetch(PDO::FETCH_ASSOC);
            $this->idCategorie=$idCategorie["nomCategorie"];
            $this->illustration=$categorie["illustration"];
        }

    }
    public function getNomCat()
    {
        return $this->nomCategorie;
    }
    public function getillustration()
    {
        return $this->illustration;
    }
    public function setMonCat($newCat)
    {
        $this->nomCategorie = $newCat;
    }
    public function setillu($newillu)
    {
        $this->illustration = $newillu;
    }
}
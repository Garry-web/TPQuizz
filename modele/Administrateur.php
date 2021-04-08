<?php
class Administrateur extends Utilisateur
{
    
    private $bannis; //propriété

    public function setBannis($username){ //méthode setter
        this->bannis[] = $username;
    }

    public function getBannis(){ //méthode getter
        return $this->bannis;
    }
}

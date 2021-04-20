<?php

    class Utilisateur
    {

    protected $utilisateur = int;
    protected $identifiant = string;
    protected $password = string;
    protected $email = string;
    protected $questionsecret = object;
    protected $reponsesecret = string;



    public function __construct($un, $pw, $qs, $rs)
    {
        $this->identifiant = $id;
        $this->password = $pw;
        $this->questionsecrert = $qs
        $this->reponsessecret = $rs
    }

    public function getIdentifiant()
    {

        return $this->identifiant;
    }


    public function setIdentifiant($newIdentifiant)
    {
        $this->identifiant = $newUsername;
    }

    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }
}
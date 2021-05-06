<?php
class Modele{
    protected function getBdd(){
        return new PDO('mysql:host=localhost;dbname=tpquizz;charset=UTF8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}
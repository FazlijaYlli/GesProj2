<?php
/**
 * ETML
 * Auteur : Adrian Barreira Romero
 * Date: 08.12.2020
 * Recueil des méthodes permettant de charger les données pour les clients
 */

class CatalogRepository {

    // Variable de classe
    private $connector;

    /**
    * Constructeur de Database
    */
    public function __construct()
    {
        $this->connector = new PDO('mysql:host=localhost;dbname=bdwebprojet;charset=utf8', 'root', 'root');
    }

    /**
    * Simple requête
    */
    private function querySimpleExecute($query)
    {
        $req = $this->connector->query($query);
        return $req;
    }

}
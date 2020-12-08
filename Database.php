<?php
/**
 * ETML
 * Auteur : Adrian Barreira Romero
 * Date: 08.12.2020
 * Recueil des méthodes permettant de charger les données pour les clients
 */
include_once 'Config.php';

class Database {

    // Variable de classe
    private $connector;

    /**
     * TODO: à compléter
     */
    public function __construct(){

        // TODO: Se connecter via PDO et utilise la variable de classe $connector
        $this->connector = new PDO('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DBNAME . ';charset=' . SQL_CHARSET , SQL_USERNAME , SQL_PASSWORD);
    }

    /**
    * TODO: à compléter
    */
    public function queryConsumables($idPrint){
        
        $query = 
        "SELECT * FROM t_consommable
        NATURAL JOIN t_correspondre
        WHERE idImprimante = $idPrint;";
        // TODO: permet de préparer, de binder et d’exécuter une requête (select avec where ou insert, update et delete)
        $req = $this->connector->prepare($query);
        $req->execute();

        $result = $req->fetchALL(PDO::FETCH_ASSOC);

        $req->closeCursor();
        $connector = null;
        return $result;
    }
    
    // + tous les autres méthodes dont vous aurez besoin pour la suite (insertTeacher ... etc)

}
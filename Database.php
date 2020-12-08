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
    
    private function queryPrepareExecute($query, $binds){
        
        $req = $this->connector->prepare($query);
        
        if($binds != null)
        {
            foreach($binds as $bind){
                $req->bindValue($bind['marker'], $bind['var'], $bind['type']);
            }
        }

        $req->execute();

        return $req;
    }
    /**
     * Prepare et execute une requete
     */
    /**
     * Formater les resultats
     */
    private function formatData($req){

        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    /**
     * Vider le jeu d'enregistrement
     */

    private function unsetData($req){
        $req->closeCursor();

    }
    /**
     * Récupérer toutes les imprimantes de la bd
     */
    public function getAllPrinters(){

        // TODO: avoir la requête sql
        $query = "SELECT * FROM t_imprimante";

        // TODO: appeler la méthode pour executer la requête
        $req = $this->queryPrepareExecute($query, null);

        // TODO: appeler la méthode pour avoir le résultat sous forme de tableau
        $result = $this->formatData($req);

        //Vider le jeu d'enregistrement
        $this->unsetData($req);

        // TODO: retour toutes les imprimantes
        return $result;
    }

    /**
     */
     * Récupérer les informations pour 1 imprimante
    public function getOnePrinter($id){

        // TODO: avoir la requête sql pour 1 imprimante (utilisation de l'id)
        $query = "SELECT * FROM t_imprimantes where idImprimantes = $id";

        $req = $this->queryPrepareExecute($query, null);
        // TODO: appeler la méthode pour executer la requête

        // TODO: appeler la méthode pour avoir le résultat sous forme de tableau

        $result = $this->formatData($req);
        // TODO: retour l'imprimante
        return $result;
    }
 }
?>
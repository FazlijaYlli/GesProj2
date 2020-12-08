<?php

/** Lieu      : ETML
* Auteur      : Grp2
* Date        : 08.12.2020
* Description : Database
*/

 include 'config.ini.php';

 class Database {

    // Variable de classe
    private $connector;

    /**
     * Faire la connexion à la BD
     */
    public function __construct(){
        $user = $GLOBALS['MM_CONFIG']['database']['username'];
        $pass = $GLOBALS['MM_CONFIG']['database']['password'];
        $dbname = $GLOBALS['MM_CONFIG']['database']['dbname'];
        $host = $GLOBALS['MM_CONFIG']['database']['host'];
        $port = $GLOBALS['MM_CONFIG']['database']['port'];
        $charset = $GLOBALS['MM_CONFIG']['database']['charset'];
        try{
            $this->connector = new PDO(
                'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname .
                ";charset=" . $charset, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(exception $e) {
            echo "Connexion DB impossible";
        }
    }

    /**
     * Prepare et execute une requete
     */
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
     * Récupérer les informations pour 1 imprimante
     */
    public function getOnePrinter($id){

        // TODO: avoir la requête sql pour 1 imprimante (utilisation de l'id)
        $query = "SELECT * FROM t_imprimantes where idImprimantes = $id";

        // TODO: appeler la méthode pour executer la requête
        $req = $this->queryPrepareExecute($query, null);

        // TODO: appeler la méthode pour avoir le résultat sous forme de tableau
        $result = $this->formatData($req);

        // TODO: retour l'imprimante
        return $result;
    }
 }
?>
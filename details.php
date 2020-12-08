<?php 
$localhost="10.228.156.190";
$dbName="db_gesproj2_grp2";
$dbuser="GesProj2";
//GesProj2
$dbpassword="GesProj2";
$connector = new PDO('mysql:host=' . $localhost .';dbname='. $dbName .';charset=utf8', ''. $dbuser .'', '' .$dbpassword );


function getIdPrinter($id){
$query= "SELECT FROM t_imprimante WHERE idImprimante=$id";
$result=$this->prepare($query);
$this->execute($result);
$result=$this->fetchall(PDO::FETCH_ASSOC);

return $result;

}

echo '<a href="printDetails.php?Idimprimante=' . $printer[0]['idImprimante'] .'">Details</a>';



var_dump($printer);

/**
 * affichage des des détails
 */
foreach ($printer as $printers){

    
    echo $printer[0]["impFabriquant"];
    echo $printer[0]["impMarque"];
    echo $printer[0]["impModele"];
    echo $printer[0]["impTechImpression"];
    echo $printer[0]["impVitesseImpression"];
    echo $printer[0]["impCapaciteBac"];
    echo $printer[0]["impPoids"];
    echo $printer[0]["impResolutionX"];
    echo $printer[0]["impResolutionY"];
    echo $printer[0]["impLongueur"];
    echo $printer[0]["impLargeur"];
    echo $printer[0]["impHauteur"];
    echo $printer[0]["impPrix"];
    echo $printer[0]["impFabriquant"];


} 
?>

<!DOCTYPE html>

<html lang="fr-CH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Page d'accueil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Lieu    : ETML
     Auteur      : Grp2
     Date        : 08.12.2020
     Description : Page affichant les enseigants sous forme de liste
    -->

</head>

<body class="p-5 bg-light">

    <?php
    include("Database.php");

    $database = new Database();

    $printers = $database->getAllPrinters();
	
	$brands = $database->getDistinctBrands();

	$constructors = $database->getDistinctConstructors();

    ?>
    <header>
        <div class="jumbotron bg-dark">
            <h1 class="text-white" style="font-size: 150px;"> TopPrinter</h1>
        </div>
    </header>
    <div class="input-group mb-2 ">
        <div class="input-group-prepend " style="min-width: 200px;">
            <div class="input-group-text" style="min-width: 200px;">Modèle</div>
        </div>
        <input type="text" class="form-control" id="nameFilter" onkeyup="filterByColumn(2)" placeholder="Recherche par nom ...">
    </div>

    <div class="input-group mb-2">
        <div class="input-group-prepend" style="min-width: 200px;">
            <div class="input-group-text" style="min-width: 200px;">Marque</div>
        </div>
        <select class="form-control" id="brandFilter" onchange="brandFilter()" onkeyup="brandFilter()">
            <option value="null">Choisir ...</option>
            <?php
            foreach($brands as $brand) {
                echo "<option>" . $brand['impMarque'] . "</option>";
            }
            ?>
        </select>
    </div>

    <div class="input-group mb-5">
        <div class="input-group-prepend" style="min-width: 200px;">
            <div class="input-group-text" style="min-width: 200px;">Constructeur</div>
        </div>
        <select class="form-control" id="constructorFilter" onchange="constructorFilter()" onkeyup="constructorFilter()">
            <option value="null">Choisir ...</option>
            <?php
            foreach($constructors as $constructor) {
                echo "<option>" . $constructor['impFabriquant'] . "</option>";
            }
            ?>
        </select>
    </div>


    <h1>Imprimantes</h1>
    <table id="printer-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Fabriquant</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Technologie d'impression</th>
                <th>Vitesse d'impression</th>
                <th>Capacité du bac de papier</th>
                <th>Poids</th>
                <th>Résolution d'impression X</th>
                <th>Résolution d'impression Y</th>
                <th>Longueur</th>
                <th>Largeur</th>
                <th>Hauteur</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($printers as $printer) {
                echo "<tr>";
                echo "<td>" . $printer['impFabriquant'] . "</td>";
                echo "<td>" . $printer['impMarque'] . "</td>";
                echo "<td>" . $printer['impModele'] . "</td>";
                echo "<td>" . $printer['impTechImpression'] . "</td>";
                echo "<td>" . $printer['impVitesseImpression'] . "</td>";
                echo "<td>" . $printer['impCapaciteBac'] . "</td>";
                echo "<td>" . $printer['impPoids'] . "</td>";
                echo "<td>" . $printer['impResolutionX'] . "</td>";
                echo "<td>" . $printer['impResolutionY'] . "</td>";
                echo "<td>" . $printer['impLongueur'] . "</td>";
                echo "<td>" . $printer['impLargeur'] . "</td>";
                echo "<td>" . $printer['impHauteur'] . "</td>";
                echo "<td>" . $printer['impPrix'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <footer class="bg-dark">

        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-md-3 text-white">
                    <h5>ETML</h5>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-6 text-white">site conçu par groupe 2 <span class="small"><br>Hugo ducommun
                        , Ylli Fazlia
                        , Jérémie Bussy
                        <br> Adrian Barreira
                         et Miliran Ponniah</span></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-right text-white small align-self-end">©2020 ETML</div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="js/filters.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#printer-table').DataTable({
                    "searching": false,
                    "paging": false,
                    language: {
                        url: 'json/fr_fr.json'
                    }
                });
            });
        </script>
    </footer>
</body>

</html>
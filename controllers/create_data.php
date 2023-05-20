<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // traitement
    if(isset($_POST['nom']) and isset($_POST['couleur'])){

        // connexion
        include_once 'FruitController.php';

        $controller = new FruitController();
        $created = $controller->createFruit($_POST['nom'], $_POST['couleur']);

        if($created) {
            header('Location: ../index.php');
        } else {
            echo "Echec";
        }

    } else {
        // remplir les champs
        echo "Remplissez les champs";
    }

}



?>
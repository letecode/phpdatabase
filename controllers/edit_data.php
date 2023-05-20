<?php 

    include_once 'FruitController.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // traitement
        if(isset($_POST['nom']) and isset($_POST['couleur']) and isset($_POST['id'])){
            $controller = new FruitController();
            $updated = $controller->updateFruit($_POST['nom'], $_POST['couleur'], $_POST['id']);

            if($updated) {
                header('Location: ../index.php');
            } else {
                echo 'Error';
            }
        } else {
            // remplir les champs
            echo "Remplissez les champs";
        }

    }

?>
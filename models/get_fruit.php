<?php
    if(isset($_GET['id']) and $_GET['id'] != '') {
        // connexion
        include_once '../controllers/FruitController.php';

        $controller = new FruitController();
        $fruit = $controller->getFruit($_GET['id']);
    } else {
        header('Location: ../index.php');
    }
?>
<?php 
    include_once __DIR__. '/../controllers/FruitController.php';
    $dbcontroller = new FruitController();
    $fruits = $dbcontroller->getFruits();
?>
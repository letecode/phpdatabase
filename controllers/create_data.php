<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // traitement
    if(isset($_POST['nom']) and isset($_POST['couleur'])){

        // connexion
        include_once '../models/connection.php';

        $nom = $_POST['nom'];
        $couleur = $_POST['couleur'];

        $query = "INSERT INTO fruits (nom, couleur) VALUES (:nom, :couleur);";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':couleur', $couleur);

        if($stmt->execute()) {
            echo "Enregistrement effectué";
        } else {
            echo "Echec";
        }

    } else {
        // remplir les champs
        echo "Remplissez les champs";
    }

}



?>
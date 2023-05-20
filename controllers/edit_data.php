<?php 

    include_once '../models/connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // traitement
        if(isset($_POST['nom']) and isset($_POST['couleur']) and isset($_POST['id'])){

            $nom = $_POST['nom'];
            $couleur = $_POST['couleur'];

            $query = "UPDATE fruits SET nom=:nom, couleur=:couleur WHERE id=:id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':couleur', $couleur);

            if($stmt->execute()) {
                echo "Modification effectuée";
            } else {
                echo "Echec";
            }

        } else {
            // remplir les champs
            echo "Remplissez les champs";
        }

    }

?>
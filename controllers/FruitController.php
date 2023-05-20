<?php

    class FruitController {

        public $connexion;

        function __construct()
        {
            include_once __DIR__. '/../models/connection.php';

            $connect = new Connexion();
            $this->connexion = $connect->connection;
        }


        function getFruits() {
            try {
                $query = "SELECT * FROM fruits";
                $resultats = $this->connexion->query($query);
        
                if($resultats->rowCount() > 0) {
                    $fruits = $resultats->fetchAll(PDO::FETCH_ASSOC);

                    return $fruits;
                }

                return null;
        
            } catch (PDOException $e) {
                die("Error".$e->getMessage());
            }
        }

        function getFruit($id) {
            // recuprer le fruit ayant id,
            $query = "SELECT * from fruits WHERE id=".$id;
            $result = $this->connexion->query($query);

            if($result->rowCount() > 0) {
                $fruit = $result->fetch(PDO::FETCH_ASSOC);
                return $fruit;
            } else {
                return null;
            }
        }

        function updateFruit($nom, $couleur, $id) {
            $query = "UPDATE fruits SET nom=:nom, couleur=:couleur WHERE id=:id";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':couleur', $couleur);

            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }

        function createFruit($nom, $couleur) {
            $query = "INSERT INTO fruits (nom, couleur) VALUES (:nom, :couleur);";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':couleur', $couleur);

            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
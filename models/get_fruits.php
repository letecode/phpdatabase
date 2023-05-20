<?php 
    include_once 'connection.php';

    $fruits = [];

    try {
        $query = "SELECT * FROM fruits";
        $resultats = $db->query($query);

        if($resultats->rowCount() > 0) {
            $fruits = $resultats->fetchAll(PDO::FETCH_ASSOC);
        }

    } catch (PDOException $e) {
        die("Error".$e->getMessage());
    }

    // close connexion
    unset($db);
?>
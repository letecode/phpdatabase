<?php
    if(isset($_GET['id']) and $_GET['id'] != '') {
        // connexion
        include_once 'connection.php';

        // recuprer le fruit ayant id,
        $query = "SELECT * from fruits WHERE id=".$_GET['id'];
        $result = $db->query($query);

        if($result->rowCount() > 0) {
            $fruit = $result->fetch(PDO::FETCH_ASSOC);
        } else {
            echo "Not found";
        }

        
    } else {
        header('Location: ../index.php');
    }
?>
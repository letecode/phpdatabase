<?php
    include_once 'models/get_fruits.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des fruits</h1>
    <a href="views/create.php">Ajouter</a>
   <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Couleur</th>
        </thead>
        <tbody>
            <?php 
                foreach($fruits as $fruit) {
                   ?>
                   
                   <tr>
                    <td><?php echo $fruit['id']; ?></td>
                    <td><?php echo $fruit['nom']; ?></td>
                    <td><?php echo $fruit['couleur']; ?></td>
                    <td><a href="views/edit.php?id=<?php echo $fruit['id']; ?>">Modifier</a></td>
                   </tr>
                   
            <?php }
            ?>
        </tbody>
   </table>

</body>
</html>
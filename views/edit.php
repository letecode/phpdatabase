<?php
    include_once '../models/get_fruit.php';
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
    <h1>Modifier un fruit #<?php echo $_GET['id']; ?></h1>
    <form action="../controllers/edit_data.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <input type="hidden" name="id" value="<?php echo $fruit['id']; ?>">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" require value="<?php echo $fruit['nom']; ?>">
        </div>
        <div>
            <label for="color">Couleur</label>
            <input type="text" name="couleur" id="color" require value="<?php echo $fruit['couleur']; ?>">
        </div>

        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</body>

</html>
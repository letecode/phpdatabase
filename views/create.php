<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ajouter un fruit</h1>
    <form action="../controllers/create_data.php" method="POST">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" require>
        </div>
        <div>
            <label for="color">Couleur</label>
            <input type="text" name="couleur" id="color" require>
        </div>

        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</body>

</html>
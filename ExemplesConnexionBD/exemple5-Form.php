<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Formulaire pour effacer tous les appartements qui se trouvent dans un état choisi</h4>
    <form action="./exemple5-Delete.php" method="POST">
        <!-- créer un input pour l'état -->
        <div>État : 
        <select name="formEtat">
            <option value="bon">Appart en bon état</option>
            <option value="superb">Superbe Appartement</option>
            <option value="ok">Appartement corret</option>
        </select>
        </div>
        <br>
        <input type="submit" value="Supprimer">
    </form>

</body>

</html>
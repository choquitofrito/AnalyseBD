<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Formulaire de recherche d'un appartement (selon son état)</h4>

    <form action="./exemple3-SelectFiltreParams.php" method="POST">
        <select name="etat">
            <option value="nouveau">Appart nouveau</option>
            <option value="mauvais">Appart en mauvais état</option>
        </select>
        <input type="submit" value="Chercher">
    </form>
</body>

</html>
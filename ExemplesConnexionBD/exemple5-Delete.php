<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Select avec WHERE et params</h3>
    <?php

    // importation des paramètres de la BD
    include "./config/db.php";



    // vérification au cas où il a un problème (try-catch)
    $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
        ';dbname=' . DBNAME . ';charset='
        . DBCHARSET, DBUSER, DBPASS);

    // créer une requête de delete


    $sql = "DELETE FROM appartement ..."; // N'OUBLIEZ PAS LE WHERE

    // préparer la requête, renvoie objet PDOStatement
    // capturer du POST 
    // - l'etat


    $stmt = $bdd->prepare($sql);
    // lier les paramètres 
    $stmt->bindValue (":etat", $etat);
    // etc...


    // lancer la requête
    $stmt->execute();
    var_dump ($stmt->errorInfo());






    ?>
</body>

</html>
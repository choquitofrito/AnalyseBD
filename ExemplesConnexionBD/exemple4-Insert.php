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

    // créer une requête d'insértion

    // INSERT INTO appartement (idAppartement, adresse, etat) VALUES (NULL, , ); 

    $sql = "INSERT INTO .......";

    // préparer la requête, renvoie objet PDOStatement
    // capturer du POST 
    // - l'adresse
    // - l'etat


    $stmt = $bdd->prepare($sql);
    // lier les paramètres 
    $stmt->bindValue (":adresse", $adresse);
    // etc...


    // lancer la requête
    $stmt->execute();

    // obtenir le résultat
    $tableau = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // afficher le résultat
    // même chose avec des boucles imbriqués.
    foreach ($tableau as $cleIndex => $unAppart){
        foreach ($unAppart as $cleAssoc => $valeur){
            echo "<br>".$cleAssoc.": ".$valeur;
        }
    }


    
    var_dump ($tableau);

    // ex: 
    // afficher une adresse
    // var_dump ($tableau);
    // echo ("<br>Adresse de l'appart dans l'index 1: ". $tableau[1]['adresse']);


    die();







    ?>
</body>

</html>
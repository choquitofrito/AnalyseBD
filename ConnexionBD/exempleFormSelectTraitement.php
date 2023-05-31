<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Obtenir les données du formulaire
    $hobby = $_POST['hobby'];

    // 2. Connecter à la BD
    include "./config/db.php";

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD";
        die();
    }

    // 3. Créer la requête (SELECT)
    // Ex: SELECT * FROM stagiaire WHERE hobby = 'lire';
    $sql = "SELECT * FROM stagiaire WHERE hobby = :hobby";

    // 4. Envoyer la requête au serveur (fixer les paramètres)
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue (":hobby", $hobby);

    // 5. Lancer la requête (execute)
    $stmt->execute();

    // 6. Mettre le résultat dans un array et l'afficher
    $arrayStagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump ($arrayStagiaires);
    
    foreach ($arrayStagiaires as $arrayStagiaire){
        echo "<ul>";
        echo "<li>Prénom: " . $arrayStagiaire['prenom'] . "</li>";
        echo "<li>Hobby: " . $arrayStagiaire['hobby'] . "</li>";
        echo "<li>Inscription: " . $arrayStagiaire['dateInscription'] . "</li>";
        echo "</ul>";
    }


    // foreach ($arrayStagiaires as $arrayStagiaire){
    //     echo "<ul>";
    //     foreach ($arrayStagiaire as $cle => $valeur){
    //         echo "<li>" . $cle . " : "  . $valeur . "</li>";
    //     }
    //     echo "</ul>";
    // }

    // foreach ($arrayStagiaires as $arrayStagiaire){
    //     echo "<ul>";
    //     for ($i = 0; $i < 4; $i++){
    //         echo "<li>" . $arrayStagiaire[$i] . "</li>";
    //     }
    //     echo "</ul>";
    // }


    ?>
</body>
</html>
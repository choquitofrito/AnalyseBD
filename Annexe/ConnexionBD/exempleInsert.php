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
    // Info basique
    // CRUD : Create, Read, Update Delete
    // Create: INSERT
    // Read: SELECT (obtenir de données)
    // Update: UPDATE
    // Delete: DELETE

    print("<h3>On va insérer une stagiaire dans la BD</h3>");
    ///////


    // 0. Importer la configuration de connexion
    include "./config/db.php";

    // 1. Créer la connexion
    // - nom du serveur (host)
    // - port 
    // - user
    // - mot de pass
    // - nom de la BD
    // - nom du driver

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD";
        die();
    }

    
    // 2. Créer la requête INSERT
    // (les valeurs viendront normalement d'un formulaire)
    $prenom = 'Lolly Pop';
    $hobby = 'chanter';
    $dateInscription = '2025-07-21';

    $sql = "INSERT INTO stagiaire (id, prenom, hobby, dateInscription) VALUES (null, :prenom , :hobby , :dateInscription ) ";

    // 3. Lancer la requête INSERT
    // 3.1. Envoyer la requête au serveur et fixer les valeurs pour les paramètres (placeholder)
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':hobby', $hobby);
    $stmt->bindValue(':dateInscription', $dateInscription);

    // 3.2. Lancer la requête dans le serveur
    $stmt->execute();

    // pour debugger les érreurs de la requête
    var_dump ($stmt->errorInfo());


    ?>

</body>

</html>
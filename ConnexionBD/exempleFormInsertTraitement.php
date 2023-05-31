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

    // var_dump ($_POST);
    // die();
    
    // 1. Copier les données du form dans de variables    
    $prenom = $_POST['prenom'];
    $hobby = $_POST['hobby'];
    $dateInscription = $_POST['dateInscription'];

    // 2. Connecter à la BD
    include "./config/db.php";

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD";
        die();
    }

    // 3. Créer la requête pour insérer les données
    $sql = "INSERT INTO stagiaire (id, prenom, hobby, dateInscription) " .
        "VALUES (null, :prenom, :hobby, :dateInscription)";

    // 4. Envoyer la requête au serveur et donner ses valeurs aux paramètres
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue (":prenom", $prenom);
    $stmt->bindValue (":hobby", $hobby);
    $stmt->bindValue (":dateInscription", $dateInscription);

    // 5. Lancer la requête
    $stmt->execute ();


    ?>
</body>

</html>
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
    var_dump($_POST);

    // vérification au cas où il a un problème (try-catch)
    $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
        ';dbname=' . DBNAME . ';charset='
        . DBCHARSET, DBUSER, DBPASS);
    // créer une requête d'insértion
    // INSERT INTO appartement (idAppartement, adresse, etat) VALUES (NULL, , ); 
    $sql = "INSERT INTO appartement (idAppartement, adresse, etat) VALUES (NULL,:une_adresse,:un_etat)"; 
    // préparer la requête, renvoie objet PDOStatement
    $adresse = $_POST['adresse'];
    $etat = $_POST['etat'];
   
    // capturer du POST 
    // - l'adresse
    // - l'etat
    //stmt = statement(constatation)
    $stmt = $bdd->prepare($sql);
    // lier les paramètres 
    $stmt->bindValue (":une_adresse", $adresse);
    $stmt->bindValue (":un_etat", $etat);
    // etc...

    // lancer la requête
    $stmt->execute();
    //afficher l'info de prob
    //var_dump($stmt->errorInfo());

    ?>
</body>
</html>
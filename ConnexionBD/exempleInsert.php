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

        print ("<h3>On va insérer une stagiaire dans la BD</h3>");
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
        
        $cnx = new PDO (DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
        ';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASS);





        
        // $cnx = new PDO ()

        // 2. Créer la requête INSERT

        // 3. Lancer la requête INSERT



    ?>

</body>
</html>
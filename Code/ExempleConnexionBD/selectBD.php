<?php

// importation des paramètres de la BD
include "./config/db.php";


// vérification au cas où il a un problème (try-catch)

$bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
		';dbname='.DBNAME.';charset='
		.DBCHARSET,DBUSER,DBPASS); 



// créer une requête de selection (SELECT)
$sql = "SELECT * FROM appartement";

// préparer la requête, renvoie objet PDOStatement
$stmt = $bdd->prepare ($sql);

var_dump ($stmt);
die();

// lancer la requête


// obtenir le résultat


// afficher le résultat


	




















$nom = "Judy";
	
$sql= "SELECT nom FROM Client WHERE nom= :nom";
$statement=$bdd->prepare($sql);
$statement->bindValue(":nom",$nom);
$statement->execute();
$tableau = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($tableau as $cle => $valeur){
	echo $cle. " : ".$valeur;
}
	
	
?>


	

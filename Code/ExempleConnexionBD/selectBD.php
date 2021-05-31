<?php

// importation des paramètres de la BD
include "./config/db.php";
	
// création d'un objet pour la connexion ($pdo)	
try {
	$bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
		';dbname='.DBNAME.';charset='
		.DBCHARSET,DBUSER,DBPASS); 
}
catch (Exception $e){
	die ('Erreur: '.$e->getMessage());
}


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


	

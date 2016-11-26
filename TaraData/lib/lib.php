<?php

function requete($requete)
{
	$pdo=new PDO("mysql:dbname=tara_data;host=localhost","root","");
	$statement=$pdo->prepare($requete);
	$statement->execute();
	$results=$statement->fetchAll(PDO::FETCH_ASSOC);
	$json=json_encode($results);
	
	return $json;
}

?>
<?php 
// on se connecte � MySQL 
$db = mysql_connect('localhost', 'root', ''); 

// on s�lectionne la base 
mysql_select_db('projetbi',$db); 

// on cr�e la requ�te SQL 
$sql = 'SELECT * FROM ventes_test'; 
// on envoie la requ�te 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 


function SQLtoJSON($req){
	// on fait une boucle qui va faire un tour pour chaque enregistrement 
	$JSON = "[";
	while($data = mysql_fetch_assoc($req)) 
	{
		$JSON .= '{"idVente":'.$data['idVente'].',"Produit":""'.$data['Produit'].'"","Date":""'.$data['Date'].'"","Magasin":""'.$data['Magasin'].'"","Montant":"'.$data['Montant'].'","Quantitee":'.$data['Quantitee'].'}'; 
	}

	return $JSON;	
}

echo SQLtoJSON($req);

// on ferme la connexion � mysql 
mysql_close();
?> 
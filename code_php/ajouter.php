<?php 

/* CONNEXION */ 
$con=mysql_connect("localhost","root","");
mysql_select_db("immobilier",$con);

/* AJOUTER PROPRIETE*/

$piece=$_POST['piece'];
$surface=$_POST['surface'];
$adresse=$_POST['adresse'];
$prix=$_POST['prix'];
$description=$_POST['description'];
$categorie=$_POST['categorie'];
$message="";



$id=mysql_insert_id();
$type=$categorie[0];
$date=date("y");
$ref= $id.$type.$date;

$reff="moi";

if (isset($piece) and $piece!="Selectionnez le Nombre de pièces" and isset($surface) and !empty($surface) and isset($adresse) and !empty($adresse) and isset($prix) and !empty($prix) and isset($description) and !empty($description) and isset($categorie) and $categorie!="Selectionnez une catégorie") {

	$sql = "INSERT INTO propriete (Piece, Surface, Adresse,Prix,Description,ref,NomCtg) VALUES ('$piece', '$surface', '$adresse','$prix','$description','$reff','$categorie')";
        mysql_query($sql);

    $id=mysql_insert_id();
	$type=$categorie[0];
	$date=date("y");
	$ref= $id.$type.$date;

	$modif="update propriete set ref=$ref where idPrp=$id";
		mysql_query($modif);

    echo "la propriete a ete bien ajouter";
}
else{
	echo "Tous les champs sont obligatoires";
}


















?>


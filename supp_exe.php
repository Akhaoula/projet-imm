<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exelib";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!empty($_GET["id"])){
    //Supprimer l'exercice dont l'id est envoyé avec l'URL
	$ids = mysqli_real_escape_string($conn,$_GET["id"]);
	$sql = "DELETE FROM exercice WHERE id=$ids";
	echo $sql;
	if (mysqli_query($conn, $sql)) {
    	$message= "l'exercice a été supprimé avec succés";
	} else {
    	$mesasge="Erreur pendant la suppression de l'exercice: " . mysqli_error($conn);
	}
	//Redirection vers la page exercice.php avec un message résultat de la suppression 
   header("Location:exercice.php?message=$message");

}
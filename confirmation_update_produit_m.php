<?php
include('connexion.php');

$id_prod=$_GET["id_prod"];

$nom_prod = $_POST['nom_prod'];
$description = $_POST['description'];
$prix = $_POST['prix']; 
$query = "UPDATE Produits (nom_prod, description, prixHT) VALUES ('$nom_prod', '$description', $prix) WHERE id_prod=".$id_prod;
echo"$query";
$exec = $dbh->query($query);
$exec->setFetchMode(PDO::FETCH_OBJ);
?>
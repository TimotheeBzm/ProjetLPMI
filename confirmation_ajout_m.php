<?php
include('connexion.php');

$nom_prod = $_POST['nom_prod'];
$description = $_POST['description'];
$prix = $_POST['prix']; 
$query = "INSERT INTO Produits (nom_prod, description, prixHT) VALUES ('$nom_prod', '$description', $prix)";

$exec = $dbh->query($query);
$exec->setFetchMode(PDO::FETCH_OBJ);
?>
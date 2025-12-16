<?php
include('connexion.php');
$id_prod=$_GET["id_prod"];
$query = "SELECT description , nom_prod , prixHT from Produits WHERE id_prod=".$id_prod;
 
echo "$query";
$exec = $dbh->query($query);
$exec->setFetchMode(PDO::FETCH_OBJ);
?>
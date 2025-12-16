<?php
include('connexion.php');

$id_prod=$_GET["id_prod"];
$query = "SELECT * FROM Produits WHERE id_prod=".$id_prod;
$exec = $dbh->query($query);
$exec->setFetchMode(PDO::FETCH_OBJ);

?>
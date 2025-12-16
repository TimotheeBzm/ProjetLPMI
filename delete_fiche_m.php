<?php
include('connexion.php');

$id_prod=$_GET["id_prod"];
$query = "DELETE FROM Produits WHERE id_prod=".$id_prod;
$exec = $dbh->exec($query);

?>
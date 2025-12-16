<?php
include('connexion.php');

if ($dbh) {
    echo "Connexion réussie<br><br><br>";
} else {
    echo "Échec de la connexion.<br>";
}

$query = "SELECT * FROM Produits";
$exec = $dbh->query($query);
$exec->setFetchMode(PDO::FETCH_OBJ);


?>
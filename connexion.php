<?php
$user = "mm257769";
$pass = "mm257769";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=mm257769', $user, $pass);
}
catch(Exception $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
?>

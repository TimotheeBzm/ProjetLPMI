<?php
$ligne = $exec->fetch();

echo "<div name='element_produit'>";
    echo 'Produits : '.$ligne->nom_prod.'<br>';
    echo $ligne->description.'<br>';
echo "</div>";
echo "<a href='liste_produits_c.php'>Retour</a>";
?>
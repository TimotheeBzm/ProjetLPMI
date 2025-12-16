<?php
$ligne = $exec->fetch();

echo "<div name='element_produit'>";
    echo 'Produits : '.$ligne->nom_prod.'<br>';
    echo $ligne->description.'<br>';
echo "</div>";
echo "<a href='delete_fiche_c.php?id_prod=".$ligne->id_prod."'>Confirmer la suppression</a>";
echo "<br>";
echo "<a href='liste_produits_c.php?id_prod=".$ligne->id_prod."'>Annuler la suppresion</a>";
echo "<br>";
echo "<a href='liste_produits_c.php'>Retour</a>";
?>
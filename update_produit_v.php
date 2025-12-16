<?php
echo '<form action="confirmation_update_produit_c.php" method="POST">';
    echo '<input type="text" name="nom_prod" placeholder="nom article">';
    echo "<br>";
    echo '<input type="text" name="description" placeholder="description de article">';
    echo "<br>";
    echo '<input type="text" name="prix" placeholder="prix article HT" value='.$id_prod.'>';
    echo "<br>";
    echo '<input type="submit" value="Valider">';
echo "</form>";
echo "<a href='liste_produits_c.php'>Retour</a>";
?>
<?php
include('menu_c.php');

echo "<div class='menu'>";
echo "<a href=''>Liste</a>";
echo "<br>";
echo "<a href='ajout_produit_c.php'>Ajouts</a>";

echo "<div name='liste_produits'>";
while($ligne = $exec->fetch()){
    echo "<div name='produits'>";
        echo "<br>";
        echo 'Produits : ' . $ligne->nom_prod . "<br>";
        echo $ligne->description . "<br>";
        echo "<a href='fiche_detaillee_c.php?id_prod=".$ligne->id_prod."'>fiche détaillée</a>";
        echo "<br>";
        echo "<a href='confirmation_delete_c.php?id_prod=".$ligne->id_prod."'>supprimer</a>";
        echo "<br>";
        echo "<a href='update_produit_c.php?id_prod=".$ligne->id_prod."'>Modifier</a>";
    echo "</div>";
    echo "<br>";
}
echo "</div>";
?>
<?php

function dernierElementTableau($array) {
    if (empty($array)) {
        return null;
    } else {
        return $array[0];
    }
}

$resultat = dernierElementTableau([5, 10, 15, 20]);
echo "Le dernier élément est : " . $resultat;

$resultatVide = dernierElementTableau([]);
echo "Le dernier élément est : " . ($resultatVide ?? 'null');

?>

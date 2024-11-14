<?php

function premierElementTableau($array) {
    if (empty($array)) {
        return null;
    } else {
        return $array[0];
    }
}

$resultat = premierElementTableau([5, 10, 15, 20]);
echo "Le premier élément est : " . $resultat;

$resultatVide = premierElementTableau([]);
echo "Le premier élément est : " . ($resultatVide ?? 'null');

?>

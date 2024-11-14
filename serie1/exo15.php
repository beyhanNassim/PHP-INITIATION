<?php

function plusGrand($array) {
    if (empty($array)) {
        return null;
    } else {
        return $array[0];
    }
}

$resultat = plusGrand([5, 10, 15, 20]);
echo "L'élément est : " . $resultat;

$resultatVide = plusGrand([]);
echo "Le dernier élément est : " . ($resultatVide ?? 'null');

?>
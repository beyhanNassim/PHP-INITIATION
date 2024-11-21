<?php

function plusPetit($a, $b, $c){
    if ($a <= $b && $a <= $c){
        return $a;
    } elseif ($b <= $a && $b <= $c){
        return $b;
    } else {
        return $c;
    }
}

$resultat = plusPetit(5, 10, 3);
echo "Le plus petit est : " . $resultat;

?>
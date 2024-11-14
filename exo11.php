<?php

function plusPetit($a, $b){
    if ($a > $b){ 
        return $a; 
    }else{
        return $b;
    }

}

$resultat = plusPetit(5, 10);
echo "Le plus petit est : " . $resultat;

?>

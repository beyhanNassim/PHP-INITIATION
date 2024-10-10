<?php

function plusGrand($a, $b){
    if ($a > $b){ 
        return $a; 
    }else{
        return $b;
    }

}

$resultat = plusGrand(5, 10);
echo "Le plus grand est : " . $resultat;

?>


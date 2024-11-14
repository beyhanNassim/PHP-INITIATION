<?php
function moyenne(array $notes): float {
    if (count($notes) === 0) {
        return 0;
    }
    $somme = array_sum($notes);
    $moyenne = $somme / count($notes);
    return $moyenne;
}

?>

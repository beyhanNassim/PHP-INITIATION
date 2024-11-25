<?php
include "triangle.php";


if (isset($_GET['n'])) {
    $nb = intval($_GET['n']); // Récupérer et convertir la valeur en entier
    if ($nb > 0) {
        triangle($nb); // Appeler la fonction avec la valeur de 'n'
    } else {
        echo "Veuillez fournir une valeur positive pour 'n'.";
    }
} else {
    echo "Le paramètre 'n' est manquant dans l'URL.";
}
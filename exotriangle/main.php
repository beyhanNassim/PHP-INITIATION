<?php
include "triangle.php";


if (isset($_GET['n'])) {
<<<<<<< HEAD
    $nb0 = intval($_GET['n']); // Récupérer et convertir la valeur en entier
=======
    $nb = intval($_GET['n']); // Récupérer et convertir la valeur en entier
>>>>>>> 84a44b7328f94fd38583175ac26341241418bc1e
    if ($nb > 0) {
        triangle($nb); // Appeler la fonction avec la valeur de 'n'
    } else {
        echo "Veuillez fournir une valeur positive pour 'n'.";
    }
} else {
    echo "Le paramètre 'n' est manquant dans l'URL.";
}
<?php
require_once __DIR__ . '/database.php';

$filteredList = [];

// Controllo che venga utilizzata la query con ?genere dando il valore che ha passato l'utente.
if (isset($_GET['genere'])) {
    $value = $_GET['genere'];
} else {
    $value = '';
}


// Controllo del genere
foreach ($db as $album) {
    if ($value == '' || $album['genre'] === $value) {
        $filteredList[] = $album;
    }
}

header('Content-Type: application/json');

// Passiamo la nuova lista filtrata
echo json_encode($filteredList);

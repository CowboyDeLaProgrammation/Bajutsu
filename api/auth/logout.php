<?php
header("Access-Control-Allow-Origin: http://localhost:9000");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

require_once '../pdo.php';
require_once '../functions.php';
require_once '../requetes.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $token = getToken();

        if ($token == false) {
            EnvoyerDonnees(['error' => 'Token absent'], 400);
        }

        $user = recupererUnUserAvecToken($token);

        if ($user == false) {
            EnvoyerDonnees(['error' => 'Token inconnu'], 400);
        }

        $supprime = supprimerUnToken($user['nom']);

        if ($supprime == false) {
            EnvoyerDonnees(['error' => 'Erreur de suppression du token'], 500);
        }

        EnvoyerDonnees(['message' => 'Logout effectue'], 200);
        break;

    default:
        EnvoyerDonnees(['error' => 'Methode non autorisee'], 405);
        break;
}
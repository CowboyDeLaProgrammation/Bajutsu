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
        $data = RecupererBody();
        $user = filterAndValidateUser(['nom' => $data['userName'], 'mdp' => $data['userPass']]);

        if (isset($user['error'])) {
            EnvoyerDonnees(['error' => $user['error']], 400);
        }

        $userExiste = UserExist($user['nom']);

        if ($userExiste == false) {
            EnvoyerDonnees(['error' => 'Utilisateur introuvable'], 401);
        }

        $motDePasseCorrect = verifierDonneesUser($user['nom'], $user['mdp']);

        if ($motDePasseCorrect == false) {
            EnvoyerDonnees(['error' => 'Mot de passe incorrect'], 401);
        }

        $token = updateToken($user['nom']);

        if ($token == false) {
            EnvoyerDonnees(['error' => 'Erreur de creation du token'], 500);
        }

        EnvoyerDonnees(['token' => $token, 'userName' => $user['nom']], 200);
        break;

    default:
        EnvoyerDonnees(['error' => 'Methode non autorisee'], 405);
        break;
}
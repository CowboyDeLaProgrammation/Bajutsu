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

        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);

        if ($email == "") {
            EnvoyerDonnees(['error' => 'Email invalide'], 400);
        }

        $userExiste = UserExist($user['nom']);

        if ($userExiste != false) {
            EnvoyerDonnees(['error' => 'L\'utilisateur existe deja'], 409);
        }

        $hash = password_hash($user['mdp'], PASSWORD_DEFAULT);

        $succes = ajouterUnUser($user['nom'], $hash);

        if ($succes == false) {
            EnvoyerDonnees(['error' => 'Erreur lors de la creation du compte'], 500);
        }

        EnvoyerDonnees(['success' => true], 201);
        break;

    default:
        EnvoyerDonnees(['error' => 'Methode non autorisee'], 405);
        break;
}
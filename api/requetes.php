<?php
require_once "pdo.php";

function ajouterUnUser(string $nom, string $mdp) {
    $pdo = connexionBdd();

    $sql = "INSERT INTO utilisateur (nom, mdp) VALUES (:nom, :mdp)";

    $stmt = $pdo->prepare($sql);
    $param = [
        "nom" => $nom,
        "mdp" => $mdp
    ];
    return $stmt->execute($param);
}

function UserExist(string $nom) {
    $pdo = connexionBdd();

    $sql = "SELECT nom FROM utilisateur WHERE nom = ?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$nom]);
    return $stmt->fetch();
}

function verifierDonneesUser(string $nom, string $mdp) {
    $pdo = connexionBdd();

    $sql = "SELECT mdp FROM utilisateur WHERE nom = ?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$nom]);
    $user = $stmt->fetch();
    if (!$user) {
        return false;
    }

    return password_verify($mdp, $user["mdp"]);
}

function updateToken(string $nom) {
    $pdo = connexionBdd();

    $sql = "UPDATE utilisateur SET token = ? WHERE nom = ?";
    $stmt = $pdo->prepare($sql);
    $token = uniqid('', true);
    return $stmt->execute([$token, $nom]) ? $token : false;
}

function verifierUnToken(string $token) {
    $pdo = connexionBdd();

    $sql = "SELECT token FROM utilisateur WHERE nom = ?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$token]);
    return $stmt->fetch();
}

function supprimerUnToken(string $nom) {
    $pdo = connexionBdd();

    $sql = "UPDATE utilisateur SET token = NULL WHERE nom = ?";
    $stmt = $pdo->prepare($sql);
    return !$stmt->execute([$nom]);
}

function recupererUnUserAvecToken(string $token) {
    $pdo = connexionBdd();

    $sql = "SELECT * FROM utilisateur WHERE token = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$token]);
    return $stmt->fetch();
}


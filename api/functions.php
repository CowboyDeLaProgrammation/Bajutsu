<?php

function RecupererBody() {
	$contenu = file_get_contents("php://input");


	if ($contenu === false) {
	    return [];
	}

	$donnees = json_decode($contenu, true);

	if (!is_array($donnees)) {
	    return [];
	}

	return $donnees;
}

function RecupererHeader() {
	$entetes = getallheaders();

	if (!array_key_exists('Authorization', $entetes)) {
	    return false;
	}

	$bearer = explode(' ', $entetes['Authorization']);

	if ($bearer[0] === 'Bearer') {
	    return $bearer[1];
	}

	return false;
}

function getBody() : array {
    $body = file_get_contents("php://input");
    $body = json_decode($body, true);
    return $body == null ? [] : $body;
}

function isValidDateTime(string $datetime, string $format = 'Y-m-d H:i'): bool {
    $d = DateTime::createFromFormat($format, $datetime);
    $errors = DateTime::getLastErrors();
    if($errors === false && $d != false){
        return true;
    }
    return $errors['warning_count'] === 0 && $errors['error_count'] === 0;
}

function filterAndValidateUser(array $user): array{

    if(!isset($user['nom']) || !isset($user['mdp'])){
        return ['error' => 'Donnees incompletes'];
    }

    $nom = filter_var($user['nom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mdp = filter_var($user['mdp'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    if($nom == "" || $mdp == ""){
        return [ "error" => "Donnees incompletes"];
    }

    return ['nom' => $nom, 'mdp' => $mdp];
}

function getToken(): string | bool {
    $entetes = getallheaders();

	if (!array_key_exists('Authorization', $entetes)) {
	    return false;
	}

	$bearer = explode(' ', $entetes['Authorization']);

	if ($bearer[0] === 'Bearer') {
	    return $bearer[1];
	}

	return false;
}

function EnvoyerDonnees($donnees, $codeHTTP) {
	http_response_code($codeHTTP);
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($donnees);
	die();
}
<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('URL_ROOT', str_replace('\\', '/', 'http://' . $_SERVER['HTTP_HOST'] . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(__DIR__))));

// A adapter en fonction de votre base de données
define('NOM_DB', 'php_rigolo2');
define('UTILISATEUR_DB', 'root');
define('MDP_DB', '');

// Connexion PDO moderne (utf8mb4, erreurs en exceptions, fetch assoc)
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=' . NOM_DB . ';charset=utf8mb4';
$pdo = new PDO($dsn, UTILISATEUR_DB, MDP_DB, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

// Compatibilité si du code ancien utilise encore $dbconnexion
$dbconnexion = $pdo;

// Définition du menu
$menu = [];
$NbreElementLigne = 1;

// Helpers
$menu['Les helpers'] = [
    'link'        => 'helpers/',
    'titre'       => 'Les helpers',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Classe
$menu['La classe'] = [
    'link'        => 'classe/',
    'titre'       => 'La classe',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Note
$menu['La note'] = [
    'link'        => 'note/',
    'titre'       => 'La note',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Menu
$menu['Le menu'] = [
    'link'        => 'menu/',
    'titre'       => 'Le menu',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Référencement
$menu['Le référencement'] = [
    'link'        => 'referencement/',
    'titre'       => 'Référencement',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Vignettes
$menu['Les vignettes'] = [
    'link'        => 'vignettes/',
    'titre'       => 'Les vignettes',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Morpion
$menu['Le morpion'] = [
    'link'        => 'morpion/',
    'titre'       => 'Le morpion',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// News
$menu['news'] = [
    'link'        => 'news/',
    'titre'       => 'Les news',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

// Fichier CSV
$menu['fichier-csv'] = [
    'link'        => 'fichier-csv/',
    'titre'       => 'Fichier CSV',
    'description' => 'Exercice sur le PHP',
    'keywords'    => 'php,exo,exercice',
    'url'         => 'index.php',
];

?>

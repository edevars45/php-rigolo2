<?php
// 1) Charger la config (URL_ROOT, $menu…)
require_once __DIR__ . '/config.php';

// 2) SEO par défaut (évite "Undefined variable")
$TitrePage = 'exo de PHP';
$DescriptionPage = "C'est de la lolade !";
$KeywordsPage = 'ce,que,tu,veux';

// 3) Extraire le "slug" de l'URL (helpers, referencement, …)
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/'; // ex: "/helpers/"
$basePath = trim(parse_url(URL_ROOT, PHP_URL_PATH) ?? '', '/');             // ex: "php-rigolo2" ou ""
$relative = trim($uriPath, '/');                                            // ex: "helpers" ou "php-rigolo2/helpers"

if ($basePath !== '' && strncmp($relative, $basePath, strlen($basePath)) === 0) {
    $relative = ltrim(substr($relative, strlen($basePath)), '/');           // enlève "php-rigolo2/"
}

$slug = ($relative === '') ? '' : explode('/', $relative)[0];               // ex: "helpers"

//  basename permet de retirer les slashs
// nous allons faire une boucle qui permet de récupérer les liens dans le header.php

$uri = basename($_SERVER['REQUEST_URI']) . '/';

foreach ($menu as $page) {
   
 
    if ($uri === $page['link']) {
        $TitrePage = $page['titre'];
        $DescriptionPage = $page['description'];
        $KeywordsPage = $page['keywords'];
        break;
    }
}


// 5) Sécuriser pour l'HTML
$TitreSafe = htmlspecialchars($TitrePage, ENT_QUOTES, 'UTF-8');
$DescriptionSafe = htmlspecialchars($DescriptionPage, ENT_QUOTES, 'UTF-8');
$KeywordsSafe = htmlspecialchars($KeywordsPage, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="fr">



<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Métadonnées de la page -->
    <title><?= $TitreSafe ?></title>
    <meta name="description" content="<?= $DescriptionSafe ?>" />
    <meta name="keywords" content="<?= $KeywordsSafe ?>">


    <!-- Feuilles de style -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URL_ROOT ?>/css/menufullpage.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>

    <!-- Scripts JavaScript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= URL_ROOT ?>/js/jquery.cropit.js"></script>
</head>

<body>
    <a href="#menu" class="menu-link">
        <span>toggle menu</span>
    </a>

    <!-- Menu généré à partir du tableau de config.php -->
    <nav id="menu" class="panel" role="navigation">
        <ul>
            <?php
            // Sécurité / valeurs par défaut
            $items = isset($menu) && is_array($menu) ? $menu : [];
            $perRow = max(1, (int) ($NbreElementLigne ?? 3));

            // Parcours des items et découpe en lignes
            $i = 0;
            foreach ($items as $label => $data) {
                // Ouvre une ligne <li> toutes les $perRow entrées
                if ($i % $perRow === 0) {
                    echo "<li>\n";
                }

                // Construit l'URL propre
                $path = isset($data['link']) ? (string) $data['link'] : '';
                $path = ltrim($path, '/');
                if ($path !== '' && substr($path, -1) !== '/') {
                    $path .= '/';
                }
                $url = rtrim(URL_ROOT, '/') . '/' . $path;

                // Classe CSS active si c'est la page courante
                $activeClass = (trim((string) ($data['link'] ?? ''), '/') === $slug) ? ' class="active"' : '';

                // Affiche le lien du menu
                echo '  <div><a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"' . $activeClass . '>'
                    . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . "</a></div>\n";

                $i++;

                // Ferme la ligne <li>
                if ($i % $perRow === 0) {
                    echo "</li>\n";
                }
            }

            // Ferme la dernière ligne si nécessaire
            if ($i > 0 && $i % $perRow !== 0) {
                echo "</li>\n";
            }


            ?>
        </ul>
    </nav>
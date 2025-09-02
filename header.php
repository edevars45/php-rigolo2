<?php
$TitrePage = 'exo de PHP';
$DescriptionPage = 'C\'est de la lolade !';
$KeywordsPage = 'ce,que,tu,veux';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?= $TitrePage ?></title>
    <meta name="description" content="<?= $DescriptionPage ?>" />
    <meta name="keywords" content="<?= $KeywordsPage ?>">

    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URL_ROOT ?>/css/menufullpage.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?= URL_ROOT ?>/js/jquery.cropit.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <a href="#menu" class="menu-link">
        <span>toggle menu</span>
    </a>
    
   <!-- Début menu à remplacer avec les tableaux de config.php -->
<nav id="menu" class="panel" role="navigation">
  <ul>
    <?php
    // 1) Sécurité / valeurs par défaut
    $items  = isset($menu) && is_array($menu) ? $menu : [];
    $perRow = max(1, (int)($NbreElementLigne ?? 3)); // nb de colonnes par ligne

    // 2) Parcours des items et découpe en lignes
    $i = 0;
    foreach ($items as $label => $data) {
        // Ouvre une ligne <li> toutes les $perRow entrées
        if ($i % $perRow === 0) {
            echo "<li>\n";
        }

        // Construit l'URL propre (URL_ROOT + lien du config)
        $path = isset($data['link']) ? (string)$data['link'] : '';
        $path = ltrim($path, '/');                         // enlève éventuel "/" au début
        if ($path !== '' && substr($path, -1) !== '/') {   // force "/" de fin
            $path .= '/';
        }
        $url  = rtrim(URL_ROOT, '/') . '/' . $path;

        // Affiche un bloc
        echo '  <div><a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '">'
           . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . "</a></div>\n";

        $i++;

        // Ferme la ligne <li> quand on a mis $perRow éléments
        if ($i % $perRow === 0) {
            echo "</li>\n";
        }
    }

    // 3) Si la dernière ligne n'était pas complète, on ferme le <li>
    if ($i > 0 && $i % $perRow !== 0) {
        echo "</li>\n";
    }
    ?>
  </ul>
</nav>
<!-- Fin menu à remplacer avec les tableaux de config.php -->
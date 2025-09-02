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
            <li>
                <div><a href="<?= URL_ROOT ?>/helpers/">Les helpers</a></div>
                <div><a href="<?= URL_ROOT ?>/classe/">La classe</a></div>
                <div><a href="<?= URL_ROOT ?>/note/">La note</a></div>
            </li>
            <li>
                <div><a href="<?= URL_ROOT ?>/menu/">Le menu</a></div>
                <div><a href="<?= URL_ROOT ?>/referencement/">Référencement</a></div>
                <div><a href="<?= URL_ROOT ?>/vignettes/">Les vignettes</a></div>
            </li>
            <li>
                <div><a href="<?= URL_ROOT ?>/morpion/">Le morpion</a></div>
                <div><a href="<?= URL_ROOT ?>/news/">Les news</a></div>
                <div><a href="<?= URL_ROOT ?>/fichier-csv/">Fichier CSV</a></div>
            </li>

        </ul>
    </nav>
    <!-- Fin menu à remplacer avec les tableaux de config.php -->
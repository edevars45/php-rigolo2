<?php include '../config.php'; ?>
<?php include '../header.php'; ?>

<div class="general-content">
    <h1>Le référencement</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Nos pages n'ont pas de titres, descriptions et mots clefs, c'est dommage !<br>
        Le fichier config.php contient un tableau, le même que pour le menu d'ailleur $menu qui dispose d'informations
        sur chaques pages. En bricolant un peu dans le fichier header.php, il ne doit pas être impossible de faire une
        relation entre les données du tableau et la page consultée, et envoyer les informations relatives à chaque pages
        la ou elles doivent être, essayons ça!
    </p>

    <script>
        $(document).ready(function () {
            $('.menu-link').menuFullpage();
        });
    </script>
    <?php include '../footer.php'; ?>
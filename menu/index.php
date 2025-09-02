<?php include '../config.php'; ?>
<?php include '../header.php'; ?>

<div class="general-content">
    <h1>Le menu</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Le menu est actuellement en html dans le fichier header.php . Vous devez reconstruire dynamiquement celui-ci à
        partir des données qui ce trouve dans le fichier config.php, voir le tableau $menu dans le fichier. Le menu
        s'adaptera suivant la variable $NbreElementLigne, le menu aura le nombre de colonne que donne cette variable. Il
        n'y a donc rien à faire dans ce fichier index.php
    </p>
    <h2>Illustrations</h2>
    <h3>$NbreElementLigne = 1</h3>
    <img src="<?= URL_ROOT ?>/img/menu1.jpg" width="100%" alt="" />
    <h3>$NbreElementLigne = 2</h3>
    <img src="<?= URL_ROOT ?>/img/menu2.jpg" width="100%" alt="" />
    <h3>$NbreElementLigne = 3</h3>
    <img src="<?= URL_ROOT ?>/img/menu3.jpg" width="100%" alt="" />
    <h3>$NbreElementLigne = 4</h3>
    <img src="<?= URL_ROOT ?>/img/menu4.jpg" width="100%" alt="" />
    <script>
        $(document).ready(function () {
            $('.menu-link').menuFullpage();
        });
    </script>
    <?php include '../footer.php'; ?>
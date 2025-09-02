<?php include '../config.php'; ?>
<?php include '../header.php'; ?>
<div class="general-content">
    <h1>Fichier CSV</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Jacqueline en a marre d'aller chercher des numéros de téléphone dans des fichiers CSV illisibles et completement
        pourris. Elle nous a demandé de lui faire un petit outil pour s'y retrouver facilement. Le fichier commande.csv
        sera lu par le fichier transformateur-json.php qui lui sera appelé de cette page. Le travail du fichier
        transformateur-json.php est de lire le fichier csv et de transformer les données en format json compatible avec
        le tableau d'affichage. Seuls les informations qui lui sont nécessaires doivent être présentes : ID de commande,
        nom , prénom et téléphone.
    </p>
    <h2>Résultat</h2>
    <table id="jacqueline" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID commande</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID commande</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function () {
            $('.menu-link').menuFullpage();
            $('#jacqueline').DataTable({
                "ajax": "transformateur-json.php"
            });
        });
    </script>
    <?php include '../footer.php'; ?>
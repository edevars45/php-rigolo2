<?php include '../config.php'; ?>
<?php include '../header.php'; ?>
 
 
<div class="general-content">
    <h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des utilisateurs.
        Faites du PHP pour mélanger ce résultat et obtenir 4 utilisateurs au hasard.</p>
    <h2>Résultat</h2>
 
    <?php
    // je récupére tous les utilisateurs de la table
    $stmt = $dbconnexion->query("SELECT id ,nom,prenom FROM users");
    // je met ça dans un tableau
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // cette fonction permet de mélanger les utilisateurs à l'intérieur de ce tableau
    shuffle($utilisateurs);
    // je garde seulement 4 entrées
    $utilisateurs_choisi = array_slice($utilisateurs, 0, 4);
    // j'affiche les noms un par un
    foreach ($utilisateurs_choisi as $user) {
        echo '<div class="choix-aleatoire">' . $user['nom'] . ' '. $user['prenom']. '</div>';
 
        // echo $user['nom'] . "<br>";
    }
    ?>
 
    <script>
        $(document).ready(function () {
            $('.menu-link').menuFullpage();
        });
    </script>
 
 
</div>
 
<?php include '../footer.php'; ?>
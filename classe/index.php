<?php include '../config.php'; ?>
<?php include '../header.php'; ?>
<div class="general-content">
    <h1>La classe</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données users, vous devez remonter les informations, nom, prenom et
        date_naissance. La date de naissance doit être transformée pour donner l'âge de la personne. Vous devez faire
        une fonction pour la convertion date de naissance / âge.
    </p>
    <h2>Résultat</h2>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Date de naissance</th>
 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Date de naissance</th>
 
            </tr>
        </tfoot>
        <tbody>
 
            <?php
 
            $stmt = $dbconnexion->query("SELECT nom,prenom,date_naissance FROM users");
            $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            function calculerAge($dateNaissance)
            {
                $dateNaissanceObj = new DateTime($dateNaissance);
                $aujourdhui = new DateTime();
                $difference = $aujourdhui->diff($dateNaissanceObj);
                return $difference->y;
            }
 
            foreach ($utilisateurs as $user) {
                $age = calculerAge($user['date_naissance']);
                echo '<tr>
            <td>' . htmlspecialchars($user['nom']) . '</td>
            <td>' . htmlspecialchars($user['prenom']) . '</td>
            <td>' . htmlspecialchars($age) . '</td>
            <td>' . htmlspecialchars($user['date_naissance']) . '</td>
 
          </tr>';
            }
            ?>
 
 
            }
 
 
            ?>
 
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('.menu-link').menuFullpage();
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
            }
        });
    });
</script>
<?php include '../footer.php'; ?>
 
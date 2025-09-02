<?php include '../config.php'; ?>
<?php include '../header.php'; ?>
 
<div class="general-content">
  <h1>La note</h1>
  <h2>Explications sur l'exercice</h2>
  <p>Calculez vous même votre note en utilisant le formulaire suivant. Attention, les notes sont dans le fichier
    note.txt au format JSON, vous devez faire la correspondance entre ces données et les données envoyées par le
    formulaire.
  </p> 
 
  <!-- Début de votre PHP-->
  <?php
// 1. Charger le JSON (note.json est à la racine du projet)
$pathJson = __DIR__ . "/note.txt";
if (!file_exists($pathJson)) {
  // Message utile de debug + on évite un fatal error
  echo '<div class="MegaNote">Fichier note.json introuvable</div>';
} else {
  $raw  = file_get_contents($pathJson);
  $data = json_decode($raw, true);
 
  if (json_last_error() !== JSON_ERROR_NONE || !isset($data['exercices']) || !is_array($data['exercices'])) {
    echo '<div class="MegaNote">JSON invalide</div>';
  } else {
    // 2. Initialiser les compteurs
    $totalPoints    = 0;
    $pointsObtenus  = 0;
 
    // ➜ Toujours calculer le total pour afficher X / Y même sans submit
    foreach ($data['exercices'] as $rule) {
      $totalPoints += (int)($rule['points'] ?? 0);
    }
 
    // 3. Si le formulaire est soumis, on calcule les points obtenus
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      foreach ($data['exercices'] as $name => $regle) {
        $attendu = $regle['ok'] ?? null;                 // valeur attendue (OUI)
        $points  = (int)($regle['points'] ?? 0);
        $recu    = $_POST[$name] ?? null;                // valeur reçue
 
        if ($attendu !== null && $recu === $attendu) {
          $pointsObtenus += $points;
        }
      }
    }
 
    // 4. Afficher la note
    echo '<div class="MegaNote">' . $pointsObtenus . '/' . $totalPoints . '</div>';
  }
}
?>
  <!-- Fin de votre PHP-->
 
  <h2>Avez-vous réussi les exercices suivants :</h2>
 <form action="<?= URL_ROOT ?>/note/" method="post" id="exo">
  <table class="table table-striped">
    <tbody>

      <tr>
        <td class="lead">Exercice "Les helpers"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="helpers" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="helpers" value="lhGtF62"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "La classe"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="classe" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="classe" value="lhGtF62"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "La note"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="note" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="note" value="lhGtF62"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "Le menu"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="menu" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="menu" value="GFoP5s"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "Référencement"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="referencement" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="referencement" value="GFoP5s"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "Vignettes"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="vignettes" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="vignettes" value="GFoP5s"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "Morpion"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="morpion" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="morpion" value="MvDF34"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">News</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="news" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="news" value="MvDF34"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td class="lead">Exercice "Fichier CSV"</td>
        <td class="text-right">
          <label class="radio-inline">
            <input type="radio" name="csv" value="qsdfV45" checked> NON
          </label>
          <label class="radio-inline">
            <input type="radio" name="csv" value="YvKJhc23"> OUI
          </label>
        </td>
      </tr>

      <tr>
        <td colspan="2" class="text-center">
          <button type="submit" class="btn btn-default btn-lg" form="exo" value="Submit">Calculer ma note</button>
        </td>
      </tr>

    </tbody>
  </table>
</form>

 
  <script>
    $(document).ready(function () {
      $('.menu-link').menuFullpage();
    });
  </script>
  <?php include '../footer.php'; ?>
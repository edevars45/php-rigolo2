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
  <!-- <div class="MegaNote">20/20</div> -->
  <!-- Fin de votre PHP-->
  <?php
  // (1) Afficher provisoirement ce que le formulaire a envoyé
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }
  ?>
  <?php
  // 1) Récupère proprement les valeurs postées par le formulaire (clé = name des radios)
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? [];

  // 2) Cherche le fichier note.txt (d'abord dans le dossier courant, puis parent)
  $paths = [__DIR__ . '/note.txt', dirname(__DIR__) . '/note.txt'];
  $data = null;
  foreach ($paths as $p) {
    if (is_readable($p)) {
      $raw = file_get_contents($p);                 // lit le fichier
      $data = json_decode($raw, true);              // décode le JSON en tableau associatif
      if (json_last_error() === JSON_ERROR_NONE) {
        break;                                    // JSON OK → on s'arrête
      }
    }
  }

  // 3) Si le JSON est manquant ou invalide → sécurité
  if (!is_array($data)) {
    $data = [];
  }

  // 4) On accepte deux formats possibles de note.txt :
//    a) {"answers": {"helpers":"lhGtF62", ...}, "weights":{"helpers":1,...}, "scale":20}
//    b) {"helpers":"lhGtF62", "classe":"lhGtF62", ...} (sans weights/scale)
  $answers = $data['answers'] ?? $data;                 // correspondances attendues : name => valeur "OUI"
  $weights = $data['weights'] ?? $data['coeffs'] ?? []; // pondérations facultatives
  $scale = isset($data['scale']) ? (int) $data['scale'] : 20; // barème (par défaut 20)
  
  // 5) Si pas de pondération fournie → tout le monde vaut 1
  if (!is_array($weights) || empty($weights)) {
    $weights = [];
    foreach ($answers as $k => $_) {
      $weights[$k] = 1;
    }
  }

  // 6) Calcule le score obtenu
  $totalWeight = 0;
  $scoreWeight = 0;

  foreach ($answers as $name => $expectedValue) {
    $w = $weights[$name] ?? 1;            // poids de cet exercice
    $totalWeight += $w;

    $userValue = $post[$name] ?? null;    // valeur envoyée par le formulaire (radio sélectionné)
    // On compare en chaîne pour éviter les surprises de types
    if ($userValue !== null && (string) $userValue === (string) $expectedValue) {
      $scoreWeight += $w;               // bonne réponse → on ajoute son poids
    }
  }

  // 7) Note finale /20 (ou /scale), arrondie à 2 décimales
  $note = ($totalWeight > 0) ? round($scale * $scoreWeight / $totalWeight, 2) : 0;

  // 8) Affichage sécurisé
  echo '<div class="MegaNote">' . htmlspecialchars((string) $note, ENT_QUOTES, 'UTF-8') . '/' . (int) $scale . '</div>';
  ?>


  <h2>Avez-vous réussi les exercices suivants :</h2>
  <form action="<?= URL_ROOT ?>/note/" method="post" id="exo">
    <table class="table table-striped">
      <tbody>
        <tr>
          <td class="lead">Exercice "Les helpers"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="helpers" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="helpers" value="lhGtF62">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "La classe"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="classe" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="classe" value="lhGtF62">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "La note"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="note" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="note" value="lhGtF62">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "Le menu"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="menu" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="menu" value="GFoP5s">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "Référencement"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="referencement" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="referencement" value="GFoP5s">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "Vignettes"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="vignettes" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="vignettes" value="GFoP5s">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "Morpion"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="morpion" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="morpion" value="MvDF34">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">News"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="news" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="news" value="MvDF34">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td class="lead">Exercice "Fichier CSV"</td>
          <td align="right"><label class="radio-inline">
              <input type="radio" name="csv" checked value="qsdfV45">NON
            </label>
            <label class="radio-inline">
              <input type="radio" name="csv" value="YvKJhc23">OUI
            </label>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><button type="submit" class="btn btn-default btn-lg" form="exo"
              value="Submit">Calculer ma note</button></td>
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
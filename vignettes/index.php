<?php include '../config.php'; ?>
<?php include '../header.php'; ?>

<!-- début traitement image upload-->
<?php

// On vérifie qu'une image recadrée est bien envoyée par Cropit
if (!empty($_POST['image-data'])) {
  // 1. Récupérer le nom original du fichier uploadé (input type="file")
  $origName = $_FILES['NomVignette']['name'] ?? 'image.png'; // fallback si absent

  // 2. Nettoyer le nom de base (sans extension) pour la vignette
  $base = pathinfo($origName, PATHINFO_FILENAME);             // extrait 'nom_fichier'
  $base = preg_replace('/[^A-Za-z0-9_\-]/', '_', $base);      // remplace caractères spéciaux

  // 3. Préparer le dossier de destination (sous-dossier 'vignettes' à l'intérieur)
  $destDir = __DIR__ . '/vignettes';                          // répertoire pour stocker les JPG
  if (!is_dir($destDir)) {
    mkdir($destDir, 0755, true);                            // créer le dossier si besoin
  }

  // 4. Extraire et décoder la partie base64 du PNG recadré
  $data = $_POST['image-data'];                                // 'data:image/png;base64,...'
  list(, $b64) = explode(',', $data, 2);                       // sépare en deux
  $imgData = base64_decode($b64);                              // données binaires de l'image

  // 5. Créer une ressource GD à partir des données brutes
  $src = imagecreatefromstring($imgData);                       // supporte PNG → ressource GD
  if ($src === false) {
    echo '<p style="color:red">Erreur : impossible de lire l\'image PNG générée.</p>';
  } else {
    // 6. Sauvegarder la ressource en JPEG dans le dossier 'vignettes'
    $outPath = $destDir . '/' . $base . '.jpg';              // ex: vignettes/nom_fichier.jpg
    $quality = 80;                                           // qualité JPEG (0-100)
    imagejpeg($src, $outPath, $quality);                     // conversion et enregistrement

    // 7. Libérer la ressource mémoire
    imagedestroy($src);

    // 8. Message de confirmation pour l'utilisateur
    echo '<p style="color:green">Vignette créée : <strong>' . htmlspecialchars($base . '.jpg') . '</strong></p>';
  }
  // Post/Redirect/Get** pour éviter ERR_CACHE_MISS
  header('Location: ' . $_SERVER['REQUEST_URI']);
  exit;
}

?>
<!-- fin traitement image upload-->



<div class="general-content">
  <h1>Les vignettes</h1>
  <h2>Explications sur l'exercice</h2>
  <p>Vous devez faire le script pour que les vignettes soient enregistrées dans le répertoires "vignettes", les
    vignettes dans ce répertoire doivent être visibles sur cette page. La vignette doit avoir le même nom que le fichier
    original. Pour info, le format pour l'image envoyée par le formulaire est un .png, il vous faudra donc convertir
    d'une manière ou d'une autre l'image téléchargée pour que l'image finale soit au format .jpg
  </p>
<h2>Faire une vignette</h2>
<div>
  <div class="image-uploader">
    <form action="<?= URL_ROOT ?>/vignettes/" method="post">
      <div class="image-editor">
        <!-- input Cropit pour choisir le PNG -->
        <input type="file" class="cropit-image-input btn btn-default btn-lg" name="NomVignette">
        <!-- aperçu recadré -->
        <div class="cropit-preview" style="width:300px; height:300px; border:1px solid #ccc;"></div>
        <!-- libellé dynamique -->
        <div class="image-size-label">
          Zoom : <span class="zoom-value">100%</span>
        </div>
        <!-- slider de zoom -->
        <input type="range" class="cropit-image-zoom-input">
        <!-- données base64 pour PHP -->
        <input type="hidden" name="image-data" class="hidden-image-data" />
        <button type="submit" class="btn btn-default btn-lg">Enregistrer la vignette</button>
      </div>
    </form>
  </div>
</div>

<script>
  $(function() {
    // 1) Initialise Cropit avec zoom activé
    $('.image-editor').cropit({
      // permet de zoomer plus librement
      smallImage: 'stretch'
    });

    // 2) Met à jour le % de zoom affiché
    $('.cropit-image-zoom-input').on('input change', function() {
      var zoom = $(this).val();             // valeur entre min et max (par défaut 0.5–1.5)
      var percent = Math.round(zoom * 100); // convertit en pourcentage
      $('.zoom-value').text(percent + '%');
    });
  });
</script>

  <h2>Vignettes disponibles</h2>

  <?php
// ---------------------------------
// Affichage dynamique de la galerie
// ---------------------------------
echo '<div class="gallery" style="display:flex; flex-wrap:wrap; gap:10px;">';

// Boucle sur tous les .jpg dans vignettes/vignettes/
$pattern = __DIR__ . '/vignettes/*.jpg';
$files   = glob($pattern);

foreach ($files as $path) {
    $file = basename($path); 
    // Affiche chaque image avec son nom
    echo '<figure style="margin:0; text-align:center;">';
    echo '<img src="vignettes/' . $file . '" alt="' . $file . '" class="vignettes" style="max-width:150px; height:auto;">';
    echo '<figcaption style="font-size:12px;">' . $file . '</figcaption>';
    echo '</figure>';
}

echo '</div>';
?>

  <!-- début gallerie image -->
  <!-- <img src="<?= URL_ROOT ?>/vignettes/vignettes/ballerine-acajou-gris.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/ballerine-ella-rose.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/ballerine-ella-taupe.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/lpb-escarpin-beige.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/lpb-escarpin-noir.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/reine.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/saumon.jpg" class="vignettes">
  <img src="<?= URL_ROOT ?>/vignettes/vignettes/savoyarde.jpg" class="vignettes"> -->

  <!-- Fin gallerie image -->
  <script>
    $(document).ready(function () {
      $('.menu-link').menuFullpage();
    });
  </script>
  <script>
    $(function () {
      $('.image-editor').cropit();

      $('form').submit(function () {
        var imageData = $('.image-editor').cropit('export');
        $('.hidden-image-data').val(imageData);

        return true;
      });
    });
  </script>
  <?php include '../footer.php'; ?>
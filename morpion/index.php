<?php include '../config.php'; ?>
<?php include '../header.php'; ?>


<div class="general-content">
  <h1>Le morpion</h1>
  <h2>Explications sur l'exercice</h2>
  <p>Faire un jeu de morpion, l'adversaire et l'ordinateur, il n'y a pas deux joueurs.
  </p>
  <h2>Faire une partie</h2>


  <!-- Début php -->

  <div style="text-align:center;margin-bottom:30px;width:100%;"><a href="<?= URL_ROOT ?>/morpion/?rejouer=ok"
      class="btn btn-info" style="font-size:50px;padding-left:100px;padding-right:100px;">Bravo, tu as gagné
      !!<br>Rejouer une partie</a></div>
  <table id="center">
    <tbody>
      <tr>
        <td class="carre" id="Zonea1"><img src="<?= URL_ROOT ?>/img/croix.png"></td>
        <td class="carre" id="Zonea2"><img src="<?= URL_ROOT ?>/img/rond.png"></td>
        <td class="carre" id="Zonea3"><img src="<?= URL_ROOT ?>/img/croix.png"></td>
      </tr>
      <tr>
        <td class="carre" id="Zoneb1"><img src="<?= URL_ROOT ?>/img/vide.png"></td>
        <td class="carre" id="Zoneb2"><img src="<?= URL_ROOT ?>/img/croix.png"></td>
        <td class="carre" id="Zoneb3"><img src="<?= URL_ROOT ?>/img/vide.png"></td>
      </tr>
      <tr>
        <td class="carre" id="Zonec1"><img src="<?= URL_ROOT ?>/img/rond.png"></td>
        <td class="carre" id="Zonec2"><img src="<?= URL_ROOT ?>/img/rond.png"></td>
        <td class="carre" id="Zonec3"><img src="<?= URL_ROOT ?>/img/croix.png"></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Fin php -->
<script>
  $(document).ready(function () {
    $('.menu-link').menuFullpage();
  });
</script>
<?php include '../footer.php'; ?>
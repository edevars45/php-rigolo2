<?php
include '../config.php'; // Démarre la session et charge la config
include '../header.php'; // Affiche l'en-tête du site
?>


<div class="general-content">
<h1>Le morpion</h1> <!-- Titre de la page -->
<h2>Jouez contre l'ordi</h2> <!-- Sous-titre -->
<div id="message" style="font-size:1.2em;margin:1em 0;">
À vous (X) <!-- Message qui indique à qui le tour -->
</div>
<button id="reset" class="btn btn-warning" style="margin-bottom:1em;">
Recommencer <!-- Bouton pour rejouer depuis le début -->
</button>
<div id="board" style="display:grid;grid-template-columns:repeat(3,1fr);gap:5px;">
<?php for ($i = 0; $i < 9; $i++): ?> <!-- 9 cases en boucle -->
<div class="cell" data-index="<?= $i ?>"
style="aspect-ratio:1;border:1px solid #333;display:flex;align-items:center;justify-content:center;font-size:2em;cursor:pointer;">
<!-- Case vide, utilisable au clic -->
</div>
<?php endfor; ?>
</div>
</div>


<script>
// État du jeu
const boardEl = document.getElementById('board'); // Grille des cases
const msgEl = document.getElementById('message'); // Zone de message
const reset = document.getElementById('reset'); // Bouton recommencer
let board = Array(9).fill(''); // Tableau qui stocke X, O ou vide
let turn = 'X'; // On commence avec X
const wins = [ // Combinaisons gagnantes
[0,1,2],[3,4,5],[6,7,8], // 3 lignes
[0,3,6],[1,4,7],[2,5,8], // 3 colonnes
[0,4,8],[2,4,6] // 2 diagonales
];


// Vérifie si un joueur a gagné
const win = sym => wins.some(line => line.every(i => board[i] === sym));


// Affiche les X et O sur la grille
const render = () => {
board.forEach((v, i) => {
const cell = boardEl.children[i]; // Récupère la case i
if (v === 'X') {
cell.innerHTML = `<img src="<?= URL_ROOT ?>/img/croix.png" style="width:80%;">`; // Affiche croix
} else if (v === 'O') {
cell.innerHTML = `<img src="<?= URL_ROOT ?>/img/rond.png" style="width:80%;">`; // Affiche rond
} else {
cell.innerHTML = ''; // Laisse vide
}
});
};


// Tour de l'ordinateur après 2 secondes
const ai = () => {
// Trouve les cases libres
const free = board.map((v,i) => v === '' ? i : null).filter(i => i != null);
if (!free.length) return; // Plus de coup possible
const choice = free[Math.floor(Math.random() * free.length)]; // Choix aléatoire
board[choice] = 'O'; // Place le rond
render(); // Mets à jour l'affichage
if (win('O')) {
msgEl.textContent = 'Ordinateur a gagné!'; // Message victoire ordi
boardEl.style.pointerEvents = 'none'; // Bloque la grille
} else if (!board.includes('')) {
msgEl.textContent = 'Match nul!'; // Message match nul
} else {
turn = 'X';
msgEl.textContent = 'À vous (X)'; // Tour du joueur
}
};


// Clique du joueur
boardEl.addEventListener('click', e => {
const i = +e.target.dataset.index; // Index de la case cliquée
if (board[i] || turn !== 'X') return; // Ignorer si occupée ou pas le tour
board[i] = 'X'; // Place la croix
render(); // Mets à jour
if (win('X')) {
msgEl.textContent = 'Vous avez gagné!';
boardEl.style.pointerEvents = 'none'; // Bloque la grille
} else if (!board.includes('')) {
msgEl.textContent = 'Match nul!';
} else {
turn = 'O';
msgEl.textContent = 'Ordinateur...';
setTimeout(ai, 2000); // Lance l'ordi après 2 secondes
}
});


// Réinitialisation du jeu
reset.addEventListener('click', () => {
board.fill(''); // Vide le tableau
turn = 'X'; // X commence
msgEl.textContent = 'À vous (X)';
boardEl.style.pointerEvents = 'auto'; // Débloque la grille
render(); // Mets à jour
});
</script>


<?php include '../footer.php'; ?> <!-- Pied de page -->
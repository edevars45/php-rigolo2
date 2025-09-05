<?php
// transformateur-json.php
header('Content-Type: application/json; charset=utf-8');

$csvFile = __DIR__ . '/commande.csv';
if (!is_file($csvFile)) {
    http_response_code(404);
    echo json_encode(['data' => [], 'error' => 'Fichier CSV introuvable']);
    exit;
}

/* --- helpers encodage + nettoyage --- */
function to_utf8($s) {
    if ($s === null) return '';
    // Si déjà UTF-8, on garde. Sinon on convertit depuis ISO-8859-1 / CP1252
    if (!mb_detect_encoding($s, 'UTF-8', true)) {
        $s = mb_convert_encoding($s, 'UTF-8', 'Windows-1252, ISO-8859-1, ISO-8859-15');
    }
    return $s;
}
function clean_text($s) {
    $s = trim((string)$s);
    if ($s === '__') $s = '';            // ton placeholder moche -> vide
    $s = preg_replace('~\s+~', ' ', $s); // espaces multiples -> simple
    return to_utf8($s);
}
function clean_phone($s) {
    $s = trim((string)$s);
    // uniformise petits formats type "06.15.20.02.46" / "07-81-36-21-70"
    $digits = preg_replace('~\D+~', '', $s);
    return $digits; // si tu veux garder la mise en forme FR, on peut faire mieux ensuite
}

/* --- Détection séparateur (première ligne) --- */
$fh = fopen($csvFile, 'r');
if (!$fh) {
    echo json_encode(['data' => [], 'error' => 'Impossible d’ouvrir le CSV']);
    exit;
}
$firstLine = fgets($fh);
rewind($fh);

$sepCandidates = [',',';','\t','|'];
$sep = ';'; $bestCount = -1;
foreach ($sepCandidates as $cand) {
    $count = substr_count($firstLine, $cand);
    if ($count > $bestCount) { $bestCount = $count; $sep = $cand; }
}

/* --- Lecture CSV --- */
$data = [];
$header = fgetcsv($fh, 0, $sep); // saute l’en-tête
while (($row = fgetcsv($fh, 0, $sep)) !== false) {
    if (!$row || (count($row) === 1 && trim($row[0]) === '')) continue;

    // Indices adaptés à ton CSV : id=0, prénom=8, nom=9, tel=12
    $id     = clean_text($row[0]  ?? '');
    $nom    = clean_text($row[9]  ?? '');
    $prenom = clean_text($row[8]  ?? '');
    $tel    = clean_phone($row[12] ?? '');

    $data[] = [$id, $nom, $prenom, $tel];
}
fclose($fh);

/* --- Réponse DataTables --- */
echo json_encode(['data' => $data], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

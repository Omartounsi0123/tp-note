<?php

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17, "Yassine" => 8, "Ines" => 12];

function afficherNotes(array $notes): void {
    foreach ($notes as $n) {
        echo $n . "<br>";
    }
}

function sommeNotes(array $notes): int {
    return array_sum($notes);
}

function notesAdmis(array $notes, int $seuil = 10): array {
    return array_filter($notes, fn($n) => $n >= $seuil);
}

function trierNotes(array $notes): array {
    sort($notes);
    return $notes;
}

function ajouterBonus(array $notes, int $bonus = 1): array {
    return array_map(fn($n) => $n + $bonus, $notes);
}

function moyenne(array $notes): float {
    return array_sum($notes) / count($notes);
}

afficherNotes($notes);

echo sommeNotes($notes);

print_r(notesAdmis($notes));

print_r(trierNotes($notes));

print_r(ajouterBonus($notes));

echo moyenne($notes);

?>
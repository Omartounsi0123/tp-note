<?php
require_once "config.php";

require_once "fonctions.php";

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17, "Yassine" => 8, "Ines" => 12];

afficherNotes($notes);

echo sommeNotes($notes);

echo "<br>";

echo moyenne($notes);

print_r(notesAdmis($notes));

print_r(trierNotes($notes));

print_r(ajouterBonus($notes));
?>

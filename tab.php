<?php
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];

foreach ($notes as $n) {
echo $n . "<br>";
}
$res= array_sum($notes);
echo $res;

$admis = array_filter($notes, fn($n) => $n >= 10);
print_r($admis);
sort($notes);
print_r($notes);

$doubles = array_map(fn($n) => $n + 1,$notes
);
print_r($doubles);

function moyenne($notes) {
    return array_sum($notes) / count($notes);
}
echo moyenne($notes);

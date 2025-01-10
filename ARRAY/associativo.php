<?php

$array = [
    "nome" => [
        "arturo",
        "franca",
        "giulia"
        ],
    "stato" => [
        "ohio",
        "carolina",
        "virginia",
        "texas"
    ],
    "citta" => "Ferrara"
];
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>";

print count($array['nome']);
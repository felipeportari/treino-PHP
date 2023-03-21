<?php


$idades = [15, 46, 75, 34, 23];


$ie = 0;

for ($i = 0; $i < count($idades); $i++) {
    $ie = $ie + $idades[$i];
    echo $ie . PHP_EOL;
}


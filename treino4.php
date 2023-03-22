<?php

$pati = 5;


for ($i = $pati; $i > 0; $i--) {
    $e = $i - 1;
    if ($i == 1) {
        echo "$i patinho foi passear
    Além das montanhas para brincar
     A mamãe gritou: Quá, quá, quá, quá
    Mas só $e patinho voltou de lá" . PHP_EOL;
    } elseif ($i == 2) {
        echo "$i patinhos foram passear
        Além das montanhas para brincar
        A mamãe gritou: Quá, quá, quá, quá
        Mas nenhum patinho voltou de lá..." . PHP_EOL;
    } else {
        echo "$i patinhos foram passear
            Além das montanhas para brincar
            A mamãe gritou: Quá, quá, quá, quá
            Mas só $e patinhos voltaram de lá" . PHP_EOL;
    }
}

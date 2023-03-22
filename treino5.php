<?php

$valor = 0;
$metragem = 0;

while ($valor <= 0) {
    $valor = readline('Digite um valor positivo maior que 0: ');
}

echo "1 = milímetros" . PHP_EOL;
echo "2 = centímetros" . PHP_EOL;
echo "3 = metros" . PHP_EOL;
echo "4 = quilômetros" . PHP_EOL;


while ($metragem != 1 && $metragem != 2 && $metragem != 3 && $metragem != 4) {
    $metragem = readline('Escolha uma unidade de metragem: ');
}

switch ($metragem) {
    case 1:
        echo 'milímetros para centímetros: ' . $valor / 10 . PHP_EOL;
        echo 'milímetros para metros: ' . $valor / 1000 . PHP_EOL;
        echo 'milímetros para quiômetros: ' . $valor / 1000000 . PHP_EOL;
        break;

    case 2:
        echo 'centímetros para milímetros : ' . $valor * 10 . PHP_EOL;
        echo 'centímetros para metros: ' . $valor / 100 . PHP_EOL;
        echo 'centímetros para quilômetros: ' . $valor / 100000 . PHP_EOL;
        break;

    case 3:
        echo 'metros para milímetros : ' . $valor * 1000 . PHP_EOL;
        echo 'metros para centímetros: ' . $valor * 100 . PHP_EOL;
        echo 'metros para quilômetros: ' . $valor / 1000 . PHP_EOL;
        break;

    case 4:
        echo 'quilômetros para milímetros : ' . $valor * 1000000 . PHP_EOL;
        echo 'quilômetros para centímetros: ' . $valor * 100000 . PHP_EOL;
        echo 'quilômetros para metros: ' . $valor * 1000 . PHP_EOL;
        break;
}

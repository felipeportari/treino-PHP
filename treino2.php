<?php

$chute = 5;
$u = 0;

echo "o número chutado é $chute" . PHP_EOL;

while ($chute != $u) {
    $u = rand(1, 10);

   
    echo "o número randomico é $u" . PHP_EOL;

    if ($chute == $u) {
        echo "acertou!";
    } else if ($chute > $u) {
        echo "$chute é maior que $u". PHP_EOL;
    } else {
        echo "$chute é menor que $u". PHP_EOL;
    }
}

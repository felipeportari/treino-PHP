<?php
$nomes = ['Marcos', 'Guilherme', 'Jonas', 'Yohan', 'kaio', 'lucas', 'Igor'];

$cont = count($nomes) - 1;

$rand = rand(0, $cont);

print_r($nomes[$rand]);
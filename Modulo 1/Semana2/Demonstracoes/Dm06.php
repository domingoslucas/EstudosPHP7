<?php

//Atribuição por referência

$nome = 'João';
$nome2 = &$nome;
$nome2 = 'Maria';

//$nome continua com o valor João
echo $nome;
